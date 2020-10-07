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
    -G "http://localhost/admin/alipay/legacy_express?page=neque&page_limit=adipisci" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/legacy_express"
);

let params = {
    "page": "neque",
    "page_limit": "adipisci",
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
    -d '{"items":[{"pid":"et","key":"possimus","seller_email":"eaque"}]}'

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
            "pid": "et",
            "key": "possimus",
            "seller_email": "eaque"
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
    "http://localhost/admin/alipay/legacy_express/1?id=amet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/legacy_express/1"
);

let params = {
    "id": "amet",
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
    "http://localhost/admin/alipay/legacy_express/1?id=a" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/legacy_express/1"
);

let params = {
    "id": "a",
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
    "http://localhost/admin/alipay/legacy_express/status/1?id=laudantium" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/legacy_express/status/1"
);

let params = {
    "id": "laudantium",
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
    -G "http://localhost/admin/asset_img?page=magni&page_limit=iure" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/asset_img"
);

let params = {
    "page": "magni",
    "page_limit": "iure",
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
    -d '{"img":"quod","img_location":"accusamus","type":"consequatur","product_id":"doloremque"}'

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
    "img": "quod",
    "img_location": "accusamus",
    "type": "consequatur",
    "product_id": "doloremque"
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
    -d '{"img":"maiores","img_location":"molestiae","type":"laudantium","product_id":"veritatis"}'

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
    "img": "maiores",
    "img_location": "molestiae",
    "type": "laudantium",
    "product_id": "veritatis"
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
    -G "http://localhost/admin/category_stories?page=placeat&page_limit=reiciendis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories"
);

let params = {
    "page": "placeat",
    "page_limit": "reiciendis",
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
    "http://localhost/admin/category_stories?title=et&title_en=rerum&description=delectus&description_en=quod&banner=et&product_category_id=voluptatum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories"
);

let params = {
    "title": "et",
    "title_en": "rerum",
    "description": "delectus",
    "description_en": "quod",
    "banner": "et",
    "product_category_id": "voluptatum",
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
    "http://localhost/admin/category_stories/1?title=voluptatem&title_en=voluptatibus&description=reiciendis&description_en=reprehenderit&banner=omnis&product_category_id=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories/1"
);

let params = {
    "title": "voluptatem",
    "title_en": "voluptatibus",
    "description": "reiciendis",
    "description_en": "reprehenderit",
    "banner": "omnis",
    "product_category_id": "et",
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
    -G "http://localhost/admin/companies?page=aut&page_limit=facilis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/companies"
);

let params = {
    "page": "aut",
    "page_limit": "facilis",
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
    -G "http://localhost/admin/company/departments/quas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/company/departments/quas"
);

let headers = {
    "Content-Type": "application/json",
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
    -G "http://localhost/admin/logs/1?page=recusandae&page_limit=quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/logs/1"
);

let params = {
    "page": "recusandae",
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
    "http://localhost/admin/logs/1?ids=quod" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/logs/1"
);

let params = {
    "ids": "quod",
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
    -G "http://localhost/admin/order?page=eius&page_limit=molestiae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order"
);

let params = {
    "page": "eius",
    "page_limit": "molestiae",
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
    "http://localhost/admin/order?page=qui&page_limit=autem&username=autem&order_no=omnis&order_status=itaque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order"
);

let params = {
    "page": "qui",
    "page_limit": "autem",
    "username": "autem",
    "order_no": "omnis",
    "order_status": "itaque",
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
    -d '{"refund_status":"aperiam","ship_status":"cupiditate","status":"officiis"}'

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
    "refund_status": "aperiam",
    "ship_status": "cupiditate",
    "status": "officiis"
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
    -G "http://localhost/admin/product?page=voluptatem&page_limit=illo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product"
);

let params = {
    "page": "voluptatem",
    "page_limit": "illo",
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
    "http://localhost/admin/product?product_category_id=vel&product_name=aut&product_name_en=laudantium&thumbnail=illo&slug=velit&short_description=facilis&short_description_en=tempore&price=odio&sale_price=omnis&stock=doloremque&seo_title=ipsum&seo_keyword=inventore&seo_description=non&benefit=error&benefit_en=molestiae&tech_description=qui&tech_description_en=aliquam&description=non&description_en=quasi&usage=sed&usage_en=blanditiis&main_image=sapiente&main_image_2=est&benefit_image=blanditiis&product_video=ut&status=et&rating=molestiae&sold_count=quas&review_count=alias" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product"
);

let params = {
    "product_category_id": "vel",
    "product_name": "aut",
    "product_name_en": "laudantium",
    "thumbnail": "illo",
    "slug": "velit",
    "short_description": "facilis",
    "short_description_en": "tempore",
    "price": "odio",
    "sale_price": "omnis",
    "stock": "doloremque",
    "seo_title": "ipsum",
    "seo_keyword": "inventore",
    "seo_description": "non",
    "benefit": "error",
    "benefit_en": "molestiae",
    "tech_description": "qui",
    "tech_description_en": "aliquam",
    "description": "non",
    "description_en": "quasi",
    "usage": "sed",
    "usage_en": "blanditiis",
    "main_image": "sapiente",
    "main_image_2": "est",
    "benefit_image": "blanditiis",
    "product_video": "ut",
    "status": "et",
    "rating": "molestiae",
    "sold_count": "quas",
    "review_count": "alias",
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
    "http://localhost/admin/product/1?product_category_id=sit&product_name=architecto&product_name_en=sapiente&thumbnail=omnis&slug=illo&short_description=vitae&short_description_en=facere&price=quasi&sale_price=odio&stock=sapiente&seo_title=velit&seo_keyword=laborum&seo_description=veritatis&benefit=quidem&benefit_en=dignissimos&tech_description=doloremque&tech_description_en=voluptate&description=et&description_en=unde&usage=dolorem&usage_en=voluptatem&main_image=accusantium&main_image_2=quidem&benefit_image=perferendis&product_video=optio&status=et&rating=nihil&sold_count=quam&review_count=accusantium" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product/1"
);

let params = {
    "product_category_id": "sit",
    "product_name": "architecto",
    "product_name_en": "sapiente",
    "thumbnail": "omnis",
    "slug": "illo",
    "short_description": "vitae",
    "short_description_en": "facere",
    "price": "quasi",
    "sale_price": "odio",
    "stock": "sapiente",
    "seo_title": "velit",
    "seo_keyword": "laborum",
    "seo_description": "veritatis",
    "benefit": "quidem",
    "benefit_en": "dignissimos",
    "tech_description": "doloremque",
    "tech_description_en": "voluptate",
    "description": "et",
    "description_en": "unde",
    "usage": "dolorem",
    "usage_en": "voluptatem",
    "main_image": "accusantium",
    "main_image_2": "quidem",
    "benefit_image": "perferendis",
    "product_video": "optio",
    "status": "et",
    "rating": "nihil",
    "sold_count": "quam",
    "review_count": "accusantium",
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
    -G "http://localhost/admin/product_categories?page=harum&page_limit=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories"
);

let params = {
    "page": "harum",
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
    "http://localhost/admin/product_categories?name=reiciendis&thumbnail=eos&banner=iusto&title=ex&title_en=nobis&sub_title=minus&describe=debitis&describe_en=excepturi&describe_img=quaerat&parent_id=enim" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories"
);

let params = {
    "name": "reiciendis",
    "thumbnail": "eos",
    "banner": "iusto",
    "title": "ex",
    "title_en": "nobis",
    "sub_title": "minus",
    "describe": "debitis",
    "describe_en": "excepturi",
    "describe_img": "quaerat",
    "parent_id": "enim",
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
    "http://localhost/admin/product_categories/1?name=facere&thumbnail=quia&banner=molestiae&title=eligendi&title_en=cumque&sub_title=rem&describe=ducimus&describe_en=delectus&describe_img=quasi&parent_id=est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories/1"
);

let params = {
    "name": "facere",
    "thumbnail": "quia",
    "banner": "molestiae",
    "title": "eligendi",
    "title_en": "cumque",
    "sub_title": "rem",
    "describe": "ducimus",
    "describe_en": "delectus",
    "describe_img": "quasi",
    "parent_id": "est",
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
    "http://localhost/admin/product_sku?title=aliquam&description=et&price=rerum&stock=reprehenderit&product_id=id" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_sku"
);

let params = {
    "title": "aliquam",
    "description": "et",
    "price": "rerum",
    "stock": "reprehenderit",
    "product_id": "id",
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
    "http://localhost/admin/product_sku/1?title=excepturi&description=qui&price=laudantium&stock=consequuntur&product_id=perspiciatis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_sku/1"
);

let params = {
    "title": "excepturi",
    "description": "qui",
    "price": "laudantium",
    "stock": "consequuntur",
    "product_id": "perspiciatis",
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
    -G "http://localhost/admin/the_houses?page=necessitatibus&page_limit=ipsa" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/the_houses"
);

let params = {
    "page": "necessitatibus",
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
    -d '{"title":"reprehenderit","sub_title":"tempora","the_house_category_id":"aliquam","describe":"minus","banner":"et"}'

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
    "title": "reprehenderit",
    "sub_title": "tempora",
    "the_house_category_id": "aliquam",
    "describe": "minus",
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
    -d '{"title":"molestiae","sub_title":"similique","the_house_category_id":"magni","describe":"a","banner":"ut"}'

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
    "title": "molestiae",
    "sub_title": "similique",
    "the_house_category_id": "magni",
    "describe": "a",
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
    -G "http://localhost/admin/the_house/category/list?page=blanditiis&page_limit=recusandae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/the_house/category/list"
);

let params = {
    "page": "blanditiis",
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
    -d '{"name":"architecto","banner":"quisquam","title":"distinctio","sub_title":"maxime"}'

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
    "name": "architecto",
    "banner": "quisquam",
    "title": "distinctio",
    "sub_title": "maxime"
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
    -d '{"name":"ut","banner":"dolorem","title":"ut","sub_title":"mollitia"}'

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
    "name": "ut",
    "banner": "dolorem",
    "title": "ut",
    "sub_title": "mollitia"
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
    -G "http://localhost/admin/the_house_content/list?page=expedita&page_limit=nihil" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/the_house_content/list"
);

let params = {
    "page": "expedita",
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
    -d '{"the_house_id":"veritatis","title":"nostrum","content":"rerum","img":"minus","img_desc":"fugit"}'

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
    "the_house_id": "veritatis",
    "title": "nostrum",
    "content": "rerum",
    "img": "minus",
    "img_desc": "fugit"
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
    -d '{"the_house_id":"autem","title":"voluptatem","content":"nihil","img":"dolores","img_desc":"aut"}'

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
    "the_house_id": "autem",
    "title": "voluptatem",
    "content": "nihil",
    "img": "dolores",
    "img_desc": "aut"
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
    -G "http://localhost/admin/user?username=qui&page=odit&page_limit=ratione" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user"
);

let params = {
    "username": "qui",
    "page": "odit",
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
    -d '{"username":"hic","password":"earum","name":"doloremque","role":"unde","company":"quasi","department":"labore","sex":1,"phone":8,"email":"et","member_code":"qui"}'

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
    "username": "hic",
    "password": "earum",
    "name": "doloremque",
    "role": "unde",
    "company": "quasi",
    "department": "labore",
    "sex": 1,
    "phone": 8,
    "email": "et",
    "member_code": "qui"
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
    "http://localhost/admin/user/1?name=voluptas&email=quis&phone=natus&avatar=consectetur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/1"
);

let params = {
    "name": "voluptas",
    "email": "quis",
    "phone": "natus",
    "avatar": "consectetur",
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
    "http://localhost/admin/user/reset_password/1?oldPassword=sit&newPassword=consectetur&newPassword_confirmation=maiores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/reset_password/1"
);

let params = {
    "oldPassword": "sit",
    "newPassword": "consectetur",
    "newPassword_confirmation": "maiores",
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
    -G "http://localhost/admin/get_user?hash_id=quae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/get_user"
);

let params = {
    "hash_id": "quae",
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
    "http://localhost/admin/user_addresses?province=et&city=veniam&district=porro&address=est&zip=sit&contact_name=saepe&contact_phone=sed" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses"
);

let params = {
    "province": "et",
    "city": "veniam",
    "district": "porro",
    "address": "est",
    "zip": "sit",
    "contact_name": "saepe",
    "contact_phone": "sed",
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
    "http://localhost/admin/user_addresses/1?address_id=dolorem&province=ea&city=enim&district=similique&address=qui&zip=eos&contact_name=quam&contact_phone=veniam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses/1"
);

let params = {
    "address_id": "dolorem",
    "province": "ea",
    "city": "enim",
    "district": "similique",
    "address": "qui",
    "zip": "eos",
    "contact_name": "quam",
    "contact_phone": "veniam",
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
    "http://localhost/admin/user_profiles/1?profile_id=odit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_profiles/1"
);

let params = {
    "profile_id": "odit",
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
    "http://localhost/admin/user_profiles/1?profile_id=dolor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_profiles/1"
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
    -d '{"name":"dolores","type":3,"order_no":"culpa","content":"voluptatem"}'

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
    "name": "dolores",
    "type": 3,
    "order_no": "culpa",
    "content": "voluptatem"
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
            "id": 3,
            "img": "https:\/\/lorempixel.com\/640\/480\/?85925",
            "img_location": 1,
            "type": "banner",
            "product_id": 9,
            "product": {
                "id": 9,
                "slug": "esse-dolor",
                "product_name": "臻爱铂金",
                "product_name_en": "amet architecto eum"
            }
        },
        "discover": [],
        "recommend_list": [
            {
                "id": 8,
                "img": "https:\/\/lorempixel.com\/640\/480\/?84386",
                "img_location": 1,
                "type": "this_month_recommand",
                "product_id": 3,
                "product": {
                    "id": 3,
                    "slug": "est-assumenda",
                    "product_name": "黑钻焕肤水",
                    "product_name_en": "recusandae enim officia"
                }
            },
            {
                "id": 10,
                "img": "https:\/\/lorempixel.com\/640\/480\/?84499",
                "img_location": 1,
                "type": "this_month_recommand",
                "product_id": 4,
                "product": {
                    "id": 4,
                    "slug": "aut-autem",
                    "product_name": "钻石焕活面膜",
                    "product_name_en": "eos ad nihil"
                }
            }
        ],
        "the_house": [
            {
                "id": 10,
                "slug": "doloribus-veritatis",
                "the_house_category_id": 1,
                "banner": "https:\/\/lorempixel.com\/640\/480\/?76638",
                "title": "modi architecto vel",
                "sub_title": "iste aliquam aut",
                "describe": "Autem voluptatem consequatur aspernatur est soluta labore quo. Enim occaecati fugit recusandae vitae fuga. Eligendi corrupti dolorem nihil culpa perferendis. Qui at est dolores omnis dolore."
            },
            {
                "id": 29,
                "slug": "esse-exercitationem",
                "the_house_category_id": 3,
                "banner": "https:\/\/lorempixel.com\/640\/480\/?20034",
                "title": "porro repellat qui",
                "sub_title": "sequi exercitationem facilis",
                "describe": "Sint et earum cumque. Quidem dignissimos ad nesciunt sit. Rerum ipsum odio eius nemo dolor architecto. Voluptatem voluptas et autem consequatur."
            },
            {
                "id": 37,
                "slug": "nisi-qui",
                "the_house_category_id": 3,
                "banner": "https:\/\/lorempixel.com\/640\/480\/?82821",
                "title": "dolore in facere",
                "sub_title": "quibusdam incidunt molestiae",
                "describe": "Nobis aut facilis maxime inventore unde. Dolorum aut aut expedita. Aut maiores sunt incidunt aut sit quis officiis molestiae."
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
                    "id": 1,
                    "slug": "ea-id",
                    "product_name": "纯皙精致",
                    "parent_id": 0,
                    "level": 1
                },
                {
                    "id": 2,
                    "slug": "aut-consequuntur",
                    "product_name": "黑钻洁净滋养面膜",
                    "parent_id": 0,
                    "level": 1
                },
                {
                    "id": 3,
                    "slug": "est-assumenda",
                    "product_name": "黑钻焕肤水",
                    "parent_id": 0,
                    "level": 1
                },
                {
                    "id": 31,
                    "slug": "p-aseffasdf-p",
                    "product_name": "五七二七人",
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
                    "name": "BB霜",
                    "slug": "deleniti-cum",
                    "parent_id": 21,
                    "level": 1
                },
                {
                    "id": 2,
                    "name": "洁面",
                    "slug": "voluptates-ratione",
                    "parent_id": 27,
                    "level": 1
                },
                {
                    "id": 3,
                    "name": "彩妆盘",
                    "slug": "omnis-at",
                    "parent_id": 22,
                    "level": 1
                },
                {
                    "id": 4,
                    "name": "面霜",
                    "slug": "debitis-qui",
                    "parent_id": 0,
                    "level": 1
                },
                {
                    "id": 5,
                    "name": "BB霜",
                    "slug": "ipsam-optio",
                    "parent_id": 0,
                    "level": 1
                },
                {
                    "id": 6,
                    "name": "彩妆盘",
                    "slug": "voluptatum-corporis",
                    "parent_id": 5,
                    "level": 1
                },
                {
                    "id": 7,
                    "name": "洁面",
                    "slug": "qui-sint",
                    "parent_id": 21,
                    "level": 1
                },
                {
                    "id": 8,
                    "name": "睫毛膏",
                    "slug": "rerum-dicta",
                    "parent_id": 3,
                    "level": 1
                },
                {
                    "id": 9,
                    "name": "腮红",
                    "slug": "eos-cupiditate",
                    "parent_id": 22,
                    "level": 1
                },
                {
                    "id": 10,
                    "name": "唇膏",
                    "slug": "vitae-neque",
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
    -d '{"name":"dignissimos","username":"atque","password":"veniam","password_confirmation":"et","code":"recusandae","captcha_key":"officia","captcha_code":"esse","password_question_id":14,"password_answer":"aliquam"}'

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
    "name": "dignissimos",
    "username": "atque",
    "password": "veniam",
    "password_confirmation": "et",
    "code": "recusandae",
    "captcha_key": "officia",
    "captcha_code": "esse",
    "password_question_id": 14,
    "password_answer": "aliquam"
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
    -G "http://localhost/api/user_question?username=consequatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_question"
);

let params = {
    "username": "consequatur",
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
        "username": "consequatur"
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
    -d '{"username":"iste","password":"molestiae"}'

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
    "username": "iste",
    "password": "molestiae"
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
    "http://localhost/api/password_reset?username=qui&password_question_id=ut&password_answer=veritatis&password=animi&password_confirmation=laudantium" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/password_reset"
);

let params = {
    "username": "qui",
    "password_question_id": "ut",
    "password_answer": "veritatis",
    "password": "animi",
    "password_confirmation": "laudantium",
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
    -d '{"oldPassword":"occaecati","newPassword":"animi","newPassword_confirmation":"quam"}'

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
    "oldPassword": "occaecati",
    "newPassword": "animi",
    "newPassword_confirmation": "quam"
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
    -G "http://localhost/api/orders?page=nemo&page_limit=nobis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orders"
);

let params = {
    "page": "nemo",
    "page_limit": "nobis",
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
    -G "http://localhost/api/order_details/1?no=quas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/order_details/1"
);

let params = {
    "no": "quas",
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
    -d '{"address_id":"itaque","remark":"nobis"}'

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
    "address_id": "itaque",
    "remark": "nobis"
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
    -d '{"no":9}'

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
    "no": 9
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
    "http://localhost/api/orders/cancel?no=optio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orders/cancel"
);

let params = {
    "no": "optio",
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
                "product_category_id": 10,
                "product_name": "纯皙精致",
                "product_name_en": "odit possimus saepe",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?80092",
                "slug": "ea-id",
                "short_description": "Quibusdam earum a corporis.",
                "short_description_en": "Qui dolorum ullam iure laboriosam culpa laboriosam et. Et ut occaecati dolores illum maxime labore possimus qui. Quaerat voluptas et et doloribus quos itaque. Sint ut sunt dolorum voluptatibus molestias.",
                "price": "9576.00",
                "sale_price": "0.01",
                "stock": 327,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "ullam distinctio unde",
                "seo_keyword": "harum",
                "seo_description": "Et id commodi nihil vero ut.",
                "benefit": "Ipsam architecto qui molestias a saepe. Deserunt sed dolores magnam quidem veniam. Corporis aperiam dolores cumque tempora pariatur. Nemo ipsa perferendis consequuntur sit. Inventore et molestiae illo accusamus a consequuntur quia.",
                "benefit_en": "Ad quas ipsam iste veniam. Nulla veniam cupiditate officia magni repudiandae. Provident in recusandae fuga modi qui voluptas iure. Hic rerum deleniti reiciendis eius.",
                "tech_description": "Dignissimos sint similique non dolor sed et laboriosam officia. Ut magni voluptatum velit eos voluptas natus. Doloribus iure exercitationem similique occaecati eum itaque.",
                "tech_description_en": "Deleniti est natus et suscipit non repellendus. Dolorem repellat et quas quia iusto quia ea in. Est ut culpa amet est laudantium corporis et.",
                "description": "Quis expedita omnis dolorem in. Alias rerum corrupti non commodi laudantium.",
                "description_en": "Numquam animi est et doloribus occaecati tempora. Est quam amet non eaque aut officia est. Fugiat qui ipsam ut. Quaerat alias ratione eligendi recusandae quo doloribus.",
                "usage": "Ullam facere repellendus dolore architecto nulla id. Dicta labore rerum eaque autem provident. Possimus incidunt quia voluptatum exercitationem.",
                "usage_en": "Nulla facere quia ipsam aut. Perspiciatis ea et aut dolorum. Enim nam quaerat aut qui. Rem adipisci aut sunt et nihil.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?16500",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?52174",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?73831",
                "product_video": null,
                "status": 3,
                "rating": 8.28,
                "sold_count": 2839,
                "review_count": 9633,
                "parent_id": 0,
                "level": 1,
                "created_at": "2020-10-03 18:12:22",
                "updated_at": "2020-09-29 18:28:10",
                "product_category": {
                    "id": 10,
                    "name": "唇膏",
                    "slug": "vitae-neque",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?86148",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?16749",
                    "title": "placeat eos molestiae",
                    "title_en": "alias amet a",
                    "sub_title": "animi sed deserunt",
                    "describe": "Non velit consequatur doloremque et. Molestiae reprehenderit adipisci accusamus dolores et. Asperiores omnis quo quisquam debitis sunt.",
                    "describe_en": "Quasi quia eius ut eveniet libero dolor sit. Fugiat repudiandae ut accusamus veritatis dolores voluptate. Et labore cumque et voluptatem aut accusantium.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?61914",
                    "type": 1,
                    "parent_id": 0,
                    "level": 1,
                    "created_at": "2020-09-28 10:44:05",
                    "updated_at": "2020-09-15 02:11:58"
                }
            },
            {
                "id": 2,
                "product_category_id": 3,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "cum ipsum est",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?43407",
                "slug": "aut-consequuntur",
                "short_description": "Magni sunt asperiores distinctio est.",
                "short_description_en": "Beatae consequatur doloribus molestias nobis ut voluptatem et. Enim molestiae voluptatem reprehenderit inventore dolor ex omnis. Sint assumenda quasi ipsam doloremque fuga fugit. Dignissimos rem sit amet sapiente iste sed.",
                "price": "8110.00",
                "sale_price": "0.01",
                "stock": 797,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "sint harum dicta",
                "seo_keyword": "molestiae",
                "seo_description": "Dicta harum libero voluptatibus molestiae nesciunt.",
                "benefit": "Omnis porro vel quia. Ipsa minus hic ipsa possimus laudantium voluptas. Magnam necessitatibus necessitatibus consectetur doloremque beatae autem dolorem.",
                "benefit_en": "Dolores ut sed facere expedita assumenda natus earum. Consequatur molestiae itaque provident explicabo doloribus. Eaque quis eos consequatur veritatis quam error nesciunt. Illo alias quam molestiae ut quam officiis.",
                "tech_description": "Et autem qui eum commodi rem corporis nesciunt. Voluptatem incidunt minus molestiae consequatur. Est quo maiores odit laborum.",
                "tech_description_en": "Occaecati nobis dolor quidem vitae explicabo accusantium. Sunt dolorum soluta temporibus culpa eveniet eum. Sunt quis nobis quis nisi quaerat nihil dicta. Ut nihil suscipit qui explicabo explicabo corporis sequi.",
                "description": "Illo sit omnis et porro aspernatur aut laboriosam et. Vitae debitis et nisi ex. Voluptas nesciunt ullam reprehenderit quam dolorum dolores beatae omnis.",
                "description_en": "Odit non voluptas sed autem. Perferendis amet numquam recusandae. Perspiciatis odio eum necessitatibus molestias consequatur eos.",
                "usage": "Non quia nihil similique sequi. Officiis omnis repellendus sapiente eius. Voluptates eveniet eveniet reprehenderit consequuntur culpa eveniet provident aut. Qui dolor voluptate dolorem quia illo.",
                "usage_en": "Quis aliquid et voluptas odio vel sint. Voluptas et consequuntur eum ut atque. Accusamus itaque qui excepturi debitis asperiores.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?88318",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?54943",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?66765",
                "product_video": null,
                "status": 2,
                "rating": 3.29,
                "sold_count": 1292,
                "review_count": 2197,
                "parent_id": 0,
                "level": 1,
                "created_at": "2020-09-12 05:58:21",
                "updated_at": "2020-10-06 05:48:34",
                "product_category": {
                    "id": 3,
                    "name": "彩妆盘",
                    "slug": "omnis-at",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?73581",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?91456",
                    "title": "aut sit molestias",
                    "title_en": "doloremque voluptas ex",
                    "sub_title": "eaque vitae ullam",
                    "describe": "Non cumque error totam quaerat. Aperiam facilis ut aliquid explicabo fugit in. Est rerum consequatur maxime ratione et consequatur.",
                    "describe_en": "Velit ipsa amet veritatis libero adipisci voluptatem nesciunt. Aut a itaque quia totam. Sed amet temporibus asperiores.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?69666",
                    "type": 1,
                    "parent_id": 22,
                    "level": 1,
                    "created_at": "2020-10-03 02:21:17",
                    "updated_at": "2020-09-26 22:52:02"
                }
            },
            {
                "id": 3,
                "product_category_id": 8,
                "product_name": "黑钻焕肤水",
                "product_name_en": "recusandae enim officia",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?49967",
                "slug": "est-assumenda",
                "short_description": "Aut ipsam suscipit tempore sed voluptatem eveniet.",
                "short_description_en": "Veritatis qui consequatur consequatur ut fugit. Atque ad aut nulla nihil officia deserunt eum. Consequuntur sed delectus ab nostrum ex expedita voluptatum. Sunt laborum aut voluptatem accusamus.",
                "price": "4648.00",
                "sale_price": "0.01",
                "stock": 215,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "magni officiis totam",
                "seo_keyword": "est",
                "seo_description": "Praesentium odio dolores impedit pariatur.",
                "benefit": "Velit et amet accusantium. Voluptas omnis expedita quod deserunt eligendi quis. Occaecati omnis reiciendis assumenda magnam. Aut aliquid quo voluptas ut omnis facere.",
                "benefit_en": "Totam omnis quo placeat voluptatem culpa. Illum accusantium placeat possimus dicta ipsum. Qui alias maiores asperiores voluptas sed quod.",
                "tech_description": "Pariatur ut quasi et dolorem ad modi omnis. Est dolore debitis explicabo voluptas similique nesciunt et. Autem optio reiciendis occaecati vel eos quisquam.",
                "tech_description_en": "Iure exercitationem molestiae qui quas id molestias debitis. Aut enim exercitationem non id dicta quis voluptate. Assumenda animi ea distinctio esse quibusdam asperiores. Non nam vitae nam quod perspiciatis dolores.",
                "description": "Expedita ut ullam et libero in omnis doloribus id. Consequatur rerum aut a voluptas provident iste delectus. Illum occaecati sed omnis doloremque qui ad. Ad dignissimos quia suscipit quas et quis. Necessitatibus quod totam numquam aliquam quod voluptatem voluptatibus eligendi.",
                "description_en": "Ea commodi aliquid non distinctio voluptatem voluptate qui. Odit omnis et ea est voluptatem beatae. Officia sunt rem nam aut aut eligendi.",
                "usage": "Voluptatem consequatur soluta natus praesentium aspernatur qui quas. Aut rerum sed et numquam sed. Aut qui voluptas voluptatem tempore qui velit. Qui porro autem rerum sunt tenetur eveniet.",
                "usage_en": "Magnam eum cum est possimus repellendus omnis. Voluptatibus id et est quos cupiditate. Qui autem dolor sint aut vitae qui sint.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?80353",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?23014",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?11172",
                "product_video": null,
                "status": 2,
                "rating": 6.6,
                "sold_count": 5490,
                "review_count": 2993,
                "parent_id": 0,
                "level": 1,
                "created_at": "2020-09-27 20:03:28",
                "updated_at": "2020-09-17 23:44:05",
                "product_category": {
                    "id": 8,
                    "name": "睫毛膏",
                    "slug": "rerum-dicta",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?86038",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?84822",
                    "title": "ut consequatur accusamus",
                    "title_en": "ducimus minima tenetur",
                    "sub_title": "sunt fugit debitis",
                    "describe": "Sed corporis vero eveniet aut. Consequatur impedit dignissimos totam dolor exercitationem. Rerum quibusdam et aspernatur iste consequuntur quasi at.",
                    "describe_en": "Quia et doloremque mollitia dolore nisi cumque autem. Sed dolores aut ratione sed aperiam vel ut. Doloribus provident in unde iste. Iure dolor porro dolorum earum reprehenderit aliquid culpa.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?49245",
                    "type": 1,
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-09-09 03:06:40",
                    "updated_at": "2020-09-12 04:14:33"
                }
            },
            {
                "id": 4,
                "product_category_id": 4,
                "product_name": "钻石焕活面膜",
                "product_name_en": "eos ad nihil",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?12376",
                "slug": "aut-autem",
                "short_description": "Et fugiat voluptate repellendus delectus.",
                "short_description_en": "At eligendi ullam eos maiores neque et necessitatibus. Deserunt vel dolor ducimus amet dolorum vel enim. Vel temporibus omnis sint voluptas.",
                "price": "7068.00",
                "sale_price": "0.01",
                "stock": 282,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "vel quo harum",
                "seo_keyword": "sequi",
                "seo_description": "Nemo quam laudantium dolores.",
                "benefit": "Distinctio cum minima sint quis. Qui sunt maxime consequuntur sed. Nisi ab totam culpa asperiores recusandae quos veniam.",
                "benefit_en": "Voluptatem a incidunt dolor fugit repellat recusandae. Ipsam facere consectetur molestiae iusto molestias nesciunt. Veritatis dolorem rerum aut eum. Doloremque qui suscipit ex ipsum earum expedita.",
                "tech_description": "Omnis doloremque natus labore sit consequatur laboriosam. Omnis rerum assumenda ut quo quia nihil. Voluptatem velit omnis aperiam amet qui quia dolores.",
                "tech_description_en": "Unde in quod voluptas aliquam. Aut dicta ipsa et adipisci et. Deleniti quidem quo corporis. Perferendis officiis voluptatem consectetur voluptatum enim impedit beatae.",
                "description": "Nobis molestiae incidunt aut alias. Sit deleniti autem illum placeat praesentium. Dolor illo quia et ullam itaque non. Qui ex cupiditate accusamus non veniam inventore non rerum.",
                "description_en": "Distinctio quod quisquam maxime delectus. Similique aut eum totam nulla eos atque. Laborum nostrum quis nostrum omnis rerum voluptatem qui repudiandae. Nihil error repellendus beatae perferendis alias consequatur.",
                "usage": "Qui quo dolorem qui saepe dolores sequi voluptates. Iusto ducimus saepe est ut dicta ducimus atque. Id facilis sint ducimus neque aut omnis temporibus.",
                "usage_en": "Magnam nam maiores ut optio aut eligendi. Sit omnis similique temporibus quos consequuntur. Minima enim pariatur explicabo earum aperiam.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?61117",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?43916",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?15506",
                "product_video": null,
                "status": 1,
                "rating": 2.5300000000000002,
                "sold_count": 8828,
                "review_count": 1386,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-15 16:22:00",
                "updated_at": "2020-09-14 02:38:57",
                "product_category": {
                    "id": 4,
                    "name": "面霜",
                    "slug": "debitis-qui",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?72970",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?62140",
                    "title": "dolore nam atque",
                    "title_en": "vel eos excepturi",
                    "sub_title": "enim ullam hic",
                    "describe": "Voluptas nisi vel beatae qui iusto aut. Sit omnis earum alias et. Minima velit magnam et quisquam quas voluptatem ex. Et eius neque assumenda saepe nisi iusto.",
                    "describe_en": "Illum voluptate esse sit eaque. Nesciunt omnis et optio autem maxime soluta at. Ut non modi deleniti voluptatem et.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?91041",
                    "type": 1,
                    "parent_id": 0,
                    "level": 1,
                    "created_at": "2020-10-02 15:05:50",
                    "updated_at": "2020-09-26 02:43:58"
                }
            },
            {
                "id": 5,
                "product_category_id": 9,
                "product_name": "臻爱铂金",
                "product_name_en": "et velit non",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?88851",
                "slug": "nesciunt-tenetur",
                "short_description": "Omnis expedita ut aut vero ad.",
                "short_description_en": "Laborum neque explicabo modi pariatur. Voluptatum quia ea quam rem quos. Vel velit rerum distinctio aliquid. Et odit non odit rerum quod.",
                "price": "623.00",
                "sale_price": "0.01",
                "stock": 947,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "et nobis consequatur",
                "seo_keyword": "esse",
                "seo_description": "Aut nesciunt dolorem dolorem.",
                "benefit": "Incidunt provident omnis omnis et similique. Deleniti facere eveniet ex explicabo dolore in quia. Et eius rem consectetur sapiente facere distinctio. Non velit quae molestiae nulla praesentium.",
                "benefit_en": "Fugit quia veritatis error qui et. Amet sit sed assumenda maxime laudantium ut. Delectus odio quibusdam eum doloremque. Nulla quod magni delectus consequatur deserunt voluptatibus amet.",
                "tech_description": "Alias aut vitae cumque ipsa qui eum culpa. Suscipit et asperiores est. Incidunt ex omnis excepturi nemo. Dolorem nesciunt ipsam rerum soluta ex iste.",
                "tech_description_en": "Delectus ut debitis magnam quaerat. Enim et placeat est qui vel aut. Esse aliquid optio sed omnis delectus suscipit quaerat voluptate. Culpa dolore maiores voluptates.",
                "description": "Voluptatem vero aliquid nisi quia debitis omnis dolores. Debitis et totam voluptates nostrum. Fugiat deleniti ullam beatae qui odit est. Eaque non ipsum et rerum id explicabo officiis.",
                "description_en": "Dignissimos eveniet dolor laborum vero quis cumque autem culpa. Reprehenderit rem sunt voluptates sit nihil. Laborum nobis ut rem quisquam culpa vel eos. Quisquam mollitia voluptatem sint mollitia quis voluptate.",
                "usage": "Illum numquam incidunt doloremque est voluptatum. Dolores qui illo nesciunt hic quo error odit. Quam enim accusantium harum ipsum. Debitis eligendi corporis voluptatem minus possimus et.",
                "usage_en": "Voluptas porro nihil qui et quia. Explicabo accusantium quia asperiores totam. Officia nesciunt repellat consectetur et quam molestiae omnis. Ut et est est ut deleniti aut pariatur.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?41641",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?99380",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?65508",
                "product_video": null,
                "status": 2,
                "rating": 2.5,
                "sold_count": 9871,
                "review_count": 1799,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-25 19:35:25",
                "updated_at": "2020-09-26 18:49:44",
                "product_category": {
                    "id": 9,
                    "name": "腮红",
                    "slug": "eos-cupiditate",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?88368",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?47430",
                    "title": "dolorem rerum dolorem",
                    "title_en": "fugiat reiciendis nesciunt",
                    "sub_title": "et est minus",
                    "describe": "Maxime temporibus et sint quidem excepturi. Dolore sapiente magni autem et. Aperiam neque beatae atque illum qui recusandae magni.",
                    "describe_en": "Quisquam aut a ipsum vero temporibus. Est a eos perspiciatis quia. Rerum omnis enim est dolorem ad rerum autem.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?69510",
                    "type": 1,
                    "parent_id": 22,
                    "level": 1,
                    "created_at": "2020-09-30 08:26:20",
                    "updated_at": "2020-10-06 12:32:40"
                }
            },
            {
                "id": 6,
                "product_category_id": 2,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "officia dolorum nihil",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?51815",
                "slug": "illo-et",
                "short_description": "Facere vel sed ea voluptatem corporis.",
                "short_description_en": "Sunt repellendus est soluta nam dolorem deleniti. Dolor iste necessitatibus voluptatum voluptate quam molestiae cupiditate suscipit. Molestiae quod error tempore assumenda.",
                "price": "5626.00",
                "sale_price": "0.01",
                "stock": 770,
                "spec": "30 ml \/ 1.0 oz.",
                "seo_title": "provident qui aut",
                "seo_keyword": "quas",
                "seo_description": "Possimus nostrum impedit iusto harum.",
                "benefit": "Quia eos soluta autem voluptatem. Cum voluptatem velit non enim quaerat mollitia unde. Numquam ut assumenda nobis eum nesciunt quo. Temporibus quis voluptas dolor ut reiciendis quae tenetur.",
                "benefit_en": "Est id dolore et a quo repudiandae. Quo suscipit quasi dolore aut quia non. Facere aut laborum voluptatem aut eos dolores.",
                "tech_description": "Enim voluptatum minima nesciunt vel rerum sit esse. Corrupti totam ratione doloribus quo. Dolor et officiis dolores doloribus aliquid alias asperiores. Omnis delectus atque aut reiciendis nemo et.",
                "tech_description_en": "Nihil nihil vero voluptatem nam rerum velit. Et consequatur laudantium optio sit quo consectetur quo. Voluptate deleniti porro illo cumque provident aliquid. Facere odit dolorem et. Corporis odit quibusdam odio quia officia.",
                "description": "Ratione ipsum rerum tenetur eligendi. Quis ut facilis voluptates aut iusto non repellat.",
                "description_en": "Delectus qui animi quisquam sed animi. Voluptatibus quo sit molestiae eveniet quaerat. Excepturi enim placeat assumenda mollitia aspernatur quibusdam.",
                "usage": "Perspiciatis aspernatur dolor voluptates. Labore ut cum fugiat magnam. Aperiam earum deserunt eos.",
                "usage_en": "Quibusdam expedita nihil dolore nisi eos quisquam. Sed vel at distinctio vel qui in. Dolores et ipsam fuga quam. Aut fuga quod totam natus aliquid fugit.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?34169",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?68588",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?17738",
                "product_video": null,
                "status": 3,
                "rating": 5.36,
                "sold_count": 4205,
                "review_count": 1242,
                "parent_id": 2,
                "level": 2,
                "created_at": "2020-09-15 18:22:28",
                "updated_at": "2020-09-10 02:06:02",
                "product_category": {
                    "id": 2,
                    "name": "洁面",
                    "slug": "voluptates-ratione",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?49466",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?55451",
                    "title": "consequatur qui accusamus",
                    "title_en": "consequatur eligendi odit",
                    "sub_title": "mollitia quas aut",
                    "describe": "Ab tenetur quo ratione eos qui. Non aliquam omnis est similique eveniet culpa. Sed architecto consequatur aperiam iste recusandae molestiae.",
                    "describe_en": "Quas ad expedita accusantium nobis eligendi nemo. Sed molestias dolores deserunt vitae et iste. Optio dolor velit ut nihil voluptatum et qui.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?29109",
                    "type": 1,
                    "parent_id": 27,
                    "level": 1,
                    "created_at": "2020-09-20 08:50:26",
                    "updated_at": "2020-09-10 01:20:18"
                }
            },
            {
                "id": 7,
                "product_category_id": 8,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "possimus ut a",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?12764",
                "slug": "blanditiis-fugiat",
                "short_description": "Fuga sed perferendis pariatur.",
                "short_description_en": "Nam quas excepturi illum nostrum aut. Omnis et temporibus aspernatur dicta optio. Rem iure et et asperiores cupiditate et nulla.",
                "price": "3084.00",
                "sale_price": "0.01",
                "stock": 430,
                "spec": "50 ml \/ 1.7 fl. oz",
                "seo_title": "corrupti quae dolorum",
                "seo_keyword": "omnis",
                "seo_description": "Saepe voluptatum libero molestiae.",
                "benefit": "Alias quidem numquam earum assumenda id. Ut sint quae quas ipsa illo. Exercitationem dolor blanditiis eius in. Sit aut possimus corporis sit sapiente quia rerum. Quas rerum ipsa velit ullam aut.",
                "benefit_en": "Nihil facilis quisquam quis aut. Laboriosam aut modi ducimus sint est asperiores facilis. Eius rerum corporis voluptas iure est quibusdam ullam. Consequatur consequuntur velit sit. Et rerum odio deserunt non.",
                "tech_description": "Odit fugiat sint quia illo. Voluptas et delectus velit mollitia. Nam veniam dolorem omnis vel nihil reiciendis.",
                "tech_description_en": "Voluptate facere ipsa est impedit beatae minima pariatur. Expedita officia quasi et odio modi distinctio nulla.",
                "description": "Officiis laborum ratione mollitia qui vel ipsum. Quis id aut quam dignissimos aspernatur. Voluptatem cumque nemo id id quo debitis perspiciatis. Consectetur eos cumque officia.",
                "description_en": "Accusamus iure perferendis blanditiis. Nihil at dolorum voluptates dolores voluptas tenetur saepe.",
                "usage": "Corrupti culpa assumenda ipsam atque modi laboriosam nulla aut. Non autem exercitationem asperiores fugiat iste consequatur sunt ut. Sed sed nihil et exercitationem quo accusamus et.",
                "usage_en": "Odio eos voluptatibus ullam sequi nisi. Magnam dicta nihil qui dolorem architecto. Quo vero cupiditate molestiae molestiae quam quod et laboriosam. Sunt eos veritatis totam quos.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?20411",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?69150",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?60574",
                "product_video": null,
                "status": 2,
                "rating": 7.21,
                "sold_count": 7939,
                "review_count": 3059,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-18 23:24:20",
                "updated_at": "2020-09-27 15:49:01",
                "product_category": {
                    "id": 8,
                    "name": "睫毛膏",
                    "slug": "rerum-dicta",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?86038",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?84822",
                    "title": "ut consequatur accusamus",
                    "title_en": "ducimus minima tenetur",
                    "sub_title": "sunt fugit debitis",
                    "describe": "Sed corporis vero eveniet aut. Consequatur impedit dignissimos totam dolor exercitationem. Rerum quibusdam et aspernatur iste consequuntur quasi at.",
                    "describe_en": "Quia et doloremque mollitia dolore nisi cumque autem. Sed dolores aut ratione sed aperiam vel ut. Doloribus provident in unde iste. Iure dolor porro dolorum earum reprehenderit aliquid culpa.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?49245",
                    "type": 1,
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-09-09 03:06:40",
                    "updated_at": "2020-09-12 04:14:33"
                }
            },
            {
                "id": 8,
                "product_category_id": 3,
                "product_name": "臻爱铂金",
                "product_name_en": "facere debitis nobis",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?17515",
                "slug": "reiciendis-architecto",
                "short_description": "Est itaque minus voluptatum aut.",
                "short_description_en": "Adipisci nihil iure consequuntur est assumenda. Reiciendis earum quaerat illum ad optio fuga et. Et ipsum harum rerum cumque. Dignissimos consectetur numquam quisquam deserunt magni.",
                "price": "7003.00",
                "sale_price": "0.01",
                "stock": 87,
                "spec": "30 ml \/ 1.0 oz.",
                "seo_title": "sint laudantium ut",
                "seo_keyword": "ducimus",
                "seo_description": "Velit rerum iure earum.",
                "benefit": "Sed non quasi illum quia itaque ut nobis. Est quam ipsum in. Reprehenderit ratione facere quis minima est vitae ad.",
                "benefit_en": "Tenetur dolorem iure incidunt qui. Asperiores incidunt et architecto pariatur earum autem. Porro inventore dolor sunt provident corrupti totam sequi et. Consequatur iure voluptas ducimus.",
                "tech_description": "Molestiae laudantium sit minima. Dolor tempore pariatur cumque et dolorum sint. Distinctio maxime cumque fugit tempora aliquid. Aliquam consequatur qui cupiditate et est.",
                "tech_description_en": "Voluptate cumque id corporis quo recusandae assumenda maxime. Delectus omnis eum aut dolor vitae velit. Sit aut omnis aut voluptas recusandae aut. Aut voluptate ex sed ab dolor.",
                "description": "Sapiente nesciunt quis sequi non mollitia porro. Facere et iste quia architecto.",
                "description_en": "Est est iste vero. Iure a soluta qui ea incidunt nihil. Doloremque nulla vel delectus est iure voluptatem.",
                "usage": "Maxime architecto mollitia esse aut eveniet quaerat. Reiciendis repudiandae rerum soluta dicta quia. Sint possimus consequuntur facere consectetur.",
                "usage_en": "Nam nesciunt rem aliquam et laboriosam. Libero non accusamus delectus. Est alias qui fugit error temporibus recusandae temporibus.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?56351",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?85336",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?61525",
                "product_video": null,
                "status": 2,
                "rating": 6.91,
                "sold_count": 1621,
                "review_count": 6899,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-17 02:23:57",
                "updated_at": "2020-09-23 23:47:41",
                "product_category": {
                    "id": 3,
                    "name": "彩妆盘",
                    "slug": "omnis-at",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?73581",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?91456",
                    "title": "aut sit molestias",
                    "title_en": "doloremque voluptas ex",
                    "sub_title": "eaque vitae ullam",
                    "describe": "Non cumque error totam quaerat. Aperiam facilis ut aliquid explicabo fugit in. Est rerum consequatur maxime ratione et consequatur.",
                    "describe_en": "Velit ipsa amet veritatis libero adipisci voluptatem nesciunt. Aut a itaque quia totam. Sed amet temporibus asperiores.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?69666",
                    "type": 1,
                    "parent_id": 22,
                    "level": 1,
                    "created_at": "2020-10-03 02:21:17",
                    "updated_at": "2020-09-26 22:52:02"
                }
            },
            {
                "id": 9,
                "product_category_id": 7,
                "product_name": "臻爱铂金",
                "product_name_en": "amet architecto eum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?62969",
                "slug": "esse-dolor",
                "short_description": "Dolor ut nobis quam id.",
                "short_description_en": "Autem earum exercitationem nam nemo. Itaque voluptate qui sint qui. Quas quaerat perferendis tempora laboriosam omnis consequatur eveniet. Maiores quasi porro accusamus rem dicta exercitationem animi.",
                "price": "2922.00",
                "sale_price": "0.01",
                "stock": 637,
                "spec": "160 ml \/ 2.0 oz",
                "seo_title": "dolores reprehenderit est",
                "seo_keyword": "exercitationem",
                "seo_description": "Possimus qui consequuntur harum harum.",
                "benefit": "Dolor cumque error eos rem laboriosam. Et voluptatem doloremque omnis illo veritatis. Quibusdam consequatur aspernatur ut nobis odio quas fugit neque. Et ipsum cum omnis quaerat non ex unde.",
                "benefit_en": "Harum qui id provident dolor aut. Voluptatem qui occaecati qui mollitia eos hic. Odit harum voluptatum suscipit deleniti dolore. Dolor et dolores et natus et.",
                "tech_description": "Illo est quisquam esse enim qui. Ut dolores consectetur est et saepe id. Omnis molestiae quidem in inventore quam.",
                "tech_description_en": "Qui amet itaque laboriosam ut numquam et nisi aut. Voluptas est quam rerum et deleniti dolores qui accusantium. Temporibus expedita velit voluptatem at nobis. Et eaque illo ab nulla.",
                "description": "Ut est temporibus sit ut at vel assumenda qui. Dignissimos maiores voluptatibus autem delectus officia. Aspernatur aspernatur voluptatum voluptatem ea quos deserunt.",
                "description_en": "Nemo omnis quis qui est nobis. Quo in distinctio nisi. Perspiciatis minima dolorem ut soluta. Quia magni explicabo et sit esse.",
                "usage": "Perferendis numquam odio delectus. Pariatur voluptatem saepe sit sed sunt eum eos. Porro architecto et perspiciatis rerum nihil cumque illo. Harum et sunt architecto doloribus.",
                "usage_en": "Ipsam provident impedit et. Vel laudantium ut modi. Earum aut est velit itaque voluptates.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?59052",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?81780",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?76201",
                "product_video": null,
                "status": 2,
                "rating": 7.09,
                "sold_count": 4350,
                "review_count": 7115,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-13 12:38:50",
                "updated_at": "2020-10-03 07:19:50",
                "product_category": {
                    "id": 7,
                    "name": "洁面",
                    "slug": "qui-sint",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?63448",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?96259",
                    "title": "voluptas magni fuga",
                    "title_en": "saepe sint quis",
                    "sub_title": "qui et beatae",
                    "describe": "Illum consequatur rerum cum maiores quibusdam. Fugiat quia esse hic illo est natus consequuntur. Et ad blanditiis et animi et ea. Aut suscipit similique soluta aut culpa. Qui officia et alias.",
                    "describe_en": "Reprehenderit cumque beatae soluta architecto. Nihil nobis eos ut voluptatum. Consequuntur aut non officia magnam quis accusantium. Id rerum tempore sequi adipisci fugiat consequatur dolor qui.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?56714",
                    "type": 1,
                    "parent_id": 21,
                    "level": 1,
                    "created_at": "2020-10-03 01:56:37",
                    "updated_at": "2020-09-29 07:35:25"
                }
            },
            {
                "id": 10,
                "product_category_id": 9,
                "product_name": "钻石焕活面膜",
                "product_name_en": "quo voluptas a",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?47515",
                "slug": "et-vero",
                "short_description": "Eius est possimus possimus ipsum provident rem.",
                "short_description_en": "Quia ratione voluptas aut facere. Earum mollitia exercitationem vero accusantium aliquid culpa. In consequatur animi et omnis dolores est libero.",
                "price": "7802.00",
                "sale_price": "0.01",
                "stock": 361,
                "spec": "50 ml \/ 1.7 fl. oz",
                "seo_title": "qui ut voluptate",
                "seo_keyword": "labore",
                "seo_description": "Quia nisi molestias minus.",
                "benefit": "Eveniet iusto ducimus numquam eos voluptas recusandae eos tempore. Magnam dolorum odit amet iste culpa vitae. Et tempore sed tempora expedita soluta autem. Assumenda ut eligendi beatae tempore.",
                "benefit_en": "Quam quam beatae dolor non eos nobis. Nam deserunt rerum eum suscipit praesentium animi. Expedita et autem ratione commodi et doloremque.",
                "tech_description": "Explicabo quis cum itaque et ut sed adipisci. Nihil qui sed repellat dolores suscipit a excepturi quia. Ut dolores accusamus doloremque eveniet eos magni aperiam.",
                "tech_description_en": "Quibusdam deleniti necessitatibus voluptatem enim et. Numquam culpa corporis dicta aut. Quo veritatis perferendis velit quo.",
                "description": "Molestiae itaque voluptatum rerum provident. Et et at aut a. Quasi velit error quae rerum inventore recusandae et ipsam.",
                "description_en": "Et alias placeat voluptatem. Consequatur qui sapiente commodi ea sit libero. Nobis accusantium neque explicabo sint voluptatem et numquam. Praesentium velit dolorum vel officia quia repellat qui.",
                "usage": "Qui quos quia in nostrum impedit distinctio assumenda. Repudiandae libero expedita porro corporis voluptatum numquam voluptatem laborum. Molestiae deleniti atque hic aut.",
                "usage_en": "Sint vero sed quo ut distinctio eveniet. Et omnis nobis dolor sit iusto consequatur omnis debitis. Asperiores velit doloribus omnis ducimus alias commodi molestias.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?78560",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?93205",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?92885",
                "product_video": null,
                "status": 1,
                "rating": 1.6800000000000002,
                "sold_count": 2214,
                "review_count": 2928,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-10-05 00:03:54",
                "updated_at": "2020-10-02 20:26:40",
                "product_category": {
                    "id": 9,
                    "name": "腮红",
                    "slug": "eos-cupiditate",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?88368",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?47430",
                    "title": "dolorem rerum dolorem",
                    "title_en": "fugiat reiciendis nesciunt",
                    "sub_title": "et est minus",
                    "describe": "Maxime temporibus et sint quidem excepturi. Dolore sapiente magni autem et. Aperiam neque beatae atque illum qui recusandae magni.",
                    "describe_en": "Quisquam aut a ipsum vero temporibus. Est a eos perspiciatis quia. Rerum omnis enim est dolorem ad rerum autem.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?69510",
                    "type": 1,
                    "parent_id": 22,
                    "level": 1,
                    "created_at": "2020-09-30 08:26:20",
                    "updated_at": "2020-10-06 12:32:40"
                }
            },
            {
                "id": 11,
                "product_category_id": 9,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "dolores fugit nisi",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?75706",
                "slug": "quae-itaque",
                "short_description": "Sint sed saepe nemo est dolor qui.",
                "short_description_en": "Optio eum aperiam alias ipsam dolorem asperiores et. Cum reprehenderit nam laborum aperiam qui at illum. Inventore enim dicta omnis. Minus accusantium vitae tenetur incidunt aut. Rerum dolor iusto ut itaque quod qui dicta quo.",
                "price": "6641.00",
                "sale_price": "0.01",
                "stock": 587,
                "spec": "30 ml \/ 1.0 oz.",
                "seo_title": "explicabo harum repudiandae",
                "seo_keyword": "quia",
                "seo_description": "Error ratione hic reiciendis reiciendis.",
                "benefit": "Et error debitis molestiae corporis sint voluptatem impedit sint. Odit eos voluptas modi in earum laboriosam maiores. Quidem enim consectetur quisquam pariatur.",
                "benefit_en": "Minus fuga reiciendis voluptates nihil enim repellat ab. Ullam error non occaecati perspiciatis mollitia commodi reprehenderit. Vel aut voluptatibus necessitatibus aut.",
                "tech_description": "Velit nostrum cupiditate minus nostrum non iure explicabo sint. Porro vel sit dolorem distinctio. Maiores dolor accusantium sint officiis est nihil.",
                "tech_description_en": "Incidunt minima consectetur saepe quisquam omnis et eaque. Sed non est in sed dignissimos consequuntur id. Doloribus odio vel voluptatem sit dicta expedita.",
                "description": "Enim ullam et aspernatur autem possimus ullam consequatur. Pariatur rem eius aut earum. Rerum et in qui et quis reprehenderit. Aut non sed occaecati nostrum.",
                "description_en": "Delectus doloremque eligendi natus doloremque corrupti velit. Rem maiores asperiores ratione ullam ut dicta repudiandae. Quo aperiam unde harum atque quam fugit. Vitae odio voluptatibus vero id vitae.",
                "usage": "Nemo modi omnis ad rerum qui sit sit ipsum. Rem vero accusamus ut dolor sed. Nostrum dolorem vel quia veniam.",
                "usage_en": "Voluptatem autem sit magnam officiis aliquam. Error animi nihil sed voluptas adipisci. Sunt sed est ab nihil repellendus. Molestias voluptas deleniti voluptas sapiente assumenda.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?43556",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?31315",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?30262",
                "product_video": null,
                "status": 3,
                "rating": 0.61,
                "sold_count": 1183,
                "review_count": 3508,
                "parent_id": 2,
                "level": 2,
                "created_at": "2020-09-19 18:47:09",
                "updated_at": "2020-09-19 03:21:42",
                "product_category": {
                    "id": 9,
                    "name": "腮红",
                    "slug": "eos-cupiditate",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?88368",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?47430",
                    "title": "dolorem rerum dolorem",
                    "title_en": "fugiat reiciendis nesciunt",
                    "sub_title": "et est minus",
                    "describe": "Maxime temporibus et sint quidem excepturi. Dolore sapiente magni autem et. Aperiam neque beatae atque illum qui recusandae magni.",
                    "describe_en": "Quisquam aut a ipsum vero temporibus. Est a eos perspiciatis quia. Rerum omnis enim est dolorem ad rerum autem.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?69510",
                    "type": 1,
                    "parent_id": 22,
                    "level": 1,
                    "created_at": "2020-09-30 08:26:20",
                    "updated_at": "2020-10-06 12:32:40"
                }
            },
            {
                "id": 12,
                "product_category_id": 8,
                "product_name": "黑钻肌光精华",
                "product_name_en": "optio sit optio",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?99037",
                "slug": "dolores-consectetur",
                "short_description": "Et vel fugit et.",
                "short_description_en": "Doloremque natus a animi sed inventore laboriosam ut ut. Dolorem possimus et et accusamus. Et incidunt neque provident aut veniam. Totam voluptatem qui alias ex id odio illum.",
                "price": "7835.00",
                "sale_price": "0.01",
                "stock": 381,
                "spec": "150 ml \/ 2.0 oz",
                "seo_title": "magnam deserunt possimus",
                "seo_keyword": "in",
                "seo_description": "Inventore architecto neque non ipsa.",
                "benefit": "Nostrum enim laboriosam nam reprehenderit. Eos quaerat magni blanditiis et quidem aut ut. Quia aliquam et rerum autem harum. Vero qui ut eos velit exercitationem.",
                "benefit_en": "Eligendi qui nihil saepe nisi enim hic. Et autem sint accusantium ipsa odit vero enim. Natus saepe perferendis facere totam. Ad similique sunt sunt sint.",
                "tech_description": "Non minima inventore repellendus quod. Incidunt eligendi est voluptatem hic omnis quibusdam asperiores. Aliquid minima eos aut. Sed eos aut sed corporis iure.",
                "tech_description_en": "Fuga optio dolor voluptas. Dolor accusantium quis explicabo. Illo neque distinctio et omnis ut omnis aperiam delectus. Sequi alias unde rerum perferendis.",
                "description": "Doloribus sit maxime ipsam sed voluptatem voluptatem autem. At sit molestiae distinctio et ab. In dolores architecto cumque qui. Illo eius sint ullam tempora aliquam rerum explicabo.",
                "description_en": "Voluptatem quisquam est maiores dicta. Et voluptatibus est quia. Illum optio repudiandae voluptas. Nisi deleniti corrupti vel tempore enim modi et.",
                "usage": "Et ut rerum rerum consectetur aut sint. Accusamus voluptatem commodi tempora. Aspernatur ut et commodi. In corporis sit reiciendis quaerat ipsam nemo repellendus esse.",
                "usage_en": "Quaerat ut reiciendis quis error modi. Quidem magni laborum hic voluptatum quos itaque. Qui quidem accusantium quidem quis.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?46805",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?54135",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?65862",
                "product_video": null,
                "status": 3,
                "rating": 8.66,
                "sold_count": 4173,
                "review_count": 7147,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-09 20:36:54",
                "updated_at": "2020-10-03 11:58:19",
                "product_category": {
                    "id": 8,
                    "name": "睫毛膏",
                    "slug": "rerum-dicta",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?86038",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?84822",
                    "title": "ut consequatur accusamus",
                    "title_en": "ducimus minima tenetur",
                    "sub_title": "sunt fugit debitis",
                    "describe": "Sed corporis vero eveniet aut. Consequatur impedit dignissimos totam dolor exercitationem. Rerum quibusdam et aspernatur iste consequuntur quasi at.",
                    "describe_en": "Quia et doloremque mollitia dolore nisi cumque autem. Sed dolores aut ratione sed aperiam vel ut. Doloribus provident in unde iste. Iure dolor porro dolorum earum reprehenderit aliquid culpa.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?49245",
                    "type": 1,
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-09-09 03:06:40",
                    "updated_at": "2020-09-12 04:14:33"
                }
            },
            {
                "id": 13,
                "product_category_id": 10,
                "product_name": "黑钻肌光精华",
                "product_name_en": "quis deleniti et",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?50238",
                "slug": "non-est",
                "short_description": "Qui rerum eos velit pariatur.",
                "short_description_en": "Placeat temporibus blanditiis quis. Voluptatum distinctio saepe nemo molestiae. Quis occaecati molestiae rerum pariatur voluptas nihil. Quis sapiente dolor accusantium eius alias.",
                "price": "1207.00",
                "sale_price": "0.01",
                "stock": 359,
                "spec": "50 ml \/ 1.7 fl. oz",
                "seo_title": "est optio aut",
                "seo_keyword": "voluptate",
                "seo_description": "Sequi dolores sequi nulla.",
                "benefit": "Inventore facilis dicta sit adipisci veritatis. Officia quaerat molestias nobis et omnis. Et dolores fugiat laboriosam.",
                "benefit_en": "Rerum id autem eveniet. Omnis accusamus laboriosam reiciendis ut necessitatibus ut consectetur voluptatem. Adipisci voluptatem sint iure dolor rerum dicta similique.",
                "tech_description": "Ut dolorum necessitatibus est ea delectus quaerat. Ratione veniam molestiae unde ut dolor. Id voluptas quasi possimus corporis quae. Soluta et voluptatem sint laudantium quod.",
                "tech_description_en": "Ad recusandae qui quis velit modi. Quibusdam voluptas praesentium reprehenderit qui neque. Corrupti dolor ab enim fuga sint.",
                "description": "Voluptates adipisci architecto non. Voluptas est qui molestiae suscipit voluptatem.",
                "description_en": "Et et iure nam voluptatem quisquam non harum. Et repudiandae inventore qui dolorem repellat.",
                "usage": "Enim ut quia qui nisi adipisci voluptates. In aperiam voluptatem quo ea accusantium non. Sed numquam placeat ullam aut voluptatem ab maiores.",
                "usage_en": "Eligendi adipisci consequuntur excepturi rem minima voluptatem ratione. Dolorum occaecati sed tenetur in placeat. Repudiandae quia voluptates qui sunt quam neque illum. Est sapiente itaque suscipit. Rerum consequatur facere ea et amet dicta saepe.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?13377",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?20716",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?59209",
                "product_video": null,
                "status": 3,
                "rating": 6.2,
                "sold_count": 5043,
                "review_count": 4071,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-11 13:43:19",
                "updated_at": "2020-10-05 23:12:21",
                "product_category": {
                    "id": 10,
                    "name": "唇膏",
                    "slug": "vitae-neque",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?86148",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?16749",
                    "title": "placeat eos molestiae",
                    "title_en": "alias amet a",
                    "sub_title": "animi sed deserunt",
                    "describe": "Non velit consequatur doloremque et. Molestiae reprehenderit adipisci accusamus dolores et. Asperiores omnis quo quisquam debitis sunt.",
                    "describe_en": "Quasi quia eius ut eveniet libero dolor sit. Fugiat repudiandae ut accusamus veritatis dolores voluptate. Et labore cumque et voluptatem aut accusantium.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?61914",
                    "type": 1,
                    "parent_id": 0,
                    "level": 1,
                    "created_at": "2020-09-28 10:44:05",
                    "updated_at": "2020-09-15 02:11:58"
                }
            },
            {
                "id": 14,
                "product_category_id": 8,
                "product_name": "黑钻肌光精华",
                "product_name_en": "magnam numquam asperiores",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?62694",
                "slug": "nobis-libero",
                "short_description": "Commodi natus magni nam nulla.",
                "short_description_en": "Id et recusandae similique iusto. Sit voluptas eum exercitationem in nemo voluptas sunt.",
                "price": "4322.00",
                "sale_price": "0.01",
                "stock": 949,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "nulla impedit quas",
                "seo_keyword": "tempore",
                "seo_description": "Voluptatum veniam porro hic quaerat doloremque quam.",
                "benefit": "Nisi qui excepturi sapiente adipisci rerum. Saepe non unde velit et. Maxime alias et vel quis nemo.",
                "benefit_en": "Ducimus quia ut sed sed. Incidunt iure assumenda in qui est nam. Quibusdam est aliquam est aut cumque repellat officiis. Cupiditate ratione dolorum quas beatae est quidem.",
                "tech_description": "Tenetur dicta sed labore. Fuga exercitationem minus culpa. Deserunt quibusdam sed ipsa mollitia. Est dolor odio qui quis et.",
                "tech_description_en": "Sit ea saepe et praesentium provident eos. Facilis quas et cum suscipit id non.",
                "description": "Magnam eligendi laboriosam dolorem et minima. Architecto consectetur corporis illum. Ut quod ea labore incidunt mollitia. Nemo quisquam id fugit eaque ut quae.",
                "description_en": "Ratione nemo harum deleniti itaque perferendis officia. Exercitationem in quos ex est. Mollitia numquam doloremque et facilis dolorum voluptatum asperiores.",
                "usage": "Magni nihil non incidunt nulla et voluptas et. Laudantium et necessitatibus non porro. Vel quis dolor aperiam soluta dolor. Necessitatibus et voluptatem aliquam.",
                "usage_en": "Mollitia et et officia tempora reprehenderit vero veniam temporibus. Quas nulla ab et nisi. Est possimus officia aut ea iure.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?75775",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?34631",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?54498",
                "product_video": null,
                "status": 1,
                "rating": 1.33,
                "sold_count": 2122,
                "review_count": 7756,
                "parent_id": 2,
                "level": 2,
                "created_at": "2020-10-05 04:39:49",
                "updated_at": "2020-09-22 18:23:36",
                "product_category": {
                    "id": 8,
                    "name": "睫毛膏",
                    "slug": "rerum-dicta",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?86038",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?84822",
                    "title": "ut consequatur accusamus",
                    "title_en": "ducimus minima tenetur",
                    "sub_title": "sunt fugit debitis",
                    "describe": "Sed corporis vero eveniet aut. Consequatur impedit dignissimos totam dolor exercitationem. Rerum quibusdam et aspernatur iste consequuntur quasi at.",
                    "describe_en": "Quia et doloremque mollitia dolore nisi cumque autem. Sed dolores aut ratione sed aperiam vel ut. Doloribus provident in unde iste. Iure dolor porro dolorum earum reprehenderit aliquid culpa.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?49245",
                    "type": 1,
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-09-09 03:06:40",
                    "updated_at": "2020-09-12 04:14:33"
                }
            },
            {
                "id": 15,
                "product_category_id": 9,
                "product_name": "黑钻焕肤水",
                "product_name_en": "nam enim nemo",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?66198",
                "slug": "quo-et",
                "short_description": "Non recusandae soluta beatae architecto voluptates.",
                "short_description_en": "Similique sit iste odio quia. Aperiam fugiat nostrum eos doloribus similique similique earum. Cupiditate veritatis ex molestias quisquam id provident delectus.",
                "price": "1678.00",
                "sale_price": "0.01",
                "stock": 943,
                "spec": "30 ml \/ 1.0 oz.",
                "seo_title": "quos dicta quibusdam",
                "seo_keyword": "saepe",
                "seo_description": "Veniam sunt vitae aut officia error sed.",
                "benefit": "Officiis neque praesentium iusto dolor debitis voluptatem est nemo. Natus nisi rem ut omnis non vitae molestias.",
                "benefit_en": "Id ea aut rerum excepturi. Dicta aut similique fuga aliquid modi a repellendus. Illo exercitationem voluptatem fugit non. Labore ullam iure laborum. Dolorem earum voluptatem qui omnis.",
                "tech_description": "Similique ut vitae fuga pariatur voluptatibus ex. Impedit sequi natus consequuntur esse deserunt eos ex. Sed natus molestiae voluptatem facere in incidunt. Amet eum officiis qui eum libero a.",
                "tech_description_en": "Cupiditate ratione maxime incidunt impedit. Blanditiis eos rem et labore aut id. Ut molestiae voluptatem voluptatem molestiae molestias.",
                "description": "Ducimus quis assumenda accusamus voluptatem. Aliquid sed odit optio odio nobis est assumenda iure.",
                "description_en": "Facere a est non sequi voluptatum blanditiis libero quia. Ex est earum et quia atque eaque distinctio.",
                "usage": "Asperiores ab culpa eos dolores rerum rerum rerum. Nihil cum veritatis laudantium placeat eum et voluptatem. Et dolorem sed illo animi sit aperiam.",
                "usage_en": "Deleniti et quidem et culpa. Natus ipsum in voluptatum nostrum quam quis quis. Inventore deleniti dolore odit. Ipsum velit corrupti et nulla.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?58781",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?61938",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?25033",
                "product_video": null,
                "status": 1,
                "rating": 7.1,
                "sold_count": 4672,
                "review_count": 5881,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-14 03:29:46",
                "updated_at": "2020-09-27 00:22:17",
                "product_category": {
                    "id": 9,
                    "name": "腮红",
                    "slug": "eos-cupiditate",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?88368",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?47430",
                    "title": "dolorem rerum dolorem",
                    "title_en": "fugiat reiciendis nesciunt",
                    "sub_title": "et est minus",
                    "describe": "Maxime temporibus et sint quidem excepturi. Dolore sapiente magni autem et. Aperiam neque beatae atque illum qui recusandae magni.",
                    "describe_en": "Quisquam aut a ipsum vero temporibus. Est a eos perspiciatis quia. Rerum omnis enim est dolorem ad rerum autem.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?69510",
                    "type": 1,
                    "parent_id": 22,
                    "level": 1,
                    "created_at": "2020-09-30 08:26:20",
                    "updated_at": "2020-10-06 12:32:40"
                }
            },
            {
                "id": 16,
                "product_category_id": 4,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "tenetur soluta ducimus",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?85127",
                "slug": "nostrum-sed",
                "short_description": "Consectetur quisquam facilis quae nobis officia.",
                "short_description_en": "Ut nobis dolorem perferendis atque amet ut. Eos eveniet harum facilis eius nostrum velit. Distinctio eum dicta iure quia voluptatem.",
                "price": "6482.00",
                "sale_price": "0.01",
                "stock": 764,
                "spec": "60 ml \/ 2.0 oz",
                "seo_title": "maxime officia fugit",
                "seo_keyword": "consequatur",
                "seo_description": "Ullam voluptates dolor harum consectetur excepturi natus.",
                "benefit": "Sit cumque facere ex. Dolor ut officiis tenetur autem cum. Aperiam unde quia molestiae quasi quam porro. Quis id vel quaerat dolores. Fugiat beatae minima eveniet cumque et sint.",
                "benefit_en": "Ea dolores magni voluptates fugiat. Voluptatem debitis quis magnam omnis molestiae ut perferendis sequi. Fuga corporis vero corrupti non magnam dolorem velit. Inventore odit animi et quisquam quia illum adipisci.",
                "tech_description": "Est quia est officia quis possimus beatae sint. Saepe quibusdam iusto hic in.",
                "tech_description_en": "Voluptatibus est recusandae nam esse occaecati. Magni quibusdam soluta tempora sed est quasi. In corrupti eaque qui neque et exercitationem ipsa.",
                "description": "Maiores dignissimos sed ea sapiente. Et et velit et molestiae nihil. Blanditiis voluptate distinctio aut rem omnis.",
                "description_en": "Qui cumque vel id quam nulla deleniti modi itaque. Provident autem nobis omnis dolorum facere. Explicabo laborum occaecati distinctio inventore voluptas qui.",
                "usage": "Ea esse in quis soluta beatae consequuntur quas illum. Pariatur itaque nobis fuga nemo adipisci qui. Distinctio commodi vero repellendus et. Assumenda aliquid nemo vel vitae ullam est.",
                "usage_en": "Distinctio assumenda sequi mollitia nesciunt. Provident dolores ut et aperiam itaque natus. Vero laborum nobis iure pariatur enim nostrum. Officiis qui porro doloremque ut.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?78971",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?31259",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?62174",
                "product_video": null,
                "status": 3,
                "rating": 0.62,
                "sold_count": 4695,
                "review_count": 4198,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-20 13:34:56",
                "updated_at": "2020-10-03 07:41:21",
                "product_category": {
                    "id": 4,
                    "name": "面霜",
                    "slug": "debitis-qui",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?72970",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?62140",
                    "title": "dolore nam atque",
                    "title_en": "vel eos excepturi",
                    "sub_title": "enim ullam hic",
                    "describe": "Voluptas nisi vel beatae qui iusto aut. Sit omnis earum alias et. Minima velit magnam et quisquam quas voluptatem ex. Et eius neque assumenda saepe nisi iusto.",
                    "describe_en": "Illum voluptate esse sit eaque. Nesciunt omnis et optio autem maxime soluta at. Ut non modi deleniti voluptatem et.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?91041",
                    "type": 1,
                    "parent_id": 0,
                    "level": 1,
                    "created_at": "2020-10-02 15:05:50",
                    "updated_at": "2020-09-26 02:43:58"
                }
            },
            {
                "id": 17,
                "product_category_id": 1,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "ut voluptas aliquam",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?75594",
                "slug": "neque-error",
                "short_description": "Non fugiat sunt odit tempore.",
                "short_description_en": "Doloremque molestiae omnis incidunt est tempore. Qui laboriosam doloribus tempore eveniet provident. Magnam molestiae minus ut. Autem tempore sit nulla alias maiores optio at.",
                "price": "2334.00",
                "sale_price": "0.01",
                "stock": 772,
                "spec": "50 ml \/ 1.7 fl. oz",
                "seo_title": "voluptate et dolorem",
                "seo_keyword": "assumenda",
                "seo_description": "Dolore libero voluptas amet.",
                "benefit": "Dolor non nisi tempora. Eaque ea aut magni at et placeat sed incidunt. Voluptas atque et ad sed.",
                "benefit_en": "Illo eius molestias amet eos et modi pariatur. Sequi perspiciatis distinctio porro ratione et. Dolorem vel deleniti ducimus est ipsa aperiam dolor labore. Qui tempora necessitatibus similique.",
                "tech_description": "A modi fugit eos asperiores animi. Explicabo ut voluptatem illum repellendus ullam doloremque reprehenderit deserunt. Saepe dolorem earum quo.",
                "tech_description_en": "Officiis reiciendis ex consequatur. Neque blanditiis molestias ut quam vero debitis error fugiat. Perspiciatis non omnis et sit sequi.",
                "description": "Sint iusto ut excepturi ipsum veniam. Eaque nihil reiciendis quisquam totam consequatur. Fuga omnis quae sint perspiciatis corporis laudantium. Qui porro doloremque aperiam quos optio maxime.",
                "description_en": "Quam quod repudiandae delectus animi rem culpa. Amet incidunt laboriosam ea labore. Repudiandae voluptatibus voluptatum sunt dolorem aut.",
                "usage": "Fuga aut ea aut vitae. Quod ullam est vitae eos. Repudiandae soluta quia totam tenetur et. Laudantium delectus ut iure dicta pariatur aut est dolores.",
                "usage_en": "Ut molestias similique incidunt sed. Laudantium cum iste voluptatem odit nostrum sunt. Est commodi in nesciunt eius magnam debitis et. Itaque quo officia numquam aut sit eos ipsa. Consequatur aperiam temporibus numquam et aut est voluptatem vel.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?95578",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?83860",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?90896",
                "product_video": null,
                "status": 2,
                "rating": 9.83,
                "sold_count": 7719,
                "review_count": 9446,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-26 03:43:52",
                "updated_at": "2020-09-25 16:04:14",
                "product_category": {
                    "id": 1,
                    "name": "BB霜",
                    "slug": "deleniti-cum",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?98188",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?79396",
                    "title": "ut tempore maxime",
                    "title_en": "possimus architecto aut",
                    "sub_title": "enim est ad",
                    "describe": "Est accusamus molestiae omnis. Eaque voluptas inventore dolorum repudiandae. Provident maxime autem qui odit omnis ex. Consequatur quia mollitia nihil quis explicabo.",
                    "describe_en": "Error nostrum consequatur quia ratione quidem aut dicta molestiae. Ut veniam eaque quas et distinctio nam harum. Accusantium quam praesentium facilis excepturi vel officiis officiis.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?94294",
                    "type": 1,
                    "parent_id": 21,
                    "level": 1,
                    "created_at": "2020-09-07 12:31:10",
                    "updated_at": "2020-10-04 11:14:51"
                }
            },
            {
                "id": 18,
                "product_category_id": 5,
                "product_name": "黑钻焕肤水",
                "product_name_en": "dolorem quidem ea",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?21580",
                "slug": "impedit-eum",
                "short_description": "Quos eligendi placeat repudiandae quae.",
                "short_description_en": "Qui iste accusamus praesentium est ab totam. Aperiam eos voluptate et. Sint perferendis sit molestiae dolores a distinctio exercitationem.",
                "price": "9149.00",
                "sale_price": "0.01",
                "stock": 19,
                "spec": "150 ml \/ 2.0 oz",
                "seo_title": "omnis vel nobis",
                "seo_keyword": "minima",
                "seo_description": "Ut facilis sunt nobis.",
                "benefit": "Harum libero modi placeat quasi consequatur. Debitis illo iste earum adipisci ut. Ut sint sed et dolores.",
                "benefit_en": "Magni dolore maiores voluptas veniam. Consectetur sapiente molestias et. Dolor facere qui quae eum maxime quas enim.",
                "tech_description": "Magnam eius excepturi eveniet aspernatur. Similique et officia labore dolor in sint corrupti. Eligendi sunt et voluptatibus ut qui tempora ut. Ab quae in itaque magnam praesentium nihil omnis repellat. Et beatae iste et iste at ut.",
                "tech_description_en": "Quam est iusto adipisci. Velit maiores sunt illum alias temporibus minus. Quos ut autem facere esse enim est.",
                "description": "Ipsam veritatis autem fuga et. Repellat ipsa quisquam neque minus et eveniet culpa. Et ut nam cum hic qui voluptatem. Enim est laborum libero autem nam.",
                "description_en": "Quia odit et qui sit minus unde. Maxime aut rerum velit. Asperiores nam aliquid doloremque quia ut.",
                "usage": "Nam magnam unde eaque nihil suscipit vel hic. Aperiam vel recusandae rerum ut. Cum sit dolorem quod est aut.",
                "usage_en": "Quae sit natus cumque omnis fugit impedit reprehenderit. Laboriosam hic rerum dolorem nulla atque aliquid reprehenderit.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?14461",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?96358",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?82889",
                "product_video": null,
                "status": 1,
                "rating": 0.8,
                "sold_count": 3918,
                "review_count": 5650,
                "parent_id": 2,
                "level": 2,
                "created_at": "2020-10-01 23:15:17",
                "updated_at": "2020-09-25 17:25:59",
                "product_category": {
                    "id": 5,
                    "name": "BB霜",
                    "slug": "ipsam-optio",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?71677",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?31899",
                    "title": "voluptates aut quas",
                    "title_en": "beatae eos eligendi",
                    "sub_title": "harum ut velit",
                    "describe": "Blanditiis vero sed quia facilis et cupiditate omnis. Et voluptatum consectetur id animi. Quis maxime natus rerum quis et. Et quos illo adipisci praesentium vitae et ea maxime.",
                    "describe_en": "Qui molestiae officia ad. Accusamus tempora perspiciatis dicta qui et ut ut. Tempore a iusto dolore voluptatem amet.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?12460",
                    "type": 1,
                    "parent_id": 0,
                    "level": 1,
                    "created_at": "2020-09-30 05:31:41",
                    "updated_at": "2020-09-25 10:00:34"
                }
            },
            {
                "id": 19,
                "product_category_id": 9,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "aliquid laborum delectus",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?34036",
                "slug": "atque-voluptas",
                "short_description": "Consequatur reiciendis corrupti dignissimos.",
                "short_description_en": "Ut omnis ratione sunt laborum aut. Voluptas non unde aut omnis. Et impedit sed sed quia aperiam illum eum.",
                "price": "6883.00",
                "sale_price": "0.01",
                "stock": 455,
                "spec": "50 ml \/ 1.7 fl. oz",
                "seo_title": "consequatur et consequatur",
                "seo_keyword": "explicabo",
                "seo_description": "Corporis est ipsam distinctio vel.",
                "benefit": "Aut eaque soluta amet maiores exercitationem perspiciatis. Voluptas voluptatem aut tempore explicabo vel ut. Cupiditate occaecati libero architecto architecto voluptate consequuntur.",
                "benefit_en": "Autem accusamus dolore qui illo quia occaecati quia. Voluptas eum vel id atque enim adipisci saepe. Totam ut sed blanditiis aperiam commodi porro soluta. Perspiciatis fugit necessitatibus et.",
                "tech_description": "Fugiat natus est voluptas dolor. Et saepe eum qui quo quidem deleniti placeat. Quidem accusantium voluptas voluptas.",
                "tech_description_en": "Doloribus nam error saepe exercitationem. Qui non vel perferendis quis eius et enim. Odit vitae sequi eligendi corporis nostrum iusto. Occaecati expedita porro sapiente nobis pariatur.",
                "description": "Eum consequatur rem omnis optio voluptas commodi distinctio. Sunt fugit ut ipsam aliquid amet rerum. Similique veritatis perferendis eveniet quo fugit nihil voluptatem. Non ut quae enim atque sed mollitia. Non suscipit sed omnis.",
                "description_en": "Id sunt atque nisi adipisci. Voluptate maiores necessitatibus est veniam temporibus. Eveniet ut et totam nesciunt reprehenderit dolorem dolorem velit. Ut autem nulla ut occaecati recusandae ut repellendus et.",
                "usage": "Aut sed voluptatem est ut quos sequi deleniti praesentium. Dolor quis ut voluptas unde iusto neque voluptatum. Et saepe minus nesciunt numquam suscipit non aperiam.",
                "usage_en": "Aut non ut iste molestias occaecati suscipit autem ut. Distinctio et adipisci minima in neque excepturi eligendi. Ratione accusantium et ipsum harum accusamus et fugit. Aut quia sint sed.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?90964",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?85502",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?49173",
                "product_video": null,
                "status": 3,
                "rating": 9.98,
                "sold_count": 8378,
                "review_count": 3408,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-10-06 01:01:06",
                "updated_at": "2020-09-25 08:49:36",
                "product_category": {
                    "id": 9,
                    "name": "腮红",
                    "slug": "eos-cupiditate",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?88368",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?47430",
                    "title": "dolorem rerum dolorem",
                    "title_en": "fugiat reiciendis nesciunt",
                    "sub_title": "et est minus",
                    "describe": "Maxime temporibus et sint quidem excepturi. Dolore sapiente magni autem et. Aperiam neque beatae atque illum qui recusandae magni.",
                    "describe_en": "Quisquam aut a ipsum vero temporibus. Est a eos perspiciatis quia. Rerum omnis enim est dolorem ad rerum autem.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?69510",
                    "type": 1,
                    "parent_id": 22,
                    "level": 1,
                    "created_at": "2020-09-30 08:26:20",
                    "updated_at": "2020-10-06 12:32:40"
                }
            },
            {
                "id": 20,
                "product_category_id": 9,
                "product_name": "纯皙精致",
                "product_name_en": "voluptatem et ex",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?80286",
                "slug": "veritatis-facilis",
                "short_description": "Corrupti ipsam facere tenetur perspiciatis similique.",
                "short_description_en": "Et distinctio ab aut deleniti perferendis. Nisi quaerat quisquam ad mollitia saepe natus temporibus. Voluptas ut aut rerum. Aliquid quidem maiores non nihil.",
                "price": "5921.00",
                "sale_price": "0.01",
                "stock": 40,
                "spec": "30 ml \/ 1.0 oz.",
                "seo_title": "possimus sapiente accusantium",
                "seo_keyword": "ab",
                "seo_description": "Perspiciatis quia et praesentium.",
                "benefit": "Aliquid autem aut dolorem odio. Ratione ipsum sed molestias adipisci et. Iure molestiae nemo reprehenderit maxime est est.",
                "benefit_en": "Provident in ex sint praesentium. Nisi sunt quis quia. Odit expedita et voluptatem eaque.",
                "tech_description": "Fugiat perspiciatis incidunt provident soluta. Ullam voluptatem sed sit ut saepe deserunt. Nobis sint vitae saepe ut tempora alias. Inventore qui hic provident fugiat.",
                "tech_description_en": "Ut non voluptas mollitia maiores aut voluptatum. Nemo non in minus. Sed quia ullam ut sapiente quis dolores et. Necessitatibus animi aspernatur id.",
                "description": "Autem enim distinctio dignissimos quod esse ullam. Architecto molestiae qui nam praesentium at. Impedit ea perferendis voluptas numquam deleniti modi.",
                "description_en": "Et qui repudiandae dolor rerum odio ex soluta dicta. Quia ut natus aperiam ut ut autem. Vel laboriosam et voluptatem.",
                "usage": "Veritatis nihil eaque quis aut ad porro. Asperiores eum nisi sit non animi. Voluptatem expedita ratione sint voluptatem et. Incidunt vitae sequi veritatis omnis.",
                "usage_en": "Enim cum sed illo at ut corporis aliquid veritatis. Illo et sed non nihil recusandae. Molestiae consequatur illum excepturi consequatur illum earum. Id velit omnis enim labore et ipsum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?38743",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?89798",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?54444",
                "product_video": null,
                "status": 3,
                "rating": 8.33,
                "sold_count": 5308,
                "review_count": 6330,
                "parent_id": 0,
                "level": 2,
                "created_at": "2020-09-28 12:49:13",
                "updated_at": "2020-09-17 09:12:01",
                "product_category": {
                    "id": 9,
                    "name": "腮红",
                    "slug": "eos-cupiditate",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?88368",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?47430",
                    "title": "dolorem rerum dolorem",
                    "title_en": "fugiat reiciendis nesciunt",
                    "sub_title": "et est minus",
                    "describe": "Maxime temporibus et sint quidem excepturi. Dolore sapiente magni autem et. Aperiam neque beatae atque illum qui recusandae magni.",
                    "describe_en": "Quisquam aut a ipsum vero temporibus. Est a eos perspiciatis quia. Rerum omnis enim est dolorem ad rerum autem.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?69510",
                    "type": 1,
                    "parent_id": 22,
                    "level": 1,
                    "created_at": "2020-09-30 08:26:20",
                    "updated_at": "2020-10-06 12:32:40"
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
        "total": 33
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
    -G "http://localhost/api/products/list/product_category_skin_care/voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/products/list/product_category_skin_care/voluptatem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
    -G "http://localhost/api/products/status/qui?page=non&page_limit=necessitatibus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/products/status/qui"
);

let params = {
    "page": "non",
    "page_limit": "necessitatibus",
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
            "product_name": "钻石焕活面膜",
            "product_name_en": "dicta harum molestias",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?82035",
            "slug": "voluptatem-quidem",
            "short_description": "Dolorem fuga autem sequi neque distinctio debitis.",
            "price": "5991.00",
            "sale_price": "0.01"
        },
        {
            "product_category_id": 7,
            "product_name": "黑钻臻活眼部精华",
            "product_name_en": "rem aliquam laudantium",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?76368",
            "slug": "occaecati-delectus",
            "short_description": "Quaerat delectus repellendus pariatur aut doloribus rerum.",
            "price": "3533.00",
            "sale_price": "0.01"
        },
        {
            "product_category_id": 4,
            "product_name": "钻石焕活面膜",
            "product_name_en": "eos ad nihil",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?12376",
            "slug": "aut-autem",
            "short_description": "Et fugiat voluptate repellendus delectus.",
            "price": "7068.00",
            "sale_price": "0.01"
        },
        {
            "product_category_id": 9,
            "product_name": "黑钻焕肤水",
            "product_name_en": "nam enim nemo",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?66198",
            "slug": "quo-et",
            "short_description": "Non recusandae soluta beatae architecto voluptates.",
            "price": "1678.00",
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
            "id": 15,
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?66198",
            "slug": "quo-et",
            "product_name": "黑钻焕肤水",
            "product_name_en": "nam enim nemo"
        },
        {
            "id": 14,
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?62694",
            "slug": "nobis-libero",
            "product_name": "黑钻肌光精华",
            "product_name_en": "magnam numquam asperiores"
        },
        {
            "id": 2,
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?43407",
            "slug": "aut-consequuntur",
            "product_name": "黑钻洁净滋养面膜",
            "product_name_en": "cum ipsum est"
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
            "name": "彩妆盘",
            "slug": "omnis-at",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?73581",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?91456",
            "title": "aut sit molestias",
            "title_en": "doloremque voluptas ex",
            "sub_title": "eaque vitae ullam",
            "describe": "Non cumque error totam quaerat. Aperiam facilis ut aliquid explicabo fugit in. Est rerum consequatur maxime ratione et consequatur.",
            "describe_en": "Velit ipsa amet veritatis libero adipisci voluptatem nesciunt. Aut a itaque quia totam. Sed amet temporibus asperiores.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?69666",
            "type": 1,
            "parent_id": 22,
            "level": 1,
            "created_at": "2020-10-03 02:21:17",
            "updated_at": "2020-09-26 22:52:02",
            "children": [
                {
                    "id": 8,
                    "name": "睫毛膏",
                    "slug": "rerum-dicta",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?86038",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?84822",
                    "title": "ut consequatur accusamus",
                    "title_en": "ducimus minima tenetur",
                    "sub_title": "sunt fugit debitis",
                    "describe": "Sed corporis vero eveniet aut. Consequatur impedit dignissimos totam dolor exercitationem. Rerum quibusdam et aspernatur iste consequuntur quasi at.",
                    "describe_en": "Quia et doloremque mollitia dolore nisi cumque autem. Sed dolores aut ratione sed aperiam vel ut. Doloribus provident in unde iste. Iure dolor porro dolorum earum reprehenderit aliquid culpa.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?49245",
                    "type": 1,
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-09-09 03:06:40",
                    "updated_at": "2020-09-12 04:14:33"
                }
            ]
        },
        {
            "id": 5,
            "name": "BB霜",
            "slug": "ipsam-optio",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?71677",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?31899",
            "title": "voluptates aut quas",
            "title_en": "beatae eos eligendi",
            "sub_title": "harum ut velit",
            "describe": "Blanditiis vero sed quia facilis et cupiditate omnis. Et voluptatum consectetur id animi. Quis maxime natus rerum quis et. Et quos illo adipisci praesentium vitae et ea maxime.",
            "describe_en": "Qui molestiae officia ad. Accusamus tempora perspiciatis dicta qui et ut ut. Tempore a iusto dolore voluptatem amet.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?12460",
            "type": 1,
            "parent_id": 0,
            "level": 1,
            "created_at": "2020-09-30 05:31:41",
            "updated_at": "2020-09-25 10:00:34",
            "children": [
                {
                    "id": 6,
                    "name": "彩妆盘",
                    "slug": "voluptatum-corporis",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?14767",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?49979",
                    "title": "corrupti ipsam ipsam",
                    "title_en": "incidunt occaecati minima",
                    "sub_title": "quidem molestiae quo",
                    "describe": "Rem laborum error quibusdam eveniet dolore quaerat. Ut deleniti provident est odit atque quasi.",
                    "describe_en": "Laudantium sapiente sed repellat ullam. Doloremque recusandae veniam nostrum ut odio fugiat. Sed ratione quia ea recusandae cum.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?15559",
                    "type": 1,
                    "parent_id": 5,
                    "level": 1,
                    "created_at": "2020-09-07 16:08:18",
                    "updated_at": "2020-09-27 16:17:40"
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
    -G "http://localhost/api/product_category/story/sint" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product_category/story/sint"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
            "id": 1,
            "slug": "ea-id",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?80092",
            "product_name": "纯皙精致",
            "product_name_en": "odit possimus saepe"
        },
        {
            "id": 2,
            "slug": "aut-consequuntur",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?43407",
            "product_name": "黑钻洁净滋养面膜",
            "product_name_en": "cum ipsum est"
        },
        {
            "id": 3,
            "slug": "est-assumenda",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?49967",
            "product_name": "黑钻焕肤水",
            "product_name_en": "recusandae enim officia"
        },
        {
            "id": 31,
            "slug": "p-aseffasdf-p",
            "thumbnail": "http:\/\/wutang-store.oss-cn-shenzhen.aliyuncs.com\/Products\/UtlTedJXDQkMdtztOdIz36pPJzGKK4DfI7rQnadh.jpeg",
            "product_name": "五七二七人",
            "product_name_en": "asdfsadf"
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
    -d '{"product_list":[{"product_id":2}]}'

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
            "product_id": 2
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
    "http://localhost/api/shop_carts/1?type=eaque&product_id=error&amount=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/shop_carts/1"
);

let params = {
    "type": "eaque",
    "product_id": "error",
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
    "http://localhost/api/shop_carts/1?product_id=perferendis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/shop_carts/1"
);

let params = {
    "product_id": "perferendis",
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
            "slug": "nihil-at",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?43402",
            "title": "explicabo voluptas voluptatem",
            "sub_title": "sint nostrum quas",
            "created_at": "2020-09-13 13:06:38",
            "updated_at": "2020-07-05 03:01:50"
        },
        {
            "id": 2,
            "name": "品牌介绍",
            "slug": "sit-ratione",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?74406",
            "title": "error fuga et",
            "sub_title": "fuga mollitia quia",
            "created_at": "2020-01-19 03:30:46",
            "updated_at": "2020-06-14 01:13:46"
        },
        {
            "id": 3,
            "name": "品牌介绍",
            "slug": "nihil-quod",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?55336",
            "title": "culpa tempora odit",
            "sub_title": "velit nulla modi",
            "created_at": "2020-04-04 10:18:22",
            "updated_at": "2020-03-25 22:39:09"
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
    -d '{"province":"in","city":"et","district":"cumque","address":"hic","zip":3,"contact_name":"in","contact_phone":15}'

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
    "province": "in",
    "city": "et",
    "district": "cumque",
    "address": "hic",
    "zip": 3,
    "contact_name": "in",
    "contact_phone": 15
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
    "http://localhost/api/user_addresses/1?province=adipisci&city=eos&district=voluptatem&address=expedita&zip=velit&contact_name=magni&contact_phone=nobis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_addresses/1"
);

let params = {
    "province": "adipisci",
    "city": "eos",
    "district": "voluptatem",
    "address": "expedita",
    "zip": "velit",
    "contact_name": "magni",
    "contact_phone": "nobis",
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
    "http://localhost/api/user_profile?phone=perferendis&real_name=debitis&sex=voluptatem&birthday=accusamus&age=quia&province=deleniti&city=iste&district=vitae&address=saepe&zip=ipsa" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_profile"
);

let params = {
    "phone": "perferendis",
    "real_name": "debitis",
    "sex": "voluptatem",
    "birthday": "accusamus",
    "age": "quia",
    "province": "deleniti",
    "city": "iste",
    "district": "vitae",
    "address": "saepe",
    "zip": "ipsa",
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
    -d '{"code":"aut"}'

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
    -G "http://localhost/api/wish_list?page=praesentium&page_limit=voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/wish_list"
);

let params = {
    "page": "praesentium",
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
    -d '{"product_id":9}'

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
    "product_id": 9
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
    "http://localhost/api/wish_list/sed" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/wish_list/sed"
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
    -G "http://localhost/alipay/bank_gateway/pay?no=aut&total_amount=dolor&payment_key=sunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/alipay/bank_gateway/pay"
);

let params = {
    "no": "aut",
    "total_amount": "dolor",
    "payment_key": "sunt",
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
        "no": "aut",
        "total_amount": "dolor",
        "payment_key": "sunt"
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
    -G "http://localhost/alipay/aop_page/pay?no=ipsam&total_amount=ducimus&payment_key=est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/alipay/aop_page/pay"
);

let params = {
    "no": "ipsam",
    "total_amount": "ducimus",
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
        "no": "ipsam",
        "total_amount": "ducimus",
        "payment_key": "est"
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
    -G "http://localhost/alipay/legacy_express/pay?no=sit&total_amount=quis&payment_key=quidem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/alipay/legacy_express/pay"
);

let params = {
    "no": "sit",
    "total_amount": "quis",
    "payment_key": "quidem",
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
        "no": "sit",
        "total_amount": "quis",
        "payment_key": "quidem"
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
    -G "http://localhost/unionpay/pay?no=quia&total_amount=nemo&payment_key=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/unionpay/pay"
);

let params = {
    "no": "quia",
    "total_amount": "nemo",
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
        "no": "quia",
        "total_amount": "nemo",
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
    -G "http://localhost/api/response_code?10001=et&10003=quae&20001=non&40001=architecto&40003=laboriosam&40004=est&40005=neque&50001=sit&P1001=hic&P1002=odit&P4004=at&P4005=voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/response_code"
);

let params = {
    "10001": "et",
    "10003": "quae",
    "20001": "non",
    "40001": "architecto",
    "40003": "laboriosam",
    "40004": "est",
    "40005": "neque",
    "50001": "sit",
    "P1001": "hic",
    "P1002": "odit",
    "P4004": "at",
    "P4005": "voluptas",
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


