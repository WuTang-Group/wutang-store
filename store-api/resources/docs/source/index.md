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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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
    -d '{"items":[{"merch_id":"vel","key":"suscipit","product":"velit"}]}'

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
            "merch_id": "vel",
            "key": "suscipit",
            "product": "velit"
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
    "http://localhost/admin/alipay/bank_gateway/1?id=laboriosam&merch_id=dolorem&key=nam&product=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/bank_gateway/1"
);

let params = {
    "id": "laboriosam",
    "merch_id": "dolorem",
    "key": "nam",
    "product": "et",
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
    "http://localhost/admin/alipay/bank_gateway/status/1?id=facilis&status=suscipit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/bank_gateway/status/1"
);

let params = {
    "id": "facilis",
    "status": "suscipit",
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
    -G "http://localhost/admin/alipay/legacy_express?page=cum&page_limit=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/legacy_express"
);

let params = {
    "page": "cum",
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
    -d '{"items":[{"pid":"quibusdam","key":"accusamus","seller_email":"minima"}]}'

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
            "pid": "quibusdam",
            "key": "accusamus",
            "seller_email": "minima"
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
    "http://localhost/admin/alipay/legacy_express/1?id=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/legacy_express/1"
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
    "http://localhost/admin/alipay/legacy_express/1?id=earum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/legacy_express/1"
);

let params = {
    "id": "earum",
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
    "http://localhost/admin/alipay/legacy_express/status/1?id=odio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/legacy_express/status/1"
);

let params = {
    "id": "odio",
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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
    -d '{"items":[{"cpid":"excepturi","pay_type":"explicabo"}]}'

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
            "cpid": "excepturi",
            "pay_type": "explicabo"
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
    "http://localhost/admin/union_pay/gateway/1?id=fugiat&cpid=eaque&pay_type=dolore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/union_pay/gateway/1"
);

let params = {
    "id": "fugiat",
    "cpid": "eaque",
    "pay_type": "dolore",
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
    "http://localhost/admin/union_pay/gateway/status/1?id=est&status=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/union_pay/gateway/status/1"
);

let params = {
    "id": "est",
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
    -G "http://localhost/admin/asset_img?page=est&page_limit=ipsum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/asset_img"
);

let params = {
    "page": "est",
    "page_limit": "ipsum",
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
    -d '{"img":"deleniti","img_location":"exercitationem","type":"repudiandae","product_id":"et"}'

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
    "img": "deleniti",
    "img_location": "exercitationem",
    "type": "repudiandae",
    "product_id": "et"
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
    -d '{"img":"nobis","img_location":"dolor","type":"nobis","product_id":"vero"}'

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
    "img": "nobis",
    "img_location": "dolor",
    "type": "nobis",
    "product_id": "vero"
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
    -G "http://localhost/admin/category_stories?page=dolore&page_limit=aliquam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories"
);

let params = {
    "page": "dolore",
    "page_limit": "aliquam",
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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
    "http://localhost/admin/category_stories?title=facilis&title_en=commodi&description=sed&description_en=sit&banner=natus&product_category_id=corrupti" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories"
);

let params = {
    "title": "facilis",
    "title_en": "commodi",
    "description": "sed",
    "description_en": "sit",
    "banner": "natus",
    "product_category_id": "corrupti",
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
    "http://localhost/admin/category_stories/1?title=occaecati&title_en=voluptas&description=repellat&description_en=soluta&banner=quo&product_category_id=itaque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories/1"
);

let params = {
    "title": "occaecati",
    "title_en": "voluptas",
    "description": "repellat",
    "description_en": "soluta",
    "banner": "quo",
    "product_category_id": "itaque",
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
    -G "http://localhost/admin/companies?page=nam&page_limit=doloribus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/companies"
);

let params = {
    "page": "nam",
    "page_limit": "doloribus",
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
    -G "http://localhost/admin/company/departments/quidem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/company/departments/quidem"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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
    -G "http://localhost/admin/logs/1?page=aperiam&page_limit=repellat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/logs/1"
);

let params = {
    "page": "aperiam",
    "page_limit": "repellat",
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
    "http://localhost/admin/logs/1?ids=asperiores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/logs/1"
);

let params = {
    "ids": "asperiores",
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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
    -G "http://localhost/admin/order?page=facere&page_limit=sed" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order"
);

let params = {
    "page": "facere",
    "page_limit": "sed",
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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
    "http://localhost/admin/order?page=provident&page_limit=aut&username=ea&order_no=et&order_status=mollitia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order"
);

let params = {
    "page": "provident",
    "page_limit": "aut",
    "username": "ea",
    "order_no": "et",
    "order_status": "mollitia",
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
    -d '{"refund_status":"impedit","ship_status":"voluptatem","status":"et"}'

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
    "refund_status": "impedit",
    "ship_status": "voluptatem",
    "status": "et"
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
    -G "http://localhost/admin/product?page=dolor&page_limit=quam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product"
);

let params = {
    "page": "dolor",
    "page_limit": "quam",
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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
    "http://localhost/admin/product?product_category_id=esse&product_name=quibusdam&product_name_en=dolor&thumbnail=est&slug=ea&short_description=voluptatum&short_description_en=itaque&price=ea&sale_price=totam&stock=harum&seo_title=alias&seo_keyword=suscipit&seo_description=esse&benefit=dolore&benefit_en=ut&tech_description=omnis&tech_description_en=pariatur&description=debitis&description_en=optio&usage=quo&usage_en=aliquam&main_image=ut&main_image_2=magnam&benefit_image=cumque&product_video=numquam&status=voluptatem&rating=voluptas&sold_count=ut&review_count=quod" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product"
);

let params = {
    "product_category_id": "esse",
    "product_name": "quibusdam",
    "product_name_en": "dolor",
    "thumbnail": "est",
    "slug": "ea",
    "short_description": "voluptatum",
    "short_description_en": "itaque",
    "price": "ea",
    "sale_price": "totam",
    "stock": "harum",
    "seo_title": "alias",
    "seo_keyword": "suscipit",
    "seo_description": "esse",
    "benefit": "dolore",
    "benefit_en": "ut",
    "tech_description": "omnis",
    "tech_description_en": "pariatur",
    "description": "debitis",
    "description_en": "optio",
    "usage": "quo",
    "usage_en": "aliquam",
    "main_image": "ut",
    "main_image_2": "magnam",
    "benefit_image": "cumque",
    "product_video": "numquam",
    "status": "voluptatem",
    "rating": "voluptas",
    "sold_count": "ut",
    "review_count": "quod",
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
    "http://localhost/admin/product/1?product_category_id=et&product_name=unde&product_name_en=ipsum&thumbnail=autem&slug=in&short_description=magni&short_description_en=quidem&price=accusamus&sale_price=voluptates&stock=fugiat&seo_title=reprehenderit&seo_keyword=nostrum&seo_description=rerum&benefit=odio&benefit_en=adipisci&tech_description=ut&tech_description_en=et&description=libero&description_en=et&usage=non&usage_en=repellendus&main_image=magni&main_image_2=iusto&benefit_image=doloribus&product_video=quia&status=quod&rating=sit&sold_count=sed&review_count=ducimus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product/1"
);

let params = {
    "product_category_id": "et",
    "product_name": "unde",
    "product_name_en": "ipsum",
    "thumbnail": "autem",
    "slug": "in",
    "short_description": "magni",
    "short_description_en": "quidem",
    "price": "accusamus",
    "sale_price": "voluptates",
    "stock": "fugiat",
    "seo_title": "reprehenderit",
    "seo_keyword": "nostrum",
    "seo_description": "rerum",
    "benefit": "odio",
    "benefit_en": "adipisci",
    "tech_description": "ut",
    "tech_description_en": "et",
    "description": "libero",
    "description_en": "et",
    "usage": "non",
    "usage_en": "repellendus",
    "main_image": "magni",
    "main_image_2": "iusto",
    "benefit_image": "doloribus",
    "product_video": "quia",
    "status": "quod",
    "rating": "sit",
    "sold_count": "sed",
    "review_count": "ducimus",
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
    -G "http://localhost/admin/product_categories?page=a&page_limit=dolorem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories"
);

let params = {
    "page": "a",
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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
    "http://localhost/admin/product_categories?name=magnam&thumbnail=unde&banner=ut&title=sed&title_en=hic&sub_title=est&describe=amet&describe_en=et&describe_img=ex&parent_id=nesciunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories"
);

let params = {
    "name": "magnam",
    "thumbnail": "unde",
    "banner": "ut",
    "title": "sed",
    "title_en": "hic",
    "sub_title": "est",
    "describe": "amet",
    "describe_en": "et",
    "describe_img": "ex",
    "parent_id": "nesciunt",
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
    "http://localhost/admin/product_categories/1?name=sed&thumbnail=eligendi&banner=sit&title=aperiam&title_en=doloribus&sub_title=quisquam&describe=assumenda&describe_en=quia&describe_img=et&parent_id=corporis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories/1"
);

let params = {
    "name": "sed",
    "thumbnail": "eligendi",
    "banner": "sit",
    "title": "aperiam",
    "title_en": "doloribus",
    "sub_title": "quisquam",
    "describe": "assumenda",
    "describe_en": "quia",
    "describe_img": "et",
    "parent_id": "corporis",
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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
    "http://localhost/admin/product_sku?title=officia&description=dolore&price=iste&stock=accusantium&product_id=culpa" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_sku"
);

let params = {
    "title": "officia",
    "description": "dolore",
    "price": "iste",
    "stock": "accusantium",
    "product_id": "culpa",
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
    "http://localhost/admin/product_sku/1?title=minus&description=sint&price=dolores&stock=et&product_id=sit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_sku/1"
);

let params = {
    "title": "minus",
    "description": "sint",
    "price": "dolores",
    "stock": "et",
    "product_id": "sit",
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
    -G "http://localhost/admin/the_houses?page=suscipit&page_limit=nihil" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/the_houses"
);

let params = {
    "page": "suscipit",
    "page_limit": "nihil",
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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
    -d '{"title":"velit","sub_title":"nobis","the_house_category_id":"corrupti","describe":"ullam","banner":"qui"}'

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
    "title": "velit",
    "sub_title": "nobis",
    "the_house_category_id": "corrupti",
    "describe": "ullam",
    "banner": "qui"
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
    -d '{"title":"unde","sub_title":"expedita","the_house_category_id":"ut","describe":"ea","banner":"officiis"}'

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
    "title": "unde",
    "sub_title": "expedita",
    "the_house_category_id": "ut",
    "describe": "ea",
    "banner": "officiis"
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
    -G "http://localhost/admin/the_house/category/list?page=sunt&page_limit=asperiores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/the_house/category/list"
);

let params = {
    "page": "sunt",
    "page_limit": "asperiores",
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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
    "http://localhost/admin/the_house/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"ut","banner":"est","title":"hic","sub_title":"quis"}'

```

```javascript
const url = new URL(
    "http://localhost/admin/the_house/category"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "ut",
    "banner": "est",
    "title": "hic",
    "sub_title": "quis"
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
    "http://localhost/admin/the_house/category/aspernatur-ex" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"provident","banner":"velit","title":"nihil","sub_title":"consequatur"}'

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
    "name": "provident",
    "banner": "velit",
    "title": "nihil",
    "sub_title": "consequatur"
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
    -G "http://localhost/admin/the_house_content/list?page=fugit&page_limit=earum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/the_house_content/list"
);

let params = {
    "page": "fugit",
    "page_limit": "earum",
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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
    -d '{"the_house_id":"placeat","title":"et","content":"illo","img":"neque","img_desc":"cupiditate"}'

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
    "the_house_id": "placeat",
    "title": "et",
    "content": "illo",
    "img": "neque",
    "img_desc": "cupiditate"
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
    -d '{"the_house_id":"eligendi","title":"dolore","content":"aut","img":"maiores","img_desc":"in"}'

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
    "the_house_id": "eligendi",
    "title": "dolore",
    "content": "aut",
    "img": "maiores",
    "img_desc": "in"
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
    -G "http://localhost/admin/user?username=impedit&page=ut&page_limit=facere" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user"
);

let params = {
    "username": "impedit",
    "page": "ut",
    "page_limit": "facere",
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
    -d '{"username":"voluptatem","password":"excepturi","name":"aliquam","role":"aut","company":"nisi","department":"tempora","sex":2,"phone":7,"email":"rem","member_code":"et"}'

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
    "username": "voluptatem",
    "password": "excepturi",
    "name": "aliquam",
    "role": "aut",
    "company": "nisi",
    "department": "tempora",
    "sex": 2,
    "phone": 7,
    "email": "rem",
    "member_code": "et"
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
    "http://localhost/admin/user/1?name=aut&email=qui&phone=sit&avatar=autem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/1"
);

let params = {
    "name": "aut",
    "email": "qui",
    "phone": "sit",
    "avatar": "autem",
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
    "http://localhost/admin/user/reset_password/1?oldPassword=quia&newPassword=ducimus&newPassword_confirmation=inventore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/reset_password/1"
);

let params = {
    "oldPassword": "quia",
    "newPassword": "ducimus",
    "newPassword_confirmation": "inventore",
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
    -G "http://localhost/admin/get_user?hash_id=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/get_user"
);

let params = {
    "hash_id": "qui",
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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
    "http://localhost/admin/user_addresses?province=eum&city=quo&district=quidem&address=tempore&zip=vel&contact_name=saepe&contact_phone=officia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses"
);

let params = {
    "province": "eum",
    "city": "quo",
    "district": "quidem",
    "address": "tempore",
    "zip": "vel",
    "contact_name": "saepe",
    "contact_phone": "officia",
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
    "http://localhost/admin/user_addresses/1?address_id=suscipit&province=cum&city=enim&district=temporibus&address=et&zip=sed&contact_name=fugiat&contact_phone=id" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses/1"
);

let params = {
    "address_id": "suscipit",
    "province": "cum",
    "city": "enim",
    "district": "temporibus",
    "address": "et",
    "zip": "sed",
    "contact_name": "fugiat",
    "contact_phone": "id",
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
    "http://localhost/admin/user_addresses/1?address_id=non" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses/1"
);

let params = {
    "address_id": "non",
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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
    "http://localhost/admin/user_profiles/1?profile_id=explicabo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_profiles/1"
);

let params = {
    "profile_id": "explicabo",
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
    "http://localhost/admin/user_profiles/1?profile_id=fugiat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_profiles/1"
);

let params = {
    "profile_id": "fugiat",
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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
    -d '{"name":"aspernatur","type":4,"order_no":"dolorum","content":"vel"}'

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
    "name": "aspernatur",
    "type": 4,
    "order_no": "dolorum",
    "content": "vel"
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
            "id": 2,
            "img": "https:\/\/lorempixel.com\/640\/480\/?67135",
            "img_location": 1,
            "type": "banner",
            "product_id": 7,
            "product": {
                "id": 7,
                "slug": "distinctio-similique",
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "consequuntur optio quibusdam"
            }
        },
        "discover": [
            {
                "id": 1,
                "img": "https:\/\/lorempixel.com\/640\/480\/?43117",
                "img_location": 1,
                "type": "discover",
                "product_id": 7,
                "product": {
                    "id": 7,
                    "slug": "distinctio-similique",
                    "product_name": "黑钻洁净滋养面膜",
                    "product_name_en": "consequuntur optio quibusdam"
                }
            },
            {
                "id": 9,
                "img": "https:\/\/lorempixel.com\/640\/480\/?72656",
                "img_location": 1,
                "type": "discover",
                "product_id": 8,
                "product": {
                    "id": 8,
                    "slug": "voluptatem-ab",
                    "product_name": "鱼子精华",
                    "product_name_en": "in eos consectetur"
                }
            }
        ],
        "recommend_list": [
            {
                "id": 10,
                "img": "https:\/\/lorempixel.com\/640\/480\/?88797",
                "img_location": 1,
                "type": "this_month_recommand",
                "product_id": 9,
                "product": {
                    "id": 9,
                    "slug": "et-ut",
                    "product_name": "黑钻洁净滋养面膜",
                    "product_name_en": "ducimus minus nihil"
                }
            }
        ],
        "the_house": [
            {
                "id": 3,
                "slug": "illum-est",
                "the_house_category_id": 3,
                "banner": "https:\/\/lorempixel.com\/640\/480\/?18572",
                "title": "vel quidem aut",
                "sub_title": "eos ea nulla",
                "describe": "Qui dolores ut rem ducimus. Neque sapiente ea perferendis mollitia dolorum sit. Tempore quisquam consequatur nobis consectetur et. Sunt aut consequatur aut."
            },
            {
                "id": 1,
                "slug": "nobis-possimus",
                "the_house_category_id": 1,
                "banner": "https:\/\/lorempixel.com\/640\/480\/?59814",
                "title": "ab quia cum",
                "sub_title": "vel rerum nulla",
                "describe": "Delectus voluptas quia veritatis at ratione. Quia inventore magni tenetur iure nobis repellat. Enim quam vitae excepturi."
            },
            {
                "id": 39,
                "slug": "aut-nobis",
                "the_house_category_id": 3,
                "banner": "https:\/\/lorempixel.com\/640\/480\/?14278",
                "title": "consequatur saepe et",
                "sub_title": "odio qui officia",
                "describe": "Quas incidunt voluptates asperiores quis. Nisi nisi saepe molestiae aut est commodi et. Nisi laborum quo ipsum. Consequatur dolor alias corporis iusto veritatis quasi."
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
            "data": []
        },
        {
            "name": "护肤系列",
            "type": "product_category_skin_care",
            "data": [
                {
                    "id": 1,
                    "name": "爽肤水",
                    "slug": "eos-laborum",
                    "parent_id": 29,
                    "level": 1
                },
                {
                    "id": 2,
                    "name": "BB霜",
                    "slug": "quia-dolor",
                    "parent_id": 9,
                    "level": 1
                },
                {
                    "id": 3,
                    "name": "隔离",
                    "slug": "voluptatem-ut",
                    "parent_id": 17,
                    "level": 1
                },
                {
                    "id": 4,
                    "name": "隔离",
                    "slug": "consequatur-voluptatem",
                    "parent_id": 16,
                    "level": 1
                },
                {
                    "id": 5,
                    "name": "腮红",
                    "slug": "ducimus-quam",
                    "parent_id": 21,
                    "level": 1
                },
                {
                    "id": 6,
                    "name": "腮红",
                    "slug": "impedit-magnam",
                    "parent_id": 25,
                    "level": 1
                },
                {
                    "id": 7,
                    "name": "彩妆盘",
                    "slug": "temporibus-odit",
                    "parent_id": 3,
                    "level": 1
                },
                {
                    "id": 8,
                    "name": "BB霜",
                    "slug": "laboriosam-praesentium",
                    "parent_id": 3,
                    "level": 1
                },
                {
                    "id": 9,
                    "name": "面膜",
                    "slug": "facere-in",
                    "parent_id": 19,
                    "level": 1
                },
                {
                    "id": 10,
                    "name": "睫毛膏",
                    "slug": "minima-rerum",
                    "parent_id": 18,
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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
    -d '{"name":"ipsam","username":"necessitatibus","password":"sint","password_confirmation":"libero","code":"corporis","captcha_key":"ipsam","captcha_code":"possimus","password_question_id":15,"password_answer":"dolore"}'

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
    "name": "ipsam",
    "username": "necessitatibus",
    "password": "sint",
    "password_confirmation": "libero",
    "code": "corporis",
    "captcha_key": "ipsam",
    "captcha_code": "possimus",
    "password_question_id": 15,
    "password_answer": "dolore"
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
    -G "http://localhost/api/user_question?username=at" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_question"
);

let params = {
    "username": "at",
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
        "username": "at"
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
    -d '{"username":"omnis","password":"et"}'

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
    "password": "et"
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
    "http://localhost/api/password_reset?username=error&password_question_id=dolor&password_answer=facere&password=ut&password_confirmation=sit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/password_reset"
);

let params = {
    "username": "error",
    "password_question_id": "dolor",
    "password_answer": "facere",
    "password": "ut",
    "password_confirmation": "sit",
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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
    -d '{"oldPassword":"quasi","newPassword":"dicta","newPassword_confirmation":"nihil"}'

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
    "oldPassword": "quasi",
    "newPassword": "dicta",
    "newPassword_confirmation": "nihil"
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
    -G "http://localhost/api/orders?page=totam&page_limit=ipsum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orders"
);

let params = {
    "page": "totam",
    "page_limit": "ipsum",
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
    -G "http://localhost/api/order_details/1?no=vel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/order_details/1"
);

let params = {
    "no": "vel",
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
    -d '{"address_id":"consequuntur","remark":"quis"}'

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
    "address_id": "consequuntur",
    "remark": "quis"
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
## Cancel order &amp; Retry create order
取消订单后尝试重新下单

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/api/orders/retry" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"no":20}'

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
    `no` | integer |  required  | 需要取消的订单号
    
<!-- END_5e56ca3ffbde3d40d68692893b3bb1b6 -->

<!-- START_2bf3ab5257f7e4ba872e472d42645ee4 -->
## Cancel order
取消订单

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/orders/cancel?no=sunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orders/cancel"
);

let params = {
    "no": "sunt",
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
                "product_category_id": 1,
                "product_name": "鱼子精华",
                "product_name_en": "libero consequatur explicabo",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?38284",
                "slug": "eos-est",
                "short_description": "Vel nam in exercitationem est dolorem.",
                "short_description_en": "Voluptatibus excepturi voluptates non excepturi. Unde est sit voluptatem assumenda. Quo explicabo dolorum facilis enim impedit.",
                "price": "8018.00",
                "sale_price": "0.01",
                "stock": 71,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "recusandae necessitatibus accusamus",
                "seo_keyword": "ipsa",
                "seo_description": "Nisi in optio illo assumenda aperiam.",
                "benefit": "Vel dignissimos et quasi iusto dolore quia illo. Dolorem sapiente delectus aut beatae molestias officia quibusdam. Sunt id exercitationem laboriosam voluptates sunt magnam. Occaecati eaque enim corrupti qui odit.",
                "benefit_en": "Autem in quod blanditiis dicta velit eos ex. Id dolor nam deserunt eum quae culpa nobis. Eius accusamus natus aut sunt. Reprehenderit voluptate quaerat aut.",
                "tech_description": "Iure neque earum voluptatem non similique. Et nostrum ullam veritatis ut recusandae. Quam aut consectetur illum sunt. Ad qui sit ipsa autem alias.",
                "tech_description_en": "Voluptatibus aut rerum quibusdam quia reprehenderit. Natus eligendi ullam laudantium. Rerum dolor sit similique minus. Quisquam quia cum sunt sequi nesciunt.",
                "description": "Corporis non repudiandae aliquam reiciendis ea et impedit. Saepe iure voluptate sunt quo quos voluptatem voluptas. Rerum accusamus quia sunt id itaque distinctio.",
                "description_en": "Dolorem adipisci itaque et cupiditate fugiat. Exercitationem vel culpa et voluptas ea. Veniam ut neque deleniti maxime nisi.",
                "usage": "Ut maxime corporis voluptatum ut et. Qui mollitia modi rerum ut. Blanditiis delectus id omnis occaecati quod.",
                "usage_en": "Id et et omnis. Eum unde explicabo ad sit possimus. Nihil nobis earum nam consequatur maxime architecto ut.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?97217",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?60287",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?39925",
                "product_video": null,
                "status": 3,
                "rating": 7.36,
                "sold_count": 9444,
                "review_count": 1582,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-17 17:44:13",
                "updated_at": "2020-10-01 15:14:19",
                "product_category": {
                    "id": 1,
                    "name": "爽肤水",
                    "slug": "eos-laborum",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?80150",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?70643",
                    "title": "vel id unde",
                    "title_en": "cum itaque repudiandae",
                    "sub_title": "dolor autem quisquam",
                    "describe": "Ad rerum itaque rerum est quo quod velit. Eum et et aut voluptas quia nam non. Eveniet et omnis neque quam nesciunt. Et quia consequatur et et omnis. Odio ut excepturi eum assumenda minus vitae.",
                    "describe_en": "Odio unde a suscipit nemo amet. Temporibus eaque non neque. Veniam est at officia quis assumenda. Neque mollitia aut et consequatur deleniti voluptates.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?26950",
                    "type": 1,
                    "parent_id": 29,
                    "level": 1,
                    "created_at": "2020-10-01 13:39:28",
                    "updated_at": "2020-09-09 12:40:31"
                }
            },
            {
                "id": 2,
                "product_category_id": 10,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "praesentium doloremque molestiae",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?42539",
                "slug": "optio-nemo",
                "short_description": "Dolorum odio autem aspernatur.",
                "short_description_en": "Incidunt possimus laborum nesciunt dolore et enim tenetur. Soluta necessitatibus aut alias maiores voluptas. Perferendis quo cum fugit id id corrupti delectus. Magni impedit et iure error explicabo sit et.",
                "price": "2276.00",
                "sale_price": "0.01",
                "stock": 398,
                "spec": "50 ml \/ 1.7 fl. oz",
                "seo_title": "ad quisquam excepturi",
                "seo_keyword": "saepe",
                "seo_description": "Est id aut architecto libero.",
                "benefit": "Quia voluptas distinctio velit exercitationem illum tenetur et. Corporis quaerat sint alias placeat perspiciatis non soluta. Voluptatem est ex aut illum nihil. A tempore et magnam soluta ex necessitatibus.",
                "benefit_en": "Sint autem ex quae aliquam ea nesciunt. Dolorem adipisci quis eum sequi. Atque illo eum aliquam corporis neque.",
                "tech_description": "Eveniet quam dolorem quasi nesciunt voluptatem est qui. Alias repellat enim numquam commodi earum corrupti aut. Nihil ratione velit blanditiis quibusdam eveniet commodi. Magnam quasi ut soluta nisi aut.",
                "tech_description_en": "Laboriosam deleniti saepe perspiciatis eum neque. Repellendus voluptas dolorem aliquid recusandae consequatur. Aspernatur dolorem laboriosam illum deserunt odio culpa. Rerum quod qui dolorem ipsum odio non non.",
                "description": "Dolorem aut nostrum vel molestiae quisquam incidunt. Quis deleniti est velit rerum eos omnis molestias. Non ea qui similique rerum. Quia eaque fugiat aut minus tenetur quod voluptas.",
                "description_en": "Quia alias alias eum dolorem. Quis provident atque veniam molestiae amet sed ipsam. Id incidunt at non inventore officia.",
                "usage": "Et illo explicabo provident qui velit aut. Ut magni nostrum blanditiis accusamus. Velit doloribus fuga totam quos reprehenderit velit aspernatur. Voluptas odio est enim nisi temporibus sed veniam itaque. Dolorum dolores facere voluptatem eum.",
                "usage_en": "Corrupti dolore sint aut ratione aut. Voluptatem minus et et quidem qui fuga. Quod explicabo natus eum praesentium. Voluptas nam et quibusdam mollitia.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?14972",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?51060",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?24961",
                "product_video": null,
                "status": 2,
                "rating": 1.99,
                "sold_count": 3460,
                "review_count": 6003,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-26 13:06:48",
                "updated_at": "2020-09-22 20:25:24",
                "product_category": {
                    "id": 10,
                    "name": "睫毛膏",
                    "slug": "minima-rerum",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?11991",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?19814",
                    "title": "excepturi assumenda nostrum",
                    "title_en": "aut sit aut",
                    "sub_title": "laboriosam animi magni",
                    "describe": "Eaque quia eius qui qui. Dolores sit suscipit aperiam quo. Modi eveniet unde id omnis sed unde consequatur cupiditate.",
                    "describe_en": "Et tenetur itaque quia quo suscipit commodi. Id qui earum aperiam architecto recusandae. Vel dolores dolor veniam sequi minus facere et natus.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?89631",
                    "type": 1,
                    "parent_id": 18,
                    "level": 1,
                    "created_at": "2020-09-14 20:04:06",
                    "updated_at": "2020-09-28 23:42:39"
                }
            },
            {
                "id": 3,
                "product_category_id": 8,
                "product_name": "钻石焕活面膜",
                "product_name_en": "quas voluptatem aut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?87594",
                "slug": "recusandae-eaque",
                "short_description": "Sed totam quo officia in.",
                "short_description_en": "Enim ut dolores porro ut corporis. Iste vitae ut in ut libero neque. Et quis mollitia non dolores. Incidunt et voluptatem suscipit aut. Repellat qui quaerat blanditiis sequi.",
                "price": "5458.00",
                "sale_price": "0.01",
                "stock": 739,
                "spec": "150 ml \/ 2.0 oz",
                "seo_title": "atque blanditiis odit",
                "seo_keyword": "aliquid",
                "seo_description": "Et aut repellendus est aut inventore.",
                "benefit": "Omnis non reiciendis maiores placeat iusto omnis voluptatibus. Nemo consequuntur voluptatem placeat sit consectetur commodi molestiae. Asperiores est enim fugit nam. Qui quia laboriosam et illo velit. Enim id eius laudantium eos exercitationem omnis.",
                "benefit_en": "Maiores tempore voluptatem unde voluptatum eveniet ea. Est facere consequatur velit repudiandae ea at deserunt non. Sunt esse aut temporibus accusantium fugit voluptatem iusto.",
                "tech_description": "Eos fugiat placeat et alias recusandae laborum facilis corrupti. Dolorem illum numquam praesentium veniam molestiae. Qui magni ipsum modi odit itaque maxime. Aliquam a id voluptatem architecto quis non.",
                "tech_description_en": "Omnis expedita nihil autem iste laudantium. Voluptates reiciendis nihil id rem et quis fuga. Velit consequatur commodi non hic quis.",
                "description": "Sint odio deserunt ratione ut officia tempora. Placeat cupiditate ab magni fugiat et optio. Temporibus temporibus est et sed enim.",
                "description_en": "Veritatis maiores animi asperiores voluptatibus rerum tempore. Nostrum nostrum natus aut libero exercitationem soluta adipisci. Error quas doloribus harum eveniet. Repudiandae aut quia possimus maiores enim odit.",
                "usage": "Tempore laborum id aut et iste. Quo dolorum iste ut recusandae nesciunt repellat rerum. Dolorem eum quia aut reprehenderit eligendi quisquam dolorum sapiente.",
                "usage_en": "Aut praesentium esse dolor aspernatur. Omnis magnam quibusdam iure dicta alias dolores ab. Architecto velit eos dolor et eos distinctio qui neque. Rerum aspernatur eveniet quos dolorem tempore est.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?67153",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?43710",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?35315",
                "product_video": null,
                "status": 2,
                "rating": 5.09,
                "sold_count": 7306,
                "review_count": 8676,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-27 07:27:05",
                "updated_at": "2020-10-02 06:22:38",
                "product_category": {
                    "id": 8,
                    "name": "BB霜",
                    "slug": "laboriosam-praesentium",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?19312",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?82621",
                    "title": "architecto dicta autem",
                    "title_en": "voluptatem itaque voluptatem",
                    "sub_title": "vel voluptatem dolorem",
                    "describe": "Aut nemo corrupti tempora ipsam id et. Similique dolorem in voluptatum possimus atque. Eveniet a voluptatem veniam laudantium in dolorum ut.",
                    "describe_en": "Rem a voluptas dolore. Quasi illo sint nam voluptatem repellat itaque ullam incidunt. Porro libero adipisci vitae molestiae enim qui. Cumque in quia ex dolor fuga.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?65256",
                    "type": 1,
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-09-21 10:55:40",
                    "updated_at": "2020-09-13 01:28:11"
                }
            },
            {
                "id": 4,
                "product_category_id": 1,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "reprehenderit in eum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?49050",
                "slug": "officiis-qui",
                "short_description": "Ut ratione minus libero aut magni.",
                "short_description_en": "Dicta qui aut distinctio consequatur. Nesciunt molestiae iusto illo eos aut quae. Veniam dolor minus omnis perferendis et suscipit.",
                "price": "3167.00",
                "sale_price": "0.01",
                "stock": 784,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "quo est doloremque",
                "seo_keyword": "consequuntur",
                "seo_description": "Ipsum voluptatem magnam et aspernatur.",
                "benefit": "Nemo consequatur voluptatum molestiae harum voluptatem et non. Architecto omnis consequatur sunt repudiandae perferendis quia unde. Autem odit at eos occaecati ea alias eaque temporibus.",
                "benefit_en": "Cupiditate sint consectetur nostrum sed omnis distinctio excepturi. Et expedita fugit tempore tenetur odit. Nisi dignissimos consequuntur rerum. Et corporis deserunt dicta quae dolorem quos libero.",
                "tech_description": "Unde blanditiis rerum est. Deserunt atque maiores fuga possimus molestias. Quia culpa eius dolorem cupiditate alias asperiores voluptate. Illo error ipsam doloremque aut ut sunt non.",
                "tech_description_en": "Quis ducimus error earum hic ipsam totam omnis eos. Quis consequatur eum sunt nobis hic et minima.",
                "description": "Cupiditate optio voluptate quam laboriosam sint et aut. Blanditiis omnis eligendi quod quo. Sequi vel optio dignissimos aut.",
                "description_en": "Autem natus minus saepe laudantium ut libero. Sit eaque quos nostrum eum voluptas enim ut. Minus repellat itaque nulla aliquam in ea sint.",
                "usage": "Qui natus necessitatibus voluptas provident reiciendis cumque. Et porro nobis nemo consectetur quam nulla. Architecto aut molestiae animi dolorem praesentium.",
                "usage_en": "Nemo dolorem optio doloribus totam commodi sit rerum. Earum quibusdam dolor ut quo. Quaerat placeat libero quia ex magnam labore deserunt modi.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?97458",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?64337",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?58667",
                "product_video": null,
                "status": 3,
                "rating": 8.98,
                "sold_count": 4239,
                "review_count": 7689,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-23 08:34:50",
                "updated_at": "2020-09-27 05:48:22",
                "product_category": {
                    "id": 1,
                    "name": "爽肤水",
                    "slug": "eos-laborum",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?80150",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?70643",
                    "title": "vel id unde",
                    "title_en": "cum itaque repudiandae",
                    "sub_title": "dolor autem quisquam",
                    "describe": "Ad rerum itaque rerum est quo quod velit. Eum et et aut voluptas quia nam non. Eveniet et omnis neque quam nesciunt. Et quia consequatur et et omnis. Odio ut excepturi eum assumenda minus vitae.",
                    "describe_en": "Odio unde a suscipit nemo amet. Temporibus eaque non neque. Veniam est at officia quis assumenda. Neque mollitia aut et consequatur deleniti voluptates.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?26950",
                    "type": 1,
                    "parent_id": 29,
                    "level": 1,
                    "created_at": "2020-10-01 13:39:28",
                    "updated_at": "2020-09-09 12:40:31"
                }
            },
            {
                "id": 5,
                "product_category_id": 1,
                "product_name": "黑钻肌光精华",
                "product_name_en": "nisi ducimus sit",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?58300",
                "slug": "aut-beatae",
                "short_description": "Ea commodi molestias impedit eius.",
                "short_description_en": "Facere et ipsum officiis iusto debitis exercitationem quia magni. Tenetur illo omnis et aut velit. Ipsam est eum fuga voluptates.",
                "price": "5926.00",
                "sale_price": "0.01",
                "stock": 474,
                "spec": "150 ml \/ 2.0 oz",
                "seo_title": "et et culpa",
                "seo_keyword": "tempora",
                "seo_description": "Dolorum enim quo dicta earum facilis molestiae.",
                "benefit": "Nesciunt rerum quas vel illum sunt labore adipisci. Dolore quidem hic minus.",
                "benefit_en": "Recusandae nemo ut sit autem est. Non distinctio non excepturi.",
                "tech_description": "Ea amet est quis est ea delectus. Et in et voluptatem unde sit. Nostrum voluptatem ut laboriosam rerum unde quibusdam. Pariatur unde iusto sint error.",
                "tech_description_en": "In provident perferendis tempora voluptas. Doloremque non quo et quam impedit assumenda excepturi dolorum. Voluptatibus perferendis ullam pariatur reprehenderit. Recusandae veniam quia reprehenderit vero officia est consequuntur. Incidunt dolore id sit ducimus.",
                "description": "Cupiditate ducimus placeat aut illum. Doloribus laboriosam nam et sequi sit earum atque facere. Suscipit ut non aut sunt eos. Sint distinctio iste quis velit enim ipsum ullam dolorem.",
                "description_en": "Reiciendis suscipit aliquam harum nulla dolores explicabo harum est. Autem porro rerum distinctio quia non molestiae voluptas. Sed minima sed optio maiores ut provident. Soluta molestias labore facere sunt dolores atque.",
                "usage": "Aperiam vel iste aut. Qui culpa eius sunt aut. Quasi odio similique ea ex et.",
                "usage_en": "Et velit eum voluptas nisi numquam. At vel autem placeat eos. Quaerat accusantium repellendus consequuntur mollitia. Laboriosam mollitia vero eaque unde explicabo voluptas.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?73831",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?95138",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?53834",
                "product_video": null,
                "status": 2,
                "rating": 7.74,
                "sold_count": 2709,
                "review_count": 3454,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-17 01:01:32",
                "updated_at": "2020-09-10 07:36:26",
                "product_category": {
                    "id": 1,
                    "name": "爽肤水",
                    "slug": "eos-laborum",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?80150",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?70643",
                    "title": "vel id unde",
                    "title_en": "cum itaque repudiandae",
                    "sub_title": "dolor autem quisquam",
                    "describe": "Ad rerum itaque rerum est quo quod velit. Eum et et aut voluptas quia nam non. Eveniet et omnis neque quam nesciunt. Et quia consequatur et et omnis. Odio ut excepturi eum assumenda minus vitae.",
                    "describe_en": "Odio unde a suscipit nemo amet. Temporibus eaque non neque. Veniam est at officia quis assumenda. Neque mollitia aut et consequatur deleniti voluptates.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?26950",
                    "type": 1,
                    "parent_id": 29,
                    "level": 1,
                    "created_at": "2020-10-01 13:39:28",
                    "updated_at": "2020-09-09 12:40:31"
                }
            },
            {
                "id": 6,
                "product_category_id": 1,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "qui sint consequatur",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?93371",
                "slug": "est-tempora",
                "short_description": "Sed sed accusantium voluptatem reiciendis.",
                "short_description_en": "Voluptates voluptatum repellat excepturi modi. Aut enim eveniet veniam rerum harum. Non aliquam cupiditate et. Laudantium dolorum eum cum neque.",
                "price": "2745.00",
                "sale_price": "0.01",
                "stock": 950,
                "spec": "150 ml \/ 2.0 oz",
                "seo_title": "dolores odit aspernatur",
                "seo_keyword": "corporis",
                "seo_description": "Fugit totam quis qui qui.",
                "benefit": "Aspernatur in sunt illo libero modi quo. Eius in error quod. Fugit omnis amet beatae atque occaecati. Ipsam cupiditate maiores architecto beatae maxime temporibus.",
                "benefit_en": "Ipsa porro nostrum fugit consequatur perspiciatis. Molestiae perspiciatis laudantium exercitationem tenetur dolores ea. Ut suscipit quia suscipit alias ipsam sunt. Laboriosam praesentium omnis earum cumque.",
                "tech_description": "Quas praesentium similique commodi ratione iste. Aut officia mollitia quasi perspiciatis laborum expedita assumenda sed. Odit enim aut ut. Vero architecto ab repellat enim facere. Voluptas alias libero laborum voluptatem.",
                "tech_description_en": "Non at aut voluptates dolores. Provident natus vel qui consequuntur. Placeat et aut reiciendis minima officiis voluptas voluptates. Qui accusamus unde eos ut dolorem.",
                "description": "Possimus corrupti dolor repellat dolores cum. Omnis repellat repellat voluptatem dicta sunt corrupti sint harum. Impedit vel commodi dolorem beatae.",
                "description_en": "Voluptatem amet possimus exercitationem perferendis quisquam veritatis veritatis. Aspernatur aperiam dicta cumque libero a. In rerum corrupti quo non explicabo quis.",
                "usage": "Placeat aut eum deserunt unde ad labore consequatur quidem. Debitis neque et debitis iusto. Ea molestiae tempore ad omnis voluptas repudiandae. Et maiores maxime illo nam.",
                "usage_en": "Esse non esse sint magnam beatae nisi. Fugiat accusamus nihil nobis quam aut veniam accusamus. Tempora sed ratione maxime accusantium eveniet totam necessitatibus.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?50792",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?14308",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?41907",
                "product_video": null,
                "status": 3,
                "rating": 9.54,
                "sold_count": 5949,
                "review_count": 9909,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-12 08:06:24",
                "updated_at": "2020-10-02 12:04:06",
                "product_category": {
                    "id": 1,
                    "name": "爽肤水",
                    "slug": "eos-laborum",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?80150",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?70643",
                    "title": "vel id unde",
                    "title_en": "cum itaque repudiandae",
                    "sub_title": "dolor autem quisquam",
                    "describe": "Ad rerum itaque rerum est quo quod velit. Eum et et aut voluptas quia nam non. Eveniet et omnis neque quam nesciunt. Et quia consequatur et et omnis. Odio ut excepturi eum assumenda minus vitae.",
                    "describe_en": "Odio unde a suscipit nemo amet. Temporibus eaque non neque. Veniam est at officia quis assumenda. Neque mollitia aut et consequatur deleniti voluptates.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?26950",
                    "type": 1,
                    "parent_id": 29,
                    "level": 1,
                    "created_at": "2020-10-01 13:39:28",
                    "updated_at": "2020-09-09 12:40:31"
                }
            },
            {
                "id": 7,
                "product_category_id": 1,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "consequuntur optio quibusdam",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?39581",
                "slug": "distinctio-similique",
                "short_description": "Nihil suscipit labore reiciendis et qui placeat.",
                "short_description_en": "Explicabo accusamus sed magnam ea aut veniam. Nesciunt ut ea aliquam sequi aut. Aut dolorem quo alias et eos error placeat quibusdam. Accusamus rerum quasi enim repudiandae.",
                "price": "6555.00",
                "sale_price": "0.01",
                "stock": 122,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "provident id voluptatem",
                "seo_keyword": "rem",
                "seo_description": "Dignissimos consectetur temporibus aperiam est mollitia.",
                "benefit": "Nisi non tempora esse illum possimus nostrum suscipit. Exercitationem nisi vel quasi. Enim rerum alias debitis nulla amet sequi a.",
                "benefit_en": "Quisquam sit qui consequatur quas consequatur. Eius hic voluptatem consequatur illum voluptates. Ex cupiditate et reiciendis dolores dolorem magni. Dolorem perspiciatis rerum libero dolorem neque.",
                "tech_description": "In sed et libero expedita non laudantium quod enim. Iure non ratione pariatur possimus labore. Repellat nisi asperiores architecto expedita. Cum fugiat quia sint facere qui natus ut consequatur. Nulla modi qui inventore adipisci.",
                "tech_description_en": "Eos fuga nam aut est. Repellat non commodi vel sequi ut impedit quos. Unde nam incidunt blanditiis recusandae et nisi aut delectus. Animi aut unde modi ipsa et.",
                "description": "Blanditiis accusamus perferendis tempora dolorum dolores. Et veniam omnis repudiandae. Est quam quia unde maiores.",
                "description_en": "Sed delectus amet consequatur. Labore eum quae qui laborum nulla. Voluptas voluptatum labore tempora nisi. Nemo nihil eos quas voluptatem.",
                "usage": "Voluptas occaecati in vel non dolorem. Eius ea doloremque deserunt nisi ipsam. Ratione qui nulla expedita facere officia ullam omnis.",
                "usage_en": "Nostrum neque id nisi rerum voluptatum. Aut accusantium asperiores numquam similique ut temporibus consequuntur. Fugiat quibusdam deserunt reprehenderit quia et illo architecto. Omnis eveniet iusto nihil dolorem. Labore veniam dignissimos temporibus ut in fugiat repellat corrupti.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?23407",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?27408",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?61923",
                "product_video": null,
                "status": 3,
                "rating": 2.66,
                "sold_count": 4964,
                "review_count": 6113,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-10-05 09:37:57",
                "updated_at": "2020-09-23 05:32:19",
                "product_category": {
                    "id": 1,
                    "name": "爽肤水",
                    "slug": "eos-laborum",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?80150",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?70643",
                    "title": "vel id unde",
                    "title_en": "cum itaque repudiandae",
                    "sub_title": "dolor autem quisquam",
                    "describe": "Ad rerum itaque rerum est quo quod velit. Eum et et aut voluptas quia nam non. Eveniet et omnis neque quam nesciunt. Et quia consequatur et et omnis. Odio ut excepturi eum assumenda minus vitae.",
                    "describe_en": "Odio unde a suscipit nemo amet. Temporibus eaque non neque. Veniam est at officia quis assumenda. Neque mollitia aut et consequatur deleniti voluptates.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?26950",
                    "type": 1,
                    "parent_id": 29,
                    "level": 1,
                    "created_at": "2020-10-01 13:39:28",
                    "updated_at": "2020-09-09 12:40:31"
                }
            },
            {
                "id": 8,
                "product_category_id": 9,
                "product_name": "鱼子精华",
                "product_name_en": "in eos consectetur",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?43447",
                "slug": "voluptatem-ab",
                "short_description": "Rerum est et sit ducimus culpa.",
                "short_description_en": "Non assumenda nam odit dolor quod fuga. Eaque possimus perspiciatis corporis rerum est.",
                "price": "9857.00",
                "sale_price": "0.01",
                "stock": 159,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "et soluta cum",
                "seo_keyword": "quam",
                "seo_description": "Velit voluptatibus quis enim.",
                "benefit": "Sint in est impedit odio ad autem in. Ut ducimus ipsam aut quis ut distinctio ad. Rerum assumenda facilis sapiente.",
                "benefit_en": "Aliquam placeat natus architecto unde vel itaque. Doloremque doloremque qui voluptatem. Est fuga eum ullam impedit corporis aut dolores. Error dolorem ipsum dolor consequatur aut sed.",
                "tech_description": "Pariatur incidunt rem repellat distinctio debitis quisquam. Dolore qui quaerat aut. Accusantium nemo inventore est maxime est ut quaerat. Est explicabo nam autem.",
                "tech_description_en": "Debitis perspiciatis fugit officia incidunt a rerum. Impedit et officiis rerum voluptas velit accusamus. Non quas tenetur officia cumque impedit. Amet nemo voluptatem minus saepe.",
                "description": "Harum eos porro sit omnis sit expedita error. Iste ex vel sit consequatur impedit ullam et minima. Vitae autem asperiores odio quidem nobis quia. Id distinctio quo nisi sit dolore excepturi distinctio.",
                "description_en": "Alias deserunt qui et quas. Consequatur quia iste sit laudantium in. Aliquam vitae molestiae maiores et. Sint et voluptas consequatur fugiat dolor autem iure. Magni et qui excepturi minima harum est voluptatem.",
                "usage": "Deserunt quia architecto blanditiis voluptatibus labore qui esse et. Ipsam nesciunt omnis rerum minima quia. Est voluptate molestiae omnis in.",
                "usage_en": "Debitis consequatur veniam animi. Iste ratione quos necessitatibus voluptatem. In exercitationem dolores rem ut. Vel quia quia est.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?39609",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?78634",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?60113",
                "product_video": null,
                "status": 1,
                "rating": 9.08,
                "sold_count": 7339,
                "review_count": 2895,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-27 00:16:46",
                "updated_at": "2020-09-26 03:11:40",
                "product_category": {
                    "id": 9,
                    "name": "面膜",
                    "slug": "facere-in",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?93068",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?58403",
                    "title": "fugit ut ea",
                    "title_en": "quo similique facere",
                    "sub_title": "quia sint vel",
                    "describe": "Est earum enim ipsam enim. Recusandae ut accusamus modi dolores nam tempore aut. Non eaque nostrum dolore vel nesciunt et.",
                    "describe_en": "Quia ut aut saepe reiciendis dolorum. Autem unde provident voluptates voluptate dolor recusandae. Molestiae tempora adipisci voluptatem qui commodi neque et. Qui quo aut aliquam dolor laboriosam ab.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?34104",
                    "type": 1,
                    "parent_id": 19,
                    "level": 1,
                    "created_at": "2020-09-19 21:45:08",
                    "updated_at": "2020-09-13 14:30:47"
                }
            },
            {
                "id": 9,
                "product_category_id": 9,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "ducimus minus nihil",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?49604",
                "slug": "et-ut",
                "short_description": "Quasi excepturi provident iste.",
                "short_description_en": "Adipisci omnis itaque quidem explicabo facilis. Dolorum impedit quia perferendis dignissimos harum est. Officia quia voluptatem quod officiis.",
                "price": "5044.00",
                "sale_price": "0.01",
                "stock": 813,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "quia illo aut",
                "seo_keyword": "qui",
                "seo_description": "Quam asperiores fuga magni voluptatem qui tempore.",
                "benefit": "Voluptas commodi consectetur ratione saepe est a culpa. Et nihil amet assumenda exercitationem aut. At et totam labore ea fugit autem. Voluptatum sed quasi odit ut in tempora.",
                "benefit_en": "Velit aut minus quo ipsam repellendus. Provident distinctio quae delectus non. Ut eaque dicta aliquam perferendis omnis magni dolor.",
                "tech_description": "Placeat optio aut et nisi. Suscipit voluptas officiis quaerat reiciendis. Est omnis id et debitis. Eligendi rerum commodi aliquam aut laborum laudantium veniam.",
                "tech_description_en": "Corrupti porro distinctio reprehenderit est vitae perspiciatis fugiat voluptas. Iure ratione aliquid consequatur quis deserunt nihil recusandae fuga. Sit ea soluta commodi libero pariatur. Illo libero assumenda corrupti eligendi maiores dolorem.",
                "description": "Est neque et quo excepturi explicabo aperiam ab. Et veritatis fuga provident et quia eligendi. Consectetur amet quas modi deserunt possimus voluptates amet.",
                "description_en": "Distinctio dolor eum ea sed. Voluptatibus cum quas rerum vel eum quis. Error ducimus exercitationem maiores dolore.",
                "usage": "Necessitatibus non quos omnis fuga blanditiis. Doloremque praesentium quos ipsa excepturi dolore sit quasi sint. Labore reiciendis deserunt at quia. In sint cum quidem consequatur est. Quod quia eveniet officia quo est et.",
                "usage_en": "Eaque unde quis recusandae esse excepturi ea porro iste. Voluptatum eum quo alias ut. Qui dolorem sunt aut vitae. Officiis nulla ipsam aut. Cupiditate blanditiis ipsam recusandae excepturi aliquid ratione itaque.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?70701",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?79169",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?39157",
                "product_video": null,
                "status": 1,
                "rating": 0.24,
                "sold_count": 2349,
                "review_count": 3649,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-22 06:59:02",
                "updated_at": "2020-09-14 16:16:34",
                "product_category": {
                    "id": 9,
                    "name": "面膜",
                    "slug": "facere-in",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?93068",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?58403",
                    "title": "fugit ut ea",
                    "title_en": "quo similique facere",
                    "sub_title": "quia sint vel",
                    "describe": "Est earum enim ipsam enim. Recusandae ut accusamus modi dolores nam tempore aut. Non eaque nostrum dolore vel nesciunt et.",
                    "describe_en": "Quia ut aut saepe reiciendis dolorum. Autem unde provident voluptates voluptate dolor recusandae. Molestiae tempora adipisci voluptatem qui commodi neque et. Qui quo aut aliquam dolor laboriosam ab.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?34104",
                    "type": 1,
                    "parent_id": 19,
                    "level": 1,
                    "created_at": "2020-09-19 21:45:08",
                    "updated_at": "2020-09-13 14:30:47"
                }
            },
            {
                "id": 10,
                "product_category_id": 3,
                "product_name": "钻石焕活面膜",
                "product_name_en": "neque nobis quia",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?78106",
                "slug": "quia-esse",
                "short_description": "Aut non occaecati deleniti voluptates odit consequatur.",
                "short_description_en": "Eos ducimus sint expedita aspernatur voluptas. Qui voluptatem dicta consequatur pariatur.",
                "price": "7822.00",
                "sale_price": "0.01",
                "stock": 812,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "ut nesciunt sit",
                "seo_keyword": "voluptas",
                "seo_description": "Molestiae quis unde sunt.",
                "benefit": "Suscipit soluta ut fuga id totam quae. Vitae laudantium ut quod sint. Dolore ut ipsum eos voluptatem ab.",
                "benefit_en": "Ratione deleniti earum occaecati occaecati sed. Aliquid reiciendis eveniet asperiores et rem cum mollitia. Aliquid ex perspiciatis repellendus unde consectetur voluptatem nihil.",
                "tech_description": "Laborum doloremque sint ea eius tenetur laborum. Et perferendis et sequi corrupti. Nemo quia sit est iusto et reprehenderit nam. Optio sit eaque ipsum ut voluptas modi tenetur.",
                "tech_description_en": "Ea enim tempore ut voluptas minus et. Est excepturi facere distinctio. Omnis aperiam molestiae ea. Id nihil distinctio nihil qui dolores aspernatur ducimus.",
                "description": "Saepe est ut inventore laboriosam autem animi autem. Ab aut dolore sunt ipsa molestias occaecati quis animi. Ut rerum aperiam voluptatem vitae nihil quibusdam. Et dolores voluptatem qui saepe facere vel maiores sunt.",
                "description_en": "Rerum doloremque adipisci facere illum. Totam magnam molestias tempora fuga incidunt. Atque commodi possimus et eveniet cumque aut.",
                "usage": "Quo laudantium minus repellendus magni dolores. Autem reiciendis aliquid dolorem blanditiis asperiores.",
                "usage_en": "Quia minus ab dolores itaque sint. Qui veniam quo saepe. Odit fuga voluptatem est iure. Ut sequi reprehenderit optio sunt.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?87603",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?51902",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?26711",
                "product_video": null,
                "status": 3,
                "rating": 9.75,
                "sold_count": 5353,
                "review_count": 6651,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-11 20:16:30",
                "updated_at": "2020-09-23 04:43:53",
                "product_category": {
                    "id": 3,
                    "name": "隔离",
                    "slug": "voluptatem-ut",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?94120",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?98897",
                    "title": "facere sit ducimus",
                    "title_en": "enim inventore possimus",
                    "sub_title": "veritatis nihil et",
                    "describe": "Quis nemo hic incidunt possimus illo rerum et et. Cum rerum et est ipsam deserunt sit magni. Facere non voluptas dolorem qui quidem. Nulla officia optio exercitationem corporis.",
                    "describe_en": "Vel odit corporis odit. Et iusto inventore quae voluptates iste temporibus cumque voluptatibus.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?97950",
                    "type": 1,
                    "parent_id": 17,
                    "level": 1,
                    "created_at": "2020-09-13 13:22:46",
                    "updated_at": "2020-09-13 22:49:49"
                }
            },
            {
                "id": 11,
                "product_category_id": 7,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "voluptatem quod magni",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?43636",
                "slug": "voluptatem-quam",
                "short_description": "Non quis quaerat ea.",
                "short_description_en": "Illum nemo assumenda quia ab reprehenderit. Et omnis est magnam tempora. Ducimus modi cupiditate esse suscipit.",
                "price": "9555.00",
                "sale_price": "0.01",
                "stock": 874,
                "spec": "150 ml \/ 2.0 oz",
                "seo_title": "sed voluptas et",
                "seo_keyword": "molestias",
                "seo_description": "Et alias molestiae vero repudiandae et.",
                "benefit": "Tempora odio ea aliquid aperiam ratione omnis non. Occaecati et sunt ullam amet quidem omnis. Autem tempora quia aliquam facere dolor fuga error.",
                "benefit_en": "Animi et officia sunt molestiae. Nihil consequuntur repudiandae sed voluptatem ducimus et. Cupiditate iure error eum omnis provident modi. Animi tempore et iusto.",
                "tech_description": "Dolorem ipsum nesciunt ipsam laboriosam. Dolorem veritatis optio odit voluptates tempora dolorem. Sunt sed rerum pariatur officia optio. Quo error vel et iste.",
                "tech_description_en": "Qui cupiditate ut quibusdam sapiente sed. Fugiat inventore maxime odio aut harum voluptas pariatur. Ut harum fugit autem nam saepe.",
                "description": "Error asperiores quam fugit unde harum. Ipsam voluptas similique quos veritatis veritatis id. Aut doloribus et consequatur laudantium commodi repudiandae cumque. Quisquam enim veniam sapiente in qui molestiae unde est.",
                "description_en": "Corporis non sapiente dolorem rerum dolorem nulla sapiente. Sunt modi debitis fuga distinctio.",
                "usage": "Sunt praesentium cum necessitatibus fuga praesentium. Eum ab cupiditate aliquam qui quia natus aperiam. Eos quod illum magni. Enim beatae fuga quo inventore aliquam aut.",
                "usage_en": "In nihil quasi dolorem sit. Dolore ut et optio quos ratione asperiores. Praesentium cum cumque asperiores aspernatur magni.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?89680",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?54478",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?10893",
                "product_video": null,
                "status": 1,
                "rating": 6.07,
                "sold_count": 5144,
                "review_count": 9681,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-26 06:17:25",
                "updated_at": "2020-09-19 20:04:33",
                "product_category": {
                    "id": 7,
                    "name": "彩妆盘",
                    "slug": "temporibus-odit",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?52145",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?22893",
                    "title": "vitae sint qui",
                    "title_en": "optio reprehenderit aspernatur",
                    "sub_title": "molestias molestiae temporibus",
                    "describe": "Laborum et quod vero error ea occaecati. Dolores est numquam ipsum. Ut amet velit quia velit rerum.",
                    "describe_en": "Tempore voluptas ipsam sint perspiciatis. Necessitatibus est quis deserunt nisi in sed. Occaecati nihil quo sapiente eos magni omnis quo. Placeat commodi ad enim delectus aperiam in et.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?42504",
                    "type": 1,
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-09-27 08:45:07",
                    "updated_at": "2020-09-30 01:32:23"
                }
            },
            {
                "id": 12,
                "product_category_id": 8,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "aspernatur impedit aut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?88140",
                "slug": "officia-esse",
                "short_description": "Ut omnis tempora itaque ut.",
                "short_description_en": "Quidem quia doloribus cumque eligendi aut quis. Voluptates veritatis sed ipsam harum aut aut et. Earum iste incidunt quia magnam.",
                "price": "1861.00",
                "sale_price": "0.01",
                "stock": 464,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "sit ut at",
                "seo_keyword": "sint",
                "seo_description": "Rerum illo hic modi illo.",
                "benefit": "Sint in nesciunt laboriosam omnis et eos velit quaerat. Architecto nulla eos dolores magni. Sequi ullam ut culpa. Quia nesciunt qui ipsam et.",
                "benefit_en": "Nobis nisi et perspiciatis incidunt. Aut vel corrupti quos ut. Animi soluta voluptate laudantium.",
                "tech_description": "Et voluptates aut qui ab. Porro dolores sint eveniet animi. Quam eum ut ut maxime. Quis ut debitis et cum aut inventore et quis.",
                "tech_description_en": "Quo sit qui voluptas eum minus. Vel quaerat sit reiciendis cupiditate. Ad labore omnis fugit qui nisi dolorum est impedit.",
                "description": "Consectetur et numquam nihil illum nam sapiente. Ratione sed eligendi odit doloremque doloribus reiciendis delectus. Sit sit sapiente incidunt beatae fuga delectus quos. Officiis et impedit molestias pariatur accusantium quos.",
                "description_en": "Fugiat amet voluptates temporibus maiores alias veritatis voluptatem. Dolorem aliquid vel est.",
                "usage": "Sed nobis reprehenderit et. Quis facere veritatis amet repudiandae et ipsam. Nostrum omnis explicabo dolor quos quibusdam ea harum totam. Praesentium adipisci incidunt aut omnis distinctio cumque minus.",
                "usage_en": "Omnis delectus qui nisi nostrum. Possimus facere recusandae ex qui.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?72778",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?25377",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?62039",
                "product_video": null,
                "status": 1,
                "rating": 3.82,
                "sold_count": 4170,
                "review_count": 5765,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-15 02:34:49",
                "updated_at": "2020-10-01 01:47:25",
                "product_category": {
                    "id": 8,
                    "name": "BB霜",
                    "slug": "laboriosam-praesentium",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?19312",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?82621",
                    "title": "architecto dicta autem",
                    "title_en": "voluptatem itaque voluptatem",
                    "sub_title": "vel voluptatem dolorem",
                    "describe": "Aut nemo corrupti tempora ipsam id et. Similique dolorem in voluptatum possimus atque. Eveniet a voluptatem veniam laudantium in dolorum ut.",
                    "describe_en": "Rem a voluptas dolore. Quasi illo sint nam voluptatem repellat itaque ullam incidunt. Porro libero adipisci vitae molestiae enim qui. Cumque in quia ex dolor fuga.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?65256",
                    "type": 1,
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-09-21 10:55:40",
                    "updated_at": "2020-09-13 01:28:11"
                }
            },
            {
                "id": 13,
                "product_category_id": 8,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "dolore sed qui",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?14965",
                "slug": "aspernatur-molestiae",
                "short_description": "Cumque ut exercitationem dolor tempora quod.",
                "short_description_en": "Et tempore id hic. Delectus harum perferendis odit dignissimos. Atque atque sit perspiciatis voluptatem.",
                "price": "3958.00",
                "sale_price": "0.01",
                "stock": 423,
                "spec": "30 ml \/ 1.0 oz.",
                "seo_title": "a alias dignissimos",
                "seo_keyword": "unde",
                "seo_description": "Modi quidem incidunt esse iste.",
                "benefit": "Rerum assumenda amet dolorem ut fugit non. Ut maiores facilis totam. Consectetur sint quidem quam.",
                "benefit_en": "Et alias et id eum corporis. Ab dicta consequuntur et soluta. Ea et voluptatem incidunt iusto tempora minima placeat eligendi. Optio error quaerat voluptatem consequatur ipsam a et. Esse quam necessitatibus voluptatem.",
                "tech_description": "Velit quo explicabo quis maxime et molestias sit. Est et eius consequatur deserunt quam quis. Illum ratione impedit occaecati.",
                "tech_description_en": "Molestiae eligendi et inventore architecto quae iusto facere. Natus possimus odit atque dignissimos omnis.",
                "description": "Eligendi minima maiores rerum aut consectetur consequatur reprehenderit. Quia rem sit nesciunt quae id rerum. Alias hic commodi rerum sapiente enim dignissimos ullam. Architecto facere ut autem voluptas aut.",
                "description_en": "Consequatur omnis repellendus praesentium ullam possimus est consequatur et. Cumque aliquid corporis doloribus. Sapiente et nesciunt ipsam repellat quidem voluptatem aliquid aliquid. Deserunt voluptas et sequi qui.",
                "usage": "Vitae soluta rerum voluptas nihil tempore nisi. Dicta consequatur vel vel. Iure atque iste voluptate quam recusandae et quia.",
                "usage_en": "Dolor perferendis quia est fugit quia laboriosam error. Dolor ut illum velit. Eaque ut minima cum aut laudantium totam possimus. Officiis qui ea in illum quia.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?77228",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?15002",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?46005",
                "product_video": null,
                "status": 3,
                "rating": 4.68,
                "sold_count": 6628,
                "review_count": 5167,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-30 11:26:51",
                "updated_at": "2020-10-01 13:28:28",
                "product_category": {
                    "id": 8,
                    "name": "BB霜",
                    "slug": "laboriosam-praesentium",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?19312",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?82621",
                    "title": "architecto dicta autem",
                    "title_en": "voluptatem itaque voluptatem",
                    "sub_title": "vel voluptatem dolorem",
                    "describe": "Aut nemo corrupti tempora ipsam id et. Similique dolorem in voluptatum possimus atque. Eveniet a voluptatem veniam laudantium in dolorum ut.",
                    "describe_en": "Rem a voluptas dolore. Quasi illo sint nam voluptatem repellat itaque ullam incidunt. Porro libero adipisci vitae molestiae enim qui. Cumque in quia ex dolor fuga.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?65256",
                    "type": 1,
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-09-21 10:55:40",
                    "updated_at": "2020-09-13 01:28:11"
                }
            },
            {
                "id": 14,
                "product_category_id": 3,
                "product_name": "鱼子精华",
                "product_name_en": "nihil nemo et",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?85136",
                "slug": "est-sit",
                "short_description": "Cupiditate odit dolor quisquam nostrum.",
                "short_description_en": "Id odio quia sit est. Ut ab alias dolore corrupti eveniet omnis. Fugit est ut qui dolor est aliquam. Mollitia vitae quis quis provident est.",
                "price": "9022.00",
                "sale_price": "0.01",
                "stock": 378,
                "spec": "30 ml \/ 1.0 oz.",
                "seo_title": "ad velit alias",
                "seo_keyword": "sit",
                "seo_description": "Voluptatem ad officia vel architecto ut.",
                "benefit": "Vel assumenda quos est soluta qui. Magni voluptatem harum magni est facilis quo quia. Repellat provident voluptas odio unde ipsum.",
                "benefit_en": "Provident qui voluptatem ea quo ut quidem consequatur. Maiores quia consequatur nesciunt. Ut atque corrupti dolores molestias. Eius dolor asperiores est in.",
                "tech_description": "Autem sit culpa quaerat quod nemo. Sequi et harum facere quo debitis qui. Ullam deleniti fuga blanditiis eaque laboriosam illum quia aut. Esse earum eos aut adipisci laborum et dolores qui.",
                "tech_description_en": "Vero itaque odit libero quia voluptatibus. Voluptate in sequi doloremque quis et magni architecto. Facilis qui nobis maxime quas atque nulla in. Exercitationem provident quas rerum velit nihil iure error.",
                "description": "Consequatur debitis et dolores libero ratione aut. Exercitationem consequuntur reiciendis error eos vel placeat. Molestiae laboriosam qui blanditiis sit fuga distinctio reiciendis.",
                "description_en": "A et nemo sed et. Enim cum laborum doloribus quidem perferendis excepturi blanditiis quis. Hic accusantium ipsa mollitia est sunt. Aut explicabo ut consectetur.",
                "usage": "Qui eum nesciunt qui accusantium voluptatem ut. Illum aut ea cupiditate illum. Exercitationem iure porro velit laudantium. Qui quod nesciunt enim quo error possimus. Id aspernatur nihil natus voluptatem perferendis rerum molestiae quia.",
                "usage_en": "Repudiandae provident id illum voluptas. Voluptatem debitis distinctio rerum animi ipsam omnis. Similique et quam minima. Suscipit nihil non quis ducimus quaerat consequatur porro numquam.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?21360",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?83132",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?85658",
                "product_video": null,
                "status": 2,
                "rating": 9.48,
                "sold_count": 6728,
                "review_count": 6652,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-10-04 18:09:46",
                "updated_at": "2020-09-13 09:06:08",
                "product_category": {
                    "id": 3,
                    "name": "隔离",
                    "slug": "voluptatem-ut",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?94120",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?98897",
                    "title": "facere sit ducimus",
                    "title_en": "enim inventore possimus",
                    "sub_title": "veritatis nihil et",
                    "describe": "Quis nemo hic incidunt possimus illo rerum et et. Cum rerum et est ipsam deserunt sit magni. Facere non voluptas dolorem qui quidem. Nulla officia optio exercitationem corporis.",
                    "describe_en": "Vel odit corporis odit. Et iusto inventore quae voluptates iste temporibus cumque voluptatibus.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?97950",
                    "type": 1,
                    "parent_id": 17,
                    "level": 1,
                    "created_at": "2020-09-13 13:22:46",
                    "updated_at": "2020-09-13 22:49:49"
                }
            },
            {
                "id": 15,
                "product_category_id": 2,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "sint totam debitis",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?40941",
                "slug": "minus-officia",
                "short_description": "Nihil omnis necessitatibus laudantium asperiores voluptatem dolorem.",
                "short_description_en": "Dignissimos quia repellendus cum. Quam iure enim vel voluptatem id cumque. Illo repellendus culpa minima aut ea debitis.",
                "price": "7305.00",
                "sale_price": "0.01",
                "stock": 322,
                "spec": "30 ml \/ 1.0 oz.",
                "seo_title": "qui amet enim",
                "seo_keyword": "molestiae",
                "seo_description": "Consequatur fuga qui dicta adipisci velit.",
                "benefit": "Possimus enim expedita vitae omnis. Et et ullam et vel. Ipsa omnis ut reprehenderit corporis aliquid.",
                "benefit_en": "Expedita temporibus atque consequatur facere. Rem voluptatem veritatis nulla. Magnam quia laudantium delectus qui ut necessitatibus et.",
                "tech_description": "Ut quas dolorum incidunt. Illo incidunt aspernatur quam exercitationem voluptates assumenda. Voluptas voluptas et tenetur nulla iste.",
                "tech_description_en": "Est quis quaerat unde reiciendis velit quia architecto. Accusantium cumque molestias exercitationem est at. Quidem odio accusamus fugiat itaque. Temporibus est ullam voluptatem pariatur ut ratione quaerat qui. Ut rerum accusamus aut.",
                "description": "Eaque fugiat beatae facilis aut. Consequatur praesentium sunt recusandae dolorem nostrum maiores iusto. Eos eum cum et. Dolorem tempore voluptatem dolorem officiis enim soluta.",
                "description_en": "Magnam cum reiciendis amet et. Animi dolores repellendus ipsum dolor et deleniti ullam facere. Consequatur rem vel inventore qui corrupti velit.",
                "usage": "Architecto eveniet nihil corrupti pariatur voluptate quia inventore tempora. Eos molestiae expedita quia ut possimus.",
                "usage_en": "Nobis architecto repellendus sed dolores officia ea excepturi. Voluptas et velit enim ex sint amet.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?67109",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?14603",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?54012",
                "product_video": null,
                "status": 2,
                "rating": 3.74,
                "sold_count": 5295,
                "review_count": 1205,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-10-01 11:57:45",
                "updated_at": "2020-10-05 19:35:07",
                "product_category": {
                    "id": 2,
                    "name": "BB霜",
                    "slug": "quia-dolor",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?95312",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?85726",
                    "title": "debitis ab labore",
                    "title_en": "omnis molestiae explicabo",
                    "sub_title": "doloribus et excepturi",
                    "describe": "Qui adipisci in occaecati rem sint. Quia rerum quo adipisci itaque dolorem. Accusantium cum ullam rerum incidunt aperiam.",
                    "describe_en": "Voluptas quae impedit voluptate quibusdam cum qui quibusdam aut. Aut non consectetur non aperiam doloribus at. Vel consequatur sit vitae ut. Ut rerum molestiae illum sed qui et neque asperiores.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?72154",
                    "type": 1,
                    "parent_id": 9,
                    "level": 1,
                    "created_at": "2020-09-25 18:17:02",
                    "updated_at": "2020-09-30 03:15:15"
                }
            },
            {
                "id": 16,
                "product_category_id": 6,
                "product_name": "黑钻肌光精华",
                "product_name_en": "voluptatum qui doloremque",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?28671",
                "slug": "voluptas-cumque",
                "short_description": "Culpa modi cum dolor asperiores.",
                "short_description_en": "Ea ad fugiat aut rerum at sit. Sunt temporibus ad dolorem tenetur. Maxime ut molestiae consequatur.",
                "price": "1736.00",
                "sale_price": "0.01",
                "stock": 871,
                "spec": "50 ml \/ 1.7 fl. oz",
                "seo_title": "consequatur accusantium aut",
                "seo_keyword": "omnis",
                "seo_description": "Quo nisi ut commodi est.",
                "benefit": "Aliquam fugiat enim impedit quis qui nobis consequatur. Qui optio consequatur sed provident animi et rerum. Nemo consequatur sed et iste ratione quo.",
                "benefit_en": "Consequatur maiores voluptates corrupti optio velit provident. Qui laudantium facilis saepe fugiat laboriosam nemo. Sequi corporis harum et dicta exercitationem aperiam.",
                "tech_description": "Fuga voluptate voluptatum est nesciunt ex facilis. Qui ipsa tenetur soluta. Quia quia excepturi vel in mollitia enim. Voluptatem dolorem sit totam enim quo aperiam est et.",
                "tech_description_en": "Quae qui voluptates id debitis dolorem molestias. Tenetur quos vel esse et. Possimus quia occaecati enim aliquid. Dolorum sequi in vitae repellat aut dolores libero.",
                "description": "Quia assumenda distinctio dignissimos sed et voluptatum. Dolor reiciendis aut neque. Ipsa reiciendis vero perferendis pariatur fugit reiciendis.",
                "description_en": "Nostrum atque modi est vel. Quaerat dolorem quo tempora ea quis quia enim. Aut blanditiis error facere totam sed quis. Expedita eum doloribus eos veniam deserunt soluta.",
                "usage": "Expedita velit corporis illum in eaque possimus nam voluptatem. Aliquid tenetur ipsam velit voluptatibus nulla id ut officiis. Consequatur sapiente officia molestias dicta eos minus dolores.",
                "usage_en": "Rerum culpa sed non cumque cumque debitis. Debitis dolore est quas fuga quod iste. Iusto velit est voluptas saepe id.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?67730",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?80363",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?36974",
                "product_video": null,
                "status": 3,
                "rating": 4.14,
                "sold_count": 8994,
                "review_count": 1560,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-24 13:52:46",
                "updated_at": "2020-09-26 01:06:35",
                "product_category": {
                    "id": 6,
                    "name": "腮红",
                    "slug": "impedit-magnam",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?77183",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?52228",
                    "title": "aliquid ut eos",
                    "title_en": "consequuntur voluptatum dolorum",
                    "sub_title": "odio delectus sint",
                    "describe": "Beatae optio et ratione amet ut. Quia vel voluptas dolorem omnis nobis. Et quasi itaque recusandae non ratione. Minus quaerat sunt vel culpa repudiandae necessitatibus modi. Qui deserunt sunt eum ut.",
                    "describe_en": "Fugit natus sint et non. Omnis dicta dolores sit pariatur ea alias et et. Fuga voluptatibus dolores quos deserunt iste eligendi dignissimos quia.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?54370",
                    "type": 1,
                    "parent_id": 25,
                    "level": 1,
                    "created_at": "2020-09-14 01:11:46",
                    "updated_at": "2020-09-25 22:31:18"
                }
            },
            {
                "id": 17,
                "product_category_id": 8,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "quis sed dolor",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?71962",
                "slug": "et-hic",
                "short_description": "Ad velit velit ad et optio minima.",
                "short_description_en": "Ratione ea necessitatibus amet quas. Quo molestias non iure similique. Qui ex aliquam non est dolorem nobis. Dolores non vero iure occaecati.",
                "price": "198.00",
                "sale_price": "0.01",
                "stock": 628,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "totam quae illum",
                "seo_keyword": "officia",
                "seo_description": "Repellat soluta nobis non.",
                "benefit": "Eum enim autem blanditiis quasi aliquam nam recusandae. Suscipit molestiae et voluptatem porro. Perspiciatis nemo voluptates doloremque ea assumenda recusandae nihil.",
                "benefit_en": "Omnis atque quaerat voluptas praesentium. Quos non ea officiis omnis nemo. Veniam maiores sapiente dolore incidunt consectetur iure. Iure illum molestiae sunt quibusdam nisi officia exercitationem.",
                "tech_description": "Voluptas possimus maxime aut est iure omnis rerum. Aspernatur et exercitationem asperiores labore fugit. In qui nulla aut. Praesentium quos quis sequi similique placeat dolorem qui.",
                "tech_description_en": "Officia vel sunt omnis voluptatem. Est id enim ut. Placeat atque quidem voluptatem ab.",
                "description": "Voluptatibus enim error qui non asperiores qui quasi. Veritatis explicabo ipsa vel sunt. Deserunt ad maiores nisi quis.",
                "description_en": "Commodi minus veniam rerum. Aut doloribus voluptas quo reprehenderit repellat explicabo.",
                "usage": "Unde soluta quisquam et quod at. Alias molestiae amet qui aperiam. Quia voluptatibus nulla deserunt doloribus laudantium nulla. Cum at autem sunt perferendis.",
                "usage_en": "Et nisi praesentium voluptatem quia. Sed sint aut omnis. Similique quia aut omnis deleniti.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?85027",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?17732",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?33298",
                "product_video": null,
                "status": 1,
                "rating": 3.71,
                "sold_count": 5203,
                "review_count": 9642,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-17 13:21:12",
                "updated_at": "2020-09-09 17:37:36",
                "product_category": {
                    "id": 8,
                    "name": "BB霜",
                    "slug": "laboriosam-praesentium",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?19312",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?82621",
                    "title": "architecto dicta autem",
                    "title_en": "voluptatem itaque voluptatem",
                    "sub_title": "vel voluptatem dolorem",
                    "describe": "Aut nemo corrupti tempora ipsam id et. Similique dolorem in voluptatum possimus atque. Eveniet a voluptatem veniam laudantium in dolorum ut.",
                    "describe_en": "Rem a voluptas dolore. Quasi illo sint nam voluptatem repellat itaque ullam incidunt. Porro libero adipisci vitae molestiae enim qui. Cumque in quia ex dolor fuga.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?65256",
                    "type": 1,
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-09-21 10:55:40",
                    "updated_at": "2020-09-13 01:28:11"
                }
            },
            {
                "id": 18,
                "product_category_id": 9,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "minima quo dolor",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?44273",
                "slug": "aut-qui",
                "short_description": "Voluptatibus cupiditate quaerat magnam.",
                "short_description_en": "Qui dignissimos deleniti quo non. Non harum sint excepturi facere possimus sint recusandae rem.",
                "price": "7569.00",
                "sale_price": "0.01",
                "stock": 400,
                "spec": "150 ml \/ 2.0 oz",
                "seo_title": "aperiam molestiae quae",
                "seo_keyword": "odio",
                "seo_description": "Optio nobis sapiente labore quia libero.",
                "benefit": "Sit nesciunt labore ratione quae cupiditate dignissimos quia. Et facere aut vel aut. Aspernatur odio accusamus ab temporibus nihil nulla eum.",
                "benefit_en": "Ex velit eos enim. Et quasi ut at distinctio eius. Minima hic voluptas dicta minima dolorum est.",
                "tech_description": "Sit sequi necessitatibus esse libero sit. Eos molestiae aperiam non illo minima quia. Eaque molestias sed ut enim beatae temporibus omnis.",
                "tech_description_en": "Minima consequatur quia rerum consectetur enim rerum. Nesciunt deserunt facilis harum iure sit alias. Consequatur eius deleniti ut veniam voluptates voluptatem pariatur autem.",
                "description": "Occaecati cupiditate nemo rerum placeat voluptatem. Veniam quaerat ratione maiores recusandae vel dolorum sunt. Cumque itaque expedita pariatur totam.",
                "description_en": "Qui numquam ducimus qui voluptas. Ratione est dicta sunt. Praesentium assumenda et deserunt voluptatem dolor. Mollitia ea asperiores odit corporis nihil aut iusto.",
                "usage": "Repudiandae aut doloremque id. Fuga quo expedita sit maiores molestias. Adipisci quasi et consectetur sunt qui aut praesentium rerum.",
                "usage_en": "Sint et sapiente est eum voluptate veniam cumque. Quia quia sed voluptas incidunt repudiandae voluptatem. Quia et quis quo facilis sint.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?94900",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?54738",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?79387",
                "product_video": null,
                "status": 1,
                "rating": 3.45,
                "sold_count": 7933,
                "review_count": 1088,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-22 19:01:25",
                "updated_at": "2020-09-13 18:48:26",
                "product_category": {
                    "id": 9,
                    "name": "面膜",
                    "slug": "facere-in",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?93068",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?58403",
                    "title": "fugit ut ea",
                    "title_en": "quo similique facere",
                    "sub_title": "quia sint vel",
                    "describe": "Est earum enim ipsam enim. Recusandae ut accusamus modi dolores nam tempore aut. Non eaque nostrum dolore vel nesciunt et.",
                    "describe_en": "Quia ut aut saepe reiciendis dolorum. Autem unde provident voluptates voluptate dolor recusandae. Molestiae tempora adipisci voluptatem qui commodi neque et. Qui quo aut aliquam dolor laboriosam ab.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?34104",
                    "type": 1,
                    "parent_id": 19,
                    "level": 1,
                    "created_at": "2020-09-19 21:45:08",
                    "updated_at": "2020-09-13 14:30:47"
                }
            },
            {
                "id": 19,
                "product_category_id": 7,
                "product_name": "臻爱铂金",
                "product_name_en": "ut aut a",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?50016",
                "slug": "consectetur-nostrum",
                "short_description": "Qui velit culpa aut.",
                "short_description_en": "Accusamus fuga aspernatur unde accusamus accusamus ut dolore. Rerum sint corporis eius qui aut dolorum corrupti. Tempora minima reprehenderit id velit ipsa impedit repellat. Rem veritatis iusto qui accusantium.",
                "price": "2659.00",
                "sale_price": "0.01",
                "stock": 943,
                "spec": "50 ml \/ 1.7 fl. oz",
                "seo_title": "vel commodi et",
                "seo_keyword": "delectus",
                "seo_description": "Omnis quod voluptatem veritatis quo.",
                "benefit": "Pariatur deleniti sed maxime et. Aliquam dolores quasi dignissimos at cupiditate ut. Dolor omnis delectus odit accusamus sunt consequatur voluptas.",
                "benefit_en": "Repudiandae repellendus necessitatibus debitis aut blanditiis voluptatem. Accusamus sint veniam facere ipsam. Fugiat illum eos rerum non.",
                "tech_description": "Culpa veritatis aut vel facilis ut repudiandae. Laboriosam cupiditate quasi perspiciatis ut consectetur. Earum sunt sed qui. Sit omnis aliquid accusamus similique occaecati ullam labore.",
                "tech_description_en": "Corrupti aut dolorum et corrupti facere beatae in. At animi asperiores tempore iure tempore numquam. Iste ea labore sunt molestias nisi suscipit est.",
                "description": "Necessitatibus est vero sunt quasi ut. Magnam occaecati sed et distinctio quas corporis vero deleniti. Repudiandae illo consectetur sint et iure.",
                "description_en": "Quo quis aut eligendi ut reprehenderit qui aperiam. Aut sit est qui id. Inventore eum a similique neque repellat.",
                "usage": "Aut quia molestiae nisi dicta qui quis. Ut voluptatem quo hic non autem. Recusandae dolores sequi rem. Odio mollitia consequuntur exercitationem.",
                "usage_en": "Quia facere ut aut ad accusantium a. Laborum molestiae alias commodi illum ut quo. Consequatur consequatur recusandae quia quae officiis eligendi.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?26055",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?37551",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?78761",
                "product_video": null,
                "status": 2,
                "rating": 2.5300000000000002,
                "sold_count": 2507,
                "review_count": 4716,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-10-01 11:19:29",
                "updated_at": "2020-10-05 22:05:47",
                "product_category": {
                    "id": 7,
                    "name": "彩妆盘",
                    "slug": "temporibus-odit",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?52145",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?22893",
                    "title": "vitae sint qui",
                    "title_en": "optio reprehenderit aspernatur",
                    "sub_title": "molestias molestiae temporibus",
                    "describe": "Laborum et quod vero error ea occaecati. Dolores est numquam ipsum. Ut amet velit quia velit rerum.",
                    "describe_en": "Tempore voluptas ipsam sint perspiciatis. Necessitatibus est quis deserunt nisi in sed. Occaecati nihil quo sapiente eos magni omnis quo. Placeat commodi ad enim delectus aperiam in et.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?42504",
                    "type": 1,
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-09-27 08:45:07",
                    "updated_at": "2020-09-30 01:32:23"
                }
            },
            {
                "id": 20,
                "product_category_id": 9,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "ea maiores saepe",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?71324",
                "slug": "est-sapiente",
                "short_description": "Dignissimos cupiditate sunt dolorum et id itaque.",
                "short_description_en": "Minima mollitia veritatis et non commodi sed. Quia laborum deleniti autem. Sit fugit quibusdam pariatur praesentium non qui quo. Excepturi dolor quis qui veniam sint ratione laudantium.",
                "price": "7499.00",
                "sale_price": "0.01",
                "stock": 43,
                "spec": "50 ml \/ 1.7 fl. oz",
                "seo_title": "fuga dolor qui",
                "seo_keyword": "voluptatem",
                "seo_description": "Delectus qui soluta necessitatibus ut non.",
                "benefit": "Molestiae aut ab delectus rerum ut excepturi. Perferendis explicabo voluptatem aliquam consequatur eveniet. Dolorum maiores pariatur et dolorem inventore corrupti illo.",
                "benefit_en": "Impedit enim odit provident. In minus magnam aut sed. Quia soluta illo illum nostrum laboriosam. Sint perferendis nihil voluptatem rerum dolor et sit.",
                "tech_description": "Laboriosam laborum architecto eos ipsam nemo doloremque at. Culpa provident officiis et voluptas deserunt dolorem. Ab officia soluta dolorum dolorem repellat.",
                "tech_description_en": "Perspiciatis sequi est perspiciatis. Veritatis expedita veritatis voluptatum deserunt. Qui culpa ut dicta eaque sunt placeat. Nisi quia sapiente aut ad enim.",
                "description": "Sit eaque quasi est rem. In quo porro vel sit laborum dolore eius. Error animi temporibus est. Odio non impedit eveniet ullam cupiditate quidem.",
                "description_en": "Minus eos fuga non est ullam. Sed tempora sequi omnis et. Hic est qui quisquam voluptatem quibusdam.",
                "usage": "Quo et repudiandae et facere non. Aliquid nam commodi perferendis reprehenderit recusandae. Et ducimus sit porro voluptate aut. Illum mollitia incidunt qui modi.",
                "usage_en": "Iste facere est modi beatae odit quo. At vel nam commodi excepturi. Minima eos sint est quam. Ratione possimus voluptatem omnis architecto. Sit rem vel est ut totam facere.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?91936",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?68444",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?98855",
                "product_video": null,
                "status": 3,
                "rating": 1.45,
                "sold_count": 5232,
                "review_count": 7196,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-10-05 06:02:08",
                "updated_at": "2020-10-03 21:51:11",
                "product_category": {
                    "id": 9,
                    "name": "面膜",
                    "slug": "facere-in",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?93068",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?58403",
                    "title": "fugit ut ea",
                    "title_en": "quo similique facere",
                    "sub_title": "quia sint vel",
                    "describe": "Est earum enim ipsam enim. Recusandae ut accusamus modi dolores nam tempore aut. Non eaque nostrum dolore vel nesciunt et.",
                    "describe_en": "Quia ut aut saepe reiciendis dolorum. Autem unde provident voluptates voluptate dolor recusandae. Molestiae tempora adipisci voluptatem qui commodi neque et. Qui quo aut aliquam dolor laboriosam ab.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?34104",
                    "type": 1,
                    "parent_id": 19,
                    "level": 1,
                    "created_at": "2020-09-19 21:45:08",
                    "updated_at": "2020-09-13 14:30:47"
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
    -G "http://localhost/api/products/list/product_category_skin_care/mollitia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/products/list/product_category_skin_care/mollitia"
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
    -G "http://localhost/api/products/status/et?page=perspiciatis&page_limit=atque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/products/status/et"
);

let params = {
    "page": "perspiciatis",
    "page_limit": "atque",
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
            "product_category_id": 8,
            "product_name": "黑钻洁净滋养面膜",
            "product_name_en": "quis sed dolor",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?71962",
            "slug": "et-hic",
            "short_description": "Ad velit velit ad et optio minima.",
            "price": "198.00",
            "sale_price": "0.01"
        },
        {
            "product_category_id": 3,
            "product_name": "亮颜修护",
            "product_name_en": "in omnis totam",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?52793",
            "slug": "aut-ut",
            "short_description": "Pariatur ipsa voluptatem nam.",
            "price": "2378.00",
            "sale_price": "0.01"
        },
        {
            "product_category_id": 8,
            "product_name": "黑钻璀璨晶透肌底精华",
            "product_name_en": "aspernatur impedit aut",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?88140",
            "slug": "officia-esse",
            "short_description": "Ut omnis tempora itaque ut.",
            "price": "1861.00",
            "sale_price": "0.01"
        },
        {
            "product_category_id": 4,
            "product_name": "臻爱铂金",
            "product_name_en": "omnis ut similique",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?87749",
            "slug": "laboriosam-in",
            "short_description": "Velit quo eum ipsa qui et.",
            "price": "1763.00",
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
            "id": 2,
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?42539",
            "slug": "optio-nemo",
            "product_name": "钻石冰莹面膜",
            "product_name_en": "praesentium doloremque molestiae"
        },
        {
            "id": 10,
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?78106",
            "slug": "quia-esse",
            "product_name": "钻石焕活面膜",
            "product_name_en": "neque nobis quia"
        },
        {
            "id": 28,
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?86837",
            "slug": "amet-illo",
            "product_name": "亮颜修护",
            "product_name_en": "eum numquam eum"
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
            "id": 3,
            "name": "隔离",
            "slug": "voluptatem-ut",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?94120",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?98897",
            "title": "facere sit ducimus",
            "title_en": "enim inventore possimus",
            "sub_title": "veritatis nihil et",
            "describe": "Quis nemo hic incidunt possimus illo rerum et et. Cum rerum et est ipsam deserunt sit magni. Facere non voluptas dolorem qui quidem. Nulla officia optio exercitationem corporis.",
            "describe_en": "Vel odit corporis odit. Et iusto inventore quae voluptates iste temporibus cumque voluptatibus.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?97950",
            "type": 1,
            "parent_id": 17,
            "level": 1,
            "created_at": "2020-09-13 13:22:46",
            "updated_at": "2020-09-13 22:49:49",
            "children": [
                {
                    "id": 7,
                    "name": "彩妆盘",
                    "slug": "temporibus-odit",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?52145",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?22893",
                    "title": "vitae sint qui",
                    "title_en": "optio reprehenderit aspernatur",
                    "sub_title": "molestias molestiae temporibus",
                    "describe": "Laborum et quod vero error ea occaecati. Dolores est numquam ipsum. Ut amet velit quia velit rerum.",
                    "describe_en": "Tempore voluptas ipsam sint perspiciatis. Necessitatibus est quis deserunt nisi in sed. Occaecati nihil quo sapiente eos magni omnis quo. Placeat commodi ad enim delectus aperiam in et.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?42504",
                    "type": 1,
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-09-27 08:45:07",
                    "updated_at": "2020-09-30 01:32:23"
                },
                {
                    "id": 8,
                    "name": "BB霜",
                    "slug": "laboriosam-praesentium",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?19312",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?82621",
                    "title": "architecto dicta autem",
                    "title_en": "voluptatem itaque voluptatem",
                    "sub_title": "vel voluptatem dolorem",
                    "describe": "Aut nemo corrupti tempora ipsam id et. Similique dolorem in voluptatum possimus atque. Eveniet a voluptatem veniam laudantium in dolorum ut.",
                    "describe_en": "Rem a voluptas dolore. Quasi illo sint nam voluptatem repellat itaque ullam incidunt. Porro libero adipisci vitae molestiae enim qui. Cumque in quia ex dolor fuga.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?65256",
                    "type": 1,
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-09-21 10:55:40",
                    "updated_at": "2020-09-13 01:28:11"
                }
            ]
        },
        {
            "id": 9,
            "name": "面膜",
            "slug": "facere-in",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?93068",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?58403",
            "title": "fugit ut ea",
            "title_en": "quo similique facere",
            "sub_title": "quia sint vel",
            "describe": "Est earum enim ipsam enim. Recusandae ut accusamus modi dolores nam tempore aut. Non eaque nostrum dolore vel nesciunt et.",
            "describe_en": "Quia ut aut saepe reiciendis dolorum. Autem unde provident voluptates voluptate dolor recusandae. Molestiae tempora adipisci voluptatem qui commodi neque et. Qui quo aut aliquam dolor laboriosam ab.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?34104",
            "type": 1,
            "parent_id": 19,
            "level": 1,
            "created_at": "2020-09-19 21:45:08",
            "updated_at": "2020-09-13 14:30:47",
            "children": [
                {
                    "id": 2,
                    "name": "BB霜",
                    "slug": "quia-dolor",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?95312",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?85726",
                    "title": "debitis ab labore",
                    "title_en": "omnis molestiae explicabo",
                    "sub_title": "doloribus et excepturi",
                    "describe": "Qui adipisci in occaecati rem sint. Quia rerum quo adipisci itaque dolorem. Accusantium cum ullam rerum incidunt aperiam.",
                    "describe_en": "Voluptas quae impedit voluptate quibusdam cum qui quibusdam aut. Aut non consectetur non aperiam doloribus at. Vel consequatur sit vitae ut. Ut rerum molestiae illum sed qui et neque asperiores.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?72154",
                    "type": 1,
                    "parent_id": 9,
                    "level": 1,
                    "created_at": "2020-09-25 18:17:02",
                    "updated_at": "2020-09-30 03:15:15"
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
    -G "http://localhost/api/product_category/story/voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product_category/story/voluptas"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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
    -d '{"product_list":[{"product_id":17}]}'

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
            "product_id": 17
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
    "http://localhost/api/shop_carts/1?type=iure&product_id=et&amount=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/shop_carts/1"
);

let params = {
    "type": "iure",
    "product_id": "et",
    "amount": "et",
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
    "http://localhost/api/shop_carts/1?product_id=culpa" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/shop_carts/1"
);

let params = {
    "product_id": "culpa",
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
            "name": "品牌介绍",
            "slug": "vitae-dolorum",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?12358",
            "title": "debitis et temporibus",
            "sub_title": "ullam nostrum dolor",
            "created_at": "2019-11-25 04:32:13",
            "updated_at": "2020-08-29 04:22:02"
        },
        {
            "id": 2,
            "name": "精湛科艺",
            "slug": "temporibus-natus",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?97597",
            "title": "delectus consectetur labore",
            "sub_title": "labore consequatur autem",
            "created_at": "2020-08-18 16:38:15",
            "updated_at": "2020-05-26 23:16:00"
        },
        {
            "id": 3,
            "name": "精湛科艺",
            "slug": "ex-hic",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?76468",
            "title": "aut laudantium et",
            "sub_title": "aliquam rerum tempore",
            "created_at": "2020-03-12 16:46:43",
            "updated_at": "2020-07-20 08:23:46"
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
新增用户收货地址

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/api/user_addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"province":"dicta","city":"maiores","district":"quisquam","address":"sint","zip":9,"contact_name":"quod","contact_phone":14}'

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
    "province": "dicta",
    "city": "maiores",
    "district": "quisquam",
    "address": "sint",
    "zip": 9,
    "contact_name": "quod",
    "contact_phone": 14
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
    "http://localhost/api/user_addresses/1?province=voluptatem&city=rerum&district=sit&address=culpa&zip=vel&contact_name=nihil&contact_phone=saepe" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_addresses/1"
);

let params = {
    "province": "voluptatem",
    "city": "rerum",
    "district": "sit",
    "address": "culpa",
    "zip": "vel",
    "contact_name": "nihil",
    "contact_phone": "saepe",
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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
    "http://localhost/api/user_profile?phone=vel&real_name=nisi&sex=et&birthday=ratione&age=voluptatem&province=modi&city=voluptatem&district=molestiae&address=harum&zip=earum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_profile"
);

let params = {
    "phone": "vel",
    "real_name": "nisi",
    "sex": "et",
    "birthday": "ratione",
    "age": "voluptatem",
    "province": "modi",
    "city": "voluptatem",
    "district": "molestiae",
    "address": "harum",
    "zip": "earum",
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
    -d '{"code":"aliquid"}'

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
    "code": "aliquid"
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
    -G "http://localhost/api/wish_list?page=natus&page_limit=ipsa" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/wish_list"
);

let params = {
    "page": "natus",
    "page_limit": "ipsa",
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
    "http://localhost/api/wish_list/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/wish_list/et"
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
    -G "http://localhost/alipay/bank_gateway/pay?no=sed&total_amount=est&payment_key=molestiae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/alipay/bank_gateway/pay"
);

let params = {
    "no": "sed",
    "total_amount": "est",
    "payment_key": "molestiae",
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
        "no": "sed",
        "total_amount": "est",
        "payment_key": "molestiae"
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
    -G "http://localhost/alipay/aop_page/pay?no=consectetur&total_amount=id&payment_key=natus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/alipay/aop_page/pay"
);

let params = {
    "no": "consectetur",
    "total_amount": "id",
    "payment_key": "natus",
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
        "no": "consectetur",
        "total_amount": "id",
        "payment_key": "natus"
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
    -G "http://localhost/alipay/legacy_express/pay?no=quia&total_amount=labore&payment_key=illo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/alipay/legacy_express/pay"
);

let params = {
    "no": "quia",
    "total_amount": "labore",
    "payment_key": "illo",
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
        "no": "quia",
        "total_amount": "labore",
        "payment_key": "illo"
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
    "data": [],
    "code": 50001,
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
    -G "http://localhost/unionpay/pay?no=quo&total_amount=quia&payment_key=dolor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/unionpay/pay"
);

let params = {
    "no": "quo",
    "total_amount": "quia",
    "payment_key": "dolor",
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
        "no": "quo",
        "total_amount": "quia",
        "payment_key": "dolor"
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
## unionpay_gateway/pay
> Example request:

```bash
curl -X GET \
    -G "http://localhost/unionpay_gateway/pay" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/unionpay_gateway/pay"
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
    "msg": "订单号必填"
}
```

### HTTP Request
`GET unionpay_gateway/pay`


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
## unionpay_gateway/return
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



### HTTP Request
`GET unionpay_gateway/return`


<!-- END_eff8dec0e271991b4b6f8e6651cdfb7f -->

<!-- START_673d30c2fdf05dadb4c5aeb9e7474a3d -->
## unionpay_gateway/notify
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
    -G "http://localhost/api/response_code?10001=doloribus&10003=ducimus&20001=tempora&40001=quam&40003=animi&40004=voluptatem&40005=et&50001=quam&P1001=blanditiis&P1002=ratione&P4004=vero&P4005=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/response_code"
);

let params = {
    "10001": "doloribus",
    "10003": "ducimus",
    "20001": "tempora",
    "40001": "quam",
    "40003": "animi",
    "40004": "voluptatem",
    "40005": "et",
    "50001": "quam",
    "P1001": "blanditiis",
    "P1002": "ratione",
    "P4004": "vero",
    "P4005": "et",
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/assetImg/{img_location}`


<!-- END_f49c5d67a582cc0c6e282708c0796aae -->

<!-- START_53be1e9e10a08458929a2e0ea70ddb86 -->
## /
> Example request:

```bash
curl -X GET \
    -G "http://localhost/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/"
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
null
```

### HTTP Request
`GET /`


<!-- END_53be1e9e10a08458929a2e0ea70ddb86 -->

<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## register
> Example request:

```bash
curl -X GET \
    -G "http://localhost/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/register"
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
null
```

### HTTP Request
`GET register`


<!-- END_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->

<!-- START_60efc9f5157c5ed604f4a3f83ee14d6b -->
## forgot-password
> Example request:

```bash
curl -X GET \
    -G "http://localhost/forgot-password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/forgot-password"
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
null
```

### HTTP Request
`GET forgot-password`


<!-- END_60efc9f5157c5ed604f4a3f83ee14d6b -->

<!-- START_1efc98c062d0b10dc1221f6dec995e85 -->
## my-account
> Example request:

```bash
curl -X GET \
    -G "http://localhost/my-account" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/my-account"
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
`GET my-account`


<!-- END_1efc98c062d0b10dc1221f6dec995e85 -->

<!-- START_be8be7707da04f85f110ee53698bebfe -->
## my-account/order/{order_no}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/my-account/order/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/my-account/order/1"
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
`GET my-account/order/{order_no}`


<!-- END_be8be7707da04f85f110ee53698bebfe -->

<!-- START_9a52cc3b4b7494d9fa0404f2f49afdc4 -->
## my-account/profile
> Example request:

```bash
curl -X GET \
    -G "http://localhost/my-account/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/my-account/profile"
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
`GET my-account/profile`


<!-- END_9a52cc3b4b7494d9fa0404f2f49afdc4 -->

<!-- START_a05e2e3c3e649401633a5d492a0f78fb -->
## cart
> Example request:

```bash
curl -X GET \
    -G "http://localhost/cart" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/cart"
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
`GET cart`


<!-- END_a05e2e3c3e649401633a5d492a0f78fb -->

<!-- START_c4ffae181be524b63fc155bb8961cc1b -->
## refresh_cart
> Example request:

```bash
curl -X GET \
    -G "http://localhost/refresh_cart" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/refresh_cart"
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
`GET refresh_cart`


<!-- END_c4ffae181be524b63fc155bb8961cc1b -->

<!-- START_5dc23d7338ec4b75c815bf3a92772986 -->
## checkout
> Example request:

```bash
curl -X GET \
    -G "http://localhost/checkout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/checkout"
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
`GET checkout`


<!-- END_5dc23d7338ec4b75c815bf3a92772986 -->

<!-- START_67ba63f78605f7e561c7dace3e14e7d4 -->
## refresh_addresses
> Example request:

```bash
curl -X GET \
    -G "http://localhost/refresh_addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/refresh_addresses"
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
`GET refresh_addresses`


<!-- END_67ba63f78605f7e561c7dace3e14e7d4 -->

<!-- START_fcdf2da1997bd4d8d126f782bc06524c -->
## products
> Example request:

```bash
curl -X GET \
    -G "http://localhost/products" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/products"
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
`GET products`


<!-- END_fcdf2da1997bd4d8d126f782bc06524c -->

<!-- START_845cf59d0911b97da561c15f5aa57c85 -->
## product/{slug}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/product/1"
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
`GET product/{slug}`


<!-- END_845cf59d0911b97da561c15f5aa57c85 -->

<!-- START_170f174cb152aea6f6a0f5fe640b6018 -->
## product-category
> Example request:

```bash
curl -X GET \
    -G "http://localhost/product-category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/product-category"
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
`GET product-category`


<!-- END_170f174cb152aea6f6a0f5fe640b6018 -->

<!-- START_0a90e692e0017860f0cffb00f4e580de -->
## product-category/{slug}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/product-category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/product-category/1"
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
`GET product-category/{slug}`


<!-- END_0a90e692e0017860f0cffb00f4e580de -->

<!-- START_d759e40f94b5d07cd47b21a5b52434f4 -->
## product-category/{slug}/story
> Example request:

```bash
curl -X GET \
    -G "http://localhost/product-category/1/story" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/product-category/1/story"
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
`GET product-category/{slug}/story`


<!-- END_d759e40f94b5d07cd47b21a5b52434f4 -->

<!-- START_d09fd6c596e2726fc1ffabb9b402633b -->
## wishlist
> Example request:

```bash
curl -X GET \
    -G "http://localhost/wishlist" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/wishlist"
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
`GET wishlist`


<!-- END_d09fd6c596e2726fc1ffabb9b402633b -->

<!-- START_11273a09db3c4a2e814b2bdaca659110 -->
## the-house
> Example request:

```bash
curl -X GET \
    -G "http://localhost/the-house" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/the-house"
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
`GET the-house`


<!-- END_11273a09db3c4a2e814b2bdaca659110 -->

<!-- START_42b895f5eaf05b3286bc66ef3245673b -->
## the-house/category
> Example request:

```bash
curl -X GET \
    -G "http://localhost/the-house/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/the-house/category"
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
`GET the-house/category`


<!-- END_42b895f5eaf05b3286bc66ef3245673b -->

<!-- START_dc655c54894511268a36a9832a17fe87 -->
## the-house/single
> Example request:

```bash
curl -X GET \
    -G "http://localhost/the-house/single" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/the-house/single"
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
`GET the-house/single`


<!-- END_dc655c54894511268a36a9832a17fe87 -->

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/roles`


<!-- END_879622c0ac94a4a0f4d364d46a42bc7e -->


