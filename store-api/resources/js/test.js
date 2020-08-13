ws = new WebSocket("ws://127.0.0.1:10086");
// 客户端与服务端建立连接时触发
ws.onopen = function() {
    // 客户端向服务端发送数据
    ws.send('{"mode":"chats","order_id":"375"}');
};
// 客户端接收服务端数据时触发
ws.onmessage = function(e) {
    console.log(e);
    const data = JSON.parse(e.data);
    console.log(data)
};
// 通讯关闭时触发
// ws.close = function() {
//
// }

