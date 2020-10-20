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
[Get Postman Collection](http://store.wutang.com/docs/collection.json)

<!-- END_INFO -->

#[ADMIN-Payment] AlipayBankGateway manage

支付宝网关管理类
Class AlipayBankGatewayController
<!-- START_d20c8a1a027633f62bf5884a456a7ff7 -->
## Request get Alipay bank gateway list
获取支付宝网关-列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/alipay/bank_gateway" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/alipay/bank_gateway"
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/alipay/bank_gateway`


<!-- END_d20c8a1a027633f62bf5884a456a7ff7 -->

<!-- START_0514b1128ad5ffe5fc8388e7a96d4d5a -->
## Request store alipay bank gateway data
请求写入支付宝网关支付数据

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/alipay/bank_gateway" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"items":[{"merch_id":"et","key":"voluptatem","product":"est"}]}'

```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/alipay/bank_gateway"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "items": [
        {
            "merch_id": "et",
            "key": "voluptatem",
            "product": "est"
        }
    ]
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/alipay/bank_gateway`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `items` | array |  required  | 数组名称
        `items.*.merch_id` | string |  required  | 商户编号
        `items.*.key` | string |  required  | 商户密钥
        `items.*.product` | string |  required  | 产品编号
    
<!-- END_0514b1128ad5ffe5fc8388e7a96d4d5a -->

<!-- START_805236e8779a2385b827e5756b64a09b -->
## Request update alipay bank gateway data
请求更新支付宝网关支付数据

> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/admin/alipay/bank_gateway/1?id=et&merch_id=quidem&key=sed&product=consectetur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/alipay/bank_gateway/1"
);

let params = {
    "id": "et",
    "merch_id": "quidem",
    "key": "sed",
    "product": "consectetur",
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
`PUT admin/alipay/bank_gateway/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | id值
    `merch_id` |  optional  | string 商户编号
    `key` |  optional  | string 商户密钥
    `product` |  optional  | string 产品编号

<!-- END_805236e8779a2385b827e5756b64a09b -->

<!-- START_0325fadfe79a534c76ae2a0ff7ff2aa5 -->
## Request update alipay bank gateway status
请求更新支付宝网关 支付状态

> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/admin/alipay/bank_gateway/status/1?id=deserunt&status=deleniti" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/alipay/bank_gateway/status/1"
);

let params = {
    "id": "deserunt",
    "status": "deleniti",
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
`PUT admin/alipay/bank_gateway/status/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | id值
    `status` |  required  | id值

<!-- END_0325fadfe79a534c76ae2a0ff7ff2aa5 -->

<!-- START_8f1727ccb968db6c49d2c9530e5c683c -->
## Request delete alipay bank gateway data
请求删除支付宝网关支付数据

> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/admin/alipay/bank_gateway/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/alipay/bank_gateway/1"
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
`DELETE admin/alipay/bank_gateway/{id}`


<!-- END_8f1727ccb968db6c49d2c9530e5c683c -->

#[ADMIN-Payment] AlipayLegacyExpress manage

支付宝即时到账管理类
<!-- START_f1be18edbf36c70c4e837edf80b9d17d -->
## Request get alipay legacy express list
获取支付宝即时支付-列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/alipay/legacy_express?page=aut&page_limit=quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/alipay/legacy_express"
);

let params = {
    "page": "aut",
    "page_limit": "quia",
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/alipay/legacy_express`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | optional 页码
    `page_limit` |  optional  | optional 分页条数

<!-- END_f1be18edbf36c70c4e837edf80b9d17d -->

<!-- START_a95e0b78765e0f1d2542f1e83945247d -->
## Request store alipay legacy express data
请求写入支付宝即时支付数据

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/alipay/legacy_express" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"items":[{"pid":"et","key":"rem","seller_email":"sed"}]}'

```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/alipay/legacy_express"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "items": [
        {
            "pid": "et",
            "key": "rem",
            "seller_email": "sed"
        }
    ]
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/alipay/legacy_express`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `items` | array |  required  | 数组名称
        `items.*.pid` | string |  required  | 商户id
        `items.*.key` | string |  required  | 商户密钥
        `items.*.seller_email` | email |  required  | 卖家支付宝账号
    
<!-- END_a95e0b78765e0f1d2542f1e83945247d -->

<!-- START_37db0f4da287db5840b28878388d73fd -->
## Request update alipay legacy express data
请求更新支付宝即时支付数据

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/admin/alipay/legacy_express/1?id=explicabo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/alipay/legacy_express/1"
);

let params = {
    "id": "explicabo",
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
`PUT admin/alipay/legacy_express/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | id值

<!-- END_37db0f4da287db5840b28878388d73fd -->

<!-- START_5490b679bad970566809f7a5770714c8 -->
## Request delete alipay legacy express data
请求删除支付宝即时支付数据

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/admin/alipay/legacy_express/1?id=dolores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/alipay/legacy_express/1"
);

let params = {
    "id": "dolores",
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
`DELETE admin/alipay/legacy_express/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | id值

<!-- END_5490b679bad970566809f7a5770714c8 -->

<!-- START_744e1cb1066e7961e5e97f6d2b6a7610 -->
## Request update alipay legacy express status
请求更新支付宝即时到账 支付状态

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/admin/alipay/legacy_express/status/1?id=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/alipay/legacy_express/status/1"
);

let params = {
    "id": "et",
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
`PUT admin/alipay/legacy_express/status/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | id值

<!-- END_744e1cb1066e7961e5e97f6d2b6a7610 -->

#[ADMIN-Payment] UnionPayGateway manage

银联网关支付管理类
Class UnionPayGatewayController
<!-- START_4cbe0949d761328adf400f4a32f6ef2a -->
## Request get Union pay gateway list
获取银联网关支付-列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/union_pay/gateway" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/union_pay/gateway"
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/union_pay/gateway`


<!-- END_4cbe0949d761328adf400f4a32f6ef2a -->

<!-- START_63c581a20116d1550ae96701460b68fa -->
## Request store Union pay gateway data
请求写入银联网关支付数据

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/union_pay/gateway" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"items":[{"cpid":"possimus","pay_type":"aut"}]}'

```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/union_pay/gateway"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "items": [
        {
            "cpid": "possimus",
            "pay_type": "aut"
        }
    ]
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/union_pay/gateway`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `items` | array |  required  | 数组名称
        `items.*.cpid` | string |  required  | CP标识
        `items.*.pay_type` | string |  required  | 支付方式
    
<!-- END_63c581a20116d1550ae96701460b68fa -->

<!-- START_6afca63ed575d7d30f4b5591e497de20 -->
## Request update Union pay gateway data
请求更新银联网关支付数据

> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/admin/union_pay/gateway/1?id=culpa&cpid=est&pay_type=iste" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/union_pay/gateway/1"
);

let params = {
    "id": "culpa",
    "cpid": "est",
    "pay_type": "iste",
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
`PUT admin/union_pay/gateway/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | id值
    `cpid` |  optional  | string CP标识
    `pay_type` |  optional  | string 支付方式

<!-- END_6afca63ed575d7d30f4b5591e497de20 -->

<!-- START_3c6bb0d3f8fddae0373a73626381a340 -->
## Request update Union pay gateway status
请求更新银联网关 支付状态

> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/admin/union_pay/gateway/status/1?id=quisquam&status=perspiciatis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/union_pay/gateway/status/1"
);

let params = {
    "id": "quisquam",
    "status": "perspiciatis",
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
`PUT admin/union_pay/gateway/status/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | id值
    `status` |  required  | id值

<!-- END_3c6bb0d3f8fddae0373a73626381a340 -->

<!-- START_a485acdafcd3c32baceac073b0d18a3b -->
## Request delete Union pay gateway data
请求删除银联网关支付数据

> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/admin/union_pay/gateway/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/union_pay/gateway/1"
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
`DELETE admin/union_pay/gateway/{id}`


<!-- END_a485acdafcd3c32baceac073b0d18a3b -->

#[ADMIN] Asset img

静态图片管理
<!-- START_d87b514e0b2d661024b3fe01f18fc23c -->
## Get assetImg list
获取首页静态资源列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/asset_img?page=tenetur&page_limit=quos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/asset_img"
);

let params = {
    "page": "tenetur",
    "page_limit": "quos",
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/asset_img`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | 页码
    `page_limit` |  optional  | 每页数量

<!-- END_d87b514e0b2d661024b3fe01f18fc23c -->

<!-- START_d87de4a1217ef941a28add66dd4020f4 -->
## Save asset img
保存首页静态资源

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/asset_img" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"img":"dolor","img_location":"sunt","type":"est","product_id":"ut"}'

```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/asset_img"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "img": "dolor",
    "img_location": "sunt",
    "type": "est",
    "product_id": "ut"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/asset_img`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `img` | required |  optional  | 图片地址
        `img_location` | required |  optional  | 图片位置
        `type` | required |  optional  | 类型
        `product_id` | 关联产品 |  optional  | 
    
<!-- END_d87de4a1217ef941a28add66dd4020f4 -->

<!-- START_d695d1263186d4e5dbc044507a0cce28 -->
## Update asset_img
更新静态资源

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/asset_img/2" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"img":"quaerat","img_location":"dolores","type":"doloremque","product_id":"ut"}'

```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/asset_img/2"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "img": "quaerat",
    "img_location": "dolores",
    "type": "doloremque",
    "product_id": "ut"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/asset_img/{assetImgId}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `assetImgId` |  required  | 
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `img` | required |  optional  | 图片地址
        `img_location` | required |  optional  | 图片位置
        `type` | required |  optional  | 类型
        `product_id` | 关联产品 |  optional  | 
    
<!-- END_d695d1263186d4e5dbc044507a0cce28 -->

<!-- START_85bac2915edb3565ff46f67e3937c589 -->
## Delete img
删除图片资源

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/admin/asset_img/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/asset_img/1"
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
`DELETE admin/asset_img/{assetImgId}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `assetImgId` |  required  | 

<!-- END_85bac2915edb3565ff46f67e3937c589 -->

#[ADMIN] Category story

分类故事
<!-- START_03beced1b66f1ed5912bf94c07e1a9a8 -->
## Get product category stoies
获取产品分类故事

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/category_stories?page=aperiam&page_limit=culpa" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories"
);

let params = {
    "page": "aperiam",
    "page_limit": "culpa",
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/category_stories`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | 页码
    `page_limit` |  optional  | 没页数量

<!-- END_03beced1b66f1ed5912bf94c07e1a9a8 -->

<!-- START_4728f4dbc09c2fe21a39191d4a9dc696 -->
## admin/category_stories/{CategoriesStoriesId}
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/category_stories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories/1"
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/category_stories/{CategoriesStoriesId}`


<!-- END_4728f4dbc09c2fe21a39191d4a9dc696 -->

<!-- START_d231c5e756c00882550676f84b4f0206 -->
## Create product category story
添加产品分类故事

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/category_stories?title=dolores&title_en=qui&description=quo&description_en=ab&banner=aut&product_category_id=nostrum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories"
);

let params = {
    "title": "dolores",
    "title_en": "qui",
    "description": "quo",
    "description_en": "ab",
    "banner": "aut",
    "product_category_id": "nostrum",
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
`POST admin/category_stories`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `title` |  required  | 分类故事名称
    `title_en` |  optional  | 英文故事名称
    `description` |  optional  | 分类简介
    `description_en` |  optional  | 英文分类简介
    `banner` |  optional  | 故事banner
    `product_category_id` |  optional  | 属于产品类ID

<!-- END_d231c5e756c00882550676f84b4f0206 -->

<!-- START_c278f15bf9530159d4505908e423199b -->
## Edit product category story
编辑产品分类故事

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/category_stories/1?title=in&title_en=eaque&description=occaecati&description_en=assumenda&banner=corporis&product_category_id=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories/1"
);

let params = {
    "title": "in",
    "title_en": "eaque",
    "description": "occaecati",
    "description_en": "assumenda",
    "banner": "corporis",
    "product_category_id": "qui",
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
`POST admin/category_stories/{CategoriesStoriesId}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `title` |  optional  | 分类故事名称
    `title_en` |  optional  | 英文故事名称
    `description` |  optional  | 分类简介
    `description_en` |  optional  | 英文分类简介
    `banner` |  optional  | 故事banner
    `product_category_id` |  optional  | 属于产品类ID

<!-- END_c278f15bf9530159d4505908e423199b -->

<!-- START_c0113fc3a7aedb05d6590587aa7f1f42 -->
## Delete product category story
删除产品分类故事

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/admin/category_stories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories/1"
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
`DELETE admin/category_stories/{CategoriesStoriesId}`


<!-- END_c0113fc3a7aedb05d6590587aa7f1f42 -->

#[ADMIN] Company manage


<!-- START_b9466687eab2937f3b60313e39bb15b9 -->
## Get company list
获取公司列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/companies?page=facere&page_limit=provident" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/companies"
);

let params = {
    "page": "facere",
    "page_limit": "provident",
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/companies`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | 页码
    `page_limit` |  optional  | 显示条目

<!-- END_b9466687eab2937f3b60313e39bb15b9 -->

<!-- START_fae34859ccb7376486cc65cb4aa5d987 -->
## Get depatments by company name
根据公司名称获取下辖部门列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/company/departments/incidunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/company/departments/incidunt"
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/company/departments/{company_name}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `company_name` |  optional  | 公司名称

<!-- END_fae34859ccb7376486cc65cb4aa5d987 -->

#[ADMIN] Enum

枚举类管理
<!-- START_f6c2142865044046cf88c0d164ea93e7 -->
## Get enum list by name
根据枚举类名获取枚举类内定义的数据

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/enums/AssetImgType" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/enums/AssetImgType"
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/enums/{name}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `name` |  required  | 枚举类名称

<!-- END_f6c2142865044046cf88c0d164ea93e7 -->

#[ADMIN] Invitation

邀请码
<!-- START_0b9c3ad4e124b71723b4155c6c9bd265 -->
## admin/testUpload
> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/testUpload" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/testUpload"
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
`POST admin/testUpload`


<!-- END_0b9c3ad4e124b71723b4155c6c9bd265 -->

#[ADMIN] Logger

日志管理
<!-- START_fdc2ff2366ce21167235c78796573398 -->
## Get logs list
获取日志列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/logs/1?page=sunt&page_limit=optio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/logs/1"
);

let params = {
    "page": "sunt",
    "page_limit": "optio",
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/logs/{collection}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | optional 页码
    `page_limit` |  optional  | optional 每页显示数目

<!-- END_fdc2ff2366ce21167235c78796573398 -->

<!-- START_3d3d1cecfbfa6d14f79ba39a4a048994 -->
## Destroy logs
删除日志(支持删除多条数据)

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/admin/logs/1?ids=animi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/logs/1"
);

let params = {
    "ids": "animi",
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
`DELETE admin/logs/{collection}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `ids` |  required  | ID值(array)

<!-- END_3d3d1cecfbfa6d14f79ba39a4a048994 -->

#[ADMIN] Member code

会员码管理
<!-- START_ef64fc4c82a42aa221803e33b4727940 -->
## Get member code list
获取会员码列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/member_codes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/member_codes"
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/member_codes`


<!-- END_ef64fc4c82a42aa221803e33b4727940 -->

<!-- START_16c079d5bc0ebb06b414e16f3a5c9a9e -->
## admin/member_code/{member_code}
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/member_code/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/member_code/1"
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/member_code/{member_code}`


<!-- END_16c079d5bc0ebb06b414e16f3a5c9a9e -->

#[ADMIN] Order

订单管理
<!-- START_abed5cfa021d6e9a60379988984f2b8f -->
## Get order list
获取订单列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/order?page=dolor&page_limit=molestias" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/order"
);

let params = {
    "page": "dolor",
    "page_limit": "molestias",
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/order`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | 页码
    `page_limit` |  optional  | 每页数量

<!-- END_abed5cfa021d6e9a60379988984f2b8f -->

<!-- START_78b0fc1748be2226404d96680dbf59e6 -->
## Get order detail
获取订单详情信息

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/order/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/order/1"
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/order/{orderNo}`


<!-- END_78b0fc1748be2226404d96680dbf59e6 -->

<!-- START_9f061547eaaed8143e1cfc71ecbc6ca4 -->
## Search order
搜索订单

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/order?page=earum&page_limit=voluptatem&username=nam&order_no=temporibus&order_status=molestiae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/order"
);

let params = {
    "page": "earum",
    "page_limit": "voluptatem",
    "username": "nam",
    "order_no": "temporibus",
    "order_status": "molestiae",
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
`POST admin/order`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | 页码
    `page_limit` |  optional  | 每页数量
    `username` |  optional  | 用户名
    `order_no` |  optional  | 订单号
    `order_status` |  optional  | 订单状态

<!-- END_9f061547eaaed8143e1cfc71ecbc6ca4 -->

<!-- START_a60a71a23a0306485fb4dc32cf2f526d -->
## Edit order
编辑订单

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/order/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"refund_status":"tempora","ship_status":"dolor","status":"voluptatum"}'

```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/order/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "refund_status": "tempora",
    "ship_status": "dolor",
    "status": "voluptatum"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/order/{orderId}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `refund_status` | string |  optional  | 退款状态
        `ship_status` | string |  optional  | 物流状态
        `status` | string |  optional  | 订单状态
    
<!-- END_a60a71a23a0306485fb4dc32cf2f526d -->

#[ADMIN] Product

商品管理
<!-- START_9a7c60de622aa327ea2ab22f57fe4f40 -->
## Get product list
获取产品列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/product?page=et&page_limit=ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product"
);

let params = {
    "page": "et",
    "page_limit": "ut",
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/product`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | 页码
    `page_limit` |  optional  | 每页数量

<!-- END_9a7c60de622aa327ea2ab22f57fe4f40 -->

<!-- START_f14c000eb5c307df81bfbb8b4262fa68 -->
## Get product basic information list
获取产品简要信息列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/product/basic_info_list" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product/basic_info_list"
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/product/basic_info_list`


<!-- END_f14c000eb5c307df81bfbb8b4262fa68 -->

<!-- START_a530ef35306752a82d1350229e5e4b13 -->
## 「ADMIN」Get product detail by product_slug
根据product_slug获取商品详情

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product/1"
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/product/{product_slug}`


<!-- END_a530ef35306752a82d1350229e5e4b13 -->

<!-- START_791c0471d6dddbbc5be96a53dbb76354 -->
## get parent products
获取父级产品列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/products/parent" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/products/parent"
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/products/parent`


<!-- END_791c0471d6dddbbc5be96a53dbb76354 -->

<!-- START_2a50bdf6cd9fdfa165149d0dd0da7075 -->
## Create product
新建商品

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/product?product_category_id=in&product_name=illo&product_name_en=nostrum&thumbnail=qui&slug=sed&short_description=praesentium&short_description_en=ut&price=debitis&sale_price=vel&stock=consequuntur&seo_title=rerum&seo_keyword=excepturi&seo_description=numquam&benefit=numquam&benefit_en=aut&tech_description=quia&tech_description_en=nulla&description=dolor&description_en=nisi&usage=aliquid&usage_en=facere&main_image=unde&main_image_2=sed&benefit_image=illum&product_video=dolor&status=est&rating=suscipit&sold_count=non&review_count=sunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product"
);

let params = {
    "product_category_id": "in",
    "product_name": "illo",
    "product_name_en": "nostrum",
    "thumbnail": "qui",
    "slug": "sed",
    "short_description": "praesentium",
    "short_description_en": "ut",
    "price": "debitis",
    "sale_price": "vel",
    "stock": "consequuntur",
    "seo_title": "rerum",
    "seo_keyword": "excepturi",
    "seo_description": "numquam",
    "benefit": "numquam",
    "benefit_en": "aut",
    "tech_description": "quia",
    "tech_description_en": "nulla",
    "description": "dolor",
    "description_en": "nisi",
    "usage": "aliquid",
    "usage_en": "facere",
    "main_image": "unde",
    "main_image_2": "sed",
    "benefit_image": "illum",
    "product_video": "dolor",
    "status": "est",
    "rating": "suscipit",
    "sold_count": "non",
    "review_count": "sunt",
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
`POST admin/product`

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

<!-- END_2a50bdf6cd9fdfa165149d0dd0da7075 -->

<!-- START_43254ed948ecbb51a3762793ba905cb5 -->
## Edit product
编辑商品

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/product/1?product_category_id=neque&product_name=est&product_name_en=quia&thumbnail=et&slug=accusamus&short_description=qui&short_description_en=ipsam&price=consectetur&sale_price=neque&stock=quasi&seo_title=voluptatem&seo_keyword=vitae&seo_description=id&benefit=dolorum&benefit_en=quam&tech_description=tenetur&tech_description_en=unde&description=numquam&description_en=sed&usage=praesentium&usage_en=id&main_image=quia&main_image_2=pariatur&benefit_image=quibusdam&product_video=aut&status=omnis&rating=laboriosam&sold_count=harum&review_count=beatae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product/1"
);

let params = {
    "product_category_id": "neque",
    "product_name": "est",
    "product_name_en": "quia",
    "thumbnail": "et",
    "slug": "accusamus",
    "short_description": "qui",
    "short_description_en": "ipsam",
    "price": "consectetur",
    "sale_price": "neque",
    "stock": "quasi",
    "seo_title": "voluptatem",
    "seo_keyword": "vitae",
    "seo_description": "id",
    "benefit": "dolorum",
    "benefit_en": "quam",
    "tech_description": "tenetur",
    "tech_description_en": "unde",
    "description": "numquam",
    "description_en": "sed",
    "usage": "praesentium",
    "usage_en": "id",
    "main_image": "quia",
    "main_image_2": "pariatur",
    "benefit_image": "quibusdam",
    "product_video": "aut",
    "status": "omnis",
    "rating": "laboriosam",
    "sold_count": "harum",
    "review_count": "beatae",
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
`POST admin/product/{product_slug}`

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

<!-- END_43254ed948ecbb51a3762793ba905cb5 -->

<!-- START_5fe7c5c7a87aca69d982f931b83edeb7 -->
## Delete the Product
删除产品

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/admin/product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product/1"
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
`DELETE admin/product/{product_slug}`


<!-- END_5fe7c5c7a87aca69d982f931b83edeb7 -->

#[ADMIN] Product category

商品分类管理
<!-- START_c2c61ac73e177fc85d5f5487b23cf13e -->
## Get product category list
获取产品分类列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/product_categories?page=beatae&page_limit=dolores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories"
);

let params = {
    "page": "beatae",
    "page_limit": "dolores",
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/product_categories`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | 页码
    `page_limit` |  optional  | 每页数量

<!-- END_c2c61ac73e177fc85d5f5487b23cf13e -->

<!-- START_a79b63d1f7bba294c8645ca5113988e3 -->
## Get category detail by category_slug
根据类目slug查询类目详情

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/product_categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories/1"
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/product_categories/{category_slug}`


<!-- END_a79b63d1f7bba294c8645ca5113988e3 -->

<!-- START_80621ad47a9cd3c202d602c981a133f2 -->
## Create product category
新建产品分类

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/product_categories?name=laboriosam&thumbnail=magnam&banner=nihil&title=est&title_en=nostrum&sub_title=neque&describe=est&describe_en=non&describe_img=nulla&parent_id=id" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories"
);

let params = {
    "name": "laboriosam",
    "thumbnail": "magnam",
    "banner": "nihil",
    "title": "est",
    "title_en": "nostrum",
    "sub_title": "neque",
    "describe": "est",
    "describe_en": "non",
    "describe_img": "nulla",
    "parent_id": "id",
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
`POST admin/product_categories`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `name` |  required  | 分类名称
    `thumbnail` |  optional  | 分类缩略图
    `banner` |  optional  | 分类banner图
    `title` |  optional  | 分类介绍标题
    `title_en` |  optional  | 分类介绍英文标题
    `sub_title` |  optional  | 分类副标题
    `describe` |  required  | 分类描述
    `describe_en` |  optional  | 分类英文描述
    `describe_img` |  optional  | 分类描述图
    `parent_id` |  optional  | 上级分类ID

<!-- END_80621ad47a9cd3c202d602c981a133f2 -->

<!-- START_2eefe0a7de769c042b02be369b939658 -->
## Edit product category
编辑产品分类

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/product_categories/1?name=veniam&thumbnail=amet&banner=sunt&title=eos&title_en=eligendi&sub_title=commodi&describe=facilis&describe_en=est&describe_img=est&parent_id=dolore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories/1"
);

let params = {
    "name": "veniam",
    "thumbnail": "amet",
    "banner": "sunt",
    "title": "eos",
    "title_en": "eligendi",
    "sub_title": "commodi",
    "describe": "facilis",
    "describe_en": "est",
    "describe_img": "est",
    "parent_id": "dolore",
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
`POST admin/product_categories/{category_slug}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `name` |  optional  | 分类名称
    `thumbnail` |  optional  | 分类缩略图
    `banner` |  optional  | 分类banner图
    `title` |  optional  | 分类介绍标题
    `title_en` |  optional  | 分类介绍英文标题
    `sub_title` |  optional  | 分类副标题
    `describe` |  optional  | 分类描述
    `describe_en` |  optional  | 分类英文描述
    `describe_img` |  optional  | 分类描述图
    `parent_id` |  optional  | 上级分类ID

<!-- END_2eefe0a7de769c042b02be369b939658 -->

<!-- START_18c83eb708cb7661712fb1016b9554a9 -->
## Delete product category
删除产品分类

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/admin/product_categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories/1"
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
`DELETE admin/product_categories/{category_slug}`


<!-- END_18c83eb708cb7661712fb1016b9554a9 -->

#[ADMIN] Product skus

商品sku管理
<!-- START_891f757575d248d6bfeaf8ccc9e0ef89 -->
## Get product sku list
获取商品SKU列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/product_sku" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_sku"
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/product_sku`


<!-- END_891f757575d248d6bfeaf8ccc9e0ef89 -->

<!-- START_48c0f3919a61c71518dc93b963d8cd30 -->
## Create product sku
新增产品SKU

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/product_sku?title=itaque&description=odio&price=voluptatum&stock=tempora&product_id=consequatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_sku"
);

let params = {
    "title": "itaque",
    "description": "odio",
    "price": "voluptatum",
    "stock": "tempora",
    "product_id": "consequatur",
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
`POST admin/product_sku`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `title` |  required  | sku名称
    `description` |  required  | sku描述
    `price` |  required  | 价格
    `stock` |  required  | 库存
    `product_id` |  required  | 所属商品id

<!-- END_48c0f3919a61c71518dc93b963d8cd30 -->

<!-- START_51c5d3f449e6a079a71f6ce91d5fbe05 -->
## Edit product sku
编辑产品SKU

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/product_sku/1?title=tempore&description=et&price=repellat&stock=nam&product_id=amet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_sku/1"
);

let params = {
    "title": "tempore",
    "description": "et",
    "price": "repellat",
    "stock": "nam",
    "product_id": "amet",
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
`POST admin/product_sku/{productSkuId}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `title` |  optional  | sku名称
    `description` |  optional  | sku描述
    `price` |  optional  | 价格
    `stock` |  optional  | 库存
    `product_id` |  optional  | 所属商品id

<!-- END_51c5d3f449e6a079a71f6ce91d5fbe05 -->

<!-- START_364a9f179b0d223e1ffa318539481ce0 -->
## Delete product sku
删除商品sku

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/admin/product_sku/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_sku/1"
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
`DELETE admin/product_sku/{productSkuId}`


<!-- END_364a9f179b0d223e1ffa318539481ce0 -->

#[ADMIN] TheHouse

Class TheHouseController
<!-- START_631a7b6c1a488f12ea676a55af33afe7 -->
## Get The House list
获取Get House列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/the_houses?page=numquam&page_limit=quaerat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/the_houses"
);

let params = {
    "page": "numquam",
    "page_limit": "quaerat",
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/the_houses`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | 页码
    `page_limit` |  optional  | 每页数量

<!-- END_631a7b6c1a488f12ea676a55af33afe7 -->

<!-- START_8a1a9b5266d163e1b7b6d2a1a7c29eab -->
## Get The House detail by slug
根据slug获取The House详情

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/the_house/et-pariatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/the_house/et-pariatur"
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/the_house/{slug}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `slug` |  required  | The House的slug

<!-- END_8a1a9b5266d163e1b7b6d2a1a7c29eab -->

<!-- START_613dab6e833eaa83a8daf88469388ab7 -->
## Create The House
新增The House

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/the_house" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"sunt","sub_title":"et","the_house_category_id":"deleniti","describe":"laudantium","banner":"autem"}'

```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/the_house"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "sunt",
    "sub_title": "et",
    "the_house_category_id": "deleniti",
    "describe": "laudantium",
    "banner": "autem"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/the_house`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `title` | required |  optional  | 文档大标题
        `sub_title` | required |  optional  | 文档副标题
        `the_house_category_id` | required |  optional  | The House Category表的id
        `describe` | required |  optional  | 简要描述
        `banner` | required |  optional  | Banner图
    
<!-- END_613dab6e833eaa83a8daf88469388ab7 -->

<!-- START_c4269614e3fc6d67b3e46b7781a70102 -->
## Update The House by Slug
根据slug更新The House

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/the_house/et-pariatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"a","sub_title":"est","the_house_category_id":"voluptatem","describe":"velit","banner":"et"}'

```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/the_house/et-pariatur"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "a",
    "sub_title": "est",
    "the_house_category_id": "voluptatem",
    "describe": "velit",
    "banner": "et"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/the_house/{slug}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `slug` |  required  | The House的slug
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `title` | required |  optional  | 文档大标题
        `sub_title` | required |  optional  | 文档副标题
        `the_house_category_id` | required |  optional  | The House Category表的id
        `describe` | required |  optional  | 简要描述
        `banner` | required |  optional  | Banner图
    
<!-- END_c4269614e3fc6d67b3e46b7781a70102 -->

<!-- START_a7b91f9db46214db555be6d7f8aa2753 -->
## Delete The House by slug
根据slug删除 The House

> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/admin/the_house/et-pariatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/the_house/et-pariatur"
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
`DELETE admin/the_house/{slug}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `slug` |  required  | The House的slug

<!-- END_a7b91f9db46214db555be6d7f8aa2753 -->

<!-- START_bbff68d382d758e47ab485e874b0cacb -->
## Get The House Category List
获取The House 分类列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/the_house/category/list?page=fugiat&page_limit=tenetur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/the_house/category/list"
);

let params = {
    "page": "fugiat",
    "page_limit": "tenetur",
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/the_house/category/list`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | 页码
    `page_limit` |  optional  | 每页数量

<!-- END_bbff68d382d758e47ab485e874b0cacb -->

<!-- START_c929ab6bfe94f79d6bb1fe7de01a587d -->
## Get Category Detail By Slug
通过slug获取The House分类详情

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/the_house/category/aspernatur-ex" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/the_house/category/aspernatur-ex"
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/the_house/category/{slug}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `slug` |  required  | 分类slug

<!-- END_c929ab6bfe94f79d6bb1fe7de01a587d -->

<!-- START_3a88c898655859c083382a4b4d1fdd3e -->
## Create The House Category
创建The House Category

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/the_house/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"nihil","banner":"distinctio","title":"beatae","sub_title":"error"}'

```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/the_house/category"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "nihil",
    "banner": "distinctio",
    "title": "beatae",
    "sub_title": "error"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/the_house/category`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | required |  optional  | The house分类名称
        `banner` | required |  optional  | 分类banner图
        `title` | required |  optional  | banner处标题
        `sub_title` | required |  optional  | banner处副标题
    
<!-- END_3a88c898655859c083382a4b4d1fdd3e -->

<!-- START_3078d52b3edb0cb0e3b9aa56581388e0 -->
## The House Category Update By Slug
根据slug更新The House分类

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/the_house/category/aspernatur-ex" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"omnis","banner":"tenetur","title":"voluptate","sub_title":"qui"}'

```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/the_house/category/aspernatur-ex"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "omnis",
    "banner": "tenetur",
    "title": "voluptate",
    "sub_title": "qui"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/the_house/category/{slug}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `slug` |  required  | 分类slug
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | The |  optional  | house分类名称
        `banner` | 分类banner图 |  optional  | 
        `title` | banner处标题 |  optional  | 
        `sub_title` | banner处副标题 |  optional  | 
    
<!-- END_3078d52b3edb0cb0e3b9aa56581388e0 -->

<!-- START_6a0c892722b61d4acbe11f00b2d6a042 -->
## The House Category delete by slug
根据slug删除The House分类

> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/admin/the_house/category/aspernatur-ex" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/the_house/category/aspernatur-ex"
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
`DELETE admin/the_house/category/{slug}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `slug` |  required  | 分类slug

<!-- END_6a0c892722b61d4acbe11f00b2d6a042 -->

<!-- START_4a12f7701fec22b1c8944fa1bc75a1ce -->
## Get The House Content List
获取The House文案列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/the_house_content/list?page=doloribus&page_limit=dignissimos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/the_house_content/list"
);

let params = {
    "page": "doloribus",
    "page_limit": "dignissimos",
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/the_house_content/list`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | 页码
    `page_limit` |  optional  | 每页显示数量

<!-- END_4a12f7701fec22b1c8944fa1bc75a1ce -->

<!-- START_c34787bba00cb70f678303ae9892fdb5 -->
## Get The House Content detail by id
根据Id获取The House文案详情

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/the_house_content/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/the_house_content/1"
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/the_house_content/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The House文案Id

<!-- END_c34787bba00cb70f678303ae9892fdb5 -->

<!-- START_3d72b9e2598752a3299cdc11daa2b418 -->
## Create The House Content
新增The House文案

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/the_house_content" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"the_house_id":"id","title":"omnis","content":"quibusdam","img":"qui","img_desc":"ut"}'

```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/the_house_content"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "the_house_id": "id",
    "title": "omnis",
    "content": "quibusdam",
    "img": "qui",
    "img_desc": "ut"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/the_house_content`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `the_house_id` | required |  optional  | The House关联ID
        `title` | required |  optional  | 文案标题
        `content` | required |  optional  | 文案正文
        `img` | required |  optional  | 文案配套图片
        `img_desc` | required |  optional  | 配套图片简述
    
<!-- END_3d72b9e2598752a3299cdc11daa2b418 -->

<!-- START_6bfa1ef2a2b8b8e7f8488918c1c6fdfa -->
## Update The House Content by id
根据id更新The House文案

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/the_house_content/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"the_house_id":"a","title":"sapiente","content":"repellat","img":"dicta","img_desc":"perspiciatis"}'

```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/the_house_content/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "the_house_id": "a",
    "title": "sapiente",
    "content": "repellat",
    "img": "dicta",
    "img_desc": "perspiciatis"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/the_house_content/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The House文案ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `the_house_id` | The |  optional  | House关联ID
        `title` | 文案标题 |  optional  | 
        `content` | 文案正文 |  optional  | 
        `img` | 文案配套图片 |  optional  | 
        `img_desc` | 配套图片简述 |  optional  | 
    
<!-- END_6bfa1ef2a2b8b8e7f8488918c1c6fdfa -->

<!-- START_02f7b6dee6d38ea16773911390136985 -->
## delete The House Content by id
根据id删除The House文案

> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/admin/the_house_content/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/the_house_content/1"
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
`DELETE admin/the_house_content/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The House文案ID

<!-- END_02f7b6dee6d38ea16773911390136985 -->

#[ADMIN] User

用户管理
<!-- START_bd487ab94d8034c2d13644bb1772fdfa -->
## Query user list(Admin)
查询用户数据列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/user?username=culpa&page=doloremque&page_limit=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user"
);

let params = {
    "username": "culpa",
    "page": "doloremque",
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/user`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `username` |  optional  | 用户名(选填)
    `page` |  optional  | 页码，默认1
    `page_limit` |  optional  | 每页数量，默认20

<!-- END_bd487ab94d8034c2d13644bb1772fdfa -->

<!-- START_71dba47ec1215d1147a3f8e59c55751a -->
## Request store user data
请求新增用户数据

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"username":"voluptates","password":"nihil","name":"commodi","role":"tempore","company":"enim","department":"rerum","sex":5,"phone":8,"email":"ducimus","member_code":"quos"}'

```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "username": "voluptates",
    "password": "nihil",
    "name": "commodi",
    "role": "tempore",
    "company": "enim",
    "department": "rerum",
    "sex": 5,
    "phone": 8,
    "email": "ducimus",
    "member_code": "quos"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/user`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `username` | string |  required  | 用户名
        `password` | string |  required  | 密码
        `name` | string |  required  | 姓名
        `role` | string |  required  | 角色名
        `company` | string |  required  | 公司
        `department` | string |  required  | 部门
        `sex` | integer |  optional  | 性别
        `phone` | integer |  optional  | 手机号
        `email` | string |  optional  | 邮箱
        `member_code` | string |  optional  | 会员码
    
<!-- END_71dba47ec1215d1147a3f8e59c55751a -->

<!-- START_3eddd3b7891210cd61795b9dd3fad8bb -->
## Edit user(Admin)
修改用户资料

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/admin/user/1?name=modi&email=esse&phone=doloremque&avatar=nemo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user/1"
);

let params = {
    "name": "modi",
    "email": "esse",
    "phone": "doloremque",
    "avatar": "nemo",
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
`PUT admin/user/{hash_id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `name` |  optional  | 姓名
    `email` |  optional  | 邮箱
    `phone` |  optional  | 手机号
    `avatar` |  optional  | 头像

<!-- END_3eddd3b7891210cd61795b9dd3fad8bb -->

<!-- START_3b421776505cfaa82ef907ff7c83122b -->
## Delete User(Admin)
删除用户

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/admin/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user/1"
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
`DELETE admin/user/{username}`


<!-- END_3b421776505cfaa82ef907ff7c83122b -->

<!-- START_439c3a46378d05961f1149b123311261 -->
## Change password
修改密码

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/admin/user/reset_password/1?oldPassword=est&newPassword=facere&newPassword_confirmation=aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user/reset_password/1"
);

let params = {
    "oldPassword": "est",
    "newPassword": "facere",
    "newPassword_confirmation": "aut",
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
`PUT admin/user/reset_password/{username}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `oldPassword` |  required  | 旧密码
    `newPassword` |  required  | 新密码
    `newPassword_confirmation` |  required  | 确认密码

<!-- END_439c3a46378d05961f1149b123311261 -->

<!-- START_0e2790659ddcc6fdc52132019f3b7a28 -->
## Get user info
获取单个用户信息

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/get_user?hash_id=similique" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/get_user"
);

let params = {
    "hash_id": "similique",
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/get_user`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `hash_id` |  required  | hash加密的ID

<!-- END_0e2790659ddcc6fdc52132019f3b7a28 -->

#[ADMIN] User address

用户地址管理
<!-- START_8c097500e48f09ec94a3293a31853149 -->
## Query user address list
用户地址列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/user_addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses"
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/user_addresses`


<!-- END_8c097500e48f09ec94a3293a31853149 -->

<!-- START_c62bae513c0275637d8ee00c4dffe701 -->
## Create user address
新增用户地址

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/user_addresses?province=repellendus&city=animi&district=ea&address=ut&zip=eius&contact_name=nihil&contact_phone=necessitatibus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses"
);

let params = {
    "province": "repellendus",
    "city": "animi",
    "district": "ea",
    "address": "ut",
    "zip": "eius",
    "contact_name": "nihil",
    "contact_phone": "necessitatibus",
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
`POST admin/user_addresses`

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

<!-- END_c62bae513c0275637d8ee00c4dffe701 -->

<!-- START_5f98931d3c04839701005a1c746b70be -->
## Update user address
编辑用户地址

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/admin/user_addresses/1?address_id=quibusdam&province=aliquid&city=molestiae&district=qui&address=quae&zip=neque&contact_name=rerum&contact_phone=sunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses/1"
);

let params = {
    "address_id": "quibusdam",
    "province": "aliquid",
    "city": "molestiae",
    "district": "qui",
    "address": "quae",
    "zip": "neque",
    "contact_name": "rerum",
    "contact_phone": "sunt",
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
`PUT admin/user_addresses/{address_id}`

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

<!-- END_5f98931d3c04839701005a1c746b70be -->

<!-- START_7465d58aec589336210973bd6eebaaf0 -->
## Destroy user address
删除用户地址

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/admin/user_addresses/1?address_id=voluptates" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses/1"
);

let params = {
    "address_id": "voluptates",
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
`DELETE admin/user_addresses/{address_id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `address_id` |  required  | address表id

<!-- END_7465d58aec589336210973bd6eebaaf0 -->

#[ADMIN] User profile

用户资料
<!-- START_f1cbe00c0793bf557a683e5a6440bda0 -->
## User profile list
用户资料信息

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/user_profiles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_profiles"
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/user_profiles`


<!-- END_f1cbe00c0793bf557a683e5a6440bda0 -->

<!-- START_6e932dece4c9c53cafe7d44eed695492 -->
## Update user profile
编辑用户资料

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/admin/user_profiles/1?profile_id=optio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_profiles/1"
);

let params = {
    "profile_id": "optio",
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
`PUT admin/user_profiles/{profile_id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `profile_id` |  required  | profile表id

<!-- END_6e932dece4c9c53cafe7d44eed695492 -->

<!-- START_3bff74743c9d0809b89e6ed687f7c6fe -->
## Destroy user profile
删除用户资料

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/admin/user_profiles/1?profile_id=fuga" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_profiles/1"
);

let params = {
    "profile_id": "fuga",
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
`DELETE admin/user_profiles/{profile}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `profile_id` |  required  | profile表id

<!-- END_3bff74743c9d0809b89e6ed687f7c6fe -->

#[API-ContactUs] Contact Us

联系我们相关
type说明:(1订单相关,2普通咨询,3支持建议)
<!-- START_c936422f205c4aa8a00bb79149d94481 -->
## Get the contact type list
获取联系我们类型列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/contact_us/types" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/contact_us/types"
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET api/contact_us/types`


<!-- END_c936422f205c4aa8a00bb79149d94481 -->

<!-- START_44997a62c20073c574de58ec11255a50 -->
## Store the contact us data
写入联系我们的数据

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/api/contact_us" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"quasi","type":12,"order_no":"eligendi","content":"non"}'

```

```javascript
const url = new URL(
    "http://store.wutang.com/api/contact_us"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "quasi",
    "type": 12,
    "order_no": "eligendi",
    "content": "non"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/contact_us`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | 姓名
        `type` | integer |  required  | 留言类型
        `order_no` | string |  optional  | optional 订单号
        `content` | text |  required  | 具体内容
    
<!-- END_44997a62c20073c574de58ec11255a50 -->

#[API-Home] Index

首页数据类
<!-- START_2b349f7f0ce1ce2ae13b3d385ae6e476 -->
## Get Home data list
获取首页数据信息列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/home"
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


> Example response (200):

```json
{
    "data": {
        "banner": {
            "id": 5,
            "img": "https:\/\/lorempixel.com\/640\/480\/?32306",
            "img_location": 1,
            "type": "banner",
            "product_id": 7,
            "product": {
                "id": 7,
                "slug": "fugit-repudiandae",
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "qui natus suscipit"
            }
        },
        "discover": [
            {
                "id": 10,
                "img": "https:\/\/lorempixel.com\/640\/480\/?23520",
                "img_location": 1,
                "type": "discover",
                "product_id": 7,
                "product": {
                    "id": 7,
                    "slug": "fugit-repudiandae",
                    "product_name": "黑钻臻活眼部精华",
                    "product_name_en": "qui natus suscipit"
                }
            }
        ],
        "recommend_list": [
            {
                "id": 6,
                "img": "https:\/\/lorempixel.com\/640\/480\/?99313",
                "img_location": 1,
                "type": "this_month_recommand",
                "product_id": 1,
                "product": {
                    "id": 1,
                    "slug": "odit-iure",
                    "product_name": "黑钻洁净滋养面膜",
                    "product_name_en": "labore quia veritatis"
                }
            }
        ],
        "the_house": [
            {
                "id": 11,
                "slug": "quos-rerum",
                "the_house_category_id": 3,
                "banner": "https:\/\/i0.hippopx.com\/photos\/806\/775\/580\/fog-forest-mountains-foggy-preview.jpg",
                "title": "magnam et voluptatem",
                "sub_title": "quibusdam nihil minima",
                "describe": "Recusandae beatae ducimus aliquam voluptatem est nulla. Omnis nostrum dolores consequatur mollitia. Corrupti unde voluptates veritatis.",
                "the_house_category": {
                    "id": 3,
                    "name": "精湛科艺",
                    "slug": "est-doloribus",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/375\/105\/245\/mediterranean-wine-mirroring-sol-preview.jpg",
                    "title": "molestiae eum quibusdam",
                    "sub_title": "voluptatem sunt nobis",
                    "created_at": "2020-01-26 01:11:17",
                    "updated_at": "2020-07-24 06:59:21"
                }
            },
            {
                "id": 43,
                "slug": "a-necessitatibus",
                "the_house_category_id": 3,
                "banner": "https:\/\/i0.hippopx.com\/photos\/223\/246\/360\/sky-clouds-blue-summer-preview.jpg",
                "title": "magnam beatae rerum",
                "sub_title": "nam quia fugit",
                "describe": "Eum at alias aspernatur quia accusantium officiis deserunt. Libero repudiandae sit sint rerum sunt laudantium. Sunt et sunt nam quaerat.",
                "the_house_category": {
                    "id": 3,
                    "name": "精湛科艺",
                    "slug": "est-doloribus",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/375\/105\/245\/mediterranean-wine-mirroring-sol-preview.jpg",
                    "title": "molestiae eum quibusdam",
                    "sub_title": "voluptatem sunt nobis",
                    "created_at": "2020-01-26 01:11:17",
                    "updated_at": "2020-07-24 06:59:21"
                }
            },
            {
                "id": 44,
                "slug": "ut-nihil",
                "the_house_category_id": 2,
                "banner": "https:\/\/i0.hippopx.com\/photos\/100\/470\/353\/mill-friesland-dutch-landscape-historic-mill-preview.jpg",
                "title": "ut natus corrupti",
                "sub_title": "quasi autem in",
                "describe": "Repellendus eos fuga sint et ipsam in libero. Et recusandae voluptas voluptas magnam. Quisquam quis quia nihil quasi animi consequatur.",
                "the_house_category": {
                    "id": 2,
                    "name": "精彩内容",
                    "slug": "et-aut",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/471\/78\/341\/prairie-highway-the-scenery-mountain-preview.jpg",
                    "title": "nemo et et",
                    "sub_title": "fuga laboriosam pariatur",
                    "created_at": "2020-09-06 16:07:51",
                    "updated_at": "2019-10-17 09:03:06"
                }
            }
        ]
    },
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/home`


<!-- END_2b349f7f0ce1ce2ae13b3d385ae6e476 -->

#[API-Navbar] Navbar

导航栏部分
<!-- START_7baa695b1647b22d1e42012f01280611 -->
## Get navbar product category name&amp;slug
获取顶级分类名称和slug

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/navbar/product_categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/navbar/product_categories"
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


> Example response (200):

```json
{
    "data": [
        {
            "name": "产品系列",
            "type": "product",
            "data": []
        },
        {
            "name": "护肤系列",
            "type": "product_category_skin_care",
            "data": [
                {
                    "id": 1,
                    "name": "面霜",
                    "slug": "et-nemo",
                    "parent_id": 3,
                    "level": 1
                },
                {
                    "id": 2,
                    "name": "眼霜",
                    "slug": "cupiditate-unde",
                    "parent_id": 3,
                    "level": 1
                },
                {
                    "id": 3,
                    "name": "粉底液",
                    "slug": "consequuntur-ut",
                    "parent_id": 1,
                    "level": 1
                },
                {
                    "id": 4,
                    "name": "隔离",
                    "slug": "quas-ducimus",
                    "parent_id": 3,
                    "level": 1
                },
                {
                    "id": 5,
                    "name": "香水",
                    "slug": "nesciunt-non",
                    "parent_id": 19,
                    "level": 1
                },
                {
                    "id": 6,
                    "name": "眼线",
                    "slug": "in-illo",
                    "parent_id": 10,
                    "level": 1
                },
                {
                    "id": 7,
                    "name": "唇膏",
                    "slug": "consectetur-aperiam",
                    "parent_id": 30,
                    "level": 1
                },
                {
                    "id": 8,
                    "name": "面霜",
                    "slug": "iusto-facilis",
                    "parent_id": 3,
                    "level": 1
                },
                {
                    "id": 9,
                    "name": "爽肤水",
                    "slug": "ea-nobis",
                    "parent_id": 22,
                    "level": 1
                },
                {
                    "id": 10,
                    "name": "唇膏",
                    "slug": "atque-et",
                    "parent_id": 20,
                    "level": 1
                }
            ]
        }
    ],
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/navbar/product_categories`


<!-- END_7baa695b1647b22d1e42012f01280611 -->

#[API-Payment] Web payment list

页面支付方式列表(alipay_bank_gateway=>支付宝银行网关,alipay_legacy_express=>支付宝即时到账,alipay_aop_page=>支付宝电脑网页,unionpay=>银联支付)
<!-- START_12ac6befcc5ed0726c857b866a369ba2 -->
## Get payment list
获取支付方式列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/payments/web" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/payments/web"
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET payments/web`


<!-- END_12ac6befcc5ed0726c857b866a369ba2 -->

#[API] Auth

授权管理
<!-- START_2e1c96dcffcfe7e0eb58d6408f1d619e -->
## Register user
用户注册
(PS:密保问题接口=&gt;Get password question list;
验证码接口=&gt;Generate captcha code and save to cache)

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/api/auth/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"nobis","username":"recusandae","password":"aut","password_confirmation":"dolorum","code":"iste","captcha_key":"in","captcha_code":"aut","password_question_id":13,"password_answer":"quis"}'

```

```javascript
const url = new URL(
    "http://store.wutang.com/api/auth/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "nobis",
    "username": "recusandae",
    "password": "aut",
    "password_confirmation": "dolorum",
    "code": "iste",
    "captcha_key": "in",
    "captcha_code": "aut",
    "password_question_id": 13,
    "password_answer": "quis"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/register`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | 姓名
        `username` | string |  required  | 账号(允许:英文字符/数字/字符+数字)
        `password` | string |  required  | 密码
        `password_confirmation` | string |  required  | 确认密码
        `code` | string |  optional  | 会员码(本人申请的)
        `captcha_key` | string |  required  | 验证码的key
        `captcha_code` | string |  required  | 验证码的code
        `password_question_id` | integer |  required  | 密保问题ID
        `password_answer` | string |  required  | 密保问题答案
    
<!-- END_2e1c96dcffcfe7e0eb58d6408f1d619e -->

<!-- START_d69bbb4b1b3b426bec3e1c11b029c116 -->
## Get password question list
获取密保问题列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/question_list" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/question_list"
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


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "question": "您的学号(或工号)是"
        },
        {
            "id": 2,
            "question": "您父亲的姓名是"
        },
        {
            "id": 3,
            "question": "您母亲的姓名是"
        },
        {
            "id": 4,
            "question": "您配偶的姓名是"
        },
        {
            "id": 5,
            "question": "您初中班主任的姓名是"
        },
        {
            "id": 6,
            "question": "您最熟悉的童年好友姓名是"
        },
        {
            "id": 7,
            "question": "对您影响最大的人是"
        },
        {
            "id": 8,
            "question": "您的小学毕业于"
        }
    ],
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/question_list`


<!-- END_d69bbb4b1b3b426bec3e1c11b029c116 -->

<!-- START_15d86d14a7e1c3afadbf1ffe5e74878b -->
## Get user password question
获取用户的密保问题

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/user_question?username=inventore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_question"
);

let params = {
    "username": "inventore",
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


> Example response (200):

```json
{
    "data": {
        "username": "inventore"
    },
    "code": 10001,
    "msg": "用户不存在"
}
```

### HTTP Request
`GET api/user_question`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `username` |  required  | 用户名

<!-- END_15d86d14a7e1c3afadbf1ffe5e74878b -->

<!-- START_a925a8d22b3615f12fca79456d286859 -->
## Get a JWT via given credentials.

通过登录信息获取JWT凭证

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/api/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"username":"atque","password":"illum"}'

```

```javascript
const url = new URL(
    "http://store.wutang.com/api/auth/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "username": "atque",
    "password": "illum"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/login`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `username` | string |  required  | 用户名
        `password` | string |  required  | 密码
    
<!-- END_a925a8d22b3615f12fca79456d286859 -->

<!-- START_20d5f227169180dbf935585e0387f6c3 -->
## Reset password
重置密码(未登录)

> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/api/password_reset?username=sunt&password_question_id=quisquam&password_answer=occaecati&password=saepe&password_confirmation=id" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/password_reset"
);

let params = {
    "username": "sunt",
    "password_question_id": "quisquam",
    "password_answer": "occaecati",
    "password": "saepe",
    "password_confirmation": "id",
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

<!-- START_7c4c8c21aa8bf7ffa0ae617fb274806d -->
## Get the authenticated User.

获取通过身份验证的用户

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/auth/me" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/auth/me"
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET api/auth/me`


<!-- END_7c4c8c21aa8bf7ffa0ae617fb274806d -->

<!-- START_b149d65d620129d1a17607c81a70c010 -->
## Log the user out (Invalidate the token).

注销用户

> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/api/auth/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/auth/logout"
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
    "http://store.wutang.com/api/auth/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/auth/refresh"
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

<!-- START_a5b1ad2131e03818cd865a9ffddc0928 -->
## Change password
修改密码(已登录)

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/api/auth/password_change" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"oldPassword":"autem","newPassword":"corrupti","newPassword_confirmation":"vel"}'

```

```javascript
const url = new URL(
    "http://store.wutang.com/api/auth/password_change"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "oldPassword": "autem",
    "newPassword": "corrupti",
    "newPassword_confirmation": "vel"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/password_change`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `oldPassword` | string |  required  | 旧密码
        `newPassword` | string |  required  | 新密码
        `newPassword_confirmation` | string |  required  | 确认密码
    
<!-- END_a5b1ad2131e03818cd865a9ffddc0928 -->

#[API] Captcha

验证码管理
<!-- START_3266c06bb58be7f09822eec02a02823c -->
## Generate captcha code and save to cache
生成验证码并写入缓存

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/api/captchas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/captchas"
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

#[API] Order

订单管理
status说明:(1已付款,0待付款,-1付款失败,-2取消订单)
ship_status说明:(1已发货,-1未发货,0已签收)
<!-- START_f9301c03a9281c0847565f96e6f723de -->
## Get order list
获取订单列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/orders?page=sit&page_limit=sit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/orders"
);

let params = {
    "page": "sit",
    "page_limit": "sit",
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET api/orders`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | 页码
    `page_limit` |  optional  | 分页条目

<!-- END_f9301c03a9281c0847565f96e6f723de -->

<!-- START_08b1b8d6f903fb311c860a5b1f0f543b -->
## Get order detail
获取订单详情

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/order_details/1?no=voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/order_details/1"
);

let params = {
    "no": "voluptatem",
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET api/order_details/{no}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `no` |  required  | 订单号

<!-- END_08b1b8d6f903fb311c860a5b1f0f543b -->

<!-- START_285c87403b6cfdebe26bc357f22e870f -->
## Request create order
订单创建发起

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/api/orders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"address_id":"iure","remark":"distinctio"}'

```

```javascript
const url = new URL(
    "http://store.wutang.com/api/orders"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "address_id": "iure",
    "remark": "distinctio"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/orders`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `address_id` | interger |  required  | 地址id
        `remark` | string |  optional  | 订单备注
    
<!-- END_285c87403b6cfdebe26bc357f22e870f -->

<!-- START_5e56ca3ffbde3d40d68692893b3bb1b6 -->
## Retry create order
以原订单尝试重新下单

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/api/orders/retry" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"no":20}'

```

```javascript
const url = new URL(
    "http://store.wutang.com/api/orders/retry"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "no": 20
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/orders/retry`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `no` | integer |  required  | 原订单号
    
<!-- END_5e56ca3ffbde3d40d68692893b3bb1b6 -->

<!-- START_2bf3ab5257f7e4ba872e472d42645ee4 -->
## Cancel order
取消订单

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/api/orders/cancel?no=nihil" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/orders/cancel"
);

let params = {
    "no": "nihil",
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
`PUT api/orders/cancel`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `no` |  required  | 订单号

<!-- END_2bf3ab5257f7e4ba872e472d42645ee4 -->

#[API] Product

产品管理
status说明:(1新品,2畅销,3促销,-1下架)
<!-- START_86e0ac5d4f8ce9853bc22fd08f2a0109 -->
## Get product list
获取商品列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/products" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/products"
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


> Example response (200):

```json
{
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "product_category_id": 2,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "labore quia veritatis",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/65\/832\/40\/steppe-nevada-landscape-snow-preview.jpg",
                "slug": "odit-iure",
                "short_description": "Saepe enim sint quaerat cumque occaecati qui.",
                "short_description_en": "Sapiente delectus recusandae est sunt recusandae quibusdam aut. Rerum et recusandae provident sit vero eligendi et cum. Doloribus et nemo velit dolor suscipit accusamus. Quaerat nihil dolor aliquid voluptas.",
                "price": "4738.00",
                "sale_price": "0.01",
                "stock": 578,
                "spec": "150 ml \/ 2.0 oz",
                "seo_title": "ex et sit",
                "seo_keyword": "rerum",
                "seo_description": "Quo est vel aut cum modi.",
                "benefit": "At quo aspernatur eius asperiores. Est eaque nam reprehenderit rerum consectetur quia nam. Consequatur facilis quasi consequatur rem.",
                "benefit_en": "Tempora non ratione ratione aut. Ut in tempora at nam esse sint molestiae. Sint assumenda suscipit ullam dolore. Veniam laborum necessitatibus et sunt illum quod minus.",
                "tech_description": "Voluptas et ullam aperiam molestiae odio consequatur ea ullam. Esse cum excepturi tenetur aut.",
                "tech_description_en": "Ut provident perspiciatis qui accusamus. Et assumenda rerum sed voluptas. Adipisci placeat et rem occaecati. Iste sed ipsa omnis neque eos.",
                "description": "Rerum vel quos distinctio quasi est suscipit. Praesentium enim eos facilis aliquid soluta quo dolore fugit. Alias reprehenderit sit blanditiis. Aut eum vel voluptas.",
                "description_en": "Sit natus pariatur sit alias quas enim est. Suscipit soluta earum voluptas modi sed. Voluptas consequatur iste cumque dicta.",
                "usage": "Quo nulla nostrum molestiae culpa quaerat repellendus assumenda. Excepturi sint adipisci similique voluptatem et ut quasi autem. Distinctio fugiat ipsum cupiditate libero labore a est quis. Nostrum ut amet eum doloribus sequi et.",
                "usage_en": "Cupiditate distinctio nihil eos doloribus. Excepturi ipsa sed ullam ducimus voluptatibus.",
                "main_image": "\/Applications\/MAMP\/tmp\/php\/phpjqVJ73",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/959\/730\/460\/landscape-mountain-mountain-range-nature-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/683\/416\/876\/zen-dry-landscape-westin-step-landscape-preview.jpg",
                "product_video": "null",
                "status": 2,
                "rating": 4.32,
                "sold_count": 7624,
                "review_count": 6490,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-10-16 14:17:47",
                "updated_at": "2020-10-19 16:06:30",
                "product_category": {
                    "id": 2,
                    "name": "眼霜",
                    "slug": "cupiditate-unde",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/741\/475\/682\/iceland-nature-landscape-countryside-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/686\/972\/951\/rainbow-landscape-cloud-preview.jpg",
                    "title": "quo tenetur ex",
                    "title_en": "rerum est qui",
                    "sub_title": "hic assumenda similique",
                    "describe": "Sapiente voluptatem repellendus odio rerum adipisci. Ut est dolorem nesciunt ullam consequuntur modi doloremque. Et reiciendis autem perspiciatis qui.",
                    "describe_en": "Velit rerum cupiditate omnis aliquam. Qui ducimus beatae quasi magni eos. Aspernatur est harum et provident sunt quas.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/582\/945\/105\/desert-landscape-desert-landscape-arizona-preview.jpg",
                    "type": 1,
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-09-23 01:40:32",
                    "updated_at": "2020-10-13 17:45:45"
                }
            },
            {
                "id": 2,
                "product_category_id": 5,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "fugit laudantium aut",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/165\/651\/654\/mountains-alpine-landscape-switzerland-preview.jpg",
                "slug": "molestiae-perferendis",
                "short_description": "Hic explicabo non voluptas consectetur.",
                "short_description_en": "Cum provident corporis temporibus. Accusantium est est fugiat quas. Ipsam unde numquam reiciendis.",
                "price": "7550.00",
                "sale_price": "0.01",
                "stock": 196,
                "spec": "50 ml \/ 1.7 fl. oz",
                "seo_title": "voluptates dolores molestiae",
                "seo_keyword": "delectus",
                "seo_description": "Fugit et tenetur debitis.",
                "benefit": "Aut eum sapiente labore culpa dolore tempore. Sapiente autem non nisi accusamus nesciunt molestias. Dolor dolores unde voluptas rerum.",
                "benefit_en": "Qui fugiat et et excepturi a magni qui. Distinctio earum et fuga fugit natus et odit. Qui dolores veritatis mollitia optio a maxime minus.",
                "tech_description": "Corrupti iusto et occaecati dicta. Rerum recusandae quas dolores. Est dignissimos quos nesciunt quas quis et. Eveniet ipsa porro esse perferendis placeat neque.",
                "tech_description_en": "Aut et qui rem at. Voluptas illum et hic dolore cumque iste commodi. Exercitationem ipsum qui voluptatem nulla. Quaerat eveniet molestias qui voluptas. Exercitationem vitae modi aliquam aut facilis in omnis.",
                "description": "Non maiores expedita quas sit officiis possimus sed. Facilis dolorum totam culpa aliquam alias ut. Itaque voluptates dolores repellat iste. Omnis rem illo omnis magnam corrupti fuga.",
                "description_en": "Aperiam laboriosam eaque sed sed nobis rerum. Dolorem quia ipsum alias. Ex in laboriosam quidem incidunt id eum aut vitae. Eaque temporibus expedita deserunt et excepturi.",
                "usage": "Amet itaque perferendis eos fugiat est dolor rerum. Nostrum autem laboriosam deleniti autem. Nesciunt maiores officia quam ipsa quasi reiciendis quibusdam.",
                "usage_en": "Esse quo et non qui qui nam. Assumenda aut aperiam eum quis. Et sunt eius iusto maiores culpa natus consequuntur. Esse aut eum et quis.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/85\/597\/168\/vika-mountains-mountain-landscape-stunning-scenery-magical-mountain-road-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/876\/791\/815\/sky-landscape-spring-fields-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/404\/126\/559\/snow-forest-snow-landscape-winter-preview.jpg",
                "product_video": null,
                "status": 1,
                "rating": 7.1,
                "sold_count": 9522,
                "review_count": 3074,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-28 06:27:12",
                "updated_at": "2020-10-13 04:44:15",
                "product_category": {
                    "id": 5,
                    "name": "香水",
                    "slug": "nesciunt-non",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/29\/942\/431\/sunset-evening-landscape-evening-sky-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/846\/560\/1017\/sky-mountain-cloud-landscape-preview.jpg",
                    "title": "similique ut rerum",
                    "title_en": "non ipsum maxime",
                    "sub_title": "quia ratione numquam",
                    "describe": "In nesciunt dolor laborum qui impedit et. Odit non maiores doloremque consequatur impedit. Qui quia mollitia ex at sapiente. Officiis iusto quasi eveniet occaecati alias culpa molestiae et.",
                    "describe_en": "Distinctio et amet occaecati est vero. Rerum omnis corporis at facilis asperiores. Tempore sunt vel non deserunt quae quia quo aut. Est eveniet molestias et nostrum omnis quia.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/84\/169\/280\/landscape-road-highway-preview.jpg",
                    "type": 1,
                    "parent_id": 19,
                    "level": 1,
                    "created_at": "2020-09-25 10:24:21",
                    "updated_at": "2020-10-09 05:32:13"
                }
            },
            {
                "id": 3,
                "product_category_id": 9,
                "product_name": "纯皙精致",
                "product_name_en": "natus harum vero",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/563\/590\/500\/the-scenery-nature-plateau-preview.jpg",
                "slug": "non-expedita",
                "short_description": "Fugit consequatur error sapiente eaque itaque.",
                "short_description_en": "Hic est aspernatur molestiae rerum. Expedita iste aut optio nam ratione ut rerum.",
                "price": "9055.00",
                "sale_price": "0.01",
                "stock": 244,
                "spec": "30 ml \/ 1.0 oz.",
                "seo_title": "incidunt dolores libero",
                "seo_keyword": "hic",
                "seo_description": "Quia harum aut pariatur.",
                "benefit": "Et quam et debitis illo id. Delectus quia delectus quia soluta. Quasi dolor possimus aut eaque eveniet voluptatem modi.",
                "benefit_en": "Omnis nesciunt et distinctio id. Excepturi et enim quia sit iusto. Provident libero dolor veritatis eos illo perferendis.",
                "tech_description": "Voluptatem enim alias non culpa. Libero et voluptatum quis amet nostrum. Ullam nobis et iure sed ad hic.",
                "tech_description_en": "Officia natus in aut quos officiis architecto. Quo vel voluptatem recusandae aliquam vitae aperiam quidem. Assumenda sit ut alias aperiam.",
                "description": "Nobis accusamus ut aut modi officiis. Quod ipsa laborum voluptas incidunt incidunt fugiat. Eum pariatur est consequatur necessitatibus eos ipsam cupiditate sit. Qui qui est laboriosam modi praesentium mollitia.",
                "description_en": "Voluptatem ad voluptatum est quos vero quo. Quasi et et corporis animi laudantium consequatur aut adipisci. Et optio sapiente rerum et dolorem suscipit. Est magni quidem consectetur aliquam et saepe.",
                "usage": "Nostrum voluptatem neque ut excepturi architecto aut. Omnis officia aliquam rem deleniti consectetur.",
                "usage_en": "Hic accusamus nostrum magni recusandae ut. Voluptatibus dolorem voluptatem laborum. Suscipit sapiente debitis ea.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/883\/702\/401\/flowers-landscape-nature-summer-landscape-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/499\/189\/232\/lake-landscape-blue-nature-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/1016\/718\/357\/landscape-sea-summer-landscape-nature-landscape-preview.jpg",
                "product_video": null,
                "status": 1,
                "rating": 2.74,
                "sold_count": 4654,
                "review_count": 9256,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-10-05 12:16:56",
                "updated_at": "2020-10-15 10:12:42",
                "product_category": {
                    "id": 9,
                    "name": "爽肤水",
                    "slug": "ea-nobis",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/935\/226\/544\/fog-landscape-mountain-range-mountains-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/631\/162\/440\/timpanogos-mountain-landscape-nature-preview.jpg",
                    "title": "enim eum mollitia",
                    "title_en": "doloremque et minus",
                    "sub_title": "voluptate voluptas blanditiis",
                    "describe": "Aperiam eveniet et impedit nihil. Architecto ea ipsum quis dolor sapiente at ipsam. Sapiente impedit libero voluptate sed quia. Voluptas voluptatem adipisci et.",
                    "describe_en": "Nam illo fugit explicabo rerum facilis totam ipsum alias. Non et numquam itaque aut aspernatur est. Quibusdam eum eos sint est. Voluptatem quo autem quod aut vero.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/796\/325\/267\/china-yangtze-river-landscape-preview.jpg",
                    "type": 1,
                    "parent_id": 22,
                    "level": 1,
                    "created_at": "2020-10-06 19:03:50",
                    "updated_at": "2020-10-16 05:55:16"
                }
            },
            {
                "id": 4,
                "product_category_id": 6,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "necessitatibus quae et",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/677\/212\/909\/horseshoe-bend-american-landscape-curve-canyon-preview.jpg",
                "slug": "blanditiis-occaecati",
                "short_description": "Quisquam quia dignissimos dolore recusandae hic.",
                "short_description_en": "Et sint repudiandae voluptas deleniti aut. Pariatur et quo velit quae mollitia. Consequatur sed unde possimus est quam.",
                "price": "7254.00",
                "sale_price": "0.01",
                "stock": 251,
                "spec": "150 ml \/ 2.0 oz",
                "seo_title": "et dicta corporis",
                "seo_keyword": "rerum",
                "seo_description": "Et possimus error iure animi ut culpa.",
                "benefit": "Sed ea molestias praesentium sed. Ea qui hic voluptas illum voluptas. Ullam ducimus enim quas debitis ex est. Et assumenda est nostrum cum est voluptatem. Tempore atque aut sit ab.",
                "benefit_en": "Reiciendis velit ab omnis totam. Iure dolores aut deleniti sunt. Debitis quas quos ea placeat dignissimos. Omnis consequatur minima aliquam quo quia neque aut.",
                "tech_description": "Aut quia corporis at. Ab nam et esse autem non sit consectetur. Sit occaecati ipsam consequuntur est ut.",
                "tech_description_en": "Ut impedit sed ratione consequuntur aperiam nesciunt. Est dolorum iusto consequuntur natus corporis ex ut occaecati. Sequi odit non temporibus.",
                "description": "Nobis quisquam animi officia excepturi qui temporibus. Aliquid tenetur aliquid voluptatem non aut harum.",
                "description_en": "Sit voluptatem facere et aliquid aut pariatur occaecati. Ut voluptatem repudiandae non hic cum. Dolor incidunt in harum occaecati. Voluptatibus iusto non aut cumque vel ut sunt modi.",
                "usage": "Quibusdam laborum iste quam nostrum vel. Et voluptatem nostrum inventore tenetur est mollitia. Quia facere incidunt magnam. Nam repudiandae est distinctio omnis sapiente asperiores reiciendis.",
                "usage_en": "Dolor et qui et sunt dolorum. Dolor excepturi quis est odit. Molestiae laboriosam molestias consequatur amet quis mollitia eos.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/621\/954\/463\/landscape-mountain-mountain-river-lake-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/774\/537\/312\/land-field-sunrise-landscape-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/963\/130\/574\/mountains-passes-clouds-mist-preview.jpg",
                "product_video": null,
                "status": 1,
                "rating": 7.45,
                "sold_count": 4338,
                "review_count": 7369,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-18 22:21:34",
                "updated_at": "2020-09-26 18:21:32",
                "product_category": {
                    "id": 6,
                    "name": "眼线",
                    "slug": "in-illo",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/223\/246\/360\/sky-clouds-blue-summer-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/363\/893\/107\/mountain-snow-mountaineering-mountain-landscape-preview.jpg",
                    "title": "non sit impedit",
                    "title_en": "natus et cum",
                    "sub_title": "hic dicta labore",
                    "describe": "Sed nobis distinctio dolorem commodi enim et vitae. Sed iusto maxime saepe architecto quia eaque. Non cum labore et consequatur id quaerat ut.",
                    "describe_en": "Nisi temporibus fugiat et. Quos sunt tempore eum quia fugit totam. Est iure cumque fugiat ad laudantium. Amet fugiat tenetur eligendi facilis. Dolorem officia maxime commodi ducimus maiores pariatur.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/1011\/426\/535\/maldives-landscape-beach-preview.jpg",
                    "type": 1,
                    "parent_id": 10,
                    "level": 1,
                    "created_at": "2020-10-07 00:51:24",
                    "updated_at": "2020-10-03 17:21:39"
                }
            },
            {
                "id": 5,
                "product_category_id": 2,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "in qui eveniet",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/136\/256\/984\/landscape-reflection-waves-ripples-preview.jpg",
                "slug": "aspernatur-odit",
                "short_description": "Reprehenderit ab dolorem dolores aspernatur eos.",
                "short_description_en": "Laboriosam voluptatem hic perspiciatis aperiam odit. Laboriosam sed inventore vel. A recusandae illo non est.",
                "price": "5168.00",
                "sale_price": "0.01",
                "stock": 774,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "et suscipit ut",
                "seo_keyword": "ex",
                "seo_description": "Molestias eum numquam provident eos modi id.",
                "benefit": "Eos molestias illo aut quo. Ipsum consectetur explicabo mollitia aut quasi quaerat mollitia. Nihil quia nulla consectetur neque dolorum earum. Nisi qui asperiores autem.",
                "benefit_en": "Esse dolores soluta inventore facere officia rerum. Incidunt pariatur necessitatibus quia nostrum quo itaque. Eius sint labore reprehenderit.",
                "tech_description": "Est laboriosam occaecati doloribus quasi. Doloremque nisi rerum ut alias voluptas aut consectetur atque. Est non labore quae.",
                "tech_description_en": "Quasi exercitationem qui accusamus consequuntur. Voluptatem ut occaecati qui voluptates et sunt. Ducimus dolores optio quasi error vitae consequatur. Et et aspernatur non est est exercitationem.",
                "description": "Ea voluptatem non hic sequi. Harum ipsam et et dolores corporis veniam. Asperiores deleniti molestiae facere nisi corporis sit.",
                "description_en": "Sequi eum minima ipsam vel explicabo commodi nam voluptatem. Consequuntur quam ipsum est.",
                "usage": "Nam dolorum velit pariatur perferendis animi. Aut magni fuga hic. Necessitatibus minima nulla repudiandae et. Nobis sed quaerat inventore.",
                "usage_en": "Incidunt molestiae error vel delectus sint. Voluptas officiis ut odio dolorem ex. Cumque sit in inventore quia perferendis consectetur nemo. Laborum quia ab labore eos quas.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/139\/62\/444\/desert-rock-sandstone-landscape-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/876\/791\/815\/sky-landscape-spring-fields-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/194\/252\/884\/switzerland-landscapes-clouds-preview.jpg",
                "product_video": null,
                "status": 2,
                "rating": 8.63,
                "sold_count": 2033,
                "review_count": 1826,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-10-09 21:14:32",
                "updated_at": "2020-09-19 07:45:05",
                "product_category": {
                    "id": 2,
                    "name": "眼霜",
                    "slug": "cupiditate-unde",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/741\/475\/682\/iceland-nature-landscape-countryside-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/686\/972\/951\/rainbow-landscape-cloud-preview.jpg",
                    "title": "quo tenetur ex",
                    "title_en": "rerum est qui",
                    "sub_title": "hic assumenda similique",
                    "describe": "Sapiente voluptatem repellendus odio rerum adipisci. Ut est dolorem nesciunt ullam consequuntur modi doloremque. Et reiciendis autem perspiciatis qui.",
                    "describe_en": "Velit rerum cupiditate omnis aliquam. Qui ducimus beatae quasi magni eos. Aspernatur est harum et provident sunt quas.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/582\/945\/105\/desert-landscape-desert-landscape-arizona-preview.jpg",
                    "type": 1,
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-09-23 01:40:32",
                    "updated_at": "2020-10-13 17:45:45"
                }
            },
            {
                "id": 6,
                "product_category_id": 7,
                "product_name": "黑钻肌光精华",
                "product_name_en": "necessitatibus corporis voluptas",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/590\/214\/569\/sunset-landscape-summer-sol-preview.jpg",
                "slug": "facere-eum",
                "short_description": "Error omnis quidem nostrum.",
                "short_description_en": "Et id maiores ut delectus in aut. Sequi exercitationem ducimus aperiam debitis earum libero perspiciatis. Ipsam maiores delectus pariatur quia in nobis dolorem.",
                "price": "1399.00",
                "sale_price": "0.01",
                "stock": 159,
                "spec": "150 ml \/ 2.0 oz",
                "seo_title": "veniam ipsam asperiores",
                "seo_keyword": "aut",
                "seo_description": "Error aliquid nostrum soluta facilis eveniet.",
                "benefit": "Non inventore incidunt qui et officiis. Et quia laboriosam repellendus sequi vero. Cupiditate deserunt sit veritatis repellat.",
                "benefit_en": "Earum debitis similique ut. Rerum aspernatur corporis veniam. Est qui dicta omnis tenetur quisquam eligendi aut dolor. Dolores sapiente architecto sequi officia aut voluptas maxime.",
                "tech_description": "Minus ipsum minus est. Commodi qui et reiciendis nostrum quaerat magni. Sint nam tenetur placeat quasi perspiciatis labore praesentium. Magnam doloremque reiciendis quia aliquam rerum quo.",
                "tech_description_en": "Asperiores ut asperiores vel quibusdam quidem cupiditate. Sunt possimus dolorum facilis molestiae accusamus est nisi maxime. Autem vel ipsa optio laborum nulla repudiandae id consequuntur. Et consectetur repellat molestiae provident illum quis.",
                "description": "Odio incidunt doloremque quo ducimus tempore aliquam ut. Praesentium quia quisquam mollitia sit. Fuga doloremque hic nobis vero tempora maxime. Adipisci aut sint sapiente non et omnis. Mollitia dolor magni amet dolorem.",
                "description_en": "Sit natus culpa fuga laborum. Voluptatum sunt ut natus est praesentium labore aut earum. Saepe similique qui deleniti. Facilis delectus totam vel porro.",
                "usage": "Et provident libero veniam nisi repellat. Accusamus neque quo libero ullam hic eum qui. Recusandae non nihil ducimus aut iusto. In aliquam rerum nulla beatae veritatis officia quae.",
                "usage_en": "Et culpa ipsam qui et qui. Consequatur nesciunt cupiditate qui natus. Ut numquam et minima magnam ipsum animi.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/846\/917\/318\/house-landscape-tree-scenic-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/381\/984\/11\/hong-kong-channel-sea-water-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/501\/630\/424\/forest-landscape-sun-trees-preview.jpg",
                "product_video": null,
                "status": 2,
                "rating": 5.08,
                "sold_count": 3039,
                "review_count": 8977,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-10-13 02:08:42",
                "updated_at": "2020-10-07 06:03:23",
                "product_category": {
                    "id": 7,
                    "name": "唇膏",
                    "slug": "consectetur-aperiam",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/743\/29\/211\/mountains-sea-booked-landscape-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/847\/729\/121\/tree-desert-landscape-nature-preview.jpg",
                    "title": "laborum voluptatum perspiciatis",
                    "title_en": "nihil nulla fuga",
                    "sub_title": "maxime sit soluta",
                    "describe": "Doloribus laboriosam incidunt sunt modi odit illo. Illum optio saepe veritatis eos aut repellat. Cumque dolores beatae earum. Ipsum ipsam ut sint.",
                    "describe_en": "Exercitationem maxime tenetur et hic sequi. Excepturi suscipit et nostrum consequatur minus. Id esse quia voluptate quam.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/893\/1018\/548\/desert-dune-algodones-dunes-dunes-preview.jpg",
                    "type": 1,
                    "parent_id": 30,
                    "level": 1,
                    "created_at": "2020-10-05 06:59:00",
                    "updated_at": "2020-10-10 12:54:52"
                }
            },
            {
                "id": 7,
                "product_category_id": 5,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "qui natus suscipit",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/98\/349\/183\/countryside-tree-landscape-sunlight-preview.jpg",
                "slug": "fugit-repudiandae",
                "short_description": "Corrupti neque dolor aut quis.",
                "short_description_en": "Incidunt qui at eligendi magni beatae quidem. Error quo officia aut est eius recusandae. Sapiente omnis voluptatem et quia aut. Molestiae quas error voluptas esse tenetur.",
                "price": "5205.00",
                "sale_price": "0.01",
                "stock": 513,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "unde eveniet animi",
                "seo_keyword": "eos",
                "seo_description": "Blanditiis placeat sint rerum saepe et delectus.",
                "benefit": "Eveniet dolore consequuntur dolores sequi. Officiis unde necessitatibus error qui aut. Inventore rerum quisquam id et cupiditate amet ut. Sed repellendus assumenda voluptatem aperiam provident animi a quam.",
                "benefit_en": "Dicta eius aperiam nihil sint unde. Ea soluta nam impedit reprehenderit eaque. Quia reprehenderit sit aspernatur iusto quod. Ad distinctio voluptatem ipsum ab temporibus cupiditate.",
                "tech_description": "Facere nemo magni id nihil. Voluptas qui ab consequatur sed accusamus ut.",
                "tech_description_en": "Iure ut temporibus minus. Sed nemo aliquid esse aliquam commodi aut ut delectus. Eum unde soluta culpa harum et quisquam aut.",
                "description": "Nihil dolor possimus fugit aperiam nam necessitatibus. Molestiae at quas qui aut.",
                "description_en": "Natus voluptatem in quo sit veritatis placeat illum. Voluptatem officia velit tempore voluptatum aut temporibus nostrum ad. Fugit voluptatem quis aut molestias maxime ut sit.",
                "usage": "Animi nihil earum quis error voluptatem ea maxime sit. Quod quo eius et. Sed reiciendis ratione voluptatum ratione natus. Dignissimos incidunt iste velit.",
                "usage_en": "Et sit facilis est a placeat officiis deleniti veniam. Officia rerum et dolorum ut consequuntur est veniam. Tenetur cum vero voluptatibus sapiente occaecati. Voluptatem laudantium rem ex.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/460\/514\/418\/mountain-nature-waterfall-mountain-landscape-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/803\/12\/836\/sea-boat-travel-landscape-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/416\/464\/3\/sunset-lake-mountain-scenery-preview.jpg",
                "product_video": null,
                "status": 1,
                "rating": 9.94,
                "sold_count": 3065,
                "review_count": 3530,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-19 23:42:13",
                "updated_at": "2020-10-03 01:08:09",
                "product_category": {
                    "id": 5,
                    "name": "香水",
                    "slug": "nesciunt-non",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/29\/942\/431\/sunset-evening-landscape-evening-sky-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/846\/560\/1017\/sky-mountain-cloud-landscape-preview.jpg",
                    "title": "similique ut rerum",
                    "title_en": "non ipsum maxime",
                    "sub_title": "quia ratione numquam",
                    "describe": "In nesciunt dolor laborum qui impedit et. Odit non maiores doloremque consequatur impedit. Qui quia mollitia ex at sapiente. Officiis iusto quasi eveniet occaecati alias culpa molestiae et.",
                    "describe_en": "Distinctio et amet occaecati est vero. Rerum omnis corporis at facilis asperiores. Tempore sunt vel non deserunt quae quia quo aut. Est eveniet molestias et nostrum omnis quia.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/84\/169\/280\/landscape-road-highway-preview.jpg",
                    "type": 1,
                    "parent_id": 19,
                    "level": 1,
                    "created_at": "2020-09-25 10:24:21",
                    "updated_at": "2020-10-09 05:32:13"
                }
            },
            {
                "id": 8,
                "product_category_id": 3,
                "product_name": "鱼子精华",
                "product_name_en": "quia recusandae consequatur",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/855\/912\/879\/landscapes-farm-farm-landscape-preview.jpg",
                "slug": "ducimus-quaerat",
                "short_description": "Culpa laudantium voluptas illo itaque consequatur.",
                "short_description_en": "Natus laborum iste qui porro ut. Neque est exercitationem veniam ut. Quas aut qui quas corrupti quibusdam illum qui.",
                "price": "9885.00",
                "sale_price": "0.01",
                "stock": 714,
                "spec": "50 ml \/ 1.7 fl. oz",
                "seo_title": "repellendus perferendis nemo",
                "seo_keyword": "numquam",
                "seo_description": "Atque blanditiis odit rerum.",
                "benefit": "Qui natus quibusdam natus nisi porro nihil et. Consequatur aut reiciendis aliquam quis. Voluptas vel dicta accusantium corporis.",
                "benefit_en": "Perspiciatis nam soluta praesentium quia et. Beatae doloremque qui ut rerum nobis vitae. Sit non ipsam repudiandae ipsum omnis architecto non ut.",
                "tech_description": "Veniam odit corrupti commodi laudantium provident nam possimus quia. Itaque sed qui consequatur soluta. Est placeat rerum consequatur sint rerum. Numquam sed assumenda aut est dolore corporis id aliquid. Libero voluptatem modi est sed omnis et magnam perferendis.",
                "tech_description_en": "Delectus soluta quas perspiciatis provident delectus quia. Ducimus fugiat quas laboriosam repellat atque. Dolorum quam autem beatae voluptates. Soluta dolorem quis vel.",
                "description": "Rerum aut eos qui perspiciatis optio in. Et iure fugit impedit numquam. Pariatur accusantium fuga illum id id minima.",
                "description_en": "Atque totam quibusdam ut debitis sint aut. Reiciendis est delectus ut ad aut et debitis. Nostrum ipsa perferendis nam ad. Aliquid provident nostrum consequuntur perspiciatis. Deleniti itaque id provident.",
                "usage": "Omnis itaque explicabo reprehenderit est assumenda. Culpa aut officiis aut fugit quae vel quibusdam. Ex labore officia molestiae voluptas rerum. Consequatur repellendus magni modi consequatur.",
                "usage_en": "Ipsum tenetur ut impedit natus. Soluta maiores debitis minima. Ut nam rerum omnis cupiditate.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/72\/552\/919\/sunset-sky-nature-sunset-landscape-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/95\/303\/719\/skyscraper-business-urban-landscape-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/572\/378\/457\/tree-nature-autumn-meadow-preview.jpg",
                "product_video": null,
                "status": 2,
                "rating": 9.84,
                "sold_count": 2276,
                "review_count": 5500,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-10-08 17:17:17",
                "updated_at": "2020-10-02 14:15:14",
                "product_category": {
                    "id": 3,
                    "name": "粉底液",
                    "slug": "consequuntur-ut",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/573\/159\/638\/urban-moon-city-skyline-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/265\/1017\/64\/mill-landscape-holland-spring-preview.jpg",
                    "title": "nemo eveniet neque",
                    "title_en": "sint quisquam eos",
                    "sub_title": "voluptatem id fugit",
                    "describe": "Voluptate et qui laboriosam sed facilis. Eaque omnis molestias velit possimus iste rerum nesciunt. Voluptatem illo aut minima est voluptas eum hic accusantium.",
                    "describe_en": "In qui sunt dolorum facilis ducimus voluptas. Aut qui enim nemo ex veniam nulla. Non facere odit fugit deleniti.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/451\/163\/659\/china-hangzhou-boot-mountains-preview.jpg",
                    "type": 1,
                    "parent_id": 1,
                    "level": 1,
                    "created_at": "2020-10-03 20:52:50",
                    "updated_at": "2020-09-19 16:55:40"
                }
            },
            {
                "id": 9,
                "product_category_id": 10,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "alias similique dolor",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/378\/569\/87\/landscape-nature-sunset-evening-preview.jpg",
                "slug": "voluptatem-ut",
                "short_description": "Suscipit saepe nemo voluptas quia dolor.",
                "short_description_en": "Quas molestias beatae accusamus a ad et. Dolor earum qui esse eligendi qui. Maxime quisquam praesentium est dicta.",
                "price": "8363.00",
                "sale_price": "0.01",
                "stock": 159,
                "spec": "50 ml \/ 1.7 fl. oz",
                "seo_title": "rem quas facere",
                "seo_keyword": "dolores",
                "seo_description": "Dolor laudantium quasi asperiores perspiciatis quasi.",
                "benefit": "Et expedita unde ut ipsa sit quia reprehenderit. Necessitatibus dicta excepturi fuga quia.",
                "benefit_en": "Sed voluptas animi eaque vel eum eveniet molestias voluptatem. Quam nam dolor atque ipsam atque quisquam. Ut maxime voluptas ratione. Qui maxime voluptate sed velit molestias dolorem.",
                "tech_description": "Nisi veniam exercitationem consequuntur et non sint. Fugit qui cupiditate iure voluptatem. Nesciunt dolores dolor ut modi.",
                "tech_description_en": "Et rerum sapiente ea laborum eos unde fugit dignissimos. Eveniet quia non consequatur tempora. Est eos voluptatem est repellat delectus.",
                "description": "Facere ut deleniti nobis libero aut. Deserunt alias illo aliquam nemo est. Amet aut et fugit et asperiores et et impedit. Aut autem necessitatibus ut officiis et cupiditate.",
                "description_en": "Autem cumque iure est et non. Temporibus non necessitatibus nesciunt harum omnis. Commodi illo cumque voluptas. Perspiciatis ut debitis molestias natus blanditiis pariatur illum. Totam ipsam iusto placeat voluptas eum odit totam.",
                "usage": "Error mollitia magni sit dicta. Quam explicabo vitae recusandae ducimus vitae unde est quas. Voluptas sint nihil molestiae voluptatem.",
                "usage_en": "Fugiat aperiam a qui at a cum nihil. Eveniet rerum ut quia nulla placeat voluptas. Nobis cum quis libero eaque facere mollitia et.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/587\/557\/309\/nomadic-life-yurts-landscape-mongolia-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/71\/164\/970\/mountains-scenery-landscape-scenic-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/527\/602\/408\/rough-horn-alpine-tannheimer-mountains-mountain-preview.jpg",
                "product_video": null,
                "status": 3,
                "rating": 5.35,
                "sold_count": 7416,
                "review_count": 2431,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-25 08:28:31",
                "updated_at": "2020-09-19 04:57:53",
                "product_category": {
                    "id": 10,
                    "name": "唇膏",
                    "slug": "atque-et",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/1011\/426\/535\/maldives-landscape-beach-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/893\/1018\/548\/desert-dune-algodones-dunes-dunes-preview.jpg",
                    "title": "impedit quas sed",
                    "title_en": "sed eum magni",
                    "sub_title": "id aut temporibus",
                    "describe": "Alias quas sunt aliquid ut fugiat fugit. Ut nostrum voluptatem voluptas est aut natus. Fugit placeat natus ut recusandae. Magni id nam et aut iste.",
                    "describe_en": "Cum dicta voluptatem quis. Consequuntur placeat aut veniam maiores deleniti.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/241\/139\/743\/waterfall-forest-streams-landscape-preview.jpg",
                    "type": 1,
                    "parent_id": 20,
                    "level": 1,
                    "created_at": "2020-09-30 01:55:03",
                    "updated_at": "2020-09-21 17:49:05"
                }
            },
            {
                "id": 10,
                "product_category_id": 10,
                "product_name": "黑钻焕肤水",
                "product_name_en": "magni tempore quam",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/717\/125\/127\/sunset-storm-sky-landscape-preview.jpg",
                "slug": "et-facere",
                "short_description": "Ut rerum dolorem pariatur molestias nisi.",
                "short_description_en": "Dolorum est consequatur et alias saepe fugit. Voluptatem aut dolores laborum delectus qui unde. Delectus sed quo vel iusto nihil placeat.",
                "price": "6835.00",
                "sale_price": "0.01",
                "stock": 677,
                "spec": "30 ml \/ 1.0 oz.",
                "seo_title": "ea nihil sequi",
                "seo_keyword": "aut",
                "seo_description": "Ea facilis mollitia qui.",
                "benefit": "Minima in non vitae officiis omnis neque in. Officia qui non sit saepe. Quae aliquid perspiciatis sit fuga saepe in earum. Culpa aspernatur est quibusdam.",
                "benefit_en": "Enim vero porro quia alias dicta. Molestiae repudiandae maiores in repudiandae. Quod accusantium et aliquam voluptatum et voluptatem possimus. Quis et a repellendus praesentium repellendus voluptatem natus.",
                "tech_description": "Neque aut sapiente voluptatem voluptatem dignissimos. Ea molestiae commodi quo praesentium mollitia cum aspernatur. Dolorum et vero esse hic facere.",
                "tech_description_en": "Nulla vero dignissimos voluptas odit voluptas. Adipisci at at natus excepturi in ut molestiae. Culpa omnis numquam non non quia qui ducimus voluptas.",
                "description": "Consequuntur est ullam aut. Magni ut nobis cupiditate est. Quia illum esse quia consequatur. Error tenetur adipisci debitis ea voluptatum hic.",
                "description_en": "Laudantium repellendus ut enim harum consequuntur mollitia id. Incidunt qui et et et expedita harum asperiores qui. Maiores molestias sit dolorum nostrum perspiciatis pariatur architecto. Sit dolor officiis incidunt consequatur.",
                "usage": "Velit est eos qui aut quisquam. Est maxime occaecati voluptas saepe voluptatum repellat. Eos nesciunt asperiores dolorum autem voluptatem quam earum iure. Ut voluptate nam et accusamus sint mollitia aut voluptas.",
                "usage_en": "Corporis explicabo quo quod asperiores totam reprehenderit alias. Quis dicta excepturi voluptatem tempore velit minus consequuntur. Temporibus ut est eos quia et.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/4\/250\/336\/japan-temple-landscape-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/185\/10\/429\/sunrise-phu-quoc-island-ocean-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/65\/127\/720\/new-zealand-earth-space-telescope-preview.jpg",
                "product_video": null,
                "status": 1,
                "rating": 7.79,
                "sold_count": 6221,
                "review_count": 2745,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-30 08:54:14",
                "updated_at": "2020-10-14 16:44:03",
                "product_category": {
                    "id": 10,
                    "name": "唇膏",
                    "slug": "atque-et",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/1011\/426\/535\/maldives-landscape-beach-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/893\/1018\/548\/desert-dune-algodones-dunes-dunes-preview.jpg",
                    "title": "impedit quas sed",
                    "title_en": "sed eum magni",
                    "sub_title": "id aut temporibus",
                    "describe": "Alias quas sunt aliquid ut fugiat fugit. Ut nostrum voluptatem voluptas est aut natus. Fugit placeat natus ut recusandae. Magni id nam et aut iste.",
                    "describe_en": "Cum dicta voluptatem quis. Consequuntur placeat aut veniam maiores deleniti.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/241\/139\/743\/waterfall-forest-streams-landscape-preview.jpg",
                    "type": 1,
                    "parent_id": 20,
                    "level": 1,
                    "created_at": "2020-09-30 01:55:03",
                    "updated_at": "2020-09-21 17:49:05"
                }
            },
            {
                "id": 11,
                "product_category_id": 7,
                "product_name": "黑钻焕肤水",
                "product_name_en": "voluptate sit repellat",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/626\/889\/310\/landscape-city-gray-architecture-preview.jpg",
                "slug": "quos-dolor",
                "short_description": "Et animi sint et.",
                "short_description_en": "Non alias est qui modi nesciunt. Repellendus ut repellat perspiciatis voluptas officia nam. Numquam ipsum a temporibus sunt optio occaecati voluptatem ut. Et asperiores eos nemo laboriosam dicta unde.",
                "price": "9627.00",
                "sale_price": "0.01",
                "stock": 799,
                "spec": "30 ml \/ 1.0 oz.",
                "seo_title": "quos omnis iure",
                "seo_keyword": "nemo",
                "seo_description": "Dolorum hic incidunt ut optio delectus.",
                "benefit": "Facilis ullam sunt quo harum accusamus. Quia quo esse est magnam. Qui voluptates voluptatem blanditiis tenetur.",
                "benefit_en": "Assumenda quo ut harum. Ut dolore eaque esse sed neque enim incidunt. Sunt libero voluptas deleniti tempora dolore a. Nisi cum vero sunt amet.",
                "tech_description": "Maxime fuga laborum aliquid magni provident. Velit quam et rerum ut sed error ducimus et. Id non inventore magni aliquam voluptatem aut.",
                "tech_description_en": "Totam voluptas aut corporis omnis explicabo voluptatem accusamus. Ex ut saepe et porro architecto. Accusantium quos deserunt excepturi sunt odit aperiam quisquam.",
                "description": "Eveniet voluptatum itaque nobis rem voluptate. Unde porro tempora autem tenetur corporis quo voluptas. Dignissimos aut harum fugiat praesentium molestias quasi.",
                "description_en": "Aut alias cumque eos temporibus voluptatum corporis. Dolorum quis voluptatum dolores sed. Qui perferendis exercitationem dolore itaque voluptas quasi aut.",
                "usage": "Nulla velit molestias vero harum eum architecto. Sint aperiam et nostrum velit id. Quae maiores quaerat id harum doloremque et.",
                "usage_en": "Dolores consectetur voluptatem nisi at et accusantium et. Inventore voluptatem et rerum qui.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/1001\/547\/765\/mountain-landscape-mountain-summit-mountain-range-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/946\/822\/506\/landscape-corn-agriculture-farm-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/881\/608\/959\/sky-nature-blue-sky-landscape-preview.jpg",
                "product_video": null,
                "status": 1,
                "rating": 9.07,
                "sold_count": 7226,
                "review_count": 6668,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-29 12:40:36",
                "updated_at": "2020-09-18 23:53:17",
                "product_category": {
                    "id": 7,
                    "name": "唇膏",
                    "slug": "consectetur-aperiam",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/743\/29\/211\/mountains-sea-booked-landscape-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/847\/729\/121\/tree-desert-landscape-nature-preview.jpg",
                    "title": "laborum voluptatum perspiciatis",
                    "title_en": "nihil nulla fuga",
                    "sub_title": "maxime sit soluta",
                    "describe": "Doloribus laboriosam incidunt sunt modi odit illo. Illum optio saepe veritatis eos aut repellat. Cumque dolores beatae earum. Ipsum ipsam ut sint.",
                    "describe_en": "Exercitationem maxime tenetur et hic sequi. Excepturi suscipit et nostrum consequatur minus. Id esse quia voluptate quam.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/893\/1018\/548\/desert-dune-algodones-dunes-dunes-preview.jpg",
                    "type": 1,
                    "parent_id": 30,
                    "level": 1,
                    "created_at": "2020-10-05 06:59:00",
                    "updated_at": "2020-10-10 12:54:52"
                }
            },
            {
                "id": 12,
                "product_category_id": 3,
                "product_name": "黑钻肌光精华",
                "product_name_en": "quo repellendus quis",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/587\/167\/623\/forest-landscape-mountains-nature-preview.jpg",
                "slug": "eos-doloribus",
                "short_description": "Dolor veniam at qui eligendi sint.",
                "short_description_en": "Sed voluptates corrupti vitae est fugiat minus. Magni asperiores voluptatem natus illum omnis non consequatur. Dolor accusamus qui exercitationem maxime. Voluptas quia ab praesentium voluptatem voluptas.",
                "price": "6920.00",
                "sale_price": "0.01",
                "stock": 93,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "dolores nihil aut",
                "seo_keyword": "ea",
                "seo_description": "Ut harum distinctio eius amet error nobis.",
                "benefit": "Quisquam architecto quia omnis inventore eos eaque. Reiciendis sed ut suscipit illo cupiditate tempora. Quisquam laudantium sed eius quia necessitatibus ratione rerum. Numquam illo ut incidunt cum ex illum.",
                "benefit_en": "Et quam qui unde aut inventore. Et est iure aut dolor amet. Quae quas unde voluptatem in ut nihil eum.",
                "tech_description": "Temporibus nisi error est saepe deleniti earum. Recusandae laborum exercitationem molestiae et. Est sint quos qui provident. Est nam enim non culpa.",
                "tech_description_en": "Rerum aut dolor quo repudiandae aut. Dolorum ducimus natus labore quo in facere eveniet. Aut laudantium eos commodi.",
                "description": "Qui voluptatem vitae molestias pariatur optio. Nobis inventore nihil voluptas ipsam ut autem provident labore. Voluptas quas praesentium quis. Magnam autem mollitia unde aut qui et suscipit.",
                "description_en": "Qui inventore laboriosam aut voluptatem voluptatem. Voluptatem beatae quaerat ducimus non vero voluptatem aut tempora. Rerum nulla qui vel in voluptas ad nihil.",
                "usage": "Quisquam nobis architecto quidem sit sequi. Error ab quia voluptatem facilis quis. Quisquam cumque iusto cumque quo quo ea consequatur.",
                "usage_en": "Voluptatibus illum ut sunt maxime consectetur quos mollitia. Quibusdam neque perspiciatis deleniti vel autem et velit. Consequuntur beatae eos omnis aperiam quo.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/21\/328\/884\/tourism-landscape-travel-nature-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/314\/628\/1005\/wintry-snow-mountains-snow-landscape-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/866\/902\/422\/landscape-mountains-mountain-landscape-forest-preview.jpg",
                "product_video": null,
                "status": 2,
                "rating": 8.71,
                "sold_count": 9037,
                "review_count": 1385,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-10-02 10:14:11",
                "updated_at": "2020-10-04 06:56:23",
                "product_category": {
                    "id": 3,
                    "name": "粉底液",
                    "slug": "consequuntur-ut",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/573\/159\/638\/urban-moon-city-skyline-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/265\/1017\/64\/mill-landscape-holland-spring-preview.jpg",
                    "title": "nemo eveniet neque",
                    "title_en": "sint quisquam eos",
                    "sub_title": "voluptatem id fugit",
                    "describe": "Voluptate et qui laboriosam sed facilis. Eaque omnis molestias velit possimus iste rerum nesciunt. Voluptatem illo aut minima est voluptas eum hic accusantium.",
                    "describe_en": "In qui sunt dolorum facilis ducimus voluptas. Aut qui enim nemo ex veniam nulla. Non facere odit fugit deleniti.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/451\/163\/659\/china-hangzhou-boot-mountains-preview.jpg",
                    "type": 1,
                    "parent_id": 1,
                    "level": 1,
                    "created_at": "2020-10-03 20:52:50",
                    "updated_at": "2020-09-19 16:55:40"
                }
            },
            {
                "id": 13,
                "product_category_id": 9,
                "product_name": "亮颜修护",
                "product_name_en": "qui sunt eligendi",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/815\/49\/162\/lake-nature-water-reflections-preview.jpg",
                "slug": "laudantium-totam",
                "short_description": "Est eaque quis esse perferendis recusandae quibusdam.",
                "short_description_en": "Aspernatur ullam officia qui cupiditate nulla ut tempora et. Omnis voluptatibus consectetur necessitatibus exercitationem ea rerum accusamus. Tempore quisquam molestiae enim fugiat nemo maiores omnis sit.",
                "price": "1598.00",
                "sale_price": "0.01",
                "stock": 116,
                "spec": "30 ml \/ 1.0 oz.",
                "seo_title": "non natus quibusdam",
                "seo_keyword": "illum",
                "seo_description": "Inventore repellat corrupti ut fugit.",
                "benefit": "Vero dignissimos sint omnis repellat. Et maiores sint quod deserunt explicabo. Expedita qui nam non saepe dicta.",
                "benefit_en": "Ex molestiae tempora quos tempore accusamus consequuntur. Iure rerum neque sed et.",
                "tech_description": "Qui voluptatum non voluptatem maiores autem est vel. Iste facere a doloremque sed dolores officiis. Perferendis quisquam sunt labore distinctio est ratione excepturi. Maxime nam dolor quia et.",
                "tech_description_en": "Officia et quos aperiam vitae occaecati cumque sunt. Earum vero nostrum aliquid commodi dolores veniam ut. Magni reprehenderit nihil tempore cupiditate omnis.",
                "description": "Dignissimos voluptatum consequatur eligendi ab laborum. Omnis commodi sint perferendis necessitatibus asperiores. Nobis facilis nemo sed et unde. Nemo doloremque placeat minus magnam aperiam.",
                "description_en": "Similique adipisci animi eos aut quia eius est vero. Dolor qui fugit iure. Nostrum aut laborum adipisci facere asperiores incidunt omnis.",
                "usage": "Omnis omnis sed aspernatur ut. Odio tenetur ipsa error omnis.",
                "usage_en": "Beatae ut consectetur velit sapiente magnam. In numquam qui harum doloremque.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/180\/533\/167\/landscape-polder-rural-dutch-landscape-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/394\/613\/240\/sunset-landscape-river-sun-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/1016\/718\/357\/landscape-sea-summer-landscape-nature-landscape-preview.jpg",
                "product_video": null,
                "status": 1,
                "rating": 4.71,
                "sold_count": 9645,
                "review_count": 4587,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-10-11 12:17:12",
                "updated_at": "2020-10-12 00:41:02",
                "product_category": {
                    "id": 9,
                    "name": "爽肤水",
                    "slug": "ea-nobis",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/935\/226\/544\/fog-landscape-mountain-range-mountains-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/631\/162\/440\/timpanogos-mountain-landscape-nature-preview.jpg",
                    "title": "enim eum mollitia",
                    "title_en": "doloremque et minus",
                    "sub_title": "voluptate voluptas blanditiis",
                    "describe": "Aperiam eveniet et impedit nihil. Architecto ea ipsum quis dolor sapiente at ipsam. Sapiente impedit libero voluptate sed quia. Voluptas voluptatem adipisci et.",
                    "describe_en": "Nam illo fugit explicabo rerum facilis totam ipsum alias. Non et numquam itaque aut aspernatur est. Quibusdam eum eos sint est. Voluptatem quo autem quod aut vero.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/796\/325\/267\/china-yangtze-river-landscape-preview.jpg",
                    "type": 1,
                    "parent_id": 22,
                    "level": 1,
                    "created_at": "2020-10-06 19:03:50",
                    "updated_at": "2020-10-16 05:55:16"
                }
            },
            {
                "id": 14,
                "product_category_id": 2,
                "product_name": "鱼子精华",
                "product_name_en": "nam ea suscipit",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/677\/212\/909\/horseshoe-bend-american-landscape-curve-canyon-preview.jpg",
                "slug": "soluta-sit",
                "short_description": "Blanditiis et soluta aut qui.",
                "short_description_en": "Ex quia perspiciatis qui rerum debitis. Minima dicta et aut quos tenetur. Maxime numquam rem minus maxime. Omnis illo dolor quas in porro.",
                "price": "1526.00",
                "sale_price": "0.01",
                "stock": 110,
                "spec": "30 ml \/ 1.0 oz.",
                "seo_title": "ullam in minima",
                "seo_keyword": "quia",
                "seo_description": "Illo molestiae voluptatem non culpa quod.",
                "benefit": "Suscipit in dicta minima eaque. Labore ut natus laudantium possimus. Voluptatem et aut deleniti qui facilis explicabo unde.",
                "benefit_en": "Nobis eveniet iure doloremque non. Cum dolores quo animi omnis. Adipisci id sequi numquam sed harum odit libero illo.",
                "tech_description": "Molestiae ratione unde et. Minus et amet sunt autem. Blanditiis esse omnis corporis accusantium sunt optio ipsam.",
                "tech_description_en": "Assumenda eius soluta vel. Ea voluptas quia aut. Rerum tempore veniam veritatis repellendus. Rerum suscipit iusto sunt laudantium quis at.",
                "description": "Reprehenderit voluptates cum et. Nihil et omnis ipsam odit et. Et non exercitationem ad enim.",
                "description_en": "Cum eius non et et laudantium quia corporis id. Quisquam eligendi et veritatis velit ipsum. Ducimus et sit incidunt impedit rerum velit vero.",
                "usage": "Rerum architecto non et perferendis aperiam ex totam. Facere nesciunt deleniti assumenda deserunt consequatur placeat. Quod quaerat id sit magnam sed officia.",
                "usage_en": "Illum itaque est eaque consequatur dicta. Ratione sint et at et minima aut fugit dolor. Suscipit vel eum est id possimus. Quos architecto fugit laboriosam velit et.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/369\/526\/543\/sunset-mountains-blue-nature-sunset-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/98\/120\/895\/koralpen-wolf-mountain-styria-austria-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/953\/974\/573\/black-and-white-fog-landscape-mountains-preview.jpg",
                "product_video": null,
                "status": 1,
                "rating": 2.79,
                "sold_count": 1687,
                "review_count": 2621,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-24 14:06:02",
                "updated_at": "2020-09-21 19:54:17",
                "product_category": {
                    "id": 2,
                    "name": "眼霜",
                    "slug": "cupiditate-unde",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/741\/475\/682\/iceland-nature-landscape-countryside-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/686\/972\/951\/rainbow-landscape-cloud-preview.jpg",
                    "title": "quo tenetur ex",
                    "title_en": "rerum est qui",
                    "sub_title": "hic assumenda similique",
                    "describe": "Sapiente voluptatem repellendus odio rerum adipisci. Ut est dolorem nesciunt ullam consequuntur modi doloremque. Et reiciendis autem perspiciatis qui.",
                    "describe_en": "Velit rerum cupiditate omnis aliquam. Qui ducimus beatae quasi magni eos. Aspernatur est harum et provident sunt quas.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/582\/945\/105\/desert-landscape-desert-landscape-arizona-preview.jpg",
                    "type": 1,
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-09-23 01:40:32",
                    "updated_at": "2020-10-13 17:45:45"
                }
            },
            {
                "id": 15,
                "product_category_id": 10,
                "product_name": "臻爱铂金",
                "product_name_en": "dolorum architecto impedit",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/505\/870\/440\/scenic-landscape-countryside-preview.jpg",
                "slug": "veniam-delectus",
                "short_description": "Ducimus dolores illo qui enim ea velit.",
                "short_description_en": "Quia optio incidunt maiores qui nihil ratione omnis. Eum dolorem tempore laborum et aliquam ex. Inventore ut iure esse nulla vitae incidunt culpa unde.",
                "price": "7258.00",
                "sale_price": "0.01",
                "stock": 273,
                "spec": "50 ml \/ 1.7 fl. oz",
                "seo_title": "voluptates ullam cum",
                "seo_keyword": "voluptates",
                "seo_description": "Natus sint aut aut quia sunt nihil.",
                "benefit": "Ut quis provident ab officiis assumenda. Consectetur praesentium iste ratione natus id. Nihil ut reprehenderit animi optio consequatur debitis.",
                "benefit_en": "Voluptate rerum est cum quas maxime voluptas ratione nobis. Expedita sed suscipit mollitia illo voluptatibus enim. Aperiam sit iusto id est a nulla atque. Quidem omnis omnis alias esse.",
                "tech_description": "Magnam eius aliquid delectus enim ut. Libero non eveniet nostrum non optio. Ex ea qui consequatur corrupti consectetur autem.",
                "tech_description_en": "Porro debitis praesentium fugit omnis amet sunt. Aut animi officia sunt cupiditate nesciunt vel. Esse nihil eaque accusantium ducimus deleniti laudantium nobis. Et ad labore qui.",
                "description": "Esse voluptatem nobis repellendus cum vitae non. Nihil labore sed tempora iure vitae.",
                "description_en": "Magni dicta rem ullam unde autem et omnis. Ut beatae quis voluptatibus et. Id voluptatem ut qui. Vero nulla dolor totam nesciunt fugit fuga eligendi.",
                "usage": "Enim reiciendis at autem dolor. Repellendus atque voluptate reprehenderit et. Eos eum eos voluptas maiores magnam fugiat nihil.",
                "usage_en": "Nihil beatae sed et repudiandae dolore. Quia quos quo voluptatem voluptatem ex facere qui et. Ut voluptatem debitis aut vitae modi dolor iure.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/514\/14\/413\/sky-sun-clouds-landscapes-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/852\/8\/834\/landscape-walk-nature-blue-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/679\/540\/47\/snow-sunset-hiking-cold-preview.jpg",
                "product_video": null,
                "status": 2,
                "rating": 2.65,
                "sold_count": 9342,
                "review_count": 8701,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-19 12:26:29",
                "updated_at": "2020-10-02 07:00:35",
                "product_category": {
                    "id": 10,
                    "name": "唇膏",
                    "slug": "atque-et",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/1011\/426\/535\/maldives-landscape-beach-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/893\/1018\/548\/desert-dune-algodones-dunes-dunes-preview.jpg",
                    "title": "impedit quas sed",
                    "title_en": "sed eum magni",
                    "sub_title": "id aut temporibus",
                    "describe": "Alias quas sunt aliquid ut fugiat fugit. Ut nostrum voluptatem voluptas est aut natus. Fugit placeat natus ut recusandae. Magni id nam et aut iste.",
                    "describe_en": "Cum dicta voluptatem quis. Consequuntur placeat aut veniam maiores deleniti.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/241\/139\/743\/waterfall-forest-streams-landscape-preview.jpg",
                    "type": 1,
                    "parent_id": 20,
                    "level": 1,
                    "created_at": "2020-09-30 01:55:03",
                    "updated_at": "2020-09-21 17:49:05"
                }
            },
            {
                "id": 16,
                "product_category_id": 5,
                "product_name": "黑钻焕肤水",
                "product_name_en": "omnis molestiae qui",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/683\/318\/324\/wolf-wolves-snow-wolf-landscape-preview.jpg",
                "slug": "vitae-voluptatem",
                "short_description": "Facilis eaque tempora cupiditate autem ratione consequatur.",
                "short_description_en": "Aliquid quam consequatur assumenda. Repellat vitae voluptatem voluptas illo. Quam voluptatum tempore reiciendis minus tenetur.",
                "price": "4567.00",
                "sale_price": "0.01",
                "stock": 486,
                "spec": "150 ml \/ 2.0 oz",
                "seo_title": "est id illo",
                "seo_keyword": "sit",
                "seo_description": "Qui sed accusantium et tenetur sit est.",
                "benefit": "Debitis dolores dolor et unde. Ipsum tenetur et dolorem consequatur. Molestiae dignissimos similique ut ullam sed sunt exercitationem.",
                "benefit_en": "Quod sit alias aut quasi cumque iure. Eaque quia accusamus qui qui quasi. Iure veritatis aut et deserunt dolore provident error.",
                "tech_description": "Ut accusantium rem saepe deleniti iste. Repellendus at aperiam id et porro. Iure quo voluptates blanditiis repellat iusto laudantium nihil. Itaque sint sit sequi doloremque soluta.",
                "tech_description_en": "Ea et sed perferendis. Esse molestiae sit quo reiciendis quis impedit. Illo ut atque et consequatur. Possimus ducimus quo inventore vel quo dolor incidunt enim.",
                "description": "Doloribus animi velit magnam qui culpa. Fuga et sed dolore facilis. Omnis quibusdam nihil ut voluptas fugiat.",
                "description_en": "Placeat id minus sed minima nemo. Praesentium ea quibusdam porro libero. Provident et consequatur esse sint dolor et. Et corrupti facere quos id.",
                "usage": "Quia qui non quae dolorem necessitatibus sunt harum. Expedita ad quis ea laudantium minus ipsam. Molestiae reiciendis sit aperiam modi nesciunt consequuntur. Itaque et reiciendis maiores eos error.",
                "usage_en": "Modi est corporis officiis nostrum aliquam iure enim. In fugiat rerum voluptatem non. Veritatis illum occaecati ipsum quisquam et ut. Laudantium quas delectus exercitationem nobis dolorum aliquid quam. Eaque animi eius distinctio vel voluptatem consequatur.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/61\/304\/932\/landscape-beach-dawn-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/275\/42\/426\/forest-tree-shadow-foliage-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/409\/285\/104\/fog-sunset-peace-landscape-preview.jpg",
                "product_video": null,
                "status": 1,
                "rating": 1.73,
                "sold_count": 6221,
                "review_count": 6939,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-30 11:04:08",
                "updated_at": "2020-09-22 15:10:14",
                "product_category": {
                    "id": 5,
                    "name": "香水",
                    "slug": "nesciunt-non",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/29\/942\/431\/sunset-evening-landscape-evening-sky-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/846\/560\/1017\/sky-mountain-cloud-landscape-preview.jpg",
                    "title": "similique ut rerum",
                    "title_en": "non ipsum maxime",
                    "sub_title": "quia ratione numquam",
                    "describe": "In nesciunt dolor laborum qui impedit et. Odit non maiores doloremque consequatur impedit. Qui quia mollitia ex at sapiente. Officiis iusto quasi eveniet occaecati alias culpa molestiae et.",
                    "describe_en": "Distinctio et amet occaecati est vero. Rerum omnis corporis at facilis asperiores. Tempore sunt vel non deserunt quae quia quo aut. Est eveniet molestias et nostrum omnis quia.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/84\/169\/280\/landscape-road-highway-preview.jpg",
                    "type": 1,
                    "parent_id": 19,
                    "level": 1,
                    "created_at": "2020-09-25 10:24:21",
                    "updated_at": "2020-10-09 05:32:13"
                }
            },
            {
                "id": 17,
                "product_category_id": 1,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "laborum delectus labore",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/742\/780\/980\/landscape-tropical-palm-tree-flowers-preview.jpg",
                "slug": "possimus-voluptatem",
                "short_description": "Facilis deserunt aut quo quam natus vel suscipit.",
                "short_description_en": "Hic aliquam dolor est provident repellat est placeat. Et eius laboriosam ratione accusantium praesentium pariatur in. Voluptas sunt velit odit dolore. Velit quis est repellat qui est ex corporis.",
                "price": "8575.00",
                "sale_price": "0.01",
                "stock": 989,
                "spec": "150 ml \/ 2.0 oz",
                "seo_title": "culpa aliquid non",
                "seo_keyword": "quidem",
                "seo_description": "Molestias velit consequatur harum ipsam eos.",
                "benefit": "Ipsa optio numquam praesentium nihil earum eligendi. Beatae eius totam libero commodi architecto qui ex. Et vero illo explicabo rerum et sit architecto porro.",
                "benefit_en": "Dolore aperiam vero sunt voluptatem quas. Animi laborum consequatur aut ipsa. Reprehenderit ullam molestias reiciendis assumenda magnam et.",
                "tech_description": "Accusantium non et odio dolores aut doloribus illum. Dolorem nesciunt qui magnam iure possimus laborum facilis. Sequi quibusdam unde veniam beatae exercitationem aspernatur sit.",
                "tech_description_en": "Non dolor accusantium dolore aut beatae voluptatum. Placeat maiores sunt sit nostrum suscipit. Facere ipsam est sit corrupti. Natus eaque sed quis porro earum non in.",
                "description": "Nihil fugiat quod culpa et dolor ratione. Vel recusandae ea consequuntur et. Atque a sint aut veniam tenetur perferendis. Iste qui velit aut qui voluptas libero accusantium.",
                "description_en": "Ab aut excepturi delectus. Esse ullam dolorem libero asperiores quae. Dolores autem rem consequatur dolor minus. Et eveniet aut omnis minus cum.",
                "usage": "Optio qui sint accusantium natus aliquam. Sapiente voluptatem voluptates saepe quis mollitia. Explicabo repellendus fugit unde amet. Ut magnam id aut esse dolor.",
                "usage_en": "Ipsam quaerat nihil maiores molestias quod perferendis quisquam. At corrupti occaecati culpa sit repudiandae aut praesentium. Eligendi voluptas sunt dicta laborum saepe molestiae.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/27\/812\/1024\/landscape-autumn-fog-village-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/112\/374\/390\/urban-landscape-nanjing-purple-peak-tower-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/790\/303\/744\/landscape-rest-of-course-nature-preview.jpg",
                "product_video": null,
                "status": 1,
                "rating": 4.25,
                "sold_count": 4850,
                "review_count": 4849,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-10-15 18:55:56",
                "updated_at": "2020-09-17 07:35:29",
                "product_category": {
                    "id": 1,
                    "name": "面霜",
                    "slug": "et-nemo",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/447\/390\/416\/sunset-sunrise-sun-summer-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/197\/537\/248\/china-wind-wuzhen-garden-jiangnan-preview.jpg",
                    "title": "possimus est perferendis",
                    "title_en": "eum id nihil",
                    "sub_title": "architecto accusantium quaerat",
                    "describe": "Vero quod ipsam illum eum voluptas qui vel. Enim ad incidunt commodi ut aut velit voluptate. Aut adipisci molestiae necessitatibus iste. Pariatur minus tempora magni voluptate.",
                    "describe_en": "Magnam voluptatem ad quia ad molestias esse. Nulla consequatur animi numquam praesentium voluptate consequatur est. Et et in voluptas sed. Et facere aut inventore sapiente explicabo.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/764\/249\/198\/mountain-landscape-snowy-mountain-mountains-snow-preview.jpg",
                    "type": 1,
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-10-07 12:11:23",
                    "updated_at": "2020-09-28 11:56:47"
                }
            },
            {
                "id": 18,
                "product_category_id": 6,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "eos eius sit",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/368\/119\/815\/landscape-valley-mist-misty-preview.jpg",
                "slug": "dolores-impedit",
                "short_description": "Odit rem ut repudiandae.",
                "short_description_en": "Soluta officiis voluptatem similique reiciendis. Vero eligendi tempore sit ipsum maiores enim. Et alias cum impedit voluptatem veniam ut aperiam.",
                "price": "8920.00",
                "sale_price": "0.01",
                "stock": 801,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "dolor quo ut",
                "seo_keyword": "consectetur",
                "seo_description": "Accusamus sint voluptas ipsam iste.",
                "benefit": "Voluptas et sit dolor quos omnis nihil voluptas asperiores. Vel ratione quia non optio ducimus ullam. Dolor fuga voluptatem quo tempore fugiat labore.",
                "benefit_en": "Quia temporibus voluptate maxime vero quia. Molestias velit ut occaecati in. Enim error eos est voluptas dolore. Occaecati ipsam placeat est eius ratione laboriosam est. Ut rerum praesentium necessitatibus tempora voluptatem deleniti.",
                "tech_description": "Dignissimos culpa officia accusantium exercitationem. Aut recusandae consequatur illum fugiat. Nemo maiores nobis libero voluptatem ut. Quae molestiae numquam praesentium impedit.",
                "tech_description_en": "Impedit rerum omnis quas molestiae minima fugit. Sunt accusantium dolorem ea sint sed. Ut a atque exercitationem omnis.",
                "description": "Temporibus cumque reprehenderit dolores sit voluptatem accusamus. Labore voluptates officiis deleniti laudantium. Quam saepe id officia enim.",
                "description_en": "Earum non repellat quos. Consequatur ad debitis aut odit ducimus adipisci accusamus aspernatur. Quia qui corrupti omnis et voluptatem molestiae ipsam.",
                "usage": "Praesentium dicta sit sint necessitatibus qui sed unde. Dolorem magni aliquid inventore odit. Recusandae voluptatum unde eius labore qui nostrum. Et rerum veritatis accusantium maiores eum distinctio aut.",
                "usage_en": "Et provident possimus est. Omnis occaecati sint incidunt est sed. Qui incidunt et ipsa est autem a.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/386\/916\/963\/lake-landscape-mountain-nature-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/806\/911\/808\/winter-morning-fog-tree-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/80\/61\/115\/fall-mountains-utah-autumn-preview.jpg",
                "product_video": null,
                "status": 2,
                "rating": 0.7,
                "sold_count": 4451,
                "review_count": 9914,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-10-11 01:01:40",
                "updated_at": "2020-10-03 17:47:04",
                "product_category": {
                    "id": 6,
                    "name": "眼线",
                    "slug": "in-illo",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/223\/246\/360\/sky-clouds-blue-summer-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/363\/893\/107\/mountain-snow-mountaineering-mountain-landscape-preview.jpg",
                    "title": "non sit impedit",
                    "title_en": "natus et cum",
                    "sub_title": "hic dicta labore",
                    "describe": "Sed nobis distinctio dolorem commodi enim et vitae. Sed iusto maxime saepe architecto quia eaque. Non cum labore et consequatur id quaerat ut.",
                    "describe_en": "Nisi temporibus fugiat et. Quos sunt tempore eum quia fugit totam. Est iure cumque fugiat ad laudantium. Amet fugiat tenetur eligendi facilis. Dolorem officia maxime commodi ducimus maiores pariatur.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/1011\/426\/535\/maldives-landscape-beach-preview.jpg",
                    "type": 1,
                    "parent_id": 10,
                    "level": 1,
                    "created_at": "2020-10-07 00:51:24",
                    "updated_at": "2020-10-03 17:21:39"
                }
            },
            {
                "id": 19,
                "product_category_id": 9,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "reprehenderit eligendi temporibus",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/676\/440\/921\/landscape-mountains-nature-alpine-preview.jpg",
                "slug": "reiciendis-excepturi",
                "short_description": "Qui consequatur dolore eaque qui et.",
                "short_description_en": "Voluptas sint id enim aut repellat. Aliquam rerum cum tenetur et in. Atque reiciendis esse molestiae soluta eligendi perspiciatis qui. Numquam quos aperiam eos inventore. Natus nemo optio est iste repudiandae.",
                "price": "9128.00",
                "sale_price": "0.01",
                "stock": 458,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "dolore reprehenderit enim",
                "seo_keyword": "laborum",
                "seo_description": "Eaque iusto eum qui.",
                "benefit": "Voluptas perspiciatis quibusdam consequuntur esse ab qui. Incidunt eum aut ut tenetur distinctio sed.",
                "benefit_en": "Esse eos quia incidunt et. A alias itaque excepturi. Laboriosam cumque voluptate consequuntur sed est exercitationem in. Beatae facere ratione non non.",
                "tech_description": "In quia similique accusantium quod saepe et. Magnam ut dolorem incidunt ea. Veniam cumque libero dolorum cum ut autem quaerat. Quibusdam sed nam dolorem. Esse sed impedit quos debitis nemo omnis qui.",
                "tech_description_en": "Adipisci debitis modi fugit ipsum. Maiores eos maxime voluptas magni. Quia adipisci eos quasi. Perferendis similique cum sit id explicabo est dolores et.",
                "description": "Doloremque est eos ipsam est. Sunt voluptatem eveniet voluptates sequi eum. Ut commodi ut enim labore velit esse aut.",
                "description_en": "Sequi repellat soluta quia non consequatur corporis minus. Quos error et et laboriosam. Est perspiciatis rerum nisi ullam sequi amet expedita. Voluptate odit et ipsam mollitia consequatur. Temporibus maiores harum aliquid non enim rerum.",
                "usage": "Consequatur explicabo molestiae excepturi perspiciatis quae iusto. Ratione placeat est ut blanditiis in aliquid nesciunt non. Aut omnis expedita iure cupiditate maiores minus.",
                "usage_en": "Minus voluptatum magni iure ea vel quibusdam. Perferendis est aliquam modi dicta. Nemo voluptate ut officia voluptas ea sit.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/893\/1018\/548\/desert-dune-algodones-dunes-dunes-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/237\/624\/851\/meadow-landscape-sky-green-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/582\/686\/429\/forest-trees-nature-forests-preview.jpg",
                "product_video": null,
                "status": 1,
                "rating": 2.42,
                "sold_count": 1372,
                "review_count": 9181,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-20 06:58:33",
                "updated_at": "2020-10-03 06:51:44",
                "product_category": {
                    "id": 9,
                    "name": "爽肤水",
                    "slug": "ea-nobis",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/935\/226\/544\/fog-landscape-mountain-range-mountains-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/631\/162\/440\/timpanogos-mountain-landscape-nature-preview.jpg",
                    "title": "enim eum mollitia",
                    "title_en": "doloremque et minus",
                    "sub_title": "voluptate voluptas blanditiis",
                    "describe": "Aperiam eveniet et impedit nihil. Architecto ea ipsum quis dolor sapiente at ipsam. Sapiente impedit libero voluptate sed quia. Voluptas voluptatem adipisci et.",
                    "describe_en": "Nam illo fugit explicabo rerum facilis totam ipsum alias. Non et numquam itaque aut aspernatur est. Quibusdam eum eos sint est. Voluptatem quo autem quod aut vero.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/796\/325\/267\/china-yangtze-river-landscape-preview.jpg",
                    "type": 1,
                    "parent_id": 22,
                    "level": 1,
                    "created_at": "2020-10-06 19:03:50",
                    "updated_at": "2020-10-16 05:55:16"
                }
            },
            {
                "id": 20,
                "product_category_id": 1,
                "product_name": "钻石焕活面膜",
                "product_name_en": "cumque eligendi ratione",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/521\/161\/111\/xiamen-city-china-the-urban-landscape-preview.jpg",
                "slug": "temporibus-reiciendis",
                "short_description": "Quas corporis qui enim consequuntur sapiente.",
                "short_description_en": "Numquam ratione explicabo vel ratione asperiores dolore ratione. Omnis voluptatem voluptatum nemo error. Quasi dolorem nihil ullam delectus perferendis quam dolorem.",
                "price": "8291.00",
                "sale_price": "0.01",
                "stock": 287,
                "spec": "30 ml \/ 1.0 oz.",
                "seo_title": "dolor rem odit",
                "seo_keyword": "doloremque",
                "seo_description": "Est aut quo natus ea.",
                "benefit": "Omnis esse molestiae sunt dignissimos hic. Libero a vero quia alias qui tenetur. Odit fugit veniam odio optio enim praesentium molestiae.",
                "benefit_en": "Pariatur quo ipsam dignissimos velit aut placeat. Dolorum praesentium laborum et cupiditate aut perferendis. Voluptas distinctio ipsa qui atque. Doloribus quod saepe aut doloremque. Ut perspiciatis ex natus perspiciatis.",
                "tech_description": "Saepe omnis quae officia nesciunt aut. Iste perspiciatis possimus non ut quod ut et. Odio molestias ut tempore. Corrupti eum explicabo et autem ut et.",
                "tech_description_en": "Quia amet deleniti debitis impedit qui. Ut rerum sequi non a velit in. Sequi odit pariatur sed autem est nisi sunt.",
                "description": "Blanditiis aut consequatur alias atque et illo. Maiores est numquam sit aut qui quia.",
                "description_en": "Aliquid facilis aut qui voluptatem impedit atque. Non magnam ea odio ad sed. In hic nesciunt rerum labore delectus. Iure rerum ratione unde. Quos tenetur iste velit inventore nemo voluptatum et.",
                "usage": "Debitis eum architecto commodi ratione nisi non. Explicabo tempora itaque quia. Voluptatum facilis laboriosam ab impedit consequatur rem. Molestias voluptate aut omnis minus sit nostrum iusto.",
                "usage_en": "Asperiores dolorem ullam atque. Quasi repellendus doloremque laudantium velit qui adipisci. Sed veritatis quibusdam eum incidunt labore tenetur est aliquid. Et odit architecto ab.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/684\/384\/913\/landscape-forests-sky-water-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/401\/219\/722\/lakes-landscape-nature-lakes-region-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/565\/122\/374\/clouds-cloudy-mountains-nature-preview.jpg",
                "product_video": null,
                "status": 1,
                "rating": 1.95,
                "sold_count": 7707,
                "review_count": 8436,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-10-02 08:12:04",
                "updated_at": "2020-10-07 09:38:20",
                "product_category": {
                    "id": 1,
                    "name": "面霜",
                    "slug": "et-nemo",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/447\/390\/416\/sunset-sunrise-sun-summer-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/197\/537\/248\/china-wind-wuzhen-garden-jiangnan-preview.jpg",
                    "title": "possimus est perferendis",
                    "title_en": "eum id nihil",
                    "sub_title": "architecto accusantium quaerat",
                    "describe": "Vero quod ipsam illum eum voluptas qui vel. Enim ad incidunt commodi ut aut velit voluptate. Aut adipisci molestiae necessitatibus iste. Pariatur minus tempora magni voluptate.",
                    "describe_en": "Magnam voluptatem ad quia ad molestias esse. Nulla consequatur animi numquam praesentium voluptate consequatur est. Et et in voluptas sed. Et facere aut inventore sapiente explicabo.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/764\/249\/198\/mountain-landscape-snowy-mountain-mountains-snow-preview.jpg",
                    "type": 1,
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-10-07 12:11:23",
                    "updated_at": "2020-09-28 11:56:47"
                }
            }
        ],
        "first_page_url": "http:\/\/localhost\/api\/products?page=1",
        "from": 1,
        "last_page": 2,
        "last_page_url": "http:\/\/localhost\/api\/products?page=2",
        "next_page_url": "http:\/\/localhost\/api\/products?page=2",
        "path": "http:\/\/localhost\/api\/products",
        "per_page": 20,
        "prev_page_url": null,
        "to": 20,
        "total": 30
    },
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/products`


<!-- END_86e0ac5d4f8ce9853bc22fd08f2a0109 -->

<!-- START_0d311bc121fa5f47763c3a964aaf3691 -->
## Get the product detail
获取商品详情信息

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product/1"
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


> Example response (200):

```json
{
    "data": null,
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/product/{product_slug}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `slug` |  required  | 商品slug

<!-- END_0d311bc121fa5f47763c3a964aaf3691 -->

<!-- START_da4bd3c20cc4ba2861f9243864356cf5 -->
## Get product list by slug and type
通过导航类别和slug获取对应类别下的产品列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/products/list/product_category_skin_care/magni" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/products/list/product_category_skin_care/magni"
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


> Example response (200):

```json
{
    "data": [],
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/products/list/{navbar_category_type}/{slug}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `navbar_category_type` |  required  | 导航产品类型(可选值为:product或product_category_skin_care(参照Navbar接口返回数据))
    `slug` |  required  | Navbar返回的slug值

<!-- END_da4bd3c20cc4ba2861f9243864356cf5 -->

<!-- START_4a4da4338d117c2c1deb90e6ff7ddcc2 -->
## Get product list of status
根据产品状态获取产品列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/products/status/qui?page=est&page_limit=voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/products/status/qui"
);

let params = {
    "page": "est",
    "page_limit": "voluptatem",
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
`GET api/products/status/{status}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `status` |  required  | 商品状态(1新品,2畅销,3促销,-1下架)
#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | 页码
    `page_limit` |  optional  | 每页数量

<!-- END_4a4da4338d117c2c1deb90e6ff7ddcc2 -->

<!-- START_2a763963938f9bbdf490c64f8c1c6821 -->
## Get random innovate product list
随机获取四条创新产品

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/products/innovate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/products/innovate"
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


> Example response (200):

```json
{
    "data": [
        {
            "product_category_id": 9,
            "product_name": "纯皙精致",
            "product_name_en": "natus harum vero",
            "thumbnail": "https:\/\/i0.hippopx.com\/photos\/563\/590\/500\/the-scenery-nature-plateau-preview.jpg",
            "slug": "non-expedita",
            "short_description": "Fugit consequatur error sapiente eaque itaque.",
            "price": "9055.00",
            "sale_price": "0.01"
        },
        {
            "product_category_id": 9,
            "product_name": "亮颜修护",
            "product_name_en": "qui sunt eligendi",
            "thumbnail": "https:\/\/i0.hippopx.com\/photos\/815\/49\/162\/lake-nature-water-reflections-preview.jpg",
            "slug": "laudantium-totam",
            "short_description": "Est eaque quis esse perferendis recusandae quibusdam.",
            "price": "1598.00",
            "sale_price": "0.01"
        },
        {
            "product_category_id": 4,
            "product_name": "臻爱铂金",
            "product_name_en": "et voluptatum ut",
            "thumbnail": "https:\/\/i0.hippopx.com\/photos\/612\/892\/934\/tongyeong-sea-yi-park-5-of-the-month-preview.jpg",
            "slug": "eveniet-voluptas",
            "short_description": "Et sequi et laboriosam est aut itaque.",
            "price": "1906.00",
            "sale_price": "0.01"
        },
        {
            "product_category_id": 10,
            "product_name": "黑钻焕肤水",
            "product_name_en": "magni tempore quam",
            "thumbnail": "https:\/\/i0.hippopx.com\/photos\/717\/125\/127\/sunset-storm-sky-landscape-preview.jpg",
            "slug": "et-facere",
            "short_description": "Ut rerum dolorem pariatur molestias nisi.",
            "price": "6835.00",
            "sale_price": "0.01"
        }
    ],
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/products/innovate`


<!-- END_2a763963938f9bbdf490c64f8c1c6821 -->

<!-- START_d366a0b87688e35aa92b6df541a0ae2e -->
## Get explore product list
随机获取产品三条数据

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/products/explore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/products/explore"
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


> Example response (200):

```json
{
    "data": [
        {
            "id": 26,
            "thumbnail": "https:\/\/i0.hippopx.com\/photos\/65\/832\/40\/steppe-nevada-landscape-snow-preview.jpg",
            "slug": "vitae-omnis",
            "product_name": "钻石冰莹面膜",
            "product_name_en": "beatae et non"
        },
        {
            "id": 17,
            "thumbnail": "https:\/\/i0.hippopx.com\/photos\/742\/780\/980\/landscape-tropical-palm-tree-flowers-preview.jpg",
            "slug": "possimus-voluptatem",
            "product_name": "黑钻洁净滋养面膜",
            "product_name_en": "laborum delectus labore"
        },
        {
            "id": 18,
            "thumbnail": "https:\/\/i0.hippopx.com\/photos\/368\/119\/815\/landscape-valley-mist-misty-preview.jpg",
            "slug": "dolores-impedit",
            "product_name": "黑钻赋颜面霜",
            "product_name_en": "eos eius sit"
        }
    ],
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/products/explore`


<!-- END_d366a0b87688e35aa92b6df541a0ae2e -->

#[API] Product Category

产品分类
<!-- START_eb9c398471efceb42098dee938d34a4f -->
## Get product category list
获取产品分类列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/product_category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product_category"
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


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "面霜",
            "slug": "et-nemo",
            "thumbnail": "https:\/\/i0.hippopx.com\/photos\/447\/390\/416\/sunset-sunrise-sun-summer-preview.jpg",
            "banner": "https:\/\/i0.hippopx.com\/photos\/197\/537\/248\/china-wind-wuzhen-garden-jiangnan-preview.jpg",
            "title": "possimus est perferendis",
            "title_en": "eum id nihil",
            "sub_title": "architecto accusantium quaerat",
            "describe": "Vero quod ipsam illum eum voluptas qui vel. Enim ad incidunt commodi ut aut velit voluptate. Aut adipisci molestiae necessitatibus iste. Pariatur minus tempora magni voluptate.",
            "describe_en": "Magnam voluptatem ad quia ad molestias esse. Nulla consequatur animi numquam praesentium voluptate consequatur est. Et et in voluptas sed. Et facere aut inventore sapiente explicabo.",
            "describe_img": "https:\/\/i0.hippopx.com\/photos\/764\/249\/198\/mountain-landscape-snowy-mountain-mountains-snow-preview.jpg",
            "type": 1,
            "parent_id": 3,
            "level": 1,
            "created_at": "2020-10-07 12:11:23",
            "updated_at": "2020-09-28 11:56:47",
            "children": [
                {
                    "id": 3,
                    "name": "粉底液",
                    "slug": "consequuntur-ut",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/573\/159\/638\/urban-moon-city-skyline-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/265\/1017\/64\/mill-landscape-holland-spring-preview.jpg",
                    "title": "nemo eveniet neque",
                    "title_en": "sint quisquam eos",
                    "sub_title": "voluptatem id fugit",
                    "describe": "Voluptate et qui laboriosam sed facilis. Eaque omnis molestias velit possimus iste rerum nesciunt. Voluptatem illo aut minima est voluptas eum hic accusantium.",
                    "describe_en": "In qui sunt dolorum facilis ducimus voluptas. Aut qui enim nemo ex veniam nulla. Non facere odit fugit deleniti.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/451\/163\/659\/china-hangzhou-boot-mountains-preview.jpg",
                    "type": 1,
                    "parent_id": 1,
                    "level": 1,
                    "created_at": "2020-10-03 20:52:50",
                    "updated_at": "2020-09-19 16:55:40"
                }
            ]
        },
        {
            "id": 3,
            "name": "粉底液",
            "slug": "consequuntur-ut",
            "thumbnail": "https:\/\/i0.hippopx.com\/photos\/573\/159\/638\/urban-moon-city-skyline-preview.jpg",
            "banner": "https:\/\/i0.hippopx.com\/photos\/265\/1017\/64\/mill-landscape-holland-spring-preview.jpg",
            "title": "nemo eveniet neque",
            "title_en": "sint quisquam eos",
            "sub_title": "voluptatem id fugit",
            "describe": "Voluptate et qui laboriosam sed facilis. Eaque omnis molestias velit possimus iste rerum nesciunt. Voluptatem illo aut minima est voluptas eum hic accusantium.",
            "describe_en": "In qui sunt dolorum facilis ducimus voluptas. Aut qui enim nemo ex veniam nulla. Non facere odit fugit deleniti.",
            "describe_img": "https:\/\/i0.hippopx.com\/photos\/451\/163\/659\/china-hangzhou-boot-mountains-preview.jpg",
            "type": 1,
            "parent_id": 1,
            "level": 1,
            "created_at": "2020-10-03 20:52:50",
            "updated_at": "2020-09-19 16:55:40",
            "children": [
                {
                    "id": 1,
                    "name": "面霜",
                    "slug": "et-nemo",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/447\/390\/416\/sunset-sunrise-sun-summer-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/197\/537\/248\/china-wind-wuzhen-garden-jiangnan-preview.jpg",
                    "title": "possimus est perferendis",
                    "title_en": "eum id nihil",
                    "sub_title": "architecto accusantium quaerat",
                    "describe": "Vero quod ipsam illum eum voluptas qui vel. Enim ad incidunt commodi ut aut velit voluptate. Aut adipisci molestiae necessitatibus iste. Pariatur minus tempora magni voluptate.",
                    "describe_en": "Magnam voluptatem ad quia ad molestias esse. Nulla consequatur animi numquam praesentium voluptate consequatur est. Et et in voluptas sed. Et facere aut inventore sapiente explicabo.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/764\/249\/198\/mountain-landscape-snowy-mountain-mountains-snow-preview.jpg",
                    "type": 1,
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-10-07 12:11:23",
                    "updated_at": "2020-09-28 11:56:47"
                },
                {
                    "id": 2,
                    "name": "眼霜",
                    "slug": "cupiditate-unde",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/741\/475\/682\/iceland-nature-landscape-countryside-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/686\/972\/951\/rainbow-landscape-cloud-preview.jpg",
                    "title": "quo tenetur ex",
                    "title_en": "rerum est qui",
                    "sub_title": "hic assumenda similique",
                    "describe": "Sapiente voluptatem repellendus odio rerum adipisci. Ut est dolorem nesciunt ullam consequuntur modi doloremque. Et reiciendis autem perspiciatis qui.",
                    "describe_en": "Velit rerum cupiditate omnis aliquam. Qui ducimus beatae quasi magni eos. Aspernatur est harum et provident sunt quas.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/582\/945\/105\/desert-landscape-desert-landscape-arizona-preview.jpg",
                    "type": 1,
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-09-23 01:40:32",
                    "updated_at": "2020-10-13 17:45:45"
                },
                {
                    "id": 4,
                    "name": "隔离",
                    "slug": "quas-ducimus",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/379\/851\/739\/sunset-clouds-landscape-sea-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/724\/197\/189\/wintry-mountain-snow-snow-landscape-preview.jpg",
                    "title": "quis aut sunt",
                    "title_en": "laudantium error doloremque",
                    "sub_title": "quo commodi reiciendis",
                    "describe": "Optio quae dolorum unde voluptas aut. Natus eligendi est quia deserunt reiciendis est. Sunt autem aut ad. Temporibus dolorem optio autem officiis sit ipsa et.",
                    "describe_en": "Velit ipsam ut ullam sunt voluptates laboriosam eaque. Consequatur iste saepe mollitia est quis. Ut sed repellat et autem ab voluptate. Possimus magni aut quia tempora.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/644\/219\/810\/background-mountain-dramatic-pathway-rocks-preview.jpg",
                    "type": 1,
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-09-21 09:53:11",
                    "updated_at": "2020-09-29 03:22:49"
                },
                {
                    "id": 8,
                    "name": "面霜",
                    "slug": "iusto-facilis",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/832\/367\/598\/spring-mountains-snow-nature-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/67\/615\/630\/park-city-trees-city-park-preview.jpg",
                    "title": "et sint facere",
                    "title_en": "doloribus doloremque odio",
                    "sub_title": "dolor rerum labore",
                    "describe": "Et delectus doloremque ut recusandae. Laboriosam distinctio necessitatibus tempora qui occaecati nisi. Accusantium sequi necessitatibus accusamus quaerat nesciunt voluptatem quo.",
                    "describe_en": "Incidunt dolores tempora quisquam laboriosam velit quo deleniti. Dolores expedita dignissimos aliquam voluptatem quidem iste aliquid. Et quas temporibus quo laudantium delectus aut ducimus.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/405\/243\/822\/forest-landscape-mist-nature-preview.jpg",
                    "type": 1,
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-10-16 00:29:40",
                    "updated_at": "2020-09-20 05:43:19"
                }
            ]
        },
        {
            "id": 10,
            "name": "唇膏",
            "slug": "atque-et",
            "thumbnail": "https:\/\/i0.hippopx.com\/photos\/1011\/426\/535\/maldives-landscape-beach-preview.jpg",
            "banner": "https:\/\/i0.hippopx.com\/photos\/893\/1018\/548\/desert-dune-algodones-dunes-dunes-preview.jpg",
            "title": "impedit quas sed",
            "title_en": "sed eum magni",
            "sub_title": "id aut temporibus",
            "describe": "Alias quas sunt aliquid ut fugiat fugit. Ut nostrum voluptatem voluptas est aut natus. Fugit placeat natus ut recusandae. Magni id nam et aut iste.",
            "describe_en": "Cum dicta voluptatem quis. Consequuntur placeat aut veniam maiores deleniti.",
            "describe_img": "https:\/\/i0.hippopx.com\/photos\/241\/139\/743\/waterfall-forest-streams-landscape-preview.jpg",
            "type": 1,
            "parent_id": 20,
            "level": 1,
            "created_at": "2020-09-30 01:55:03",
            "updated_at": "2020-09-21 17:49:05",
            "children": [
                {
                    "id": 6,
                    "name": "眼线",
                    "slug": "in-illo",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/223\/246\/360\/sky-clouds-blue-summer-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/363\/893\/107\/mountain-snow-mountaineering-mountain-landscape-preview.jpg",
                    "title": "non sit impedit",
                    "title_en": "natus et cum",
                    "sub_title": "hic dicta labore",
                    "describe": "Sed nobis distinctio dolorem commodi enim et vitae. Sed iusto maxime saepe architecto quia eaque. Non cum labore et consequatur id quaerat ut.",
                    "describe_en": "Nisi temporibus fugiat et. Quos sunt tempore eum quia fugit totam. Est iure cumque fugiat ad laudantium. Amet fugiat tenetur eligendi facilis. Dolorem officia maxime commodi ducimus maiores pariatur.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/1011\/426\/535\/maldives-landscape-beach-preview.jpg",
                    "type": 1,
                    "parent_id": 10,
                    "level": 1,
                    "created_at": "2020-10-07 00:51:24",
                    "updated_at": "2020-10-03 17:21:39"
                }
            ]
        }
    ],
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/product_category`


<!-- END_eb9c398471efceb42098dee938d34a4f -->

<!-- START_fb8ef5aefefb2ded53bec9ec54fed76b -->
## Get product category story
获取产品分类故事

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/product_category/story/nulla" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product_category/story/nulla"
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


> Example response (200):

```json
{
    "data": [],
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/product_category/story/{category_slug}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `category_slug` |  required  | 分类slug

<!-- END_fb8ef5aefefb2ded53bec9ec54fed76b -->

<!-- START_631b989f5a3055e4e4c6da81ce2e857e -->
## Get product category over view
获取分类概述(目前主要分类为&#039;护肤系列&#039;;产品类为&#039;产品系列&#039;)

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/product_category/overview/product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product_category/overview/product"
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


> Example response (200):

```json
{
    "data": [],
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/product_category/overview/{navbar_category_type}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `navbar_category_type` |  required  | 通过Navbar接口获取到的type值

<!-- END_631b989f5a3055e4e4c6da81ce2e857e -->

#[API] Shop cart

购物车管理
<!-- START_f422763f18217564020435e1877230b4 -->
## Get shop cart items
请求购物车数据

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/shop_carts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/shop_carts"
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET api/shop_carts`


<!-- END_f422763f18217564020435e1877230b4 -->

<!-- START_90957246142cc2a14824b129ecd1ba3c -->
## Request store cart items
保存/更新购物车商品

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/api/shop_carts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"product_list":[{"product_id":19}]}'

```

```javascript
const url = new URL(
    "http://store.wutang.com/api/shop_carts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "product_list": [
        {
            "product_id": 19
        }
    ]
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/shop_carts`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `product_list` | array |  required  | 商品列表
        `product_list.*.product_id` | integer |  required  | 商品id
    
<!-- END_90957246142cc2a14824b129ecd1ba3c -->

<!-- START_7b69db4c02ba3f3b2cca4aace8917d35 -->
## According type to change cart item(NOT USE)
根据type改变购物车商品数量(暂未启用)

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/api/shop_carts/1?type=a&product_id=et&amount=enim" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/shop_carts/1"
);

let params = {
    "type": "a",
    "product_id": "et",
    "amount": "enim",
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
`PUT api/shop_carts/{type}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `type` |  required  | 操作类型,可传参数为:add(点击'+'时)/reduce(点击'—'时)/fixed(需传固定数量时)
    `product_id` |  optional  | rquired 商品ID
    `amount` |  optional  | optional 可选的商品数量(type为fixed时需传该参数)

<!-- END_7b69db4c02ba3f3b2cca4aace8917d35 -->

<!-- START_8339f6e25cba6f16577dbb5c09cafe73 -->
## Request delete the cart items
删除购物车商品

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/api/shop_carts/1?product_id=porro" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/shop_carts/1"
);

let params = {
    "product_id": "porro",
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
`DELETE api/shop_carts/{product_id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `product_id` |  required  | 商品id

<!-- END_8339f6e25cba6f16577dbb5c09cafe73 -->

#[API] The House

The house 类
<!-- START_469fd9ffec0fb19fa33198a1456d3b9c -->
## Get the house category
获取the house分类列表(一般总共为三条)

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/the_house/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/the_house/category"
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


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "精湛科艺",
            "slug": "voluptates-ad",
            "banner": "https:\/\/i0.hippopx.com\/photos\/988\/593\/144\/landscape-luofushan-the-scenery-preview.jpg",
            "title": "omnis corrupti eius",
            "sub_title": "sit iure ratione",
            "created_at": "2020-08-26 23:32:53",
            "updated_at": "2020-08-09 18:48:07"
        },
        {
            "id": 2,
            "name": "精彩内容",
            "slug": "et-aut",
            "banner": "https:\/\/i0.hippopx.com\/photos\/471\/78\/341\/prairie-highway-the-scenery-mountain-preview.jpg",
            "title": "nemo et et",
            "sub_title": "fuga laboriosam pariatur",
            "created_at": "2020-09-06 16:07:51",
            "updated_at": "2019-10-17 09:03:06"
        },
        {
            "id": 3,
            "name": "精湛科艺",
            "slug": "est-doloribus",
            "banner": "https:\/\/i0.hippopx.com\/photos\/375\/105\/245\/mediterranean-wine-mirroring-sol-preview.jpg",
            "title": "molestiae eum quibusdam",
            "sub_title": "voluptatem sunt nobis",
            "created_at": "2020-01-26 01:11:17",
            "updated_at": "2020-07-24 06:59:21"
        }
    ],
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/the_house/category`


<!-- END_469fd9ffec0fb19fa33198a1456d3b9c -->

<!-- START_05a7ee53707fcad41f4d343e2e1536de -->
## Get the house list by category slug
通过category内的slug获取the house 列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/the_house/category/omnis-inventore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/the_house/category/omnis-inventore"
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


> Example response (200):

```json
{
    "data": null,
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/the_house/category/{category_slug}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `category_slug` |  required  | category内的slug

<!-- END_05a7ee53707fcad41f4d343e2e1536de -->

<!-- START_ff0b66c41b1115c0fae4802591c8b3d4 -->
## Get the house detail by slug(API)
通过slug获取the house 详情

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/the_house/modi-rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/the_house/modi-rerum"
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


> Example response (200):

```json
{
    "data": null,
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/the_house/{the_house_slug}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `the_house_slug` |  required  | the house内的slug

<!-- END_ff0b66c41b1115c0fae4802591c8b3d4 -->

<!-- START_146ab37bbafe51fbf23b315b864e8d86 -->
## Get other list by category slug
通过分类slug获取其他推荐报道

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/the_house/other/omnis-inventore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/the_house/other/omnis-inventore"
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


> Example response (200):

```json
{
    "data": [],
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/the_house/other/{category_slug}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `category_slug` |  required  | category内的slug

<!-- END_146ab37bbafe51fbf23b315b864e8d86 -->

#[API] User address

用户地址管理
<!-- START_157e0e734e5b19915b7f41bafbe39486 -->
## Get user address
获取用户收货地址

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/user_addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_addresses"
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET api/user_addresses`


<!-- END_157e0e734e5b19915b7f41bafbe39486 -->

<!-- START_ea009b31c2e7270334c8f572f3ad4561 -->
## Create user address
新增用户收货地址

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/api/user_addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"province":"perspiciatis","city":"iure","district":"odio","address":"quis","zip":15,"contact_name":"aut","contact_phone":13}'

```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_addresses"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "province": "perspiciatis",
    "city": "iure",
    "district": "odio",
    "address": "quis",
    "zip": 15,
    "contact_name": "aut",
    "contact_phone": 13
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user_addresses`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `province` | string |  required  | 省
        `city` | string |  required  | 市
        `district` | string |  required  | 区
        `address` | string |  required  | 详细地址
        `zip` | integer |  required  | 邮编
        `contact_name` | string |  required  | 联系人
        `contact_phone` | integer |  required  | 手机号
    
<!-- END_ea009b31c2e7270334c8f572f3ad4561 -->

<!-- START_58d901fe49390c7afe94755dd24b0c3c -->
## Edit user address
编辑用户地址

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/api/user_addresses/1?province=omnis&city=voluptatibus&district=autem&address=sed&zip=officia&contact_name=blanditiis&contact_phone=a" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_addresses/1"
);

let params = {
    "province": "omnis",
    "city": "voluptatibus",
    "district": "autem",
    "address": "sed",
    "zip": "officia",
    "contact_name": "blanditiis",
    "contact_phone": "a",
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
    `province` |  optional  | 省
    `city` |  optional  | 市
    `district` |  optional  | 区
    `address` |  optional  | 详细地址
    `zip` |  optional  | 邮编
    `contact_name` |  optional  | 联系人
    `contact_phone` |  optional  | 手机号

<!-- END_58d901fe49390c7afe94755dd24b0c3c -->

<!-- START_afef23553387f635192dbbac6f4f2675 -->
## Destroy user Address(API)
删除用户地址

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/api/user_addresses/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_addresses/1"
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
`DELETE api/user_addresses/{address_id}`


<!-- END_afef23553387f635192dbbac6f4f2675 -->

<!-- START_557241b724d6ba82e5fce6d176f82467 -->
## Set default address
设置用户的默认收货地址

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/api/user_addresses/set_default/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_addresses/set_default/ut"
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
`PUT api/user_addresses/set_default/{address_id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `address_id` |  required  | 地址id

<!-- END_557241b724d6ba82e5fce6d176f82467 -->

#[API] User profile

用户资料管理
<!-- START_d26c16a707d8d9fa434f228311354f25 -->
## Get user profile
用户资料信息

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/user_profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_profile"
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET api/user_profile`


<!-- END_d26c16a707d8d9fa434f228311354f25 -->

<!-- START_5e65e7aa0d9f8f69e8445748d07d0f0b -->
## Update user profile
编辑用户资料(要求提示用户填写真实信息)

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/api/user_profile?phone=aut&real_name=quia&sex=nemo&birthday=autem&age=molestiae&province=nesciunt&city=molestiae&district=optio&address=fuga&zip=quidem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_profile"
);

let params = {
    "phone": "aut",
    "real_name": "quia",
    "sex": "nemo",
    "birthday": "autem",
    "age": "molestiae",
    "province": "nesciunt",
    "city": "molestiae",
    "district": "optio",
    "address": "fuga",
    "zip": "quidem",
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
`PUT api/user_profile`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `phone` |  optional  | 联系方式
    `real_name` |  required  | 真实姓名
    `sex` |  required  | 性别
    `birthday` |  optional  | 生日
    `age` |  optional  | 年龄
    `province` |  optional  | 省
    `city` |  optional  | 市
    `district` |  optional  | 区/县
    `address` |  optional  | 详细地址
    `zip` |  optional  | 邮编

<!-- END_5e65e7aa0d9f8f69e8445748d07d0f0b -->

<!-- START_12c41cb3d7f20fedabfe847dedf55c33 -->
## Bind member code
绑定上级(tips:需提交个人资料后方能提交绑定上级，否则会不予通过)

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/api/member_code/bind_parent" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"code":"et"}'

```

```javascript
const url = new URL(
    "http://store.wutang.com/api/member_code/bind_parent"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "code": "et"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/member_code/bind_parent`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `code` | string |  required  | 上级会员码
    
<!-- END_12c41cb3d7f20fedabfe847dedf55c33 -->

#[API] User wish list

用户心愿单
<!-- START_1688bef185d10bc7a124bf955a390187 -->
## Get wish list
获取心愿单商品列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/wish_list?page=rem&page_limit=quod" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/wish_list"
);

let params = {
    "page": "rem",
    "page_limit": "quod",
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET api/wish_list`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | 页码
    `page_limit` |  optional  | 分页条目

<!-- END_1688bef185d10bc7a124bf955a390187 -->

<!-- START_1d7aae83400f5c6ee98332771a897d4a -->
## Request Add product to wish list
请求将商品加入心愿单

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/api/wish_list" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"product_id":18}'

```

```javascript
const url = new URL(
    "http://store.wutang.com/api/wish_list"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "product_id": 18
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/wish_list`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `product_id` | integer |  required  | 商品id
    
<!-- END_1d7aae83400f5c6ee98332771a897d4a -->

<!-- START_2a6423a6b2e1b3a5d11e02178afebd1e -->
## Remove product from wish list
移除心愿单商品

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/api/wish_list/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/wish_list/et"
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
`DELETE api/wish_list/{product_id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `product_id` |  required  | 商品id

<!-- END_2a6423a6b2e1b3a5d11e02178afebd1e -->

#[Payment] Payment

支付管理
<!-- START_d83d4fdb2ad0cd97738fd8f69825726d -->
## Alipay bank gateway pay request
支付宝网银网关-发起支付

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/alipay/bank_gateway/pay?no=quis&total_amount=quasi&payment_key=mollitia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/alipay/bank_gateway/pay"
);

let params = {
    "no": "quis",
    "total_amount": "quasi",
    "payment_key": "mollitia",
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


> Example response (200):

```json
{
    "data": {
        "no": "quis",
        "total_amount": "quasi",
        "payment_key": "mollitia"
    },
    "code": 10001,
    "msg": "订单号不存在"
}
```

### HTTP Request
`GET alipay/bank_gateway/pay`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `no` |  required  | 订单号
    `total_amount` |  required  | 总金额
    `payment_key` |  required  | 支付key

<!-- END_d83d4fdb2ad0cd97738fd8f69825726d -->

<!-- START_9e8142da7edfe4231cefa2dcde40a834 -->
## Alipay bank gateway return
支付宝网银网关-同步跳转(前端)

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/alipay/bank_gateway/return" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/alipay/bank_gateway/return"
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
`GET alipay/bank_gateway/return`


<!-- END_9e8142da7edfe4231cefa2dcde40a834 -->

<!-- START_83827147476aabe53ef444f0cea58a33 -->
## Alipay bank gateway notify
支付宝网银网关-异步通知(服务端)

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/alipay/bank_gateway/notify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/alipay/bank_gateway/notify"
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
`POST alipay/bank_gateway/notify`


<!-- END_83827147476aabe53ef444f0cea58a33 -->

<!-- START_44125fcf9d22a14a4c731f5670c84fb9 -->
## Alipay web request payment
支付宝网页支付-发起支付

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/alipay/aop_page/pay?no=aspernatur&total_amount=et&payment_key=iste" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/alipay/aop_page/pay"
);

let params = {
    "no": "aspernatur",
    "total_amount": "et",
    "payment_key": "iste",
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


> Example response (200):

```json
{
    "data": {
        "no": "aspernatur",
        "total_amount": "et",
        "payment_key": "iste"
    },
    "code": 10001,
    "msg": "订单号不存在"
}
```

### HTTP Request
`GET alipay/aop_page/pay`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `no` |  required  | 订单号
    `total_amount` |  required  | 总金额
    `payment_key` |  required  | 支付key

<!-- END_44125fcf9d22a14a4c731f5670c84fb9 -->

<!-- START_2e9520b9cb6d5a9f552aa71e9dfe24fb -->
## Alipay web return payment results
支付宝网页支付-前端回调

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/alipay/aop_page/return" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/alipay/aop_page/return"
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
`GET alipay/aop_page/return`


<!-- END_2e9520b9cb6d5a9f552aa71e9dfe24fb -->

<!-- START_31e4f9cb9b31214a184bbdaae6c31263 -->
## Alipay web notify payment results
支付宝网页支付-服务器端回调

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/alipay/aop_page/notify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/alipay/aop_page/notify"
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
`POST alipay/aop_page/notify`


<!-- END_31e4f9cb9b31214a184bbdaae6c31263 -->

<!-- START_e938e7bfe2bb1e20c353f7e61512785e -->
## Alipay legacy express pay request
支付宝即时到账-发起支付

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/alipay/legacy_express/pay?no=aliquam&total_amount=qui&payment_key=est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/alipay/legacy_express/pay"
);

let params = {
    "no": "aliquam",
    "total_amount": "qui",
    "payment_key": "est",
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


> Example response (200):

```json
{
    "data": {
        "no": "aliquam",
        "total_amount": "qui",
        "payment_key": "est"
    },
    "code": 10001,
    "msg": "订单号不存在"
}
```

### HTTP Request
`GET alipay/legacy_express/pay`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `no` |  required  | 订单号
    `total_amount` |  required  | 总金额
    `payment_key` |  required  | 支付key

<!-- END_e938e7bfe2bb1e20c353f7e61512785e -->

<!-- START_98363d7b9d18a683d4e724d948f84012 -->
## Alipay legacy express pay return
支付宝即时到账-前端回调
说明:由于Ominipay验签有问题，此处使用我封装过的支付宝的sdk进行验签

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/alipay/legacy_express/return" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/alipay/legacy_express/return"
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


> Example response (200):

```json
{
    "data": [],
    "code": 10001,
    "msg": "验签失败"
}
```

### HTTP Request
`GET alipay/legacy_express/return`


<!-- END_98363d7b9d18a683d4e724d948f84012 -->

<!-- START_5d1c5347262d7957a198c38cb97eed1c -->
## Alipay legacy express pay notify
支付宝即时到账-服务端异步通知

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/alipay/legacy_express/notify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/alipay/legacy_express/notify"
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
`POST alipay/legacy_express/notify`


<!-- END_5d1c5347262d7957a198c38cb97eed1c -->

<!-- START_57b15f8b02c39272c4525d864576b322 -->
## Unionpay request payment
银联支付-发起支付

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/unionpay/pay?no=aspernatur&total_amount=est&payment_key=necessitatibus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/unionpay/pay"
);

let params = {
    "no": "aspernatur",
    "total_amount": "est",
    "payment_key": "necessitatibus",
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


> Example response (200):

```json
{
    "data": {
        "no": "aspernatur",
        "total_amount": "est",
        "payment_key": "necessitatibus"
    },
    "code": 10001,
    "msg": "订单号不存在"
}
```

### HTTP Request
`GET unionpay/pay`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `no` |  required  | 订单号
    `total_amount` |  required  | 总金额
    `payment_key` |  required  | 支付key

<!-- END_57b15f8b02c39272c4525d864576b322 -->

<!-- START_673ba4470f79d022ef9cbe9f5e6b3ae5 -->
## Unionpay return payment results
银联支付-前端回调

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/unionpay/return" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/unionpay/return"
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
`POST unionpay/return`


<!-- END_673ba4470f79d022ef9cbe9f5e6b3ae5 -->

<!-- START_4336c9326f44e61c527a77e4a31d299a -->
## Unionpay notify payment results
银联支付-异步通知

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/unionpay/notify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/unionpay/notify"
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
`POST unionpay/notify`


<!-- END_4336c9326f44e61c527a77e4a31d299a -->

<!-- START_8cb6fed82980f458075bd4225f653134 -->
## Unionpay bank gateway request
银联网关支付-发起支付

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/unionpay_gateway/pay?no=id&total_amount=quam&payment_key=accusamus&bank_code=quis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/unionpay_gateway/pay"
);

let params = {
    "no": "id",
    "total_amount": "quam",
    "payment_key": "accusamus",
    "bank_code": "quis",
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


> Example response (200):

```json
{
    "data": {
        "no": "id",
        "total_amount": "quam",
        "payment_key": "accusamus",
        "bank_code": "quis"
    },
    "code": 10001,
    "msg": "laravelEnum::messages.enum_key"
}
```

### HTTP Request
`GET unionpay_gateway/pay`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `no` |  required  | 订单号
    `total_amount` |  required  | 总金额
    `payment_key` |  required  | 支付key
    `bank_code` |  required  | 银行代码

<!-- END_8cb6fed82980f458075bd4225f653134 -->

<!-- START_4f6e4bdd64397024890aac4e0024ab0b -->
## Get union pay gateway bank code list
获取银联网关支付-银行代码列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/unionpay_gateway/bank_code" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/unionpay_gateway/bank_code"
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


> Example response (200):

```json
{
    "data": {
        "POST": "中国邮政储蓄银行",
        "ICBC": "中国工商银行",
        "CCB": "中国建设银行",
        "BOC": "中国银行",
        "ABC": "中国农业银行",
        "CGB": "广发银行",
        "SHB": "上海银行",
        "ECITIC": "中信银行",
        "CZB": "浙商银行",
        "CBB": "渤海银行"
    },
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET unionpay_gateway/bank_code`


<!-- END_4f6e4bdd64397024890aac4e0024ab0b -->

<!-- START_eff8dec0e271991b4b6f8e6651cdfb7f -->
## Unionpay gateway return
银联网关支付-前端回调

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/unionpay_gateway/return" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/unionpay_gateway/return"
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



### HTTP Request
`GET unionpay_gateway/return`


<!-- END_eff8dec0e271991b4b6f8e6651cdfb7f -->

<!-- START_673d30c2fdf05dadb4c5aeb9e7474a3d -->
## Unionpay gateway notify
银联网关支付-异步回调

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/unionpay_gateway/notify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/unionpay_gateway/notify"
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
`POST unionpay_gateway/notify`


<!-- END_673d30c2fdf05dadb4c5aeb9e7474a3d -->

#general


<!-- START_77797615aeaa4fce9a94150989aed46f -->
## ResponseCode explain
本方法仅作返回code通用说明(无其他作用)

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/response_code?10001=excepturi&10003=voluptates&20001=ut&40001=maxime&40003=est&40004=repellendus&40005=libero&50001=aut&P1001=minus&P1002=aliquam&P4004=qui&P4005=non" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/response_code"
);

let params = {
    "10001": "excepturi",
    "10003": "voluptates",
    "20001": "ut",
    "40001": "maxime",
    "40003": "est",
    "40004": "repellendus",
    "40005": "libero",
    "50001": "aut",
    "P1001": "minus",
    "P1002": "aliquam",
    "P4004": "qui",
    "P4005": "non",
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
    `P1001` |  optional  | 产品存在购物车
    `P1002` |  optional  | 已购买过该商品
    `P4004` |  optional  | 商品不存在
    `P4005` |  optional  | 商品售罄

<!-- END_77797615aeaa4fce9a94150989aed46f -->

<!-- START_d6a1cbe2a7e532be5e5e4df518f94318 -->
## get img resource list
获取静态图片资源列表
queryParam page 页数
queryParam page_limit 每页数量

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/assetImg" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/assetImg"
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET api/assetImg`


<!-- END_d6a1cbe2a7e532be5e5e4df518f94318 -->

<!-- START_f49c5d67a582cc0c6e282708c0796aae -->
## get img resource
获取图片资源
queryParam img_location 图片位置

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/assetImg/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/assetImg/1"
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET api/assetImg/{img_location}`


<!-- END_f49c5d67a582cc0c6e282708c0796aae -->

<!-- START_d5cebe6b38a23ecae6d7aa93869e93be -->
## Request check mamber code parent
请求验证会员码父级

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/member_code/check" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/member_code/check"
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET api/member_code/check`


<!-- END_d5cebe6b38a23ecae6d7aa93869e93be -->

<!-- START_26ec9c40d2469c3f9589a6bb9055245e -->
## admin/payment
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/payment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/payment"
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/payment`


<!-- END_26ec9c40d2469c3f9589a6bb9055245e -->

<!-- START_6c94973d9a0902bf881f803a9573b629 -->
## admin/payment/{id}
> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/payment/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/payment/1"
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
`POST admin/payment/{id}`


<!-- END_6c94973d9a0902bf881f803a9573b629 -->

<!-- START_879622c0ac94a4a0f4d364d46a42bc7e -->
## Request get role list
获取角色列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/roles"
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


> Example response (200):

```json
{
    "data": null,
    "code": 40005,
    "msg": "授权无效"
}
```

### HTTP Request
`GET admin/roles`


<!-- END_879622c0ac94a4a0f4d364d46a42bc7e -->


