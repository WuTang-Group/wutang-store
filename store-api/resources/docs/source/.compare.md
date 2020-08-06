---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_77797615aeaa4fce9a94150989aed46f -->
## ResponseCode explain
本方法仅作返回code通用说明(无其他作用)

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/response_code?10001=distinctio&10003=voluptas&20001=quia&40001=officia&40003=hic&40004=non&40005=nobis&50001=sed" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/response_code"
);

let params = {
    "10001": "distinctio",
    "10003": "voluptas",
    "20001": "quia",
    "40001": "officia",
    "40003": "hic",
    "40004": "non",
    "40005": "nobis",
    "50001": "sed",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/response_code`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `10001` |  optional  | 参数有误
    `10003` |  optional  | 数据有误
    `20001` |  optional  | 操作成功
    `40001` |  optional  | 禁止访问
    `40003` |  optional  | 权限不足
    `40004` |  optional  | 查询为空
    `40005` |  optional  | 请求过期
    `50001` |  optional  | 操作失败

<!-- END_77797615aeaa4fce9a94150989aed46f -->

<!-- START_3266c06bb58be7f09822eec02a02823c -->
## Generate captcha code and save to cache
生成验证码并写入缓存

> Example request:

```bash
curl -X POST \
    "http://localhost/api/captchas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/captchas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/captchas`


<!-- END_3266c06bb58be7f09822eec02a02823c -->

<!-- START_2e1c96dcffcfe7e0eb58d6408f1d619e -->
## Register user
用户注册

> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/register?name=voluptatem&username=iusto&password=voluptas&password_confirmation=ducimus&captcha_key=non&captcha_code=aut&password_question_id=eos&password_answer=nesciunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/register"
);

let params = {
    "name": "voluptatem",
    "username": "iusto",
    "password": "voluptas",
    "password_confirmation": "ducimus",
    "captcha_key": "non",
    "captcha_code": "aut",
    "password_question_id": "eos",
    "password_answer": "nesciunt",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/register`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `name` |  required  | 姓名
    `username` |  required  | 账号(允许:英文字符/数字/字符+数字)
    `password` |  required  | 密码
    `password_confirmation` |  required  | 确认密码
    `captcha_key` |  required  | 验证码的key
    `captcha_code` |  required  | 验证码的code
    `password_question_id` |  required  | 密保问题ID
    `password_answer` |  required  | 密保问题答案

<!-- END_2e1c96dcffcfe7e0eb58d6408f1d619e -->

<!-- START_a925a8d22b3615f12fca79456d286859 -->
## Get a JWT via given credentials.

通过登录信息获取JWT凭证

> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/login?username=qui&password=illum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/login"
);

let params = {
    "username": "qui",
    "password": "illum",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/login`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `username` |  required  | 用户名
    `password` |  required  | 密码

<!-- END_a925a8d22b3615f12fca79456d286859 -->

<!-- START_d69bbb4b1b3b426bec3e1c11b029c116 -->
## Get password question list
获取密保问题列表

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/question_list" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/question_list"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/question_list`


<!-- END_d69bbb4b1b3b426bec3e1c11b029c116 -->

<!-- START_de9212b4bd813e07f73b53cc3bd13088 -->
## get user password question
获取用户的密保问题

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/questions?username=quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/questions"
);

let params = {
    "username": "quia",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/questions`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `username` |  required  | 用户名

<!-- END_de9212b4bd813e07f73b53cc3bd13088 -->

<!-- START_20d5f227169180dbf935585e0387f6c3 -->
## reset password
重置密码

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/password_reset?username=dolorem&password_question_id=reiciendis&password_answer=natus&password=molestias&password_confirmation=est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/password_reset"
);

let params = {
    "username": "dolorem",
    "password_question_id": "reiciendis",
    "password_answer": "natus",
    "password": "molestias",
    "password_confirmation": "est",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/password_reset`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `username` |  required  | 用户名
    `password_question_id` |  required  | 密保问题ID
    `password_answer` |  required  | 密保问题的答案
    `password` |  required  | 密码
    `password_confirmation` |  required  | 二次确认密码

<!-- END_20d5f227169180dbf935585e0387f6c3 -->

<!-- START_bd1f2555bc6633390fa0cd3902b6ea26 -->
## 支付宝发起支付

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/alipay/pay" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/alipay/pay"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/alipay/pay`


<!-- END_bd1f2555bc6633390fa0cd3902b6ea26 -->

<!-- START_43e96a9060fca58becd5a755b4e3aa4e -->
## 支付宝前端回调页面

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/alipay/return" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/alipay/return"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/alipay/return`


<!-- END_43e96a9060fca58becd5a755b4e3aa4e -->

<!-- START_c30352faca2b1d81fafd84d7c4a79cdd -->
## 支付宝服务器端回调

> Example request:

```bash
curl -X POST \
    "http://localhost/api/alipay/notify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/alipay/notify"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/alipay/notify`


<!-- END_c30352faca2b1d81fafd84d7c4a79cdd -->

<!-- START_b2e091365f9f03862a73b53b8a32eb41 -->
## Request the unionpay
银联支付发起请求

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/unionpay/pay?no=sunt&product_name=et&total_amount=blanditiis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/unionpay/pay"
);

let params = {
    "no": "sunt",
    "product_name": "et",
    "total_amount": "blanditiis",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/unionpay/pay`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `no` |  required  | 订单号
    `product_name` |  required  | 商品名称
    `total_amount` |  required  | 总金额

<!-- END_b2e091365f9f03862a73b53b8a32eb41 -->

<!-- START_94ec51bb78f31dedba309417c651b8ad -->
## Return unionpay results
银联支付返回结果

> Example request:

```bash
curl -X POST \
    "http://localhost/api/unionpay/return" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/unionpay/return"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/unionpay/return`


<!-- END_94ec51bb78f31dedba309417c651b8ad -->

<!-- START_5437da007e01a50eb566d5a65e9dfb9b -->
## Notify unionpay results
通知银联支付结果

> Example request:

```bash
curl -X POST \
    "http://localhost/api/unionpay/notify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/unionpay/notify"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/unionpay/notify`


<!-- END_5437da007e01a50eb566d5a65e9dfb9b -->

<!-- START_b149d65d620129d1a17607c81a70c010 -->
## Log the user out (Invalidate the token).

注销用户

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/auth/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/auth/logout`


<!-- END_b149d65d620129d1a17607c81a70c010 -->

<!-- START_8e912231ed40ae5cbf3bf38f4c613779 -->
## Refresh a token.

刷新token

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/auth/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/auth/refresh`


<!-- END_8e912231ed40ae5cbf3bf38f4c613779 -->

<!-- START_7c4c8c21aa8bf7ffa0ae617fb274806d -->
## Get the authenticated User.

获取通过身份验证的用户

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/auth/me" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/me"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/auth/me`


<!-- END_7c4c8c21aa8bf7ffa0ae617fb274806d -->

<!-- START_2b6e5a4b188cb183c7e59558cce36cb6 -->
## Query user list(Admin)
查询用户数据列表

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/user?username=sit&page=inventore&page_limit=soluta" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user"
);

let params = {
    "username": "sit",
    "page": "inventore",
    "page_limit": "soluta",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/user`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `username` |  optional  | 用户名(选填)
    `page` |  optional  | 页码，默认1
    `page_limit` |  optional  | 每页数量，默认20

<!-- END_2b6e5a4b188cb183c7e59558cce36cb6 -->

<!-- START_423f5eae0641e400f92081d60646f9b7 -->
## Edit user(Admin)
修改用户资料

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/user/1?name=eius&email=sequi&phone=ut&avatar=est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user/1"
);

let params = {
    "name": "eius",
    "email": "sequi",
    "phone": "ut",
    "avatar": "est",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/user/{username}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `name` |  optional  | 姓名
    `email` |  optional  | 邮箱
    `phone` |  optional  | 手机号
    `avatar` |  optional  | 头像

<!-- END_423f5eae0641e400f92081d60646f9b7 -->

<!-- START_ecf6bb0e605df556b061fec5590511e8 -->
## delete User(Admin)
删除用户

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/user/{username}`


<!-- END_ecf6bb0e605df556b061fec5590511e8 -->

<!-- START_08c38be52ff59ddad83e83f4fbda6646 -->
## change password(Admin)
修改密码

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/user/reset_password/1?oldPassword=perferendis&newPassword=error&newPassword_confirmation=expedita" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user/reset_password/1"
);

let params = {
    "oldPassword": "perferendis",
    "newPassword": "error",
    "newPassword_confirmation": "expedita",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/user/reset_password/{username}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `oldPassword` |  required  | 旧密码
    `newPassword` |  required  | 新密码
    `newPassword_confirmation` |  required  | 确认密码

<!-- END_08c38be52ff59ddad83e83f4fbda6646 -->

<!-- START_5eaa718aa49e18482a9217806c4a5d1b -->
## Get user info
获取单个用户信息

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/get_user?hash_id=saepe" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/get_user"
);

let params = {
    "hash_id": "saepe",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/get_user`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `hash_id` |  required  | hash加密的ID

<!-- END_5eaa718aa49e18482a9217806c4a5d1b -->

<!-- START_157e0e734e5b19915b7f41bafbe39486 -->
## Query user address list
 用户地址列表

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/user_addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_addresses"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/user_addresses`


<!-- END_157e0e734e5b19915b7f41bafbe39486 -->

<!-- START_ea009b31c2e7270334c8f572f3ad4561 -->
## Create user address

> Example request:

```bash
curl -X POST \
    "http://localhost/api/user_addresses?province=ut&city=temporibus&district=neque&address=quia&zip=voluptatibus&contact_name=tenetur&contact_phone=fuga" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_addresses"
);

let params = {
    "province": "ut",
    "city": "temporibus",
    "district": "neque",
    "address": "quia",
    "zip": "voluptatibus",
    "contact_name": "tenetur",
    "contact_phone": "fuga",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user_addresses`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `province` |  required  | 省
    `city` |  required  | 市
    `district` |  required  | 区
    `address` |  required  | 详细地址
    `zip` |  required  | 邮编
    `contact_name` |  required  | 联系人
    `contact_phone` |  required  | 手机号

<!-- END_ea009b31c2e7270334c8f572f3ad4561 -->

<!-- START_58d901fe49390c7afe94755dd24b0c3c -->
## Update user address
编辑用户地址

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/user_addresses/1?address_id=aut&province=deserunt&city=nihil&district=dolore&address=reprehenderit&zip=iure&contact_name=et&contact_phone=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_addresses/1"
);

let params = {
    "address_id": "aut",
    "province": "deserunt",
    "city": "nihil",
    "district": "dolore",
    "address": "reprehenderit",
    "zip": "iure",
    "contact_name": "et",
    "contact_phone": "et",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/user_addresses/{address_id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `address_id` |  required  | address表id
    `province` |  required  | 省
    `city` |  required  | 市
    `district` |  required  | 区
    `address` |  required  | 详细地址
    `zip` |  required  | 邮编
    `contact_name` |  required  | 联系人
    `contact_phone` |  required  | 手机号

<!-- END_58d901fe49390c7afe94755dd24b0c3c -->

<!-- START_afef23553387f635192dbbac6f4f2675 -->
## Destroy user address
删除用户地址

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/user_addresses/1?address_id=quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_addresses/1"
);

let params = {
    "address_id": "quia",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/user_addresses/{address_id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `address_id` |  required  | address表id

<!-- END_afef23553387f635192dbbac6f4f2675 -->

<!-- START_0dfc43254177dc34e3f52ec8dd6ee2bd -->
## User profile list
用户资料信息

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/user_profiles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_profiles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/user_profiles`


<!-- END_0dfc43254177dc34e3f52ec8dd6ee2bd -->

<!-- START_b246eeb9e5b21565d6ab47d209bae638 -->
## Update user profile
编辑用户资料

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/user_profiles/1?profile_id=ad" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_profiles/1"
);

let params = {
    "profile_id": "ad",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/user_profiles/{profile_id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `profile_id` |  required  | profile表id

<!-- END_b246eeb9e5b21565d6ab47d209bae638 -->

<!-- START_b349ce30d75353e0df82af17d0bb98d2 -->
## Destroy user profile
删除用户资料

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/user_profiles/1?profile_id=dolor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_profiles/1"
);

let params = {
    "profile_id": "dolor",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/user_profiles/{profile}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `profile_id` |  required  | profile表id

<!-- END_b349ce30d75353e0df82af17d0bb98d2 -->

<!-- START_d806b68430c689d78cb57fd8edab78a0 -->
## api/invitation/code
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/invitation/code" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/invitation/code"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/invitation/code`


<!-- END_d806b68430c689d78cb57fd8edab78a0 -->

<!-- START_8c2704ce289f228543a4812cd828f600 -->
## bind code
绑定用户与邀请码

> Example request:

```bash
curl -X POST \
    "http://localhost/api/invitation/code?phone=et&code=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/invitation/code"
);

let params = {
    "phone": "et",
    "code": "et",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/invitation/code`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `phone` |  required  | 手机号
    `code` |  required  | 邀请码

<!-- END_8c2704ce289f228543a4812cd828f600 -->

<!-- START_095020a001574dfac37a634772a2519c -->
## Get user phone
获取用户的手机号

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/invitation/phone?page=atque&page_limit=at" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/invitation/phone"
);

let params = {
    "page": "atque",
    "page_limit": "at",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/invitation/phone`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | 页码
    `page_limit` |  optional  | 页数

<!-- END_095020a001574dfac37a634772a2519c -->

<!-- START_40a9d7f4b53f15ee8f8fec5cd5294c55 -->
## get product category list
获取产品分类列表

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/product_categories?page=facilis&page_limit=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product_categories"
);

let params = {
    "page": "facilis",
    "page_limit": "et",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/product_categories`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | 页码
    `page_limit` |  optional  | 每页数量

<!-- END_40a9d7f4b53f15ee8f8fec5cd5294c55 -->

<!-- START_55c5a0853ea113d314fbe6bb22c7a32a -->
## create product category
新建产品分类

> Example request:

```bash
curl -X POST \
    "http://localhost/api/product_categories?title=quia&title_en=iure&describe=dolore&describe_en=optio&banner=autem&description=fuga&description_en=ab&img=quia&parent_id=deleniti" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product_categories"
);

let params = {
    "title": "quia",
    "title_en": "iure",
    "describe": "dolore",
    "describe_en": "optio",
    "banner": "autem",
    "description": "fuga",
    "description_en": "ab",
    "img": "quia",
    "parent_id": "deleniti",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/product_categories`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `title` |  required  | 分类名称
    `title_en` |  optional  | 分类英文名称
    `describe` |  optional  | 分类描述
    `describe_en` |  optional  | 英文分类描述
    `banner` |  optional  | 分类banner图
    `description` |  optional  | 分类简介
    `description_en` |  optional  | 分类英文简介
    `img` |  optional  | 分类简介图
    `parent_id` |  optional  | 上级分类ID

<!-- END_55c5a0853ea113d314fbe6bb22c7a32a -->

<!-- START_5185fa87570dc2eb783a3745022ee58c -->
## edit product category
编辑产品分类

> Example request:

```bash
curl -X POST \
    "http://localhost/api/product_categories/1?title=fuga&title_en=nobis&describe=impedit&describe_en=dicta&banner=sit&description=harum&description_en=optio&img=aut&parent_id=eius" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product_categories/1"
);

let params = {
    "title": "fuga",
    "title_en": "nobis",
    "describe": "impedit",
    "describe_en": "dicta",
    "banner": "sit",
    "description": "harum",
    "description_en": "optio",
    "img": "aut",
    "parent_id": "eius",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/product_categories/{productCategoriesId}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `title` |  optional  | 分类名称
    `title_en` |  optional  | 分类英文名称
    `describe` |  optional  | 分类描述
    `describe_en` |  optional  | 英文分类描述
    `banner` |  optional  | 分类banner图
    `description` |  optional  | 分类简介
    `description_en` |  optional  | 分类英文简介
    `img` |  optional  | 分类简介图
    `parent_id` |  optional  | 上级分类ID

<!-- END_5185fa87570dc2eb783a3745022ee58c -->

<!-- START_6c421bb89a5181c9af9e9d448422d062 -->
## delete product category
删除产品分类

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/product_categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product_categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/product_categories/{productCategoriesId}`


<!-- END_6c421bb89a5181c9af9e9d448422d062 -->

<!-- START_6e739b5be973e6341308813d22c20e38 -->
## Get product category stoies
获取产品分类故事

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/category_stories?page=magni&page_limit=quidem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category_stories"
);

let params = {
    "page": "magni",
    "page_limit": "quidem",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/category_stories`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | 页码
    `page_limit` |  optional  | 没页数量

<!-- END_6e739b5be973e6341308813d22c20e38 -->

<!-- START_fd1bfb3833144b67103d359b6bdff0ef -->
## Create product category story
添加产品分类故事

> Example request:

```bash
curl -X POST \
    "http://localhost/api/category_stories?title=minus&title_en=nisi&description=est&description_en=voluptatum&banner=libero&product_category_id=quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category_stories"
);

let params = {
    "title": "minus",
    "title_en": "nisi",
    "description": "est",
    "description_en": "voluptatum",
    "banner": "libero",
    "product_category_id": "quia",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/category_stories`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `title` |  required  | 分类故事名称
    `title_en` |  optional  | 英文故事名称
    `description` |  optional  | 分类简介
    `description_en` |  optional  | 英文分类简介
    `banner` |  optional  | 故事banner
    `product_category_id` |  optional  | 属于产品类ID

<!-- END_fd1bfb3833144b67103d359b6bdff0ef -->

<!-- START_a4f26166128204b23ca18d5bd2ab05af -->
## edit product category story
编辑产品分类故事

> Example request:

```bash
curl -X POST \
    "http://localhost/api/category_stories/1?title=libero&title_en=consequatur&description=quo&description_en=tempora&banner=ducimus&product_category_id=ratione" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category_stories/1"
);

let params = {
    "title": "libero",
    "title_en": "consequatur",
    "description": "quo",
    "description_en": "tempora",
    "banner": "ducimus",
    "product_category_id": "ratione",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/category_stories/{CategoriesStoriesId}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `title` |  optional  | 分类故事名称
    `title_en` |  optional  | 英文故事名称
    `description` |  optional  | 分类简介
    `description_en` |  optional  | 英文分类简介
    `banner` |  optional  | 故事banner
    `product_category_id` |  optional  | 属于产品类ID

<!-- END_a4f26166128204b23ca18d5bd2ab05af -->

<!-- START_1f8ac1234eac3c24495d0dba65c51750 -->
## Delete product category story
删除产品分类故事

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/category_stories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category_stories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/category_stories/{CategoriesStoriesId}`


<!-- END_1f8ac1234eac3c24495d0dba65c51750 -->

<!-- START_dc538d69a8586a7a3c36d4393cee42e6 -->
## Get product list
获取产品列表

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/product?page=qui&page_limit=eos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product"
);

let params = {
    "page": "qui",
    "page_limit": "eos",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/product`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | 页码
    `page_limit` |  optional  | 每页数量

<!-- END_dc538d69a8586a7a3c36d4393cee42e6 -->

<!-- START_2d62ba7cf16a7d6db447375e13e86c34 -->
## Create product
新建商品

> Example request:

```bash
curl -X POST \
    "http://localhost/api/product?product_category_id=qui&product_name=quibusdam&product_name_en=iure&thumbnail=cupiditate&slug=sed&short_description=nobis&short_description_en=ab&price=assumenda&sale_price=veniam&stock=molestiae&seo_title=dolores&seo_keyword=quis&seo_description=reiciendis&benefit=et&benefit_en=quia&tech_description=nostrum&tech_description_en=iure&description=doloribus&description_en=ut&usage=ut&usage_en=veritatis&main_image=minus&main_image_2=quod&benefit_image=placeat&product_video=ut&status=voluptas&rating=amet&sold_count=possimus&review_count=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product"
);

let params = {
    "product_category_id": "qui",
    "product_name": "quibusdam",
    "product_name_en": "iure",
    "thumbnail": "cupiditate",
    "slug": "sed",
    "short_description": "nobis",
    "short_description_en": "ab",
    "price": "assumenda",
    "sale_price": "veniam",
    "stock": "molestiae",
    "seo_title": "dolores",
    "seo_keyword": "quis",
    "seo_description": "reiciendis",
    "benefit": "et",
    "benefit_en": "quia",
    "tech_description": "nostrum",
    "tech_description_en": "iure",
    "description": "doloribus",
    "description_en": "ut",
    "usage": "ut",
    "usage_en": "veritatis",
    "main_image": "minus",
    "main_image_2": "quod",
    "benefit_image": "placeat",
    "product_video": "ut",
    "status": "voluptas",
    "rating": "amet",
    "sold_count": "possimus",
    "review_count": "et",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/product`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `product_category_id` |  optional  | 所属产品分类id
    `product_name` |  required  | 商品名称
    `product_name_en` |  required  | 商品英文名称
    `thumbnail` |  optional  | 产品缩略图
    `slug` |  optional  | 导航名称:即url
    `short_description` |  optional  | 简短介绍
    `short_description_en` |  optional  | 英文简短介绍
    `price` |  required  | 价格
    `sale_price` |  required  | 优惠价
    `stock` |  required  | 库存量
    `seo_title` |  optional  | 网页title
    `seo_keyword` |  optional  | 网页关键字
    `seo_description` |  optional  | 网页描述
    `benefit` |  optional  | 产品功效
    `benefit_en` |  optional  | 英文产品功效
    `tech_description` |  optional  | 科技介绍
    `tech_description_en` |  optional  | 英文科技介绍
    `description` |  optional  | 产品细节
    `description_en` |  optional  | 英文产品细节
    `usage` |  optional  | 使用方法
    `usage_en` |  optional  | 英文使用方法
    `main_image` |  required  | 页面主图
    `main_image_2` |  required  | 页面主图2:用于较低分辨率设备
    `benefit_image` |  optional  | 功效背景图
    `product_video` |  optional  | 产品相关视频
    `status` |  required  | 商品状态：1新品，2畅销，3促销，-1下架
    `rating` |  required  | 平均评分
    `sold_count` |  required  | 销量
    `review_count` |  required  | 评价数量

<!-- END_2d62ba7cf16a7d6db447375e13e86c34 -->

<!-- START_d5e3be7e58053cd0e038f77eb2162635 -->
## Edit product
编辑商品

> Example request:

```bash
curl -X POST \
    "http://localhost/api/product/1?product_category_id=iusto&product_name=tempore&product_name_en=aut&thumbnail=aliquid&slug=voluptatem&short_description=eveniet&short_description_en=eos&price=tempora&sale_price=quos&stock=voluptatibus&seo_title=quia&seo_keyword=id&seo_description=asperiores&benefit=eligendi&benefit_en=adipisci&tech_description=reiciendis&tech_description_en=eius&description=repellendus&description_en=est&usage=quia&usage_en=officia&main_image=aut&main_image_2=aperiam&benefit_image=fuga&product_video=voluptatem&status=et&rating=officiis&sold_count=eum&review_count=illo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product/1"
);

let params = {
    "product_category_id": "iusto",
    "product_name": "tempore",
    "product_name_en": "aut",
    "thumbnail": "aliquid",
    "slug": "voluptatem",
    "short_description": "eveniet",
    "short_description_en": "eos",
    "price": "tempora",
    "sale_price": "quos",
    "stock": "voluptatibus",
    "seo_title": "quia",
    "seo_keyword": "id",
    "seo_description": "asperiores",
    "benefit": "eligendi",
    "benefit_en": "adipisci",
    "tech_description": "reiciendis",
    "tech_description_en": "eius",
    "description": "repellendus",
    "description_en": "est",
    "usage": "quia",
    "usage_en": "officia",
    "main_image": "aut",
    "main_image_2": "aperiam",
    "benefit_image": "fuga",
    "product_video": "voluptatem",
    "status": "et",
    "rating": "officiis",
    "sold_count": "eum",
    "review_count": "illo",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/product/{productId}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `product_category_id` |  optional  | 所属产品分类id
    `product_name` |  optional  | 商品名称
    `product_name_en` |  optional  | 商品英文名称
    `thumbnail` |  optional  | 产品缩略图
    `slug` |  optional  | 导航名称:即url
    `short_description` |  optional  | 简短介绍
    `short_description_en` |  optional  | 英文简短介绍
    `price` |  optional  | 价格
    `sale_price` |  optional  | 优惠价
    `stock` |  optional  | 库存量
    `seo_title` |  optional  | 网页title
    `seo_keyword` |  optional  | 网页关键字
    `seo_description` |  optional  | 网页描述
    `benefit` |  optional  | 产品功效
    `benefit_en` |  optional  | 英文产品功效
    `tech_description` |  optional  | 科技介绍
    `tech_description_en` |  optional  | 英文科技介绍
    `description` |  optional  | 产品细节
    `description_en` |  optional  | 英文产品细节
    `usage` |  optional  | 使用方法
    `usage_en` |  optional  | 英文使用方法
    `main_image` |  optional  | 页面主图
    `main_image_2` |  optional  | 页面主图2:用于较低分辨率设备
    `benefit_image` |  optional  | 功效背景图
    `product_video` |  optional  | 产品相关视频
    `status` |  required  | 商品状态：1新品，2畅销，3促销，-1下架
    `rating` |  required  | 平均评分
    `sold_count` |  optional  | 销量
    `review_count` |  optional  | 评价数量

<!-- END_d5e3be7e58053cd0e038f77eb2162635 -->

<!-- START_c96f9db6d91320655a6d7763d0b54003 -->
## Off the Product
下架产品

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/product/{productId}`


<!-- END_c96f9db6d91320655a6d7763d0b54003 -->

<!-- START_85f5e0416e43baf6efe6798257b42c31 -->
## api/product_sku
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/product_sku" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product_sku"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/product_sku`


<!-- END_85f5e0416e43baf6efe6798257b42c31 -->

<!-- START_70f2617e9fa174a8ec9c6823a9174bfc -->
## api/product_sku
> Example request:

```bash
curl -X POST \
    "http://localhost/api/product_sku" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product_sku"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/product_sku`


<!-- END_70f2617e9fa174a8ec9c6823a9174bfc -->

<!-- START_bc6bcef6cd223698a0404188ebcde37b -->
## api/product_sku/{productSkuId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/product_sku/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product_sku/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/product_sku/{productSkuId}`


<!-- END_bc6bcef6cd223698a0404188ebcde37b -->

<!-- START_29e40e9b2b856861ef5b2b250e965009 -->
## api/product_sku/{productSkuId}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/product_sku/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product_sku/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/product_sku/{productSkuId}`


<!-- END_29e40e9b2b856861ef5b2b250e965009 -->


