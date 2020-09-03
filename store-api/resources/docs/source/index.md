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
    -G "http://localhost/admin/alipay/legacy_express?page=minima&page_limit=aperiam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/legacy_express"
);

let params = {
    "page": "minima",
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
    -d '{"items":[{"pid":"voluptates","key":"modi","seller_email":"voluptatem"}]}'

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
            "pid": "voluptates",
            "key": "modi",
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

> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/alipay/legacy_express/1?id=ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/legacy_express/1"
);

let params = {
    "id": "ut",
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
    "http://localhost/admin/alipay/legacy_express/status/1?id=inventore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/alipay/legacy_express/status/1"
);

let params = {
    "id": "inventore",
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
    -G "http://localhost/admin/category_stories?page=id&page_limit=eius" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories"
);

let params = {
    "page": "id",
    "page_limit": "eius",
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
    "http://localhost/admin/category_stories?title=ea&title_en=commodi&description=nihil&description_en=voluptatem&banner=maiores&product_category_id=inventore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories"
);

let params = {
    "title": "ea",
    "title_en": "commodi",
    "description": "nihil",
    "description_en": "voluptatem",
    "banner": "maiores",
    "product_category_id": "inventore",
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
    "http://localhost/admin/category_stories/1?title=maiores&title_en=doloribus&description=et&description_en=natus&banner=rem&product_category_id=tenetur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories/1"
);

let params = {
    "title": "maiores",
    "title_en": "doloribus",
    "description": "et",
    "description_en": "natus",
    "banner": "rem",
    "product_category_id": "tenetur",
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
    -G "http://localhost/admin/logs/1?page=minus&page_limit=distinctio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/logs/1"
);

let params = {
    "page": "minus",
    "page_limit": "distinctio",
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
    "http://localhost/admin/logs/1?ids=sit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/logs/1"
);

let params = {
    "ids": "sit",
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

#[ADMIN] Order

订单管理
<!-- START_abed5cfa021d6e9a60379988984f2b8f -->
## Get order list
获取订单列表

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/order?page=rerum&page_limit=iste" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order"
);

let params = {
    "page": "rerum",
    "page_limit": "iste",
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
    "http://localhost/admin/order?page=suscipit&page_limit=ipsa&username=velit&order_no=qui&order_status=deserunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order"
);

let params = {
    "page": "suscipit",
    "page_limit": "ipsa",
    "username": "velit",
    "order_no": "qui",
    "order_status": "deserunt",
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
    -d '{"refund_status":"sed","ship_status":"autem","status":"quia"}'

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
    "refund_status": "sed",
    "ship_status": "autem",
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

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/product?page=beatae&page_limit=debitis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product"
);

let params = {
    "page": "beatae",
    "page_limit": "debitis",
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
    "http://localhost/admin/product?product_category_id=error&product_name=et&product_name_en=qui&thumbnail=commodi&slug=consequuntur&short_description=doloribus&short_description_en=in&price=autem&sale_price=omnis&stock=est&seo_title=iusto&seo_keyword=impedit&seo_description=dolor&benefit=tempora&benefit_en=excepturi&tech_description=veniam&tech_description_en=aspernatur&description=et&description_en=omnis&usage=reprehenderit&usage_en=autem&main_image=commodi&main_image_2=eum&benefit_image=quo&product_video=vitae&status=id&rating=aliquid&sold_count=minus&review_count=consequuntur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product"
);

let params = {
    "product_category_id": "error",
    "product_name": "et",
    "product_name_en": "qui",
    "thumbnail": "commodi",
    "slug": "consequuntur",
    "short_description": "doloribus",
    "short_description_en": "in",
    "price": "autem",
    "sale_price": "omnis",
    "stock": "est",
    "seo_title": "iusto",
    "seo_keyword": "impedit",
    "seo_description": "dolor",
    "benefit": "tempora",
    "benefit_en": "excepturi",
    "tech_description": "veniam",
    "tech_description_en": "aspernatur",
    "description": "et",
    "description_en": "omnis",
    "usage": "reprehenderit",
    "usage_en": "autem",
    "main_image": "commodi",
    "main_image_2": "eum",
    "benefit_image": "quo",
    "product_video": "vitae",
    "status": "id",
    "rating": "aliquid",
    "sold_count": "minus",
    "review_count": "consequuntur",
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
    "http://localhost/admin/product/1?product_category_id=nisi&product_name=fugiat&product_name_en=iusto&thumbnail=asperiores&slug=officiis&short_description=nostrum&short_description_en=libero&price=velit&sale_price=autem&stock=suscipit&seo_title=sapiente&seo_keyword=eos&seo_description=est&benefit=rerum&benefit_en=culpa&tech_description=distinctio&tech_description_en=soluta&description=incidunt&description_en=ut&usage=voluptas&usage_en=voluptas&main_image=ut&main_image_2=enim&benefit_image=harum&product_video=occaecati&status=delectus&rating=et&sold_count=aut&review_count=culpa" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product/1"
);

let params = {
    "product_category_id": "nisi",
    "product_name": "fugiat",
    "product_name_en": "iusto",
    "thumbnail": "asperiores",
    "slug": "officiis",
    "short_description": "nostrum",
    "short_description_en": "libero",
    "price": "velit",
    "sale_price": "autem",
    "stock": "suscipit",
    "seo_title": "sapiente",
    "seo_keyword": "eos",
    "seo_description": "est",
    "benefit": "rerum",
    "benefit_en": "culpa",
    "tech_description": "distinctio",
    "tech_description_en": "soluta",
    "description": "incidunt",
    "description_en": "ut",
    "usage": "voluptas",
    "usage_en": "voluptas",
    "main_image": "ut",
    "main_image_2": "enim",
    "benefit_image": "harum",
    "product_video": "occaecati",
    "status": "delectus",
    "rating": "et",
    "sold_count": "aut",
    "review_count": "culpa",
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
    -G "http://localhost/admin/product_categories?page=asperiores&page_limit=rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories"
);

let params = {
    "page": "asperiores",
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
    "http://localhost/admin/product_categories?title=sequi&title_en=maiores&describe=porro&describe_en=alias&banner=quia&description=totam&description_en=dolorum&img=dolorem&parent_id=ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories"
);

let params = {
    "title": "sequi",
    "title_en": "maiores",
    "describe": "porro",
    "describe_en": "alias",
    "banner": "quia",
    "description": "totam",
    "description_en": "dolorum",
    "img": "dolorem",
    "parent_id": "ut",
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
    `title` |  required  | 分类名称
    `title_en` |  optional  | 分类英文名称
    `describe` |  optional  | 分类描述
    `describe_en` |  optional  | 英文分类描述
    `banner` |  optional  | 分类banner图
    `description` |  optional  | 分类简介
    `description_en` |  optional  | 分类英文简介
    `img` |  optional  | 分类简介图
    `parent_id` |  optional  | 上级分类ID

<!-- END_80621ad47a9cd3c202d602c981a133f2 -->

<!-- START_2eefe0a7de769c042b02be369b939658 -->
## Edit product category
编辑产品分类

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/product_categories/1?title=dolore&title_en=est&describe=hic&describe_en=suscipit&banner=in&description=et&description_en=aut&img=veritatis&parent_id=hic" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories/1"
);

let params = {
    "title": "dolore",
    "title_en": "est",
    "describe": "hic",
    "describe_en": "suscipit",
    "banner": "in",
    "description": "et",
    "description_en": "aut",
    "img": "veritatis",
    "parent_id": "hic",
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
    `title` |  optional  | 分类名称
    `title_en` |  optional  | 分类英文名称
    `describe` |  optional  | 分类描述
    `describe_en` |  optional  | 英文分类描述
    `banner` |  optional  | 分类banner图
    `description` |  optional  | 分类简介
    `description_en` |  optional  | 分类英文简介
    `img` |  optional  | 分类简介图
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
    "http://localhost/admin/product_sku?title=inventore&description=consequatur&price=qui&stock=voluptatem&product_id=magnam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_sku"
);

let params = {
    "title": "inventore",
    "description": "consequatur",
    "price": "qui",
    "stock": "voluptatem",
    "product_id": "magnam",
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
    "http://localhost/admin/product_sku/1?title=omnis&description=consequatur&price=iste&stock=qui&product_id=reiciendis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_sku/1"
);

let params = {
    "title": "omnis",
    "description": "consequatur",
    "price": "iste",
    "stock": "qui",
    "product_id": "reiciendis",
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
    -G "http://localhost/admin/user?username=debitis&page=blanditiis&page_limit=exercitationem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user"
);

let params = {
    "username": "debitis",
    "page": "blanditiis",
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
    "http://localhost/admin/user/1?name=eos&email=officia&phone=quas&avatar=ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/1"
);

let params = {
    "name": "eos",
    "email": "officia",
    "phone": "quas",
    "avatar": "ut",
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
    "http://localhost/admin/user/reset_password/1?oldPassword=repellat&newPassword=quia&newPassword_confirmation=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/reset_password/1"
);

let params = {
    "oldPassword": "repellat",
    "newPassword": "quia",
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
    "http://localhost/admin/user_addresses?province=adipisci&city=optio&district=cupiditate&address=sint&zip=aut&contact_name=deserunt&contact_phone=velit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses"
);

let params = {
    "province": "adipisci",
    "city": "optio",
    "district": "cupiditate",
    "address": "sint",
    "zip": "aut",
    "contact_name": "deserunt",
    "contact_phone": "velit",
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
    "http://localhost/admin/user_addresses/1?address_id=corrupti&province=dignissimos&city=illo&district=fugiat&address=rem&zip=iste&contact_name=eaque&contact_phone=libero" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses/1"
);

let params = {
    "address_id": "corrupti",
    "province": "dignissimos",
    "city": "illo",
    "district": "fugiat",
    "address": "rem",
    "zip": "iste",
    "contact_name": "eaque",
    "contact_phone": "libero",
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
    "http://localhost/admin/user_addresses/1?address_id=occaecati" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses/1"
);

let params = {
    "address_id": "occaecati",
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
    "http://localhost/admin/user_profiles/1?profile_id=iste" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_profiles/1"
);

let params = {
    "profile_id": "iste",
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
    "http://localhost/admin/user_profiles/1?profile_id=tempore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_profiles/1"
);

let params = {
    "profile_id": "tempore",
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

> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"suscipit","username":"dolore","password":"provident","captcha_key":"quia","captcha_code":"quaerat","password_question_id":16,"password_answer":"occaecati"}'

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
    "name": "suscipit",
    "username": "dolore",
    "password": "provident",
    "captcha_key": "quia",
    "captcha_code": "quaerat",
    "password_question_id": 16,
    "password_answer": "occaecati"
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

<!-- START_de9212b4bd813e07f73b53cc3bd13088 -->
## Get user password question
获取用户的密保问题

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/questions?username=vel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/questions"
);

let params = {
    "username": "vel",
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
        "username": "vel"
    },
    "code": 10001,
    "msg": "用户不存在"
}
```

### HTTP Request
`GET api/questions`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `username` |  required  | 用户名

<!-- END_de9212b4bd813e07f73b53cc3bd13088 -->

<!-- START_a925a8d22b3615f12fca79456d286859 -->
## Get a JWT via given credentials.

通过登录信息获取JWT凭证

> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"username":"sint","password":"eius"}'

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
    "username": "sint",
    "password": "eius"
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
    "http://localhost/api/password_reset?username=tempore&password_question_id=aut&password_answer=nihil&password=sunt&password_confirmation=quidem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/password_reset"
);

let params = {
    "username": "tempore",
    "password_question_id": "aut",
    "password_answer": "nihil",
    "password": "sunt",
    "password_confirmation": "quidem",
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
    -d '{"oldPassword":"eligendi","newPassword":"ipsa","newPassword_confirmation":"mollitia"}'

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
    "oldPassword": "eligendi",
    "newPassword": "ipsa",
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
    -G "http://localhost/api/order_details/1?no=reiciendis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/order_details/1"
);

let params = {
    "no": "reiciendis",
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
    -d '{"address_id":"iste","remark":"vel"}'

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
    "address_id": "iste",
    "remark": "vel"
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
        `remark` | string |  optional  | optional 订单备注
    
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
    -d '{"no":16}'

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
    "no": 16
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
<!-- START_eb9c398471efceb42098dee938d34a4f -->
## Get product category list
获取商品分类列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
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
            "slug": "ut-expedita",
            "title": "BB霜",
            "title_en": "eveniet soluta voluptas",
            "describe": "Quae aperiam quia illum voluptatem et rem adipisci. Non exercitationem eos fugit repellat.",
            "describe_en": "Et id voluptas atque cumque accusantium fugit qui. Numquam optio qui vero ullam aliquid magnam aut. Dolorum quo suscipit aut saepe cupiditate tempora non.",
            "banner": "null",
            "description": "Tenetur quo totam provident tempore perferendis eveniet.",
            "description_en": "Distinctio fugiat accusantium harum.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?49095",
            "parent_id": 6,
            "created_at": "2020-08-23 08:55:21",
            "updated_at": "2020-08-27 15:02:21",
            "parent_title": "防晒"
        },
        {
            "id": 2,
            "slug": "velit-tenetur",
            "title": "香水",
            "title_en": "at iure consectetur",
            "describe": "Accusantium cumque ut fugiat et reprehenderit et. Maxime debitis harum dolores sit. Occaecati quia molestiae amet alias sed odit. Et unde ipsum et est quo quia cumque.",
            "describe_en": "Ut ut quidem dignissimos iste officiis quisquam. Et qui enim error et. Impedit sed aliquid totam enim. Labore velit dignissimos temporibus voluptatem.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?61354",
            "description": "Eos sit beatae blanditiis nihil.",
            "description_en": "Qui rerum unde vel.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?95689",
            "parent_id": 9,
            "created_at": "2020-08-26 23:31:03",
            "updated_at": "2020-08-17 23:29:00",
            "parent_title": "唇膏"
        },
        {
            "id": 3,
            "slug": "quas-incidunt",
            "title": "精油",
            "title_en": "adipisci accusantium tempore",
            "describe": "Temporibus excepturi itaque consequatur saepe inventore. Animi ut et veniam vero voluptatem est. Similique enim dolores vitae ut. Maiores nemo aut iure.",
            "describe_en": "Id necessitatibus voluptatem eius vitae beatae. Quia et ipsa quia consequatur sapiente. Repellat corrupti consequatur ipsam ab est veniam. Nisi porro magnam dolorem ex labore.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?18407",
            "description": "Totam laborum nemo autem quo laborum dolore.",
            "description_en": "Id error velit asperiores eum repudiandae officia.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?72575",
            "parent_id": 13,
            "created_at": "2020-07-31 20:53:05",
            "updated_at": "2020-08-07 15:08:51",
            "parent_title": "隔离"
        },
        {
            "id": 4,
            "slug": "sint-excepturi",
            "title": "彩妆盘",
            "title_en": "provident qui modi",
            "describe": "Eos velit corporis eaque. Praesentium error esse temporibus excepturi. Aut explicabo deleniti pariatur quam voluptatibus.",
            "describe_en": "Quia ad non quisquam perferendis ut odio ea. Cupiditate mollitia atque laudantium sed necessitatibus error. Dolorem quo excepturi eligendi nihil. Alias quis quo commodi quod.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?39335",
            "description": "Vero voluptatem aspernatur omnis ipsam.",
            "description_en": "Adipisci similique similique consequatur.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?95050",
            "parent_id": 18,
            "created_at": "2020-08-23 03:10:02",
            "updated_at": "2020-08-21 09:14:52",
            "parent_title": "爽肤水"
        },
        {
            "id": 5,
            "slug": "tempora-consequatur",
            "title": "卸妆",
            "title_en": "ullam perspiciatis reiciendis",
            "describe": "Harum porro sed voluptatem est nihil repellat. Quia inventore ipsam est reprehenderit. Nihil non ad accusantium quo dolore.",
            "describe_en": "Rerum veritatis vel cum. Molestiae repellendus ea at molestias suscipit totam animi. Qui magnam modi non neque et quasi. Nostrum laudantium modi delectus est alias sunt.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?70527",
            "description": "Omnis necessitatibus est sed consectetur consequatur nemo.",
            "description_en": "Iusto illum molestiae dolorum.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?11882",
            "parent_id": 16,
            "created_at": "2020-08-10 17:23:49",
            "updated_at": "2020-08-20 08:07:08",
            "parent_title": "眼线"
        },
        {
            "id": 6,
            "slug": "voluptatem-voluptatum",
            "title": "防晒",
            "title_en": "culpa vero nihil",
            "describe": "Qui perspiciatis hic atque dolorum voluptas quae. Quidem quidem consequuntur voluptatem. Quos natus suscipit ea animi.",
            "describe_en": "Accusantium dolor corporis non rerum blanditiis. Natus ut esse et illo unde. Quia accusamus ut magnam officiis quasi magnam in. At voluptatum eligendi voluptates in perspiciatis voluptatum.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?66447",
            "description": "Et ut et enim.",
            "description_en": "Aut voluptas magnam saepe quia dolores.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?79722",
            "parent_id": 1,
            "created_at": "2020-07-29 04:16:33",
            "updated_at": "2020-08-25 19:22:36",
            "parent_title": "BB霜"
        },
        {
            "id": 7,
            "slug": "neque-non",
            "title": "男士护肤",
            "title_en": "molestiae nisi non",
            "describe": "Temporibus et illum non ratione est et. Qui accusamus consequatur impedit odit alias quo animi. Molestiae aut quas et.",
            "describe_en": "Officiis cupiditate ut quae assumenda culpa rerum. Nam quaerat pariatur repellendus ipsam ut voluptatem.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?11027",
            "description": "Quisquam praesentium magnam velit ut et.",
            "description_en": "Eius nihil libero neque eveniet voluptatem.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?30299",
            "parent_id": 8,
            "created_at": "2020-08-13 00:12:20",
            "updated_at": "2020-08-26 19:23:27",
            "parent_title": "精油"
        },
        {
            "id": 8,
            "slug": "inventore-omnis",
            "title": "精油",
            "title_en": "in quasi atque",
            "describe": "Voluptate dolores molestiae officiis et qui. Mollitia quia dignissimos suscipit perspiciatis. Deleniti voluptas voluptas dolor eum occaecati ea.",
            "describe_en": "Omnis modi omnis cum eos. Doloribus et error quod dolor et numquam. Voluptatum doloribus dignissimos voluptas aperiam inventore. Atque impedit ut doloribus quibusdam impedit.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?60947",
            "description": "Et culpa soluta velit.",
            "description_en": "Recusandae corporis pariatur voluptas deserunt quia.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?81479",
            "parent_id": 14,
            "created_at": "2020-08-16 09:49:58",
            "updated_at": "2020-08-10 16:22:44",
            "parent_title": "男士护肤"
        },
        {
            "id": 9,
            "slug": "sequi-eum",
            "title": "唇膏",
            "title_en": "repellat non modi",
            "describe": "Nostrum quas sed consequatur ullam nemo fugiat non consequatur. A inventore rerum repellendus beatae ratione et. Qui enim error rem tempore quo.",
            "describe_en": "Cupiditate ad aut libero assumenda minus aut. Voluptas nesciunt et asperiores. Inventore deleniti vel consequatur excepturi.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?91543",
            "description": "Natus consequuntur earum accusantium est.",
            "description_en": "Laboriosam perspiciatis atque qui.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?80439",
            "parent_id": 3,
            "created_at": "2020-08-25 13:59:02",
            "updated_at": "2020-07-31 14:59:11",
            "parent_title": "精油"
        },
        {
            "id": 10,
            "slug": "similique-et",
            "title": "防晒",
            "title_en": "dolores corporis aut",
            "describe": "Velit suscipit et cumque. Et inventore nisi ea itaque earum maxime. Mollitia omnis dolores laudantium repellendus. Exercitationem dolorem quia ut et aspernatur.",
            "describe_en": "Ex rerum iste dolorem facere aperiam omnis quo. Dicta eaque magnam quaerat et ex. Voluptas suscipit vel aut reiciendis ab iure. Voluptate incidunt voluptas modi.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?65473",
            "description": "Amet ab et atque in quam.",
            "description_en": "Quam consequatur et autem eligendi.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?54940",
            "parent_id": 13,
            "created_at": "2020-08-16 01:41:34",
            "updated_at": "2020-08-03 04:04:39",
            "parent_title": "隔离"
        },
        {
            "id": 11,
            "slug": "ratione-fugiat",
            "title": "防晒",
            "title_en": "at qui et",
            "describe": "Itaque reprehenderit soluta delectus maiores totam laudantium. Ipsam aut quia veritatis error. Possimus occaecati enim animi.",
            "describe_en": "Tempora neque quas enim eaque occaecati atque veritatis. Aut cupiditate placeat et aspernatur. Sed quam voluptas et non eveniet voluptatem.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?76703",
            "description": "Beatae illum quia sequi est.",
            "description_en": "Adipisci atque rerum ut voluptatem.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?19858",
            "parent_id": 16,
            "created_at": "2020-07-27 15:44:28",
            "updated_at": "2020-08-03 20:48:45",
            "parent_title": "眼线"
        },
        {
            "id": 12,
            "slug": "fugit-expedita",
            "title": "唇膏",
            "title_en": "aliquam quaerat quo",
            "describe": "Ut illum consequatur et. Qui blanditiis quo cum officiis sit. Qui sed accusamus perferendis minima. Nulla sed odio labore voluptas eos. Eligendi nulla accusantium fugiat voluptatem non at quo.",
            "describe_en": "Nulla quam iure iusto nulla. Consequatur molestiae molestiae sequi aut numquam nihil et. Odit nesciunt reprehenderit provident dolor dolorum dolorum maiores. In dolorem voluptatem modi aut.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?73787",
            "description": "Cum sed ea recusandae vel.",
            "description_en": "Ut et molestiae sint quis voluptate consequatur.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?50188",
            "parent_id": 13,
            "created_at": "2020-08-05 12:08:33",
            "updated_at": "2020-08-17 00:06:54",
            "parent_title": "隔离"
        },
        {
            "id": 13,
            "slug": "et-eius",
            "title": "隔离",
            "title_en": "veniam quod architecto",
            "describe": "Accusamus qui voluptate repudiandae et voluptas et sit. Nulla ab velit nihil autem assumenda. Laudantium enim est asperiores non sit.",
            "describe_en": "Sed necessitatibus velit qui unde. Eveniet eos debitis vel dolorem et perferendis. Mollitia quos impedit excepturi officiis perferendis excepturi quia odit. Impedit ut magnam vitae nam ut dolorum.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?93860",
            "description": "Iure eaque nesciunt libero veritatis voluptatem.",
            "description_en": "Excepturi perferendis ipsam et sapiente deserunt aliquam.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?28847",
            "parent_id": 3,
            "created_at": "2020-08-19 08:43:00",
            "updated_at": "2020-08-01 02:48:10",
            "parent_title": "精油"
        },
        {
            "id": 14,
            "slug": "sequi-cum",
            "title": "男士护肤",
            "title_en": "nam voluptatem aut",
            "describe": "Aliquam vel dolorem earum quo. Officia voluptatum qui est alias est. Maiores nulla ratione ratione et alias saepe.",
            "describe_en": "Voluptatem aut reprehenderit et. Autem ut iusto in officiis numquam soluta. Qui dolorum ea eligendi quo.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?80566",
            "description": "Aut tempore incidunt qui quisquam in.",
            "description_en": "Libero sit architecto et.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?14300",
            "parent_id": 11,
            "created_at": "2020-08-21 08:22:49",
            "updated_at": "2020-08-11 09:11:56",
            "parent_title": "防晒"
        },
        {
            "id": 15,
            "slug": "velit-id",
            "title": "男士护肤",
            "title_en": "laboriosam voluptatem cumque",
            "describe": "Quis tenetur praesentium temporibus rem consequatur sapiente. Quas repellat asperiores dolor. Dolores nesciunt illo fugiat et corrupti nihil est. Iusto vel consequatur tempore.",
            "describe_en": "Labore omnis dicta illo quis quas eveniet. Ex mollitia sunt dicta atque. Quia sint rerum non placeat nobis.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?21069",
            "description": "Pariatur aut eum quis accusamus.",
            "description_en": "Quasi ipsa consequuntur sed explicabo doloribus iusto.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?44933",
            "parent_id": 7,
            "created_at": "2020-07-29 09:00:55",
            "updated_at": "2020-08-17 22:34:48",
            "parent_title": "男士护肤"
        },
        {
            "id": 16,
            "slug": "ullam-sequi",
            "title": "眼线",
            "title_en": "vel doloremque quasi",
            "describe": "Sit quos eos quia unde. Sed atque sequi dicta eius iusto. Itaque maxime sed aperiam voluptates expedita quo qui nostrum.",
            "describe_en": "Voluptatibus autem non incidunt et itaque. Quos maiores deleniti quaerat ad. Vel sed reprehenderit ut ducimus. Praesentium dolorem quas dolore doloribus nemo numquam deleniti saepe.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?28026",
            "description": "Voluptas et iste facilis soluta sapiente nostrum.",
            "description_en": "Beatae voluptatum maiores ab.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?77656",
            "parent_id": 8,
            "created_at": "2020-07-31 12:53:22",
            "updated_at": "2020-08-21 18:57:16",
            "parent_title": "精油"
        },
        {
            "id": 17,
            "slug": "et-adipisci",
            "title": "唇膏",
            "title_en": "sapiente corporis ut",
            "describe": "Repudiandae dicta omnis illo cupiditate. Atque commodi minus itaque molestias. Architecto qui sint quas nulla inventore et. Dolore voluptatem repudiandae rem adipisci debitis.",
            "describe_en": "Culpa non quod incidunt sed cum. Fugit ducimus natus sed debitis placeat consequatur. Aperiam sunt nisi quis sunt magni.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?96653",
            "description": "Ab consequuntur necessitatibus laborum ut.",
            "description_en": "Architecto facere aut consequatur cupiditate.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?69473",
            "parent_id": 7,
            "created_at": "2020-08-20 10:19:58",
            "updated_at": "2020-08-08 04:08:31",
            "parent_title": "男士护肤"
        },
        {
            "id": 18,
            "slug": "molestiae-voluptatem",
            "title": "爽肤水",
            "title_en": "at et nihil",
            "describe": "Vitae repellendus animi nihil ad facere dicta quas. Autem dolorem qui nihil et cumque odit nesciunt tenetur. Quam quibusdam harum hic et deleniti deserunt.",
            "describe_en": "Odio et eaque debitis iusto. Hic provident quo maiores. Autem saepe ea qui qui quod fugit sapiente. Animi aut quibusdam pariatur ut est quo dolore.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?38240",
            "description": "Quidem aut et maiores.",
            "description_en": "Debitis dicta aut iste nam.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?93932",
            "parent_id": 4,
            "created_at": "2020-08-15 06:18:16",
            "updated_at": "2020-07-29 23:25:39",
            "parent_title": "彩妆盘"
        },
        {
            "id": 19,
            "slug": "hic-est",
            "title": "身体护理",
            "title_en": "rem aut quas",
            "describe": "Itaque cum accusamus modi labore. Amet aliquid est eum sed architecto ratione omnis. Omnis molestiae non illo est possimus harum doloribus.",
            "describe_en": "Nesciunt odit consequatur rem qui sint eos. Iste nobis architecto voluptate libero sint alias. Facere est sunt enim ea iste.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?98832",
            "description": "Vero autem sapiente minima aut consectetur laboriosam.",
            "description_en": "Impedit totam consequuntur aliquid error voluptas similique.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?53515",
            "parent_id": 9,
            "created_at": "2020-07-30 12:37:58",
            "updated_at": "2020-08-03 20:58:40",
            "parent_title": "唇膏"
        },
        {
            "id": 20,
            "slug": "debitis-molestiae",
            "title": "精华",
            "title_en": "perspiciatis sunt ut",
            "describe": "Ad sint nihil asperiores vero quia odio. Dolores est eius corrupti sequi dolores officia. Est et sint et eos perferendis.",
            "describe_en": "Dolorem enim omnis sint sit accusamus consequuntur. Exercitationem quia qui dolore qui sed animi. Veritatis fuga corrupti omnis nobis occaecati quasi numquam.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?70984",
            "description": "Odit perferendis aliquam quia porro perspiciatis eos.",
            "description_en": "Repudiandae nesciunt quo totam corrupti nesciunt.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?60210",
            "parent_id": 6,
            "created_at": "2020-08-15 09:23:09",
            "updated_at": "2020-08-10 18:37:53",
            "parent_title": "防晒"
        }
    ],
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/product_category`


<!-- END_eb9c398471efceb42098dee938d34a4f -->

<!-- START_dc538d69a8586a7a3c36d4393cee42e6 -->
## Get product list
获取商品列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
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
                "id": 2,
                "product_category_id": 11,
                "product_name": "黑钻焕肤水",
                "product_name_en": "magnam mollitia totam",
                "thumbnail": "http:\/\/wutang-store.oss-cn-shenzhen.aliyuncs.com\/Products\/JNcfYTXdbnB1n5RObE2uZufFcH1wG7McX62Y2uYD.png",
                "slug": "distinctio-assumenda",
                "short_description": "Ipsum consectetur optio beatae iusto enim eum.",
                "short_description_en": "Sed exercitationem facere distinctio odio. Est accusantium amet nobis. Aut iure consequatur esse a accusantium numquam.",
                "price": "5291.00",
                "sale_price": "1.00",
                "stock": 123,
                "spec": null,
                "seo_title": null,
                "seo_keyword": null,
                "seo_description": "Non nihil maxime sit.",
                "benefit": "Ut ex perspiciatis cupiditate maxime est quae saepe. Distinctio voluptatem magni voluptas aut sed. Velit quod rerum velit est ad pariatur quod id.",
                "benefit_en": "Laboriosam esse doloremque qui facere autem. Voluptas perspiciatis quia sit consequuntur eum non quae. Doloribus sed quos aut id alias hic ipsum provident. Maxime commodi distinctio aut dolore.",
                "tech_description": "Eveniet molestiae quisquam sed magni quos voluptas. Repellat optio deleniti est minima velit cum qui. Et incidunt hic deserunt velit vero.",
                "tech_description_en": "Optio itaque ratione occaecati ea quibusdam enim aut. Iure tempora enim enim odio. Magni voluptate autem commodi. Sint est eos id sequi et quod.",
                "description": "Molestias aut ut ab. Consequatur deserunt consequatur eos totam eum reprehenderit. Vel odio dolorem qui blanditiis sequi. Voluptatem est laboriosam quia rerum.",
                "description_en": "Id est autem incidunt totam. Et excepturi error perspiciatis maxime. Commodi cupiditate reiciendis sit blanditiis voluptate explicabo.",
                "usage": "Tempora non magni vel quia aliquam magnam. Ratione nemo velit ipsa dolor. Voluptatem eaque est debitis minima. Placeat facere voluptas aliquid et reiciendis modi itaque non.",
                "usage_en": "Voluptas enim fuga voluptatibus totam magni et. Recusandae ducimus fuga quae et veniam iste quasi. Voluptatum similique nobis ea inventore soluta eius eos.",
                "main_image": "http:\/\/wutang-store.oss-cn-shenzhen.aliyuncs.com\/Products\/B6VSCVgcpcQV6zbXeGnWPkM7RotweT3eYtQhPq1Q.jpeg",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?24715",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?36481",
                "product_video": "http:\/\/wutang-store.oss-cn-shenzhen.aliyuncs.com\/Products\/ITw2yykMIxYPUYH3auDvDTAbifJw6BMK3FNJpBoY.mp4",
                "status": 1,
                "rating": 8.9,
                "sold_count": 8834,
                "review_count": 6907,
                "created_at": "2020-08-03 16:23:12",
                "updated_at": "2020-09-01 10:02:24",
                "product_category": {
                    "id": 11,
                    "slug": "ratione-fugiat",
                    "title": "防晒",
                    "title_en": "at qui et",
                    "describe": "Itaque reprehenderit soluta delectus maiores totam laudantium. Ipsam aut quia veritatis error. Possimus occaecati enim animi.",
                    "describe_en": "Tempora neque quas enim eaque occaecati atque veritatis. Aut cupiditate placeat et aspernatur. Sed quam voluptas et non eveniet voluptatem.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?76703",
                    "description": "Beatae illum quia sequi est.",
                    "description_en": "Adipisci atque rerum ut voluptatem.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?19858",
                    "parent_id": 16,
                    "created_at": "2020-07-27 15:44:28",
                    "updated_at": "2020-08-03 20:48:45"
                }
            },
            {
                "id": 3,
                "product_category_id": 1,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "delectus aut et",
                "thumbnail": "http:\/\/wutang-store.oss-cn-shenzhen.aliyuncs.com\/Products\/ljS8wQ6sX7IyM7gbr9Y6H29WwhVRGTzxS8QjLghz.png",
                "slug": "dolores-qui",
                "short_description": "Illum assumenda facilis quod tempora quo vel.",
                "short_description_en": "Aut esse sit molestiae at aperiam. Asperiores qui odit aperiam maxime.",
                "price": "1197.00",
                "sale_price": "1.00",
                "stock": 894,
                "spec": null,
                "seo_title": "dolorem soluta in",
                "seo_keyword": "sint",
                "seo_description": "Magnam et dolor natus optio.",
                "benefit": "Qui exercitationem magni error facere quia distinctio ad. Et voluptatem aut atque nemo culpa. Voluptatem laudantium voluptatem qui architecto perferendis accusantium earum.",
                "benefit_en": "Eveniet cupiditate qui aut voluptas aut vel necessitatibus. Omnis autem dignissimos non velit. Amet ipsa voluptatibus culpa alias dignissimos sunt. Repudiandae quia sit aut consequuntur culpa qui.",
                "tech_description": "Inventore sed libero ut quam. Nemo dolorem dicta voluptas voluptatem exercitationem et ullam. Ipsum cupiditate quis ea ut aut. Ullam et quam molestiae rerum esse recusandae commodi.",
                "tech_description_en": "Et odio tempore tenetur fuga minima. Officia tempora velit at nemo et ex aperiam ipsam. Et temporibus voluptas aut velit aut aut.",
                "description": "Vel animi nostrum sapiente quia commodi. In incidunt ipsam voluptas aliquam. Sunt accusantium nulla ea qui occaecati aperiam fugit. Laboriosam aliquid et iste dolorem.",
                "description_en": "Alias ullam cumque laborum quaerat. Veritatis libero assumenda dolores pariatur pariatur fugiat nesciunt a. Praesentium vel voluptatibus atque natus saepe occaecati. Qui qui delectus molestiae eos similique consequatur asperiores consequatur.",
                "usage": "Architecto voluptate debitis doloribus ab rerum est. Possimus temporibus ut qui quas repellat. Rerum illo tempore atque.",
                "usage_en": "Praesentium sint excepturi earum enim reiciendis culpa. Voluptate autem autem et pariatur. Aperiam esse eaque beatae in dolore quia. Repellat praesentium culpa eligendi ipsam est et aut.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?90583",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?82990",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?42612",
                "product_video": "null",
                "status": 1,
                "rating": 8,
                "sold_count": 9040,
                "review_count": 9104,
                "created_at": "2020-08-19 23:25:37",
                "updated_at": "2020-09-01 11:15:46",
                "product_category": {
                    "id": 1,
                    "slug": "ut-expedita",
                    "title": "BB霜",
                    "title_en": "eveniet soluta voluptas",
                    "describe": "Quae aperiam quia illum voluptatem et rem adipisci. Non exercitationem eos fugit repellat.",
                    "describe_en": "Et id voluptas atque cumque accusantium fugit qui. Numquam optio qui vero ullam aliquid magnam aut. Dolorum quo suscipit aut saepe cupiditate tempora non.",
                    "banner": "null",
                    "description": "Tenetur quo totam provident tempore perferendis eveniet.",
                    "description_en": "Distinctio fugiat accusantium harum.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?49095",
                    "parent_id": 6,
                    "created_at": "2020-08-23 08:55:21",
                    "updated_at": "2020-08-27 15:02:21"
                }
            },
            {
                "id": 4,
                "product_category_id": 20,
                "product_name": "钻石焕活面膜",
                "product_name_en": "odit perspiciatis odio",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?56525",
                "slug": "facilis-molestiae",
                "short_description": "Aut dignissimos quisquam ea iusto totam.",
                "short_description_en": "In et amet consequuntur voluptatem nobis. Aperiam consequatur architecto veritatis quo fugiat. Quidem ut consequatur odit maxime.",
                "price": "1673.00",
                "sale_price": "1.00",
                "stock": 123,
                "spec": null,
                "seo_title": "dolor occaecati et",
                "seo_keyword": "repellat",
                "seo_description": "Et rem quia omnis sint rerum.",
                "benefit": "Deleniti culpa consequuntur laudantium dolores sequi neque deserunt. Culpa aut veniam nemo molestiae. Quod sed rerum voluptates.",
                "benefit_en": "Molestiae quod omnis sapiente dignissimos ut aspernatur. Repellat omnis vero ullam aut. Ipsum quasi natus sed magni nam.",
                "tech_description": "Debitis harum explicabo aliquid error ut dolor officia. Qui ipsum quibusdam omnis consectetur voluptate. Aut voluptas commodi ipsum sint officiis. Repudiandae ipsum et nisi eveniet vitae earum.",
                "tech_description_en": "Aut sed aut esse consequatur temporibus facilis corporis. Vel magni exercitationem commodi amet et eum blanditiis. Iusto ut animi tenetur nihil aperiam.",
                "description": "Voluptas repudiandae provident aspernatur ut. Repudiandae consequuntur rem fugiat molestias qui fugit quis. Dolorum rem sapiente quibusdam quo nihil distinctio.",
                "description_en": "Necessitatibus aliquam animi repudiandae repellendus et veniam molestiae. Possimus modi totam doloribus vitae. Atque unde ut est adipisci sint quisquam fuga fugit.",
                "usage": "Suscipit magni vel deserunt aperiam qui. In et veritatis rerum rerum dignissimos quis et. Ut occaecati minus fuga. Corrupti ut omnis qui aut quasi neque vel et.",
                "usage_en": "Voluptatem recusandae quas rerum nihil sed. Magni sunt amet possimus eos ut sed voluptas. Blanditiis nobis accusantium voluptatem assumenda eligendi quia. Explicabo quasi perferendis aperiam iure officiis doloribus.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?98218",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?21515",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?60273",
                "product_video": "null",
                "status": 2,
                "rating": 1.4,
                "sold_count": 9300,
                "review_count": 1870,
                "created_at": "2020-08-18 09:40:52",
                "updated_at": "2020-09-01 11:15:57",
                "product_category": {
                    "id": 20,
                    "slug": "debitis-molestiae",
                    "title": "精华",
                    "title_en": "perspiciatis sunt ut",
                    "describe": "Ad sint nihil asperiores vero quia odio. Dolores est eius corrupti sequi dolores officia. Est et sint et eos perferendis.",
                    "describe_en": "Dolorem enim omnis sint sit accusamus consequuntur. Exercitationem quia qui dolore qui sed animi. Veritatis fuga corrupti omnis nobis occaecati quasi numquam.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?70984",
                    "description": "Odit perferendis aliquam quia porro perspiciatis eos.",
                    "description_en": "Repudiandae nesciunt quo totam corrupti nesciunt.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?60210",
                    "parent_id": 6,
                    "created_at": "2020-08-15 09:23:09",
                    "updated_at": "2020-08-10 18:37:53"
                }
            },
            {
                "id": 53,
                "product_category_id": 2,
                "product_name": "啊手动阀",
                "product_name_en": "啊手动阀",
                "thumbnail": null,
                "slug": "p-a-shou-dong-fa-p",
                "short_description": "<p>啊手动阀<\/p>",
                "short_description_en": "<p>啊手动阀啊手动阀稍等<\/p>",
                "price": "1243.44",
                "sale_price": "1234.44",
                "stock": 1234,
                "spec": "1234",
                "seo_title": "2345324",
                "seo_keyword": "二狗大厦a",
                "seo_description": "a啊手动阀",
                "benefit": null,
                "benefit_en": "<p>啊手动阀啊手动阀<\/p>",
                "tech_description": null,
                "tech_description_en": null,
                "description": null,
                "description_en": null,
                "usage": null,
                "usage_en": null,
                "main_image": "http:\/\/wutang-store.oss-cn-shenzhen.aliyuncs.com\/Products\/tUu0wcBeEY2nNLFUSdUZoqcxSOBihQVnTq0s1IJE.jpeg",
                "main_image_2": "http:\/\/wutang-store.oss-cn-shenzhen.aliyuncs.com\/Products\/LYMOYbxmzuQsRXJFTZzSUvCF76XeEdmq6igssmWD.jpeg",
                "benefit_image": null,
                "product_video": null,
                "status": 1,
                "rating": 234,
                "sold_count": 23,
                "review_count": 234,
                "created_at": "2020-08-28 10:47:53",
                "updated_at": "2020-08-28 10:47:53",
                "product_category": {
                    "id": 2,
                    "slug": "velit-tenetur",
                    "title": "香水",
                    "title_en": "at iure consectetur",
                    "describe": "Accusantium cumque ut fugiat et reprehenderit et. Maxime debitis harum dolores sit. Occaecati quia molestiae amet alias sed odit. Et unde ipsum et est quo quia cumque.",
                    "describe_en": "Ut ut quidem dignissimos iste officiis quisquam. Et qui enim error et. Impedit sed aliquid totam enim. Labore velit dignissimos temporibus voluptatem.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?61354",
                    "description": "Eos sit beatae blanditiis nihil.",
                    "description_en": "Qui rerum unde vel.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?95689",
                    "parent_id": 9,
                    "created_at": "2020-08-26 23:31:03",
                    "updated_at": "2020-08-17 23:29:00"
                }
            },
            {
                "id": 6,
                "product_category_id": 8,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "vel possimus quia",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?41258",
                "slug": "incidunt-sed",
                "short_description": "Consequatur quo eum beatae beatae.",
                "short_description_en": "Cumque ea rerum minima et aut necessitatibus. Dignissimos eaque sit nobis sed quia nesciunt ipsa.",
                "price": "6598.00",
                "sale_price": "1.00",
                "stock": 214,
                "spec": null,
                "seo_title": "inventore omnis adipisci",
                "seo_keyword": "quas",
                "seo_description": "Fugiat quia tenetur quidem.",
                "benefit": "Veritatis quo nisi rerum ad voluptatem. Consequatur quo porro sint possimus quas quasi expedita. Nulla excepturi optio recusandae perferendis nihil saepe.",
                "benefit_en": "Aspernatur consequatur sit sed eos totam. Dolorem et minima voluptate reprehenderit. Occaecati quo aperiam autem sunt sit magni.",
                "tech_description": "Perspiciatis ullam ratione quis laboriosam dolorem quas ea. Architecto repellendus minima doloremque et a voluptate ducimus. Eum et rem consequatur odit dolor architecto.",
                "tech_description_en": "Illo quaerat totam soluta autem odit. Aperiam consequatur consectetur ut quos dolorem adipisci dolorem. Cumque assumenda omnis numquam sit ut enim velit.",
                "description": "Assumenda praesentium unde harum earum illum et. Accusamus provident veniam nihil corrupti. Veritatis ad vel optio est.",
                "description_en": "Illum pariatur sunt consequatur. Aut officiis sit exercitationem deleniti. Qui nam dolores quasi. Laboriosam voluptatum accusamus voluptates quos vel temporibus.",
                "usage": "Voluptatem fugit ipsam consequuntur maxime eum sed at. Dolores quia qui eius quam ipsam consequatur officiis et. Rem dignissimos eligendi id distinctio eos.",
                "usage_en": "Ab eos dolorem totam sed laborum veniam. Accusamus non voluptas sit. Quisquam aperiam consequuntur id eaque.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?30443",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?43357",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?62093",
                "product_video": null,
                "status": 3,
                "rating": 6.1,
                "sold_count": 4698,
                "review_count": 8149,
                "created_at": "2020-08-11 15:30:29",
                "updated_at": "2020-08-11 18:44:00",
                "product_category": {
                    "id": 8,
                    "slug": "inventore-omnis",
                    "title": "精油",
                    "title_en": "in quasi atque",
                    "describe": "Voluptate dolores molestiae officiis et qui. Mollitia quia dignissimos suscipit perspiciatis. Deleniti voluptas voluptas dolor eum occaecati ea.",
                    "describe_en": "Omnis modi omnis cum eos. Doloribus et error quod dolor et numquam. Voluptatum doloribus dignissimos voluptas aperiam inventore. Atque impedit ut doloribus quibusdam impedit.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?60947",
                    "description": "Et culpa soluta velit.",
                    "description_en": "Recusandae corporis pariatur voluptas deserunt quia.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?81479",
                    "parent_id": 14,
                    "created_at": "2020-08-16 09:49:58",
                    "updated_at": "2020-08-10 16:22:44"
                }
            },
            {
                "id": 7,
                "product_category_id": 2,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "id quod velit",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?82010",
                "slug": "corrupti-omnis",
                "short_description": "Dolorem dicta quibusdam rem necessitatibus.",
                "short_description_en": "Debitis veritatis sequi sunt autem laborum accusantium. Sit ut placeat minima ipsam quae tempora. Ex saepe numquam sapiente at quod.",
                "price": "2747.00",
                "sale_price": "1.00",
                "stock": 812,
                "spec": null,
                "seo_title": "facere occaecati aspernatur",
                "seo_keyword": "modi",
                "seo_description": "Soluta earum aut quia doloremque itaque.",
                "benefit": "Natus id placeat est molestias ut exercitationem. Eos at sunt necessitatibus nisi.",
                "benefit_en": "Doloremque quidem totam nihil fugit blanditiis. Nam nemo totam iusto velit animi ex. Magnam repudiandae sunt veritatis.",
                "tech_description": "In molestiae neque et ipsa. Quia ab error et qui. Molestiae est culpa et. Libero voluptatem et maxime architecto cumque fugiat.",
                "tech_description_en": "Atque molestiae a eligendi similique id. Qui quae et assumenda. Rerum ea qui occaecati quod sit tempore qui sunt. Ut saepe blanditiis error commodi. Quibusdam aliquid est hic et officia non labore eum.",
                "description": "Delectus in et dolores mollitia explicabo sapiente minima. Rerum fuga nesciunt incidunt culpa consequatur. Error harum quis aperiam omnis dicta deleniti provident. Illo voluptatem aperiam fuga aut est optio. Aspernatur laudantium accusamus rerum dolor ea consectetur expedita.",
                "description_en": "Tenetur quo voluptate maxime sit laboriosam. Quis pariatur amet molestiae veniam suscipit nobis minus. Omnis dolorem dicta laudantium enim magni.",
                "usage": "Quisquam enim ut molestiae. Eligendi reprehenderit atque voluptatibus non.",
                "usage_en": "Rerum odio alias aut ipsa cum alias dignissimos. Facere nam ea quae minus consequatur sint sint. Optio cupiditate voluptatum nihil aut nulla. Quo et vel nihil facere natus est.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?96985",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?64046",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?97904",
                "product_video": null,
                "status": 1,
                "rating": 0.91,
                "sold_count": 9296,
                "review_count": 5528,
                "created_at": "2020-07-27 23:54:00",
                "updated_at": "2020-08-26 23:57:40",
                "product_category": {
                    "id": 2,
                    "slug": "velit-tenetur",
                    "title": "香水",
                    "title_en": "at iure consectetur",
                    "describe": "Accusantium cumque ut fugiat et reprehenderit et. Maxime debitis harum dolores sit. Occaecati quia molestiae amet alias sed odit. Et unde ipsum et est quo quia cumque.",
                    "describe_en": "Ut ut quidem dignissimos iste officiis quisquam. Et qui enim error et. Impedit sed aliquid totam enim. Labore velit dignissimos temporibus voluptatem.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?61354",
                    "description": "Eos sit beatae blanditiis nihil.",
                    "description_en": "Qui rerum unde vel.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?95689",
                    "parent_id": 9,
                    "created_at": "2020-08-26 23:31:03",
                    "updated_at": "2020-08-17 23:29:00"
                }
            },
            {
                "id": 8,
                "product_category_id": 19,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "ad atque praesentium",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?48115",
                "slug": "eligendi-incidunt",
                "short_description": "Est a aut quas ea enim.",
                "short_description_en": "Consectetur quibusdam ipsum rerum quis quo nulla voluptatem. Voluptates laborum expedita expedita omnis labore deleniti. Distinctio illum aut consequatur perferendis et. Fugit fuga harum quas quasi harum laboriosam sunt.",
                "price": "807.00",
                "sale_price": "1.00",
                "stock": 815,
                "spec": null,
                "seo_title": "voluptatibus tenetur ut",
                "seo_keyword": "corrupti",
                "seo_description": "Culpa ex aut sed in qui cumque.",
                "benefit": "Facere voluptatem sit in atque ullam. Non mollitia dolorum non quod qui. Et dolores aut error pariatur amet perferendis accusantium. Dolorum praesentium veniam in non eum. Quia animi beatae assumenda ipsum nisi.",
                "benefit_en": "Fugit suscipit exercitationem nisi alias. Minus atque qui voluptas sed in rerum qui. Quibusdam eligendi in sed tempore molestiae qui.",
                "tech_description": "Aut qui suscipit aliquam repellat corporis. Consectetur minima atque dicta maiores tempore nam pariatur. Voluptatum facilis laborum iste voluptas et modi. Quasi culpa sapiente et aut tempore reprehenderit.",
                "tech_description_en": "Eum molestias et voluptatem. Sed voluptatum hic consectetur labore. Qui voluptate dolorum error.",
                "description": "Aspernatur odio assumenda rerum. Voluptatum qui quis doloremque velit illum nobis. Nihil porro aspernatur cumque fuga. Architecto laudantium id cumque eum et.",
                "description_en": "Soluta quibusdam laborum soluta aut. Sit aut omnis enim placeat sit asperiores. Magnam necessitatibus delectus reprehenderit illo quia. Cum qui delectus ut natus eveniet aut est. Rem ad natus delectus at.",
                "usage": "Quis dolor consequatur et perspiciatis qui omnis. Nisi saepe similique temporibus non alias provident doloremque autem. Molestiae quas suscipit qui.",
                "usage_en": "Ut autem ea quia veniam impedit. Dolores magni fugiat earum soluta. Provident et sed aut voluptatem itaque voluptates. Corrupti quidem earum ut accusantium ut sit quae.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?60252",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?75023",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?45485",
                "product_video": null,
                "status": 1,
                "rating": 1.96,
                "sold_count": 3151,
                "review_count": 1874,
                "created_at": "2020-08-10 04:42:49",
                "updated_at": "2020-08-06 22:59:23",
                "product_category": {
                    "id": 19,
                    "slug": "hic-est",
                    "title": "身体护理",
                    "title_en": "rem aut quas",
                    "describe": "Itaque cum accusamus modi labore. Amet aliquid est eum sed architecto ratione omnis. Omnis molestiae non illo est possimus harum doloribus.",
                    "describe_en": "Nesciunt odit consequatur rem qui sint eos. Iste nobis architecto voluptate libero sint alias. Facere est sunt enim ea iste.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?98832",
                    "description": "Vero autem sapiente minima aut consectetur laboriosam.",
                    "description_en": "Impedit totam consequuntur aliquid error voluptas similique.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?53515",
                    "parent_id": 9,
                    "created_at": "2020-07-30 12:37:58",
                    "updated_at": "2020-08-03 20:58:40"
                }
            },
            {
                "id": 9,
                "product_category_id": 8,
                "product_name": "黑钻肌光精华",
                "product_name_en": "nulla dolore ut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?23617",
                "slug": "distinctio-fugit",
                "short_description": "Aliquam aut corporis necessitatibus commodi repellat.",
                "short_description_en": "Pariatur nobis vero quas dolorum qui aut reprehenderit. Odio nam a sit sed itaque animi. Eligendi fuga maiores cumque voluptatum cum necessitatibus. Sed minus voluptatem at et enim.",
                "price": "8615.00",
                "sale_price": "1.00",
                "stock": 635,
                "spec": null,
                "seo_title": "nihil voluptatem incidunt",
                "seo_keyword": "repudiandae",
                "seo_description": "Consequatur in et cupiditate.",
                "benefit": "Officiis quae vel est dolores voluptas distinctio aperiam. Nam repellendus sit voluptas dicta dolorum.",
                "benefit_en": "Et placeat minus quae ex recusandae qui qui suscipit. Mollitia ut eius sunt quod sit. Sunt laborum ut et repudiandae. Ut animi nulla aut eos.",
                "tech_description": "Accusamus dignissimos rerum dolorum excepturi alias fugit. Qui et nihil explicabo deleniti. Et beatae quidem deserunt odio animi dolorem minus.",
                "tech_description_en": "Unde autem optio reprehenderit. Sequi unde sed ea non error expedita quia. Quasi quasi enim sunt est id id error.",
                "description": "Ut et voluptates repellat quis pariatur. Consequatur tempora laborum repudiandae dolorem vero eius et. Atque voluptatum harum doloremque quo. Blanditiis recusandae dolores consequuntur eligendi blanditiis saepe.",
                "description_en": "Voluptates neque illo dolorem et corrupti sequi. Culpa quidem eius rerum enim.",
                "usage": "Vero qui id blanditiis dolorem. Non vitae quo quia delectus voluptas laborum tempore. Sunt quod laborum id qui et ipsam. Totam illum architecto cupiditate quia neque. Consectetur maxime incidunt voluptas.",
                "usage_en": "Unde illum ut sapiente vitae sapiente laborum id enim. Voluptatem voluptatem iusto sed.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?40095",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?45028",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?79329",
                "product_video": null,
                "status": 2,
                "rating": 0.64,
                "sold_count": 8424,
                "review_count": 1072,
                "created_at": "2020-08-25 03:03:55",
                "updated_at": "2020-07-31 16:41:25",
                "product_category": {
                    "id": 8,
                    "slug": "inventore-omnis",
                    "title": "精油",
                    "title_en": "in quasi atque",
                    "describe": "Voluptate dolores molestiae officiis et qui. Mollitia quia dignissimos suscipit perspiciatis. Deleniti voluptas voluptas dolor eum occaecati ea.",
                    "describe_en": "Omnis modi omnis cum eos. Doloribus et error quod dolor et numquam. Voluptatum doloribus dignissimos voluptas aperiam inventore. Atque impedit ut doloribus quibusdam impedit.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?60947",
                    "description": "Et culpa soluta velit.",
                    "description_en": "Recusandae corporis pariatur voluptas deserunt quia.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?81479",
                    "parent_id": 14,
                    "created_at": "2020-08-16 09:49:58",
                    "updated_at": "2020-08-10 16:22:44"
                }
            },
            {
                "id": 51,
                "product_category_id": 2,
                "product_name": "犬瘟热",
                "product_name_en": "qwer",
                "thumbnail": "http:\/\/wutang-store.oss-cn-shenzhen.aliyuncs.com\/Products\/8PHzjmjGoE43iM2zSJ2BHc0P3oqQmpUvhMa3EJv1.jpeg",
                "slug": "ul-li-1234213rfwafdsafd-li-li-safdsadfd-li-ul",
                "short_description": "<ul>\r\n<li>1234213rfwafdsafd<\/li>\r\n<li>safdsadfd<\/li>\r\n<\/ul>",
                "short_description_en": "<ul>\n<li>1234213rfwafdsafd<\/li>\n<li>safdsadfd<\/li>\n<li>sadfsadfsadfa<\/li>\n<\/ul>",
                "price": "1234.00",
                "sale_price": "1234.33",
                "stock": 1234,
                "spec": "1234",
                "seo_title": "1234",
                "seo_keyword": "1234",
                "seo_description": "1234",
                "benefit": "<ul>\n<li>1234213rfwafdsafd<\/li>\n<li>safdsadfd<\/li>\n<li>sadfsadfsadfa<\/li>\n<li>asdfasdfasd<\/li>\n<\/ul>",
                "benefit_en": "<ul>\n<li>1234213rfwafdsafd<\/li>\n<li>safdsadfd<\/li>\n<li>sadfsadfsadfa<\/li>\n<li>asdfasdfasd<\/li>\n<li>asdfsadfsadf<\/li>\n<\/ul>",
                "tech_description": null,
                "tech_description_en": null,
                "description": null,
                "description_en": null,
                "usage": null,
                "usage_en": null,
                "main_image": "http:\/\/wutang-store.oss-cn-shenzhen.aliyuncs.com\/Products\/LSyNNH9eXzfZFwNxmvvNcmZdUmNUqo1DM82Ohqrv.jpeg",
                "main_image_2": "http:\/\/wutang-store.oss-cn-shenzhen.aliyuncs.com\/Products\/mEjyrpTTSdguo00ypbrwONSVu4dpBK4444dJduh2.jpeg",
                "benefit_image": "http:\/\/wutang-store.oss-cn-shenzhen.aliyuncs.com\/Products\/F8WTMrChZHWxIvgGWMhN95wivQ0KD1J7cesyummb.jpeg",
                "product_video": "http:\/\/wutang-store.oss-cn-shenzhen.aliyuncs.com\/Products\/wFUEBnic88glzBBQY6PygvwCBGjZwI1TJaLBw8r0.avi",
                "status": 2,
                "rating": 4.5,
                "sold_count": 23,
                "review_count": 23,
                "created_at": "2020-08-28 10:17:02",
                "updated_at": "2020-08-28 10:17:02",
                "product_category": {
                    "id": 2,
                    "slug": "velit-tenetur",
                    "title": "香水",
                    "title_en": "at iure consectetur",
                    "describe": "Accusantium cumque ut fugiat et reprehenderit et. Maxime debitis harum dolores sit. Occaecati quia molestiae amet alias sed odit. Et unde ipsum et est quo quia cumque.",
                    "describe_en": "Ut ut quidem dignissimos iste officiis quisquam. Et qui enim error et. Impedit sed aliquid totam enim. Labore velit dignissimos temporibus voluptatem.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?61354",
                    "description": "Eos sit beatae blanditiis nihil.",
                    "description_en": "Qui rerum unde vel.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?95689",
                    "parent_id": 9,
                    "created_at": "2020-08-26 23:31:03",
                    "updated_at": "2020-08-17 23:29:00"
                }
            },
            {
                "id": 52,
                "product_category_id": 2,
                "product_name": "qwrqwer",
                "product_name_en": "qwerwef",
                "thumbnail": "http:\/\/wutang-store.oss-cn-shenzhen.aliyuncs.com\/Products\/rIv9WDkSpHagYVJVA6keAsIxbbVsVgwZtfTpmTxj.jpeg",
                "slug": "p-sdfdfsdafasdf-p",
                "short_description": "<p>sdfdfsdafasdf<\/p>",
                "short_description_en": "<p>sdfdfsdafasdfsadfsadf<\/p>",
                "price": "1234.00",
                "sale_price": "1234.00",
                "stock": 1234,
                "spec": null,
                "seo_title": "1234fdaf",
                "seo_keyword": "asdfas",
                "seo_description": "dfsadfasdf",
                "benefit": "<p>sdfdfsdafasdfsadfsadfasdfsadf<\/p>",
                "benefit_en": "<p>sdfdfsdafasdfsadfsadfasdfsadfasdfsadf<\/p>",
                "tech_description": "<p>sdfdfsdafasdfsadfsadfasdfsadfasdfsadfasdfsadf<\/p>",
                "tech_description_en": "<p>sdfdfsdafasdfsadfsadfasdfsadfasdfsadfasdfsadfasdfasdf<\/p>",
                "description": "<p>sdfdfsdafasdfsadfsadfasdfsadfasdfsadfasdfsadfasdfasdfsadfsa<\/p>",
                "description_en": "<p>sdfdfsdafasdfsadfsadfasdfsadfasdfsadfasdfsadfasdfasdfsadfsaasdf<\/p>",
                "usage": "<p>sdfdfsdafasdfsadfsadfasdfsadfasdfsadfasdfsadfasdfasdfsadfsaasdfasdf<\/p>",
                "usage_en": "<p>sdfdfsdafasdfsadfsadfasdfsadfasdfsadfasdfsadfasdfasdfsadfsaasdfasdfasdf<\/p>",
                "main_image": "http:\/\/wutang-store.oss-cn-shenzhen.aliyuncs.com\/Products\/B4QTHEB11QwYNQeMJ0TQc44bRxpgaFvjsXF4NxeW.jpeg",
                "main_image_2": "http:\/\/wutang-store.oss-cn-shenzhen.aliyuncs.com\/Products\/TZOnPFUMUUZAkrWQlPIjh1vcyoNfnB3gNHiGGWKm.jpeg",
                "benefit_image": "http:\/\/wutang-store.oss-cn-shenzhen.aliyuncs.com\/Products\/15UJqaKnTn3bE3WU8JCwvjZCQfST79iHr8etrGIa.jpeg",
                "product_video": "http:\/\/wutang-store.oss-cn-shenzhen.aliyuncs.com\/Products\/IWwd1nvtb5mrsUdXjLkoXYC2BEjb8JCmvitwk9gw.avi",
                "status": 1,
                "rating": 4,
                "sold_count": 23,
                "review_count": 32,
                "created_at": "2020-08-28 10:27:26",
                "updated_at": "2020-08-28 10:27:26",
                "product_category": {
                    "id": 2,
                    "slug": "velit-tenetur",
                    "title": "香水",
                    "title_en": "at iure consectetur",
                    "describe": "Accusantium cumque ut fugiat et reprehenderit et. Maxime debitis harum dolores sit. Occaecati quia molestiae amet alias sed odit. Et unde ipsum et est quo quia cumque.",
                    "describe_en": "Ut ut quidem dignissimos iste officiis quisquam. Et qui enim error et. Impedit sed aliquid totam enim. Labore velit dignissimos temporibus voluptatem.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?61354",
                    "description": "Eos sit beatae blanditiis nihil.",
                    "description_en": "Qui rerum unde vel.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?95689",
                    "parent_id": 9,
                    "created_at": "2020-08-26 23:31:03",
                    "updated_at": "2020-08-17 23:29:00"
                }
            },
            {
                "id": 11,
                "product_category_id": 19,
                "product_name": "黑钻肌光精华",
                "product_name_en": "earum quis quis",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?73959",
                "slug": "fugit-excepturi",
                "short_description": "Omnis amet qui expedita dolorem quae dolorum.",
                "short_description_en": "Ut alias voluptatem amet consequatur sed quia. In facilis distinctio magnam incidunt vel quae suscipit.",
                "price": "4748.00",
                "sale_price": "1.00",
                "stock": 292,
                "spec": null,
                "seo_title": "quo voluptates quaerat",
                "seo_keyword": "laudantium",
                "seo_description": "Qui nam sed quam provident autem.",
                "benefit": "Modi itaque qui et perspiciatis sed. Est fuga voluptate nostrum. Adipisci cum debitis totam repellendus ea sit officia. Qui quisquam at illo accusamus omnis. Optio minus officia qui ut praesentium qui.",
                "benefit_en": "Ut ipsam velit perspiciatis nihil iure incidunt. Tenetur sed sequi ut perferendis iure eum consectetur. Vero iusto fuga doloremque dolor explicabo.",
                "tech_description": "Pariatur rerum exercitationem delectus qui. Magnam cum rerum id provident omnis vel pariatur delectus. Eos reprehenderit fuga dolorem unde. Et excepturi ad non accusamus dolores eum cum.",
                "tech_description_en": "Itaque aperiam maxime velit autem et at aut. Qui autem facilis sit facere porro excepturi. Voluptate veniam esse quia est.",
                "description": "Maiores mollitia ut maiores molestias eos. Aut ducimus nostrum laboriosam voluptatum. Voluptatem dolorem hic qui expedita. In nam sequi molestiae non dicta ea vitae. Nihil magni necessitatibus at et.",
                "description_en": "Iusto qui voluptatibus sunt molestiae. Pariatur error rerum exercitationem provident. Voluptates tempora totam fugiat ut nemo consequatur neque. Natus quo laboriosam beatae.",
                "usage": "Odio odio odit voluptatum odit sint. Rerum voluptas soluta in iste. Quidem quisquam veritatis sed blanditiis necessitatibus excepturi illum. Unde minima quibusdam culpa in voluptatem.",
                "usage_en": "Voluptatem corporis voluptatem consequatur magni dolor necessitatibus quo velit. Harum nulla et quaerat tempora officia iusto sunt veniam. Omnis vel voluptates qui.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?58277",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?71152",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?73121",
                "product_video": null,
                "status": 1,
                "rating": 1.05,
                "sold_count": 1342,
                "review_count": 7397,
                "created_at": "2020-08-22 10:24:22",
                "updated_at": "2020-08-08 11:50:49",
                "product_category": {
                    "id": 19,
                    "slug": "hic-est",
                    "title": "身体护理",
                    "title_en": "rem aut quas",
                    "describe": "Itaque cum accusamus modi labore. Amet aliquid est eum sed architecto ratione omnis. Omnis molestiae non illo est possimus harum doloribus.",
                    "describe_en": "Nesciunt odit consequatur rem qui sint eos. Iste nobis architecto voluptate libero sint alias. Facere est sunt enim ea iste.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?98832",
                    "description": "Vero autem sapiente minima aut consectetur laboriosam.",
                    "description_en": "Impedit totam consequuntur aliquid error voluptas similique.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?53515",
                    "parent_id": 9,
                    "created_at": "2020-07-30 12:37:58",
                    "updated_at": "2020-08-03 20:58:40"
                }
            },
            {
                "id": 12,
                "product_category_id": 20,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "est quia vero",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?30726",
                "slug": "in-aperiam",
                "short_description": "Totam omnis ut repellendus et eveniet.",
                "short_description_en": "Unde et voluptatibus sit placeat voluptas voluptatem ut deleniti. Nesciunt accusantium in earum ullam. Tempora quod ipsam possimus et et. Quasi sit odio enim.",
                "price": "1142.00",
                "sale_price": "1.00",
                "stock": 832,
                "spec": null,
                "seo_title": "est exercitationem quam",
                "seo_keyword": "hic",
                "seo_description": "Itaque porro dicta modi vel similique.",
                "benefit": "Aut nihil et quia doloribus eligendi. Minima quis repellendus ut dolores. Odit recusandae odit reiciendis odio autem voluptatibus. Numquam ipsum eos voluptatem dolor id delectus.",
                "benefit_en": "Sunt esse dolorem laudantium repellendus ab. Neque cupiditate veniam pariatur.",
                "tech_description": "Fugit qui minima sit animi. Libero atque culpa repudiandae quis. Magnam laboriosam consequatur aut tempora natus qui aut. Et consequuntur perferendis perspiciatis.",
                "tech_description_en": "Facere temporibus aut hic magnam. Alias rerum aut nihil aut. Autem iste sapiente reprehenderit vel reprehenderit quo quaerat ipsam. Quod velit voluptatum explicabo dolores.",
                "description": "Natus nesciunt ea dolore quam est eum. Qui quaerat temporibus tempora eveniet. Non dolorem ad dolorem omnis quibusdam doloremque maxime.",
                "description_en": "Omnis asperiores voluptatem a doloribus. Quisquam consectetur qui modi cum. Doloribus occaecati odit harum veritatis quam hic. Veniam consequatur rerum consequuntur nihil consequuntur cumque.",
                "usage": "Earum nesciunt hic eius cupiditate voluptatem atque deserunt. Pariatur numquam quasi magnam iste in. Corrupti culpa magni et inventore voluptatem consequatur quis. Minima porro ipsum voluptatem beatae voluptates maxime.",
                "usage_en": "Incidunt nesciunt rem consequatur natus neque architecto. Impedit dolorum enim fugiat nesciunt libero.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?90182",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?61994",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?12087",
                "product_video": null,
                "status": 1,
                "rating": 5.99,
                "sold_count": 2632,
                "review_count": 1894,
                "created_at": "2020-08-12 11:52:27",
                "updated_at": "2020-08-19 20:29:42",
                "product_category": {
                    "id": 20,
                    "slug": "debitis-molestiae",
                    "title": "精华",
                    "title_en": "perspiciatis sunt ut",
                    "describe": "Ad sint nihil asperiores vero quia odio. Dolores est eius corrupti sequi dolores officia. Est et sint et eos perferendis.",
                    "describe_en": "Dolorem enim omnis sint sit accusamus consequuntur. Exercitationem quia qui dolore qui sed animi. Veritatis fuga corrupti omnis nobis occaecati quasi numquam.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?70984",
                    "description": "Odit perferendis aliquam quia porro perspiciatis eos.",
                    "description_en": "Repudiandae nesciunt quo totam corrupti nesciunt.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?60210",
                    "parent_id": 6,
                    "created_at": "2020-08-15 09:23:09",
                    "updated_at": "2020-08-10 18:37:53"
                }
            },
            {
                "id": 13,
                "product_category_id": 17,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "earum nobis rerum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?23386",
                "slug": "doloremque-eius",
                "short_description": "Possimus asperiores adipisci et omnis.",
                "short_description_en": "Reprehenderit culpa tempore in voluptas. Velit fugit nobis optio eum est tempora corporis. Fugit quaerat quia eos dolores incidunt. Sed commodi reiciendis quia et dolorem tempore.",
                "price": "6746.00",
                "sale_price": "1.00",
                "stock": 70,
                "spec": null,
                "seo_title": "mollitia voluptas eum",
                "seo_keyword": "quasi",
                "seo_description": "Molestiae cum qui sunt praesentium maxime nisi.",
                "benefit": "Sed illum et impedit deleniti. Necessitatibus vel facere sapiente eius adipisci. Nisi facere et nemo quis aut illum voluptatum ut. Enim magni sunt sunt repudiandae nihil in.",
                "benefit_en": "Distinctio doloribus necessitatibus aspernatur. Natus nam rerum officia quo animi ipsa amet. Neque vitae facere iusto voluptas.",
                "tech_description": "Dolorem esse sed nobis quis velit cupiditate distinctio. Et ut dolor dolorem rerum in beatae voluptate labore. Et sit illo est vero iusto sunt.",
                "tech_description_en": "Sed voluptatem earum hic dolore. Sequi voluptatem placeat quod laborum. Repellendus maiores quas consequatur molestiae et.",
                "description": "Sunt vitae nemo porro ut eos incidunt. Ut optio unde porro inventore sapiente voluptatem tempore facilis. Quasi porro qui libero. Sequi earum laboriosam ea ex quo ea distinctio.",
                "description_en": "Nesciunt doloremque aut ipsa neque dignissimos provident ullam. Sunt voluptatem aspernatur excepturi provident reiciendis quasi dolore. Veritatis eligendi delectus sed explicabo.",
                "usage": "Accusamus minus harum quia perferendis a omnis vero. Facilis deserunt delectus velit delectus. Inventore magni excepturi nesciunt dicta qui. Distinctio dolorem eligendi vero labore qui non maxime officia.",
                "usage_en": "Dolor laboriosam et dignissimos dolore. Iure ea delectus deleniti voluptatibus neque fugit sed. Fugit nam facere et quae. Eos est harum consequatur.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?98128",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?33284",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?55121",
                "product_video": null,
                "status": 2,
                "rating": 5.06,
                "sold_count": 2613,
                "review_count": 5616,
                "created_at": "2020-07-28 17:00:04",
                "updated_at": "2020-08-19 04:14:06",
                "product_category": {
                    "id": 17,
                    "slug": "et-adipisci",
                    "title": "唇膏",
                    "title_en": "sapiente corporis ut",
                    "describe": "Repudiandae dicta omnis illo cupiditate. Atque commodi minus itaque molestias. Architecto qui sint quas nulla inventore et. Dolore voluptatem repudiandae rem adipisci debitis.",
                    "describe_en": "Culpa non quod incidunt sed cum. Fugit ducimus natus sed debitis placeat consequatur. Aperiam sunt nisi quis sunt magni.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?96653",
                    "description": "Ab consequuntur necessitatibus laborum ut.",
                    "description_en": "Architecto facere aut consequatur cupiditate.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?69473",
                    "parent_id": 7,
                    "created_at": "2020-08-20 10:19:58",
                    "updated_at": "2020-08-08 04:08:31"
                }
            },
            {
                "id": 14,
                "product_category_id": 10,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "repellat nihil incidunt",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?11404",
                "slug": "et-enim",
                "short_description": "Illum ab perspiciatis veritatis vel voluptatem qui.",
                "short_description_en": "Commodi qui dicta quibusdam ad odit quas voluptatem. Dignissimos sed doloremque sunt molestias non ad. Ex repudiandae ullam qui.",
                "price": "2751.00",
                "sale_price": "1.00",
                "stock": 767,
                "spec": null,
                "seo_title": "dolorem nobis hic",
                "seo_keyword": "dolorem",
                "seo_description": "Aliquam est eius omnis.",
                "benefit": "Ut nihil totam commodi totam. At molestias porro odio quis hic. Molestias vero facilis totam ut tempore sequi.",
                "benefit_en": "Et similique possimus eaque. Et dignissimos facere adipisci corporis. Blanditiis pariatur ut rerum. Laboriosam quia possimus aperiam cumque dicta delectus iusto doloremque.",
                "tech_description": "Praesentium molestias laboriosam et eos. Nisi sapiente dolor doloribus exercitationem.",
                "tech_description_en": "Laudantium id nemo eveniet perspiciatis ratione. Odit aut ducimus hic nostrum ab sit. Modi nostrum voluptas enim nobis. Laudantium ut eum ratione in sed impedit.",
                "description": "Voluptatem quidem ipsa labore ut repudiandae. Exercitationem sint omnis veritatis consequatur. Et sint similique velit alias doloremque sint rerum. Eaque explicabo sed odio laboriosam omnis.",
                "description_en": "Quod consequatur laboriosam illo sed eius in autem. Ut omnis quia sequi similique animi iste. Laborum ut quia cum et aperiam eveniet quisquam. Aliquam aperiam officiis dolor enim qui fuga omnis consequatur.",
                "usage": "Deserunt ex asperiores ipsam debitis nemo accusantium expedita. Eligendi explicabo autem doloremque animi dicta quisquam enim eligendi. Aut dolorem quam autem rerum incidunt qui libero omnis.",
                "usage_en": "Non ex non ut quod dolores dolorem esse. Aspernatur atque dicta earum. Cumque voluptatibus exercitationem distinctio libero.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?30602",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?18628",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?30652",
                "product_video": null,
                "status": 1,
                "rating": 7.52,
                "sold_count": 3968,
                "review_count": 5014,
                "created_at": "2020-07-29 23:09:55",
                "updated_at": "2020-08-07 05:22:35",
                "product_category": {
                    "id": 10,
                    "slug": "similique-et",
                    "title": "防晒",
                    "title_en": "dolores corporis aut",
                    "describe": "Velit suscipit et cumque. Et inventore nisi ea itaque earum maxime. Mollitia omnis dolores laudantium repellendus. Exercitationem dolorem quia ut et aspernatur.",
                    "describe_en": "Ex rerum iste dolorem facere aperiam omnis quo. Dicta eaque magnam quaerat et ex. Voluptas suscipit vel aut reiciendis ab iure. Voluptate incidunt voluptas modi.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?65473",
                    "description": "Amet ab et atque in quam.",
                    "description_en": "Quam consequatur et autem eligendi.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?54940",
                    "parent_id": 13,
                    "created_at": "2020-08-16 01:41:34",
                    "updated_at": "2020-08-03 04:04:39"
                }
            },
            {
                "id": 15,
                "product_category_id": 16,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "est architecto occaecati",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?81350",
                "slug": "quia-vel",
                "short_description": "Aliquid sequi est et quaerat voluptatem quas.",
                "short_description_en": "Expedita rem in quaerat dolor expedita. Maiores animi doloremque qui repellendus perspiciatis. Distinctio vero neque delectus voluptate ipsum expedita. Culpa cupiditate et reprehenderit harum et minima rerum.",
                "price": "433.00",
                "sale_price": "1.00",
                "stock": 814,
                "spec": null,
                "seo_title": "quisquam saepe quaerat",
                "seo_keyword": "beatae",
                "seo_description": "Vero dignissimos impedit sequi ipsam.",
                "benefit": "Unde non distinctio praesentium esse omnis corrupti. Earum qui quia maiores autem ea nesciunt. Recusandae ipsa et tempore odit. Aut doloribus sed voluptatum libero praesentium inventore.",
                "benefit_en": "Quasi ratione placeat sequi. Distinctio provident exercitationem est. Rerum ea quasi velit quas.",
                "tech_description": "Voluptatem voluptas aut ex et ullam. Maxime voluptate consectetur accusamus impedit aliquid. Incidunt numquam cumque eius velit est veritatis. Aut ullam velit ratione dicta voluptatem et impedit. Quisquam dolores officiis quaerat.",
                "tech_description_en": "Omnis vel itaque quis sed consequatur. Cumque rem fugit possimus inventore recusandae facere. Est et delectus quo consectetur aut ut. Dolorum suscipit sequi laboriosam delectus velit animi.",
                "description": "Repellat sed itaque enim quasi dolores delectus. Rem ducimus in assumenda cum dolore qui. Officia esse voluptatibus perspiciatis nihil.",
                "description_en": "Sapiente harum quo qui tempora. Optio eos quibusdam aliquid quos qui. Exercitationem nobis illo rerum. Aliquid laudantium autem atque ipsa sed rerum recusandae.",
                "usage": "Tenetur omnis temporibus doloribus tenetur aliquid eum alias. Repellendus velit illum voluptas est quod nesciunt.",
                "usage_en": "Vel doloremque placeat quia quam fuga nesciunt possimus. Sint non recusandae rerum quis. Rerum facere non ipsam incidunt a. Recusandae sed doloribus dolorum qui.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?79797",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?32936",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?39285",
                "product_video": null,
                "status": 3,
                "rating": 5.4,
                "sold_count": 7831,
                "review_count": 4011,
                "created_at": "2020-08-20 15:47:44",
                "updated_at": "2020-08-10 02:05:08",
                "product_category": {
                    "id": 16,
                    "slug": "ullam-sequi",
                    "title": "眼线",
                    "title_en": "vel doloremque quasi",
                    "describe": "Sit quos eos quia unde. Sed atque sequi dicta eius iusto. Itaque maxime sed aperiam voluptates expedita quo qui nostrum.",
                    "describe_en": "Voluptatibus autem non incidunt et itaque. Quos maiores deleniti quaerat ad. Vel sed reprehenderit ut ducimus. Praesentium dolorem quas dolore doloribus nemo numquam deleniti saepe.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?28026",
                    "description": "Voluptas et iste facilis soluta sapiente nostrum.",
                    "description_en": "Beatae voluptatum maiores ab.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?77656",
                    "parent_id": 8,
                    "created_at": "2020-07-31 12:53:22",
                    "updated_at": "2020-08-21 18:57:16"
                }
            },
            {
                "id": 16,
                "product_category_id": 18,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "itaque voluptatum quaerat",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?61707",
                "slug": "nesciunt-quia",
                "short_description": "Qui est est odio.",
                "short_description_en": "Et illo qui omnis. Repellat voluptas illum eum impedit quia et eligendi quis. Et delectus similique expedita veniam.",
                "price": "8431.00",
                "sale_price": "1.00",
                "stock": 271,
                "spec": null,
                "seo_title": "ipsa officia ut",
                "seo_keyword": "nihil",
                "seo_description": "Qui quaerat asperiores quasi deserunt quo.",
                "benefit": "Optio qui et dolorem totam non. Sapiente quos enim quibusdam distinctio explicabo voluptatum. Libero molestiae officia deleniti quos natus. Id dicta ea doloribus et.",
                "benefit_en": "Voluptatem repellendus temporibus voluptas rerum similique sunt. Placeat explicabo aut quidem id enim voluptatum sit iure. Itaque occaecati debitis odio necessitatibus aperiam.",
                "tech_description": "Inventore modi minima excepturi aut. Dolores optio nihil qui. Sequi asperiores odit dolores eos dolores distinctio perspiciatis. Delectus mollitia harum libero quia enim ut impedit numquam.",
                "tech_description_en": "Sunt quisquam aspernatur dicta laborum minima repellendus quasi. Et omnis unde eum tenetur. Vel excepturi perferendis est ducimus aperiam. Aut itaque harum ullam. Commodi fugiat qui dolor et.",
                "description": "Sapiente beatae facilis corrupti assumenda iure enim. Consequatur et sed et sed.",
                "description_en": "Corporis explicabo iure vel. Omnis beatae ut impedit consequatur officia rerum libero. Illum ut sunt quaerat eveniet sed quae sint.",
                "usage": "Labore quibusdam hic dolorem ea delectus officia animi quaerat. Corrupti voluptatum ipsum sed. Qui eligendi eum iste et aut quidem voluptatem rerum. Ad architecto unde nisi vero et.",
                "usage_en": "Quos quasi sint accusantium sed provident quidem. Voluptatem dolor et quibusdam qui quia accusantium aut. Molestiae praesentium aut maxime ut et.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?38904",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?78069",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?27481",
                "product_video": null,
                "status": 1,
                "rating": 7.3,
                "sold_count": 7107,
                "review_count": 1128,
                "created_at": "2020-08-14 06:10:43",
                "updated_at": "2020-08-03 21:47:36",
                "product_category": {
                    "id": 18,
                    "slug": "molestiae-voluptatem",
                    "title": "爽肤水",
                    "title_en": "at et nihil",
                    "describe": "Vitae repellendus animi nihil ad facere dicta quas. Autem dolorem qui nihil et cumque odit nesciunt tenetur. Quam quibusdam harum hic et deleniti deserunt.",
                    "describe_en": "Odio et eaque debitis iusto. Hic provident quo maiores. Autem saepe ea qui qui quod fugit sapiente. Animi aut quibusdam pariatur ut est quo dolore.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?38240",
                    "description": "Quidem aut et maiores.",
                    "description_en": "Debitis dicta aut iste nam.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?93932",
                    "parent_id": 4,
                    "created_at": "2020-08-15 06:18:16",
                    "updated_at": "2020-07-29 23:25:39"
                }
            },
            {
                "id": 17,
                "product_category_id": 19,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "aspernatur voluptatibus expedita",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?51891",
                "slug": "deserunt-reiciendis",
                "short_description": "Aut numquam quos voluptates dicta fuga minima.",
                "short_description_en": "Ut asperiores consequuntur optio eos est. Iure voluptatem enim incidunt mollitia est. Consectetur sint repellendus iste.",
                "price": "1242.00",
                "sale_price": "1.00",
                "stock": 133,
                "spec": null,
                "seo_title": "quaerat voluptas labore",
                "seo_keyword": "sunt",
                "seo_description": "Sunt deleniti fugiat ea.",
                "benefit": "Non aut perspiciatis reprehenderit voluptatibus ut. Repellendus ducimus ipsum officiis iure dolorem. Dicta quia at omnis rerum rerum.",
                "benefit_en": "Autem esse vitae atque non temporibus. Voluptatem dolorem recusandae commodi molestiae. Odio similique labore perspiciatis sit qui.",
                "tech_description": "Vel eius iure praesentium id autem dolorem saepe ut. Expedita voluptates in ipsum beatae quia. Incidunt odio quia sapiente eaque quia. Quia est quis aut ipsa.",
                "tech_description_en": "Aliquam quisquam rem aut autem. Non et cum eaque eum. Laudantium nulla harum atque sed vel. Sed impedit molestiae dolore possimus error est sint.",
                "description": "Laborum rerum aut aut ratione enim commodi ut. Necessitatibus placeat ex id ut.",
                "description_en": "Ipsum voluptas in quaerat harum nulla maxime. Quia dicta laboriosam consequuntur. Et officia velit neque minus et facilis voluptate.",
                "usage": "Non sed quam et et et quam ut. Aut aliquam vel dolores repudiandae nam. Velit quos sequi aliquid veniam.",
                "usage_en": "Sunt consequuntur qui dolor ut mollitia rerum veritatis. Dolorem ab nemo pariatur et libero. Sapiente et eum adipisci doloremque est et.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?69533",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?61852",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?62341",
                "product_video": null,
                "status": 3,
                "rating": 9.59,
                "sold_count": 9691,
                "review_count": 6906,
                "created_at": "2020-08-14 23:20:15",
                "updated_at": "2020-07-28 03:07:48",
                "product_category": {
                    "id": 19,
                    "slug": "hic-est",
                    "title": "身体护理",
                    "title_en": "rem aut quas",
                    "describe": "Itaque cum accusamus modi labore. Amet aliquid est eum sed architecto ratione omnis. Omnis molestiae non illo est possimus harum doloribus.",
                    "describe_en": "Nesciunt odit consequatur rem qui sint eos. Iste nobis architecto voluptate libero sint alias. Facere est sunt enim ea iste.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?98832",
                    "description": "Vero autem sapiente minima aut consectetur laboriosam.",
                    "description_en": "Impedit totam consequuntur aliquid error voluptas similique.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?53515",
                    "parent_id": 9,
                    "created_at": "2020-07-30 12:37:58",
                    "updated_at": "2020-08-03 20:58:40"
                }
            },
            {
                "id": 18,
                "product_category_id": 18,
                "product_name": "黑钻焕肤水",
                "product_name_en": "at a laudantium",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?67443",
                "slug": "deleniti-odit",
                "short_description": "Eum ipsam et inventore voluptas.",
                "short_description_en": "Deleniti repellat nobis perspiciatis deleniti doloribus nemo autem. Omnis eveniet odit quo ab dolore et vero. Nihil excepturi cumque odio deleniti quo et unde. Odit quas beatae ea voluptatem numquam.",
                "price": "9725.00",
                "sale_price": "1.00",
                "stock": 142,
                "spec": null,
                "seo_title": "laborum in culpa",
                "seo_keyword": "expedita",
                "seo_description": "Expedita et et necessitatibus dolor laborum incidunt.",
                "benefit": "Assumenda quidem dolor asperiores repellat. Vero illo voluptatem et dolor. Qui exercitationem et dolorem est ratione sed vitae possimus.",
                "benefit_en": "Debitis quia quia possimus delectus exercitationem. Accusantium dolores libero et. Quia natus accusantium eaque quisquam est iusto doloremque. Delectus temporibus perferendis nobis dicta dolore qui.",
                "tech_description": "Voluptate esse qui rerum nesciunt beatae sed. Voluptas in ipsa earum sunt minus. Soluta pariatur reprehenderit culpa quia omnis nobis.",
                "tech_description_en": "Voluptatem voluptatum dignissimos voluptatem. Exercitationem est qui suscipit magni eaque ut cum. Dolor eveniet eius est aliquid et.",
                "description": "Voluptatem asperiores ad sit et error quis dignissimos. Officia architecto laboriosam ipsum exercitationem error sint. Aut ad suscipit ut iure dolor explicabo id in. Accusamus aut adipisci qui et.",
                "description_en": "Dolorum nesciunt autem eos quas veniam. Suscipit qui non consequuntur in libero aut. Ut ex corporis fugiat numquam tenetur error minima.",
                "usage": "Fuga autem nesciunt quasi quo. Labore voluptatem sint quas consequatur cum hic aliquam. Perspiciatis corrupti consequatur id. Nesciunt eos dolore officiis facere voluptatem modi laboriosam.",
                "usage_en": "Temporibus qui ducimus in corporis officiis sed sint. Esse repudiandae at nulla aliquid. Voluptatem nostrum et qui inventore molestias adipisci ut.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?69974",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?79036",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?43103",
                "product_video": null,
                "status": 2,
                "rating": 5.78,
                "sold_count": 7028,
                "review_count": 4682,
                "created_at": "2020-08-10 03:11:45",
                "updated_at": "2020-07-28 00:16:25",
                "product_category": {
                    "id": 18,
                    "slug": "molestiae-voluptatem",
                    "title": "爽肤水",
                    "title_en": "at et nihil",
                    "describe": "Vitae repellendus animi nihil ad facere dicta quas. Autem dolorem qui nihil et cumque odit nesciunt tenetur. Quam quibusdam harum hic et deleniti deserunt.",
                    "describe_en": "Odio et eaque debitis iusto. Hic provident quo maiores. Autem saepe ea qui qui quod fugit sapiente. Animi aut quibusdam pariatur ut est quo dolore.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?38240",
                    "description": "Quidem aut et maiores.",
                    "description_en": "Debitis dicta aut iste nam.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?93932",
                    "parent_id": 4,
                    "created_at": "2020-08-15 06:18:16",
                    "updated_at": "2020-07-29 23:25:39"
                }
            },
            {
                "id": 19,
                "product_category_id": 18,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "nisi reiciendis ducimus",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?67827",
                "slug": "vero-quia",
                "short_description": "Maiores eius placeat doloribus.",
                "short_description_en": "Rem dolorem nesciunt eos dolore consequatur. Sunt sit id cumque sint.",
                "price": "3989.00",
                "sale_price": "1.00",
                "stock": 278,
                "spec": null,
                "seo_title": "pariatur qui nihil",
                "seo_keyword": "error",
                "seo_description": "Ea excepturi dolor beatae velit quasi itaque libero.",
                "benefit": "Dolore ducimus aliquid maiores iusto dolores quis quibusdam. Harum aliquid voluptatibus omnis molestias officiis ut officia. Modi corporis architecto et corrupti cupiditate at.",
                "benefit_en": "Quos ut sed earum odio. Itaque dolor sequi ut accusamus. Quasi officia temporibus dolores magni corrupti. Voluptatem voluptates rerum rerum neque minima.",
                "tech_description": "Necessitatibus voluptatem corporis quibusdam. Aut corporis incidunt nulla dolorem modi velit. Debitis expedita sequi atque blanditiis consequatur maxime.",
                "tech_description_en": "Voluptatum ipsa autem quasi sunt maxime. Impedit doloribus aut consequatur non enim minus. Sed a voluptatem mollitia deserunt. Quia quibusdam placeat aut quasi vitae suscipit tempore.",
                "description": "Labore quia doloremque ipsum nihil soluta est recusandae. Magnam vel mollitia earum qui. Atque facilis aut porro consequatur neque optio dolorum.",
                "description_en": "Consequatur aperiam debitis voluptates veritatis expedita quis aliquam. Et provident sed numquam nobis corrupti voluptas optio iure.",
                "usage": "Non voluptatem cum est esse esse. Possimus commodi aut cum nisi ipsa nemo. Autem et quod dolorum doloremque.",
                "usage_en": "Deleniti fugiat odit illo quas. Aut magnam est aspernatur quas. Alias magni et excepturi. Aut voluptatem voluptatem ea inventore maxime ratione voluptas blanditiis.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?30452",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?30143",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?10587",
                "product_video": null,
                "status": 2,
                "rating": 1.95,
                "sold_count": 1221,
                "review_count": 6845,
                "created_at": "2020-08-21 06:59:01",
                "updated_at": "2020-08-04 06:03:45",
                "product_category": {
                    "id": 18,
                    "slug": "molestiae-voluptatem",
                    "title": "爽肤水",
                    "title_en": "at et nihil",
                    "describe": "Vitae repellendus animi nihil ad facere dicta quas. Autem dolorem qui nihil et cumque odit nesciunt tenetur. Quam quibusdam harum hic et deleniti deserunt.",
                    "describe_en": "Odio et eaque debitis iusto. Hic provident quo maiores. Autem saepe ea qui qui quod fugit sapiente. Animi aut quibusdam pariatur ut est quo dolore.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?38240",
                    "description": "Quidem aut et maiores.",
                    "description_en": "Debitis dicta aut iste nam.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?93932",
                    "parent_id": 4,
                    "created_at": "2020-08-15 06:18:16",
                    "updated_at": "2020-07-29 23:25:39"
                }
            },
            {
                "id": 20,
                "product_category_id": 2,
                "product_name": "黑钻焕肤水",
                "product_name_en": "culpa voluptate animi",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?64763",
                "slug": "itaque-nobis",
                "short_description": "Beatae quaerat numquam eos nulla voluptas omnis.",
                "short_description_en": "Nihil animi quae quis assumenda blanditiis perferendis nesciunt natus. Vel in beatae dolor neque alias. Ullam sint non nulla velit.",
                "price": "7304.00",
                "sale_price": "1.00",
                "stock": 852,
                "spec": null,
                "seo_title": "aspernatur at omnis",
                "seo_keyword": "cum",
                "seo_description": "Nesciunt consequatur velit blanditiis ut quidem assumenda.",
                "benefit": "Numquam facilis veniam sunt nihil corrupti veniam officiis. Ullam ullam temporibus quia fugiat qui doloribus quos. Quia quasi error distinctio molestias voluptate. Consequuntur omnis expedita magni reprehenderit quia.",
                "benefit_en": "Odio aut laudantium eligendi qui. Distinctio ab qui ipsa voluptatem. Ipsam hic voluptatem cupiditate quis vero sed et possimus.",
                "tech_description": "Temporibus quod deserunt mollitia numquam delectus. Quia aut facilis illum aut aspernatur inventore aut. Omnis sit architecto dolor omnis. Maiores non quis possimus ratione molestiae vel a. Laborum quam nemo saepe consequuntur a incidunt.",
                "tech_description_en": "Delectus molestiae ducimus aut. Impedit rerum ut dicta et. Autem in aperiam sint adipisci quia.",
                "description": "Molestias repellendus similique nemo facere recusandae. Distinctio ut aliquam exercitationem eius. Id explicabo velit incidunt.",
                "description_en": "Et ipsum culpa dolorum ipsum ipsam quia laborum. Autem dolores mollitia ut. Occaecati modi ut aut deleniti voluptate. Odit facilis perspiciatis repellat praesentium nihil expedita.",
                "usage": "Aut quia consequatur inventore cupiditate eum voluptatum. Sequi est dolores et. Voluptas voluptatem accusamus qui facilis vero quaerat. Qui atque et explicabo veritatis. Sint est quia autem.",
                "usage_en": "Et atque recusandae temporibus. Tempora cumque reprehenderit ut reiciendis ut ut eligendi. Ea adipisci laudantium voluptas qui consequatur voluptas. Voluptatem beatae dolorum laudantium rerum ullam rerum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?90279",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?84468",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?65576",
                "product_video": null,
                "status": 3,
                "rating": 1.8599999999999999,
                "sold_count": 8232,
                "review_count": 5157,
                "created_at": "2020-07-28 04:57:26",
                "updated_at": "2020-08-03 01:57:12",
                "product_category": {
                    "id": 2,
                    "slug": "velit-tenetur",
                    "title": "香水",
                    "title_en": "at iure consectetur",
                    "describe": "Accusantium cumque ut fugiat et reprehenderit et. Maxime debitis harum dolores sit. Occaecati quia molestiae amet alias sed odit. Et unde ipsum et est quo quia cumque.",
                    "describe_en": "Ut ut quidem dignissimos iste officiis quisquam. Et qui enim error et. Impedit sed aliquid totam enim. Labore velit dignissimos temporibus voluptatem.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?61354",
                    "description": "Eos sit beatae blanditiis nihil.",
                    "description_en": "Qui rerum unde vel.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?95689",
                    "parent_id": 9,
                    "created_at": "2020-08-26 23:31:03",
                    "updated_at": "2020-08-17 23:29:00"
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

<!-- START_780e33b02e03b4552400dedc5e68f35e -->
## get product of product category
获取对应类别下的产品

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/product_category/1?category_slug=omnis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product_category/1"
);

let params = {
    "category_slug": "omnis",
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

<!-- START_0d311bc121fa5f47763c3a964aaf3691 -->
## Query the product detail
获取商品详情信息

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
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

<!-- START_d4db1667c48d95988d9be97e6ca5cb70 -->
## Get product detail by product id list
根据ID列表查询商品

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/product_ids?id_list=omnis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product_ids"
);

let params = {
    "id_list": "omnis",
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
`GET api/product_ids`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id_list` |  required  | 商品id列表（数组）

<!-- END_d4db1667c48d95988d9be97e6ca5cb70 -->

<!-- START_e74135bde1e41803ad4087410acd02b8 -->
## Get product category story
获取产品分类故事

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/category_story/1?category_slug=enim" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category_story/1"
);

let params = {
    "category_slug": "enim",
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

<!-- START_e1ee2f452be977620f7e0c0045529fd9 -->
## Get new product
获取新品

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/product_new?page=nostrum&page_limit=mollitia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product_new"
);

let params = {
    "page": "nostrum",
    "page_limit": "mollitia",
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
                "id": 2,
                "product_category_id": 11,
                "product_name": "黑钻焕肤水",
                "product_name_en": "magnam mollitia totam",
                "thumbnail": "http:\/\/wutang-store.oss-cn-shenzhen.aliyuncs.com\/Products\/JNcfYTXdbnB1n5RObE2uZufFcH1wG7McX62Y2uYD.png",
                "slug": "distinctio-assumenda",
                "short_description": "Ipsum consectetur optio beatae iusto enim eum.",
                "short_description_en": "Sed exercitationem facere distinctio odio. Est accusantium amet nobis. Aut iure consequatur esse a accusantium numquam.",
                "price": "5291.00",
                "sale_price": "1.00",
                "stock": 123,
                "spec": null,
                "seo_title": null,
                "seo_keyword": null,
                "seo_description": "Non nihil maxime sit.",
                "benefit": "Ut ex perspiciatis cupiditate maxime est quae saepe. Distinctio voluptatem magni voluptas aut sed. Velit quod rerum velit est ad pariatur quod id.",
                "benefit_en": "Laboriosam esse doloremque qui facere autem. Voluptas perspiciatis quia sit consequuntur eum non quae. Doloribus sed quos aut id alias hic ipsum provident. Maxime commodi distinctio aut dolore.",
                "tech_description": "Eveniet molestiae quisquam sed magni quos voluptas. Repellat optio deleniti est minima velit cum qui. Et incidunt hic deserunt velit vero.",
                "tech_description_en": "Optio itaque ratione occaecati ea quibusdam enim aut. Iure tempora enim enim odio. Magni voluptate autem commodi. Sint est eos id sequi et quod.",
                "description": "Molestias aut ut ab. Consequatur deserunt consequatur eos totam eum reprehenderit. Vel odio dolorem qui blanditiis sequi. Voluptatem est laboriosam quia rerum.",
                "description_en": "Id est autem incidunt totam. Et excepturi error perspiciatis maxime. Commodi cupiditate reiciendis sit blanditiis voluptate explicabo.",
                "usage": "Tempora non magni vel quia aliquam magnam. Ratione nemo velit ipsa dolor. Voluptatem eaque est debitis minima. Placeat facere voluptas aliquid et reiciendis modi itaque non.",
                "usage_en": "Voluptas enim fuga voluptatibus totam magni et. Recusandae ducimus fuga quae et veniam iste quasi. Voluptatum similique nobis ea inventore soluta eius eos.",
                "main_image": "http:\/\/wutang-store.oss-cn-shenzhen.aliyuncs.com\/Products\/B6VSCVgcpcQV6zbXeGnWPkM7RotweT3eYtQhPq1Q.jpeg",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?24715",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?36481",
                "product_video": "http:\/\/wutang-store.oss-cn-shenzhen.aliyuncs.com\/Products\/ITw2yykMIxYPUYH3auDvDTAbifJw6BMK3FNJpBoY.mp4",
                "status": 1,
                "rating": 8.9,
                "sold_count": 8834,
                "review_count": 6907,
                "created_at": "2020-08-03 16:23:12",
                "updated_at": "2020-09-01 10:02:24",
                "product_category": {
                    "id": 11,
                    "slug": "ratione-fugiat",
                    "title": "防晒",
                    "title_en": "at qui et",
                    "describe": "Itaque reprehenderit soluta delectus maiores totam laudantium. Ipsam aut quia veritatis error. Possimus occaecati enim animi.",
                    "describe_en": "Tempora neque quas enim eaque occaecati atque veritatis. Aut cupiditate placeat et aspernatur. Sed quam voluptas et non eveniet voluptatem.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?76703",
                    "description": "Beatae illum quia sequi est.",
                    "description_en": "Adipisci atque rerum ut voluptatem.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?19858",
                    "parent_id": 16,
                    "created_at": "2020-07-27 15:44:28",
                    "updated_at": "2020-08-03 20:48:45"
                }
            },
            {
                "id": 3,
                "product_category_id": 1,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "delectus aut et",
                "thumbnail": "http:\/\/wutang-store.oss-cn-shenzhen.aliyuncs.com\/Products\/ljS8wQ6sX7IyM7gbr9Y6H29WwhVRGTzxS8QjLghz.png",
                "slug": "dolores-qui",
                "short_description": "Illum assumenda facilis quod tempora quo vel.",
                "short_description_en": "Aut esse sit molestiae at aperiam. Asperiores qui odit aperiam maxime.",
                "price": "1197.00",
                "sale_price": "1.00",
                "stock": 894,
                "spec": null,
                "seo_title": "dolorem soluta in",
                "seo_keyword": "sint",
                "seo_description": "Magnam et dolor natus optio.",
                "benefit": "Qui exercitationem magni error facere quia distinctio ad. Et voluptatem aut atque nemo culpa. Voluptatem laudantium voluptatem qui architecto perferendis accusantium earum.",
                "benefit_en": "Eveniet cupiditate qui aut voluptas aut vel necessitatibus. Omnis autem dignissimos non velit. Amet ipsa voluptatibus culpa alias dignissimos sunt. Repudiandae quia sit aut consequuntur culpa qui.",
                "tech_description": "Inventore sed libero ut quam. Nemo dolorem dicta voluptas voluptatem exercitationem et ullam. Ipsum cupiditate quis ea ut aut. Ullam et quam molestiae rerum esse recusandae commodi.",
                "tech_description_en": "Et odio tempore tenetur fuga minima. Officia tempora velit at nemo et ex aperiam ipsam. Et temporibus voluptas aut velit aut aut.",
                "description": "Vel animi nostrum sapiente quia commodi. In incidunt ipsam voluptas aliquam. Sunt accusantium nulla ea qui occaecati aperiam fugit. Laboriosam aliquid et iste dolorem.",
                "description_en": "Alias ullam cumque laborum quaerat. Veritatis libero assumenda dolores pariatur pariatur fugiat nesciunt a. Praesentium vel voluptatibus atque natus saepe occaecati. Qui qui delectus molestiae eos similique consequatur asperiores consequatur.",
                "usage": "Architecto voluptate debitis doloribus ab rerum est. Possimus temporibus ut qui quas repellat. Rerum illo tempore atque.",
                "usage_en": "Praesentium sint excepturi earum enim reiciendis culpa. Voluptate autem autem et pariatur. Aperiam esse eaque beatae in dolore quia. Repellat praesentium culpa eligendi ipsam est et aut.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?90583",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?82990",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?42612",
                "product_video": "null",
                "status": 1,
                "rating": 8,
                "sold_count": 9040,
                "review_count": 9104,
                "created_at": "2020-08-19 23:25:37",
                "updated_at": "2020-09-01 11:15:46",
                "product_category": {
                    "id": 1,
                    "slug": "ut-expedita",
                    "title": "BB霜",
                    "title_en": "eveniet soluta voluptas",
                    "describe": "Quae aperiam quia illum voluptatem et rem adipisci. Non exercitationem eos fugit repellat.",
                    "describe_en": "Et id voluptas atque cumque accusantium fugit qui. Numquam optio qui vero ullam aliquid magnam aut. Dolorum quo suscipit aut saepe cupiditate tempora non.",
                    "banner": "null",
                    "description": "Tenetur quo totam provident tempore perferendis eveniet.",
                    "description_en": "Distinctio fugiat accusantium harum.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?49095",
                    "parent_id": 6,
                    "created_at": "2020-08-23 08:55:21",
                    "updated_at": "2020-08-27 15:02:21"
                }
            },
            {
                "id": 53,
                "product_category_id": 2,
                "product_name": "啊手动阀",
                "product_name_en": "啊手动阀",
                "thumbnail": null,
                "slug": "p-a-shou-dong-fa-p",
                "short_description": "<p>啊手动阀<\/p>",
                "short_description_en": "<p>啊手动阀啊手动阀稍等<\/p>",
                "price": "1243.44",
                "sale_price": "1234.44",
                "stock": 1234,
                "spec": "1234",
                "seo_title": "2345324",
                "seo_keyword": "二狗大厦a",
                "seo_description": "a啊手动阀",
                "benefit": null,
                "benefit_en": "<p>啊手动阀啊手动阀<\/p>",
                "tech_description": null,
                "tech_description_en": null,
                "description": null,
                "description_en": null,
                "usage": null,
                "usage_en": null,
                "main_image": "http:\/\/wutang-store.oss-cn-shenzhen.aliyuncs.com\/Products\/tUu0wcBeEY2nNLFUSdUZoqcxSOBihQVnTq0s1IJE.jpeg",
                "main_image_2": "http:\/\/wutang-store.oss-cn-shenzhen.aliyuncs.com\/Products\/LYMOYbxmzuQsRXJFTZzSUvCF76XeEdmq6igssmWD.jpeg",
                "benefit_image": null,
                "product_video": null,
                "status": 1,
                "rating": 234,
                "sold_count": 23,
                "review_count": 234,
                "created_at": "2020-08-28 10:47:53",
                "updated_at": "2020-08-28 10:47:53",
                "product_category": {
                    "id": 2,
                    "slug": "velit-tenetur",
                    "title": "香水",
                    "title_en": "at iure consectetur",
                    "describe": "Accusantium cumque ut fugiat et reprehenderit et. Maxime debitis harum dolores sit. Occaecati quia molestiae amet alias sed odit. Et unde ipsum et est quo quia cumque.",
                    "describe_en": "Ut ut quidem dignissimos iste officiis quisquam. Et qui enim error et. Impedit sed aliquid totam enim. Labore velit dignissimos temporibus voluptatem.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?61354",
                    "description": "Eos sit beatae blanditiis nihil.",
                    "description_en": "Qui rerum unde vel.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?95689",
                    "parent_id": 9,
                    "created_at": "2020-08-26 23:31:03",
                    "updated_at": "2020-08-17 23:29:00"
                }
            },
            {
                "id": 7,
                "product_category_id": 2,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "id quod velit",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?82010",
                "slug": "corrupti-omnis",
                "short_description": "Dolorem dicta quibusdam rem necessitatibus.",
                "short_description_en": "Debitis veritatis sequi sunt autem laborum accusantium. Sit ut placeat minima ipsam quae tempora. Ex saepe numquam sapiente at quod.",
                "price": "2747.00",
                "sale_price": "1.00",
                "stock": 812,
                "spec": null,
                "seo_title": "facere occaecati aspernatur",
                "seo_keyword": "modi",
                "seo_description": "Soluta earum aut quia doloremque itaque.",
                "benefit": "Natus id placeat est molestias ut exercitationem. Eos at sunt necessitatibus nisi.",
                "benefit_en": "Doloremque quidem totam nihil fugit blanditiis. Nam nemo totam iusto velit animi ex. Magnam repudiandae sunt veritatis.",
                "tech_description": "In molestiae neque et ipsa. Quia ab error et qui. Molestiae est culpa et. Libero voluptatem et maxime architecto cumque fugiat.",
                "tech_description_en": "Atque molestiae a eligendi similique id. Qui quae et assumenda. Rerum ea qui occaecati quod sit tempore qui sunt. Ut saepe blanditiis error commodi. Quibusdam aliquid est hic et officia non labore eum.",
                "description": "Delectus in et dolores mollitia explicabo sapiente minima. Rerum fuga nesciunt incidunt culpa consequatur. Error harum quis aperiam omnis dicta deleniti provident. Illo voluptatem aperiam fuga aut est optio. Aspernatur laudantium accusamus rerum dolor ea consectetur expedita.",
                "description_en": "Tenetur quo voluptate maxime sit laboriosam. Quis pariatur amet molestiae veniam suscipit nobis minus. Omnis dolorem dicta laudantium enim magni.",
                "usage": "Quisquam enim ut molestiae. Eligendi reprehenderit atque voluptatibus non.",
                "usage_en": "Rerum odio alias aut ipsa cum alias dignissimos. Facere nam ea quae minus consequatur sint sint. Optio cupiditate voluptatum nihil aut nulla. Quo et vel nihil facere natus est.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?96985",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?64046",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?97904",
                "product_video": null,
                "status": 1,
                "rating": 0.91,
                "sold_count": 9296,
                "review_count": 5528,
                "created_at": "2020-07-27 23:54:00",
                "updated_at": "2020-08-26 23:57:40",
                "product_category": {
                    "id": 2,
                    "slug": "velit-tenetur",
                    "title": "香水",
                    "title_en": "at iure consectetur",
                    "describe": "Accusantium cumque ut fugiat et reprehenderit et. Maxime debitis harum dolores sit. Occaecati quia molestiae amet alias sed odit. Et unde ipsum et est quo quia cumque.",
                    "describe_en": "Ut ut quidem dignissimos iste officiis quisquam. Et qui enim error et. Impedit sed aliquid totam enim. Labore velit dignissimos temporibus voluptatem.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?61354",
                    "description": "Eos sit beatae blanditiis nihil.",
                    "description_en": "Qui rerum unde vel.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?95689",
                    "parent_id": 9,
                    "created_at": "2020-08-26 23:31:03",
                    "updated_at": "2020-08-17 23:29:00"
                }
            },
            {
                "id": 8,
                "product_category_id": 19,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "ad atque praesentium",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?48115",
                "slug": "eligendi-incidunt",
                "short_description": "Est a aut quas ea enim.",
                "short_description_en": "Consectetur quibusdam ipsum rerum quis quo nulla voluptatem. Voluptates laborum expedita expedita omnis labore deleniti. Distinctio illum aut consequatur perferendis et. Fugit fuga harum quas quasi harum laboriosam sunt.",
                "price": "807.00",
                "sale_price": "1.00",
                "stock": 815,
                "spec": null,
                "seo_title": "voluptatibus tenetur ut",
                "seo_keyword": "corrupti",
                "seo_description": "Culpa ex aut sed in qui cumque.",
                "benefit": "Facere voluptatem sit in atque ullam. Non mollitia dolorum non quod qui. Et dolores aut error pariatur amet perferendis accusantium. Dolorum praesentium veniam in non eum. Quia animi beatae assumenda ipsum nisi.",
                "benefit_en": "Fugit suscipit exercitationem nisi alias. Minus atque qui voluptas sed in rerum qui. Quibusdam eligendi in sed tempore molestiae qui.",
                "tech_description": "Aut qui suscipit aliquam repellat corporis. Consectetur minima atque dicta maiores tempore nam pariatur. Voluptatum facilis laborum iste voluptas et modi. Quasi culpa sapiente et aut tempore reprehenderit.",
                "tech_description_en": "Eum molestias et voluptatem. Sed voluptatum hic consectetur labore. Qui voluptate dolorum error.",
                "description": "Aspernatur odio assumenda rerum. Voluptatum qui quis doloremque velit illum nobis. Nihil porro aspernatur cumque fuga. Architecto laudantium id cumque eum et.",
                "description_en": "Soluta quibusdam laborum soluta aut. Sit aut omnis enim placeat sit asperiores. Magnam necessitatibus delectus reprehenderit illo quia. Cum qui delectus ut natus eveniet aut est. Rem ad natus delectus at.",
                "usage": "Quis dolor consequatur et perspiciatis qui omnis. Nisi saepe similique temporibus non alias provident doloremque autem. Molestiae quas suscipit qui.",
                "usage_en": "Ut autem ea quia veniam impedit. Dolores magni fugiat earum soluta. Provident et sed aut voluptatem itaque voluptates. Corrupti quidem earum ut accusantium ut sit quae.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?60252",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?75023",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?45485",
                "product_video": null,
                "status": 1,
                "rating": 1.96,
                "sold_count": 3151,
                "review_count": 1874,
                "created_at": "2020-08-10 04:42:49",
                "updated_at": "2020-08-06 22:59:23",
                "product_category": {
                    "id": 19,
                    "slug": "hic-est",
                    "title": "身体护理",
                    "title_en": "rem aut quas",
                    "describe": "Itaque cum accusamus modi labore. Amet aliquid est eum sed architecto ratione omnis. Omnis molestiae non illo est possimus harum doloribus.",
                    "describe_en": "Nesciunt odit consequatur rem qui sint eos. Iste nobis architecto voluptate libero sint alias. Facere est sunt enim ea iste.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?98832",
                    "description": "Vero autem sapiente minima aut consectetur laboriosam.",
                    "description_en": "Impedit totam consequuntur aliquid error voluptas similique.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?53515",
                    "parent_id": 9,
                    "created_at": "2020-07-30 12:37:58",
                    "updated_at": "2020-08-03 20:58:40"
                }
            },
            {
                "id": 52,
                "product_category_id": 2,
                "product_name": "qwrqwer",
                "product_name_en": "qwerwef",
                "thumbnail": "http:\/\/wutang-store.oss-cn-shenzhen.aliyuncs.com\/Products\/rIv9WDkSpHagYVJVA6keAsIxbbVsVgwZtfTpmTxj.jpeg",
                "slug": "p-sdfdfsdafasdf-p",
                "short_description": "<p>sdfdfsdafasdf<\/p>",
                "short_description_en": "<p>sdfdfsdafasdfsadfsadf<\/p>",
                "price": "1234.00",
                "sale_price": "1234.00",
                "stock": 1234,
                "spec": null,
                "seo_title": "1234fdaf",
                "seo_keyword": "asdfas",
                "seo_description": "dfsadfasdf",
                "benefit": "<p>sdfdfsdafasdfsadfsadfasdfsadf<\/p>",
                "benefit_en": "<p>sdfdfsdafasdfsadfsadfasdfsadfasdfsadf<\/p>",
                "tech_description": "<p>sdfdfsdafasdfsadfsadfasdfsadfasdfsadfasdfsadf<\/p>",
                "tech_description_en": "<p>sdfdfsdafasdfsadfsadfasdfsadfasdfsadfasdfsadfasdfasdf<\/p>",
                "description": "<p>sdfdfsdafasdfsadfsadfasdfsadfasdfsadfasdfsadfasdfasdfsadfsa<\/p>",
                "description_en": "<p>sdfdfsdafasdfsadfsadfasdfsadfasdfsadfasdfsadfasdfasdfsadfsaasdf<\/p>",
                "usage": "<p>sdfdfsdafasdfsadfsadfasdfsadfasdfsadfasdfsadfasdfasdfsadfsaasdfasdf<\/p>",
                "usage_en": "<p>sdfdfsdafasdfsadfsadfasdfsadfasdfsadfasdfsadfasdfasdfsadfsaasdfasdfasdf<\/p>",
                "main_image": "http:\/\/wutang-store.oss-cn-shenzhen.aliyuncs.com\/Products\/B4QTHEB11QwYNQeMJ0TQc44bRxpgaFvjsXF4NxeW.jpeg",
                "main_image_2": "http:\/\/wutang-store.oss-cn-shenzhen.aliyuncs.com\/Products\/TZOnPFUMUUZAkrWQlPIjh1vcyoNfnB3gNHiGGWKm.jpeg",
                "benefit_image": "http:\/\/wutang-store.oss-cn-shenzhen.aliyuncs.com\/Products\/15UJqaKnTn3bE3WU8JCwvjZCQfST79iHr8etrGIa.jpeg",
                "product_video": "http:\/\/wutang-store.oss-cn-shenzhen.aliyuncs.com\/Products\/IWwd1nvtb5mrsUdXjLkoXYC2BEjb8JCmvitwk9gw.avi",
                "status": 1,
                "rating": 4,
                "sold_count": 23,
                "review_count": 32,
                "created_at": "2020-08-28 10:27:26",
                "updated_at": "2020-08-28 10:27:26",
                "product_category": {
                    "id": 2,
                    "slug": "velit-tenetur",
                    "title": "香水",
                    "title_en": "at iure consectetur",
                    "describe": "Accusantium cumque ut fugiat et reprehenderit et. Maxime debitis harum dolores sit. Occaecati quia molestiae amet alias sed odit. Et unde ipsum et est quo quia cumque.",
                    "describe_en": "Ut ut quidem dignissimos iste officiis quisquam. Et qui enim error et. Impedit sed aliquid totam enim. Labore velit dignissimos temporibus voluptatem.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?61354",
                    "description": "Eos sit beatae blanditiis nihil.",
                    "description_en": "Qui rerum unde vel.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?95689",
                    "parent_id": 9,
                    "created_at": "2020-08-26 23:31:03",
                    "updated_at": "2020-08-17 23:29:00"
                }
            },
            {
                "id": 11,
                "product_category_id": 19,
                "product_name": "黑钻肌光精华",
                "product_name_en": "earum quis quis",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?73959",
                "slug": "fugit-excepturi",
                "short_description": "Omnis amet qui expedita dolorem quae dolorum.",
                "short_description_en": "Ut alias voluptatem amet consequatur sed quia. In facilis distinctio magnam incidunt vel quae suscipit.",
                "price": "4748.00",
                "sale_price": "1.00",
                "stock": 292,
                "spec": null,
                "seo_title": "quo voluptates quaerat",
                "seo_keyword": "laudantium",
                "seo_description": "Qui nam sed quam provident autem.",
                "benefit": "Modi itaque qui et perspiciatis sed. Est fuga voluptate nostrum. Adipisci cum debitis totam repellendus ea sit officia. Qui quisquam at illo accusamus omnis. Optio minus officia qui ut praesentium qui.",
                "benefit_en": "Ut ipsam velit perspiciatis nihil iure incidunt. Tenetur sed sequi ut perferendis iure eum consectetur. Vero iusto fuga doloremque dolor explicabo.",
                "tech_description": "Pariatur rerum exercitationem delectus qui. Magnam cum rerum id provident omnis vel pariatur delectus. Eos reprehenderit fuga dolorem unde. Et excepturi ad non accusamus dolores eum cum.",
                "tech_description_en": "Itaque aperiam maxime velit autem et at aut. Qui autem facilis sit facere porro excepturi. Voluptate veniam esse quia est.",
                "description": "Maiores mollitia ut maiores molestias eos. Aut ducimus nostrum laboriosam voluptatum. Voluptatem dolorem hic qui expedita. In nam sequi molestiae non dicta ea vitae. Nihil magni necessitatibus at et.",
                "description_en": "Iusto qui voluptatibus sunt molestiae. Pariatur error rerum exercitationem provident. Voluptates tempora totam fugiat ut nemo consequatur neque. Natus quo laboriosam beatae.",
                "usage": "Odio odio odit voluptatum odit sint. Rerum voluptas soluta in iste. Quidem quisquam veritatis sed blanditiis necessitatibus excepturi illum. Unde minima quibusdam culpa in voluptatem.",
                "usage_en": "Voluptatem corporis voluptatem consequatur magni dolor necessitatibus quo velit. Harum nulla et quaerat tempora officia iusto sunt veniam. Omnis vel voluptates qui.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?58277",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?71152",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?73121",
                "product_video": null,
                "status": 1,
                "rating": 1.05,
                "sold_count": 1342,
                "review_count": 7397,
                "created_at": "2020-08-22 10:24:22",
                "updated_at": "2020-08-08 11:50:49",
                "product_category": {
                    "id": 19,
                    "slug": "hic-est",
                    "title": "身体护理",
                    "title_en": "rem aut quas",
                    "describe": "Itaque cum accusamus modi labore. Amet aliquid est eum sed architecto ratione omnis. Omnis molestiae non illo est possimus harum doloribus.",
                    "describe_en": "Nesciunt odit consequatur rem qui sint eos. Iste nobis architecto voluptate libero sint alias. Facere est sunt enim ea iste.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?98832",
                    "description": "Vero autem sapiente minima aut consectetur laboriosam.",
                    "description_en": "Impedit totam consequuntur aliquid error voluptas similique.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?53515",
                    "parent_id": 9,
                    "created_at": "2020-07-30 12:37:58",
                    "updated_at": "2020-08-03 20:58:40"
                }
            },
            {
                "id": 12,
                "product_category_id": 20,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "est quia vero",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?30726",
                "slug": "in-aperiam",
                "short_description": "Totam omnis ut repellendus et eveniet.",
                "short_description_en": "Unde et voluptatibus sit placeat voluptas voluptatem ut deleniti. Nesciunt accusantium in earum ullam. Tempora quod ipsam possimus et et. Quasi sit odio enim.",
                "price": "1142.00",
                "sale_price": "1.00",
                "stock": 832,
                "spec": null,
                "seo_title": "est exercitationem quam",
                "seo_keyword": "hic",
                "seo_description": "Itaque porro dicta modi vel similique.",
                "benefit": "Aut nihil et quia doloribus eligendi. Minima quis repellendus ut dolores. Odit recusandae odit reiciendis odio autem voluptatibus. Numquam ipsum eos voluptatem dolor id delectus.",
                "benefit_en": "Sunt esse dolorem laudantium repellendus ab. Neque cupiditate veniam pariatur.",
                "tech_description": "Fugit qui minima sit animi. Libero atque culpa repudiandae quis. Magnam laboriosam consequatur aut tempora natus qui aut. Et consequuntur perferendis perspiciatis.",
                "tech_description_en": "Facere temporibus aut hic magnam. Alias rerum aut nihil aut. Autem iste sapiente reprehenderit vel reprehenderit quo quaerat ipsam. Quod velit voluptatum explicabo dolores.",
                "description": "Natus nesciunt ea dolore quam est eum. Qui quaerat temporibus tempora eveniet. Non dolorem ad dolorem omnis quibusdam doloremque maxime.",
                "description_en": "Omnis asperiores voluptatem a doloribus. Quisquam consectetur qui modi cum. Doloribus occaecati odit harum veritatis quam hic. Veniam consequatur rerum consequuntur nihil consequuntur cumque.",
                "usage": "Earum nesciunt hic eius cupiditate voluptatem atque deserunt. Pariatur numquam quasi magnam iste in. Corrupti culpa magni et inventore voluptatem consequatur quis. Minima porro ipsum voluptatem beatae voluptates maxime.",
                "usage_en": "Incidunt nesciunt rem consequatur natus neque architecto. Impedit dolorum enim fugiat nesciunt libero.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?90182",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?61994",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?12087",
                "product_video": null,
                "status": 1,
                "rating": 5.99,
                "sold_count": 2632,
                "review_count": 1894,
                "created_at": "2020-08-12 11:52:27",
                "updated_at": "2020-08-19 20:29:42",
                "product_category": {
                    "id": 20,
                    "slug": "debitis-molestiae",
                    "title": "精华",
                    "title_en": "perspiciatis sunt ut",
                    "describe": "Ad sint nihil asperiores vero quia odio. Dolores est eius corrupti sequi dolores officia. Est et sint et eos perferendis.",
                    "describe_en": "Dolorem enim omnis sint sit accusamus consequuntur. Exercitationem quia qui dolore qui sed animi. Veritatis fuga corrupti omnis nobis occaecati quasi numquam.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?70984",
                    "description": "Odit perferendis aliquam quia porro perspiciatis eos.",
                    "description_en": "Repudiandae nesciunt quo totam corrupti nesciunt.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?60210",
                    "parent_id": 6,
                    "created_at": "2020-08-15 09:23:09",
                    "updated_at": "2020-08-10 18:37:53"
                }
            },
            {
                "id": 14,
                "product_category_id": 10,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "repellat nihil incidunt",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?11404",
                "slug": "et-enim",
                "short_description": "Illum ab perspiciatis veritatis vel voluptatem qui.",
                "short_description_en": "Commodi qui dicta quibusdam ad odit quas voluptatem. Dignissimos sed doloremque sunt molestias non ad. Ex repudiandae ullam qui.",
                "price": "2751.00",
                "sale_price": "1.00",
                "stock": 767,
                "spec": null,
                "seo_title": "dolorem nobis hic",
                "seo_keyword": "dolorem",
                "seo_description": "Aliquam est eius omnis.",
                "benefit": "Ut nihil totam commodi totam. At molestias porro odio quis hic. Molestias vero facilis totam ut tempore sequi.",
                "benefit_en": "Et similique possimus eaque. Et dignissimos facere adipisci corporis. Blanditiis pariatur ut rerum. Laboriosam quia possimus aperiam cumque dicta delectus iusto doloremque.",
                "tech_description": "Praesentium molestias laboriosam et eos. Nisi sapiente dolor doloribus exercitationem.",
                "tech_description_en": "Laudantium id nemo eveniet perspiciatis ratione. Odit aut ducimus hic nostrum ab sit. Modi nostrum voluptas enim nobis. Laudantium ut eum ratione in sed impedit.",
                "description": "Voluptatem quidem ipsa labore ut repudiandae. Exercitationem sint omnis veritatis consequatur. Et sint similique velit alias doloremque sint rerum. Eaque explicabo sed odio laboriosam omnis.",
                "description_en": "Quod consequatur laboriosam illo sed eius in autem. Ut omnis quia sequi similique animi iste. Laborum ut quia cum et aperiam eveniet quisquam. Aliquam aperiam officiis dolor enim qui fuga omnis consequatur.",
                "usage": "Deserunt ex asperiores ipsam debitis nemo accusantium expedita. Eligendi explicabo autem doloremque animi dicta quisquam enim eligendi. Aut dolorem quam autem rerum incidunt qui libero omnis.",
                "usage_en": "Non ex non ut quod dolores dolorem esse. Aspernatur atque dicta earum. Cumque voluptatibus exercitationem distinctio libero.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?30602",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?18628",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?30652",
                "product_video": null,
                "status": 1,
                "rating": 7.52,
                "sold_count": 3968,
                "review_count": 5014,
                "created_at": "2020-07-29 23:09:55",
                "updated_at": "2020-08-07 05:22:35",
                "product_category": {
                    "id": 10,
                    "slug": "similique-et",
                    "title": "防晒",
                    "title_en": "dolores corporis aut",
                    "describe": "Velit suscipit et cumque. Et inventore nisi ea itaque earum maxime. Mollitia omnis dolores laudantium repellendus. Exercitationem dolorem quia ut et aspernatur.",
                    "describe_en": "Ex rerum iste dolorem facere aperiam omnis quo. Dicta eaque magnam quaerat et ex. Voluptas suscipit vel aut reiciendis ab iure. Voluptate incidunt voluptas modi.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?65473",
                    "description": "Amet ab et atque in quam.",
                    "description_en": "Quam consequatur et autem eligendi.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?54940",
                    "parent_id": 13,
                    "created_at": "2020-08-16 01:41:34",
                    "updated_at": "2020-08-03 04:04:39"
                }
            },
            {
                "id": 16,
                "product_category_id": 18,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "itaque voluptatum quaerat",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?61707",
                "slug": "nesciunt-quia",
                "short_description": "Qui est est odio.",
                "short_description_en": "Et illo qui omnis. Repellat voluptas illum eum impedit quia et eligendi quis. Et delectus similique expedita veniam.",
                "price": "8431.00",
                "sale_price": "1.00",
                "stock": 271,
                "spec": null,
                "seo_title": "ipsa officia ut",
                "seo_keyword": "nihil",
                "seo_description": "Qui quaerat asperiores quasi deserunt quo.",
                "benefit": "Optio qui et dolorem totam non. Sapiente quos enim quibusdam distinctio explicabo voluptatum. Libero molestiae officia deleniti quos natus. Id dicta ea doloribus et.",
                "benefit_en": "Voluptatem repellendus temporibus voluptas rerum similique sunt. Placeat explicabo aut quidem id enim voluptatum sit iure. Itaque occaecati debitis odio necessitatibus aperiam.",
                "tech_description": "Inventore modi minima excepturi aut. Dolores optio nihil qui. Sequi asperiores odit dolores eos dolores distinctio perspiciatis. Delectus mollitia harum libero quia enim ut impedit numquam.",
                "tech_description_en": "Sunt quisquam aspernatur dicta laborum minima repellendus quasi. Et omnis unde eum tenetur. Vel excepturi perferendis est ducimus aperiam. Aut itaque harum ullam. Commodi fugiat qui dolor et.",
                "description": "Sapiente beatae facilis corrupti assumenda iure enim. Consequatur et sed et sed.",
                "description_en": "Corporis explicabo iure vel. Omnis beatae ut impedit consequatur officia rerum libero. Illum ut sunt quaerat eveniet sed quae sint.",
                "usage": "Labore quibusdam hic dolorem ea delectus officia animi quaerat. Corrupti voluptatum ipsum sed. Qui eligendi eum iste et aut quidem voluptatem rerum. Ad architecto unde nisi vero et.",
                "usage_en": "Quos quasi sint accusantium sed provident quidem. Voluptatem dolor et quibusdam qui quia accusantium aut. Molestiae praesentium aut maxime ut et.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?38904",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?78069",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?27481",
                "product_video": null,
                "status": 1,
                "rating": 7.3,
                "sold_count": 7107,
                "review_count": 1128,
                "created_at": "2020-08-14 06:10:43",
                "updated_at": "2020-08-03 21:47:36",
                "product_category": {
                    "id": 18,
                    "slug": "molestiae-voluptatem",
                    "title": "爽肤水",
                    "title_en": "at et nihil",
                    "describe": "Vitae repellendus animi nihil ad facere dicta quas. Autem dolorem qui nihil et cumque odit nesciunt tenetur. Quam quibusdam harum hic et deleniti deserunt.",
                    "describe_en": "Odio et eaque debitis iusto. Hic provident quo maiores. Autem saepe ea qui qui quod fugit sapiente. Animi aut quibusdam pariatur ut est quo dolore.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?38240",
                    "description": "Quidem aut et maiores.",
                    "description_en": "Debitis dicta aut iste nam.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?93932",
                    "parent_id": 4,
                    "created_at": "2020-08-15 06:18:16",
                    "updated_at": "2020-07-29 23:25:39"
                }
            },
            {
                "id": 23,
                "product_category_id": 15,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "impedit sit in",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?59013",
                "slug": "dolorem-et",
                "short_description": "Qui illum temporibus qui quo.",
                "short_description_en": "Qui minima sapiente optio ut esse qui. Harum alias repudiandae earum porro vero. Dolores quidem tempora consequatur dolor reiciendis cum et aut.",
                "price": "5188.00",
                "sale_price": "1.00",
                "stock": 79,
                "spec": null,
                "seo_title": "culpa libero libero",
                "seo_keyword": "quibusdam",
                "seo_description": "Ut dolorum autem voluptas.",
                "benefit": "Repudiandae sint voluptas aut in quibusdam aliquam. Itaque ipsum deserunt dolor. Facilis quisquam sapiente et alias. Iusto harum explicabo illo sunt.",
                "benefit_en": "Voluptatem facilis sunt asperiores ipsam qui. Ut autem provident voluptates animi similique commodi aperiam dolorem. Omnis iste aut non eum optio delectus non cumque.",
                "tech_description": "Dolores quia debitis quo asperiores atque iusto est. Minima perferendis dignissimos nulla voluptatem. Iure non accusamus quia voluptatem. Vel aut libero dolorum et.",
                "tech_description_en": "Vitae nihil quia dicta dolorum dolor. Ullam molestiae quis eveniet ut. Et itaque placeat aut beatae.",
                "description": "Et quo ratione impedit aspernatur culpa. Unde voluptas optio voluptas dicta dignissimos velit eos. Maiores sunt rerum voluptatem quis aspernatur ipsa labore. Itaque ut aut nesciunt et.",
                "description_en": "Eius enim sit ex numquam ipsa corrupti. Corporis omnis cumque provident tempora ea fuga. Dolorem quis quaerat dolores consequatur animi soluta. Eveniet eum culpa voluptatem sed qui dolorum ea. Porro ut sequi labore molestiae sint.",
                "usage": "Ab suscipit iusto et necessitatibus. Vel sed itaque ut minima maiores. Nulla nostrum soluta magnam sunt quidem.",
                "usage_en": "Fugiat quis sunt qui ex ipsum distinctio dolor. Quis voluptatem repellendus ut ducimus. Repudiandae consequatur sed est veniam ut.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?52322",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?50460",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?76459",
                "product_video": null,
                "status": 1,
                "rating": 9.69,
                "sold_count": 4554,
                "review_count": 4078,
                "created_at": "2020-08-14 12:09:26",
                "updated_at": "2020-08-16 12:42:28",
                "product_category": {
                    "id": 15,
                    "slug": "velit-id",
                    "title": "男士护肤",
                    "title_en": "laboriosam voluptatem cumque",
                    "describe": "Quis tenetur praesentium temporibus rem consequatur sapiente. Quas repellat asperiores dolor. Dolores nesciunt illo fugiat et corrupti nihil est. Iusto vel consequatur tempore.",
                    "describe_en": "Labore omnis dicta illo quis quas eveniet. Ex mollitia sunt dicta atque. Quia sint rerum non placeat nobis.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?21069",
                    "description": "Pariatur aut eum quis accusamus.",
                    "description_en": "Quasi ipsa consequuntur sed explicabo doloribus iusto.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?44933",
                    "parent_id": 7,
                    "created_at": "2020-07-29 09:00:55",
                    "updated_at": "2020-08-17 22:34:48"
                }
            },
            {
                "id": 32,
                "product_category_id": 19,
                "product_name": "黑钻肌光精华",
                "product_name_en": "eveniet et sapiente",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?31132",
                "slug": "ratione-animi",
                "short_description": "Tempore quis inventore quae quis illo voluptas.",
                "short_description_en": "Quo animi ratione corporis. Voluptas perspiciatis neque rerum qui expedita impedit distinctio in. Qui voluptatem occaecati itaque ut voluptatibus. Blanditiis iusto molestiae at aliquam sed.",
                "price": "7095.00",
                "sale_price": "1.00",
                "stock": 883,
                "spec": null,
                "seo_title": "et optio eligendi",
                "seo_keyword": "odio",
                "seo_description": "Deserunt nesciunt minus facere officia a.",
                "benefit": "Quos tempora aperiam assumenda autem illum quaerat fuga. Sequi voluptas consectetur in hic amet soluta vitae molestias. Sapiente earum neque tenetur facere autem velit.",
                "benefit_en": "Ratione dolor odio nobis velit cumque libero et qui. Dolor accusamus ut exercitationem sit et eum. Nihil nisi amet rem sed. Quisquam nisi maiores quibusdam et ullam quis.",
                "tech_description": "Corporis porro neque corrupti error totam. Harum ea voluptatibus omnis at deleniti.",
                "tech_description_en": "Eius ea repellendus corrupti ea. Corrupti quisquam qui quis quo dolores nam. Sed ducimus facilis recusandae enim dignissimos est quasi. Eaque voluptatem voluptate quam excepturi.",
                "description": "Voluptatem ea cum ad corporis minima excepturi deleniti. Quibusdam aut sed quae alias quisquam modi alias. Hic sunt assumenda molestiae est adipisci quam cum.",
                "description_en": "Et molestiae nihil magnam consequuntur eaque deleniti. Explicabo ratione sint nihil sint. Quibusdam rerum aut ut numquam aliquid facilis molestiae. Totam ut ut non eum officiis eum autem.",
                "usage": "Animi et consequatur fugiat earum architecto. Saepe ipsam culpa consequatur quia ab qui praesentium. Quibusdam qui rerum repudiandae in exercitationem dolorem. Ipsa dolorem ipsam fugiat dolore sit ratione omnis.",
                "usage_en": "Reprehenderit amet eum sed ut non est recusandae. Rem vel sit porro amet dolorum incidunt. Consequatur quia sit quo rerum illo eveniet rerum. Quod fuga sunt incidunt quo ea similique et aspernatur.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?92689",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?58417",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?49282",
                "product_video": null,
                "status": 1,
                "rating": 2.34,
                "sold_count": 2136,
                "review_count": 9144,
                "created_at": "2020-08-26 10:42:37",
                "updated_at": "2020-08-02 01:09:25",
                "product_category": {
                    "id": 19,
                    "slug": "hic-est",
                    "title": "身体护理",
                    "title_en": "rem aut quas",
                    "describe": "Itaque cum accusamus modi labore. Amet aliquid est eum sed architecto ratione omnis. Omnis molestiae non illo est possimus harum doloribus.",
                    "describe_en": "Nesciunt odit consequatur rem qui sint eos. Iste nobis architecto voluptate libero sint alias. Facere est sunt enim ea iste.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?98832",
                    "description": "Vero autem sapiente minima aut consectetur laboriosam.",
                    "description_en": "Impedit totam consequuntur aliquid error voluptas similique.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?53515",
                    "parent_id": 9,
                    "created_at": "2020-07-30 12:37:58",
                    "updated_at": "2020-08-03 20:58:40"
                }
            },
            {
                "id": 33,
                "product_category_id": 18,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "omnis consequuntur quos",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?33529",
                "slug": "quis-laudantium",
                "short_description": "Ut laboriosam itaque aut.",
                "short_description_en": "Saepe officiis magnam consequatur doloremque. Error et molestiae ut facere eius voluptas. Officia cum voluptatem totam voluptatem repudiandae corrupti molestiae in. Hic quis illum non.",
                "price": "1844.00",
                "sale_price": "1.00",
                "stock": 14,
                "spec": null,
                "seo_title": "dolor corporis facilis",
                "seo_keyword": "ut",
                "seo_description": "Magnam itaque facere libero.",
                "benefit": "Nobis accusantium fugit dolorem mollitia dolor et quia. Commodi eum assumenda ut modi eius porro provident. Fuga cum consequatur vel vero. Magnam dolorem nam eum aut corrupti veniam deleniti maiores.",
                "benefit_en": "Consequuntur minus ea nihil fugit numquam distinctio qui. Sed non fuga ratione libero et. Deleniti dolores placeat aut rerum eveniet. Rem qui similique atque inventore facilis inventore.",
                "tech_description": "Eos sed dolor quae sint dolorem eum tempora. Qui accusamus velit facere dolore. Voluptatum culpa libero iure beatae sit molestiae qui aut. Sed molestiae quo ratione error qui culpa incidunt.",
                "tech_description_en": "Voluptatem perspiciatis sed at quia. Est ex nihil ratione voluptate quae aut natus vel. Et totam nemo itaque nostrum voluptatem.",
                "description": "Atque blanditiis quia quasi exercitationem velit et. Beatae earum ut accusantium numquam amet hic labore excepturi. Ea accusamus hic non numquam. Saepe voluptatem accusamus velit veniam et tempora.",
                "description_en": "Voluptas qui sint aut quam voluptatem. Ex id molestiae illum aut nisi qui necessitatibus libero. Voluptas molestiae occaecati magnam sunt eos.",
                "usage": "Rem saepe architecto molestiae error. Totam modi harum sit. In sit qui eum earum id excepturi iste. Iure corrupti accusantium qui ea fugiat et velit.",
                "usage_en": "Dolor voluptas dolorum quo consequuntur minima. Asperiores repellendus consequatur consequatur et in deleniti minus.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?46451",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?12087",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?82302",
                "product_video": null,
                "status": 1,
                "rating": 3.07,
                "sold_count": 7895,
                "review_count": 1683,
                "created_at": "2020-07-30 22:40:29",
                "updated_at": "2020-08-26 07:41:45",
                "product_category": {
                    "id": 18,
                    "slug": "molestiae-voluptatem",
                    "title": "爽肤水",
                    "title_en": "at et nihil",
                    "describe": "Vitae repellendus animi nihil ad facere dicta quas. Autem dolorem qui nihil et cumque odit nesciunt tenetur. Quam quibusdam harum hic et deleniti deserunt.",
                    "describe_en": "Odio et eaque debitis iusto. Hic provident quo maiores. Autem saepe ea qui qui quod fugit sapiente. Animi aut quibusdam pariatur ut est quo dolore.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?38240",
                    "description": "Quidem aut et maiores.",
                    "description_en": "Debitis dicta aut iste nam.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?93932",
                    "parent_id": 4,
                    "created_at": "2020-08-15 06:18:16",
                    "updated_at": "2020-07-29 23:25:39"
                }
            },
            {
                "id": 35,
                "product_category_id": 10,
                "product_name": "钻石焕活面膜",
                "product_name_en": "quis est dolor",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?58329",
                "slug": "iure-ullam",
                "short_description": "Placeat tempore ducimus at rerum suscipit dignissimos.",
                "short_description_en": "Aut qui exercitationem qui asperiores assumenda ducimus eveniet. Dolorum excepturi distinctio delectus repellendus quia doloribus inventore. Nemo est deserunt voluptatibus hic facilis libero officia soluta.",
                "price": "8973.00",
                "sale_price": "1.00",
                "stock": 124,
                "spec": null,
                "seo_title": "voluptatibus alias ab",
                "seo_keyword": "ut",
                "seo_description": "Dignissimos nihil accusamus aliquam sunt illo aliquid.",
                "benefit": "Necessitatibus inventore nisi numquam aut. Placeat omnis cupiditate voluptatem non sunt.",
                "benefit_en": "Similique quidem occaecati possimus fuga delectus aut aliquid. Deleniti assumenda amet sit rerum. Quae commodi totam aut nemo et sit est.",
                "tech_description": "Excepturi eaque est modi. Aperiam a unde vel unde non optio. Iste sequi dicta nulla rem.",
                "tech_description_en": "Doloremque suscipit consequatur dolore laudantium est. Eum modi qui et explicabo nemo sunt. Atque officia vitae assumenda voluptates repudiandae quia neque. Aut quia sint architecto nihil omnis. Numquam dolorem ipsum sint perspiciatis corporis.",
                "description": "Ducimus architecto ea a blanditiis illum explicabo dolores. Saepe libero et est ut. Possimus illo omnis fugiat voluptatem.",
                "description_en": "Consequatur minus nisi consequatur id aliquid et quaerat. Non quisquam aut ullam quo sed quasi provident et. Consequatur autem architecto incidunt iusto est.",
                "usage": "Deserunt dolorem iure quia deleniti. Rerum qui laboriosam et natus rerum animi aut. Eius nemo tenetur impedit et atque. Enim fuga non repellendus vero velit cum eum eveniet.",
                "usage_en": "Sed nihil sed delectus eum soluta quae tempore. Et perferendis similique alias.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?12313",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?44178",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?72894",
                "product_video": null,
                "status": 1,
                "rating": 3.9,
                "sold_count": 9002,
                "review_count": 3563,
                "created_at": "2020-08-13 01:02:03",
                "updated_at": "2020-08-23 13:21:01",
                "product_category": {
                    "id": 10,
                    "slug": "similique-et",
                    "title": "防晒",
                    "title_en": "dolores corporis aut",
                    "describe": "Velit suscipit et cumque. Et inventore nisi ea itaque earum maxime. Mollitia omnis dolores laudantium repellendus. Exercitationem dolorem quia ut et aspernatur.",
                    "describe_en": "Ex rerum iste dolorem facere aperiam omnis quo. Dicta eaque magnam quaerat et ex. Voluptas suscipit vel aut reiciendis ab iure. Voluptate incidunt voluptas modi.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?65473",
                    "description": "Amet ab et atque in quam.",
                    "description_en": "Quam consequatur et autem eligendi.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?54940",
                    "parent_id": 13,
                    "created_at": "2020-08-16 01:41:34",
                    "updated_at": "2020-08-03 04:04:39"
                }
            },
            {
                "id": 37,
                "product_category_id": 2,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "possimus fugiat dolorem",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?85867",
                "slug": "et-culpa",
                "short_description": "Eos nihil placeat dolor aut.",
                "short_description_en": "Debitis sed ab mollitia non voluptatibus id. Quisquam deserunt illo qui consequatur asperiores voluptatem. Quia sit ducimus qui aliquid. Animi id repellat praesentium voluptate.",
                "price": "3926.00",
                "sale_price": "1.00",
                "stock": 448,
                "spec": null,
                "seo_title": "ipsum ratione veniam",
                "seo_keyword": "consequatur",
                "seo_description": "Et debitis earum voluptatem a esse.",
                "benefit": "Et labore recusandae similique ut. Consequatur voluptatem neque ex. Nihil eum laudantium ullam dolores ratione.",
                "benefit_en": "Saepe eligendi aut fugiat consequatur iure dolores. Dignissimos est dolores recusandae qui ut. Dolores dolor voluptatibus voluptatum id eos.",
                "tech_description": "Sit non et atque nam et fugit optio dignissimos. Eos quos itaque nemo eligendi sit. Aut minima magni dolorum. Quam hic ut consectetur rerum quaerat quae maxime.",
                "tech_description_en": "Autem ullam earum doloremque eos voluptatibus esse. Quos a similique vero molestiae voluptas qui. Eveniet dolorem at placeat nulla. Omnis nihil laborum dolores. Non voluptas natus quis fuga.",
                "description": "Corporis et culpa et quibusdam consectetur. Animi sed autem repellat mollitia harum. Beatae illum dolorem quia dolorem. Velit ea id provident perferendis ut veniam.",
                "description_en": "Porro iusto qui quis in qui. Quis laudantium omnis nostrum facere est. Soluta perferendis iste magni labore dolores recusandae unde. Qui voluptatem nisi ut corporis inventore quia.",
                "usage": "Reiciendis eligendi sit ex corporis iusto est. Vel dolor iste velit tempore dolores. Molestiae qui accusantium ut provident ipsa neque quidem. Non in exercitationem odit aut.",
                "usage_en": "Dolores et quas nihil iste eum esse quasi. Voluptatem voluptas repellendus id quas. Est sint dolorem quod non dicta. Omnis aspernatur voluptatem velit aut quo.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?68733",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?51530",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?37533",
                "product_video": null,
                "status": 1,
                "rating": 4.83,
                "sold_count": 9796,
                "review_count": 9180,
                "created_at": "2020-08-24 13:50:36",
                "updated_at": "2020-08-08 06:25:41",
                "product_category": {
                    "id": 2,
                    "slug": "velit-tenetur",
                    "title": "香水",
                    "title_en": "at iure consectetur",
                    "describe": "Accusantium cumque ut fugiat et reprehenderit et. Maxime debitis harum dolores sit. Occaecati quia molestiae amet alias sed odit. Et unde ipsum et est quo quia cumque.",
                    "describe_en": "Ut ut quidem dignissimos iste officiis quisquam. Et qui enim error et. Impedit sed aliquid totam enim. Labore velit dignissimos temporibus voluptatem.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?61354",
                    "description": "Eos sit beatae blanditiis nihil.",
                    "description_en": "Qui rerum unde vel.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?95689",
                    "parent_id": 9,
                    "created_at": "2020-08-26 23:31:03",
                    "updated_at": "2020-08-17 23:29:00"
                }
            }
        ],
        "first_page_url": "http:\/\/localhost\/api\/product_new?page=1",
        "from": 1,
        "last_page": 2,
        "last_page_url": "http:\/\/localhost\/api\/product_new?page=2",
        "next_page_url": "http:\/\/localhost\/api\/product_new?page=2",
        "path": "http:\/\/localhost\/api\/product_new",
        "per_page": 15,
        "prev_page_url": null,
        "to": 15,
        "total": 21
    },
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/product_new`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | 页码
    `page_limit` |  optional  | 每页数量

<!-- END_e1ee2f452be977620f7e0c0045529fd9 -->

#[API] Shop cart

购物车管理
<!-- START_f422763f18217564020435e1877230b4 -->
## Request shop cart items
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
    -d '{"product_list":[{"product_id":3}]}'

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
## According type to change cart item
根据type改变购物车商品数量

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/shop_carts/1?type=inventore&product_id=sint&amount=eos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/shop_carts/1"
);

let params = {
    "type": "inventore",
    "product_id": "sint",
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
    "http://localhost/api/shop_carts/1?product_id=laboriosam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/shop_carts/1"
);

let params = {
    "product_id": "laboriosam",
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
    -d '{"province":"ipsam","city":"rerum","district":"est","address":"est","zip":3,"contact_name":"quod","contact_phone":5}'

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
    "province": "ipsam",
    "city": "rerum",
    "district": "est",
    "address": "est",
    "zip": 3,
    "contact_name": "quod",
    "contact_phone": 5
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
    "http://localhost/api/user_addresses/1?province=maxime&city=ullam&district=saepe&address=mollitia&zip=in&contact_name=exercitationem&contact_phone=assumenda" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_addresses/1"
);

let params = {
    "province": "maxime",
    "city": "ullam",
    "district": "saepe",
    "address": "mollitia",
    "zip": "in",
    "contact_name": "exercitationem",
    "contact_phone": "assumenda",
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
<!-- START_0dfc43254177dc34e3f52ec8dd6ee2bd -->
## User profile list
用户资料信息

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/user_profiles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_profiles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/user_profiles`


<!-- END_0dfc43254177dc34e3f52ec8dd6ee2bd -->

<!-- START_a8828153e88b176a13181f37c109ad54 -->
## Update user profile
编辑用户资料

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/user_profiles?profile_id=nihil&phone=numquam&real_name=sed&sex=non&birthday=occaecati&age=quae&province=quis&city=ad&district=et&address=molestiae&zip=quasi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_profiles"
);

let params = {
    "profile_id": "nihil",
    "phone": "numquam",
    "real_name": "sed",
    "sex": "non",
    "birthday": "occaecati",
    "age": "quae",
    "province": "quis",
    "city": "ad",
    "district": "et",
    "address": "molestiae",
    "zip": "quasi",
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
`PUT api/user_profiles`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `profile_id` |  required  | profile表id
    `phone` |  optional  | 联系方式
    `real_name` |  optional  | 真实姓名
    `sex` |  optional  | 性别
    `birthday` |  optional  | 生日
    `age` |  optional  | 年龄
    `province` |  optional  | 省
    `city` |  optional  | 市
    `district` |  optional  | 区/县
    `address` |  optional  | 详细地址
    `zip` |  optional  | 邮编

<!-- END_a8828153e88b176a13181f37c109ad54 -->

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
    "http://localhost/api/wish_list?product_id=aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/wish_list"
);

let params = {
    "product_id": "aut",
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
    "http://localhost/api/wish_list?product_id=quisquam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/wish_list"
);

let params = {
    "product_id": "quisquam",
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
    -G "http://localhost/alipay/bank_gateway/pay?no=facere&total_amount=tempora&payment_key=assumenda" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/alipay/bank_gateway/pay"
);

let params = {
    "no": "facere",
    "total_amount": "tempora",
    "payment_key": "assumenda",
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
    -G "http://localhost/alipay/aop_page/pay?no=earum&total_amount=voluptatem&payment_key=aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/alipay/aop_page/pay"
);

let params = {
    "no": "earum",
    "total_amount": "voluptatem",
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
    -G "http://localhost/alipay/legacy_express/pay?no=qui&total_amount=laborum&payment_key=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/alipay/legacy_express/pay"
);

let params = {
    "no": "qui",
    "total_amount": "laborum",
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
    -G "http://localhost/unionpay/pay?no=similique&total_amount=rerum&payment_key=quos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/unionpay/pay"
);

let params = {
    "no": "similique",
    "total_amount": "rerum",
    "payment_key": "quos",
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
    -G "http://localhost/api/response_code?10001=vero&10003=corporis&20001=et&40001=qui&40003=harum&40004=maiores&40005=non&50001=molestiae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/response_code"
);

let params = {
    "10001": "vero",
    "10003": "corporis",
    "20001": "et",
    "40001": "qui",
    "40003": "harum",
    "40004": "maiores",
    "40005": "non",
    "50001": "molestiae",
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


> Example response (404):

```json
{
    "message": ""
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
    -G "http://localhost/admin/asset_img?page=iste&page_limit=tenetur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/asset_img"
);

let params = {
    "page": "iste",
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
    "http://localhost/admin/asset_img?img=rerum&img_location=quis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/asset_img"
);

let params = {
    "img": "rerum",
    "img_location": "quis",
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


