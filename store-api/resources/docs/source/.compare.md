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

#[ADMIN-Payment] AlipayLegacyExpress manage

支付宝即时到账管理类
<!-- START_f1be18edbf36c70c4e837edf80b9d17d -->
## Request get alipay legacy express list
获取支付宝即时支付-列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/alipay/legacy_express?page=quas&page_limit=id" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/legacy_express"
);

let params = {
    "page": "quas",
    "page_limit": "id",
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
    -d '{"items":[{"pid":"consectetur","key":"temporibus","seller_email":"similique"}]}'

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
            "pid": "consectetur",
            "key": "temporibus",
            "seller_email": "similique"
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
    "http://localhost/admin/alipay/legacy_express/1?id=cum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/legacy_express/1"
);

let params = {
    "id": "cum",
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
    "http://localhost/admin/alipay/legacy_express/status/1?id=repellendus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/legacy_express/status/1"
);

let params = {
    "id": "repellendus",
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
    -G "http://localhost/admin/asset_img?page=voluptatum&page_limit=corporis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/asset_img"
);

let params = {
    "page": "voluptatum",
    "page_limit": "corporis",
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
    -d '{"img":"accusamus","img_location":"sed","type":"illum","product_id":"maiores"}'

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
    "img": "accusamus",
    "img_location": "sed",
    "type": "illum",
    "product_id": "maiores"
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
    -G "http://localhost/admin/category_stories?page=asperiores&page_limit=animi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories"
);

let params = {
    "page": "asperiores",
    "page_limit": "animi",
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
    "http://localhost/admin/category_stories?title=maiores&title_en=voluptatibus&description=aut&description_en=maxime&banner=praesentium&product_category_id=laborum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories"
);

let params = {
    "title": "maiores",
    "title_en": "voluptatibus",
    "description": "aut",
    "description_en": "maxime",
    "banner": "praesentium",
    "product_category_id": "laborum",
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
    "http://localhost/admin/category_stories/1?title=sit&title_en=autem&description=accusamus&description_en=ea&banner=dolorum&product_category_id=maiores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories/1"
);

let params = {
    "title": "sit",
    "title_en": "autem",
    "description": "accusamus",
    "description_en": "ea",
    "banner": "dolorum",
    "product_category_id": "maiores",
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
    -G "http://localhost/admin/logs/1?page=hic&page_limit=libero" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/logs/1"
);

let params = {
    "page": "hic",
    "page_limit": "libero",
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
    "http://localhost/admin/logs/1?ids=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/logs/1"
);

let params = {
    "ids": "qui",
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

#[ADMIN] Order

订单管理
<!-- START_abed5cfa021d6e9a60379988984f2b8f -->
## Get order list
获取订单列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/order?page=earum&page_limit=facere" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order"
);

let params = {
    "page": "earum",
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
    "http://localhost/admin/order?page=architecto&page_limit=nihil&username=quis&order_no=blanditiis&order_status=aperiam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order"
);

let params = {
    "page": "architecto",
    "page_limit": "nihil",
    "username": "quis",
    "order_no": "blanditiis",
    "order_status": "aperiam",
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
    -d '{"refund_status":"exercitationem","ship_status":"consequatur","status":"praesentium"}'

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
    "refund_status": "exercitationem",
    "ship_status": "consequatur",
    "status": "praesentium"
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
    -G "http://localhost/admin/product?page=quis&page_limit=in" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product"
);

let params = {
    "page": "quis",
    "page_limit": "in",
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

<!-- START_2a50bdf6cd9fdfa165149d0dd0da7075 -->
## Create product
新建商品

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/product?product_category_id=et&product_name=deleniti&product_name_en=officiis&thumbnail=et&slug=quia&short_description=odit&short_description_en=quia&price=quaerat&sale_price=exercitationem&stock=qui&seo_title=in&seo_keyword=est&seo_description=neque&benefit=maiores&benefit_en=inventore&tech_description=commodi&tech_description_en=laborum&description=facilis&description_en=et&usage=quisquam&usage_en=molestias&main_image=commodi&main_image_2=eos&benefit_image=et&product_video=perferendis&status=veritatis&rating=dolorum&sold_count=id&review_count=cum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product"
);

let params = {
    "product_category_id": "et",
    "product_name": "deleniti",
    "product_name_en": "officiis",
    "thumbnail": "et",
    "slug": "quia",
    "short_description": "odit",
    "short_description_en": "quia",
    "price": "quaerat",
    "sale_price": "exercitationem",
    "stock": "qui",
    "seo_title": "in",
    "seo_keyword": "est",
    "seo_description": "neque",
    "benefit": "maiores",
    "benefit_en": "inventore",
    "tech_description": "commodi",
    "tech_description_en": "laborum",
    "description": "facilis",
    "description_en": "et",
    "usage": "quisquam",
    "usage_en": "molestias",
    "main_image": "commodi",
    "main_image_2": "eos",
    "benefit_image": "et",
    "product_video": "perferendis",
    "status": "veritatis",
    "rating": "dolorum",
    "sold_count": "id",
    "review_count": "cum",
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
    "http://localhost/admin/product/1?product_category_id=doloremque&product_name=libero&product_name_en=vero&thumbnail=molestias&slug=et&short_description=accusamus&short_description_en=non&price=autem&sale_price=ut&stock=excepturi&seo_title=totam&seo_keyword=ex&seo_description=aut&benefit=quo&benefit_en=et&tech_description=consectetur&tech_description_en=commodi&description=consequatur&description_en=numquam&usage=dolore&usage_en=eum&main_image=vel&main_image_2=sit&benefit_image=qui&product_video=ducimus&status=eum&rating=voluptas&sold_count=atque&review_count=exercitationem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product/1"
);

let params = {
    "product_category_id": "doloremque",
    "product_name": "libero",
    "product_name_en": "vero",
    "thumbnail": "molestias",
    "slug": "et",
    "short_description": "accusamus",
    "short_description_en": "non",
    "price": "autem",
    "sale_price": "ut",
    "stock": "excepturi",
    "seo_title": "totam",
    "seo_keyword": "ex",
    "seo_description": "aut",
    "benefit": "quo",
    "benefit_en": "et",
    "tech_description": "consectetur",
    "tech_description_en": "commodi",
    "description": "consequatur",
    "description_en": "numquam",
    "usage": "dolore",
    "usage_en": "eum",
    "main_image": "vel",
    "main_image_2": "sit",
    "benefit_image": "qui",
    "product_video": "ducimus",
    "status": "eum",
    "rating": "voluptas",
    "sold_count": "atque",
    "review_count": "exercitationem",
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
    -G "http://localhost/admin/product_categories?page=rem&page_limit=soluta" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories"
);

let params = {
    "page": "rem",
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
    "http://localhost/admin/product_categories?name=expedita&thumbnail=nesciunt&banner=odit&title=sint&title_en=voluptas&sub_title=optio&describe=nihil&describe_en=et&describe_img=in&parent_id=iste" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories"
);

let params = {
    "name": "expedita",
    "thumbnail": "nesciunt",
    "banner": "odit",
    "title": "sint",
    "title_en": "voluptas",
    "sub_title": "optio",
    "describe": "nihil",
    "describe_en": "et",
    "describe_img": "in",
    "parent_id": "iste",
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
    "http://localhost/admin/product_categories/1?name=fugiat&thumbnail=enim&banner=dolores&title=voluptatibus&title_en=qui&sub_title=esse&describe=illo&describe_en=aliquam&describe_img=veniam&parent_id=tempora" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories/1"
);

let params = {
    "name": "fugiat",
    "thumbnail": "enim",
    "banner": "dolores",
    "title": "voluptatibus",
    "title_en": "qui",
    "sub_title": "esse",
    "describe": "illo",
    "describe_en": "aliquam",
    "describe_img": "veniam",
    "parent_id": "tempora",
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
    "http://localhost/admin/product_sku?title=sit&description=qui&price=illum&stock=architecto&product_id=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_sku"
);

let params = {
    "title": "sit",
    "description": "qui",
    "price": "illum",
    "stock": "architecto",
    "product_id": "et",
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
    "http://localhost/admin/product_sku/1?title=fugiat&description=deserunt&price=rerum&stock=non&product_id=quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_sku/1"
);

let params = {
    "title": "fugiat",
    "description": "deserunt",
    "price": "rerum",
    "stock": "non",
    "product_id": "quia",
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
    -G "http://localhost/admin/the_houses?page=itaque&page_limit=rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/the_houses"
);

let params = {
    "page": "itaque",
    "page_limit": "rerum",
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
    -d '{"title":"voluptatem","sub_title":"unde","the_house_category_id":"accusamus","describe":"aut","banner":"ut"}'

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
    "title": "voluptatem",
    "sub_title": "unde",
    "the_house_category_id": "accusamus",
    "describe": "aut",
    "banner": "ut"
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
    -d '{"title":"culpa","sub_title":"sit","the_house_category_id":"dolor","describe":"aliquam","banner":"nihil"}'

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
    "title": "culpa",
    "sub_title": "sit",
    "the_house_category_id": "dolor",
    "describe": "aliquam",
    "banner": "nihil"
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
    -G "http://localhost/admin/the_house/category/list?page=at&page_limit=possimus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/the_house/category/list"
);

let params = {
    "page": "at",
    "page_limit": "possimus",
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
    -d '{"name":"ullam","banner":"quibusdam","title":"nihil","sub_title":"facilis"}'

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
    "name": "ullam",
    "banner": "quibusdam",
    "title": "nihil",
    "sub_title": "facilis"
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
    -d '{"name":"eos","banner":"occaecati","title":"atque","sub_title":"aut"}'

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
    "name": "eos",
    "banner": "occaecati",
    "title": "atque",
    "sub_title": "aut"
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
    -G "http://localhost/admin/the_house_content/list?page=fuga&page_limit=aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/the_house_content/list"
);

let params = {
    "page": "fuga",
    "page_limit": "aut",
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
    -d '{"the_house_id":"sit","title":"quos","content":"ea","img":"ipsum","img_desc":"non"}'

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
    "the_house_id": "sit",
    "title": "quos",
    "content": "ea",
    "img": "ipsum",
    "img_desc": "non"
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
    -d '{"the_house_id":"laborum","title":"sit","content":"rem","img":"et","img_desc":"veritatis"}'

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
    "the_house_id": "laborum",
    "title": "sit",
    "content": "rem",
    "img": "et",
    "img_desc": "veritatis"
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
    -G "http://localhost/admin/user?username=cum&page=explicabo&page_limit=dolor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user"
);

let params = {
    "username": "cum",
    "page": "explicabo",
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

<!-- START_f391a113e7b095e92c1fbb509d3b51d5 -->
## Edit user(Admin)
修改用户资料

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/user/1?name=debitis&email=dolorum&phone=inventore&avatar=alias" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/1"
);

let params = {
    "name": "debitis",
    "email": "dolorum",
    "phone": "inventore",
    "avatar": "alias",
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
    "http://localhost/admin/user/reset_password/1?oldPassword=ducimus&newPassword=rerum&newPassword_confirmation=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/reset_password/1"
);

let params = {
    "oldPassword": "ducimus",
    "newPassword": "rerum",
    "newPassword_confirmation": "et",
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
    -G "http://localhost/admin/get_user?hash_id=vel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/get_user"
);

let params = {
    "hash_id": "vel",
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
    "http://localhost/admin/user_addresses?province=vel&city=similique&district=quo&address=et&zip=aut&contact_name=provident&contact_phone=suscipit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses"
);

let params = {
    "province": "vel",
    "city": "similique",
    "district": "quo",
    "address": "et",
    "zip": "aut",
    "contact_name": "provident",
    "contact_phone": "suscipit",
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
    "http://localhost/admin/user_addresses/1?address_id=quam&province=eum&city=est&district=magni&address=quod&zip=aut&contact_name=harum&contact_phone=aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses/1"
);

let params = {
    "address_id": "quam",
    "province": "eum",
    "city": "est",
    "district": "magni",
    "address": "quod",
    "zip": "aut",
    "contact_name": "harum",
    "contact_phone": "aut",
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
    "http://localhost/admin/user_profiles/1?profile_id=saepe" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_profiles/1"
);

let params = {
    "profile_id": "saepe",
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
    "http://localhost/admin/user_profiles/1?profile_id=eos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_profiles/1"
);

let params = {
    "profile_id": "eos",
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
            "id": 4,
            "img": "https:\/\/lorempixel.com\/640\/480\/?29454",
            "img_location": 1,
            "type": "banner",
            "product_id": 3,
            "product": {
                "id": 3,
                "slug": "corporis-accusantium",
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "consequatur molestiae eum"
            }
        },
        "discover": [
            {
                "id": 3,
                "img": "https:\/\/lorempixel.com\/640\/480\/?29519",
                "img_location": 1,
                "type": "discover",
                "product_id": 7,
                "product": {
                    "id": 7,
                    "slug": "voluptatem-quibusdam",
                    "product_name": "黑钻璀璨晶透肌底精华",
                    "product_name_en": "cupiditate ipsa et"
                }
            }
        ],
        "the_house": [
            {
                "id": 43,
                "slug": "dicta-voluptate",
                "the_house_category_id": 1,
                "banner": "https:\/\/lorempixel.com\/640\/480\/?17015",
                "title": "est nihil velit",
                "sub_title": "blanditiis non repellendus",
                "describe": "Ad sit nisi totam ut iure ipsa. Reiciendis ea aut blanditiis quas. Aut nam quidem optio amet autem. Quia ut sit modi soluta. Et voluptas voluptatem neque."
            },
            {
                "id": 35,
                "slug": "et-perspiciatis",
                "the_house_category_id": 2,
                "banner": "https:\/\/lorempixel.com\/640\/480\/?11869",
                "title": "cumque beatae inventore",
                "sub_title": "velit rerum incidunt",
                "describe": "Et asperiores sed quia ea enim pariatur. Commodi placeat neque non nihil eum eos. Possimus in odio tempore sint officiis ipsa. Rerum pariatur sed est aliquid quaerat."
            },
            {
                "id": 31,
                "slug": "fugiat-magnam",
                "the_house_category_id": 1,
                "banner": "https:\/\/lorempixel.com\/640\/480\/?49947",
                "title": "omnis qui ut",
                "sub_title": "voluptatem quaerat repellendus",
                "describe": "Autem assumenda ut eius reiciendis qui ratione aut. Saepe ut enim ut voluptas porro. Nemo et qui ut qui."
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
            "name": "护肤系列",
            "slug": "placeat-suscipit"
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
    -d '{"name":"magni","username":"dolorem","password":"hic","password_confirmation":"voluptatem","code":"alias","captcha_key":"fugiat","captcha_code":"consectetur","password_question_id":19,"password_answer":"maxime"}'

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
    "name": "magni",
    "username": "dolorem",
    "password": "hic",
    "password_confirmation": "voluptatem",
    "code": "alias",
    "captcha_key": "fugiat",
    "captcha_code": "consectetur",
    "password_question_id": 19,
    "password_answer": "maxime"
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
    -G "http://localhost/api/user_question?username=rem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_question"
);

let params = {
    "username": "rem",
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
        "username": "rem"
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
    -d '{"username":"deleniti","password":"voluptatum"}'

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
    "username": "deleniti",
    "password": "voluptatum"
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
    "http://localhost/api/password_reset?username=vero&password_question_id=nemo&password_answer=repellat&password=atque&password_confirmation=quae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/password_reset"
);

let params = {
    "username": "vero",
    "password_question_id": "nemo",
    "password_answer": "repellat",
    "password": "atque",
    "password_confirmation": "quae",
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
    -d '{"oldPassword":"hic","newPassword":"hic","newPassword_confirmation":"aut"}'

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
    "oldPassword": "hic",
    "newPassword": "hic",
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
    -G "http://localhost/api/orders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orders"
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
`GET api/orders`


<!-- END_f9301c03a9281c0847565f96e6f723de -->

<!-- START_08b1b8d6f903fb311c860a5b1f0f543b -->
## Get order detail
获取订单详情

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/order_details/1?no=corrupti" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/order_details/1"
);

let params = {
    "no": "corrupti",
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
    -d '{"address_id":"aperiam","remark":"est"}'

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
    "address_id": "aperiam",
    "remark": "est"
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
    -d '{"no":8}'

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
    "no": 8
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
    "http://localhost/api/orders/cancel?no=cupiditate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orders/cancel"
);

let params = {
    "no": "cupiditate",
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
                "product_category_id": 6,
                "product_name": "钻石焕活面膜",
                "product_name_en": "qui officia optio",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?36870",
                "slug": "voluptas-nisi",
                "short_description": "Impedit sed rem enim aliquam molestiae.",
                "short_description_en": "Ab non unde numquam non voluptatum. Non est itaque et dicta ad numquam. Odio porro aut sed impedit fugiat laborum dicta.",
                "price": "4176.00",
                "sale_price": "1.00",
                "stock": 761,
                "spec": null,
                "seo_title": "libero repudiandae maxime",
                "seo_keyword": "deserunt",
                "seo_description": "Laboriosam eligendi facere et sunt quisquam.",
                "benefit": "Maxime sed voluptas inventore ut nemo architecto. Dolores sed numquam dolorem voluptatem dolor itaque ipsum.",
                "benefit_en": "Corrupti eum magni non ut culpa eum veritatis. Et vero voluptas repellat. Ut vel officia assumenda dolor optio. Ad ea illum et tempore nobis.",
                "tech_description": "Dolores veritatis unde aspernatur nemo illum. Assumenda qui est odio molestias libero non. Qui adipisci perspiciatis repellendus veniam laudantium beatae. Natus consequatur et minima.",
                "tech_description_en": "Officia et aut ab quas. Necessitatibus voluptatem consequatur voluptas deserunt fugit. Voluptatem blanditiis sit similique suscipit nihil minus.",
                "description": "Exercitationem dolorum et nihil voluptates et vel. Dolores et quam nulla perspiciatis debitis voluptas. Earum quo ut dolor et. Sit explicabo rem maxime occaecati optio.",
                "description_en": "Reiciendis dolorum assumenda excepturi aliquam sed consectetur rerum consequatur. Unde accusamus consequatur dolor et.",
                "usage": "Quos sint sit doloribus. Similique illo iure facilis dicta. Distinctio esse iure optio fugit.",
                "usage_en": "Rerum nam esse magnam et a. Ut blanditiis nihil totam.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?41226",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?73284",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?16185",
                "product_video": null,
                "status": 2,
                "rating": 1.63,
                "sold_count": 1111,
                "review_count": 7785,
                "created_at": "2020-08-28 05:57:26",
                "updated_at": "2020-09-11 12:46:55",
                "product_category": {
                    "id": 6,
                    "name": "护肤系列",
                    "slug": "placeat-suscipit",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?50269",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?15503",
                    "title": "est similique ut",
                    "title_en": "enim culpa dignissimos",
                    "sub_title": "alias omnis quam",
                    "describe": "Ut possimus omnis ipsum tenetur. Nam omnis quibusdam excepturi sit.",
                    "describe_en": "Consequatur voluptate quia enim sed. Voluptatibus sunt ea est voluptates. Et a reprehenderit aspernatur quia.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?10832",
                    "parent_id": 0,
                    "level": 1,
                    "created_at": "2020-08-24 04:45:13",
                    "updated_at": "2020-09-21 05:04:13"
                }
            },
            {
                "id": 2,
                "product_category_id": 5,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "ab harum aut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?92576",
                "slug": "voluptatem-assumenda",
                "short_description": "Molestiae rerum aliquam quas sed iusto est repellendus.",
                "short_description_en": "In non aut sed illum et et eaque. Voluptatem consequuntur voluptatem est officiis beatae esse rem sint. Illum omnis unde qui qui hic eveniet eveniet. Optio corporis alias aut earum.",
                "price": "7355.00",
                "sale_price": "1.00",
                "stock": 849,
                "spec": null,
                "seo_title": "aut omnis possimus",
                "seo_keyword": "deserunt",
                "seo_description": "Veritatis sed nisi aspernatur porro magnam aut.",
                "benefit": "Minus laudantium magni labore eos perferendis rerum reprehenderit. Temporibus explicabo voluptas qui laborum suscipit magni repellat.",
                "benefit_en": "Fugit optio veniam omnis quod enim explicabo. Quibusdam a reiciendis quo assumenda. Incidunt voluptas quia maiores adipisci maxime quasi dolores. Harum necessitatibus deserunt beatae qui impedit aut est.",
                "tech_description": "Doloremque voluptatem odio at. Rerum deleniti fugiat officia explicabo velit qui. Quas et provident cumque quas reprehenderit aut nihil quo.",
                "tech_description_en": "Voluptatem eaque quo dolor tempora architecto facere. Sequi architecto architecto animi id perferendis quidem enim ipsa. Aut et quo dolores nisi eaque eius.",
                "description": "Molestias consequatur et distinctio voluptatibus. Accusantium quod et saepe ea eos. Necessitatibus sed nesciunt dolore consectetur.",
                "description_en": "Est eveniet quod voluptatem rerum in quis et voluptas. Nemo ducimus voluptate amet laudantium aut tempore mollitia debitis. Odit ad doloribus sed possimus. Totam voluptatibus veritatis tenetur et aut aut.",
                "usage": "Quo nisi dicta cumque delectus. Omnis ad nobis omnis laboriosam natus illum. Optio et delectus a earum.",
                "usage_en": "Saepe consequuntur sequi quas. Sequi sunt rerum expedita voluptatibus. Provident magnam dolore rerum cumque atque porro molestias. Temporibus illum illo veritatis omnis. Voluptatibus tenetur corrupti suscipit tempora temporibus et.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?61007",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?62913",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?35393",
                "product_video": null,
                "status": 2,
                "rating": 1.25,
                "sold_count": 6167,
                "review_count": 9096,
                "created_at": "2020-09-13 13:59:11",
                "updated_at": "2020-09-09 21:45:36",
                "product_category": {
                    "id": 5,
                    "name": "面霜",
                    "slug": "sint-quasi",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?26901",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?79117",
                    "title": "vero voluptatem quas",
                    "title_en": "est expedita libero",
                    "sub_title": "quia sed ipsum",
                    "describe": "Id necessitatibus consequatur qui quasi neque sunt maiores debitis. Dolor fuga a veritatis laborum eius atque molestias. Ut ea aliquam provident suscipit sed quis dolorem reiciendis.",
                    "describe_en": "Aut ut voluptatem aut sed. Quia rem voluptas minus a iure qui quis. Odio et blanditiis enim ea nulla ab. Consequatur est debitis eos debitis.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?34882",
                    "parent_id": 14,
                    "level": 1,
                    "created_at": "2020-09-13 13:09:13",
                    "updated_at": "2020-08-30 17:06:37"
                }
            },
            {
                "id": 3,
                "product_category_id": 13,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "consequatur molestiae eum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?78648",
                "slug": "corporis-accusantium",
                "short_description": "Iusto voluptatem temporibus amet.",
                "short_description_en": "Ratione eos tempore voluptate occaecati. Eius natus incidunt laboriosam alias rerum cupiditate.",
                "price": "6798.00",
                "sale_price": "1.00",
                "stock": 167,
                "spec": null,
                "seo_title": "autem quis non",
                "seo_keyword": "optio",
                "seo_description": "Quis vero ut corrupti nesciunt sint.",
                "benefit": "Qui magnam ullam unde adipisci non laudantium ut. Autem dolor ut esse officia. Provident animi quam minus. Consequatur perspiciatis impedit aut nobis dignissimos eos qui fugit. Alias aut consectetur iusto ipsum.",
                "benefit_en": "Qui inventore ut enim maxime voluptates dolorem quo. Provident est perferendis eum blanditiis. Et ullam adipisci consequatur accusamus nulla sit.",
                "tech_description": "Aut omnis minus maxime nostrum dolore. Doloribus velit magnam aspernatur maxime voluptatem. Animi provident maiores ratione et et.",
                "tech_description_en": "Velit in officiis aspernatur occaecati. Qui non nemo itaque et. Quis dolorem illum voluptatem exercitationem corrupti. Totam a enim id sed reiciendis soluta repudiandae.",
                "description": "Quisquam aut commodi facere a eos nobis rerum quos. Et mollitia atque et est. A at aspernatur nulla sed et consequatur.",
                "description_en": "Id consequatur nisi ut omnis eum. Laborum pariatur ab laborum nihil. Doloremque aliquam a magnam harum eos quisquam quia nesciunt.",
                "usage": "Aperiam reprehenderit molestias excepturi necessitatibus est itaque perspiciatis. Numquam rerum reiciendis deleniti sed voluptatem aliquid. Commodi animi provident ratione voluptate sunt dolorem optio. Ad ab itaque quibusdam et.",
                "usage_en": "Aut modi praesentium minima pariatur sunt eligendi neque. Qui reprehenderit illo magnam perspiciatis. Ut magni at non soluta facilis perspiciatis repudiandae.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?64491",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?55543",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?65710",
                "product_video": null,
                "status": 2,
                "rating": 9.04,
                "sold_count": 2664,
                "review_count": 7963,
                "created_at": "2020-09-11 02:51:39",
                "updated_at": "2020-08-22 20:08:30",
                "product_category": {
                    "id": 13,
                    "name": "洁面",
                    "slug": "earum-pariatur",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?15142",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?96374",
                    "title": "rerum corrupti accusantium",
                    "title_en": "at voluptas perferendis",
                    "sub_title": "error asperiores expedita",
                    "describe": "Sed aperiam sint dolore ullam quam maiores rerum. Odio rerum numquam quidem nam officiis. Voluptates delectus rem eos id quis iusto molestiae est. Architecto mollitia fugit officia incidunt vel aut.",
                    "describe_en": "Saepe fugit possimus ut dicta fugit. Id qui omnis aut nemo magnam. Labore placeat nam soluta quod. Dolorem odit sequi doloribus magni ratione.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?80285",
                    "parent_id": 4,
                    "level": 1,
                    "created_at": "2020-08-29 13:52:06",
                    "updated_at": "2020-09-14 13:29:03"
                }
            },
            {
                "id": 4,
                "product_category_id": 3,
                "product_name": "黑钻焕肤水",
                "product_name_en": "quis adipisci officia",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?84244",
                "slug": "ut-voluptatem",
                "short_description": "Quis nisi quia libero.",
                "short_description_en": "Labore architecto non soluta doloremque doloribus quis. Unde non quis possimus asperiores veniam. Placeat eos autem facere.",
                "price": "8963.00",
                "sale_price": "1.00",
                "stock": 350,
                "spec": null,
                "seo_title": "porro distinctio magni",
                "seo_keyword": "adipisci",
                "seo_description": "Nihil nemo molestiae voluptas architecto id nostrum.",
                "benefit": "Voluptatem nihil et voluptates vel laborum ad quisquam. Distinctio similique illum excepturi distinctio. Enim fugiat unde nostrum consequatur veritatis. Eum odio et voluptas ut aut veniam.",
                "benefit_en": "Sequi dolores dolore repellendus iure. Repellendus voluptas aut culpa sunt debitis similique accusamus. Quasi ducimus omnis eveniet in omnis cum voluptatem. Consequatur facere repellat et nihil ut.",
                "tech_description": "Aut in sit aperiam sequi provident. Sunt qui tempora ut eaque et minus rerum. Reprehenderit ullam molestias dignissimos natus.",
                "tech_description_en": "Nam fugiat sint eius ut nesciunt ea sit optio. Nulla vel ipsam aliquam eos iure ut. Ab nesciunt aliquid amet ducimus qui mollitia. Totam et sit alias maiores autem.",
                "description": "Quae a possimus tempore quo exercitationem qui suscipit. Quas totam voluptas architecto consequatur corrupti provident. Voluptates ducimus ipsa eum necessitatibus voluptatum praesentium ipsum autem. Odit eos provident iusto maiores veritatis. Adipisci soluta quia iste aliquam fuga voluptate.",
                "description_en": "Voluptas suscipit cum sit ea sit eligendi. Dolorem sapiente repellendus iste suscipit qui libero et. Magni dolorum eveniet molestiae dolor dolores minima. Quo consequuntur qui dolorem quia.",
                "usage": "Iusto amet at inventore sapiente culpa. Explicabo earum beatae iusto ex at necessitatibus cumque. Suscipit voluptatem aperiam labore. Sapiente ex cum est reiciendis qui officiis ea maxime. Omnis molestiae officiis odit voluptatem eius nobis.",
                "usage_en": "Qui omnis quaerat dolore. Placeat dignissimos magnam quia amet asperiores. Consequuntur saepe ea veritatis eveniet ex.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?18994",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?79398",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?96545",
                "product_video": null,
                "status": 2,
                "rating": 7.54,
                "sold_count": 1104,
                "review_count": 5134,
                "created_at": "2020-08-29 09:10:39",
                "updated_at": "2020-09-09 11:23:25",
                "product_category": {
                    "id": 3,
                    "name": "隔离",
                    "slug": "excepturi-aut",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?14967",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?86309",
                    "title": "et quam quae",
                    "title_en": "in harum ipsum",
                    "sub_title": "ipsum a quia",
                    "describe": "Et in occaecati aliquid a quia. Eos beatae sunt consectetur dicta sit rerum est. Sunt atque quia aliquid hic dolores sequi id. At sapiente excepturi aliquam odit est. Aut dolorem iste magni.",
                    "describe_en": "Non eum sapiente accusantium nihil eveniet vel. Rem deleniti praesentium ea. Aut laboriosam et eos dolorem ipsum fugit ducimus. Ad hic eos minima labore.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?74644",
                    "parent_id": 5,
                    "level": 1,
                    "created_at": "2020-09-09 04:48:31",
                    "updated_at": "2020-09-13 11:27:46"
                }
            },
            {
                "id": 5,
                "product_category_id": 18,
                "product_name": "黑钻肌光精华",
                "product_name_en": "aut tempora perspiciatis",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?40467",
                "slug": "aut-eum",
                "short_description": "Consequatur dolorem quis fugiat quas eaque.",
                "short_description_en": "Vero omnis quia dolore quia. Dolor qui est saepe nemo a. Commodi nam ea magni omnis ut ad. Aliquam omnis eius iusto explicabo facere.",
                "price": "8951.00",
                "sale_price": "1.00",
                "stock": 148,
                "spec": null,
                "seo_title": "amet rem sunt",
                "seo_keyword": "autem",
                "seo_description": "Et et cupiditate voluptas pariatur dolor.",
                "benefit": "Qui omnis dolorem est molestias velit qui. Et voluptatem nulla atque atque architecto eveniet. Quas id suscipit at ad aspernatur natus aut.",
                "benefit_en": "Eos dicta ut molestiae alias itaque qui alias aut. Aliquam est omnis voluptas voluptas. Voluptas quis et culpa possimus fugit ratione in.",
                "tech_description": "Ipsa distinctio sint delectus dolore molestiae. Odit illo ex explicabo pariatur et sed. Enim aut impedit rerum rerum pariatur harum. Quibusdam doloribus ut possimus est praesentium.",
                "tech_description_en": "Nobis repellendus saepe nihil. Perferendis minima perspiciatis sunt ab aut dolor tempore. Aspernatur velit sed reprehenderit commodi dolores labore est. Aut nostrum repudiandae enim nesciunt beatae.",
                "description": "Voluptas vero quae tenetur nihil optio qui nulla reprehenderit. Quis quod molestias non exercitationem eos officiis. Sunt perspiciatis quod vel et cupiditate. Corporis et doloremque asperiores est doloremque. Nesciunt non delectus qui pariatur eos ut porro.",
                "description_en": "Ut expedita non numquam rerum dignissimos. Pariatur magnam perspiciatis nobis non. Aliquam rerum consequatur repellendus aperiam.",
                "usage": "Architecto aut ea ex ratione eum et cum. Maiores quia velit iste. Omnis maxime cupiditate voluptas eius eos itaque sequi dolore. Necessitatibus soluta modi voluptatem et.",
                "usage_en": "Atque numquam quia nemo a mollitia voluptates consequuntur. Odit et voluptatibus porro pariatur ratione voluptates nobis. Natus et culpa earum eligendi. Et quae illo cum nesciunt.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?62090",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?32432",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?96447",
                "product_video": null,
                "status": 1,
                "rating": 9.11,
                "sold_count": 4096,
                "review_count": 6956,
                "created_at": "2020-09-10 19:50:15",
                "updated_at": "2020-09-17 21:02:55",
                "product_category": {
                    "id": 18,
                    "name": "眼线",
                    "slug": "voluptas-quasi",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?93976",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?46730",
                    "title": "vitae est et",
                    "title_en": "hic maiores ea",
                    "sub_title": "dignissimos soluta totam",
                    "describe": "Id nulla quas nihil vel. Et at deleniti sit saepe recusandae totam corporis adipisci. Repudiandae repellendus et magnam ut. Molestias illo est qui natus vel. Ipsam in cupiditate est.",
                    "describe_en": "Non iure consequatur dolorem vitae ea. Voluptas sit qui minus iure enim. Exercitationem adipisci at quia quibusdam sed eligendi.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?30251",
                    "parent_id": 6,
                    "level": 1,
                    "created_at": "2020-08-25 19:45:34",
                    "updated_at": "2020-08-27 09:52:32"
                }
            },
            {
                "id": 6,
                "product_category_id": 7,
                "product_name": "黑钻焕肤水",
                "product_name_en": "quam reprehenderit iure",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?61561",
                "slug": "totam-quos",
                "short_description": "Nostrum sed possimus aut.",
                "short_description_en": "Veniam ut quo cumque non modi alias. At modi temporibus harum impedit nihil consequatur. Magni molestiae reprehenderit vel.",
                "price": "1041.00",
                "sale_price": "1.00",
                "stock": 900,
                "spec": null,
                "seo_title": "ad ipsa eum",
                "seo_keyword": "corporis",
                "seo_description": "Nihil tempora quia non illum dolorem sint.",
                "benefit": "Ut velit animi enim. Non quas doloribus quibusdam qui. Hic ut expedita delectus ex ipsum. Ipsam sit quia fuga.",
                "benefit_en": "Corrupti reprehenderit minima amet quia. Odit sit asperiores assumenda inventore unde. Eum consectetur corporis accusamus et. Aut temporibus est quos vitae voluptate facere.",
                "tech_description": "Recusandae quasi aut quis. Et veniam animi corrupti quaerat mollitia ad ut libero. Vero quos aliquam non mollitia qui cupiditate et.",
                "tech_description_en": "Ea quasi ad eveniet. Sint a in laborum voluptatem optio sapiente. Temporibus quia dolor magnam odio enim sit quaerat. Eius tempora nesciunt reiciendis pariatur ad dolor.",
                "description": "Accusamus est libero suscipit ab vitae. Sit quam sunt repellendus quis molestias excepturi. Aut eum iste alias aut. Impedit sit autem neque architecto.",
                "description_en": "Illo consequatur voluptate animi numquam at ut. Quibusdam consequatur libero deserunt voluptates minus laboriosam sint. Ratione dignissimos maxime necessitatibus nihil voluptatem. Nesciunt tempore totam quod et quis natus laboriosam.",
                "usage": "Ut consequatur repellendus fugit dolorem. Explicabo sapiente natus accusamus totam cupiditate. Amet quo similique aut quia harum ducimus.",
                "usage_en": "Ex minus consequatur repudiandae non. Doloribus odio quaerat repudiandae debitis velit facere ut. Deserunt et itaque veritatis consectetur sint.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?67553",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?46436",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?24853",
                "product_video": null,
                "status": 3,
                "rating": 1.58,
                "sold_count": 2004,
                "review_count": 3083,
                "created_at": "2020-09-20 21:58:38",
                "updated_at": "2020-09-18 10:08:28",
                "product_category": {
                    "id": 7,
                    "name": "唇膏",
                    "slug": "nemo-eligendi",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?64433",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?77295",
                    "title": "inventore sit provident",
                    "title_en": "mollitia non consequuntur",
                    "sub_title": "sit et deleniti",
                    "describe": "Commodi consequatur excepturi quo tempora nemo qui. Voluptate adipisci sunt odit nesciunt eius vel accusamus. Tenetur ea qui nulla similique aspernatur exercitationem et.",
                    "describe_en": "Eum qui odio magni quibusdam. Maiores nulla sed voluptatum similique. Rerum accusamus explicabo esse similique libero. Dolor veniam tempore aperiam atque. Rerum iste alias aut sed ullam.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?90646",
                    "parent_id": 13,
                    "level": 1,
                    "created_at": "2020-09-12 23:47:18",
                    "updated_at": "2020-08-29 01:39:27"
                }
            },
            {
                "id": 7,
                "product_category_id": 8,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "cupiditate ipsa et",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?59779",
                "slug": "voluptatem-quibusdam",
                "short_description": "Perspiciatis velit voluptas libero eveniet magnam necessitatibus.",
                "short_description_en": "Similique earum provident voluptate enim eligendi quasi blanditiis. Quaerat consequatur mollitia sit et veritatis. Soluta sed sed at voluptas possimus similique. Est magnam possimus dolorem voluptatem officiis corrupti.",
                "price": "9686.00",
                "sale_price": "1.00",
                "stock": 608,
                "spec": null,
                "seo_title": "cumque culpa voluptate",
                "seo_keyword": "sunt",
                "seo_description": "Autem atque quo et quisquam quia.",
                "benefit": "Odit dolor cum blanditiis facilis occaecati ratione. Est dolorem mollitia repellat placeat. Quis voluptas praesentium sapiente culpa excepturi reprehenderit ea.",
                "benefit_en": "Cupiditate ut quia ut non. Debitis voluptatem fuga magnam fuga dolor. Natus officia qui aperiam iste fuga possimus quos et.",
                "tech_description": "Nesciunt aut dolor ipsum excepturi qui quia. Eaque veritatis fugit eaque aut aut repellendus. Sed totam et asperiores molestias vel.",
                "tech_description_en": "Dolorum voluptas molestiae quia id impedit. Dolorem eum dolor non. Magnam saepe et possimus quis soluta fuga.",
                "description": "Nostrum quam molestiae ratione dolore optio. Atque dolores dolore sed in illum perferendis. Molestias ullam dicta autem quis.",
                "description_en": "Eum perspiciatis maiores autem recusandae aspernatur in. Quis rerum quis est fuga in et quam. Iure ipsum rem animi. Qui veniam saepe explicabo facere vero quasi vel. Nostrum iusto sed quam dolor.",
                "usage": "Accusamus perspiciatis et nostrum provident unde et delectus rerum. Iure sint ducimus consectetur rem atque voluptas. Provident tenetur omnis ullam unde quia. Ea quia laborum deserunt labore enim.",
                "usage_en": "Quasi consequatur magni laudantium accusantium dolorum adipisci accusantium. Illo ullam quas provident ipsam quidem dolore. Officiis cupiditate optio est eius.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?71055",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?40238",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?10191",
                "product_video": null,
                "status": 1,
                "rating": 6.59,
                "sold_count": 5624,
                "review_count": 6828,
                "created_at": "2020-09-04 19:05:19",
                "updated_at": "2020-09-05 19:47:17",
                "product_category": {
                    "id": 8,
                    "name": "套装C",
                    "slug": "fugiat-in",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?66732",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?17263",
                    "title": "ipsam explicabo a",
                    "title_en": "magni et laborum",
                    "sub_title": "doloremque neque aut",
                    "describe": "Voluptatibus sequi veritatis exercitationem error eum quia aut. Repellendus porro error id. Fugiat quidem vero deserunt sequi.",
                    "describe_en": "Reprehenderit recusandae rem hic ut pariatur. Nisi eius rem accusamus sequi accusamus. Nulla ex facere veritatis at rerum.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?26681",
                    "parent_id": 16,
                    "level": 1,
                    "created_at": "2020-09-01 08:30:49",
                    "updated_at": "2020-08-26 17:16:15"
                }
            },
            {
                "id": 8,
                "product_category_id": 14,
                "product_name": "钻石焕活面膜",
                "product_name_en": "officiis sequi sint",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?33675",
                "slug": "ut-earum",
                "short_description": "Quidem sit neque autem.",
                "short_description_en": "Doloribus iure ratione esse sint veritatis omnis eligendi aliquid. Aut quasi tenetur necessitatibus non aut veritatis. Quis nisi quae ut neque. Facere voluptas odio dolorem nostrum.",
                "price": "3327.00",
                "sale_price": "1.00",
                "stock": 538,
                "spec": null,
                "seo_title": "voluptas cumque velit",
                "seo_keyword": "praesentium",
                "seo_description": "Et unde magni molestias qui est.",
                "benefit": "Sapiente blanditiis non asperiores. Vero non rem et excepturi. Voluptatum tenetur ut omnis placeat.",
                "benefit_en": "Sed tempore est et id excepturi debitis totam. Enim aut necessitatibus ullam. Eos maxime quos a quisquam ipsam possimus. Sequi est ea vitae voluptas.",
                "tech_description": "Soluta eum natus odit voluptate. Assumenda voluptatum consequatur voluptas ullam minus sed reiciendis iure. Ea ipsam nemo fuga dicta quam nam.",
                "tech_description_en": "Optio occaecati sapiente accusantium harum nihil consequuntur reprehenderit. Vel animi et at eum rerum. Repellat quia voluptatum non tenetur qui quibusdam assumenda soluta.",
                "description": "Tempora veritatis omnis dolores eos ab ut et. Ea itaque quis qui. Enim explicabo reprehenderit iure eligendi veritatis eligendi.",
                "description_en": "Est quis ea reprehenderit sit et vel. Animi officia officia saepe. Voluptas autem rem corporis non. Facere quia earum pariatur.",
                "usage": "Cupiditate atque non tempora qui commodi. Ipsa aliquid ea quo est impedit non consequatur voluptatem. Placeat nisi nesciunt facilis delectus optio et voluptatem id. Dicta aspernatur praesentium autem accusantium in.",
                "usage_en": "Et accusantium atque nemo quasi officiis quibusdam. Eos ullam veritatis placeat veniam et rerum esse.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?45249",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?28085",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?20421",
                "product_video": null,
                "status": 2,
                "rating": 0.11,
                "sold_count": 5192,
                "review_count": 9104,
                "created_at": "2020-08-26 15:05:03",
                "updated_at": "2020-08-30 20:29:31",
                "product_category": {
                    "id": 14,
                    "name": "护肤系列",
                    "slug": "dolor-ad",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?62555",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?97581",
                    "title": "voluptas quod eveniet",
                    "title_en": "repellendus dolorum veritatis",
                    "sub_title": "eum in molestiae",
                    "describe": "Voluptas enim et unde. Temporibus minus quasi nihil sed odit fuga pariatur. Molestiae culpa velit neque corporis. Omnis provident dolor omnis a.",
                    "describe_en": "Reiciendis reiciendis quasi in omnis. Quia sint consequatur aut ipsa. Et nobis sint asperiores quis rerum minus dolorem doloremque.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?66984",
                    "parent_id": 23,
                    "level": 1,
                    "created_at": "2020-09-20 05:31:12",
                    "updated_at": "2020-08-22 07:25:01"
                }
            },
            {
                "id": 9,
                "product_category_id": 13,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "labore eos quia",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?66799",
                "slug": "eum-molestias",
                "short_description": "Non nihil est quis minima consectetur.",
                "short_description_en": "Unde laborum dicta occaecati possimus. Itaque porro eos culpa culpa totam. Cupiditate aut laborum aut nemo.",
                "price": "4367.00",
                "sale_price": "1.00",
                "stock": 104,
                "spec": null,
                "seo_title": "quibusdam ut deleniti",
                "seo_keyword": "iure",
                "seo_description": "Dignissimos quidem quae explicabo.",
                "benefit": "Qui laborum illum id beatae ad. A sit inventore quod eaque nostrum enim consectetur ratione. Minus voluptates blanditiis voluptatum aut totam quas ipsam.",
                "benefit_en": "Et architecto vel minus quae repudiandae. Ut architecto ipsa ut dolore esse corporis. Ullam ut cupiditate quia nihil cum. Optio architecto sit natus aut aliquam repellat architecto. Eveniet assumenda provident hic quia ipsa tempore perferendis.",
                "tech_description": "Cumque necessitatibus perferendis blanditiis molestiae error. Illum quam omnis eligendi et unde.",
                "tech_description_en": "Quae et deleniti assumenda molestias magnam accusantium. Explicabo laboriosam inventore velit sit illum. Numquam esse corporis qui culpa ipsum fugit sequi aut. Et fuga exercitationem nobis laudantium.",
                "description": "Impedit officia esse pariatur. Exercitationem cum aliquid ab nam laborum amet architecto. Vitae est neque aut sit qui. Quo odit quod cumque itaque.",
                "description_en": "Minus odit quia esse magni. Consequatur harum fugit fuga inventore laboriosam dolores nisi. Et quos nostrum voluptatem fugiat in voluptas. Rerum sit voluptas explicabo rerum.",
                "usage": "Corporis exercitationem itaque iusto accusantium. Minus sapiente consequuntur neque voluptate. Quia asperiores rerum facere nulla sed. Quaerat qui officia consequatur voluptatem ut.",
                "usage_en": "Quidem atque error eum ea commodi est quam. Consequatur soluta repellendus culpa sed consequatur sit ut aspernatur. Est quo nostrum commodi accusamus. Eum laborum impedit sed.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?25830",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?90698",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?34167",
                "product_video": null,
                "status": 2,
                "rating": 0.9,
                "sold_count": 9210,
                "review_count": 5795,
                "created_at": "2020-09-12 08:32:57",
                "updated_at": "2020-08-28 03:39:18",
                "product_category": {
                    "id": 13,
                    "name": "洁面",
                    "slug": "earum-pariatur",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?15142",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?96374",
                    "title": "rerum corrupti accusantium",
                    "title_en": "at voluptas perferendis",
                    "sub_title": "error asperiores expedita",
                    "describe": "Sed aperiam sint dolore ullam quam maiores rerum. Odio rerum numquam quidem nam officiis. Voluptates delectus rem eos id quis iusto molestiae est. Architecto mollitia fugit officia incidunt vel aut.",
                    "describe_en": "Saepe fugit possimus ut dicta fugit. Id qui omnis aut nemo magnam. Labore placeat nam soluta quod. Dolorem odit sequi doloribus magni ratione.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?80285",
                    "parent_id": 4,
                    "level": 1,
                    "created_at": "2020-08-29 13:52:06",
                    "updated_at": "2020-09-14 13:29:03"
                }
            },
            {
                "id": 10,
                "product_category_id": 18,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "quas ipsa est",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?56051",
                "slug": "dolor-optio",
                "short_description": "Quam doloribus eos quae accusantium.",
                "short_description_en": "Sunt omnis nemo debitis eligendi occaecati sed unde eaque. Sed dolor est necessitatibus doloremque. Est dicta eos ab enim est quae. Qui sequi qui vel dolor sed dolor dolores.",
                "price": "9981.00",
                "sale_price": "1.00",
                "stock": 163,
                "spec": null,
                "seo_title": "quas repellat sit",
                "seo_keyword": "consectetur",
                "seo_description": "Et nemo aliquid et dolores dolorem.",
                "benefit": "Recusandae corrupti nulla omnis sed doloribus culpa eaque accusantium. Eos et explicabo est eveniet alias. Omnis sit corporis dolores et consectetur dolor sit. Inventore corporis ab minus assumenda temporibus velit.",
                "benefit_en": "Explicabo fuga est saepe vel. Omnis deserunt ut dolore accusantium assumenda corporis velit. A recusandae ab aut molestias omnis aut aut sapiente. Nihil voluptates architecto facilis a quaerat nam nostrum.",
                "tech_description": "Autem velit architecto magni sint at. Dolorem autem similique sit non est asperiores amet. Impedit error nam ut ut non nulla.",
                "tech_description_en": "Odit reprehenderit laudantium doloremque et. Incidunt sit dicta dignissimos aperiam reiciendis eveniet aut. Consequuntur earum fuga iure et perferendis. Consequatur sit sunt eos nobis eos et.",
                "description": "Delectus tempora illo aut odio sapiente. Hic sit harum debitis ad. In similique id quaerat numquam. Eum pariatur ipsa neque dolor est.",
                "description_en": "Sequi dolores minima eos. Ut nihil velit vero laboriosam nihil consectetur ullam. Tenetur omnis sed debitis. Eum debitis totam quia quod.",
                "usage": "Vero saepe quos hic natus officiis architecto dicta. Deleniti id facere ex debitis ipsam sit et. Possimus inventore quasi dolor. Voluptas minima accusantium inventore est deserunt eos corrupti.",
                "usage_en": "Est eum eligendi et vitae. Velit reiciendis odio molestias ut. Aut quia deleniti impedit. Veniam dolorem tempora quas eveniet quibusdam eum recusandae omnis. Quae sed quis et qui rerum fugiat et ut.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?10209",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?35150",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?75799",
                "product_video": null,
                "status": 3,
                "rating": 3.29,
                "sold_count": 2581,
                "review_count": 9956,
                "created_at": "2020-09-12 04:53:29",
                "updated_at": "2020-08-23 18:03:00",
                "product_category": {
                    "id": 18,
                    "name": "眼线",
                    "slug": "voluptas-quasi",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?93976",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?46730",
                    "title": "vitae est et",
                    "title_en": "hic maiores ea",
                    "sub_title": "dignissimos soluta totam",
                    "describe": "Id nulla quas nihil vel. Et at deleniti sit saepe recusandae totam corporis adipisci. Repudiandae repellendus et magnam ut. Molestias illo est qui natus vel. Ipsam in cupiditate est.",
                    "describe_en": "Non iure consequatur dolorem vitae ea. Voluptas sit qui minus iure enim. Exercitationem adipisci at quia quibusdam sed eligendi.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?30251",
                    "parent_id": 6,
                    "level": 1,
                    "created_at": "2020-08-25 19:45:34",
                    "updated_at": "2020-08-27 09:52:32"
                }
            },
            {
                "id": 11,
                "product_category_id": 1,
                "product_name": "钻石焕活面膜",
                "product_name_en": "vitae consequatur ut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?13055",
                "slug": "maxime-facere",
                "short_description": "Quia occaecati dolorum in necessitatibus non recusandae.",
                "short_description_en": "Excepturi impedit doloribus quibusdam sit et maxime. Non magni vitae repudiandae labore ut quo saepe dolorem. Ut ut qui nihil quo cumque quod aspernatur. Sed inventore et cumque earum placeat ea.",
                "price": "8971.00",
                "sale_price": "1.00",
                "stock": 697,
                "spec": null,
                "seo_title": "neque sit molestiae",
                "seo_keyword": "illo",
                "seo_description": "Eveniet rerum esse dicta hic.",
                "benefit": "Qui consequuntur ipsum vero veniam. Voluptas nemo qui sed nobis doloremque. Amet commodi ut unde deserunt. Eius quisquam nobis distinctio et quidem.",
                "benefit_en": "Occaecati nihil unde labore. Autem consequatur adipisci non quis enim. Qui sed fugit et rerum atque provident. Corrupti assumenda dolore architecto accusantium.",
                "tech_description": "Est quidem facilis soluta voluptates impedit amet. Rerum cumque minus hic eum nemo magnam tempore. Sint aut voluptates blanditiis suscipit molestiae.",
                "tech_description_en": "Quis impedit non repellat blanditiis ut. In necessitatibus commodi aperiam ea et. Molestias numquam rerum provident totam eaque inventore. Tempora voluptatem qui dignissimos libero et inventore sapiente quae.",
                "description": "Doloremque voluptate reiciendis est dolore repellat. Quis explicabo laboriosam non provident. Accusamus dolorem eum maiores soluta.",
                "description_en": "Facere in voluptates est reprehenderit officiis iste blanditiis. Hic numquam et et reprehenderit. Aut deserunt et illum suscipit esse possimus in ratione.",
                "usage": "Ut qui nam doloribus dolorem dolores eligendi. Nulla aut aut voluptas aut assumenda repudiandae.",
                "usage_en": "Et eligendi in sint est. Rem aliquam dolores eos repellat. Amet reprehenderit molestiae quos maxime.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?71416",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?43672",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?98312",
                "product_video": null,
                "status": 2,
                "rating": 2.52,
                "sold_count": 6797,
                "review_count": 3222,
                "created_at": "2020-09-06 06:47:42",
                "updated_at": "2020-09-12 15:10:23",
                "product_category": {
                    "id": 1,
                    "name": "精油",
                    "slug": "reiciendis-recusandae",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?97639",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?25398",
                    "title": "molestias sint eos",
                    "title_en": "eveniet qui porro",
                    "sub_title": "odit nesciunt rerum",
                    "describe": "Error aut laudantium iusto. Et dolores ab nisi vel. Distinctio eaque assumenda non vero.",
                    "describe_en": "Voluptatem aperiam sed et ab qui esse fuga molestias. Qui porro voluptatibus dolor corrupti ut repellat. Sequi nisi ut repellendus omnis est.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?33612",
                    "parent_id": 23,
                    "level": 1,
                    "created_at": "2020-09-09 19:46:11",
                    "updated_at": "2020-09-03 20:37:13"
                }
            },
            {
                "id": 12,
                "product_category_id": 13,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "praesentium at modi",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?55701",
                "slug": "natus-ut",
                "short_description": "Distinctio quia est dolorum animi nemo.",
                "short_description_en": "Ut quia magnam distinctio ipsa rerum aperiam. Et exercitationem sunt maxime illo. Non culpa quidem ad quam quia quis.",
                "price": "2755.00",
                "sale_price": "1.00",
                "stock": 75,
                "spec": null,
                "seo_title": "amet itaque suscipit",
                "seo_keyword": "aut",
                "seo_description": "At delectus et saepe.",
                "benefit": "Quo dolor rerum corrupti tenetur quisquam laborum ducimus. Quis aut sit occaecati ut ut non maxime.",
                "benefit_en": "Dolorem neque ab suscipit nam. Sed iste aliquid sed quibusdam aliquid enim ut. Et explicabo facilis non.",
                "tech_description": "Nam est voluptatem corrupti excepturi maiores soluta. Quos laborum maxime est. Rerum eum nam tenetur perspiciatis non veniam quia.",
                "tech_description_en": "Dolorem voluptates debitis sint consequuntur et pariatur sit. At a dignissimos praesentium dolorem. Aliquid ex consequatur commodi sint omnis sit. Iure quis ab est et omnis totam. Et assumenda eveniet repellat expedita et totam.",
                "description": "Quibusdam minus impedit ut nesciunt. Asperiores optio magnam quis ipsum praesentium ut. Sint veritatis molestias temporibus sed est. Enim aut occaecati voluptas quisquam voluptas provident quia.",
                "description_en": "A earum numquam dolores fuga quisquam sed beatae. Quia eum est eveniet. A esse eius exercitationem illum.",
                "usage": "Vel qui consequatur consequatur libero distinctio itaque. Earum neque et autem animi necessitatibus architecto aut. Ratione quibusdam porro tenetur ut. Est dolorem ut ipsam tempore. Nesciunt non recusandae ea modi.",
                "usage_en": "Porro ut corporis perferendis error nam. Minus rerum saepe quos suscipit odit hic dolorum. Dolorem aut eius corporis velit at in.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?99500",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?66939",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?10378",
                "product_video": null,
                "status": 1,
                "rating": 5.62,
                "sold_count": 1696,
                "review_count": 1990,
                "created_at": "2020-08-22 14:15:08",
                "updated_at": "2020-08-28 13:47:10",
                "product_category": {
                    "id": 13,
                    "name": "洁面",
                    "slug": "earum-pariatur",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?15142",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?96374",
                    "title": "rerum corrupti accusantium",
                    "title_en": "at voluptas perferendis",
                    "sub_title": "error asperiores expedita",
                    "describe": "Sed aperiam sint dolore ullam quam maiores rerum. Odio rerum numquam quidem nam officiis. Voluptates delectus rem eos id quis iusto molestiae est. Architecto mollitia fugit officia incidunt vel aut.",
                    "describe_en": "Saepe fugit possimus ut dicta fugit. Id qui omnis aut nemo magnam. Labore placeat nam soluta quod. Dolorem odit sequi doloribus magni ratione.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?80285",
                    "parent_id": 4,
                    "level": 1,
                    "created_at": "2020-08-29 13:52:06",
                    "updated_at": "2020-09-14 13:29:03"
                }
            },
            {
                "id": 13,
                "product_category_id": 3,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "ut unde vero",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?17011",
                "slug": "qui-quia",
                "short_description": "Aut qui et corrupti asperiores.",
                "short_description_en": "Et ducimus voluptas consequatur maxime reiciendis quo qui. Fugiat qui accusamus neque magni magni. Ut commodi vel et architecto quae expedita.",
                "price": "9989.00",
                "sale_price": "1.00",
                "stock": 848,
                "spec": null,
                "seo_title": "ducimus dolor odit",
                "seo_keyword": "voluptas",
                "seo_description": "Voluptatibus aut suscipit eum.",
                "benefit": "Eum illo voluptatum officiis praesentium. Illo amet velit aut et doloribus. Veniam minus ratione et reiciendis libero similique. Et nulla occaecati molestiae beatae at sequi.",
                "benefit_en": "Quia vitae atque molestias porro quaerat. Quos ducimus nobis voluptatum tempora accusamus vel. Eos sed ullam corporis cupiditate ut deleniti.",
                "tech_description": "Illo nostrum dicta nam debitis id occaecati. Quasi cupiditate ipsum adipisci ullam deleniti. Magni odio corrupti atque velit. Voluptates explicabo voluptatibus sit ut.",
                "tech_description_en": "Et consequatur voluptas sunt quasi ex. Dignissimos vel eos animi fugit reprehenderit modi et rem. Omnis nihil est voluptatibus sint delectus. Molestiae laboriosam nostrum commodi eos sit aut reiciendis.",
                "description": "Reiciendis qui facilis aperiam et et. Illo accusantium et voluptatibus id earum commodi fugit. Fugit dignissimos placeat nostrum consequuntur at esse earum.",
                "description_en": "Facilis qui sed ad voluptate natus animi. Nam veritatis ex nulla sit. Iusto numquam quos amet tempora ipsam temporibus earum. Dolor amet dolor et modi.",
                "usage": "Consequatur quasi sint a qui ea at. Accusamus cum quia voluptatem. Ab corporis enim deserunt blanditiis at.",
                "usage_en": "Excepturi inventore modi qui saepe. Sequi iure aut voluptatem molestias laboriosam animi. Ea tempore laboriosam iste. Ratione assumenda rerum aut ipsa maxime.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?30861",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?10556",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?17587",
                "product_video": null,
                "status": 2,
                "rating": 6.53,
                "sold_count": 3854,
                "review_count": 1988,
                "created_at": "2020-08-23 09:47:18",
                "updated_at": "2020-09-13 11:02:57",
                "product_category": {
                    "id": 3,
                    "name": "隔离",
                    "slug": "excepturi-aut",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?14967",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?86309",
                    "title": "et quam quae",
                    "title_en": "in harum ipsum",
                    "sub_title": "ipsum a quia",
                    "describe": "Et in occaecati aliquid a quia. Eos beatae sunt consectetur dicta sit rerum est. Sunt atque quia aliquid hic dolores sequi id. At sapiente excepturi aliquam odit est. Aut dolorem iste magni.",
                    "describe_en": "Non eum sapiente accusantium nihil eveniet vel. Rem deleniti praesentium ea. Aut laboriosam et eos dolorem ipsum fugit ducimus. Ad hic eos minima labore.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?74644",
                    "parent_id": 5,
                    "level": 1,
                    "created_at": "2020-09-09 04:48:31",
                    "updated_at": "2020-09-13 11:27:46"
                }
            },
            {
                "id": 14,
                "product_category_id": 18,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "temporibus vitae quis",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?11586",
                "slug": "quam-temporibus",
                "short_description": "Ea est consequuntur doloribus.",
                "short_description_en": "Impedit eos ullam cupiditate omnis quis. Non quasi ex ducimus aut. Iste voluptas dignissimos sunt velit dolor voluptates. Consequuntur eaque quo impedit eum numquam magnam qui.",
                "price": "1343.00",
                "sale_price": "1.00",
                "stock": 143,
                "spec": null,
                "seo_title": "sequi quia maiores",
                "seo_keyword": "maiores",
                "seo_description": "Ex aut laboriosam rerum.",
                "benefit": "A ut fugiat eum minus impedit. Aut voluptas perspiciatis nostrum aliquam quis modi quia. Omnis aut nemo reprehenderit velit fugiat quis nam. Molestiae dolor vel culpa quis.",
                "benefit_en": "Voluptas odio et commodi fugit qui vitae temporibus recusandae. Quia laboriosam sapiente veritatis id est aut in. Ullam mollitia dolorum quia quidem aspernatur aut voluptas. Accusamus porro aspernatur autem voluptatibus tenetur aperiam sint a.",
                "tech_description": "Ratione ex in doloribus illo distinctio. Animi nesciunt iure est qui corporis consequatur. Consectetur esse nesciunt ut saepe quos repudiandae. Sunt sapiente sapiente sed voluptatem modi qui rerum quae.",
                "tech_description_en": "Quidem quod eveniet occaecati commodi commodi. Consequatur optio mollitia itaque ea. Itaque facere itaque hic.",
                "description": "Harum explicabo dolore non. Rerum eum minima eaque et ratione. Deserunt ut dolor quia iure. Molestias sint dolorem et quos rerum.",
                "description_en": "Nobis numquam fugiat explicabo eveniet sit unde labore. Nihil provident laudantium animi. Quia rerum accusantium et est est consequatur porro.",
                "usage": "Esse dolorum distinctio suscipit temporibus. Quaerat aspernatur architecto quidem magnam provident. In veritatis cumque repellendus cumque.",
                "usage_en": "Nihil laudantium odio reprehenderit recusandae in maxime cum soluta. Dolores qui asperiores ullam voluptatem error est esse. Et ut earum ab exercitationem unde omnis.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?30185",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?31078",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?98105",
                "product_video": null,
                "status": 1,
                "rating": 2.34,
                "sold_count": 4259,
                "review_count": 2787,
                "created_at": "2020-09-17 20:08:59",
                "updated_at": "2020-09-19 05:58:33",
                "product_category": {
                    "id": 18,
                    "name": "眼线",
                    "slug": "voluptas-quasi",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?93976",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?46730",
                    "title": "vitae est et",
                    "title_en": "hic maiores ea",
                    "sub_title": "dignissimos soluta totam",
                    "describe": "Id nulla quas nihil vel. Et at deleniti sit saepe recusandae totam corporis adipisci. Repudiandae repellendus et magnam ut. Molestias illo est qui natus vel. Ipsam in cupiditate est.",
                    "describe_en": "Non iure consequatur dolorem vitae ea. Voluptas sit qui minus iure enim. Exercitationem adipisci at quia quibusdam sed eligendi.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?30251",
                    "parent_id": 6,
                    "level": 1,
                    "created_at": "2020-08-25 19:45:34",
                    "updated_at": "2020-08-27 09:52:32"
                }
            },
            {
                "id": 15,
                "product_category_id": 6,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "ut et quod",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?60263",
                "slug": "sed-aut",
                "short_description": "Dolores excepturi et asperiores amet.",
                "short_description_en": "Sed aut dolores eius illo sit cum. Deleniti esse ipsum ea repellendus minus. Nihil aperiam incidunt magnam quis. Sed qui incidunt ut numquam eveniet. Doloribus nihil rerum laboriosam cupiditate ratione.",
                "price": "6084.00",
                "sale_price": "1.00",
                "stock": 71,
                "spec": null,
                "seo_title": "reprehenderit facilis qui",
                "seo_keyword": "expedita",
                "seo_description": "Deserunt earum voluptatem et ut.",
                "benefit": "Et deserunt perferendis consequatur accusamus. Consequatur reiciendis consequatur autem commodi sint ea. Eaque omnis perspiciatis provident veniam quia.",
                "benefit_en": "Ratione iusto magni tenetur dignissimos sit sit. Dolore deserunt incidunt quasi eligendi. Culpa a facere sint qui impedit ipsam animi. Ad illo vero molestiae dolor laborum.",
                "tech_description": "Eum explicabo aut nihil dolor. Omnis incidunt fugiat nisi earum amet suscipit earum. Unde delectus provident eius dolor eos. Asperiores ut dolores totam eius.",
                "tech_description_en": "Voluptatem dignissimos ut labore quasi ex reprehenderit. Quis ex error enim quod odit. Eligendi beatae est iure.",
                "description": "Aliquid aliquid iusto ut error commodi. Quos corrupti ut et sunt sint sequi sapiente accusantium. Qui in fugit culpa est quia ratione. Aut fugit non facere recusandae.",
                "description_en": "Reprehenderit harum ratione consequatur quia. Sint voluptas ut dolorem.",
                "usage": "Voluptates aut dolorem dolor sequi laborum similique. Fugiat quasi asperiores cum est aut. Nihil accusantium cum soluta ut ratione expedita.",
                "usage_en": "Architecto cupiditate et ipsam delectus et blanditiis accusantium. In earum necessitatibus sed. Et voluptate ullam quae veritatis odit aut. Ut aut dolor cupiditate.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?99093",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?25973",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?19552",
                "product_video": null,
                "status": 1,
                "rating": 5.36,
                "sold_count": 8126,
                "review_count": 7976,
                "created_at": "2020-08-27 19:56:13",
                "updated_at": "2020-08-21 19:19:48",
                "product_category": {
                    "id": 6,
                    "name": "护肤系列",
                    "slug": "placeat-suscipit",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?50269",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?15503",
                    "title": "est similique ut",
                    "title_en": "enim culpa dignissimos",
                    "sub_title": "alias omnis quam",
                    "describe": "Ut possimus omnis ipsum tenetur. Nam omnis quibusdam excepturi sit.",
                    "describe_en": "Consequatur voluptate quia enim sed. Voluptatibus sunt ea est voluptates. Et a reprehenderit aspernatur quia.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?10832",
                    "parent_id": 0,
                    "level": 1,
                    "created_at": "2020-08-24 04:45:13",
                    "updated_at": "2020-09-21 05:04:13"
                }
            },
            {
                "id": 16,
                "product_category_id": 3,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "nihil dolorem veritatis",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?94690",
                "slug": "voluptatem-rerum",
                "short_description": "Porro eos laborum blanditiis dolor.",
                "short_description_en": "Sed illum corporis ratione velit ut. Est temporibus voluptas molestias at. Amet sequi eos dolor rerum. Ea a sapiente quibusdam nulla maiores.",
                "price": "5372.00",
                "sale_price": "1.00",
                "stock": 668,
                "spec": null,
                "seo_title": "quis qui veritatis",
                "seo_keyword": "eum",
                "seo_description": "Incidunt corporis nulla vero ut ipsum in.",
                "benefit": "Hic suscipit aliquam dolorem officia voluptate magni. Saepe explicabo reprehenderit aut molestias adipisci est tempore. Neque eum ad minus aliquam saepe. Voluptatum dolor consequatur ea iure mollitia at id ut.",
                "benefit_en": "Aut aspernatur accusantium eum quidem veritatis. Voluptatem maiores sit ex distinctio. Qui et id reiciendis molestiae consequatur.",
                "tech_description": "Suscipit perspiciatis dolorum eius quam doloremque qui aut. Ea accusamus autem a magni dolorem quia. Eveniet impedit aliquam perferendis eius veritatis.",
                "tech_description_en": "Ut et quia odit tenetur. Ipsam earum quia consequuntur perferendis corporis molestiae quia tenetur. Perferendis doloribus voluptas est illo.",
                "description": "Ratione exercitationem ut et cupiditate eaque facilis veniam. Quae nihil earum hic consectetur omnis. Qui sed veritatis quaerat quos id quisquam et. Praesentium fugit necessitatibus labore deleniti optio.",
                "description_en": "Quia debitis laboriosam eligendi non quos pariatur sit. Excepturi esse quae ea beatae voluptas. Error voluptate aut et cupiditate placeat optio velit incidunt.",
                "usage": "Consequuntur odio ea libero. Molestias sint ducimus dolores sit. Facilis optio qui rerum officiis harum.",
                "usage_en": "Ipsa ea at voluptatem. Consequatur provident beatae libero numquam voluptatem odit. Quas aut in mollitia impedit sed dignissimos eligendi ut. Voluptatibus iure porro magni sit nesciunt.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?68411",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?49210",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?69641",
                "product_video": null,
                "status": 2,
                "rating": 0.71,
                "sold_count": 6310,
                "review_count": 3028,
                "created_at": "2020-09-11 10:55:12",
                "updated_at": "2020-09-13 03:04:25",
                "product_category": {
                    "id": 3,
                    "name": "隔离",
                    "slug": "excepturi-aut",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?14967",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?86309",
                    "title": "et quam quae",
                    "title_en": "in harum ipsum",
                    "sub_title": "ipsum a quia",
                    "describe": "Et in occaecati aliquid a quia. Eos beatae sunt consectetur dicta sit rerum est. Sunt atque quia aliquid hic dolores sequi id. At sapiente excepturi aliquam odit est. Aut dolorem iste magni.",
                    "describe_en": "Non eum sapiente accusantium nihil eveniet vel. Rem deleniti praesentium ea. Aut laboriosam et eos dolorem ipsum fugit ducimus. Ad hic eos minima labore.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?74644",
                    "parent_id": 5,
                    "level": 1,
                    "created_at": "2020-09-09 04:48:31",
                    "updated_at": "2020-09-13 11:27:46"
                }
            },
            {
                "id": 17,
                "product_category_id": 20,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "vero ex pariatur",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?91296",
                "slug": "officiis-impedit",
                "short_description": "Expedita quasi consequatur magnam.",
                "short_description_en": "Fuga doloribus ut consequatur dolor non iure. Esse rerum consequatur similique illum. Suscipit illo ipsum cupiditate. Totam quidem nisi blanditiis nulla facilis.",
                "price": "1516.00",
                "sale_price": "1.00",
                "stock": 237,
                "spec": null,
                "seo_title": "molestiae voluptatem deleniti",
                "seo_keyword": "vel",
                "seo_description": "Accusamus sit quo alias pariatur quos nisi.",
                "benefit": "Est quia consequuntur perspiciatis nihil. Expedita adipisci consectetur ullam odit. Est hic modi saepe rerum totam quaerat doloremque. Ea sed quis qui.",
                "benefit_en": "Ut qui necessitatibus distinctio enim similique repudiandae. Est ipsam omnis id. Harum est natus non aut in magni consequatur. Sit sint ut eos perferendis similique explicabo. Autem ducimus perferendis optio perferendis aut.",
                "tech_description": "Voluptatem ut soluta numquam officiis aut. Tempore autem cupiditate sapiente voluptates.",
                "tech_description_en": "Ducimus quia magni culpa reiciendis temporibus reiciendis. Facere quae eveniet vel tempore. Occaecati sed et quaerat magni ex ut ratione.",
                "description": "Molestias cupiditate quia aut. Qui similique et omnis modi odio dicta. Minima dolor quo dignissimos pariatur at quam nobis veritatis.",
                "description_en": "Dolores distinctio a mollitia tempora quo ipsum eaque. Sed voluptas consequatur molestiae rem et. Et nesciunt ea quia aut rerum enim. Animi ab culpa dolores est doloremque.",
                "usage": "Ipsum aut molestiae distinctio placeat nostrum consequatur qui. Ipsam quia tempore suscipit minima sapiente sunt nulla. Molestiae maxime nobis vero quia eum voluptatibus. Ea blanditiis accusantium autem minima.",
                "usage_en": "Voluptatem commodi dolore autem eius enim dolor placeat amet. Doloremque iste et cum labore inventore fuga accusantium. Eius nam perspiciatis ipsam nostrum provident qui velit. Vitae vero vero molestias officiis.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?77834",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?63321",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?30863",
                "product_video": null,
                "status": 3,
                "rating": 3.56,
                "sold_count": 2267,
                "review_count": 3469,
                "created_at": "2020-09-02 20:55:55",
                "updated_at": "2020-08-31 18:46:20",
                "product_category": {
                    "id": 20,
                    "name": "精油",
                    "slug": "minima-illum",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?32744",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?49387",
                    "title": "sequi ad voluptatibus",
                    "title_en": "et ea aut",
                    "sub_title": "quia sunt aperiam",
                    "describe": "Harum aut consequatur corporis delectus nisi voluptatem molestiae. Nihil aut sequi sit rerum dolores voluptatum. Et tempore sit qui at ullam. Asperiores architecto qui nisi quos ducimus velit.",
                    "describe_en": "Quia et laboriosam libero non. Autem beatae delectus aperiam accusantium voluptas. Magni aliquam et aliquid delectus aspernatur sed.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?19313",
                    "parent_id": 27,
                    "level": 1,
                    "created_at": "2020-09-04 22:00:31",
                    "updated_at": "2020-08-27 17:35:46"
                }
            },
            {
                "id": 18,
                "product_category_id": 3,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "distinctio est nesciunt",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?94414",
                "slug": "maxime-occaecati",
                "short_description": "Eius ut optio aut aperiam consequuntur sed.",
                "short_description_en": "Illum impedit non quis adipisci. Fugiat deserunt ipsum rerum sapiente exercitationem.",
                "price": "7384.00",
                "sale_price": "1.00",
                "stock": 51,
                "spec": null,
                "seo_title": "qui consequuntur doloribus",
                "seo_keyword": "ipsam",
                "seo_description": "Ratione ratione debitis aliquam.",
                "benefit": "Aut aut illum velit veniam qui placeat placeat. Et amet distinctio aut voluptatum. Perspiciatis similique non fugiat impedit dicta. Et aut eos consequuntur alias voluptas dignissimos et.",
                "benefit_en": "Veniam voluptas similique corporis alias. Aut facere cupiditate ipsum ut eligendi. Velit sed possimus aspernatur. Qui aut explicabo et consequatur. Rerum sequi illum est aut porro hic.",
                "tech_description": "Saepe et commodi saepe veniam. Rerum quaerat odit vel sed ut. Dicta deleniti nam dolorum quia reiciendis. Doloribus quos aliquam praesentium esse natus dolores nemo.",
                "tech_description_en": "Est delectus labore voluptas aliquam. Aut adipisci velit ipsa similique itaque. Consequuntur est libero rem nam eos quasi aut. Molestiae voluptates adipisci repellat.",
                "description": "Blanditiis consequatur vel temporibus iste ut quia. Quam ab aliquam et ut ullam ea.",
                "description_en": "Vel et ipsum earum et repellat. Quis et consectetur nulla et omnis temporibus beatae. Est beatae et quam culpa nisi et harum.",
                "usage": "Aut dolorum quisquam quam eos ut ut. Eius commodi tempore omnis dolores sed. Nihil inventore perspiciatis necessitatibus error tempora ut quis. Molestiae nobis quibusdam iure autem dolores culpa quas. Ipsum commodi illum possimus distinctio consectetur sit magni.",
                "usage_en": "Sunt placeat quibusdam recusandae ipsam vitae. Quam vel consequatur at. Aspernatur harum omnis deleniti accusantium voluptas cumque quo.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?45384",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?25159",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?70160",
                "product_video": null,
                "status": 1,
                "rating": 4.03,
                "sold_count": 4628,
                "review_count": 5454,
                "created_at": "2020-08-28 21:26:37",
                "updated_at": "2020-09-21 09:05:13",
                "product_category": {
                    "id": 3,
                    "name": "隔离",
                    "slug": "excepturi-aut",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?14967",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?86309",
                    "title": "et quam quae",
                    "title_en": "in harum ipsum",
                    "sub_title": "ipsum a quia",
                    "describe": "Et in occaecati aliquid a quia. Eos beatae sunt consectetur dicta sit rerum est. Sunt atque quia aliquid hic dolores sequi id. At sapiente excepturi aliquam odit est. Aut dolorem iste magni.",
                    "describe_en": "Non eum sapiente accusantium nihil eveniet vel. Rem deleniti praesentium ea. Aut laboriosam et eos dolorem ipsum fugit ducimus. Ad hic eos minima labore.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?74644",
                    "parent_id": 5,
                    "level": 1,
                    "created_at": "2020-09-09 04:48:31",
                    "updated_at": "2020-09-13 11:27:46"
                }
            },
            {
                "id": 19,
                "product_category_id": 5,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "magnam sint perferendis",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?11174",
                "slug": "adipisci-nesciunt",
                "short_description": "Eos unde maiores minus.",
                "short_description_en": "Ut eos ipsam vitae dolore omnis quibusdam. Similique vel nulla veritatis exercitationem occaecati ducimus aliquam. Dolores temporibus optio aut inventore nobis et.",
                "price": "8864.00",
                "sale_price": "1.00",
                "stock": 447,
                "spec": null,
                "seo_title": "et velit est",
                "seo_keyword": "vel",
                "seo_description": "Qui quis autem facere dolorum voluptatum et.",
                "benefit": "Quaerat sit explicabo inventore iste iusto. Non odio perferendis consequatur temporibus ducimus. Qui ad ad molestias.",
                "benefit_en": "Aspernatur ea sapiente eum neque. Sunt doloremque aut placeat adipisci quo dignissimos beatae. Vel distinctio veniam minus consequatur quis sit. Consequatur eum officia non quod.",
                "tech_description": "Modi veritatis cupiditate quis possimus ut expedita. Dolores vitae nemo commodi temporibus facere. Velit non ut officiis id sed maxime quia ullam. Iusto aperiam sint cum asperiores magni deserunt. Ipsam minima ut ipsam non facilis vitae.",
                "tech_description_en": "Et ratione maxime assumenda nemo quisquam culpa. Ut vel esse atque fuga quasi vel. Nostrum voluptas sit nesciunt autem quibusdam id.",
                "description": "Assumenda esse nesciunt animi non provident facere. Debitis et autem quisquam est consequatur. Omnis eligendi impedit fuga et. Soluta et ea quidem.",
                "description_en": "Suscipit officia aut ea quo. Aut qui vel sed ad ea neque non. Fugiat dolorum neque sunt aperiam ut. Modi libero molestiae rerum itaque consequuntur eius quia.",
                "usage": "Sit assumenda atque vitae eum totam repellat in. Eum sit reprehenderit voluptatibus qui. Non ducimus tempore voluptas deleniti ea dicta. Necessitatibus est rerum cumque deserunt.",
                "usage_en": "Officiis maxime officiis consectetur deleniti dicta. Ab officia officia officiis optio cupiditate. Quas a sint mollitia nisi eos est quia distinctio. Iure facilis aut nam itaque magnam labore.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?44293",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?75980",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?67110",
                "product_video": null,
                "status": 1,
                "rating": 6.71,
                "sold_count": 9481,
                "review_count": 2406,
                "created_at": "2020-09-19 21:59:26",
                "updated_at": "2020-09-20 18:24:20",
                "product_category": {
                    "id": 5,
                    "name": "面霜",
                    "slug": "sint-quasi",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?26901",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?79117",
                    "title": "vero voluptatem quas",
                    "title_en": "est expedita libero",
                    "sub_title": "quia sed ipsum",
                    "describe": "Id necessitatibus consequatur qui quasi neque sunt maiores debitis. Dolor fuga a veritatis laborum eius atque molestias. Ut ea aliquam provident suscipit sed quis dolorem reiciendis.",
                    "describe_en": "Aut ut voluptatem aut sed. Quia rem voluptas minus a iure qui quis. Odio et blanditiis enim ea nulla ab. Consequatur est debitis eos debitis.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?34882",
                    "parent_id": 14,
                    "level": 1,
                    "created_at": "2020-09-13 13:09:13",
                    "updated_at": "2020-08-30 17:06:37"
                }
            },
            {
                "id": 20,
                "product_category_id": 17,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "aspernatur sed quam",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?51335",
                "slug": "quae-sed",
                "short_description": "Similique adipisci qui illum.",
                "short_description_en": "Quia enim reiciendis laborum velit consequatur eos. Laborum aut suscipit numquam illo repudiandae nostrum consequatur. Ipsum ea esse dolores quis error.",
                "price": "9062.00",
                "sale_price": "1.00",
                "stock": 862,
                "spec": null,
                "seo_title": "explicabo est non",
                "seo_keyword": "consequatur",
                "seo_description": "Rem in assumenda et quidem.",
                "benefit": "Ipsum eos nemo aliquam ut natus. Impedit sunt vel quia modi voluptates. Soluta minus quis sapiente quia est autem ab. Blanditiis corporis id voluptates provident tenetur.",
                "benefit_en": "Voluptates aut saepe deserunt id recusandae quos. Et nisi alias magnam eveniet sunt.",
                "tech_description": "Sint numquam et dolores et distinctio sint totam. Mollitia est culpa itaque vel. Consequatur ut ad et.",
                "tech_description_en": "Ut fugiat totam quam. Quaerat aut et eos eos. Voluptatem ipsum vel non repellendus error architecto.",
                "description": "Adipisci repudiandae omnis qui possimus expedita. Non fugiat doloribus perspiciatis et. Et excepturi vel et omnis nam eum. Eveniet nobis libero sapiente cumque magni pariatur mollitia.",
                "description_en": "Non est commodi est ipsum. Ratione dicta possimus hic accusamus suscipit tenetur non. Architecto aliquid sed eos ullam vitae est. Ex tempora fugiat dolores et.",
                "usage": "Voluptas odio beatae laborum aut. Non repellendus non ea. Dolorum recusandae quasi omnis consequatur. Ea unde quaerat quidem alias. Quia est exercitationem assumenda id expedita.",
                "usage_en": "Aut hic non ducimus deserunt. Totam quisquam expedita recusandae eaque quia aperiam. Totam qui id voluptate ipsa ut praesentium. Est aut totam labore aliquid voluptas quo.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?52155",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?76763",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?64192",
                "product_video": null,
                "status": 3,
                "rating": 2.83,
                "sold_count": 2478,
                "review_count": 3104,
                "created_at": "2020-09-05 00:53:47",
                "updated_at": "2020-09-20 00:27:08",
                "product_category": {
                    "id": 17,
                    "name": "精油",
                    "slug": "quod-vero",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?23409",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?10414",
                    "title": "aliquid corporis distinctio",
                    "title_en": "excepturi enim sed",
                    "sub_title": "iste delectus dicta",
                    "describe": "Ut quis sed et repellendus voluptatem voluptatem et. Et itaque aut rerum hic. Ut enim cumque rerum qui voluptatem ad quos. Non nulla saepe nemo in eius consectetur sed.",
                    "describe_en": "Vero earum repellendus voluptatibus blanditiis et est ut. Quis et quam inventore est. Et ullam possimus illo aut eaque placeat. Placeat ipsam facilis voluptatem laborum officiis et.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?36363",
                    "parent_id": 25,
                    "level": 1,
                    "created_at": "2020-09-03 22:37:54",
                    "updated_at": "2020-08-22 19:25:24"
                }
            }
        ],
        "first_page_url": "http:\/\/localhost\/api\/products?page=1",
        "from": 1,
        "last_page": 3,
        "last_page_url": "http:\/\/localhost\/api\/products?page=3",
        "next_page_url": "http:\/\/localhost\/api\/products?page=2",
        "path": "http:\/\/localhost\/api\/products",
        "per_page": 20,
        "prev_page_url": null,
        "to": 20,
        "total": 50
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

<!-- START_5d9492d6d76e347e7f3200ecafeb7c88 -->
## Get product list by category slug
通过category slug获取对应类别下的产品列表

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/products/category/vitae-harum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/products/category/vitae-harum"
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
`GET api/products/category/{category_slug}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `category_slug` |  required  | 分类slug

<!-- END_5d9492d6d76e347e7f3200ecafeb7c88 -->

<!-- START_4a4da4338d117c2c1deb90e6ff7ddcc2 -->
## Get product list of status
根据产品状态获取产品列表

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/products/status/cumque?page=numquam&page_limit=autem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/products/status/cumque"
);

let params = {
    "page": "numquam",
    "page_limit": "autem",
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
            "id": 49,
            "product_category_id": 18,
            "product_name": "黑钻洁净滋养面膜",
            "product_name_en": "sed aliquid repellat",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?54174",
            "slug": "mollitia-voluptatem",
            "short_description": "A aut reprehenderit quasi debitis ea dolores.",
            "short_description_en": "Qui eaque tempore nesciunt sit in. Vel facere expedita qui alias ipsam temporibus est nam. Veritatis non et eligendi nesciunt earum facere.",
            "price": "2121.00",
            "sale_price": "1.00",
            "stock": 221,
            "spec": null,
            "seo_title": "necessitatibus ut esse",
            "seo_keyword": "sed",
            "seo_description": "Ut architecto necessitatibus dolor nam.",
            "benefit": "Ipsam quia quas cupiditate voluptatum. Qui rem et possimus at ut nulla. Blanditiis voluptas aut doloremque nihil. Similique eos saepe earum qui unde aliquam.",
            "benefit_en": "Dolores quo quas natus. Beatae repellat voluptatem eveniet et ut magni. Itaque tempore pariatur fuga odio vero.",
            "tech_description": "Consequatur quisquam illum deleniti odio magnam ut. Aut ut ab incidunt aut. Incidunt numquam modi animi assumenda. Et sint quaerat et qui dolor occaecati. Natus esse alias ut nisi rem accusantium.",
            "tech_description_en": "Et minima facere est rem eos accusantium ad optio. Ab unde commodi esse laudantium animi qui occaecati et. Dolore quam exercitationem dolorem iusto.",
            "description": "Eveniet odio nesciunt ullam nobis sunt aut. Cumque officiis ab qui assumenda.",
            "description_en": "Quisquam id dolor non et. Soluta dolores omnis officiis odit. Sint ad alias illum et ducimus id expedita mollitia. Et rerum vitae quia quia quas quibusdam.",
            "usage": "Tempore voluptatum hic reprehenderit veniam accusamus. Veniam aut voluptatem voluptatibus maiores in fugit tempora consequuntur. Iste sit voluptatem cumque quibusdam et excepturi omnis.",
            "usage_en": "Rem sint magnam omnis libero aliquid. A et sed quidem consequatur. Voluptatem suscipit ut doloremque sed omnis in eligendi.",
            "main_image": "https:\/\/lorempixel.com\/640\/480\/?11741",
            "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?34273",
            "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?10188",
            "product_video": null,
            "status": 1,
            "rating": 8.57,
            "sold_count": 2087,
            "review_count": 1057,
            "created_at": "2020-09-15 12:38:00",
            "updated_at": "2020-08-26 17:34:25"
        },
        {
            "id": 40,
            "product_category_id": 18,
            "product_name": "黑钻洁净滋养面膜",
            "product_name_en": "temporibus earum cupiditate",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?28410",
            "slug": "adipisci-sequi",
            "short_description": "Ipsum a minima rerum accusamus nisi.",
            "short_description_en": "Porro autem sit a voluptas ratione. Ipsum minus animi sapiente rerum nisi sed quod. Voluptatum dolor accusamus soluta provident consectetur a. Amet et optio culpa et.",
            "price": "1406.00",
            "sale_price": "1.00",
            "stock": 74,
            "spec": null,
            "seo_title": "non placeat quas",
            "seo_keyword": "alias",
            "seo_description": "Occaecati molestiae nesciunt qui fugiat.",
            "benefit": "In voluptatem et facilis sed exercitationem enim a. Mollitia debitis et facere perferendis. Possimus voluptatibus ullam et explicabo. Eaque sed similique eum voluptas maiores.",
            "benefit_en": "Pariatur nobis odio magni corporis facere enim aut et. Sint neque fugit praesentium dolor cum reiciendis. Ut eius consectetur accusantium repellendus.",
            "tech_description": "Quia ex in sunt eos. Repellendus non quas odit nobis. Quod molestiae nostrum cumque qui nobis laboriosam adipisci. Cumque voluptatum suscipit qui rerum aut quam voluptas cum.",
            "tech_description_en": "Et dolore odit aspernatur doloribus voluptatum quas inventore voluptas. Aut dolores aspernatur ab fuga. Quo nemo distinctio nisi. Numquam libero dolor earum qui in.",
            "description": "Est libero voluptas molestias voluptatem. Dicta nisi dolores consequatur tenetur eius. Ut eum illo quod tempore voluptatem enim error.",
            "description_en": "Id nobis quas aut accusantium quisquam. Alias dicta recusandae deleniti quasi quaerat ipsam omnis. In dicta laboriosam aut minima molestiae. Voluptatem molestias tenetur dolores cum est magni fuga.",
            "usage": "Perferendis sed quo nam consequatur. Harum debitis recusandae omnis consequatur dicta in et ad. Vero ducimus repellendus sint nostrum et quos.",
            "usage_en": "Hic quam labore impedit laboriosam quia non. Assumenda nemo et aut distinctio. Earum commodi a et repellat. Sint sed ratione id voluptatem quam omnis sapiente. Odio molestias harum vel iusto numquam.",
            "main_image": "https:\/\/lorempixel.com\/640\/480\/?38634",
            "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?86359",
            "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?93209",
            "product_video": null,
            "status": 1,
            "rating": 3.5300000000000002,
            "sold_count": 7745,
            "review_count": 3711,
            "created_at": "2020-09-09 00:38:07",
            "updated_at": "2020-09-16 03:36:55"
        },
        {
            "id": 33,
            "product_category_id": 1,
            "product_name": "黑钻洁净滋养面膜",
            "product_name_en": "architecto hic tempora",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?86197",
            "slug": "architecto-nesciunt",
            "short_description": "Autem quia magni sit.",
            "short_description_en": "Voluptas dolore aut est rerum est beatae ea. Dolorem similique cumque in totam.",
            "price": "3246.00",
            "sale_price": "1.00",
            "stock": 212,
            "spec": null,
            "seo_title": "ut omnis nobis",
            "seo_keyword": "rerum",
            "seo_description": "Ut nostrum sed omnis omnis rerum corporis.",
            "benefit": "Ducimus officia sed sunt hic. Ex tenetur id consequatur modi. Voluptate ducimus beatae consectetur rerum dolorem. Commodi ad harum est sunt.",
            "benefit_en": "Dolorem voluptatem reprehenderit ipsam ab cum. Expedita perferendis maiores quis voluptatem sint ut aut. Earum qui quia deserunt tempora architecto et ut quod.",
            "tech_description": "Ipsam voluptatum officiis quibusdam non blanditiis ad. Aliquam sapiente ut perspiciatis impedit facilis laborum. Libero distinctio quod eum consequatur doloribus. Reiciendis corporis aut consectetur totam quis.",
            "tech_description_en": "Laborum autem ut odit eos. Est inventore facere nihil. Dignissimos modi ea consequatur necessitatibus minima. Numquam voluptas dignissimos eos possimus officia.",
            "description": "Vitae ad qui omnis ut aut. Omnis quia nihil vitae non. Aut explicabo ea dignissimos iste.",
            "description_en": "Qui consequuntur rerum qui delectus voluptatibus eos atque. Sunt et ad et aut ipsum. Facere cum laudantium incidunt velit excepturi.",
            "usage": "Vel ratione eligendi nostrum quisquam id assumenda delectus. Ut ullam dicta aut ex. Ad iusto aut in voluptate.",
            "usage_en": "Quisquam tempora dolorem sed eius et fugit ullam. Et nihil ducimus earum velit aut voluptatem accusantium. Eius ad iste fugiat dolorem qui a veritatis.",
            "main_image": "https:\/\/lorempixel.com\/640\/480\/?50174",
            "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?28469",
            "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?87121",
            "product_video": null,
            "status": 1,
            "rating": 1.3900000000000001,
            "sold_count": 6998,
            "review_count": 8595,
            "created_at": "2020-08-31 13:58:54",
            "updated_at": "2020-09-16 05:10:18"
        },
        {
            "id": 50,
            "product_category_id": 6,
            "product_name": "黑钻臻活眼部精华",
            "product_name_en": "labore exercitationem perferendis",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?43342",
            "slug": "doloribus-inventore",
            "short_description": "Sit tempore fuga eligendi voluptatibus ut.",
            "short_description_en": "Quo vel placeat molestiae id. Qui eaque dolor enim aliquid. Provident molestiae qui omnis sint. Recusandae natus sint sequi et ut labore voluptatum. Voluptatem autem dolores minus officiis rerum.",
            "price": "3554.00",
            "sale_price": "1.00",
            "stock": 937,
            "spec": null,
            "seo_title": "illum architecto perspiciatis",
            "seo_keyword": "nihil",
            "seo_description": "Porro aut voluptates voluptatum.",
            "benefit": "Quia similique ratione dolor fugit. Molestias dignissimos qui quasi repellendus est architecto eum. Facere sint quod quibusdam ipsa voluptatum quisquam itaque. Dolores asperiores tempora magnam ex.",
            "benefit_en": "Et dolorem maxime quia quasi error et veritatis. Ducimus ab excepturi voluptatem dolorum aspernatur rerum omnis. Tempore et ullam quia quis. Modi perspiciatis quis non quibusdam voluptatem beatae officia.",
            "tech_description": "Nihil corrupti ea et est sed. Qui omnis ut ducimus corporis dolores repellat aut. Omnis qui vel explicabo similique aspernatur voluptatem. Ex repellat soluta in autem.",
            "tech_description_en": "Nihil recusandae qui quia ipsum. Blanditiis repellendus id perferendis hic. Iure ut omnis voluptatem.",
            "description": "Eum quibusdam et dolorem et esse. Quam voluptates blanditiis non in ipsam illo aliquam. Ut vel sed voluptatum corrupti voluptas aut est. Voluptate eum qui impedit totam eveniet.",
            "description_en": "Qui dolore assumenda inventore et earum repellendus dignissimos explicabo. Et voluptates praesentium cupiditate neque. Voluptatum nostrum doloribus perspiciatis a. Recusandae eum et ratione ex qui rerum et. Omnis qui iusto expedita non et unde omnis ut.",
            "usage": "Hic sint officiis laborum aut quibusdam fugiat. Enim et sit adipisci ad quae. Totam et voluptatum molestias nostrum ut neque.",
            "usage_en": "Omnis sit consequatur molestias minima. Quibusdam quod doloremque saepe voluptatem ipsum. Consequatur adipisci quasi sit aut.",
            "main_image": "https:\/\/lorempixel.com\/640\/480\/?40253",
            "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?82455",
            "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?77657",
            "product_video": null,
            "status": 1,
            "rating": 7.24,
            "sold_count": 3856,
            "review_count": 4796,
            "created_at": "2020-08-31 19:32:58",
            "updated_at": "2020-09-20 21:47:54"
        }
    ],
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/products/innovate`


<!-- END_2a763963938f9bbdf490c64f8c1c6821 -->

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
            "name": "精油",
            "slug": "reiciendis-recusandae",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?97639",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?25398",
            "title": "molestias sint eos",
            "title_en": "eveniet qui porro",
            "sub_title": "odit nesciunt rerum",
            "describe": "Error aut laudantium iusto. Et dolores ab nisi vel. Distinctio eaque assumenda non vero.",
            "describe_en": "Voluptatem aperiam sed et ab qui esse fuga molestias. Qui porro voluptatibus dolor corrupti ut repellat. Sequi nisi ut repellendus omnis est.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?33612",
            "parent_id": 23,
            "level": 1,
            "created_at": "2020-09-09 19:46:11",
            "updated_at": "2020-09-03 20:37:13",
            "children": [
                {
                    "id": 10,
                    "name": "腮红",
                    "slug": "cumque-id",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?57642",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?91080",
                    "title": "sed labore blanditiis",
                    "title_en": "ducimus dolore nobis",
                    "sub_title": "qui possimus animi",
                    "describe": "Molestiae dolores voluptas nobis. Et sunt officiis dolor quae. Sit ut et aut et non sit et. Magnam porro aliquid nihil aperiam.",
                    "describe_en": "Omnis dolor sit voluptas quis fugit. Corrupti culpa voluptate rem provident ut architecto ipsum aut. Voluptatem officia laborum dolor culpa commodi et illo. Non ratione explicabo quam aspernatur.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?80984",
                    "parent_id": 1,
                    "level": 1,
                    "created_at": "2020-09-08 21:56:03",
                    "updated_at": "2020-09-17 06:54:46"
                }
            ]
        },
        {
            "id": 4,
            "name": "彩妆盘",
            "slug": "sint-nulla",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?86735",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?44087",
            "title": "ea voluptas accusantium",
            "title_en": "ad quasi in",
            "sub_title": "ullam rerum exercitationem",
            "describe": "Accusamus impedit in nemo non. Ipsa repudiandae assumenda vitae inventore distinctio quia. Magni labore sed praesentium dolores blanditiis placeat.",
            "describe_en": "Sit laborum et aspernatur reiciendis rerum. Fugit qui dolor natus similique consectetur velit. Hic et nemo id eum ut esse vitae dolores. Qui nihil ullam magnam sequi.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?11462",
            "parent_id": 4,
            "level": 1,
            "created_at": "2020-09-09 10:04:35",
            "updated_at": "2020-09-16 15:23:12",
            "children": [
                {
                    "id": 4,
                    "name": "彩妆盘",
                    "slug": "sint-nulla",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?86735",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?44087",
                    "title": "ea voluptas accusantium",
                    "title_en": "ad quasi in",
                    "sub_title": "ullam rerum exercitationem",
                    "describe": "Accusamus impedit in nemo non. Ipsa repudiandae assumenda vitae inventore distinctio quia. Magni labore sed praesentium dolores blanditiis placeat.",
                    "describe_en": "Sit laborum et aspernatur reiciendis rerum. Fugit qui dolor natus similique consectetur velit. Hic et nemo id eum ut esse vitae dolores. Qui nihil ullam magnam sequi.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?11462",
                    "parent_id": 4,
                    "level": 1,
                    "created_at": "2020-09-09 10:04:35",
                    "updated_at": "2020-09-16 15:23:12"
                },
                {
                    "id": 13,
                    "name": "洁面",
                    "slug": "earum-pariatur",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?15142",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?96374",
                    "title": "rerum corrupti accusantium",
                    "title_en": "at voluptas perferendis",
                    "sub_title": "error asperiores expedita",
                    "describe": "Sed aperiam sint dolore ullam quam maiores rerum. Odio rerum numquam quidem nam officiis. Voluptates delectus rem eos id quis iusto molestiae est. Architecto mollitia fugit officia incidunt vel aut.",
                    "describe_en": "Saepe fugit possimus ut dicta fugit. Id qui omnis aut nemo magnam. Labore placeat nam soluta quod. Dolorem odit sequi doloribus magni ratione.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?80285",
                    "parent_id": 4,
                    "level": 1,
                    "created_at": "2020-08-29 13:52:06",
                    "updated_at": "2020-09-14 13:29:03"
                }
            ]
        },
        {
            "id": 5,
            "name": "面霜",
            "slug": "sint-quasi",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?26901",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?79117",
            "title": "vero voluptatem quas",
            "title_en": "est expedita libero",
            "sub_title": "quia sed ipsum",
            "describe": "Id necessitatibus consequatur qui quasi neque sunt maiores debitis. Dolor fuga a veritatis laborum eius atque molestias. Ut ea aliquam provident suscipit sed quis dolorem reiciendis.",
            "describe_en": "Aut ut voluptatem aut sed. Quia rem voluptas minus a iure qui quis. Odio et blanditiis enim ea nulla ab. Consequatur est debitis eos debitis.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?34882",
            "parent_id": 14,
            "level": 1,
            "created_at": "2020-09-13 13:09:13",
            "updated_at": "2020-08-30 17:06:37",
            "children": [
                {
                    "id": 3,
                    "name": "隔离",
                    "slug": "excepturi-aut",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?14967",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?86309",
                    "title": "et quam quae",
                    "title_en": "in harum ipsum",
                    "sub_title": "ipsum a quia",
                    "describe": "Et in occaecati aliquid a quia. Eos beatae sunt consectetur dicta sit rerum est. Sunt atque quia aliquid hic dolores sequi id. At sapiente excepturi aliquam odit est. Aut dolorem iste magni.",
                    "describe_en": "Non eum sapiente accusantium nihil eveniet vel. Rem deleniti praesentium ea. Aut laboriosam et eos dolorem ipsum fugit ducimus. Ad hic eos minima labore.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?74644",
                    "parent_id": 5,
                    "level": 1,
                    "created_at": "2020-09-09 04:48:31",
                    "updated_at": "2020-09-13 11:27:46"
                }
            ]
        },
        {
            "id": 6,
            "name": "护肤系列",
            "slug": "placeat-suscipit",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?50269",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?15503",
            "title": "est similique ut",
            "title_en": "enim culpa dignissimos",
            "sub_title": "alias omnis quam",
            "describe": "Ut possimus omnis ipsum tenetur. Nam omnis quibusdam excepturi sit.",
            "describe_en": "Consequatur voluptate quia enim sed. Voluptatibus sunt ea est voluptates. Et a reprehenderit aspernatur quia.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?10832",
            "parent_id": 0,
            "level": 1,
            "created_at": "2020-08-24 04:45:13",
            "updated_at": "2020-09-21 05:04:13",
            "children": [
                {
                    "id": 9,
                    "name": "睫毛膏",
                    "slug": "vero-sit",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?67298",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?96740",
                    "title": "error eos eum",
                    "title_en": "eos qui nesciunt",
                    "sub_title": "consectetur laborum ipsam",
                    "describe": "Sunt autem quia sit quas. Magnam rerum amet maiores sed eligendi quia. Quo est accusamus excepturi excepturi. Maiores numquam voluptatem dolor fugiat. Animi voluptas laborum aut tempore in eum.",
                    "describe_en": "Qui esse vel hic sint quisquam. Sed accusantium itaque reprehenderit aliquam voluptas. Dolor soluta quia id explicabo nisi qui laudantium.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?93237",
                    "parent_id": 6,
                    "level": 1,
                    "created_at": "2020-09-18 11:35:53",
                    "updated_at": "2020-08-29 04:46:45"
                },
                {
                    "id": 18,
                    "name": "眼线",
                    "slug": "voluptas-quasi",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?93976",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?46730",
                    "title": "vitae est et",
                    "title_en": "hic maiores ea",
                    "sub_title": "dignissimos soluta totam",
                    "describe": "Id nulla quas nihil vel. Et at deleniti sit saepe recusandae totam corporis adipisci. Repudiandae repellendus et magnam ut. Molestias illo est qui natus vel. Ipsam in cupiditate est.",
                    "describe_en": "Non iure consequatur dolorem vitae ea. Voluptas sit qui minus iure enim. Exercitationem adipisci at quia quibusdam sed eligendi.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?30251",
                    "parent_id": 6,
                    "level": 1,
                    "created_at": "2020-08-25 19:45:34",
                    "updated_at": "2020-08-27 09:52:32"
                },
                {
                    "id": 23,
                    "name": "眼霜",
                    "slug": "sint-vel",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?59898",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?86143",
                    "title": "ea nam alias",
                    "title_en": "quis voluptatem doloremque",
                    "sub_title": "ipsum excepturi molestiae",
                    "describe": "Ut sapiente est sequi quisquam tempore omnis. Non quos quam ut aut omnis porro. Ut omnis voluptates neque sed itaque quo voluptatem.",
                    "describe_en": "Quo ipsam excepturi quos earum. Dolor quasi sit delectus saepe ipsam voluptatem. Officiis earum et earum laudantium nihil dolorum. Magni assumenda cum quis non.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?97573",
                    "parent_id": 6,
                    "level": 1,
                    "created_at": "2020-09-05 13:57:22",
                    "updated_at": "2020-09-02 09:57:33"
                }
            ]
        },
        {
            "id": 7,
            "name": "唇膏",
            "slug": "nemo-eligendi",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?64433",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?77295",
            "title": "inventore sit provident",
            "title_en": "mollitia non consequuntur",
            "sub_title": "sit et deleniti",
            "describe": "Commodi consequatur excepturi quo tempora nemo qui. Voluptate adipisci sunt odit nesciunt eius vel accusamus. Tenetur ea qui nulla similique aspernatur exercitationem et.",
            "describe_en": "Eum qui odio magni quibusdam. Maiores nulla sed voluptatum similique. Rerum accusamus explicabo esse similique libero. Dolor veniam tempore aperiam atque. Rerum iste alias aut sed ullam.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?90646",
            "parent_id": 13,
            "level": 1,
            "created_at": "2020-09-12 23:47:18",
            "updated_at": "2020-08-29 01:39:27",
            "children": [
                {
                    "id": 27,
                    "name": "香水",
                    "slug": "est-velit",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?47479",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?25157",
                    "title": "nostrum vel cumque",
                    "title_en": "labore at recusandae",
                    "sub_title": "a eos velit",
                    "describe": "Aperiam doloremque ipsum quod laborum consequatur dolorem adipisci. Voluptatum inventore earum unde quas voluptates. Eveniet in explicabo quod. Provident velit exercitationem et.",
                    "describe_en": "Voluptates tenetur quisquam dolores magnam accusamus adipisci maiores. Illo distinctio expedita laboriosam sunt autem dolor tempore. Velit culpa accusamus omnis maxime velit aut.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?27113",
                    "parent_id": 7,
                    "level": 1,
                    "created_at": "2020-09-20 07:13:42",
                    "updated_at": "2020-09-10 16:37:56"
                }
            ]
        },
        {
            "id": 8,
            "name": "套装C",
            "slug": "fugiat-in",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?66732",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?17263",
            "title": "ipsam explicabo a",
            "title_en": "magni et laborum",
            "sub_title": "doloremque neque aut",
            "describe": "Voluptatibus sequi veritatis exercitationem error eum quia aut. Repellendus porro error id. Fugiat quidem vero deserunt sequi.",
            "describe_en": "Reprehenderit recusandae rem hic ut pariatur. Nisi eius rem accusamus sequi accusamus. Nulla ex facere veritatis at rerum.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?26681",
            "parent_id": 16,
            "level": 1,
            "created_at": "2020-09-01 08:30:49",
            "updated_at": "2020-08-26 17:16:15",
            "children": [
                {
                    "id": 19,
                    "name": "套装B",
                    "slug": "dolore-est",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?77698",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?18381",
                    "title": "laudantium sint eaque",
                    "title_en": "autem excepturi voluptatum",
                    "sub_title": "et aut repudiandae",
                    "describe": "Quas est voluptates natus maiores. Quo accusamus id voluptas ullam quisquam aspernatur pariatur quaerat. Officia vero totam eum.",
                    "describe_en": "Et a et dolore quod magnam et odio. Molestiae culpa id provident expedita. Culpa quia ullam non voluptatem velit. Repudiandae aliquid totam et explicabo est nisi et.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?18841",
                    "parent_id": 8,
                    "level": 1,
                    "created_at": "2020-09-10 10:51:08",
                    "updated_at": "2020-09-10 08:13:20"
                },
                {
                    "id": 21,
                    "name": "香水",
                    "slug": "impedit-voluptas",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?59613",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?78791",
                    "title": "doloribus saepe est",
                    "title_en": "recusandae quia dignissimos",
                    "sub_title": "vel magnam quis",
                    "describe": "Et officiis excepturi et in velit tempora aut nobis. Et beatae impedit consectetur vel sit laudantium accusamus. Perspiciatis dolores qui minus. Voluptatibus voluptas eos qui deleniti.",
                    "describe_en": "Non qui quia a aut voluptatem provident velit. Corrupti non veritatis ipsum. Omnis corporis ullam quibusdam sunt inventore et at.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?74613",
                    "parent_id": 8,
                    "level": 1,
                    "created_at": "2020-09-17 04:38:12",
                    "updated_at": "2020-09-15 13:51:39"
                }
            ]
        },
        {
            "id": 11,
            "name": "套装C",
            "slug": "ipsam-debitis",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?44771",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?64739",
            "title": "et quasi quis",
            "title_en": "temporibus itaque expedita",
            "sub_title": "animi iure et",
            "describe": "Voluptates culpa repellat soluta quo. Facilis corrupti totam commodi voluptas assumenda. Et totam amet ea occaecati eum dolores. Corrupti adipisci sapiente tenetur et ea optio accusantium.",
            "describe_en": "Excepturi a autem dolorum accusantium ex possimus. Sunt qui aut nulla eius recusandae. Animi possimus ad accusantium velit optio tenetur.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?66616",
            "parent_id": 27,
            "level": 1,
            "created_at": "2020-09-04 20:54:48",
            "updated_at": "2020-08-22 20:50:28",
            "children": [
                {
                    "id": 30,
                    "name": "眼线",
                    "slug": "enim-eveniet",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?62278",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?27616",
                    "title": "in et optio",
                    "title_en": "repellat minima commodi",
                    "sub_title": "corporis doloribus fugiat",
                    "describe": "Voluptatum iste officia aut voluptates molestiae. Vero temporibus aut eos inventore ut culpa ratione. Delectus minus sequi adipisci quaerat dicta voluptatem.",
                    "describe_en": "Est odit placeat enim quis voluptatem culpa. Eaque ad assumenda nesciunt qui ipsum vero qui. Saepe nemo et cupiditate vel molestiae.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?20764",
                    "parent_id": 11,
                    "level": 1,
                    "created_at": "2020-09-01 02:11:35",
                    "updated_at": "2020-09-13 17:59:11"
                }
            ]
        },
        {
            "id": 12,
            "name": "香水",
            "slug": "repudiandae-voluptatibus",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?24380",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?58362",
            "title": "deleniti blanditiis ratione",
            "title_en": "corrupti quidem praesentium",
            "sub_title": "sapiente consequatur culpa",
            "describe": "Expedita placeat omnis eius est hic quo. Cumque et dolorum quia doloremque. Velit harum officiis recusandae architecto. Autem alias facilis ut necessitatibus repellendus nesciunt.",
            "describe_en": "Quia quia explicabo nisi. Et odio quidem accusantium fugiat hic temporibus. Dolorem officia et eos quo sint et. Ut facilis et ratione dignissimos rerum ut.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?50720",
            "parent_id": 20,
            "level": 1,
            "created_at": "2020-09-08 22:08:29",
            "updated_at": "2020-09-05 07:12:36",
            "children": [
                {
                    "id": 2,
                    "name": "睫毛膏",
                    "slug": "inventore-voluptatem",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?27483",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?39457",
                    "title": "maiores aut natus",
                    "title_en": "eveniet dolor facilis",
                    "sub_title": "nostrum ut ipsam",
                    "describe": "Atque cupiditate id nemo qui commodi cum illo enim. Non perspiciatis dolore dolorem et saepe consequuntur. Sit vel non reiciendis vel.",
                    "describe_en": "Aut soluta est sunt iure aut omnis excepturi. Hic laborum sit odio omnis placeat soluta ad. Non vel debitis ut quod similique repellendus enim. Sequi qui quisquam sit fuga fugiat a.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?60755",
                    "parent_id": 12,
                    "level": 1,
                    "created_at": "2020-08-29 03:06:23",
                    "updated_at": "2020-08-25 16:32:25"
                },
                {
                    "id": 25,
                    "name": "唇膏",
                    "slug": "aut-pariatur",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?69689",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?89236",
                    "title": "rerum facere dolor",
                    "title_en": "numquam consequuntur nesciunt",
                    "sub_title": "inventore voluptas omnis",
                    "describe": "Eius autem eaque qui hic qui odit dolores praesentium. Enim quisquam cum delectus ea optio voluptatem. Sint nemo porro vel et et. Nihil quos non ipsa molestiae itaque.",
                    "describe_en": "Ut tempore qui laboriosam in adipisci. Rerum esse et assumenda animi. Error officia et illum praesentium minus nostrum. Saepe asperiores eum quis reprehenderit odio.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?96565",
                    "parent_id": 12,
                    "level": 1,
                    "created_at": "2020-08-27 13:48:47",
                    "updated_at": "2020-09-13 01:44:37"
                }
            ]
        },
        {
            "id": 13,
            "name": "洁面",
            "slug": "earum-pariatur",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?15142",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?96374",
            "title": "rerum corrupti accusantium",
            "title_en": "at voluptas perferendis",
            "sub_title": "error asperiores expedita",
            "describe": "Sed aperiam sint dolore ullam quam maiores rerum. Odio rerum numquam quidem nam officiis. Voluptates delectus rem eos id quis iusto molestiae est. Architecto mollitia fugit officia incidunt vel aut.",
            "describe_en": "Saepe fugit possimus ut dicta fugit. Id qui omnis aut nemo magnam. Labore placeat nam soluta quod. Dolorem odit sequi doloribus magni ratione.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?80285",
            "parent_id": 4,
            "level": 1,
            "created_at": "2020-08-29 13:52:06",
            "updated_at": "2020-09-14 13:29:03",
            "children": [
                {
                    "id": 7,
                    "name": "唇膏",
                    "slug": "nemo-eligendi",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?64433",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?77295",
                    "title": "inventore sit provident",
                    "title_en": "mollitia non consequuntur",
                    "sub_title": "sit et deleniti",
                    "describe": "Commodi consequatur excepturi quo tempora nemo qui. Voluptate adipisci sunt odit nesciunt eius vel accusamus. Tenetur ea qui nulla similique aspernatur exercitationem et.",
                    "describe_en": "Eum qui odio magni quibusdam. Maiores nulla sed voluptatum similique. Rerum accusamus explicabo esse similique libero. Dolor veniam tempore aperiam atque. Rerum iste alias aut sed ullam.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?90646",
                    "parent_id": 13,
                    "level": 1,
                    "created_at": "2020-09-12 23:47:18",
                    "updated_at": "2020-08-29 01:39:27"
                }
            ]
        },
        {
            "id": 14,
            "name": "护肤系列",
            "slug": "dolor-ad",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?62555",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?97581",
            "title": "voluptas quod eveniet",
            "title_en": "repellendus dolorum veritatis",
            "sub_title": "eum in molestiae",
            "describe": "Voluptas enim et unde. Temporibus minus quasi nihil sed odit fuga pariatur. Molestiae culpa velit neque corporis. Omnis provident dolor omnis a.",
            "describe_en": "Reiciendis reiciendis quasi in omnis. Quia sint consequatur aut ipsa. Et nobis sint asperiores quis rerum minus dolorem doloremque.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?66984",
            "parent_id": 23,
            "level": 1,
            "created_at": "2020-09-20 05:31:12",
            "updated_at": "2020-08-22 07:25:01",
            "children": [
                {
                    "id": 5,
                    "name": "面霜",
                    "slug": "sint-quasi",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?26901",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?79117",
                    "title": "vero voluptatem quas",
                    "title_en": "est expedita libero",
                    "sub_title": "quia sed ipsum",
                    "describe": "Id necessitatibus consequatur qui quasi neque sunt maiores debitis. Dolor fuga a veritatis laborum eius atque molestias. Ut ea aliquam provident suscipit sed quis dolorem reiciendis.",
                    "describe_en": "Aut ut voluptatem aut sed. Quia rem voluptas minus a iure qui quis. Odio et blanditiis enim ea nulla ab. Consequatur est debitis eos debitis.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?34882",
                    "parent_id": 14,
                    "level": 1,
                    "created_at": "2020-09-13 13:09:13",
                    "updated_at": "2020-08-30 17:06:37"
                }
            ]
        },
        {
            "id": 16,
            "name": "洁面",
            "slug": "et-nihil",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?79913",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?72201",
            "title": "eligendi adipisci accusantium",
            "title_en": "aspernatur quis esse",
            "sub_title": "pariatur cumque error",
            "describe": "Illo eius consequatur maiores vel consequatur qui. Sed aut eligendi quam velit similique consequatur odio. Molestiae est excepturi atque qui rerum rem dolorem. Odit qui quibusdam illum.",
            "describe_en": "Ut eligendi adipisci nostrum. Perferendis dolorem ut quod magni. A earum eius dolor reiciendis perferendis vel.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?99868",
            "parent_id": 28,
            "level": 1,
            "created_at": "2020-09-20 03:51:24",
            "updated_at": "2020-08-24 21:53:23",
            "children": [
                {
                    "id": 8,
                    "name": "套装C",
                    "slug": "fugiat-in",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?66732",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?17263",
                    "title": "ipsam explicabo a",
                    "title_en": "magni et laborum",
                    "sub_title": "doloremque neque aut",
                    "describe": "Voluptatibus sequi veritatis exercitationem error eum quia aut. Repellendus porro error id. Fugiat quidem vero deserunt sequi.",
                    "describe_en": "Reprehenderit recusandae rem hic ut pariatur. Nisi eius rem accusamus sequi accusamus. Nulla ex facere veritatis at rerum.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?26681",
                    "parent_id": 16,
                    "level": 1,
                    "created_at": "2020-09-01 08:30:49",
                    "updated_at": "2020-08-26 17:16:15"
                },
                {
                    "id": 29,
                    "name": "香水",
                    "slug": "eum-beatae",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?33165",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?25530",
                    "title": "deserunt perferendis quod",
                    "title_en": "sequi maiores eveniet",
                    "sub_title": "a earum asperiores",
                    "describe": "Omnis necessitatibus ut voluptates. Consequatur impedit laborum a ipsa nisi officiis nobis. Porro amet eveniet et quam nesciunt. Vero tenetur voluptas sed similique.",
                    "describe_en": "Eos quia enim aut sunt autem. Porro vel vel neque velit voluptatem et. Odio rerum vel fugiat pariatur optio eos neque. Qui deleniti est saepe et ea laborum ea. Sequi est voluptas voluptatibus quia.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?44657",
                    "parent_id": 16,
                    "level": 1,
                    "created_at": "2020-09-13 10:11:45",
                    "updated_at": "2020-08-30 19:34:30"
                }
            ]
        },
        {
            "id": 20,
            "name": "精油",
            "slug": "minima-illum",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?32744",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?49387",
            "title": "sequi ad voluptatibus",
            "title_en": "et ea aut",
            "sub_title": "quia sunt aperiam",
            "describe": "Harum aut consequatur corporis delectus nisi voluptatem molestiae. Nihil aut sequi sit rerum dolores voluptatum. Et tempore sit qui at ullam. Asperiores architecto qui nisi quos ducimus velit.",
            "describe_en": "Quia et laboriosam libero non. Autem beatae delectus aperiam accusantium voluptas. Magni aliquam et aliquid delectus aspernatur sed.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?19313",
            "parent_id": 27,
            "level": 1,
            "created_at": "2020-09-04 22:00:31",
            "updated_at": "2020-08-27 17:35:46",
            "children": [
                {
                    "id": 12,
                    "name": "香水",
                    "slug": "repudiandae-voluptatibus",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?24380",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?58362",
                    "title": "deleniti blanditiis ratione",
                    "title_en": "corrupti quidem praesentium",
                    "sub_title": "sapiente consequatur culpa",
                    "describe": "Expedita placeat omnis eius est hic quo. Cumque et dolorum quia doloremque. Velit harum officiis recusandae architecto. Autem alias facilis ut necessitatibus repellendus nesciunt.",
                    "describe_en": "Quia quia explicabo nisi. Et odio quidem accusantium fugiat hic temporibus. Dolorem officia et eos quo sint et. Ut facilis et ratione dignissimos rerum ut.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?50720",
                    "parent_id": 20,
                    "level": 1,
                    "created_at": "2020-09-08 22:08:29",
                    "updated_at": "2020-09-05 07:12:36"
                }
            ]
        },
        {
            "id": 22,
            "name": "隔离",
            "slug": "voluptatibus-consequatur",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?82745",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?62040",
            "title": "id sed distinctio",
            "title_en": "et sit consequuntur",
            "sub_title": "neque aperiam distinctio",
            "describe": "Nobis eligendi a ducimus tempore fuga quidem. Nostrum sit omnis illum est sit quam.",
            "describe_en": "Eum velit et officia molestiae. Dolores dolorem rem sunt dolor. Corrupti quia natus et ea et. Quaerat sed et dolorem ipsum. Assumenda excepturi vero harum ut labore.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?96666",
            "parent_id": 24,
            "level": 1,
            "created_at": "2020-09-20 13:35:03",
            "updated_at": "2020-09-04 12:42:15",
            "children": [
                {
                    "id": 15,
                    "name": "睫毛膏",
                    "slug": "quidem-ex",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?54173",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?36391",
                    "title": "consectetur quaerat eius",
                    "title_en": "doloribus veniam dignissimos",
                    "sub_title": "in ea nemo",
                    "describe": "Enim autem omnis animi dolor perferendis. Veniam molestias et laudantium at. Aut quibusdam rerum aut omnis dolore.",
                    "describe_en": "Nulla tempore dignissimos voluptate error error. Aliquam omnis velit distinctio est. Voluptatem provident placeat doloremque. In similique enim porro voluptas officia quo quae.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?70516",
                    "parent_id": 22,
                    "level": 1,
                    "created_at": "2020-09-01 21:17:06",
                    "updated_at": "2020-08-31 06:19:13"
                }
            ]
        },
        {
            "id": 23,
            "name": "眼霜",
            "slug": "sint-vel",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?59898",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?86143",
            "title": "ea nam alias",
            "title_en": "quis voluptatem doloremque",
            "sub_title": "ipsum excepturi molestiae",
            "describe": "Ut sapiente est sequi quisquam tempore omnis. Non quos quam ut aut omnis porro. Ut omnis voluptates neque sed itaque quo voluptatem.",
            "describe_en": "Quo ipsam excepturi quos earum. Dolor quasi sit delectus saepe ipsam voluptatem. Officiis earum et earum laudantium nihil dolorum. Magni assumenda cum quis non.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?97573",
            "parent_id": 6,
            "level": 1,
            "created_at": "2020-09-05 13:57:22",
            "updated_at": "2020-09-02 09:57:33",
            "children": [
                {
                    "id": 1,
                    "name": "精油",
                    "slug": "reiciendis-recusandae",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?97639",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?25398",
                    "title": "molestias sint eos",
                    "title_en": "eveniet qui porro",
                    "sub_title": "odit nesciunt rerum",
                    "describe": "Error aut laudantium iusto. Et dolores ab nisi vel. Distinctio eaque assumenda non vero.",
                    "describe_en": "Voluptatem aperiam sed et ab qui esse fuga molestias. Qui porro voluptatibus dolor corrupti ut repellat. Sequi nisi ut repellendus omnis est.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?33612",
                    "parent_id": 23,
                    "level": 1,
                    "created_at": "2020-09-09 19:46:11",
                    "updated_at": "2020-09-03 20:37:13"
                },
                {
                    "id": 14,
                    "name": "护肤系列",
                    "slug": "dolor-ad",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?62555",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?97581",
                    "title": "voluptas quod eveniet",
                    "title_en": "repellendus dolorum veritatis",
                    "sub_title": "eum in molestiae",
                    "describe": "Voluptas enim et unde. Temporibus minus quasi nihil sed odit fuga pariatur. Molestiae culpa velit neque corporis. Omnis provident dolor omnis a.",
                    "describe_en": "Reiciendis reiciendis quasi in omnis. Quia sint consequatur aut ipsa. Et nobis sint asperiores quis rerum minus dolorem doloremque.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?66984",
                    "parent_id": 23,
                    "level": 1,
                    "created_at": "2020-09-20 05:31:12",
                    "updated_at": "2020-08-22 07:25:01"
                }
            ]
        },
        {
            "id": 24,
            "name": "精油",
            "slug": "est-autem",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?38270",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?18168",
            "title": "accusantium et et",
            "title_en": "sapiente reprehenderit aut",
            "sub_title": "ipsam eveniet animi",
            "describe": "Suscipit in soluta itaque a. Laudantium aspernatur ratione exercitationem vel. Dolorem illum quae veritatis officia. Unde minus ea officiis.",
            "describe_en": "Id tempore et sint quo et inventore dolorem ea. Sint voluptas commodi eum sit laboriosam sequi. Rerum sed voluptates sit nostrum quia ut magnam.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?71846",
            "parent_id": 27,
            "level": 1,
            "created_at": "2020-09-16 03:04:24",
            "updated_at": "2020-09-09 03:57:02",
            "children": [
                {
                    "id": 22,
                    "name": "隔离",
                    "slug": "voluptatibus-consequatur",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?82745",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?62040",
                    "title": "id sed distinctio",
                    "title_en": "et sit consequuntur",
                    "sub_title": "neque aperiam distinctio",
                    "describe": "Nobis eligendi a ducimus tempore fuga quidem. Nostrum sit omnis illum est sit quam.",
                    "describe_en": "Eum velit et officia molestiae. Dolores dolorem rem sunt dolor. Corrupti quia natus et ea et. Quaerat sed et dolorem ipsum. Assumenda excepturi vero harum ut labore.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?96666",
                    "parent_id": 24,
                    "level": 1,
                    "created_at": "2020-09-20 13:35:03",
                    "updated_at": "2020-09-04 12:42:15"
                },
                {
                    "id": 26,
                    "name": "粉底液",
                    "slug": "rerum-nihil",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?25326",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?13115",
                    "title": "aut officia accusantium",
                    "title_en": "sed sunt voluptatibus",
                    "sub_title": "quae enim dolorum",
                    "describe": "Sed voluptatum laudantium occaecati blanditiis eum distinctio. Voluptatem ea tempore quisquam recusandae laborum reprehenderit. Tempora qui cum et velit ad autem nihil cum.",
                    "describe_en": "Eos sunt eveniet veniam excepturi perspiciatis in natus. Quidem aut qui qui nesciunt quo fugit. Sed qui unde quas magnam dolores.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?36304",
                    "parent_id": 24,
                    "level": 1,
                    "created_at": "2020-09-12 00:42:17",
                    "updated_at": "2020-08-30 08:11:19"
                }
            ]
        },
        {
            "id": 25,
            "name": "唇膏",
            "slug": "aut-pariatur",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?69689",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?89236",
            "title": "rerum facere dolor",
            "title_en": "numquam consequuntur nesciunt",
            "sub_title": "inventore voluptas omnis",
            "describe": "Eius autem eaque qui hic qui odit dolores praesentium. Enim quisquam cum delectus ea optio voluptatem. Sint nemo porro vel et et. Nihil quos non ipsa molestiae itaque.",
            "describe_en": "Ut tempore qui laboriosam in adipisci. Rerum esse et assumenda animi. Error officia et illum praesentium minus nostrum. Saepe asperiores eum quis reprehenderit odio.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?96565",
            "parent_id": 12,
            "level": 1,
            "created_at": "2020-08-27 13:48:47",
            "updated_at": "2020-09-13 01:44:37",
            "children": [
                {
                    "id": 17,
                    "name": "精油",
                    "slug": "quod-vero",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?23409",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?10414",
                    "title": "aliquid corporis distinctio",
                    "title_en": "excepturi enim sed",
                    "sub_title": "iste delectus dicta",
                    "describe": "Ut quis sed et repellendus voluptatem voluptatem et. Et itaque aut rerum hic. Ut enim cumque rerum qui voluptatem ad quos. Non nulla saepe nemo in eius consectetur sed.",
                    "describe_en": "Vero earum repellendus voluptatibus blanditiis et est ut. Quis et quam inventore est. Et ullam possimus illo aut eaque placeat. Placeat ipsam facilis voluptatem laborum officiis et.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?36363",
                    "parent_id": 25,
                    "level": 1,
                    "created_at": "2020-09-03 22:37:54",
                    "updated_at": "2020-08-22 19:25:24"
                },
                {
                    "id": 28,
                    "name": "彩妆盘",
                    "slug": "officiis-quidem",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?84848",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?61969",
                    "title": "et non repellendus",
                    "title_en": "nam autem suscipit",
                    "sub_title": "sit veniam deleniti",
                    "describe": "Ea voluptatum sapiente est quis quia quas sint consequatur. Laudantium veritatis atque quaerat numquam mollitia sed. Molestiae facilis nemo cum vero ex similique.",
                    "describe_en": "Consequatur sit sed molestiae voluptatibus aut eaque doloribus. Facere iste est et ullam vel aut assumenda illo. Veritatis ullam nemo est.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?62485",
                    "parent_id": 25,
                    "level": 1,
                    "created_at": "2020-09-16 04:37:07",
                    "updated_at": "2020-09-16 09:11:48"
                }
            ]
        },
        {
            "id": 27,
            "name": "香水",
            "slug": "est-velit",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?47479",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?25157",
            "title": "nostrum vel cumque",
            "title_en": "labore at recusandae",
            "sub_title": "a eos velit",
            "describe": "Aperiam doloremque ipsum quod laborum consequatur dolorem adipisci. Voluptatum inventore earum unde quas voluptates. Eveniet in explicabo quod. Provident velit exercitationem et.",
            "describe_en": "Voluptates tenetur quisquam dolores magnam accusamus adipisci maiores. Illo distinctio expedita laboriosam sunt autem dolor tempore. Velit culpa accusamus omnis maxime velit aut.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?27113",
            "parent_id": 7,
            "level": 1,
            "created_at": "2020-09-20 07:13:42",
            "updated_at": "2020-09-10 16:37:56",
            "children": [
                {
                    "id": 11,
                    "name": "套装C",
                    "slug": "ipsam-debitis",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?44771",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?64739",
                    "title": "et quasi quis",
                    "title_en": "temporibus itaque expedita",
                    "sub_title": "animi iure et",
                    "describe": "Voluptates culpa repellat soluta quo. Facilis corrupti totam commodi voluptas assumenda. Et totam amet ea occaecati eum dolores. Corrupti adipisci sapiente tenetur et ea optio accusantium.",
                    "describe_en": "Excepturi a autem dolorum accusantium ex possimus. Sunt qui aut nulla eius recusandae. Animi possimus ad accusantium velit optio tenetur.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?66616",
                    "parent_id": 27,
                    "level": 1,
                    "created_at": "2020-09-04 20:54:48",
                    "updated_at": "2020-08-22 20:50:28"
                },
                {
                    "id": 20,
                    "name": "精油",
                    "slug": "minima-illum",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?32744",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?49387",
                    "title": "sequi ad voluptatibus",
                    "title_en": "et ea aut",
                    "sub_title": "quia sunt aperiam",
                    "describe": "Harum aut consequatur corporis delectus nisi voluptatem molestiae. Nihil aut sequi sit rerum dolores voluptatum. Et tempore sit qui at ullam. Asperiores architecto qui nisi quos ducimus velit.",
                    "describe_en": "Quia et laboriosam libero non. Autem beatae delectus aperiam accusantium voluptas. Magni aliquam et aliquid delectus aspernatur sed.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?19313",
                    "parent_id": 27,
                    "level": 1,
                    "created_at": "2020-09-04 22:00:31",
                    "updated_at": "2020-08-27 17:35:46"
                },
                {
                    "id": 24,
                    "name": "精油",
                    "slug": "est-autem",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?38270",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?18168",
                    "title": "accusantium et et",
                    "title_en": "sapiente reprehenderit aut",
                    "sub_title": "ipsam eveniet animi",
                    "describe": "Suscipit in soluta itaque a. Laudantium aspernatur ratione exercitationem vel. Dolorem illum quae veritatis officia. Unde minus ea officiis.",
                    "describe_en": "Id tempore et sint quo et inventore dolorem ea. Sint voluptas commodi eum sit laboriosam sequi. Rerum sed voluptates sit nostrum quia ut magnam.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?71846",
                    "parent_id": 27,
                    "level": 1,
                    "created_at": "2020-09-16 03:04:24",
                    "updated_at": "2020-09-09 03:57:02"
                }
            ]
        },
        {
            "id": 28,
            "name": "彩妆盘",
            "slug": "officiis-quidem",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?84848",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?61969",
            "title": "et non repellendus",
            "title_en": "nam autem suscipit",
            "sub_title": "sit veniam deleniti",
            "describe": "Ea voluptatum sapiente est quis quia quas sint consequatur. Laudantium veritatis atque quaerat numquam mollitia sed. Molestiae facilis nemo cum vero ex similique.",
            "describe_en": "Consequatur sit sed molestiae voluptatibus aut eaque doloribus. Facere iste est et ullam vel aut assumenda illo. Veritatis ullam nemo est.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?62485",
            "parent_id": 25,
            "level": 1,
            "created_at": "2020-09-16 04:37:07",
            "updated_at": "2020-09-16 09:11:48",
            "children": [
                {
                    "id": 16,
                    "name": "洁面",
                    "slug": "et-nihil",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?79913",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?72201",
                    "title": "eligendi adipisci accusantium",
                    "title_en": "aspernatur quis esse",
                    "sub_title": "pariatur cumque error",
                    "describe": "Illo eius consequatur maiores vel consequatur qui. Sed aut eligendi quam velit similique consequatur odio. Molestiae est excepturi atque qui rerum rem dolorem. Odit qui quibusdam illum.",
                    "describe_en": "Ut eligendi adipisci nostrum. Perferendis dolorem ut quod magni. A earum eius dolor reiciendis perferendis vel.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?99868",
                    "parent_id": 28,
                    "level": 1,
                    "created_at": "2020-09-20 03:51:24",
                    "updated_at": "2020-08-24 21:53:23"
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
    -G "http://localhost/api/product_category/story/saepe" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product_category/story/saepe"
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

<!-- START_4165842c90088f1b9ff7c8f887a12d5e -->
## Get product category over view
获取产品分类概述(目前分为&#039;套装系列&#039;和&#039;护肤系列&#039;一级分类,只需取其下列二级分类的name,slug,thumbnail,title,title_en,sub_title)

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/product_category/overview/voluptatem-fuga" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product_category/overview/voluptatem-fuga"
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
`GET api/product_category/overview/{categpory_slug}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `categpory_slug` |  required  | 分类slug

<!-- END_4165842c90088f1b9ff7c8f887a12d5e -->

<!-- START_6161f09b99a5441c67beadab83bea7e0 -->
## Get explore product category list
随机获取同分类下三条数据

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/product_category/explore/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product_category/explore/et"
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
`GET api/product_category/explore/{category_slug}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `category_slug` |  required  | 分类slug

<!-- END_6161f09b99a5441c67beadab83bea7e0 -->

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
    -d '{"product_list":[{"product_id":13}]}'

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
            "product_id": 13
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
    "http://localhost/api/shop_carts/1?type=dolorem&product_id=maiores&amount=accusamus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/shop_carts/1"
);

let params = {
    "type": "dolorem",
    "product_id": "maiores",
    "amount": "accusamus",
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
    "http://localhost/api/shop_carts/1?product_id=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/shop_carts/1"
);

let params = {
    "product_id": "qui",
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
            "slug": "animi-voluptatem",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?40253",
            "title": "qui vero eligendi",
            "sub_title": "voluptatem dolorem quo",
            "created_at": "2019-10-25 18:04:51",
            "updated_at": "2019-09-25 16:31:22"
        },
        {
            "id": 2,
            "name": "品牌介绍",
            "slug": "in-aut",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?87658",
            "title": "in et optio",
            "sub_title": "voluptas velit expedita",
            "created_at": "2020-02-20 18:10:39",
            "updated_at": "2020-07-24 06:55:44"
        },
        {
            "id": 3,
            "name": "精彩内容",
            "slug": "ab-aspernatur",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?27552",
            "title": "eum perspiciatis quisquam",
            "sub_title": "aliquam aspernatur excepturi",
            "created_at": "2020-04-17 14:07:09",
            "updated_at": "2020-07-23 18:09:06"
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
## Get the house detail by slug
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


> Example response (500):

```json
{
    "message": "Server Error"
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
    -d '{"province":"voluptates","city":"dolor","district":"est","address":"ad","zip":6,"contact_name":"est","contact_phone":20}'

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
    "province": "voluptates",
    "city": "dolor",
    "district": "est",
    "address": "ad",
    "zip": 6,
    "contact_name": "est",
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
    "http://localhost/api/user_addresses/1?province=dolorem&city=vitae&district=sed&address=quisquam&zip=ipsum&contact_name=quam&contact_phone=non" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_addresses/1"
);

let params = {
    "province": "dolorem",
    "city": "vitae",
    "district": "sed",
    "address": "quisquam",
    "zip": "ipsum",
    "contact_name": "quam",
    "contact_phone": "non",
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
## Destroy user Address
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
    "http://localhost/api/user_profile?profile_id=praesentium&phone=hic&real_name=esse&sex=non&birthday=incidunt&age=temporibus&province=est&city=quos&district=et&address=qui&zip=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_profile"
);

let params = {
    "profile_id": "praesentium",
    "phone": "hic",
    "real_name": "esse",
    "sex": "non",
    "birthday": "incidunt",
    "age": "temporibus",
    "province": "est",
    "city": "quos",
    "district": "et",
    "address": "qui",
    "zip": "et",
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
    `profile_id` |  required  | profile表id
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
    -d '{"code":"magni"}'

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
    "code": "magni"
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
    -G "http://localhost/api/wish_list" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/wish_list"
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
`GET api/wish_list`


<!-- END_1688bef185d10bc7a124bf955a390187 -->

<!-- START_1d7aae83400f5c6ee98332771a897d4a -->
## Request Add product to wish list
请求将商品加入心愿单

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/api/wish_list?product_id=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/wish_list"
);

let params = {
    "product_id": "et",
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
`POST api/wish_list`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `product_id` |  optional  | integer required 商品id

<!-- END_1d7aae83400f5c6ee98332771a897d4a -->

<!-- START_09f066fc40b760a853e215242609a1f1 -->
## Remove product from wish list
移除心愿单商品

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/wish_list?product_id=inventore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/wish_list"
);

let params = {
    "product_id": "inventore",
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
`DELETE api/wish_list`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `product_id` |  required  | 商品id

<!-- END_09f066fc40b760a853e215242609a1f1 -->

#[Payment] Payment

支付管理
<!-- START_d83d4fdb2ad0cd97738fd8f69825726d -->
## Alipay bank gateway pay request
支付宝网银网关-发起支付

> Example request:

```bash
curl -X GET \
    -G "http://localhost/alipay/bank_gateway/pay?no=consequatur&total_amount=alias&payment_key=ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/alipay/bank_gateway/pay"
);

let params = {
    "no": "consequatur",
    "total_amount": "alias",
    "payment_key": "ut",
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
    -G "http://localhost/alipay/aop_page/pay?no=quaerat&total_amount=corrupti&payment_key=ducimus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/alipay/aop_page/pay"
);

let params = {
    "no": "quaerat",
    "total_amount": "corrupti",
    "payment_key": "ducimus",
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
    -G "http://localhost/alipay/legacy_express/pay?no=hic&total_amount=animi&payment_key=impedit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/alipay/legacy_express/pay"
);

let params = {
    "no": "hic",
    "total_amount": "animi",
    "payment_key": "impedit",
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
    -G "http://localhost/unionpay/pay?no=quidem&total_amount=quia&payment_key=in" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/unionpay/pay"
);

let params = {
    "no": "quidem",
    "total_amount": "quia",
    "payment_key": "in",
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

#general


<!-- START_77797615aeaa4fce9a94150989aed46f -->
## ResponseCode explain
本方法仅作返回code通用说明(无其他作用)

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/response_code?10001=maiores&10003=laudantium&20001=accusamus&40001=aut&40003=rerum&40004=veritatis&40005=perspiciatis&50001=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/response_code"
);

let params = {
    "10001": "maiores",
    "10003": "laudantium",
    "20001": "accusamus",
    "40001": "aut",
    "40003": "rerum",
    "40004": "veritatis",
    "40005": "perspiciatis",
    "50001": "et",
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


> Example response (404):

```json
{
    "message": ""
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


> Example response (200):

```json
null
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


> Example response (200):

```json
null
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


> Example response (200):

```json
null
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


> Example response (200):

```json
null
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


> Example response (200):

```json
null
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


