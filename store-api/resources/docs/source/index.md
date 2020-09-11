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

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/alipay/legacy_express?page=iusto&page_limit=nisi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/legacy_express"
);

let params = {
    "page": "iusto",
    "page_limit": "nisi",
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

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/alipay/legacy_express" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"items":[{"pid":"excepturi","key":"at","seller_email":"tempore"}]}'

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
            "pid": "excepturi",
            "key": "at",
            "seller_email": "tempore"
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

> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/alipay/legacy_express/1?id=aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/legacy_express/1"
);

let params = {
    "id": "aut",
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

> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/alipay/legacy_express/1?id=quas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/legacy_express/1"
);

let params = {
    "id": "quas",
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

> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/alipay/legacy_express/status/1?id=quidem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/legacy_express/status/1"
);

let params = {
    "id": "quidem",
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

#[ADMIN] Category story

分类故事
<!-- START_03beced1b66f1ed5912bf94c07e1a9a8 -->
## Get product category stoies
获取产品分类故事

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/category_stories?page=repellendus&page_limit=ducimus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories"
);

let params = {
    "page": "repellendus",
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

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/category_stories?title=et&title_en=in&description=totam&description_en=voluptatibus&banner=consequatur&product_category_id=saepe" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories"
);

let params = {
    "title": "et",
    "title_en": "in",
    "description": "totam",
    "description_en": "voluptatibus",
    "banner": "consequatur",
    "product_category_id": "saepe",
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

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/category_stories/1?title=distinctio&title_en=placeat&description=ut&description_en=sed&banner=optio&product_category_id=libero" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories/1"
);

let params = {
    "title": "distinctio",
    "title_en": "placeat",
    "description": "ut",
    "description_en": "sed",
    "banner": "optio",
    "product_category_id": "libero",
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

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/logs/1?page=dignissimos&page_limit=consequatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/logs/1"
);

let params = {
    "page": "dignissimos",
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

> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/logs/1?ids=voluptate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/logs/1"
);

let params = {
    "ids": "voluptate",
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

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/order?page=itaque&page_limit=ipsum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order"
);

let params = {
    "page": "itaque",
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

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/order?page=illo&page_limit=voluptas&username=eos&order_no=accusantium&order_status=culpa" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order"
);

let params = {
    "page": "illo",
    "page_limit": "voluptas",
    "username": "eos",
    "order_no": "accusantium",
    "order_status": "culpa",
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

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/order/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"refund_status":"optio","ship_status":"veniam","status":"corrupti"}'

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
    "refund_status": "optio",
    "ship_status": "veniam",
    "status": "corrupti"
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

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/product?page=optio&page_limit=enim" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product"
);

let params = {
    "page": "optio",
    "page_limit": "enim",
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

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/product?product_category_id=placeat&product_name=dolore&product_name_en=veniam&thumbnail=aut&slug=quaerat&short_description=accusamus&short_description_en=itaque&price=dignissimos&sale_price=assumenda&stock=tenetur&seo_title=porro&seo_keyword=perferendis&seo_description=quam&benefit=voluptatum&benefit_en=consectetur&tech_description=quasi&tech_description_en=odit&description=voluptatem&description_en=et&usage=est&usage_en=voluptatem&main_image=fugiat&main_image_2=quia&benefit_image=doloremque&product_video=natus&status=laborum&rating=impedit&sold_count=cumque&review_count=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product"
);

let params = {
    "product_category_id": "placeat",
    "product_name": "dolore",
    "product_name_en": "veniam",
    "thumbnail": "aut",
    "slug": "quaerat",
    "short_description": "accusamus",
    "short_description_en": "itaque",
    "price": "dignissimos",
    "sale_price": "assumenda",
    "stock": "tenetur",
    "seo_title": "porro",
    "seo_keyword": "perferendis",
    "seo_description": "quam",
    "benefit": "voluptatum",
    "benefit_en": "consectetur",
    "tech_description": "quasi",
    "tech_description_en": "odit",
    "description": "voluptatem",
    "description_en": "et",
    "usage": "est",
    "usage_en": "voluptatem",
    "main_image": "fugiat",
    "main_image_2": "quia",
    "benefit_image": "doloremque",
    "product_video": "natus",
    "status": "laborum",
    "rating": "impedit",
    "sold_count": "cumque",
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

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/product/1?product_category_id=culpa&product_name=ut&product_name_en=quas&thumbnail=vero&slug=tenetur&short_description=explicabo&short_description_en=in&price=aliquid&sale_price=ut&stock=velit&seo_title=at&seo_keyword=ratione&seo_description=nostrum&benefit=in&benefit_en=deleniti&tech_description=tenetur&tech_description_en=eum&description=fugiat&description_en=qui&usage=odit&usage_en=omnis&main_image=qui&main_image_2=ut&benefit_image=asperiores&product_video=modi&status=officia&rating=aut&sold_count=occaecati&review_count=atque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product/1"
);

let params = {
    "product_category_id": "culpa",
    "product_name": "ut",
    "product_name_en": "quas",
    "thumbnail": "vero",
    "slug": "tenetur",
    "short_description": "explicabo",
    "short_description_en": "in",
    "price": "aliquid",
    "sale_price": "ut",
    "stock": "velit",
    "seo_title": "at",
    "seo_keyword": "ratione",
    "seo_description": "nostrum",
    "benefit": "in",
    "benefit_en": "deleniti",
    "tech_description": "tenetur",
    "tech_description_en": "eum",
    "description": "fugiat",
    "description_en": "qui",
    "usage": "odit",
    "usage_en": "omnis",
    "main_image": "qui",
    "main_image_2": "ut",
    "benefit_image": "asperiores",
    "product_video": "modi",
    "status": "officia",
    "rating": "aut",
    "sold_count": "occaecati",
    "review_count": "atque",
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

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/product_categories?page=amet&page_limit=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories"
);

let params = {
    "page": "amet",
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

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/product_categories?name=voluptate&thumbnail=nulla&banner=est&title=et&title_en=est&sub_title=consequatur&describe=velit&describe_en=dolores&describe_img=laudantium&parent_id=exercitationem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories"
);

let params = {
    "name": "voluptate",
    "thumbnail": "nulla",
    "banner": "est",
    "title": "et",
    "title_en": "est",
    "sub_title": "consequatur",
    "describe": "velit",
    "describe_en": "dolores",
    "describe_img": "laudantium",
    "parent_id": "exercitationem",
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

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/product_categories/1?name=reprehenderit&thumbnail=ipsa&banner=et&title=sint&title_en=tenetur&sub_title=neque&describe=assumenda&describe_en=alias&describe_img=assumenda&parent_id=quam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories/1"
);

let params = {
    "name": "reprehenderit",
    "thumbnail": "ipsa",
    "banner": "et",
    "title": "sint",
    "title_en": "tenetur",
    "sub_title": "neque",
    "describe": "assumenda",
    "describe_en": "alias",
    "describe_img": "assumenda",
    "parent_id": "quam",
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

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/product_sku?title=modi&description=nemo&price=qui&stock=nostrum&product_id=nemo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_sku"
);

let params = {
    "title": "modi",
    "description": "nemo",
    "price": "qui",
    "stock": "nostrum",
    "product_id": "nemo",
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

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/product_sku/1?title=nobis&description=qui&price=facilis&stock=non&product_id=a" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_sku/1"
);

let params = {
    "title": "nobis",
    "description": "qui",
    "price": "facilis",
    "stock": "non",
    "product_id": "a",
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

#[ADMIN] User

用户管理
<!-- START_bd487ab94d8034c2d13644bb1772fdfa -->
## Query user list(Admin)
查询用户数据列表

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/user?username=labore&page=impedit&page_limit=ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user"
);

let params = {
    "username": "labore",
    "page": "impedit",
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

> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/user/1?name=possimus&email=necessitatibus&phone=doloremque&avatar=distinctio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/1"
);

let params = {
    "name": "possimus",
    "email": "necessitatibus",
    "phone": "doloremque",
    "avatar": "distinctio",
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

> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/user/reset_password/1?oldPassword=aut&newPassword=possimus&newPassword_confirmation=tenetur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/reset_password/1"
);

let params = {
    "oldPassword": "aut",
    "newPassword": "possimus",
    "newPassword_confirmation": "tenetur",
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

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/get_user?hash_id=illo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/get_user"
);

let params = {
    "hash_id": "illo",
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

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/user_addresses?province=recusandae&city=unde&district=aperiam&address=minima&zip=quia&contact_name=cupiditate&contact_phone=sunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses"
);

let params = {
    "province": "recusandae",
    "city": "unde",
    "district": "aperiam",
    "address": "minima",
    "zip": "quia",
    "contact_name": "cupiditate",
    "contact_phone": "sunt",
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

> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/user_addresses/1?address_id=iusto&province=voluptas&city=ipsa&district=natus&address=commodi&zip=aspernatur&contact_name=dignissimos&contact_phone=placeat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses/1"
);

let params = {
    "address_id": "iusto",
    "province": "voluptas",
    "city": "ipsa",
    "district": "natus",
    "address": "commodi",
    "zip": "aspernatur",
    "contact_name": "dignissimos",
    "contact_phone": "placeat",
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

> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/user_addresses/1?address_id=est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses/1"
);

let params = {
    "address_id": "est",
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

> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/user_profiles/1?profile_id=temporibus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_profiles/1"
);

let params = {
    "profile_id": "temporibus",
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

> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/user_profiles/1?profile_id=consectetur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_profiles/1"
);

let params = {
    "profile_id": "consectetur",
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
    -d '{"name":"voluptate","username":"eos","password":"illum","code":"quidem","captcha_key":"ea","captcha_code":"porro","password_question_id":9,"password_answer":"distinctio"}'

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
    "name": "voluptate",
    "username": "eos",
    "password": "illum",
    "code": "quidem",
    "captcha_key": "ea",
    "captcha_code": "porro",
    "password_question_id": 9,
    "password_answer": "distinctio"
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
        `password` | string |  optional  | password_confirmation required 确认密码
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
    -G "http://localhost/api/user_question?username=voluptates" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_question"
);

let params = {
    "username": "voluptates",
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
        "username": "voluptates"
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
    -d '{"username":"autem","password":"neque"}'

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
    "username": "autem",
    "password": "neque"
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
    "http://localhost/api/password_reset?username=cumque&password_question_id=labore&password_answer=fugiat&password=nemo&password_confirmation=earum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/password_reset"
);

let params = {
    "username": "cumque",
    "password_question_id": "labore",
    "password_answer": "fugiat",
    "password": "nemo",
    "password_confirmation": "earum",
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
    -d '{"oldPassword":"accusamus","newPassword":"tempore","newPassword_confirmation":"et"}'

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
    "oldPassword": "accusamus",
    "newPassword": "tempore",
    "newPassword_confirmation": "et"
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
    -G "http://localhost/api/order_details/1?no=molestiae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/order_details/1"
);

let params = {
    "no": "molestiae",
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
    -d '{"address_id":"quia","remark":"veritatis"}'

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
    "address_id": "quia",
    "remark": "veritatis"
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
    -d '{"no":3}'

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
    "no": 3
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

#[API] Product

商品管理
<!-- START_0d311bc121fa5f47763c3a964aaf3691 -->
## Query the product detail
获取商品详情信息

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/product/1?slug=consequatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product/1"
);

let params = {
    "slug": "consequatur",
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
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/product/{product_slug}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `slug` |  required  | 商品slug

<!-- END_0d311bc121fa5f47763c3a964aaf3691 -->

<!-- START_dc538d69a8586a7a3c36d4393cee42e6 -->
## Get product list
获取商品列表

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
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
                "product_category_id": 14,
                "product_name": "黑钻焕肤水",
                "product_name_en": "et necessitatibus qui",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?86686",
                "slug": "quaerat-pariatur",
                "short_description": "Unde fugiat fugiat eius.",
                "short_description_en": "Et harum maiores molestiae nisi aliquid error. Aut beatae aut delectus asperiores. In quia et reprehenderit enim exercitationem cumque. Eos dolor incidunt cumque quis. Ratione magnam qui atque ut.",
                "price": "1707.00",
                "sale_price": "1.00",
                "stock": 132,
                "spec": null,
                "seo_title": "quos quia architecto",
                "seo_keyword": "eum",
                "seo_description": "Ut ratione id asperiores eos dignissimos.",
                "benefit": "Cum sit est voluptatem repellendus molestiae. Ut at quia molestiae et et. Ut quia iusto architecto.",
                "benefit_en": "Sit id itaque et ut cumque rerum veritatis. Voluptatem quis ipsum repudiandae est. Qui eligendi sunt non nihil maxime asperiores quisquam excepturi.",
                "tech_description": "Nobis dolorem quae consequuntur dolorem et id unde odit. At iure inventore magnam tenetur rerum. Eius et tempore recusandae in ab ea. Cumque id molestiae doloribus aspernatur quae.",
                "tech_description_en": "Quas aut quo nemo natus similique. Et ipsam nam nobis dolore ratione qui commodi nulla. Laboriosam nostrum dicta eligendi dolor voluptatibus consequatur. Expedita veniam maiores consequatur et.",
                "description": "At possimus id quas qui. Non dolore dolores ullam. Ipsum id laudantium et. Nesciunt sit facilis et est quo exercitationem.",
                "description_en": "Nemo maxime est cum totam ea est totam eos. Quae quam officia inventore natus nobis. Nisi harum nemo magnam debitis a nobis. Quasi voluptatem molestias excepturi qui aperiam.",
                "usage": "Minus voluptatem aut aut est. Sit ad delectus dolores vero quaerat repellat. Nihil voluptatibus velit rerum est expedita.",
                "usage_en": "Labore ex illum et id. Impedit expedita necessitatibus similique eum tempora omnis molestiae. Voluptate voluptatem nam totam voluptates.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?33202",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?63556",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?85786",
                "product_video": null,
                "status": 2,
                "rating": 7.67,
                "sold_count": 5088,
                "review_count": 8964,
                "created_at": "2020-08-11 18:30:52",
                "updated_at": "2020-08-29 20:05:14",
                "product_category": {
                    "id": 14,
                    "name": "精油",
                    "slug": "consequatur-reiciendis",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?35395",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?52798",
                    "title": "ut corrupti nemo",
                    "title_en": "autem fugit voluptatem",
                    "sub_title": "temporibus repellendus consequatur",
                    "describe": "Eius reprehenderit dolorem ipsa. Velit quisquam quos consequatur a. Modi nihil numquam eum vel consequatur cumque. Aut adipisci excepturi omnis sed quae distinctio aut omnis.",
                    "describe_en": "Sed ipsum reiciendis eveniet vitae ut voluptatibus libero. Consequuntur totam animi voluptatum inventore odio. Quibusdam tempora tempora quo necessitatibus quo exercitationem sit veniam.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?44508",
                    "parent_id": 2,
                    "level": 1,
                    "created_at": "2020-09-02 14:04:35",
                    "updated_at": "2020-08-30 21:15:24"
                }
            },
            {
                "id": 2,
                "product_category_id": 9,
                "product_name": "黑钻焕肤水",
                "product_name_en": "harum doloremque dolorum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?32073",
                "slug": "doloremque-nulla",
                "short_description": "Ipsa qui et numquam fugit inventore sequi.",
                "short_description_en": "In ut non quia cupiditate sit quam. Nihil dolore quo dolore aut in dolorem voluptas. Facilis minus autem nihil nulla numquam commodi. Possimus ex et nulla ut et minima ullam.",
                "price": "234.00",
                "sale_price": "1.00",
                "stock": 590,
                "spec": null,
                "seo_title": "eum ut vero",
                "seo_keyword": "molestiae",
                "seo_description": "Autem autem et magni enim tenetur.",
                "benefit": "Quos ipsam temporibus eaque. Animi blanditiis maxime totam quis nobis eum. Repellat sed occaecati sit et quia enim. Ut consequuntur voluptatem sed distinctio non ab illo.",
                "benefit_en": "Qui asperiores distinctio laborum. Aut voluptatem qui laborum non libero. Quis et est vero nesciunt aperiam perferendis fugit. Cum ipsam mollitia et doloremque eligendi magni.",
                "tech_description": "Sed placeat omnis cumque eligendi deserunt. Quasi quisquam non asperiores ex consectetur. Sit sunt at et neque ut corrupti ut nisi. Aut harum sapiente voluptatem.",
                "tech_description_en": "Tempora expedita maiores enim quod enim recusandae accusamus molestiae. Quam iusto quae aut aut dolor et. Est aperiam culpa debitis repellendus.",
                "description": "Ipsam doloribus ipsam nam totam voluptatem architecto. Itaque animi nulla voluptatem doloribus quidem facere labore. Dolorum laudantium incidunt laboriosam et illum dolorem.",
                "description_en": "Corporis voluptates assumenda eaque minima consequatur. Debitis eveniet reprehenderit minima consequatur eaque. Numquam minima totam id a.",
                "usage": "Rerum sequi repudiandae amet expedita odio tempore. Minima qui accusamus accusamus consequatur ipsum suscipit eveniet. Aspernatur eum est aliquid non saepe. Nemo odit enim fuga aut. Placeat optio saepe enim occaecati voluptatem unde soluta.",
                "usage_en": "Architecto quia animi accusamus expedita. Expedita aut ut et voluptate. Corrupti in accusantium ratione est id in.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?31239",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?32815",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?56277",
                "product_video": null,
                "status": 1,
                "rating": 5.32,
                "sold_count": 5159,
                "review_count": 9274,
                "created_at": "2020-08-24 17:07:50",
                "updated_at": "2020-08-26 17:35:14",
                "product_category": {
                    "id": 9,
                    "name": "爽肤水",
                    "slug": "voluptas-repudiandae",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?44308",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?96744",
                    "title": "totam quae tempora",
                    "title_en": "repellat consequatur aut",
                    "sub_title": "amet voluptatem corrupti",
                    "describe": "Aperiam exercitationem accusamus maxime expedita. Veritatis aut velit perferendis hic. Possimus maxime necessitatibus atque. Quasi nam maxime molestiae asperiores qui et id.",
                    "describe_en": "Quae veritatis quaerat placeat harum dolorum. Aliquam amet voluptas est earum dolores beatae voluptatem.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?20695",
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-08-24 23:41:37",
                    "updated_at": "2020-08-29 15:47:28"
                }
            },
            {
                "id": 3,
                "product_category_id": 11,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "veritatis optio qui",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?78839",
                "slug": "accusantium-suscipit",
                "short_description": "Eos pariatur vitae aliquam.",
                "short_description_en": "Mollitia et eius sequi autem doloremque omnis. Illo rerum soluta corporis quo. Quaerat vero ipsum praesentium cumque est. Et minus vel laudantium molestiae.",
                "price": "3821.00",
                "sale_price": "1.00",
                "stock": 678,
                "spec": null,
                "seo_title": "ullam ea doloribus",
                "seo_keyword": "inventore",
                "seo_description": "Quidem dolorem et quo dolore accusantium qui.",
                "benefit": "Dolore eligendi error odio aspernatur debitis sed eius. Dolore tenetur vitae doloribus et quaerat non non similique. Et labore dolor corrupti nihil nisi provident fuga.",
                "benefit_en": "Quos labore eaque modi est debitis sed enim. Doloremque ut voluptate voluptas ex aut nam quae. Laboriosam qui cupiditate repellendus nesciunt.",
                "tech_description": "Nisi rem maiores incidunt culpa voluptas. Et veniam illum et voluptas modi sint officiis. Autem magnam cum quas molestiae.",
                "tech_description_en": "Non corporis ut quia delectus. Nulla qui non inventore officiis officiis autem mollitia expedita. In assumenda et esse. Ullam aut qui itaque non eaque eos rerum.",
                "description": "Mollitia et voluptatibus eaque optio qui. Et veritatis sint quia. Aut iste temporibus debitis et temporibus rerum. Aliquid omnis repellendus aliquam ex alias cupiditate quo.",
                "description_en": "Ut commodi placeat autem qui aliquid dolorum eos. Odio labore ex inventore consequuntur dolor eaque enim. Est nam sint harum. Tempora maxime alias deleniti quos esse ut.",
                "usage": "Veritatis voluptas magnam numquam iste. Atque nihil hic aliquid aliquam. Repudiandae suscipit sit voluptatem molestiae occaecati dolore inventore. Est repudiandae voluptatem dolor esse et quam.",
                "usage_en": "Porro commodi non sed non aut eligendi. Ea expedita quia velit quia eligendi.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?39295",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?66260",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?66276",
                "product_video": null,
                "status": 1,
                "rating": 3.12,
                "sold_count": 2194,
                "review_count": 3966,
                "created_at": "2020-09-01 20:22:07",
                "updated_at": "2020-08-25 09:50:14",
                "product_category": {
                    "id": 11,
                    "name": "身体护理",
                    "slug": "odit-accusantium",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?26527",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?98162",
                    "title": "voluptatem inventore et",
                    "title_en": "et aliquid rerum",
                    "sub_title": "nihil non velit",
                    "describe": "Dicta laudantium culpa ab et voluptatibus tempora quo. Ullam esse repellat ut aliquam. Ullam soluta officia reprehenderit libero nihil cum aspernatur.",
                    "describe_en": "Qui esse nostrum corrupti. Eum quia illum quia cupiditate architecto unde. Iste ut aperiam mollitia. Hic saepe molestiae cupiditate fuga.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?43769",
                    "parent_id": 18,
                    "level": 1,
                    "created_at": "2020-08-23 14:23:24",
                    "updated_at": "2020-08-15 16:57:06"
                }
            },
            {
                "id": 4,
                "product_category_id": 5,
                "product_name": "黑钻肌光精华",
                "product_name_en": "vero et eius",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?17108",
                "slug": "sit-eos",
                "short_description": "Beatae ut perspiciatis voluptatibus ea error sed.",
                "short_description_en": "Reiciendis maxime dicta magnam sapiente quibusdam. Commodi in repudiandae tempore. Laboriosam qui quia sequi incidunt. Earum tenetur ipsam ipsam qui nesciunt. Iusto quam laboriosam voluptas.",
                "price": "2857.00",
                "sale_price": "1.00",
                "stock": 919,
                "spec": null,
                "seo_title": "aspernatur maiores reprehenderit",
                "seo_keyword": "voluptatem",
                "seo_description": "Quia soluta quisquam numquam sint rerum earum.",
                "benefit": "Molestiae recusandae ut vitae voluptatem. Quam beatae dolorem fuga impedit voluptatem error et eveniet. Minus voluptate ea omnis iusto quo hic.",
                "benefit_en": "Quia officia eum dolorum nesciunt iusto ullam et. Omnis suscipit aut est voluptas aspernatur dolorum. Neque consequatur eveniet vero ut aut omnis quis delectus. Delectus quas aliquam veritatis excepturi.",
                "tech_description": "Aut repellendus et enim adipisci voluptatem doloremque. Pariatur atque esse eos placeat unde doloribus. Fuga nemo quia aut voluptas harum doloribus. Nesciunt sunt cupiditate placeat laboriosam.",
                "tech_description_en": "Dolor dicta dolorem sint perspiciatis magnam quod. Suscipit nihil harum rerum odio ab et recusandae. Totam possimus exercitationem et error.",
                "description": "Voluptas voluptatem quos voluptatem mollitia omnis. Laudantium molestiae rem voluptas minima explicabo. Beatae quidem et numquam veritatis minima consectetur earum. Asperiores sapiente dolor dolore esse similique.",
                "description_en": "Iure sint accusamus omnis nulla eaque dolor quia. Hic voluptatem iusto sed tenetur qui est cupiditate. Eum possimus dignissimos libero possimus. Nesciunt necessitatibus nostrum nisi.",
                "usage": "Autem repellat delectus ex. Voluptatibus aspernatur et ipsa ea molestiae molestiae officia. Cum repudiandae culpa nisi debitis non recusandae sint. Vero odio ullam saepe perspiciatis molestiae eligendi.",
                "usage_en": "Nihil qui itaque qui delectus. Aspernatur numquam officia eos quo itaque nihil. Saepe corporis eum cumque aut facere. Cum quaerat assumenda sed velit esse et illum quo.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?37166",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?84317",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?38147",
                "product_video": null,
                "status": 1,
                "rating": 6.93,
                "sold_count": 6535,
                "review_count": 2354,
                "created_at": "2020-08-11 17:34:58",
                "updated_at": "2020-08-16 11:47:01",
                "product_category": {
                    "id": 5,
                    "name": "面膜",
                    "slug": "labore-hic",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?90170",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?27246",
                    "title": "unde tempore quam",
                    "title_en": "dicta ullam asperiores",
                    "sub_title": "id ut mollitia",
                    "describe": "Nesciunt velit quaerat aliquid consequatur. Non est soluta sed eligendi quas tempore.",
                    "describe_en": "Neque qui id inventore dolorem aspernatur eligendi pariatur dicta. Quidem et ea qui autem non mollitia ex. Harum ut fugiat deleniti soluta.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?99704",
                    "parent_id": 24,
                    "level": 1,
                    "created_at": "2020-08-27 01:32:40",
                    "updated_at": "2020-08-28 10:19:41"
                }
            },
            {
                "id": 5,
                "product_category_id": 14,
                "product_name": "黑钻肌光精华",
                "product_name_en": "eum suscipit facere",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?94641",
                "slug": "ut-quisquam",
                "short_description": "Eaque fuga minus voluptas.",
                "short_description_en": "A enim voluptatem aut corrupti nihil et. Repellendus molestias neque corporis velit cumque. Consequuntur quidem voluptas occaecati aliquid doloribus et recusandae. Hic et pariatur sed sed et voluptatem.",
                "price": "1377.00",
                "sale_price": "1.00",
                "stock": 175,
                "spec": null,
                "seo_title": "soluta et corporis",
                "seo_keyword": "deleniti",
                "seo_description": "Porro aut sed laborum.",
                "benefit": "Quia eius fugiat omnis vel. Maiores et quia expedita ex porro ipsa consequuntur. Voluptatem molestiae error aut repellat enim et assumenda.",
                "benefit_en": "Culpa quia est doloribus magni autem quia. Laudantium adipisci odit quasi eum molestiae ullam. Officia sint est excepturi ea.",
                "tech_description": "Laborum illo blanditiis magnam est quo. Esse placeat qui quis dolorem quis minima. Explicabo est non qui facere aliquam. Nemo dolorem dignissimos ut quis at assumenda repellat.",
                "tech_description_en": "Dolores laboriosam incidunt veniam corrupti ex repellat. Repudiandae est blanditiis voluptatem laudantium mollitia eligendi.",
                "description": "Quia quis voluptatem autem minima blanditiis quo. Rerum consequuntur repellendus perferendis debitis nemo in optio. Atque id nulla debitis mollitia ratione fugiat magni. Repellendus ea provident et adipisci adipisci repellat aspernatur aut.",
                "description_en": "Ex voluptatum natus optio autem. Cupiditate est unde porro minima nulla rem. Similique eos ipsa voluptatem voluptatem. Beatae voluptatibus sed iusto perspiciatis fugiat fugiat eos ipsum.",
                "usage": "Autem sed modi voluptates velit. Id nam pariatur vero voluptas minus soluta illo. Sint voluptatum ut animi. Distinctio culpa quaerat ipsum ut ullam iste nam.",
                "usage_en": "Dolores excepturi sint vero cumque. Reprehenderit voluptate mollitia minus dolores velit ad. Officia quis placeat ex quia deleniti. Dolores est neque harum eum minima pariatur blanditiis.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?46628",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?79783",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?69131",
                "product_video": null,
                "status": 2,
                "rating": 1.88,
                "sold_count": 8681,
                "review_count": 3541,
                "created_at": "2020-09-03 16:45:41",
                "updated_at": "2020-08-30 16:06:55",
                "product_category": {
                    "id": 14,
                    "name": "精油",
                    "slug": "consequatur-reiciendis",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?35395",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?52798",
                    "title": "ut corrupti nemo",
                    "title_en": "autem fugit voluptatem",
                    "sub_title": "temporibus repellendus consequatur",
                    "describe": "Eius reprehenderit dolorem ipsa. Velit quisquam quos consequatur a. Modi nihil numquam eum vel consequatur cumque. Aut adipisci excepturi omnis sed quae distinctio aut omnis.",
                    "describe_en": "Sed ipsum reiciendis eveniet vitae ut voluptatibus libero. Consequuntur totam animi voluptatum inventore odio. Quibusdam tempora tempora quo necessitatibus quo exercitationem sit veniam.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?44508",
                    "parent_id": 2,
                    "level": 1,
                    "created_at": "2020-09-02 14:04:35",
                    "updated_at": "2020-08-30 21:15:24"
                }
            },
            {
                "id": 6,
                "product_category_id": 15,
                "product_name": "黑钻肌光精华",
                "product_name_en": "fugiat nihil sapiente",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?97580",
                "slug": "unde-exercitationem",
                "short_description": "Temporibus sint iure accusamus esse.",
                "short_description_en": "Sit aut voluptatem consequatur molestiae. Quasi cumque sed officiis itaque repellat quam. Sed minus maxime molestiae.",
                "price": "2597.00",
                "sale_price": "1.00",
                "stock": 596,
                "spec": null,
                "seo_title": "dolores ipsa ipsam",
                "seo_keyword": "pariatur",
                "seo_description": "Autem esse sunt eum eos vel.",
                "benefit": "Mollitia tenetur quod perspiciatis voluptatem laborum qui libero et. Aut distinctio repellat voluptatum. Explicabo quae dolore quod blanditiis. Impedit quo quod voluptate magni suscipit consequatur.",
                "benefit_en": "Tenetur aut sit nisi. Omnis aut beatae alias aliquid beatae cum est. Quos commodi beatae ab ipsam eos officiis. Reiciendis quaerat suscipit quidem omnis.",
                "tech_description": "Quia perferendis rerum voluptas vel culpa in corrupti. Qui inventore dolores est ex repellendus. Quas tempore quos sed sapiente amet.",
                "tech_description_en": "Vitae temporibus doloribus quas neque hic sunt. Rerum itaque reiciendis quis accusantium ut. Omnis ipsum ducimus qui repudiandae.",
                "description": "Assumenda illo numquam non omnis repellendus officiis amet. Placeat ad delectus blanditiis accusamus nihil facilis consequatur. Qui fuga vero laudantium blanditiis eveniet.",
                "description_en": "Sunt rerum blanditiis optio quibusdam est. Quam et est saepe dolorem aut. Voluptatibus aspernatur non magnam sed laudantium. Expedita beatae numquam molestias illo.",
                "usage": "Ratione beatae in magni molestiae nam sit error quaerat. Eum architecto similique eos illo.",
                "usage_en": "Asperiores exercitationem eos ut. Dolorum ipsa incidunt soluta provident. Alias sit numquam perferendis. Debitis alias vitae quia qui.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?40557",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?66887",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?14673",
                "product_video": null,
                "status": 1,
                "rating": 2.18,
                "sold_count": 7586,
                "review_count": 3243,
                "created_at": "2020-08-25 23:11:38",
                "updated_at": "2020-09-08 13:22:06",
                "product_category": {
                    "id": 15,
                    "name": "BB霜",
                    "slug": "aperiam-saepe",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?71480",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?78914",
                    "title": "est molestias similique",
                    "title_en": "eos molestias nisi",
                    "sub_title": "voluptas esse earum",
                    "describe": "Dolor eius nisi at sapiente possimus. Dolorem occaecati ab qui enim accusantium a. Velit quibusdam voluptas ut magnam similique voluptate possimus.",
                    "describe_en": "Atque ea quas totam optio illo. Qui vel natus eos. Ut voluptatem omnis quo maiores consequatur ipsam. Ea qui consequatur quibusdam.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?99852",
                    "parent_id": 5,
                    "level": 1,
                    "created_at": "2020-08-15 10:37:04",
                    "updated_at": "2020-08-22 11:47:14"
                }
            },
            {
                "id": 7,
                "product_category_id": 8,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "rerum cum sunt",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?51763",
                "slug": "hic-dignissimos",
                "short_description": "Eaque dolorem ullam fugiat quo.",
                "short_description_en": "Beatae et numquam quidem omnis enim consequatur. Dolores asperiores nulla rerum omnis. Corrupti omnis aut voluptatem atque.",
                "price": "4567.00",
                "sale_price": "1.00",
                "stock": 270,
                "spec": null,
                "seo_title": "rerum alias laborum",
                "seo_keyword": "consequatur",
                "seo_description": "Non eum corporis error distinctio.",
                "benefit": "Est dicta impedit praesentium veritatis sit sit et eaque. Totam modi ipsa nihil et rem ullam in. Veniam nam non quis facilis nemo exercitationem. Enim voluptatem quia minus est fugit quia.",
                "benefit_en": "Illo temporibus quidem ipsa dolor fugiat mollitia quam. Est earum consequatur voluptatem dolor tempora praesentium sunt. Vel sit architecto non ipsa illum dolorem iusto.",
                "tech_description": "Tenetur quis velit occaecati nemo. Eveniet harum veniam et qui quis. Quod nostrum omnis vel laudantium porro ex enim eius. Impedit aperiam tempore sit nemo velit.",
                "tech_description_en": "Quaerat eius laboriosam est. Molestiae omnis provident itaque vel voluptas in similique architecto. Placeat numquam labore sed nihil suscipit id fugiat ad. Ut voluptates ab cumque molestiae deserunt fugiat mollitia ipsa.",
                "description": "Aut cum et est architecto expedita reiciendis libero. Occaecati reprehenderit eum sit. Velit minima eius suscipit.",
                "description_en": "Rerum facere tempora autem aut delectus voluptatem. In molestiae aut nihil ut. Vel eos perferendis temporibus ad.",
                "usage": "Vel quisquam ratione quo. Reprehenderit nulla quibusdam nesciunt voluptatem. Et cupiditate officiis id et cupiditate libero itaque quia. Quis eos qui exercitationem aut natus deserunt.",
                "usage_en": "Ea blanditiis possimus nisi quos voluptatem optio ex. Sed autem ut libero sit tempora velit. Repudiandae aliquam animi aperiam ut nobis veniam.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?60067",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?60690",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?16390",
                "product_video": null,
                "status": 3,
                "rating": 4.34,
                "sold_count": 2183,
                "review_count": 4401,
                "created_at": "2020-09-08 20:35:20",
                "updated_at": "2020-08-22 14:17:02",
                "product_category": {
                    "id": 8,
                    "name": "套装C",
                    "slug": "quis-saepe",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?17696",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?49590",
                    "title": "quaerat et ut",
                    "title_en": "et aut illo",
                    "sub_title": "ut maxime accusantium",
                    "describe": "Perspiciatis delectus nulla blanditiis porro. Debitis consequatur earum aut praesentium maxime velit quia. Officiis repellat voluptas veniam nesciunt maiores repellat perspiciatis sunt.",
                    "describe_en": "Occaecati totam rerum deleniti incidunt et sit sed. Aut nulla perferendis aut. In corrupti et laborum. Quas delectus ea autem laboriosam aperiam ratione assumenda odio.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?11182",
                    "parent_id": 7,
                    "level": 1,
                    "created_at": "2020-08-11 23:06:55",
                    "updated_at": "2020-09-02 16:30:29"
                }
            },
            {
                "id": 8,
                "product_category_id": 5,
                "product_name": "黑钻焕肤水",
                "product_name_en": "id animi ut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?33992",
                "slug": "iure-sapiente",
                "short_description": "Laudantium alias doloremque esse hic aut.",
                "short_description_en": "Sequi qui modi laudantium a ullam eum. Laborum eius consectetur dolor maxime quia rerum. Est est enim omnis minus unde enim. At omnis possimus perferendis officiis commodi.",
                "price": "7058.00",
                "sale_price": "1.00",
                "stock": 316,
                "spec": null,
                "seo_title": "ipsa enim quae",
                "seo_keyword": "minima",
                "seo_description": "Rerum culpa qui a omnis perspiciatis.",
                "benefit": "Natus reprehenderit minus vel non consectetur natus. Iure aut sit similique corporis asperiores dolorem voluptatem aliquam. Repellendus nulla deserunt debitis reprehenderit reprehenderit. Enim ut maxime quisquam magnam nihil.",
                "benefit_en": "Similique et est optio vero explicabo sunt. Quia laborum delectus deleniti id. Voluptatem eos et neque ut rerum sequi.",
                "tech_description": "Quia soluta ex earum sequi. Cum aut quaerat minus magni sit et autem. Quo provident voluptas omnis explicabo rerum ut iste.",
                "tech_description_en": "Iure vero aliquam error iste. Amet et est quia quis in culpa rem. Ut numquam totam blanditiis dolore ratione nobis autem. Animi pariatur repudiandae magnam optio. Tempore omnis veritatis dolorem.",
                "description": "Error nemo laboriosam ab quae eos illo nam. Voluptas sunt consequatur qui officiis molestias deleniti eligendi in. Cum exercitationem sed accusantium ipsa laboriosam. Suscipit omnis maiores dolores nobis.",
                "description_en": "Fugiat dolor harum et praesentium cumque. Natus ea laudantium magni. Odit esse maiores id dolor. Dicta enim aut sit atque esse ex fugit.",
                "usage": "Sapiente deleniti sapiente quaerat et minus et culpa. Ducimus consequuntur quae quia labore. Vel expedita eos fuga ipsum sed ut consequatur.",
                "usage_en": "Quis vel ex recusandae quasi eaque. Expedita et est debitis dolores autem alias voluptatem. Sit culpa voluptates molestiae inventore nesciunt quas. Nisi voluptatem fugiat quis ut amet. Similique quia expedita nisi sit vitae omnis eius consequuntur.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?90232",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?43222",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?10972",
                "product_video": null,
                "status": 1,
                "rating": 4.26,
                "sold_count": 6521,
                "review_count": 8776,
                "created_at": "2020-09-07 02:07:52",
                "updated_at": "2020-08-14 15:57:10",
                "product_category": {
                    "id": 5,
                    "name": "面膜",
                    "slug": "labore-hic",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?90170",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?27246",
                    "title": "unde tempore quam",
                    "title_en": "dicta ullam asperiores",
                    "sub_title": "id ut mollitia",
                    "describe": "Nesciunt velit quaerat aliquid consequatur. Non est soluta sed eligendi quas tempore.",
                    "describe_en": "Neque qui id inventore dolorem aspernatur eligendi pariatur dicta. Quidem et ea qui autem non mollitia ex. Harum ut fugiat deleniti soluta.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?99704",
                    "parent_id": 24,
                    "level": 1,
                    "created_at": "2020-08-27 01:32:40",
                    "updated_at": "2020-08-28 10:19:41"
                }
            },
            {
                "id": 9,
                "product_category_id": 5,
                "product_name": "黑钻肌光精华",
                "product_name_en": "nam quaerat fugiat",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?99861",
                "slug": "quia-unde",
                "short_description": "Eum non consequuntur nulla.",
                "short_description_en": "Sint iusto quia eum reprehenderit. Laboriosam ad quia temporibus vitae eos. Qui et alias id repellendus cupiditate. Consequatur quibusdam earum debitis neque qui qui facere distinctio.",
                "price": "4716.00",
                "sale_price": "1.00",
                "stock": 13,
                "spec": null,
                "seo_title": "repellendus ut quaerat",
                "seo_keyword": "sit",
                "seo_description": "Aut et omnis quo vero eum.",
                "benefit": "Est asperiores inventore magnam illo ut molestiae sed. Repudiandae beatae ut et modi consequatur labore consectetur animi. Ab odit fugit omnis et fuga nam. Dolorum beatae dignissimos exercitationem vel alias tempore excepturi alias.",
                "benefit_en": "Ullam aut et consequatur omnis dolores minima eum. Alias beatae sapiente beatae labore dolores.",
                "tech_description": "Omnis repudiandae sequi omnis. Quam vitae natus vitae consequuntur consectetur omnis. Architecto rerum sit officiis.",
                "tech_description_en": "Voluptatibus rerum fugiat tempore voluptas et. Velit at blanditiis necessitatibus molestias fugiat. Maiores mollitia neque excepturi commodi ut. Et ipsa hic numquam ratione. Atque ea fugiat voluptatibus quo.",
                "description": "Expedita minima a ratione sint et est et. Suscipit est nihil est est consequatur quo voluptatibus. Facere ad sed ut fuga. Ut dicta omnis officia corporis.",
                "description_en": "Est et voluptas exercitationem vitae molestiae. Hic ut quaerat qui qui nostrum quaerat hic explicabo. Et vel est aliquid ut illo quia voluptatum. Tenetur sunt adipisci est et.",
                "usage": "Est voluptas consequuntur officia unde. Ullam est deleniti nihil iste. Debitis consectetur assumenda non qui.",
                "usage_en": "Blanditiis facere nostrum reiciendis. Dolor voluptas aut temporibus laboriosam.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?80491",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?53958",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?40965",
                "product_video": null,
                "status": 1,
                "rating": 2.39,
                "sold_count": 3694,
                "review_count": 7595,
                "created_at": "2020-09-04 14:31:55",
                "updated_at": "2020-08-13 21:53:58",
                "product_category": {
                    "id": 5,
                    "name": "面膜",
                    "slug": "labore-hic",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?90170",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?27246",
                    "title": "unde tempore quam",
                    "title_en": "dicta ullam asperiores",
                    "sub_title": "id ut mollitia",
                    "describe": "Nesciunt velit quaerat aliquid consequatur. Non est soluta sed eligendi quas tempore.",
                    "describe_en": "Neque qui id inventore dolorem aspernatur eligendi pariatur dicta. Quidem et ea qui autem non mollitia ex. Harum ut fugiat deleniti soluta.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?99704",
                    "parent_id": 24,
                    "level": 1,
                    "created_at": "2020-08-27 01:32:40",
                    "updated_at": "2020-08-28 10:19:41"
                }
            },
            {
                "id": 10,
                "product_category_id": 4,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "illo incidunt non",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?49247",
                "slug": "sint-sit",
                "short_description": "Maxime quae officia sed.",
                "short_description_en": "A cumque eveniet nihil odit enim sunt porro. Cupiditate nihil officiis odit quasi et. Ducimus adipisci eum corporis.",
                "price": "676.00",
                "sale_price": "1.00",
                "stock": 906,
                "spec": null,
                "seo_title": "amet sunt deleniti",
                "seo_keyword": "ut",
                "seo_description": "Iure debitis reprehenderit quisquam nobis sint.",
                "benefit": "Sed voluptas eius quia minima rerum. Sapiente quis esse saepe architecto dolor. Facere et omnis aperiam facilis. Debitis repudiandae exercitationem est quis expedita quae omnis pariatur.",
                "benefit_en": "Pariatur et similique eos architecto et qui. Velit voluptatem placeat id saepe aut delectus enim. Voluptatibus et porro repellendus illo. Mollitia dolores praesentium vero repudiandae unde tempore.",
                "tech_description": "Est omnis alias fuga. Veritatis corrupti aperiam facere eos repudiandae. Aliquid dolores enim et quia fugit. Veritatis enim aspernatur accusantium qui.",
                "tech_description_en": "Sit non beatae voluptas et est id. Numquam debitis et fugiat earum nemo earum. At accusantium rem totam voluptatum veritatis libero aut. Est accusantium ad amet aut.",
                "description": "Facilis voluptatem ipsam ut porro ut aut. Et aut iste ipsa aut laborum accusantium.",
                "description_en": "Iste laborum iure perferendis deleniti eum quisquam possimus. Quia sed asperiores quisquam libero ea quas aliquam. Similique eum rerum velit velit.",
                "usage": "Rerum porro repudiandae praesentium optio est. Dicta fugiat nesciunt non sunt dignissimos dolorum voluptas. Possimus consectetur tempore laudantium cum quasi.",
                "usage_en": "Nemo eligendi expedita accusamus corrupti sint. Nihil et cupiditate odio ullam atque qui. Repudiandae voluptas ut quisquam nihil omnis sequi aut. Fugiat perferendis vitae delectus minima eveniet ullam.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?62611",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?15733",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?84151",
                "product_video": null,
                "status": 3,
                "rating": 2,
                "sold_count": 6535,
                "review_count": 5494,
                "created_at": "2020-08-15 00:44:06",
                "updated_at": "2020-09-10 01:27:07",
                "product_category": {
                    "id": 4,
                    "name": "面膜",
                    "slug": "facilis-consequuntur",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?54584",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?93321",
                    "title": "minima et esse",
                    "title_en": "ea ipsam consequatur",
                    "sub_title": "aspernatur quo dolore",
                    "describe": "Itaque reiciendis ut totam qui eius ut. In ut assumenda sit non ut expedita. Fugit facilis totam velit et odio. Ut eligendi voluptatibus laudantium est excepturi sunt.",
                    "describe_en": "Tempora dolor et aliquid est. Perspiciatis autem magni aut est. Dolores omnis ipsum ut temporibus in doloremque. Assumenda alias eos quis repellendus quisquam in quam eaque.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?79750",
                    "parent_id": 1,
                    "level": 1,
                    "created_at": "2020-08-24 18:18:17",
                    "updated_at": "2020-08-23 04:05:01"
                }
            },
            {
                "id": 11,
                "product_category_id": 18,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "in molestiae sit",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?41141",
                "slug": "et-eos",
                "short_description": "Ipsa asperiores ut voluptatem officiis.",
                "short_description_en": "Alias eveniet similique neque eum eum sunt libero. Corrupti et voluptas repellat excepturi fugit.",
                "price": "9245.00",
                "sale_price": "1.00",
                "stock": 726,
                "spec": null,
                "seo_title": "quasi quo rerum",
                "seo_keyword": "molestiae",
                "seo_description": "Cumque exercitationem nulla nihil tenetur.",
                "benefit": "Quis veniam recusandae fugiat pariatur. Quam aut eum aut ullam. Et et tempore explicabo cum impedit rerum.",
                "benefit_en": "Exercitationem voluptate officia quo. Voluptatem aut sit dolore non voluptates. Molestias enim possimus ea similique.",
                "tech_description": "Libero mollitia quaerat voluptatem. Fugit suscipit id sed cum. Esse non ut dolorem labore consequatur ea. Maiores vitae ratione nobis quidem.",
                "tech_description_en": "Illum alias quas iure aut dolor vel sunt. Aperiam deleniti reiciendis aut error. Quia ut explicabo unde sed voluptatem nisi.",
                "description": "Nulla maxime consequatur non voluptas. Occaecati nisi temporibus est quisquam. Accusamus eius quo veritatis iusto quia hic dolor.",
                "description_en": "Sunt quia sint iusto cumque. Omnis aut dolorem nisi possimus fugiat voluptatibus quasi. Omnis sit debitis aliquid voluptate possimus.",
                "usage": "Non ad totam velit quia dolorum illo voluptatem. Fugiat quia voluptate dignissimos quo omnis. Sit quo voluptatem explicabo excepturi illum qui quia. Et impedit numquam quia dolores.",
                "usage_en": "Molestiae culpa sint sint pariatur iusto. Voluptates assumenda tempore dolor. Alias eos omnis blanditiis reiciendis dicta labore.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?85828",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?93904",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?40862",
                "product_video": null,
                "status": 2,
                "rating": 10,
                "sold_count": 7169,
                "review_count": 7811,
                "created_at": "2020-08-15 08:19:34",
                "updated_at": "2020-09-03 00:11:53",
                "product_category": {
                    "id": 18,
                    "name": "唇膏",
                    "slug": "nulla-cupiditate",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?41643",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?75489",
                    "title": "dicta doloribus consectetur",
                    "title_en": "accusamus facilis nihil",
                    "sub_title": "est doloribus cumque",
                    "describe": "Illum voluptatem ut voluptatem ut cum incidunt pariatur. Consequatur minus enim consequatur quasi. Odio dolorem animi distinctio.",
                    "describe_en": "Dolore est earum at officia dolorem ipsum odit soluta. Delectus impedit minus omnis eligendi ad repellat maiores modi. Aut culpa deleniti eveniet rerum quia assumenda. Ullam sunt fuga quae nemo et.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?93111",
                    "parent_id": 29,
                    "level": 1,
                    "created_at": "2020-08-31 17:46:15",
                    "updated_at": "2020-09-01 12:38:46"
                }
            },
            {
                "id": 12,
                "product_category_id": 6,
                "product_name": "黑钻肌光精华",
                "product_name_en": "aut odit corrupti",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?19547",
                "slug": "qui-hic",
                "short_description": "Possimus laboriosam voluptatum qui.",
                "short_description_en": "Voluptates corrupti animi blanditiis eos. Assumenda ratione earum ad quis sapiente quia sunt. Provident assumenda distinctio ab saepe veniam aut.",
                "price": "6651.00",
                "sale_price": "1.00",
                "stock": 865,
                "spec": null,
                "seo_title": "et vitae dolores",
                "seo_keyword": "ducimus",
                "seo_description": "Rerum numquam eos temporibus.",
                "benefit": "Fuga quasi voluptas iure magni et eos aspernatur. A ex corporis aspernatur ut et maxime sit quo. Tempore inventore accusamus iusto consequuntur aperiam adipisci reprehenderit.",
                "benefit_en": "In dolores minima eligendi perspiciatis repellendus fugiat. Est molestiae aliquid in corrupti fuga. Similique nisi ea rerum in.",
                "tech_description": "Qui omnis explicabo ipsum. Animi sint omnis enim perferendis vitae et. Et et est rem et adipisci temporibus at neque.",
                "tech_description_en": "Quod dolor et dolorum nobis sequi. Voluptate tempore occaecati dolore amet ipsam. Harum animi dolorem aperiam veritatis aut consequatur.",
                "description": "Quae rem iusto quidem doloremque. Non labore veritatis velit ad ducimus blanditiis adipisci. Maiores recusandae et deserunt et repellat.",
                "description_en": "Quas delectus occaecati dolorem vitae. Ut et dolore odio non laudantium neque ut.",
                "usage": "Et quia ut quasi quis ut et harum. Consequatur expedita vel voluptate quo et quo. Beatae aperiam quod aspernatur laudantium repellendus est et.",
                "usage_en": "Voluptatem voluptates cumque veniam voluptatem et. Nesciunt pariatur et explicabo.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?12321",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?32137",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?31844",
                "product_video": null,
                "status": 2,
                "rating": 9.83,
                "sold_count": 7182,
                "review_count": 7548,
                "created_at": "2020-08-27 13:49:41",
                "updated_at": "2020-08-25 11:11:07",
                "product_category": {
                    "id": 6,
                    "name": "爽肤水",
                    "slug": "maiores-ut",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?73064",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?35927",
                    "title": "unde at explicabo",
                    "title_en": "nam dolores saepe",
                    "sub_title": "rerum alias minus",
                    "describe": "Totam omnis possimus quia est minus eos accusamus non. Ab laborum sunt velit odio. Molestiae sapiente id quasi nostrum laudantium suscipit.",
                    "describe_en": "Est omnis dolor laudantium omnis corrupti dolore id. Molestiae et non suscipit deserunt architecto ullam eum. Est error sint illo et.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?28077",
                    "parent_id": 4,
                    "level": 1,
                    "created_at": "2020-08-19 09:35:04",
                    "updated_at": "2020-08-26 18:55:50"
                }
            },
            {
                "id": 13,
                "product_category_id": 1,
                "product_name": "黑钻焕肤水",
                "product_name_en": "ut cum perspiciatis",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?18226",
                "slug": "incidunt-neque",
                "short_description": "Quia totam eum ipsa a at necessitatibus.",
                "short_description_en": "Fugiat ea cumque ut qui nam sit nobis. Non voluptatem suscipit perferendis nulla veritatis. Et repellendus qui molestiae explicabo rem.",
                "price": "1937.00",
                "sale_price": "1.00",
                "stock": 711,
                "spec": null,
                "seo_title": "consequatur at sed",
                "seo_keyword": "cum",
                "seo_description": "Numquam beatae ut veritatis consequatur molestiae.",
                "benefit": "Itaque quidem deleniti et ad illo illum vel. Necessitatibus laborum veritatis ut eius eos reprehenderit id cum. Soluta qui mollitia dolores ut. Nobis repellendus iste consequatur corrupti ad.",
                "benefit_en": "Cum blanditiis id qui dolor molestiae doloribus. Ut quod et amet qui sapiente.",
                "tech_description": "Et ducimus est quo omnis quia ut placeat. Consequatur consequuntur voluptatibus ut minus minima. Officiis at sint eum dignissimos. Ut qui quod doloremque numquam eligendi repellat.",
                "tech_description_en": "Placeat id quis aspernatur quae ex. Ipsam quia quaerat ex quaerat omnis labore.",
                "description": "Non doloremque sunt rem aut non quasi. Numquam molestiae illum occaecati id. Soluta quam qui qui eos. Consequatur et nostrum fugit illo.",
                "description_en": "Unde et id consequatur minima. Deserunt sed impedit consequatur quaerat labore nihil id. Dolorem et sunt rerum optio impedit omnis suscipit quis.",
                "usage": "Dolor amet doloribus impedit quo beatae temporibus. Quam optio odio doloremque et perferendis eum ea. Inventore qui praesentium earum animi numquam cum illum et.",
                "usage_en": "Nisi sint excepturi perferendis quia deleniti est. Neque facere nostrum perferendis quibusdam sint atque. Et odio voluptatem adipisci autem eveniet. Sit et dolores omnis.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?88079",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?25265",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?15714",
                "product_video": null,
                "status": 2,
                "rating": 8.55,
                "sold_count": 4965,
                "review_count": 3110,
                "created_at": "2020-08-16 07:16:00",
                "updated_at": "2020-08-25 09:49:21",
                "product_category": {
                    "id": 1,
                    "name": "隔离",
                    "slug": "culpa-fugiat",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?42905",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?32998",
                    "title": "alias blanditiis cupiditate",
                    "title_en": "voluptates tempore qui",
                    "sub_title": "molestiae voluptas aut",
                    "describe": "Et itaque maxime quaerat quaerat. Aut doloribus non exercitationem dolores qui. In id in non aliquid inventore.",
                    "describe_en": "Laborum in velit dolores amet. Maxime iure consequuntur iure. Ratione non quia placeat deserunt et illo.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?62298",
                    "parent_id": 16,
                    "level": 1,
                    "created_at": "2020-09-02 09:43:41",
                    "updated_at": "2020-08-24 11:49:23"
                }
            },
            {
                "id": 14,
                "product_category_id": 13,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "at ut necessitatibus",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?67273",
                "slug": "ipsa-cumque",
                "short_description": "Maiores harum deleniti sint corporis.",
                "short_description_en": "Fuga maiores dolor minus dolor sapiente quae alias. Perspiciatis sit eum voluptas qui quisquam et. Dolores hic aut dolor consequatur quis numquam nulla.",
                "price": "7335.00",
                "sale_price": "1.00",
                "stock": 299,
                "spec": null,
                "seo_title": "quis doloremque ipsam",
                "seo_keyword": "culpa",
                "seo_description": "Esse debitis delectus vero consequatur earum.",
                "benefit": "Ut doloremque reprehenderit qui dolor. Perferendis quas minima qui neque aut et. Placeat est repellendus quasi deserunt accusamus sunt ipsa. Quis qui autem dolor. Aut voluptates autem rem dolor.",
                "benefit_en": "Corrupti dolores odit ipsa vel quibusdam culpa sit. Quam in et quo incidunt optio nihil quis et. Et deserunt sequi veritatis cumque.",
                "tech_description": "Architecto sapiente consequatur aut suscipit. Est et inventore dolore. Facere quo excepturi qui reiciendis. Qui sapiente accusantium est et assumenda necessitatibus. Ut sed explicabo est vel doloremque incidunt est deserunt.",
                "tech_description_en": "In enim veritatis aut reprehenderit. Aliquam rem fugiat exercitationem non reiciendis. Quis qui pariatur autem et. Dolor velit rerum asperiores eligendi corrupti.",
                "description": "Et earum molestias qui mollitia distinctio quidem quia ad. Et quo qui consequatur a vitae qui. Aut quia aliquam distinctio voluptas nihil fugiat itaque. Doloremque qui in quis officiis reiciendis vel.",
                "description_en": "Modi eius expedita omnis eos quibusdam et. Non ipsum est et a. Reprehenderit hic ullam in eligendi.",
                "usage": "Consequatur vitae debitis dignissimos a quis libero. Soluta sequi non ullam repudiandae est accusantium. Sint eligendi beatae libero et est. Quia eos vel amet voluptatibus nemo quia.",
                "usage_en": "Aut omnis est rerum iure accusamus earum. Laudantium tenetur inventore debitis voluptatem. Id dolore provident delectus sed architecto minus.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?60400",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?53423",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?11416",
                "product_video": null,
                "status": 2,
                "rating": 9.41,
                "sold_count": 5872,
                "review_count": 3988,
                "created_at": "2020-09-03 16:21:53",
                "updated_at": "2020-08-30 09:04:12",
                "product_category": {
                    "id": 13,
                    "name": "精油",
                    "slug": "voluptatibus-et",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?80592",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?54717",
                    "title": "expedita eaque asperiores",
                    "title_en": "sit voluptatem reprehenderit",
                    "sub_title": "error est quia",
                    "describe": "Quas cumque velit itaque omnis ut qui sit. Saepe earum quasi eos et eos numquam neque saepe. Ex similique ipsa quis natus.",
                    "describe_en": "Omnis aut occaecati quis vel. Ratione doloribus ea vitae maiores porro perspiciatis adipisci.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?79308",
                    "parent_id": 13,
                    "level": 1,
                    "created_at": "2020-08-13 20:22:22",
                    "updated_at": "2020-09-07 06:42:38"
                }
            },
            {
                "id": 15,
                "product_category_id": 9,
                "product_name": "黑钻肌光精华",
                "product_name_en": "doloremque nesciunt quia",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?64987",
                "slug": "voluptatibus-qui",
                "short_description": "Quidem praesentium possimus rerum sint ea et.",
                "short_description_en": "Ratione enim error est iusto quibusdam sunt. Ratione exercitationem est neque quas ipsam. Est alias velit hic saepe illum in. Quo nobis aut hic dicta et.",
                "price": "4388.00",
                "sale_price": "1.00",
                "stock": 108,
                "spec": null,
                "seo_title": "repellendus eum voluptas",
                "seo_keyword": "aliquid",
                "seo_description": "Dignissimos accusamus et excepturi.",
                "benefit": "Et et rem eveniet quae sit unde. Illum dolore iure nesciunt. Beatae numquam voluptatem dignissimos occaecati maxime minus neque.",
                "benefit_en": "Fuga dolorem sapiente eligendi sunt aut placeat. Totam sit ut provident similique odit assumenda. Nemo id quia pariatur.",
                "tech_description": "Dolor quaerat sint iusto aut. Magni rem iste occaecati accusamus exercitationem. Deserunt ea molestias itaque soluta adipisci facere quia.",
                "tech_description_en": "Et perferendis incidunt voluptas. Deserunt in et aut ratione ducimus architecto ab.",
                "description": "Qui repellat tempore vel aut aut reiciendis. Facere omnis ut molestiae sunt dicta quae voluptate. Quia officiis magni ratione placeat perferendis.",
                "description_en": "Ullam aliquid sed ipsum corporis ea eos. Quisquam id voluptatem ut quaerat dolor sequi. Enim corrupti repellendus rerum. Fugit modi aut fugiat provident non.",
                "usage": "Sequi dolores voluptatibus voluptatem magnam consectetur. Ut et labore corrupti animi. Minima aut tenetur minima alias illo. Excepturi repudiandae molestias beatae omnis quis.",
                "usage_en": "Quis est excepturi itaque velit. Consectetur a molestias sunt rerum dolores quod. Eius sint tenetur adipisci quas quidem distinctio. Unde molestiae numquam ex ullam nulla.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?90699",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?51586",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?23857",
                "product_video": null,
                "status": 2,
                "rating": 0.06,
                "sold_count": 4241,
                "review_count": 9510,
                "created_at": "2020-08-26 07:03:05",
                "updated_at": "2020-08-18 19:08:15",
                "product_category": {
                    "id": 9,
                    "name": "爽肤水",
                    "slug": "voluptas-repudiandae",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?44308",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?96744",
                    "title": "totam quae tempora",
                    "title_en": "repellat consequatur aut",
                    "sub_title": "amet voluptatem corrupti",
                    "describe": "Aperiam exercitationem accusamus maxime expedita. Veritatis aut velit perferendis hic. Possimus maxime necessitatibus atque. Quasi nam maxime molestiae asperiores qui et id.",
                    "describe_en": "Quae veritatis quaerat placeat harum dolorum. Aliquam amet voluptas est earum dolores beatae voluptatem.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?20695",
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-08-24 23:41:37",
                    "updated_at": "2020-08-29 15:47:28"
                }
            },
            {
                "id": 16,
                "product_category_id": 18,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "ipsam rerum quaerat",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?16044",
                "slug": "inventore-aspernatur",
                "short_description": "Eaque aperiam veniam cum mollitia est.",
                "short_description_en": "Ut nobis quo id et harum voluptate facilis. Culpa officiis soluta est alias quis eum hic perspiciatis. Alias voluptate consequuntur molestiae quia. Molestiae quo nihil dicta dolorum rem aut odio aut.",
                "price": "4277.00",
                "sale_price": "1.00",
                "stock": 86,
                "spec": null,
                "seo_title": "nobis in saepe",
                "seo_keyword": "modi",
                "seo_description": "Asperiores aliquam suscipit rerum.",
                "benefit": "Quaerat porro quia doloremque tempore soluta nam. Quia ut minima quaerat dignissimos a quia accusamus. Qui dolore est blanditiis delectus assumenda cumque.",
                "benefit_en": "Debitis rerum ab quo ut voluptate quos. Molestiae velit laudantium vel excepturi. Sed veritatis expedita dolor tempora fugit officiis adipisci. Aut molestias pariatur aliquid ab quae expedita beatae dolores. Esse dicta quo est voluptas cupiditate sed.",
                "tech_description": "Blanditiis debitis ipsa cupiditate. Quisquam aut nemo quia non. Magnam enim vitae quam. Quod autem corrupti a itaque consequatur.",
                "tech_description_en": "Ea ea repellendus et veniam maiores. Laborum quo aliquam est impedit. Est perferendis iusto quidem. Recusandae laborum exercitationem et et.",
                "description": "Possimus est id repellat itaque nemo. Nihil quibusdam et vero atque. Omnis excepturi quod fugit accusamus eveniet rerum deserunt. Nulla impedit ullam vel nostrum aut quas rerum. Ipsa voluptatum nam recusandae unde molestiae amet.",
                "description_en": "Similique est ab quisquam itaque doloribus. Repellat reiciendis rerum voluptas molestiae ex omnis rerum. Minima delectus ducimus earum et quibusdam ea est.",
                "usage": "Perferendis et qui cumque quae. Accusamus sunt qui nostrum explicabo veniam ipsa. Quod totam officiis sed enim eaque et inventore.",
                "usage_en": "Necessitatibus dolore vero ex et iste. Nihil perspiciatis soluta facere. Repellat laboriosam eum voluptatem doloribus. Nostrum repudiandae maiores nisi quo omnis quam.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?23613",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?75945",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?86525",
                "product_video": null,
                "status": 2,
                "rating": 7.75,
                "sold_count": 3220,
                "review_count": 3300,
                "created_at": "2020-09-07 11:16:53",
                "updated_at": "2020-08-21 04:48:29",
                "product_category": {
                    "id": 18,
                    "name": "唇膏",
                    "slug": "nulla-cupiditate",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?41643",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?75489",
                    "title": "dicta doloribus consectetur",
                    "title_en": "accusamus facilis nihil",
                    "sub_title": "est doloribus cumque",
                    "describe": "Illum voluptatem ut voluptatem ut cum incidunt pariatur. Consequatur minus enim consequatur quasi. Odio dolorem animi distinctio.",
                    "describe_en": "Dolore est earum at officia dolorem ipsum odit soluta. Delectus impedit minus omnis eligendi ad repellat maiores modi. Aut culpa deleniti eveniet rerum quia assumenda. Ullam sunt fuga quae nemo et.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?93111",
                    "parent_id": 29,
                    "level": 1,
                    "created_at": "2020-08-31 17:46:15",
                    "updated_at": "2020-09-01 12:38:46"
                }
            },
            {
                "id": 17,
                "product_category_id": 13,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "ipsam cupiditate sunt",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?72568",
                "slug": "quasi-omnis",
                "short_description": "Quidem cum nulla et maiores.",
                "short_description_en": "Accusantium nihil porro accusamus et illum dicta. Nemo id nihil consectetur voluptatem libero. Dolor quaerat et id repellendus dolorem sunt voluptas. Libero libero cupiditate voluptas.",
                "price": "6945.00",
                "sale_price": "1.00",
                "stock": 150,
                "spec": null,
                "seo_title": "ducimus laboriosam rerum",
                "seo_keyword": "omnis",
                "seo_description": "Et doloremque accusantium repellat aut.",
                "benefit": "Eaque quasi suscipit qui. Corrupti fugiat delectus dolores qui fuga officiis. Velit quis repudiandae et excepturi.",
                "benefit_en": "Quam at debitis unde dolores quod odit facere. Officiis expedita nulla sed quam perferendis. Delectus et vitae non soluta fugit aut quis. Magnam quia ut et quia quisquam voluptatibus autem.",
                "tech_description": "Qui error odit ut laboriosam minus ea quis enim. Voluptatibus ullam animi iure consequuntur ut sed rem. Voluptatum et sit optio expedita. Quia temporibus rem et assumenda modi ratione.",
                "tech_description_en": "Unde maiores aut vitae dolor consequatur magni debitis. Sit ut necessitatibus facilis qui quisquam. Voluptatum autem labore reiciendis non vitae voluptatum. Reprehenderit enim explicabo qui necessitatibus. Ipsum sunt est possimus ut aut accusamus.",
                "description": "Earum corrupti sed harum commodi beatae. Debitis quod necessitatibus et. Quis in occaecati voluptas repudiandae.",
                "description_en": "Et voluptas veritatis voluptatem qui. Fugit ipsa hic aut qui occaecati ea exercitationem.",
                "usage": "Adipisci voluptatem pariatur eum beatae vel eum rerum. Labore neque inventore placeat quia. Nostrum qui molestiae repellat pariatur. Nam ut consequuntur qui omnis iure quod dolor.",
                "usage_en": "Sit deleniti quae veniam et ea enim. Minima non quis soluta accusamus incidunt nisi mollitia. Sint architecto repellat quisquam qui iste enim harum libero.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?76029",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?70752",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?36694",
                "product_video": null,
                "status": 1,
                "rating": 2.19,
                "sold_count": 8679,
                "review_count": 8580,
                "created_at": "2020-08-16 13:12:23",
                "updated_at": "2020-09-03 02:55:57",
                "product_category": {
                    "id": 13,
                    "name": "精油",
                    "slug": "voluptatibus-et",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?80592",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?54717",
                    "title": "expedita eaque asperiores",
                    "title_en": "sit voluptatem reprehenderit",
                    "sub_title": "error est quia",
                    "describe": "Quas cumque velit itaque omnis ut qui sit. Saepe earum quasi eos et eos numquam neque saepe. Ex similique ipsa quis natus.",
                    "describe_en": "Omnis aut occaecati quis vel. Ratione doloribus ea vitae maiores porro perspiciatis adipisci.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?79308",
                    "parent_id": 13,
                    "level": 1,
                    "created_at": "2020-08-13 20:22:22",
                    "updated_at": "2020-09-07 06:42:38"
                }
            },
            {
                "id": 18,
                "product_category_id": 15,
                "product_name": "黑钻肌光精华",
                "product_name_en": "et quo voluptatem",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?41111",
                "slug": "neque-ut",
                "short_description": "Odit minima minima aut ipsum doloribus.",
                "short_description_en": "Dolores dolorem in aut veritatis sit eos. Dolor ipsa molestiae facere maxime. Cumque illum fugiat molestias velit non et culpa ut. Quidem sunt rerum aut non sed quod.",
                "price": "757.00",
                "sale_price": "1.00",
                "stock": 680,
                "spec": null,
                "seo_title": "at et amet",
                "seo_keyword": "id",
                "seo_description": "Repudiandae voluptatem rerum est.",
                "benefit": "Quia ipsa omnis et et deleniti vero. Provident dolor cum nostrum tenetur. Minima et facilis tenetur cumque et commodi.",
                "benefit_en": "Est autem error iste voluptatem porro. Facilis consectetur fuga suscipit. Omnis possimus repudiandae molestias non rerum. Similique at ex ipsum sint reiciendis.",
                "tech_description": "Et impedit dolore ut necessitatibus ad. Repellat et incidunt alias doloribus molestias dolore vero provident.",
                "tech_description_en": "Dicta possimus quibusdam ut qui praesentium labore et modi. Qui possimus autem esse dolor aut. Aliquam aperiam quos iure itaque. Aut dolore impedit a deleniti rerum minima qui ea.",
                "description": "Voluptas quidem est officia et dolorum et ut. Explicabo aliquam minus praesentium officia quo vitae exercitationem. Hic praesentium sed et id. Aut et exercitationem voluptas aut ad possimus suscipit.",
                "description_en": "Et et earum dolor vel. Voluptatibus non facilis omnis blanditiis voluptas tempore fugit. Quis repellendus libero quasi nesciunt dolores minima minima.",
                "usage": "Voluptatum et nulla omnis sint rerum omnis ad. Sapiente doloremque ullam culpa dolorem quos. Sint repudiandae vel facilis dicta delectus.",
                "usage_en": "Occaecati occaecati commodi in qui qui adipisci. Porro similique natus ipsam rerum. Corporis a aliquam aspernatur rem modi qui adipisci sit. Sapiente non magni ut repellendus dolore ullam neque ab. Aliquid vel soluta dolorum labore nemo ratione.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?62029",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?95561",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?38983",
                "product_video": null,
                "status": 3,
                "rating": 8.81,
                "sold_count": 1262,
                "review_count": 1216,
                "created_at": "2020-08-31 00:13:09",
                "updated_at": "2020-08-20 17:57:25",
                "product_category": {
                    "id": 15,
                    "name": "BB霜",
                    "slug": "aperiam-saepe",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?71480",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?78914",
                    "title": "est molestias similique",
                    "title_en": "eos molestias nisi",
                    "sub_title": "voluptas esse earum",
                    "describe": "Dolor eius nisi at sapiente possimus. Dolorem occaecati ab qui enim accusantium a. Velit quibusdam voluptas ut magnam similique voluptate possimus.",
                    "describe_en": "Atque ea quas totam optio illo. Qui vel natus eos. Ut voluptatem omnis quo maiores consequatur ipsam. Ea qui consequatur quibusdam.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?99852",
                    "parent_id": 5,
                    "level": 1,
                    "created_at": "2020-08-15 10:37:04",
                    "updated_at": "2020-08-22 11:47:14"
                }
            },
            {
                "id": 19,
                "product_category_id": 10,
                "product_name": "黑钻焕肤水",
                "product_name_en": "molestiae qui quibusdam",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?81908",
                "slug": "et-ex",
                "short_description": "Est et ea aut.",
                "short_description_en": "Harum aut occaecati consequatur qui accusantium commodi debitis consequatur. Non perspiciatis vitae qui expedita deleniti. Aliquam ut officiis autem quia sunt provident aut.",
                "price": "2074.00",
                "sale_price": "1.00",
                "stock": 741,
                "spec": null,
                "seo_title": "tempora sapiente veniam",
                "seo_keyword": "nesciunt",
                "seo_description": "Ea aperiam et optio voluptatum doloribus earum.",
                "benefit": "Qui in vel et quia voluptatibus quaerat ut. Aliquam eos fuga ut rem quos. Et qui qui sequi rerum in odit asperiores.",
                "benefit_en": "Repellat sed et perferendis quasi. Eaque sed eum iusto ut nostrum.",
                "tech_description": "Minima qui aut dicta necessitatibus quibusdam ut sint. Voluptas maiores dolor eos. Eligendi ratione quia possimus sapiente dolorem neque. Est maxime libero perspiciatis eligendi minima aspernatur.",
                "tech_description_en": "Quo exercitationem dolore repudiandae omnis cupiditate necessitatibus. Incidunt nobis rerum reprehenderit ut voluptates nisi sint. Voluptatibus ducimus mollitia quis labore qui beatae et rerum.",
                "description": "Consequuntur suscipit tempora deserunt nemo praesentium et rem. Dolor est ut culpa fugit. Enim possimus reprehenderit officiis optio. Alias sed rerum voluptas sed enim est. Quia adipisci fugit assumenda ipsum.",
                "description_en": "Eveniet non molestias qui magni. Harum optio est quaerat. Eos sequi laudantium qui non delectus doloribus. Nesciunt ut exercitationem est reiciendis.",
                "usage": "Sed ea quam dolor impedit dolores est. Qui corporis explicabo eaque suscipit placeat ipsa est. Qui rem laboriosam illum hic sed delectus. Soluta enim dolorem aut blanditiis sapiente nulla eius.",
                "usage_en": "Officiis numquam repudiandae delectus dolorem officia. Cupiditate ex voluptatem blanditiis dolores est. Velit corrupti sit pariatur cupiditate eum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?49010",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?71134",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?90326",
                "product_video": null,
                "status": 2,
                "rating": 4.26,
                "sold_count": 1263,
                "review_count": 1017,
                "created_at": "2020-08-15 09:22:19",
                "updated_at": "2020-08-15 21:41:02",
                "product_category": {
                    "id": 10,
                    "name": "睫毛膏",
                    "slug": "esse-dolores",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?48705",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?34645",
                    "title": "iste deleniti in",
                    "title_en": "expedita harum velit",
                    "sub_title": "ea quia inventore",
                    "describe": "Dicta quisquam quia velit odio. Facere nemo dolorem sint esse. Inventore delectus ratione provident quaerat laboriosam amet doloribus. Quasi maxime minus ipsa.",
                    "describe_en": "Ea quod ut ad est. In et quia quas nihil quo. Neque assumenda quod sit hic delectus. Commodi et et qui a quisquam ullam.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?95284",
                    "parent_id": 19,
                    "level": 1,
                    "created_at": "2020-09-07 14:08:05",
                    "updated_at": "2020-08-27 21:22:13"
                }
            },
            {
                "id": 20,
                "product_category_id": 5,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "blanditiis esse perferendis",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?43032",
                "slug": "molestiae-nam",
                "short_description": "Ullam sed eos iusto provident.",
                "short_description_en": "Vel et animi non fugit. Sit accusantium sint itaque vel ut aliquid. Iste non dolor veritatis non et eum sint.",
                "price": "9234.00",
                "sale_price": "1.00",
                "stock": 257,
                "spec": null,
                "seo_title": "accusantium necessitatibus aliquid",
                "seo_keyword": "voluptas",
                "seo_description": "Commodi rerum est culpa.",
                "benefit": "Non amet et eum eveniet laborum quis dolores tempore. Sequi sed et dolorem ullam quam consequuntur qui. Omnis facere sit consequatur quos minus quia.",
                "benefit_en": "Tempore debitis ipsam adipisci doloribus harum adipisci. Laboriosam aspernatur autem et vel. Eum voluptatibus aut repellendus unde nobis consequatur.",
                "tech_description": "Voluptates ducimus occaecati eos soluta sint qui. Voluptatem qui ipsa distinctio quaerat facilis. Culpa atque et impedit aut et nesciunt. Repudiandae ipsam est exercitationem quibusdam et. Sint dolores porro est asperiores minus reprehenderit non.",
                "tech_description_en": "Voluptas et fugiat recusandae provident et. Quia consequatur enim corrupti dignissimos et. Quo sapiente quaerat dolorum in similique aspernatur qui.",
                "description": "Sunt dicta qui iusto earum laudantium. Exercitationem et iusto dolores harum consequatur et. Repellendus dolor id ipsam tempore non incidunt accusamus voluptas.",
                "description_en": "Voluptatem quisquam consequatur et eligendi in. Dolorem commodi molestiae dolor cupiditate eveniet at repellendus possimus. Doloremque sunt amet ut placeat impedit omnis.",
                "usage": "Natus occaecati in nisi quidem omnis quas. Non quasi ipsum est tenetur corporis quaerat. Est harum perferendis id voluptates sed dolor in. Perferendis a tempora blanditiis quod eum. Fuga praesentium deserunt et et qui.",
                "usage_en": "Molestiae blanditiis reiciendis vel aspernatur qui et fugiat. Ea maxime vitae vel dolorem qui molestias.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?55222",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?57434",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?19960",
                "product_video": null,
                "status": 3,
                "rating": 7.76,
                "sold_count": 4782,
                "review_count": 8775,
                "created_at": "2020-08-15 14:53:22",
                "updated_at": "2020-09-01 06:23:02",
                "product_category": {
                    "id": 5,
                    "name": "面膜",
                    "slug": "labore-hic",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?90170",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?27246",
                    "title": "unde tempore quam",
                    "title_en": "dicta ullam asperiores",
                    "sub_title": "id ut mollitia",
                    "describe": "Nesciunt velit quaerat aliquid consequatur. Non est soluta sed eligendi quas tempore.",
                    "describe_en": "Neque qui id inventore dolorem aspernatur eligendi pariatur dicta. Quidem et ea qui autem non mollitia ex. Harum ut fugiat deleniti soluta.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?99704",
                    "parent_id": 24,
                    "level": 1,
                    "created_at": "2020-08-27 01:32:40",
                    "updated_at": "2020-08-28 10:19:41"
                }
            }
        ],
        "first_page_url": "http:\/\/localhost\/api\/product?page=1",
        "from": 1,
        "last_page": 3,
        "last_page_url": "http:\/\/localhost\/api\/product?page=3",
        "next_page_url": "http:\/\/localhost\/api\/product?page=2",
        "path": "http:\/\/localhost\/api\/product",
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
`GET api/product`


<!-- END_dc538d69a8586a7a3c36d4393cee42e6 -->

<!-- START_730a7e488c8f865233d4c59e2d2151c1 -->
## Get product list of status
根据产品状态获取产品列表

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/product_status/1?status=rem&page=id&page_limit=adipisci" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product_status/1"
);

let params = {
    "status": "rem",
    "page": "id",
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


> Example response (200):

```json
{
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 26,
                "product_category_id": 19,
                "product_name": "黑钻焕肤水",
                "product_name_en": "error rerum consequatur",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?86360",
                "slug": "omnis-officiis",
                "short_description": "Nulla odit tempore qui nesciunt sit et.",
                "short_description_en": "Delectus porro ex et et itaque quasi qui. Nesciunt sed et suscipit sit. Itaque sunt voluptatem et officiis reprehenderit temporibus. Ex modi sunt et magni quibusdam.",
                "price": "9271.00",
                "sale_price": "1.00",
                "stock": 49,
                "spec": null,
                "seo_title": "voluptatem eos occaecati",
                "seo_keyword": "voluptatem",
                "seo_description": "Labore ducimus suscipit ratione quaerat.",
                "benefit": "Et et illo perferendis repudiandae veritatis voluptas. Velit a est error voluptates eos sunt dolores. Debitis consectetur sint mollitia voluptas qui. Magni dolorem enim magni veniam.",
                "benefit_en": "Excepturi magnam minus possimus iure. Commodi quo culpa a earum vero. Quibusdam aliquid vero quos tempore earum ullam minima dolor.",
                "tech_description": "Tempora quibusdam ut ea aut impedit ad qui. Accusantium harum enim aliquam cum quia sit consectetur. Molestias illum harum rem quo laborum et.",
                "tech_description_en": "Beatae facilis ut fugit maxime. Expedita in sed pariatur qui et amet. Aspernatur non explicabo autem aut in.",
                "description": "Qui occaecati mollitia velit qui et. Autem adipisci labore sed repudiandae aliquid doloribus.",
                "description_en": "Illum distinctio ipsam ex ut et. Natus voluptates reprehenderit voluptate sit perspiciatis. Qui consequatur voluptatibus culpa illo omnis exercitationem atque. Unde corporis fugit fugit ad.",
                "usage": "Incidunt cumque saepe incidunt illum unde possimus quidem. Eum magni voluptatibus dolor id voluptatum perspiciatis. Est quibusdam voluptatem harum voluptatibus vel aut omnis.",
                "usage_en": "Adipisci sapiente ad quam rem. Consectetur dolores aut fugit veritatis porro nostrum consequatur ratione. Quia necessitatibus vero delectus quam aut enim. Ut ut et sint fugiat.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?24495",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?53583",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?48176",
                "product_video": null,
                "status": 1,
                "rating": 1.19,
                "sold_count": 9929,
                "review_count": 8446,
                "created_at": "2020-08-23 01:49:09",
                "updated_at": "2020-09-11 09:50:00",
                "product_category": {
                    "id": 19,
                    "name": "香水",
                    "slug": "qui-consequatur",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?28406",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?35860",
                    "title": "esse in id",
                    "title_en": "numquam voluptas autem",
                    "sub_title": "vel et aut",
                    "describe": "In amet dolores et voluptatum sapiente qui est qui. Cumque omnis expedita doloribus. Earum illum dolorum quo labore. Ipsa delectus sapiente placeat repellat vero ut velit.",
                    "describe_en": "Ea ex voluptatibus aliquam dolor velit et corporis. Vel et et reiciendis qui unde blanditiis qui.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?21252",
                    "parent_id": 2,
                    "level": 1,
                    "created_at": "2020-09-02 08:46:41",
                    "updated_at": "2020-08-29 21:41:14"
                }
            },
            {
                "id": 23,
                "product_category_id": 9,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "excepturi tempora consequatur",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?51603",
                "slug": "reiciendis-impedit",
                "short_description": "Quod ipsum exercitationem soluta libero veniam.",
                "short_description_en": "Amet vitae ea enim. Suscipit nemo totam in. Sapiente velit molestiae inventore eaque blanditiis neque.",
                "price": "1386.00",
                "sale_price": "1.00",
                "stock": 326,
                "spec": null,
                "seo_title": "molestias perferendis veniam",
                "seo_keyword": "amet",
                "seo_description": "Maiores sed ipsam consequatur.",
                "benefit": "Voluptatum vel explicabo amet autem rerum. Maiores aut nobis aut quia nihil. Deserunt ut voluptatum praesentium possimus accusamus ad. Aspernatur repellat ipsa odit aut eos officiis.",
                "benefit_en": "Explicabo fugiat voluptatem velit praesentium. Odit accusantium praesentium amet dolore facilis. Iure minima non hic alias.",
                "tech_description": "Nobis voluptatem aut facere asperiores corrupti placeat totam. Et ut nemo voluptatibus voluptatem. Voluptatem molestiae alias provident minima blanditiis natus quod.",
                "tech_description_en": "Perspiciatis non reprehenderit labore repellendus doloremque quidem reprehenderit. Blanditiis cumque quis mollitia et accusamus dolor. Sed omnis culpa ducimus est repellat minima eos.",
                "description": "Explicabo quo nam eveniet eligendi tempore sunt non. Est sapiente laudantium quasi voluptatem et facilis. Vitae vitae et molestias est distinctio quidem aut.",
                "description_en": "Porro delectus iure natus qui. Ut dolor quod laboriosam deserunt perferendis. Rerum ut esse numquam nihil. Quos autem adipisci vel consequatur.",
                "usage": "Eius accusamus non cupiditate et in. Adipisci molestiae eos animi quia.",
                "usage_en": "Ut sint a consequatur ex voluptates natus assumenda. Tempora eum et optio quisquam et aliquam. Aut voluptas vero reprehenderit molestiae perferendis alias magnam. Nulla saepe quia consequatur optio eaque.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?81490",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?13864",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?55493",
                "product_video": null,
                "status": 1,
                "rating": 4.5600000000000005,
                "sold_count": 7460,
                "review_count": 6963,
                "created_at": "2020-09-07 06:56:10",
                "updated_at": "2020-08-20 19:14:10",
                "product_category": {
                    "id": 9,
                    "name": "爽肤水",
                    "slug": "voluptas-repudiandae",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?44308",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?96744",
                    "title": "totam quae tempora",
                    "title_en": "repellat consequatur aut",
                    "sub_title": "amet voluptatem corrupti",
                    "describe": "Aperiam exercitationem accusamus maxime expedita. Veritatis aut velit perferendis hic. Possimus maxime necessitatibus atque. Quasi nam maxime molestiae asperiores qui et id.",
                    "describe_en": "Quae veritatis quaerat placeat harum dolorum. Aliquam amet voluptas est earum dolores beatae voluptatem.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?20695",
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-08-24 23:41:37",
                    "updated_at": "2020-08-29 15:47:28"
                }
            },
            {
                "id": 3,
                "product_category_id": 11,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "veritatis optio qui",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?78839",
                "slug": "accusantium-suscipit",
                "short_description": "Eos pariatur vitae aliquam.",
                "short_description_en": "Mollitia et eius sequi autem doloremque omnis. Illo rerum soluta corporis quo. Quaerat vero ipsum praesentium cumque est. Et minus vel laudantium molestiae.",
                "price": "3821.00",
                "sale_price": "1.00",
                "stock": 678,
                "spec": null,
                "seo_title": "ullam ea doloribus",
                "seo_keyword": "inventore",
                "seo_description": "Quidem dolorem et quo dolore accusantium qui.",
                "benefit": "Dolore eligendi error odio aspernatur debitis sed eius. Dolore tenetur vitae doloribus et quaerat non non similique. Et labore dolor corrupti nihil nisi provident fuga.",
                "benefit_en": "Quos labore eaque modi est debitis sed enim. Doloremque ut voluptate voluptas ex aut nam quae. Laboriosam qui cupiditate repellendus nesciunt.",
                "tech_description": "Nisi rem maiores incidunt culpa voluptas. Et veniam illum et voluptas modi sint officiis. Autem magnam cum quas molestiae.",
                "tech_description_en": "Non corporis ut quia delectus. Nulla qui non inventore officiis officiis autem mollitia expedita. In assumenda et esse. Ullam aut qui itaque non eaque eos rerum.",
                "description": "Mollitia et voluptatibus eaque optio qui. Et veritatis sint quia. Aut iste temporibus debitis et temporibus rerum. Aliquid omnis repellendus aliquam ex alias cupiditate quo.",
                "description_en": "Ut commodi placeat autem qui aliquid dolorum eos. Odio labore ex inventore consequuntur dolor eaque enim. Est nam sint harum. Tempora maxime alias deleniti quos esse ut.",
                "usage": "Veritatis voluptas magnam numquam iste. Atque nihil hic aliquid aliquam. Repudiandae suscipit sit voluptatem molestiae occaecati dolore inventore. Est repudiandae voluptatem dolor esse et quam.",
                "usage_en": "Porro commodi non sed non aut eligendi. Ea expedita quia velit quia eligendi.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?39295",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?66260",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?66276",
                "product_video": null,
                "status": 1,
                "rating": 3.12,
                "sold_count": 2194,
                "review_count": 3966,
                "created_at": "2020-09-01 20:22:07",
                "updated_at": "2020-08-25 09:50:14",
                "product_category": {
                    "id": 11,
                    "name": "身体护理",
                    "slug": "odit-accusantium",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?26527",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?98162",
                    "title": "voluptatem inventore et",
                    "title_en": "et aliquid rerum",
                    "sub_title": "nihil non velit",
                    "describe": "Dicta laudantium culpa ab et voluptatibus tempora quo. Ullam esse repellat ut aliquam. Ullam soluta officia reprehenderit libero nihil cum aspernatur.",
                    "describe_en": "Qui esse nostrum corrupti. Eum quia illum quia cupiditate architecto unde. Iste ut aperiam mollitia. Hic saepe molestiae cupiditate fuga.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?43769",
                    "parent_id": 18,
                    "level": 1,
                    "created_at": "2020-08-23 14:23:24",
                    "updated_at": "2020-08-15 16:57:06"
                }
            },
            {
                "id": 30,
                "product_category_id": 7,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "voluptatem sapiente provident",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?67697",
                "slug": "adipisci-minima",
                "short_description": "Corrupti quae explicabo iure iusto ex.",
                "short_description_en": "Id sed deleniti placeat rerum sapiente earum et. Necessitatibus voluptatem dolorum dolor quaerat quasi ut nihil sit. Quos consequuntur enim ipsam illum voluptatem adipisci. Facere voluptatem ullam quia voluptatem.",
                "price": "5606.00",
                "sale_price": "1.00",
                "stock": 242,
                "spec": null,
                "seo_title": "qui voluptas cum",
                "seo_keyword": "ex",
                "seo_description": "Qui provident iste fugit molestiae.",
                "benefit": "Sunt repudiandae ut labore iure. Assumenda accusantium est illum rerum eos quos alias. Est sed accusamus aliquid voluptatum eveniet. Soluta est sequi reprehenderit voluptatem cupiditate fugit.",
                "benefit_en": "Cumque deserunt est tenetur assumenda. Nostrum vel perferendis eum asperiores aut eius. Eaque odio deleniti sit amet.",
                "tech_description": "Voluptatem dolor consectetur mollitia autem possimus labore. Repellat ea omnis est eum. Impedit rerum aut ab suscipit similique illum.",
                "tech_description_en": "Sed voluptas asperiores assumenda nihil consequatur quaerat. Et ipsam qui et repellendus voluptas porro. Maiores distinctio ut amet recusandae officiis. Nobis et ea qui fuga.",
                "description": "Qui non quas ea nobis consequatur qui. Aut aspernatur laborum quod sit veritatis. Vel velit necessitatibus assumenda voluptatem. Nihil incidunt ab debitis labore deserunt architecto eos.",
                "description_en": "Ullam quia mollitia nostrum sed maxime ipsum quia. Delectus optio iure maxime rerum. Dolorum sed fugiat in. Voluptatem explicabo similique molestias libero recusandae quia.",
                "usage": "Assumenda quam ut quo quia distinctio. Nemo sed ut omnis nihil aliquid minus. Excepturi voluptas deleniti cum animi nesciunt rerum laboriosam.",
                "usage_en": "Modi nam sit reiciendis illo quidem quis. Qui in quia architecto vel sunt sint dolor dolores.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?74273",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?44896",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?61745",
                "product_video": null,
                "status": 1,
                "rating": 2.7199999999999998,
                "sold_count": 7124,
                "review_count": 2502,
                "created_at": "2020-09-01 10:17:41",
                "updated_at": "2020-09-07 19:08:47",
                "product_category": {
                    "id": 7,
                    "name": "面霜",
                    "slug": "mollitia-veritatis",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?89656",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?85848",
                    "title": "voluptas dolor officiis",
                    "title_en": "aliquam et aspernatur",
                    "sub_title": "voluptatem quae eaque",
                    "describe": "Quia qui sed sequi iste dolores molestias vitae doloribus. Fugiat consequatur quia quidem laudantium quo nesciunt saepe.",
                    "describe_en": "Cumque reprehenderit harum ad perferendis maiores. Est similique impedit voluptatibus. Dicta quibusdam repudiandae quibusdam eligendi. Consequuntur aut sint omnis eligendi.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?19505",
                    "parent_id": 29,
                    "level": 1,
                    "created_at": "2020-08-23 11:08:01",
                    "updated_at": "2020-08-28 10:08:56"
                }
            },
            {
                "id": 43,
                "product_category_id": 4,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "incidunt natus numquam",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?87329",
                "slug": "qui-beatae",
                "short_description": "Labore non quidem reprehenderit.",
                "short_description_en": "Aliquam et quae tempore impedit enim occaecati. Nam et sed qui expedita. Sint quisquam enim quia omnis non sit. Excepturi consequatur eligendi eveniet qui non.",
                "price": "6355.00",
                "sale_price": "1.00",
                "stock": 70,
                "spec": null,
                "seo_title": "modi veritatis ut",
                "seo_keyword": "maxime",
                "seo_description": "Sed aut vitae quis velit ducimus.",
                "benefit": "Ad consequatur consectetur impedit aut veniam beatae. Maxime qui ut inventore fugit illum omnis non. Consequatur veniam est quam. Quisquam non est necessitatibus cumque minus dolores id ea.",
                "benefit_en": "Et ducimus provident pariatur sit laboriosam. Laudantium quibusdam sunt inventore est aut quia. Quis quam eius totam et.",
                "tech_description": "Unde occaecati sed omnis minus est. Necessitatibus aperiam assumenda ea commodi sint.",
                "tech_description_en": "Excepturi dolor qui sit distinctio deserunt dolorum eum rerum. Possimus et consequatur quaerat magnam alias illum. Voluptatem ad illum et praesentium ipsum blanditiis. Porro accusantium debitis qui veniam.",
                "description": "Doloribus nihil porro consectetur dolor. Eligendi et exercitationem asperiores ut dolorem incidunt. Molestiae aut ipsa esse mollitia aut. Dolores quis modi omnis et occaecati ipsa.",
                "description_en": "Exercitationem aut repellat qui et porro et. Non sunt beatae rem voluptas distinctio. Et id distinctio minima dolore sit dicta. Deserunt quasi suscipit dolores porro est explicabo.",
                "usage": "Perspiciatis quisquam voluptates magni et quo. Dolor deleniti quas qui vero debitis dolores. Aliquid voluptas ex reprehenderit dolor nobis magni. Dicta enim maxime exercitationem. Quos aut aperiam earum qui.",
                "usage_en": "Cum earum officiis facere. Itaque autem omnis vitae sequi quis mollitia. Ullam quam sint quia et nostrum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?64514",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?37995",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?50508",
                "product_video": null,
                "status": 1,
                "rating": 1.04,
                "sold_count": 2032,
                "review_count": 5649,
                "created_at": "2020-09-07 08:45:48",
                "updated_at": "2020-09-10 06:23:26",
                "product_category": {
                    "id": 4,
                    "name": "面膜",
                    "slug": "facilis-consequuntur",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?54584",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?93321",
                    "title": "minima et esse",
                    "title_en": "ea ipsam consequatur",
                    "sub_title": "aspernatur quo dolore",
                    "describe": "Itaque reiciendis ut totam qui eius ut. In ut assumenda sit non ut expedita. Fugit facilis totam velit et odio. Ut eligendi voluptatibus laudantium est excepturi sunt.",
                    "describe_en": "Tempora dolor et aliquid est. Perspiciatis autem magni aut est. Dolores omnis ipsum ut temporibus in doloremque. Assumenda alias eos quis repellendus quisquam in quam eaque.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?79750",
                    "parent_id": 1,
                    "level": 1,
                    "created_at": "2020-08-24 18:18:17",
                    "updated_at": "2020-08-23 04:05:01"
                }
            },
            {
                "id": 17,
                "product_category_id": 13,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "ipsam cupiditate sunt",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?72568",
                "slug": "quasi-omnis",
                "short_description": "Quidem cum nulla et maiores.",
                "short_description_en": "Accusantium nihil porro accusamus et illum dicta. Nemo id nihil consectetur voluptatem libero. Dolor quaerat et id repellendus dolorem sunt voluptas. Libero libero cupiditate voluptas.",
                "price": "6945.00",
                "sale_price": "1.00",
                "stock": 150,
                "spec": null,
                "seo_title": "ducimus laboriosam rerum",
                "seo_keyword": "omnis",
                "seo_description": "Et doloremque accusantium repellat aut.",
                "benefit": "Eaque quasi suscipit qui. Corrupti fugiat delectus dolores qui fuga officiis. Velit quis repudiandae et excepturi.",
                "benefit_en": "Quam at debitis unde dolores quod odit facere. Officiis expedita nulla sed quam perferendis. Delectus et vitae non soluta fugit aut quis. Magnam quia ut et quia quisquam voluptatibus autem.",
                "tech_description": "Qui error odit ut laboriosam minus ea quis enim. Voluptatibus ullam animi iure consequuntur ut sed rem. Voluptatum et sit optio expedita. Quia temporibus rem et assumenda modi ratione.",
                "tech_description_en": "Unde maiores aut vitae dolor consequatur magni debitis. Sit ut necessitatibus facilis qui quisquam. Voluptatum autem labore reiciendis non vitae voluptatum. Reprehenderit enim explicabo qui necessitatibus. Ipsum sunt est possimus ut aut accusamus.",
                "description": "Earum corrupti sed harum commodi beatae. Debitis quod necessitatibus et. Quis in occaecati voluptas repudiandae.",
                "description_en": "Et voluptas veritatis voluptatem qui. Fugit ipsa hic aut qui occaecati ea exercitationem.",
                "usage": "Adipisci voluptatem pariatur eum beatae vel eum rerum. Labore neque inventore placeat quia. Nostrum qui molestiae repellat pariatur. Nam ut consequuntur qui omnis iure quod dolor.",
                "usage_en": "Sit deleniti quae veniam et ea enim. Minima non quis soluta accusamus incidunt nisi mollitia. Sint architecto repellat quisquam qui iste enim harum libero.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?76029",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?70752",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?36694",
                "product_video": null,
                "status": 1,
                "rating": 2.19,
                "sold_count": 8679,
                "review_count": 8580,
                "created_at": "2020-08-16 13:12:23",
                "updated_at": "2020-09-03 02:55:57",
                "product_category": {
                    "id": 13,
                    "name": "精油",
                    "slug": "voluptatibus-et",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?80592",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?54717",
                    "title": "expedita eaque asperiores",
                    "title_en": "sit voluptatem reprehenderit",
                    "sub_title": "error est quia",
                    "describe": "Quas cumque velit itaque omnis ut qui sit. Saepe earum quasi eos et eos numquam neque saepe. Ex similique ipsa quis natus.",
                    "describe_en": "Omnis aut occaecati quis vel. Ratione doloribus ea vitae maiores porro perspiciatis adipisci.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?79308",
                    "parent_id": 13,
                    "level": 1,
                    "created_at": "2020-08-13 20:22:22",
                    "updated_at": "2020-09-07 06:42:38"
                }
            },
            {
                "id": 38,
                "product_category_id": 6,
                "product_name": "黑钻焕肤水",
                "product_name_en": "facere quia atque",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?65569",
                "slug": "asperiores-eum",
                "short_description": "Voluptatem numquam ea ullam quia eligendi labore.",
                "short_description_en": "Rerum nam fuga nesciunt sit repellat. Quaerat quaerat est corporis laborum. Natus omnis earum velit dignissimos.",
                "price": "2678.00",
                "sale_price": "1.00",
                "stock": 964,
                "spec": null,
                "seo_title": "nostrum necessitatibus qui",
                "seo_keyword": "vel",
                "seo_description": "Libero hic illo assumenda.",
                "benefit": "Rem et suscipit dolorem qui. Voluptas corporis vel dignissimos aliquid non. Deleniti ut deleniti incidunt dolores voluptates.",
                "benefit_en": "Voluptatum quisquam eum minima ipsa dolores explicabo in. Voluptatum quisquam modi minus quia dolor. Voluptatem consequuntur voluptatem eum aut pariatur delectus. Dignissimos veniam optio expedita deserunt ipsa qui.",
                "tech_description": "In rerum dolore officiis veritatis. Corporis magni eos dolorem explicabo ut quam quo. Qui eos et quaerat possimus.",
                "tech_description_en": "Quam aliquid hic qui et ipsam repudiandae. Porro nulla esse explicabo nesciunt. Ducimus possimus iste fugiat consequuntur error et.",
                "description": "Ipsam iusto voluptas quia veritatis. Perferendis qui ipsum officia a laborum aspernatur. Aspernatur beatae porro qui nostrum sed delectus aut. Ea ipsa quaerat sapiente et nesciunt.",
                "description_en": "Consequatur quod quibusdam vel magni. Sint omnis quis blanditiis magni. Veniam eum quia ipsum blanditiis harum recusandae. Maiores recusandae enim ut maiores corrupti delectus aut.",
                "usage": "Quisquam qui eaque quaerat. Sit est sit velit vel soluta. Asperiores distinctio ad libero eaque quasi consectetur.",
                "usage_en": "Earum adipisci nihil quasi. Incidunt reprehenderit ut temporibus aperiam non voluptatum vitae. Ut nam hic minus repudiandae ratione est hic temporibus. Facilis omnis aut est velit dolorem.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?54167",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?61964",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?13856",
                "product_video": null,
                "status": 1,
                "rating": 3.4,
                "sold_count": 3325,
                "review_count": 5582,
                "created_at": "2020-09-03 21:39:44",
                "updated_at": "2020-08-18 05:14:52",
                "product_category": {
                    "id": 6,
                    "name": "爽肤水",
                    "slug": "maiores-ut",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?73064",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?35927",
                    "title": "unde at explicabo",
                    "title_en": "nam dolores saepe",
                    "sub_title": "rerum alias minus",
                    "describe": "Totam omnis possimus quia est minus eos accusamus non. Ab laborum sunt velit odio. Molestiae sapiente id quasi nostrum laudantium suscipit.",
                    "describe_en": "Est omnis dolor laudantium omnis corrupti dolore id. Molestiae et non suscipit deserunt architecto ullam eum. Est error sint illo et.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?28077",
                    "parent_id": 4,
                    "level": 1,
                    "created_at": "2020-08-19 09:35:04",
                    "updated_at": "2020-08-26 18:55:50"
                }
            },
            {
                "id": 6,
                "product_category_id": 15,
                "product_name": "黑钻肌光精华",
                "product_name_en": "fugiat nihil sapiente",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?97580",
                "slug": "unde-exercitationem",
                "short_description": "Temporibus sint iure accusamus esse.",
                "short_description_en": "Sit aut voluptatem consequatur molestiae. Quasi cumque sed officiis itaque repellat quam. Sed minus maxime molestiae.",
                "price": "2597.00",
                "sale_price": "1.00",
                "stock": 596,
                "spec": null,
                "seo_title": "dolores ipsa ipsam",
                "seo_keyword": "pariatur",
                "seo_description": "Autem esse sunt eum eos vel.",
                "benefit": "Mollitia tenetur quod perspiciatis voluptatem laborum qui libero et. Aut distinctio repellat voluptatum. Explicabo quae dolore quod blanditiis. Impedit quo quod voluptate magni suscipit consequatur.",
                "benefit_en": "Tenetur aut sit nisi. Omnis aut beatae alias aliquid beatae cum est. Quos commodi beatae ab ipsam eos officiis. Reiciendis quaerat suscipit quidem omnis.",
                "tech_description": "Quia perferendis rerum voluptas vel culpa in corrupti. Qui inventore dolores est ex repellendus. Quas tempore quos sed sapiente amet.",
                "tech_description_en": "Vitae temporibus doloribus quas neque hic sunt. Rerum itaque reiciendis quis accusantium ut. Omnis ipsum ducimus qui repudiandae.",
                "description": "Assumenda illo numquam non omnis repellendus officiis amet. Placeat ad delectus blanditiis accusamus nihil facilis consequatur. Qui fuga vero laudantium blanditiis eveniet.",
                "description_en": "Sunt rerum blanditiis optio quibusdam est. Quam et est saepe dolorem aut. Voluptatibus aspernatur non magnam sed laudantium. Expedita beatae numquam molestias illo.",
                "usage": "Ratione beatae in magni molestiae nam sit error quaerat. Eum architecto similique eos illo.",
                "usage_en": "Asperiores exercitationem eos ut. Dolorum ipsa incidunt soluta provident. Alias sit numquam perferendis. Debitis alias vitae quia qui.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?40557",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?66887",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?14673",
                "product_video": null,
                "status": 1,
                "rating": 2.18,
                "sold_count": 7586,
                "review_count": 3243,
                "created_at": "2020-08-25 23:11:38",
                "updated_at": "2020-09-08 13:22:06",
                "product_category": {
                    "id": 15,
                    "name": "BB霜",
                    "slug": "aperiam-saepe",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?71480",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?78914",
                    "title": "est molestias similique",
                    "title_en": "eos molestias nisi",
                    "sub_title": "voluptas esse earum",
                    "describe": "Dolor eius nisi at sapiente possimus. Dolorem occaecati ab qui enim accusantium a. Velit quibusdam voluptas ut magnam similique voluptate possimus.",
                    "describe_en": "Atque ea quas totam optio illo. Qui vel natus eos. Ut voluptatem omnis quo maiores consequatur ipsam. Ea qui consequatur quibusdam.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?99852",
                    "parent_id": 5,
                    "level": 1,
                    "created_at": "2020-08-15 10:37:04",
                    "updated_at": "2020-08-22 11:47:14"
                }
            },
            {
                "id": 46,
                "product_category_id": 8,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "natus facilis ut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?85386",
                "slug": "sed-aut",
                "short_description": "Molestiae quo quisquam voluptas.",
                "short_description_en": "Saepe deserunt dolor numquam deserunt. Vel in optio similique maxime. Sunt praesentium laudantium pariatur autem sunt. Sed natus voluptatibus id aut voluptatem cum exercitationem.",
                "price": "9984.00",
                "sale_price": "1.00",
                "stock": 499,
                "spec": null,
                "seo_title": "sed ut qui",
                "seo_keyword": "vitae",
                "seo_description": "Nulla ratione officia atque fugit veniam.",
                "benefit": "Aliquid nulla odit est voluptas unde possimus. Qui modi provident sequi totam dolor. Iste et et magnam animi in molestias. Non porro eveniet repudiandae et aut qui.",
                "benefit_en": "Id cum incidunt voluptas atque ab. Quia sed dolorum sed omnis deserunt ipsum tempora. Sapiente optio earum quaerat ut asperiores nam aut.",
                "tech_description": "Ea quam excepturi omnis nostrum corrupti est numquam velit. Ex qui consequatur non. In facilis ullam repellendus. Neque laboriosam ex numquam qui totam modi vel.",
                "tech_description_en": "Fuga iusto pariatur error corporis sunt sint impedit. Ut autem tenetur soluta sequi id enim. Nobis maxime molestiae nostrum pariatur ad.",
                "description": "Amet nulla cum ut incidunt. Ea vel tempore fugiat quod. Quas molestias dignissimos maiores.",
                "description_en": "Iste aut rerum asperiores et reprehenderit quae. In aut cum rerum eos. Quod nihil eos dolor culpa. Sunt in non nisi sed qui illo aut.",
                "usage": "Repellendus nihil qui mollitia debitis blanditiis rerum. Deleniti nobis qui recusandae non et omnis aut deserunt. Non reprehenderit dolore error earum consequatur suscipit.",
                "usage_en": "Labore et amet impedit. Magnam soluta ut sint aliquid dolor consequatur reiciendis. At enim alias sunt autem assumenda tenetur suscipit. Voluptatibus ducimus cupiditate quia earum rem atque totam.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?27875",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?74069",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?52261",
                "product_video": null,
                "status": 1,
                "rating": 2.99,
                "sold_count": 5221,
                "review_count": 3798,
                "created_at": "2020-08-20 08:10:41",
                "updated_at": "2020-08-28 23:40:40",
                "product_category": {
                    "id": 8,
                    "name": "套装C",
                    "slug": "quis-saepe",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?17696",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?49590",
                    "title": "quaerat et ut",
                    "title_en": "et aut illo",
                    "sub_title": "ut maxime accusantium",
                    "describe": "Perspiciatis delectus nulla blanditiis porro. Debitis consequatur earum aut praesentium maxime velit quia. Officiis repellat voluptas veniam nesciunt maiores repellat perspiciatis sunt.",
                    "describe_en": "Occaecati totam rerum deleniti incidunt et sit sed. Aut nulla perferendis aut. In corrupti et laborum. Quas delectus ea autem laboriosam aperiam ratione assumenda odio.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?11182",
                    "parent_id": 7,
                    "level": 1,
                    "created_at": "2020-08-11 23:06:55",
                    "updated_at": "2020-09-02 16:30:29"
                }
            },
            {
                "id": 8,
                "product_category_id": 5,
                "product_name": "黑钻焕肤水",
                "product_name_en": "id animi ut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?33992",
                "slug": "iure-sapiente",
                "short_description": "Laudantium alias doloremque esse hic aut.",
                "short_description_en": "Sequi qui modi laudantium a ullam eum. Laborum eius consectetur dolor maxime quia rerum. Est est enim omnis minus unde enim. At omnis possimus perferendis officiis commodi.",
                "price": "7058.00",
                "sale_price": "1.00",
                "stock": 316,
                "spec": null,
                "seo_title": "ipsa enim quae",
                "seo_keyword": "minima",
                "seo_description": "Rerum culpa qui a omnis perspiciatis.",
                "benefit": "Natus reprehenderit minus vel non consectetur natus. Iure aut sit similique corporis asperiores dolorem voluptatem aliquam. Repellendus nulla deserunt debitis reprehenderit reprehenderit. Enim ut maxime quisquam magnam nihil.",
                "benefit_en": "Similique et est optio vero explicabo sunt. Quia laborum delectus deleniti id. Voluptatem eos et neque ut rerum sequi.",
                "tech_description": "Quia soluta ex earum sequi. Cum aut quaerat minus magni sit et autem. Quo provident voluptas omnis explicabo rerum ut iste.",
                "tech_description_en": "Iure vero aliquam error iste. Amet et est quia quis in culpa rem. Ut numquam totam blanditiis dolore ratione nobis autem. Animi pariatur repudiandae magnam optio. Tempore omnis veritatis dolorem.",
                "description": "Error nemo laboriosam ab quae eos illo nam. Voluptas sunt consequatur qui officiis molestias deleniti eligendi in. Cum exercitationem sed accusantium ipsa laboriosam. Suscipit omnis maiores dolores nobis.",
                "description_en": "Fugiat dolor harum et praesentium cumque. Natus ea laudantium magni. Odit esse maiores id dolor. Dicta enim aut sit atque esse ex fugit.",
                "usage": "Sapiente deleniti sapiente quaerat et minus et culpa. Ducimus consequuntur quae quia labore. Vel expedita eos fuga ipsum sed ut consequatur.",
                "usage_en": "Quis vel ex recusandae quasi eaque. Expedita et est debitis dolores autem alias voluptatem. Sit culpa voluptates molestiae inventore nesciunt quas. Nisi voluptatem fugiat quis ut amet. Similique quia expedita nisi sit vitae omnis eius consequuntur.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?90232",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?43222",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?10972",
                "product_video": null,
                "status": 1,
                "rating": 4.26,
                "sold_count": 6521,
                "review_count": 8776,
                "created_at": "2020-09-07 02:07:52",
                "updated_at": "2020-08-14 15:57:10",
                "product_category": {
                    "id": 5,
                    "name": "面膜",
                    "slug": "labore-hic",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?90170",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?27246",
                    "title": "unde tempore quam",
                    "title_en": "dicta ullam asperiores",
                    "sub_title": "id ut mollitia",
                    "describe": "Nesciunt velit quaerat aliquid consequatur. Non est soluta sed eligendi quas tempore.",
                    "describe_en": "Neque qui id inventore dolorem aspernatur eligendi pariatur dicta. Quidem et ea qui autem non mollitia ex. Harum ut fugiat deleniti soluta.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?99704",
                    "parent_id": 24,
                    "level": 1,
                    "created_at": "2020-08-27 01:32:40",
                    "updated_at": "2020-08-28 10:19:41"
                }
            },
            {
                "id": 49,
                "product_category_id": 9,
                "product_name": "黑钻焕肤水",
                "product_name_en": "animi accusamus ad",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?43003",
                "slug": "repudiandae-asperiores",
                "short_description": "Rerum molestias eum tempore et.",
                "short_description_en": "Rerum quibusdam ad voluptates perspiciatis ipsam et cupiditate. Autem enim sit voluptatibus impedit dolore. Consectetur odio debitis aut assumenda at ad. Qui quia ducimus molestias dolore dolor omnis ipsam.",
                "price": "7549.00",
                "sale_price": "1.00",
                "stock": 775,
                "spec": null,
                "seo_title": "omnis nemo laboriosam",
                "seo_keyword": "veniam",
                "seo_description": "Ut nihil eius corrupti.",
                "benefit": "Numquam aut neque in esse dolores nobis dolores. Neque officia quia vel. Enim voluptate odio enim autem esse soluta ipsa. Consequatur molestiae ratione rem ducimus et alias ducimus.",
                "benefit_en": "Beatae fuga ex eos fuga qui. Ea eius quibusdam eligendi hic quae. Voluptatem non consequatur veniam non autem et repellat. Iste consequatur autem optio ea ab ratione at.",
                "tech_description": "Ex impedit voluptas eum ea occaecati quasi. Aut asperiores voluptatem error ea nihil et suscipit. Aut excepturi voluptatem vitae rem.",
                "tech_description_en": "Saepe impedit earum possimus optio dicta est qui. Quo quo et omnis. Deserunt possimus sunt inventore ad eveniet possimus.",
                "description": "Sed eveniet repellendus excepturi. Placeat est nisi magnam vitae ipsam quia vero. Et expedita ipsam velit sint temporibus temporibus. Fugiat voluptatem modi autem ex corporis quia. Vel velit vel culpa.",
                "description_en": "Earum rem nesciunt quo quasi ab soluta aspernatur sit. Ipsa magni harum est temporibus laborum velit. Voluptatem et consectetur dolores vel eligendi ut facilis praesentium. Fugiat voluptatum maxime dolorem atque nulla totam harum.",
                "usage": "Sit ut velit ut sit autem rem. Asperiores eaque assumenda odit exercitationem possimus.",
                "usage_en": "Quia quas nostrum quasi quasi perspiciatis et. Sit vero sunt quidem laboriosam et omnis natus. Aut voluptas sint modi et. Numquam adipisci quidem recusandae ipsa et. Incidunt excepturi minus repellat facere quidem deleniti.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?30714",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?25487",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?62549",
                "product_video": null,
                "status": 1,
                "rating": 6.36,
                "sold_count": 4234,
                "review_count": 8232,
                "created_at": "2020-08-19 19:07:24",
                "updated_at": "2020-08-29 10:07:33",
                "product_category": {
                    "id": 9,
                    "name": "爽肤水",
                    "slug": "voluptas-repudiandae",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?44308",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?96744",
                    "title": "totam quae tempora",
                    "title_en": "repellat consequatur aut",
                    "sub_title": "amet voluptatem corrupti",
                    "describe": "Aperiam exercitationem accusamus maxime expedita. Veritatis aut velit perferendis hic. Possimus maxime necessitatibus atque. Quasi nam maxime molestiae asperiores qui et id.",
                    "describe_en": "Quae veritatis quaerat placeat harum dolorum. Aliquam amet voluptas est earum dolores beatae voluptatem.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?20695",
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-08-24 23:41:37",
                    "updated_at": "2020-08-29 15:47:28"
                }
            },
            {
                "id": 9,
                "product_category_id": 5,
                "product_name": "黑钻肌光精华",
                "product_name_en": "nam quaerat fugiat",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?99861",
                "slug": "quia-unde",
                "short_description": "Eum non consequuntur nulla.",
                "short_description_en": "Sint iusto quia eum reprehenderit. Laboriosam ad quia temporibus vitae eos. Qui et alias id repellendus cupiditate. Consequatur quibusdam earum debitis neque qui qui facere distinctio.",
                "price": "4716.00",
                "sale_price": "1.00",
                "stock": 13,
                "spec": null,
                "seo_title": "repellendus ut quaerat",
                "seo_keyword": "sit",
                "seo_description": "Aut et omnis quo vero eum.",
                "benefit": "Est asperiores inventore magnam illo ut molestiae sed. Repudiandae beatae ut et modi consequatur labore consectetur animi. Ab odit fugit omnis et fuga nam. Dolorum beatae dignissimos exercitationem vel alias tempore excepturi alias.",
                "benefit_en": "Ullam aut et consequatur omnis dolores minima eum. Alias beatae sapiente beatae labore dolores.",
                "tech_description": "Omnis repudiandae sequi omnis. Quam vitae natus vitae consequuntur consectetur omnis. Architecto rerum sit officiis.",
                "tech_description_en": "Voluptatibus rerum fugiat tempore voluptas et. Velit at blanditiis necessitatibus molestias fugiat. Maiores mollitia neque excepturi commodi ut. Et ipsa hic numquam ratione. Atque ea fugiat voluptatibus quo.",
                "description": "Expedita minima a ratione sint et est et. Suscipit est nihil est est consequatur quo voluptatibus. Facere ad sed ut fuga. Ut dicta omnis officia corporis.",
                "description_en": "Est et voluptas exercitationem vitae molestiae. Hic ut quaerat qui qui nostrum quaerat hic explicabo. Et vel est aliquid ut illo quia voluptatum. Tenetur sunt adipisci est et.",
                "usage": "Est voluptas consequuntur officia unde. Ullam est deleniti nihil iste. Debitis consectetur assumenda non qui.",
                "usage_en": "Blanditiis facere nostrum reiciendis. Dolor voluptas aut temporibus laboriosam.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?80491",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?53958",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?40965",
                "product_video": null,
                "status": 1,
                "rating": 2.39,
                "sold_count": 3694,
                "review_count": 7595,
                "created_at": "2020-09-04 14:31:55",
                "updated_at": "2020-08-13 21:53:58",
                "product_category": {
                    "id": 5,
                    "name": "面膜",
                    "slug": "labore-hic",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?90170",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?27246",
                    "title": "unde tempore quam",
                    "title_en": "dicta ullam asperiores",
                    "sub_title": "id ut mollitia",
                    "describe": "Nesciunt velit quaerat aliquid consequatur. Non est soluta sed eligendi quas tempore.",
                    "describe_en": "Neque qui id inventore dolorem aspernatur eligendi pariatur dicta. Quidem et ea qui autem non mollitia ex. Harum ut fugiat deleniti soluta.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?99704",
                    "parent_id": 24,
                    "level": 1,
                    "created_at": "2020-08-27 01:32:40",
                    "updated_at": "2020-08-28 10:19:41"
                }
            },
            {
                "id": 2,
                "product_category_id": 9,
                "product_name": "黑钻焕肤水",
                "product_name_en": "harum doloremque dolorum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?32073",
                "slug": "doloremque-nulla",
                "short_description": "Ipsa qui et numquam fugit inventore sequi.",
                "short_description_en": "In ut non quia cupiditate sit quam. Nihil dolore quo dolore aut in dolorem voluptas. Facilis minus autem nihil nulla numquam commodi. Possimus ex et nulla ut et minima ullam.",
                "price": "234.00",
                "sale_price": "1.00",
                "stock": 590,
                "spec": null,
                "seo_title": "eum ut vero",
                "seo_keyword": "molestiae",
                "seo_description": "Autem autem et magni enim tenetur.",
                "benefit": "Quos ipsam temporibus eaque. Animi blanditiis maxime totam quis nobis eum. Repellat sed occaecati sit et quia enim. Ut consequuntur voluptatem sed distinctio non ab illo.",
                "benefit_en": "Qui asperiores distinctio laborum. Aut voluptatem qui laborum non libero. Quis et est vero nesciunt aperiam perferendis fugit. Cum ipsam mollitia et doloremque eligendi magni.",
                "tech_description": "Sed placeat omnis cumque eligendi deserunt. Quasi quisquam non asperiores ex consectetur. Sit sunt at et neque ut corrupti ut nisi. Aut harum sapiente voluptatem.",
                "tech_description_en": "Tempora expedita maiores enim quod enim recusandae accusamus molestiae. Quam iusto quae aut aut dolor et. Est aperiam culpa debitis repellendus.",
                "description": "Ipsam doloribus ipsam nam totam voluptatem architecto. Itaque animi nulla voluptatem doloribus quidem facere labore. Dolorum laudantium incidunt laboriosam et illum dolorem.",
                "description_en": "Corporis voluptates assumenda eaque minima consequatur. Debitis eveniet reprehenderit minima consequatur eaque. Numquam minima totam id a.",
                "usage": "Rerum sequi repudiandae amet expedita odio tempore. Minima qui accusamus accusamus consequatur ipsum suscipit eveniet. Aspernatur eum est aliquid non saepe. Nemo odit enim fuga aut. Placeat optio saepe enim occaecati voluptatem unde soluta.",
                "usage_en": "Architecto quia animi accusamus expedita. Expedita aut ut et voluptate. Corrupti in accusantium ratione est id in.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?31239",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?32815",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?56277",
                "product_video": null,
                "status": 1,
                "rating": 5.32,
                "sold_count": 5159,
                "review_count": 9274,
                "created_at": "2020-08-24 17:07:50",
                "updated_at": "2020-08-26 17:35:14",
                "product_category": {
                    "id": 9,
                    "name": "爽肤水",
                    "slug": "voluptas-repudiandae",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?44308",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?96744",
                    "title": "totam quae tempora",
                    "title_en": "repellat consequatur aut",
                    "sub_title": "amet voluptatem corrupti",
                    "describe": "Aperiam exercitationem accusamus maxime expedita. Veritatis aut velit perferendis hic. Possimus maxime necessitatibus atque. Quasi nam maxime molestiae asperiores qui et id.",
                    "describe_en": "Quae veritatis quaerat placeat harum dolorum. Aliquam amet voluptas est earum dolores beatae voluptatem.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?20695",
                    "parent_id": 3,
                    "level": 1,
                    "created_at": "2020-08-24 23:41:37",
                    "updated_at": "2020-08-29 15:47:28"
                }
            },
            {
                "id": 28,
                "product_category_id": 17,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "doloremque ab beatae",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?31360",
                "slug": "consequatur-ab",
                "short_description": "Quidem nisi incidunt assumenda neque.",
                "short_description_en": "Labore delectus iusto fugit vel. Vero hic repellendus et eligendi numquam aut officia. Doloremque illum et dignissimos dolore earum rerum deserunt molestias. Et est repellendus nulla enim.",
                "price": "3221.00",
                "sale_price": "1.00",
                "stock": 307,
                "spec": null,
                "seo_title": "nulla numquam magni",
                "seo_keyword": "reprehenderit",
                "seo_description": "Autem aut voluptas soluta.",
                "benefit": "Quaerat dolore deleniti ut eaque perspiciatis quia. Ut qui magni ducimus repudiandae sed officiis. Dolore soluta modi reiciendis voluptatem odit repellendus. Odit quia et magnam et deserunt aut. Dignissimos veniam eum sequi sit quis tempore.",
                "benefit_en": "Suscipit at distinctio id accusamus eum enim. Maiores non sit illo ullam beatae architecto. Consequatur cupiditate quasi nostrum enim culpa enim. Dolorem incidunt odit dolores maxime quisquam voluptatem et.",
                "tech_description": "Et omnis qui quod ut. Blanditiis eos error magnam earum debitis. Enim distinctio sit et excepturi dolorem.",
                "tech_description_en": "Praesentium corrupti est voluptas dolor. Ab qui consequuntur provident autem itaque aliquam corrupti. Quaerat ullam quaerat tempore enim itaque minus nam. Consequatur consequatur nostrum ab quis quo.",
                "description": "Quia qui quam ut fugiat repellendus ipsam. Et rem quo dolores culpa et voluptas totam. Sit aut omnis consequatur minus nemo voluptatibus. Et beatae rem voluptatem illo animi. Voluptatem illo consequatur fuga assumenda voluptas sed.",
                "description_en": "Odio omnis in laboriosam numquam. Vero voluptatem saepe consequatur doloremque. Facere pariatur sint et eaque culpa aut. Reprehenderit asperiores eos accusantium eum eum.",
                "usage": "Dolorum numquam distinctio qui omnis dolor consequatur sed. Praesentium molestiae cum iure sunt culpa atque. Qui quam et accusamus voluptas et exercitationem.",
                "usage_en": "Error perspiciatis et nostrum laboriosam dolor. Sed blanditiis velit molestias natus nostrum laborum. Repellendus dolorem eos aut aut.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?63855",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?60810",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?17152",
                "product_video": null,
                "status": 1,
                "rating": 7.57,
                "sold_count": 4911,
                "review_count": 3488,
                "created_at": "2020-08-16 11:51:22",
                "updated_at": "2020-08-12 18:16:51",
                "product_category": {
                    "id": 17,
                    "name": "套装C",
                    "slug": "optio-qui",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?56627",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?40476",
                    "title": "omnis sit animi",
                    "title_en": "tenetur voluptas ut",
                    "sub_title": "alias nostrum ut",
                    "describe": "Itaque reprehenderit pariatur soluta eum autem. Labore voluptatum voluptas amet hic.",
                    "describe_en": "Est sint harum quia officia. Occaecati qui iste quisquam fugiat. Est nesciunt in cupiditate quia at quis corporis delectus.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?50060",
                    "parent_id": 19,
                    "level": 1,
                    "created_at": "2020-09-06 22:21:31",
                    "updated_at": "2020-08-26 19:28:55"
                }
            },
            {
                "id": 4,
                "product_category_id": 5,
                "product_name": "黑钻肌光精华",
                "product_name_en": "vero et eius",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?17108",
                "slug": "sit-eos",
                "short_description": "Beatae ut perspiciatis voluptatibus ea error sed.",
                "short_description_en": "Reiciendis maxime dicta magnam sapiente quibusdam. Commodi in repudiandae tempore. Laboriosam qui quia sequi incidunt. Earum tenetur ipsam ipsam qui nesciunt. Iusto quam laboriosam voluptas.",
                "price": "2857.00",
                "sale_price": "1.00",
                "stock": 919,
                "spec": null,
                "seo_title": "aspernatur maiores reprehenderit",
                "seo_keyword": "voluptatem",
                "seo_description": "Quia soluta quisquam numquam sint rerum earum.",
                "benefit": "Molestiae recusandae ut vitae voluptatem. Quam beatae dolorem fuga impedit voluptatem error et eveniet. Minus voluptate ea omnis iusto quo hic.",
                "benefit_en": "Quia officia eum dolorum nesciunt iusto ullam et. Omnis suscipit aut est voluptas aspernatur dolorum. Neque consequatur eveniet vero ut aut omnis quis delectus. Delectus quas aliquam veritatis excepturi.",
                "tech_description": "Aut repellendus et enim adipisci voluptatem doloremque. Pariatur atque esse eos placeat unde doloribus. Fuga nemo quia aut voluptas harum doloribus. Nesciunt sunt cupiditate placeat laboriosam.",
                "tech_description_en": "Dolor dicta dolorem sint perspiciatis magnam quod. Suscipit nihil harum rerum odio ab et recusandae. Totam possimus exercitationem et error.",
                "description": "Voluptas voluptatem quos voluptatem mollitia omnis. Laudantium molestiae rem voluptas minima explicabo. Beatae quidem et numquam veritatis minima consectetur earum. Asperiores sapiente dolor dolore esse similique.",
                "description_en": "Iure sint accusamus omnis nulla eaque dolor quia. Hic voluptatem iusto sed tenetur qui est cupiditate. Eum possimus dignissimos libero possimus. Nesciunt necessitatibus nostrum nisi.",
                "usage": "Autem repellat delectus ex. Voluptatibus aspernatur et ipsa ea molestiae molestiae officia. Cum repudiandae culpa nisi debitis non recusandae sint. Vero odio ullam saepe perspiciatis molestiae eligendi.",
                "usage_en": "Nihil qui itaque qui delectus. Aspernatur numquam officia eos quo itaque nihil. Saepe corporis eum cumque aut facere. Cum quaerat assumenda sed velit esse et illum quo.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?37166",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?84317",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?38147",
                "product_video": null,
                "status": 1,
                "rating": 6.93,
                "sold_count": 6535,
                "review_count": 2354,
                "created_at": "2020-08-11 17:34:58",
                "updated_at": "2020-08-16 11:47:01",
                "product_category": {
                    "id": 5,
                    "name": "面膜",
                    "slug": "labore-hic",
                    "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?90170",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?27246",
                    "title": "unde tempore quam",
                    "title_en": "dicta ullam asperiores",
                    "sub_title": "id ut mollitia",
                    "describe": "Nesciunt velit quaerat aliquid consequatur. Non est soluta sed eligendi quas tempore.",
                    "describe_en": "Neque qui id inventore dolorem aspernatur eligendi pariatur dicta. Quidem et ea qui autem non mollitia ex. Harum ut fugiat deleniti soluta.",
                    "describe_img": "https:\/\/lorempixel.com\/640\/480\/?99704",
                    "parent_id": 24,
                    "level": 1,
                    "created_at": "2020-08-27 01:32:40",
                    "updated_at": "2020-08-28 10:19:41"
                }
            }
        ],
        "first_page_url": "http:\/\/localhost\/api\/product_status\/1?page=1",
        "from": 1,
        "last_page": 2,
        "last_page_url": "http:\/\/localhost\/api\/product_status\/1?page=2",
        "next_page_url": "http:\/\/localhost\/api\/product_status\/1?page=2",
        "path": "http:\/\/localhost\/api\/product_status\/1",
        "per_page": 15,
        "prev_page_url": null,
        "to": 15,
        "total": 19
    },
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/product_status/{status}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `status` |  required  | 商品状态(1新品,2畅销,3促销,-1下架)
    `page` |  optional  | 页码
    `page_limit` |  optional  | 每页数量

<!-- END_730a7e488c8f865233d4c59e2d2151c1 -->

<!-- START_eb9c398471efceb42098dee938d34a4f -->
## Get product category list
获取商品分类列表

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
            "name": "隔离",
            "slug": "culpa-fugiat",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?42905",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?32998",
            "title": "alias blanditiis cupiditate",
            "title_en": "voluptates tempore qui",
            "sub_title": "molestiae voluptas aut",
            "describe": "Et itaque maxime quaerat quaerat. Aut doloribus non exercitationem dolores qui. In id in non aliquid inventore.",
            "describe_en": "Laborum in velit dolores amet. Maxime iure consequuntur iure. Ratione non quia placeat deserunt et illo.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?62298",
            "parent_id": 16,
            "level": 1,
            "created_at": "2020-09-02 09:43:41",
            "updated_at": "2020-08-24 11:49:23",
            "parent_title": "iusto similique quasi"
        },
        {
            "id": 2,
            "name": "洁面",
            "slug": "optio-ut",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?64007",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?57889",
            "title": "non et esse",
            "title_en": "cumque qui magnam",
            "sub_title": "ut ut molestiae",
            "describe": "Quia blanditiis enim omnis quo aliquam ipsam quis. Ea odit voluptatibus ut molestias qui. Veniam culpa illum molestias modi corrupti vel dolorem.",
            "describe_en": "Delectus omnis rerum iusto dolor. Non vitae deserunt unde quia inventore explicabo. Dolores quia laborum saepe et. Ad vero id praesentium. At nostrum aut ut voluptas et hic tempore.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?64905",
            "parent_id": 20,
            "level": 1,
            "created_at": "2020-08-24 14:30:23",
            "updated_at": "2020-08-19 20:52:33",
            "parent_title": "culpa expedita aut"
        },
        {
            "id": 3,
            "name": "隔离",
            "slug": "nisi-omnis",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?64447",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?84538",
            "title": "ipsa id dolores",
            "title_en": "possimus minima quia",
            "sub_title": "impedit sit dolorem",
            "describe": "Quis earum repellat quo asperiores reiciendis dolorum dolorem. Omnis similique quis velit animi. Odit amet vel libero aut.",
            "describe_en": "Soluta omnis in quod sed a quam. Id dolore sapiente vitae tenetur molestiae. Maiores ipsa soluta vel eaque rerum consequatur.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?48838",
            "parent_id": 5,
            "level": 1,
            "created_at": "2020-09-11 05:32:32",
            "updated_at": "2020-09-01 02:30:39",
            "parent_title": "unde tempore quam"
        },
        {
            "id": 4,
            "name": "面膜",
            "slug": "facilis-consequuntur",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?54584",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?93321",
            "title": "minima et esse",
            "title_en": "ea ipsam consequatur",
            "sub_title": "aspernatur quo dolore",
            "describe": "Itaque reiciendis ut totam qui eius ut. In ut assumenda sit non ut expedita. Fugit facilis totam velit et odio. Ut eligendi voluptatibus laudantium est excepturi sunt.",
            "describe_en": "Tempora dolor et aliquid est. Perspiciatis autem magni aut est. Dolores omnis ipsum ut temporibus in doloremque. Assumenda alias eos quis repellendus quisquam in quam eaque.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?79750",
            "parent_id": 1,
            "level": 1,
            "created_at": "2020-08-24 18:18:17",
            "updated_at": "2020-08-23 04:05:01",
            "parent_title": "alias blanditiis cupiditate"
        },
        {
            "id": 5,
            "name": "面膜",
            "slug": "labore-hic",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?90170",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?27246",
            "title": "unde tempore quam",
            "title_en": "dicta ullam asperiores",
            "sub_title": "id ut mollitia",
            "describe": "Nesciunt velit quaerat aliquid consequatur. Non est soluta sed eligendi quas tempore.",
            "describe_en": "Neque qui id inventore dolorem aspernatur eligendi pariatur dicta. Quidem et ea qui autem non mollitia ex. Harum ut fugiat deleniti soluta.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?99704",
            "parent_id": 24,
            "level": 1,
            "created_at": "2020-08-27 01:32:40",
            "updated_at": "2020-08-28 10:19:41",
            "parent_title": "dolorem reprehenderit veritatis"
        },
        {
            "id": 6,
            "name": "爽肤水",
            "slug": "maiores-ut",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?73064",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?35927",
            "title": "unde at explicabo",
            "title_en": "nam dolores saepe",
            "sub_title": "rerum alias minus",
            "describe": "Totam omnis possimus quia est minus eos accusamus non. Ab laborum sunt velit odio. Molestiae sapiente id quasi nostrum laudantium suscipit.",
            "describe_en": "Est omnis dolor laudantium omnis corrupti dolore id. Molestiae et non suscipit deserunt architecto ullam eum. Est error sint illo et.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?28077",
            "parent_id": 4,
            "level": 1,
            "created_at": "2020-08-19 09:35:04",
            "updated_at": "2020-08-26 18:55:50",
            "parent_title": "minima et esse"
        },
        {
            "id": 7,
            "name": "面霜",
            "slug": "mollitia-veritatis",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?89656",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?85848",
            "title": "voluptas dolor officiis",
            "title_en": "aliquam et aspernatur",
            "sub_title": "voluptatem quae eaque",
            "describe": "Quia qui sed sequi iste dolores molestias vitae doloribus. Fugiat consequatur quia quidem laudantium quo nesciunt saepe.",
            "describe_en": "Cumque reprehenderit harum ad perferendis maiores. Est similique impedit voluptatibus. Dicta quibusdam repudiandae quibusdam eligendi. Consequuntur aut sint omnis eligendi.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?19505",
            "parent_id": 29,
            "level": 1,
            "created_at": "2020-08-23 11:08:01",
            "updated_at": "2020-08-28 10:08:56",
            "parent_title": "voluptate omnis tempore"
        },
        {
            "id": 8,
            "name": "套装C",
            "slug": "quis-saepe",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?17696",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?49590",
            "title": "quaerat et ut",
            "title_en": "et aut illo",
            "sub_title": "ut maxime accusantium",
            "describe": "Perspiciatis delectus nulla blanditiis porro. Debitis consequatur earum aut praesentium maxime velit quia. Officiis repellat voluptas veniam nesciunt maiores repellat perspiciatis sunt.",
            "describe_en": "Occaecati totam rerum deleniti incidunt et sit sed. Aut nulla perferendis aut. In corrupti et laborum. Quas delectus ea autem laboriosam aperiam ratione assumenda odio.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?11182",
            "parent_id": 7,
            "level": 1,
            "created_at": "2020-08-11 23:06:55",
            "updated_at": "2020-09-02 16:30:29",
            "parent_title": "voluptas dolor officiis"
        },
        {
            "id": 9,
            "name": "爽肤水",
            "slug": "voluptas-repudiandae",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?44308",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?96744",
            "title": "totam quae tempora",
            "title_en": "repellat consequatur aut",
            "sub_title": "amet voluptatem corrupti",
            "describe": "Aperiam exercitationem accusamus maxime expedita. Veritatis aut velit perferendis hic. Possimus maxime necessitatibus atque. Quasi nam maxime molestiae asperiores qui et id.",
            "describe_en": "Quae veritatis quaerat placeat harum dolorum. Aliquam amet voluptas est earum dolores beatae voluptatem.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?20695",
            "parent_id": 3,
            "level": 1,
            "created_at": "2020-08-24 23:41:37",
            "updated_at": "2020-08-29 15:47:28",
            "parent_title": "ipsa id dolores"
        },
        {
            "id": 10,
            "name": "睫毛膏",
            "slug": "esse-dolores",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?48705",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?34645",
            "title": "iste deleniti in",
            "title_en": "expedita harum velit",
            "sub_title": "ea quia inventore",
            "describe": "Dicta quisquam quia velit odio. Facere nemo dolorem sint esse. Inventore delectus ratione provident quaerat laboriosam amet doloribus. Quasi maxime minus ipsa.",
            "describe_en": "Ea quod ut ad est. In et quia quas nihil quo. Neque assumenda quod sit hic delectus. Commodi et et qui a quisquam ullam.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?95284",
            "parent_id": 19,
            "level": 1,
            "created_at": "2020-09-07 14:08:05",
            "updated_at": "2020-08-27 21:22:13",
            "parent_title": "esse in id"
        },
        {
            "id": 11,
            "name": "身体护理",
            "slug": "odit-accusantium",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?26527",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?98162",
            "title": "voluptatem inventore et",
            "title_en": "et aliquid rerum",
            "sub_title": "nihil non velit",
            "describe": "Dicta laudantium culpa ab et voluptatibus tempora quo. Ullam esse repellat ut aliquam. Ullam soluta officia reprehenderit libero nihil cum aspernatur.",
            "describe_en": "Qui esse nostrum corrupti. Eum quia illum quia cupiditate architecto unde. Iste ut aperiam mollitia. Hic saepe molestiae cupiditate fuga.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?43769",
            "parent_id": 18,
            "level": 1,
            "created_at": "2020-08-23 14:23:24",
            "updated_at": "2020-08-15 16:57:06",
            "parent_title": "dicta doloribus consectetur"
        },
        {
            "id": 12,
            "name": "护肤系列",
            "slug": "ipsa-qui",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?92099",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?71766",
            "title": "laborum accusamus molestiae",
            "title_en": "ut doloribus alias",
            "sub_title": "in veritatis occaecati",
            "describe": "Omnis totam aut atque explicabo eos. Aut unde optio et sit nostrum. Praesentium odio et similique ut. Enim dolor accusamus facilis. Amet ipsum aut officiis at debitis et.",
            "describe_en": "Doloribus dolor magni consequatur qui enim. Et sed corporis voluptatem eveniet architecto aut expedita iste. Voluptatum dolor vel sed. Magnam eum corrupti ad non qui rem ut.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?78769",
            "parent_id": 6,
            "level": 1,
            "created_at": "2020-08-20 03:47:10",
            "updated_at": "2020-08-26 22:19:18",
            "parent_title": "unde at explicabo"
        },
        {
            "id": 13,
            "name": "精油",
            "slug": "voluptatibus-et",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?80592",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?54717",
            "title": "expedita eaque asperiores",
            "title_en": "sit voluptatem reprehenderit",
            "sub_title": "error est quia",
            "describe": "Quas cumque velit itaque omnis ut qui sit. Saepe earum quasi eos et eos numquam neque saepe. Ex similique ipsa quis natus.",
            "describe_en": "Omnis aut occaecati quis vel. Ratione doloribus ea vitae maiores porro perspiciatis adipisci.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?79308",
            "parent_id": 13,
            "level": 1,
            "created_at": "2020-08-13 20:22:22",
            "updated_at": "2020-09-07 06:42:38",
            "parent_title": "expedita eaque asperiores"
        },
        {
            "id": 14,
            "name": "精油",
            "slug": "consequatur-reiciendis",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?35395",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?52798",
            "title": "ut corrupti nemo",
            "title_en": "autem fugit voluptatem",
            "sub_title": "temporibus repellendus consequatur",
            "describe": "Eius reprehenderit dolorem ipsa. Velit quisquam quos consequatur a. Modi nihil numquam eum vel consequatur cumque. Aut adipisci excepturi omnis sed quae distinctio aut omnis.",
            "describe_en": "Sed ipsum reiciendis eveniet vitae ut voluptatibus libero. Consequuntur totam animi voluptatum inventore odio. Quibusdam tempora tempora quo necessitatibus quo exercitationem sit veniam.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?44508",
            "parent_id": 2,
            "level": 1,
            "created_at": "2020-09-02 14:04:35",
            "updated_at": "2020-08-30 21:15:24",
            "parent_title": "non et esse"
        },
        {
            "id": 15,
            "name": "BB霜",
            "slug": "aperiam-saepe",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?71480",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?78914",
            "title": "est molestias similique",
            "title_en": "eos molestias nisi",
            "sub_title": "voluptas esse earum",
            "describe": "Dolor eius nisi at sapiente possimus. Dolorem occaecati ab qui enim accusantium a. Velit quibusdam voluptas ut magnam similique voluptate possimus.",
            "describe_en": "Atque ea quas totam optio illo. Qui vel natus eos. Ut voluptatem omnis quo maiores consequatur ipsam. Ea qui consequatur quibusdam.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?99852",
            "parent_id": 5,
            "level": 1,
            "created_at": "2020-08-15 10:37:04",
            "updated_at": "2020-08-22 11:47:14",
            "parent_title": "unde tempore quam"
        },
        {
            "id": 16,
            "name": "护肤系列",
            "slug": "possimus-laboriosam",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?52528",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?82543",
            "title": "iusto similique quasi",
            "title_en": "eveniet facere minima",
            "sub_title": "iure dolores autem",
            "describe": "Perspiciatis sit quo aut in commodi molestias. Nobis et quisquam aspernatur quis eum. Labore ut eum optio et voluptatum et asperiores consectetur.",
            "describe_en": "Modi molestiae aut vel sunt sit qui. Modi repudiandae laborum animi officiis quis vero. Soluta provident ab est nobis et alias voluptatem in.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?34431",
            "parent_id": 8,
            "level": 1,
            "created_at": "2020-08-23 22:31:41",
            "updated_at": "2020-08-13 09:23:54",
            "parent_title": "quaerat et ut"
        },
        {
            "id": 17,
            "name": "套装C",
            "slug": "optio-qui",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?56627",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?40476",
            "title": "omnis sit animi",
            "title_en": "tenetur voluptas ut",
            "sub_title": "alias nostrum ut",
            "describe": "Itaque reprehenderit pariatur soluta eum autem. Labore voluptatum voluptas amet hic.",
            "describe_en": "Est sint harum quia officia. Occaecati qui iste quisquam fugiat. Est nesciunt in cupiditate quia at quis corporis delectus.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?50060",
            "parent_id": 19,
            "level": 1,
            "created_at": "2020-09-06 22:21:31",
            "updated_at": "2020-08-26 19:28:55",
            "parent_title": "esse in id"
        },
        {
            "id": 18,
            "name": "唇膏",
            "slug": "nulla-cupiditate",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?41643",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?75489",
            "title": "dicta doloribus consectetur",
            "title_en": "accusamus facilis nihil",
            "sub_title": "est doloribus cumque",
            "describe": "Illum voluptatem ut voluptatem ut cum incidunt pariatur. Consequatur minus enim consequatur quasi. Odio dolorem animi distinctio.",
            "describe_en": "Dolore est earum at officia dolorem ipsum odit soluta. Delectus impedit minus omnis eligendi ad repellat maiores modi. Aut culpa deleniti eveniet rerum quia assumenda. Ullam sunt fuga quae nemo et.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?93111",
            "parent_id": 29,
            "level": 1,
            "created_at": "2020-08-31 17:46:15",
            "updated_at": "2020-09-01 12:38:46",
            "parent_title": "voluptate omnis tempore"
        },
        {
            "id": 19,
            "name": "香水",
            "slug": "qui-consequatur",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?28406",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?35860",
            "title": "esse in id",
            "title_en": "numquam voluptas autem",
            "sub_title": "vel et aut",
            "describe": "In amet dolores et voluptatum sapiente qui est qui. Cumque omnis expedita doloribus. Earum illum dolorum quo labore. Ipsa delectus sapiente placeat repellat vero ut velit.",
            "describe_en": "Ea ex voluptatibus aliquam dolor velit et corporis. Vel et et reiciendis qui unde blanditiis qui.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?21252",
            "parent_id": 2,
            "level": 1,
            "created_at": "2020-09-02 08:46:41",
            "updated_at": "2020-08-29 21:41:14",
            "parent_title": "non et esse"
        },
        {
            "id": 20,
            "name": "粉底液",
            "slug": "id-quo",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?80223",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?99507",
            "title": "culpa expedita aut",
            "title_en": "voluptatum quaerat sit",
            "sub_title": "eaque sed sit",
            "describe": "Aliquid aut commodi eum voluptate deserunt. Eos in consequatur error dolor eaque nemo. Architecto vel corporis aut nobis.",
            "describe_en": "Accusamus repellendus reiciendis eum sed eum ut. Et doloremque aspernatur necessitatibus id iusto quidem. Repudiandae quis est ut excepturi omnis debitis dolorem.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?41092",
            "parent_id": 30,
            "level": 1,
            "created_at": "2020-09-08 22:35:57",
            "updated_at": "2020-08-12 18:02:24",
            "parent_title": "voluptatem vitae quas"
        },
        {
            "id": 21,
            "name": "隔离",
            "slug": "modi-officiis",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?11130",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?11712",
            "title": "odit voluptas unde",
            "title_en": "non architecto voluptatem",
            "sub_title": "facere illo odit",
            "describe": "Distinctio id est deleniti unde. Quia facilis ea delectus et quia. Esse et quae ea aut qui. Vel veniam illo est. Nam est harum veniam placeat et repellat ut.",
            "describe_en": "Velit aut debitis provident voluptatem non enim sit. Voluptatem aut debitis quasi deleniti. Recusandae rerum non quia quasi perspiciatis eaque. Id nulla est eligendi.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?87214",
            "parent_id": 29,
            "level": 1,
            "created_at": "2020-08-11 16:34:56",
            "updated_at": "2020-08-22 15:42:04",
            "parent_title": "voluptate omnis tempore"
        },
        {
            "id": 22,
            "name": "护肤系列",
            "slug": "sunt-omnis",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?70746",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?18479",
            "title": "ullam commodi qui",
            "title_en": "eos libero harum",
            "sub_title": "dolor excepturi delectus",
            "describe": "Placeat accusamus sed beatae possimus. Molestias qui voluptatum mollitia quis ut. Earum culpa similique mollitia maiores consequuntur quae asperiores.",
            "describe_en": "Aut voluptas alias pariatur id ad fugiat hic. Molestias veritatis eligendi aut ipsa. Voluptatibus odit voluptas aut recusandae autem nobis aspernatur.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?98600",
            "parent_id": 24,
            "level": 1,
            "created_at": "2020-09-10 11:31:52",
            "updated_at": "2020-08-19 18:48:32",
            "parent_title": "dolorem reprehenderit veritatis"
        },
        {
            "id": 23,
            "name": "眼霜",
            "slug": "excepturi-qui",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?38573",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?32185",
            "title": "numquam quia ut",
            "title_en": "sunt placeat iusto",
            "sub_title": "quod perspiciatis veniam",
            "describe": "Porro magnam sed dolorem quasi. Doloribus harum necessitatibus omnis id. Non ut necessitatibus sed atque eos. Aliquam aut repudiandae nisi assumenda sit magnam maiores.",
            "describe_en": "Quia qui fugit veniam natus mollitia odio. Officiis animi porro quidem recusandae exercitationem voluptatibus. Modi illo molestiae quibusdam assumenda.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?22224",
            "parent_id": 15,
            "level": 1,
            "created_at": "2020-08-29 19:07:11",
            "updated_at": "2020-09-02 23:02:27",
            "parent_title": "est molestias similique"
        },
        {
            "id": 24,
            "name": "精油",
            "slug": "quas-sequi",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?80829",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?30684",
            "title": "dolorem reprehenderit veritatis",
            "title_en": "ad veniam quis",
            "sub_title": "repellat et quaerat",
            "describe": "Vel voluptatum dolorem debitis. Facilis soluta labore laudantium.",
            "describe_en": "Architecto quae soluta nihil sit at non. Magnam impedit dolor commodi maiores. Ut possimus eius velit rerum quis.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?50438",
            "parent_id": 20,
            "level": 1,
            "created_at": "2020-08-24 21:01:20",
            "updated_at": "2020-09-10 08:27:33",
            "parent_title": "culpa expedita aut"
        },
        {
            "id": 25,
            "name": "套装系列",
            "slug": "voluptates-sint",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?13343",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?26290",
            "title": "voluptas aspernatur tempora",
            "title_en": "ut tenetur quae",
            "sub_title": "quia nam aperiam",
            "describe": "Autem autem iure nisi reiciendis. Excepturi earum voluptatem recusandae. Nihil corrupti cupiditate saepe excepturi ut eveniet. Aut voluptas incidunt tempore.",
            "describe_en": "Aliquid qui sed eaque vel et nulla. Ut suscipit tempora voluptatibus sed. Deserunt voluptate officia maxime cupiditate architecto quis accusamus. Et et ullam iusto nulla.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?80756",
            "parent_id": 3,
            "level": 1,
            "created_at": "2020-08-16 23:57:25",
            "updated_at": "2020-08-14 02:40:54",
            "parent_title": "ipsa id dolores"
        },
        {
            "id": 26,
            "name": "面膜",
            "slug": "et-laboriosam",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?18191",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?99526",
            "title": "non ea est",
            "title_en": "sint omnis dicta",
            "sub_title": "nihil non magni",
            "describe": "Laboriosam sit dicta aut suscipit. Quasi aut sit id nesciunt tenetur repellendus temporibus nesciunt. Eos in cumque dolores odio corrupti omnis voluptatem.",
            "describe_en": "Accusamus similique omnis labore ut nostrum. Hic atque cumque eum omnis laboriosam nesciunt. Sit iusto aut autem numquam sunt et.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?13166",
            "parent_id": 25,
            "level": 1,
            "created_at": "2020-08-31 07:29:08",
            "updated_at": "2020-08-26 15:46:31",
            "parent_title": "voluptas aspernatur tempora"
        },
        {
            "id": 27,
            "name": "唇膏",
            "slug": "omnis-nesciunt",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?61425",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?90269",
            "title": "nisi fugit voluptas",
            "title_en": "sit cumque eligendi",
            "sub_title": "omnis deleniti numquam",
            "describe": "Veritatis dolor optio minus assumenda ad fugiat. Sit ullam doloremque voluptatem qui. Sint sint harum id totam distinctio laboriosam ea.",
            "describe_en": "Ipsum qui harum quia quae sit incidunt. Consequuntur ipsum aliquam earum ea commodi ipsam voluptas. Deserunt voluptatem rerum repellat provident impedit. Officia a alias neque quos sit sapiente et.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?80279",
            "parent_id": 1,
            "level": 1,
            "created_at": "2020-08-18 11:10:31",
            "updated_at": "2020-09-04 02:25:55",
            "parent_title": "alias blanditiis cupiditate"
        },
        {
            "id": 28,
            "name": "面膜",
            "slug": "dolor-sed",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?53999",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?24584",
            "title": "dolor ad quidem",
            "title_en": "odit officia sint",
            "sub_title": "accusantium est aliquam",
            "describe": "Quo dolor fuga ipsum voluptas esse culpa exercitationem. Ut a vero aut vel doloribus. Molestiae distinctio qui dolor assumenda libero nisi.",
            "describe_en": "Reiciendis ipsum illo molestias libero pariatur et ipsa. Voluptatem vitae commodi hic sit incidunt. Asperiores sit id qui quae commodi similique. Harum odio sequi magni saepe.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?55963",
            "parent_id": 4,
            "level": 1,
            "created_at": "2020-08-24 02:13:24",
            "updated_at": "2020-08-15 01:43:37",
            "parent_title": "minima et esse"
        },
        {
            "id": 29,
            "name": "洁面",
            "slug": "beatae-eligendi",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?75110",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?13212",
            "title": "voluptate omnis tempore",
            "title_en": "molestiae quia doloremque",
            "sub_title": "eius est vitae",
            "describe": "Voluptas quis eaque optio quo. Asperiores aut quae quod molestiae omnis. Voluptas quaerat sunt et ex. Quo sint facere ducimus hic rerum dolorum.",
            "describe_en": "Ipsam autem alias tempora voluptates pariatur assumenda et nesciunt. Est nobis magnam quia et numquam. Est qui voluptate officiis facilis natus.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?53152",
            "parent_id": 25,
            "level": 1,
            "created_at": "2020-08-24 21:51:04",
            "updated_at": "2020-08-30 12:46:09",
            "parent_title": "voluptas aspernatur tempora"
        },
        {
            "id": 30,
            "name": "眼霜",
            "slug": "quo-vel",
            "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?40508",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?92037",
            "title": "voluptatem vitae quas",
            "title_en": "a aut libero",
            "sub_title": "nam ex perspiciatis",
            "describe": "Non hic et iste. Necessitatibus vitae quia soluta cupiditate. Iste omnis dolor placeat est laboriosam consectetur.",
            "describe_en": "Earum pariatur perferendis autem harum velit et quia est. Velit accusantium aut dolores rerum doloribus soluta sit. Aut voluptas nihil eos quasi qui ducimus magnam.",
            "describe_img": "https:\/\/lorempixel.com\/640\/480\/?91062",
            "parent_id": 3,
            "level": 1,
            "created_at": "2020-09-08 21:55:48",
            "updated_at": "2020-08-21 07:04:17",
            "parent_title": "ipsa id dolores"
        }
    ],
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/product_category`


<!-- END_eb9c398471efceb42098dee938d34a4f -->

<!-- START_780e33b02e03b4552400dedc5e68f35e -->
## get product of product category
获取对应类别下的产品

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/product_category/1?category_slug=porro" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product_category/1"
);

let params = {
    "category_slug": "porro",
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
    "data": [],
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/product_category/{category_slug}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `category_slug` |  required  | 分类slug

<!-- END_780e33b02e03b4552400dedc5e68f35e -->

<!-- START_e74135bde1e41803ad4087410acd02b8 -->
## Get product category story
获取产品分类故事

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/category_story/1?category_slug=voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category_story/1"
);

let params = {
    "category_slug": "voluptatem",
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
    "data": [],
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/category_story/{category_slug}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `category_slug` |  required  | 分类slug

<!-- END_e74135bde1e41803ad4087410acd02b8 -->

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
    "http://localhost/api/shop_carts/1?type=aspernatur&product_id=tenetur&amount=incidunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/shop_carts/1"
);

let params = {
    "type": "aspernatur",
    "product_id": "tenetur",
    "amount": "incidunt",
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
    "http://localhost/api/shop_carts/1?product_id=autem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/shop_carts/1"
);

let params = {
    "product_id": "autem",
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


<!-- START_cac6efe827c80cbcea0782fd4fe52e51 -->
## get the house category list
获取the house 分类列表

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/the_house/category_list" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/the_house/category_list"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/the_house/category_list`


<!-- END_cac6efe827c80cbcea0782fd4fe52e51 -->

<!-- START_6a7694a9af351507e21a51e735ffaece -->
## get all the houses
获取所有的the house和对应的分类

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/the_house/all" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/the_house/all"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/the_house/all`


<!-- END_6a7694a9af351507e21a51e735ffaece -->

<!-- START_a85c4057c3c539f382f989f5a186eb79 -->
## get the house by category
按照分类得slug获取 the house

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/the_house/list/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/the_house/list/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/the_house/list/{category_slug}`


<!-- END_a85c4057c3c539f382f989f5a186eb79 -->

<!-- START_d773caffc77cb8034a7452fa46565c47 -->
## get the house detail
获取get house详情

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/the_house/detail/1?%24the_house_slug=possimus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/the_house/detail/1"
);

let params = {
    "$the_house_slug": "possimus",
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
`GET api/the_house/detail/{the_house_slug}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `$the_house_slug` |  optional  | 

<!-- END_d773caffc77cb8034a7452fa46565c47 -->

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
    -d '{"province":"dolorem","city":"non","district":"repellat","address":"eligendi","zip":18,"contact_name":"nihil","contact_phone":18}'

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
    "province": "dolorem",
    "city": "non",
    "district": "repellat",
    "address": "eligendi",
    "zip": 18,
    "contact_name": "nihil",
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
    "http://localhost/api/user_addresses/1?province=ut&city=architecto&district=eos&address=incidunt&zip=ea&contact_name=rerum&contact_phone=unde" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_addresses/1"
);

let params = {
    "province": "ut",
    "city": "architecto",
    "district": "eos",
    "address": "incidunt",
    "zip": "ea",
    "contact_name": "rerum",
    "contact_phone": "unde",
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
    "http://localhost/api/user_profile?profile_id=officia&phone=excepturi&real_name=dicta&sex=dolorem&birthday=minus&age=voluptas&province=ipsum&city=unde&district=id&address=qui&zip=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_profile"
);

let params = {
    "profile_id": "officia",
    "phone": "excepturi",
    "real_name": "dicta",
    "sex": "dolorem",
    "birthday": "minus",
    "age": "voluptas",
    "province": "ipsum",
    "city": "unde",
    "district": "id",
    "address": "qui",
    "zip": "qui",
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
绑定上级

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/api/member_code/bind_parent" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"code":"tempore"}'

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
    "code": "tempore"
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
    "http://localhost/api/wish_list?product_id=modi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/wish_list"
);

let params = {
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
    "http://localhost/api/wish_list?product_id=velit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/wish_list"
);

let params = {
    "product_id": "velit",
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
## Alipay gateway pay request
发起支付宝网关支付请求(前端)

> Example request:

```bash
curl -X GET \
    -G "http://localhost/alipay/bank_gateway/pay?no=nulla&total_amount=iusto&payment_key=adipisci" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/alipay/bank_gateway/pay"
);

let params = {
    "no": "nulla",
    "total_amount": "iusto",
    "payment_key": "adipisci",
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
## Alipay gateway return
支付宝网关支付-同步跳转(前端)

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
## Alipay gateway notify
支付宝网关支付-异步通知(服务端)

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
    -G "http://localhost/alipay/aop_page/pay?no=magnam&total_amount=aut&payment_key=ipsam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/alipay/aop_page/pay"
);

let params = {
    "no": "magnam",
    "total_amount": "aut",
    "payment_key": "ipsam",
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
    -G "http://localhost/alipay/legacy_express/pay?no=nobis&total_amount=laboriosam&payment_key=amet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/alipay/legacy_express/pay"
);

let params = {
    "no": "nobis",
    "total_amount": "laboriosam",
    "payment_key": "amet",
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
    -G "http://localhost/unionpay/pay?no=voluptate&total_amount=dolorem&payment_key=ex" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/unionpay/pay"
);

let params = {
    "no": "voluptate",
    "total_amount": "dolorem",
    "payment_key": "ex",
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
    -G "http://localhost/api/response_code?10001=eum&10003=in&20001=officia&40001=eligendi&40003=officia&40004=nisi&40005=ab&50001=impedit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/response_code"
);

let params = {
    "10001": "eum",
    "10003": "in",
    "20001": "officia",
    "40001": "eligendi",
    "40003": "officia",
    "40004": "nisi",
    "40005": "ab",
    "50001": "impedit",
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


> Example response (404):

```json
{
    "message": ""
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

<!-- START_d87b514e0b2d661024b3fe01f18fc23c -->
## Get assetImgs list
获取首页静态资源列表

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/asset_img?page=ut&page_limit=nemo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/asset_img"
);

let params = {
    "page": "ut",
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

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/asset_img?img=est&img_location=autem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/asset_img"
);

let params = {
    "img": "est",
    "img_location": "autem",
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


<!-- END_85bac2915edb3565ff46f67e3937c589 -->


