function payNow(order_no){
    $this = $(this);
    var formData = {
        'no' : order_no,
    };
    var method = $this.closest('input-group').find('select[name=method]').val();
    if (!method) { 
        toastr['error']( lang.please_select_payment_method );
        return false; 
    }
    axios.post(BASE_URL+'api/orders/retry', formData)
        .then(function (response) {
            if(response.data.code == 20001) {
                $this.prop('disabled',true);
                $this.focus().addClass('loading');

                var order_no = response.data.data.no;
                var amount = response.data.data.total_amount;

                processing(); //获取订单号后才打开监听功能

                /*if(method == 'alipay') { //检查用户选择的付款方式

                }*/
                axios.get(BASE_URL+'api/aligateway/pay?no='+ order_no + '&total_amount=' + amount)
                    .then(function (response) {
                        if(response.data.code == 20001) {
                            window.open(response.data.data.pay_url);  // 跳转至新建标签页进行支付
                        } else {
                            toastr['error'](response.data.msg);
                            //window.location.href = BASE_URL + 'my-account/order/' + order_no; //关闭此代码因为在监听功能已有页面转跳功能
                        }
                        console.log(response);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            } else {
                toastr['error'](response.data.msg);
            }
        })
        .catch(function (error) {
            console.log(error);
        });
}

function processing() {
    ws = new WebSocket("ws://120.79.173.163:10086");
    // 客户端与服务端建立连接时触发
    ws.onopen = function(e) {
        console.log(e);
    };
    // 客户端接收服务端数据时触发
    ws.onmessage = function(e) {
        //console.log(e);
        const data = JSON.parse(e.data);
        console.log(data);
        // if(data.order != null) {
        //     window.location.href = BASE_URL + 'my-account/order/' + data.order.no;
        // }
        // 提示信息并跳转
        switch (data.mode) {
            case 'server_message':
                if(data.data.status == 1) {
                    toastr['success']( lang.payment_success );
                }else{
                    toastr['error']( lang.payment_failed );
                }
                window.location.href = BASE_URL + 'my-account/order/' + data.data.no;
                break;
            default: // heart
                console.log(data);
                break;
        }
    };
    // 通讯关闭时触发
    ws.close = function() {
        window.location.href = BASE_URL + 'my-account/order/' + data.data.no;
    }
}
