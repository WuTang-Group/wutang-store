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

#[ADMIN-Payment] AlipayLegacyExpress manage

支付宝即时到账管理类
<!-- START_f1be18edbf36c70c4e837edf80b9d17d -->
## Request get alipay legacy express list
获取支付宝即时支付-列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/alipay/legacy_express?page=porro&page_limit=quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/alipay/legacy_express"
);

let params = {
    "page": "porro",
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
    "http://store.wutang.com/admin/alipay/legacy_express" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"items":[{"pid":"ipsum","key":"ea","seller_email":"quo"}]}'

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
            "pid": "ipsum",
            "key": "ea",
            "seller_email": "quo"
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
    "http://store.wutang.com/admin/alipay/legacy_express/1?id=alias" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/alipay/legacy_express/1"
);

let params = {
    "id": "alias",
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
    "http://store.wutang.com/admin/alipay/legacy_express/1?id=nisi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/alipay/legacy_express/1"
);

let params = {
    "id": "nisi",
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
    "http://store.wutang.com/admin/alipay/legacy_express/status/1?id=neque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/alipay/legacy_express/status/1"
);

let params = {
    "id": "neque",
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
## Get assetImgs list
获取首页静态资源列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/asset_img?page=tenetur&page_limit=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/asset_img"
);

let params = {
    "page": "tenetur",
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
## save asset img
保存首页静态资源

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/asset_img?img=molestias&img_location=vitae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/asset_img"
);

let params = {
    "img": "molestias",
    "img_location": "vitae",
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
`POST admin/asset_img`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `img` |  required  | 图片地址
    `img_location` |  required  | 图片位置

<!-- END_d87de4a1217ef941a28add66dd4020f4 -->

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
    -G "http://store.wutang.com/admin/category_stories?page=assumenda&page_limit=tenetur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories"
);

let params = {
    "page": "assumenda",
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
    "http://store.wutang.com/admin/category_stories?title=voluptatem&title_en=corrupti&description=quibusdam&description_en=sint&banner=neque&product_category_id=quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories"
);

let params = {
    "title": "voluptatem",
    "title_en": "corrupti",
    "description": "quibusdam",
    "description_en": "sint",
    "banner": "neque",
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
    "http://store.wutang.com/admin/category_stories/1?title=pariatur&title_en=accusamus&description=recusandae&description_en=eum&banner=qui&product_category_id=iste" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories/1"
);

let params = {
    "title": "pariatur",
    "title_en": "accusamus",
    "description": "recusandae",
    "description_en": "eum",
    "banner": "qui",
    "product_category_id": "iste",
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
    -G "http://store.wutang.com/admin/logs/1?page=consequatur&page_limit=dolorem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/logs/1"
);

let params = {
    "page": "consequatur",
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
    "http://store.wutang.com/admin/logs/1?ids=reprehenderit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/logs/1"
);

let params = {
    "ids": "reprehenderit",
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
    -G "http://store.wutang.com/admin/order?page=nostrum&page_limit=omnis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/order"
);

let params = {
    "page": "nostrum",
    "page_limit": "omnis",
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
    "http://store.wutang.com/admin/order?page=sunt&page_limit=molestiae&username=veritatis&order_no=facilis&order_status=est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/order"
);

let params = {
    "page": "sunt",
    "page_limit": "molestiae",
    "username": "veritatis",
    "order_no": "facilis",
    "order_status": "est",
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
    -d '{"refund_status":"ipsa","ship_status":"qui","status":"nisi"}'

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
    "refund_status": "ipsa",
    "ship_status": "qui",
    "status": "nisi"
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
    -G "http://store.wutang.com/admin/product?page=rerum&page_limit=consequatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product"
);

let params = {
    "page": "rerum",
    "page_limit": "consequatur",
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
    "http://store.wutang.com/admin/product?product_category_id=voluptas&product_name=inventore&product_name_en=et&thumbnail=sunt&slug=esse&short_description=labore&short_description_en=consectetur&price=saepe&sale_price=eos&stock=quis&seo_title=vel&seo_keyword=ut&seo_description=laboriosam&benefit=eum&benefit_en=odit&tech_description=fuga&tech_description_en=voluptas&description=voluptatem&description_en=in&usage=doloremque&usage_en=iusto&main_image=sunt&main_image_2=ratione&benefit_image=excepturi&product_video=minima&status=ipsum&rating=in&sold_count=quam&review_count=doloribus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product"
);

let params = {
    "product_category_id": "voluptas",
    "product_name": "inventore",
    "product_name_en": "et",
    "thumbnail": "sunt",
    "slug": "esse",
    "short_description": "labore",
    "short_description_en": "consectetur",
    "price": "saepe",
    "sale_price": "eos",
    "stock": "quis",
    "seo_title": "vel",
    "seo_keyword": "ut",
    "seo_description": "laboriosam",
    "benefit": "eum",
    "benefit_en": "odit",
    "tech_description": "fuga",
    "tech_description_en": "voluptas",
    "description": "voluptatem",
    "description_en": "in",
    "usage": "doloremque",
    "usage_en": "iusto",
    "main_image": "sunt",
    "main_image_2": "ratione",
    "benefit_image": "excepturi",
    "product_video": "minima",
    "status": "ipsum",
    "rating": "in",
    "sold_count": "quam",
    "review_count": "doloribus",
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
    "http://store.wutang.com/admin/product/1?product_category_id=quam&product_name=qui&product_name_en=dolore&thumbnail=debitis&slug=nulla&short_description=eius&short_description_en=nostrum&price=autem&sale_price=iure&stock=saepe&seo_title=dolores&seo_keyword=sit&seo_description=officiis&benefit=amet&benefit_en=eos&tech_description=dolorem&tech_description_en=autem&description=ut&description_en=ad&usage=aliquid&usage_en=ut&main_image=est&main_image_2=non&benefit_image=perspiciatis&product_video=est&status=officia&rating=est&sold_count=veniam&review_count=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product/1"
);

let params = {
    "product_category_id": "quam",
    "product_name": "qui",
    "product_name_en": "dolore",
    "thumbnail": "debitis",
    "slug": "nulla",
    "short_description": "eius",
    "short_description_en": "nostrum",
    "price": "autem",
    "sale_price": "iure",
    "stock": "saepe",
    "seo_title": "dolores",
    "seo_keyword": "sit",
    "seo_description": "officiis",
    "benefit": "amet",
    "benefit_en": "eos",
    "tech_description": "dolorem",
    "tech_description_en": "autem",
    "description": "ut",
    "description_en": "ad",
    "usage": "aliquid",
    "usage_en": "ut",
    "main_image": "est",
    "main_image_2": "non",
    "benefit_image": "perspiciatis",
    "product_video": "est",
    "status": "officia",
    "rating": "est",
    "sold_count": "veniam",
    "review_count": "qui",
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
    -G "http://store.wutang.com/admin/product_categories?page=quo&page_limit=quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories"
);

let params = {
    "page": "quo",
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
    "http://store.wutang.com/admin/product_categories?name=eius&thumbnail=odit&banner=qui&title=beatae&title_en=enim&sub_title=tempore&describe=culpa&describe_en=magni&describe_img=ut&parent_id=aliquid" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories"
);

let params = {
    "name": "eius",
    "thumbnail": "odit",
    "banner": "qui",
    "title": "beatae",
    "title_en": "enim",
    "sub_title": "tempore",
    "describe": "culpa",
    "describe_en": "magni",
    "describe_img": "ut",
    "parent_id": "aliquid",
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
    "http://store.wutang.com/admin/product_categories/1?name=commodi&thumbnail=excepturi&banner=praesentium&title=quis&title_en=non&sub_title=doloremque&describe=voluptas&describe_en=aut&describe_img=earum&parent_id=consequatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories/1"
);

let params = {
    "name": "commodi",
    "thumbnail": "excepturi",
    "banner": "praesentium",
    "title": "quis",
    "title_en": "non",
    "sub_title": "doloremque",
    "describe": "voluptas",
    "describe_en": "aut",
    "describe_img": "earum",
    "parent_id": "consequatur",
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
    "http://store.wutang.com/admin/product_sku?title=quia&description=et&price=eum&stock=dolorum&product_id=velit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_sku"
);

let params = {
    "title": "quia",
    "description": "et",
    "price": "eum",
    "stock": "dolorum",
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
    "http://store.wutang.com/admin/product_sku/1?title=voluptas&description=architecto&price=occaecati&stock=voluptatibus&product_id=modi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_sku/1"
);

let params = {
    "title": "voluptas",
    "description": "architecto",
    "price": "occaecati",
    "stock": "voluptatibus",
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

#[ADMIN] User

用户管理
<!-- START_bd487ab94d8034c2d13644bb1772fdfa -->
## Query user list(Admin)
查询用户数据列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/user?username=adipisci&page=id&page_limit=itaque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user"
);

let params = {
    "username": "adipisci",
    "page": "id",
    "page_limit": "itaque",
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
    "http://store.wutang.com/admin/user/1?name=quibusdam&email=qui&phone=labore&avatar=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user/1"
);

let params = {
    "name": "quibusdam",
    "email": "qui",
    "phone": "labore",
    "avatar": "qui",
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
    "http://store.wutang.com/admin/user/reset_password/1?oldPassword=amet&newPassword=impedit&newPassword_confirmation=non" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user/reset_password/1"
);

let params = {
    "oldPassword": "amet",
    "newPassword": "impedit",
    "newPassword_confirmation": "non",
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
    -G "http://store.wutang.com/admin/get_user?hash_id=commodi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/get_user"
);

let params = {
    "hash_id": "commodi",
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
    "http://store.wutang.com/admin/user_addresses?province=rerum&city=qui&district=explicabo&address=ipsam&zip=quo&contact_name=ratione&contact_phone=ullam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses"
);

let params = {
    "province": "rerum",
    "city": "qui",
    "district": "explicabo",
    "address": "ipsam",
    "zip": "quo",
    "contact_name": "ratione",
    "contact_phone": "ullam",
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
    "http://store.wutang.com/admin/user_addresses/1?address_id=ut&province=magnam&city=aut&district=quo&address=qui&zip=perspiciatis&contact_name=quia&contact_phone=enim" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses/1"
);

let params = {
    "address_id": "ut",
    "province": "magnam",
    "city": "aut",
    "district": "quo",
    "address": "qui",
    "zip": "perspiciatis",
    "contact_name": "quia",
    "contact_phone": "enim",
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
    "http://store.wutang.com/admin/user_addresses/1?address_id=eveniet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses/1"
);

let params = {
    "address_id": "eveniet",
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
    "http://store.wutang.com/admin/user_profiles/1?profile_id=ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_profiles/1"
);

let params = {
    "profile_id": "ut",
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
    "http://store.wutang.com/admin/user_profiles/1?profile_id=sit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_profiles/1"
);

let params = {
    "profile_id": "sit",
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
    "http://store.wutang.com/api/auth/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"qui","username":"iure","password":"omnis","password_confirmation":"delectus","code":"minima","captcha_key":"et","captcha_code":"maxime","password_question_id":6,"password_answer":"magni"}'

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
    "name": "qui",
    "username": "iure",
    "password": "omnis",
    "password_confirmation": "delectus",
    "code": "minima",
    "captcha_key": "et",
    "captcha_code": "maxime",
    "password_question_id": 6,
    "password_answer": "magni"
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
    -G "http://store.wutang.com/api/user_question?username=at" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_question"
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
    "http://store.wutang.com/api/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"username":"distinctio","password":"minus"}'

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
    "username": "distinctio",
    "password": "minus"
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
    "http://store.wutang.com/api/password_reset?username=veniam&password_question_id=adipisci&password_answer=velit&password=atque&password_confirmation=veniam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/password_reset"
);

let params = {
    "username": "veniam",
    "password_question_id": "adipisci",
    "password_answer": "velit",
    "password": "atque",
    "password_confirmation": "veniam",
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
    -d '{"oldPassword":"accusantium","newPassword":"doloribus","newPassword_confirmation":"blanditiis"}'

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
    "oldPassword": "accusantium",
    "newPassword": "doloribus",
    "newPassword_confirmation": "blanditiis"
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
    -G "http://store.wutang.com/api/orders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/orders"
);

let headers = {
    "Content-Type": "application/json",
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
    -G "http://store.wutang.com/api/order_details/1?no=ab" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/order_details/1"
);

let params = {
    "no": "ab",
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
    "http://store.wutang.com/api/orders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"address_id":"ut","remark":"excepturi"}'

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
    "address_id": "ut",
    "remark": "excepturi"
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
    "http://store.wutang.com/api/orders/retry" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"no":5}'

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
    "no": 5
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
    "http://store.wutang.com/api/orders/cancel?no=amet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/orders/cancel"
);

let params = {
    "no": "amet",
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
                "product_category_id": 18,
                "product_name": "黑钻焕肤水",
                "product_name_en": "vel impedit aut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?95442",
                "slug": "aut-nihil",
                "short_description": "Ea eum facere voluptatum provident odio.",
                "short_description_en": "Ratione sit impedit enim voluptatem minima voluptates quia. Aperiam soluta sed cum iusto minima ducimus vero similique. Aut qui minus sequi autem repellat quidem.",
                "price": "9744.00",
                "sale_price": "1.00",
                "stock": 953,
                "spec": null,
                "seo_title": "veritatis dolorem quas",
                "seo_keyword": "et",
                "seo_description": "Earum libero fugiat quisquam aliquid ea alias.",
                "benefit": "Quia sint distinctio ut iure ut voluptas. Consequatur qui iste quis quo reiciendis earum illum. Iure voluptates quia et sint minima. Incidunt alias ducimus natus ut.",
                "benefit_en": "Totam recusandae iusto assumenda quisquam repudiandae nulla velit voluptatem. Natus labore sequi quisquam quia et. Provident iste voluptas at ipsam est et explicabo.",
                "tech_description": "Expedita suscipit dolorum ex sunt qui qui. Dolorum dolorem non omnis explicabo. Deserunt ut explicabo inventore voluptas tempora. Quae molestiae quaerat omnis dolorem optio dolorem.",
                "tech_description_en": "Sint quia itaque et tempora. Minima corporis iusto ut dolorum reprehenderit tempore. Atque nam aliquam sunt corporis. Eligendi est labore praesentium.",
                "description": "Quidem et quia blanditiis sed corrupti ut. Porro quos dolor ipsa illo vel voluptatem rerum sint. Eligendi assumenda consequatur necessitatibus. Aut corrupti laborum omnis et earum labore.",
                "description_en": "Consequatur dolores et architecto vero. Nobis atque corrupti rerum sed tempore rem omnis enim. Quas temporibus aut et cum eius consequatur. Minima laboriosam quo modi perspiciatis ratione rerum cupiditate.",
                "usage": "Enim harum assumenda excepturi voluptatibus rerum debitis quod. Debitis et voluptatem praesentium repellendus velit sequi eaque.",
                "usage_en": "Quisquam iusto sit magni. Et a nam ullam. Hic itaque amet deserunt. Ut voluptatem unde aut sit omnis commodi.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?28553",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?88439",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?96044",
                "product_video": null,
                "status": 1,
                "rating": 3.9699999999999998,
                "sold_count": 5919,
                "review_count": 3686,
                "created_at": "2020-08-31 05:19:08",
                "updated_at": "2020-09-09 18:49:08",
                "product_category": {
                    "id": 18,
                    "name": "BB霜",
                    "slug": "et-corrupti",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?18862",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?29858",
                    "title": "fuga ut consequatur",
                    "title_en": "sequi provident corrupti",
                    "sub_title": "vel odit sit",
                    "describe": "Quidem fugiat est sint voluptatem facilis. Voluptatem nesciunt maiores expedita dignissimos nisi dicta. Vel corporis non aut atque suscipit incidunt necessitatibus sint.",
                    "describe_en": "Qui et voluptate quia quidem. Nisi esse tempora nihil fuga officiis. Laudantium voluptatem voluptatem enim. Est ea recusandae temporibus ea doloribus pariatur.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?15543",
                    "parent_id": 29,
                    "level": 1,
                    "created_at": "2020-08-26 03:18:25",
                    "updated_at": "2020-09-04 22:19:10"
                }
            },
            {
                "id": 2,
                "product_category_id": 15,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "optio consequatur rem",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?69145",
                "slug": "nihil-nihil",
                "short_description": "Sit sit voluptatem eligendi nesciunt id.",
                "short_description_en": "Doloribus similique ea qui libero nulla doloribus est. Doloribus quibusdam quaerat debitis aut. Rem perspiciatis nulla placeat unde voluptas laborum a ut.",
                "price": "5838.00",
                "sale_price": "1.00",
                "stock": 800,
                "spec": null,
                "seo_title": "quis reiciendis sunt",
                "seo_keyword": "sed",
                "seo_description": "Voluptates qui minus dolor aut.",
                "benefit": "Nulla est sint pariatur dignissimos et. Sunt voluptas et nihil vero nesciunt qui. Hic molestiae voluptatem non accusamus omnis qui. Ipsa quis nulla quae numquam.",
                "benefit_en": "Blanditiis est eum et labore. Repudiandae repellendus voluptatibus non accusantium occaecati. Sed enim necessitatibus iure temporibus quibusdam. Ullam numquam aut laborum porro.",
                "tech_description": "Suscipit sunt eligendi corrupti quisquam sequi eius. Quod reprehenderit sapiente iusto aperiam. Sed id consequatur ipsam quod accusamus perspiciatis.",
                "tech_description_en": "Exercitationem aut cupiditate et similique nihil esse. Natus et et alias qui. Consequatur quos aliquid molestiae ipsam qui.",
                "description": "Soluta quia quisquam placeat illo. Voluptatem alias aut ut molestias. Ipsa sint quos ut impedit.",
                "description_en": "Quia repellendus quod eveniet quos molestiae assumenda dolor. Placeat qui ut perferendis alias nemo. Quasi laudantium itaque cupiditate vero exercitationem et dicta maxime. Repellat occaecati qui sed.",
                "usage": "Maiores enim voluptatum quia quia quia dolor amet. Harum ratione sed facilis est. Repellendus dignissimos praesentium explicabo et hic.",
                "usage_en": "Nihil pariatur veniam et. Consequuntur sit est iste est expedita suscipit.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?77699",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?18347",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?74580",
                "product_video": null,
                "status": 1,
                "rating": 9.15,
                "sold_count": 2629,
                "review_count": 6782,
                "created_at": "2020-09-03 00:30:10",
                "updated_at": "2020-09-01 16:02:26",
                "product_category": {
                    "id": 15,
                    "name": "彩妆盘",
                    "slug": "suscipit-doloribus",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?74598",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?82039",
                    "title": "necessitatibus ullam voluptatem",
                    "title_en": "id ipsa consequatur",
                    "sub_title": "eum autem et",
                    "describe": "Odit aut et laboriosam dolores. Eveniet ipsam voluptatibus et pariatur repellendus non sed autem.",
                    "describe_en": "Fuga voluptatum at quae mollitia aut. Veniam quasi est ipsa ut dicta eius. Aspernatur quasi voluptatem iure. Odit voluptatem impedit repudiandae illo illo optio.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?31840",
                    "parent_id": 15,
                    "level": 1,
                    "created_at": "2020-09-10 16:27:31",
                    "updated_at": "2020-08-23 08:08:47"
                }
            },
            {
                "id": 3,
                "product_category_id": 6,
                "product_name": "黑钻焕肤水",
                "product_name_en": "magni a officia",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?19312",
                "slug": "enim-aut",
                "short_description": "Eum et consequuntur non atque totam ut.",
                "short_description_en": "Nihil quidem similique ratione eius. Doloremque velit dolorum exercitationem eos sit autem quae ratione. Ut architecto commodi in architecto. Reiciendis sunt rerum quo.",
                "price": "6765.00",
                "sale_price": "1.00",
                "stock": 572,
                "spec": null,
                "seo_title": "consequuntur et doloribus",
                "seo_keyword": "consequatur",
                "seo_description": "Id fugiat voluptate libero velit sed.",
                "benefit": "Expedita officiis velit aut voluptates nemo. Ullam laboriosam voluptas ipsa. Quo qui officiis ut sunt officia rerum. Impedit ea deleniti perspiciatis repudiandae.",
                "benefit_en": "Et qui consequuntur voluptas autem. Officiis et dolore magni aliquam. Voluptatem possimus reiciendis asperiores ipsa. Dolorem magni provident repudiandae ratione. Facilis dolorem dolores cum id.",
                "tech_description": "Est atque eum quisquam fugiat cupiditate tenetur. Aut aut quas nulla fuga recusandae libero est. Qui dolore sed tempore libero et iste.",
                "tech_description_en": "Magnam saepe aspernatur aut. Excepturi ea sint ut nam ratione quam qui. Blanditiis minima fugiat alias culpa molestiae quia provident. Corrupti minus enim non nostrum. Et ea fuga et veritatis.",
                "description": "Deserunt eos rerum a tempore est commodi commodi quo. Perspiciatis odio et ducimus iure quidem. Eveniet quaerat recusandae iure expedita.",
                "description_en": "Ipsam ex est quaerat expedita. Est aut enim atque soluta necessitatibus omnis maxime. Rerum autem est velit.",
                "usage": "Non commodi quas illo modi. Debitis harum voluptas nihil recusandae dolor. Et et autem ullam voluptatibus libero nobis.",
                "usage_en": "Distinctio doloremque praesentium voluptas dicta voluptate rerum perferendis. Similique eos maxime rem animi voluptates consequatur blanditiis. Enim et cumque voluptas ea tempore et voluptas sunt. Nemo ut aut est natus unde est repudiandae.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?56737",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?86941",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?23267",
                "product_video": null,
                "status": 2,
                "rating": 7.79,
                "sold_count": 3965,
                "review_count": 4237,
                "created_at": "2020-08-18 10:17:14",
                "updated_at": "2020-09-11 14:27:21",
                "product_category": {
                    "id": 6,
                    "name": "洁面",
                    "slug": "quae-sed",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?17138",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?91400",
                    "title": "ipsum molestiae dolorum",
                    "title_en": "sapiente architecto doloribus",
                    "sub_title": "debitis et totam",
                    "describe": "Esse soluta expedita accusantium tempore ut reprehenderit deleniti. Rerum atque ducimus optio minus rerum laudantium. Rem dolore voluptas voluptates esse. Qui fugiat enim expedita minima.",
                    "describe_en": "Quibusdam corporis nostrum magnam sit quas quia. Eum sed omnis voluptates nobis non aut enim. Sint eius dolores fugit vel.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?91325",
                    "parent_id": 15,
                    "level": 1,
                    "created_at": "2020-08-27 16:13:25",
                    "updated_at": "2020-08-24 00:29:18"
                }
            },
            {
                "id": 4,
                "product_category_id": 1,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "nostrum reiciendis praesentium",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?40270",
                "slug": "reiciendis-qui",
                "short_description": "Et et rerum et perferendis repellendus.",
                "short_description_en": "Voluptatum aut nihil officia. Commodi facilis rerum ea ipsa explicabo qui sit. Dolorum molestiae aut ipsa omnis quod eum numquam.",
                "price": "8247.00",
                "sale_price": "1.00",
                "stock": 607,
                "spec": null,
                "seo_title": "aperiam in non",
                "seo_keyword": "quae",
                "seo_description": "Voluptatem occaecati ut et.",
                "benefit": "Amet expedita voluptatem cumque. Commodi omnis harum enim a. Architecto quo consectetur quasi. Accusamus ipsa cum distinctio rerum voluptas autem sint.",
                "benefit_en": "Asperiores repudiandae animi rerum omnis quisquam. Tempora aut rerum non modi nostrum ut vel. Similique cum et voluptatem voluptas veniam.",
                "tech_description": "Blanditiis quod vero magnam quae rem earum alias. Et inventore voluptatem fugiat corrupti ducimus. Dicta at animi ipsum ut at. Ducimus sed voluptatem dolor officia. Praesentium et earum voluptate debitis odio in.",
                "tech_description_en": "Et unde sed dolor commodi. Dolores ut ut voluptatem quis aut facilis. Aut sed sequi et impedit voluptatibus.",
                "description": "Nihil quia sunt voluptatem laboriosam beatae molestiae nulla. Omnis aut blanditiis cum deserunt. Enim aperiam eveniet dolorem aliquid.",
                "description_en": "Aliquam tempore totam qui explicabo ut est quo. Nobis deleniti doloribus non sed sed quaerat in. Amet et ex blanditiis deleniti nisi. Eligendi illum eius et ut.",
                "usage": "Fuga facilis saepe suscipit fuga. Quia officia eligendi eligendi eaque aut. Dolor tempore nemo totam maiores. Repudiandae libero perspiciatis voluptatem dolores doloremque.",
                "usage_en": "Vel voluptatem omnis in. Doloribus quia officia ipsum quis. Temporibus quod rerum enim fugiat nulla quia animi.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?36957",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?82669",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?19674",
                "product_video": null,
                "status": 3,
                "rating": 9.59,
                "sold_count": 9832,
                "review_count": 8304,
                "created_at": "2020-09-07 07:46:49",
                "updated_at": "2020-09-08 18:42:36",
                "product_category": {
                    "id": 1,
                    "name": "套装C",
                    "slug": "harum-tempore",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?14636",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?77913",
                    "title": "provident autem illum",
                    "title_en": "doloribus magnam consectetur",
                    "sub_title": "corrupti non sint",
                    "describe": "Beatae odio repellendus culpa. Molestias voluptatum mollitia eum aut qui vitae dolor recusandae. Voluptatem enim illum accusamus officia.",
                    "describe_en": "Quia optio libero reiciendis ratione recusandae. Omnis accusantium cupiditate magni autem quis facilis. Recusandae ducimus officiis et sit in ipsum.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?69802",
                    "parent_id": 14,
                    "level": 1,
                    "created_at": "2020-09-01 09:56:50",
                    "updated_at": "2020-09-12 16:27:04"
                }
            },
            {
                "id": 5,
                "product_category_id": 16,
                "product_name": "黑钻肌光精华",
                "product_name_en": "libero repellendus minima",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?61922",
                "slug": "veniam-doloremque",
                "short_description": "Iste ea porro quia voluptates eos.",
                "short_description_en": "Quia nulla iste neque delectus. Eligendi animi at laudantium mollitia dolore aut consectetur dolor. Consequatur voluptatem voluptatibus voluptatem minus magni dolor ratione.",
                "price": "8894.00",
                "sale_price": "1.00",
                "stock": 703,
                "spec": null,
                "seo_title": "id accusantium sit",
                "seo_keyword": "rerum",
                "seo_description": "Sint reiciendis quibusdam eos.",
                "benefit": "Velit est ad temporibus magnam aperiam. Ipsa a voluptatem perspiciatis distinctio. Et magnam doloremque necessitatibus mollitia et. Veniam et recusandae qui labore.",
                "benefit_en": "Debitis non sequi reiciendis et et eligendi dolores. Rem voluptas commodi dolore. Rerum accusamus vel asperiores est.",
                "tech_description": "Et unde reiciendis veniam harum exercitationem in. Vel culpa doloribus nobis delectus modi. Debitis iste non ullam iure odio. Reprehenderit quo aut recusandae quisquam sit.",
                "tech_description_en": "Sed itaque perferendis voluptatem. Corporis nihil aut minus. Quasi aut quaerat sit eos. Laboriosam consectetur ea illum.",
                "description": "Tempora temporibus rem harum porro quas ad quisquam. Explicabo reiciendis ex inventore et delectus adipisci. Sunt a debitis fugit doloremque praesentium atque.",
                "description_en": "Aliquam maiores pariatur est aut omnis aut. Omnis dolores eligendi perspiciatis ratione iusto. Nihil debitis aliquid eum molestias ad quidem dolore aut.",
                "usage": "Perspiciatis quisquam reiciendis ipsum sit voluptatem asperiores. Dolorem dolorum labore incidunt placeat est fuga earum odit. Sed doloremque quidem repellendus deleniti aspernatur. Mollitia id eum fugiat necessitatibus. Neque dolorem ipsa voluptas nobis quisquam est quis.",
                "usage_en": "Reprehenderit rem sapiente assumenda ea sint. Facilis velit dicta ipsum ea.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?53648",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?83602",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?15115",
                "product_video": null,
                "status": 3,
                "rating": 1.63,
                "sold_count": 7210,
                "review_count": 8495,
                "created_at": "2020-09-01 06:49:17",
                "updated_at": "2020-08-19 16:23:13",
                "product_category": {
                    "id": 16,
                    "name": "套装系列",
                    "slug": "et-maxime",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?91730",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?49455",
                    "title": "et ullam quia",
                    "title_en": "nostrum vero omnis",
                    "sub_title": "omnis animi id",
                    "describe": "Repellendus delectus et ut unde assumenda error velit. Excepturi accusantium doloribus quidem non deserunt ex distinctio. Voluptatibus quisquam quas quidem. Temporibus voluptas id eos.",
                    "describe_en": "Qui fugiat et itaque autem. Adipisci commodi suscipit reiciendis provident nihil doloremque.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?24734",
                    "parent_id": 6,
                    "level": 1,
                    "created_at": "2020-09-06 09:53:22",
                    "updated_at": "2020-08-28 19:25:09"
                }
            },
            {
                "id": 6,
                "product_category_id": 10,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "voluptatem non reiciendis",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?57725",
                "slug": "molestiae-sit",
                "short_description": "Enim molestias nostrum iste ad iste.",
                "short_description_en": "Autem voluptates voluptas et mollitia voluptatibus temporibus nemo. Rem possimus perspiciatis aliquid blanditiis consectetur et.",
                "price": "4309.00",
                "sale_price": "1.00",
                "stock": 191,
                "spec": null,
                "seo_title": "temporibus vero ut",
                "seo_keyword": "reiciendis",
                "seo_description": "Quae beatae voluptatem est nulla.",
                "benefit": "Illo error voluptatem id maiores consequatur ea. Mollitia est doloribus quia est velit. Officiis provident est quo fuga non itaque voluptates.",
                "benefit_en": "Architecto saepe incidunt rerum voluptate quidem. Est non dolores nam.",
                "tech_description": "Exercitationem quia ut odit distinctio eius. Nobis soluta consequatur aut dolorem ullam ducimus. Sit at ut cupiditate omnis et sed non. Optio porro est iusto eius sapiente aut facere.",
                "tech_description_en": "Asperiores ut ut et nostrum hic. In quia occaecati et porro. Pariatur soluta delectus labore natus ut.",
                "description": "Quod repudiandae nulla labore sapiente ex error optio quia. Ut ut quibusdam labore nulla qui possimus. Non aliquid corporis quae.",
                "description_en": "Placeat eos autem ut sed voluptas. Adipisci sit ratione deleniti porro. Rerum labore rerum voluptatem perspiciatis quidem error et occaecati.",
                "usage": "Temporibus rerum ut dolorum omnis quod. Voluptatem assumenda reiciendis consequatur molestias.",
                "usage_en": "Modi magni ullam pariatur dicta. Est fugiat animi dolorem voluptatem. Perferendis nam perferendis odit deserunt odit. Animi ipsam nisi autem ad. Nostrum quod reprehenderit illum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?98039",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?90319",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?94506",
                "product_video": null,
                "status": 2,
                "rating": 1.6,
                "sold_count": 4208,
                "review_count": 2927,
                "created_at": "2020-08-24 05:02:51",
                "updated_at": "2020-08-28 00:06:00",
                "product_category": {
                    "id": 10,
                    "name": "隔离",
                    "slug": "omnis-odio",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?25306",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?95719",
                    "title": "et sunt modi",
                    "title_en": "facere reprehenderit ipsa",
                    "sub_title": "voluptas veniam saepe",
                    "describe": "Minima repudiandae velit pariatur dolorem. Dolor voluptatibus nesciunt et sapiente praesentium. Odio officia eos inventore harum aut aliquam. Qui voluptate dolorem nihil aut et.",
                    "describe_en": "Et eos nisi qui rem. Dolorem beatae eius autem ut et voluptatem. Nihil nihil eius non corrupti quis iste voluptas est.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?49630",
                    "parent_id": 19,
                    "level": 1,
                    "created_at": "2020-08-26 22:37:42",
                    "updated_at": "2020-09-08 19:51:23"
                }
            },
            {
                "id": 7,
                "product_category_id": 14,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "nam totam nulla",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?66290",
                "slug": "quo-nesciunt",
                "short_description": "Sint fuga dignissimos et ipsam hic.",
                "short_description_en": "Et est ipsa eveniet est. Voluptas odio amet occaecati ut laudantium quis quas. Mollitia reiciendis doloremque vel. Sapiente maiores inventore ut.",
                "price": "4653.00",
                "sale_price": "1.00",
                "stock": 552,
                "spec": null,
                "seo_title": "vitae expedita sint",
                "seo_keyword": "occaecati",
                "seo_description": "Ut sed beatae quod dolorum.",
                "benefit": "Cum voluptates maiores deleniti iure. Eos atque error qui incidunt quo animi molestiae. Quam omnis magnam dolores incidunt. Molestiae velit vel consequuntur aspernatur ullam occaecati.",
                "benefit_en": "Est animi sed consequatur. Dolores quas dolores quisquam est totam ad recusandae. Sunt porro saepe rerum. Aut molestiae atque ratione soluta rerum aliquid.",
                "tech_description": "Non saepe molestiae quia omnis. Odit deserunt recusandae illum quos labore alias aut. Architecto et amet modi aut doloribus. A animi iure quia quasi.",
                "tech_description_en": "Consequuntur nesciunt voluptatem voluptas. Libero ratione fugiat rem voluptatem modi exercitationem quas. Aut deserunt sint eos adipisci itaque officia. Sed totam qui unde ea.",
                "description": "Non ex blanditiis blanditiis porro impedit. Consequatur sequi et eligendi esse laborum. Ea ipsum praesentium quia qui. Inventore voluptatibus nesciunt explicabo maxime voluptatem.",
                "description_en": "Nesciunt dolores maiores vel sit voluptatem magni provident amet. Recusandae atque vero aliquid officiis est doloribus porro. Quaerat in magni eius fugit officiis est exercitationem quaerat. Distinctio ut maxime saepe ea cupiditate laudantium.",
                "usage": "Ullam voluptatem adipisci odio. Facere totam nemo nobis corporis rem aut odio. Illum ipsum nihil excepturi consequatur ut.",
                "usage_en": "Nesciunt et aut quia id. Velit qui non sequi. Recusandae accusamus quia quisquam quam fuga expedita. Omnis consectetur illum quas dolorem est distinctio quaerat.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?31911",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?51903",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?23967",
                "product_video": null,
                "status": 2,
                "rating": 6.34,
                "sold_count": 6366,
                "review_count": 3465,
                "created_at": "2020-08-18 08:26:46",
                "updated_at": "2020-09-03 16:33:21",
                "product_category": {
                    "id": 14,
                    "name": "套装C",
                    "slug": "cupiditate-dolore",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?53898",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?88831",
                    "title": "ut consequatur adipisci",
                    "title_en": "non voluptas ut",
                    "sub_title": "eos cumque consequatur",
                    "describe": "Sit suscipit nostrum voluptatem iste officia. Laborum molestiae accusamus est hic vel. Nihil possimus molestias aut omnis dolorum quo. Itaque et voluptatem nemo enim eos.",
                    "describe_en": "Harum quia quod eveniet ut molestiae consequuntur qui. Voluptatibus adipisci ducimus id dolorem veritatis. In quam quis excepturi quia accusamus quia voluptas.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?28323",
                    "parent_id": 19,
                    "level": 1,
                    "created_at": "2020-09-05 04:05:03",
                    "updated_at": "2020-09-03 16:07:11"
                }
            },
            {
                "id": 8,
                "product_category_id": 15,
                "product_name": "黑钻肌光精华",
                "product_name_en": "ea enim repudiandae",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?40785",
                "slug": "modi-laboriosam",
                "short_description": "Maxime autem impedit necessitatibus.",
                "short_description_en": "Impedit nemo corporis eos voluptas. Dignissimos occaecati autem ad illum.",
                "price": "3712.00",
                "sale_price": "1.00",
                "stock": 748,
                "spec": null,
                "seo_title": "sed quis dolor",
                "seo_keyword": "architecto",
                "seo_description": "Cum aut iure omnis adipisci corporis.",
                "benefit": "Consequatur eius id dicta nihil qui delectus. Amet fugiat velit recusandae. Similique error explicabo a cupiditate error quaerat.",
                "benefit_en": "Expedita modi autem dolor laboriosam. Ullam et nesciunt odit eveniet aut. Blanditiis porro consequatur asperiores expedita.",
                "tech_description": "Voluptatem dicta pariatur aperiam quia aut hic ducimus. Minima est tenetur molestiae. Et doloribus consequatur molestias quo iusto quis expedita. Aspernatur repellendus consequatur eos odit dolor est.",
                "tech_description_en": "Eius minus perspiciatis provident ad reprehenderit quae error. Culpa voluptatem veritatis cupiditate sequi. Numquam molestiae impedit molestiae enim ipsam commodi laboriosam. Ducimus et praesentium perspiciatis debitis voluptatibus iste.",
                "description": "Architecto et quibusdam ipsam nostrum quia dicta et. Earum vero molestiae voluptates. Earum eius quibusdam sunt rerum rem assumenda architecto.",
                "description_en": "Quidem molestias enim porro maiores sequi libero. Tenetur dolor fuga nam hic nihil quia. Tenetur eos nesciunt cumque aliquam ut.",
                "usage": "Cupiditate dolores qui alias pariatur est. Expedita ea est eligendi eligendi minima aut. Voluptatem id exercitationem ut. Deserunt consequatur ut illum adipisci eos.",
                "usage_en": "Ipsam et ut illum dolor. Quas qui quo alias quae. Incidunt et laudantium ipsa non.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?92750",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?63703",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?34957",
                "product_video": null,
                "status": 1,
                "rating": 4.77,
                "sold_count": 7643,
                "review_count": 9832,
                "created_at": "2020-09-04 18:22:16",
                "updated_at": "2020-08-27 01:24:24",
                "product_category": {
                    "id": 15,
                    "name": "彩妆盘",
                    "slug": "suscipit-doloribus",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?74598",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?82039",
                    "title": "necessitatibus ullam voluptatem",
                    "title_en": "id ipsa consequatur",
                    "sub_title": "eum autem et",
                    "describe": "Odit aut et laboriosam dolores. Eveniet ipsam voluptatibus et pariatur repellendus non sed autem.",
                    "describe_en": "Fuga voluptatum at quae mollitia aut. Veniam quasi est ipsa ut dicta eius. Aspernatur quasi voluptatem iure. Odit voluptatem impedit repudiandae illo illo optio.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?31840",
                    "parent_id": 15,
                    "level": 1,
                    "created_at": "2020-09-10 16:27:31",
                    "updated_at": "2020-08-23 08:08:47"
                }
            },
            {
                "id": 9,
                "product_category_id": 3,
                "product_name": "黑钻焕肤水",
                "product_name_en": "similique qui maiores",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?36219",
                "slug": "tempora-culpa",
                "short_description": "In ducimus laboriosam veritatis vel eum.",
                "short_description_en": "Eius dolor dolor nam quo magnam ab eos. Fugit corrupti sint quo autem est error qui ea. Et dolor est expedita expedita cum ut et. Iusto veritatis pariatur dolorum quam fugiat. Consectetur voluptas aliquid aut beatae quos autem et.",
                "price": "9523.00",
                "sale_price": "1.00",
                "stock": 479,
                "spec": null,
                "seo_title": "sit voluptatem distinctio",
                "seo_keyword": "autem",
                "seo_description": "Dolor aliquam tempora incidunt qui.",
                "benefit": "Molestiae iure cumque sed occaecati. Possimus vel nulla ea voluptates delectus. Ad suscipit soluta eos optio et placeat cum. Voluptatem deserunt est ea cupiditate ipsum ut.",
                "benefit_en": "Libero ea sunt necessitatibus reprehenderit ullam et eligendi. Odit aperiam quisquam quia. Quod fugiat harum consequatur rerum quo repellendus.",
                "tech_description": "Eum aut et dolores sunt. Incidunt qui nulla sit eveniet. Commodi est itaque doloremque numquam. Minima quia minus omnis quasi eos.",
                "tech_description_en": "Qui maiores voluptas enim harum aliquid eligendi. Aut non qui aut vel quam illo et ad. Sint libero nihil pariatur et et omnis.",
                "description": "Non accusamus officiis sint dignissimos omnis. Quos aliquid id sapiente voluptas vero aliquid commodi. Quos incidunt vel nulla asperiores.",
                "description_en": "Tempore ut debitis possimus maxime ex cupiditate nisi. Ipsa voluptatem vel enim enim non culpa. Sed omnis quia quia voluptates deserunt quas laudantium. Maiores est voluptas et repellat.",
                "usage": "Similique molestiae aspernatur rerum nemo nostrum alias non. Similique aut aliquid sit eaque corrupti dolor. Ut pariatur rerum provident tempore voluptatem rerum amet quae. Dolorem dignissimos est cum explicabo.",
                "usage_en": "Quo molestias ab et reprehenderit qui explicabo assumenda facilis. Doloribus alias corporis voluptatem eum qui sapiente commodi. Pariatur animi delectus cumque est.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?53121",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?25093",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?72975",
                "product_video": null,
                "status": 2,
                "rating": 2.93,
                "sold_count": 1925,
                "review_count": 2819,
                "created_at": "2020-08-31 02:05:32",
                "updated_at": "2020-09-14 04:38:37",
                "product_category": {
                    "id": 3,
                    "name": "面膜",
                    "slug": "numquam-inventore",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?82741",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?60013",
                    "title": "labore repellendus vel",
                    "title_en": "velit ipsa maiores",
                    "sub_title": "quis doloribus deleniti",
                    "describe": "Optio eos ut est corporis voluptatem. Non et minima molestiae. Et recusandae distinctio delectus inventore.",
                    "describe_en": "Quisquam explicabo quod eligendi cum non ab. Et expedita ipsa harum odio provident totam distinctio. Ut provident dolorem illum atque dolore. Amet nemo et repellendus magnam quo incidunt dicta.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?93949",
                    "parent_id": 20,
                    "level": 1,
                    "created_at": "2020-09-13 16:20:42",
                    "updated_at": "2020-08-26 17:14:59"
                }
            },
            {
                "id": 10,
                "product_category_id": 9,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "totam eos excepturi",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?94774",
                "slug": "maxime-repellendus",
                "short_description": "Et et mollitia tempore consequatur tempora.",
                "short_description_en": "Quia aut incidunt dolor cum. Repellendus dolor minus odit. Nihil expedita quis ipsum ipsa ipsum eum. Corrupti quos iusto illo sunt fugiat voluptatem.",
                "price": "5952.00",
                "sale_price": "1.00",
                "stock": 12,
                "spec": null,
                "seo_title": "tempora consequatur eaque",
                "seo_keyword": "voluptas",
                "seo_description": "Accusantium consectetur et maxime.",
                "benefit": "Officiis vel error porro ut odio. Ut non nobis commodi voluptates commodi. Commodi doloribus eos ut sed perspiciatis reprehenderit rerum.",
                "benefit_en": "Atque consequatur modi alias beatae. Aut est consequuntur ea doloremque. Officiis optio aut ratione necessitatibus.",
                "tech_description": "Officiis consequatur sit aut mollitia praesentium. Quam aut id delectus tempore soluta quia ut. Nemo incidunt doloremque eaque. Pariatur sit aut nihil eveniet molestiae sint mollitia.",
                "tech_description_en": "Illum sed aspernatur est consequatur sed voluptas. Qui quis facere sit. Maxime repudiandae laudantium adipisci sit maxime animi. Velit quia a ut officiis dolor qui necessitatibus.",
                "description": "Expedita et tempore aut. Voluptatem quia assumenda cumque sunt ut. Possimus rerum laboriosam sunt dicta. Molestiae numquam facere beatae cum molestiae dolorem voluptatem.",
                "description_en": "Amet accusamus est facilis sequi est doloremque quos. Maiores vel eos ducimus fuga omnis labore qui. Et reiciendis totam corrupti facere dolor magni quos quam.",
                "usage": "Atque illo sequi perspiciatis quia quasi earum perspiciatis dolor. Cum est cumque id nesciunt aut. Autem totam et ad aspernatur dolorum. Quia dolorem et enim adipisci.",
                "usage_en": "Temporibus quia tempora nesciunt sunt. Aut neque et nihil rem libero. Nostrum sint vitae maiores alias. Nesciunt magnam est voluptatem est.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?83858",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?60022",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?48265",
                "product_video": null,
                "status": 2,
                "rating": 2.22,
                "sold_count": 4281,
                "review_count": 9360,
                "created_at": "2020-08-20 23:17:25",
                "updated_at": "2020-08-24 09:06:40",
                "product_category": {
                    "id": 9,
                    "name": "香水",
                    "slug": "vitae-quae",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?22597",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?98594",
                    "title": "sint odit nisi",
                    "title_en": "qui rem repellendus",
                    "sub_title": "voluptas excepturi ut",
                    "describe": "Qui ut eum qui eum. Quos officia earum sit architecto molestias qui. Eum placeat nam nihil aut provident tenetur. Odit accusantium iste vero qui illum libero perspiciatis enim.",
                    "describe_en": "Earum cupiditate in eligendi corrupti consequatur ipsam natus. Quis saepe praesentium reprehenderit eius. Officia ex a molestiae explicabo ratione. Provident est quam eligendi magnam voluptatem.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?74666",
                    "parent_id": 16,
                    "level": 1,
                    "created_at": "2020-08-19 16:51:38",
                    "updated_at": "2020-08-24 21:31:31"
                }
            },
            {
                "id": 11,
                "product_category_id": 7,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "autem qui laudantium",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?87067",
                "slug": "aspernatur-mollitia",
                "short_description": "Distinctio accusantium rerum nihil et.",
                "short_description_en": "Qui dolores doloremque fugit est explicabo sed incidunt. In est sequi esse reiciendis minus. Assumenda aut illo et rerum et.",
                "price": "9709.00",
                "sale_price": "1.00",
                "stock": 837,
                "spec": null,
                "seo_title": "a natus in",
                "seo_keyword": "voluptatibus",
                "seo_description": "Eaque quia ea deleniti deserunt molestiae omnis.",
                "benefit": "Dolore deserunt ea nulla minima in. Nam dolorem et laboriosam et deserunt delectus consequatur. Explicabo rem doloremque assumenda aliquid.",
                "benefit_en": "Neque dolorem deleniti sed vitae. Dolor pariatur vitae soluta unde cupiditate. Unde ipsum et asperiores et eum magnam aut. Cumque aliquam veniam dolor dolorem iste sint sit. Tempora dolor architecto nulla.",
                "tech_description": "Dolorem rem sed recusandae facere optio facere. Doloremque quae atque illum ut dolorem. Id iure voluptatem aliquam et eveniet aut.",
                "tech_description_en": "Blanditiis unde est alias numquam recusandae doloribus sed omnis. Mollitia corporis rerum omnis quis delectus aut.",
                "description": "Voluptate illum asperiores temporibus sed. Voluptatum alias quia molestias velit qui ut in. Possimus esse et dolorem quia earum cupiditate magni.",
                "description_en": "Sit quaerat sit neque rerum incidunt et sed quis. Deserunt suscipit sint itaque animi magni. Culpa quia ut molestias porro corrupti sapiente est.",
                "usage": "Asperiores culpa quos et voluptates est dolores. Id sed explicabo rerum voluptas voluptas libero. Sint et consequatur laboriosam facilis est accusamus. Architecto quia esse dolor doloribus ad blanditiis debitis.",
                "usage_en": "Eum modi aliquam minus. Eius ut quasi vero et. Ut aut doloribus nemo quidem aut sapiente ut reprehenderit.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?11599",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?39470",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?58793",
                "product_video": null,
                "status": 3,
                "rating": 2.83,
                "sold_count": 6106,
                "review_count": 5944,
                "created_at": "2020-08-21 03:54:38",
                "updated_at": "2020-08-16 20:31:23",
                "product_category": {
                    "id": 7,
                    "name": "套装B",
                    "slug": "dolorum-at",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?84473",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?50438",
                    "title": "quidem rerum esse",
                    "title_en": "cupiditate ut atque",
                    "sub_title": "autem delectus iste",
                    "describe": "Totam dolores et voluptates voluptatum quia. Facere aperiam consequatur est aliquid sed eum. Est officiis voluptatem nostrum iure.",
                    "describe_en": "Et est aut quaerat perspiciatis numquam dolores. Velit aspernatur minima fuga at est. Repudiandae temporibus et itaque. Praesentium placeat pariatur qui exercitationem adipisci enim.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?90928",
                    "parent_id": 23,
                    "level": 1,
                    "created_at": "2020-09-15 15:29:58",
                    "updated_at": "2020-09-14 04:06:28"
                }
            },
            {
                "id": 12,
                "product_category_id": 3,
                "product_name": "黑钻焕肤水",
                "product_name_en": "eligendi commodi totam",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?53008",
                "slug": "aut-voluptates",
                "short_description": "Nihil vero repellat est quibusdam qui error.",
                "short_description_en": "In earum dolor minima voluptas in aut ullam ab. Placeat esse veniam incidunt ducimus dolorem ut nesciunt. Commodi nisi et aut possimus odit. Sunt eos dicta quia at eius facere maiores distinctio.",
                "price": "6566.00",
                "sale_price": "1.00",
                "stock": 786,
                "spec": null,
                "seo_title": "ut sapiente error",
                "seo_keyword": "facilis",
                "seo_description": "Esse aut dicta et saepe.",
                "benefit": "Qui id recusandae aperiam eveniet quas velit. Et dolore nam eos enim minus. Non ex autem ipsa alias.",
                "benefit_en": "Est numquam et sapiente. Facilis similique id possimus recusandae consectetur dolor. Voluptas aliquid voluptas accusamus hic fugit non qui magni.",
                "tech_description": "Assumenda reprehenderit autem quibusdam. Voluptas consequatur labore aut perferendis aliquam explicabo. Ea vel id aperiam perspiciatis ut ipsum hic. Maiores rerum nihil quia sit et non facilis.",
                "tech_description_en": "Doloribus qui deserunt omnis nulla expedita suscipit qui. Id nobis illo quae omnis optio. Ullam accusamus velit modi aut esse est adipisci.",
                "description": "Laudantium aut laboriosam a maxime. Veritatis iure a ea aliquid vel possimus. Molestias nobis esse neque eos. Pariatur quisquam recusandae qui enim accusamus necessitatibus.",
                "description_en": "Exercitationem nisi rerum quaerat delectus facere. Rerum quidem nisi repellendus quis explicabo dolorem. Voluptatem qui quisquam voluptates.",
                "usage": "Aut a reprehenderit in optio maiores qui. Est error atque culpa. Rerum commodi a nemo est asperiores ut. Similique dolor numquam deserunt.",
                "usage_en": "Provident in aliquam optio voluptates. Dolor maiores deserunt repudiandae molestiae et accusamus omnis. Facere aut est modi repudiandae magnam aut harum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?31643",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?42870",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?17647",
                "product_video": null,
                "status": 2,
                "rating": 1.77,
                "sold_count": 1904,
                "review_count": 1418,
                "created_at": "2020-09-06 06:06:45",
                "updated_at": "2020-09-08 21:54:25",
                "product_category": {
                    "id": 3,
                    "name": "面膜",
                    "slug": "numquam-inventore",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?82741",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?60013",
                    "title": "labore repellendus vel",
                    "title_en": "velit ipsa maiores",
                    "sub_title": "quis doloribus deleniti",
                    "describe": "Optio eos ut est corporis voluptatem. Non et minima molestiae. Et recusandae distinctio delectus inventore.",
                    "describe_en": "Quisquam explicabo quod eligendi cum non ab. Et expedita ipsa harum odio provident totam distinctio. Ut provident dolorem illum atque dolore. Amet nemo et repellendus magnam quo incidunt dicta.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?93949",
                    "parent_id": 20,
                    "level": 1,
                    "created_at": "2020-09-13 16:20:42",
                    "updated_at": "2020-08-26 17:14:59"
                }
            },
            {
                "id": 13,
                "product_category_id": 4,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "enim expedita sapiente",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?57349",
                "slug": "necessitatibus-vel",
                "short_description": "Ducimus aut mollitia reprehenderit.",
                "short_description_en": "Accusantium quia in vel non aspernatur aut. Magni ut quam iste quia voluptatum reiciendis error et. Id est officiis est ut nostrum nemo temporibus exercitationem. Libero sed ducimus eos labore aut quaerat.",
                "price": "3887.00",
                "sale_price": "1.00",
                "stock": 487,
                "spec": null,
                "seo_title": "aliquam est aperiam",
                "seo_keyword": "numquam",
                "seo_description": "Aut recusandae quod voluptatem.",
                "benefit": "Sit ut unde necessitatibus debitis dolor. Aut est eaque quam repellendus. Beatae unde ea voluptatum laboriosam.",
                "benefit_en": "Minus facere libero recusandae modi autem eveniet. Atque facere doloribus id. Sed facilis necessitatibus at optio voluptas est.",
                "tech_description": "Reprehenderit accusamus quasi quia quas ratione qui. Quae ducimus est saepe natus nostrum libero aliquid eaque. Alias labore rerum qui adipisci.",
                "tech_description_en": "Voluptate optio possimus blanditiis dolor eius ut. Aut aspernatur amet corrupti est natus. Quibusdam quisquam sit officia animi.",
                "description": "Est voluptate odio quia mollitia ab magnam quia. Eaque distinctio culpa enim autem dolorem. Odio maiores in rem culpa aliquam. Autem laudantium error eaque dolores aliquid velit earum.",
                "description_en": "Repudiandae beatae dolores aut perspiciatis. Voluptatum alias architecto a quis optio.",
                "usage": "Dolor aut placeat suscipit velit quae. Nulla itaque sed quis debitis deserunt harum. Omnis ut ipsum a sunt aliquid qui ea.",
                "usage_en": "Nemo recusandae eligendi nostrum nostrum sed enim. Ipsa cupiditate sint rerum repellat aut. Non perspiciatis architecto eaque molestias explicabo dolorem sint. Vitae optio optio ratione nihil.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?22903",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?46393",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?72332",
                "product_video": null,
                "status": 3,
                "rating": 0.34,
                "sold_count": 4107,
                "review_count": 6377,
                "created_at": "2020-09-14 03:50:46",
                "updated_at": "2020-09-05 02:18:11",
                "product_category": {
                    "id": 4,
                    "name": "套装B",
                    "slug": "id-animi",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?34882",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?17013",
                    "title": "dicta ut quos",
                    "title_en": "aut molestiae non",
                    "sub_title": "et accusantium sequi",
                    "describe": "Aut ratione ipsam deleniti voluptas id necessitatibus. Beatae alias aperiam necessitatibus ut iure. Sapiente aut temporibus ad facilis. Officia dolor sed aut incidunt ea voluptatem quidem.",
                    "describe_en": "Quis et sed facilis quasi. Voluptatem dolores repellendus quae quis non. Occaecati quod voluptatem aut voluptas alias voluptate reprehenderit itaque.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?32081",
                    "parent_id": 7,
                    "level": 1,
                    "created_at": "2020-08-25 14:03:44",
                    "updated_at": "2020-09-09 01:15:15"
                }
            },
            {
                "id": 14,
                "product_category_id": 19,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "non recusandae pariatur",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?41836",
                "slug": "recusandae-accusamus",
                "short_description": "Id voluptas pariatur temporibus molestias.",
                "short_description_en": "Libero qui ullam magnam cupiditate ut. Maxime ullam qui quasi. Dolorem fuga fuga blanditiis dolorem voluptatem aliquid dolorem.",
                "price": "2664.00",
                "sale_price": "1.00",
                "stock": 243,
                "spec": null,
                "seo_title": "nihil corrupti impedit",
                "seo_keyword": "quas",
                "seo_description": "Aut eius quas suscipit blanditiis repellendus laudantium.",
                "benefit": "Omnis nostrum eveniet voluptatem aut voluptatem. Nihil dolor nemo sint sit pariatur atque. Qui eos dolore quos. In est maiores dolor.",
                "benefit_en": "Nobis ut velit sit nobis ut et. Enim qui omnis aliquam eum quisquam. Consectetur quia deserunt pariatur et et. Placeat vero placeat laudantium qui.",
                "tech_description": "Ea harum aspernatur quod atque. Provident velit possimus inventore laborum sit pariatur aut eos. Soluta sint quam voluptatibus cumque mollitia consectetur harum.",
                "tech_description_en": "Laboriosam vitae quo tenetur. Quis minus voluptatem nihil aut cupiditate eos ipsam. Ex enim est reiciendis sit molestiae. Aut dolore corrupti exercitationem.",
                "description": "Repudiandae impedit voluptates vitae sunt iusto sunt. Veritatis consequatur dolorum et ullam. Sit qui cupiditate ratione unde.",
                "description_en": "Minima minima similique cum incidunt cumque totam. Quidem earum nihil illum molestiae quo quasi architecto. Eum suscipit et et sapiente consequatur dolorem qui ut.",
                "usage": "Laudantium ad quo quasi incidunt. Ullam tempore voluptatem in est explicabo vel. Cum necessitatibus vel voluptas est ex ut.",
                "usage_en": "Nulla beatae ut in fuga. Et ratione aut modi. Omnis aut in similique itaque quasi adipisci.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?46441",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?52124",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?22143",
                "product_video": null,
                "status": 2,
                "rating": 9.51,
                "sold_count": 8318,
                "review_count": 9476,
                "created_at": "2020-08-22 14:17:58",
                "updated_at": "2020-08-17 21:46:57",
                "product_category": {
                    "id": 19,
                    "name": "香水",
                    "slug": "delectus-ipsa",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?76144",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?56673",
                    "title": "ab qui natus",
                    "title_en": "repellendus quo illum",
                    "sub_title": "minima illum delectus",
                    "describe": "Animi adipisci rerum expedita. Facere qui est illum pariatur eos modi. Et ut quae qui sequi quam odit.",
                    "describe_en": "Sequi vitae rerum aut placeat est. Quo amet rem odit. Sint quo suscipit sint cum nihil illo possimus facilis.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?42284",
                    "parent_id": 0,
                    "level": 1,
                    "created_at": "2020-08-20 03:43:45",
                    "updated_at": "2020-09-10 22:06:04"
                }
            },
            {
                "id": 15,
                "product_category_id": 5,
                "product_name": "黑钻肌光精华",
                "product_name_en": "accusantium facere in",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?33830",
                "slug": "beatae-illo",
                "short_description": "Minus dolore doloribus in.",
                "short_description_en": "Ut aut illum itaque aut vero. Libero voluptas ex quas autem. Omnis nemo et sequi facilis dignissimos molestias neque exercitationem. Ipsam voluptatem corrupti quas fugiat.",
                "price": "7146.00",
                "sale_price": "1.00",
                "stock": 919,
                "spec": null,
                "seo_title": "consectetur voluptatibus blanditiis",
                "seo_keyword": "iste",
                "seo_description": "Provident in fugiat repellat cupiditate quo eos sed.",
                "benefit": "Distinctio impedit sint libero consequatur ea. Ullam aut pariatur accusantium at omnis sit qui. Omnis soluta voluptas at illo in. In delectus molestiae quas aliquid error est voluptatem.",
                "benefit_en": "Odit porro sed id accusantium qui adipisci quibusdam et. Pariatur odio dolorum veritatis consequuntur labore voluptatibus quia. Assumenda quos sed perspiciatis ipsum quam sunt.",
                "tech_description": "Temporibus qui quia soluta. Reprehenderit similique veniam libero odit. Fugit aut voluptas reprehenderit quia nulla amet. Recusandae possimus at aut aut pariatur magni perferendis.",
                "tech_description_en": "Corrupti mollitia expedita enim quis voluptas. Autem blanditiis consequatur sit modi dolorem sed repellendus. Sit voluptas iste iste explicabo tempore dolores eligendi. Explicabo consectetur iure sunt quasi ea sapiente nisi.",
                "description": "Cumque voluptatem sit distinctio culpa dolore sit. Laboriosam blanditiis necessitatibus ea aliquam dolore. Illum nemo perspiciatis aut aut.",
                "description_en": "Eos assumenda est adipisci ut placeat recusandae molestiae. Totam consequatur expedita commodi saepe officiis vel nisi error. Quam molestias quibusdam molestiae eos quo error.",
                "usage": "Debitis laborum minus consectetur et quas autem velit. Consequatur vero qui quia rerum nemo et. Ut dolorum ut enim.",
                "usage_en": "Dolore doloribus porro quos sint est. Beatae quia provident est saepe esse doloribus. Odio incidunt sit laboriosam consequatur veritatis tenetur dolores.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?61319",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?24763",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?51415",
                "product_video": null,
                "status": 2,
                "rating": 5.29,
                "sold_count": 1656,
                "review_count": 8447,
                "created_at": "2020-08-25 20:45:18",
                "updated_at": "2020-08-28 17:16:10",
                "product_category": {
                    "id": 5,
                    "name": "套装A",
                    "slug": "illo-asperiores",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?30173",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?60772",
                    "title": "animi autem vel",
                    "title_en": "nemo necessitatibus et",
                    "sub_title": "qui ipsam eligendi",
                    "describe": "Asperiores quo nemo error. Autem laudantium quasi vel unde quos. Reprehenderit molestiae in placeat tenetur illo esse et laborum.",
                    "describe_en": "Cupiditate facere voluptas placeat quaerat. Autem quae excepturi facilis harum.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?75622",
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-08-27 04:38:56",
                    "updated_at": "2020-09-06 12:21:17"
                }
            },
            {
                "id": 16,
                "product_category_id": 1,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "ut dolor quo",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?63956",
                "slug": "animi-nisi",
                "short_description": "Adipisci quia omnis et alias praesentium.",
                "short_description_en": "Quia fugit atque minus fugit neque sint. Autem provident blanditiis voluptatem sit. Maxime animi amet laborum qui pariatur. Expedita rem quis voluptatem aliquam.",
                "price": "4508.00",
                "sale_price": "1.00",
                "stock": 880,
                "spec": null,
                "seo_title": "quibusdam tenetur qui",
                "seo_keyword": "eius",
                "seo_description": "Iste excepturi quia non sunt provident.",
                "benefit": "Non dolorem vel maiores esse consequuntur odit quam. Non corporis dolores ipsam cum velit provident. Voluptas qui iure dolores quam repellat. Dolor eum ratione doloremque ut quia ea perspiciatis.",
                "benefit_en": "Eveniet cupiditate velit quae ea pariatur sed ea. Autem maiores rerum in tempora debitis omnis voluptatem rerum. Atque animi consequatur perferendis voluptatem.",
                "tech_description": "Aliquid cupiditate perferendis aliquam tenetur placeat dolorem doloribus. Sed quia occaecati ut impedit et. Vitae rerum architecto et qui. Facilis saepe voluptas ea quasi quisquam soluta.",
                "tech_description_en": "Quia amet quod nesciunt nihil. Facilis repellat et et recusandae ut et fugiat sapiente.",
                "description": "Voluptas a ut quis voluptatibus quod quam. In qui quidem tempore ut. Velit consequatur tempore molestiae recusandae aut.",
                "description_en": "Ea sunt et repellat maxime est dolores hic aliquam. Excepturi ut beatae nobis atque et cumque aut. Est vitae laboriosam tempore recusandae odit est.",
                "usage": "Omnis molestias atque ipsum consequatur. Itaque tempore asperiores corporis consequuntur. Eligendi blanditiis non placeat eos quaerat. Qui voluptas perferendis aut et quo consequatur assumenda.",
                "usage_en": "Sit accusantium laudantium magni reiciendis illo mollitia vero iste. Aut asperiores et id eos. Est accusantium minima cupiditate porro vel adipisci odit quasi.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?55594",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?48586",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?17805",
                "product_video": null,
                "status": 1,
                "rating": 6.18,
                "sold_count": 3302,
                "review_count": 2459,
                "created_at": "2020-08-29 09:49:34",
                "updated_at": "2020-08-28 00:24:02",
                "product_category": {
                    "id": 1,
                    "name": "套装C",
                    "slug": "harum-tempore",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?14636",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?77913",
                    "title": "provident autem illum",
                    "title_en": "doloribus magnam consectetur",
                    "sub_title": "corrupti non sint",
                    "describe": "Beatae odio repellendus culpa. Molestias voluptatum mollitia eum aut qui vitae dolor recusandae. Voluptatem enim illum accusamus officia.",
                    "describe_en": "Quia optio libero reiciendis ratione recusandae. Omnis accusantium cupiditate magni autem quis facilis. Recusandae ducimus officiis et sit in ipsum.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?69802",
                    "parent_id": 14,
                    "level": 1,
                    "created_at": "2020-09-01 09:56:50",
                    "updated_at": "2020-09-12 16:27:04"
                }
            },
            {
                "id": 17,
                "product_category_id": 4,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "repellendus laborum natus",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?95835",
                "slug": "qui-voluptatem",
                "short_description": "Molestiae occaecati accusantium labore commodi voluptatum deserunt atque.",
                "short_description_en": "Veritatis et amet harum animi ducimus. Voluptas eum nisi quis repudiandae. Eaque et consequuntur laboriosam quae consequatur enim. Sint sapiente velit molestiae quaerat quo voluptatem officiis officiis.",
                "price": "8747.00",
                "sale_price": "1.00",
                "stock": 31,
                "spec": null,
                "seo_title": "ut deserunt omnis",
                "seo_keyword": "odio",
                "seo_description": "Assumenda harum velit ducimus distinctio quo.",
                "benefit": "Voluptates reprehenderit totam in et voluptatem. Cupiditate numquam ea quam corrupti assumenda autem. Omnis quibusdam omnis praesentium reiciendis perspiciatis rerum voluptatem.",
                "benefit_en": "Et qui at et dolor aut. Fugit fugit reiciendis rem enim nobis beatae dolorum voluptas.",
                "tech_description": "Molestiae iure sint repellendus dicta. Nihil iusto eum sunt provident enim nobis similique. Saepe facere omnis repudiandae. Animi sint sed ducimus sunt ut magnam sed enim.",
                "tech_description_en": "At et id facilis dolorem qui officia fuga. Est aut doloremque cum officiis velit. Sed voluptatem consequatur rem laudantium omnis.",
                "description": "Et nihil earum eum non omnis. Necessitatibus nam voluptatem assumenda saepe maxime cumque aliquid. Amet totam nobis sint vel.",
                "description_en": "Dolorem fugiat at incidunt. Labore enim qui aspernatur quia numquam. At consequatur voluptas sunt possimus. Fuga velit veniam non vel ducimus rerum.",
                "usage": "Omnis in magni sunt in cupiditate voluptas quos soluta. Laudantium porro ducimus vero similique autem explicabo vel quo. Eius aut blanditiis omnis corporis voluptates ipsam natus consectetur. Saepe earum qui numquam cum in.",
                "usage_en": "Odit iusto molestiae et in asperiores id et. Odio velit quia quibusdam repellendus. Adipisci est autem similique et nam.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?78358",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?79533",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?25375",
                "product_video": null,
                "status": 3,
                "rating": 7.15,
                "sold_count": 5035,
                "review_count": 3964,
                "created_at": "2020-08-26 16:39:12",
                "updated_at": "2020-08-30 13:41:23",
                "product_category": {
                    "id": 4,
                    "name": "套装B",
                    "slug": "id-animi",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?34882",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?17013",
                    "title": "dicta ut quos",
                    "title_en": "aut molestiae non",
                    "sub_title": "et accusantium sequi",
                    "describe": "Aut ratione ipsam deleniti voluptas id necessitatibus. Beatae alias aperiam necessitatibus ut iure. Sapiente aut temporibus ad facilis. Officia dolor sed aut incidunt ea voluptatem quidem.",
                    "describe_en": "Quis et sed facilis quasi. Voluptatem dolores repellendus quae quis non. Occaecati quod voluptatem aut voluptas alias voluptate reprehenderit itaque.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?32081",
                    "parent_id": 7,
                    "level": 1,
                    "created_at": "2020-08-25 14:03:44",
                    "updated_at": "2020-09-09 01:15:15"
                }
            },
            {
                "id": 18,
                "product_category_id": 15,
                "product_name": "黑钻焕肤水",
                "product_name_en": "sed fuga voluptates",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?66234",
                "slug": "sit-aut",
                "short_description": "Sed dolor ut sit.",
                "short_description_en": "Ipsum reiciendis ut molestias repudiandae. Incidunt aut et modi id architecto cumque non. Illum et perferendis sit eveniet non et. Placeat ducimus laudantium ut ad. Doloremque aut accusamus consequuntur harum nam alias laboriosam quidem.",
                "price": "1250.00",
                "sale_price": "1.00",
                "stock": 696,
                "spec": null,
                "seo_title": "perferendis ullam aliquid",
                "seo_keyword": "quos",
                "seo_description": "Deleniti beatae voluptatem expedita nemo.",
                "benefit": "Repudiandae placeat cumque id nesciunt commodi qui in. Qui similique omnis repudiandae aliquam asperiores voluptas nihil. Molestiae laudantium ut ullam optio quibusdam eaque voluptatibus. Et porro dolores inventore tenetur.",
                "benefit_en": "Magni quasi non tempore impedit itaque soluta ea. In consequuntur impedit saepe repudiandae doloremque excepturi. Sunt labore culpa non voluptatem rerum dolorum.",
                "tech_description": "Rerum inventore iure repellat non qui tenetur enim. Dignissimos quia nulla odit voluptatem aut corrupti dignissimos. Dolor architecto quidem vero magni recusandae nesciunt. Voluptatum mollitia sit corporis voluptatem. Nisi consequatur quos voluptates ad voluptas.",
                "tech_description_en": "Mollitia atque sit est tempore expedita fugiat omnis. Est possimus quasi et expedita eum quam. Sit alias et magnam. In et provident inventore sunt.",
                "description": "Qui est magnam dolorem et. Laboriosam aliquid enim porro possimus placeat error. Sed animi totam reprehenderit error enim maxime voluptas.",
                "description_en": "Aut cumque recusandae vel et in. Qui ex minima corrupti earum maiores doloribus laborum quasi. Et in ipsam et error et magnam ut.",
                "usage": "Minus at repudiandae ipsa illum rerum in autem. Harum qui ullam laborum quia suscipit reprehenderit. Sed delectus dolores ut qui.",
                "usage_en": "A harum sint et quo et similique illo. Ad minus voluptas sunt sit.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?21400",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?66524",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?99136",
                "product_video": null,
                "status": 1,
                "rating": 3.12,
                "sold_count": 7404,
                "review_count": 1657,
                "created_at": "2020-08-21 16:32:52",
                "updated_at": "2020-09-14 03:14:41",
                "product_category": {
                    "id": 15,
                    "name": "彩妆盘",
                    "slug": "suscipit-doloribus",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?74598",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?82039",
                    "title": "necessitatibus ullam voluptatem",
                    "title_en": "id ipsa consequatur",
                    "sub_title": "eum autem et",
                    "describe": "Odit aut et laboriosam dolores. Eveniet ipsam voluptatibus et pariatur repellendus non sed autem.",
                    "describe_en": "Fuga voluptatum at quae mollitia aut. Veniam quasi est ipsa ut dicta eius. Aspernatur quasi voluptatem iure. Odit voluptatem impedit repudiandae illo illo optio.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?31840",
                    "parent_id": 15,
                    "level": 1,
                    "created_at": "2020-09-10 16:27:31",
                    "updated_at": "2020-08-23 08:08:47"
                }
            },
            {
                "id": 19,
                "product_category_id": 18,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "et corporis repellendus",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?42607",
                "slug": "consectetur-aut",
                "short_description": "Sint animi accusamus quod ut nihil.",
                "short_description_en": "Minima veniam saepe dolorem. Eum assumenda molestiae vel quod eos exercitationem error. Nisi itaque laudantium vel optio aliquid.",
                "price": "9011.00",
                "sale_price": "1.00",
                "stock": 284,
                "spec": null,
                "seo_title": "tenetur sunt eligendi",
                "seo_keyword": "ea",
                "seo_description": "Eum dolores et mollitia.",
                "benefit": "Et dicta dolores beatae quasi eum deleniti. Iure consequatur quasi et delectus sit eum. Cupiditate quo enim et quos blanditiis. Unde tempora ut quis quibusdam facilis sequi.",
                "benefit_en": "Aut iusto consequatur cumque repellendus. Iste magnam non in quas ut corrupti repellendus. Ex rerum consequatur accusamus minima dolorem quia nostrum autem. Dolorum nemo omnis sed aut dolores voluptatem blanditiis.",
                "tech_description": "Architecto expedita quisquam ut libero exercitationem facilis. Necessitatibus voluptas praesentium voluptate. Totam sed blanditiis nihil nihil voluptatem. Hic est ratione quis omnis nemo sunt.",
                "tech_description_en": "Minima ut quibusdam dolorum iste repellendus est. Voluptate aliquid voluptas est fugit quis veritatis ducimus. Officia voluptates aut sit et debitis provident soluta. Explicabo dolores nihil labore.",
                "description": "Autem deserunt laborum fuga sed assumenda culpa voluptatum. Quo quas et exercitationem. Veritatis voluptatem dicta dolorum voluptates occaecati amet ut. Fugiat consequuntur velit voluptas et sint sequi officiis.",
                "description_en": "Architecto fugiat autem laudantium porro beatae dolorum. Ut ut et iste placeat odio. Sint consequuntur et quos voluptatum molestiae accusamus accusamus. Vitae aspernatur totam labore tempore.",
                "usage": "Dignissimos placeat facilis asperiores beatae qui autem. Mollitia voluptatem saepe provident tenetur nihil nulla. Quae officiis consequatur doloremque. Eveniet repellendus quasi ut mollitia.",
                "usage_en": "Sed dolore et in enim eos. Sed autem sunt nulla et excepturi omnis labore deserunt. A nostrum et porro cupiditate numquam quo.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?12880",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?14718",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?78107",
                "product_video": null,
                "status": 1,
                "rating": 4.42,
                "sold_count": 3924,
                "review_count": 8229,
                "created_at": "2020-09-15 10:40:22",
                "updated_at": "2020-09-05 08:05:53",
                "product_category": {
                    "id": 18,
                    "name": "BB霜",
                    "slug": "et-corrupti",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?18862",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?29858",
                    "title": "fuga ut consequatur",
                    "title_en": "sequi provident corrupti",
                    "sub_title": "vel odit sit",
                    "describe": "Quidem fugiat est sint voluptatem facilis. Voluptatem nesciunt maiores expedita dignissimos nisi dicta. Vel corporis non aut atque suscipit incidunt necessitatibus sint.",
                    "describe_en": "Qui et voluptate quia quidem. Nisi esse tempora nihil fuga officiis. Laudantium voluptatem voluptatem enim. Est ea recusandae temporibus ea doloribus pariatur.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?15543",
                    "parent_id": 29,
                    "level": 1,
                    "created_at": "2020-08-26 03:18:25",
                    "updated_at": "2020-09-04 22:19:10"
                }
            },
            {
                "id": 20,
                "product_category_id": 4,
                "product_name": "钻石焕活面膜",
                "product_name_en": "aut ut et",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?55833",
                "slug": "reiciendis-esse",
                "short_description": "Et non dolorem voluptatum eos adipisci.",
                "short_description_en": "Praesentium non rerum natus sequi aliquid ut. Nostrum quia eos et ut perferendis maxime. Incidunt aspernatur itaque molestiae ipsam harum.",
                "price": "6834.00",
                "sale_price": "1.00",
                "stock": 762,
                "spec": null,
                "seo_title": "aut molestiae nihil",
                "seo_keyword": "enim",
                "seo_description": "Illum temporibus labore enim est.",
                "benefit": "Quis non qui porro totam eum. Voluptatum dolores enim sequi id pariatur. Rerum temporibus voluptatem nemo laboriosam impedit pariatur aut enim. Eum doloremque officiis omnis unde laborum.",
                "benefit_en": "Impedit est et cum consequatur et odit minus. Sit autem eius est. Labore animi necessitatibus sed officia voluptatem. Quisquam aut sit ex id qui at. Cupiditate id totam sit tempora praesentium unde quis.",
                "tech_description": "Expedita eligendi consequatur quod molestiae debitis voluptatibus veniam. Nemo delectus vero cumque reprehenderit in nemo quis.",
                "tech_description_en": "Praesentium corporis exercitationem qui tempore porro et. Et dignissimos voluptatum porro iusto impedit esse voluptatem. Repudiandae qui voluptatibus eos est nostrum. Rem consequatur aut id et provident. Pariatur quibusdam velit placeat eum neque ipsum.",
                "description": "Necessitatibus at modi et esse nam laboriosam et. Dicta facere molestiae repellendus ut quo. Quibusdam officiis sit molestiae necessitatibus laborum.",
                "description_en": "Ut occaecati repellendus odio possimus. Cum aperiam nobis odio optio sed est quo reiciendis. Molestias quidem minus qui omnis ullam officia velit.",
                "usage": "Impedit consequatur recusandae iure iste. Omnis non nam expedita.",
                "usage_en": "Soluta ratione saepe tempore ipsa est. Earum non delectus quia qui aut repudiandae. Aliquid corporis consequatur consectetur. Architecto necessitatibus cupiditate doloribus earum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?79981",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?94430",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?94619",
                "product_video": null,
                "status": 1,
                "rating": 4.22,
                "sold_count": 1649,
                "review_count": 1032,
                "created_at": "2020-08-24 19:19:30",
                "updated_at": "2020-09-11 17:16:41",
                "product_category": {
                    "id": 4,
                    "name": "套装B",
                    "slug": "id-animi",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?34882",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?17013",
                    "title": "dicta ut quos",
                    "title_en": "aut molestiae non",
                    "sub_title": "et accusantium sequi",
                    "describe": "Aut ratione ipsam deleniti voluptas id necessitatibus. Beatae alias aperiam necessitatibus ut iure. Sapiente aut temporibus ad facilis. Officia dolor sed aut incidunt ea voluptatem quidem.",
                    "describe_en": "Quis et sed facilis quasi. Voluptatem dolores repellendus quae quis non. Occaecati quod voluptatem aut voluptas alias voluptate reprehenderit itaque.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?32081",
                    "parent_id": 7,
                    "level": 1,
                    "created_at": "2020-08-25 14:03:44",
                    "updated_at": "2020-09-09 01:15:15"
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

<!-- START_5d9492d6d76e347e7f3200ecafeb7c88 -->
## Get product list with category slug
根据category slug获取对应类别下的产品列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/products/category/sunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/products/category/sunt"
);

let headers = {
    "Content-Type": "application/json",
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
    -G "http://store.wutang.com/api/products/status/eos?page=delectus&page_limit=impedit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/products/status/eos"
);

let params = {
    "page": "delectus",
    "page_limit": "impedit",
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
            "id": 34,
            "product_category_id": 3,
            "product_name": "钻石焕活面膜",
            "product_name_en": "sit numquam incidunt",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?28940",
            "slug": "deserunt-rem",
            "short_description": "Eveniet eos magni dolorem ratione.",
            "short_description_en": "Consequatur laboriosam sed nisi voluptate soluta voluptatem adipisci qui. Voluptatem voluptate optio tempore quam. Omnis facilis quia quia perspiciatis repellat.",
            "price": "8605.00",
            "sale_price": "1.00",
            "stock": 184,
            "spec": null,
            "seo_title": "sunt ea vel",
            "seo_keyword": "rerum",
            "seo_description": "Quis voluptates eius quis.",
            "benefit": "Voluptates et vel et voluptate non. Aut deleniti alias sit minus. Ut incidunt autem necessitatibus recusandae natus ab qui quisquam.",
            "benefit_en": "Modi quis voluptatibus cupiditate explicabo nam eos. Nihil modi sequi aut voluptatem sint.",
            "tech_description": "Libero saepe inventore officia reprehenderit aut. Vel et assumenda veritatis officiis nihil cum. Et tenetur et sit recusandae cum earum.",
            "tech_description_en": "Ad possimus veritatis et atque labore quae et. Omnis totam quia rerum nobis fugiat. Amet corrupti minima aspernatur occaecati ipsa. Qui illum omnis repellat omnis sint velit facere cupiditate. Est ut sed sapiente facilis quos.",
            "description": "Voluptatum error ex aut incidunt doloremque vitae sint nihil. Inventore aut eius laudantium et id officiis. Molestiae non ab sed quia consectetur nam.",
            "description_en": "Dolorem ab debitis consequatur eius at nisi eos. Porro modi doloribus sed qui sunt. Non optio voluptas temporibus id dignissimos.",
            "usage": "Cumque dolores sit et porro qui architecto et. Fugiat quis velit in fugit omnis numquam. Esse iste inventore alias voluptatem fuga.",
            "usage_en": "Id ipsam ut dolorem dolor vel quia. Rerum alias magnam vero illo hic. Possimus corrupti error aut sint. Voluptatem et dolorem non repudiandae quis.",
            "main_image": "https:\/\/lorempixel.com\/640\/480\/?47293",
            "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?68656",
            "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?65677",
            "product_video": null,
            "status": 1,
            "rating": 9.93,
            "sold_count": 4168,
            "review_count": 3564,
            "created_at": "2020-09-10 21:54:32",
            "updated_at": "2020-08-30 12:30:26"
        },
        {
            "id": 29,
            "product_category_id": 16,
            "product_name": "黑钻臻活眼部精华",
            "product_name_en": "recusandae nobis doloremque",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?38173",
            "slug": "iusto-molestias",
            "short_description": "Voluptate occaecati doloribus ut.",
            "short_description_en": "Mollitia voluptate maxime laborum itaque. Excepturi dolorem illum eos et. Vel officiis quod quidem sapiente est ut.",
            "price": "1994.00",
            "sale_price": "1.00",
            "stock": 506,
            "spec": null,
            "seo_title": "quibusdam nulla ipsum",
            "seo_keyword": "sint",
            "seo_description": "Repellat ipsum ut dolorem voluptatem odit consequuntur.",
            "benefit": "Ad qui tempore aliquam qui et velit sit qui. Asperiores dolor possimus autem reiciendis non ad.",
            "benefit_en": "Sint deserunt magnam consequuntur ut corrupti. Dolore quae dolorum voluptatibus omnis atque. Placeat a ipsa doloremque nostrum eveniet. Omnis beatae et quia quod quia. Architecto excepturi quia ea illum.",
            "tech_description": "Sit optio quasi velit provident saepe iste. Quae harum nesciunt voluptatem accusamus. Deleniti dolore est quo delectus. Voluptates voluptatum amet ea minus sed voluptates et quis.",
            "tech_description_en": "Et ipsa vitae voluptate praesentium et eos ab. Qui voluptas odio exercitationem perferendis sit vitae fuga dolorem. Dolorem ea sequi est.",
            "description": "Doloribus cumque explicabo minus veniam. Quod quia numquam est aspernatur exercitationem sunt.",
            "description_en": "Suscipit aut repudiandae ipsum id aut. Ut quidem velit animi sint. Quo reiciendis qui et minus est eos.",
            "usage": "Qui esse laboriosam sed magni dolores commodi et. Ut facilis aspernatur consectetur consequatur sint. Corporis labore explicabo quisquam et voluptatibus eligendi voluptas.",
            "usage_en": "Sit ea ratione laboriosam illo. Saepe laborum repellendus hic ullam. Velit in tempore laborum in consequatur. Nihil autem velit explicabo blanditiis et et.",
            "main_image": "https:\/\/lorempixel.com\/640\/480\/?43539",
            "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?36356",
            "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?53149",
            "product_video": null,
            "status": 1,
            "rating": 1.75,
            "sold_count": 7122,
            "review_count": 5687,
            "created_at": "2020-08-23 08:47:44",
            "updated_at": "2020-09-13 09:37:22"
        },
        {
            "id": 18,
            "product_category_id": 15,
            "product_name": "黑钻焕肤水",
            "product_name_en": "sed fuga voluptates",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?66234",
            "slug": "sit-aut",
            "short_description": "Sed dolor ut sit.",
            "short_description_en": "Ipsum reiciendis ut molestias repudiandae. Incidunt aut et modi id architecto cumque non. Illum et perferendis sit eveniet non et. Placeat ducimus laudantium ut ad. Doloremque aut accusamus consequuntur harum nam alias laboriosam quidem.",
            "price": "1250.00",
            "sale_price": "1.00",
            "stock": 696,
            "spec": null,
            "seo_title": "perferendis ullam aliquid",
            "seo_keyword": "quos",
            "seo_description": "Deleniti beatae voluptatem expedita nemo.",
            "benefit": "Repudiandae placeat cumque id nesciunt commodi qui in. Qui similique omnis repudiandae aliquam asperiores voluptas nihil. Molestiae laudantium ut ullam optio quibusdam eaque voluptatibus. Et porro dolores inventore tenetur.",
            "benefit_en": "Magni quasi non tempore impedit itaque soluta ea. In consequuntur impedit saepe repudiandae doloremque excepturi. Sunt labore culpa non voluptatem rerum dolorum.",
            "tech_description": "Rerum inventore iure repellat non qui tenetur enim. Dignissimos quia nulla odit voluptatem aut corrupti dignissimos. Dolor architecto quidem vero magni recusandae nesciunt. Voluptatum mollitia sit corporis voluptatem. Nisi consequatur quos voluptates ad voluptas.",
            "tech_description_en": "Mollitia atque sit est tempore expedita fugiat omnis. Est possimus quasi et expedita eum quam. Sit alias et magnam. In et provident inventore sunt.",
            "description": "Qui est magnam dolorem et. Laboriosam aliquid enim porro possimus placeat error. Sed animi totam reprehenderit error enim maxime voluptas.",
            "description_en": "Aut cumque recusandae vel et in. Qui ex minima corrupti earum maiores doloribus laborum quasi. Et in ipsam et error et magnam ut.",
            "usage": "Minus at repudiandae ipsa illum rerum in autem. Harum qui ullam laborum quia suscipit reprehenderit. Sed delectus dolores ut qui.",
            "usage_en": "A harum sint et quo et similique illo. Ad minus voluptas sunt sit.",
            "main_image": "https:\/\/lorempixel.com\/640\/480\/?21400",
            "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?66524",
            "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?99136",
            "product_video": null,
            "status": 1,
            "rating": 3.12,
            "sold_count": 7404,
            "review_count": 1657,
            "created_at": "2020-08-21 16:32:52",
            "updated_at": "2020-09-14 03:14:41"
        },
        {
            "id": 19,
            "product_category_id": 18,
            "product_name": "黑钻洁净滋养面膜",
            "product_name_en": "et corporis repellendus",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?42607",
            "slug": "consectetur-aut",
            "short_description": "Sint animi accusamus quod ut nihil.",
            "short_description_en": "Minima veniam saepe dolorem. Eum assumenda molestiae vel quod eos exercitationem error. Nisi itaque laudantium vel optio aliquid.",
            "price": "9011.00",
            "sale_price": "1.00",
            "stock": 284,
            "spec": null,
            "seo_title": "tenetur sunt eligendi",
            "seo_keyword": "ea",
            "seo_description": "Eum dolores et mollitia.",
            "benefit": "Et dicta dolores beatae quasi eum deleniti. Iure consequatur quasi et delectus sit eum. Cupiditate quo enim et quos blanditiis. Unde tempora ut quis quibusdam facilis sequi.",
            "benefit_en": "Aut iusto consequatur cumque repellendus. Iste magnam non in quas ut corrupti repellendus. Ex rerum consequatur accusamus minima dolorem quia nostrum autem. Dolorum nemo omnis sed aut dolores voluptatem blanditiis.",
            "tech_description": "Architecto expedita quisquam ut libero exercitationem facilis. Necessitatibus voluptas praesentium voluptate. Totam sed blanditiis nihil nihil voluptatem. Hic est ratione quis omnis nemo sunt.",
            "tech_description_en": "Minima ut quibusdam dolorum iste repellendus est. Voluptate aliquid voluptas est fugit quis veritatis ducimus. Officia voluptates aut sit et debitis provident soluta. Explicabo dolores nihil labore.",
            "description": "Autem deserunt laborum fuga sed assumenda culpa voluptatum. Quo quas et exercitationem. Veritatis voluptatem dicta dolorum voluptates occaecati amet ut. Fugiat consequuntur velit voluptas et sint sequi officiis.",
            "description_en": "Architecto fugiat autem laudantium porro beatae dolorum. Ut ut et iste placeat odio. Sint consequuntur et quos voluptatum molestiae accusamus accusamus. Vitae aspernatur totam labore tempore.",
            "usage": "Dignissimos placeat facilis asperiores beatae qui autem. Mollitia voluptatem saepe provident tenetur nihil nulla. Quae officiis consequatur doloremque. Eveniet repellendus quasi ut mollitia.",
            "usage_en": "Sed dolore et in enim eos. Sed autem sunt nulla et excepturi omnis labore deserunt. A nostrum et porro cupiditate numquam quo.",
            "main_image": "https:\/\/lorempixel.com\/640\/480\/?12880",
            "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?14718",
            "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?78107",
            "product_video": null,
            "status": 1,
            "rating": 4.42,
            "sold_count": 3924,
            "review_count": 8229,
            "created_at": "2020-09-15 10:40:22",
            "updated_at": "2020-09-05 08:05:53"
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
            "id": 3,
            "name": "面膜",
            "slug": "numquam-inventore",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?82741",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?60013",
            "title": "labore repellendus vel",
            "title_en": "velit ipsa maiores",
            "sub_title": "quis doloribus deleniti",
            "describe": "Optio eos ut est corporis voluptatem. Non et minima molestiae. Et recusandae distinctio delectus inventore.",
            "describe_en": "Quisquam explicabo quod eligendi cum non ab. Et expedita ipsa harum odio provident totam distinctio. Ut provident dolorem illum atque dolore. Amet nemo et repellendus magnam quo incidunt dicta.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?93949",
            "parent_id": 20,
            "level": 1,
            "created_at": "2020-09-13 16:20:42",
            "updated_at": "2020-08-26 17:14:59",
            "children": [
                {
                    "id": 5,
                    "name": "套装A",
                    "slug": "illo-asperiores",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?30173",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?60772",
                    "title": "animi autem vel",
                    "title_en": "nemo necessitatibus et",
                    "sub_title": "qui ipsam eligendi",
                    "describe": "Asperiores quo nemo error. Autem laudantium quasi vel unde quos. Reprehenderit molestiae in placeat tenetur illo esse et laborum.",
                    "describe_en": "Cupiditate facere voluptas placeat quaerat. Autem quae excepturi facilis harum.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?75622",
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-08-27 04:38:56",
                    "updated_at": "2020-09-06 12:21:17"
                },
                {
                    "id": 28,
                    "name": "BB霜",
                    "slug": "repellendus-doloremque",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?23553",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?75737",
                    "title": "necessitatibus aut corporis",
                    "title_en": "delectus aut earum",
                    "sub_title": "sed ut dolorem",
                    "describe": "Iure et corrupti veritatis quisquam modi ullam. Voluptas nemo et impedit totam. Ut perferendis amet est culpa vel autem. Vitae est ipsa nihil temporibus et sit. Debitis sunt voluptatem et corrupti.",
                    "describe_en": "Occaecati dolor et impedit consequatur sint ducimus rem. Dolores unde quam qui autem rerum. Voluptatem repudiandae quisquam aut tenetur ut ullam libero. Ut amet at ad qui enim voluptas sint.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?12180",
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-08-21 18:45:48",
                    "updated_at": "2020-08-31 21:23:22"
                }
            ]
        },
        {
            "id": 4,
            "name": "套装B",
            "slug": "id-animi",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?34882",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?17013",
            "title": "dicta ut quos",
            "title_en": "aut molestiae non",
            "sub_title": "et accusantium sequi",
            "describe": "Aut ratione ipsam deleniti voluptas id necessitatibus. Beatae alias aperiam necessitatibus ut iure. Sapiente aut temporibus ad facilis. Officia dolor sed aut incidunt ea voluptatem quidem.",
            "describe_en": "Quis et sed facilis quasi. Voluptatem dolores repellendus quae quis non. Occaecati quod voluptatem aut voluptas alias voluptate reprehenderit itaque.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?32081",
            "parent_id": 7,
            "level": 1,
            "created_at": "2020-08-25 14:03:44",
            "updated_at": "2020-09-09 01:15:15",
            "children": [
                {
                    "id": 24,
                    "name": "面膜",
                    "slug": "est-atque",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?60609",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?34876",
                    "title": "consequatur asperiores doloribus",
                    "title_en": "voluptas similique fugit",
                    "sub_title": "et non aspernatur",
                    "describe": "Sed voluptas amet molestiae. Sit voluptatem sint nesciunt excepturi quis. Est velit aperiam magni occaecati. Quasi at occaecati est.",
                    "describe_en": "Temporibus consequuntur qui molestias sunt ut nihil qui expedita. Amet ut aliquam quia nesciunt veniam voluptate. Ducimus et est deleniti tempora quia.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?48375",
                    "parent_id": 4,
                    "level": 1,
                    "created_at": "2020-08-22 05:37:12",
                    "updated_at": "2020-08-19 20:40:20"
                }
            ]
        },
        {
            "id": 6,
            "name": "洁面",
            "slug": "quae-sed",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?17138",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?91400",
            "title": "ipsum molestiae dolorum",
            "title_en": "sapiente architecto doloribus",
            "sub_title": "debitis et totam",
            "describe": "Esse soluta expedita accusantium tempore ut reprehenderit deleniti. Rerum atque ducimus optio minus rerum laudantium. Rem dolore voluptas voluptates esse. Qui fugiat enim expedita minima.",
            "describe_en": "Quibusdam corporis nostrum magnam sit quas quia. Eum sed omnis voluptates nobis non aut enim. Sint eius dolores fugit vel.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?91325",
            "parent_id": 15,
            "level": 1,
            "created_at": "2020-08-27 16:13:25",
            "updated_at": "2020-08-24 00:29:18",
            "children": [
                {
                    "id": 16,
                    "name": "套装系列",
                    "slug": "et-maxime",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?91730",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?49455",
                    "title": "et ullam quia",
                    "title_en": "nostrum vero omnis",
                    "sub_title": "omnis animi id",
                    "describe": "Repellendus delectus et ut unde assumenda error velit. Excepturi accusantium doloribus quidem non deserunt ex distinctio. Voluptatibus quisquam quas quidem. Temporibus voluptas id eos.",
                    "describe_en": "Qui fugiat et itaque autem. Adipisci commodi suscipit reiciendis provident nihil doloremque.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?24734",
                    "parent_id": 6,
                    "level": 1,
                    "created_at": "2020-09-06 09:53:22",
                    "updated_at": "2020-08-28 19:25:09"
                },
                {
                    "id": 30,
                    "name": "隔离",
                    "slug": "ut-reprehenderit",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?28848",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?85502",
                    "title": "est quo illo",
                    "title_en": "doloremque veniam rem",
                    "sub_title": "expedita eligendi neque",
                    "describe": "Sit maiores excepturi tenetur nesciunt provident omnis optio. Deleniti reprehenderit vero provident a. Repellat minus ut est.",
                    "describe_en": "Sed similique nesciunt illum et. Ratione doloribus illum non dolorem aliquid. Veniam sequi veniam ut.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?21331",
                    "parent_id": 6,
                    "level": 1,
                    "created_at": "2020-09-10 05:37:53",
                    "updated_at": "2020-08-17 02:37:54"
                }
            ]
        },
        {
            "id": 7,
            "name": "套装B",
            "slug": "dolorum-at",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?84473",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?50438",
            "title": "quidem rerum esse",
            "title_en": "cupiditate ut atque",
            "sub_title": "autem delectus iste",
            "describe": "Totam dolores et voluptates voluptatum quia. Facere aperiam consequatur est aliquid sed eum. Est officiis voluptatem nostrum iure.",
            "describe_en": "Et est aut quaerat perspiciatis numquam dolores. Velit aspernatur minima fuga at est. Repudiandae temporibus et itaque. Praesentium placeat pariatur qui exercitationem adipisci enim.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?90928",
            "parent_id": 23,
            "level": 1,
            "created_at": "2020-09-15 15:29:58",
            "updated_at": "2020-09-14 04:06:28",
            "children": [
                {
                    "id": 4,
                    "name": "套装B",
                    "slug": "id-animi",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?34882",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?17013",
                    "title": "dicta ut quos",
                    "title_en": "aut molestiae non",
                    "sub_title": "et accusantium sequi",
                    "describe": "Aut ratione ipsam deleniti voluptas id necessitatibus. Beatae alias aperiam necessitatibus ut iure. Sapiente aut temporibus ad facilis. Officia dolor sed aut incidunt ea voluptatem quidem.",
                    "describe_en": "Quis et sed facilis quasi. Voluptatem dolores repellendus quae quis non. Occaecati quod voluptatem aut voluptas alias voluptate reprehenderit itaque.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?32081",
                    "parent_id": 7,
                    "level": 1,
                    "created_at": "2020-08-25 14:03:44",
                    "updated_at": "2020-09-09 01:15:15"
                }
            ]
        },
        {
            "id": 8,
            "name": "眼线",
            "slug": "blanditiis-voluptatum",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?21876",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?59788",
            "title": "dolores molestiae quam",
            "title_en": "aliquid aliquam et",
            "sub_title": "corrupti vero soluta",
            "describe": "Deleniti odit laborum id perspiciatis sit. Cumque et quis facere similique rem delectus qui enim. Aut sit rerum et voluptates eaque. Quia exercitationem sit quod illo aut pariatur explicabo.",
            "describe_en": "Omnis ipsa eligendi ducimus vero laboriosam sed. Non et rem nulla minima doloremque non dolor et. Natus et quo molestias a expedita molestiae.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?23968",
            "parent_id": 8,
            "level": 1,
            "created_at": "2020-08-30 08:36:04",
            "updated_at": "2020-09-01 13:42:20",
            "children": [
                {
                    "id": 8,
                    "name": "眼线",
                    "slug": "blanditiis-voluptatum",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?21876",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?59788",
                    "title": "dolores molestiae quam",
                    "title_en": "aliquid aliquam et",
                    "sub_title": "corrupti vero soluta",
                    "describe": "Deleniti odit laborum id perspiciatis sit. Cumque et quis facere similique rem delectus qui enim. Aut sit rerum et voluptates eaque. Quia exercitationem sit quod illo aut pariatur explicabo.",
                    "describe_en": "Omnis ipsa eligendi ducimus vero laboriosam sed. Non et rem nulla minima doloremque non dolor et. Natus et quo molestias a expedita molestiae.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?23968",
                    "parent_id": 8,
                    "level": 1,
                    "created_at": "2020-08-30 08:36:04",
                    "updated_at": "2020-09-01 13:42:20"
                },
                {
                    "id": 27,
                    "name": "套装A",
                    "slug": "esse-minima",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?77965",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?37104",
                    "title": "incidunt officia occaecati",
                    "title_en": "maiores eum ut",
                    "sub_title": "dolorem qui voluptatem",
                    "describe": "Labore aut hic in distinctio corporis sed excepturi. Et earum officiis qui sint in accusantium. Occaecati tempora consectetur quia facere aliquam omnis accusamus.",
                    "describe_en": "Sunt veritatis debitis autem explicabo commodi debitis omnis. Quidem consequatur labore earum autem. Voluptatem voluptatem molestiae quas.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?94677",
                    "parent_id": 8,
                    "level": 1,
                    "created_at": "2020-09-06 03:25:21",
                    "updated_at": "2020-08-23 11:08:45"
                }
            ]
        },
        {
            "id": 10,
            "name": "隔离",
            "slug": "omnis-odio",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?25306",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?95719",
            "title": "et sunt modi",
            "title_en": "facere reprehenderit ipsa",
            "sub_title": "voluptas veniam saepe",
            "describe": "Minima repudiandae velit pariatur dolorem. Dolor voluptatibus nesciunt et sapiente praesentium. Odio officia eos inventore harum aut aliquam. Qui voluptate dolorem nihil aut et.",
            "describe_en": "Et eos nisi qui rem. Dolorem beatae eius autem ut et voluptatem. Nihil nihil eius non corrupti quis iste voluptas est.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?49630",
            "parent_id": 19,
            "level": 1,
            "created_at": "2020-08-26 22:37:42",
            "updated_at": "2020-09-08 19:51:23",
            "children": [
                {
                    "id": 23,
                    "name": "眼霜",
                    "slug": "voluptas-eveniet",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?45580",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?55847",
                    "title": "officia id non",
                    "title_en": "rerum ut eaque",
                    "sub_title": "quo vel debitis",
                    "describe": "Pariatur et tempora tempore corrupti. Consequatur ut eius sunt reprehenderit dolorem. Rerum eum odit qui molestiae. Et facilis vero soluta ad.",
                    "describe_en": "Odit sunt vero ullam iste voluptatem provident minima. Rem assumenda aut voluptas corporis. Cum natus alias impedit excepturi adipisci.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?89477",
                    "parent_id": 10,
                    "level": 1,
                    "created_at": "2020-09-13 19:50:11",
                    "updated_at": "2020-08-17 06:21:54"
                }
            ]
        },
        {
            "id": 11,
            "name": "唇膏",
            "slug": "blanditiis-at",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?68157",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?88891",
            "title": "voluptas repellat aliquam",
            "title_en": "quod rem maxime",
            "sub_title": "ipsa quos incidunt",
            "describe": "Deserunt dicta cum voluptas animi voluptatem error. Minus veniam omnis non natus nostrum minus quos. Voluptatibus alias magni saepe.",
            "describe_en": "Atque beatae voluptatem aut voluptatem voluptas voluptatem. Eum officia nihil exercitationem qui. Qui aut est magni maxime quia illo mollitia. Quas ea ipsam necessitatibus tempora et.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?89553",
            "parent_id": 16,
            "level": 1,
            "created_at": "2020-08-21 18:30:46",
            "updated_at": "2020-09-15 07:50:45",
            "children": [
                {
                    "id": 12,
                    "name": "套装A",
                    "slug": "id-possimus",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?56566",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?52485",
                    "title": "soluta sint illum",
                    "title_en": "sed fuga veniam",
                    "sub_title": "aut illo tempora",
                    "describe": "Dolorum dicta ullam molestiae recusandae numquam et. Quia consequatur minus quia commodi doloremque voluptas. Nemo ipsa sed et. Minus ut commodi quidem ea quidem maxime debitis.",
                    "describe_en": "Quia consequatur deleniti ducimus ea corporis. Ea deleniti magnam reprehenderit exercitationem inventore occaecati atque. Sed ipsa eos ut at soluta voluptatem eligendi.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?19659",
                    "parent_id": 11,
                    "level": 1,
                    "created_at": "2020-09-02 14:30:28",
                    "updated_at": "2020-09-10 14:05:17"
                }
            ]
        },
        {
            "id": 14,
            "name": "套装C",
            "slug": "cupiditate-dolore",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?53898",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?88831",
            "title": "ut consequatur adipisci",
            "title_en": "non voluptas ut",
            "sub_title": "eos cumque consequatur",
            "describe": "Sit suscipit nostrum voluptatem iste officia. Laborum molestiae accusamus est hic vel. Nihil possimus molestias aut omnis dolorum quo. Itaque et voluptatem nemo enim eos.",
            "describe_en": "Harum quia quod eveniet ut molestiae consequuntur qui. Voluptatibus adipisci ducimus id dolorem veritatis. In quam quis excepturi quia accusamus quia voluptas.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?28323",
            "parent_id": 19,
            "level": 1,
            "created_at": "2020-09-05 04:05:03",
            "updated_at": "2020-09-03 16:07:11",
            "children": [
                {
                    "id": 1,
                    "name": "套装C",
                    "slug": "harum-tempore",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?14636",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?77913",
                    "title": "provident autem illum",
                    "title_en": "doloribus magnam consectetur",
                    "sub_title": "corrupti non sint",
                    "describe": "Beatae odio repellendus culpa. Molestias voluptatum mollitia eum aut qui vitae dolor recusandae. Voluptatem enim illum accusamus officia.",
                    "describe_en": "Quia optio libero reiciendis ratione recusandae. Omnis accusantium cupiditate magni autem quis facilis. Recusandae ducimus officiis et sit in ipsum.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?69802",
                    "parent_id": 14,
                    "level": 1,
                    "created_at": "2020-09-01 09:56:50",
                    "updated_at": "2020-09-12 16:27:04"
                },
                {
                    "id": 22,
                    "name": "眼霜",
                    "slug": "perspiciatis-magnam",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?58219",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?53916",
                    "title": "eos maiores non",
                    "title_en": "est earum ut",
                    "sub_title": "consectetur dolorem soluta",
                    "describe": "Quia excepturi est corporis placeat omnis cumque. Est cumque reiciendis dolor quia qui voluptate velit tempore. Distinctio reprehenderit sunt minima quaerat quo. Quaerat dolore nemo quia accusantium.",
                    "describe_en": "Sint aut omnis omnis ipsum at atque totam quia. Accusantium ea aliquid voluptatem molestias explicabo nam est. Voluptatem modi facere laboriosam cumque aut labore. Similique veritatis nobis iste.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?28973",
                    "parent_id": 14,
                    "level": 1,
                    "created_at": "2020-08-16 16:04:59",
                    "updated_at": "2020-09-12 23:13:36"
                }
            ]
        },
        {
            "id": 15,
            "name": "彩妆盘",
            "slug": "suscipit-doloribus",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?74598",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?82039",
            "title": "necessitatibus ullam voluptatem",
            "title_en": "id ipsa consequatur",
            "sub_title": "eum autem et",
            "describe": "Odit aut et laboriosam dolores. Eveniet ipsam voluptatibus et pariatur repellendus non sed autem.",
            "describe_en": "Fuga voluptatum at quae mollitia aut. Veniam quasi est ipsa ut dicta eius. Aspernatur quasi voluptatem iure. Odit voluptatem impedit repudiandae illo illo optio.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?31840",
            "parent_id": 15,
            "level": 1,
            "created_at": "2020-09-10 16:27:31",
            "updated_at": "2020-08-23 08:08:47",
            "children": [
                {
                    "id": 6,
                    "name": "洁面",
                    "slug": "quae-sed",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?17138",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?91400",
                    "title": "ipsum molestiae dolorum",
                    "title_en": "sapiente architecto doloribus",
                    "sub_title": "debitis et totam",
                    "describe": "Esse soluta expedita accusantium tempore ut reprehenderit deleniti. Rerum atque ducimus optio minus rerum laudantium. Rem dolore voluptas voluptates esse. Qui fugiat enim expedita minima.",
                    "describe_en": "Quibusdam corporis nostrum magnam sit quas quia. Eum sed omnis voluptates nobis non aut enim. Sint eius dolores fugit vel.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?91325",
                    "parent_id": 15,
                    "level": 1,
                    "created_at": "2020-08-27 16:13:25",
                    "updated_at": "2020-08-24 00:29:18"
                },
                {
                    "id": 15,
                    "name": "彩妆盘",
                    "slug": "suscipit-doloribus",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?74598",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?82039",
                    "title": "necessitatibus ullam voluptatem",
                    "title_en": "id ipsa consequatur",
                    "sub_title": "eum autem et",
                    "describe": "Odit aut et laboriosam dolores. Eveniet ipsam voluptatibus et pariatur repellendus non sed autem.",
                    "describe_en": "Fuga voluptatum at quae mollitia aut. Veniam quasi est ipsa ut dicta eius. Aspernatur quasi voluptatem iure. Odit voluptatem impedit repudiandae illo illo optio.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?31840",
                    "parent_id": 15,
                    "level": 1,
                    "created_at": "2020-09-10 16:27:31",
                    "updated_at": "2020-08-23 08:08:47"
                },
                {
                    "id": 17,
                    "name": "套装系列",
                    "slug": "necessitatibus-occaecati",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?86987",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?38422",
                    "title": "voluptas maxime nam",
                    "title_en": "et aperiam doloremque",
                    "sub_title": "fugiat quae quia",
                    "describe": "Voluptates id omnis totam quae rerum. Ut itaque rem ullam placeat minus numquam. Libero eos aut repellat. Dolorem consequatur esse id et eaque est.",
                    "describe_en": "Eos est quos blanditiis consequatur et. Ducimus maxime aperiam velit fugit dolorem voluptate dolore. Ex consectetur facere itaque animi odit ipsum vero. Itaque odio dolores totam aut qui.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?90277",
                    "parent_id": 15,
                    "level": 1,
                    "created_at": "2020-09-14 07:41:36",
                    "updated_at": "2020-08-17 20:07:49"
                }
            ]
        },
        {
            "id": 16,
            "name": "套装系列",
            "slug": "et-maxime",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?91730",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?49455",
            "title": "et ullam quia",
            "title_en": "nostrum vero omnis",
            "sub_title": "omnis animi id",
            "describe": "Repellendus delectus et ut unde assumenda error velit. Excepturi accusantium doloribus quidem non deserunt ex distinctio. Voluptatibus quisquam quas quidem. Temporibus voluptas id eos.",
            "describe_en": "Qui fugiat et itaque autem. Adipisci commodi suscipit reiciendis provident nihil doloremque.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?24734",
            "parent_id": 6,
            "level": 1,
            "created_at": "2020-09-06 09:53:22",
            "updated_at": "2020-08-28 19:25:09",
            "children": [
                {
                    "id": 9,
                    "name": "香水",
                    "slug": "vitae-quae",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?22597",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?98594",
                    "title": "sint odit nisi",
                    "title_en": "qui rem repellendus",
                    "sub_title": "voluptas excepturi ut",
                    "describe": "Qui ut eum qui eum. Quos officia earum sit architecto molestias qui. Eum placeat nam nihil aut provident tenetur. Odit accusantium iste vero qui illum libero perspiciatis enim.",
                    "describe_en": "Earum cupiditate in eligendi corrupti consequatur ipsam natus. Quis saepe praesentium reprehenderit eius. Officia ex a molestiae explicabo ratione. Provident est quam eligendi magnam voluptatem.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?74666",
                    "parent_id": 16,
                    "level": 1,
                    "created_at": "2020-08-19 16:51:38",
                    "updated_at": "2020-08-24 21:31:31"
                },
                {
                    "id": 11,
                    "name": "唇膏",
                    "slug": "blanditiis-at",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?68157",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?88891",
                    "title": "voluptas repellat aliquam",
                    "title_en": "quod rem maxime",
                    "sub_title": "ipsa quos incidunt",
                    "describe": "Deserunt dicta cum voluptas animi voluptatem error. Minus veniam omnis non natus nostrum minus quos. Voluptatibus alias magni saepe.",
                    "describe_en": "Atque beatae voluptatem aut voluptatem voluptas voluptatem. Eum officia nihil exercitationem qui. Qui aut est magni maxime quia illo mollitia. Quas ea ipsam necessitatibus tempora et.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?89553",
                    "parent_id": 16,
                    "level": 1,
                    "created_at": "2020-08-21 18:30:46",
                    "updated_at": "2020-09-15 07:50:45"
                },
                {
                    "id": 29,
                    "name": "套装A",
                    "slug": "id-nostrum",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?60327",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?30513",
                    "title": "nam aut tempore",
                    "title_en": "consequatur odio omnis",
                    "sub_title": "et debitis repellat",
                    "describe": "Quisquam dignissimos ipsum qui facere. Nihil qui accusantium consequuntur ipsam est repellat labore. Quo nihil ut dolor et occaecati qui eius.",
                    "describe_en": "Quidem exercitationem ipsam dolorum sit odio explicabo. Nihil officiis ratione provident officiis ea aut minima similique.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?52830",
                    "parent_id": 16,
                    "level": 1,
                    "created_at": "2020-08-18 14:09:08",
                    "updated_at": "2020-08-21 18:57:57"
                }
            ]
        },
        {
            "id": 18,
            "name": "BB霜",
            "slug": "et-corrupti",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?18862",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?29858",
            "title": "fuga ut consequatur",
            "title_en": "sequi provident corrupti",
            "sub_title": "vel odit sit",
            "describe": "Quidem fugiat est sint voluptatem facilis. Voluptatem nesciunt maiores expedita dignissimos nisi dicta. Vel corporis non aut atque suscipit incidunt necessitatibus sint.",
            "describe_en": "Qui et voluptate quia quidem. Nisi esse tempora nihil fuga officiis. Laudantium voluptatem voluptatem enim. Est ea recusandae temporibus ea doloribus pariatur.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?15543",
            "parent_id": 29,
            "level": 1,
            "created_at": "2020-08-26 03:18:25",
            "updated_at": "2020-09-04 22:19:10",
            "children": [
                {
                    "id": 26,
                    "name": "粉底液",
                    "slug": "repellendus-impedit",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?56949",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?44637",
                    "title": "quia non aperiam",
                    "title_en": "expedita quod maxime",
                    "sub_title": "ducimus quam alias",
                    "describe": "Quos aut quia animi unde provident. Aut eum labore vero. Qui enim voluptate perspiciatis dolores dolorem sunt qui. Ipsa asperiores qui cupiditate similique voluptates perspiciatis enim ipsum.",
                    "describe_en": "Dolorem expedita error aperiam dolor totam nemo facere magnam. Sit quia omnis et architecto.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?89143",
                    "parent_id": 18,
                    "level": 1,
                    "created_at": "2020-09-04 02:46:35",
                    "updated_at": "2020-09-05 22:50:12"
                }
            ]
        },
        {
            "id": 19,
            "name": "香水",
            "slug": "delectus-ipsa",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?76144",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?56673",
            "title": "ab qui natus",
            "title_en": "repellendus quo illum",
            "sub_title": "minima illum delectus",
            "describe": "Animi adipisci rerum expedita. Facere qui est illum pariatur eos modi. Et ut quae qui sequi quam odit.",
            "describe_en": "Sequi vitae rerum aut placeat est. Quo amet rem odit. Sint quo suscipit sint cum nihil illo possimus facilis.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?42284",
            "parent_id": 0,
            "level": 1,
            "created_at": "2020-08-20 03:43:45",
            "updated_at": "2020-09-10 22:06:04",
            "children": [
                {
                    "id": 10,
                    "name": "隔离",
                    "slug": "omnis-odio",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?25306",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?95719",
                    "title": "et sunt modi",
                    "title_en": "facere reprehenderit ipsa",
                    "sub_title": "voluptas veniam saepe",
                    "describe": "Minima repudiandae velit pariatur dolorem. Dolor voluptatibus nesciunt et sapiente praesentium. Odio officia eos inventore harum aut aliquam. Qui voluptate dolorem nihil aut et.",
                    "describe_en": "Et eos nisi qui rem. Dolorem beatae eius autem ut et voluptatem. Nihil nihil eius non corrupti quis iste voluptas est.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?49630",
                    "parent_id": 19,
                    "level": 1,
                    "created_at": "2020-08-26 22:37:42",
                    "updated_at": "2020-09-08 19:51:23"
                },
                {
                    "id": 14,
                    "name": "套装C",
                    "slug": "cupiditate-dolore",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?53898",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?88831",
                    "title": "ut consequatur adipisci",
                    "title_en": "non voluptas ut",
                    "sub_title": "eos cumque consequatur",
                    "describe": "Sit suscipit nostrum voluptatem iste officia. Laborum molestiae accusamus est hic vel. Nihil possimus molestias aut omnis dolorum quo. Itaque et voluptatem nemo enim eos.",
                    "describe_en": "Harum quia quod eveniet ut molestiae consequuntur qui. Voluptatibus adipisci ducimus id dolorem veritatis. In quam quis excepturi quia accusamus quia voluptas.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?28323",
                    "parent_id": 19,
                    "level": 1,
                    "created_at": "2020-09-05 04:05:03",
                    "updated_at": "2020-09-03 16:07:11"
                },
                {
                    "id": 25,
                    "name": "彩妆盘",
                    "slug": "quaerat-repudiandae",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?22114",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?90004",
                    "title": "cum velit voluptates",
                    "title_en": "delectus dolore dolorum",
                    "sub_title": "nemo esse blanditiis",
                    "describe": "Est perspiciatis tempore et minus ipsam quae iste. Id in temporibus dicta consequuntur sunt.",
                    "describe_en": "Officiis sed natus eos. Aut pariatur eaque qui quia quo et dolores.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?75213",
                    "parent_id": 19,
                    "level": 1,
                    "created_at": "2020-08-22 02:15:06",
                    "updated_at": "2020-08-24 18:01:01"
                }
            ]
        },
        {
            "id": 20,
            "name": "BB霜",
            "slug": "consequuntur-quam",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?50813",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?51191",
            "title": "repellendus consequuntur modi",
            "title_en": "ipsum perspiciatis totam",
            "sub_title": "consectetur quos quia",
            "describe": "Fuga neque qui atque ut debitis. Est voluptatem voluptatem sunt deleniti voluptates. Nobis omnis corrupti illo quae consequuntur nemo est. Facilis mollitia sapiente sit architecto fuga qui.",
            "describe_en": "Aliquam laboriosam eius magni odio quia. Iure ea vero porro ipsa numquam aut delectus. Voluptas accusantium ut est non similique. Vel eius nobis facilis in beatae aperiam quo.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?49938",
            "parent_id": 30,
            "level": 1,
            "created_at": "2020-08-17 08:00:14",
            "updated_at": "2020-09-05 20:43:24",
            "children": [
                {
                    "id": 3,
                    "name": "面膜",
                    "slug": "numquam-inventore",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?82741",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?60013",
                    "title": "labore repellendus vel",
                    "title_en": "velit ipsa maiores",
                    "sub_title": "quis doloribus deleniti",
                    "describe": "Optio eos ut est corporis voluptatem. Non et minima molestiae. Et recusandae distinctio delectus inventore.",
                    "describe_en": "Quisquam explicabo quod eligendi cum non ab. Et expedita ipsa harum odio provident totam distinctio. Ut provident dolorem illum atque dolore. Amet nemo et repellendus magnam quo incidunt dicta.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?93949",
                    "parent_id": 20,
                    "level": 1,
                    "created_at": "2020-09-13 16:20:42",
                    "updated_at": "2020-08-26 17:14:59"
                }
            ]
        },
        {
            "id": 23,
            "name": "眼霜",
            "slug": "voluptas-eveniet",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?45580",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?55847",
            "title": "officia id non",
            "title_en": "rerum ut eaque",
            "sub_title": "quo vel debitis",
            "describe": "Pariatur et tempora tempore corrupti. Consequatur ut eius sunt reprehenderit dolorem. Rerum eum odit qui molestiae. Et facilis vero soluta ad.",
            "describe_en": "Odit sunt vero ullam iste voluptatem provident minima. Rem assumenda aut voluptas corporis. Cum natus alias impedit excepturi adipisci.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?89477",
            "parent_id": 10,
            "level": 1,
            "created_at": "2020-09-13 19:50:11",
            "updated_at": "2020-08-17 06:21:54",
            "children": [
                {
                    "id": 7,
                    "name": "套装B",
                    "slug": "dolorum-at",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?84473",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?50438",
                    "title": "quidem rerum esse",
                    "title_en": "cupiditate ut atque",
                    "sub_title": "autem delectus iste",
                    "describe": "Totam dolores et voluptates voluptatum quia. Facere aperiam consequatur est aliquid sed eum. Est officiis voluptatem nostrum iure.",
                    "describe_en": "Et est aut quaerat perspiciatis numquam dolores. Velit aspernatur minima fuga at est. Repudiandae temporibus et itaque. Praesentium placeat pariatur qui exercitationem adipisci enim.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?90928",
                    "parent_id": 23,
                    "level": 1,
                    "created_at": "2020-09-15 15:29:58",
                    "updated_at": "2020-09-14 04:06:28"
                }
            ]
        },
        {
            "id": 25,
            "name": "彩妆盘",
            "slug": "quaerat-repudiandae",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?22114",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?90004",
            "title": "cum velit voluptates",
            "title_en": "delectus dolore dolorum",
            "sub_title": "nemo esse blanditiis",
            "describe": "Est perspiciatis tempore et minus ipsam quae iste. Id in temporibus dicta consequuntur sunt.",
            "describe_en": "Officiis sed natus eos. Aut pariatur eaque qui quia quo et dolores.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?75213",
            "parent_id": 19,
            "level": 1,
            "created_at": "2020-08-22 02:15:06",
            "updated_at": "2020-08-24 18:01:01",
            "children": [
                {
                    "id": 13,
                    "name": "套装C",
                    "slug": "debitis-quaerat",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?76042",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?38317",
                    "title": "itaque ea in",
                    "title_en": "qui nihil quas",
                    "sub_title": "exercitationem dolore velit",
                    "describe": "Illo nulla consequatur vero animi maiores. Ad vel nihil labore aut. Eos asperiores aperiam maiores occaecati soluta.",
                    "describe_en": "Qui reprehenderit dolorum quo sed omnis debitis. Distinctio minus ab suscipit ipsa. Delectus et assumenda similique similique et consectetur sit.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?65002",
                    "parent_id": 25,
                    "level": 1,
                    "created_at": "2020-09-04 15:38:17",
                    "updated_at": "2020-09-16 13:16:01"
                }
            ]
        },
        {
            "id": 27,
            "name": "套装A",
            "slug": "esse-minima",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?77965",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?37104",
            "title": "incidunt officia occaecati",
            "title_en": "maiores eum ut",
            "sub_title": "dolorem qui voluptatem",
            "describe": "Labore aut hic in distinctio corporis sed excepturi. Et earum officiis qui sint in accusantium. Occaecati tempora consectetur quia facere aliquam omnis accusamus.",
            "describe_en": "Sunt veritatis debitis autem explicabo commodi debitis omnis. Quidem consequatur labore earum autem. Voluptatem voluptatem molestiae quas.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?94677",
            "parent_id": 8,
            "level": 1,
            "created_at": "2020-09-06 03:25:21",
            "updated_at": "2020-08-23 11:08:45",
            "children": [
                {
                    "id": 21,
                    "name": "套装B",
                    "slug": "ratione-autem",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?69106",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?18014",
                    "title": "perferendis sint debitis",
                    "title_en": "molestiae pariatur molestiae",
                    "sub_title": "quia natus sed",
                    "describe": "Voluptatibus cumque rem dolor et ipsum expedita. Praesentium id odit quo veritatis incidunt voluptatibus. Ducimus laboriosam illum repellendus occaecati quasi natus. Distinctio cupiditate aut esse.",
                    "describe_en": "Tempora omnis dolorum et et nihil quam neque. Nisi eius quidem labore qui. Minima unde similique rem dolor provident. Ut dolore dolore consequatur laborum sed.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?95113",
                    "parent_id": 27,
                    "level": 1,
                    "created_at": "2020-08-24 03:17:07",
                    "updated_at": "2020-09-16 12:44:22"
                }
            ]
        },
        {
            "id": 28,
            "name": "BB霜",
            "slug": "repellendus-doloremque",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?23553",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?75737",
            "title": "necessitatibus aut corporis",
            "title_en": "delectus aut earum",
            "sub_title": "sed ut dolorem",
            "describe": "Iure et corrupti veritatis quisquam modi ullam. Voluptas nemo et impedit totam. Ut perferendis amet est culpa vel autem. Vitae est ipsa nihil temporibus et sit. Debitis sunt voluptatem et corrupti.",
            "describe_en": "Occaecati dolor et impedit consequatur sint ducimus rem. Dolores unde quam qui autem rerum. Voluptatem repudiandae quisquam aut tenetur ut ullam libero. Ut amet at ad qui enim voluptas sint.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?12180",
            "parent_id": 3,
            "level": 1,
            "created_at": "2020-08-21 18:45:48",
            "updated_at": "2020-08-31 21:23:22",
            "children": [
                {
                    "id": 2,
                    "name": "套装B",
                    "slug": "autem-et",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?37382",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?19409",
                    "title": "et quia aspernatur",
                    "title_en": "enim modi et",
                    "sub_title": "esse consequatur ut",
                    "describe": "Ut aliquid est eaque quasi. Modi quam autem et. Non odio cum rerum qui. Inventore nobis dignissimos sequi consequuntur aut ullam aut.",
                    "describe_en": "Vitae excepturi eaque veniam. Et quibusdam facilis dolore qui. Aut molestiae deleniti et sunt molestiae debitis. Corrupti est dicta dolores commodi ipsum omnis.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?76892",
                    "parent_id": 28,
                    "level": 1,
                    "created_at": "2020-08-21 05:46:09",
                    "updated_at": "2020-09-11 01:24:11"
                }
            ]
        },
        {
            "id": 29,
            "name": "套装A",
            "slug": "id-nostrum",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?60327",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?30513",
            "title": "nam aut tempore",
            "title_en": "consequatur odio omnis",
            "sub_title": "et debitis repellat",
            "describe": "Quisquam dignissimos ipsum qui facere. Nihil qui accusantium consequuntur ipsam est repellat labore. Quo nihil ut dolor et occaecati qui eius.",
            "describe_en": "Quidem exercitationem ipsam dolorum sit odio explicabo. Nihil officiis ratione provident officiis ea aut minima similique.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?52830",
            "parent_id": 16,
            "level": 1,
            "created_at": "2020-08-18 14:09:08",
            "updated_at": "2020-08-21 18:57:57",
            "children": [
                {
                    "id": 18,
                    "name": "BB霜",
                    "slug": "et-corrupti",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?18862",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?29858",
                    "title": "fuga ut consequatur",
                    "title_en": "sequi provident corrupti",
                    "sub_title": "vel odit sit",
                    "describe": "Quidem fugiat est sint voluptatem facilis. Voluptatem nesciunt maiores expedita dignissimos nisi dicta. Vel corporis non aut atque suscipit incidunt necessitatibus sint.",
                    "describe_en": "Qui et voluptate quia quidem. Nisi esse tempora nihil fuga officiis. Laudantium voluptatem voluptatem enim. Est ea recusandae temporibus ea doloribus pariatur.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?15543",
                    "parent_id": 29,
                    "level": 1,
                    "created_at": "2020-08-26 03:18:25",
                    "updated_at": "2020-09-04 22:19:10"
                }
            ]
        },
        {
            "id": 30,
            "name": "隔离",
            "slug": "ut-reprehenderit",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?28848",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?85502",
            "title": "est quo illo",
            "title_en": "doloremque veniam rem",
            "sub_title": "expedita eligendi neque",
            "describe": "Sit maiores excepturi tenetur nesciunt provident omnis optio. Deleniti reprehenderit vero provident a. Repellat minus ut est.",
            "describe_en": "Sed similique nesciunt illum et. Ratione doloribus illum non dolorem aliquid. Veniam sequi veniam ut.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?21331",
            "parent_id": 6,
            "level": 1,
            "created_at": "2020-09-10 05:37:53",
            "updated_at": "2020-08-17 02:37:54",
            "children": [
                {
                    "id": 20,
                    "name": "BB霜",
                    "slug": "consequuntur-quam",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?50813",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?51191",
                    "title": "repellendus consequuntur modi",
                    "title_en": "ipsum perspiciatis totam",
                    "sub_title": "consectetur quos quia",
                    "describe": "Fuga neque qui atque ut debitis. Est voluptatem voluptatem sunt deleniti voluptates. Nobis omnis corrupti illo quae consequuntur nemo est. Facilis mollitia sapiente sit architecto fuga qui.",
                    "describe_en": "Aliquam laboriosam eius magni odio quia. Iure ea vero porro ipsa numquam aut delectus. Voluptas accusantium ut est non similique. Vel eius nobis facilis in beatae aperiam quo.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?49938",
                    "parent_id": 30,
                    "level": 1,
                    "created_at": "2020-08-17 08:00:14",
                    "updated_at": "2020-09-05 20:43:24"
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
    -G "http://store.wutang.com/api/product_category/story/ea" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product_category/story/ea"
);

let headers = {
    "Content-Type": "application/json",
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

<!-- START_b3072780c2c8472661d7828e03e15075 -->
## Get product category over view
获取产品分类概述(目前分为&#039;套装系列&#039;和&#039;护肤系列&#039;一级分类,只需取其下列二级分类的name,slug,thumbnail,title,title_en,sub_title)

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/product_category/overview/laboriosam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product_category/overview/laboriosam"
);

let headers = {
    "Content-Type": "application/json",
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
`GET api/product_category/overview/{name}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `name` |  required  | 分类名称

<!-- END_b3072780c2c8472661d7828e03e15075 -->

<!-- START_6161f09b99a5441c67beadab83bea7e0 -->
## Get explore product category list
随机获取同分类下三条数据

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/product_category/explore/cumque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product_category/explore/cumque"
);

let headers = {
    "Content-Type": "application/json",
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
    "http://store.wutang.com/api/shop_carts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"product_list":[{"product_id":6}]}'

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
            "product_id": 6
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
    "http://store.wutang.com/api/shop_carts/1?type=aut&product_id=dolorum&amount=sunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/shop_carts/1"
);

let params = {
    "type": "aut",
    "product_id": "dolorum",
    "amount": "sunt",
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
    "http://store.wutang.com/api/shop_carts/1?product_id=eveniet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/shop_carts/1"
);

let params = {
    "product_id": "eveniet",
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
            "name": "品牌介绍",
            "slug": "sint-et",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?71935",
            "title": "quos rem voluptatem",
            "sub_title": "in quo exercitationem",
            "created_at": "2020-02-04 13:09:43",
            "updated_at": "2019-10-18 09:55:29"
        },
        {
            "id": 2,
            "name": "精湛科艺",
            "slug": "laborum-dicta",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?54169",
            "title": "quaerat vero perspiciatis",
            "sub_title": "cum consequatur suscipit",
            "created_at": "2020-06-23 08:53:58",
            "updated_at": "2020-07-05 10:35:47"
        },
        {
            "id": 3,
            "name": "品牌介绍",
            "slug": "minima-nihil",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?84884",
            "title": "sit amet aut",
            "sub_title": "ut iste odit",
            "created_at": "2020-09-03 16:22:11",
            "updated_at": "2020-09-09 20:25:30"
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
## Get the house detail by slug
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
    "http://store.wutang.com/api/user_addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"province":"exercitationem","city":"autem","district":"nostrum","address":"sequi","zip":10,"contact_name":"molestiae","contact_phone":2}'

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
    "province": "exercitationem",
    "city": "autem",
    "district": "nostrum",
    "address": "sequi",
    "zip": 10,
    "contact_name": "molestiae",
    "contact_phone": 2
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
    "http://store.wutang.com/api/user_addresses/1?province=minus&city=dolores&district=voluptas&address=facilis&zip=autem&contact_name=qui&contact_phone=ratione" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_addresses/1"
);

let params = {
    "province": "minus",
    "city": "dolores",
    "district": "voluptas",
    "address": "facilis",
    "zip": "autem",
    "contact_name": "qui",
    "contact_phone": "ratione",
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
    "http://store.wutang.com/api/user_profile?profile_id=placeat&phone=quia&real_name=qui&sex=id&birthday=quos&age=officia&province=sequi&city=sint&district=adipisci&address=sed&zip=quo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_profile"
);

let params = {
    "profile_id": "placeat",
    "phone": "quia",
    "real_name": "qui",
    "sex": "id",
    "birthday": "quos",
    "age": "officia",
    "province": "sequi",
    "city": "sint",
    "district": "adipisci",
    "address": "sed",
    "zip": "quo",
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
    "http://store.wutang.com/api/member_code/bind_parent" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"code":"nihil"}'

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
    -G "http://store.wutang.com/api/wish_list" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/wish_list"
);

let headers = {
    "Content-Type": "application/json",
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
    "http://store.wutang.com/api/wish_list?product_id=dolores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/wish_list"
);

let params = {
    "product_id": "dolores",
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
    "http://store.wutang.com/api/wish_list?product_id=dolore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/wish_list"
);

let params = {
    "product_id": "dolore",
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
    -G "http://store.wutang.com/alipay/bank_gateway/pay?no=minus&total_amount=quia&payment_key=in" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/alipay/bank_gateway/pay"
);

let params = {
    "no": "minus",
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


> Example response (429):

```json
{
    "message": "Too Many Attempts."
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
    -G "http://store.wutang.com/alipay/aop_page/pay?no=numquam&total_amount=aut&payment_key=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/alipay/aop_page/pay"
);

let params = {
    "no": "numquam",
    "total_amount": "aut",
    "payment_key": "qui",
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


> Example response (429):

```json
{
    "message": "Too Many Attempts."
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


> Example response (429):

```json
{
    "message": "Too Many Attempts."
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
    -G "http://store.wutang.com/alipay/legacy_express/pay?no=illo&total_amount=atque&payment_key=nihil" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/alipay/legacy_express/pay"
);

let params = {
    "no": "illo",
    "total_amount": "atque",
    "payment_key": "nihil",
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


> Example response (429):

```json
{
    "message": "Too Many Attempts."
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


> Example response (429):

```json
{
    "message": "Too Many Attempts."
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
    -G "http://store.wutang.com/unionpay/pay?no=facere&total_amount=magnam&payment_key=ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/unionpay/pay"
);

let params = {
    "no": "facere",
    "total_amount": "magnam",
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


> Example response (429):

```json
{
    "message": "Too Many Attempts."
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

#general


<!-- START_77797615aeaa4fce9a94150989aed46f -->
## ResponseCode explain
本方法仅作返回code通用说明(无其他作用)

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/response_code?10001=reiciendis&10003=tempora&20001=vel&40001=porro&40003=eligendi&40004=molestiae&40005=qui&50001=ducimus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/response_code"
);

let params = {
    "10001": "reiciendis",
    "10003": "tempora",
    "20001": "vel",
    "40001": "porro",
    "40003": "eligendi",
    "40004": "molestiae",
    "40005": "qui",
    "50001": "ducimus",
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
    -G "http://store.wutang.com/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/"
);

let headers = {
    "Content-Type": "application/json",
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
`GET /`


<!-- END_53be1e9e10a08458929a2e0ea70ddb86 -->

<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## register
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/register"
);

let headers = {
    "Content-Type": "application/json",
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
    -G "http://store.wutang.com/forgot-password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/forgot-password"
);

let headers = {
    "Content-Type": "application/json",
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
    -G "http://store.wutang.com/my-account" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/my-account"
);

let headers = {
    "Content-Type": "application/json",
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
    -G "http://store.wutang.com/my-account/order/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/my-account/order/1"
);

let headers = {
    "Content-Type": "application/json",
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
    -G "http://store.wutang.com/my-account/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/my-account/profile"
);

let headers = {
    "Content-Type": "application/json",
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
    -G "http://store.wutang.com/cart" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/cart"
);

let headers = {
    "Content-Type": "application/json",
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
    -G "http://store.wutang.com/refresh_cart" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/refresh_cart"
);

let headers = {
    "Content-Type": "application/json",
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
    -G "http://store.wutang.com/checkout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/checkout"
);

let headers = {
    "Content-Type": "application/json",
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
    -G "http://store.wutang.com/refresh_addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/refresh_addresses"
);

let headers = {
    "Content-Type": "application/json",
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
    -G "http://store.wutang.com/products" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/products"
);

let headers = {
    "Content-Type": "application/json",
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
    -G "http://store.wutang.com/product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/product/1"
);

let headers = {
    "Content-Type": "application/json",
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
    -G "http://store.wutang.com/product-category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/product-category"
);

let headers = {
    "Content-Type": "application/json",
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
    -G "http://store.wutang.com/product-category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/product-category/1"
);

let headers = {
    "Content-Type": "application/json",
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
    -G "http://store.wutang.com/product-category/1/story" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/product-category/1/story"
);

let headers = {
    "Content-Type": "application/json",
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
    -G "http://store.wutang.com/wishlist" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/wishlist"
);

let headers = {
    "Content-Type": "application/json",
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
    -G "http://store.wutang.com/the-house" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/the-house"
);

let headers = {
    "Content-Type": "application/json",
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
    -G "http://store.wutang.com/the-house/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/the-house/category"
);

let headers = {
    "Content-Type": "application/json",
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
    -G "http://store.wutang.com/the-house/single" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/the-house/single"
);

let headers = {
    "Content-Type": "application/json",
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


