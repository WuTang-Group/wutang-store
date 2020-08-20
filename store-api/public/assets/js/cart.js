var Cart = {};

Cart.on = function(eventName, callback) {
  if (!Cart.callbacks[eventName]) Cart.callbacks[eventName] = [];
    Cart.callbacks[eventName].push(callback);
  return Cart;
};

Cart.trigger = function(eventName, args) {
  if (Cart.callbacks[eventName]) {
    for (var i = 0; i<Cart.callbacks[eventName].length; i++) {
      Cart.callbacks[eventName][i](args || {});
    }
  }
  return Cart;
};

Cart.save = function() {
  Cookies.set('_WTSC',JSON.stringify(Cart.items));
  Cart.trigger('saved');
  return Cart;
};

Cart.empty =  function() {
  Cart.items = [];
  Cart.trigger('emptied');
  Cart.save();
  return Cart;
};

Cart.indexOfItem = function(id) {
  for (var i = 0; i<Cart.items.length; i++) {
    if (Cart.items[i].id===id) return i;
  }
  return null;
};

Cart.removeEmptyLines = function() {
  newItems = [];
  for (var i = 0; i < Cart.items.length; i++) {
    if (Cart.items[i].quantity > 0) newItems.push(Cart.items[i]);
  }
  Cart.items = newItems;
  return Cart;
};

Cart.addItem = function(item) {
  if (!item.quantity) item.quantity = 1;
  var index = Cart.indexOfItem(item.id);
  if (index === null) {
    Cart.items.push(item);
  } else {
    toastr['error']('您购物车已有该商品');
    return Cart;
  }
  Cart.removeEmptyLines();
  if (item.quantity > 0) {
    Cart.trigger('added', {item: item});
  } else {
    Cart.trigger('removed', {item: item});
  }
  Cart.save();
  return Cart;
};

Cart.removeItem = function(item) {
  var index = Cart.indexOfItem(item.id);
  if(index !== null) {
    Cart.items.splice(index,1);
  }
  Cart.save();
  return Cart;
};

Cart.init = function() {
  var items = Cookies.get('_WTSC');
  if (items) {
    Cart.items = JSON.parse(items);
  } else {
    Cart.items = [];
  }
  Cart.callbacks = {};
  return Cart;
}

Cart.initJQuery = function() {
  Cart.init();
  return Cart;
};
