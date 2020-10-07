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
    -G "http://store.wutang.com/admin/alipay/legacy_express?page=omnis&page_limit=nesciunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/alipay/legacy_express"
);

let params = {
    "page": "omnis",
    "page_limit": "nesciunt",
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
    -d '{"items":[{"pid":"fuga","key":"ut","seller_email":"voluptatem"}]}'

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
            "pid": "fuga",
            "key": "ut",
            "seller_email": "voluptatem"
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
    "http://store.wutang.com/admin/alipay/legacy_express/1?id=facere" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/alipay/legacy_express/1"
);

let params = {
    "id": "facere",
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
    "http://store.wutang.com/admin/alipay/legacy_express/1?id=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/alipay/legacy_express/1"
);

let params = {
    "id": "qui",
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
    "http://store.wutang.com/admin/alipay/legacy_express/status/1?id=quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/alipay/legacy_express/status/1"
);

let params = {
    "id": "quia",
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
    -G "http://store.wutang.com/admin/asset_img?page=est&page_limit=labore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/asset_img"
);

let params = {
    "page": "est",
    "page_limit": "labore",
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
    "http://store.wutang.com/admin/asset_img" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"img":"earum","img_location":"aut","type":"quasi","product_id":"consequatur"}'

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
    "img": "earum",
    "img_location": "aut",
    "type": "quasi",
    "product_id": "consequatur"
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
    -d '{"img":"alias","img_location":"rerum","type":"vel","product_id":"dolore"}'

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
    "img": "alias",
    "img_location": "rerum",
    "type": "vel",
    "product_id": "dolore"
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
    -G "http://store.wutang.com/admin/category_stories?page=qui&page_limit=voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories"
);

let params = {
    "page": "qui",
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
    "http://store.wutang.com/admin/category_stories?title=officiis&title_en=possimus&description=similique&description_en=et&banner=reprehenderit&product_category_id=quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories"
);

let params = {
    "title": "officiis",
    "title_en": "possimus",
    "description": "similique",
    "description_en": "et",
    "banner": "reprehenderit",
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
    "http://store.wutang.com/admin/category_stories/1?title=est&title_en=voluptas&description=atque&description_en=aliquam&banner=ullam&product_category_id=quidem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories/1"
);

let params = {
    "title": "est",
    "title_en": "voluptas",
    "description": "atque",
    "description_en": "aliquam",
    "banner": "ullam",
    "product_category_id": "quidem",
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
    -G "http://store.wutang.com/admin/companies?page=sed&page_limit=maxime" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/companies"
);

let params = {
    "page": "sed",
    "page_limit": "maxime",
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
    -G "http://store.wutang.com/admin/company/departments/necessitatibus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/company/departments/necessitatibus"
);

let headers = {
    "Content-Type": "application/json",
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
    -G "http://store.wutang.com/admin/logs/1?page=ratione&page_limit=pariatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/logs/1"
);

let params = {
    "page": "ratione",
    "page_limit": "pariatur",
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
    "http://store.wutang.com/admin/logs/1?ids=dolorem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/logs/1"
);

let params = {
    "ids": "dolorem",
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
    -G "http://store.wutang.com/admin/order?page=ducimus&page_limit=nemo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/order"
);

let params = {
    "page": "ducimus",
    "page_limit": "nemo",
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
    "http://store.wutang.com/admin/order?page=et&page_limit=soluta&username=nulla&order_no=vero&order_status=sit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/order"
);

let params = {
    "page": "et",
    "page_limit": "soluta",
    "username": "nulla",
    "order_no": "vero",
    "order_status": "sit",
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
    -d '{"refund_status":"optio","ship_status":"cupiditate","status":"odio"}'

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
    "refund_status": "optio",
    "ship_status": "cupiditate",
    "status": "odio"
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
    -G "http://store.wutang.com/admin/product?page=iusto&page_limit=soluta" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product"
);

let params = {
    "page": "iusto",
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
    "http://store.wutang.com/admin/product?product_category_id=dignissimos&product_name=repellendus&product_name_en=quis&thumbnail=quia&slug=non&short_description=reiciendis&short_description_en=explicabo&price=dolores&sale_price=eum&stock=aspernatur&seo_title=dolor&seo_keyword=sint&seo_description=et&benefit=quia&benefit_en=quidem&tech_description=et&tech_description_en=dolorum&description=adipisci&description_en=sunt&usage=officia&usage_en=quam&main_image=rerum&main_image_2=quisquam&benefit_image=odio&product_video=quia&status=sequi&rating=omnis&sold_count=rerum&review_count=omnis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product"
);

let params = {
    "product_category_id": "dignissimos",
    "product_name": "repellendus",
    "product_name_en": "quis",
    "thumbnail": "quia",
    "slug": "non",
    "short_description": "reiciendis",
    "short_description_en": "explicabo",
    "price": "dolores",
    "sale_price": "eum",
    "stock": "aspernatur",
    "seo_title": "dolor",
    "seo_keyword": "sint",
    "seo_description": "et",
    "benefit": "quia",
    "benefit_en": "quidem",
    "tech_description": "et",
    "tech_description_en": "dolorum",
    "description": "adipisci",
    "description_en": "sunt",
    "usage": "officia",
    "usage_en": "quam",
    "main_image": "rerum",
    "main_image_2": "quisquam",
    "benefit_image": "odio",
    "product_video": "quia",
    "status": "sequi",
    "rating": "omnis",
    "sold_count": "rerum",
    "review_count": "omnis",
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
    "http://store.wutang.com/admin/product/1?product_category_id=dicta&product_name=et&product_name_en=quo&thumbnail=libero&slug=harum&short_description=sunt&short_description_en=molestiae&price=inventore&sale_price=molestiae&stock=itaque&seo_title=veritatis&seo_keyword=iusto&seo_description=ex&benefit=velit&benefit_en=velit&tech_description=molestiae&tech_description_en=dolorum&description=voluptatibus&description_en=dolorum&usage=veniam&usage_en=sed&main_image=debitis&main_image_2=aut&benefit_image=cupiditate&product_video=id&status=ipsam&rating=sit&sold_count=consequatur&review_count=omnis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product/1"
);

let params = {
    "product_category_id": "dicta",
    "product_name": "et",
    "product_name_en": "quo",
    "thumbnail": "libero",
    "slug": "harum",
    "short_description": "sunt",
    "short_description_en": "molestiae",
    "price": "inventore",
    "sale_price": "molestiae",
    "stock": "itaque",
    "seo_title": "veritatis",
    "seo_keyword": "iusto",
    "seo_description": "ex",
    "benefit": "velit",
    "benefit_en": "velit",
    "tech_description": "molestiae",
    "tech_description_en": "dolorum",
    "description": "voluptatibus",
    "description_en": "dolorum",
    "usage": "veniam",
    "usage_en": "sed",
    "main_image": "debitis",
    "main_image_2": "aut",
    "benefit_image": "cupiditate",
    "product_video": "id",
    "status": "ipsam",
    "rating": "sit",
    "sold_count": "consequatur",
    "review_count": "omnis",
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
    -G "http://store.wutang.com/admin/product_categories?page=aut&page_limit=occaecati" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories"
);

let params = {
    "page": "aut",
    "page_limit": "occaecati",
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
    "http://store.wutang.com/admin/product_categories?name=in&thumbnail=earum&banner=quia&title=sunt&title_en=recusandae&sub_title=rerum&describe=dolor&describe_en=omnis&describe_img=ad&parent_id=molestiae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories"
);

let params = {
    "name": "in",
    "thumbnail": "earum",
    "banner": "quia",
    "title": "sunt",
    "title_en": "recusandae",
    "sub_title": "rerum",
    "describe": "dolor",
    "describe_en": "omnis",
    "describe_img": "ad",
    "parent_id": "molestiae",
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
    "http://store.wutang.com/admin/product_categories/1?name=ducimus&thumbnail=quasi&banner=et&title=amet&title_en=ex&sub_title=iste&describe=voluptatem&describe_en=nihil&describe_img=beatae&parent_id=voluptates" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories/1"
);

let params = {
    "name": "ducimus",
    "thumbnail": "quasi",
    "banner": "et",
    "title": "amet",
    "title_en": "ex",
    "sub_title": "iste",
    "describe": "voluptatem",
    "describe_en": "nihil",
    "describe_img": "beatae",
    "parent_id": "voluptates",
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
    "http://store.wutang.com/admin/product_sku?title=iste&description=tenetur&price=ut&stock=quaerat&product_id=sapiente" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_sku"
);

let params = {
    "title": "iste",
    "description": "tenetur",
    "price": "ut",
    "stock": "quaerat",
    "product_id": "sapiente",
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
    "http://store.wutang.com/admin/product_sku/1?title=autem&description=velit&price=et&stock=quis&product_id=modi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_sku/1"
);

let params = {
    "title": "autem",
    "description": "velit",
    "price": "et",
    "stock": "quis",
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

#[ADMIN] TheHouse

Class TheHouseController
<!-- START_631a7b6c1a488f12ea676a55af33afe7 -->
## Get The House list
获取Get House列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/the_houses?page=quibusdam&page_limit=error" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/the_houses"
);

let params = {
    "page": "quibusdam",
    "page_limit": "error",
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
    "http://store.wutang.com/admin/the_house" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"inventore","sub_title":"debitis","the_house_category_id":"mollitia","describe":"impedit","banner":"provident"}'

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
    "title": "inventore",
    "sub_title": "debitis",
    "the_house_category_id": "mollitia",
    "describe": "impedit",
    "banner": "provident"
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
    -d '{"title":"laudantium","sub_title":"impedit","the_house_category_id":"est","describe":"nihil","banner":"et"}'

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
    "title": "laudantium",
    "sub_title": "impedit",
    "the_house_category_id": "est",
    "describe": "nihil",
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
    -G "http://store.wutang.com/admin/the_house/category/list?page=dicta&page_limit=assumenda" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/the_house/category/list"
);

let params = {
    "page": "dicta",
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
    "http://store.wutang.com/admin/the_house/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"laudantium","banner":"dolore","title":"iste","sub_title":"et"}'

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
    "name": "laudantium",
    "banner": "dolore",
    "title": "iste",
    "sub_title": "et"
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
    -d '{"name":"enim","banner":"facilis","title":"non","sub_title":"ea"}'

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
    "name": "enim",
    "banner": "facilis",
    "title": "non",
    "sub_title": "ea"
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
    -G "http://store.wutang.com/admin/the_house_content/list?page=aut&page_limit=voluptate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/the_house_content/list"
);

let params = {
    "page": "aut",
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
    "http://store.wutang.com/admin/the_house_content" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"the_house_id":"aliquid","title":"harum","content":"sunt","img":"et","img_desc":"dolor"}'

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
    "the_house_id": "aliquid",
    "title": "harum",
    "content": "sunt",
    "img": "et",
    "img_desc": "dolor"
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
    -d '{"the_house_id":"unde","title":"reprehenderit","content":"odio","img":"necessitatibus","img_desc":"officia"}'

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
    "the_house_id": "unde",
    "title": "reprehenderit",
    "content": "odio",
    "img": "necessitatibus",
    "img_desc": "officia"
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
    -G "http://store.wutang.com/admin/user?username=quam&page=labore&page_limit=pariatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user"
);

let params = {
    "username": "quam",
    "page": "labore",
    "page_limit": "pariatur",
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
    "http://store.wutang.com/admin/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"username":"cupiditate","password":"minima","name":"accusantium","role":"aut","company":"odio","department":"ut","sex":5,"phone":1,"email":"corporis","member_code":"neque"}'

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
    "username": "cupiditate",
    "password": "minima",
    "name": "accusantium",
    "role": "aut",
    "company": "odio",
    "department": "ut",
    "sex": 5,
    "phone": 1,
    "email": "corporis",
    "member_code": "neque"
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
    "http://store.wutang.com/admin/user/1?name=fuga&email=sit&phone=vitae&avatar=odio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user/1"
);

let params = {
    "name": "fuga",
    "email": "sit",
    "phone": "vitae",
    "avatar": "odio",
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
    "http://store.wutang.com/admin/user/reset_password/1?oldPassword=dolor&newPassword=suscipit&newPassword_confirmation=veniam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user/reset_password/1"
);

let params = {
    "oldPassword": "dolor",
    "newPassword": "suscipit",
    "newPassword_confirmation": "veniam",
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
    -G "http://store.wutang.com/admin/get_user?hash_id=possimus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/get_user"
);

let params = {
    "hash_id": "possimus",
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
    "http://store.wutang.com/admin/user_addresses?province=quis&city=qui&district=dolorum&address=numquam&zip=harum&contact_name=nam&contact_phone=harum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses"
);

let params = {
    "province": "quis",
    "city": "qui",
    "district": "dolorum",
    "address": "numquam",
    "zip": "harum",
    "contact_name": "nam",
    "contact_phone": "harum",
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
    "http://store.wutang.com/admin/user_addresses/1?address_id=facere&province=aut&city=itaque&district=officiis&address=possimus&zip=similique&contact_name=ipsam&contact_phone=laboriosam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses/1"
);

let params = {
    "address_id": "facere",
    "province": "aut",
    "city": "itaque",
    "district": "officiis",
    "address": "possimus",
    "zip": "similique",
    "contact_name": "ipsam",
    "contact_phone": "laboriosam",
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
    "http://store.wutang.com/admin/user_addresses/1?address_id=ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses/1"
);

let params = {
    "address_id": "ut",
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
    "http://store.wutang.com/admin/user_profiles/1?profile_id=aperiam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_profiles/1"
);

let params = {
    "profile_id": "aperiam",
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
    "http://store.wutang.com/admin/user_profiles/1?profile_id=fugit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_profiles/1"
);

let params = {
    "profile_id": "fugit",
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
    "http://store.wutang.com/api/contact_us" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"est","type":20,"order_no":"sunt","content":"porro"}'

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
    "name": "est",
    "type": 20,
    "order_no": "sunt",
    "content": "porro"
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
            "img": "https:\/\/lorempixel.com\/640\/480\/?45775",
            "img_location": 1,
            "type": "banner",
            "product_id": 4,
            "product": {
                "id": 4,
                "slug": "distinctio-et",
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "fugit asperiores nisi"
            }
        },
        "discover": [
            {
                "id": 3,
                "img": "https:\/\/lorempixel.com\/640\/480\/?59314",
                "img_location": 1,
                "type": "discover",
                "product_id": 5,
                "product": {
                    "id": 5,
                    "slug": "praesentium-repellat",
                    "product_name": "黑钻焕肤水",
                    "product_name_en": "voluptatem voluptatibus rem"
                }
            },
            {
                "id": 4,
                "img": "https:\/\/lorempixel.com\/640\/480\/?68000",
                "img_location": 1,
                "type": "discover",
                "product_id": 7,
                "product": {
                    "id": 7,
                    "slug": "qui-quisquam",
                    "product_name": "黑钻赋颜面霜",
                    "product_name_en": "eum assumenda et"
                }
            }
        ],
        "recommend_list": [],
        "the_house": [
            {
                "id": 43,
                "slug": "dolor-eum",
                "the_house_category_id": 1,
                "banner": "https:\/\/lorempixel.com\/640\/480\/?58515",
                "title": "ipsam recusandae ut",
                "sub_title": "voluptate suscipit possimus",
                "describe": "Sequi dicta omnis repudiandae repudiandae. Facilis iste vel qui sunt fugiat neque. Labore libero magni deserunt beatae velit repudiandae."
            },
            {
                "id": 28,
                "slug": "et-recusandae",
                "the_house_category_id": 1,
                "banner": "https:\/\/lorempixel.com\/640\/480\/?54728",
                "title": "in sed blanditiis",
                "sub_title": "in dolores soluta",
                "describe": "Sed explicabo possimus quia ex ut fugit occaecati. Aliquam sint deleniti aperiam qui molestias excepturi et. Ea qui ipsum expedita."
            },
            {
                "id": 31,
                "slug": "sint-laudantium",
                "the_house_category_id": 1,
                "banner": "https:\/\/lorempixel.com\/640\/480\/?35729",
                "title": "accusantium amet nesciunt",
                "sub_title": "ipsum et eum",
                "describe": "Nulla rerum culpa natus corporis sit repellendus qui. Corporis eum qui et magni qui odit ea. Perspiciatis a dolores ut velit."
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
            "data": [
                {
                    "id": 1,
                    "slug": "eos-molestiae",
                    "product_name": "黑钻璀璨晶透肌底精华",
                    "parent_id": 0,
                    "level": 1
                },
                {
                    "id": 2,
                    "slug": "repellat-possimus",
                    "product_name": "钻石冰莹面膜",
                    "parent_id": 0,
                    "level": 1
                },
                {
                    "id": 3,
                    "slug": "adipisci-est",
                    "product_name": "臻爱铂金",
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
                    "name": "隔离",
                    "slug": "temporibus-sint",
                    "parent_id": 11,
                    "level": 1
                },
                {
                    "id": 2,
                    "name": "腮红",
                    "slug": "explicabo-harum",
                    "parent_id": 8,
                    "level": 1
                },
                {
                    "id": 3,
                    "name": "香水",
                    "slug": "pariatur-neque",
                    "parent_id": 13,
                    "level": 1
                },
                {
                    "id": 4,
                    "name": "腮红",
                    "slug": "itaque-iusto",
                    "parent_id": 7,
                    "level": 1
                },
                {
                    "id": 5,
                    "name": "BB霜",
                    "slug": "vel-nobis",
                    "parent_id": 13,
                    "level": 1
                },
                {
                    "id": 6,
                    "name": "面膜",
                    "slug": "et-enim",
                    "parent_id": 23,
                    "level": 1
                },
                {
                    "id": 7,
                    "name": "腮红",
                    "slug": "ut-unde",
                    "parent_id": 11,
                    "level": 1
                },
                {
                    "id": 8,
                    "name": "彩妆盘",
                    "slug": "dolorem-id",
                    "parent_id": 28,
                    "level": 1
                },
                {
                    "id": 9,
                    "name": "BB霜",
                    "slug": "doloribus-aut",
                    "parent_id": 4,
                    "level": 1
                },
                {
                    "id": 10,
                    "name": "香水",
                    "slug": "quos-et",
                    "parent_id": 22,
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
    -d '{"name":"nisi","username":"corrupti","password":"delectus","password_confirmation":"enim","code":"dignissimos","captcha_key":"similique","captcha_code":"corrupti","password_question_id":9,"password_answer":"non"}'

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
    "name": "nisi",
    "username": "corrupti",
    "password": "delectus",
    "password_confirmation": "enim",
    "code": "dignissimos",
    "captcha_key": "similique",
    "captcha_code": "corrupti",
    "password_question_id": 9,
    "password_answer": "non"
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
    -G "http://store.wutang.com/api/user_question?username=culpa" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_question"
);

let params = {
    "username": "culpa",
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
        "username": "culpa"
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
    -d '{"username":"repudiandae","password":"perferendis"}'

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
    "username": "repudiandae",
    "password": "perferendis"
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
    "http://store.wutang.com/api/password_reset?username=mollitia&password_question_id=iure&password_answer=optio&password=quod&password_confirmation=consequatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/password_reset"
);

let params = {
    "username": "mollitia",
    "password_question_id": "iure",
    "password_answer": "optio",
    "password": "quod",
    "password_confirmation": "consequatur",
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
    -d '{"oldPassword":"autem","newPassword":"fugit","newPassword_confirmation":"aut"}'

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
    "newPassword": "fugit",
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
    -G "http://store.wutang.com/api/orders?page=tempora&page_limit=odit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/orders"
);

let params = {
    "page": "tempora",
    "page_limit": "odit",
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
    -G "http://store.wutang.com/api/order_details/1?no=distinctio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/order_details/1"
);

let params = {
    "no": "distinctio",
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
    -d '{"address_id":"et","remark":"laborum"}'

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
    "address_id": "et",
    "remark": "laborum"
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
    -d '{"no":19}'

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
    "no": 19
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
                "product_category_id": 5,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "odio ex reiciendis",
                "thumbnail": "http:\/\/ww2.sinaimg.cn\/large\/7a8aed7bgw1etwa7ayf35j20j60csmzb.jpg",
                "slug": "eos-molestiae",
                "short_description": "Perspiciatis in accusamus possimus.",
                "short_description_en": "Pariatur aperiam aut incidunt dolorum est. Iure perferendis laboriosam voluptas labore.",
                "price": "6035.00",
                "sale_price": "0.01",
                "stock": 954,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "odit et voluptates",
                "seo_keyword": "hic",
                "seo_description": "Eligendi labore harum beatae.",
                "benefit": "Quasi optio sunt maiores deleniti. Repellendus qui et sed tempore est et fugit. Non quae molestias quae sint. Assumenda eum vero voluptas reprehenderit.",
                "benefit_en": "Culpa facilis voluptatum dolor vero ea vero velit. Laboriosam modi quod quibusdam doloremque voluptas. Est dolores rem quis et voluptatem. Nulla aut magni laboriosam nam ut quod nulla.",
                "tech_description": "Ullam qui doloremque aut eos. Tempora fuga aspernatur illum. Atque beatae qui voluptas architecto aut itaque veritatis. Natus aspernatur et consequatur labore distinctio excepturi.",
                "tech_description_en": "Saepe veritatis delectus dolorum consectetur quidem reprehenderit odit. Sed ipsum sed sint molestiae fugiat. Qui inventore et temporibus velit.",
                "description": "Tempora doloribus quo animi labore laborum et. Consequatur aut delectus deserunt voluptas eum.",
                "description_en": "Et suscipit libero nam animi tempora officiis. Omnis et ad voluptatibus molestias. Impedit est nihil facere dolor.",
                "usage": "Eos commodi voluptatem similique et. Est eaque voluptatem esse dolores saepe molestiae. Ut necessitatibus et facilis harum corrupti est.",
                "usage_en": "Sed sit expedita similique dolores consequatur. Dicta perspiciatis debitis est soluta. Omnis ipsam non est eius.",
                "main_image": "http:\/\/7xi8d6.com1.z0.glb.clouddn.com\/2017-04-27-17934080_117414798808566_8957027985114791936_n.jpg?imageslim",
                "main_image_2": "http:\/\/ww2.sinaimg.cn\/large\/7a8aed7bgw1evshgr5z3oj20hs0qo0vq.jpg",
                "benefit_image": "http:\/\/ww4.sinaimg.cn\/large\/610dc034jw1f550nt5zklj20zk19rtf3.jpg",
                "product_video": null,
                "status": 2,
                "rating": 6.83,
                "sold_count": 2215,
                "review_count": 4161,
                "parent_id": 0,
                "level": 1,
                "created_at": "2020-09-08 17:38:03",
                "updated_at": "2020-09-07 04:07:16",
                "product_category": {
                    "id": 5,
                    "name": "BB霜",
                    "slug": "vel-nobis",
                    "thumbnail": "http:\/\/ww2.sinaimg.cn\/large\/7a8aed7bgw1eutscfcqtcj20dw0i0q4l.jpg",
                    "banner": "http:\/\/ww1.sinaimg.cn\/large\/0065oQSqly1fsoe3k2gkkj30g50niwla.jpg",
                    "title": "quos fugiat nobis",
                    "title_en": "maxime ducimus sed",
                    "sub_title": "ut enim autem",
                    "describe": "Fugit veritatis placeat natus. Saepe qui excepturi voluptatem expedita sit nihil. Eveniet nulla id vero eveniet et quibusdam. Rerum velit quis quisquam sed.",
                    "describe_en": "Molestiae non iure recusandae. Laborum suscipit officia facilis eum et non. Ratione aliquam enim quia iusto esse. Sequi aut quod quae.",
                    "describe_img": "http:\/\/ww1.sinaimg.cn\/large\/7a8aed7bjw1ezzaw04857j20p00gp40w.jpg",
                    "type": 1,
                    "parent_id": 13,
                    "level": 1,
                    "created_at": "2020-09-22 22:50:57",
                    "updated_at": "2020-09-12 12:31:22"
                }
            },
            {
                "id": 2,
                "product_category_id": 9,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "autem in quibusdam",
                "thumbnail": "https:\/\/ws1.sinaimg.cn\/large\/610dc034ly1fj3w0emfcbj20u011iabm.jpg",
                "slug": "repellat-possimus",
                "short_description": "Molestias quibusdam fugiat id magnam distinctio.",
                "short_description_en": "Esse tempore neque corporis animi est. Est error quia sint illo.",
                "price": "4320.00",
                "sale_price": "0.01",
                "stock": 577,
                "spec": "150 ml \/ 2.0 oz",
                "seo_title": "esse quos ducimus",
                "seo_keyword": "omnis",
                "seo_description": "Placeat est assumenda velit qui.",
                "benefit": "Quo similique molestias quisquam odio. In fuga et tempore enim iusto perferendis eaque mollitia. Quis vel et suscipit. Voluptatem explicabo nulla vero temporibus quia.",
                "benefit_en": "Alias illo atque alias laboriosam voluptatibus pariatur voluptatibus aut. Non quo et delectus nostrum quo eaque sunt. Quod sed earum corporis autem eius perspiciatis hic. Est harum architecto soluta enim facere explicabo magni.",
                "tech_description": "Voluptatem omnis reprehenderit ut reiciendis magnam. Et saepe non tenetur. Dolores culpa eos dolores corporis et enim eligendi. Ad laudantium expedita ipsum saepe voluptatem eveniet natus.",
                "tech_description_en": "Aut laborum sint perspiciatis quia sed porro est. Alias tempora doloribus assumenda soluta. Aliquid totam perferendis assumenda autem. Error animi sed et totam pariatur eos.",
                "description": "Animi et reprehenderit illo cum quidem. Beatae qui eveniet nemo ea rerum nesciunt. Nemo repellat optio officia architecto vel doloremque. Ex iste magni molestias fuga et.",
                "description_en": "Unde aut aut rerum molestiae ullam. Aut at et magnam vel laboriosam eaque repudiandae. Blanditiis repellat dignissimos atque corrupti dolorem qui quidem.",
                "usage": "Eum id quos assumenda soluta. Molestiae voluptatem quia sit omnis iste quo. Libero veniam tempore totam ratione. Id velit veniam dolores unde accusantium commodi iusto dolore.",
                "usage_en": "Recusandae est dicta ut voluptas. Saepe reiciendis autem est nemo nihil. Explicabo quidem qui dolore. Sapiente consectetur eligendi officiis numquam ad in sed. Tempore non optio ut expedita.",
                "main_image": "http:\/\/ww2.sinaimg.cn\/large\/610dc034gw1eubet6h43qj20qo0hsadh.jpg",
                "main_image_2": "https:\/\/ws1.sinaimg.cn\/large\/610dc034ly1fhgsi7mqa9j20ku0kuh1r.jpg",
                "benefit_image": "https:\/\/ws1.sinaimg.cn\/large\/610dc034ly1fh7hwi9lhzj20u011hqa9.jpg",
                "product_video": null,
                "status": 3,
                "rating": 6.45,
                "sold_count": 2078,
                "review_count": 8106,
                "parent_id": 0,
                "level": 1,
                "created_at": "2020-09-09 17:49:27",
                "updated_at": "2020-09-19 08:15:10",
                "product_category": {
                    "id": 9,
                    "name": "BB霜",
                    "slug": "doloribus-aut",
                    "thumbnail": "http:\/\/ww4.sinaimg.cn\/large\/610dc034gw1evi6jh2mllj20gy0bgwf1.jpg",
                    "banner": "http:\/\/ww2.sinaimg.cn\/large\/7a8aed7bgw1euh2zyekn2j20hs0qodje.jpg",
                    "title": "suscipit eos eos",
                    "title_en": "consequuntur minus dolor",
                    "sub_title": "quia veritatis aut",
                    "describe": "Adipisci enim totam commodi labore. Qui itaque debitis vel aut quaerat eveniet officiis. Qui ut iste cumque reprehenderit.",
                    "describe_en": "Dolor dolorem alias laborum ex. Qui dolorum quo facere a dolorem. Velit odit dignissimos pariatur ut. Animi dolor commodi enim est sed. Est fuga et iusto et quibusdam laudantium amet.",
                    "describe_img": "http:\/\/ww1.sinaimg.cn\/large\/7a8aed7bgw1et6yio5s7rj20hs0qogop.jpg",
                    "type": 1,
                    "parent_id": 4,
                    "level": 1,
                    "created_at": "2020-09-09 22:48:41",
                    "updated_at": "2020-09-13 23:32:40"
                }
            },
            {
                "id": 3,
                "product_category_id": 6,
                "product_name": "臻爱铂金",
                "product_name_en": "laborum rerum debitis",
                "thumbnail": "http:\/\/ww2.sinaimg.cn\/large\/610dc034jw1f5s5382uokj20fk0ncmyt.jpg",
                "slug": "adipisci-est",
                "short_description": "Cum soluta vel mollitia voluptatibus.",
                "short_description_en": "Eveniet delectus omnis molestias soluta et qui culpa. Quod reiciendis debitis sequi ex. Libero quas eum odio in voluptas dolores inventore. Recusandae mollitia doloribus rerum.",
                "price": "7579.00",
                "sale_price": "0.01",
                "stock": 47,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "aspernatur ipsam esse",
                "seo_keyword": "et",
                "seo_description": "Consequatur aliquid velit vitae corrupti est.",
                "benefit": "Sed id exercitationem corrupti. Non sunt aut nam. Eligendi mollitia in necessitatibus veniam consectetur. Aliquid ad animi nobis sed aut.",
                "benefit_en": "Perferendis magnam aut inventore non mollitia laudantium. Doloribus ex magni esse eum saepe nemo necessitatibus hic. Autem fugit laborum eligendi quos et quidem.",
                "tech_description": "Nisi qui adipisci voluptas. Rerum id totam quod voluptatem non veritatis. Enim consectetur sed natus minus ea. Velit adipisci officiis cum qui.",
                "tech_description_en": "Aut saepe veritatis ducimus vel doloribus et quia. Quis vel ut possimus reprehenderit amet ab et similique. Iste illo vel quod magni magni harum voluptatibus. Minus a itaque voluptatibus consequatur sequi soluta. Ea pariatur molestiae tempore fugit.",
                "description": "Est temporibus laboriosam rerum rerum. Et sint numquam qui. Ea nam et qui est aut quis voluptas.",
                "description_en": "Libero nam dolores reprehenderit aliquid. Totam omnis dolorem enim atque qui. Architecto quisquam dolore rerum alias autem qui qui.",
                "usage": "Qui reiciendis animi odit iusto reiciendis natus fugit. Et quis non voluptatum aspernatur blanditiis illo. Atque quod iste rerum in perspiciatis possimus sequi. Perferendis ratione ut rerum voluptatem quisquam dolor est. Ipsum reiciendis velit voluptas saepe eveniet.",
                "usage_en": "Eos adipisci amet aut in laboriosam praesentium nam qui. Perferendis eum repellat sed voluptatem quia ut. Ipsum qui qui et nemo corporis quas. Porro quo a cupiditate nulla rem velit quasi excepturi.",
                "main_image": "http:\/\/ww2.sinaimg.cn\/large\/7a8aed7bjw1exng5dd728j20go0m877n.jpg",
                "main_image_2": "http:\/\/ww1.sinaimg.cn\/large\/7a8aed7bjw1exvmxmy36wj20ru114gqq.jpg",
                "benefit_image": "http:\/\/ww2.sinaimg.cn\/large\/7a8aed7bjw1exfffnlf2gj20hq0qoju9.jpg",
                "product_video": null,
                "status": 2,
                "rating": 8.58,
                "sold_count": 9630,
                "review_count": 7247,
                "parent_id": 0,
                "level": 1,
                "created_at": "2020-09-08 07:44:04",
                "updated_at": "2020-09-29 05:14:33",
                "product_category": {
                    "id": 6,
                    "name": "面膜",
                    "slug": "et-enim",
                    "thumbnail": "https:\/\/ws1.sinaimg.cn\/large\/0065oQSqgy1fy58bi1wlgj30sg10hguu.jpg",
                    "banner": "http:\/\/ww3.sinaimg.cn\/large\/7a8aed7bjw1ex9nm11pbnj20hs0qo0u2.jpg",
                    "title": "asperiores assumenda quod",
                    "title_en": "vel autem dolores",
                    "sub_title": "nemo culpa incidunt",
                    "describe": "Aut necessitatibus labore non esse veniam ipsam. Soluta eos ad nam rerum assumenda saepe sed aut. Asperiores amet magni nostrum dolore deleniti. Excepturi ratione non et omnis et.",
                    "describe_en": "Quod alias eum et est consequatur impedit dolor. Tenetur aperiam numquam assumenda suscipit dolores. Cumque corrupti sunt ratione eos. Sunt facere corporis quidem.",
                    "describe_img": "https:\/\/ws1.sinaimg.cn\/large\/0065oQSqly1fuo54a6p0uj30sg0zdqnf.jpg",
                    "type": 1,
                    "parent_id": 23,
                    "level": 1,
                    "created_at": "2020-09-22 07:25:29",
                    "updated_at": "2020-09-05 17:33:47"
                }
            },
            {
                "id": 4,
                "product_category_id": 10,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "fugit asperiores nisi",
                "thumbnail": "http:\/\/7xi8d6.com1.z0.glb.clouddn.com\/2017-10-31-nozomisasaki_official_31_10_2017_10_49_17_24.jpg",
                "slug": "distinctio-et",
                "short_description": "Non eligendi id odit.",
                "short_description_en": "Nisi occaecati et inventore non nihil voluptatibus. Blanditiis in magnam voluptas sequi voluptas numquam. Ea animi natus veniam est et qui.",
                "price": "5115.00",
                "sale_price": "0.01",
                "stock": 320,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "accusamus voluptas corporis",
                "seo_keyword": "voluptas",
                "seo_description": "Sed et totam et id eos.",
                "benefit": "Tempore facilis omnis est ipsum. Repellendus sit vero aut unde nisi dolorum. Assumenda quo ipsum quia exercitationem dignissimos. Sunt repellat fuga voluptatem aliquam tempore in enim. Aut necessitatibus sequi similique deserunt et ea.",
                "benefit_en": "Vitae reprehenderit et voluptatem nemo cum debitis deserunt. Et totam voluptatem ipsam ullam qui ex quos. Sint sit et quis ut doloremque voluptas.",
                "tech_description": "Inventore cupiditate sit qui quas inventore. Id voluptatem maxime in quia. Maxime iusto dolor et doloremque aut. Assumenda est est culpa magni quis.",
                "tech_description_en": "Hic est velit ea. Voluptatem autem voluptatum aut quis neque explicabo. Provident hic harum accusantium.",
                "description": "Ut quo sed ab quia iure. Dolor aut odio eaque qui porro harum ipsa sunt. Consequuntur voluptatem vitae vel consequatur porro autem nemo. Commodi quaerat enim molestiae animi itaque rerum modi.",
                "description_en": "Quia nam et a in voluptatem temporibus dolorem. Praesentium excepturi sit voluptatem quo eos molestiae. Recusandae velit nemo ut dolores distinctio. Similique occaecati fugit nobis sed.",
                "usage": "Non sunt optio dolorem fugiat autem possimus quo explicabo. Voluptatem nam consequatur laborum ducimus velit eum. Ratione est voluptatem inventore ratione voluptas debitis. Perspiciatis laudantium voluptatibus sit sint rerum.",
                "usage_en": "Quia quo minus illum error cum. Veritatis consequatur dolor non iure veniam voluptas. Optio dolores alias voluptatum omnis nemo laborum. Alias voluptatibus fuga iure eaque ullam ullam sapiente.",
                "main_image": "http:\/\/7xi8d6.com1.z0.glb.clouddn.com\/2017-03-15-17126482_115753765623699_4225645012014071808_n.jpg",
                "main_image_2": "https:\/\/ws1.sinaimg.cn\/large\/610dc034ly1fjppsiclufj20u011igo5.jpg",
                "benefit_image": "http:\/\/ww3.sinaimg.cn\/large\/610dc034jw1f9rc3qcfm1j20u011hmyk.jpg",
                "product_video": null,
                "status": 1,
                "rating": 4.58,
                "sold_count": 8152,
                "review_count": 4475,
                "parent_id": 1,
                "level": 2,
                "created_at": "2020-09-09 11:48:39",
                "updated_at": "2020-09-05 21:56:51",
                "product_category": {
                    "id": 10,
                    "name": "香水",
                    "slug": "quos-et",
                    "thumbnail": "http:\/\/ww2.sinaimg.cn\/large\/610dc034jw1f5s5382uokj20fk0ncmyt.jpg",
                    "banner": "http:\/\/ww4.sinaimg.cn\/large\/7a8aed7bjw1f1xad7meu2j20dw0ku0vj.jpg",
                    "title": "minus numquam nemo",
                    "title_en": "dicta nihil inventore",
                    "sub_title": "nihil adipisci adipisci",
                    "describe": "Quidem nihil ipsum numquam libero qui veritatis molestiae. Iusto ut sequi voluptas ipsa harum. Illo tempora magnam perferendis id adipisci delectus aut. Doloribus quod enim facere amet.",
                    "describe_en": "Quia ut maiores voluptatibus et voluptatem dolor ducimus est. Sunt cumque voluptatibus sed praesentium itaque. Voluptatum labore qui ex. Nemo sit consequatur iste dolor quasi.",
                    "describe_img": "http:\/\/7xi8d6.com1.z0.glb.clouddn.com\/2017-04-06-17493825_1061197430652762_1457834104966873088_n.jpg",
                    "type": 1,
                    "parent_id": 22,
                    "level": 1,
                    "created_at": "2020-09-10 05:37:45",
                    "updated_at": "2020-09-18 13:34:26"
                }
            },
            {
                "id": 5,
                "product_category_id": 1,
                "product_name": "黑钻焕肤水",
                "product_name_en": "voluptatem voluptatibus rem",
                "thumbnail": "http:\/\/ww4.sinaimg.cn\/large\/610dc034jw1f550nt5zklj20zk19rtf3.jpg",
                "slug": "praesentium-repellat",
                "short_description": "Aperiam ex laborum ea.",
                "short_description_en": "Sequi nihil cupiditate mollitia perferendis consectetur. Eaque aspernatur soluta est culpa. Laborum aut et incidunt aut quaerat.",
                "price": "8834.00",
                "sale_price": "0.01",
                "stock": 437,
                "spec": "150 ml \/ 2.0 oz",
                "seo_title": "molestiae quo vel",
                "seo_keyword": "eum",
                "seo_description": "Quis animi labore omnis est ab.",
                "benefit": "Quaerat repudiandae aliquid eum qui sit qui nostrum. Neque sit perspiciatis at architecto.",
                "benefit_en": "Necessitatibus quasi cupiditate beatae sed. Aspernatur alias aut voluptatem eaque dolor. Quisquam est nesciunt a aut et. Dicta optio dolorum atque veritatis labore. Iusto sit fugit pariatur id aut.",
                "tech_description": "Repellat architecto molestiae vel molestiae. Est magnam dolores delectus ullam quam. Excepturi voluptate quisquam quidem culpa adipisci assumenda.",
                "tech_description_en": "Sit omnis ut ex quisquam aspernatur repellat voluptas. Asperiores architecto qui vitae perferendis quae laudantium. Atque corrupti corporis laboriosam sed facilis error.",
                "description": "Dicta laborum accusamus sunt totam. Quo commodi veritatis quo expedita omnis ut sapiente distinctio. Non sint quidem recusandae perferendis incidunt fugiat cupiditate. Voluptatum quasi molestiae ut iusto nesciunt illo.",
                "description_en": "Laborum voluptatum debitis eaque natus maxime aperiam sint. Quod amet autem animi vel sit qui. Voluptatem quae aperiam ex.",
                "usage": "Voluptatem ab omnis iste voluptatem qui ratione enim in. Vel pariatur nostrum distinctio ex et vitae et enim. Quae doloribus doloremque est alias. Error ipsum ad sed nihil perspiciatis tenetur perferendis.",
                "usage_en": "Quibusdam quia a sed atque tempora. Quo voluptate est reprehenderit tempora. Quae nulla aut molestiae eveniet autem omnis molestiae. Iste eveniet cupiditate perspiciatis debitis esse iure non.",
                "main_image": "http:\/\/7xi8d6.com1.z0.glb.clouddn.com\/2017-03-02-17077393_314135475655975_7855162741030387712_n.jpg",
                "main_image_2": "http:\/\/ww3.sinaimg.cn\/large\/610dc034jw1f9tmhxq87lj20u011htae.jpg",
                "benefit_image": "http:\/\/ww2.sinaimg.cn\/large\/610dc034jw1f7y296c5taj20u00u0tay.jpg",
                "product_video": null,
                "status": 2,
                "rating": 3.85,
                "sold_count": 5464,
                "review_count": 7172,
                "parent_id": 1,
                "level": 2,
                "created_at": "2020-09-23 02:49:37",
                "updated_at": "2020-09-10 17:37:08",
                "product_category": {
                    "id": 1,
                    "name": "隔离",
                    "slug": "temporibus-sint",
                    "thumbnail": "http:\/\/7xi8d6.com1.z0.glb.clouddn.com\/2017-02-09-16583339_172818256542563_353855393375453184_n.jpg",
                    "banner": "https:\/\/ws1.sinaimg.cn\/large\/610dc034ly1fjppsiclufj20u011igo5.jpg",
                    "title": "natus optio ea",
                    "title_en": "a consequatur dolorem",
                    "sub_title": "possimus consectetur totam",
                    "describe": "Perferendis eos ullam autem culpa. Dolores adipisci est consequatur doloribus eius aliquid. Cumque illo ad maiores qui debitis.",
                    "describe_en": "Et consectetur rerum quasi impedit. Excepturi aliquam omnis placeat eum et eaque nulla illum. Est quos et enim et a facere voluptatem quibusdam.",
                    "describe_img": "https:\/\/ww1.sinaimg.cn\/large\/0065oQSqly1ft5q7ys128j30sg10gnk5.jpg",
                    "type": 1,
                    "parent_id": 11,
                    "level": 1,
                    "created_at": "2020-09-29 07:18:20",
                    "updated_at": "2020-09-07 00:31:18"
                }
            },
            {
                "id": 6,
                "product_category_id": 3,
                "product_name": "亮颜修护",
                "product_name_en": "aperiam quia cum",
                "thumbnail": "http:\/\/ww1.sinaimg.cn\/large\/610dc034jw1f867mvc6qjj20u00u0wh7.jpg",
                "slug": "id-nobis",
                "short_description": "Dolorem odio est saepe quae.",
                "short_description_en": "Eius labore nam quis consequatur nulla dicta optio voluptas. Et autem rerum ea eos. Molestiae suscipit necessitatibus tenetur qui placeat quisquam.",
                "price": "7131.00",
                "sale_price": "0.01",
                "stock": 195,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "voluptas est dolores",
                "seo_keyword": "nesciunt",
                "seo_description": "Ipsum mollitia expedita quo qui sed voluptas.",
                "benefit": "Fugit et dolores dolor itaque accusamus qui et. Facilis ut quod quaerat ipsa et corporis laboriosam. Voluptatem eum et autem ratione ipsa et est sunt. Provident magnam inventore eum deleniti enim ut.",
                "benefit_en": "Voluptas enim cumque omnis ut tenetur. Alias ipsum et minima commodi. Temporibus ducimus omnis delectus doloremque dolor quam est et. Commodi harum autem doloremque eos corrupti qui quidem. Quia libero et unde error.",
                "tech_description": "Exercitationem doloremque repellendus et rerum repellendus expedita officiis. Est ut rem pariatur exercitationem non. Doloremque nesciunt debitis laborum qui.",
                "tech_description_en": "Impedit quis iure aut veritatis. Ducimus ad repellat itaque non est. Nihil vero doloremque porro ut. Cupiditate est velit quos cumque earum.",
                "description": "Necessitatibus et hic quis. Natus pariatur consequatur sequi quis nisi necessitatibus harum minus.",
                "description_en": "Architecto consequatur omnis est dolores ipsam ea. Aliquid est velit magnam odio quia cum. Optio quis beatae quia et.",
                "usage": "Quod est temporibus molestias quia est. Velit minima nihil voluptatum et quisquam eveniet. Molestias cupiditate quos qui exercitationem reprehenderit numquam. Incidunt facere aliquid voluptatibus perspiciatis quia modi at.",
                "usage_en": "At unde quia error earum aliquid. Repudiandae quibusdam non illo id architecto. Nam dolorem ad nesciunt.",
                "main_image": "https:\/\/img.lijinshan.site\/images\/38ddf2ca672345889343b5748ffce78d",
                "main_image_2": "http:\/\/ww4.sinaimg.cn\/large\/7a8aed7bgw1et6yixp4gdj20qo0hsjul.jpg",
                "benefit_image": "https:\/\/ws1.sinaimg.cn\/large\/610dc034gy1fi2okd7dtjj20u011h40b.jpg",
                "product_video": null,
                "status": 1,
                "rating": 0.45,
                "sold_count": 7243,
                "review_count": 8099,
                "parent_id": 1,
                "level": 2,
                "created_at": "2020-09-18 11:38:46",
                "updated_at": "2020-09-06 03:59:39",
                "product_category": {
                    "id": 3,
                    "name": "香水",
                    "slug": "pariatur-neque",
                    "thumbnail": "http:\/\/ww4.sinaimg.cn\/large\/610dc034jw1fbffqo6jjoj20u011hgpx.jpg",
                    "banner": "http:\/\/7xi8d6.com1.z0.glb.clouddn.com\/20171113084220_LuJgqv_sakura.gun_13_11_2017_8_42_12_311.jpeg",
                    "title": "ea quia est",
                    "title_en": "inventore fuga maiores",
                    "sub_title": "animi magni qui",
                    "describe": "Et est exercitationem hic illo. Ut et sint temporibus est eius. In dignissimos sed soluta quaerat et. Sunt quia laborum officia.",
                    "describe_en": "Dignissimos mollitia quae labore facilis id magnam ut. Doloribus quidem magni libero. Provident harum ab animi aspernatur molestiae.",
                    "describe_img": "http:\/\/ww4.sinaimg.cn\/large\/610dc034jw1f6uv5gbsa9j20u00qxjt6.jpg",
                    "type": 1,
                    "parent_id": 13,
                    "level": 1,
                    "created_at": "2020-10-02 18:55:58",
                    "updated_at": "2020-10-01 05:23:19"
                }
            },
            {
                "id": 7,
                "product_category_id": 2,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "eum assumenda et",
                "thumbnail": "http:\/\/ww3.sinaimg.cn\/large\/610dc034gw1fb558z2peqj20u00u00v9.jpg",
                "slug": "qui-quisquam",
                "short_description": "Dolor et similique odit nulla dolorem et.",
                "short_description_en": "Non quis cumque quia. Maxime ducimus dicta rerum nemo qui. Accusamus quia deserunt qui veritatis et placeat.",
                "price": "2636.00",
                "sale_price": "0.01",
                "stock": 139,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "tempore cupiditate doloribus",
                "seo_keyword": "tempore",
                "seo_description": "Quia quidem provident et deserunt.",
                "benefit": "Odit unde voluptatum eos quibusdam. Facere mollitia impedit nemo consequatur voluptatum officiis. Rerum tempore molestias saepe atque beatae ratione et. Nihil sequi aut accusantium vitae pariatur deserunt.",
                "benefit_en": "Natus nulla placeat earum. Ut fugit autem ut amet. Assumenda sed necessitatibus et. Quibusdam provident nulla deleniti et.",
                "tech_description": "Quasi distinctio error id cum neque. Voluptas accusantium corrupti odio molestiae numquam dolor consequuntur possimus. Inventore tempore aut esse autem sapiente. Provident sed et explicabo quisquam deleniti.",
                "tech_description_en": "Nobis voluptas quos ullam qui eligendi non minima. Blanditiis ut sit cupiditate. Cupiditate error et quos iure.",
                "description": "Facilis doloremque doloremque maiores architecto repudiandae. Sapiente cumque eos eum velit ea. Ab excepturi dolorum in perspiciatis facilis. Tempore reprehenderit quo qui est est quam eos.",
                "description_en": "Voluptas ut id dolor aliquam. Eveniet et sit corrupti sunt est facilis.",
                "usage": "Possimus id consectetur omnis quibusdam excepturi dolorem. Facere excepturi dolorem voluptatem incidunt voluptatibus eaque. Voluptate voluptates quis autem enim repellat cupiditate earum.",
                "usage_en": "Cumque et ut aut. Aliquam unde doloremque ex et error qui et. Reiciendis qui quis culpa. Inventore hic eaque sint odit debitis aut.",
                "main_image": "http:\/\/ww1.sinaimg.cn\/large\/0065oQSqly1fsp4iok6o4j30j60optbl.jpg",
                "main_image_2": "https:\/\/img.lijinshan.site\/images\/65a4da36c01b4835b2327c47523d2a2c",
                "benefit_image": "http:\/\/ww3.sinaimg.cn\/large\/7a8aed7bgw1etv4f9fro4j20hs0qowg6.jpg",
                "product_video": null,
                "status": 1,
                "rating": 5.58,
                "sold_count": 8135,
                "review_count": 7788,
                "parent_id": 2,
                "level": 2,
                "created_at": "2020-09-23 21:38:25",
                "updated_at": "2020-09-25 08:20:23",
                "product_category": {
                    "id": 2,
                    "name": "腮红",
                    "slug": "explicabo-harum",
                    "thumbnail": "http:\/\/ww1.sinaimg.cn\/large\/610dc034gw1fb6aqccs3nj20u00u0wk4.jpg",
                    "banner": "http:\/\/ww3.sinaimg.cn\/large\/7a8aed7bgw1eswencfur6j20hq0qodhs.jpg",
                    "title": "molestias rerum error",
                    "title_en": "temporibus ut molestias",
                    "sub_title": "labore dolore et",
                    "describe": "Debitis ut suscipit et unde a maiores dolore. Et fugiat eaque iusto. Ipsam sed qui voluptates et in tempore. Aliquam atque itaque nobis quam expedita porro nihil.",
                    "describe_en": "Cumque nihil debitis eius nemo ex facere odit at. Temporibus ut voluptas expedita quisquam laboriosam eveniet et.",
                    "describe_img": "http:\/\/ww1.sinaimg.cn\/large\/610dc034gw1ewy18hibdij20dw0kuq5z.jpg",
                    "type": 1,
                    "parent_id": 8,
                    "level": 1,
                    "created_at": "2020-09-05 21:38:19",
                    "updated_at": "2020-09-25 09:51:35"
                }
            },
            {
                "id": 8,
                "product_category_id": 3,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "ut nulla nihil",
                "thumbnail": "http:\/\/7xi8d6.com1.z0.glb.clouddn.com\/2017-04-07-17817932_274034076387428_5240190736292380672_n.jpg",
                "slug": "quis-quia",
                "short_description": "Sint a ut culpa voluptatum veniam ea.",
                "short_description_en": "Placeat et repellat quia tenetur aut. Reprehenderit aut rem esse veniam. Ut numquam nulla in vel quam neque. Quo officiis vero et ut.",
                "price": "5426.00",
                "sale_price": "0.01",
                "stock": 876,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "aut explicabo ducimus",
                "seo_keyword": "maxime",
                "seo_description": "Aspernatur maxime ea est sit repellendus in.",
                "benefit": "Ut fuga unde odio totam temporibus ut. Distinctio ut sunt quam voluptates dolorem. Et et fugiat odio temporibus et est. Voluptas ad itaque officia ipsa animi qui non.",
                "benefit_en": "Repellat est et excepturi ut maxime. Qui ut accusantium et.",
                "tech_description": "Dolorem enim omnis fugit rerum modi doloribus. Aliquid explicabo officia error voluptas eligendi quisquam sequi est. Error quos quibusdam magni recusandae non harum repellendus. Quidem in molestiae ut qui.",
                "tech_description_en": "Dolor magnam fuga quisquam accusantium soluta quo. Eligendi rerum ab iure veniam voluptatem minima sunt. Delectus ex sint porro sed.",
                "description": "Labore occaecati illo velit iure animi consequatur quaerat. Ex dolorum facere fugiat dolores sit voluptatem et. Cumque eligendi dolores consectetur velit est.",
                "description_en": "Quia quibusdam ipsum cupiditate dolores at enim a. Quas sunt voluptas qui odio in.",
                "usage": "Saepe dolores unde quia assumenda eaque itaque. Incidunt sit sunt quia culpa iure omnis ad.",
                "usage_en": "Quo suscipit omnis commodi. Eaque aut nisi quidem quasi dignissimos nihil beatae beatae. Nihil consequatur architecto debitis beatae.",
                "main_image": "http:\/\/ww4.sinaimg.cn\/large\/7a8aed7bjw1ey3ptkta45j20hs0qomzy.jpg",
                "main_image_2": "http:\/\/ww3.sinaimg.cn\/large\/610dc034jw1f5t889dhpoj20f00mi414.jpg",
                "benefit_image": "http:\/\/ww3.sinaimg.cn\/large\/610dc034jw1f740f701gqj20u011hgo9.jpg",
                "product_video": null,
                "status": 2,
                "rating": 9.03,
                "sold_count": 5013,
                "review_count": 8884,
                "parent_id": 2,
                "level": 2,
                "created_at": "2020-10-05 07:20:00",
                "updated_at": "2020-09-09 09:32:01",
                "product_category": {
                    "id": 3,
                    "name": "香水",
                    "slug": "pariatur-neque",
                    "thumbnail": "http:\/\/ww4.sinaimg.cn\/large\/610dc034jw1fbffqo6jjoj20u011hgpx.jpg",
                    "banner": "http:\/\/7xi8d6.com1.z0.glb.clouddn.com\/20171113084220_LuJgqv_sakura.gun_13_11_2017_8_42_12_311.jpeg",
                    "title": "ea quia est",
                    "title_en": "inventore fuga maiores",
                    "sub_title": "animi magni qui",
                    "describe": "Et est exercitationem hic illo. Ut et sint temporibus est eius. In dignissimos sed soluta quaerat et. Sunt quia laborum officia.",
                    "describe_en": "Dignissimos mollitia quae labore facilis id magnam ut. Doloribus quidem magni libero. Provident harum ab animi aspernatur molestiae.",
                    "describe_img": "http:\/\/ww4.sinaimg.cn\/large\/610dc034jw1f6uv5gbsa9j20u00qxjt6.jpg",
                    "type": 1,
                    "parent_id": 13,
                    "level": 1,
                    "created_at": "2020-10-02 18:55:58",
                    "updated_at": "2020-10-01 05:23:19"
                }
            },
            {
                "id": 9,
                "product_category_id": 2,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "dolor qui consequatur",
                "thumbnail": "http:\/\/ac-OLWHHM4o.clouddn.com\/DPCY44vIYPjVPKNzfHjMdXd9bk27q0i1X2nIaO8Z",
                "slug": "repudiandae-ut",
                "short_description": "Velit officiis non aut voluptatibus modi.",
                "short_description_en": "Itaque recusandae magnam quaerat velit alias quo. Et et labore dolorem ipsa. Ea totam aut dignissimos nisi maxime quibusdam.",
                "price": "7170.00",
                "sale_price": "0.01",
                "stock": 720,
                "spec": "30 ml \/ 1.0 oz.",
                "seo_title": "incidunt quae illum",
                "seo_keyword": "neque",
                "seo_description": "Magnam ipsum soluta nemo officiis hic.",
                "benefit": "Deserunt voluptas expedita animi corrupti sed quas. Deserunt incidunt similique nisi excepturi similique voluptas. Explicabo dolor aut accusamus sed quaerat.",
                "benefit_en": "Qui praesentium possimus magnam ut quo voluptates omnis. Necessitatibus ea est enim aut velit dolor. Esse porro repellendus deleniti id dolor illo omnis.",
                "tech_description": "Blanditiis reiciendis et pariatur quia fugiat. Autem aut illum cum velit et. Nulla soluta voluptatem sit quas fugit laboriosam tenetur. Repellendus nobis aliquid cumque corrupti atque.",
                "tech_description_en": "Magni dolorem in sunt quia qui vitae. Quis voluptas earum similique dolor. Saepe optio molestias est optio velit. Veritatis et voluptas nulla aut voluptates. Ut expedita facere in aut.",
                "description": "Dolorem tempora ratione sit cumque doloribus et. Nam et consectetur quia tempore quam ut. Delectus et qui facere sunt.",
                "description_en": "Beatae ut velit laborum in aliquam omnis. Quae ut quaerat quos quidem sint occaecati est et. Ducimus et non quod rerum qui sint autem sapiente. Quod iure incidunt quia fugiat quia.",
                "usage": "Eos hic sed exercitationem reiciendis ut et. Cupiditate est alias delectus doloribus ut. Officia molestiae incidunt ut non et voluptate. Possimus velit excepturi minima enim natus rerum sed.",
                "usage_en": "Cupiditate ut et rerum ut ut molestiae quae. Quos nisi nesciunt consequatur accusamus. Quae ut dolorem neque commodi neque dolor asperiores. Non sint qui itaque qui quibusdam deserunt quo. Est sint enim quaerat aperiam est soluta eveniet omnis.",
                "main_image": "http:\/\/ww3.sinaimg.cn\/large\/7a8aed7bjw1ezbriom623j20hs0qoadv.jpg",
                "main_image_2": "http:\/\/ww2.sinaimg.cn\/large\/7a8aed7bjw1f3c7zc3y3rj20rt15odmp.jpg",
                "benefit_image": "http:\/\/ww4.sinaimg.cn\/large\/610dc034jw1f3zen8idmkj20dw0kun0i.jpg",
                "product_video": null,
                "status": 3,
                "rating": 5.41,
                "sold_count": 5853,
                "review_count": 3080,
                "parent_id": 2,
                "level": 2,
                "created_at": "2020-09-27 07:16:29",
                "updated_at": "2020-09-16 22:26:52",
                "product_category": {
                    "id": 2,
                    "name": "腮红",
                    "slug": "explicabo-harum",
                    "thumbnail": "http:\/\/ww1.sinaimg.cn\/large\/610dc034gw1fb6aqccs3nj20u00u0wk4.jpg",
                    "banner": "http:\/\/ww3.sinaimg.cn\/large\/7a8aed7bgw1eswencfur6j20hq0qodhs.jpg",
                    "title": "molestias rerum error",
                    "title_en": "temporibus ut molestias",
                    "sub_title": "labore dolore et",
                    "describe": "Debitis ut suscipit et unde a maiores dolore. Et fugiat eaque iusto. Ipsam sed qui voluptates et in tempore. Aliquam atque itaque nobis quam expedita porro nihil.",
                    "describe_en": "Cumque nihil debitis eius nemo ex facere odit at. Temporibus ut voluptas expedita quisquam laboriosam eveniet et.",
                    "describe_img": "http:\/\/ww1.sinaimg.cn\/large\/610dc034gw1ewy18hibdij20dw0kuq5z.jpg",
                    "type": 1,
                    "parent_id": 8,
                    "level": 1,
                    "created_at": "2020-09-05 21:38:19",
                    "updated_at": "2020-09-25 09:51:35"
                }
            },
            {
                "id": 10,
                "product_category_id": 8,
                "product_name": "黑钻肌光精华",
                "product_name_en": "culpa commodi ea",
                "thumbnail": "http:\/\/ww4.sinaimg.cn\/large\/610dc034jw1favb116hm2j20u00u0gqi.jpg",
                "slug": "minus-maiores",
                "short_description": "Vel doloribus dolores voluptas exercitationem.",
                "short_description_en": "Illo ut pariatur ab tenetur recusandae quia voluptatem. Facere aut corrupti tempore enim sit sequi omnis. Est consequuntur eos expedita repudiandae aut aut voluptas. Vel aut qui qui velit.",
                "price": "2762.00",
                "sale_price": "0.01",
                "stock": 112,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "aut eius eaque",
                "seo_keyword": "officiis",
                "seo_description": "Necessitatibus ipsa suscipit est quia qui.",
                "benefit": "Et dolor voluptatem officia ut est repellendus similique. Id voluptates molestiae cumque ut et ut expedita consequatur.",
                "benefit_en": "Non veritatis repellendus maxime mollitia perspiciatis. Voluptas aperiam necessitatibus odit ad. Asperiores quidem aut et tempora ea distinctio. Hic quia nihil et.",
                "tech_description": "Enim officiis vel nihil pariatur. Beatae culpa alias voluptas quia iusto. Accusamus qui nostrum tempore tempora. Voluptas et ab dolorem cumque. Excepturi aliquid autem natus doloremque sint et repellat vel.",
                "tech_description_en": "Omnis beatae ipsa facere nihil. Vel perspiciatis porro maxime necessitatibus vitae voluptatem officia. Incidunt qui aspernatur ut explicabo nam vel.",
                "description": "Facilis rerum voluptatem sed asperiores ut. Sunt labore ut facilis maiores autem. Voluptatem dignissimos odit rerum et. Eaque accusamus cumque asperiores sed reiciendis.",
                "description_en": "Officia expedita non sit ea in et. In reprehenderit itaque nemo est. Fugit nisi in sit quidem rerum velit. Odit sed sed adipisci unde saepe omnis dolore.",
                "usage": "Quisquam ex fugit eos. Dolorem voluptas libero ad qui in voluptate. Sed sequi voluptatem quo dolorem sapiente aperiam. Assumenda harum eos fugit voluptatem tenetur aut. Explicabo nemo rerum accusamus cupiditate minima ex quas.",
                "usage_en": "Eum et sed eaque placeat. Corrupti ea pariatur doloribus molestiae possimus doloribus. Quisquam architecto sunt error aut eum sed asperiores delectus. In ut similique accusantium ut quibusdam id.",
                "main_image": "http:\/\/ww4.sinaimg.cn\/large\/7a8aed7bjw1f1052bhjauj20f00l6q4o.jpg",
                "main_image_2": "http:\/\/ww3.sinaimg.cn\/large\/7a8aed7bgw1et95oadpnjj20qo0hs0vk.jpg",
                "benefit_image": "http:\/\/7xi8d6.com1.z0.glb.clouddn.com\/16123958_1630476787257847_7576387494862651392_n.jpg",
                "product_video": null,
                "status": 3,
                "rating": 4.97,
                "sold_count": 2415,
                "review_count": 2593,
                "parent_id": 3,
                "level": 2,
                "created_at": "2020-09-08 21:08:48",
                "updated_at": "2020-09-13 21:04:50",
                "product_category": {
                    "id": 8,
                    "name": "彩妆盘",
                    "slug": "dolorem-id",
                    "thumbnail": "http:\/\/7xi8d6.com1.z0.glb.clouddn.com\/2017-02-24-16906635_1749384985376684_7563808952991875072_n.jpg",
                    "banner": "https:\/\/ws1.sinaimg.cn\/large\/610dc034gy1fi678xgq1ij20pa0vlgo4.jpg",
                    "title": "cumque est asperiores",
                    "title_en": "minus qui cupiditate",
                    "sub_title": "iure asperiores sapiente",
                    "describe": "Quia error dignissimos placeat rerum nobis. In qui sit voluptas vel. Voluptas ipsa voluptatem commodi eveniet veritatis numquam dignissimos. Sunt voluptatem doloremque omnis harum.",
                    "describe_en": "Dolorem enim quaerat id necessitatibus nihil sunt dicta. Officiis itaque incidunt ut quo nihil tenetur. Voluptatem distinctio eveniet sit est. Dolores ullam occaecati veniam omnis iure dignissimos.",
                    "describe_img": "http:\/\/ww4.sinaimg.cn\/large\/610dc034jw1f8bc5c5n4nj20u00irgn8.jpg",
                    "type": 1,
                    "parent_id": 28,
                    "level": 1,
                    "created_at": "2020-09-26 04:30:59",
                    "updated_at": "2020-09-29 13:20:46"
                }
            },
            {
                "id": 11,
                "product_category_id": 10,
                "product_name": "亮颜修护",
                "product_name_en": "commodi omnis adipisci",
                "thumbnail": "http:\/\/ww2.sinaimg.cn\/large\/7a8aed7bjw1ezxog636o8j20du0kujsg.jpg",
                "slug": "qui-ipsam",
                "short_description": "Aut et sunt culpa possimus quod.",
                "short_description_en": "Reiciendis sint placeat autem alias voluptatem sequi. Quia voluptatem in nobis voluptatem quam ducimus quas. Qui et voluptas laboriosam voluptatem voluptatem enim.",
                "price": "7892.00",
                "sale_price": "0.01",
                "stock": 290,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "rem aut dolorem",
                "seo_keyword": "dignissimos",
                "seo_description": "Sint temporibus a et veritatis.",
                "benefit": "Minima sint nobis fugit mollitia eligendi quam qui. Asperiores est asperiores sed aliquam sint est magni fugiat. Quo dolorum ad fugit aut.",
                "benefit_en": "Id nulla ut officiis id odit qui ipsum. Et esse et aut autem est est. Recusandae tempora qui quis aliquid. Quia delectus omnis qui blanditiis. Enim qui ut illum.",
                "tech_description": "Deleniti laboriosam excepturi dolor voluptatum sint non iste. Eaque sint ad placeat aut voluptatem amet. Quasi id iure voluptas aut id veritatis.",
                "tech_description_en": "Sed consequatur eos dolor dolorem aut sit asperiores natus. Quisquam odio asperiores odio maiores. Ut laboriosam cupiditate perspiciatis suscipit quod doloribus voluptatum perferendis.",
                "description": "Reprehenderit voluptatem ad autem et corrupti. Velit illo in sapiente esse labore cum recusandae. Iure in aut corporis dicta aut alias.",
                "description_en": "A repellendus eum magnam culpa. Laudantium commodi ex doloribus. Illo quia modi ab fuga. Nemo similique illum assumenda voluptas velit sint sapiente.",
                "usage": "Quisquam quisquam eveniet commodi enim fuga. Hic et hic aut. Iste provident et ad qui.",
                "usage_en": "Est ullam eum ut eum quae fugiat quo laboriosam. Vitae laborum veniam nesciunt at asperiores qui voluptatem mollitia. Maiores ullam non iure aliquid vitae. Quibusdam occaecati at rerum nostrum quaerat et voluptas.",
                "main_image": "http:\/\/ww2.sinaimg.cn\/large\/610dc034jw1f6vyy5a99ej20u011gq87.jpg",
                "main_image_2": "http:\/\/7xi8d6.com1.z0.glb.clouddn.com\/2017-02-27-tumblr_om1aowIoKa1qbw5qso1_540.jpg",
                "benefit_image": "http:\/\/ww2.sinaimg.cn\/large\/610dc034jw1f91ypzqaivj20u00k0jui.jpg",
                "product_video": null,
                "status": 1,
                "rating": 7.92,
                "sold_count": 8706,
                "review_count": 6258,
                "parent_id": 3,
                "level": 2,
                "created_at": "2020-09-30 13:49:28",
                "updated_at": "2020-09-13 14:18:20",
                "product_category": {
                    "id": 10,
                    "name": "香水",
                    "slug": "quos-et",
                    "thumbnail": "http:\/\/ww2.sinaimg.cn\/large\/610dc034jw1f5s5382uokj20fk0ncmyt.jpg",
                    "banner": "http:\/\/ww4.sinaimg.cn\/large\/7a8aed7bjw1f1xad7meu2j20dw0ku0vj.jpg",
                    "title": "minus numquam nemo",
                    "title_en": "dicta nihil inventore",
                    "sub_title": "nihil adipisci adipisci",
                    "describe": "Quidem nihil ipsum numquam libero qui veritatis molestiae. Iusto ut sequi voluptas ipsa harum. Illo tempora magnam perferendis id adipisci delectus aut. Doloribus quod enim facere amet.",
                    "describe_en": "Quia ut maiores voluptatibus et voluptatem dolor ducimus est. Sunt cumque voluptatibus sed praesentium itaque. Voluptatum labore qui ex. Nemo sit consequatur iste dolor quasi.",
                    "describe_img": "http:\/\/7xi8d6.com1.z0.glb.clouddn.com\/2017-04-06-17493825_1061197430652762_1457834104966873088_n.jpg",
                    "type": 1,
                    "parent_id": 22,
                    "level": 1,
                    "created_at": "2020-09-10 05:37:45",
                    "updated_at": "2020-09-18 13:34:26"
                }
            },
            {
                "id": 12,
                "product_category_id": 4,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "quos sapiente consequatur",
                "thumbnail": "https:\/\/ws1.sinaimg.cn\/large\/610dc034gy1fi2okd7dtjj20u011h40b.jpg",
                "slug": "itaque-doloribus",
                "short_description": "Nostrum cupiditate corrupti sunt ab.",
                "short_description_en": "Nam laboriosam error ab. Dolor possimus quaerat cupiditate rerum et eveniet quas.",
                "price": "9414.00",
                "sale_price": "0.01",
                "stock": 541,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "repellendus cupiditate dolore",
                "seo_keyword": "qui",
                "seo_description": "Eos alias nulla quos ullam.",
                "benefit": "Animi sit molestiae minus aut quia dolor occaecati. Iure nostrum est quos voluptas itaque aliquid. Excepturi perspiciatis praesentium qui mollitia. Velit eum rerum fugit voluptas.",
                "benefit_en": "Totam debitis ea architecto aperiam ut beatae sed. Error quia ut iure et animi molestiae quidem. Nulla voluptatum et possimus temporibus quis.",
                "tech_description": "Fugit mollitia labore sunt ipsa nulla. In repellendus voluptatibus earum eum inventore. Error non minima debitis tempora.",
                "tech_description_en": "Error consequuntur perferendis aut. Quia modi ducimus molestiae tempore. Occaecati optio omnis doloribus ratione aut pariatur. Voluptatem provident omnis enim voluptas aut ducimus distinctio.",
                "description": "Est amet nesciunt expedita ut. Vitae laboriosam nostrum aut eos perspiciatis laudantium possimus. Aperiam qui sed ab nisi veniam et.",
                "description_en": "Sequi molestiae tenetur perferendis occaecati est consectetur. Praesentium adipisci sint recusandae animi fugit consequatur reiciendis quia. Nulla id aut non rerum.",
                "usage": "Asperiores iste omnis consectetur qui et et. Aut ut sed itaque modi et et enim commodi. Porro quo dolore iste ea ab ea. Est amet nisi eligendi modi quibusdam adipisci. Tempora eos libero nesciunt cupiditate deserunt itaque sit.",
                "usage_en": "Aut harum qui aut sunt nobis est. Cupiditate commodi et iusto nobis quaerat quam voluptatem nostrum. Eius in excepturi facilis pariatur. Molestiae unde qui quaerat maxime id.",
                "main_image": "http:\/\/ww2.sinaimg.cn\/large\/7a8aed7bjw1f25gtggxqjj20f00b9tb5.jpg",
                "main_image_2": "http:\/\/ww3.sinaimg.cn\/large\/7a8aed7bgw1evljjs3qxlj20go0gmdiu.jpg",
                "benefit_image": "http:\/\/7xi8d6.com1.z0.glb.clouddn.com\/2017-04-19-17881407_1845958195665029_1132383288824954880_n.jpg",
                "product_video": null,
                "status": 1,
                "rating": 4.4,
                "sold_count": 2104,
                "review_count": 9402,
                "parent_id": 3,
                "level": 2,
                "created_at": "2020-09-11 04:42:58",
                "updated_at": "2020-09-29 19:20:53",
                "product_category": {
                    "id": 4,
                    "name": "腮红",
                    "slug": "itaque-iusto",
                    "thumbnail": "http:\/\/7xi8d6.com1.z0.glb.clouddn.com\/2017-03-02-16906481_1495916493759925_5770648570629718016_n.jpg",
                    "banner": "http:\/\/ww1.sinaimg.cn\/large\/610dc034jw1f87z2n2taej20u011h11h.jpg",
                    "title": "est ea magnam",
                    "title_en": "amet ut rem",
                    "sub_title": "aliquam eligendi aut",
                    "describe": "Deleniti impedit ullam nesciunt quisquam officia eos. Ipsum facere veniam maxime modi voluptates et enim. Officia debitis ad reprehenderit ipsam ut a.",
                    "describe_en": "Ipsum odio ut qui et. Sit quia facere aspernatur quam. Nihil aut odio aut aperiam voluptatem perspiciatis et. Similique architecto aliquid veniam in tempora.",
                    "describe_img": "http:\/\/ww1.sinaimg.cn\/large\/7a8aed7bgw1ettzpowndgj216g0s4dkg.jpg",
                    "type": 1,
                    "parent_id": 7,
                    "level": 1,
                    "created_at": "2020-10-03 23:14:55",
                    "updated_at": "2020-09-07 18:22:41"
                }
            },
            {
                "id": 13,
                "product_category_id": 2,
                "product_name": "鱼子精华",
                "product_name_en": "velit id aspernatur",
                "thumbnail": "https:\/\/ws1.sinaimg.cn\/large\/0065oQSqly1g0ajj4h6ndj30sg11xdmj.jpg",
                "slug": "commodi-et",
                "short_description": "Qui qui iure voluptatem non reprehenderit dolore.",
                "short_description_en": "Molestiae impedit sunt ipsa est. Excepturi excepturi delectus illum eos iusto natus vel vero. Sit ratione ea iure est aspernatur id. Voluptas quis aut rem eveniet.",
                "price": "2498.00",
                "sale_price": "0.01",
                "stock": 330,
                "spec": "50 ml \/ 1.7 fl. oz",
                "seo_title": "cupiditate necessitatibus molestiae",
                "seo_keyword": "aperiam",
                "seo_description": "Assumenda ducimus ut iure.",
                "benefit": "Veniam maiores molestiae deserunt. Laudantium veniam ut rem doloribus voluptas. Quas debitis quasi dolores cupiditate deserunt unde. Aliquid inventore explicabo minus sunt quasi est.",
                "benefit_en": "Magni sint et repellendus minus saepe. Ab aliquid rerum qui eligendi dolore laudantium eum molestiae. Voluptatem enim non est numquam. Iure accusantium voluptates ex necessitatibus excepturi.",
                "tech_description": "Similique ex eum adipisci recusandae vel. Explicabo quibusdam libero voluptatum maiores vel est tenetur. Qui sed impedit rerum inventore. Explicabo consequatur perspiciatis tempore inventore sed fugit adipisci.",
                "tech_description_en": "Reprehenderit magnam odio voluptas sint et dolor totam. Animi recusandae aut aut distinctio rerum vero. Numquam consequatur culpa quod veniam dicta sint.",
                "description": "Fugiat dolorem facilis ea consequatur voluptates ut quia. Explicabo ratione a nisi neque veritatis. Saepe est commodi modi amet quia adipisci sed. Quis dignissimos dicta debitis iusto et nisi.",
                "description_en": "Suscipit maiores qui unde minima. Et magni sunt nihil facilis.",
                "usage": "Dolorum id et velit architecto. At provident reprehenderit modi odit illum sit. Esse consequatur non commodi. Tenetur eius mollitia ut omnis numquam doloribus quisquam. Exercitationem aut officiis quasi voluptatibus quos aspernatur consectetur quia.",
                "usage_en": "Officia et adipisci laboriosam numquam vel consequatur nisi. Occaecati illum id veniam ut porro dolores alias rerum. Alias aut delectus velit excepturi.",
                "main_image": "https:\/\/ws1.sinaimg.cn\/large\/610dc034ly1ffyp4g2vwxj20u00tu77b.jpg",
                "main_image_2": "http:\/\/ww4.sinaimg.cn\/large\/7a8aed7bjw1f1bdal8i3nj20f00lf77g.jpg",
                "benefit_image": "http:\/\/ww1.sinaimg.cn\/large\/7a8aed7bgw1evmsyc7thzj20hs0qon0n.jpg",
                "product_video": null,
                "status": 3,
                "rating": 4.19,
                "sold_count": 1684,
                "review_count": 4447,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-07 11:59:57",
                "updated_at": "2020-09-23 07:05:22",
                "product_category": {
                    "id": 2,
                    "name": "腮红",
                    "slug": "explicabo-harum",
                    "thumbnail": "http:\/\/ww1.sinaimg.cn\/large\/610dc034gw1fb6aqccs3nj20u00u0wk4.jpg",
                    "banner": "http:\/\/ww3.sinaimg.cn\/large\/7a8aed7bgw1eswencfur6j20hq0qodhs.jpg",
                    "title": "molestias rerum error",
                    "title_en": "temporibus ut molestias",
                    "sub_title": "labore dolore et",
                    "describe": "Debitis ut suscipit et unde a maiores dolore. Et fugiat eaque iusto. Ipsam sed qui voluptates et in tempore. Aliquam atque itaque nobis quam expedita porro nihil.",
                    "describe_en": "Cumque nihil debitis eius nemo ex facere odit at. Temporibus ut voluptas expedita quisquam laboriosam eveniet et.",
                    "describe_img": "http:\/\/ww1.sinaimg.cn\/large\/610dc034gw1ewy18hibdij20dw0kuq5z.jpg",
                    "type": 1,
                    "parent_id": 8,
                    "level": 1,
                    "created_at": "2020-09-05 21:38:19",
                    "updated_at": "2020-09-25 09:51:35"
                }
            },
            {
                "id": 14,
                "product_category_id": 6,
                "product_name": "纯皙精致",
                "product_name_en": "recusandae deserunt eaque",
                "thumbnail": "http:\/\/ww3.sinaimg.cn\/large\/610dc034jw1f80uxtwgxrj20u011hdhq.jpg",
                "slug": "enim-commodi",
                "short_description": "Et optio sequi veniam harum architecto illum.",
                "short_description_en": "Suscipit cumque non velit ab adipisci. A et aut debitis fugit qui architecto nostrum. Non perferendis dignissimos non dolor sit.",
                "price": "6802.00",
                "sale_price": "0.01",
                "stock": 234,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "id tenetur ut",
                "seo_keyword": "voluptatibus",
                "seo_description": "Quaerat aut officia quo reprehenderit nihil aut.",
                "benefit": "Est et neque suscipit aut deserunt voluptate dicta. Delectus dignissimos et rerum aperiam sapiente tempora. Sint asperiores cupiditate quod voluptatem.",
                "benefit_en": "Dolorum consequatur eius molestias ex et accusantium. Voluptatem ut blanditiis velit. Inventore architecto iste rerum expedita et. Commodi vel ea sapiente.",
                "tech_description": "Et odio facilis aut quibusdam. Rerum voluptatem consequatur enim est non quo. Excepturi repudiandae enim debitis quod cum. Corrupti fugiat temporibus incidunt.",
                "tech_description_en": "Modi praesentium molestiae et cumque omnis vel. Quisquam et voluptates nesciunt ab. Ut quisquam rerum veniam saepe. Soluta et et autem quo.",
                "description": "Et voluptas magnam praesentium qui occaecati quia sit. Veniam reprehenderit dicta molestiae aut et velit qui fugit. Tempore error quidem ipsam vitae assumenda eligendi nulla officiis.",
                "description_en": "Dicta voluptatum placeat error quae recusandae. Quo in impedit ipsa natus qui cupiditate. Minima recusandae recusandae et nam qui. Nemo consequuntur ut repellat odio.",
                "usage": "Iste exercitationem pariatur at dolor assumenda quasi in. Aperiam explicabo cumque quia fuga omnis sunt. Consequuntur rem quae voluptas deserunt aliquam.",
                "usage_en": "Recusandae eveniet inventore sunt quis sunt. Quidem qui distinctio ipsam aut ratione illum. Vitae fugit officia est voluptatem temporibus autem voluptatibus. Id qui voluptatem magnam temporibus animi rerum quis.",
                "main_image": "http:\/\/ww1.sinaimg.cn\/large\/610dc034jw1f4d4iji38kj20sg0izdl1.jpg",
                "main_image_2": "http:\/\/ww1.sinaimg.cn\/large\/610dc034jw1f2ewruruvij20d70miadg.jpg",
                "benefit_image": "http:\/\/ww1.sinaimg.cn\/large\/7a8aed7bgw1f3damign7mj211c0l0dj2.jpg",
                "product_video": null,
                "status": 1,
                "rating": 2.2,
                "sold_count": 3258,
                "review_count": 8122,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-20 01:08:20",
                "updated_at": "2020-09-09 00:13:35",
                "product_category": {
                    "id": 6,
                    "name": "面膜",
                    "slug": "et-enim",
                    "thumbnail": "https:\/\/ws1.sinaimg.cn\/large\/0065oQSqgy1fy58bi1wlgj30sg10hguu.jpg",
                    "banner": "http:\/\/ww3.sinaimg.cn\/large\/7a8aed7bjw1ex9nm11pbnj20hs0qo0u2.jpg",
                    "title": "asperiores assumenda quod",
                    "title_en": "vel autem dolores",
                    "sub_title": "nemo culpa incidunt",
                    "describe": "Aut necessitatibus labore non esse veniam ipsam. Soluta eos ad nam rerum assumenda saepe sed aut. Asperiores amet magni nostrum dolore deleniti. Excepturi ratione non et omnis et.",
                    "describe_en": "Quod alias eum et est consequatur impedit dolor. Tenetur aperiam numquam assumenda suscipit dolores. Cumque corrupti sunt ratione eos. Sunt facere corporis quidem.",
                    "describe_img": "https:\/\/ws1.sinaimg.cn\/large\/0065oQSqly1fuo54a6p0uj30sg0zdqnf.jpg",
                    "type": 1,
                    "parent_id": 23,
                    "level": 1,
                    "created_at": "2020-09-22 07:25:29",
                    "updated_at": "2020-09-05 17:33:47"
                }
            },
            {
                "id": 15,
                "product_category_id": 3,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "saepe quam ipsam",
                "thumbnail": "http:\/\/ac-OLWHHM4o.clouddn.com\/4063qegYjlC8nx6uEqxV0kT3hn6hdqJqVWPKpdrS",
                "slug": "neque-minima",
                "short_description": "Sed modi voluptate soluta quo.",
                "short_description_en": "Iusto debitis aut et minus quia. In non placeat qui magnam amet velit. Suscipit vitae corporis voluptatum expedita.",
                "price": "983.00",
                "sale_price": "0.01",
                "stock": 521,
                "spec": "150 ml \/ 2.0 oz",
                "seo_title": "earum quia qui",
                "seo_keyword": "nulla",
                "seo_description": "Placeat sed amet impedit commodi ex ab.",
                "benefit": "Ab consectetur quaerat similique. Nostrum vel qui non labore. Sint ut odit unde itaque aut molestias.",
                "benefit_en": "Delectus architecto quas quo omnis dolorem quia. Quibusdam fugit vero dolores. Et commodi quod excepturi qui. Nobis perferendis libero assumenda vitae officia.",
                "tech_description": "Qui dignissimos a necessitatibus sit assumenda. Totam voluptatem quam eaque iste repellendus nesciunt. Omnis ipsa exercitationem aliquam eum magnam voluptatem praesentium.",
                "tech_description_en": "Consequuntur consequatur nemo totam numquam reprehenderit. Velit dolor reprehenderit similique officia eaque aut minus. Alias voluptas explicabo et repellendus nulla ratione.",
                "description": "Aliquid illum quibusdam neque expedita. Consequatur incidunt distinctio esse consequatur mollitia omnis occaecati quia. Qui quod cumque ab. Ut sed ut qui maxime. Ipsam eum esse praesentium excepturi excepturi fugit.",
                "description_en": "Nulla unde saepe sit. Voluptas et porro in tempora. Consequatur a provident nihil dolorem totam tenetur porro nulla. Nesciunt illum recusandae expedita officiis. Et autem natus voluptatibus unde.",
                "usage": "Qui ut saepe est laborum. Tenetur nihil voluptatibus unde repellendus tenetur cum quaerat. Exercitationem reiciendis sunt sed possimus.",
                "usage_en": "Id aut totam voluptatum id. Natus eius mollitia qui quo. Ipsa rerum est exercitationem eveniet. Soluta eos perferendis et quam eius voluptatem.",
                "main_image": "http:\/\/7xi8d6.com1.z0.glb.clouddn.com\/2017-01-20-030332.jpg",
                "main_image_2": "http:\/\/ww4.sinaimg.cn\/large\/7a8aed7bjw1eynh92kg6jj20dc0gqwho.jpg",
                "benefit_image": "https:\/\/ws1.sinaimg.cn\/large\/610dc034ly1fgdmpxi7erj20qy0qyjtr.jpg",
                "product_video": null,
                "status": 3,
                "rating": 8.6,
                "sold_count": 2845,
                "review_count": 5401,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-24 08:47:16",
                "updated_at": "2020-09-20 17:53:39",
                "product_category": {
                    "id": 3,
                    "name": "香水",
                    "slug": "pariatur-neque",
                    "thumbnail": "http:\/\/ww4.sinaimg.cn\/large\/610dc034jw1fbffqo6jjoj20u011hgpx.jpg",
                    "banner": "http:\/\/7xi8d6.com1.z0.glb.clouddn.com\/20171113084220_LuJgqv_sakura.gun_13_11_2017_8_42_12_311.jpeg",
                    "title": "ea quia est",
                    "title_en": "inventore fuga maiores",
                    "sub_title": "animi magni qui",
                    "describe": "Et est exercitationem hic illo. Ut et sint temporibus est eius. In dignissimos sed soluta quaerat et. Sunt quia laborum officia.",
                    "describe_en": "Dignissimos mollitia quae labore facilis id magnam ut. Doloribus quidem magni libero. Provident harum ab animi aspernatur molestiae.",
                    "describe_img": "http:\/\/ww4.sinaimg.cn\/large\/610dc034jw1f6uv5gbsa9j20u00qxjt6.jpg",
                    "type": 1,
                    "parent_id": 13,
                    "level": 1,
                    "created_at": "2020-10-02 18:55:58",
                    "updated_at": "2020-10-01 05:23:19"
                }
            },
            {
                "id": 16,
                "product_category_id": 5,
                "product_name": "纯皙精致",
                "product_name_en": "est consequuntur facere",
                "thumbnail": "http:\/\/ww3.sinaimg.cn\/large\/7a8aed7bgw1evvxu1plowj20qo0hsgoz.jpg",
                "slug": "id-dolorum",
                "short_description": "Ut at aperiam aut.",
                "short_description_en": "Quia corporis inventore et quia nam iste quas. Omnis eligendi omnis qui velit unde. Molestias laudantium aut porro illum eaque maxime tempora. Quia qui soluta nulla voluptatum omnis. Veniam aperiam sit non provident ut excepturi perspiciatis.",
                "price": "995.00",
                "sale_price": "0.01",
                "stock": 824,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "sed eveniet ex",
                "seo_keyword": "odit",
                "seo_description": "Repellat officiis quia voluptatem eligendi.",
                "benefit": "Et aliquam voluptates quibusdam similique quibusdam exercitationem porro. Maxime id omnis iure fugiat porro.",
                "benefit_en": "Eum excepturi nihil asperiores exercitationem suscipit. Aliquam qui dignissimos quo aspernatur. Saepe molestiae aut magnam et hic praesentium odio accusantium. Ut ut necessitatibus sint cumque quae sequi beatae.",
                "tech_description": "Et laudantium voluptatem itaque exercitationem sed perspiciatis. Consectetur est exercitationem incidunt. Quibusdam quisquam praesentium libero. Incidunt est est cupiditate necessitatibus sint voluptatem veritatis.",
                "tech_description_en": "Amet modi officia quo molestiae ea. Optio doloribus sunt recusandae voluptatibus tempore. Maxime fugiat eius eius et sunt reprehenderit voluptates. Excepturi reprehenderit quo cupiditate quas.",
                "description": "Nulla possimus corrupti officia soluta praesentium laboriosam inventore accusantium. Cum dolorem consequatur neque ipsa repudiandae veritatis.",
                "description_en": "Esse similique perspiciatis excepturi dolor in deleniti quia. Omnis quaerat ut mollitia minus est alias.",
                "usage": "In in ut quia voluptatem veniam est. Pariatur quidem eveniet facilis. Et libero recusandae et dolore. Qui ut temporibus dicta et itaque consequatur dolores. Qui perspiciatis sunt cum.",
                "usage_en": "Culpa nihil temporibus fuga voluptas nihil voluptates nesciunt. Recusandae eligendi quam omnis velit a. Non velit rem qui repellat unde.",
                "main_image": "http:\/\/7xi8d6.com1.z0.glb.clouddn.com\/2017-05-11-18380166_305443499890139_8426655762360565760_n.jpg",
                "main_image_2": "http:\/\/ww1.sinaimg.cn\/large\/7a8aed7bgw1esxxiw20rej20qo0hstcp.jpg",
                "benefit_image": "http:\/\/ww4.sinaimg.cn\/large\/610dc034gw1ev8sy6rn52j20m80vwwj2.jpg",
                "product_video": null,
                "status": 2,
                "rating": 3.49,
                "sold_count": 9911,
                "review_count": 5677,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-11 10:54:56",
                "updated_at": "2020-09-28 10:13:18",
                "product_category": {
                    "id": 5,
                    "name": "BB霜",
                    "slug": "vel-nobis",
                    "thumbnail": "http:\/\/ww2.sinaimg.cn\/large\/7a8aed7bgw1eutscfcqtcj20dw0i0q4l.jpg",
                    "banner": "http:\/\/ww1.sinaimg.cn\/large\/0065oQSqly1fsoe3k2gkkj30g50niwla.jpg",
                    "title": "quos fugiat nobis",
                    "title_en": "maxime ducimus sed",
                    "sub_title": "ut enim autem",
                    "describe": "Fugit veritatis placeat natus. Saepe qui excepturi voluptatem expedita sit nihil. Eveniet nulla id vero eveniet et quibusdam. Rerum velit quis quisquam sed.",
                    "describe_en": "Molestiae non iure recusandae. Laborum suscipit officia facilis eum et non. Ratione aliquam enim quia iusto esse. Sequi aut quod quae.",
                    "describe_img": "http:\/\/ww1.sinaimg.cn\/large\/7a8aed7bjw1ezzaw04857j20p00gp40w.jpg",
                    "type": 1,
                    "parent_id": 13,
                    "level": 1,
                    "created_at": "2020-09-22 22:50:57",
                    "updated_at": "2020-09-12 12:31:22"
                }
            },
            {
                "id": 17,
                "product_category_id": 7,
                "product_name": "黑钻焕肤水",
                "product_name_en": "aut nulla nisi",
                "thumbnail": "http:\/\/ww1.sinaimg.cn\/large\/610dc034jw1fahy9m7xw0j20u00u042l.jpg",
                "slug": "aperiam-veniam",
                "short_description": "Harum quo autem ipsam sed.",
                "short_description_en": "Amet ad dolorum mollitia modi. Voluptatem quibusdam quam incidunt perspiciatis. Id praesentium qui occaecati quas quis velit. Sed quibusdam beatae vel et officiis nihil ut.",
                "price": "9844.00",
                "sale_price": "0.01",
                "stock": 744,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "velit ullam ad",
                "seo_keyword": "in",
                "seo_description": "Molestiae dolores dolor ratione sit.",
                "benefit": "Suscipit consequatur dolorem natus maiores voluptas. Quidem eos aut eligendi aperiam non fugit dolorum ipsum. Pariatur reprehenderit et eligendi at quaerat.",
                "benefit_en": "Eveniet quis non animi delectus est. Similique tenetur quasi laboriosam amet ut quam et. Id sint voluptatem eveniet perspiciatis.",
                "tech_description": "Iste inventore nobis reprehenderit labore cumque quia nulla. Quam qui esse vero aut expedita aut. Exercitationem ut labore maiores molestiae ut voluptatem. Omnis voluptatum nihil aut et delectus aliquid.",
                "tech_description_en": "Veritatis porro maiores quae qui quibusdam optio. Blanditiis harum quis necessitatibus velit possimus totam et.",
                "description": "Quasi fugiat facilis magnam delectus. Distinctio neque nobis inventore impedit ab sint ad. Nisi impedit autem accusantium ab. Explicabo ut sunt error aspernatur placeat.",
                "description_en": "Unde nulla consequatur et ut harum. Molestiae provident quaerat et pariatur sapiente qui. Totam earum debitis in tenetur repudiandae harum sunt quam. Unde odio assumenda dolores voluptas asperiores.",
                "usage": "Dolores consequatur impedit quod facere. Rerum expedita nisi voluptatem laborum minima vitae omnis. Id quaerat et ut. Quisquam enim perferendis atque tempora ipsa commodi quo.",
                "usage_en": "Labore excepturi sapiente est quae doloremque aut. Est autem in sit tempore. Et nulla autem quisquam. Rem possimus repellat ratione quasi eveniet. Sed dolor aut aliquam repudiandae ab.",
                "main_image": "http:\/\/7xi8d6.com1.z0.glb.clouddn.com\/2017-02-03-123209.jpg",
                "main_image_2": "https:\/\/ws1.sinaimg.cn\/large\/0065oQSqly1fvexaq313uj30qo0wldr4.jpg",
                "benefit_image": "http:\/\/ww3.sinaimg.cn\/large\/610dc034jw1f837uocox8j20f00mggoo.jpg",
                "product_video": null,
                "status": 3,
                "rating": 4.58,
                "sold_count": 4617,
                "review_count": 6524,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-10-05 13:19:46",
                "updated_at": "2020-09-23 15:31:16",
                "product_category": {
                    "id": 7,
                    "name": "腮红",
                    "slug": "ut-unde",
                    "thumbnail": "http:\/\/ww2.sinaimg.cn\/large\/7a8aed7bjw1ezxog636o8j20du0kujsg.jpg",
                    "banner": "http:\/\/7xi8d6.com1.z0.glb.clouddn.com\/16123958_1630476787257847_7576387494862651392_n.jpg",
                    "title": "repellendus quis qui",
                    "title_en": "accusantium praesentium quos",
                    "sub_title": "eveniet dolorem repellendus",
                    "describe": "Rerum quis voluptatem ut dicta quo a. Ipsa maxime quod nesciunt. Quo consequuntur autem ex ut totam ullam.",
                    "describe_en": "Necessitatibus numquam quia odit unde tenetur quo sit. Ipsum voluptatem ab molestias eius aliquid doloribus commodi. Minus est quia laborum at.",
                    "describe_img": "http:\/\/ww2.sinaimg.cn\/large\/610dc034jw1f72v5ra09fj20u011hdit.jpg",
                    "type": 1,
                    "parent_id": 11,
                    "level": 1,
                    "created_at": "2020-09-14 04:39:20",
                    "updated_at": "2020-10-05 03:09:33"
                }
            },
            {
                "id": 18,
                "product_category_id": 9,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "aut accusantium fugiat",
                "thumbnail": "http:\/\/ac-OLWHHM4o.clouddn.com\/4063qegYjlC8nx6uEqxV0kT3hn6hdqJqVWPKpdrS",
                "slug": "tempora-vel",
                "short_description": "Officiis eos est culpa illum dolor.",
                "short_description_en": "Deleniti repudiandae iusto aut eveniet. Accusantium explicabo debitis sit molestias perferendis itaque deserunt consectetur. Voluptatem tempore nesciunt ab officia perferendis molestiae et. Sint ea vero natus veritatis quia natus facilis.",
                "price": "8781.00",
                "sale_price": "0.01",
                "stock": 284,
                "spec": "50 ml \/ 1.7 fl. oz",
                "seo_title": "aut veritatis sit",
                "seo_keyword": "eos",
                "seo_description": "Recusandae sunt officia iure excepturi deserunt sit.",
                "benefit": "Et et autem facilis reprehenderit cum qui facilis. Inventore laboriosam ut aut neque consequatur blanditiis architecto nisi. Rerum cum repellat illo deleniti autem cupiditate et. Quo nisi velit enim culpa.",
                "benefit_en": "Voluptatem consequatur minima eveniet et soluta consequatur quis. Ipsam eveniet consequatur cupiditate voluptatum. Sunt dolorem esse ratione eos in aliquam.",
                "tech_description": "Adipisci delectus ducimus maiores. Aut voluptatum delectus aut aut provident aut. Voluptatibus sed dolorem dolorum sunt. Qui ea ut ab odit aut corporis suscipit.",
                "tech_description_en": "Quia itaque omnis officiis nisi blanditiis consequuntur neque. Doloribus sit veniam labore alias iure velit sed.",
                "description": "Itaque porro eum voluptatem placeat aut error. Repellendus labore eveniet error ea. Placeat suscipit aut adipisci labore.",
                "description_en": "Explicabo voluptatibus magni voluptate non quod nihil qui. Eaque a officia hic officia totam fugiat consequuntur culpa. Assumenda ut nihil fuga nam aut et eos. Ipsa praesentium ea optio.",
                "usage": "Ea velit ratione numquam dolor aut facere quis. Enim mollitia quia sit molestiae reiciendis. Eveniet exercitationem non tempora perferendis. Nulla incidunt alias odio pariatur vero voluptatem sit.",
                "usage_en": "Ut voluptas delectus eligendi quos est. Vel et consequuntur similique. Quo consequatur culpa et quos debitis omnis eaque.",
                "main_image": "http:\/\/ww2.sinaimg.cn\/large\/7a8aed7bgw1essxulfqxxj20hr0qo77f.jpg",
                "main_image_2": "http:\/\/ww3.sinaimg.cn\/large\/610dc034jw1f6aipo68yvj20qo0qoaee.jpg",
                "benefit_image": "https:\/\/ws1.sinaimg.cn\/large\/610dc034gy1fhupzs0awwj20u00u0tcf.jpg",
                "product_video": null,
                "status": 1,
                "rating": 6.49,
                "sold_count": 8396,
                "review_count": 6219,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-10-02 16:27:42",
                "updated_at": "2020-09-06 20:25:35",
                "product_category": {
                    "id": 9,
                    "name": "BB霜",
                    "slug": "doloribus-aut",
                    "thumbnail": "http:\/\/ww4.sinaimg.cn\/large\/610dc034gw1evi6jh2mllj20gy0bgwf1.jpg",
                    "banner": "http:\/\/ww2.sinaimg.cn\/large\/7a8aed7bgw1euh2zyekn2j20hs0qodje.jpg",
                    "title": "suscipit eos eos",
                    "title_en": "consequuntur minus dolor",
                    "sub_title": "quia veritatis aut",
                    "describe": "Adipisci enim totam commodi labore. Qui itaque debitis vel aut quaerat eveniet officiis. Qui ut iste cumque reprehenderit.",
                    "describe_en": "Dolor dolorem alias laborum ex. Qui dolorum quo facere a dolorem. Velit odit dignissimos pariatur ut. Animi dolor commodi enim est sed. Est fuga et iusto et quibusdam laudantium amet.",
                    "describe_img": "http:\/\/ww1.sinaimg.cn\/large\/7a8aed7bgw1et6yio5s7rj20hs0qogop.jpg",
                    "type": 1,
                    "parent_id": 4,
                    "level": 1,
                    "created_at": "2020-09-09 22:48:41",
                    "updated_at": "2020-09-13 23:32:40"
                }
            },
            {
                "id": 19,
                "product_category_id": 1,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "odio veniam voluptas",
                "thumbnail": "http:\/\/ww3.sinaimg.cn\/large\/610dc034jw1fbd818kkwjj20u011hjup.jpg",
                "slug": "sed-velit",
                "short_description": "Nisi nihil voluptatibus distinctio aspernatur qui rerum aut.",
                "short_description_en": "Et sint rerum atque enim modi dolores id. Omnis aut corporis ducimus. Inventore ad ipsam vitae aut ex quia qui unde. Ducimus accusamus quia ratione beatae.",
                "price": "7554.00",
                "sale_price": "0.01",
                "stock": 272,
                "spec": "50 ml \/ 1.7 fl. oz",
                "seo_title": "ut id quo",
                "seo_keyword": "quam",
                "seo_description": "Placeat beatae et reiciendis.",
                "benefit": "In fuga itaque dolores quis nihil aut. Ut distinctio non dolorum et voluptatum necessitatibus laudantium perferendis. Ad qui quae adipisci qui molestiae cupiditate nihil. Dolorum quos quia aut qui ex omnis.",
                "benefit_en": "Fuga maiores sapiente iusto eaque voluptatem harum dignissimos. Et est suscipit suscipit adipisci expedita.",
                "tech_description": "Blanditiis veritatis harum magni et veniam nulla molestias. Dolorem est maxime tenetur ut eligendi. Eos iure est eos architecto nihil odit.",
                "tech_description_en": "Aut quis ex iusto laborum. Sequi sit eveniet dolor necessitatibus. Alias facilis fugiat quo voluptates.",
                "description": "Saepe repudiandae assumenda placeat repellendus. Cumque sequi ipsa molestias delectus. Libero et tempore sequi sit nulla corrupti aut numquam.",
                "description_en": "Unde perspiciatis ex corporis dolore. Maiores provident in animi omnis. In dolorum ut earum nihil similique.",
                "usage": "Doloribus ut quo non aspernatur et ipsa debitis. Molestiae voluptas molestiae quas est aut. Cupiditate veritatis expedita libero non similique.",
                "usage_en": "Ut consequuntur quo cumque sit. Ut delectus rerum et. Mollitia voluptate cumque aperiam aut necessitatibus laboriosam ea minus. Hic odit amet eaque sint a exercitationem ut.",
                "main_image": "https:\/\/ws1.sinaimg.cn\/large\/610dc034ly1fil82i7zsmj20u011hwja.jpg",
                "main_image_2": "http:\/\/ww2.sinaimg.cn\/large\/610dc034jw1fa42ktmjh4j20u011hn8g.jpg",
                "benefit_image": "http:\/\/ww3.sinaimg.cn\/large\/610dc034gw1f9shm1cajkj20u00jy408.jpg",
                "product_video": null,
                "status": 3,
                "rating": 6.85,
                "sold_count": 9183,
                "review_count": 7586,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-07 02:51:05",
                "updated_at": "2020-09-12 00:21:16",
                "product_category": {
                    "id": 1,
                    "name": "隔离",
                    "slug": "temporibus-sint",
                    "thumbnail": "http:\/\/7xi8d6.com1.z0.glb.clouddn.com\/2017-02-09-16583339_172818256542563_353855393375453184_n.jpg",
                    "banner": "https:\/\/ws1.sinaimg.cn\/large\/610dc034ly1fjppsiclufj20u011igo5.jpg",
                    "title": "natus optio ea",
                    "title_en": "a consequatur dolorem",
                    "sub_title": "possimus consectetur totam",
                    "describe": "Perferendis eos ullam autem culpa. Dolores adipisci est consequatur doloribus eius aliquid. Cumque illo ad maiores qui debitis.",
                    "describe_en": "Et consectetur rerum quasi impedit. Excepturi aliquam omnis placeat eum et eaque nulla illum. Est quos et enim et a facere voluptatem quibusdam.",
                    "describe_img": "https:\/\/ww1.sinaimg.cn\/large\/0065oQSqly1ft5q7ys128j30sg10gnk5.jpg",
                    "type": 1,
                    "parent_id": 11,
                    "level": 1,
                    "created_at": "2020-09-29 07:18:20",
                    "updated_at": "2020-09-07 00:31:18"
                }
            },
            {
                "id": 20,
                "product_category_id": 4,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "qui dolorum provident",
                "thumbnail": "http:\/\/ww1.sinaimg.cn\/large\/7a8aed7bjw1f3k9dp8r9qj20dw0jljtd.jpg",
                "slug": "facere-similique",
                "short_description": "Maiores et officia ipsam voluptatum.",
                "short_description_en": "Praesentium libero ut quis inventore vero architecto qui. Dolorum quis quidem vero optio. Qui architecto ipsum ipsam pariatur nam qui.",
                "price": "9195.00",
                "sale_price": "0.01",
                "stock": 79,
                "spec": "150 ml \/ 2.0 oz",
                "seo_title": "asperiores voluptatibus voluptatibus",
                "seo_keyword": "est",
                "seo_description": "Et fuga itaque accusantium.",
                "benefit": "Rem consequatur ea dolores fuga quo totam est odio. Assumenda error esse minima velit et ea nihil. Inventore deserunt exercitationem deleniti suscipit sequi dolores et.",
                "benefit_en": "Nostrum ut distinctio et porro quia qui quas tempore. Magni ut ipsam quo ab. Ex modi ut porro hic molestias nam. Dolorem est similique earum accusantium dignissimos laborum laborum.",
                "tech_description": "Sit neque exercitationem quibusdam enim ipsum corrupti. Sit et impedit voluptas doloremque quia repellendus. Minima sed dolorum voluptas eos. Sed libero ipsum assumenda.",
                "tech_description_en": "Iste voluptas qui possimus nostrum. Labore saepe dolorem omnis molestiae. Nihil voluptatem consectetur ipsum blanditiis veniam doloribus velit. Aliquam rerum tenetur qui deserunt ut autem.",
                "description": "Et sed quod placeat. Amet saepe eos non. Voluptatem qui est maxime ut ut iste quas. Non deserunt veniam ut quas voluptates. In ut dolorem accusamus alias consequatur est quod.",
                "description_en": "Accusantium et dolores deleniti voluptatum quasi labore. Expedita id omnis libero accusamus. Placeat minus odit mollitia dignissimos aperiam quo fugiat vitae. Dolorum necessitatibus assumenda est odio est.",
                "usage": "Reiciendis excepturi consequatur nisi perspiciatis qui voluptate accusamus molestiae. Perferendis et molestiae natus perferendis sed perferendis.",
                "usage_en": "Ab beatae eaque ut sint aut quis provident. Eius nesciunt saepe aliquid neque est et. Et qui est reiciendis similique sint eos.",
                "main_image": "http:\/\/ww3.sinaimg.cn\/large\/610dc034gw1fay98gt0ocj20u011hn24.jpg",
                "main_image_2": "http:\/\/ww4.sinaimg.cn\/large\/610dc034gw1ew5b4ri9mxj20ic0qoq4t.jpg",
                "benefit_image": "http:\/\/ww2.sinaimg.cn\/large\/610dc034jw1f978bh1cerj20u00u0767.jpg",
                "product_video": null,
                "status": 3,
                "rating": 6.3,
                "sold_count": 7214,
                "review_count": 2142,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-16 14:51:36",
                "updated_at": "2020-09-16 10:27:11",
                "product_category": {
                    "id": 4,
                    "name": "腮红",
                    "slug": "itaque-iusto",
                    "thumbnail": "http:\/\/7xi8d6.com1.z0.glb.clouddn.com\/2017-03-02-16906481_1495916493759925_5770648570629718016_n.jpg",
                    "banner": "http:\/\/ww1.sinaimg.cn\/large\/610dc034jw1f87z2n2taej20u011h11h.jpg",
                    "title": "est ea magnam",
                    "title_en": "amet ut rem",
                    "sub_title": "aliquam eligendi aut",
                    "describe": "Deleniti impedit ullam nesciunt quisquam officia eos. Ipsum facere veniam maxime modi voluptates et enim. Officia debitis ad reprehenderit ipsam ut a.",
                    "describe_en": "Ipsum odio ut qui et. Sit quia facere aspernatur quam. Nihil aut odio aut aperiam voluptatem perspiciatis et. Similique architecto aliquid veniam in tempora.",
                    "describe_img": "http:\/\/ww1.sinaimg.cn\/large\/7a8aed7bgw1ettzpowndgj216g0s4dkg.jpg",
                    "type": 1,
                    "parent_id": 7,
                    "level": 1,
                    "created_at": "2020-10-03 23:14:55",
                    "updated_at": "2020-09-07 18:22:41"
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
    -G "http://store.wutang.com/api/products/list/product_category_skin_care/ex" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/products/list/product_category_skin_care/ex"
);

let headers = {
    "Content-Type": "application/json",
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
    -G "http://store.wutang.com/api/products/status/corrupti?page=error&page_limit=ducimus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/products/status/corrupti"
);

let params = {
    "page": "error",
    "page_limit": "ducimus",
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
            "product_category_id": 6,
            "product_name": "纯皙精致",
            "product_name_en": "recusandae deserunt eaque",
            "thumbnail": "http:\/\/ww3.sinaimg.cn\/large\/610dc034jw1f80uxtwgxrj20u011hdhq.jpg",
            "slug": "enim-commodi",
            "short_description": "Et optio sequi veniam harum architecto illum.",
            "price": "6802.00",
            "sale_price": "0.01"
        },
        {
            "product_category_id": 3,
            "product_name": "亮颜修护",
            "product_name_en": "aperiam quia cum",
            "thumbnail": "http:\/\/ww1.sinaimg.cn\/large\/610dc034jw1f867mvc6qjj20u00u0wh7.jpg",
            "slug": "id-nobis",
            "short_description": "Dolorem odio est saepe quae.",
            "price": "7131.00",
            "sale_price": "0.01"
        },
        {
            "product_category_id": 9,
            "product_name": "黑钻璀璨晶透肌底精华",
            "product_name_en": "aut accusantium fugiat",
            "thumbnail": "http:\/\/ac-OLWHHM4o.clouddn.com\/4063qegYjlC8nx6uEqxV0kT3hn6hdqJqVWPKpdrS",
            "slug": "tempora-vel",
            "short_description": "Officiis eos est culpa illum dolor.",
            "price": "8781.00",
            "sale_price": "0.01"
        },
        {
            "product_category_id": 4,
            "product_name": "黑钻臻活眼部精华",
            "product_name_en": "quos sapiente consequatur",
            "thumbnail": "https:\/\/ws1.sinaimg.cn\/large\/610dc034gy1fi2okd7dtjj20u011h40b.jpg",
            "slug": "itaque-doloribus",
            "short_description": "Nostrum cupiditate corrupti sunt ab.",
            "price": "9414.00",
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
            "id": 4,
            "thumbnail": "http:\/\/7xi8d6.com1.z0.glb.clouddn.com\/2017-10-31-nozomisasaki_official_31_10_2017_10_49_17_24.jpg",
            "slug": "distinctio-et",
            "product_name": "黑钻臻活眼部精华",
            "product_name_en": "fugit asperiores nisi"
        },
        {
            "id": 5,
            "thumbnail": "http:\/\/ww4.sinaimg.cn\/large\/610dc034jw1f550nt5zklj20zk19rtf3.jpg",
            "slug": "praesentium-repellat",
            "product_name": "黑钻焕肤水",
            "product_name_en": "voluptatem voluptatibus rem"
        },
        {
            "id": 14,
            "thumbnail": "http:\/\/ww3.sinaimg.cn\/large\/610dc034jw1f80uxtwgxrj20u011hdhq.jpg",
            "slug": "enim-commodi",
            "product_name": "纯皙精致",
            "product_name_en": "recusandae deserunt eaque"
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
            "id": 4,
            "name": "腮红",
            "slug": "itaque-iusto",
            "thumbnail": "http:\/\/7xi8d6.com1.z0.glb.clouddn.com\/2017-03-02-16906481_1495916493759925_5770648570629718016_n.jpg",
            "banner": "http:\/\/ww1.sinaimg.cn\/large\/610dc034jw1f87z2n2taej20u011h11h.jpg",
            "title": "est ea magnam",
            "title_en": "amet ut rem",
            "sub_title": "aliquam eligendi aut",
            "describe": "Deleniti impedit ullam nesciunt quisquam officia eos. Ipsum facere veniam maxime modi voluptates et enim. Officia debitis ad reprehenderit ipsam ut a.",
            "describe_en": "Ipsum odio ut qui et. Sit quia facere aspernatur quam. Nihil aut odio aut aperiam voluptatem perspiciatis et. Similique architecto aliquid veniam in tempora.",
            "describe_img": "http:\/\/ww1.sinaimg.cn\/large\/7a8aed7bgw1ettzpowndgj216g0s4dkg.jpg",
            "type": 1,
            "parent_id": 7,
            "level": 1,
            "created_at": "2020-10-03 23:14:55",
            "updated_at": "2020-09-07 18:22:41",
            "children": [
                {
                    "id": 9,
                    "name": "BB霜",
                    "slug": "doloribus-aut",
                    "thumbnail": "http:\/\/ww4.sinaimg.cn\/large\/610dc034gw1evi6jh2mllj20gy0bgwf1.jpg",
                    "banner": "http:\/\/ww2.sinaimg.cn\/large\/7a8aed7bgw1euh2zyekn2j20hs0qodje.jpg",
                    "title": "suscipit eos eos",
                    "title_en": "consequuntur minus dolor",
                    "sub_title": "quia veritatis aut",
                    "describe": "Adipisci enim totam commodi labore. Qui itaque debitis vel aut quaerat eveniet officiis. Qui ut iste cumque reprehenderit.",
                    "describe_en": "Dolor dolorem alias laborum ex. Qui dolorum quo facere a dolorem. Velit odit dignissimos pariatur ut. Animi dolor commodi enim est sed. Est fuga et iusto et quibusdam laudantium amet.",
                    "describe_img": "http:\/\/ww1.sinaimg.cn\/large\/7a8aed7bgw1et6yio5s7rj20hs0qogop.jpg",
                    "type": 1,
                    "parent_id": 4,
                    "level": 1,
                    "created_at": "2020-09-09 22:48:41",
                    "updated_at": "2020-09-13 23:32:40"
                }
            ]
        },
        {
            "id": 7,
            "name": "腮红",
            "slug": "ut-unde",
            "thumbnail": "http:\/\/ww2.sinaimg.cn\/large\/7a8aed7bjw1ezxog636o8j20du0kujsg.jpg",
            "banner": "http:\/\/7xi8d6.com1.z0.glb.clouddn.com\/16123958_1630476787257847_7576387494862651392_n.jpg",
            "title": "repellendus quis qui",
            "title_en": "accusantium praesentium quos",
            "sub_title": "eveniet dolorem repellendus",
            "describe": "Rerum quis voluptatem ut dicta quo a. Ipsa maxime quod nesciunt. Quo consequuntur autem ex ut totam ullam.",
            "describe_en": "Necessitatibus numquam quia odit unde tenetur quo sit. Ipsum voluptatem ab molestias eius aliquid doloribus commodi. Minus est quia laborum at.",
            "describe_img": "http:\/\/ww2.sinaimg.cn\/large\/610dc034jw1f72v5ra09fj20u011hdit.jpg",
            "type": 1,
            "parent_id": 11,
            "level": 1,
            "created_at": "2020-09-14 04:39:20",
            "updated_at": "2020-10-05 03:09:33",
            "children": [
                {
                    "id": 4,
                    "name": "腮红",
                    "slug": "itaque-iusto",
                    "thumbnail": "http:\/\/7xi8d6.com1.z0.glb.clouddn.com\/2017-03-02-16906481_1495916493759925_5770648570629718016_n.jpg",
                    "banner": "http:\/\/ww1.sinaimg.cn\/large\/610dc034jw1f87z2n2taej20u011h11h.jpg",
                    "title": "est ea magnam",
                    "title_en": "amet ut rem",
                    "sub_title": "aliquam eligendi aut",
                    "describe": "Deleniti impedit ullam nesciunt quisquam officia eos. Ipsum facere veniam maxime modi voluptates et enim. Officia debitis ad reprehenderit ipsam ut a.",
                    "describe_en": "Ipsum odio ut qui et. Sit quia facere aspernatur quam. Nihil aut odio aut aperiam voluptatem perspiciatis et. Similique architecto aliquid veniam in tempora.",
                    "describe_img": "http:\/\/ww1.sinaimg.cn\/large\/7a8aed7bgw1ettzpowndgj216g0s4dkg.jpg",
                    "type": 1,
                    "parent_id": 7,
                    "level": 1,
                    "created_at": "2020-10-03 23:14:55",
                    "updated_at": "2020-09-07 18:22:41"
                }
            ]
        },
        {
            "id": 8,
            "name": "彩妆盘",
            "slug": "dolorem-id",
            "thumbnail": "http:\/\/7xi8d6.com1.z0.glb.clouddn.com\/2017-02-24-16906635_1749384985376684_7563808952991875072_n.jpg",
            "banner": "https:\/\/ws1.sinaimg.cn\/large\/610dc034gy1fi678xgq1ij20pa0vlgo4.jpg",
            "title": "cumque est asperiores",
            "title_en": "minus qui cupiditate",
            "sub_title": "iure asperiores sapiente",
            "describe": "Quia error dignissimos placeat rerum nobis. In qui sit voluptas vel. Voluptas ipsa voluptatem commodi eveniet veritatis numquam dignissimos. Sunt voluptatem doloremque omnis harum.",
            "describe_en": "Dolorem enim quaerat id necessitatibus nihil sunt dicta. Officiis itaque incidunt ut quo nihil tenetur. Voluptatem distinctio eveniet sit est. Dolores ullam occaecati veniam omnis iure dignissimos.",
            "describe_img": "http:\/\/ww4.sinaimg.cn\/large\/610dc034jw1f8bc5c5n4nj20u00irgn8.jpg",
            "type": 1,
            "parent_id": 28,
            "level": 1,
            "created_at": "2020-09-26 04:30:59",
            "updated_at": "2020-09-29 13:20:46",
            "children": [
                {
                    "id": 2,
                    "name": "腮红",
                    "slug": "explicabo-harum",
                    "thumbnail": "http:\/\/ww1.sinaimg.cn\/large\/610dc034gw1fb6aqccs3nj20u00u0wk4.jpg",
                    "banner": "http:\/\/ww3.sinaimg.cn\/large\/7a8aed7bgw1eswencfur6j20hq0qodhs.jpg",
                    "title": "molestias rerum error",
                    "title_en": "temporibus ut molestias",
                    "sub_title": "labore dolore et",
                    "describe": "Debitis ut suscipit et unde a maiores dolore. Et fugiat eaque iusto. Ipsam sed qui voluptates et in tempore. Aliquam atque itaque nobis quam expedita porro nihil.",
                    "describe_en": "Cumque nihil debitis eius nemo ex facere odit at. Temporibus ut voluptas expedita quisquam laboriosam eveniet et.",
                    "describe_img": "http:\/\/ww1.sinaimg.cn\/large\/610dc034gw1ewy18hibdij20dw0kuq5z.jpg",
                    "type": 1,
                    "parent_id": 8,
                    "level": 1,
                    "created_at": "2020-09-05 21:38:19",
                    "updated_at": "2020-09-25 09:51:35"
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
    -G "http://store.wutang.com/api/product_category/story/nobis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product_category/story/nobis"
);

let headers = {
    "Content-Type": "application/json",
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
    "data": [
        {
            "id": 1,
            "slug": "eos-molestiae",
            "thumbnail": "http:\/\/ww2.sinaimg.cn\/large\/7a8aed7bgw1etwa7ayf35j20j60csmzb.jpg",
            "product_name": "黑钻璀璨晶透肌底精华",
            "product_name_en": "odio ex reiciendis"
        },
        {
            "id": 2,
            "slug": "repellat-possimus",
            "thumbnail": "https:\/\/ws1.sinaimg.cn\/large\/610dc034ly1fj3w0emfcbj20u011iabm.jpg",
            "product_name": "钻石冰莹面膜",
            "product_name_en": "autem in quibusdam"
        },
        {
            "id": 3,
            "slug": "adipisci-est",
            "thumbnail": "http:\/\/ww2.sinaimg.cn\/large\/610dc034jw1f5s5382uokj20fk0ncmyt.jpg",
            "product_name": "臻爱铂金",
            "product_name_en": "laborum rerum debitis"
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
    -d '{"product_list":[{"product_id":3}]}'

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
            "product_id": 3
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
    "http://store.wutang.com/api/shop_carts/1?type=voluptatibus&product_id=mollitia&amount=maiores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/shop_carts/1"
);

let params = {
    "type": "voluptatibus",
    "product_id": "mollitia",
    "amount": "maiores",
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
    "http://store.wutang.com/api/shop_carts/1?product_id=vel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/shop_carts/1"
);

let params = {
    "product_id": "vel",
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
            "name": "精彩内容",
            "slug": "repellendus-dolore",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?66131",
            "title": "sequi qui consequatur",
            "sub_title": "ut nesciunt molestias",
            "created_at": "2020-02-12 19:03:47",
            "updated_at": "2020-09-13 22:20:40"
        },
        {
            "id": 2,
            "name": "品牌介绍",
            "slug": "architecto-qui",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?58625",
            "title": "laboriosam velit laboriosam",
            "sub_title": "atque tempore maiores",
            "created_at": "2019-10-08 03:17:40",
            "updated_at": "2020-03-05 00:47:23"
        },
        {
            "id": 3,
            "name": "精湛科艺",
            "slug": "illo-quas",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?58873",
            "title": "et facilis commodi",
            "sub_title": "modi aut molestiae",
            "created_at": "2020-06-19 23:24:47",
            "updated_at": "2019-10-29 17:17:05"
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
    -d '{"province":"et","city":"ut","district":"quas","address":"vel","zip":4,"contact_name":"cum","contact_phone":18}'

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
    "province": "et",
    "city": "ut",
    "district": "quas",
    "address": "vel",
    "zip": 4,
    "contact_name": "cum",
    "contact_phone": 18
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
    "http://store.wutang.com/api/user_addresses/1?province=inventore&city=veniam&district=libero&address=ipsa&zip=consequatur&contact_name=ex&contact_phone=delectus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_addresses/1"
);

let params = {
    "province": "inventore",
    "city": "veniam",
    "district": "libero",
    "address": "ipsa",
    "zip": "consequatur",
    "contact_name": "ex",
    "contact_phone": "delectus",
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
    "http://store.wutang.com/api/user_profile?phone=consequatur&real_name=quia&sex=suscipit&birthday=sint&age=facere&province=optio&city=sapiente&district=non&address=reiciendis&zip=fugit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_profile"
);

let params = {
    "phone": "consequatur",
    "real_name": "quia",
    "sex": "suscipit",
    "birthday": "sint",
    "age": "facere",
    "province": "optio",
    "city": "sapiente",
    "district": "non",
    "address": "reiciendis",
    "zip": "fugit",
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
    -d '{"code":"nobis"}'

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
    "code": "nobis"
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
    -G "http://store.wutang.com/api/wish_list?page=enim&page_limit=eveniet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/wish_list"
);

let params = {
    "page": "enim",
    "page_limit": "eveniet",
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
    "http://store.wutang.com/api/wish_list" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"product_id":11}'

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
    "product_id": 11
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
    "http://store.wutang.com/api/wish_list/voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/wish_list/voluptatem"
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
    -G "http://store.wutang.com/alipay/bank_gateway/pay?no=ullam&total_amount=et&payment_key=aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/alipay/bank_gateway/pay"
);

let params = {
    "no": "ullam",
    "total_amount": "et",
    "payment_key": "aut",
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
        "no": "ullam",
        "total_amount": "et",
        "payment_key": "aut"
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
    -G "http://store.wutang.com/alipay/aop_page/pay?no=eligendi&total_amount=tempore&payment_key=non" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/alipay/aop_page/pay"
);

let params = {
    "no": "eligendi",
    "total_amount": "tempore",
    "payment_key": "non",
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
        "no": "eligendi",
        "total_amount": "tempore",
        "payment_key": "non"
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
    -G "http://store.wutang.com/alipay/legacy_express/pay?no=eos&total_amount=iusto&payment_key=enim" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/alipay/legacy_express/pay"
);

let params = {
    "no": "eos",
    "total_amount": "iusto",
    "payment_key": "enim",
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
        "total_amount": "iusto",
        "payment_key": "enim"
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
    -G "http://store.wutang.com/unionpay/pay?no=accusamus&total_amount=et&payment_key=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/unionpay/pay"
);

let params = {
    "no": "accusamus",
    "total_amount": "et",
    "payment_key": "et",
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
        "no": "accusamus",
        "total_amount": "et",
        "payment_key": "et"
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

#general


<!-- START_77797615aeaa4fce9a94150989aed46f -->
## ResponseCode explain
本方法仅作返回code通用说明(无其他作用)

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/response_code?10001=aut&10003=id&20001=et&40001=ducimus&40003=magni&40004=quis&40005=aut&50001=porro&P1001=quidem&P1002=sed&P4004=sint&P4005=est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/response_code"
);

let params = {
    "10001": "aut",
    "10003": "id",
    "20001": "et",
    "40001": "ducimus",
    "40003": "magni",
    "40004": "quis",
    "40005": "aut",
    "50001": "porro",
    "P1001": "quidem",
    "P1002": "sed",
    "P4004": "sint",
    "P4005": "est",
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/roles`


<!-- END_879622c0ac94a4a0f4d364d46a42bc7e -->


