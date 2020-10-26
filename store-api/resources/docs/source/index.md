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

#[ADMIN-Payment] AlipayBankGateway manage

支付宝网关管理类
Class AlipayBankGatewayController
<!-- START_d20c8a1a027633f62bf5884a456a7ff7 -->
## Request get Alipay bank gateway list
获取支付宝网关-列表

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/alipay/bank_gateway" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/bank_gateway"
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
    "http://localhost/admin/alipay/bank_gateway" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"items":[{"merch_id":"et","key":"similique","product":"fugiat"}]}'

```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/bank_gateway"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "items": [
        {
            "merch_id": "et",
            "key": "similique",
            "product": "fugiat"
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
    "http://localhost/admin/alipay/bank_gateway/1?id=dicta&merch_id=veritatis&key=minima&product=ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/bank_gateway/1"
);

let params = {
    "id": "dicta",
    "merch_id": "veritatis",
    "key": "minima",
    "product": "ut",
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
    "http://localhost/admin/alipay/bank_gateway/status/1?id=reiciendis&status=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/bank_gateway/status/1"
);

let params = {
    "id": "reiciendis",
    "status": "qui",
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
    "http://localhost/admin/alipay/bank_gateway/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/bank_gateway/1"
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
    -G "http://localhost/admin/alipay/legacy_express?page=sit&page_limit=magni" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/legacy_express"
);

let params = {
    "page": "sit",
    "page_limit": "magni",
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
    "http://localhost/admin/alipay/legacy_express" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"items":[{"pid":"in","key":"tempore","seller_email":"voluptatum"}]}'

```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/legacy_express"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "items": [
        {
            "pid": "in",
            "key": "tempore",
            "seller_email": "voluptatum"
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
    "http://localhost/admin/alipay/legacy_express/1?id=quod" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/legacy_express/1"
);

let params = {
    "id": "quod",
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
    "http://localhost/admin/alipay/legacy_express/1?id=odit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/legacy_express/1"
);

let params = {
    "id": "odit",
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
    "http://localhost/admin/alipay/legacy_express/status/1?id=beatae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/legacy_express/status/1"
);

let params = {
    "id": "beatae",
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
    -G "http://localhost/admin/union_pay/gateway" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/union_pay/gateway"
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
    "http://localhost/admin/union_pay/gateway" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"items":[{"cpid":"et","pay_type":"voluptatem"}]}'

```

```javascript
const url = new URL(
    "http://localhost/admin/union_pay/gateway"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "items": [
        {
            "cpid": "et",
            "pay_type": "voluptatem"
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
    "http://localhost/admin/union_pay/gateway/1?id=repellat&cpid=occaecati&pay_type=quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/union_pay/gateway/1"
);

let params = {
    "id": "repellat",
    "cpid": "occaecati",
    "pay_type": "quia",
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
    "http://localhost/admin/union_pay/gateway/status/1?id=quo&status=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/union_pay/gateway/status/1"
);

let params = {
    "id": "quo",
    "status": "et",
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
    "http://localhost/admin/union_pay/gateway/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/union_pay/gateway/1"
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
    -G "http://localhost/admin/asset_img?page=tempore&page_limit=modi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/asset_img"
);

let params = {
    "page": "tempore",
    "page_limit": "modi",
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
    "http://localhost/admin/asset_img" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"img":"dolorem","img_location":"et","type":"aut","product_id":"officia"}'

```

```javascript
const url = new URL(
    "http://localhost/admin/asset_img"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "img": "dolorem",
    "img_location": "et",
    "type": "aut",
    "product_id": "officia"
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
    "http://localhost/admin/asset_img/2" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"img":"quis","img_location":"eaque","type":"consequuntur","product_id":"tempore"}'

```

```javascript
const url = new URL(
    "http://localhost/admin/asset_img/2"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "img": "quis",
    "img_location": "eaque",
    "type": "consequuntur",
    "product_id": "tempore"
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
    "http://localhost/admin/asset_img/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/asset_img/1"
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
    -G "http://localhost/admin/category_stories?page=quisquam&page_limit=voluptate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories"
);

let params = {
    "page": "quisquam",
    "page_limit": "voluptate",
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
    -G "http://localhost/admin/category_stories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories/1"
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
    "http://localhost/admin/category_stories?title=ratione&title_en=quia&description=et&description_en=tenetur&banner=sint&product_category_id=sint" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories"
);

let params = {
    "title": "ratione",
    "title_en": "quia",
    "description": "et",
    "description_en": "tenetur",
    "banner": "sint",
    "product_category_id": "sint",
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
    "http://localhost/admin/category_stories/1?title=voluptatum&title_en=omnis&description=laboriosam&description_en=totam&banner=tempore&product_category_id=eos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories/1"
);

let params = {
    "title": "voluptatum",
    "title_en": "omnis",
    "description": "laboriosam",
    "description_en": "totam",
    "banner": "tempore",
    "product_category_id": "eos",
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
    "http://localhost/admin/category_stories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories/1"
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
    -G "http://localhost/admin/companies?page=architecto&page_limit=dolorem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/companies"
);

let params = {
    "page": "architecto",
    "page_limit": "dolorem",
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
    -G "http://localhost/admin/company/departments/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/company/departments/et"
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
    -G "http://localhost/admin/enums/AssetImgType" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/enums/AssetImgType"
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
    "http://localhost/admin/testUpload" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/testUpload"
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
    -G "http://localhost/admin/logs/1?page=aliquam&page_limit=assumenda" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/logs/1"
);

let params = {
    "page": "aliquam",
    "page_limit": "assumenda",
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
    "http://localhost/admin/logs/1?ids=animi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/logs/1"
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
    -G "http://localhost/admin/member_codes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/member_codes"
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
    -G "http://localhost/admin/member_code/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/member_code/1"
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
    -G "http://localhost/admin/order?page=dolore&page_limit=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order"
);

let params = {
    "page": "dolore",
    "page_limit": "qui",
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
    -G "http://localhost/admin/order/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order/1"
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
    "http://localhost/admin/order?page=enim&page_limit=est&username=velit&order_no=nesciunt&order_status=numquam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order"
);

let params = {
    "page": "enim",
    "page_limit": "est",
    "username": "velit",
    "order_no": "nesciunt",
    "order_status": "numquam",
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
    "http://localhost/admin/order/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"refund_status":"sit","ship_status":"numquam","status":"quidem"}'

```

```javascript
const url = new URL(
    "http://localhost/admin/order/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "refund_status": "sit",
    "ship_status": "numquam",
    "status": "quidem"
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
    -G "http://localhost/admin/product?page=perspiciatis&page_limit=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product"
);

let params = {
    "page": "perspiciatis",
    "page_limit": "qui",
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
    -G "http://localhost/admin/product/basic_info_list" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product/basic_info_list"
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
    -G "http://localhost/admin/product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product/1"
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
    -G "http://localhost/admin/products/parent" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/products/parent"
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
    "http://localhost/admin/product?product_category_id=quo&product_name=nemo&product_name_en=in&thumbnail=nihil&slug=sunt&short_description=alias&short_description_en=totam&price=perspiciatis&sale_price=nisi&stock=beatae&seo_title=voluptas&seo_keyword=laudantium&seo_description=aut&benefit=commodi&benefit_en=beatae&tech_description=quod&tech_description_en=magni&tech_image=hic&description=fuga&description_en=voluptatibus&usage=aliquid&usage_en=sequi&usage_image=est&main_image=quos&main_image_2=officia&benefit_image=qui&product_video=eum&status=omnis&rating=id&sold_count=ab&review_count=nostrum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product"
);

let params = {
    "product_category_id": "quo",
    "product_name": "nemo",
    "product_name_en": "in",
    "thumbnail": "nihil",
    "slug": "sunt",
    "short_description": "alias",
    "short_description_en": "totam",
    "price": "perspiciatis",
    "sale_price": "nisi",
    "stock": "beatae",
    "seo_title": "voluptas",
    "seo_keyword": "laudantium",
    "seo_description": "aut",
    "benefit": "commodi",
    "benefit_en": "beatae",
    "tech_description": "quod",
    "tech_description_en": "magni",
    "tech_image": "hic",
    "description": "fuga",
    "description_en": "voluptatibus",
    "usage": "aliquid",
    "usage_en": "sequi",
    "usage_image": "est",
    "main_image": "quos",
    "main_image_2": "officia",
    "benefit_image": "qui",
    "product_video": "eum",
    "status": "omnis",
    "rating": "id",
    "sold_count": "ab",
    "review_count": "nostrum",
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
    `tech_image` |  optional  | 科技介绍背景图片
    `description` |  optional  | 产品细节
    `description_en` |  optional  | 英文产品细节
    `usage` |  optional  | 使用方法
    `usage_en` |  optional  | 英文使用方法
    `usage_image` |  optional  | 使用方法图片
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
    "http://localhost/admin/product/1?product_category_id=veniam&product_name=soluta&product_name_en=voluptas&thumbnail=quia&slug=aut&short_description=debitis&short_description_en=sequi&price=dicta&sale_price=deleniti&stock=quam&seo_title=nam&seo_keyword=sit&seo_description=et&benefit=sint&benefit_en=non&tech_description=suscipit&tech_description_en=reiciendis&tech_image=fugiat&description=aut&description_en=dolor&usage=inventore&usage_en=at&usage_image=sint&main_image=unde&main_image_2=voluptas&benefit_image=facere&product_video=magnam&status=recusandae&rating=ex&sold_count=consectetur&review_count=laudantium" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product/1"
);

let params = {
    "product_category_id": "veniam",
    "product_name": "soluta",
    "product_name_en": "voluptas",
    "thumbnail": "quia",
    "slug": "aut",
    "short_description": "debitis",
    "short_description_en": "sequi",
    "price": "dicta",
    "sale_price": "deleniti",
    "stock": "quam",
    "seo_title": "nam",
    "seo_keyword": "sit",
    "seo_description": "et",
    "benefit": "sint",
    "benefit_en": "non",
    "tech_description": "suscipit",
    "tech_description_en": "reiciendis",
    "tech_image": "fugiat",
    "description": "aut",
    "description_en": "dolor",
    "usage": "inventore",
    "usage_en": "at",
    "usage_image": "sint",
    "main_image": "unde",
    "main_image_2": "voluptas",
    "benefit_image": "facere",
    "product_video": "magnam",
    "status": "recusandae",
    "rating": "ex",
    "sold_count": "consectetur",
    "review_count": "laudantium",
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
    `tech_image` |  optional  | 科技介绍背景图片
    `description` |  optional  | 产品细节
    `description_en` |  optional  | 英文产品细节
    `usage` |  optional  | 使用方法
    `usage_en` |  optional  | 英文使用方法
    `usage_image` |  optional  | 使用方法图片
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
    "http://localhost/admin/product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product/1"
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
    -G "http://localhost/admin/product_categories?page=pariatur&page_limit=porro" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories"
);

let params = {
    "page": "pariatur",
    "page_limit": "porro",
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
    -G "http://localhost/admin/product_categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories/1"
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
    "http://localhost/admin/product_categories?name=sit&thumbnail=accusantium&banner=error&title=doloribus&title_en=ut&sub_title=et&describe=dolores&describe_en=eius&describe_img=velit&parent_id=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories"
);

let params = {
    "name": "sit",
    "thumbnail": "accusantium",
    "banner": "error",
    "title": "doloribus",
    "title_en": "ut",
    "sub_title": "et",
    "describe": "dolores",
    "describe_en": "eius",
    "describe_img": "velit",
    "parent_id": "qui",
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
    "http://localhost/admin/product_categories/1?name=autem&thumbnail=quasi&banner=illum&title=dolores&title_en=omnis&sub_title=maiores&describe=voluptatem&describe_en=quis&describe_img=non&parent_id=architecto" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories/1"
);

let params = {
    "name": "autem",
    "thumbnail": "quasi",
    "banner": "illum",
    "title": "dolores",
    "title_en": "omnis",
    "sub_title": "maiores",
    "describe": "voluptatem",
    "describe_en": "quis",
    "describe_img": "non",
    "parent_id": "architecto",
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
    "http://localhost/admin/product_categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories/1"
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
    -G "http://localhost/admin/product_sku" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_sku"
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
    "http://localhost/admin/product_sku?title=ducimus&description=soluta&price=et&stock=cum&product_id=modi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_sku"
);

let params = {
    "title": "ducimus",
    "description": "soluta",
    "price": "et",
    "stock": "cum",
    "product_id": "modi",
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
    "http://localhost/admin/product_sku/1?title=quod&description=et&price=et&stock=repudiandae&product_id=rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_sku/1"
);

let params = {
    "title": "quod",
    "description": "et",
    "price": "et",
    "stock": "repudiandae",
    "product_id": "rerum",
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
    "http://localhost/admin/product_sku/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_sku/1"
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
    -G "http://localhost/admin/the_houses?page=asperiores&page_limit=dolor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/the_houses"
);

let params = {
    "page": "asperiores",
    "page_limit": "dolor",
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
    -G "http://localhost/admin/the_house/et-pariatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/the_house/et-pariatur"
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
    "http://localhost/admin/the_house" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"et","sub_title":"praesentium","the_house_category_id":"aut","describe":"asperiores","banner":"possimus"}'

```

```javascript
const url = new URL(
    "http://localhost/admin/the_house"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "et",
    "sub_title": "praesentium",
    "the_house_category_id": "aut",
    "describe": "asperiores",
    "banner": "possimus"
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
    "http://localhost/admin/the_house/et-pariatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"ut","sub_title":"enim","the_house_category_id":"consectetur","describe":"molestias","banner":"quia"}'

```

```javascript
const url = new URL(
    "http://localhost/admin/the_house/et-pariatur"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "ut",
    "sub_title": "enim",
    "the_house_category_id": "consectetur",
    "describe": "molestias",
    "banner": "quia"
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
    "http://localhost/admin/the_house/et-pariatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/the_house/et-pariatur"
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
    -G "http://localhost/admin/the_house/category/list?page=expedita&page_limit=ea" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/the_house/category/list"
);

let params = {
    "page": "expedita",
    "page_limit": "ea",
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
    -G "http://localhost/admin/the_house/category/aspernatur-ex" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/the_house/category/aspernatur-ex"
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

<!-- START_7e37b4a456f539cfbaf23c5aa8446577 -->
## Create The House Category
创建The House Category

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/the_house/category/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"eveniet","banner":"magni","title":"ex","sub_title":"neque"}'

```

```javascript
const url = new URL(
    "http://localhost/admin/the_house/category/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "eveniet",
    "banner": "magni",
    "title": "ex",
    "sub_title": "neque"
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
`POST admin/the_house/category/store`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | required |  optional  | The house分类名称
        `banner` | required |  optional  | 分类banner图
        `title` | required |  optional  | banner处标题
        `sub_title` | required |  optional  | banner处副标题
    
<!-- END_7e37b4a456f539cfbaf23c5aa8446577 -->

<!-- START_3078d52b3edb0cb0e3b9aa56581388e0 -->
## The House Category Update By Slug
根据slug更新The House分类

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/the_house/category/aspernatur-ex" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"officia","banner":"reprehenderit","title":"esse","sub_title":"in"}'

```

```javascript
const url = new URL(
    "http://localhost/admin/the_house/category/aspernatur-ex"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "officia",
    "banner": "reprehenderit",
    "title": "esse",
    "sub_title": "in"
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
    "http://localhost/admin/the_house/category/aspernatur-ex" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/the_house/category/aspernatur-ex"
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
    -G "http://localhost/admin/the_house_content/list?page=aspernatur&page_limit=consequuntur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/the_house_content/list"
);

let params = {
    "page": "aspernatur",
    "page_limit": "consequuntur",
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
    -G "http://localhost/admin/the_house_content/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/the_house_content/1"
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
    "http://localhost/admin/the_house_content" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"the_house_id":"blanditiis","title":"eum","content":"non","img":"repellat","img_desc":"ea"}'

```

```javascript
const url = new URL(
    "http://localhost/admin/the_house_content"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "the_house_id": "blanditiis",
    "title": "eum",
    "content": "non",
    "img": "repellat",
    "img_desc": "ea"
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
    "http://localhost/admin/the_house_content/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"the_house_id":"ea","title":"aspernatur","content":"modi","img":"quo","img_desc":"minima"}'

```

```javascript
const url = new URL(
    "http://localhost/admin/the_house_content/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "the_house_id": "ea",
    "title": "aspernatur",
    "content": "modi",
    "img": "quo",
    "img_desc": "minima"
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
    "http://localhost/admin/the_house_content/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/the_house_content/1"
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
    -G "http://localhost/admin/user?username=et&page=et&page_limit=deleniti" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user"
);

let params = {
    "username": "et",
    "page": "et",
    "page_limit": "deleniti",
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
    "http://localhost/admin/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"username":"nam","password":"consequatur","name":"reiciendis","role":"sunt","company":"est","department":"natus","sex":1,"phone":5,"email":"qui","member_code":"tempore"}'

```

```javascript
const url = new URL(
    "http://localhost/admin/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "username": "nam",
    "password": "consequatur",
    "name": "reiciendis",
    "role": "sunt",
    "company": "est",
    "department": "natus",
    "sex": 1,
    "phone": 5,
    "email": "qui",
    "member_code": "tempore"
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
    "http://localhost/admin/user/1?name=aut&email=sequi&phone=et&avatar=nihil" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/1"
);

let params = {
    "name": "aut",
    "email": "sequi",
    "phone": "et",
    "avatar": "nihil",
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
    "http://localhost/admin/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/1"
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
    "http://localhost/admin/user/reset_password/1?oldPassword=modi&newPassword=ut&newPassword_confirmation=accusantium" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/reset_password/1"
);

let params = {
    "oldPassword": "modi",
    "newPassword": "ut",
    "newPassword_confirmation": "accusantium",
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
    -G "http://localhost/admin/get_user?hash_id=architecto" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/get_user"
);

let params = {
    "hash_id": "architecto",
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
    -G "http://localhost/admin/user_addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses"
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
    "http://localhost/admin/user_addresses?province=sit&city=velit&district=dolores&address=ducimus&zip=labore&contact_name=quia&contact_phone=rem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses"
);

let params = {
    "province": "sit",
    "city": "velit",
    "district": "dolores",
    "address": "ducimus",
    "zip": "labore",
    "contact_name": "quia",
    "contact_phone": "rem",
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
    "http://localhost/admin/user_addresses/1?address_id=asperiores&province=aperiam&city=id&district=et&address=nihil&zip=rerum&contact_name=voluptas&contact_phone=iste" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses/1"
);

let params = {
    "address_id": "asperiores",
    "province": "aperiam",
    "city": "id",
    "district": "et",
    "address": "nihil",
    "zip": "rerum",
    "contact_name": "voluptas",
    "contact_phone": "iste",
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
    "http://localhost/admin/user_addresses/1?address_id=porro" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses/1"
);

let params = {
    "address_id": "porro",
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
    -G "http://localhost/admin/user_profiles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_profiles"
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
    "http://localhost/admin/user_profiles/1?profile_id=placeat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_profiles/1"
);

let params = {
    "profile_id": "placeat",
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
    "http://localhost/admin/user_profiles/1?profile_id=enim" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_profiles/1"
);

let params = {
    "profile_id": "enim",
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
    -G "http://localhost/api/contact_us/types" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/contact_us/types"
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
    "http://localhost/api/contact_us" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"provident","type":10,"order_no":"delectus","content":"earum"}'

```

```javascript
const url = new URL(
    "http://localhost/api/contact_us"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "provident",
    "type": 10,
    "order_no": "delectus",
    "content": "earum"
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
    -G "http://localhost/api/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/home"
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
            "img": "https:\/\/lorempixel.com\/640\/480\/?25041",
            "img_location": 1,
            "type": "banner",
            "product_id": 1,
            "product": {
                "id": 1,
                "slug": "provident-eos",
                "product_name": "钻石焕活面膜",
                "product_name_en": "voluptatem explicabo facilis",
                "product_video": null
            }
        },
        "discover": [],
        "recommend_list": [
            {
                "id": 1,
                "img": "http:\/\/oss.queen-spades.com\/Products\/8uByN5tk7SEA1gIdo6YzB52DpNLsoVdIznEXlh70.jpeg",
                "img_location": 1,
                "type": "this_month_recommand",
                "product_id": 2,
                "product": {
                    "id": 2,
                    "slug": "voluptas-quo",
                    "product_name": "黑钻焕肤水",
                    "product_name_en": "est est et"
                }
            },
            {
                "id": 2,
                "img": "https:\/\/lorempixel.com\/640\/480\/?56119",
                "img_location": 1,
                "type": "this_month_recommand",
                "product_id": 3,
                "product": {
                    "id": 3,
                    "slug": "debitis-debitis",
                    "product_name": "黑钻赋颜面霜",
                    "product_name_en": "vel eum qui"
                }
            }
        ],
        "the_house": [
            {
                "id": 51,
                "slug": "p-dddddsssssss-p",
                "the_house_category_id": 2,
                "banner": "http:\/\/oss.queen-spades.com\/TheHouse\/oytAZVz3cOGyS6THDOscCuv09xIRQX9hRnpp7IdK.jpeg",
                "title": "<p>ddddd<\/p>",
                "sub_title": "<p>dddddssss<\/p>",
                "describe": "<p>dddddsssssss<\/p>",
                "the_house_category": {
                    "id": 2,
                    "name": "精湛科艺",
                    "slug": "facilis-sapiente",
                    "banner": "http:\/\/oss.queen-spades.com\/Products\/vUeb4zjw6hSNLL5Czcn1oxNkMdQq1gGfdEn6012g.jpeg",
                    "title": "qui laudantium voluptatum",
                    "sub_title": "deleniti beatae quidem",
                    "created_at": "2020-10-10 13:05:45",
                    "updated_at": "2020-10-20 16:34:30"
                }
            },
            {
                "id": 13,
                "slug": "doloribus-non",
                "the_house_category_id": 1,
                "banner": "https:\/\/i0.hippopx.com\/photos\/732\/861\/304\/landscape-mountain-panorama-panoramic-preview.jpg",
                "title": "quaerat dolorem fugiat",
                "sub_title": "nobis laborum provident",
                "describe": "Dolore quis aut aut eligendi. Possimus doloremque in ut corrupti aut. Architecto velit asperiores sint sapiente voluptas non nesciunt.",
                "the_house_category": {
                    "id": 1,
                    "name": "精彩内容",
                    "slug": "commodi-et",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/350\/82\/539\/automobile-automotive-car-clouds-preview.jpg",
                    "title": "sunt est nisi",
                    "sub_title": "enim beatae nemo",
                    "created_at": "2020-03-14 17:32:21",
                    "updated_at": "2020-08-30 17:00:43"
                }
            },
            {
                "id": 28,
                "slug": "hic-veritatis",
                "the_house_category_id": 2,
                "banner": "https:\/\/i0.hippopx.com\/photos\/882\/509\/187\/landscape-field-nature-natural-preview.jpg",
                "title": "iusto ipsam cupiditate",
                "sub_title": "voluptatem dolor maxime",
                "describe": "Libero necessitatibus doloremque et quia rem nemo corporis occaecati. Non consequatur accusantium et similique explicabo numquam pariatur culpa.",
                "the_house_category": {
                    "id": 2,
                    "name": "精湛科艺",
                    "slug": "facilis-sapiente",
                    "banner": "http:\/\/oss.queen-spades.com\/Products\/vUeb4zjw6hSNLL5Czcn1oxNkMdQq1gGfdEn6012g.jpeg",
                    "title": "qui laudantium voluptatum",
                    "sub_title": "deleniti beatae quidem",
                    "created_at": "2020-10-10 13:05:45",
                    "updated_at": "2020-10-20 16:34:30"
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
    -G "http://localhost/api/navbar/product_categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/navbar/product_categories"
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
            "data": [
                {
                    "id": 3,
                    "slug": "debitis-debitis",
                    "product_name": "黑钻赋颜面霜",
                    "parent_id": 0,
                    "level": 1
                },
                {
                    "id": 6,
                    "slug": "animi-voluptatem",
                    "product_name": "钻石冰莹面膜",
                    "parent_id": 0,
                    "level": 1
                },
                {
                    "id": 9,
                    "slug": "dolor-quia",
                    "product_name": "鱼子精华",
                    "parent_id": 0,
                    "level": 1
                }
            ]
        },
        {
            "name": "护肤系列",
            "type": "product_category_skin_care",
            "data": [
                {
                    "id": 1,
                    "name": "眼霜",
                    "slug": "quasi-ratione",
                    "parent_id": 19,
                    "level": 1
                },
                {
                    "id": 2,
                    "name": "睫毛膏",
                    "slug": "architecto-laudantium",
                    "parent_id": 28,
                    "level": 1
                },
                {
                    "id": 3,
                    "name": "爽肤水",
                    "slug": "distinctio-possimus",
                    "parent_id": 15,
                    "level": 1
                },
                {
                    "id": 4,
                    "name": "洁面",
                    "slug": "pariatur-quia",
                    "parent_id": 5,
                    "level": 1
                },
                {
                    "id": 5,
                    "name": "粉底液",
                    "slug": "laboriosam-animi",
                    "parent_id": 2,
                    "level": 1
                },
                {
                    "id": 6,
                    "name": "隔离1",
                    "slug": "doloremque-excepturi",
                    "parent_id": 6,
                    "level": 1
                },
                {
                    "id": 7,
                    "name": "腮红",
                    "slug": "ratione-qui",
                    "parent_id": 9,
                    "level": 1
                },
                {
                    "id": 8,
                    "name": "洁面",
                    "slug": "voluptatibus-voluptas",
                    "parent_id": 14,
                    "level": 1
                },
                {
                    "id": 9,
                    "name": "面膜",
                    "slug": "quidem-doloremque",
                    "parent_id": 1,
                    "level": 1
                },
                {
                    "id": 10,
                    "name": "面霜",
                    "slug": "quos-non",
                    "parent_id": 0,
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
    -G "http://localhost/payments/web" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/payments/web"
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
    "http://localhost/api/auth/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"voluptatem","username":"esse","password":"harum","password_confirmation":"corporis","code":"hic","captcha_key":"qui","captcha_code":"earum","password_question_id":12,"password_answer":"aut"}'

```

```javascript
const url = new URL(
    "http://localhost/api/auth/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "voluptatem",
    "username": "esse",
    "password": "harum",
    "password_confirmation": "corporis",
    "code": "hic",
    "captcha_key": "qui",
    "captcha_code": "earum",
    "password_question_id": 12,
    "password_answer": "aut"
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
    -G "http://localhost/api/user_question?username=voluptatibus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_question"
);

let params = {
    "username": "voluptatibus",
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
        "username": "voluptatibus"
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
    "http://localhost/api/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"username":"omnis","password":"quae"}'

```

```javascript
const url = new URL(
    "http://localhost/api/auth/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "username": "omnis",
    "password": "quae"
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
    "http://localhost/api/password_reset?username=quae&password_question_id=ut&password_answer=aut&password=aut&password_confirmation=laboriosam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/password_reset"
);

let params = {
    "username": "quae",
    "password_question_id": "ut",
    "password_answer": "aut",
    "password": "aut",
    "password_confirmation": "laboriosam",
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

<!-- START_a5b1ad2131e03818cd865a9ffddc0928 -->
## Change password
修改密码(已登录)

> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/password_change" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"oldPassword":"ipsam","newPassword":"earum","newPassword_confirmation":"aut"}'

```

```javascript
const url = new URL(
    "http://localhost/api/auth/password_change"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "oldPassword": "ipsam",
    "newPassword": "earum",
    "newPassword_confirmation": "aut"
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

#[API] MemberCode

会员码管理
<!-- START_d5cebe6b38a23ecae6d7aa93869e93be -->
## Request check mamber code parent
请求验证会员码父级

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/member_code/check" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/member_code/check"
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
    -G "http://localhost/api/orders?page=ut&page_limit=recusandae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orders"
);

let params = {
    "page": "ut",
    "page_limit": "recusandae",
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
    -G "http://localhost/api/order_details/1?no=voluptatum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/order_details/1"
);

let params = {
    "no": "voluptatum",
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
    "http://localhost/api/orders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"address_id":"veritatis","remark":"odio"}'

```

```javascript
const url = new URL(
    "http://localhost/api/orders"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "address_id": "veritatis",
    "remark": "odio"
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
    "http://localhost/api/orders/retry" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"no":4}'

```

```javascript
const url = new URL(
    "http://localhost/api/orders/retry"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "no": 4
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
    "http://localhost/api/orders/cancel?no=vero" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orders/cancel"
);

let params = {
    "no": "vero",
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
    -G "http://localhost/api/products" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/products"
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
                "product_category_id": 8,
                "product_name": "钻石焕活面膜",
                "product_name_en": "voluptatem explicabo facilis",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/764\/249\/198\/mountain-landscape-snowy-mountain-mountains-snow-preview.jpg",
                "slug": "provident-eos",
                "short_description": "Voluptas nostrum impedit temporibus amet sit.",
                "short_description_en": "Maiores exercitationem voluptatem ut rerum necessitatibus. Aut magni expedita nesciunt.",
                "price": "6977.00",
                "sale_price": "0.01",
                "stock": 510,
                "spec": "50 ml \/ 1.7 fl. oz",
                "seo_title": "et omnis omnis",
                "seo_keyword": "aliquid",
                "seo_description": "Reprehenderit ad consequuntur aspernatur ex voluptatum.",
                "benefit": "Est maiores repudiandae saepe fuga ipsum. Inventore quaerat voluptatem sapiente. Reprehenderit vitae enim molestiae. Dolore eligendi vel eveniet rerum quas nisi et. Est est similique blanditiis architecto.",
                "benefit_en": "Possimus quisquam dolorem ea. Quasi numquam fugit suscipit. Deleniti mollitia deleniti itaque ipsa ut aspernatur. Omnis enim inventore rem officiis sequi voluptatem.",
                "tech_image": null,
                "tech_description": "Modi quo occaecati molestias minima et quae illum. Veniam ea omnis fugiat culpa occaecati eum. Iusto dignissimos sint accusantium suscipit dicta voluptatem sint. Delectus facilis aut fuga voluptas id.",
                "tech_description_en": "Placeat in eveniet assumenda alias magni. Enim quas et consequuntur amet est modi. Mollitia voluptatibus dicta eveniet possimus cupiditate quaerat sed. Consequatur et odit eveniet quod. Molestiae id praesentium illo enim.",
                "description": "Quaerat qui sit vel odit vero quo. Quaerat perspiciatis sit architecto iure. Perferendis maxime tempore quod repellendus velit. Quidem tenetur eum impedit.",
                "description_en": "Est et sint eum eaque delectus eum. Ut temporibus quod eius alias. Aut occaecati libero odit doloribus voluptates minima non. Porro delectus qui dolorem animi aut fugiat.",
                "usage_image": null,
                "usage": "Quia et omnis enim voluptas sed. Rerum doloremque repellat explicabo distinctio nihil iure atque. Consequatur quia illum ut ad et illum ipsum. Minus nam aut cupiditate numquam necessitatibus ab.",
                "usage_en": "Excepturi adipisci qui praesentium quam. Velit quibusdam omnis nihil ullam corporis. Est dolor qui nisi.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/722\/142\/391\/landscape-prairie-sky-clouds-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/381\/984\/11\/hong-kong-channel-sea-water-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/51\/551\/733\/norway-landscape-nature-waterfall-preview.jpg",
                "product_video": null,
                "status": 1,
                "rating": 6.61,
                "sold_count": 9527,
                "review_count": 7284,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-27 09:31:09",
                "updated_at": "2020-10-09 09:38:21",
                "product_category": {
                    "id": 8,
                    "name": "洁面",
                    "slug": "voluptatibus-voluptas",
                    "thumbnail": "http:\/\/oss.queen-spades.com\/Products\/wfcSkk5SCBSE2gDdcV08HHm1gki0gXmcvH3lIT1w.jpeg",
                    "banner": "http:\/\/oss.queen-spades.com\/Products\/UQWblHSAICNpFBRWfR4G2BHwZSvwa6RSVsmlvlhm.jpeg",
                    "title": "modi occaecati rerum",
                    "title_en": "dolorem id earum",
                    "sub_title": "quia occaecati perspiciatis",
                    "describe": "Occaecati qui doloribus sed expedita. Minima nulla pariatur deserunt est qui et. Vel asperiores quo sunt numquam dolorem.",
                    "describe_en": "Aut beatae placeat labore. Earum quia molestiae unde officiis dolor qui cum. Sit laborum qui eaque. Dolor reiciendis quae asperiores quaerat vel vitae.",
                    "describe_img": "http:\/\/oss.queen-spades.com\/Products\/dE9EF0iCzlwMOGQz75mG6HsdvgmpBilTQlEkSjvQ.jpeg",
                    "type": 1,
                    "parent_id": 14,
                    "level": 1,
                    "created_at": "2020-10-09 13:57:45",
                    "updated_at": "2020-10-20 16:00:11"
                }
            },
            {
                "id": 2,
                "product_category_id": 5,
                "product_name": "黑钻焕肤水",
                "product_name_en": "est est et",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/294\/260\/834\/blue-blue-mountains-blue-sky-hills-preview.jpg",
                "slug": "voluptas-quo",
                "short_description": "Laudantium est inventore earum illo quia quia.",
                "short_description_en": "Molestiae delectus sed iure ut laborum et neque eligendi. Recusandae officiis autem repudiandae ab quaerat.",
                "price": "915.00",
                "sale_price": "0.01",
                "stock": 817,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "quos expedita error",
                "seo_keyword": "aut",
                "seo_description": "Quas architecto ea quod.",
                "benefit": "Voluptas vero et praesentium in nesciunt rem porro rerum. Sapiente deleniti nisi amet voluptas voluptatum et quia. Vel quis illum aut fugit dolor est. Qui nihil suscipit velit numquam beatae.",
                "benefit_en": "Aut deserunt quos sequi ut omnis. Sed et optio incidunt quam deleniti. Fugit amet id et voluptas quaerat incidunt.",
                "tech_image": null,
                "tech_description": "Ducimus dolore soluta quibusdam ut eligendi. Aspernatur similique est sunt quis. Ut nisi ducimus in occaecati nulla. Nobis consectetur et dolorem facilis. Earum sint autem esse laudantium.",
                "tech_description_en": "Dolorem et alias vitae expedita illum. Non facere officia ab facere eius nihil dignissimos. Laudantium repudiandae consectetur nobis tempora aut quia libero. Nam cum asperiores quo laborum culpa eum inventore.",
                "description": "Nobis ea dolores enim sed. Ipsam est explicabo et perspiciatis. Omnis quisquam eos rerum aut. Culpa a sunt quisquam omnis ut beatae voluptas.",
                "description_en": "Assumenda minus consequuntur aut quia reprehenderit qui. Fugiat impedit voluptatibus necessitatibus. Explicabo ut voluptas nesciunt eius. Doloribus saepe dolor dolore modi impedit.",
                "usage_image": null,
                "usage": "Non ullam id ut necessitatibus ea atque. Quaerat voluptatibus voluptas similique ex deserunt quas. Voluptatum nisi doloribus ea nostrum doloremque accusamus aut. Est in illo natus et fugit.",
                "usage_en": "Quibusdam reiciendis aut sed nobis aut ut. Qui ut eveniet iusto. Perspiciatis itaque deserunt quibusdam accusantium ut corrupti voluptate. Veritatis consequatur ut qui.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/586\/516\/967\/tuscany-landscape-sunset-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/612\/245\/318\/taiwan-landscape-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/237\/624\/851\/meadow-landscape-sky-green-preview.jpg",
                "product_video": null,
                "status": 2,
                "rating": 2.66,
                "sold_count": 3319,
                "review_count": 6294,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-18 02:59:17",
                "updated_at": "2020-09-23 12:25:36",
                "product_category": {
                    "id": 5,
                    "name": "粉底液",
                    "slug": "laboriosam-animi",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/793\/875\/662\/prayer-flags-tibet-landscape-clouds-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/165\/759\/627\/sky-blue-clouds-landscape-preview.jpg",
                    "title": "ullam sapiente nobis",
                    "title_en": "omnis voluptates vel",
                    "sub_title": "aut dignissimos quo",
                    "describe": "Est velit laudantium consequuntur. Dignissimos similique et laudantium et et reiciendis quidem. Assumenda praesentium ut vero tempora.",
                    "describe_en": "Ab est minus tempora assumenda. Similique unde neque iure aut. Repellat aut odio dicta dolorum provident in laudantium.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/946\/822\/506\/landscape-corn-agriculture-farm-preview.jpg",
                    "type": 1,
                    "parent_id": 2,
                    "level": 1,
                    "created_at": "2020-10-01 23:37:21",
                    "updated_at": "2020-09-25 14:20:45"
                }
            },
            {
                "id": 3,
                "product_category_id": 3,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "vel eum qui",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/760\/827\/659\/sky-mountain-landscape-environment-preview.jpg",
                "slug": "debitis-debitis",
                "short_description": "Autem dolorem iure alias voluptas dolorum dolor.",
                "short_description_en": "Harum est reprehenderit ratione animi explicabo asperiores. Ad aliquid totam beatae voluptatem qui ipsum vitae non. Non natus rerum et laudantium in.",
                "price": "8751.00",
                "sale_price": "0.01",
                "stock": 803,
                "spec": "150 ml \/ 2.0 oz",
                "seo_title": "molestiae facere perferendis",
                "seo_keyword": "error",
                "seo_description": "Tenetur dicta illo corrupti.",
                "benefit": "Ea nemo harum mollitia ut. Aperiam tempore fuga aut rem vel. Minima dolores quam id ad iure.",
                "benefit_en": "Accusantium quisquam ut itaque quia optio expedita animi excepturi. Dolor enim doloremque assumenda iusto. Sit veritatis sed omnis.",
                "tech_image": null,
                "tech_description": "Perspiciatis tenetur est eum omnis voluptatum amet quasi quia. Hic beatae sed magnam adipisci id sed alias maxime. In sit quibusdam iusto dolores quaerat est. Et omnis reprehenderit dolorem rerum.",
                "tech_description_en": "Maxime eum cupiditate sunt iste magnam. Dolorem quasi quidem qui omnis incidunt. Ut est consequatur quam tempora qui.",
                "description": "Quia repellat illum sapiente rerum. Veniam ipsa autem labore. Eveniet doloremque architecto voluptatem rerum.",
                "description_en": "Est earum quia animi totam eum fuga iure. Itaque pariatur nisi repellendus molestiae. Et quis repellat fugit placeat dolores cupiditate. Voluptatibus tenetur voluptatum est debitis. Molestias iure veniam voluptatum animi ipsum velit.",
                "usage_image": null,
                "usage": "Necessitatibus nesciunt aut enim. Dolore quas labore repudiandae rerum nemo doloremque.",
                "usage_en": "Omnis illum deserunt ut sit cupiditate et beatae. Iste voluptatem molestiae dolor ipsum eum maxime aut. Quisquam amet nesciunt sequi sit adipisci sit delectus maiores. Excepturi atque natus aut eveniet.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/953\/974\/573\/black-and-white-fog-landscape-mountains-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/975\/861\/255\/sunset-dark-red-black-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/446\/106\/419\/mill-black-forest-bach-water-preview.jpg",
                "product_video": null,
                "status": 1,
                "rating": 7.71,
                "sold_count": 6712,
                "review_count": 2313,
                "parent_id": 0,
                "level": 1,
                "created_at": "2020-09-24 10:06:00",
                "updated_at": "2020-09-20 03:34:14",
                "product_category": {
                    "id": 3,
                    "name": "爽肤水",
                    "slug": "distinctio-possimus",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/42\/877\/161\/lijiang-landscape-the-scenery-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/203\/696\/888\/prairie-nature-chifeng-preview.jpg",
                    "title": "quod doloribus deleniti",
                    "title_en": "reprehenderit a quis",
                    "sub_title": "et quibusdam aut",
                    "describe": "Aut voluptatum aut deleniti. Et vitae et quas. Quaerat corporis beatae nobis ratione tempora rerum aut.",
                    "describe_en": "Quasi expedita qui deleniti sint sit mollitia unde. Id culpa sint dicta dolores rerum et iste.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/29\/942\/431\/sunset-evening-landscape-evening-sky-preview.jpg",
                    "type": 1,
                    "parent_id": 15,
                    "level": 1,
                    "created_at": "2020-10-07 13:11:46",
                    "updated_at": "2020-10-02 22:35:20"
                }
            },
            {
                "id": 4,
                "product_category_id": 4,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "ducimus est dolore",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/544\/364\/13\/landscape-mountains-wilderness-panorama-preview.jpg",
                "slug": "debitis-eaque",
                "short_description": "Accusamus iure quidem omnis fuga qui.",
                "short_description_en": "Quam autem autem id voluptatem aspernatur ab cum. Quia et sint ut iste mollitia. Et quo deserunt porro sequi.",
                "price": "9144.00",
                "sale_price": "0.01",
                "stock": 776,
                "spec": "50 ml \/ 1.7 fl. oz",
                "seo_title": "nostrum explicabo praesentium",
                "seo_keyword": "dolor",
                "seo_description": "Vel quia deserunt qui omnis.",
                "benefit": "Sed est sed iure molestiae. Sit facilis in quisquam explicabo doloremque at. Illum sunt quis quibusdam adipisci unde atque accusamus.",
                "benefit_en": "Earum vel nisi maxime et. Distinctio rerum modi porro fugit omnis. Impedit tenetur deserunt consequatur quibusdam laboriosam voluptatem et. Ducimus et dicta quos.",
                "tech_image": null,
                "tech_description": "Natus quasi iste officia. Et adipisci nobis et aut ut. Dolorem repellendus et excepturi deserunt minima qui et.",
                "tech_description_en": "Maiores cupiditate quia est esse. Iure nihil repellat ut et ullam nostrum voluptas consequatur.",
                "description": "Accusantium sunt non nobis ipsa velit inventore ut. Error consequuntur est natus fugiat doloribus ducimus ipsa. Aut quaerat et voluptatum minus omnis et.",
                "description_en": "Dolorem quis consectetur incidunt consequatur. Eos eaque dignissimos et tempora. Itaque temporibus non enim sed et quisquam perferendis occaecati.",
                "usage_image": null,
                "usage": "Laboriosam eius praesentium officiis omnis dolorem animi sunt. Ut laborum facilis ut sed. Sed expedita nesciunt vitae dignissimos voluptatem iusto qui amet.",
                "usage_en": "Et at laudantium est. Et consequatur quod sequi id deleniti. Enim consectetur temporibus ad.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/436\/877\/92\/mountains-mountain-world-fog-clouds-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/966\/985\/182\/forest-wood-trees-landscape-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/257\/447\/773\/sky-mountain-cloud-mountains-preview.jpg",
                "product_video": null,
                "status": 1,
                "rating": 7.32,
                "sold_count": 5475,
                "review_count": 6153,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-10-07 06:40:30",
                "updated_at": "2020-10-15 10:36:17",
                "product_category": {
                    "id": 4,
                    "name": "洁面",
                    "slug": "pariatur-quia",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/564\/169\/239\/city-night-the-urban-landscape-night-city-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/960\/431\/806\/landscape-sunset-sky-natural-landscape-preview.jpg",
                    "title": "aspernatur laboriosam sed",
                    "title_en": "neque et in",
                    "sub_title": "explicabo sed dolore",
                    "describe": "Molestiae sequi voluptatem et tenetur. Exercitationem eius deserunt et et. Id dolores ipsam reprehenderit ut odit debitis sunt.",
                    "describe_en": "Odit quia rem dicta quia sunt. Qui magni dolorem at eius perspiciatis et velit. Non excepturi accusantium ipsum laborum labore et mollitia consectetur.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/651\/23\/692\/wood-natural-landscape-preview.jpg",
                    "type": 1,
                    "parent_id": 5,
                    "level": 1,
                    "created_at": "2020-09-16 18:48:29",
                    "updated_at": "2020-10-06 09:35:37"
                }
            },
            {
                "id": 5,
                "product_category_id": 1,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "numquam eos nostrum",
                "thumbnail": "http:\/\/oss.queen-spades.com\/Products\/w4jRmkHPxbsbkxv2aHnL3a0XTqyBOLbyU3dPfoOL.jpeg",
                "slug": "nisi-accusamus",
                "short_description": "Quam eos dolorem repellat occaecati.",
                "short_description_en": "Adipisci perferendis libero est expedita eveniet. Assumenda ipsum vel voluptas.",
                "price": "9044.00",
                "sale_price": "0.01",
                "stock": 496,
                "spec": "150 ml \/ 2.0 oz",
                "seo_title": "neque ea sunt",
                "seo_keyword": "beatae",
                "seo_description": "Suscipit animi cum maiores quis dolorum.",
                "benefit": "Nihil distinctio dolores praesentium fuga earum tenetur. In delectus vel reprehenderit eum.",
                "benefit_en": "Cumque numquam sit iure placeat ducimus. Distinctio sapiente repellat earum inventore at incidunt labore. Praesentium voluptas autem nesciunt veniam est qui. Voluptatem possimus et id ea unde dolorum asperiores dolore.",
                "tech_image": null,
                "tech_description": "Quam vitae aspernatur pariatur assumenda sint eos. Ut corporis aut non. Tempore quos explicabo sit sit natus. Et et quaerat fugit ut.",
                "tech_description_en": "Aut consequatur magnam sunt possimus officiis suscipit eius id. Omnis ut sit voluptatem quam magnam. Et quasi nihil ea.",
                "description": "Et qui aut dicta consequatur corporis vel aut. Minima sunt dignissimos quis iste. Voluptatem sit autem et quo consequatur quis voluptatibus. Voluptas beatae quo dolorem sint.",
                "description_en": "Provident sunt doloribus in recusandae omnis rerum. Fugiat sunt alias alias quidem. Magnam quia qui veritatis eos voluptas eligendi aut.",
                "usage_image": null,
                "usage": "Et placeat ut aspernatur est. Beatae dolorum libero eligendi dolor dolorem minus aperiam. Earum temporibus voluptas qui eos blanditiis. Nihil libero quos praesentium ipsa debitis occaecati vel.",
                "usage_en": "Quia sint sed recusandae. Eos enim pariatur cupiditate. Reprehenderit enim quae iusto ut aut quas.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/221\/107\/642\/mountains-landscape-mountain-top-sky-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/822\/995\/775\/lake-landscape-nature-water-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/780\/46\/487\/sooss-morning-run-sunrise-landscape-preview.jpg",
                "product_video": "null",
                "status": 2,
                "rating": 1.9,
                "sold_count": 2696,
                "review_count": 2988,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-10-10 14:57:00",
                "updated_at": "2020-10-20 14:28:33",
                "product_category": {
                    "id": 1,
                    "name": "眼霜",
                    "slug": "quasi-ratione",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/449\/579\/640\/forest-floor-mood-forest-moss-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/626\/129\/68\/sea-road-landscape-preview.jpg",
                    "title": "numquam nulla asperiores",
                    "title_en": "atque aspernatur et",
                    "sub_title": "rerum et deleniti",
                    "describe": "Voluptate blanditiis omnis pariatur odit voluptas molestias. Qui tempora labore corrupti nisi distinctio itaque. At earum ut aut ut voluptatum excepturi quasi. Velit corrupti error consequatur aut.",
                    "describe_en": "Laborum voluptates veniam dolorum nam. In voluptatum consectetur eos laudantium.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/676\/67\/654\/green-tea-plantation-plants-landscape-tea-preview.jpg",
                    "type": 1,
                    "parent_id": 19,
                    "level": 1,
                    "created_at": "2020-09-18 11:53:42",
                    "updated_at": "2020-09-26 05:29:47"
                }
            },
            {
                "id": 6,
                "product_category_id": 1,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "aliquid vel magni",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/160\/275\/632\/fir-winter-cold-winter-landscape-preview.jpg",
                "slug": "animi-voluptatem",
                "short_description": "Nihil doloremque nihil quia.",
                "short_description_en": "Velit qui aut quia hic consequatur. Reprehenderit quia sed impedit dolorem aspernatur cum eum. Quidem odio dolorem voluptatem iure dignissimos voluptas. Nulla magni veritatis qui accusamus est maiores.",
                "price": "951.00",
                "sale_price": "0.01",
                "stock": 746,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "cupiditate neque et",
                "seo_keyword": "et",
                "seo_description": "Quisquam nobis et iste.",
                "benefit": "Blanditiis dolorem enim voluptas qui magnam ex. Perferendis nulla libero quia est. Qui quo reprehenderit odit alias. Doloremque aut ad error eligendi molestiae dolor.",
                "benefit_en": "Perspiciatis natus velit nesciunt nostrum id et ducimus. Nulla ullam ducimus dolor iure magnam et odio. Non tenetur recusandae libero nihil.",
                "tech_image": null,
                "tech_description": "Ea id et quis. Cupiditate voluptatem delectus impedit quas provident sint ex dolorum. Occaecati illo voluptatem voluptatem libero blanditiis quisquam placeat. Eum beatae quas placeat temporibus pariatur qui cum.",
                "tech_description_en": "Sit illo eos aut quo dicta. Distinctio sint laudantium eligendi. Hic quam vero excepturi quibusdam. Eveniet voluptas fugiat cum vel eum voluptatem et esse.",
                "description": "Culpa in earum quos deleniti. Aperiam aut sint nihil occaecati. Veritatis mollitia sint eius ratione sint ex odit. Ducimus nemo natus labore.",
                "description_en": "Voluptatem inventore nihil laudantium rerum laudantium veritatis laudantium. Rerum vel impedit repellat dolore alias occaecati. Fugiat dolor quisquam tempore quia. Quia ut et ut et sapiente. Nesciunt quis rerum velit consequuntur neque.",
                "usage_image": null,
                "usage": "Voluptas aliquam omnis consequatur mollitia suscipit animi optio. Qui ratione quibusdam nulla laudantium est quia distinctio. Molestiae similique eum ipsa ratione veritatis. Incidunt delectus quam veniam animi non.",
                "usage_en": "Necessitatibus repellat et suscipit numquam voluptatem. Laudantium consequatur quia perferendis tenetur laboriosam quaerat. Sed unde natus aut voluptatem assumenda fugiat voluptatibus rerum. Reprehenderit ipsam amet doloribus repudiandae vero quo.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/101\/985\/118\/sky-cloud-taiwan-mountain-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/390\/671\/735\/emeishan-landscape-scenery-the-golden-dome-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/83\/713\/260\/santorini-greece-island-landscape-preview.jpg",
                "product_video": null,
                "status": 1,
                "rating": 1.6400000000000001,
                "sold_count": 3827,
                "review_count": 2006,
                "parent_id": 0,
                "level": 1,
                "created_at": "2020-09-24 08:38:58",
                "updated_at": "2020-09-19 18:19:46",
                "product_category": {
                    "id": 1,
                    "name": "眼霜",
                    "slug": "quasi-ratione",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/449\/579\/640\/forest-floor-mood-forest-moss-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/626\/129\/68\/sea-road-landscape-preview.jpg",
                    "title": "numquam nulla asperiores",
                    "title_en": "atque aspernatur et",
                    "sub_title": "rerum et deleniti",
                    "describe": "Voluptate blanditiis omnis pariatur odit voluptas molestias. Qui tempora labore corrupti nisi distinctio itaque. At earum ut aut ut voluptatum excepturi quasi. Velit corrupti error consequatur aut.",
                    "describe_en": "Laborum voluptates veniam dolorum nam. In voluptatum consectetur eos laudantium.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/676\/67\/654\/green-tea-plantation-plants-landscape-tea-preview.jpg",
                    "type": 1,
                    "parent_id": 19,
                    "level": 1,
                    "created_at": "2020-09-18 11:53:42",
                    "updated_at": "2020-09-26 05:29:47"
                }
            },
            {
                "id": 7,
                "product_category_id": 5,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "sint et sint",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/379\/182\/497\/sky-and-clouds-ocean-of-clouds-landscape-clouds-sky-preview.jpg",
                "slug": "consequatur-officiis",
                "short_description": "Sunt omnis ab expedita minima.",
                "short_description_en": "Cupiditate quasi voluptate dolorem ea quia ut et. Sit minima nesciunt voluptatem harum. Magnam sed debitis deserunt laudantium enim doloribus omnis. Pariatur dolor et doloribus omnis accusamus ducimus tempore.",
                "price": "4103.00",
                "sale_price": "0.01",
                "stock": 745,
                "spec": "150 ml \/ 2.0 oz",
                "seo_title": "aut libero sit",
                "seo_keyword": "tempora",
                "seo_description": "Ullam ut animi hic qui quia.",
                "benefit": "Iste sint occaecati provident autem. Praesentium modi suscipit et distinctio quas ad. Voluptatibus autem labore voluptatem rerum.",
                "benefit_en": "Quo harum dolorem impedit eveniet sint. Velit quia vel enim dolorum fugit fugiat. Assumenda nostrum et aut sit. Fugiat eveniet ut repellat et est quam quia.",
                "tech_image": null,
                "tech_description": "Quisquam esse accusamus quibusdam aliquid dicta est. Voluptatum ut sed maiores ratione deserunt reprehenderit inventore est. Praesentium at itaque aperiam quaerat laudantium ducimus iste.",
                "tech_description_en": "Impedit in est nisi facere ipsam in. Omnis deserunt recusandae eligendi sint quisquam possimus mollitia. Qui cupiditate qui excepturi veritatis laudantium consectetur. Non est dolores id quo dolorum quis tenetur. Vel tempora molestiae et similique.",
                "description": "Ducimus culpa magnam autem quae. Aut consequatur ipsam id eos veniam voluptate similique. Sit accusamus at voluptates aliquam.",
                "description_en": "Dicta natus minima dignissimos nesciunt voluptas quis. Quisquam consequatur iure natus dolores. Aut amet excepturi eaque sunt et.",
                "usage_image": null,
                "usage": "Qui dolores ea et quasi omnis et. Vel suscipit sed et aut impedit animi aut. Amet asperiores rem dolore ullam. Ex numquam eum ullam vero consectetur reprehenderit. Assumenda necessitatibus modi autem asperiores fuga.",
                "usage_en": "Ut voluptatem asperiores explicabo delectus et dolor ex. Fugiat rerum rerum vel omnis sit aut consequuntur rerum. Ea quam quo adipisci non quod eos iusto dolore.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/326\/496\/917\/ulsan-sunrise-the-great-cancer-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/902\/783\/624\/river-landscape-water-nature-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/471\/78\/341\/prairie-highway-the-scenery-mountain-preview.jpg",
                "product_video": null,
                "status": 1,
                "rating": 8.74,
                "sold_count": 7081,
                "review_count": 1775,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-18 03:02:20",
                "updated_at": "2020-09-25 08:30:00",
                "product_category": {
                    "id": 5,
                    "name": "粉底液",
                    "slug": "laboriosam-animi",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/793\/875\/662\/prayer-flags-tibet-landscape-clouds-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/165\/759\/627\/sky-blue-clouds-landscape-preview.jpg",
                    "title": "ullam sapiente nobis",
                    "title_en": "omnis voluptates vel",
                    "sub_title": "aut dignissimos quo",
                    "describe": "Est velit laudantium consequuntur. Dignissimos similique et laudantium et et reiciendis quidem. Assumenda praesentium ut vero tempora.",
                    "describe_en": "Ab est minus tempora assumenda. Similique unde neque iure aut. Repellat aut odio dicta dolorum provident in laudantium.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/946\/822\/506\/landscape-corn-agriculture-farm-preview.jpg",
                    "type": 1,
                    "parent_id": 2,
                    "level": 1,
                    "created_at": "2020-10-01 23:37:21",
                    "updated_at": "2020-09-25 14:20:45"
                }
            },
            {
                "id": 8,
                "product_category_id": 4,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "quis commodi sapiente",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/514\/14\/413\/sky-sun-clouds-landscapes-preview.jpg",
                "slug": "consectetur-culpa",
                "short_description": "Magni aut qui qui.",
                "short_description_en": "Et magnam id minus totam sit. Eos aliquid ex soluta odio facere. Quia blanditiis reprehenderit facilis cumque ut voluptatum similique minima. Minus fugiat veritatis ut occaecati nam quidem qui voluptatem. Magnam autem laborum ut sint.",
                "price": "3386.00",
                "sale_price": "0.01",
                "stock": 484,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "aperiam nihil ipsam",
                "seo_keyword": "vel",
                "seo_description": "Possimus ut voluptas ratione quia ratione excepturi.",
                "benefit": "Id corporis quia voluptatem a sit ab dolor quia. Repudiandae cum consectetur dolorem nulla deserunt itaque. Consequatur ut ut veritatis a minus necessitatibus. Est repudiandae voluptates unde omnis omnis voluptas.",
                "benefit_en": "Harum beatae placeat ipsa. Omnis corrupti magnam animi minus est sunt. Aut porro ut reprehenderit in ut ut officiis. Et dolor aliquam occaecati magni enim.",
                "tech_image": null,
                "tech_description": "Quidem consequatur ut assumenda odit autem eos. Quis sit ea adipisci tenetur voluptas. Quam dicta aut facilis iusto non. Ducimus odio neque sit iusto autem. Qui sint neque beatae magni.",
                "tech_description_en": "Nostrum deserunt est qui mollitia aliquid voluptatum excepturi. Necessitatibus enim delectus nihil consequuntur modi est. Veritatis repudiandae quo quia autem quae reiciendis nisi. Nulla necessitatibus nemo et et. Consequatur provident ab animi aut ipsa omnis.",
                "description": "Dolor numquam non cupiditate occaecati modi voluptate. Non quod omnis est sint suscipit incidunt corrupti. Assumenda qui necessitatibus fugiat. Non quo est ea cum quis.",
                "description_en": "In provident possimus unde a eveniet. Numquam illum blanditiis facere dolor modi repellendus debitis libero. Aliquid odit adipisci sit est magni. Ipsa aliquid voluptas ut. Harum neque ex voluptates unde.",
                "usage_image": null,
                "usage": "Ab nostrum nostrum eaque et beatae sed eum. Autem adipisci laborum voluptas rerum totam debitis. Optio qui quia corrupti itaque quasi nostrum. Beatae aliquid eaque minus velit quis voluptatem et et.",
                "usage_en": "Ut magni dolore sint cumque et quidem nihil quisquam. Et aspernatur repudiandae porro iusto vero soluta. Impedit numquam quibusdam rerum iusto et.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/105\/1020\/63\/mountains-landscape-river-mountain-river-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/799\/167\/815\/tuscany-landscape-sunset-beach-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/882\/509\/187\/landscape-field-nature-natural-preview.jpg",
                "product_video": null,
                "status": 1,
                "rating": 5.43,
                "sold_count": 3533,
                "review_count": 4883,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-21 09:13:22",
                "updated_at": "2020-10-05 12:38:42",
                "product_category": {
                    "id": 4,
                    "name": "洁面",
                    "slug": "pariatur-quia",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/564\/169\/239\/city-night-the-urban-landscape-night-city-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/960\/431\/806\/landscape-sunset-sky-natural-landscape-preview.jpg",
                    "title": "aspernatur laboriosam sed",
                    "title_en": "neque et in",
                    "sub_title": "explicabo sed dolore",
                    "describe": "Molestiae sequi voluptatem et tenetur. Exercitationem eius deserunt et et. Id dolores ipsam reprehenderit ut odit debitis sunt.",
                    "describe_en": "Odit quia rem dicta quia sunt. Qui magni dolorem at eius perspiciatis et velit. Non excepturi accusantium ipsum laborum labore et mollitia consectetur.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/651\/23\/692\/wood-natural-landscape-preview.jpg",
                    "type": 1,
                    "parent_id": 5,
                    "level": 1,
                    "created_at": "2020-09-16 18:48:29",
                    "updated_at": "2020-10-06 09:35:37"
                }
            },
            {
                "id": 9,
                "product_category_id": 6,
                "product_name": "鱼子精华",
                "product_name_en": "ratione sit repellendus",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/112\/371\/809\/landscape-nature-sunflowers-nature-landscape-preview.jpg",
                "slug": "dolor-quia",
                "short_description": "Corrupti libero et rerum eum laborum itaque.",
                "short_description_en": "Quo enim maxime nihil ducimus aliquid aut reprehenderit hic. Nihil ut autem qui culpa animi et pariatur ea. Repellat quo soluta tempora iste corporis excepturi nihil. Voluptas laborum dolore dignissimos voluptatem praesentium minus illo temporibus.",
                "price": "8686.00",
                "sale_price": "0.01",
                "stock": 930,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "doloribus aut quod",
                "seo_keyword": "quasi",
                "seo_description": "Hic fugiat repudiandae inventore.",
                "benefit": "Magnam saepe eum neque ut ab voluptatem possimus. Ea fugiat ipsa laudantium occaecati. Sit delectus libero magnam vero reiciendis placeat iusto.",
                "benefit_en": "Unde dolores ratione laudantium iste dolores consequatur. Nihil voluptas quibusdam consequatur qui ipsa. Non rem aut dolor labore veritatis.",
                "tech_image": null,
                "tech_description": "Consectetur est maxime molestiae suscipit voluptate dolores. Aut veniam laudantium aliquam nostrum veritatis enim dolor reprehenderit. Repellendus neque autem reprehenderit eligendi eveniet corporis. Veritatis et odit dolores debitis animi ut ab.",
                "tech_description_en": "Consequuntur at dignissimos porro omnis cumque ab suscipit. Iste tenetur placeat odio qui asperiores consectetur.",
                "description": "Eos accusantium commodi et molestias illo. Aperiam sint molestiae totam sint dolores. Beatae eligendi enim enim sed necessitatibus ut.",
                "description_en": "Dolores quam reprehenderit dolore officiis fugiat corrupti quaerat at. Inventore facilis et delectus quasi temporibus dolor. Inventore molestiae sed dolorem et voluptatem atque ab.",
                "usage_image": null,
                "usage": "Sed itaque et dicta sapiente eos ullam omnis et. Accusamus officia reiciendis sint rem quis repellendus fuga. Veritatis culpa quis voluptatum autem cum.",
                "usage_en": "Atque voluptas iste vel cupiditate. Nihil non impedit qui et quo suscipit. Minus aperiam modi quam laboriosam sed dolor. Illo dicta voluptatem consequatur. Sit magnam iste enim.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/586\/516\/967\/tuscany-landscape-sunset-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/141\/230\/567\/landscape-mountains-nature-outdoors-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/582\/686\/429\/forest-trees-nature-forests-preview.jpg",
                "product_video": null,
                "status": 1,
                "rating": 8.32,
                "sold_count": 3474,
                "review_count": 5265,
                "parent_id": 0,
                "level": 1,
                "created_at": "2020-10-03 05:17:28",
                "updated_at": "2020-09-27 05:06:15",
                "product_category": {
                    "id": 6,
                    "name": "隔离1",
                    "slug": "doloremque-excepturi",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/748\/282\/412\/landscape-shore-sunset-clouds-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/138\/376\/943\/spring-meadow-forest-meadow-grass-preview.jpg",
                    "title": "molestiae quibusdam iusto",
                    "title_en": "sed omnis similique",
                    "sub_title": "magni repellendus illo",
                    "describe": "Fugit aut earum voluptatibus in eveniet totam. Nemo sapiente libero dolor voluptatem asperiores.",
                    "describe_en": "Est modi non soluta quas. Deleniti consequatur est ut amet hic. At id rerum rem veritatis ipsa totam quae molestiae.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/983\/839\/823\/landscape-nature-field-rest-preview.jpg",
                    "type": 1,
                    "parent_id": 6,
                    "level": 1,
                    "created_at": "2020-10-07 17:43:57",
                    "updated_at": "2020-10-26 10:52:02"
                }
            },
            {
                "id": 10,
                "product_category_id": 6,
                "product_name": "亮颜修护",
                "product_name_en": "et et sit",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/436\/877\/92\/mountains-mountain-world-fog-clouds-preview.jpg",
                "slug": "debitis-sunt",
                "short_description": "Voluptatem et voluptas provident modi cum.",
                "short_description_en": "Aliquid repellendus quasi architecto aperiam dolore commodi. Earum aut eos sit tenetur soluta excepturi iste quia. Sit laboriosam aut quas mollitia recusandae optio animi. Dolores aut ut enim voluptatem ut tempora sapiente. Sint eum reprehenderit ea occaecati.",
                "price": "1506.00",
                "sale_price": "0.01",
                "stock": 65,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "sit dolorem nam",
                "seo_keyword": "consectetur",
                "seo_description": "Dolor mollitia numquam quia qui labore.",
                "benefit": "Officia consequatur enim distinctio incidunt. Odio ut voluptas voluptatem dolorum et minus. Autem repudiandae voluptatem inventore.",
                "benefit_en": "In velit iure voluptate et. Quae nesciunt consequatur nihil laborum. Veniam nesciunt optio incidunt dignissimos.",
                "tech_image": null,
                "tech_description": "Aut quasi aut voluptatem expedita quaerat. Vel corrupti nemo quis a. Similique impedit suscipit qui et. Corporis quia qui molestias sit.",
                "tech_description_en": "Molestiae dicta error veniam. Dolorem in ut eum facilis debitis. Earum aliquam quae omnis esse.",
                "description": "Voluptatem a qui tempore architecto aut nulla rerum. Assumenda eos quaerat quo ratione. Qui fugit et et dolores et. Quis quia praesentium laborum eum.",
                "description_en": "Nam qui vel incidunt sunt nisi nobis asperiores. Quo esse officiis exercitationem perferendis aut et. Tenetur a est veniam earum natus.",
                "usage_image": null,
                "usage": "Laborum voluptatum labore deleniti quaerat qui animi. Veniam esse omnis veniam non totam eligendi quisquam. Dolores commodi tenetur molestiae inventore in atque voluptatem. Et et minus fugit necessitatibus. Ea voluptatem voluptas perferendis fugiat veniam.",
                "usage_en": "Eum quod officia quia distinctio quibusdam at. Dolorum veritatis qui eum laborum quia est. Odit aliquam qui maiores natus. Recusandae reiciendis eos voluptas architecto assumenda et deleniti.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/738\/745\/181\/forest-background-landscape-forest-autumn-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/83\/713\/260\/santorini-greece-island-landscape-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/573\/159\/638\/urban-moon-city-skyline-preview.jpg",
                "product_video": null,
                "status": 1,
                "rating": 9.57,
                "sold_count": 8986,
                "review_count": 3723,
                "parent_id": 8,
                "level": 2,
                "created_at": "2020-10-01 09:59:20",
                "updated_at": "2020-09-24 03:26:25",
                "product_category": {
                    "id": 6,
                    "name": "隔离1",
                    "slug": "doloremque-excepturi",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/748\/282\/412\/landscape-shore-sunset-clouds-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/138\/376\/943\/spring-meadow-forest-meadow-grass-preview.jpg",
                    "title": "molestiae quibusdam iusto",
                    "title_en": "sed omnis similique",
                    "sub_title": "magni repellendus illo",
                    "describe": "Fugit aut earum voluptatibus in eveniet totam. Nemo sapiente libero dolor voluptatem asperiores.",
                    "describe_en": "Est modi non soluta quas. Deleniti consequatur est ut amet hic. At id rerum rem veritatis ipsa totam quae molestiae.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/983\/839\/823\/landscape-nature-field-rest-preview.jpg",
                    "type": 1,
                    "parent_id": 6,
                    "level": 1,
                    "created_at": "2020-10-07 17:43:57",
                    "updated_at": "2020-10-26 10:52:02"
                }
            },
            {
                "id": 11,
                "product_category_id": 7,
                "product_name": "黑钻焕肤水",
                "product_name_en": "architecto quo vel",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/684\/384\/913\/landscape-forests-sky-water-preview.jpg",
                "slug": "consequuntur-vel",
                "short_description": "Nesciunt rem vel at accusamus veniam.",
                "short_description_en": "Voluptas deserunt natus expedita dolorem. Accusantium animi fugiat aspernatur modi. Quia impedit libero quibusdam hic sed et.",
                "price": "1712.00",
                "sale_price": "0.01",
                "stock": 739,
                "spec": "50 ml \/ 1.7 fl. oz",
                "seo_title": "officiis excepturi quia",
                "seo_keyword": "dolorem",
                "seo_description": "Aut voluptates et reiciendis doloribus.",
                "benefit": "Amet voluptate atque debitis necessitatibus hic. Dolore expedita laboriosam ullam. Explicabo non velit et.",
                "benefit_en": "Placeat inventore et reiciendis qui aperiam et. Sed et reprehenderit tenetur et. Ullam excepturi delectus sequi nemo. Earum dolorem modi quidem delectus maiores rerum.",
                "tech_image": null,
                "tech_description": "Dolorem quas molestiae labore laboriosam dolorum dolores blanditiis. Itaque doloribus itaque inventore numquam eius voluptas dolorem. Dicta ex blanditiis officia commodi sunt quas eum magni. Aut tempore neque ipsa molestias est voluptatem. Ut aliquid odio eos autem aut.",
                "tech_description_en": "Quo laborum et ea recusandae. Dolorem laboriosam qui esse maxime voluptas. Excepturi ipsam voluptatem eligendi molestias incidunt.",
                "description": "Officia id est minus. Sunt adipisci quod possimus eos. Totam dolor enim quaerat facere accusamus excepturi est.",
                "description_en": "Doloribus molestias ut sint aut. Dolores amet dolorum expedita sed reprehenderit veniam laboriosam sint. Corporis voluptatem natus qui cupiditate minus praesentium velit quaerat.",
                "usage_image": null,
                "usage": "Nobis veniam porro sed voluptas sit ut. Ab saepe ut id vel voluptatem. Aut quia nulla iusto laboriosam et qui. Minus ullam perferendis aspernatur nihil eaque.",
                "usage_en": "Illo consectetur quia reiciendis sint voluptatem vero. Est omnis blanditiis at vitae quia mollitia optio et. Qui modi quia eum voluptates. Vitae nemo rerum vel nihil placeat ipsam quidem.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/219\/601\/222\/wood-natural-landscape-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/865\/197\/278\/winter-landscape-snow-nature-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/686\/972\/951\/rainbow-landscape-cloud-preview.jpg",
                "product_video": null,
                "status": 1,
                "rating": 3.34,
                "sold_count": 2912,
                "review_count": 4871,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-20 10:41:24",
                "updated_at": "2020-09-19 10:24:42",
                "product_category": {
                    "id": 7,
                    "name": "腮红",
                    "slug": "ratione-qui",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/565\/122\/374\/clouds-cloudy-mountains-nature-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/472\/568\/33\/sunset-cloud-sky-landscape-preview.jpg",
                    "title": "nobis nihil dolorem",
                    "title_en": "exercitationem enim eum",
                    "sub_title": "ab distinctio neque",
                    "describe": "Odio nostrum inventore sint itaque debitis. Quos maiores dolores quia magnam quasi ducimus ducimus. Odio necessitatibus exercitationem doloremque voluptates nisi magni.",
                    "describe_en": "Accusamus numquam id itaque libero quibusdam. Et non corporis eligendi temporibus. Aut dolorem et omnis tenetur autem et. In velit aut dolores culpa rerum est quis.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/581\/774\/417\/cloud-snow-winter-tree-preview.jpg",
                    "type": 1,
                    "parent_id": 9,
                    "level": 1,
                    "created_at": "2020-09-26 04:04:38",
                    "updated_at": "2020-10-10 00:00:10"
                }
            },
            {
                "id": 12,
                "product_category_id": 9,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "corporis doloremque quasi",
                "thumbnail": "http:\/\/oss.queen-spades.com\/Products\/HYtvroFDI6cFah6p4C2CyYNatDgH88Pwd8R7KJKi.jpeg",
                "slug": "inventore-modi",
                "short_description": "Quos et aut dolor recusandae quia veritatis.",
                "short_description_en": "Iure rerum harum ipsum nostrum quia laboriosam. Soluta ut et autem eligendi quod. Doloremque quia accusantium exercitationem eius libero.",
                "price": "6918.00",
                "sale_price": "0.01",
                "stock": 313,
                "spec": "50 ml \/ 1.7 fl. oz",
                "seo_title": "velit quisquam architecto",
                "seo_keyword": "quam",
                "seo_description": "Nemo architecto eos cupiditate qui.",
                "benefit": "Exercitationem cum quis est eveniet. Praesentium voluptatum dolor quam ea iusto molestiae. Aut eum nam ipsam nesciunt sed delectus dolores. Facilis dolor id quas at qui eaque quia.",
                "benefit_en": "Consectetur consequatur tenetur modi iusto velit nobis non. Dolorem non non sed ratione quo nihil dolor dolore. Accusantium a ipsum quae aspernatur molestiae. Nobis eos est recusandae blanditiis.",
                "tech_image": "null",
                "tech_description": "Quo dolorem porro non aut et. Occaecati sit enim tempore corrupti hic. Reiciendis et quia itaque a aut. Error omnis architecto exercitationem sed. Sed voluptatem assumenda minima sit voluptatem.",
                "tech_description_en": "Nam sint labore est velit velit. Consectetur ut voluptatem sint exercitationem doloribus eum. Nihil consequuntur dolores dignissimos mollitia. Repellat nemo libero corporis voluptas.",
                "description": "Tempora accusantium temporibus quisquam voluptate tempore eaque. At aut eveniet aspernatur nihil corrupti. Voluptatem ea dolor aliquam rerum a illum.",
                "description_en": "Doloremque commodi aut aliquam modi est. Officiis impedit voluptatem officia hic earum. Maiores est voluptates illo facere dolorem ullam.",
                "usage_image": "null",
                "usage": "Iusto blanditiis rerum voluptatum fugiat nesciunt. Enim voluptas est quas voluptas nostrum vel dignissimos. Eos sit reprehenderit id quam illum iure voluptates. Quia corporis beatae ipsum unde.",
                "usage_en": "Tempora id doloribus rerum et consequuntur voluptatibus inventore occaecati. Fuga in saepe dolorem soluta sint. In voluptates voluptas quis debitis et deserunt fugiat. Similique dolores fugit quae soluta minus ratione.",
                "main_image": "http:\/\/oss.queen-spades.com\/Products\/jwKIVfy9qyB2MVlbxCQJuKx2J5VQoiMVmXpyhhey.jpeg",
                "main_image_2": "http:\/\/oss.queen-spades.com\/Products\/GAxf31Tr1uyhoWTZqNe0cQm3ji7ZtrSOdqdGFlD3.jpeg",
                "benefit_image": "http:\/\/oss.queen-spades.com\/Products\/vplfIsKZTG2LalAh0TMZb6H7OITQytMgzWSN1Tdf.jpeg",
                "product_video": "null",
                "status": 2,
                "rating": 0.69,
                "sold_count": 3752,
                "review_count": 1572,
                "parent_id": 6,
                "level": 2,
                "created_at": "2020-10-16 12:56:07",
                "updated_at": "2020-10-26 15:22:10",
                "product_category": {
                    "id": 9,
                    "name": "面膜",
                    "slug": "quidem-doloremque",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/654\/243\/649\/tree-field-cornfield-nature-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/742\/780\/980\/landscape-tropical-palm-tree-flowers-preview.jpg",
                    "title": "iusto qui maxime",
                    "title_en": "excepturi hic deserunt",
                    "sub_title": "occaecati autem eius",
                    "describe": "Molestiae itaque facere in at. Rem vel tenetur odit voluptas saepe. Quo accusantium atque quibusdam ullam saepe quis. Dignissimos sit perspiciatis necessitatibus repellat.",
                    "describe_en": "Sunt sit similique sequi soluta sit. Quia id nulla similique minima et consequuntur accusantium. Quo laudantium quia consequatur quia laboriosam pariatur.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/454\/247\/757\/mountain-sky-cloud-nature-preview.jpg",
                    "type": 1,
                    "parent_id": 1,
                    "level": 1,
                    "created_at": "2020-10-06 21:43:37",
                    "updated_at": "2020-10-09 05:25:35"
                }
            },
            {
                "id": 13,
                "product_category_id": 10,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "cum voluptate pariatur",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/717\/125\/127\/sunset-storm-sky-landscape-preview.jpg",
                "slug": "exercitationem-saepe",
                "short_description": "Quidem modi laboriosam autem reprehenderit.",
                "short_description_en": "Rerum sed sit ipsum soluta. Commodi suscipit consequuntur sed cupiditate ullam quia. Consectetur voluptatum iste similique.",
                "price": "2709.00",
                "sale_price": "0.01",
                "stock": 18,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "id eveniet tempore",
                "seo_keyword": "reiciendis",
                "seo_description": "Molestiae culpa quia quo ipsam adipisci sed.",
                "benefit": "Minima et nemo quasi vel. Natus voluptates assumenda vel. Aut ipsum sed quas voluptas qui. Unde aut voluptatem qui inventore nihil.",
                "benefit_en": "Velit et ut natus ut. A dolores eum tempora nulla magnam. Aliquam sit aut et et.",
                "tech_image": "null",
                "tech_description": "Quas ipsum cupiditate est nulla. Esse quos amet aut sed. Rerum vitae natus natus nobis velit debitis. Ut in ea laboriosam velit.",
                "tech_description_en": "Corporis sed sed modi sit rem consequatur. Sint temporibus voluptatibus harum rerum voluptatem voluptatem officia. Quia nam quibusdam mollitia occaecati et. Saepe voluptatum harum ut alias id.",
                "description": "Eum voluptatem dolorem cum ullam porro magnam. Ut velit id est laborum nostrum placeat. Qui necessitatibus eaque provident hic corrupti sed voluptatem maxime.",
                "description_en": "Sit ut maiores explicabo excepturi. Dolores odit inventore doloremque nostrum aut cupiditate. Cumque at aut quam et eum nostrum. Dolor et adipisci accusantium rem qui non ut.",
                "usage_image": "null",
                "usage": "Tempore non at quasi voluptatem esse nisi quis. Eaque optio iste voluptatem eaque. Reiciendis ipsa modi cupiditate reiciendis et. Adipisci odit delectus qui deleniti enim est enim qui.",
                "usage_en": "Corporis qui eius temporibus et hic. Perspiciatis in nemo veritatis error modi. Aut repudiandae sequi ipsum nulla.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/848\/135\/763\/mountain-landscape-pollença-mountains-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/797\/751\/628\/climbing-nature-landscape-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/587\/557\/309\/nomadic-life-yurts-landscape-mongolia-preview.jpg",
                "product_video": "null",
                "status": 1,
                "rating": 6.16,
                "sold_count": 6298,
                "review_count": 5288,
                "parent_id": 9,
                "level": 2,
                "created_at": "2020-10-13 21:14:40",
                "updated_at": "2020-10-26 15:22:23",
                "product_category": {
                    "id": 10,
                    "name": "面霜",
                    "slug": "quos-non",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/414\/294\/449\/africa-namibia-landscape-dry-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/394\/613\/240\/sunset-landscape-river-sun-preview.jpg",
                    "title": "beatae doloribus voluptate",
                    "title_en": "est ducimus nobis",
                    "sub_title": "amet sed perferendis",
                    "describe": "Ipsam quia qui nulla dolore. Voluptatibus voluptatem nesciunt nihil saepe. Ut omnis voluptas ducimus quam. Dignissimos non sed iste excepturi vitae saepe.",
                    "describe_en": "Commodi dolorem possimus dolorum expedita. Consequatur fugit quia accusamus. Sit praesentium ut fugiat blanditiis sed libero.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/599\/583\/786\/mountain-nature-india-landscape-preview.jpg",
                    "type": 1,
                    "parent_id": 0,
                    "level": 1,
                    "created_at": "2020-10-05 17:53:55",
                    "updated_at": "2020-09-30 16:08:43"
                }
            },
            {
                "id": 14,
                "product_category_id": 7,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "aspernatur ad culpa",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/314\/165\/126\/switzerland-lake-castle-water-preview.jpg",
                "slug": "architecto-magnam",
                "short_description": "Eveniet et tenetur quod.",
                "short_description_en": "Quia quia animi et ut repellat. Ut ut ex ab eaque rem aut. Voluptas quia corrupti ipsum aut ipsum unde magni.",
                "price": "1992.00",
                "sale_price": "0.01",
                "stock": 388,
                "spec": "50 ml \/ 1.7 fl. oz",
                "seo_title": "nihil sint mollitia",
                "seo_keyword": "et",
                "seo_description": "Aperiam laboriosam praesentium blanditiis expedita.",
                "benefit": "Doloribus nobis velit sapiente perspiciatis tempora officia. Sed voluptatem iste officia ut. Adipisci repudiandae voluptates id. Laborum sit molestiae fuga et illo repudiandae.",
                "benefit_en": "Omnis vel ut eum ut eum dolorem. Repellendus perferendis ut et voluptatibus. Sed ex aperiam nulla asperiores non hic eaque. Quia id minus consequuntur.",
                "tech_image": null,
                "tech_description": "Ea reiciendis corporis iure aliquam exercitationem ut numquam. Ut aut ea excepturi et odio est. Voluptatem dolores ut tempora vel a. Eum excepturi quia accusamus.",
                "tech_description_en": "Iusto tempora vero occaecati amet aut aut quas eos. Corrupti voluptas alias sed assumenda atque. Quidem veniam asperiores qui non.",
                "description": "Nemo dolor in blanditiis. Eum est quo sint numquam officia fugit. Tempore numquam non qui saepe enim quibusdam saepe saepe.",
                "description_en": "Sed placeat et non vel error numquam. Distinctio et nihil aut. Accusantium nobis ducimus voluptas cum id. Qui suscipit saepe consequatur dolorum inventore enim. Ut nihil repellat assumenda sapiente quos consequuntur laborum.",
                "usage_image": null,
                "usage": "Qui voluptate possimus ea ut fuga. Ut molestiae rerum dolor eum. Et quis a velit quia. Mollitia voluptas velit veniam placeat tempora voluptatem ducimus.",
                "usage_en": "Aut aut eos in et. Omnis veniam veniam libero error voluptates sequi autem. Qui quam soluta aut distinctio. In aut est sit commodi illo maiores at excepturi.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/1021\/536\/888\/nature-mountains-alpine-lake-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/1012\/815\/617\/fog-outlines-pine-trees-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/501\/589\/71\/alpine-mountains-landscape-mountain-landscape-preview.jpg",
                "product_video": null,
                "status": 2,
                "rating": 8.54,
                "sold_count": 2767,
                "review_count": 2598,
                "parent_id": 4,
                "level": 2,
                "created_at": "2020-09-21 18:28:31",
                "updated_at": "2020-10-06 09:16:10",
                "product_category": {
                    "id": 7,
                    "name": "腮红",
                    "slug": "ratione-qui",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/565\/122\/374\/clouds-cloudy-mountains-nature-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/472\/568\/33\/sunset-cloud-sky-landscape-preview.jpg",
                    "title": "nobis nihil dolorem",
                    "title_en": "exercitationem enim eum",
                    "sub_title": "ab distinctio neque",
                    "describe": "Odio nostrum inventore sint itaque debitis. Quos maiores dolores quia magnam quasi ducimus ducimus. Odio necessitatibus exercitationem doloremque voluptates nisi magni.",
                    "describe_en": "Accusamus numquam id itaque libero quibusdam. Et non corporis eligendi temporibus. Aut dolorem et omnis tenetur autem et. In velit aut dolores culpa rerum est quis.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/581\/774\/417\/cloud-snow-winter-tree-preview.jpg",
                    "type": 1,
                    "parent_id": 9,
                    "level": 1,
                    "created_at": "2020-09-26 04:04:38",
                    "updated_at": "2020-10-10 00:00:10"
                }
            },
            {
                "id": 15,
                "product_category_id": 4,
                "product_name": "钻石焕活面膜",
                "product_name_en": "earum veritatis rerum",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/621\/404\/918\/beach-sea-landscape-preview.jpg",
                "slug": "qui-sit",
                "short_description": "Explicabo ad et et ipsum exercitationem.",
                "short_description_en": "Consequuntur corporis unde qui quia adipisci temporibus. Laborum laudantium occaecati consectetur mollitia quidem. Eum tenetur consequatur earum qui dolorem id. Vel perspiciatis qui cum aut. Quam aut reprehenderit iste perferendis recusandae natus suscipit.",
                "price": "1728.00",
                "sale_price": "0.01",
                "stock": 409,
                "spec": "150 ml \/ 2.0 oz",
                "seo_title": "aut possimus modi",
                "seo_keyword": "est",
                "seo_description": "In expedita sed quia amet eius.",
                "benefit": "Architecto et enim est. Dolorem cumque placeat voluptates. Voluptate vero molestiae dolor est molestias ipsam temporibus. A saepe corporis ut ea.",
                "benefit_en": "Repudiandae nesciunt a dicta eum. Similique et odio ea repellat autem. Cupiditate et excepturi ex et quis laborum.",
                "tech_image": null,
                "tech_description": "Numquam iure suscipit facilis ex delectus similique laboriosam. Perspiciatis sit qui et doloremque aliquid possimus asperiores numquam. Omnis accusamus consequuntur nam sunt assumenda illo.",
                "tech_description_en": "Et occaecati esse ullam omnis. Et fugiat delectus ab asperiores occaecati laborum. Totam enim non dolor explicabo provident voluptatem. Ut quidem molestiae accusamus possimus molestiae.",
                "description": "Et corporis ducimus occaecati fugiat ut sunt. Consectetur dolore totam possimus officia reiciendis illo aliquid. Saepe qui suscipit explicabo numquam amet.",
                "description_en": "Nam sed porro consequatur aut aut. Eos officiis autem consequatur aut aut. Rerum earum non qui voluptate. Recusandae quibusdam nulla sit non. Placeat eius esse facilis voluptas ullam id eos.",
                "usage_image": null,
                "usage": "Quia minima omnis nostrum dicta eum. Eveniet odit ipsum cum consectetur et nam quia. Vero qui dicta et rerum iusto.",
                "usage_en": "Sed sed qui ut est doloremque. Minus odit explicabo consequuntur beatae corrupti qui dolorem. Distinctio eum rem quia veniam fuga voluptatem autem. Recusandae natus hic ipsum error tempore.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/425\/736\/24\/sky-prairie-landscape-clouds-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/180\/533\/167\/landscape-polder-rural-dutch-landscape-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/499\/189\/232\/lake-landscape-blue-nature-preview.jpg",
                "product_video": null,
                "status": 2,
                "rating": 5.93,
                "sold_count": 5293,
                "review_count": 7435,
                "parent_id": 4,
                "level": 2,
                "created_at": "2020-10-07 02:04:22",
                "updated_at": "2020-09-26 08:04:26",
                "product_category": {
                    "id": 4,
                    "name": "洁面",
                    "slug": "pariatur-quia",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/564\/169\/239\/city-night-the-urban-landscape-night-city-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/960\/431\/806\/landscape-sunset-sky-natural-landscape-preview.jpg",
                    "title": "aspernatur laboriosam sed",
                    "title_en": "neque et in",
                    "sub_title": "explicabo sed dolore",
                    "describe": "Molestiae sequi voluptatem et tenetur. Exercitationem eius deserunt et et. Id dolores ipsam reprehenderit ut odit debitis sunt.",
                    "describe_en": "Odit quia rem dicta quia sunt. Qui magni dolorem at eius perspiciatis et velit. Non excepturi accusantium ipsum laborum labore et mollitia consectetur.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/651\/23\/692\/wood-natural-landscape-preview.jpg",
                    "type": 1,
                    "parent_id": 5,
                    "level": 1,
                    "created_at": "2020-09-16 18:48:29",
                    "updated_at": "2020-10-06 09:35:37"
                }
            },
            {
                "id": 16,
                "product_category_id": 8,
                "product_name": "黑钻肌光精华",
                "product_name_en": "fugit itaque quos",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/72\/552\/919\/sunset-sky-nature-sunset-landscape-preview.jpg",
                "slug": "placeat-labore",
                "short_description": "Et velit consequuntur odit veniam consequuntur.",
                "short_description_en": "Itaque nam occaecati nihil ad. Qui iste in nihil voluptas ullam. Reiciendis animi voluptatem quae itaque. Nihil molestiae fuga dolores minus dolorem ex dolores.",
                "price": "7511.00",
                "sale_price": "0.01",
                "stock": 297,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "et veniam aliquid",
                "seo_keyword": "sunt",
                "seo_description": "Non et distinctio laborum consectetur velit aut.",
                "benefit": "Accusamus et impedit beatae vitae. Distinctio quis eos consequatur autem eum totam id magni. Magni perspiciatis in atque.",
                "benefit_en": "Quibusdam laborum est dicta perspiciatis praesentium quasi ea. Quae nihil laborum nisi incidunt. Delectus est et dolorum sint. Eos aliquam et qui.",
                "tech_image": null,
                "tech_description": "Est iure distinctio iure debitis ipsum qui. Mollitia aliquid quis autem cupiditate id. Totam aut voluptate aperiam minima iste qui et. Tempore id et sit quam.",
                "tech_description_en": "Eum voluptatibus sunt aut molestiae rerum et. Commodi non quasi itaque ab fugiat nihil. Dolor consequatur commodi mollitia voluptas animi. Magni qui vel in at rerum ut ratione.",
                "description": "Consequatur ea illum temporibus ipsum. Iure voluptatem deleniti consectetur non culpa labore. Illo cum omnis voluptatem enim saepe.",
                "description_en": "Placeat qui voluptatum nihil blanditiis. Quo ex velit fuga. Tempora ut magni qui tenetur eos. Aut sed vel non iusto.",
                "usage_image": null,
                "usage": "Ea quaerat sint cum. Et exercitationem omnis rerum. Et voluptas ea sint soluta quia possimus impedit illo. Laborum sapiente perferendis iste a veniam et.",
                "usage_en": "Aut voluptates ducimus et dolore laboriosam molestiae. Et doloremque aut sit autem enim. Autem ut praesentium voluptatibus et nam et recusandae est. Deserunt ad sunt voluptates enim.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/585\/352\/970\/flower-garden-landscape-design-garden-landscape-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/518\/365\/148\/woods-forest-nature-landscape-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/744\/647\/591\/mountains-alpine-landscape-mountain-landscape-preview.jpg",
                "product_video": null,
                "status": 3,
                "rating": 8.34,
                "sold_count": 2323,
                "review_count": 2210,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-10-12 18:36:22",
                "updated_at": "2020-10-05 16:42:18",
                "product_category": {
                    "id": 8,
                    "name": "洁面",
                    "slug": "voluptatibus-voluptas",
                    "thumbnail": "http:\/\/oss.queen-spades.com\/Products\/wfcSkk5SCBSE2gDdcV08HHm1gki0gXmcvH3lIT1w.jpeg",
                    "banner": "http:\/\/oss.queen-spades.com\/Products\/UQWblHSAICNpFBRWfR4G2BHwZSvwa6RSVsmlvlhm.jpeg",
                    "title": "modi occaecati rerum",
                    "title_en": "dolorem id earum",
                    "sub_title": "quia occaecati perspiciatis",
                    "describe": "Occaecati qui doloribus sed expedita. Minima nulla pariatur deserunt est qui et. Vel asperiores quo sunt numquam dolorem.",
                    "describe_en": "Aut beatae placeat labore. Earum quia molestiae unde officiis dolor qui cum. Sit laborum qui eaque. Dolor reiciendis quae asperiores quaerat vel vitae.",
                    "describe_img": "http:\/\/oss.queen-spades.com\/Products\/dE9EF0iCzlwMOGQz75mG6HsdvgmpBilTQlEkSjvQ.jpeg",
                    "type": 1,
                    "parent_id": 14,
                    "level": 1,
                    "created_at": "2020-10-09 13:57:45",
                    "updated_at": "2020-10-20 16:00:11"
                }
            },
            {
                "id": 17,
                "product_category_id": 3,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "sint in aspernatur",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/205\/452\/866\/desert-landscape-nature-desert-landscape-preview.jpg",
                "slug": "facere-eos",
                "short_description": "Quae et non iusto laudantium voluptatem eligendi.",
                "short_description_en": "Perferendis officiis nam delectus recusandae cumque. Optio in quo voluptatum itaque pariatur adipisci. Ipsam nisi eum veniam et cupiditate ullam. A at maiores qui vero.",
                "price": "3292.00",
                "sale_price": "0.01",
                "stock": 863,
                "spec": "150 ml \/ 2.0 oz",
                "seo_title": "iure provident at",
                "seo_keyword": "voluptates",
                "seo_description": "Quo qui porro est iste porro.",
                "benefit": "Qui doloremque deleniti esse quas. Saepe voluptatem omnis sunt. Dolor sed voluptatem voluptatem magni deserunt ut corporis dolore.",
                "benefit_en": "Vero saepe quia qui. Quis temporibus rerum tenetur commodi tempore vel totam. Ipsam exercitationem est ab fugit dicta. Atque perspiciatis ratione est laboriosam neque incidunt et omnis.",
                "tech_image": null,
                "tech_description": "Voluptas dolorum quas eius eum. Accusantium reiciendis et atque praesentium aspernatur id facilis. Nobis voluptatem iste ea nisi ipsum. Sunt facilis quas aut quos quia. Sint sunt est accusantium quam nobis animi.",
                "tech_description_en": "Aspernatur molestias accusamus iste. Delectus velit est rerum. Necessitatibus error itaque sed eius hic tenetur.",
                "description": "Voluptas deleniti harum dolorum aut. Cumque architecto quos officiis velit. Cumque et praesentium repellat tempora nostrum sit. Omnis quisquam animi voluptatem et.",
                "description_en": "Id unde mollitia at dolore temporibus eos. Consequuntur itaque ipsam doloremque aut natus aut laudantium expedita. Error debitis perferendis dicta illum quo. Ipsa facere ea ut sapiente quam ipsa eum.",
                "usage_image": null,
                "usage": "Labore molestiae quo ad eaque et blanditiis. Qui dolores nam nemo tempore. Cupiditate asperiores temporibus laudantium rerum non cupiditate.",
                "usage_en": "Quia numquam commodi dignissimos quis velit qui quis. Aut maxime ut suscipit reprehenderit minima assumenda libero. Aperiam nulla similique non culpa sunt voluptatum quis. Modi a saepe fugit officiis.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/724\/197\/189\/wintry-mountain-snow-snow-landscape-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/841\/677\/80\/arlberg-pass-landscape-abendstimmung-twilight-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/717\/125\/127\/sunset-storm-sky-landscape-preview.jpg",
                "product_video": null,
                "status": 2,
                "rating": 9.8,
                "sold_count": 9704,
                "review_count": 6969,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-10-06 10:54:34",
                "updated_at": "2020-09-24 00:46:55",
                "product_category": {
                    "id": 3,
                    "name": "爽肤水",
                    "slug": "distinctio-possimus",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/42\/877\/161\/lijiang-landscape-the-scenery-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/203\/696\/888\/prairie-nature-chifeng-preview.jpg",
                    "title": "quod doloribus deleniti",
                    "title_en": "reprehenderit a quis",
                    "sub_title": "et quibusdam aut",
                    "describe": "Aut voluptatum aut deleniti. Et vitae et quas. Quaerat corporis beatae nobis ratione tempora rerum aut.",
                    "describe_en": "Quasi expedita qui deleniti sint sit mollitia unde. Id culpa sint dicta dolores rerum et iste.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/29\/942\/431\/sunset-evening-landscape-evening-sky-preview.jpg",
                    "type": 1,
                    "parent_id": 15,
                    "level": 1,
                    "created_at": "2020-10-07 13:11:46",
                    "updated_at": "2020-10-02 22:35:20"
                }
            },
            {
                "id": 18,
                "product_category_id": 6,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "excepturi voluptatem necessitatibus",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/518\/110\/563\/crop-landscape-agricultural-farm-house-preview.jpg",
                "slug": "qui-quia",
                "short_description": "Perspiciatis ipsa non est dolor saepe rem.",
                "short_description_en": "Maiores qui perspiciatis sequi ipsa. Vitae quibusdam nam et reiciendis et saepe. Odit et enim recusandae voluptas est quia dolores delectus. Harum ut aspernatur dicta.",
                "price": "3869.00",
                "sale_price": "0.01",
                "stock": 10,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "et impedit doloribus",
                "seo_keyword": "accusamus",
                "seo_description": "Omnis fugit enim qui aspernatur magni ratione.",
                "benefit": "Odit magnam in sapiente sit id iusto. Velit eos quisquam maxime et voluptatem. Officia eligendi aut ea eaque hic. Recusandae nesciunt fugit iure temporibus ex dolores enim.",
                "benefit_en": "Voluptas similique dolorem quisquam praesentium accusantium aliquam. Rerum perferendis earum officia libero repudiandae. Aut et deserunt et hic incidunt vel et.",
                "tech_image": null,
                "tech_description": "Ducimus aut et alias itaque. Fugit adipisci asperiores sunt nulla voluptas eaque ut.",
                "tech_description_en": "Ut ipsa vitae sed voluptas nam rem quos. Tempora molestiae error alias reprehenderit fuga qui. Ducimus enim omnis vero consequatur earum voluptate dolorem. Est sint earum similique labore nesciunt sed qui. Eum ducimus illum et occaecati.",
                "description": "Repudiandae ab distinctio est sit sit est. Culpa tenetur voluptas consequatur aut voluptate itaque quam. Eaque ipsa inventore consectetur dolores exercitationem. Autem eum et quasi labore est.",
                "description_en": "Sint ipsa sit et voluptatibus magni ea. Similique ratione ut nihil ut est molestiae praesentium.",
                "usage_image": null,
                "usage": "Veritatis non nihil nesciunt exercitationem mollitia. Facilis quaerat cupiditate repudiandae quibusdam ipsa sit. Voluptas at laborum sint architecto commodi.",
                "usage_en": "Autem perspiciatis illo minima quia qui nulla aliquid. Qui voluptatibus quia ullam qui labore minus nihil.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/106\/1002\/573\/mountains-mountain-landscape-mountain-peaks-mountain-summit-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/895\/582\/334\/sulfuric-acid-mountain-people-s-republic-of-china-rock-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/84\/169\/280\/landscape-road-highway-preview.jpg",
                "product_video": null,
                "status": 1,
                "rating": 8.59,
                "sold_count": 8917,
                "review_count": 2229,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-10-12 14:02:46",
                "updated_at": "2020-09-25 08:23:14",
                "product_category": {
                    "id": 6,
                    "name": "隔离1",
                    "slug": "doloremque-excepturi",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/748\/282\/412\/landscape-shore-sunset-clouds-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/138\/376\/943\/spring-meadow-forest-meadow-grass-preview.jpg",
                    "title": "molestiae quibusdam iusto",
                    "title_en": "sed omnis similique",
                    "sub_title": "magni repellendus illo",
                    "describe": "Fugit aut earum voluptatibus in eveniet totam. Nemo sapiente libero dolor voluptatem asperiores.",
                    "describe_en": "Est modi non soluta quas. Deleniti consequatur est ut amet hic. At id rerum rem veritatis ipsa totam quae molestiae.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/983\/839\/823\/landscape-nature-field-rest-preview.jpg",
                    "type": 1,
                    "parent_id": 6,
                    "level": 1,
                    "created_at": "2020-10-07 17:43:57",
                    "updated_at": "2020-10-26 10:52:02"
                }
            },
            {
                "id": 19,
                "product_category_id": 8,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "numquam molestias ut",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/125\/99\/637\/tjasker-mill-heide-landscape-preview.jpg",
                "slug": "quo-debitis",
                "short_description": "Dolorum maiores aut eius deserunt.",
                "short_description_en": "Ut sequi maiores dolores et voluptas totam. Numquam tenetur sed porro aut sed dolor magni. Voluptatum aut assumenda iste et magni qui sunt.",
                "price": "7299.00",
                "sale_price": "0.01",
                "stock": 669,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "non sunt tenetur",
                "seo_keyword": "nobis",
                "seo_description": "Ex rem iusto molestiae.",
                "benefit": "Voluptas sunt nobis sunt mollitia qui ut tempora. Molestias eveniet corporis sequi qui. Quo repudiandae magnam cupiditate rerum architecto est.",
                "benefit_en": "Beatae totam ut aperiam omnis ipsum. Velit qui temporibus omnis eum nobis voluptatum. Ex omnis harum eius molestiae ut. Ut consequatur quis eligendi eos incidunt quidem. Aperiam aliquid maiores veniam.",
                "tech_image": null,
                "tech_description": "Cupiditate accusantium asperiores architecto minima esse sint repudiandae minima. Enim dolorum sit vel praesentium aliquid laboriosam. Nostrum ut omnis eos pariatur ut saepe enim.",
                "tech_description_en": "Quis consequatur cupiditate aut aut. Sint maxime reiciendis repellat magnam qui sint. Consequuntur temporibus ea voluptate eius tenetur.",
                "description": "Exercitationem repudiandae qui labore hic nesciunt est. Dolor corporis consequatur sed. Unde eveniet et ut eveniet in officia. Quia commodi laboriosam sint modi architecto qui.",
                "description_en": "Nihil sed inventore deserunt dicta. Reprehenderit facilis culpa at sed aliquid illum odio. Distinctio provident cumque eos modi aliquid autem.",
                "usage_image": null,
                "usage": "Veniam ex eum quibusdam mollitia error voluptas sit. Dolor tempora et ut dignissimos animi. Velit aut dicta amet facilis nemo odio velit. Quae tempora esse nesciunt reiciendis aut non.",
                "usage_en": "Non in laborum assumenda et est totam nihil. Quo quia maxime exercitationem et numquam est. Ratione accusamus aut nemo facilis error. Provident eligendi vero molestiae quos deserunt.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/461\/332\/23\/mountain-taiwan-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/30\/611\/689\/lake-nature-water-sky-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/849\/477\/300\/lake-landscape-scenery-preview.jpg",
                "product_video": null,
                "status": 3,
                "rating": 0.74,
                "sold_count": 8273,
                "review_count": 9955,
                "parent_id": 2,
                "level": 2,
                "created_at": "2020-10-08 22:13:09",
                "updated_at": "2020-09-25 19:33:40",
                "product_category": {
                    "id": 8,
                    "name": "洁面",
                    "slug": "voluptatibus-voluptas",
                    "thumbnail": "http:\/\/oss.queen-spades.com\/Products\/wfcSkk5SCBSE2gDdcV08HHm1gki0gXmcvH3lIT1w.jpeg",
                    "banner": "http:\/\/oss.queen-spades.com\/Products\/UQWblHSAICNpFBRWfR4G2BHwZSvwa6RSVsmlvlhm.jpeg",
                    "title": "modi occaecati rerum",
                    "title_en": "dolorem id earum",
                    "sub_title": "quia occaecati perspiciatis",
                    "describe": "Occaecati qui doloribus sed expedita. Minima nulla pariatur deserunt est qui et. Vel asperiores quo sunt numquam dolorem.",
                    "describe_en": "Aut beatae placeat labore. Earum quia molestiae unde officiis dolor qui cum. Sit laborum qui eaque. Dolor reiciendis quae asperiores quaerat vel vitae.",
                    "describe_img": "http:\/\/oss.queen-spades.com\/Products\/dE9EF0iCzlwMOGQz75mG6HsdvgmpBilTQlEkSjvQ.jpeg",
                    "type": 1,
                    "parent_id": 14,
                    "level": 1,
                    "created_at": "2020-10-09 13:57:45",
                    "updated_at": "2020-10-20 16:00:11"
                }
            },
            {
                "id": 20,
                "product_category_id": 3,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "repellat porro repellat",
                "thumbnail": "https:\/\/i0.hippopx.com\/photos\/412\/920\/39\/valley-nature-landscape-travel-preview.jpg",
                "slug": "vel-dolorem",
                "short_description": "Quisquam omnis quo molestiae.",
                "short_description_en": "Consequatur soluta sapiente recusandae quia occaecati excepturi alias. Ut et hic ad quos mollitia quasi voluptatem. Libero eum asperiores sed excepturi suscipit nulla.",
                "price": "3661.00",
                "sale_price": "0.01",
                "stock": 561,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "qui excepturi repellendus",
                "seo_keyword": "eius",
                "seo_description": "Excepturi et suscipit pariatur velit dolorum voluptas.",
                "benefit": "Similique exercitationem praesentium consequatur et molestiae qui magnam. Quod voluptatem adipisci sit nihil architecto aut quaerat.",
                "benefit_en": "Officiis voluptate placeat aut eos. Et sunt ipsum facilis soluta aut deserunt et. Officiis sunt quis consequatur sed maxime. Officiis perferendis quo corrupti laudantium qui necessitatibus dicta.",
                "tech_image": null,
                "tech_description": "Corporis illo nulla eum sed. Quis sapiente cupiditate dolor qui.",
                "tech_description_en": "Ut soluta sequi id. Molestiae ea possimus et aperiam soluta. Saepe non vero mollitia modi sapiente sit.",
                "description": "Voluptatum ratione rerum deserunt sint maiores quisquam doloremque. Quidem in rerum quo consequatur fugiat magnam maiores. Iusto esse iste enim eaque occaecati repudiandae ipsa sint. Est voluptatem nam quia illum quibusdam. Quasi rerum culpa expedita dolor praesentium iste doloribus.",
                "description_en": "Aliquam dignissimos quae quas eum. Rerum dolorem enim id voluptas accusantium velit consequuntur. Voluptas et sint et et. Corrupti laboriosam perspiciatis aut vel eligendi non et.",
                "usage_image": null,
                "usage": "Pariatur ut quae fugiat aut veritatis non laudantium. Reprehenderit sed aspernatur autem cumque. Sit est qui vel. Debitis nisi ut id consequuntur consectetur.",
                "usage_en": "Qui pariatur fugiat ut. Sit aspernatur nisi sint nemo illo veritatis. Officiis ut neque molestias quibusdam dolorem eveniet tempora. Est in amet voluptate consequatur qui.",
                "main_image": "https:\/\/i0.hippopx.com\/photos\/821\/50\/555\/way-bend-polish-road-travel-preview.jpg",
                "main_image_2": "https:\/\/i0.hippopx.com\/photos\/67\/615\/630\/park-city-trees-city-park-preview.jpg",
                "benefit_image": "https:\/\/i0.hippopx.com\/photos\/95\/303\/719\/skyscraper-business-urban-landscape-preview.jpg",
                "product_video": null,
                "status": 3,
                "rating": 9.9,
                "sold_count": 7014,
                "review_count": 5824,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-30 05:23:27",
                "updated_at": "2020-10-09 20:23:10",
                "product_category": {
                    "id": 3,
                    "name": "爽肤水",
                    "slug": "distinctio-possimus",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/42\/877\/161\/lijiang-landscape-the-scenery-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/203\/696\/888\/prairie-nature-chifeng-preview.jpg",
                    "title": "quod doloribus deleniti",
                    "title_en": "reprehenderit a quis",
                    "sub_title": "et quibusdam aut",
                    "describe": "Aut voluptatum aut deleniti. Et vitae et quas. Quaerat corporis beatae nobis ratione tempora rerum aut.",
                    "describe_en": "Quasi expedita qui deleniti sint sit mollitia unde. Id culpa sint dicta dolores rerum et iste.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/29\/942\/431\/sunset-evening-landscape-evening-sky-preview.jpg",
                    "type": 1,
                    "parent_id": 15,
                    "level": 1,
                    "created_at": "2020-10-07 13:11:46",
                    "updated_at": "2020-10-02 22:35:20"
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
        "total": 32
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
    -G "http://localhost/api/product/1" \
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
    -G "http://localhost/api/products/list/product_category_skin_care/incidunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/products/list/product_category_skin_care/incidunt"
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
    -G "http://localhost/api/products/status/harum?page=saepe&page_limit=suscipit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/products/status/harum"
);

let params = {
    "page": "saepe",
    "page_limit": "suscipit",
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
    -G "http://localhost/api/products/innovate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/products/innovate"
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
            "product_category_id": 6,
            "product_name": "亮颜修护",
            "product_name_en": "et et sit",
            "thumbnail": "https:\/\/i0.hippopx.com\/photos\/436\/877\/92\/mountains-mountain-world-fog-clouds-preview.jpg",
            "slug": "debitis-sunt",
            "short_description": "Voluptatem et voluptas provident modi cum.",
            "price": "1506.00",
            "sale_price": "0.01"
        },
        {
            "product_category_id": 6,
            "product_name": "qwerrqw",
            "product_name_en": "qwerqwer",
            "thumbnail": "http:\/\/oss.queen-spades.com\/Products\/gXFmcARxhvjsfplziYQKjN3e6uSWTw7wkUfkyNPH.jpeg",
            "slug": "p-an-de-sen-guang-f",
            "short_description": "<p>安德森光辐射大概岁的法国士大夫<\/p>",
            "price": "1234.00",
            "sale_price": "243.00"
        },
        {
            "product_category_id": 8,
            "product_name": "rwqefads1341",
            "product_name_en": "asdf",
            "thumbnail": "http:\/\/oss.queen-spades.com\/Products\/Y0KDpyZQNsjht96wR2HjXpDm3lINWu3XswH3dbrT.jpeg",
            "slug": "p-fasdfffffffffffff",
            "short_description": "<p>fasdffffffffffffffffffff<\/p>",
            "price": "123456.00",
            "sale_price": "23.00"
        },
        {
            "product_category_id": 2,
            "product_name": "钻石焕活面膜",
            "product_name_en": "saepe adipisci et",
            "thumbnail": "https:\/\/i0.hippopx.com\/photos\/27\/812\/1024\/landscape-autumn-fog-village-preview.jpg",
            "slug": "rem-laudantium",
            "short_description": "Eum aut reprehenderit ratione exercitationem sit.",
            "price": "38.00",
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
    -G "http://localhost/api/products/explore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/products/explore"
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
            "id": 34,
            "thumbnail": "http:\/\/oss.queen-spades.com\/Products\/5mthBLv3EeCHMpFplYt8ZbpCyBRQjT08WlOZFjwA.jpeg",
            "slug": "p-asdfasdfaaaaaaaaa",
            "product_name": "wqerqwer",
            "product_name_en": "qwerqwr"
        },
        {
            "id": 1,
            "thumbnail": "https:\/\/i0.hippopx.com\/photos\/764\/249\/198\/mountain-landscape-snowy-mountain-mountains-snow-preview.jpg",
            "slug": "provident-eos",
            "product_name": "钻石焕活面膜",
            "product_name_en": "voluptatem explicabo facilis"
        },
        {
            "id": 11,
            "thumbnail": "https:\/\/i0.hippopx.com\/photos\/684\/384\/913\/landscape-forests-sky-water-preview.jpg",
            "slug": "consequuntur-vel",
            "product_name": "黑钻焕肤水",
            "product_name_en": "architecto quo vel"
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
    -G "http://localhost/api/product_category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product_category"
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
            "name": "眼霜",
            "slug": "quasi-ratione",
            "thumbnail": "https:\/\/i0.hippopx.com\/photos\/449\/579\/640\/forest-floor-mood-forest-moss-preview.jpg",
            "banner": "https:\/\/i0.hippopx.com\/photos\/626\/129\/68\/sea-road-landscape-preview.jpg",
            "title": "numquam nulla asperiores",
            "title_en": "atque aspernatur et",
            "sub_title": "rerum et deleniti",
            "describe": "Voluptate blanditiis omnis pariatur odit voluptas molestias. Qui tempora labore corrupti nisi distinctio itaque. At earum ut aut ut voluptatum excepturi quasi. Velit corrupti error consequatur aut.",
            "describe_en": "Laborum voluptates veniam dolorum nam. In voluptatum consectetur eos laudantium.",
            "describe_img": "https:\/\/i0.hippopx.com\/photos\/676\/67\/654\/green-tea-plantation-plants-landscape-tea-preview.jpg",
            "type": 1,
            "parent_id": 19,
            "level": 1,
            "created_at": "2020-09-18 11:53:42",
            "updated_at": "2020-09-26 05:29:47",
            "children": [
                {
                    "id": 9,
                    "name": "面膜",
                    "slug": "quidem-doloremque",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/654\/243\/649\/tree-field-cornfield-nature-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/742\/780\/980\/landscape-tropical-palm-tree-flowers-preview.jpg",
                    "title": "iusto qui maxime",
                    "title_en": "excepturi hic deserunt",
                    "sub_title": "occaecati autem eius",
                    "describe": "Molestiae itaque facere in at. Rem vel tenetur odit voluptas saepe. Quo accusantium atque quibusdam ullam saepe quis. Dignissimos sit perspiciatis necessitatibus repellat.",
                    "describe_en": "Sunt sit similique sequi soluta sit. Quia id nulla similique minima et consequuntur accusantium. Quo laudantium quia consequatur quia laboriosam pariatur.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/454\/247\/757\/mountain-sky-cloud-nature-preview.jpg",
                    "type": 1,
                    "parent_id": 1,
                    "level": 1,
                    "created_at": "2020-10-06 21:43:37",
                    "updated_at": "2020-10-09 05:25:35"
                }
            ]
        },
        {
            "id": 2,
            "name": "睫毛膏",
            "slug": "architecto-laudantium",
            "thumbnail": "https:\/\/i0.hippopx.com\/photos\/868\/512\/991\/panorama-šumava-landscape-green-preview.jpg",
            "banner": "https:\/\/i0.hippopx.com\/photos\/480\/129\/260\/landscape-mountains-nature-mountain-landscape-preview.jpg",
            "title": "ullam quis molestiae",
            "title_en": "iure quod qui",
            "sub_title": "qui libero est",
            "describe": "Enim impedit dolorem adipisci sed doloribus. Quia enim dolor aut ipsa eum. Placeat non error eum. Voluptatibus amet sunt aliquid iusto quia repellendus sed.",
            "describe_en": "Aliquid harum tempora doloribus sint recusandae quia numquam. Ad pariatur quasi rerum aut nulla neque. Sed eos qui blanditiis sit iure.",
            "describe_img": "https:\/\/i0.hippopx.com\/photos\/369\/526\/543\/sunset-mountains-blue-nature-sunset-preview.jpg",
            "type": 1,
            "parent_id": 28,
            "level": 1,
            "created_at": "2020-10-02 05:37:48",
            "updated_at": "2020-09-20 11:23:22",
            "children": [
                {
                    "id": 5,
                    "name": "粉底液",
                    "slug": "laboriosam-animi",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/793\/875\/662\/prayer-flags-tibet-landscape-clouds-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/165\/759\/627\/sky-blue-clouds-landscape-preview.jpg",
                    "title": "ullam sapiente nobis",
                    "title_en": "omnis voluptates vel",
                    "sub_title": "aut dignissimos quo",
                    "describe": "Est velit laudantium consequuntur. Dignissimos similique et laudantium et et reiciendis quidem. Assumenda praesentium ut vero tempora.",
                    "describe_en": "Ab est minus tempora assumenda. Similique unde neque iure aut. Repellat aut odio dicta dolorum provident in laudantium.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/946\/822\/506\/landscape-corn-agriculture-farm-preview.jpg",
                    "type": 1,
                    "parent_id": 2,
                    "level": 1,
                    "created_at": "2020-10-01 23:37:21",
                    "updated_at": "2020-09-25 14:20:45"
                }
            ]
        },
        {
            "id": 5,
            "name": "粉底液",
            "slug": "laboriosam-animi",
            "thumbnail": "https:\/\/i0.hippopx.com\/photos\/793\/875\/662\/prayer-flags-tibet-landscape-clouds-preview.jpg",
            "banner": "https:\/\/i0.hippopx.com\/photos\/165\/759\/627\/sky-blue-clouds-landscape-preview.jpg",
            "title": "ullam sapiente nobis",
            "title_en": "omnis voluptates vel",
            "sub_title": "aut dignissimos quo",
            "describe": "Est velit laudantium consequuntur. Dignissimos similique et laudantium et et reiciendis quidem. Assumenda praesentium ut vero tempora.",
            "describe_en": "Ab est minus tempora assumenda. Similique unde neque iure aut. Repellat aut odio dicta dolorum provident in laudantium.",
            "describe_img": "https:\/\/i0.hippopx.com\/photos\/946\/822\/506\/landscape-corn-agriculture-farm-preview.jpg",
            "type": 1,
            "parent_id": 2,
            "level": 1,
            "created_at": "2020-10-01 23:37:21",
            "updated_at": "2020-09-25 14:20:45",
            "children": [
                {
                    "id": 4,
                    "name": "洁面",
                    "slug": "pariatur-quia",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/564\/169\/239\/city-night-the-urban-landscape-night-city-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/960\/431\/806\/landscape-sunset-sky-natural-landscape-preview.jpg",
                    "title": "aspernatur laboriosam sed",
                    "title_en": "neque et in",
                    "sub_title": "explicabo sed dolore",
                    "describe": "Molestiae sequi voluptatem et tenetur. Exercitationem eius deserunt et et. Id dolores ipsam reprehenderit ut odit debitis sunt.",
                    "describe_en": "Odit quia rem dicta quia sunt. Qui magni dolorem at eius perspiciatis et velit. Non excepturi accusantium ipsum laborum labore et mollitia consectetur.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/651\/23\/692\/wood-natural-landscape-preview.jpg",
                    "type": 1,
                    "parent_id": 5,
                    "level": 1,
                    "created_at": "2020-09-16 18:48:29",
                    "updated_at": "2020-10-06 09:35:37"
                }
            ]
        },
        {
            "id": 6,
            "name": "隔离1",
            "slug": "doloremque-excepturi",
            "thumbnail": "https:\/\/i0.hippopx.com\/photos\/748\/282\/412\/landscape-shore-sunset-clouds-preview.jpg",
            "banner": "https:\/\/i0.hippopx.com\/photos\/138\/376\/943\/spring-meadow-forest-meadow-grass-preview.jpg",
            "title": "molestiae quibusdam iusto",
            "title_en": "sed omnis similique",
            "sub_title": "magni repellendus illo",
            "describe": "Fugit aut earum voluptatibus in eveniet totam. Nemo sapiente libero dolor voluptatem asperiores.",
            "describe_en": "Est modi non soluta quas. Deleniti consequatur est ut amet hic. At id rerum rem veritatis ipsa totam quae molestiae.",
            "describe_img": "https:\/\/i0.hippopx.com\/photos\/983\/839\/823\/landscape-nature-field-rest-preview.jpg",
            "type": 1,
            "parent_id": 6,
            "level": 1,
            "created_at": "2020-10-07 17:43:57",
            "updated_at": "2020-10-26 10:52:02",
            "children": [
                {
                    "id": 6,
                    "name": "隔离1",
                    "slug": "doloremque-excepturi",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/748\/282\/412\/landscape-shore-sunset-clouds-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/138\/376\/943\/spring-meadow-forest-meadow-grass-preview.jpg",
                    "title": "molestiae quibusdam iusto",
                    "title_en": "sed omnis similique",
                    "sub_title": "magni repellendus illo",
                    "describe": "Fugit aut earum voluptatibus in eveniet totam. Nemo sapiente libero dolor voluptatem asperiores.",
                    "describe_en": "Est modi non soluta quas. Deleniti consequatur est ut amet hic. At id rerum rem veritatis ipsa totam quae molestiae.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/983\/839\/823\/landscape-nature-field-rest-preview.jpg",
                    "type": 1,
                    "parent_id": 6,
                    "level": 1,
                    "created_at": "2020-10-07 17:43:57",
                    "updated_at": "2020-10-26 10:52:02"
                }
            ]
        },
        {
            "id": 9,
            "name": "面膜",
            "slug": "quidem-doloremque",
            "thumbnail": "https:\/\/i0.hippopx.com\/photos\/654\/243\/649\/tree-field-cornfield-nature-preview.jpg",
            "banner": "https:\/\/i0.hippopx.com\/photos\/742\/780\/980\/landscape-tropical-palm-tree-flowers-preview.jpg",
            "title": "iusto qui maxime",
            "title_en": "excepturi hic deserunt",
            "sub_title": "occaecati autem eius",
            "describe": "Molestiae itaque facere in at. Rem vel tenetur odit voluptas saepe. Quo accusantium atque quibusdam ullam saepe quis. Dignissimos sit perspiciatis necessitatibus repellat.",
            "describe_en": "Sunt sit similique sequi soluta sit. Quia id nulla similique minima et consequuntur accusantium. Quo laudantium quia consequatur quia laboriosam pariatur.",
            "describe_img": "https:\/\/i0.hippopx.com\/photos\/454\/247\/757\/mountain-sky-cloud-nature-preview.jpg",
            "type": 1,
            "parent_id": 1,
            "level": 1,
            "created_at": "2020-10-06 21:43:37",
            "updated_at": "2020-10-09 05:25:35",
            "children": [
                {
                    "id": 7,
                    "name": "腮红",
                    "slug": "ratione-qui",
                    "thumbnail": "https:\/\/i0.hippopx.com\/photos\/565\/122\/374\/clouds-cloudy-mountains-nature-preview.jpg",
                    "banner": "https:\/\/i0.hippopx.com\/photos\/472\/568\/33\/sunset-cloud-sky-landscape-preview.jpg",
                    "title": "nobis nihil dolorem",
                    "title_en": "exercitationem enim eum",
                    "sub_title": "ab distinctio neque",
                    "describe": "Odio nostrum inventore sint itaque debitis. Quos maiores dolores quia magnam quasi ducimus ducimus. Odio necessitatibus exercitationem doloremque voluptates nisi magni.",
                    "describe_en": "Accusamus numquam id itaque libero quibusdam. Et non corporis eligendi temporibus. Aut dolorem et omnis tenetur autem et. In velit aut dolores culpa rerum est quis.",
                    "describe_img": "https:\/\/i0.hippopx.com\/photos\/581\/774\/417\/cloud-snow-winter-tree-preview.jpg",
                    "type": 1,
                    "parent_id": 9,
                    "level": 1,
                    "created_at": "2020-09-26 04:04:38",
                    "updated_at": "2020-10-10 00:00:10"
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
    -G "http://localhost/api/product_category/story/maxime" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product_category/story/maxime"
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
    -G "http://localhost/api/product_category/overview/product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product_category/overview/product"
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
            "id": 3,
            "slug": "debitis-debitis",
            "thumbnail": "https:\/\/i0.hippopx.com\/photos\/760\/827\/659\/sky-mountain-landscape-environment-preview.jpg",
            "product_name": "黑钻赋颜面霜",
            "product_name_en": "vel eum qui"
        },
        {
            "id": 6,
            "slug": "animi-voluptatem",
            "thumbnail": "https:\/\/i0.hippopx.com\/photos\/160\/275\/632\/fir-winter-cold-winter-landscape-preview.jpg",
            "product_name": "钻石冰莹面膜",
            "product_name_en": "aliquid vel magni"
        },
        {
            "id": 9,
            "slug": "dolor-quia",
            "thumbnail": "https:\/\/i0.hippopx.com\/photos\/112\/371\/809\/landscape-nature-sunflowers-nature-landscape-preview.jpg",
            "product_name": "鱼子精华",
            "product_name_en": "ratione sit repellendus"
        }
    ],
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
    -G "http://localhost/api/shop_carts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/shop_carts"
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
    "http://localhost/api/shop_carts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"product_list":[{"product_id":20}]}'

```

```javascript
const url = new URL(
    "http://localhost/api/shop_carts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "product_list": [
        {
            "product_id": 20
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
    "http://localhost/api/shop_carts/1?type=rerum&product_id=voluptatem&amount=eum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/shop_carts/1"
);

let params = {
    "type": "rerum",
    "product_id": "voluptatem",
    "amount": "eum",
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
    "http://localhost/api/shop_carts/1?product_id=sed" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/shop_carts/1"
);

let params = {
    "product_id": "sed",
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
    -G "http://localhost/api/the_house/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/the_house/category"
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
            "name": "精彩内容",
            "slug": "commodi-et",
            "banner": "https:\/\/i0.hippopx.com\/photos\/350\/82\/539\/automobile-automotive-car-clouds-preview.jpg",
            "title": "sunt est nisi",
            "sub_title": "enim beatae nemo",
            "created_at": "2020-03-14 17:32:21",
            "updated_at": "2020-08-30 17:00:43"
        },
        {
            "id": 2,
            "name": "精湛科艺",
            "slug": "facilis-sapiente",
            "banner": "http:\/\/oss.queen-spades.com\/Products\/vUeb4zjw6hSNLL5Czcn1oxNkMdQq1gGfdEn6012g.jpeg",
            "title": "qui laudantium voluptatum",
            "sub_title": "deleniti beatae quidem",
            "created_at": "2020-10-10 13:05:45",
            "updated_at": "2020-10-20 16:34:30"
        },
        {
            "id": 3,
            "name": "精彩内容",
            "slug": "consequatur-molestias",
            "banner": "https:\/\/i0.hippopx.com\/photos\/634\/899\/693\/full-moon-moon-village-night-landscape-preview.jpg",
            "title": "vitae deleniti accusantium",
            "sub_title": "dolor soluta temporibus",
            "created_at": "2020-03-27 02:03:20",
            "updated_at": "2020-03-22 12:58:56"
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
    -G "http://localhost/api/the_house/category/omnis-inventore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/the_house/category/omnis-inventore"
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
    -G "http://localhost/api/the_house/modi-rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/the_house/modi-rerum"
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
    -G "http://localhost/api/the_house/other/omnis-inventore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/the_house/other/omnis-inventore"
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
    "http://localhost/api/user_addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"province":"ducimus","city":"corrupti","district":"odit","address":"omnis","zip":1,"contact_name":"dolores","contact_phone":20}'

```

```javascript
const url = new URL(
    "http://localhost/api/user_addresses"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "province": "ducimus",
    "city": "corrupti",
    "district": "odit",
    "address": "omnis",
    "zip": 1,
    "contact_name": "dolores",
    "contact_phone": 20
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
    "http://localhost/api/user_addresses/1?province=placeat&city=at&district=similique&address=odio&zip=rerum&contact_name=labore&contact_phone=est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_addresses/1"
);

let params = {
    "province": "placeat",
    "city": "at",
    "district": "similique",
    "address": "odio",
    "zip": "rerum",
    "contact_name": "labore",
    "contact_phone": "est",
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
    "http://localhost/api/user_addresses/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_addresses/1"
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
    "http://localhost/api/user_addresses/set_default/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_addresses/set_default/et"
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
    -G "http://localhost/api/user_profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_profile"
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
    "http://localhost/api/user_profile?phone=id&real_name=eligendi&sex=voluptate&birthday=vero&age=ipsum&province=nulla&city=molestias&district=nihil&address=laudantium&zip=quis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_profile"
);

let params = {
    "phone": "id",
    "real_name": "eligendi",
    "sex": "voluptate",
    "birthday": "vero",
    "age": "ipsum",
    "province": "nulla",
    "city": "molestias",
    "district": "nihil",
    "address": "laudantium",
    "zip": "quis",
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
    "http://localhost/api/member_code/bind_parent" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"code":"ut"}'

```

```javascript
const url = new URL(
    "http://localhost/api/member_code/bind_parent"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "code": "ut"
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
    -G "http://localhost/api/wish_list?page=vel&page_limit=provident" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/wish_list"
);

let params = {
    "page": "vel",
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
    "http://localhost/api/wish_list" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"product_id":5}'

```

```javascript
const url = new URL(
    "http://localhost/api/wish_list"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "product_id": 5
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
    "http://localhost/api/wish_list/cumque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/wish_list/cumque"
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
    -G "http://localhost/alipay/bank_gateway/pay?no=voluptatem&total_amount=atque&payment_key=modi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/alipay/bank_gateway/pay"
);

let params = {
    "no": "voluptatem",
    "total_amount": "atque",
    "payment_key": "modi",
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
        "no": "voluptatem",
        "total_amount": "atque",
        "payment_key": "modi"
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
    -G "http://localhost/alipay/bank_gateway/return" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/alipay/bank_gateway/return"
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
    "http://localhost/alipay/bank_gateway/notify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/alipay/bank_gateway/notify"
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
    -G "http://localhost/alipay/aop_page/pay?no=odit&total_amount=distinctio&payment_key=at" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/alipay/aop_page/pay"
);

let params = {
    "no": "odit",
    "total_amount": "distinctio",
    "payment_key": "at",
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
        "no": "odit",
        "total_amount": "distinctio",
        "payment_key": "at"
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
    -G "http://localhost/alipay/aop_page/return" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/alipay/aop_page/return"
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
    "http://localhost/alipay/aop_page/notify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/alipay/aop_page/notify"
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
    -G "http://localhost/alipay/legacy_express/pay?no=non&total_amount=non&payment_key=minus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/alipay/legacy_express/pay"
);

let params = {
    "no": "non",
    "total_amount": "non",
    "payment_key": "minus",
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
        "no": "non",
        "total_amount": "non",
        "payment_key": "minus"
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
    -G "http://localhost/alipay/legacy_express/return" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/alipay/legacy_express/return"
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
    "data": "",
    "code": 10003,
    "msg": "配置读取失败，请稍后重试"
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
    "http://localhost/alipay/legacy_express/notify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/alipay/legacy_express/notify"
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
    -G "http://localhost/unionpay/pay?no=veniam&total_amount=quo&payment_key=quibusdam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/unionpay/pay"
);

let params = {
    "no": "veniam",
    "total_amount": "quo",
    "payment_key": "quibusdam",
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
        "no": "veniam",
        "total_amount": "quo",
        "payment_key": "quibusdam"
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
    "http://localhost/unionpay/return" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/unionpay/return"
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
    "http://localhost/unionpay/notify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/unionpay/notify"
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
    -G "http://localhost/unionpay_gateway/pay?no=nihil&total_amount=vel&payment_key=accusantium&bank_code=voluptates" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/unionpay_gateway/pay"
);

let params = {
    "no": "nihil",
    "total_amount": "vel",
    "payment_key": "accusantium",
    "bank_code": "voluptates",
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
        "no": "nihil",
        "total_amount": "vel",
        "payment_key": "accusantium",
        "bank_code": "voluptates"
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
    -G "http://localhost/unionpay_gateway/bank_code" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/unionpay_gateway/bank_code"
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
    -G "http://localhost/unionpay_gateway/return" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/unionpay_gateway/return"
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
    "msg": "支付完成"
}
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
    "http://localhost/unionpay_gateway/notify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/unionpay_gateway/notify"
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
    -G "http://localhost/api/response_code?10001=ducimus&10002=sequi&10003=consequatur&20001=sed&40001=dolores&40003=ipsam&40004=quia&40005=ut&50001=ut&P1001=magnam&P1002=vel&P4004=eum&P4005=odio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/response_code"
);

let params = {
    "10001": "ducimus",
    "10002": "sequi",
    "10003": "consequatur",
    "20001": "sed",
    "40001": "dolores",
    "40003": "ipsam",
    "40004": "quia",
    "40005": "ut",
    "50001": "ut",
    "P1001": "magnam",
    "P1002": "vel",
    "P4004": "eum",
    "P4005": "odio",
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
    `10002` |  optional  | 数据已存在
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
    -G "http://localhost/api/assetImg" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/assetImg"
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
    -G "http://localhost/api/assetImg/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/assetImg/1"
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

<!-- START_26ec9c40d2469c3f9589a6bb9055245e -->
## admin/payment
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/payment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/payment"
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
    "http://localhost/admin/payment/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/payment/1"
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
    -G "http://localhost/admin/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/roles"
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


