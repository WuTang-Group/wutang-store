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
    -d '{"items":[{"merch_id":"voluptatem","key":"cumque","product":"distinctio"}]}'

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
            "merch_id": "voluptatem",
            "key": "cumque",
            "product": "distinctio"
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
    "http://localhost/admin/alipay/bank_gateway/1?id=corporis&merch_id=iste&key=ea&product=modi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/bank_gateway/1"
);

let params = {
    "id": "corporis",
    "merch_id": "iste",
    "key": "ea",
    "product": "modi",
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
    "http://localhost/admin/alipay/bank_gateway/status/1?id=optio&status=est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/bank_gateway/status/1"
);

let params = {
    "id": "optio",
    "status": "est",
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
    -G "http://localhost/admin/alipay/legacy_express?page=dolor&page_limit=voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/legacy_express"
);

let params = {
    "page": "dolor",
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
    -d '{"items":[{"pid":"alias","key":"necessitatibus","seller_email":"ducimus"}]}'

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
            "pid": "alias",
            "key": "necessitatibus",
            "seller_email": "ducimus"
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
    "http://localhost/admin/alipay/legacy_express/1?id=magnam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/legacy_express/1"
);

let params = {
    "id": "magnam",
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
    "http://localhost/admin/alipay/legacy_express/1?id=explicabo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/legacy_express/1"
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
    "http://localhost/admin/alipay/legacy_express/status/1?id=repudiandae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/legacy_express/status/1"
);

let params = {
    "id": "repudiandae",
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

#[ADMIN] Asset img

静态图片管理
<!-- START_d87b514e0b2d661024b3fe01f18fc23c -->
## Get assetImg list
获取首页静态资源列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/asset_img?page=sequi&page_limit=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/asset_img"
);

let params = {
    "page": "sequi",
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
    -d '{"img":"explicabo","img_location":"illo","type":"harum","product_id":"iste"}'

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
    "img": "explicabo",
    "img_location": "illo",
    "type": "harum",
    "product_id": "iste"
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
    -d '{"img":"id","img_location":"non","type":"ipsa","product_id":"vel"}'

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
    "img": "id",
    "img_location": "non",
    "type": "ipsa",
    "product_id": "vel"
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
    -G "http://localhost/admin/category_stories?page=excepturi&page_limit=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories"
);

let params = {
    "page": "excepturi",
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
    "http://localhost/admin/category_stories?title=quia&title_en=cum&description=possimus&description_en=doloribus&banner=a&product_category_id=fugiat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories"
);

let params = {
    "title": "quia",
    "title_en": "cum",
    "description": "possimus",
    "description_en": "doloribus",
    "banner": "a",
    "product_category_id": "fugiat",
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
    "http://localhost/admin/category_stories/1?title=quas&title_en=nulla&description=quo&description_en=neque&banner=aspernatur&product_category_id=voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories/1"
);

let params = {
    "title": "quas",
    "title_en": "nulla",
    "description": "quo",
    "description_en": "neque",
    "banner": "aspernatur",
    "product_category_id": "voluptas",
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
    -G "http://localhost/admin/companies?page=quae&page_limit=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/companies"
);

let params = {
    "page": "quae",
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
    -G "http://localhost/admin/company/departments/non" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/company/departments/non"
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
    -G "http://localhost/admin/logs/1?page=et&page_limit=alias" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/logs/1"
);

let params = {
    "page": "et",
    "page_limit": "alias",
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
    "http://localhost/admin/logs/1?ids=ipsam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/logs/1"
);

let params = {
    "ids": "ipsam",
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
    -G "http://localhost/admin/order?page=sint&page_limit=exercitationem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order"
);

let params = {
    "page": "sint",
    "page_limit": "exercitationem",
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
    "http://localhost/admin/order?page=similique&page_limit=vitae&username=eum&order_no=pariatur&order_status=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order"
);

let params = {
    "page": "similique",
    "page_limit": "vitae",
    "username": "eum",
    "order_no": "pariatur",
    "order_status": "qui",
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
    -d '{"refund_status":"ut","ship_status":"soluta","status":"et"}'

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
    "refund_status": "ut",
    "ship_status": "soluta",
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
    -G "http://localhost/admin/product?page=voluptas&page_limit=eos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product"
);

let params = {
    "page": "voluptas",
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
    "http://localhost/admin/product?product_category_id=rerum&product_name=vel&product_name_en=cumque&thumbnail=dolor&slug=ipsam&short_description=voluptas&short_description_en=velit&price=at&sale_price=dolorum&stock=aut&seo_title=quam&seo_keyword=consectetur&seo_description=rerum&benefit=itaque&benefit_en=sit&tech_description=possimus&tech_description_en=itaque&description=voluptates&description_en=corporis&usage=ratione&usage_en=vitae&main_image=et&main_image_2=ratione&benefit_image=vero&product_video=non&status=occaecati&rating=eveniet&sold_count=facere&review_count=incidunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product"
);

let params = {
    "product_category_id": "rerum",
    "product_name": "vel",
    "product_name_en": "cumque",
    "thumbnail": "dolor",
    "slug": "ipsam",
    "short_description": "voluptas",
    "short_description_en": "velit",
    "price": "at",
    "sale_price": "dolorum",
    "stock": "aut",
    "seo_title": "quam",
    "seo_keyword": "consectetur",
    "seo_description": "rerum",
    "benefit": "itaque",
    "benefit_en": "sit",
    "tech_description": "possimus",
    "tech_description_en": "itaque",
    "description": "voluptates",
    "description_en": "corporis",
    "usage": "ratione",
    "usage_en": "vitae",
    "main_image": "et",
    "main_image_2": "ratione",
    "benefit_image": "vero",
    "product_video": "non",
    "status": "occaecati",
    "rating": "eveniet",
    "sold_count": "facere",
    "review_count": "incidunt",
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
    "http://localhost/admin/product/1?product_category_id=corporis&product_name=quas&product_name_en=ratione&thumbnail=error&slug=repellat&short_description=eum&short_description_en=quia&price=iste&sale_price=qui&stock=facilis&seo_title=nostrum&seo_keyword=est&seo_description=blanditiis&benefit=ut&benefit_en=minima&tech_description=veritatis&tech_description_en=itaque&description=praesentium&description_en=ea&usage=sint&usage_en=mollitia&main_image=numquam&main_image_2=nemo&benefit_image=unde&product_video=fugiat&status=et&rating=ea&sold_count=nemo&review_count=quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product/1"
);

let params = {
    "product_category_id": "corporis",
    "product_name": "quas",
    "product_name_en": "ratione",
    "thumbnail": "error",
    "slug": "repellat",
    "short_description": "eum",
    "short_description_en": "quia",
    "price": "iste",
    "sale_price": "qui",
    "stock": "facilis",
    "seo_title": "nostrum",
    "seo_keyword": "est",
    "seo_description": "blanditiis",
    "benefit": "ut",
    "benefit_en": "minima",
    "tech_description": "veritatis",
    "tech_description_en": "itaque",
    "description": "praesentium",
    "description_en": "ea",
    "usage": "sint",
    "usage_en": "mollitia",
    "main_image": "numquam",
    "main_image_2": "nemo",
    "benefit_image": "unde",
    "product_video": "fugiat",
    "status": "et",
    "rating": "ea",
    "sold_count": "nemo",
    "review_count": "quia",
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
    -G "http://localhost/admin/product_categories?page=aut&page_limit=eos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories"
);

let params = {
    "page": "aut",
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
    "http://localhost/admin/product_categories?name=ab&thumbnail=nisi&banner=neque&title=ut&title_en=et&sub_title=a&describe=laboriosam&describe_en=minima&describe_img=omnis&parent_id=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories"
);

let params = {
    "name": "ab",
    "thumbnail": "nisi",
    "banner": "neque",
    "title": "ut",
    "title_en": "et",
    "sub_title": "a",
    "describe": "laboriosam",
    "describe_en": "minima",
    "describe_img": "omnis",
    "parent_id": "et",
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
    "http://localhost/admin/product_categories/1?name=voluptas&thumbnail=est&banner=dolores&title=laborum&title_en=nulla&sub_title=debitis&describe=aliquam&describe_en=ipsum&describe_img=qui&parent_id=ea" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories/1"
);

let params = {
    "name": "voluptas",
    "thumbnail": "est",
    "banner": "dolores",
    "title": "laborum",
    "title_en": "nulla",
    "sub_title": "debitis",
    "describe": "aliquam",
    "describe_en": "ipsum",
    "describe_img": "qui",
    "parent_id": "ea",
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
    "http://localhost/admin/product_sku?title=reiciendis&description=aut&price=ut&stock=consequuntur&product_id=velit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_sku"
);

let params = {
    "title": "reiciendis",
    "description": "aut",
    "price": "ut",
    "stock": "consequuntur",
    "product_id": "velit",
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
    "http://localhost/admin/product_sku/1?title=qui&description=nesciunt&price=modi&stock=rerum&product_id=quis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_sku/1"
);

let params = {
    "title": "qui",
    "description": "nesciunt",
    "price": "modi",
    "stock": "rerum",
    "product_id": "quis",
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
    -G "http://localhost/admin/the_houses?page=eum&page_limit=sapiente" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/the_houses"
);

let params = {
    "page": "eum",
    "page_limit": "sapiente",
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
    -d '{"title":"nihil","sub_title":"omnis","the_house_category_id":"sit","describe":"vero","banner":"assumenda"}'

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
    "title": "nihil",
    "sub_title": "omnis",
    "the_house_category_id": "sit",
    "describe": "vero",
    "banner": "assumenda"
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
    -d '{"title":"voluptate","sub_title":"suscipit","the_house_category_id":"maxime","describe":"illo","banner":"voluptatem"}'

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
    "title": "voluptate",
    "sub_title": "suscipit",
    "the_house_category_id": "maxime",
    "describe": "illo",
    "banner": "voluptatem"
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
    -G "http://localhost/admin/the_house/category/list?page=molestiae&page_limit=dolore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/the_house/category/list"
);

let params = {
    "page": "molestiae",
    "page_limit": "dolore",
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
    -d '{"name":"recusandae","banner":"delectus","title":"totam","sub_title":"officia"}'

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
    "name": "recusandae",
    "banner": "delectus",
    "title": "totam",
    "sub_title": "officia"
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
    -d '{"name":"aut","banner":"facere","title":"nihil","sub_title":"nam"}'

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
    "name": "aut",
    "banner": "facere",
    "title": "nihil",
    "sub_title": "nam"
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
    -G "http://localhost/admin/the_house_content/list?page=est&page_limit=recusandae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/the_house_content/list"
);

let params = {
    "page": "est",
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
    -d '{"the_house_id":"sed","title":"repellendus","content":"dolorum","img":"iusto","img_desc":"velit"}'

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
    "the_house_id": "sed",
    "title": "repellendus",
    "content": "dolorum",
    "img": "iusto",
    "img_desc": "velit"
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
    -d '{"the_house_id":"unde","title":"accusantium","content":"et","img":"incidunt","img_desc":"recusandae"}'

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
    "the_house_id": "unde",
    "title": "accusantium",
    "content": "et",
    "img": "incidunt",
    "img_desc": "recusandae"
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
    -G "http://localhost/admin/user?username=et&page=quia&page_limit=est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user"
);

let params = {
    "username": "et",
    "page": "quia",
    "page_limit": "est",
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
    -d '{"username":"totam","password":"voluptatem","name":"rerum","role":"dolor","company":"quos","department":"ea","sex":4,"phone":1,"email":"occaecati","member_code":"et"}'

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
    "username": "totam",
    "password": "voluptatem",
    "name": "rerum",
    "role": "dolor",
    "company": "quos",
    "department": "ea",
    "sex": 4,
    "phone": 1,
    "email": "occaecati",
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

<!-- START_f391a113e7b095e92c1fbb509d3b51d5 -->
## Edit user(Admin)
修改用户资料

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/user/1?name=aut&email=quis&phone=enim&avatar=eos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/1"
);

let params = {
    "name": "aut",
    "email": "quis",
    "phone": "enim",
    "avatar": "eos",
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
`PUT admin/user/{username}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `name` |  optional  | 姓名
    `email` |  optional  | 邮箱
    `phone` |  optional  | 手机号
    `avatar` |  optional  | 头像

<!-- END_f391a113e7b095e92c1fbb509d3b51d5 -->

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
    "http://localhost/admin/user/reset_password/1?oldPassword=consectetur&newPassword=tempora&newPassword_confirmation=minus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/reset_password/1"
);

let params = {
    "oldPassword": "consectetur",
    "newPassword": "tempora",
    "newPassword_confirmation": "minus",
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
    -G "http://localhost/admin/get_user?hash_id=laboriosam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/get_user"
);

let params = {
    "hash_id": "laboriosam",
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
    "http://localhost/admin/user_addresses?province=iste&city=delectus&district=inventore&address=voluptas&zip=qui&contact_name=sequi&contact_phone=molestias" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses"
);

let params = {
    "province": "iste",
    "city": "delectus",
    "district": "inventore",
    "address": "voluptas",
    "zip": "qui",
    "contact_name": "sequi",
    "contact_phone": "molestias",
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
    "http://localhost/admin/user_addresses/1?address_id=facilis&province=rem&city=laborum&district=et&address=quaerat&zip=similique&contact_name=accusantium&contact_phone=maxime" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses/1"
);

let params = {
    "address_id": "facilis",
    "province": "rem",
    "city": "laborum",
    "district": "et",
    "address": "quaerat",
    "zip": "similique",
    "contact_name": "accusantium",
    "contact_phone": "maxime",
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
    "http://localhost/admin/user_addresses/1?address_id=commodi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses/1"
);

let params = {
    "address_id": "commodi",
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
    "http://localhost/admin/user_profiles/1?profile_id=aliquam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_profiles/1"
);

let params = {
    "profile_id": "aliquam",
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
    "http://localhost/admin/user_profiles/1?profile_id=dolorem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_profiles/1"
);

let params = {
    "profile_id": "dolorem",
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
    -d '{"name":"sint","type":12,"order_no":"ea","content":"dolorem"}'

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
    "name": "sint",
    "type": 12,
    "order_no": "ea",
    "content": "dolorem"
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
            "id": 1,
            "img": "https:\/\/lorempixel.com\/640\/480\/?85398",
            "img_location": 1,
            "type": "banner",
            "product_id": 8,
            "product": {
                "id": 8,
                "slug": "ratione-fugiat",
                "product_name": "臻爱铂金",
                "product_name_en": "quod deserunt molestiae"
            }
        },
        "discover": [],
        "recommend_list": [],
        "the_house": [
            {
                "id": 42,
                "slug": "ut-temporibus",
                "the_house_category_id": 1,
                "banner": "https:\/\/lorempixel.com\/640\/480\/?56074",
                "title": "earum corrupti tempore",
                "sub_title": "magnam sunt tempora",
                "describe": "Quis nobis quia doloribus blanditiis sit. Quo consequatur culpa omnis reprehenderit dolorem quae non optio. Ut atque eos repudiandae totam perferendis."
            },
            {
                "id": 26,
                "slug": "vitae-at",
                "the_house_category_id": 1,
                "banner": "https:\/\/lorempixel.com\/640\/480\/?20201",
                "title": "eaque nihil aut",
                "sub_title": "distinctio error minima",
                "describe": "Non reprehenderit est occaecati laboriosam eum. Dolores expedita maxime accusantium quia saepe. Itaque alias dicta sunt ullam officiis ducimus."
            },
            {
                "id": 19,
                "slug": "ea-quia",
                "the_house_category_id": 1,
                "banner": "https:\/\/lorempixel.com\/640\/480\/?18643",
                "title": "occaecati labore facilis",
                "sub_title": "necessitatibus similique ad",
                "describe": "Repellendus sint modi architecto veritatis atque. Quibusdam dignissimos et non id atque. Magnam aspernatur et qui et qui incidunt a tempora. Esse qui neque fugit dolorem corporis minima."
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
                    "name": "面膜",
                    "slug": "eligendi-tempore",
                    "parent_id": 15,
                    "level": 1
                },
                {
                    "id": 2,
                    "name": "精油",
                    "slug": "ex-consectetur",
                    "parent_id": 6,
                    "level": 1
                },
                {
                    "id": 3,
                    "name": "BB霜",
                    "slug": "eos-cumque",
                    "parent_id": 28,
                    "level": 1
                },
                {
                    "id": 4,
                    "name": "唇膏",
                    "slug": "qui-praesentium",
                    "parent_id": 19,
                    "level": 1
                },
                {
                    "id": 5,
                    "name": "睫毛膏",
                    "slug": "eveniet-repudiandae",
                    "parent_id": 29,
                    "level": 1
                },
                {
                    "id": 6,
                    "name": "腮红",
                    "slug": "laborum-sed",
                    "parent_id": 27,
                    "level": 1
                },
                {
                    "id": 7,
                    "name": "面膜",
                    "slug": "deleniti-doloribus",
                    "parent_id": 23,
                    "level": 1
                },
                {
                    "id": 8,
                    "name": "洁面",
                    "slug": "cupiditate-illum",
                    "parent_id": 29,
                    "level": 1
                },
                {
                    "id": 9,
                    "name": "睫毛膏",
                    "slug": "tempore-accusantium",
                    "parent_id": 22,
                    "level": 1
                },
                {
                    "id": 10,
                    "name": "爽肤水",
                    "slug": "qui-rerum",
                    "parent_id": 4,
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
    -d '{"name":"aspernatur","username":"dolor","password":"in","password_confirmation":"corporis","code":"vero","captcha_key":"quo","captcha_code":"doloremque","password_question_id":5,"password_answer":"in"}'

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
    "name": "aspernatur",
    "username": "dolor",
    "password": "in",
    "password_confirmation": "corporis",
    "code": "vero",
    "captcha_key": "quo",
    "captcha_code": "doloremque",
    "password_question_id": 5,
    "password_answer": "in"
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
    -G "http://localhost/api/user_question?username=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_question"
);

let params = {
    "username": "qui",
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
        "username": "qui"
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
    -d '{"username":"ea","password":"vero"}'

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
    "username": "ea",
    "password": "vero"
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
    "http://localhost/api/password_reset?username=velit&password_question_id=totam&password_answer=nulla&password=quaerat&password_confirmation=ducimus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/password_reset"
);

let params = {
    "username": "velit",
    "password_question_id": "totam",
    "password_answer": "nulla",
    "password": "quaerat",
    "password_confirmation": "ducimus",
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
    -d '{"oldPassword":"quidem","newPassword":"et","newPassword_confirmation":"tempora"}'

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
    "oldPassword": "quidem",
    "newPassword": "et",
    "newPassword_confirmation": "tempora"
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
    -G "http://localhost/api/orders?page=sunt&page_limit=suscipit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orders"
);

let params = {
    "page": "sunt",
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
    -G "http://localhost/api/order_details/1?no=ratione" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/order_details/1"
);

let params = {
    "no": "ratione",
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
    -d '{"address_id":"ipsa","remark":"et"}'

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
    "address_id": "ipsa",
    "remark": "et"
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
    -d '{"no":15}'

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
    "no": 15
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
    "http://localhost/api/orders/cancel?no=atque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orders/cancel"
);

let params = {
    "no": "atque",
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
                "product_category_id": 7,
                "product_name": "黑钻肌光精华",
                "product_name_en": "sed maiores illum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?96251",
                "slug": "nihil-vitae",
                "short_description": "Labore eveniet aut voluptatem.",
                "short_description_en": "Repellendus corrupti eaque quia doloremque reiciendis culpa ut. Nisi doloremque assumenda dolorum et. Eligendi repellat reiciendis rerum non. Dolorem amet deserunt quidem perferendis facilis.",
                "price": "8692.00",
                "sale_price": "0.01",
                "stock": 485,
                "spec": "150 ml \/ 2.0 oz",
                "seo_title": "et fugiat qui",
                "seo_keyword": "maxime",
                "seo_description": "Neque dolores est eveniet est harum.",
                "benefit": "Possimus ut voluptatem perspiciatis ipsam debitis explicabo veniam. Repudiandae minus magni et repellat est rerum numquam. Illum et ipsa qui iste officia voluptatem aut qui. Voluptas nihil non et fuga.",
                "benefit_en": "Consequuntur sunt repellendus ea aut est magni. Id eum dignissimos voluptates quod sequi commodi corrupti. A libero possimus soluta possimus.",
                "tech_description": "Occaecati impedit et maxime est et animi. Eum quas delectus ab aliquam expedita sit ad. Repellat quidem sit fugiat ex.",
                "tech_description_en": "Mollitia fugiat veniam consequatur minus dolor est blanditiis. Commodi laborum labore eaque voluptas et commodi consequatur ipsa. Laudantium saepe deserunt architecto laboriosam neque sed doloribus corporis. Quia quaerat itaque quos expedita cupiditate eligendi.",
                "description": "Delectus saepe magnam possimus dicta quisquam quo qui. Voluptatibus nostrum sint quis maxime. Dolor cupiditate voluptatem est et eum veritatis earum.",
                "description_en": "Quia excepturi unde in molestiae nihil veritatis. Quod debitis in illo odit vitae et facere minus. Nam similique ducimus repudiandae neque assumenda pariatur odio dolores. Voluptas laborum libero id qui sapiente.",
                "usage": "Aut non blanditiis unde iusto vel omnis. Quia tempora nostrum deleniti ratione molestiae recusandae quidem. Ipsum consequuntur in dolorum mollitia molestiae nihil. Eum ut impedit quaerat aut quae quidem odit aliquid.",
                "usage_en": "Sit hic ea dolorum iure corrupti. Enim voluptates placeat maxime enim saepe. Mollitia qui sequi qui reprehenderit. Laboriosam distinctio dignissimos voluptas.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?17038",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?87863",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?54230",
                "product_video": null,
                "status": 2,
                "rating": 3.07,
                "sold_count": 4083,
                "review_count": 2404,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-30 04:59:10",
                "updated_at": "2020-09-26 15:40:51",
                "product_category": {
                    "id": 7,
                    "name": "面膜",
                    "slug": "deleniti-doloribus",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?61726",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?42777",
                    "title": "occaecati cum culpa",
                    "title_en": "assumenda suscipit enim",
                    "sub_title": "necessitatibus repudiandae ut",
                    "describe": "Libero ut rerum magnam itaque aperiam consectetur iure. Asperiores tenetur consequuntur ratione sed quis enim. Soluta blanditiis dolorem reiciendis nobis aut doloremque.",
                    "describe_en": "Consectetur et a sequi iusto aliquam nulla. Atque sapiente quisquam consequatur alias qui. Tempora dolor similique reprehenderit eos. Labore deserunt eum odit rerum.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?41648",
                    "type": 1,
                    "parent_id": 23,
                    "level": 1,
                    "created_at": "2020-09-17 17:12:34",
                    "updated_at": "2020-10-05 22:52:02"
                }
            },
            {
                "id": 2,
                "product_category_id": 7,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "facere porro autem",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?19635",
                "slug": "error-quo",
                "short_description": "Qui voluptate eveniet ut et.",
                "short_description_en": "Error qui et non illum non sed. Error et odit iusto cupiditate eius tempora commodi quae. Exercitationem est id assumenda qui impedit dolor velit. Qui quaerat nihil fuga quasi aperiam fugit quidem. Libero quia molestiae dignissimos maxime ipsam.",
                "price": "1407.00",
                "sale_price": "0.01",
                "stock": 890,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "est nihil temporibus",
                "seo_keyword": "placeat",
                "seo_description": "Dolorem aliquid et voluptates quis quisquam quia.",
                "benefit": "Magnam eum voluptate tempore porro ab et temporibus at. Et facere sit odio ea odio sint. Eius quia iste velit distinctio. Odio maiores voluptatibus et maiores eos excepturi quo.",
                "benefit_en": "Unde unde odio est repellat pariatur sed. Est sed distinctio explicabo aut. Nam ducimus quibusdam libero est modi. Dicta quae autem molestiae et facilis error et neque.",
                "tech_description": "Perferendis consequatur sed sit sint dolorum accusantium ratione. Reprehenderit dolorum ab doloribus nulla laboriosam ad qui sit. Quo voluptates at earum in sit quis. Eos accusamus harum officiis.",
                "tech_description_en": "Excepturi excepturi corrupti qui doloribus ducimus maiores. Omnis incidunt explicabo illum veniam velit molestiae unde. Earum ex repellat dolorem ea repellendus fugit beatae.",
                "description": "Iusto omnis quidem eos est. Voluptas neque in ut. Et odio et eos ea nesciunt ex quis. Dicta qui ea consequatur sunt quaerat ratione harum.",
                "description_en": "Autem culpa sed corrupti necessitatibus qui autem. Sed dolor repellat soluta sit soluta sunt. Recusandae at veniam deleniti aut.",
                "usage": "Facilis dolorem ratione placeat aut ut molestiae rerum. Provident enim suscipit non perspiciatis. Facere aut aut ducimus modi omnis harum.",
                "usage_en": "Sequi sit quaerat delectus dignissimos quod soluta quod. Corporis quia aliquam quisquam beatae aspernatur autem dolores. Deserunt quo ipsam minus.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?32916",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?29374",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?80931",
                "product_video": null,
                "status": 2,
                "rating": 6.18,
                "sold_count": 7637,
                "review_count": 7583,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-10-06 21:13:54",
                "updated_at": "2020-09-23 18:10:04",
                "product_category": {
                    "id": 7,
                    "name": "面膜",
                    "slug": "deleniti-doloribus",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?61726",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?42777",
                    "title": "occaecati cum culpa",
                    "title_en": "assumenda suscipit enim",
                    "sub_title": "necessitatibus repudiandae ut",
                    "describe": "Libero ut rerum magnam itaque aperiam consectetur iure. Asperiores tenetur consequuntur ratione sed quis enim. Soluta blanditiis dolorem reiciendis nobis aut doloremque.",
                    "describe_en": "Consectetur et a sequi iusto aliquam nulla. Atque sapiente quisquam consequatur alias qui. Tempora dolor similique reprehenderit eos. Labore deserunt eum odit rerum.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?41648",
                    "type": 1,
                    "parent_id": 23,
                    "level": 1,
                    "created_at": "2020-09-17 17:12:34",
                    "updated_at": "2020-10-05 22:52:02"
                }
            },
            {
                "id": 3,
                "product_category_id": 10,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "amet rerum ab",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?40725",
                "slug": "vero-porro",
                "short_description": "Quos eum labore eum.",
                "short_description_en": "Eveniet ut necessitatibus cupiditate nam aliquid blanditiis. Enim ea ut est nesciunt. Quia voluptates occaecati aut et.",
                "price": "461.00",
                "sale_price": "0.01",
                "stock": 853,
                "spec": "50 ml \/ 1.7 fl. oz",
                "seo_title": "fugit similique aperiam",
                "seo_keyword": "aliquam",
                "seo_description": "Vitae voluptates similique consequuntur delectus.",
                "benefit": "Fuga aut sit error totam illum tempore. Praesentium numquam illo quae provident voluptas sed alias. Molestiae alias ut hic officia nisi voluptatum nemo. Voluptatibus commodi error optio est corporis. Molestiae distinctio eos nulla quia.",
                "benefit_en": "Nemo quisquam odio ea exercitationem. Officia voluptatibus cupiditate est quos sint. Et autem qui odio et exercitationem deserunt doloribus.",
                "tech_description": "Enim dolor explicabo veniam nisi eum. Libero sunt enim itaque quibusdam. Rerum aut eum cupiditate illum dolorem tempora sunt. Expedita deleniti reiciendis soluta eius.",
                "tech_description_en": "Voluptas neque odio asperiores. Impedit ipsa et libero assumenda. Et odio dolore nihil id. Nemo non rerum eligendi qui iure praesentium.",
                "description": "Excepturi corporis quod numquam iure accusantium ut. Et eius ut distinctio id tempora ipsa vel odit.",
                "description_en": "Est aut aperiam vero. Aut earum quaerat saepe dolor voluptate eligendi. Qui nesciunt doloremque consequuntur. Similique et incidunt assumenda perspiciatis.",
                "usage": "Vel dolor doloribus asperiores ut fugiat harum aut. Dolore qui dolorem voluptatem quibusdam modi cum quis. Alias voluptatem officia molestiae officia qui magni voluptatem. Non dolore soluta omnis rerum.",
                "usage_en": "Sed aut nulla aliquam. Veritatis mollitia dolores dicta et nemo eum. Qui sunt sed ea eum tempore repudiandae.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?24825",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?38683",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?98946",
                "product_video": null,
                "status": 1,
                "rating": 9.3,
                "sold_count": 3726,
                "review_count": 1751,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-20 17:19:17",
                "updated_at": "2020-09-14 13:33:23",
                "product_category": {
                    "id": 10,
                    "name": "爽肤水",
                    "slug": "qui-rerum",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?88485",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?71894",
                    "title": "totam incidunt officia",
                    "title_en": "quasi iste nihil",
                    "sub_title": "repudiandae natus et",
                    "describe": "Vitae est dolorem beatae velit. Ipsa aut blanditiis veniam necessitatibus nulla. Quaerat ab quas quis qui nihil consequuntur dignissimos. Est voluptatum commodi adipisci atque.",
                    "describe_en": "Nisi placeat consectetur est et aut consequatur autem. Eius cumque ex quis quo vel occaecati itaque. Consequatur sit totam est iste. Ea et nobis quia totam.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?89843",
                    "type": 1,
                    "parent_id": 4,
                    "level": 1,
                    "created_at": "2020-10-02 10:00:11",
                    "updated_at": "2020-09-21 18:32:27"
                }
            },
            {
                "id": 4,
                "product_category_id": 5,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "dignissimos suscipit non",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?28779",
                "slug": "et-laborum",
                "short_description": "Tenetur et earum praesentium.",
                "short_description_en": "Autem sed vel eos alias maiores et dolor assumenda. Tenetur esse tempora maxime voluptatem et sint fuga. Repellendus qui mollitia ut sed omnis at ad.",
                "price": "8765.00",
                "sale_price": "0.01",
                "stock": 118,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "maiores nemo aut",
                "seo_keyword": "explicabo",
                "seo_description": "Natus sed dignissimos aliquid et facilis modi.",
                "benefit": "Molestias dolorem tempore quis laudantium ut ducimus sint. Consequatur eaque consequatur odio deleniti qui sunt. Quas qui consequatur veritatis iusto id deleniti dolores. Sint rerum vel ut amet ea voluptates ullam.",
                "benefit_en": "Iure inventore dolorum autem asperiores et delectus magnam eum. Officiis rerum cumque optio aspernatur. Temporibus repellendus eveniet sed nihil mollitia. Totam dolor nostrum nesciunt labore at suscipit natus.",
                "tech_description": "Cupiditate itaque est voluptas sit dolores laudantium. Accusantium et est est necessitatibus quidem fuga. Reprehenderit ut soluta aliquam commodi et.",
                "tech_description_en": "Qui minima soluta consequatur eligendi. Totam qui vel cum aut laudantium pariatur. In molestiae voluptas et possimus fugit consequuntur sapiente. Esse eos rerum excepturi est repudiandae.",
                "description": "Magni qui magnam sed soluta. Aut culpa ut ut aspernatur eos tempora sit. Cumque cumque ut illum aliquid. Quaerat harum saepe architecto quis.",
                "description_en": "Alias dignissimos labore hic iusto quia itaque voluptas. Error sed ullam libero iure facilis. Voluptatum qui debitis doloribus.",
                "usage": "Voluptatem libero atque officiis iusto quia. Dolore animi explicabo ullam. Vel error consequatur culpa consequuntur aut repellendus ipsa. Consequatur dolores animi eligendi iusto ad inventore ex.",
                "usage_en": "Ipsa excepturi dolores beatae mollitia consectetur. Omnis cupiditate voluptatem adipisci libero similique quos sed. Voluptatum quia cupiditate explicabo provident sit sed consequatur. Velit voluptatem natus quis enim quasi. Dolores quos sit qui repellat accusantium.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?88751",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?74195",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?37282",
                "product_video": null,
                "status": 3,
                "rating": 6.39,
                "sold_count": 8791,
                "review_count": 7238,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-17 05:42:34",
                "updated_at": "2020-09-22 08:33:33",
                "product_category": {
                    "id": 5,
                    "name": "睫毛膏",
                    "slug": "eveniet-repudiandae",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?13875",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?51185",
                    "title": "vero incidunt quia",
                    "title_en": "et veniam recusandae",
                    "sub_title": "voluptates ut aut",
                    "describe": "Iure voluptas qui quo nemo. Perferendis illo quisquam error dolore ipsum ipsam est. Quod beatae unde repellendus et reiciendis.",
                    "describe_en": "Et at id maiores illo illo et quis exercitationem. Excepturi enim deleniti id in. Saepe debitis cumque eveniet facilis. Sint aut in enim aut minus et voluptas.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?18488",
                    "type": 1,
                    "parent_id": 29,
                    "level": 1,
                    "created_at": "2020-09-10 12:10:44",
                    "updated_at": "2020-09-17 10:05:59"
                }
            },
            {
                "id": 5,
                "product_category_id": 7,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "quia et vero",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?88643",
                "slug": "ut-id",
                "short_description": "Voluptatum modi magnam earum quia culpa qui.",
                "short_description_en": "Ea hic dolorem perspiciatis sint harum id laudantium. Voluptatem ipsum molestiae similique et velit suscipit porro. Nisi sint dolores provident nihil. Enim eum dolore commodi et quibusdam culpa itaque quis.",
                "price": "3423.00",
                "sale_price": "0.01",
                "stock": 48,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "est architecto voluptatum",
                "seo_keyword": "delectus",
                "seo_description": "Et nam praesentium harum omnis voluptates.",
                "benefit": "Maiores et iste sit voluptas optio non. Eum aliquid minima est aliquam. Sed veniam vero ex quia ut. Exercitationem dolor cumque sunt quia in dolorem qui.",
                "benefit_en": "Laborum sequi nihil amet itaque a. Et quae voluptatibus repellendus quia. Eos commodi distinctio facere.",
                "tech_description": "Consectetur eos placeat error quidem ut tempore. Nam accusantium totam repudiandae perferendis. Sint sed quam qui facilis.",
                "tech_description_en": "Rem autem a ullam dolores. Eos eius sequi quos sunt. Omnis ullam aut dolor nulla.",
                "description": "Eaque dolore qui fuga molestias. Ut odit numquam possimus necessitatibus explicabo. Optio suscipit qui tempore corrupti est impedit. Totam aspernatur maxime doloremque sapiente dolores.",
                "description_en": "Repudiandae iusto est corporis eius sed doloribus odio. Et vel ut dolore et. Et nemo provident velit distinctio hic nihil voluptatem.",
                "usage": "Nostrum laudantium quia ratione dolorem et. Qui placeat ut quia nemo ut. Et nemo repudiandae facere corrupti. Ea dignissimos voluptas nisi voluptatibus.",
                "usage_en": "Laboriosam est alias deleniti et dolorem dolorum. Similique voluptatem esse dolores. Non molestiae similique minima voluptatum. Sunt sunt eos dolore officiis excepturi distinctio.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?38179",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?78250",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?54810",
                "product_video": null,
                "status": 3,
                "rating": 7.71,
                "sold_count": 3128,
                "review_count": 4525,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-12 20:05:47",
                "updated_at": "2020-09-14 18:54:10",
                "product_category": {
                    "id": 7,
                    "name": "面膜",
                    "slug": "deleniti-doloribus",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?61726",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?42777",
                    "title": "occaecati cum culpa",
                    "title_en": "assumenda suscipit enim",
                    "sub_title": "necessitatibus repudiandae ut",
                    "describe": "Libero ut rerum magnam itaque aperiam consectetur iure. Asperiores tenetur consequuntur ratione sed quis enim. Soluta blanditiis dolorem reiciendis nobis aut doloremque.",
                    "describe_en": "Consectetur et a sequi iusto aliquam nulla. Atque sapiente quisquam consequatur alias qui. Tempora dolor similique reprehenderit eos. Labore deserunt eum odit rerum.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?41648",
                    "type": 1,
                    "parent_id": 23,
                    "level": 1,
                    "created_at": "2020-09-17 17:12:34",
                    "updated_at": "2020-10-05 22:52:02"
                }
            },
            {
                "id": 6,
                "product_category_id": 10,
                "product_name": "黑钻焕肤水",
                "product_name_en": "dolor ipsam neque",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?93267",
                "slug": "officiis-ut",
                "short_description": "Distinctio placeat asperiores ut.",
                "short_description_en": "Ab similique similique vitae et porro culpa. Est vel molestias maxime iure culpa est quasi aliquid. Possimus non veniam enim. Provident quidem harum et porro.",
                "price": "997.00",
                "sale_price": "0.01",
                "stock": 577,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "nulla qui nisi",
                "seo_keyword": "rerum",
                "seo_description": "Numquam odit dolorum dolores.",
                "benefit": "Delectus vero et amet quos placeat. Alias deserunt vero qui.",
                "benefit_en": "Sunt repellendus vel aperiam temporibus pariatur. Animi eum quo aut. Qui sed architecto ut asperiores minus et consequatur. Soluta vel ut eligendi ipsam voluptatibus distinctio debitis. Dolorum quae consequuntur doloribus totam magnam quia.",
                "tech_description": "Tempore qui doloremque provident delectus consequatur ut quis. Rerum consequuntur voluptatem iure sunt magni et nesciunt. Atque maxime molestiae sit ipsa minima qui nostrum.",
                "tech_description_en": "Quis doloribus nulla dolore ullam autem dolor ut modi. Aut voluptatibus ab ab sint nemo a. Quia voluptas placeat repudiandae dolor ducimus quia est. Qui velit minus deserunt doloribus dolor quod.",
                "description": "In ea atque omnis aut qui qui omnis cupiditate. Deleniti quaerat qui molestiae facilis consequuntur placeat qui. Sit officia repellendus quo facilis. Adipisci dolores voluptates placeat molestias eius rerum aut.",
                "description_en": "Dolor harum placeat ab dolorem earum hic. Consequatur sapiente et at corrupti. Corporis aspernatur dolor quidem suscipit aut.",
                "usage": "Voluptatem aspernatur voluptas ea tempora in. Optio consequuntur temporibus culpa eaque nostrum nihil. Aspernatur est asperiores modi expedita pariatur nihil ipsa.",
                "usage_en": "Nostrum enim eos dolor deleniti. Sed quas alias sint esse magni. Eaque earum nihil ipsum et et nihil animi.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?31431",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?41467",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?62538",
                "product_video": null,
                "status": 2,
                "rating": 9.84,
                "sold_count": 2759,
                "review_count": 4702,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-17 22:18:41",
                "updated_at": "2020-09-15 19:23:20",
                "product_category": {
                    "id": 10,
                    "name": "爽肤水",
                    "slug": "qui-rerum",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?88485",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?71894",
                    "title": "totam incidunt officia",
                    "title_en": "quasi iste nihil",
                    "sub_title": "repudiandae natus et",
                    "describe": "Vitae est dolorem beatae velit. Ipsa aut blanditiis veniam necessitatibus nulla. Quaerat ab quas quis qui nihil consequuntur dignissimos. Est voluptatum commodi adipisci atque.",
                    "describe_en": "Nisi placeat consectetur est et aut consequatur autem. Eius cumque ex quis quo vel occaecati itaque. Consequatur sit totam est iste. Ea et nobis quia totam.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?89843",
                    "type": 1,
                    "parent_id": 4,
                    "level": 1,
                    "created_at": "2020-10-02 10:00:11",
                    "updated_at": "2020-09-21 18:32:27"
                }
            },
            {
                "id": 7,
                "product_category_id": 6,
                "product_name": "黑钻肌光精华",
                "product_name_en": "consequuntur officia et",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?18519",
                "slug": "soluta-voluptatem",
                "short_description": "Eligendi tempora rerum impedit.",
                "short_description_en": "Omnis hic repudiandae quis nostrum ullam. Voluptatibus doloremque corrupti repellendus qui est. Laudantium maiores fugiat aut. Id voluptatum voluptatibus soluta.",
                "price": "9778.00",
                "sale_price": "0.01",
                "stock": 957,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "quia repudiandae fugiat",
                "seo_keyword": "adipisci",
                "seo_description": "Atque est earum reprehenderit quis.",
                "benefit": "Iure rerum voluptatem inventore minima commodi. Tempore hic minus ut non enim praesentium. Sed dignissimos consequatur libero.",
                "benefit_en": "Dolorem possimus nesciunt dolores sit suscipit. Similique dolore qui aut ea consequatur eveniet.",
                "tech_description": "Ipsam molestiae ipsa nemo quia et voluptas. Dolorem dolor consequatur nihil corrupti cum et. Maxime delectus eligendi dolores id.",
                "tech_description_en": "Temporibus sit qui error reprehenderit esse distinctio. Quo autem rem id dignissimos. Provident dolorem voluptate omnis dolorem. Quis voluptatem dolorem quam molestias fugit dignissimos nihil.",
                "description": "Aut vitae perferendis eum culpa. Nesciunt omnis hic voluptates sed fugit ex. Fugiat sed officia numquam sit labore et. Eligendi exercitationem nihil ut veritatis saepe nobis et.",
                "description_en": "Repudiandae iure molestias tempora quae quaerat. Consequatur rerum et voluptas dolores et quas veniam. Aliquam quibusdam delectus soluta quasi.",
                "usage": "Minima minima eum rerum quas nam. Doloribus odit ut dolorem vel quis. Voluptatem odit aliquid aut et dignissimos.",
                "usage_en": "Dolorem quis corrupti eaque ea fugit quia nam aliquam. Sequi corrupti saepe eveniet expedita voluptatibus fugit vitae. Aut unde accusamus adipisci error. Nam quidem ipsa quia animi eos quisquam ipsum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?57391",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?81036",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?22623",
                "product_video": null,
                "status": 1,
                "rating": 3.44,
                "sold_count": 9698,
                "review_count": 4820,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-10-03 20:43:44",
                "updated_at": "2020-09-19 06:01:10",
                "product_category": {
                    "id": 6,
                    "name": "腮红",
                    "slug": "laborum-sed",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?64934",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?72962",
                    "title": "dolorem adipisci dolor",
                    "title_en": "assumenda reiciendis iste",
                    "sub_title": "et veniam ipsa",
                    "describe": "Rem iste quas deserunt tempore voluptatibus esse sed. Sequi voluptatibus quibusdam error voluptates amet. Vero incidunt deserunt facilis accusantium accusamus voluptatem.",
                    "describe_en": "Ex consectetur iusto sed. Quae quam dolores id. Quas commodi sit reiciendis. Suscipit asperiores tempore sed nemo.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?87736",
                    "type": 1,
                    "parent_id": 27,
                    "level": 1,
                    "created_at": "2020-09-09 00:25:46",
                    "updated_at": "2020-10-07 21:45:50"
                }
            },
            {
                "id": 8,
                "product_category_id": 1,
                "product_name": "臻爱铂金",
                "product_name_en": "quod deserunt molestiae",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?31259",
                "slug": "ratione-fugiat",
                "short_description": "Harum impedit hic veniam.",
                "short_description_en": "Placeat aliquam animi provident assumenda consequuntur et. Voluptatibus quos sed officia sapiente ut quis laboriosam. Modi quidem assumenda ut soluta soluta quia magni aut.",
                "price": "4229.00",
                "sale_price": "0.01",
                "stock": 256,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "voluptatem maxime sunt",
                "seo_keyword": "doloremque",
                "seo_description": "Rerum voluptatem voluptates officia.",
                "benefit": "Qui sunt vitae illum dolorum. Velit ullam minima dolor doloribus recusandae veniam consequuntur dolorem. Beatae veritatis deleniti rerum reprehenderit numquam.",
                "benefit_en": "Aut dolorem ex aut asperiores molestias. Culpa ut atque beatae in mollitia quia accusamus consectetur.",
                "tech_description": "Exercitationem perferendis rem possimus consectetur et quod tempore. Recusandae id accusantium eveniet delectus maiores. Et nobis at est dolores sint. Enim non esse sit mollitia facere.",
                "tech_description_en": "Qui molestiae quibusdam dolores dolor non. Repudiandae quas non repudiandae nulla ipsam eveniet id blanditiis. Enim suscipit inventore quasi ipsa in animi.",
                "description": "Exercitationem quibusdam soluta inventore ut sapiente. Et repudiandae enim voluptates distinctio tempora et et.",
                "description_en": "Voluptas sunt voluptatem autem nemo omnis quae. Ea architecto dicta autem ea. Autem ad vel ut sunt ab aut.",
                "usage": "Non nemo sint doloremque doloribus adipisci et beatae. Pariatur porro sunt nisi sed voluptas. Fuga mollitia velit inventore explicabo officia quia fugit.",
                "usage_en": "Perspiciatis a sed in vel suscipit qui a. Aut dignissimos nesciunt qui dolores vel adipisci saepe at. Ducimus nihil voluptatem ut neque quia rerum similique nihil. Voluptatem qui enim dolor recusandae et temporibus nobis cupiditate.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?47361",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?51889",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?51044",
                "product_video": null,
                "status": 3,
                "rating": 8.49,
                "sold_count": 3650,
                "review_count": 1927,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-28 17:14:30",
                "updated_at": "2020-09-25 13:18:28",
                "product_category": {
                    "id": 1,
                    "name": "面膜",
                    "slug": "eligendi-tempore",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?71728",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?66401",
                    "title": "eum natus maiores",
                    "title_en": "quidem nulla explicabo",
                    "sub_title": "quos cumque explicabo",
                    "describe": "Odio reiciendis illum unde placeat magnam. Rerum veniam occaecati qui quisquam. Et sed est aut ut quis et rerum. Accusantium aperiam veritatis vel.",
                    "describe_en": "Et modi nulla praesentium ad sit. Voluptatem delectus dolorum voluptates nam. Iure ut hic sunt.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?93991",
                    "type": 1,
                    "parent_id": 15,
                    "level": 1,
                    "created_at": "2020-10-04 00:04:52",
                    "updated_at": "2020-09-15 18:39:14"
                }
            },
            {
                "id": 9,
                "product_category_id": 5,
                "product_name": "臻爱铂金",
                "product_name_en": "qui consectetur aliquid",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?52768",
                "slug": "ex-minus",
                "short_description": "Minus quos quos dolor assumenda fugit quam.",
                "short_description_en": "Laboriosam non impedit adipisci enim quas neque. Excepturi sit ullam officiis nulla animi debitis aut. Minima cupiditate sed provident qui.",
                "price": "460.00",
                "sale_price": "0.01",
                "stock": 236,
                "spec": "50 ml \/ 1.7 fl. oz",
                "seo_title": "aut sed voluptatem",
                "seo_keyword": "possimus",
                "seo_description": "Officiis commodi exercitationem eum quas.",
                "benefit": "Magnam consequatur exercitationem ut. Qui cupiditate est ea nulla aut dolor. Cumque esse eaque nulla harum perspiciatis labore delectus.",
                "benefit_en": "Ut maxime a rerum exercitationem placeat. Est debitis est fugit animi. Explicabo blanditiis quo voluptatibus quibusdam consequuntur. Id eaque perspiciatis repellat ut exercitationem deserunt dolor vel.",
                "tech_description": "Ipsum sunt sunt recusandae adipisci pariatur officia nemo. Dolorem ea sunt dignissimos facere quia assumenda. Nihil qui qui dolor earum. Praesentium blanditiis iusto sint consequatur quia tenetur.",
                "tech_description_en": "Consequatur nulla similique natus non rerum sequi. Qui architecto aspernatur quas maiores consequatur. Expedita ut dolorem cumque.",
                "description": "Quo doloremque provident consequatur earum autem suscipit. Est voluptatem molestias quam voluptatem corrupti. Officiis consectetur sed quibusdam eos dignissimos. Tempore non nesciunt explicabo sed.",
                "description_en": "Laboriosam et rerum voluptates magni labore quisquam tempora. Autem eius ipsa quisquam officiis voluptatem alias. Autem commodi aut autem fuga. Praesentium fuga quis nulla quia autem voluptatem.",
                "usage": "Dolor velit vero earum facere. Et temporibus doloremque iste odit non aperiam. Molestias odit et corporis porro ratione id. Quam vero soluta dolor aut dolorem. Ut sapiente nesciunt quia consequuntur consectetur deserunt repellat.",
                "usage_en": "Odit et et et doloremque. Occaecati dolore quidem perspiciatis quisquam ea dolorum. Rerum ut omnis maxime distinctio qui. Quia quis ut et aut vero aut aut dolorem.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?85662",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?98889",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?72222",
                "product_video": null,
                "status": 2,
                "rating": 3.9,
                "sold_count": 5045,
                "review_count": 2644,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-15 20:00:02",
                "updated_at": "2020-09-25 06:57:22",
                "product_category": {
                    "id": 5,
                    "name": "睫毛膏",
                    "slug": "eveniet-repudiandae",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?13875",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?51185",
                    "title": "vero incidunt quia",
                    "title_en": "et veniam recusandae",
                    "sub_title": "voluptates ut aut",
                    "describe": "Iure voluptas qui quo nemo. Perferendis illo quisquam error dolore ipsum ipsam est. Quod beatae unde repellendus et reiciendis.",
                    "describe_en": "Et at id maiores illo illo et quis exercitationem. Excepturi enim deleniti id in. Saepe debitis cumque eveniet facilis. Sint aut in enim aut minus et voluptas.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?18488",
                    "type": 1,
                    "parent_id": 29,
                    "level": 1,
                    "created_at": "2020-09-10 12:10:44",
                    "updated_at": "2020-09-17 10:05:59"
                }
            },
            {
                "id": 10,
                "product_category_id": 8,
                "product_name": "鱼子精华",
                "product_name_en": "atque corporis minus",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?37667",
                "slug": "atque-odio",
                "short_description": "Consectetur non sed rerum at.",
                "short_description_en": "Placeat impedit nihil sapiente suscipit sapiente laboriosam aperiam. Autem error minus sed et quibusdam blanditiis enim. Dolorem ad qui quia sed eius dignissimos molestias.",
                "price": "5232.00",
                "sale_price": "0.01",
                "stock": 41,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "molestiae voluptate officiis",
                "seo_keyword": "consequuntur",
                "seo_description": "Atque aut perferendis odit aperiam impedit.",
                "benefit": "Tempora aut voluptatibus unde. Eum doloribus inventore ad quaerat consequatur est eos. Est aliquam eligendi asperiores commodi repellat sint non doloremque. Sit mollitia ut temporibus fugit. Quidem molestias et ut sequi ducimus quisquam.",
                "benefit_en": "Nostrum ut sit qui id facere. Architecto cum eum accusamus maiores aliquam nostrum ut. Suscipit veniam ut et possimus sit.",
                "tech_description": "Reiciendis ea unde impedit fugiat. Libero perspiciatis accusantium recusandae enim. Dolore quis omnis et doloribus dignissimos ut aut ipsam. Deleniti provident magni id.",
                "tech_description_en": "Quis voluptas beatae voluptate quis praesentium. Consequatur ut nesciunt pariatur rerum. Inventore officia provident ullam consequatur. Laboriosam assumenda cupiditate numquam corporis commodi deserunt quia.",
                "description": "Iste aut veniam omnis ad reiciendis dignissimos. Nesciunt vel molestiae perspiciatis cumque cumque facere voluptatibus. Quo sunt atque neque natus ab debitis eius.",
                "description_en": "Amet in est et eius voluptatum. Omnis placeat omnis nemo voluptatum aliquid. Id minus et iusto provident.",
                "usage": "Repudiandae alias deserunt excepturi aspernatur modi dignissimos vero. Voluptas qui et quos et minima et illum. Dolorum est occaecati nam rerum et animi rerum debitis. Eos distinctio corrupti sed aut vitae voluptates.",
                "usage_en": "Tenetur sit facilis possimus sunt. Facere praesentium nihil et aperiam commodi culpa. Fugit aspernatur ab similique tempore qui voluptatem. Et voluptas sed harum quaerat inventore omnis perferendis.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?74999",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?46810",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?41197",
                "product_video": null,
                "status": 1,
                "rating": 9.79,
                "sold_count": 6078,
                "review_count": 1695,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-20 00:30:46",
                "updated_at": "2020-09-08 23:16:50",
                "product_category": {
                    "id": 8,
                    "name": "洁面",
                    "slug": "cupiditate-illum",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?46462",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?87680",
                    "title": "ut at enim",
                    "title_en": "enim sit excepturi",
                    "sub_title": "autem sed voluptate",
                    "describe": "Voluptas rerum itaque explicabo ut magni. Quam eaque reiciendis eligendi quaerat voluptas ut quaerat. Molestiae voluptatem doloribus sunt sed ducimus eos. Esse optio sed culpa est.",
                    "describe_en": "Eveniet sit unde odio. Minus aut iusto ea assumenda. Ea sit quam eos omnis quia. Et qui est eaque sed voluptatibus ullam.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?97724",
                    "type": 1,
                    "parent_id": 29,
                    "level": 1,
                    "created_at": "2020-09-10 03:04:30",
                    "updated_at": "2020-09-13 21:20:42"
                }
            },
            {
                "id": 11,
                "product_category_id": 6,
                "product_name": "亮颜修护",
                "product_name_en": "quo nulla et",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?92273",
                "slug": "modi-ut",
                "short_description": "Accusantium quae facilis labore impedit.",
                "short_description_en": "Pariatur dolore quam voluptatem minus quo. Voluptatibus cupiditate eligendi nam qui. Ipsam voluptatum sapiente reprehenderit et.",
                "price": "6181.00",
                "sale_price": "0.01",
                "stock": 414,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "alias exercitationem nulla",
                "seo_keyword": "natus",
                "seo_description": "Incidunt reiciendis optio odio consequuntur autem nobis.",
                "benefit": "Aliquid id consequuntur doloremque voluptatem reiciendis. Nobis in molestiae omnis maxime aperiam recusandae.",
                "benefit_en": "Provident sint harum deserunt dolores rerum. Assumenda sunt error et. Eos sit doloremque qui nihil alias et voluptatem. Consectetur ut eligendi tempora recusandae cupiditate autem.",
                "tech_description": "Et qui commodi fugiat architecto veritatis accusamus. Debitis sed expedita sunt. Ea quos enim minima sed et.",
                "tech_description_en": "Labore id nam voluptas tempora. Vero molestiae voluptatem facilis suscipit. Molestias debitis quo est.",
                "description": "Voluptas veniam magni et quibusdam vero voluptatibus qui nisi. Illo voluptas sint in voluptate quo. Quae eius aliquid ea maiores distinctio est iusto.",
                "description_en": "Aperiam natus labore dolorum aut. Porro eius alias ea quo esse.",
                "usage": "Nihil cum adipisci quia ut quas velit debitis. Et voluptatum esse corporis vero distinctio atque. Odit doloribus consequatur ea deserunt tenetur fugiat laborum sint.",
                "usage_en": "Sed in ut odio facere eos. Vel molestiae ducimus ratione in deserunt et et. Exercitationem dolores repellat sit aspernatur molestiae.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?48269",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?49407",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?39002",
                "product_video": null,
                "status": 2,
                "rating": 5.8,
                "sold_count": 3414,
                "review_count": 3727,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-13 13:48:34",
                "updated_at": "2020-09-20 11:56:32",
                "product_category": {
                    "id": 6,
                    "name": "腮红",
                    "slug": "laborum-sed",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?64934",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?72962",
                    "title": "dolorem adipisci dolor",
                    "title_en": "assumenda reiciendis iste",
                    "sub_title": "et veniam ipsa",
                    "describe": "Rem iste quas deserunt tempore voluptatibus esse sed. Sequi voluptatibus quibusdam error voluptates amet. Vero incidunt deserunt facilis accusantium accusamus voluptatem.",
                    "describe_en": "Ex consectetur iusto sed. Quae quam dolores id. Quas commodi sit reiciendis. Suscipit asperiores tempore sed nemo.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?87736",
                    "type": 1,
                    "parent_id": 27,
                    "level": 1,
                    "created_at": "2020-09-09 00:25:46",
                    "updated_at": "2020-10-07 21:45:50"
                }
            },
            {
                "id": 12,
                "product_category_id": 7,
                "product_name": "亮颜修护",
                "product_name_en": "neque similique qui",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?21514",
                "slug": "dolor-provident",
                "short_description": "Quis aut voluptas aut molestias.",
                "short_description_en": "Omnis aut aspernatur sed est minus earum dolor deserunt. Eum aut fugit dolores voluptas enim et. Itaque et ipsam rerum eos repudiandae.",
                "price": "4977.00",
                "sale_price": "0.01",
                "stock": 484,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "et reiciendis ipsa",
                "seo_keyword": "a",
                "seo_description": "Earum saepe mollitia porro quas ut.",
                "benefit": "Soluta repudiandae numquam ea asperiores. Error sit aspernatur vero dicta omnis doloremque. Repellat ipsa iure omnis exercitationem porro sunt. Temporibus error recusandae exercitationem et.",
                "benefit_en": "Minus ut est qui earum vero excepturi. Est nemo nam sed qui occaecati quis dolor. Nihil sunt suscipit aut doloribus facere.",
                "tech_description": "Atque fuga voluptatibus tempore deleniti enim. Doloribus quisquam non sint sed. Possimus aut labore saepe atque voluptatibus reiciendis. Soluta eos rerum tempora laborum autem odio.",
                "tech_description_en": "Debitis iure porro rerum ratione dolorem quis iure. Doloremque laudantium animi qui unde. Illum enim sint beatae. Dolor debitis qui ut repellat.",
                "description": "Deserunt et natus suscipit est. Velit voluptatem similique dicta eos. Labore fuga id blanditiis odio quod expedita quos.",
                "description_en": "Molestias necessitatibus dicta quis consequatur nulla consectetur voluptas. Provident illo repellat doloremque molestiae dolorum est omnis amet. Quia quia qui quos qui nostrum odit in.",
                "usage": "Consequatur delectus id dignissimos dolor provident. Dolor ea repellendus facere autem qui. Voluptatibus dolorem unde ab ea.",
                "usage_en": "Quis hic accusamus aut expedita. Iusto quia quod pariatur et eius autem. Voluptatem sit delectus illo tempore. A explicabo eligendi quia ipsa aut accusamus. Dolor non sed laborum occaecati.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?10261",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?51229",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?73128",
                "product_video": null,
                "status": 3,
                "rating": 7.83,
                "sold_count": 4607,
                "review_count": 5619,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-27 07:53:01",
                "updated_at": "2020-09-26 02:17:05",
                "product_category": {
                    "id": 7,
                    "name": "面膜",
                    "slug": "deleniti-doloribus",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?61726",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?42777",
                    "title": "occaecati cum culpa",
                    "title_en": "assumenda suscipit enim",
                    "sub_title": "necessitatibus repudiandae ut",
                    "describe": "Libero ut rerum magnam itaque aperiam consectetur iure. Asperiores tenetur consequuntur ratione sed quis enim. Soluta blanditiis dolorem reiciendis nobis aut doloremque.",
                    "describe_en": "Consectetur et a sequi iusto aliquam nulla. Atque sapiente quisquam consequatur alias qui. Tempora dolor similique reprehenderit eos. Labore deserunt eum odit rerum.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?41648",
                    "type": 1,
                    "parent_id": 23,
                    "level": 1,
                    "created_at": "2020-09-17 17:12:34",
                    "updated_at": "2020-10-05 22:52:02"
                }
            },
            {
                "id": 13,
                "product_category_id": 5,
                "product_name": "鱼子精华",
                "product_name_en": "unde ipsam quod",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?37287",
                "slug": "eos-suscipit",
                "short_description": "Perspiciatis id et et quas at quia.",
                "short_description_en": "Magnam est debitis tempore assumenda voluptas et vero. Ullam quaerat doloribus facilis exercitationem dicta. Quia omnis facilis optio illo.",
                "price": "3739.00",
                "sale_price": "0.01",
                "stock": 659,
                "spec": "150 ml \/ 2.0 oz",
                "seo_title": "ut tempora provident",
                "seo_keyword": "excepturi",
                "seo_description": "Id nostrum labore eos.",
                "benefit": "Eum facilis corrupti dolorum est. Aut voluptatem mollitia vitae et voluptatem. Velit assumenda quia eum omnis vitae illum. Nulla optio itaque est.",
                "benefit_en": "Fugit non libero blanditiis qui quibusdam fuga. Nesciunt corrupti laborum est nemo deserunt est. Aliquid repellat iusto dolor et quisquam facilis. Recusandae atque incidunt doloremque molestias placeat magni magni.",
                "tech_description": "Quasi repellat ut voluptates. Fugit tempore rerum aut aliquam facere. Quasi labore aliquid architecto atque consequatur ut. Autem error voluptatibus consequuntur sint eligendi aperiam temporibus.",
                "tech_description_en": "Nam aut veritatis iusto id aut non voluptate. Minima explicabo id reiciendis distinctio. Asperiores iure ducimus dolor deserunt molestiae ab. Totam rem iure inventore ea id quasi accusantium.",
                "description": "Velit consectetur deleniti dolorem possimus et. Autem sed esse est et nesciunt exercitationem distinctio. Animi recusandae itaque aut culpa dolorem quia dolorem eligendi.",
                "description_en": "Molestiae vel voluptas ea quibusdam. Dolorem dolorem eos et a. Consequatur minima pariatur odit.",
                "usage": "Eveniet laborum et et earum sunt et. Eum molestias ex velit dolore voluptas consequatur. Nam officia expedita sit illo dolores. Ea sunt quis qui ratione.",
                "usage_en": "Voluptatum asperiores ipsam non laudantium velit officia quasi. Itaque sit nemo omnis sed repellat. Aliquid commodi rerum eveniet facere et animi. Voluptas laboriosam sit molestias est magnam est. Doloremque dolorum molestiae ipsam quo autem placeat.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?90642",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?12845",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?87169",
                "product_video": null,
                "status": 2,
                "rating": 6.76,
                "sold_count": 2311,
                "review_count": 2343,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-10-04 13:41:30",
                "updated_at": "2020-09-20 01:29:06",
                "product_category": {
                    "id": 5,
                    "name": "睫毛膏",
                    "slug": "eveniet-repudiandae",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?13875",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?51185",
                    "title": "vero incidunt quia",
                    "title_en": "et veniam recusandae",
                    "sub_title": "voluptates ut aut",
                    "describe": "Iure voluptas qui quo nemo. Perferendis illo quisquam error dolore ipsum ipsam est. Quod beatae unde repellendus et reiciendis.",
                    "describe_en": "Et at id maiores illo illo et quis exercitationem. Excepturi enim deleniti id in. Saepe debitis cumque eveniet facilis. Sint aut in enim aut minus et voluptas.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?18488",
                    "type": 1,
                    "parent_id": 29,
                    "level": 1,
                    "created_at": "2020-09-10 12:10:44",
                    "updated_at": "2020-09-17 10:05:59"
                }
            },
            {
                "id": 14,
                "product_category_id": 10,
                "product_name": "钻石焕活面膜",
                "product_name_en": "animi ut sunt",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?48453",
                "slug": "ut-porro",
                "short_description": "Est nihil autem omnis.",
                "short_description_en": "Laudantium non autem odio ut eum sit. Hic ipsum et unde aut molestias aut et aspernatur. Eum rerum dolorum recusandae inventore nostrum perferendis voluptas est.",
                "price": "4068.00",
                "sale_price": "0.01",
                "stock": 123,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "magni non qui",
                "seo_keyword": "suscipit",
                "seo_description": "Repellat libero accusantium aut.",
                "benefit": "Aut voluptatem cum dolores ut quo quo. Maiores quia doloribus modi ullam provident fugit harum. Veniam et provident laudantium expedita ut sed. Delectus magnam nihil nesciunt soluta fuga ut ea.",
                "benefit_en": "Atque omnis sit at voluptatibus atque qui. Id molestiae repellat dolorem tempore qui. Illo recusandae qui vitae et velit magni.",
                "tech_description": "Corrupti saepe et dolorem consequatur consequatur velit beatae. Et corporis consequatur aliquid rerum ipsam qui dolores. Voluptas tempora ipsa unde sed omnis commodi ipsam. Labore et sit similique ex.",
                "tech_description_en": "Aspernatur doloremque ut rem ea suscipit. Velit veritatis mollitia nesciunt et sed rem occaecati. Sunt repellendus nostrum eius atque recusandae. Assumenda tempora totam perspiciatis sit officiis cumque harum.",
                "description": "Iure neque ut culpa sit eos. Quo repellat qui sunt eaque. Animi quam nihil esse ea vel occaecati doloribus.",
                "description_en": "Fugit corporis officia recusandae natus. Et distinctio quasi et est. Quia voluptatem qui ducimus saepe sequi.",
                "usage": "Enim possimus ducimus porro numquam. Saepe animi nihil dolores nobis aut mollitia. Nulla voluptas aut eum non maiores eum et.",
                "usage_en": "Quos dolore et ab est maiores. Corrupti aut ratione praesentium quo et molestiae hic. Et repudiandae aperiam id alias. Aspernatur eligendi voluptatem expedita voluptates minus.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?85672",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?51921",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?67647",
                "product_video": null,
                "status": 3,
                "rating": 5.58,
                "sold_count": 6134,
                "review_count": 9791,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-16 12:18:02",
                "updated_at": "2020-09-10 02:42:52",
                "product_category": {
                    "id": 10,
                    "name": "爽肤水",
                    "slug": "qui-rerum",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?88485",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?71894",
                    "title": "totam incidunt officia",
                    "title_en": "quasi iste nihil",
                    "sub_title": "repudiandae natus et",
                    "describe": "Vitae est dolorem beatae velit. Ipsa aut blanditiis veniam necessitatibus nulla. Quaerat ab quas quis qui nihil consequuntur dignissimos. Est voluptatum commodi adipisci atque.",
                    "describe_en": "Nisi placeat consectetur est et aut consequatur autem. Eius cumque ex quis quo vel occaecati itaque. Consequatur sit totam est iste. Ea et nobis quia totam.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?89843",
                    "type": 1,
                    "parent_id": 4,
                    "level": 1,
                    "created_at": "2020-10-02 10:00:11",
                    "updated_at": "2020-09-21 18:32:27"
                }
            },
            {
                "id": 15,
                "product_category_id": 2,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "a saepe et",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?63161",
                "slug": "dolorem-et",
                "short_description": "Nulla cum porro et.",
                "short_description_en": "Aut occaecati et at iusto aliquam. Voluptatem quaerat cupiditate aut mollitia est. Dolor aut ipsum voluptatem perspiciatis eum commodi. Nemo inventore hic minus.",
                "price": "4978.00",
                "sale_price": "0.01",
                "stock": 868,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "et suscipit esse",
                "seo_keyword": "qui",
                "seo_description": "Sed magnam rerum reiciendis dolorum nihil.",
                "benefit": "Harum quisquam quibusdam similique qui. Magnam ut odio minima eaque rem. Voluptas voluptatem omnis aut dolores.",
                "benefit_en": "Repellat sed quo harum voluptas. Voluptatem eum expedita eaque reiciendis pariatur fugiat vel. Aperiam at neque nemo quia natus molestias eos veritatis.",
                "tech_description": "Deleniti fugit ab mollitia cupiditate. Consequuntur deserunt et quo id. Non rerum dolorem molestias numquam sed.",
                "tech_description_en": "Corrupti facilis aut omnis. Facere earum in omnis quod et. Odio est ea et labore. A voluptatibus dolorem sapiente ab possimus.",
                "description": "Enim sed corporis esse alias voluptates dolores sed. Qui facere iure dolores nihil corrupti aspernatur. Cumque magnam rerum expedita aut sint.",
                "description_en": "Magni et voluptas voluptatem culpa ut ipsam ipsa. Molestiae et qui omnis. Atque in quos et est reprehenderit. Nihil neque quo distinctio eum voluptates.",
                "usage": "Quae inventore ut libero laborum ratione earum id. Sapiente commodi nihil omnis enim fugit quo autem. Blanditiis ea ab et debitis quo aut.",
                "usage_en": "Voluptatem cum placeat consequatur ut impedit eveniet. Magnam est illo rerum atque sed quis cum natus. Dolores exercitationem est blanditiis laboriosam velit quibusdam voluptatem dolorem.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?92183",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?92058",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?99339",
                "product_video": null,
                "status": 1,
                "rating": 9.93,
                "sold_count": 7238,
                "review_count": 7366,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-10-06 11:35:52",
                "updated_at": "2020-09-20 12:45:36",
                "product_category": {
                    "id": 2,
                    "name": "精油",
                    "slug": "ex-consectetur",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?22150",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?49335",
                    "title": "in minima vel",
                    "title_en": "eveniet dolores in",
                    "sub_title": "quaerat impedit officia",
                    "describe": "Minima pariatur corrupti nihil sit. Illum autem minima eveniet repudiandae. Iure illum quia ipsam et. Rerum amet doloremque non ut beatae. Et voluptas amet repellat pariatur.",
                    "describe_en": "Assumenda et tempora distinctio recusandae est omnis aspernatur. Voluptas aut explicabo qui quos. Accusamus debitis asperiores inventore cupiditate eius modi.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?49034",
                    "type": 1,
                    "parent_id": 6,
                    "level": 1,
                    "created_at": "2020-09-09 04:03:27",
                    "updated_at": "2020-09-20 05:27:47"
                }
            },
            {
                "id": 16,
                "product_category_id": 6,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "sed alias aut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?13639",
                "slug": "vitae-sunt",
                "short_description": "Dolor omnis officiis et.",
                "short_description_en": "Et eius et eos. Neque dignissimos facere velit voluptatem. Impedit animi et quam aliquid quisquam velit porro. Praesentium qui et officiis.",
                "price": "8615.00",
                "sale_price": "0.01",
                "stock": 266,
                "spec": "150 ml \/ 2.0 oz",
                "seo_title": "ut ut et",
                "seo_keyword": "debitis",
                "seo_description": "Quam eveniet et suscipit.",
                "benefit": "Assumenda odit libero consequuntur totam sequi sed. Excepturi quia voluptatem officiis commodi neque necessitatibus autem nemo. Consequuntur pariatur itaque doloremque qui natus. Nostrum et totam inventore.",
                "benefit_en": "Debitis impedit in qui impedit id ut non. Magnam asperiores qui sed ut quos magni. Nesciunt dolores aliquam quam minus iusto aliquid. Quam saepe deserunt odit perferendis.",
                "tech_description": "Quisquam qui consequatur sint non aut. Placeat excepturi consequatur ipsum vel minus eaque maiores. Tempore id quidem omnis est itaque ipsum.",
                "tech_description_en": "Tenetur quia eum dolorum consequatur. Commodi totam et excepturi. Distinctio cum omnis veniam quo ea. Animi architecto molestiae modi sunt ducimus et dolorum.",
                "description": "Repudiandae commodi quo dicta in ut. Voluptatum aut rem a sequi. Officia quo temporibus ullam incidunt. Harum eos reiciendis provident quos aliquam.",
                "description_en": "Sed illum totam omnis necessitatibus nostrum. Ea non aut quod delectus itaque laborum pariatur reprehenderit. Eum qui est a in ea aut nulla. Labore tempora commodi neque explicabo mollitia eaque harum modi.",
                "usage": "Eum impedit et possimus cum. Quas occaecati sed a aut. Nulla culpa deleniti et in necessitatibus nemo.",
                "usage_en": "Consequatur voluptatum nulla numquam. Est sunt non sunt aut qui. Odio vero nisi mollitia aut quo eveniet. Expedita et qui doloribus inventore ratione.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?77733",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?49463",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?83458",
                "product_video": null,
                "status": 2,
                "rating": 4.4,
                "sold_count": 4282,
                "review_count": 8253,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-26 06:48:34",
                "updated_at": "2020-10-07 10:56:00",
                "product_category": {
                    "id": 6,
                    "name": "腮红",
                    "slug": "laborum-sed",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?64934",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?72962",
                    "title": "dolorem adipisci dolor",
                    "title_en": "assumenda reiciendis iste",
                    "sub_title": "et veniam ipsa",
                    "describe": "Rem iste quas deserunt tempore voluptatibus esse sed. Sequi voluptatibus quibusdam error voluptates amet. Vero incidunt deserunt facilis accusantium accusamus voluptatem.",
                    "describe_en": "Ex consectetur iusto sed. Quae quam dolores id. Quas commodi sit reiciendis. Suscipit asperiores tempore sed nemo.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?87736",
                    "type": 1,
                    "parent_id": 27,
                    "level": 1,
                    "created_at": "2020-09-09 00:25:46",
                    "updated_at": "2020-10-07 21:45:50"
                }
            },
            {
                "id": 17,
                "product_category_id": 8,
                "product_name": "纯皙精致",
                "product_name_en": "tempora iusto nesciunt",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?16584",
                "slug": "hic-quo",
                "short_description": "Rerum iste necessitatibus et sit dolor ducimus.",
                "short_description_en": "Dolor impedit impedit corporis et consequatur et voluptatem. Dolorum error dolore nostrum omnis quae. Consectetur nemo quis ut quo necessitatibus dicta. Ut corrupti voluptatem nihil sit beatae sapiente.",
                "price": "4942.00",
                "sale_price": "0.01",
                "stock": 119,
                "spec": "30 ml \/ 1.0 oz.",
                "seo_title": "unde corporis asperiores",
                "seo_keyword": "qui",
                "seo_description": "Voluptatem maxime vel sit voluptatibus autem animi.",
                "benefit": "Tenetur facilis eaque et ratione distinctio delectus modi. Laudantium sint sit similique animi et perspiciatis qui maxime. Esse dolores dolorem vel nostrum laudantium eaque sint. Libero temporibus temporibus sit qui numquam.",
                "benefit_en": "Eum in qui consequatur nisi ea. Voluptas quisquam est distinctio voluptas neque itaque qui. Quia voluptate doloremque magni ipsum sint maxime in tempore.",
                "tech_description": "Rem sit officia earum quis sit veniam. Necessitatibus reiciendis consequatur sit rem nobis. Temporibus iure autem optio ut. Et quis sit quod corrupti cumque et ea et.",
                "tech_description_en": "Qui eligendi aliquid repudiandae voluptates voluptas. Quos occaecati assumenda qui repellat. Corporis at molestiae sunt rerum nesciunt voluptatem quibusdam. Vel quia id ea eos molestiae aut.",
                "description": "Officiis rerum magni quos et aut sed nihil. Architecto libero reiciendis officia quae. Laborum quam quia rerum ex libero aut. Sit fugit rerum dolores quasi.",
                "description_en": "Perspiciatis qui qui facere cumque. Ut odit alias doloremque explicabo odit necessitatibus et at. Beatae illo temporibus reiciendis reprehenderit mollitia quo voluptas natus. Repellendus voluptatibus pariatur natus dolor laboriosam fugit consequatur.",
                "usage": "Dolorem quo aut in voluptas aut. Deleniti harum sint ut provident sed laudantium nihil libero. Sint ipsam in saepe quia non repellendus accusantium.",
                "usage_en": "In et eveniet ullam voluptate voluptas in autem. Distinctio ratione quam facilis repellat a.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?39051",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?83178",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?78653",
                "product_video": null,
                "status": 1,
                "rating": 3.2,
                "sold_count": 1919,
                "review_count": 3896,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-13 07:02:38",
                "updated_at": "2020-09-17 23:24:40",
                "product_category": {
                    "id": 8,
                    "name": "洁面",
                    "slug": "cupiditate-illum",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?46462",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?87680",
                    "title": "ut at enim",
                    "title_en": "enim sit excepturi",
                    "sub_title": "autem sed voluptate",
                    "describe": "Voluptas rerum itaque explicabo ut magni. Quam eaque reiciendis eligendi quaerat voluptas ut quaerat. Molestiae voluptatem doloribus sunt sed ducimus eos. Esse optio sed culpa est.",
                    "describe_en": "Eveniet sit unde odio. Minus aut iusto ea assumenda. Ea sit quam eos omnis quia. Et qui est eaque sed voluptatibus ullam.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?97724",
                    "type": 1,
                    "parent_id": 29,
                    "level": 1,
                    "created_at": "2020-09-10 03:04:30",
                    "updated_at": "2020-09-13 21:20:42"
                }
            },
            {
                "id": 18,
                "product_category_id": 8,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "voluptate aut deleniti",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?93125",
                "slug": "optio-unde",
                "short_description": "Neque autem quia dolores.",
                "short_description_en": "Enim qui officia quasi nemo minima modi. Sint deleniti cumque aut sunt sapiente voluptatem et. Voluptatem quae vero voluptatibus dolor dolor sint. Deserunt labore laboriosam accusamus dolore illo. Distinctio vel quas delectus sint saepe vel.",
                "price": "7302.00",
                "sale_price": "0.01",
                "stock": 608,
                "spec": "150 ml \/ 2.0 oz",
                "seo_title": "commodi tenetur quas",
                "seo_keyword": "saepe",
                "seo_description": "Rerum ut vel illo deserunt enim.",
                "benefit": "Ipsum a id rerum enim. Accusamus voluptatem ex quos iste non ea. Necessitatibus suscipit fuga et a facilis. Autem aspernatur ut repellendus non molestias provident.",
                "benefit_en": "Accusantium libero quis voluptatem facilis ducimus in laudantium. Rerum commodi est voluptas quibusdam sint corporis. Veritatis eius sunt ea sunt maiores quod ut.",
                "tech_description": "Illo velit eligendi sint atque aperiam et sed. Fuga reprehenderit laboriosam qui ut dolore iusto. Est sequi ut velit ipsam autem ipsum perferendis.",
                "tech_description_en": "Est incidunt sit eligendi temporibus magni enim. Tenetur tempora architecto temporibus nihil sed modi delectus. Placeat omnis dolor est fugit tenetur odio et. Dicta tenetur saepe quo.",
                "description": "Quo qui illum odio totam. Cumque sit eos hic cum fuga.",
                "description_en": "In delectus ad vel architecto. Omnis aperiam labore repellendus consequatur excepturi nam. Provident aut qui autem ut consequatur. Distinctio laudantium quis et reprehenderit nihil.",
                "usage": "Id placeat molestiae veritatis hic maxime voluptatum illum id. Voluptates qui in dolorem hic consectetur. Cumque cumque tempora ducimus voluptate. Ex et minima pariatur quae nihil.",
                "usage_en": "Aliquid maxime eveniet voluptatem rerum repellendus. Eum voluptatem officia molestias eos qui. Tempore ipsum nulla nam dolorem quia ut.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?15292",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?91818",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?94257",
                "product_video": null,
                "status": 1,
                "rating": 3.67,
                "sold_count": 2373,
                "review_count": 2159,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-29 11:41:24",
                "updated_at": "2020-09-20 03:53:02",
                "product_category": {
                    "id": 8,
                    "name": "洁面",
                    "slug": "cupiditate-illum",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?46462",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?87680",
                    "title": "ut at enim",
                    "title_en": "enim sit excepturi",
                    "sub_title": "autem sed voluptate",
                    "describe": "Voluptas rerum itaque explicabo ut magni. Quam eaque reiciendis eligendi quaerat voluptas ut quaerat. Molestiae voluptatem doloribus sunt sed ducimus eos. Esse optio sed culpa est.",
                    "describe_en": "Eveniet sit unde odio. Minus aut iusto ea assumenda. Ea sit quam eos omnis quia. Et qui est eaque sed voluptatibus ullam.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?97724",
                    "type": 1,
                    "parent_id": 29,
                    "level": 1,
                    "created_at": "2020-09-10 03:04:30",
                    "updated_at": "2020-09-13 21:20:42"
                }
            },
            {
                "id": 19,
                "product_category_id": 2,
                "product_name": "纯皙精致",
                "product_name_en": "nobis soluta eius",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?28375",
                "slug": "vel-repellat",
                "short_description": "Et sit voluptatem delectus.",
                "short_description_en": "Dolorem sed commodi et molestias laborum. Qui et voluptatem occaecati corrupti a. Provident et quia suscipit aut consectetur unde iure. Quos consequuntur molestias voluptatem laboriosam.",
                "price": "3559.00",
                "sale_price": "0.01",
                "stock": 157,
                "spec": "150 ml \/ 2.0 oz",
                "seo_title": "velit quis consequuntur",
                "seo_keyword": "commodi",
                "seo_description": "Quibusdam beatae alias enim.",
                "benefit": "Sint voluptatem placeat dignissimos aut aut commodi minima. Quo commodi libero sequi omnis distinctio. Earum provident aliquid voluptates quis nemo earum rem. Hic atque nemo amet rerum repellat magnam id. Autem voluptate ab voluptates facilis dolor dolor.",
                "benefit_en": "Molestiae voluptatem voluptas ad et sed. Sed odit rerum sed facere quisquam repudiandae. Aliquid at eum velit dolores sed deserunt nihil. Quaerat soluta ut quis modi.",
                "tech_description": "Doloribus veniam explicabo cum nisi recusandae perspiciatis impedit. Autem et repellendus aliquam qui ex. Praesentium vitae accusamus eius odit atque.",
                "tech_description_en": "Consectetur ipsum ut architecto in sint rerum. Harum in asperiores et qui reprehenderit a. Sunt non dolores placeat velit ipsum aut ipsum. Eveniet libero perferendis eum officiis error.",
                "description": "Molestiae et ducimus molestias officia aut. Iste recusandae qui distinctio. Expedita a assumenda sunt in perspiciatis nihil quae. Quis nam dicta incidunt dignissimos.",
                "description_en": "Et facere perspiciatis maxime neque. Quis aut quia rerum similique dolorem. Veniam velit neque molestias sit qui laboriosam ea. Ad ut et quo omnis saepe vel incidunt.",
                "usage": "Ea mollitia ratione aut quis quia. Perspiciatis quidem illum nesciunt architecto numquam. Voluptas ullam doloribus ex recusandae. Quia occaecati dicta mollitia est nemo ex.",
                "usage_en": "Et cum minima suscipit et aliquid commodi vitae. Aut tenetur voluptatibus est eligendi. Corrupti laboriosam odio et laudantium ut modi quisquam doloremque. Tempora rerum quisquam repellat harum voluptatem corrupti dolor alias.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?26781",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?50358",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?84234",
                "product_video": null,
                "status": 2,
                "rating": 1.09,
                "sold_count": 1765,
                "review_count": 1355,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-12 06:31:45",
                "updated_at": "2020-09-14 01:44:08",
                "product_category": {
                    "id": 2,
                    "name": "精油",
                    "slug": "ex-consectetur",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?22150",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?49335",
                    "title": "in minima vel",
                    "title_en": "eveniet dolores in",
                    "sub_title": "quaerat impedit officia",
                    "describe": "Minima pariatur corrupti nihil sit. Illum autem minima eveniet repudiandae. Iure illum quia ipsam et. Rerum amet doloremque non ut beatae. Et voluptas amet repellat pariatur.",
                    "describe_en": "Assumenda et tempora distinctio recusandae est omnis aspernatur. Voluptas aut explicabo qui quos. Accusamus debitis asperiores inventore cupiditate eius modi.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?49034",
                    "type": 1,
                    "parent_id": 6,
                    "level": 1,
                    "created_at": "2020-09-09 04:03:27",
                    "updated_at": "2020-09-20 05:27:47"
                }
            },
            {
                "id": 20,
                "product_category_id": 7,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "atque repellat dolor",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?11543",
                "slug": "et-est",
                "short_description": "Nisi officia possimus veniam.",
                "short_description_en": "Consequatur aut non dignissimos eaque vitae voluptatem. Temporibus maxime cumque esse velit. Autem qui saepe dolor perspiciatis at ut quaerat.",
                "price": "3647.00",
                "sale_price": "0.01",
                "stock": 874,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "quod dolorem ipsam",
                "seo_keyword": "ut",
                "seo_description": "Rerum at sed quo explicabo vero dolores.",
                "benefit": "Nihil dicta qui aut perferendis. Ea et eligendi aliquam eos aspernatur assumenda. Distinctio quas dolore explicabo repudiandae quibusdam ut quaerat. Aut quis expedita nisi et quos ut.",
                "benefit_en": "Vel totam saepe aut non. Commodi corrupti eos rerum in. Alias asperiores est non officia. Sed veritatis cumque et quam adipisci. Dolores laudantium assumenda voluptate minima.",
                "tech_description": "Non qui nisi eos optio corrupti omnis assumenda voluptatem. Et cum eveniet voluptatibus ducimus pariatur incidunt. Et provident distinctio asperiores quisquam voluptas.",
                "tech_description_en": "Omnis explicabo ipsam magnam ad alias qui officiis voluptatem. Assumenda et necessitatibus illum eius sed.",
                "description": "Voluptatibus facilis velit molestias quo velit facilis. Et ipsum voluptas repellendus incidunt. Nihil assumenda sint sed aut.",
                "description_en": "Dolorum aut velit iste laborum laudantium tempora. Facere qui nihil ut. Facere nostrum sit temporibus.",
                "usage": "Dolores laborum vel voluptatibus eaque explicabo. Quo deserunt aut quis blanditiis temporibus deleniti est. Ut quia sunt laborum et eveniet amet laudantium. Fugit in sed voluptas dolore perspiciatis blanditiis corporis in. Delectus sed molestiae optio omnis vel facere voluptatem.",
                "usage_en": "Cupiditate explicabo nostrum vero accusamus. Nesciunt impedit explicabo eum occaecati qui. Corporis quibusdam libero commodi dolorum asperiores et. Dolor error repudiandae dolores velit aperiam. Quisquam veritatis suscipit et commodi in labore sunt nobis.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?94906",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?42847",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?21276",
                "product_video": null,
                "status": 2,
                "rating": 4.9,
                "sold_count": 5956,
                "review_count": 3497,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-10-07 10:45:36",
                "updated_at": "2020-09-09 11:08:40",
                "product_category": {
                    "id": 7,
                    "name": "面膜",
                    "slug": "deleniti-doloribus",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?61726",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?42777",
                    "title": "occaecati cum culpa",
                    "title_en": "assumenda suscipit enim",
                    "sub_title": "necessitatibus repudiandae ut",
                    "describe": "Libero ut rerum magnam itaque aperiam consectetur iure. Asperiores tenetur consequuntur ratione sed quis enim. Soluta blanditiis dolorem reiciendis nobis aut doloremque.",
                    "describe_en": "Consectetur et a sequi iusto aliquam nulla. Atque sapiente quisquam consequatur alias qui. Tempora dolor similique reprehenderit eos. Labore deserunt eum odit rerum.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?41648",
                    "type": 1,
                    "parent_id": 23,
                    "level": 1,
                    "created_at": "2020-09-17 17:12:34",
                    "updated_at": "2020-10-05 22:52:02"
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
    -G "http://localhost/api/products/list/product_category_skin_care/eos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/products/list/product_category_skin_care/eos"
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
    -G "http://localhost/api/products/status/eum?page=vitae&page_limit=ipsa" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/products/status/eum"
);

let params = {
    "page": "vitae",
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
            "product_name": "纯皙精致",
            "product_name_en": "quidem aperiam inventore",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?12486",
            "slug": "dolorem-id",
            "short_description": "Alias sit et temporibus omnis distinctio eveniet.",
            "price": "1594.00",
            "sale_price": "0.01"
        },
        {
            "product_category_id": 2,
            "product_name": "臻爱铂金",
            "product_name_en": "autem ea dolores",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?43891",
            "slug": "fugiat-quia",
            "short_description": "Iure voluptatum omnis ducimus.",
            "price": "3777.00",
            "sale_price": "0.01"
        },
        {
            "product_category_id": 6,
            "product_name": "黑钻肌光精华",
            "product_name_en": "consequuntur officia et",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?18519",
            "slug": "soluta-voluptatem",
            "short_description": "Eligendi tempora rerum impedit.",
            "price": "9778.00",
            "sale_price": "0.01"
        },
        {
            "product_category_id": 8,
            "product_name": "钻石冰莹面膜",
            "product_name_en": "voluptate aut deleniti",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?93125",
            "slug": "optio-unde",
            "short_description": "Neque autem quia dolores.",
            "price": "7302.00",
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
            "id": 8,
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?31259",
            "slug": "ratione-fugiat",
            "product_name": "臻爱铂金",
            "product_name_en": "quod deserunt molestiae"
        },
        {
            "id": 5,
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?88643",
            "slug": "ut-id",
            "product_name": "钻石冰莹面膜",
            "product_name_en": "quia et vero"
        },
        {
            "id": 19,
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?28375",
            "slug": "vel-repellat",
            "product_name": "纯皙精致",
            "product_name_en": "nobis soluta eius"
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
            "id": 4,
            "name": "唇膏",
            "slug": "qui-praesentium",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?93715",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?35769",
            "title": "ad suscipit corrupti",
            "title_en": "pariatur earum quia",
            "sub_title": "tempora dolores ad",
            "describe": "Ratione nisi facere accusantium quasi. Saepe qui autem vel omnis magni officiis. Doloribus ab quibusdam velit enim veritatis.",
            "describe_en": "Mollitia occaecati et placeat quia sequi. Quas tenetur minima commodi nemo esse mollitia molestiae. Perspiciatis fugiat est non laboriosam ut.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?21019",
            "type": 1,
            "parent_id": 19,
            "level": 1,
            "created_at": "2020-10-03 21:53:28",
            "updated_at": "2020-09-18 06:47:47",
            "children": [
                {
                    "id": 10,
                    "name": "爽肤水",
                    "slug": "qui-rerum",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?88485",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?71894",
                    "title": "totam incidunt officia",
                    "title_en": "quasi iste nihil",
                    "sub_title": "repudiandae natus et",
                    "describe": "Vitae est dolorem beatae velit. Ipsa aut blanditiis veniam necessitatibus nulla. Quaerat ab quas quis qui nihil consequuntur dignissimos. Est voluptatum commodi adipisci atque.",
                    "describe_en": "Nisi placeat consectetur est et aut consequatur autem. Eius cumque ex quis quo vel occaecati itaque. Consequatur sit totam est iste. Ea et nobis quia totam.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?89843",
                    "type": 1,
                    "parent_id": 4,
                    "level": 1,
                    "created_at": "2020-10-02 10:00:11",
                    "updated_at": "2020-09-21 18:32:27"
                }
            ]
        },
        {
            "id": 6,
            "name": "腮红",
            "slug": "laborum-sed",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?64934",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?72962",
            "title": "dolorem adipisci dolor",
            "title_en": "assumenda reiciendis iste",
            "sub_title": "et veniam ipsa",
            "describe": "Rem iste quas deserunt tempore voluptatibus esse sed. Sequi voluptatibus quibusdam error voluptates amet. Vero incidunt deserunt facilis accusantium accusamus voluptatem.",
            "describe_en": "Ex consectetur iusto sed. Quae quam dolores id. Quas commodi sit reiciendis. Suscipit asperiores tempore sed nemo.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?87736",
            "type": 1,
            "parent_id": 27,
            "level": 1,
            "created_at": "2020-09-09 00:25:46",
            "updated_at": "2020-10-07 21:45:50",
            "children": [
                {
                    "id": 2,
                    "name": "精油",
                    "slug": "ex-consectetur",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?22150",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?49335",
                    "title": "in minima vel",
                    "title_en": "eveniet dolores in",
                    "sub_title": "quaerat impedit officia",
                    "describe": "Minima pariatur corrupti nihil sit. Illum autem minima eveniet repudiandae. Iure illum quia ipsam et. Rerum amet doloremque non ut beatae. Et voluptas amet repellat pariatur.",
                    "describe_en": "Assumenda et tempora distinctio recusandae est omnis aspernatur. Voluptas aut explicabo qui quos. Accusamus debitis asperiores inventore cupiditate eius modi.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?49034",
                    "type": 1,
                    "parent_id": 6,
                    "level": 1,
                    "created_at": "2020-09-09 04:03:27",
                    "updated_at": "2020-09-20 05:27:47"
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
    -G "http://localhost/api/product_category/story/dolor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product_category/story/dolor"
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
    -d '{"product_list":[{"product_id":15}]}'

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
            "product_id": 15
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
    "http://localhost/api/shop_carts/1?type=vel&product_id=quae&amount=eos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/shop_carts/1"
);

let params = {
    "type": "vel",
    "product_id": "quae",
    "amount": "eos",
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
    "http://localhost/api/shop_carts/1?product_id=veniam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/shop_carts/1"
);

let params = {
    "product_id": "veniam",
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
            "name": "精湛科艺",
            "slug": "explicabo-in",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?35906",
            "title": "saepe nihil facere",
            "sub_title": "facilis excepturi quos",
            "created_at": "2020-06-10 16:34:15",
            "updated_at": "2019-10-20 11:28:07"
        },
        {
            "id": 2,
            "name": "精彩内容",
            "slug": "qui-eos",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?39685",
            "title": "quia cupiditate voluptatem",
            "sub_title": "consequatur sunt est",
            "created_at": "2020-07-12 23:33:32",
            "updated_at": "2020-05-20 22:53:11"
        },
        {
            "id": 3,
            "name": "精彩内容",
            "slug": "vel-ex",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?62256",
            "title": "tenetur reprehenderit et",
            "sub_title": "fuga ut commodi",
            "created_at": "2020-07-01 02:08:15",
            "updated_at": "2020-04-17 12:23:38"
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
    -d '{"province":"totam","city":"earum","district":"cum","address":"debitis","zip":19,"contact_name":"dolorum","contact_phone":20}'

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
    "province": "totam",
    "city": "earum",
    "district": "cum",
    "address": "debitis",
    "zip": 19,
    "contact_name": "dolorum",
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
    "http://localhost/api/user_addresses/1?province=atque&city=eligendi&district=accusantium&address=sit&zip=quaerat&contact_name=doloribus&contact_phone=neque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_addresses/1"
);

let params = {
    "province": "atque",
    "city": "eligendi",
    "district": "accusantium",
    "address": "sit",
    "zip": "quaerat",
    "contact_name": "doloribus",
    "contact_phone": "neque",
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
    "http://localhost/api/user_profile?phone=nihil&real_name=illo&sex=et&birthday=fugiat&age=nam&province=corporis&city=mollitia&district=est&address=dignissimos&zip=rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_profile"
);

let params = {
    "phone": "nihil",
    "real_name": "illo",
    "sex": "et",
    "birthday": "fugiat",
    "age": "nam",
    "province": "corporis",
    "city": "mollitia",
    "district": "est",
    "address": "dignissimos",
    "zip": "rerum",
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
    -d '{"code":"nihil"}'

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
    "code": "nihil"
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
    -G "http://localhost/api/wish_list?page=id&page_limit=ullam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/wish_list"
);

let params = {
    "page": "id",
    "page_limit": "ullam",
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
    -d '{"product_id":18}'

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
    -G "http://localhost/alipay/bank_gateway/pay?no=magnam&total_amount=iste&payment_key=voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/alipay/bank_gateway/pay"
);

let params = {
    "no": "magnam",
    "total_amount": "iste",
    "payment_key": "voluptatem",
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
        "no": "magnam",
        "total_amount": "iste",
        "payment_key": "voluptatem"
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
    -G "http://localhost/alipay/aop_page/pay?no=corrupti&total_amount=non&payment_key=repellendus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/alipay/aop_page/pay"
);

let params = {
    "no": "corrupti",
    "total_amount": "non",
    "payment_key": "repellendus",
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
        "no": "corrupti",
        "total_amount": "non",
        "payment_key": "repellendus"
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
    -G "http://localhost/alipay/legacy_express/pay?no=eos&total_amount=consequatur&payment_key=commodi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/alipay/legacy_express/pay"
);

let params = {
    "no": "eos",
    "total_amount": "consequatur",
    "payment_key": "commodi",
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
        "no": "eos",
        "total_amount": "consequatur",
        "payment_key": "commodi"
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
    -G "http://localhost/unionpay/pay?no=omnis&total_amount=quos&payment_key=sed" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/unionpay/pay"
);

let params = {
    "no": "omnis",
    "total_amount": "quos",
    "payment_key": "sed",
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
        "no": "omnis",
        "total_amount": "quos",
        "payment_key": "sed"
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


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET unionpay_gateway/pay`


<!-- END_8cb6fed82980f458075bd4225f653134 -->

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
    -G "http://localhost/api/response_code?10001=nihil&10003=neque&20001=delectus&40001=autem&40003=iusto&40004=aut&40005=doloremque&50001=sit&P1001=architecto&P1002=accusamus&P4004=est&P4005=ipsum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/response_code"
);

let params = {
    "10001": "nihil",
    "10003": "neque",
    "20001": "delectus",
    "40001": "autem",
    "40003": "iusto",
    "40004": "aut",
    "40005": "doloremque",
    "50001": "sit",
    "P1001": "architecto",
    "P1002": "accusamus",
    "P4004": "est",
    "P4005": "ipsum",
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


