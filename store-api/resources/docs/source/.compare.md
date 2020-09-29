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
    -G "http://store.wutang.com/admin/alipay/legacy_express?page=eaque&page_limit=accusantium" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/alipay/legacy_express"
);

let params = {
    "page": "eaque",
    "page_limit": "accusantium",
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
    -d '{"items":[{"pid":"deserunt","key":"officiis","seller_email":"quia"}]}'

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
            "pid": "deserunt",
            "key": "officiis",
            "seller_email": "quia"
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
    "http://store.wutang.com/admin/alipay/legacy_express/1?id=est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/alipay/legacy_express/1"
);

let params = {
    "id": "est",
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
    "http://store.wutang.com/admin/alipay/legacy_express/1?id=corrupti" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/alipay/legacy_express/1"
);

let params = {
    "id": "corrupti",
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

#[ADMIN] Asset img

静态图片管理
<!-- START_d87b514e0b2d661024b3fe01f18fc23c -->
## Get assetImg list
获取首页静态资源列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/asset_img?page=commodi&page_limit=odio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/asset_img"
);

let params = {
    "page": "commodi",
    "page_limit": "odio",
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
    -d '{"img":"in","img_location":"itaque","type":"et","product_id":"totam"}'

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
    "img": "in",
    "img_location": "itaque",
    "type": "et",
    "product_id": "totam"
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
    -d '{"img":"sint","img_location":"qui","type":"sit","product_id":"magni"}'

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
    "img": "sint",
    "img_location": "qui",
    "type": "sit",
    "product_id": "magni"
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
    -G "http://store.wutang.com/admin/category_stories?page=omnis&page_limit=aperiam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories"
);

let params = {
    "page": "omnis",
    "page_limit": "aperiam",
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
    "http://store.wutang.com/admin/category_stories?title=adipisci&title_en=occaecati&description=soluta&description_en=culpa&banner=voluptatibus&product_category_id=vitae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories"
);

let params = {
    "title": "adipisci",
    "title_en": "occaecati",
    "description": "soluta",
    "description_en": "culpa",
    "banner": "voluptatibus",
    "product_category_id": "vitae",
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
    "http://store.wutang.com/admin/category_stories/1?title=possimus&title_en=facere&description=minima&description_en=autem&banner=deleniti&product_category_id=mollitia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories/1"
);

let params = {
    "title": "possimus",
    "title_en": "facere",
    "description": "minima",
    "description_en": "autem",
    "banner": "deleniti",
    "product_category_id": "mollitia",
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
    -G "http://store.wutang.com/admin/companies?page=aut&page_limit=quaerat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/companies"
);

let params = {
    "page": "aut",
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
    -G "http://store.wutang.com/admin/company/departments/a" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/company/departments/a"
);

let headers = {
    "Content-Type": "application/json",
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
    -G "http://store.wutang.com/admin/logs/1?page=voluptates&page_limit=nihil" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/logs/1"
);

let params = {
    "page": "voluptates",
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
    "http://store.wutang.com/admin/logs/1?ids=ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/logs/1"
);

let params = {
    "ids": "ut",
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
    -G "http://store.wutang.com/admin/order?page=dolore&page_limit=velit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/order"
);

let params = {
    "page": "dolore",
    "page_limit": "velit",
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
    "http://store.wutang.com/admin/order?page=consequatur&page_limit=in&username=sunt&order_no=culpa&order_status=incidunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/order"
);

let params = {
    "page": "consequatur",
    "page_limit": "in",
    "username": "sunt",
    "order_no": "culpa",
    "order_status": "incidunt",
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
    -d '{"refund_status":"modi","ship_status":"voluptas","status":"quia"}'

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
    "refund_status": "modi",
    "ship_status": "voluptas",
    "status": "quia"
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
    -G "http://store.wutang.com/admin/product?page=sunt&page_limit=ratione" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product"
);

let params = {
    "page": "sunt",
    "page_limit": "ratione",
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
    "http://store.wutang.com/admin/product?product_category_id=consectetur&product_name=consequatur&product_name_en=consectetur&thumbnail=quo&slug=magnam&short_description=cum&short_description_en=aut&price=culpa&sale_price=est&stock=voluptatem&seo_title=aspernatur&seo_keyword=inventore&seo_description=aspernatur&benefit=nostrum&benefit_en=reprehenderit&tech_description=delectus&tech_description_en=nostrum&description=aperiam&description_en=qui&usage=ipsa&usage_en=doloribus&main_image=ullam&main_image_2=corrupti&benefit_image=iusto&product_video=eum&status=libero&rating=modi&sold_count=voluptatem&review_count=ea" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product"
);

let params = {
    "product_category_id": "consectetur",
    "product_name": "consequatur",
    "product_name_en": "consectetur",
    "thumbnail": "quo",
    "slug": "magnam",
    "short_description": "cum",
    "short_description_en": "aut",
    "price": "culpa",
    "sale_price": "est",
    "stock": "voluptatem",
    "seo_title": "aspernatur",
    "seo_keyword": "inventore",
    "seo_description": "aspernatur",
    "benefit": "nostrum",
    "benefit_en": "reprehenderit",
    "tech_description": "delectus",
    "tech_description_en": "nostrum",
    "description": "aperiam",
    "description_en": "qui",
    "usage": "ipsa",
    "usage_en": "doloribus",
    "main_image": "ullam",
    "main_image_2": "corrupti",
    "benefit_image": "iusto",
    "product_video": "eum",
    "status": "libero",
    "rating": "modi",
    "sold_count": "voluptatem",
    "review_count": "ea",
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
    "http://store.wutang.com/admin/product/1?product_category_id=fugiat&product_name=beatae&product_name_en=saepe&thumbnail=optio&slug=quia&short_description=mollitia&short_description_en=dolor&price=quis&sale_price=quis&stock=numquam&seo_title=officia&seo_keyword=itaque&seo_description=explicabo&benefit=aliquam&benefit_en=placeat&tech_description=necessitatibus&tech_description_en=veritatis&description=qui&description_en=fugit&usage=sunt&usage_en=nihil&main_image=a&main_image_2=quaerat&benefit_image=illo&product_video=quidem&status=enim&rating=corrupti&sold_count=dolore&review_count=ipsam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product/1"
);

let params = {
    "product_category_id": "fugiat",
    "product_name": "beatae",
    "product_name_en": "saepe",
    "thumbnail": "optio",
    "slug": "quia",
    "short_description": "mollitia",
    "short_description_en": "dolor",
    "price": "quis",
    "sale_price": "quis",
    "stock": "numquam",
    "seo_title": "officia",
    "seo_keyword": "itaque",
    "seo_description": "explicabo",
    "benefit": "aliquam",
    "benefit_en": "placeat",
    "tech_description": "necessitatibus",
    "tech_description_en": "veritatis",
    "description": "qui",
    "description_en": "fugit",
    "usage": "sunt",
    "usage_en": "nihil",
    "main_image": "a",
    "main_image_2": "quaerat",
    "benefit_image": "illo",
    "product_video": "quidem",
    "status": "enim",
    "rating": "corrupti",
    "sold_count": "dolore",
    "review_count": "ipsam",
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
    -G "http://store.wutang.com/admin/product_categories?page=sint&page_limit=modi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories"
);

let params = {
    "page": "sint",
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
    "http://store.wutang.com/admin/product_categories?name=explicabo&thumbnail=vel&banner=aut&title=qui&title_en=temporibus&sub_title=maxime&describe=ipsum&describe_en=aspernatur&describe_img=natus&parent_id=animi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories"
);

let params = {
    "name": "explicabo",
    "thumbnail": "vel",
    "banner": "aut",
    "title": "qui",
    "title_en": "temporibus",
    "sub_title": "maxime",
    "describe": "ipsum",
    "describe_en": "aspernatur",
    "describe_img": "natus",
    "parent_id": "animi",
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
    "http://store.wutang.com/admin/product_categories/1?name=laboriosam&thumbnail=fugit&banner=aut&title=sint&title_en=et&sub_title=officiis&describe=natus&describe_en=beatae&describe_img=et&parent_id=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories/1"
);

let params = {
    "name": "laboriosam",
    "thumbnail": "fugit",
    "banner": "aut",
    "title": "sint",
    "title_en": "et",
    "sub_title": "officiis",
    "describe": "natus",
    "describe_en": "beatae",
    "describe_img": "et",
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
    "http://store.wutang.com/admin/product_sku?title=dolorem&description=non&price=fuga&stock=dolores&product_id=veniam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_sku"
);

let params = {
    "title": "dolorem",
    "description": "non",
    "price": "fuga",
    "stock": "dolores",
    "product_id": "veniam",
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
    "http://store.wutang.com/admin/product_sku/1?title=qui&description=assumenda&price=ullam&stock=in&product_id=quaerat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_sku/1"
);

let params = {
    "title": "qui",
    "description": "assumenda",
    "price": "ullam",
    "stock": "in",
    "product_id": "quaerat",
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
    -G "http://store.wutang.com/admin/the_houses?page=laborum&page_limit=autem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/the_houses"
);

let params = {
    "page": "laborum",
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
    -d '{"title":"molestias","sub_title":"natus","the_house_category_id":"optio","describe":"enim","banner":"autem"}'

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
    "title": "molestias",
    "sub_title": "natus",
    "the_house_category_id": "optio",
    "describe": "enim",
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
    -d '{"title":"molestias","sub_title":"molestiae","the_house_category_id":"rerum","describe":"dolore","banner":"reiciendis"}'

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
    "title": "molestias",
    "sub_title": "molestiae",
    "the_house_category_id": "rerum",
    "describe": "dolore",
    "banner": "reiciendis"
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
    -G "http://store.wutang.com/admin/the_house/category/list?page=nostrum&page_limit=illum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/the_house/category/list"
);

let params = {
    "page": "nostrum",
    "page_limit": "illum",
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
    -d '{"name":"alias","banner":"consectetur","title":"reiciendis","sub_title":"optio"}'

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
    "name": "alias",
    "banner": "consectetur",
    "title": "reiciendis",
    "sub_title": "optio"
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
    -d '{"name":"esse","banner":"fugit","title":"praesentium","sub_title":"aut"}'

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
    "name": "esse",
    "banner": "fugit",
    "title": "praesentium",
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
    -G "http://store.wutang.com/admin/the_house_content/list?page=vitae&page_limit=veniam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/the_house_content/list"
);

let params = {
    "page": "vitae",
    "page_limit": "veniam",
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
    -d '{"the_house_id":"corporis","title":"officiis","content":"tenetur","img":"consequatur","img_desc":"nesciunt"}'

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
    "the_house_id": "corporis",
    "title": "officiis",
    "content": "tenetur",
    "img": "consequatur",
    "img_desc": "nesciunt"
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
    -d '{"the_house_id":"ut","title":"consectetur","content":"ullam","img":"non","img_desc":"voluptatibus"}'

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
    "the_house_id": "ut",
    "title": "consectetur",
    "content": "ullam",
    "img": "non",
    "img_desc": "voluptatibus"
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
    -G "http://store.wutang.com/admin/user?username=non&page=natus&page_limit=nihil" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user"
);

let params = {
    "username": "non",
    "page": "natus",
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
    -d '{"username":"vitae","password":"distinctio","name":"aspernatur","role":"ipsam","company":"commodi","department":"nihil","sex":19,"phone":13,"email":"quam","member_code":"saepe"}'

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
    "username": "vitae",
    "password": "distinctio",
    "name": "aspernatur",
    "role": "ipsam",
    "company": "commodi",
    "department": "nihil",
    "sex": 19,
    "phone": 13,
    "email": "quam",
    "member_code": "saepe"
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
    "http://store.wutang.com/admin/user/1?name=in&email=veritatis&phone=aut&avatar=non" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user/1"
);

let params = {
    "name": "in",
    "email": "veritatis",
    "phone": "aut",
    "avatar": "non",
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
    "http://store.wutang.com/admin/user/reset_password/1?oldPassword=eveniet&newPassword=accusamus&newPassword_confirmation=voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user/reset_password/1"
);

let params = {
    "oldPassword": "eveniet",
    "newPassword": "accusamus",
    "newPassword_confirmation": "voluptatem",
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
    -G "http://store.wutang.com/admin/get_user?hash_id=quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/get_user"
);

let params = {
    "hash_id": "quia",
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
    "http://store.wutang.com/admin/user_addresses?province=recusandae&city=iure&district=saepe&address=error&zip=temporibus&contact_name=id&contact_phone=nam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses"
);

let params = {
    "province": "recusandae",
    "city": "iure",
    "district": "saepe",
    "address": "error",
    "zip": "temporibus",
    "contact_name": "id",
    "contact_phone": "nam",
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
    "http://store.wutang.com/admin/user_addresses/1?address_id=eius&province=harum&city=nam&district=officiis&address=in&zip=in&contact_name=necessitatibus&contact_phone=vel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses/1"
);

let params = {
    "address_id": "eius",
    "province": "harum",
    "city": "nam",
    "district": "officiis",
    "address": "in",
    "zip": "in",
    "contact_name": "necessitatibus",
    "contact_phone": "vel",
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
    "http://store.wutang.com/admin/user_addresses/1?address_id=provident" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses/1"
);

let params = {
    "address_id": "provident",
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
    "http://store.wutang.com/admin/user_profiles/1?profile_id=doloremque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_profiles/1"
);

let params = {
    "profile_id": "doloremque",
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
            "id": 1,
            "img": "https:\/\/lorempixel.com\/640\/480\/?39720",
            "img_location": 1,
            "type": "banner",
            "product_id": 5,
            "product": {
                "id": 5,
                "slug": "ullam-deserunt",
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "omnis at sit"
            }
        },
        "discover": [
            {
                "id": 4,
                "img": "https:\/\/lorempixel.com\/640\/480\/?16801",
                "img_location": 1,
                "type": "discover",
                "product_id": 7,
                "product": {
                    "id": 7,
                    "slug": "nobis-cumque",
                    "product_name": "黑钻赋颜面霜",
                    "product_name_en": "sint est ut"
                }
            },
            {
                "id": 7,
                "img": "https:\/\/lorempixel.com\/640\/480\/?45928",
                "img_location": 1,
                "type": "discover",
                "product_id": 6,
                "product": {
                    "id": 6,
                    "slug": "repellat-aliquam",
                    "product_name": "黑钻洁净滋养面膜",
                    "product_name_en": "modi quod aut"
                }
            },
            {
                "id": 9,
                "img": "https:\/\/lorempixel.com\/640\/480\/?28597",
                "img_location": 1,
                "type": "discover",
                "product_id": 10,
                "product": {
                    "id": 10,
                    "slug": "blanditiis-eos",
                    "product_name": "黑钻璀璨晶透肌底精华",
                    "product_name_en": "rerum reprehenderit blanditiis"
                }
            }
        ],
        "the_house": [
            {
                "id": 23,
                "slug": "beatae-sit",
                "the_house_category_id": 2,
                "banner": "https:\/\/lorempixel.com\/640\/480\/?10565",
                "title": "perspiciatis iste neque",
                "sub_title": "quisquam quia adipisci",
                "describe": "Dolores iusto quas et voluptas. Est sint architecto beatae non eum nihil. Officiis similique qui facere. Ullam quia fugit architecto officia non id architecto."
            },
            {
                "id": 2,
                "slug": "molestias-qui",
                "the_house_category_id": 2,
                "banner": "https:\/\/lorempixel.com\/640\/480\/?91622",
                "title": "eaque in dolorem",
                "sub_title": "in sit veritatis",
                "describe": "Voluptas pariatur natus voluptas placeat voluptatem repellat non. Magni facere quasi et. Id voluptate explicabo iure rerum at rem qui."
            },
            {
                "id": 49,
                "slug": "provident-deleniti",
                "the_house_category_id": 1,
                "banner": "https:\/\/lorempixel.com\/640\/480\/?77264",
                "title": "est ducimus modi",
                "sub_title": "omnis atque qui",
                "describe": "Recusandae nostrum id assumenda animi ut assumenda dolor. Velit quidem culpa et voluptas. Voluptate aspernatur voluptas id neque. Non maiores consequuntur sed sint iusto architecto."
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
            "name": "彩妆盘",
            "slug": "rerum-ex"
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
    -d '{"name":"quis","username":"et","password":"culpa","password_confirmation":"enim","code":"est","captcha_key":"pariatur","captcha_code":"iure","password_question_id":15,"password_answer":"recusandae"}'

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
    "name": "quis",
    "username": "et",
    "password": "culpa",
    "password_confirmation": "enim",
    "code": "est",
    "captcha_key": "pariatur",
    "captcha_code": "iure",
    "password_question_id": 15,
    "password_answer": "recusandae"
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
    -G "http://store.wutang.com/api/user_question?username=assumenda" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_question"
);

let params = {
    "username": "assumenda",
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
        "username": "assumenda"
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
    -d '{"username":"aut","password":"architecto"}'

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
    "username": "aut",
    "password": "architecto"
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
    "http://store.wutang.com/api/password_reset?username=in&password_question_id=reprehenderit&password_answer=maiores&password=ratione&password_confirmation=voluptate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/password_reset"
);

let params = {
    "username": "in",
    "password_question_id": "reprehenderit",
    "password_answer": "maiores",
    "password": "ratione",
    "password_confirmation": "voluptate",
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
    -d '{"oldPassword":"provident","newPassword":"soluta","newPassword_confirmation":"mollitia"}'

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
    "oldPassword": "provident",
    "newPassword": "soluta",
    "newPassword_confirmation": "mollitia"
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
    -G "http://store.wutang.com/api/order_details/1?no=ratione" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/order_details/1"
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
    "http://store.wutang.com/api/orders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"address_id":"nesciunt","remark":"saepe"}'

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
    "address_id": "nesciunt",
    "remark": "saepe"
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
    -d '{"no":1}'

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
    "no": 1
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
    "http://store.wutang.com/api/orders/cancel?no=quam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/orders/cancel"
);

let params = {
    "no": "quam",
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
                "product_category_id": 7,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "laudantium voluptas dolorem",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?31668",
                "slug": "reiciendis-suscipit",
                "short_description": "Qui debitis quia praesentium ex delectus.",
                "short_description_en": "Dolores dicta laboriosam natus nihil unde aut omnis. Doloribus esse ut ex minus. Culpa et id debitis. Et vel voluptatibus rerum. Enim eum sunt exercitationem molestiae libero non.",
                "price": "1953.00",
                "sale_price": "1.00",
                "stock": 238,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "nihil sint est",
                "seo_keyword": "qui",
                "seo_description": "Quo quis minima nobis.",
                "benefit": "Fugiat voluptas et enim numquam. Reprehenderit eligendi quae mollitia maxime modi et consequatur ut. Repellendus amet velit asperiores quod sint. Magnam eos qui sint veritatis modi.",
                "benefit_en": "Velit doloremque vero occaecati pariatur impedit. Quasi aut illo sed nisi cum voluptatem autem. Est atque quidem et.",
                "tech_description": "Dolores et qui hic nesciunt esse quo quia. Dignissimos quidem quidem sed. Qui voluptatibus molestiae sed accusamus.",
                "tech_description_en": "Similique quis cum velit natus quidem omnis. Beatae neque sunt ut necessitatibus nihil. Velit ipsa harum tempore asperiores.",
                "description": "Nemo quasi magni aut eligendi accusamus debitis. Voluptas illum suscipit labore magni voluptas consequatur vero. Esse asperiores sunt quasi qui rerum velit adipisci.",
                "description_en": "Tenetur dolores et voluptates ullam occaecati. Iste est in dolorum numquam enim. Alias voluptatem consequuntur possimus dolorem odit velit. Assumenda omnis ducimus deleniti voluptatem ad rerum.",
                "usage": "Accusamus rerum qui voluptas distinctio. Sapiente libero qui eos tenetur commodi unde voluptates. Illo tenetur accusamus distinctio doloremque incidunt sapiente. Repellendus incidunt molestiae nihil ad.",
                "usage_en": "Nemo cupiditate maxime maiores quos aliquam. Reiciendis nam sed ab repellendus consequatur eum voluptas. Deleniti dicta eos impedit et. Quo placeat at id porro dicta maiores est.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?91076",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?55798",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?39023",
                "product_video": null,
                "status": 3,
                "rating": 2.65,
                "sold_count": 7673,
                "review_count": 5388,
                "created_at": "2020-09-14 08:17:27",
                "updated_at": "2020-09-27 09:42:39",
                "product_category": {
                    "id": 7,
                    "name": "腮红",
                    "slug": "eum-omnis",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?89141",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?73335",
                    "title": "debitis consectetur ab",
                    "title_en": "inventore architecto molestiae",
                    "sub_title": "provident omnis nihil",
                    "describe": "Voluptas sit aut necessitatibus esse quia illo sunt eum. Velit aut a saepe sed a odit eos. Cupiditate quo beatae pariatur debitis autem nam molestiae. Et inventore aut qui occaecati quia ut.",
                    "describe_en": "Quasi corporis earum nesciunt cupiditate. Harum quisquam illo quasi velit. Eius molestias sit veniam numquam consectetur ea voluptatum.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?31818",
                    "parent_id": 5,
                    "level": 1,
                    "created_at": "2020-09-22 11:32:43",
                    "updated_at": "2020-08-30 15:26:04"
                }
            },
            {
                "id": 2,
                "product_category_id": 10,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "eaque earum tenetur",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?36702",
                "slug": "accusantium-ut",
                "short_description": "Tempore soluta fugit ullam in mollitia fugiat.",
                "short_description_en": "Rerum recusandae odit dolores. Quam quia nostrum ad non ut nulla molestiae labore. Quaerat qui aperiam velit nisi aut esse.",
                "price": "6987.00",
                "sale_price": "1.00",
                "stock": 745,
                "spec": "50 ml \/ 1.7 fl. oz",
                "seo_title": "veritatis quasi dolorem",
                "seo_keyword": "aut",
                "seo_description": "In velit eum sed vitae ut quos.",
                "benefit": "Maiores debitis quasi aliquid fuga ut quam. Ad cumque quia maxime tempora autem. Iste ea id earum corrupti. Quo et dolores quia asperiores voluptate soluta dolor consectetur. Rerum et quisquam quia quia ut.",
                "benefit_en": "Ab et pariatur ea quisquam exercitationem. Est repellat ut unde consequatur enim excepturi. Architecto perferendis a maiores quo omnis.",
                "tech_description": "Aperiam quia non id asperiores aut aut quae. In possimus ut et sint aut. Dolore dolores ducimus autem sunt nesciunt occaecati atque. Ut voluptatibus autem deleniti voluptatibus.",
                "tech_description_en": "Voluptatem fugiat qui magnam voluptatibus vel libero nostrum corrupti. Est eos doloremque quas facilis eveniet voluptas. Quod perspiciatis temporibus magni dolorum labore. Dolorem dolores aspernatur sunt exercitationem blanditiis repellat.",
                "description": "Eos molestias sed perspiciatis consequuntur eligendi ut autem doloribus. Aut earum quis earum autem qui quis corrupti. Aut aut distinctio aperiam accusamus asperiores nam. Quas impedit aliquid ut dolor hic.",
                "description_en": "Rem eligendi error quasi dolores ea omnis odio. Voluptatem tempore repellendus a reiciendis reiciendis.",
                "usage": "Cumque ratione deleniti laudantium est quod. Distinctio reiciendis nihil recusandae voluptatem illo fugiat. Nostrum vel quas in minima consequuntur perspiciatis. Assumenda atque eum animi explicabo.",
                "usage_en": "Nulla vel veritatis qui ea autem asperiores. Quod repellendus est itaque. Ut iste doloribus alias eveniet ad ut.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?78467",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?80598",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?67781",
                "product_video": null,
                "status": 1,
                "rating": 0.5,
                "sold_count": 7014,
                "review_count": 8967,
                "created_at": "2020-09-12 02:53:08",
                "updated_at": "2020-09-13 20:25:42",
                "product_category": {
                    "id": 10,
                    "name": "腮红",
                    "slug": "soluta-vel",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?77694",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?96224",
                    "title": "voluptatem omnis ratione",
                    "title_en": "ratione necessitatibus neque",
                    "sub_title": "recusandae necessitatibus dolore",
                    "describe": "Veritatis adipisci et nostrum corporis. Ut accusamus et consequatur corporis accusantium. Sunt ea commodi ut quod.",
                    "describe_en": "Soluta quibusdam quod ut ut ipsum. Dolorem quisquam vitae fugit et. Sit sint voluptatem rem velit ut delectus blanditiis. Esse enim aut saepe adipisci vel quis ipsum aperiam.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?72802",
                    "parent_id": 20,
                    "level": 1,
                    "created_at": "2020-09-26 12:07:08",
                    "updated_at": "2020-09-26 04:30:57"
                }
            },
            {
                "id": 3,
                "product_category_id": 7,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "dolores quasi ex",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?71060",
                "slug": "eligendi-voluptatem",
                "short_description": "Modi maxime culpa tempore dolore consectetur laborum.",
                "short_description_en": "Iste impedit aut alias praesentium dolores aperiam hic voluptas. Commodi ut rerum esse optio omnis. Dolorum molestias aperiam possimus ipsum accusamus id et.",
                "price": "523.00",
                "sale_price": "1.00",
                "stock": 96,
                "spec": "30 ml \/ 1.0 oz.",
                "seo_title": "consequuntur non molestias",
                "seo_keyword": "quibusdam",
                "seo_description": "Consequatur repellat qui est dolorem.",
                "benefit": "Reiciendis optio omnis voluptatem omnis voluptatem rerum. Voluptatem molestias sint quia. Dolorum accusantium possimus et. Tempore omnis occaecati nam rerum.",
                "benefit_en": "Aspernatur vel iste omnis. Similique sed voluptatem at eum ipsum eum. Doloremque qui praesentium odit. Blanditiis id eos ex atque fugit aut.",
                "tech_description": "Perferendis aut aperiam consequatur distinctio. Ab reiciendis nemo aperiam laborum culpa nihil aspernatur. Distinctio amet iste vel eveniet possimus aut.",
                "tech_description_en": "Et odio at est qui magni sint. Sed quo qui nostrum aperiam est. Inventore necessitatibus tenetur praesentium sed facilis est vel amet.",
                "description": "Eligendi quas amet dolores rem sunt. Est non in et consequatur quo. Quo sit voluptatem vitae quod corporis aut. Explicabo blanditiis dolorem omnis quo dolorem iusto fugit.",
                "description_en": "Est consequuntur qui voluptatem alias vitae aliquam rem. Expedita ad odio mollitia veritatis illum. Nihil voluptatibus occaecati aut quam. Et officia eum sit soluta accusamus aut.",
                "usage": "Praesentium eos aut nesciunt voluptate eveniet id consectetur. Aperiam vitae est officia delectus nihil recusandae nostrum. Minima sunt sit rem molestiae ipsa sed.",
                "usage_en": "Velit voluptatum ipsum quis sequi dolor laboriosam necessitatibus. Nam assumenda culpa iste. Porro praesentium laudantium exercitationem consequatur nisi accusantium. Voluptatem soluta a sit aut.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?83566",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?69417",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?87813",
                "product_video": null,
                "status": 1,
                "rating": 4.07,
                "sold_count": 4605,
                "review_count": 6368,
                "created_at": "2020-09-16 23:12:55",
                "updated_at": "2020-09-20 23:43:34",
                "product_category": {
                    "id": 7,
                    "name": "腮红",
                    "slug": "eum-omnis",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?89141",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?73335",
                    "title": "debitis consectetur ab",
                    "title_en": "inventore architecto molestiae",
                    "sub_title": "provident omnis nihil",
                    "describe": "Voluptas sit aut necessitatibus esse quia illo sunt eum. Velit aut a saepe sed a odit eos. Cupiditate quo beatae pariatur debitis autem nam molestiae. Et inventore aut qui occaecati quia ut.",
                    "describe_en": "Quasi corporis earum nesciunt cupiditate. Harum quisquam illo quasi velit. Eius molestias sit veniam numquam consectetur ea voluptatum.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?31818",
                    "parent_id": 5,
                    "level": 1,
                    "created_at": "2020-09-22 11:32:43",
                    "updated_at": "2020-08-30 15:26:04"
                }
            },
            {
                "id": 4,
                "product_category_id": 9,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "id sequi asperiores",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?64977",
                "slug": "eum-optio",
                "short_description": "Aut possimus saepe aut.",
                "short_description_en": "Repellendus facilis nisi voluptatem enim labore maiores dolorem. Et quasi dolore vitae cum magnam. Veritatis explicabo culpa amet delectus odio deserunt eum odit. Non aut eos assumenda.",
                "price": "4831.00",
                "sale_price": "1.00",
                "stock": 695,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "numquam quam tempora",
                "seo_keyword": "nihil",
                "seo_description": "Ut id pariatur vel non et.",
                "benefit": "Totam libero totam quia. Corrupti et numquam consequatur atque. Eum accusamus qui quaerat. Aut qui et exercitationem sapiente dolorum.",
                "benefit_en": "Quis sunt delectus debitis accusamus. Quis dolores numquam quibusdam dolor nesciunt earum qui. Aliquid ullam et dolorem officia. Qui repellat dolore soluta molestias occaecati et corrupti. Iste vitae aut dolorem facere sit rerum omnis voluptas.",
                "tech_description": "Aliquid est id eos accusantium. Corrupti ipsum illo quisquam animi consectetur. Tempora illo placeat et amet nam fugit. Ut cum qui vel officiis aut. Sit est necessitatibus eos dolor.",
                "tech_description_en": "Adipisci libero ipsum repellendus. Sunt assumenda harum tenetur neque. Quaerat rerum laudantium quo consequuntur.",
                "description": "Est repudiandae ipsa nostrum laudantium perferendis pariatur aut. Voluptatem delectus non et aspernatur. Eos neque ad expedita ut autem ducimus. Veritatis sit ut reiciendis accusantium ipsum placeat at. Autem vel optio error unde deserunt eius unde.",
                "description_en": "Ut eius saepe corporis qui. Cum quos est quo sit. Eligendi aut corrupti et molestias provident voluptatem eius. Et magni nesciunt doloremque reiciendis optio odio quas voluptas.",
                "usage": "Veniam aut quos laboriosam. Nobis necessitatibus sequi voluptas nostrum quod magnam architecto sed. Ut perspiciatis est velit culpa. Nulla placeat quidem quaerat in.",
                "usage_en": "Omnis itaque molestiae consequatur possimus earum in eos deleniti. Non ut tempore aliquam eum. Omnis quaerat sapiente illo qui culpa quos. Et voluptas distinctio repudiandae nemo odio voluptates. Ut dolorum recusandae eum nihil consequuntur.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?59333",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?24996",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?74560",
                "product_video": null,
                "status": 2,
                "rating": 9.87,
                "sold_count": 3990,
                "review_count": 2821,
                "created_at": "2020-09-22 07:53:03",
                "updated_at": "2020-09-21 02:39:42",
                "product_category": {
                    "id": 9,
                    "name": "精油",
                    "slug": "dicta-non",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?82960",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?37212",
                    "title": "mollitia totam consequatur",
                    "title_en": "omnis ipsum eveniet",
                    "sub_title": "porro architecto ut",
                    "describe": "Rerum est dolorem qui veniam tenetur facere. Dignissimos quia corrupti autem deleniti occaecati officia. Numquam magni dolorem reiciendis sint sit perspiciatis consequatur.",
                    "describe_en": "Voluptatem non saepe placeat consequatur incidunt. Porro ut repudiandae quas dolor. Sunt earum ipsa est. Ut nesciunt qui quidem ut quis quisquam eum.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?66546",
                    "parent_id": 27,
                    "level": 1,
                    "created_at": "2020-08-30 20:03:37",
                    "updated_at": "2020-09-24 02:11:08"
                }
            },
            {
                "id": 5,
                "product_category_id": 3,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "omnis at sit",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?63796",
                "slug": "ullam-deserunt",
                "short_description": "Error et quia nulla.",
                "short_description_en": "Maiores dolore repellendus quasi tenetur optio. Facere sint rerum nisi molestiae. Cum exercitationem vel eligendi exercitationem eius quia repellat. Consequatur a magni exercitationem tempora odit qui atque blanditiis.",
                "price": "6738.00",
                "sale_price": "1.00",
                "stock": 0,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "quidem a maxime",
                "seo_keyword": "sit",
                "seo_description": "Atque excepturi soluta molestiae.",
                "benefit": "Aliquam et in earum distinctio vel. Omnis illo facilis quaerat qui excepturi autem minima. Et dolorem a fugiat vel distinctio hic rerum. Cupiditate aperiam vero aut ab et laborum. Sint ut possimus aperiam iste.",
                "benefit_en": "Natus rerum harum et et est. Eum vitae ut porro doloremque et libero odit. Rerum rerum voluptatem nulla.",
                "tech_description": "Ad excepturi maxime quod minus et ratione. Autem possimus nulla eum cupiditate quae possimus quia et. Laudantium soluta culpa nam rerum repudiandae.",
                "tech_description_en": "Itaque eligendi temporibus et earum. Dolorum omnis nihil asperiores quia consequatur repudiandae et. Non consequatur vel et. Est pariatur quaerat voluptas quia voluptatem iure eaque.",
                "description": "Id rem ut recusandae aspernatur qui expedita autem facere. Similique iusto quaerat et aut expedita aliquam voluptas nihil. Laboriosam quam est aliquid incidunt ut est. Numquam voluptatum dolor aut reprehenderit voluptatum et. Possimus ut saepe in dolor.",
                "description_en": "Ratione autem soluta sit nesciunt ipsa illo quae reprehenderit. Dolorum veniam vel ipsa ex. Corrupti temporibus maxime aut fuga molestiae molestiae quasi.",
                "usage": "Repellendus amet dolorem dicta. Omnis odio optio exercitationem. Quaerat dolore blanditiis provident voluptas a omnis quam minus.",
                "usage_en": "Repudiandae et dolor officiis debitis. Et voluptatem eaque aliquam voluptatem officiis quibusdam. Dolorem odit atque aut earum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?62624",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?64995",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?72384",
                "product_video": null,
                "status": 2,
                "rating": 4.25,
                "sold_count": 9518,
                "review_count": 5072,
                "created_at": "2020-09-06 20:58:12",
                "updated_at": "2020-09-23 22:56:47",
                "product_category": {
                    "id": 3,
                    "name": "套装系列",
                    "slug": "delectus-provident",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?90724",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?53447",
                    "title": "voluptates sed fuga",
                    "title_en": "officia fugit quas",
                    "sub_title": "et rerum aut",
                    "describe": "Aliquid voluptatem necessitatibus a itaque nihil harum. Aut id inventore enim perspiciatis totam. Illum quam repellat occaecati voluptas itaque culpa et.",
                    "describe_en": "Eius qui velit ut voluptatem suscipit rem. Libero qui nobis nihil id aspernatur. Omnis in rerum voluptatem sapiente cupiditate.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?28843",
                    "parent_id": 19,
                    "level": 1,
                    "created_at": "2020-09-11 13:23:27",
                    "updated_at": "2020-09-01 01:18:36"
                }
            },
            {
                "id": 6,
                "product_category_id": 11,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "modi quod aut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?44771",
                "slug": "repellat-aliquam",
                "short_description": "Ratione provident at recusandae velit molestiae voluptates.",
                "short_description_en": "Ipsam ipsam nulla dolorum quia modi fuga iste. Nihil nemo eveniet voluptas distinctio aspernatur quae et. Porro quo dolorem molestiae ipsa. Temporibus necessitatibus blanditiis aliquam doloribus.",
                "price": "8062.00",
                "sale_price": "1.00",
                "stock": 208,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "quae aut eos",
                "seo_keyword": "quidem",
                "seo_description": "Eos nihil vel sit minima explicabo.",
                "benefit": "A sit rerum mollitia quia et rerum. Et maxime illo ad cumque inventore et nemo. Qui nam cupiditate iste inventore ex.",
                "benefit_en": "Quibusdam aut animi at atque voluptate qui debitis. Ullam aut ut rem voluptas. Dolorem voluptas eum iure vitae maxime.",
                "tech_description": "Numquam fuga eum dolor magni ab et. Sequi numquam omnis labore quis tempore cupiditate. Rerum consectetur non qui et. Laborum laborum ullam animi recusandae aliquam cum esse.",
                "tech_description_en": "Similique aperiam labore consequatur ipsam. Facere ut sed deserunt sunt. Culpa voluptates veritatis ipsam sint. Eius iure ut veniam fugiat velit minus.",
                "description": "Odit qui nihil quidem quos. Voluptate vitae sit atque quo nobis consequatur. Debitis quibusdam aut consequatur nostrum. Expedita quo sit mollitia maiores dolor doloribus optio incidunt.",
                "description_en": "Adipisci nemo aliquid sit. Rem sint doloremque quibusdam beatae unde rerum modi. Quae sit vitae quibusdam. Unde rerum tempora totam quod quos eius.",
                "usage": "Aut rem distinctio qui non non illo sequi. Molestias quia sit asperiores error ab perferendis ex. Temporibus iusto reprehenderit dolorum eveniet magnam velit ut. Consequatur voluptatem qui iure rerum facere veritatis ducimus cum.",
                "usage_en": "Ut voluptas neque non molestiae error et qui omnis. Fugiat cupiditate ea rerum aut excepturi. Quod et blanditiis cum est ut.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?69450",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?30805",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?70163",
                "product_video": null,
                "status": 2,
                "rating": 6.59,
                "sold_count": 3830,
                "review_count": 6851,
                "created_at": "2020-08-30 15:09:19",
                "updated_at": "2020-09-15 13:24:58",
                "product_category": {
                    "id": 11,
                    "name": "套装A",
                    "slug": "a-eaque",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?87349",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?95348",
                    "title": "delectus sapiente itaque",
                    "title_en": "vero modi non",
                    "sub_title": "non aperiam natus",
                    "describe": "In itaque ad exercitationem voluptatum blanditiis. Aut explicabo rerum earum autem. Dolor consequuntur consequatur voluptatem ad cum.",
                    "describe_en": "Vel corrupti molestias qui est quasi quasi libero. Voluptatem earum possimus minima alias illo magni. Consectetur ratione laboriosam id et officiis. Non aut sit iure illum eius.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?70242",
                    "parent_id": 23,
                    "level": 1,
                    "created_at": "2020-09-11 12:45:36",
                    "updated_at": "2020-09-13 13:59:32"
                }
            },
            {
                "id": 7,
                "product_category_id": 4,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "sint est ut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?13661",
                "slug": "nobis-cumque",
                "short_description": "Nisi quia enim reiciendis.",
                "short_description_en": "Commodi eligendi quis perferendis. Suscipit id amet voluptatem dolores. Velit voluptatem soluta suscipit illo tempore tempora excepturi. Nam quibusdam quam ipsum corrupti ut sit mollitia.",
                "price": "6972.00",
                "sale_price": "1.00",
                "stock": 748,
                "spec": "30 ml \/ 1.0 oz.",
                "seo_title": "aut dignissimos odit",
                "seo_keyword": "quis",
                "seo_description": "Odit veniam iusto sed amet suscipit.",
                "benefit": "Dolorum odit ut nesciunt nihil accusamus molestiae. Quis natus voluptas inventore eligendi. Maiores facere cupiditate asperiores voluptate nobis reprehenderit. Fuga atque est sed libero harum et omnis.",
                "benefit_en": "Atque explicabo facilis dignissimos et illum inventore. Tempora facilis eius voluptas et quae. Commodi et ab natus rerum aperiam nisi velit.",
                "tech_description": "Earum et aliquid assumenda officiis et repudiandae porro. Rerum dolor officia dolorum eum reiciendis nobis suscipit. Dolorem sed voluptas et quia asperiores voluptates. Alias nostrum eveniet omnis et id quia quo. Amet tenetur nesciunt omnis aperiam.",
                "tech_description_en": "Consectetur iure dolor minus illo repudiandae. Nesciunt nam saepe quis. Dicta non aut quaerat. Aut fuga et aut ipsa. Quisquam laboriosam eum quis voluptatibus expedita.",
                "description": "Sequi rerum ex voluptas voluptatem officiis. Earum quia quisquam aliquam tempore mollitia possimus. Blanditiis ipsa deserunt atque. Qui modi odit modi nihil dicta.",
                "description_en": "Voluptas eveniet quisquam quia sint. Quia occaecati magni aspernatur magni. Cupiditate deleniti nobis sed molestiae ipsam accusantium velit. Soluta amet iusto adipisci iusto dolores similique. Ea commodi magnam facere aut qui.",
                "usage": "Labore deserunt assumenda voluptates a et suscipit unde. In aut quos assumenda et. Sequi architecto labore adipisci aut.",
                "usage_en": "Debitis aut aut officiis minima nisi omnis. Ipsa neque qui fugiat eum tempore dolorem qui.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?85908",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?16909",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?84267",
                "product_video": null,
                "status": 3,
                "rating": 0.3,
                "sold_count": 2768,
                "review_count": 9385,
                "created_at": "2020-09-21 20:08:55",
                "updated_at": "2020-09-20 21:11:34",
                "product_category": {
                    "id": 4,
                    "name": "彩妆盘",
                    "slug": "perferendis-iusto",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?22175",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?46018",
                    "title": "enim voluptate eveniet",
                    "title_en": "deserunt pariatur fugit",
                    "sub_title": "eum id consequuntur",
                    "describe": "Consectetur qui pariatur dolores non tempora fugit ut. Et ab quis laboriosam ut. Sed rerum dolore nostrum quod enim.",
                    "describe_en": "Voluptatem in et facere ut quibusdam deleniti est aut. At est magni voluptates qui magnam at repudiandae. Nostrum molestiae sequi odio.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?73746",
                    "parent_id": 16,
                    "level": 1,
                    "created_at": "2020-09-26 10:57:15",
                    "updated_at": "2020-09-02 20:00:48"
                }
            },
            {
                "id": 8,
                "product_category_id": 12,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "neque reiciendis qui",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?44654",
                "slug": "pariatur-numquam",
                "short_description": "Iste qui quod quasi exercitationem non.",
                "short_description_en": "Et laborum illum natus est facilis. Aut autem ullam aliquid itaque. Odit quibusdam nisi fuga culpa voluptatem possimus et voluptatem.",
                "price": "5870.00",
                "sale_price": "1.00",
                "stock": 200,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "quam dolores reprehenderit",
                "seo_keyword": "fuga",
                "seo_description": "Corporis dicta sapiente ipsam.",
                "benefit": "Nemo maiores sint quos odit et ut ut. Voluptatem aspernatur aut autem facere tenetur voluptate nihil omnis. Temporibus velit sed qui rerum voluptatem voluptatem eum.",
                "benefit_en": "Esse voluptatem labore omnis cupiditate et voluptas iste maxime. Numquam animi aut reiciendis fugiat excepturi aperiam laborum.",
                "tech_description": "Ex asperiores suscipit ea libero et magni ipsum atque. Occaecati dolores ipsum sit magnam iusto. Similique non aspernatur eveniet consequatur aut sequi eos. Nulla omnis aliquid architecto eos odit.",
                "tech_description_en": "Voluptatem nihil deleniti voluptate voluptas. Omnis tempore consectetur sapiente perferendis.",
                "description": "Labore odit reprehenderit sit fugit harum possimus ut. Aut impedit natus vel cumque incidunt impedit. Eveniet nobis dolorem atque et tenetur iste impedit. Ea quis totam quo et accusantium optio modi nisi.",
                "description_en": "Sunt quisquam rerum sunt impedit. Aut velit eum omnis et omnis velit corrupti. Omnis et corrupti sunt praesentium molestiae provident.",
                "usage": "Eaque vel enim explicabo dolor eum dolores eos. Maxime debitis voluptate repellat accusamus. Vero tempora eaque magnam doloribus repudiandae cumque quae et.",
                "usage_en": "Quisquam qui delectus voluptas et esse facilis. Magnam repellat illum ut vero non. Quo et iure beatae et laboriosam.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?84852",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?57961",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?23060",
                "product_video": null,
                "status": 1,
                "rating": 8.35,
                "sold_count": 6558,
                "review_count": 8647,
                "created_at": "2020-09-04 22:16:24",
                "updated_at": "2020-09-19 06:33:21",
                "product_category": {
                    "id": 12,
                    "name": "粉底液",
                    "slug": "qui-voluptas",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?67273",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?49529",
                    "title": "aut aut et",
                    "title_en": "aut soluta qui",
                    "sub_title": "vero iure iusto",
                    "describe": "Non qui voluptates vel. Labore deleniti et ad occaecati pariatur fugiat. Asperiores ipsa ab eum facere ducimus earum eaque.",
                    "describe_en": "Assumenda eius quia consequatur consequatur aut numquam. Dignissimos cupiditate dicta ut dolor quod voluptatem. Sint optio mollitia sint. Laboriosam reiciendis nemo blanditiis recusandae.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?71724",
                    "parent_id": 27,
                    "level": 1,
                    "created_at": "2020-09-17 05:53:08",
                    "updated_at": "2020-09-25 20:02:25"
                }
            },
            {
                "id": 9,
                "product_category_id": 12,
                "product_name": "黑钻焕肤水",
                "product_name_en": "voluptatem aliquam vitae",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?57458",
                "slug": "magni-quaerat",
                "short_description": "Sit aut tempora occaecati at est.",
                "short_description_en": "Reprehenderit iste enim et quo. Cupiditate voluptatum amet dicta non enim non ut alias.",
                "price": "2609.00",
                "sale_price": "1.00",
                "stock": 804,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "necessitatibus maiores ab",
                "seo_keyword": "ut",
                "seo_description": "Tempora consequatur quo repellendus ut et sint.",
                "benefit": "Eius ducimus beatae quos ipsa. Animi quia ut sunt qui.",
                "benefit_en": "Iure culpa hic porro voluptatem itaque minus. Officia est ipsam voluptatem itaque rerum cupiditate earum. Consequatur consequatur veritatis autem nisi asperiores ut quod. Explicabo dignissimos vero aliquid voluptate.",
                "tech_description": "Mollitia alias et consequatur magni fuga nobis. Ratione autem voluptatem nisi et expedita inventore quae. Dolorum voluptas omnis laboriosam saepe ratione ea deserunt nulla. Aut aperiam commodi a excepturi incidunt. Voluptatum ut omnis aut aliquam natus praesentium.",
                "tech_description_en": "Modi aspernatur tenetur qui error quas. Rem repudiandae ea harum quaerat. Asperiores reprehenderit tempora odio autem dolor incidunt sint. Aut quo repellat consequatur ut sit unde vel.",
                "description": "Quo repudiandae sit ab iusto a commodi ut. Temporibus magni optio est eaque consectetur ipsam error blanditiis.",
                "description_en": "In voluptas omnis omnis dicta et quae. Autem non distinctio est aut omnis enim tenetur. Quas quod omnis et consequatur.",
                "usage": "Consectetur voluptatem cum quos. Aut facere enim eos quis facilis. Delectus ullam ea accusamus. Dignissimos quia quasi minus omnis unde odit.",
                "usage_en": "Quasi beatae ut iure commodi rerum. Aut assumenda libero est adipisci necessitatibus iste in.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?85212",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?14424",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?88354",
                "product_video": null,
                "status": 1,
                "rating": 1.6099999999999999,
                "sold_count": 5508,
                "review_count": 4334,
                "created_at": "2020-09-03 09:05:18",
                "updated_at": "2020-08-31 23:44:56",
                "product_category": {
                    "id": 12,
                    "name": "粉底液",
                    "slug": "qui-voluptas",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?67273",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?49529",
                    "title": "aut aut et",
                    "title_en": "aut soluta qui",
                    "sub_title": "vero iure iusto",
                    "describe": "Non qui voluptates vel. Labore deleniti et ad occaecati pariatur fugiat. Asperiores ipsa ab eum facere ducimus earum eaque.",
                    "describe_en": "Assumenda eius quia consequatur consequatur aut numquam. Dignissimos cupiditate dicta ut dolor quod voluptatem. Sint optio mollitia sint. Laboriosam reiciendis nemo blanditiis recusandae.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?71724",
                    "parent_id": 27,
                    "level": 1,
                    "created_at": "2020-09-17 05:53:08",
                    "updated_at": "2020-09-25 20:02:25"
                }
            },
            {
                "id": 10,
                "product_category_id": 13,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "rerum reprehenderit blanditiis",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?69907",
                "slug": "blanditiis-eos",
                "short_description": "Minus est unde aut distinctio id eum.",
                "short_description_en": "Excepturi amet quasi ut consequatur voluptatem laborum sed nam. Cumque et nostrum suscipit modi fugiat et. Est at nulla sit repellendus labore saepe quia. Aut a velit culpa omnis quidem reprehenderit.",
                "price": "6615.00",
                "sale_price": "1.00",
                "stock": 963,
                "spec": "50 ml \/ 1.7 fl. oz",
                "seo_title": "eveniet quis assumenda",
                "seo_keyword": "aliquid",
                "seo_description": "Debitis qui possimus magnam ex totam qui.",
                "benefit": "Ratione nemo esse accusantium sint est cupiditate unde. Quam delectus vel eum consequatur reprehenderit. Culpa quidem beatae doloremque qui perspiciatis autem. Cumque maiores aut minus reprehenderit est illo nihil. Incidunt sit est totam.",
                "benefit_en": "Omnis iusto saepe vel deserunt aliquid et. Temporibus rem nihil velit aut. Ea ea distinctio possimus eligendi magnam. Natus eveniet quos amet vel.",
                "tech_description": "Quia facilis autem rerum fugit. Nesciunt odio aut ea vel non aut aut. Cumque deserunt sit occaecati dicta.",
                "tech_description_en": "Est consequatur nostrum sed sint placeat fuga est. Cumque minima a iusto non sequi id aut. Magni aperiam laboriosam et impedit sed quia.",
                "description": "Labore nemo omnis occaecati laboriosam impedit. Inventore maxime quia perferendis error omnis ut.",
                "description_en": "Ut deserunt maxime fugiat veniam quaerat culpa. Hic qui ut consequatur ad. Nisi esse deleniti libero ea.",
                "usage": "Ipsum quibusdam non quis voluptate perspiciatis. Nam saepe quasi saepe ad sunt. Eos nihil quod omnis itaque enim voluptas tempora. Vero et rerum placeat omnis est labore nesciunt.",
                "usage_en": "Illum ut sint voluptas porro ullam. Sunt tenetur qui hic mollitia accusamus. Rem molestiae error provident iure cumque odit. Doloremque eum provident cumque eveniet dignissimos nemo.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?29795",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?55328",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?49533",
                "product_video": null,
                "status": 1,
                "rating": 5.61,
                "sold_count": 6226,
                "review_count": 5508,
                "created_at": "2020-08-29 22:08:27",
                "updated_at": "2020-09-23 07:26:37",
                "product_category": {
                    "id": 13,
                    "name": "腮红",
                    "slug": "commodi-est",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?83783",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?44609",
                    "title": "earum deleniti aspernatur",
                    "title_en": "odio consequuntur ex",
                    "sub_title": "repellendus aliquid id",
                    "describe": "Consequuntur enim culpa ducimus qui. Ipsa sint sed fugiat numquam repudiandae. Debitis consequuntur maxime fugit voluptatem voluptatum. Eos consequatur nisi in esse voluptate.",
                    "describe_en": "Et modi et ullam quae in rem porro. Non et occaecati ea est. Velit ea occaecati laudantium sequi et voluptas et. Consequatur at incidunt voluptatem praesentium.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?41079",
                    "parent_id": 12,
                    "level": 1,
                    "created_at": "2020-09-07 08:26:15",
                    "updated_at": "2020-09-13 04:15:31"
                }
            },
            {
                "id": 11,
                "product_category_id": 14,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "voluptatem blanditiis iusto",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?61204",
                "slug": "excepturi-eligendi",
                "short_description": "Ut voluptas quos voluptatum.",
                "short_description_en": "Atque voluptatibus incidunt repellat vel eum. Molestiae consequatur ipsa ipsa et aspernatur minima consequatur. Dicta tempore mollitia inventore voluptatum qui doloribus. Vel et corporis totam eum.",
                "price": "78.00",
                "sale_price": "1.00",
                "stock": 451,
                "spec": "50 ml \/ 1.7 fl. oz",
                "seo_title": "aliquam labore commodi",
                "seo_keyword": "voluptas",
                "seo_description": "Eligendi cum provident ipsum eum.",
                "benefit": "Voluptas repellendus placeat aut maxime explicabo et. Impedit libero ut amet quaerat sed. Ut aut nulla est maxime vel.",
                "benefit_en": "Sunt consequatur molestiae at voluptatem omnis voluptatem. Natus dolor nisi nobis ea sint ut. Modi possimus illo optio consequatur. Ipsam deleniti laborum illum incidunt.",
                "tech_description": "Impedit dolorem nisi facere aperiam accusantium. Officiis est odit et eum consequatur modi magni. Sint perspiciatis aut eos aspernatur cupiditate modi.",
                "tech_description_en": "Distinctio laborum et et hic rerum atque ad. Officiis ullam corporis velit architecto ratione. Qui saepe et necessitatibus optio. Dolore eveniet minima consequuntur fuga.",
                "description": "Numquam non beatae sequi omnis veniam soluta. Accusantium molestias rerum qui vel quo est harum provident.",
                "description_en": "Cum nemo dolorum quia. Dolor voluptates adipisci blanditiis dolor cumque quia voluptas excepturi. Perferendis rerum id facere quisquam quos.",
                "usage": "Minus corporis id corrupti vitae dolores nostrum. Asperiores in culpa voluptas mollitia veniam. Eos et in ea et. Quo velit voluptates inventore aut nemo ipsam. Expedita nisi nihil explicabo quasi.",
                "usage_en": "Atque quaerat beatae dolores veniam iure sit. Fuga qui omnis ut iste. Porro et nesciunt sed. Deleniti aspernatur veniam perspiciatis libero.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?79500",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?25509",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?22182",
                "product_video": null,
                "status": 3,
                "rating": 6.64,
                "sold_count": 7864,
                "review_count": 8848,
                "created_at": "2020-09-07 07:58:04",
                "updated_at": "2020-09-01 13:18:26",
                "product_category": {
                    "id": 14,
                    "name": "BB霜",
                    "slug": "neque-ut",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?57187",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?53117",
                    "title": "occaecati perferendis modi",
                    "title_en": "id porro voluptatibus",
                    "sub_title": "rerum qui veniam",
                    "describe": "Praesentium quo ut vel. Autem omnis nihil ut libero distinctio. Dolorem quia quos repudiandae velit omnis. Quasi quam modi sit magnam.",
                    "describe_en": "Eligendi voluptate nemo aut vel. Et distinctio quia adipisci debitis adipisci dolores. Vitae eum et omnis illo facere. Consequatur id dolores et deserunt est ut.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?83471",
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-09-20 22:37:12",
                    "updated_at": "2020-09-27 07:16:09"
                }
            },
            {
                "id": 12,
                "product_category_id": 11,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "facere necessitatibus veritatis",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?76444",
                "slug": "aut-et",
                "short_description": "Necessitatibus et ipsum autem quos dolor quae.",
                "short_description_en": "Quasi ex temporibus ipsa. Dolorem officiis quia corporis. Nam blanditiis commodi nihil quae perspiciatis fuga eos. Rerum fuga accusantium architecto.",
                "price": "4845.00",
                "sale_price": "1.00",
                "stock": 12,
                "spec": "50 ml \/ 1.7 fl. oz",
                "seo_title": "velit sed at",
                "seo_keyword": "ipsam",
                "seo_description": "Labore ut sed quo inventore sed.",
                "benefit": "Voluptatem similique maxime voluptas ipsam. Nesciunt numquam aut qui nesciunt hic.",
                "benefit_en": "Animi itaque aut velit fugiat ipsam dolorum exercitationem at. Quisquam adipisci et nemo magni. Quos doloremque sint consequatur neque.",
                "tech_description": "Ratione et odit architecto reprehenderit ea. Recusandae quae qui non suscipit consequuntur consequatur. Amet quia est dolorem cupiditate.",
                "tech_description_en": "Explicabo qui ab ut aut velit. In deleniti distinctio quia possimus. Magnam ad nemo ut molestiae eligendi earum dolore. Aut quidem eum et omnis modi quia ea.",
                "description": "Vitae laboriosam occaecati nostrum est aperiam culpa dignissimos. Ipsa asperiores harum sed omnis aut.",
                "description_en": "Corporis molestiae voluptate beatae quisquam ut dolorem atque est. Qui earum quod aperiam maxime. Voluptatem architecto necessitatibus ducimus dolorem ut exercitationem.",
                "usage": "Sed tenetur error asperiores eaque. Pariatur quam nihil ratione debitis. Voluptas excepturi sit aliquam.",
                "usage_en": "Modi eaque est adipisci. Quibusdam in nesciunt a enim. Minus minima iste minus ut. Quo nobis et molestias doloribus.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?49526",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?89971",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?39259",
                "product_video": null,
                "status": 2,
                "rating": 2.33,
                "sold_count": 2008,
                "review_count": 2276,
                "created_at": "2020-09-16 11:52:51",
                "updated_at": "2020-09-14 15:53:57",
                "product_category": {
                    "id": 11,
                    "name": "套装A",
                    "slug": "a-eaque",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?87349",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?95348",
                    "title": "delectus sapiente itaque",
                    "title_en": "vero modi non",
                    "sub_title": "non aperiam natus",
                    "describe": "In itaque ad exercitationem voluptatum blanditiis. Aut explicabo rerum earum autem. Dolor consequuntur consequatur voluptatem ad cum.",
                    "describe_en": "Vel corrupti molestias qui est quasi quasi libero. Voluptatem earum possimus minima alias illo magni. Consectetur ratione laboriosam id et officiis. Non aut sit iure illum eius.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?70242",
                    "parent_id": 23,
                    "level": 1,
                    "created_at": "2020-09-11 12:45:36",
                    "updated_at": "2020-09-13 13:59:32"
                }
            },
            {
                "id": 13,
                "product_category_id": 20,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "unde non ut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?65025",
                "slug": "omnis-magnam",
                "short_description": "Voluptas molestias eligendi aliquam aut voluptatem velit.",
                "short_description_en": "Qui nesciunt ullam sit neque tempora repudiandae excepturi omnis. Modi quibusdam sequi perferendis. Animi doloremque minima est consequatur magnam quod corrupti. Laudantium in in fuga alias voluptatum vero animi. Aut quasi ratione velit.",
                "price": "5741.00",
                "sale_price": "1.00",
                "stock": 745,
                "spec": "30 ml \/ 1.0 oz.",
                "seo_title": "rerum enim necessitatibus",
                "seo_keyword": "sint",
                "seo_description": "Quo quos et voluptatibus libero est doloremque.",
                "benefit": "Libero voluptatem accusantium explicabo voluptas et. Quae sint non provident veniam. Consequatur consequatur odit hic minima ut. Est dignissimos fuga est autem.",
                "benefit_en": "Molestias quia nobis rerum et. Ex doloremque voluptatibus impedit exercitationem. In excepturi autem ipsa nobis rem fugiat animi. Recusandae cum ut ut aut quia corrupti aut aut.",
                "tech_description": "Et sit ab velit expedita. Et et rerum non odio eveniet. Minus quis modi molestiae fuga.",
                "tech_description_en": "Qui quia amet nesciunt quia delectus. Facere facilis est et corporis praesentium non laudantium. Culpa ipsa consequatur eveniet earum nam placeat eos et. Earum beatae libero quisquam alias consectetur nostrum nemo.",
                "description": "Eligendi autem in saepe commodi ex cupiditate. Dolores sequi mollitia praesentium id beatae inventore dolores. Consequatur in architecto est aut. Explicabo cumque non sint delectus occaecati hic quis qui.",
                "description_en": "Molestias debitis temporibus est est quia. Nobis officia dolorem ipsa vero voluptatem. Assumenda vel aspernatur veniam eligendi reprehenderit ipsam molestias. Commodi quasi odio quaerat veniam.",
                "usage": "Libero incidunt dolores qui harum consequatur illo asperiores. Laudantium molestiae vitae aliquam et velit facere. Repellendus qui ut enim non asperiores.",
                "usage_en": "Labore voluptatem aut assumenda hic. Voluptate dolor itaque quas rem quo. A rem culpa ex corporis. Non quam voluptas commodi dicta omnis corrupti.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?99524",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?75365",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?75750",
                "product_video": null,
                "status": 1,
                "rating": 9.49,
                "sold_count": 9071,
                "review_count": 3258,
                "created_at": "2020-09-08 13:25:44",
                "updated_at": "2020-09-10 13:24:01",
                "product_category": {
                    "id": 20,
                    "name": "腮红",
                    "slug": "iusto-molestias",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?41523",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?32724",
                    "title": "provident est eum",
                    "title_en": "omnis eos commodi",
                    "sub_title": "nobis harum corporis",
                    "describe": "Laudantium qui ut et in et aut libero animi. Qui pariatur corporis fugiat cum velit rerum in magnam.",
                    "describe_en": "Est inventore ut possimus dolorum quaerat. Amet ipsa aliquid beatae et est minima earum. Voluptate ullam consequatur delectus. Sint dolores ad nisi porro ratione sed hic.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?47820",
                    "parent_id": 9,
                    "level": 1,
                    "created_at": "2020-09-09 13:23:25",
                    "updated_at": "2020-09-05 11:20:14"
                }
            },
            {
                "id": 14,
                "product_category_id": 6,
                "product_name": "黑钻肌光精华",
                "product_name_en": "accusamus recusandae sit",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?12072",
                "slug": "commodi-quibusdam",
                "short_description": "Enim odit maxime ut dolores.",
                "short_description_en": "Officia vel nihil similique explicabo ut quod. Recusandae optio est dolor aut et qui. Eos qui ad et sit et eum necessitatibus.",
                "price": "3315.00",
                "sale_price": "1.00",
                "stock": 128,
                "spec": "150 ml \/ 2.0 oz",
                "seo_title": "qui voluptates deserunt",
                "seo_keyword": "ut",
                "seo_description": "Labore hic qui reprehenderit amet.",
                "benefit": "Et vel totam non ducimus adipisci quis repellat quis. Nobis voluptatem distinctio odit veritatis nisi ad et. Ducimus aut voluptas eos deserunt tenetur.",
                "benefit_en": "In sit eum vitae eos odit magnam explicabo. Qui voluptatem officia dolore ipsam ratione quo dolorem doloribus. Dolorem est sapiente quod ut quaerat. Fugiat quos dolores dolorum.",
                "tech_description": "Accusamus similique perspiciatis quo dolorem veniam laudantium blanditiis. Id voluptatibus ea sint et saepe repellendus porro. Doloremque nisi pariatur molestias iusto qui natus sint.",
                "tech_description_en": "Quo et ipsam autem cum voluptatem. Iste quasi eveniet porro molestiae fuga ut est. Omnis quasi sed fuga. In quasi expedita recusandae debitis rerum molestias perspiciatis ut. Dolores enim ullam ipsam deleniti sit et modi.",
                "description": "Quo rerum reprehenderit blanditiis ad et dignissimos. Aut repudiandae iusto officia rem iure exercitationem. Eveniet ratione maxime quia in qui.",
                "description_en": "Aut delectus sit non quasi iusto ullam. Vero debitis est et et voluptatum ab. Laborum officiis corporis consectetur quo porro.",
                "usage": "Eligendi dolor qui repellendus ex corporis vel voluptatibus. Impedit error dolorem est.",
                "usage_en": "Tempora dolores qui provident fugiat. Quisquam sed quisquam hic nesciunt nam molestiae. Consectetur assumenda in aut tempore soluta. Iusto non et necessitatibus.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?20120",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?74898",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?84292",
                "product_video": null,
                "status": 3,
                "rating": 1.62,
                "sold_count": 4821,
                "review_count": 2447,
                "created_at": "2020-09-29 09:42:36",
                "updated_at": "2020-09-06 20:41:56",
                "product_category": {
                    "id": 6,
                    "name": "套装系列",
                    "slug": "odio-adipisci",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?32314",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?63771",
                    "title": "cumque et harum",
                    "title_en": "rerum quisquam magnam",
                    "sub_title": "natus corporis ad",
                    "describe": "Ut rem eum ullam et aperiam. Doloribus ea magnam incidunt nulla repudiandae. Perferendis delectus temporibus voluptatem blanditiis.",
                    "describe_en": "Maiores ex sint aliquam corrupti a earum modi. Consequatur saepe tempore consequuntur ea. Ipsam quia ut optio corrupti. Quis quia odit rerum similique beatae voluptatem.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?88297",
                    "parent_id": 13,
                    "level": 1,
                    "created_at": "2020-09-08 01:13:03",
                    "updated_at": "2020-09-27 16:31:13"
                }
            },
            {
                "id": 15,
                "product_category_id": 15,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "aspernatur sit minus",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?74557",
                "slug": "est-unde",
                "short_description": "Sint magnam ipsum et quaerat.",
                "short_description_en": "Explicabo natus natus quia sequi. Quod unde animi molestias voluptas. Rerum iure ipsa voluptas maiores voluptatem. Tempora debitis aliquam aut.",
                "price": "3817.00",
                "sale_price": "1.00",
                "stock": 158,
                "spec": "150 ml \/ 2.0 oz",
                "seo_title": "pariatur id est",
                "seo_keyword": "sed",
                "seo_description": "Occaecati laudantium eius minus sed deleniti.",
                "benefit": "Hic dolore modi est architecto laborum natus vero. Est atque iure illum cumque expedita corrupti qui. Culpa dolor autem ut voluptatem sit optio alias id. Est velit aspernatur eveniet voluptates eum hic debitis.",
                "benefit_en": "Eveniet voluptate exercitationem ipsa eveniet aut totam. Magni aut voluptatum dolor voluptatem cumque est voluptatem. Odit ipsum quidem rem in. Facilis aut et beatae laudantium quo. Sapiente corporis dolorem incidunt et.",
                "tech_description": "Rem assumenda voluptate incidunt vel. Soluta ipsum ducimus praesentium. Quisquam culpa eum odio. Est enim accusantium eligendi sint ut.",
                "tech_description_en": "Ipsa est nobis molestias cum quis expedita sunt. Vitae rerum repellendus possimus dolor natus doloremque. Aut saepe totam molestiae quia. Doloribus nulla ut dolores sunt tempora magnam.",
                "description": "Nisi veniam suscipit consectetur commodi exercitationem autem qui. Consectetur beatae nesciunt perferendis aliquam modi sit fuga. Accusantium doloremque et beatae unde et omnis.",
                "description_en": "Omnis impedit nihil aut dolorem quibusdam molestiae odit. Dicta eligendi est et delectus. Aut quaerat vitae ab veniam. Impedit non voluptatum qui aliquam cupiditate temporibus animi dolore. Autem nihil enim et distinctio rerum beatae.",
                "usage": "Voluptas ad ut et laudantium est ea nobis. Magni ut enim saepe. Enim et ipsum perspiciatis alias.",
                "usage_en": "Impedit eos tenetur dolores cum illo fuga sequi. Nesciunt dolor excepturi repudiandae voluptatem et et. Delectus perferendis rem aut eligendi. Consequatur libero voluptas ad qui eveniet voluptates.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?27150",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?41701",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?29851",
                "product_video": null,
                "status": 1,
                "rating": 7.89,
                "sold_count": 9935,
                "review_count": 5313,
                "created_at": "2020-08-31 00:47:56",
                "updated_at": "2020-09-12 06:37:15",
                "product_category": {
                    "id": 15,
                    "name": "香水",
                    "slug": "doloremque-facere",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?50286",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?60590",
                    "title": "blanditiis cumque expedita",
                    "title_en": "ex amet ut",
                    "sub_title": "quia magnam expedita",
                    "describe": "Quia impedit labore eaque iusto. Voluptates reiciendis rem esse eum sit sed veniam nesciunt.",
                    "describe_en": "Illum repellendus nihil aut tenetur qui. Dicta placeat nostrum corrupti eos eum. Ea suscipit modi architecto modi in. Iure qui ratione aliquam vel ducimus. Et sunt ex molestiae modi.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?34340",
                    "parent_id": 20,
                    "level": 1,
                    "created_at": "2020-09-06 22:17:26",
                    "updated_at": "2020-09-01 08:33:25"
                }
            },
            {
                "id": 16,
                "product_category_id": 2,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "dolorum molestias voluptatum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?90936",
                "slug": "sint-beatae",
                "short_description": "Ea nisi est impedit.",
                "short_description_en": "Est atque non eaque consectetur autem exercitationem quia. Molestiae temporibus consequatur quo tenetur molestiae sint qui. Sint nostrum architecto et. Deserunt delectus et harum pariatur sed. Accusantium officiis praesentium ut dolores.",
                "price": "4853.00",
                "sale_price": "1.00",
                "stock": 611,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "atque eaque qui",
                "seo_keyword": "atque",
                "seo_description": "A voluptas ut excepturi.",
                "benefit": "Non voluptatem dolorem nostrum aut magni sed et. Tenetur in placeat et saepe impedit. Quia saepe odit velit omnis. Cumque rerum eos laudantium aliquid sed labore.",
                "benefit_en": "Necessitatibus dolor velit et aliquid aut labore rerum corporis. Corporis eligendi non nisi laudantium esse tempora sed. Inventore qui molestias commodi consequatur veniam mollitia. Sit fugit voluptas quia aut deleniti sapiente qui. Placeat in qui veritatis in at.",
                "tech_description": "Reiciendis est adipisci soluta quo doloremque. Natus minima similique repellat nesciunt quos asperiores. Consectetur at dolor sit eaque sapiente occaecati consequuntur. Rerum sed et saepe aspernatur et.",
                "tech_description_en": "Autem et delectus laudantium dolor. Et ut quisquam debitis voluptatum eum sequi ab. Numquam consequatur est voluptatibus.",
                "description": "Culpa et ab et repellat quod numquam aliquam. Eveniet quis sit ut eos unde vel accusamus. Laborum quis fugiat voluptatum aut. Modi praesentium id ipsum iusto error ut est. Vel nihil alias ea molestiae unde temporibus.",
                "description_en": "Tenetur impedit vel pariatur maiores dignissimos. Veritatis corrupti et delectus est quo odit. Dolorem assumenda animi qui fuga doloremque.",
                "usage": "Nesciunt et assumenda et voluptate ratione aut ratione. Aut omnis amet quisquam sequi rerum consequatur. Possimus iste maiores a nulla.",
                "usage_en": "Consequuntur aut ut velit repellat. Error et enim expedita quia nam omnis fuga dignissimos. Dolorum repellat quisquam est illum cum et temporibus.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?93785",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?34767",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?79841",
                "product_video": null,
                "status": 3,
                "rating": 2.23,
                "sold_count": 9577,
                "review_count": 4900,
                "created_at": "2020-09-23 19:50:27",
                "updated_at": "2020-09-22 01:36:50",
                "product_category": {
                    "id": 2,
                    "name": "护肤系列",
                    "slug": "ullam-quis",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?32392",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?49664",
                    "title": "similique consequatur pariatur",
                    "title_en": "illo sit alias",
                    "sub_title": "nulla esse at",
                    "describe": "Molestiae voluptatem similique nobis dolor. Sed assumenda atque qui molestiae nobis modi. Hic id molestias eligendi nam assumenda.",
                    "describe_en": "Quia similique architecto aut cumque amet. Id cum accusantium voluptates velit enim ducimus. Architecto natus dolores aut et non illum.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?20376",
                    "parent_id": 18,
                    "level": 1,
                    "created_at": "2020-09-20 14:07:53",
                    "updated_at": "2020-09-11 14:30:04"
                }
            },
            {
                "id": 17,
                "product_category_id": 9,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "assumenda dolores dolor",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?97005",
                "slug": "minima-aut",
                "short_description": "Quaerat qui et voluptatum in ea qui.",
                "short_description_en": "Sint qui modi in repellat. Et totam illo ut amet dignissimos ratione. Exercitationem fugiat et omnis quibusdam. Est reiciendis quae quo rerum nam totam.",
                "price": "246.00",
                "sale_price": "1.00",
                "stock": 220,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "aut error error",
                "seo_keyword": "laudantium",
                "seo_description": "Maiores illum sed vero.",
                "benefit": "Soluta quo sed quia fuga porro. Maxime ex voluptas totam earum aut. Aut sit quisquam eum tempore doloremque.",
                "benefit_en": "Id totam voluptates in ullam et maiores voluptatem. Sequi blanditiis voluptates et sit voluptatum. Voluptatum laboriosam ea sed ratione velit.",
                "tech_description": "Minus sint mollitia repudiandae unde quis quibusdam. Rerum nostrum laudantium nam saepe aut. Tempora maiores nam aliquam inventore natus et est natus. Et provident aliquam aut quia non voluptatem sed.",
                "tech_description_en": "Libero voluptate culpa fugiat eum vel hic dolor. Alias voluptatem voluptas non qui. Et voluptates quia qui velit esse odit debitis cupiditate. Minus dignissimos non consequuntur qui.",
                "description": "Maxime officiis libero consequatur quis non blanditiis eum. Sit voluptatum ad iure. Atque sunt consequatur hic et quasi magnam ad sit. Exercitationem laborum voluptatem nisi nihil ut voluptatem quod.",
                "description_en": "Aut deserunt aut occaecati ea qui qui. Officia omnis possimus sint suscipit consectetur quibusdam. In aperiam minus aut sed.",
                "usage": "Molestiae consectetur vitae quis vitae atque. Voluptates magni facilis excepturi id neque et et. Voluptatem consequuntur dicta doloremque quisquam. Magni non aliquid eveniet quis provident.",
                "usage_en": "Totam ipsa amet asperiores et. Excepturi id at quasi aspernatur. Repudiandae et quo ipsam fugiat. Mollitia exercitationem quis consectetur neque praesentium quis nostrum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?27965",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?60807",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?93095",
                "product_video": null,
                "status": 2,
                "rating": 3.04,
                "sold_count": 5367,
                "review_count": 2452,
                "created_at": "2020-09-02 05:51:03",
                "updated_at": "2020-09-03 10:29:59",
                "product_category": {
                    "id": 9,
                    "name": "精油",
                    "slug": "dicta-non",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?82960",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?37212",
                    "title": "mollitia totam consequatur",
                    "title_en": "omnis ipsum eveniet",
                    "sub_title": "porro architecto ut",
                    "describe": "Rerum est dolorem qui veniam tenetur facere. Dignissimos quia corrupti autem deleniti occaecati officia. Numquam magni dolorem reiciendis sint sit perspiciatis consequatur.",
                    "describe_en": "Voluptatem non saepe placeat consequatur incidunt. Porro ut repudiandae quas dolor. Sunt earum ipsa est. Ut nesciunt qui quidem ut quis quisquam eum.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?66546",
                    "parent_id": 27,
                    "level": 1,
                    "created_at": "2020-08-30 20:03:37",
                    "updated_at": "2020-09-24 02:11:08"
                }
            },
            {
                "id": 18,
                "product_category_id": 2,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "et eligendi atque",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?12192",
                "slug": "quidem-quod",
                "short_description": "Sunt est nihil suscipit nesciunt laboriosam.",
                "short_description_en": "Quo numquam vitae consectetur in minus possimus nobis. Mollitia molestias doloremque at minima corporis consectetur. Nulla assumenda nam expedita qui sint.",
                "price": "2172.00",
                "sale_price": "1.00",
                "stock": 582,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "illum neque non",
                "seo_keyword": "quis",
                "seo_description": "Sit nihil ut eum tenetur ad.",
                "benefit": "Optio itaque consequatur minima. Sit exercitationem quaerat fuga consequatur facilis. Assumenda aut ex et nisi. Qui dolor mollitia dolores sit id fugit quam provident. Ratione quasi sequi iste.",
                "benefit_en": "Impedit velit ipsum eos aut delectus quia id perferendis. Omnis amet eaque cumque accusantium accusantium et molestiae nostrum. Illum dolorem reiciendis esse provident doloremque. Expedita nostrum distinctio incidunt mollitia rerum omnis.",
                "tech_description": "Necessitatibus natus molestiae impedit et sit necessitatibus. Praesentium animi cupiditate incidunt nihil doloremque incidunt officiis. Libero aspernatur aliquam possimus laborum corrupti. Et sit nobis eum molestiae vitae expedita officiis aliquid.",
                "tech_description_en": "Aut quam dolores sit eos. Nisi blanditiis voluptates totam.",
                "description": "Qui quia itaque sed quas officiis aspernatur sed. Facilis nobis nisi impedit placeat. Totam nesciunt magnam et qui. Eaque repellat qui culpa accusamus nihil et.",
                "description_en": "Et eaque neque eos qui. Architecto nulla est ea aliquid voluptatum ratione mollitia. Doloribus in accusantium saepe eum molestiae magnam. Sed quis voluptatem voluptas eveniet quae.",
                "usage": "Dolores maiores omnis reiciendis soluta sit est. Ut voluptate dicta sit. Cum sit laborum qui ea veritatis. Velit impedit nihil aspernatur mollitia est.",
                "usage_en": "Ut nam earum et voluptate est id laborum. Tempora quos commodi qui commodi. Ducimus quasi iusto vel iusto ipsum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?95016",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?64166",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?91537",
                "product_video": null,
                "status": 2,
                "rating": 8.78,
                "sold_count": 9873,
                "review_count": 3355,
                "created_at": "2020-09-18 09:59:24",
                "updated_at": "2020-09-18 12:12:00",
                "product_category": {
                    "id": 2,
                    "name": "护肤系列",
                    "slug": "ullam-quis",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?32392",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?49664",
                    "title": "similique consequatur pariatur",
                    "title_en": "illo sit alias",
                    "sub_title": "nulla esse at",
                    "describe": "Molestiae voluptatem similique nobis dolor. Sed assumenda atque qui molestiae nobis modi. Hic id molestias eligendi nam assumenda.",
                    "describe_en": "Quia similique architecto aut cumque amet. Id cum accusantium voluptates velit enim ducimus. Architecto natus dolores aut et non illum.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?20376",
                    "parent_id": 18,
                    "level": 1,
                    "created_at": "2020-09-20 14:07:53",
                    "updated_at": "2020-09-11 14:30:04"
                }
            },
            {
                "id": 19,
                "product_category_id": 20,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "et aliquam temporibus",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?38285",
                "slug": "nihil-earum",
                "short_description": "Ratione recusandae nihil non sit minus assumenda.",
                "short_description_en": "At nam consequatur eos facilis. Sit non rerum et sit et omnis rerum facere. Officiis unde neque ea. Fuga ipsa est amet. Corrupti iure voluptatem ducimus occaecati.",
                "price": "964.00",
                "sale_price": "1.00",
                "stock": 140,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "natus est saepe",
                "seo_keyword": "voluptas",
                "seo_description": "Dolorem totam sed suscipit.",
                "benefit": "Aspernatur quae mollitia expedita ab. Dolor cupiditate est est. Cupiditate quod non libero ut omnis. Incidunt et sit quaerat qui quibusdam aliquam ex.",
                "benefit_en": "Illo dicta accusantium dolores voluptas fugiat quo. Voluptates aut temporibus est expedita ex distinctio consectetur.",
                "tech_description": "Assumenda adipisci deserunt aut est tempora est. Sunt in qui est et porro nihil. Eum enim libero tempora laboriosam minima nemo molestiae. Quo ut dolorum omnis molestiae et.",
                "tech_description_en": "Et quaerat quidem odio aliquam voluptatem. At sed voluptas totam aperiam et eum in. Nam quaerat explicabo animi et eum illum odio qui. Quidem occaecati et architecto consequatur aliquam eveniet. Ea facere odit illum et.",
                "description": "Sit iure ipsam aut doloribus totam voluptatum est. Fuga hic est quibusdam perspiciatis velit. Hic consequatur id repellendus dicta pariatur ut.",
                "description_en": "Sed modi dolor nihil odio est vel. Magnam eligendi facilis hic quo. Iusto nesciunt et aperiam vel excepturi sint quo. Nulla ab nisi et enim rerum.",
                "usage": "Dolores voluptates animi voluptatem atque. Eos dolore maiores sed exercitationem voluptatem ut soluta. Aliquam mollitia aut non quaerat ea. Aut placeat omnis quo autem a ex aliquam.",
                "usage_en": "Vel suscipit ea atque saepe id sapiente asperiores. Qui et alias sapiente eveniet voluptas. Mollitia aliquam et dolores dolorem.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?40027",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?82954",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?91108",
                "product_video": null,
                "status": 3,
                "rating": 1.3900000000000001,
                "sold_count": 8055,
                "review_count": 4769,
                "created_at": "2020-09-24 16:02:46",
                "updated_at": "2020-09-28 02:45:32",
                "product_category": {
                    "id": 20,
                    "name": "腮红",
                    "slug": "iusto-molestias",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?41523",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?32724",
                    "title": "provident est eum",
                    "title_en": "omnis eos commodi",
                    "sub_title": "nobis harum corporis",
                    "describe": "Laudantium qui ut et in et aut libero animi. Qui pariatur corporis fugiat cum velit rerum in magnam.",
                    "describe_en": "Est inventore ut possimus dolorum quaerat. Amet ipsa aliquid beatae et est minima earum. Voluptate ullam consequatur delectus. Sint dolores ad nisi porro ratione sed hic.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?47820",
                    "parent_id": 9,
                    "level": 1,
                    "created_at": "2020-09-09 13:23:25",
                    "updated_at": "2020-09-05 11:20:14"
                }
            },
            {
                "id": 20,
                "product_category_id": 19,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "sunt explicabo accusamus",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?32873",
                "slug": "et-voluptatibus",
                "short_description": "Sint qui et rerum nihil officia ducimus.",
                "short_description_en": "Maiores ullam incidunt est magni quia doloremque. Est sit sed et id. Est ullam est ratione et asperiores ipsa sequi velit. Magnam unde ut delectus optio et voluptas ut. Nisi libero iure laudantium quisquam earum ducimus similique.",
                "price": "38.00",
                "sale_price": "1.00",
                "stock": 250,
                "spec": "50 ml \/ 1.7 fl. oz",
                "seo_title": "minima rerum quia",
                "seo_keyword": "nulla",
                "seo_description": "Blanditiis molestiae et est praesentium ut.",
                "benefit": "Laboriosam ut illo quidem est iste fugiat. Quis quasi officiis possimus corrupti consequatur est rerum animi. Placeat rerum libero tenetur autem magni repudiandae. Quo id quis autem sequi saepe. Quia esse libero id.",
                "benefit_en": "Velit delectus illo est molestiae exercitationem. Eligendi ab ex nesciunt sapiente reiciendis. In pariatur facere veniam beatae enim odio mollitia. Aliquid ipsa molestiae modi iusto ut. Blanditiis repellendus ad fugit ipsam voluptatem.",
                "tech_description": "Soluta cum cum et facere optio et. Eveniet laboriosam dicta aperiam sapiente omnis. Autem ut nostrum atque ex est nemo. Enim voluptatem voluptas officia temporibus dolor qui.",
                "tech_description_en": "Dolor temporibus eius est magnam. Quod perferendis sed qui laudantium veniam aut harum. Sed doloremque nisi id maxime cupiditate. Et sit voluptas consequatur saepe reiciendis quia. Nisi et occaecati omnis recusandae earum voluptatem.",
                "description": "Alias et sit eligendi qui voluptas. Nisi et aut maxime nobis. Maiores ratione sit accusamus eos expedita sed. Et repudiandae incidunt quia neque. Maiores similique non distinctio assumenda.",
                "description_en": "Nulla aut aut ut aut ab expedita. Est temporibus quae similique voluptatum fuga sit ducimus. Corporis reprehenderit sed sed ut in facilis.",
                "usage": "Hic assumenda nihil quisquam. Dolor nesciunt voluptatibus reprehenderit eum. Eaque aut quae molestiae voluptatem maxime. Qui qui tempore illum facilis ut ut.",
                "usage_en": "Repudiandae ea consectetur iste voluptas laborum consequuntur enim. Sequi perspiciatis nulla soluta. Possimus fugiat voluptas aperiam quibusdam. Possimus nemo illo amet dicta.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?63274",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?26790",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?86058",
                "product_video": null,
                "status": 2,
                "rating": 8.62,
                "sold_count": 5865,
                "review_count": 5682,
                "created_at": "2020-09-05 14:11:28",
                "updated_at": "2020-09-12 17:59:38",
                "product_category": {
                    "id": 19,
                    "name": "套装B",
                    "slug": "itaque-voluptas",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?79306",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?21142",
                    "title": "debitis ab exercitationem",
                    "title_en": "in odit consequatur",
                    "sub_title": "sunt illum ducimus",
                    "describe": "Non similique ducimus sit est rerum. Quo consequatur consequuntur a minus veniam et. Et qui est consequuntur id repellat et sit. Vero iusto asperiores facere aut quo veniam perferendis.",
                    "describe_en": "In sed dolores quo voluptatem. Velit corrupti sed consequatur aut quaerat voluptatibus voluptas. Saepe numquam esse tempora molestiae ut.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?58240",
                    "parent_id": 11,
                    "level": 1,
                    "created_at": "2020-09-11 11:56:48",
                    "updated_at": "2020-09-10 06:17:42"
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
## Get product list by category slug
通过category slug获取对应类别下的产品列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/products/category/vitae-harum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/products/category/vitae-harum"
);

let headers = {
    "Content-Type": "application/json",
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
    -G "http://store.wutang.com/api/products/status/vel?page=distinctio&page_limit=neque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/products/status/vel"
);

let params = {
    "page": "distinctio",
    "page_limit": "neque",
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
            "id": 15,
            "product_category_id": 15,
            "product_name": "黑钻洁净滋养面膜",
            "product_name_en": "aspernatur sit minus",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?74557",
            "slug": "est-unde",
            "short_description": "Sint magnam ipsum et quaerat.",
            "short_description_en": "Explicabo natus natus quia sequi. Quod unde animi molestias voluptas. Rerum iure ipsa voluptas maiores voluptatem. Tempora debitis aliquam aut.",
            "price": "3817.00",
            "sale_price": "1.00",
            "stock": 158,
            "spec": "150 ml \/ 2.0 oz",
            "seo_title": "pariatur id est",
            "seo_keyword": "sed",
            "seo_description": "Occaecati laudantium eius minus sed deleniti.",
            "benefit": "Hic dolore modi est architecto laborum natus vero. Est atque iure illum cumque expedita corrupti qui. Culpa dolor autem ut voluptatem sit optio alias id. Est velit aspernatur eveniet voluptates eum hic debitis.",
            "benefit_en": "Eveniet voluptate exercitationem ipsa eveniet aut totam. Magni aut voluptatum dolor voluptatem cumque est voluptatem. Odit ipsum quidem rem in. Facilis aut et beatae laudantium quo. Sapiente corporis dolorem incidunt et.",
            "tech_description": "Rem assumenda voluptate incidunt vel. Soluta ipsum ducimus praesentium. Quisquam culpa eum odio. Est enim accusantium eligendi sint ut.",
            "tech_description_en": "Ipsa est nobis molestias cum quis expedita sunt. Vitae rerum repellendus possimus dolor natus doloremque. Aut saepe totam molestiae quia. Doloribus nulla ut dolores sunt tempora magnam.",
            "description": "Nisi veniam suscipit consectetur commodi exercitationem autem qui. Consectetur beatae nesciunt perferendis aliquam modi sit fuga. Accusantium doloremque et beatae unde et omnis.",
            "description_en": "Omnis impedit nihil aut dolorem quibusdam molestiae odit. Dicta eligendi est et delectus. Aut quaerat vitae ab veniam. Impedit non voluptatum qui aliquam cupiditate temporibus animi dolore. Autem nihil enim et distinctio rerum beatae.",
            "usage": "Voluptas ad ut et laudantium est ea nobis. Magni ut enim saepe. Enim et ipsum perspiciatis alias.",
            "usage_en": "Impedit eos tenetur dolores cum illo fuga sequi. Nesciunt dolor excepturi repudiandae voluptatem et et. Delectus perferendis rem aut eligendi. Consequatur libero voluptas ad qui eveniet voluptates.",
            "main_image": "https:\/\/lorempixel.com\/640\/480\/?27150",
            "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?41701",
            "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?29851",
            "product_video": null,
            "status": 1,
            "rating": 7.89,
            "sold_count": 9935,
            "review_count": 5313,
            "created_at": "2020-08-31 00:47:56",
            "updated_at": "2020-09-12 06:37:15"
        },
        {
            "id": 9,
            "product_category_id": 12,
            "product_name": "黑钻焕肤水",
            "product_name_en": "voluptatem aliquam vitae",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?57458",
            "slug": "magni-quaerat",
            "short_description": "Sit aut tempora occaecati at est.",
            "short_description_en": "Reprehenderit iste enim et quo. Cupiditate voluptatum amet dicta non enim non ut alias.",
            "price": "2609.00",
            "sale_price": "1.00",
            "stock": 804,
            "spec": "60 ml \/ 2.0 oz",
            "seo_title": "necessitatibus maiores ab",
            "seo_keyword": "ut",
            "seo_description": "Tempora consequatur quo repellendus ut et sint.",
            "benefit": "Eius ducimus beatae quos ipsa. Animi quia ut sunt qui.",
            "benefit_en": "Iure culpa hic porro voluptatem itaque minus. Officia est ipsam voluptatem itaque rerum cupiditate earum. Consequatur consequatur veritatis autem nisi asperiores ut quod. Explicabo dignissimos vero aliquid voluptate.",
            "tech_description": "Mollitia alias et consequatur magni fuga nobis. Ratione autem voluptatem nisi et expedita inventore quae. Dolorum voluptas omnis laboriosam saepe ratione ea deserunt nulla. Aut aperiam commodi a excepturi incidunt. Voluptatum ut omnis aut aliquam natus praesentium.",
            "tech_description_en": "Modi aspernatur tenetur qui error quas. Rem repudiandae ea harum quaerat. Asperiores reprehenderit tempora odio autem dolor incidunt sint. Aut quo repellat consequatur ut sit unde vel.",
            "description": "Quo repudiandae sit ab iusto a commodi ut. Temporibus magni optio est eaque consectetur ipsam error blanditiis.",
            "description_en": "In voluptas omnis omnis dicta et quae. Autem non distinctio est aut omnis enim tenetur. Quas quod omnis et consequatur.",
            "usage": "Consectetur voluptatem cum quos. Aut facere enim eos quis facilis. Delectus ullam ea accusamus. Dignissimos quia quasi minus omnis unde odit.",
            "usage_en": "Quasi beatae ut iure commodi rerum. Aut assumenda libero est adipisci necessitatibus iste in.",
            "main_image": "https:\/\/lorempixel.com\/640\/480\/?85212",
            "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?14424",
            "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?88354",
            "product_video": null,
            "status": 1,
            "rating": 1.6099999999999999,
            "sold_count": 5508,
            "review_count": 4334,
            "created_at": "2020-09-03 09:05:18",
            "updated_at": "2020-08-31 23:44:56"
        },
        {
            "id": 8,
            "product_category_id": 12,
            "product_name": "黑钻洁净滋养面膜",
            "product_name_en": "neque reiciendis qui",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?44654",
            "slug": "pariatur-numquam",
            "short_description": "Iste qui quod quasi exercitationem non.",
            "short_description_en": "Et laborum illum natus est facilis. Aut autem ullam aliquid itaque. Odit quibusdam nisi fuga culpa voluptatem possimus et voluptatem.",
            "price": "5870.00",
            "sale_price": "1.00",
            "stock": 200,
            "spec": "60 ml \/ 2.0 oz",
            "seo_title": "quam dolores reprehenderit",
            "seo_keyword": "fuga",
            "seo_description": "Corporis dicta sapiente ipsam.",
            "benefit": "Nemo maiores sint quos odit et ut ut. Voluptatem aspernatur aut autem facere tenetur voluptate nihil omnis. Temporibus velit sed qui rerum voluptatem voluptatem eum.",
            "benefit_en": "Esse voluptatem labore omnis cupiditate et voluptas iste maxime. Numquam animi aut reiciendis fugiat excepturi aperiam laborum.",
            "tech_description": "Ex asperiores suscipit ea libero et magni ipsum atque. Occaecati dolores ipsum sit magnam iusto. Similique non aspernatur eveniet consequatur aut sequi eos. Nulla omnis aliquid architecto eos odit.",
            "tech_description_en": "Voluptatem nihil deleniti voluptate voluptas. Omnis tempore consectetur sapiente perferendis.",
            "description": "Labore odit reprehenderit sit fugit harum possimus ut. Aut impedit natus vel cumque incidunt impedit. Eveniet nobis dolorem atque et tenetur iste impedit. Ea quis totam quo et accusantium optio modi nisi.",
            "description_en": "Sunt quisquam rerum sunt impedit. Aut velit eum omnis et omnis velit corrupti. Omnis et corrupti sunt praesentium molestiae provident.",
            "usage": "Eaque vel enim explicabo dolor eum dolores eos. Maxime debitis voluptate repellat accusamus. Vero tempora eaque magnam doloribus repudiandae cumque quae et.",
            "usage_en": "Quisquam qui delectus voluptas et esse facilis. Magnam repellat illum ut vero non. Quo et iure beatae et laboriosam.",
            "main_image": "https:\/\/lorempixel.com\/640\/480\/?84852",
            "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?57961",
            "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?23060",
            "product_video": null,
            "status": 1,
            "rating": 8.35,
            "sold_count": 6558,
            "review_count": 8647,
            "created_at": "2020-09-04 22:16:24",
            "updated_at": "2020-09-19 06:33:21"
        },
        {
            "id": 35,
            "product_category_id": 12,
            "product_name": "黑钻肌光精华",
            "product_name_en": "ad expedita aut",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?33585",
            "slug": "magnam-consequuntur",
            "short_description": "Quia quos soluta optio.",
            "short_description_en": "Aut nisi voluptatem nisi. Soluta eius enim enim vel quaerat sit rerum. In velit delectus veniam natus facere sed et.",
            "price": "7091.00",
            "sale_price": "1.00",
            "stock": 49,
            "spec": "160 ml \/ 2.0 oz",
            "seo_title": "et pariatur id",
            "seo_keyword": "fugiat",
            "seo_description": "Sunt voluptatum numquam alias dolorem fuga ut.",
            "benefit": "Accusamus nobis facere fugiat sed voluptatibus consequatur. Dolores non quos nihil et voluptatem consectetur est eius. Rerum expedita repudiandae doloribus provident.",
            "benefit_en": "Qui praesentium et similique vero quo consequatur mollitia. Nisi cupiditate odit reiciendis ut qui dicta. Occaecati nulla et temporibus iusto.",
            "tech_description": "Blanditiis laudantium explicabo qui. Eligendi quasi vero aut omnis nobis architecto. Consequuntur qui vero quas ea. Delectus labore ut quia quos ad. Doloremque quod error sed et adipisci aliquam consequatur.",
            "tech_description_en": "Non molestiae qui nemo minus. Qui voluptatem quis repudiandae aspernatur rerum placeat. Quidem commodi aliquid recusandae labore molestias dignissimos. Dolore quam sed et. Rerum exercitationem sit magni et.",
            "description": "Et est quibusdam illo fugiat rerum quisquam quas doloribus. Et accusantium voluptas sequi maiores. Minus qui rerum explicabo non quidem.",
            "description_en": "Incidunt veniam odit ipsam dolore. Qui fugit deserunt rem rerum. Dolor rerum quaerat architecto. Qui magni consequatur quibusdam occaecati harum velit corrupti.",
            "usage": "Officia sunt tenetur atque officiis dolor quo. Dolore expedita rerum velit nobis officia et.",
            "usage_en": "Id omnis quia saepe tempora labore. Nam voluptatem natus error ullam. Nam sed voluptatibus et. Architecto necessitatibus inventore sint quae fugit voluptas dolore.",
            "main_image": "https:\/\/lorempixel.com\/640\/480\/?63259",
            "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?24530",
            "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?55744",
            "product_video": null,
            "status": 1,
            "rating": 1.49,
            "sold_count": 7557,
            "review_count": 5628,
            "created_at": "2020-09-06 13:22:30",
            "updated_at": "2020-09-03 02:01:43"
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
            "name": "套装系列",
            "slug": "delectus-provident",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?90724",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?53447",
            "title": "voluptates sed fuga",
            "title_en": "officia fugit quas",
            "sub_title": "et rerum aut",
            "describe": "Aliquid voluptatem necessitatibus a itaque nihil harum. Aut id inventore enim perspiciatis totam. Illum quam repellat occaecati voluptas itaque culpa et.",
            "describe_en": "Eius qui velit ut voluptatem suscipit rem. Libero qui nobis nihil id aspernatur. Omnis in rerum voluptatem sapiente cupiditate.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?28843",
            "parent_id": 19,
            "level": 1,
            "created_at": "2020-09-11 13:23:27",
            "updated_at": "2020-09-01 01:18:36",
            "children": [
                {
                    "id": 14,
                    "name": "BB霜",
                    "slug": "neque-ut",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?57187",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?53117",
                    "title": "occaecati perferendis modi",
                    "title_en": "id porro voluptatibus",
                    "sub_title": "rerum qui veniam",
                    "describe": "Praesentium quo ut vel. Autem omnis nihil ut libero distinctio. Dolorem quia quos repudiandae velit omnis. Quasi quam modi sit magnam.",
                    "describe_en": "Eligendi voluptate nemo aut vel. Et distinctio quia adipisci debitis adipisci dolores. Vitae eum et omnis illo facere. Consequatur id dolores et deserunt est ut.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?83471",
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-09-20 22:37:12",
                    "updated_at": "2020-09-27 07:16:09"
                }
            ]
        },
        {
            "id": 5,
            "name": "睫毛膏",
            "slug": "ab-fugit",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?68129",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?16226",
            "title": "dolore tenetur culpa",
            "title_en": "provident rerum numquam",
            "sub_title": "qui a nesciunt",
            "describe": "Eos alias ad illum. Recusandae sunt qui quia quia et. Nam recusandae ratione vel ipsam doloribus.",
            "describe_en": "Voluptatem qui in dolorem deserunt consequatur sunt fugiat voluptatem. Eum quae qui quasi soluta. Inventore qui alias voluptate atque consequatur consequatur. Porro modi ratione ipsa et.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?47987",
            "parent_id": 21,
            "level": 1,
            "created_at": "2020-08-31 20:20:58",
            "updated_at": "2020-09-02 14:57:23",
            "children": [
                {
                    "id": 7,
                    "name": "腮红",
                    "slug": "eum-omnis",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?89141",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?73335",
                    "title": "debitis consectetur ab",
                    "title_en": "inventore architecto molestiae",
                    "sub_title": "provident omnis nihil",
                    "describe": "Voluptas sit aut necessitatibus esse quia illo sunt eum. Velit aut a saepe sed a odit eos. Cupiditate quo beatae pariatur debitis autem nam molestiae. Et inventore aut qui occaecati quia ut.",
                    "describe_en": "Quasi corporis earum nesciunt cupiditate. Harum quisquam illo quasi velit. Eius molestias sit veniam numquam consectetur ea voluptatum.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?31818",
                    "parent_id": 5,
                    "level": 1,
                    "created_at": "2020-09-22 11:32:43",
                    "updated_at": "2020-08-30 15:26:04"
                }
            ]
        },
        {
            "id": 6,
            "name": "套装系列",
            "slug": "odio-adipisci",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?32314",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?63771",
            "title": "cumque et harum",
            "title_en": "rerum quisquam magnam",
            "sub_title": "natus corporis ad",
            "describe": "Ut rem eum ullam et aperiam. Doloribus ea magnam incidunt nulla repudiandae. Perferendis delectus temporibus voluptatem blanditiis.",
            "describe_en": "Maiores ex sint aliquam corrupti a earum modi. Consequatur saepe tempore consequuntur ea. Ipsam quia ut optio corrupti. Quis quia odit rerum similique beatae voluptatem.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?88297",
            "parent_id": 13,
            "level": 1,
            "created_at": "2020-09-08 01:13:03",
            "updated_at": "2020-09-27 16:31:13",
            "children": [
                {
                    "id": 25,
                    "name": "护肤系列",
                    "slug": "sed-velit",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?54860",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?85415",
                    "title": "tempora aliquid id",
                    "title_en": "quis recusandae ea",
                    "sub_title": "eaque maiores blanditiis",
                    "describe": "At et enim est aut consequatur et facere voluptates. Porro consectetur magnam incidunt aut. Aut est ratione consequatur. Excepturi voluptatibus ex aut voluptatem eos.",
                    "describe_en": "Totam minus rerum qui nobis sit. Tempore ab modi consectetur ullam dolorem occaecati voluptas asperiores. Eos ut earum corrupti. Voluptatem non nihil quaerat.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?56793",
                    "parent_id": 6,
                    "level": 1,
                    "created_at": "2020-09-15 13:21:16",
                    "updated_at": "2020-09-18 01:20:37"
                }
            ]
        },
        {
            "id": 9,
            "name": "精油",
            "slug": "dicta-non",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?82960",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?37212",
            "title": "mollitia totam consequatur",
            "title_en": "omnis ipsum eveniet",
            "sub_title": "porro architecto ut",
            "describe": "Rerum est dolorem qui veniam tenetur facere. Dignissimos quia corrupti autem deleniti occaecati officia. Numquam magni dolorem reiciendis sint sit perspiciatis consequatur.",
            "describe_en": "Voluptatem non saepe placeat consequatur incidunt. Porro ut repudiandae quas dolor. Sunt earum ipsa est. Ut nesciunt qui quidem ut quis quisquam eum.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?66546",
            "parent_id": 27,
            "level": 1,
            "created_at": "2020-08-30 20:03:37",
            "updated_at": "2020-09-24 02:11:08",
            "children": [
                {
                    "id": 20,
                    "name": "腮红",
                    "slug": "iusto-molestias",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?41523",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?32724",
                    "title": "provident est eum",
                    "title_en": "omnis eos commodi",
                    "sub_title": "nobis harum corporis",
                    "describe": "Laudantium qui ut et in et aut libero animi. Qui pariatur corporis fugiat cum velit rerum in magnam.",
                    "describe_en": "Est inventore ut possimus dolorum quaerat. Amet ipsa aliquid beatae et est minima earum. Voluptate ullam consequatur delectus. Sint dolores ad nisi porro ratione sed hic.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?47820",
                    "parent_id": 9,
                    "level": 1,
                    "created_at": "2020-09-09 13:23:25",
                    "updated_at": "2020-09-05 11:20:14"
                }
            ]
        },
        {
            "id": 10,
            "name": "腮红",
            "slug": "soluta-vel",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?77694",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?96224",
            "title": "voluptatem omnis ratione",
            "title_en": "ratione necessitatibus neque",
            "sub_title": "recusandae necessitatibus dolore",
            "describe": "Veritatis adipisci et nostrum corporis. Ut accusamus et consequatur corporis accusantium. Sunt ea commodi ut quod.",
            "describe_en": "Soluta quibusdam quod ut ut ipsum. Dolorem quisquam vitae fugit et. Sit sint voluptatem rem velit ut delectus blanditiis. Esse enim aut saepe adipisci vel quis ipsum aperiam.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?72802",
            "parent_id": 20,
            "level": 1,
            "created_at": "2020-09-26 12:07:08",
            "updated_at": "2020-09-26 04:30:57",
            "children": [
                {
                    "id": 1,
                    "name": "隔离",
                    "slug": "qui-dolor",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?87570",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?26494",
                    "title": "est vel sit",
                    "title_en": "non aliquam hic",
                    "sub_title": "dolor at iusto",
                    "describe": "Aut sit totam consectetur molestiae ea. Facere eius inventore deleniti nulla delectus. Nihil nihil perspiciatis repellat qui dicta facere. Error aut aspernatur rerum.",
                    "describe_en": "Nihil doloribus dolorem ab perferendis et tempore. Fugiat tenetur pariatur accusantium numquam commodi et. Incidunt distinctio quasi facilis reiciendis ipsum nobis.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?84973",
                    "parent_id": 10,
                    "level": 1,
                    "created_at": "2020-09-26 23:30:34",
                    "updated_at": "2020-09-19 12:07:54"
                },
                {
                    "id": 16,
                    "name": "洁面",
                    "slug": "molestias-ipsum",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?13116",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?13574",
                    "title": "est fugit debitis",
                    "title_en": "sapiente iste nemo",
                    "sub_title": "facere nihil repudiandae",
                    "describe": "Vel officia doloribus voluptates eos velit. Veritatis dolore ut eius voluptate quibusdam maiores. Sed dicta praesentium sit vel repellat.",
                    "describe_en": "Cupiditate quo qui fugit in impedit quos fuga beatae. Sed earum sequi et inventore veritatis non.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?82497",
                    "parent_id": 10,
                    "level": 1,
                    "created_at": "2020-09-07 20:35:50",
                    "updated_at": "2020-09-27 03:10:18"
                }
            ]
        },
        {
            "id": 11,
            "name": "套装A",
            "slug": "a-eaque",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?87349",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?95348",
            "title": "delectus sapiente itaque",
            "title_en": "vero modi non",
            "sub_title": "non aperiam natus",
            "describe": "In itaque ad exercitationem voluptatum blanditiis. Aut explicabo rerum earum autem. Dolor consequuntur consequatur voluptatem ad cum.",
            "describe_en": "Vel corrupti molestias qui est quasi quasi libero. Voluptatem earum possimus minima alias illo magni. Consectetur ratione laboriosam id et officiis. Non aut sit iure illum eius.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?70242",
            "parent_id": 23,
            "level": 1,
            "created_at": "2020-09-11 12:45:36",
            "updated_at": "2020-09-13 13:59:32",
            "children": [
                {
                    "id": 19,
                    "name": "套装B",
                    "slug": "itaque-voluptas",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?79306",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?21142",
                    "title": "debitis ab exercitationem",
                    "title_en": "in odit consequatur",
                    "sub_title": "sunt illum ducimus",
                    "describe": "Non similique ducimus sit est rerum. Quo consequatur consequuntur a minus veniam et. Et qui est consequuntur id repellat et sit. Vero iusto asperiores facere aut quo veniam perferendis.",
                    "describe_en": "In sed dolores quo voluptatem. Velit corrupti sed consequatur aut quaerat voluptatibus voluptas. Saepe numquam esse tempora molestiae ut.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?58240",
                    "parent_id": 11,
                    "level": 1,
                    "created_at": "2020-09-11 11:56:48",
                    "updated_at": "2020-09-10 06:17:42"
                }
            ]
        },
        {
            "id": 12,
            "name": "粉底液",
            "slug": "qui-voluptas",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?67273",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?49529",
            "title": "aut aut et",
            "title_en": "aut soluta qui",
            "sub_title": "vero iure iusto",
            "describe": "Non qui voluptates vel. Labore deleniti et ad occaecati pariatur fugiat. Asperiores ipsa ab eum facere ducimus earum eaque.",
            "describe_en": "Assumenda eius quia consequatur consequatur aut numquam. Dignissimos cupiditate dicta ut dolor quod voluptatem. Sint optio mollitia sint. Laboriosam reiciendis nemo blanditiis recusandae.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?71724",
            "parent_id": 27,
            "level": 1,
            "created_at": "2020-09-17 05:53:08",
            "updated_at": "2020-09-25 20:02:25",
            "children": [
                {
                    "id": 13,
                    "name": "腮红",
                    "slug": "commodi-est",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?83783",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?44609",
                    "title": "earum deleniti aspernatur",
                    "title_en": "odio consequuntur ex",
                    "sub_title": "repellendus aliquid id",
                    "describe": "Consequuntur enim culpa ducimus qui. Ipsa sint sed fugiat numquam repudiandae. Debitis consequuntur maxime fugit voluptatem voluptatum. Eos consequatur nisi in esse voluptate.",
                    "describe_en": "Et modi et ullam quae in rem porro. Non et occaecati ea est. Velit ea occaecati laudantium sequi et voluptas et. Consequatur at incidunt voluptatem praesentium.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?41079",
                    "parent_id": 12,
                    "level": 1,
                    "created_at": "2020-09-07 08:26:15",
                    "updated_at": "2020-09-13 04:15:31"
                }
            ]
        },
        {
            "id": 13,
            "name": "腮红",
            "slug": "commodi-est",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?83783",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?44609",
            "title": "earum deleniti aspernatur",
            "title_en": "odio consequuntur ex",
            "sub_title": "repellendus aliquid id",
            "describe": "Consequuntur enim culpa ducimus qui. Ipsa sint sed fugiat numquam repudiandae. Debitis consequuntur maxime fugit voluptatem voluptatum. Eos consequatur nisi in esse voluptate.",
            "describe_en": "Et modi et ullam quae in rem porro. Non et occaecati ea est. Velit ea occaecati laudantium sequi et voluptas et. Consequatur at incidunt voluptatem praesentium.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?41079",
            "parent_id": 12,
            "level": 1,
            "created_at": "2020-09-07 08:26:15",
            "updated_at": "2020-09-13 04:15:31",
            "children": [
                {
                    "id": 6,
                    "name": "套装系列",
                    "slug": "odio-adipisci",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?32314",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?63771",
                    "title": "cumque et harum",
                    "title_en": "rerum quisquam magnam",
                    "sub_title": "natus corporis ad",
                    "describe": "Ut rem eum ullam et aperiam. Doloribus ea magnam incidunt nulla repudiandae. Perferendis delectus temporibus voluptatem blanditiis.",
                    "describe_en": "Maiores ex sint aliquam corrupti a earum modi. Consequatur saepe tempore consequuntur ea. Ipsam quia ut optio corrupti. Quis quia odit rerum similique beatae voluptatem.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?88297",
                    "parent_id": 13,
                    "level": 1,
                    "created_at": "2020-09-08 01:13:03",
                    "updated_at": "2020-09-27 16:31:13"
                }
            ]
        },
        {
            "id": 16,
            "name": "洁面",
            "slug": "molestias-ipsum",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?13116",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?13574",
            "title": "est fugit debitis",
            "title_en": "sapiente iste nemo",
            "sub_title": "facere nihil repudiandae",
            "describe": "Vel officia doloribus voluptates eos velit. Veritatis dolore ut eius voluptate quibusdam maiores. Sed dicta praesentium sit vel repellat.",
            "describe_en": "Cupiditate quo qui fugit in impedit quos fuga beatae. Sed earum sequi et inventore veritatis non.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?82497",
            "parent_id": 10,
            "level": 1,
            "created_at": "2020-09-07 20:35:50",
            "updated_at": "2020-09-27 03:10:18",
            "children": [
                {
                    "id": 4,
                    "name": "彩妆盘",
                    "slug": "perferendis-iusto",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?22175",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?46018",
                    "title": "enim voluptate eveniet",
                    "title_en": "deserunt pariatur fugit",
                    "sub_title": "eum id consequuntur",
                    "describe": "Consectetur qui pariatur dolores non tempora fugit ut. Et ab quis laboriosam ut. Sed rerum dolore nostrum quod enim.",
                    "describe_en": "Voluptatem in et facere ut quibusdam deleniti est aut. At est magni voluptates qui magnam at repudiandae. Nostrum molestiae sequi odio.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?73746",
                    "parent_id": 16,
                    "level": 1,
                    "created_at": "2020-09-26 10:57:15",
                    "updated_at": "2020-09-02 20:00:48"
                },
                {
                    "id": 24,
                    "name": "粉底液",
                    "slug": "expedita-adipisci",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?15433",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?81746",
                    "title": "pariatur ea voluptas",
                    "title_en": "quasi iure hic",
                    "sub_title": "reiciendis dolores omnis",
                    "describe": "Laudantium et aliquid eaque ut qui. Dolorum eum eaque inventore autem quisquam sit. Velit unde doloribus expedita similique voluptate. Magnam distinctio quia ipsa sit reiciendis voluptas ut.",
                    "describe_en": "Rem enim neque labore veniam quidem a. Assumenda dolores nisi totam quod. Id aut modi rerum impedit. Deleniti quo eligendi ex culpa quidem.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?14925",
                    "parent_id": 16,
                    "level": 1,
                    "created_at": "2020-09-01 02:16:28",
                    "updated_at": "2020-09-24 10:55:32"
                }
            ]
        },
        {
            "id": 17,
            "name": "套装系列",
            "slug": "aliquid-voluptatem",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?79471",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?44186",
            "title": "est quisquam corrupti",
            "title_en": "ut corporis blanditiis",
            "sub_title": "et enim at",
            "describe": "Ipsam consequatur non delectus dolorem. Aut dolore consequatur id provident est et. Quaerat aliquam cupiditate sit maiores quis omnis alias.",
            "describe_en": "Repellat alias sed esse ipsum ut iusto. Ad repudiandae cumque mollitia nam. Aspernatur sunt id laboriosam est.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?18567",
            "parent_id": 17,
            "level": 1,
            "created_at": "2020-09-28 09:28:56",
            "updated_at": "2020-09-01 19:36:37",
            "children": [
                {
                    "id": 17,
                    "name": "套装系列",
                    "slug": "aliquid-voluptatem",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?79471",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?44186",
                    "title": "est quisquam corrupti",
                    "title_en": "ut corporis blanditiis",
                    "sub_title": "et enim at",
                    "describe": "Ipsam consequatur non delectus dolorem. Aut dolore consequatur id provident est et. Quaerat aliquam cupiditate sit maiores quis omnis alias.",
                    "describe_en": "Repellat alias sed esse ipsum ut iusto. Ad repudiandae cumque mollitia nam. Aspernatur sunt id laboriosam est.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?18567",
                    "parent_id": 17,
                    "level": 1,
                    "created_at": "2020-09-28 09:28:56",
                    "updated_at": "2020-09-01 19:36:37"
                }
            ]
        },
        {
            "id": 18,
            "name": "眼线",
            "slug": "vel-quod",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?52777",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?16835",
            "title": "ut in a",
            "title_en": "odio neque laboriosam",
            "sub_title": "nihil voluptatibus quasi",
            "describe": "Officia odio sit sequi vel tempora est. Cumque ut nam necessitatibus voluptatibus.",
            "describe_en": "At dicta velit quis quia velit veritatis culpa. Saepe et ullam et repudiandae. Repellat iusto porro numquam qui incidunt reprehenderit enim laborum.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?59529",
            "parent_id": 30,
            "level": 1,
            "created_at": "2020-09-02 14:04:11",
            "updated_at": "2020-09-15 07:53:26",
            "children": [
                {
                    "id": 2,
                    "name": "护肤系列",
                    "slug": "ullam-quis",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?32392",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?49664",
                    "title": "similique consequatur pariatur",
                    "title_en": "illo sit alias",
                    "sub_title": "nulla esse at",
                    "describe": "Molestiae voluptatem similique nobis dolor. Sed assumenda atque qui molestiae nobis modi. Hic id molestias eligendi nam assumenda.",
                    "describe_en": "Quia similique architecto aut cumque amet. Id cum accusantium voluptates velit enim ducimus. Architecto natus dolores aut et non illum.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?20376",
                    "parent_id": 18,
                    "level": 1,
                    "created_at": "2020-09-20 14:07:53",
                    "updated_at": "2020-09-11 14:30:04"
                }
            ]
        },
        {
            "id": 19,
            "name": "套装B",
            "slug": "itaque-voluptas",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?79306",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?21142",
            "title": "debitis ab exercitationem",
            "title_en": "in odit consequatur",
            "sub_title": "sunt illum ducimus",
            "describe": "Non similique ducimus sit est rerum. Quo consequatur consequuntur a minus veniam et. Et qui est consequuntur id repellat et sit. Vero iusto asperiores facere aut quo veniam perferendis.",
            "describe_en": "In sed dolores quo voluptatem. Velit corrupti sed consequatur aut quaerat voluptatibus voluptas. Saepe numquam esse tempora molestiae ut.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?58240",
            "parent_id": 11,
            "level": 1,
            "created_at": "2020-09-11 11:56:48",
            "updated_at": "2020-09-10 06:17:42",
            "children": [
                {
                    "id": 3,
                    "name": "套装系列",
                    "slug": "delectus-provident",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?90724",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?53447",
                    "title": "voluptates sed fuga",
                    "title_en": "officia fugit quas",
                    "sub_title": "et rerum aut",
                    "describe": "Aliquid voluptatem necessitatibus a itaque nihil harum. Aut id inventore enim perspiciatis totam. Illum quam repellat occaecati voluptas itaque culpa et.",
                    "describe_en": "Eius qui velit ut voluptatem suscipit rem. Libero qui nobis nihil id aspernatur. Omnis in rerum voluptatem sapiente cupiditate.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?28843",
                    "parent_id": 19,
                    "level": 1,
                    "created_at": "2020-09-11 13:23:27",
                    "updated_at": "2020-09-01 01:18:36"
                }
            ]
        },
        {
            "id": 20,
            "name": "腮红",
            "slug": "iusto-molestias",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?41523",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?32724",
            "title": "provident est eum",
            "title_en": "omnis eos commodi",
            "sub_title": "nobis harum corporis",
            "describe": "Laudantium qui ut et in et aut libero animi. Qui pariatur corporis fugiat cum velit rerum in magnam.",
            "describe_en": "Est inventore ut possimus dolorum quaerat. Amet ipsa aliquid beatae et est minima earum. Voluptate ullam consequatur delectus. Sint dolores ad nisi porro ratione sed hic.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?47820",
            "parent_id": 9,
            "level": 1,
            "created_at": "2020-09-09 13:23:25",
            "updated_at": "2020-09-05 11:20:14",
            "children": [
                {
                    "id": 10,
                    "name": "腮红",
                    "slug": "soluta-vel",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?77694",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?96224",
                    "title": "voluptatem omnis ratione",
                    "title_en": "ratione necessitatibus neque",
                    "sub_title": "recusandae necessitatibus dolore",
                    "describe": "Veritatis adipisci et nostrum corporis. Ut accusamus et consequatur corporis accusantium. Sunt ea commodi ut quod.",
                    "describe_en": "Soluta quibusdam quod ut ut ipsum. Dolorem quisquam vitae fugit et. Sit sint voluptatem rem velit ut delectus blanditiis. Esse enim aut saepe adipisci vel quis ipsum aperiam.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?72802",
                    "parent_id": 20,
                    "level": 1,
                    "created_at": "2020-09-26 12:07:08",
                    "updated_at": "2020-09-26 04:30:57"
                },
                {
                    "id": 15,
                    "name": "香水",
                    "slug": "doloremque-facere",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?50286",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?60590",
                    "title": "blanditiis cumque expedita",
                    "title_en": "ex amet ut",
                    "sub_title": "quia magnam expedita",
                    "describe": "Quia impedit labore eaque iusto. Voluptates reiciendis rem esse eum sit sed veniam nesciunt.",
                    "describe_en": "Illum repellendus nihil aut tenetur qui. Dicta placeat nostrum corrupti eos eum. Ea suscipit modi architecto modi in. Iure qui ratione aliquam vel ducimus. Et sunt ex molestiae modi.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?34340",
                    "parent_id": 20,
                    "level": 1,
                    "created_at": "2020-09-06 22:17:26",
                    "updated_at": "2020-09-01 08:33:25"
                }
            ]
        },
        {
            "id": 21,
            "name": "套装C",
            "slug": "id-rerum",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?18553",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?43268",
            "title": "quisquam cupiditate rem",
            "title_en": "voluptatibus aliquid voluptas",
            "sub_title": "ullam deserunt voluptatem",
            "describe": "Omnis nobis nihil quis aut perspiciatis quia. Molestiae velit dolorem maiores incidunt illum asperiores. Enim illo ut laborum omnis aut dolor. Ea quia architecto sed sed est rerum quasi molestiae.",
            "describe_en": "Harum corporis quia ducimus. In natus beatae repellendus. Quia est molestias earum corrupti dolores et.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?97326",
            "parent_id": 24,
            "level": 1,
            "created_at": "2020-09-08 15:59:55",
            "updated_at": "2020-09-18 12:56:24",
            "children": [
                {
                    "id": 5,
                    "name": "睫毛膏",
                    "slug": "ab-fugit",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?68129",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?16226",
                    "title": "dolore tenetur culpa",
                    "title_en": "provident rerum numquam",
                    "sub_title": "qui a nesciunt",
                    "describe": "Eos alias ad illum. Recusandae sunt qui quia quia et. Nam recusandae ratione vel ipsam doloribus.",
                    "describe_en": "Voluptatem qui in dolorem deserunt consequatur sunt fugiat voluptatem. Eum quae qui quasi soluta. Inventore qui alias voluptate atque consequatur consequatur. Porro modi ratione ipsa et.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?47987",
                    "parent_id": 21,
                    "level": 1,
                    "created_at": "2020-08-31 20:20:58",
                    "updated_at": "2020-09-02 14:57:23"
                }
            ]
        },
        {
            "id": 23,
            "name": "眼线",
            "slug": "tempore-eligendi",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?29075",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?12425",
            "title": "voluptatem quibusdam cum",
            "title_en": "voluptate cumque natus",
            "sub_title": "minima dicta consectetur",
            "describe": "Exercitationem dolorem suscipit esse blanditiis illum sunt. Alias id sed voluptatum. Eius ea consectetur aut rerum voluptatem labore fugit.",
            "describe_en": "Laborum in deleniti minus. Error consequatur nihil voluptatem sint fugiat. Et facere sit placeat qui maiores. Aut et et esse illum enim.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?84587",
            "parent_id": 27,
            "level": 1,
            "created_at": "2020-09-09 06:23:35",
            "updated_at": "2020-09-03 17:20:13",
            "children": [
                {
                    "id": 11,
                    "name": "套装A",
                    "slug": "a-eaque",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?87349",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?95348",
                    "title": "delectus sapiente itaque",
                    "title_en": "vero modi non",
                    "sub_title": "non aperiam natus",
                    "describe": "In itaque ad exercitationem voluptatum blanditiis. Aut explicabo rerum earum autem. Dolor consequuntur consequatur voluptatem ad cum.",
                    "describe_en": "Vel corrupti molestias qui est quasi quasi libero. Voluptatem earum possimus minima alias illo magni. Consectetur ratione laboriosam id et officiis. Non aut sit iure illum eius.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?70242",
                    "parent_id": 23,
                    "level": 1,
                    "created_at": "2020-09-11 12:45:36",
                    "updated_at": "2020-09-13 13:59:32"
                },
                {
                    "id": 28,
                    "name": "唇膏",
                    "slug": "sunt-optio",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?18815",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?51958",
                    "title": "temporibus odit placeat",
                    "title_en": "est expedita fugiat",
                    "sub_title": "beatae est natus",
                    "describe": "Recusandae rem eum earum accusantium asperiores. Autem ea quod beatae et sit.",
                    "describe_en": "Et nesciunt facere veritatis sint. Fugit ut animi at et id dolores. Facere beatae esse deserunt quasi alias dolorem. Et fugit amet nisi reprehenderit totam repudiandae.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?19264",
                    "parent_id": 23,
                    "level": 1,
                    "created_at": "2020-09-28 18:10:05",
                    "updated_at": "2020-09-22 17:45:49"
                }
            ]
        },
        {
            "id": 24,
            "name": "粉底液",
            "slug": "expedita-adipisci",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?15433",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?81746",
            "title": "pariatur ea voluptas",
            "title_en": "quasi iure hic",
            "sub_title": "reiciendis dolores omnis",
            "describe": "Laudantium et aliquid eaque ut qui. Dolorum eum eaque inventore autem quisquam sit. Velit unde doloribus expedita similique voluptate. Magnam distinctio quia ipsa sit reiciendis voluptas ut.",
            "describe_en": "Rem enim neque labore veniam quidem a. Assumenda dolores nisi totam quod. Id aut modi rerum impedit. Deleniti quo eligendi ex culpa quidem.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?14925",
            "parent_id": 16,
            "level": 1,
            "created_at": "2020-09-01 02:16:28",
            "updated_at": "2020-09-24 10:55:32",
            "children": [
                {
                    "id": 21,
                    "name": "套装C",
                    "slug": "id-rerum",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?18553",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?43268",
                    "title": "quisquam cupiditate rem",
                    "title_en": "voluptatibus aliquid voluptas",
                    "sub_title": "ullam deserunt voluptatem",
                    "describe": "Omnis nobis nihil quis aut perspiciatis quia. Molestiae velit dolorem maiores incidunt illum asperiores. Enim illo ut laborum omnis aut dolor. Ea quia architecto sed sed est rerum quasi molestiae.",
                    "describe_en": "Harum corporis quia ducimus. In natus beatae repellendus. Quia est molestias earum corrupti dolores et.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?97326",
                    "parent_id": 24,
                    "level": 1,
                    "created_at": "2020-09-08 15:59:55",
                    "updated_at": "2020-09-18 12:56:24"
                }
            ]
        },
        {
            "id": 25,
            "name": "护肤系列",
            "slug": "sed-velit",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?54860",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?85415",
            "title": "tempora aliquid id",
            "title_en": "quis recusandae ea",
            "sub_title": "eaque maiores blanditiis",
            "describe": "At et enim est aut consequatur et facere voluptates. Porro consectetur magnam incidunt aut. Aut est ratione consequatur. Excepturi voluptatibus ex aut voluptatem eos.",
            "describe_en": "Totam minus rerum qui nobis sit. Tempore ab modi consectetur ullam dolorem occaecati voluptas asperiores. Eos ut earum corrupti. Voluptatem non nihil quaerat.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?56793",
            "parent_id": 6,
            "level": 1,
            "created_at": "2020-09-15 13:21:16",
            "updated_at": "2020-09-18 01:20:37",
            "children": [
                {
                    "id": 8,
                    "name": "套装系列",
                    "slug": "aut-deleniti",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?51427",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?51400",
                    "title": "et aut aperiam",
                    "title_en": "id error libero",
                    "sub_title": "id quas et",
                    "describe": "Eaque inventore perspiciatis recusandae quod doloremque doloribus exercitationem. Et dolor fugiat neque id sed. Ut qui nam autem impedit consequatur sunt ea earum.",
                    "describe_en": "Quasi velit voluptatem deleniti mollitia aut eveniet odit corporis. Vel tempore repudiandae ex vel. Consequatur necessitatibus voluptatem aut similique. Id odit sint voluptate corporis aspernatur et.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?32410",
                    "parent_id": 25,
                    "level": 1,
                    "created_at": "2020-09-22 19:19:33",
                    "updated_at": "2020-09-22 06:56:50"
                },
                {
                    "id": 22,
                    "name": "香水",
                    "slug": "odio-earum",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?86822",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?52868",
                    "title": "sit accusantium ullam",
                    "title_en": "qui optio numquam",
                    "sub_title": "eum fugit laudantium",
                    "describe": "Ex sint natus occaecati eveniet ea autem. Eos sunt earum eius eos. Eligendi nobis quo nihil rerum est alias voluptatem.",
                    "describe_en": "Sequi voluptas incidunt consectetur voluptas dolor est voluptates. Omnis sunt nostrum dolores corrupti eum aut. Praesentium autem cum aliquid quia.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?55854",
                    "parent_id": 25,
                    "level": 1,
                    "created_at": "2020-09-15 20:14:28",
                    "updated_at": "2020-09-16 14:09:30"
                }
            ]
        },
        {
            "id": 27,
            "name": "腮红",
            "slug": "voluptas-quos",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?67521",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?12991",
            "title": "qui totam unde",
            "title_en": "aut eius iusto",
            "sub_title": "nisi officia dolorem",
            "describe": "Enim et dolor expedita ut enim. Quo excepturi totam soluta fugit itaque facere deserunt. Incidunt optio et odio consequatur dolores neque blanditiis. Suscipit ipsum ab a explicabo ducimus numquam.",
            "describe_en": "Commodi eum fugit id et maiores dolor exercitationem. Illum ipsam expedita ipsum sunt itaque iste id. In voluptatem at repellat sed ea in.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?43815",
            "parent_id": 27,
            "level": 1,
            "created_at": "2020-09-25 22:17:33",
            "updated_at": "2020-09-27 09:48:50",
            "children": [
                {
                    "id": 9,
                    "name": "精油",
                    "slug": "dicta-non",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?82960",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?37212",
                    "title": "mollitia totam consequatur",
                    "title_en": "omnis ipsum eveniet",
                    "sub_title": "porro architecto ut",
                    "describe": "Rerum est dolorem qui veniam tenetur facere. Dignissimos quia corrupti autem deleniti occaecati officia. Numquam magni dolorem reiciendis sint sit perspiciatis consequatur.",
                    "describe_en": "Voluptatem non saepe placeat consequatur incidunt. Porro ut repudiandae quas dolor. Sunt earum ipsa est. Ut nesciunt qui quidem ut quis quisquam eum.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?66546",
                    "parent_id": 27,
                    "level": 1,
                    "created_at": "2020-08-30 20:03:37",
                    "updated_at": "2020-09-24 02:11:08"
                },
                {
                    "id": 12,
                    "name": "粉底液",
                    "slug": "qui-voluptas",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?67273",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?49529",
                    "title": "aut aut et",
                    "title_en": "aut soluta qui",
                    "sub_title": "vero iure iusto",
                    "describe": "Non qui voluptates vel. Labore deleniti et ad occaecati pariatur fugiat. Asperiores ipsa ab eum facere ducimus earum eaque.",
                    "describe_en": "Assumenda eius quia consequatur consequatur aut numquam. Dignissimos cupiditate dicta ut dolor quod voluptatem. Sint optio mollitia sint. Laboriosam reiciendis nemo blanditiis recusandae.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?71724",
                    "parent_id": 27,
                    "level": 1,
                    "created_at": "2020-09-17 05:53:08",
                    "updated_at": "2020-09-25 20:02:25"
                },
                {
                    "id": 23,
                    "name": "眼线",
                    "slug": "tempore-eligendi",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?29075",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?12425",
                    "title": "voluptatem quibusdam cum",
                    "title_en": "voluptate cumque natus",
                    "sub_title": "minima dicta consectetur",
                    "describe": "Exercitationem dolorem suscipit esse blanditiis illum sunt. Alias id sed voluptatum. Eius ea consectetur aut rerum voluptatem labore fugit.",
                    "describe_en": "Laborum in deleniti minus. Error consequatur nihil voluptatem sint fugiat. Et facere sit placeat qui maiores. Aut et et esse illum enim.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?84587",
                    "parent_id": 27,
                    "level": 1,
                    "created_at": "2020-09-09 06:23:35",
                    "updated_at": "2020-09-03 17:20:13"
                },
                {
                    "id": 27,
                    "name": "腮红",
                    "slug": "voluptas-quos",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?67521",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?12991",
                    "title": "qui totam unde",
                    "title_en": "aut eius iusto",
                    "sub_title": "nisi officia dolorem",
                    "describe": "Enim et dolor expedita ut enim. Quo excepturi totam soluta fugit itaque facere deserunt. Incidunt optio et odio consequatur dolores neque blanditiis. Suscipit ipsum ab a explicabo ducimus numquam.",
                    "describe_en": "Commodi eum fugit id et maiores dolor exercitationem. Illum ipsam expedita ipsum sunt itaque iste id. In voluptatem at repellat sed ea in.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?43815",
                    "parent_id": 27,
                    "level": 1,
                    "created_at": "2020-09-25 22:17:33",
                    "updated_at": "2020-09-27 09:48:50"
                },
                {
                    "id": 30,
                    "name": "唇膏",
                    "slug": "ea-debitis",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?93458",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?95042",
                    "title": "ipsa qui facere",
                    "title_en": "soluta et ipsam",
                    "sub_title": "recusandae blanditiis reiciendis",
                    "describe": "Temporibus tenetur iste et est doloribus. Aut dolores dolore sint voluptas explicabo labore ad. Optio est minus atque modi. Ut aspernatur occaecati inventore magnam adipisci ut.",
                    "describe_en": "Deserunt quo odio cum similique distinctio autem sint blanditiis. Et voluptatem dolores nihil nam consequatur error. Accusantium aut commodi sunt ut at doloribus.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?89530",
                    "parent_id": 27,
                    "level": 1,
                    "created_at": "2020-09-21 01:51:59",
                    "updated_at": "2020-09-04 01:30:46"
                }
            ]
        },
        {
            "id": 29,
            "name": "彩妆盘",
            "slug": "rerum-ex",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?32909",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?34398",
            "title": "quia minima vero",
            "title_en": "nesciunt voluptatum ut",
            "sub_title": "quidem dicta sit",
            "describe": "Magni est eos veniam nam vel est. Neque corporis dolores libero consequatur accusamus est. Sequi ad voluptatum enim tempora sit quia dolores id. Debitis odit quo aut maiores explicabo ipsam ut.",
            "describe_en": "Eum voluptates omnis excepturi expedita nobis et eius. Voluptas rerum animi ad nobis hic sapiente. Voluptates quasi odit non natus sit. Fugit soluta rerum dicta.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?58660",
            "parent_id": 0,
            "level": 1,
            "created_at": "2020-08-29 18:36:18",
            "updated_at": "2020-09-28 20:14:31",
            "children": [
                {
                    "id": 26,
                    "name": "洁面",
                    "slug": "voluptatem-numquam",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?46617",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?60339",
                    "title": "consequuntur saepe est",
                    "title_en": "iusto similique molestiae",
                    "sub_title": "veniam illo esse",
                    "describe": "Repudiandae maxime vel quis sint. Quibusdam necessitatibus et quaerat in facilis ullam magni. Est voluptatem fugit impedit et cumque quibusdam ea.",
                    "describe_en": "Veritatis sunt hic quam. Ut et dolorem et aliquam sit enim. Incidunt fugit qui nobis dolorum aperiam numquam et. Inventore illo consequatur unde minus.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?15111",
                    "parent_id": 29,
                    "level": 1,
                    "created_at": "2020-08-31 10:44:11",
                    "updated_at": "2020-09-16 13:55:30"
                }
            ]
        },
        {
            "id": 30,
            "name": "唇膏",
            "slug": "ea-debitis",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?93458",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?95042",
            "title": "ipsa qui facere",
            "title_en": "soluta et ipsam",
            "sub_title": "recusandae blanditiis reiciendis",
            "describe": "Temporibus tenetur iste et est doloribus. Aut dolores dolore sint voluptas explicabo labore ad. Optio est minus atque modi. Ut aspernatur occaecati inventore magnam adipisci ut.",
            "describe_en": "Deserunt quo odio cum similique distinctio autem sint blanditiis. Et voluptatem dolores nihil nam consequatur error. Accusantium aut commodi sunt ut at doloribus.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?89530",
            "parent_id": 27,
            "level": 1,
            "created_at": "2020-09-21 01:51:59",
            "updated_at": "2020-09-04 01:30:46",
            "children": [
                {
                    "id": 18,
                    "name": "眼线",
                    "slug": "vel-quod",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?52777",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?16835",
                    "title": "ut in a",
                    "title_en": "odio neque laboriosam",
                    "sub_title": "nihil voluptatibus quasi",
                    "describe": "Officia odio sit sequi vel tempora est. Cumque ut nam necessitatibus voluptatibus.",
                    "describe_en": "At dicta velit quis quia velit veritatis culpa. Saepe et ullam et repudiandae. Repellat iusto porro numquam qui incidunt reprehenderit enim laborum.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?59529",
                    "parent_id": 30,
                    "level": 1,
                    "created_at": "2020-09-02 14:04:11",
                    "updated_at": "2020-09-15 07:53:26"
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
    -G "http://store.wutang.com/api/product_category/story/facilis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product_category/story/facilis"
);

let headers = {
    "Content-Type": "application/json",
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
    -G "http://store.wutang.com/api/product_category/overview/voluptatem-fuga" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product_category/overview/voluptatem-fuga"
);

let headers = {
    "Content-Type": "application/json",
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
    -G "http://store.wutang.com/api/product_category/explore/molestiae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product_category/explore/molestiae"
);

let headers = {
    "Content-Type": "application/json",
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
    -d '{"product_list":[{"product_id":20}]}'

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
    "http://store.wutang.com/api/shop_carts/1?type=quis&product_id=voluptatibus&amount=fugiat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/shop_carts/1"
);

let params = {
    "type": "quis",
    "product_id": "voluptatibus",
    "amount": "fugiat",
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
    "http://store.wutang.com/api/shop_carts/1?product_id=beatae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/shop_carts/1"
);

let params = {
    "product_id": "beatae",
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
            "slug": "veniam-adipisci",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?66164",
            "title": "eum et doloremque",
            "sub_title": "doloremque consequatur quisquam",
            "created_at": "2020-01-25 02:19:54",
            "updated_at": "2019-10-20 18:03:08"
        },
        {
            "id": 2,
            "name": "精彩内容",
            "slug": "nostrum-blanditiis",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?43343",
            "title": "autem quia est",
            "sub_title": "consectetur alias blanditiis",
            "created_at": "2019-10-02 17:21:22",
            "updated_at": "2020-03-12 16:17:10"
        },
        {
            "id": 3,
            "name": "精彩内容",
            "slug": "sed-et",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?70647",
            "title": "occaecati exercitationem officia",
            "sub_title": "occaecati ullam aliquam",
            "created_at": "2020-01-03 11:50:21",
            "updated_at": "2020-05-17 07:21:29"
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
    -d '{"province":"laudantium","city":"commodi","district":"voluptates","address":"omnis","zip":2,"contact_name":"atque","contact_phone":9}'

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
    "province": "laudantium",
    "city": "commodi",
    "district": "voluptates",
    "address": "omnis",
    "zip": 2,
    "contact_name": "atque",
    "contact_phone": 9
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
    "http://store.wutang.com/api/user_addresses/1?province=velit&city=dolorem&district=id&address=labore&zip=voluptatem&contact_name=rerum&contact_phone=ducimus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_addresses/1"
);

let params = {
    "province": "velit",
    "city": "dolorem",
    "district": "id",
    "address": "labore",
    "zip": "voluptatem",
    "contact_name": "rerum",
    "contact_phone": "ducimus",
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
    "http://store.wutang.com/api/user_profile?phone=vitae&real_name=in&sex=molestiae&birthday=ipsa&age=quae&province=quibusdam&city=animi&district=fugit&address=voluptatem&zip=dolores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_profile"
);

let params = {
    "phone": "vitae",
    "real_name": "in",
    "sex": "molestiae",
    "birthday": "ipsa",
    "age": "quae",
    "province": "quibusdam",
    "city": "animi",
    "district": "fugit",
    "address": "voluptatem",
    "zip": "dolores",
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
    -d '{"code":"aut"}'

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
    "code": "aut"
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
    "http://store.wutang.com/api/wish_list?product_id=sit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/wish_list"
);

let params = {
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
    -G "http://store.wutang.com/alipay/bank_gateway/pay?no=cum&total_amount=sed&payment_key=placeat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/alipay/bank_gateway/pay"
);

let params = {
    "no": "cum",
    "total_amount": "sed",
    "payment_key": "placeat",
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
    -G "http://store.wutang.com/alipay/aop_page/pay?no=quo&total_amount=voluptas&payment_key=aperiam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/alipay/aop_page/pay"
);

let params = {
    "no": "quo",
    "total_amount": "voluptas",
    "payment_key": "aperiam",
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
    -G "http://store.wutang.com/alipay/legacy_express/pay?no=incidunt&total_amount=commodi&payment_key=error" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/alipay/legacy_express/pay"
);

let params = {
    "no": "incidunt",
    "total_amount": "commodi",
    "payment_key": "error",
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
    -G "http://store.wutang.com/unionpay/pay?no=consequuntur&total_amount=reprehenderit&payment_key=omnis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/unionpay/pay"
);

let params = {
    "no": "consequuntur",
    "total_amount": "reprehenderit",
    "payment_key": "omnis",
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
    -G "http://store.wutang.com/api/response_code?10001=sit&10003=quasi&20001=non&40001=explicabo&40003=adipisci&40004=amet&40005=nihil&50001=velit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/response_code"
);

let params = {
    "10001": "sit",
    "10003": "quasi",
    "20001": "non",
    "40001": "explicabo",
    "40003": "adipisci",
    "40004": "amet",
    "40005": "nihil",
    "50001": "velit",
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


