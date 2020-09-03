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

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/alipay/legacy_express?page=minima&page_limit=repellat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/alipay/legacy_express"
);

let params = {
    "page": "minima",
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
    "http://store.wutang.com/admin/alipay/legacy_express" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"items":[{"pid":"sit","key":"ut","seller_email":"sunt"}]}'

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
            "pid": "sit",
            "key": "ut",
            "seller_email": "sunt"
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

<!-- START_5aaedad4e19f5f0c775e2d0e0d733e25 -->
## Request update alipay legacy express data
请求更新支付宝即时支付数据

> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/admin/alipay/legacy_express?id=quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/alipay/legacy_express"
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
`PUT admin/alipay/legacy_express`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | id值

<!-- END_5aaedad4e19f5f0c775e2d0e0d733e25 -->

<!-- START_45541c9041b17e28cf5ee2b42681a393 -->
## Request delete alipay legacy express data
请求删除支付宝即时支付数据

> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/admin/alipay/legacy_express?id=provident" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/alipay/legacy_express"
);

let params = {
    "id": "provident",
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
`DELETE admin/alipay/legacy_express`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | id值

<!-- END_45541c9041b17e28cf5ee2b42681a393 -->

#[ADMIN] Category story

分类故事
<!-- START_03beced1b66f1ed5912bf94c07e1a9a8 -->
## Get product category stoies
获取产品分类故事

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/category_stories?page=nisi&page_limit=non" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories"
);

let params = {
    "page": "nisi",
    "page_limit": "non",
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

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/category_stories?title=reiciendis&title_en=animi&description=ipsam&description_en=dolores&banner=veniam&product_category_id=ad" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories"
);

let params = {
    "title": "reiciendis",
    "title_en": "animi",
    "description": "ipsam",
    "description_en": "dolores",
    "banner": "veniam",
    "product_category_id": "ad",
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
    "http://store.wutang.com/admin/category_stories/1?title=fugit&title_en=at&description=quod&description_en=sed&banner=voluptatem&product_category_id=quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories/1"
);

let params = {
    "title": "fugit",
    "title_en": "at",
    "description": "quod",
    "description_en": "sed",
    "banner": "voluptatem",
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

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/logs/1?page=cumque&page_limit=placeat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/logs/1"
);

let params = {
    "page": "cumque",
    "page_limit": "placeat",
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
    "http://store.wutang.com/admin/logs/1?ids=corporis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/logs/1"
);

let params = {
    "ids": "corporis",
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
    -G "http://store.wutang.com/admin/order?page=libero&page_limit=quis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/order"
);

let params = {
    "page": "libero",
    "page_limit": "quis",
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

<!-- START_9f061547eaaed8143e1cfc71ecbc6ca4 -->
## Search order
搜索订单

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/order?page=laboriosam&page_limit=quo&username=quis&order_no=ratione&order_status=maiores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/order"
);

let params = {
    "page": "laboriosam",
    "page_limit": "quo",
    "username": "quis",
    "order_no": "ratione",
    "order_status": "maiores",
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

#[ADMIN] Product

商品管理
<!-- START_9a7c60de622aa327ea2ab22f57fe4f40 -->
## Get product list
获取产品列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/product?page=cum&page_limit=nisi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product"
);

let params = {
    "page": "cum",
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

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/product?product_category_id=saepe&product_name=excepturi&product_name_en=repellat&thumbnail=perspiciatis&slug=accusantium&short_description=quasi&short_description_en=hic&price=deserunt&sale_price=aut&stock=eligendi&seo_title=dicta&seo_keyword=aut&seo_description=sed&benefit=dolorem&benefit_en=eum&tech_description=a&tech_description_en=sint&description=et&description_en=qui&usage=ut&usage_en=mollitia&main_image=sint&main_image_2=molestias&benefit_image=quibusdam&product_video=ut&status=quos&rating=deserunt&sold_count=quia&review_count=aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product"
);

let params = {
    "product_category_id": "saepe",
    "product_name": "excepturi",
    "product_name_en": "repellat",
    "thumbnail": "perspiciatis",
    "slug": "accusantium",
    "short_description": "quasi",
    "short_description_en": "hic",
    "price": "deserunt",
    "sale_price": "aut",
    "stock": "eligendi",
    "seo_title": "dicta",
    "seo_keyword": "aut",
    "seo_description": "sed",
    "benefit": "dolorem",
    "benefit_en": "eum",
    "tech_description": "a",
    "tech_description_en": "sint",
    "description": "et",
    "description_en": "qui",
    "usage": "ut",
    "usage_en": "mollitia",
    "main_image": "sint",
    "main_image_2": "molestias",
    "benefit_image": "quibusdam",
    "product_video": "ut",
    "status": "quos",
    "rating": "deserunt",
    "sold_count": "quia",
    "review_count": "aut",
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
    "http://store.wutang.com/admin/product/1?product_category_id=odit&product_name=occaecati&product_name_en=molestiae&thumbnail=dolore&slug=saepe&short_description=suscipit&short_description_en=in&price=ratione&sale_price=provident&stock=mollitia&seo_title=et&seo_keyword=ab&seo_description=quos&benefit=debitis&benefit_en=omnis&tech_description=dolor&tech_description_en=voluptates&description=hic&description_en=facilis&usage=quia&usage_en=similique&main_image=omnis&main_image_2=ut&benefit_image=fugit&product_video=dolor&status=fugit&rating=et&sold_count=itaque&review_count=deserunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product/1"
);

let params = {
    "product_category_id": "odit",
    "product_name": "occaecati",
    "product_name_en": "molestiae",
    "thumbnail": "dolore",
    "slug": "saepe",
    "short_description": "suscipit",
    "short_description_en": "in",
    "price": "ratione",
    "sale_price": "provident",
    "stock": "mollitia",
    "seo_title": "et",
    "seo_keyword": "ab",
    "seo_description": "quos",
    "benefit": "debitis",
    "benefit_en": "omnis",
    "tech_description": "dolor",
    "tech_description_en": "voluptates",
    "description": "hic",
    "description_en": "facilis",
    "usage": "quia",
    "usage_en": "similique",
    "main_image": "omnis",
    "main_image_2": "ut",
    "benefit_image": "fugit",
    "product_video": "dolor",
    "status": "fugit",
    "rating": "et",
    "sold_count": "itaque",
    "review_count": "deserunt",
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

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/product_categories?page=provident&page_limit=recusandae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories"
);

let params = {
    "page": "provident",
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

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/product_categories?title=iure&title_en=expedita&describe=ut&describe_en=voluptatem&banner=tempora&description=quam&description_en=id&img=est&parent_id=nulla" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories"
);

let params = {
    "title": "iure",
    "title_en": "expedita",
    "describe": "ut",
    "describe_en": "voluptatem",
    "banner": "tempora",
    "description": "quam",
    "description_en": "id",
    "img": "est",
    "parent_id": "nulla",
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
    "http://store.wutang.com/admin/product_categories/1?title=quae&title_en=nihil&describe=enim&describe_en=pariatur&banner=architecto&description=cum&description_en=quidem&img=numquam&parent_id=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories/1"
);

let params = {
    "title": "quae",
    "title_en": "nihil",
    "describe": "enim",
    "describe_en": "pariatur",
    "banner": "architecto",
    "description": "cum",
    "description_en": "quidem",
    "img": "numquam",
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

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/product_sku?title=iusto&description=temporibus&price=delectus&stock=eos&product_id=deleniti" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_sku"
);

let params = {
    "title": "iusto",
    "description": "temporibus",
    "price": "delectus",
    "stock": "eos",
    "product_id": "deleniti",
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
    "http://store.wutang.com/admin/product_sku/1?title=ipsum&description=soluta&price=aut&stock=ipsa&product_id=non" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_sku/1"
);

let params = {
    "title": "ipsum",
    "description": "soluta",
    "price": "aut",
    "stock": "ipsa",
    "product_id": "non",
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

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/user?username=distinctio&page=iusto&page_limit=voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user"
);

let params = {
    "username": "distinctio",
    "page": "iusto",
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
    "http://store.wutang.com/admin/user/1?name=voluptate&email=qui&phone=id&avatar=quisquam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user/1"
);

let params = {
    "name": "voluptate",
    "email": "qui",
    "phone": "id",
    "avatar": "quisquam",
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

> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/admin/user/reset_password/1?oldPassword=ut&newPassword=harum&newPassword_confirmation=error" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user/reset_password/1"
);

let params = {
    "oldPassword": "ut",
    "newPassword": "harum",
    "newPassword_confirmation": "error",
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
    -G "http://store.wutang.com/admin/get_user?hash_id=exercitationem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/get_user"
);

let params = {
    "hash_id": "exercitationem",
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

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/user_addresses?province=facilis&city=sapiente&district=in&address=modi&zip=sint&contact_name=dolore&contact_phone=eligendi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses"
);

let params = {
    "province": "facilis",
    "city": "sapiente",
    "district": "in",
    "address": "modi",
    "zip": "sint",
    "contact_name": "dolore",
    "contact_phone": "eligendi",
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
    "http://store.wutang.com/admin/user_addresses/1?address_id=ut&province=aliquid&city=iste&district=consequatur&address=aut&zip=harum&contact_name=alias&contact_phone=omnis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses/1"
);

let params = {
    "address_id": "ut",
    "province": "aliquid",
    "city": "iste",
    "district": "consequatur",
    "address": "aut",
    "zip": "harum",
    "contact_name": "alias",
    "contact_phone": "omnis",
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
    "http://store.wutang.com/admin/user_addresses/1?address_id=nam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses/1"
);

let params = {
    "address_id": "nam",
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

> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/admin/user_profiles/1?profile_id=consequuntur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_profiles/1"
);

let params = {
    "profile_id": "consequuntur",
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
    "http://store.wutang.com/admin/user_profiles/1?profile_id=sed" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_profiles/1"
);

let params = {
    "profile_id": "sed",
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
    "http://store.wutang.com/api/auth/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"voluptatem","username":"aliquam","password":"eligendi","captcha_key":"saepe","captcha_code":"tempora","password_question_id":15,"password_answer":"nulla"}'

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
    "name": "voluptatem",
    "username": "aliquam",
    "password": "eligendi",
    "captcha_key": "saepe",
    "captcha_code": "tempora",
    "password_question_id": 15,
    "password_answer": "nulla"
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

<!-- START_de9212b4bd813e07f73b53cc3bd13088 -->
## Get user password question
获取用户的密保问题

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/questions?username=iusto" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/questions"
);

let params = {
    "username": "iusto",
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
        "username": "iusto"
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
    "http://store.wutang.com/api/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"username":"aut","password":"autem"}'

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
    "password": "autem"
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
    "http://store.wutang.com/api/password_reset?username=nostrum&password_question_id=architecto&password_answer=nihil&password=quia&password_confirmation=pariatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/password_reset"
);

let params = {
    "username": "nostrum",
    "password_question_id": "architecto",
    "password_answer": "nihil",
    "password": "quia",
    "password_confirmation": "pariatur",
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
    -d '{"oldPassword":"ut","newPassword":"quia","newPassword_confirmation":"sapiente"}'

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
    "oldPassword": "ut",
    "newPassword": "quia",
    "newPassword_confirmation": "sapiente"
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
    -G "http://store.wutang.com/api/order_details/1?no=in" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/order_details/1"
);

let params = {
    "no": "in",
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
    -d '{"address_id":"et","remark":"veritatis"}'

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
        `remark` | string |  optional  | optional 订单备注
    
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
    -d '{"no":6}'

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
    "no": 6
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
            "id": 1,
            "slug": "ut-est",
            "title": "BB霜",
            "title_en": "non asperiores velit",
            "describe": "Ut consectetur ullam labore impedit ipsa. Animi iure numquam deserunt similique nemo. Eos voluptatem harum sunt incidunt veritatis. Ab commodi officiis quas ipsam asperiores.",
            "describe_en": "Alias harum voluptas qui dolore omnis perspiciatis nihil. Sed quisquam nam repellat. Veritatis unde quasi distinctio aliquid qui. Sint asperiores dolores at tempore in sit perferendis porro.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?82954",
            "description": "Nesciunt autem maxime cum culpa blanditiis non.",
            "description_en": "Quo voluptatum iure eligendi accusantium dignissimos expedita.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?49975",
            "parent_id": 11,
            "created_at": "2020-08-24 16:47:28",
            "updated_at": "2020-08-15 19:28:33",
            "parent_title": "香水"
        },
        {
            "id": 2,
            "slug": "ipsum-iure",
            "title": "洁面",
            "title_en": "consectetur consequatur quas",
            "describe": "Blanditiis sunt ut dignissimos iste illo vel. Ea qui quos numquam est. Ea eveniet doloremque asperiores et ut. Et consequatur dignissimos occaecati.",
            "describe_en": "Aperiam aut laudantium ipsa ut. Aut soluta voluptas perspiciatis minima blanditiis nostrum adipisci. Debitis itaque omnis debitis quibusdam sed atque. Et et neque atque dolores enim aliquid.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?43960",
            "description": "Sit asperiores consequuntur quia veritatis ab labore odit.",
            "description_en": "Repellendus qui officiis quia quia qui.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?91147",
            "parent_id": 23,
            "created_at": "2020-08-10 07:05:23",
            "updated_at": "2020-08-20 11:06:32",
            "parent_title": "眼线"
        },
        {
            "id": 3,
            "slug": "eligendi-accusantium",
            "title": "彩妆盘",
            "title_en": "quis architecto fugit",
            "describe": "Qui cumque voluptatum mollitia veniam sit earum voluptatem. Sed sed aut ex totam voluptatibus. Perferendis a quaerat culpa et.",
            "describe_en": "Corporis distinctio et quaerat voluptates. Dolor quis laborum sunt omnis quo. Velit rerum voluptatem corrupti amet. Iusto dolore eveniet non voluptatum provident facere esse voluptas.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?48468",
            "description": "Facilis voluptatem enim totam.",
            "description_en": "Nesciunt quae explicabo id voluptatem.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?30332",
            "parent_id": 26,
            "created_at": "2020-08-22 15:40:31",
            "updated_at": "2020-08-15 17:38:19",
            "parent_title": "精油"
        },
        {
            "id": 4,
            "slug": "et-necessitatibus",
            "title": "腮红",
            "title_en": "sed minima praesentium",
            "describe": "Odit earum vitae iusto. Quia vitae nihil non est ratione et. At sunt harum ea quae praesentium velit. Excepturi iure voluptatem possimus doloremque vero quam.",
            "describe_en": "Minima dolorem itaque aut magni doloremque libero nisi ipsam. Eum voluptate deserunt praesentium et debitis nemo perspiciatis. Non sed corporis blanditiis quia. Ab quia quod assumenda aliquam.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?80225",
            "description": "Voluptatem nisi unde a.",
            "description_en": "Dolorem dolores et ut voluptatem molestiae qui.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?61157",
            "parent_id": 4,
            "created_at": "2020-08-29 01:36:37",
            "updated_at": "2020-09-01 07:03:48",
            "parent_title": "腮红"
        },
        {
            "id": 5,
            "slug": "aliquam-repellendus",
            "title": "套装",
            "title_en": "eum non enim",
            "describe": "Sapiente illo cupiditate dolor rerum autem. Soluta eaque in sed tenetur incidunt. Voluptas id aut voluptas impedit. Et corrupti nulla nihil quam. Quod quae dolor mollitia.",
            "describe_en": "Corporis accusamus neque nemo. Est quaerat quibusdam molestias. Quo consectetur et recusandae cumque exercitationem quis explicabo. Est nulla libero eius exercitationem voluptatem aut.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?87743",
            "description": "Et quae aut quam aut.",
            "description_en": "Odio et perferendis eveniet ut expedita.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?77822",
            "parent_id": 15,
            "created_at": "2020-08-29 21:15:05",
            "updated_at": "2020-08-23 02:49:17",
            "parent_title": "精油"
        },
        {
            "id": 6,
            "slug": "sint-nostrum",
            "title": "眼线",
            "title_en": "aut ut magnam",
            "describe": "Doloribus ipsam cupiditate aperiam perferendis porro. Velit id quis aut vel possimus quia. Sit et laudantium assumenda consequatur porro.",
            "describe_en": "Occaecati quis dolores expedita voluptatibus corporis dignissimos. Vitae quod quia ratione consequatur deleniti aut perferendis. Non et magni ut omnis magni consequatur. Minus sit sunt impedit.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?64712",
            "description": "Voluptas provident qui laboriosam id quisquam architecto.",
            "description_en": "A provident aut odio id qui reprehenderit.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?54229",
            "parent_id": 27,
            "created_at": "2020-08-12 03:34:43",
            "updated_at": "2020-08-12 10:01:24",
            "parent_title": "隔离"
        },
        {
            "id": 7,
            "slug": "qui-esse",
            "title": "BB霜",
            "title_en": "recusandae occaecati temporibus",
            "describe": "Dolorum soluta voluptate eius est. Ipsa incidunt deserunt laborum voluptatem quaerat quidem rem. Quos recusandae consequatur qui ratione saepe. Atque quis itaque nihil dolor.",
            "describe_en": "Nihil pariatur ab sequi consequuntur officiis minima animi. Magni aut dignissimos esse accusantium iure dolor. Magnam eius vel necessitatibus ut tempora dicta tempore minus.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?42159",
            "description": "Quasi necessitatibus aut fugit.",
            "description_en": "Voluptatum omnis sit porro repudiandae labore.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?66583",
            "parent_id": 27,
            "created_at": "2020-08-05 07:47:34",
            "updated_at": "2020-08-20 13:54:41",
            "parent_title": "隔离"
        },
        {
            "id": 8,
            "slug": "aut-est",
            "title": "面膜",
            "title_en": "nisi voluptas sit",
            "describe": "Velit est temporibus est magni eius vitae. Qui rem ipsam voluptatem sed numquam ipsum. Sit iure delectus qui et magnam perferendis et. Est sunt molestiae ad molestiae qui.",
            "describe_en": "Modi natus amet natus. Officia velit natus nihil voluptatem reprehenderit excepturi. Dolor facilis voluptatibus dolore quis nulla.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?91977",
            "description": "Unde impedit et nulla consequuntur et.",
            "description_en": "Neque et dolores aperiam quae est id.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?26207",
            "parent_id": 16,
            "created_at": "2020-08-28 00:17:50",
            "updated_at": "2020-09-01 08:43:12",
            "parent_title": "睫毛膏"
        },
        {
            "id": 9,
            "slug": "sint-reprehenderit",
            "title": "爽肤水",
            "title_en": "nesciunt aut quia",
            "describe": "Qui aut et et dolore quo exercitationem laborum quae. Cupiditate molestiae molestias accusantium ullam perspiciatis reiciendis sint. Ab voluptatum quas velit optio qui mollitia dolorum.",
            "describe_en": "Aspernatur facilis repudiandae error odio. Fugiat dolor nulla voluptatem officiis culpa. Ea tempora iste molestiae ea quas.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?61006",
            "description": "Veritatis maxime tempore eaque.",
            "description_en": "Quia recusandae quaerat consequatur rerum maiores quis.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?31480",
            "parent_id": 4,
            "created_at": "2020-08-17 06:03:16",
            "updated_at": "2020-08-08 10:25:07",
            "parent_title": "腮红"
        },
        {
            "id": 10,
            "slug": "perferendis-distinctio",
            "title": "面霜",
            "title_en": "esse iste quisquam",
            "describe": "Omnis repellat incidunt fuga aut. Est repudiandae placeat sit. Quis qui officia iste eum error. Consequatur nihil et nisi accusamus sit in sit.",
            "describe_en": "Illum consectetur officia atque ut. Nesciunt atque aut excepturi sed eius aut. Et eius consequuntur ab accusantium temporibus assumenda.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?47600",
            "description": "Repellat dolorem numquam est velit inventore molestiae.",
            "description_en": "Dicta est quo id voluptates enim.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?66694",
            "parent_id": 11,
            "created_at": "2020-08-31 11:36:22",
            "updated_at": "2020-08-17 01:49:46",
            "parent_title": "香水"
        },
        {
            "id": 11,
            "slug": "illum-qui",
            "title": "香水",
            "title_en": "commodi expedita id",
            "describe": "Doloremque perspiciatis eos est quia. Sit consequatur blanditiis dignissimos qui consequatur et quisquam. Mollitia vitae incidunt voluptatem vitae eaque voluptatem ut.",
            "describe_en": "Similique assumenda enim voluptas quis quia magni nobis nobis. Sunt earum ut velit itaque incidunt quia voluptas. Enim quaerat architecto aut esse dolores.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?82192",
            "description": "Minima sapiente est corrupti doloribus et quod.",
            "description_en": "Et nulla aut natus.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?79979",
            "parent_id": 23,
            "created_at": "2020-08-03 10:25:31",
            "updated_at": "2020-08-14 08:20:51",
            "parent_title": "眼线"
        },
        {
            "id": 12,
            "slug": "et-aut",
            "title": "套装B",
            "title_en": "et voluptatem sit",
            "describe": "Facere sequi omnis cupiditate. Vel enim nesciunt molestiae rerum inventore ut saepe rem.",
            "describe_en": "Asperiores in et aut voluptas ea est provident. Expedita ea nemo ea eos et corporis eaque.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?18038",
            "description": "Illo aliquid accusantium vitae sequi.",
            "description_en": "Sit nulla odit cum quae pariatur.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?66275",
            "parent_id": 15,
            "created_at": "2020-08-12 13:45:51",
            "updated_at": "2020-08-31 04:05:23",
            "parent_title": "精油"
        },
        {
            "id": 13,
            "slug": "omnis-ut",
            "title": "BB霜",
            "title_en": "beatae praesentium dolore",
            "describe": "Nemo eligendi laboriosam velit consequatur in laborum. Recusandae ipsa dolore similique deleniti ducimus eos. Sit veniam et possimus.",
            "describe_en": "Similique ad consectetur tempore voluptatem. Quasi saepe porro sed rerum. Cumque blanditiis aut quo atque.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?62534",
            "description": "Necessitatibus nihil officia quis ab sint voluptas.",
            "description_en": "Veritatis odio vero aliquid voluptatem est aut.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?21313",
            "parent_id": 14,
            "created_at": "2020-08-19 02:26:09",
            "updated_at": "2020-08-19 09:32:26",
            "parent_title": "套装A"
        },
        {
            "id": 14,
            "slug": "dolorem-dolore",
            "title": "套装A",
            "title_en": "error quam fugiat",
            "describe": "Incidunt consequatur quam quaerat voluptatem itaque esse. Et in sapiente qui occaecati adipisci reiciendis non. Voluptatem maxime id ipsa quod fuga quia rem.",
            "describe_en": "Facilis aliquam molestiae eligendi. Qui distinctio architecto et iusto. Rerum assumenda omnis molestiae sed non quod labore.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?51125",
            "description": "Eveniet similique aut dolorum occaecati aliquid ut.",
            "description_en": "Temporibus non voluptas beatae optio dicta ab.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?94906",
            "parent_id": 4,
            "created_at": "2020-08-08 15:48:27",
            "updated_at": "2020-08-21 14:26:59",
            "parent_title": "腮红"
        },
        {
            "id": 15,
            "slug": "dolores-corrupti",
            "title": "精油",
            "title_en": "tempore velit quo",
            "describe": "Commodi voluptatem nobis maxime cumque rem. Assumenda soluta quaerat eligendi quasi saepe neque assumenda id. Et hic sit sint minus. Et velit porro laboriosam corrupti.",
            "describe_en": "Quidem maxime harum provident qui nisi. Similique quam voluptas rerum dolorum officiis aut. Rerum qui nam debitis ea ipsum explicabo aperiam. Nemo nobis non consectetur deleniti qui et et.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?81923",
            "description": "Possimus sed quis officia.",
            "description_en": "Rerum alias id numquam quidem.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?11007",
            "parent_id": 10,
            "created_at": "2020-08-15 21:38:18",
            "updated_at": "2020-08-08 20:29:55",
            "parent_title": "面霜"
        },
        {
            "id": 16,
            "slug": "facere-perspiciatis",
            "title": "睫毛膏",
            "title_en": "non doloribus facere",
            "describe": "Tenetur minima incidunt consequatur omnis quo aut quidem. Enim consectetur vero laboriosam velit modi illo in. Excepturi nobis exercitationem veniam aut soluta quam dignissimos et.",
            "describe_en": "Rerum amet dolor velit repellat porro. Beatae voluptatem magnam et et officia et sit. Sed aut quia impedit. Laborum eos eos velit placeat.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?41390",
            "description": "Neque aut non magni velit recusandae.",
            "description_en": "Consequatur vitae doloribus ab enim.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?60655",
            "parent_id": 25,
            "created_at": "2020-08-14 14:52:46",
            "updated_at": "2020-08-31 01:06:34",
            "parent_title": "身体护理"
        },
        {
            "id": 17,
            "slug": "aut-iusto",
            "title": "香水",
            "title_en": "ex officiis sunt",
            "describe": "Et quisquam ut quia dolor. Impedit ut ea et porro ipsa dolores dolor eaque. Voluptate error dignissimos aut tempore.",
            "describe_en": "Quibusdam sunt dicta est ad. Illo labore quibusdam eligendi ut nihil dicta. Nemo deserunt ad illum tempore aut. Omnis quaerat fugiat ut. Eveniet distinctio aut ullam perspiciatis.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?50318",
            "description": "Neque sit et fugit placeat fugiat.",
            "description_en": "Sapiente ut quae molestias eum aperiam saepe.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?40761",
            "parent_id": 5,
            "created_at": "2020-08-24 04:38:01",
            "updated_at": "2020-09-01 00:33:10",
            "parent_title": "套装"
        },
        {
            "id": 18,
            "slug": "dolorem-nesciunt",
            "title": "精油",
            "title_en": "fuga nobis quia",
            "describe": "Et et consequuntur alias et. Quas animi officiis doloremque reprehenderit. Saepe voluptas et magni voluptatum.",
            "describe_en": "Eum nobis saepe dolor labore impedit corrupti corporis ratione. Ullam iste rerum odio ut consequatur qui nemo. Consequatur voluptatem corporis voluptatum praesentium et culpa delectus aut.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?41294",
            "description": "Unde architecto minus sint inventore eos amet.",
            "description_en": "Quod consectetur et est autem.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?26336",
            "parent_id": 25,
            "created_at": "2020-08-06 12:17:45",
            "updated_at": "2020-08-15 13:09:58",
            "parent_title": "身体护理"
        },
        {
            "id": 19,
            "slug": "officia-debitis",
            "title": "眼霜",
            "title_en": "et cumque et",
            "describe": "Deleniti libero veniam dolorem accusantium odio. Aliquid suscipit ut cupiditate impedit. Impedit veritatis optio quia optio rerum deserunt eum autem.",
            "describe_en": "At at maxime aut iusto. Est quia velit iusto quisquam voluptatem harum qui. Necessitatibus ratione est tempore assumenda.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?18711",
            "description": "Ipsa voluptate et nihil blanditiis aut.",
            "description_en": "Assumenda aut ut ipsam.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?97693",
            "parent_id": 13,
            "created_at": "2020-08-14 12:39:10",
            "updated_at": "2020-08-24 06:50:37",
            "parent_title": "BB霜"
        },
        {
            "id": 20,
            "slug": "quis-distinctio",
            "title": "眼线",
            "title_en": "fuga sapiente dolor",
            "describe": "Itaque quo consequatur aliquid deleniti quam. Similique sit recusandae quo quod ducimus. Et sunt ratione ea sequi nisi. Voluptatum nostrum voluptatum adipisci illum ut harum repudiandae ut.",
            "describe_en": "Dolore odit autem quia facere ut corporis placeat et. Eius error aliquid voluptas doloribus rem non. Minima explicabo consectetur delectus. Dolorem ex fugiat quis. Ut culpa cumque quia dolore.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?24280",
            "description": "Quo odit enim deleniti reprehenderit.",
            "description_en": "Porro consequatur explicabo autem ea.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?78824",
            "parent_id": 6,
            "created_at": "2020-08-19 21:23:31",
            "updated_at": "2020-08-12 16:26:15",
            "parent_title": "眼线"
        },
        {
            "id": 21,
            "slug": "aperiam-nobis",
            "title": "套装",
            "title_en": "dolore ipsam quis",
            "describe": "Officiis et qui modi consectetur laudantium rem. Dolorum voluptas ratione omnis alias. Id molestias et eos.",
            "describe_en": "Non laboriosam a est. Natus similique harum est ab. Expedita eum et vel aut ab explicabo. Qui repellat quia fugit nihil qui et. Nobis ab impedit eos et. Qui tempora in sunt dolorem et autem.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?59373",
            "description": "Mollitia doloribus eveniet nisi.",
            "description_en": "Numquam ullam aut debitis ut alias sit.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?75454",
            "parent_id": 19,
            "created_at": "2020-09-01 12:02:20",
            "updated_at": "2020-08-09 01:40:50",
            "parent_title": "眼霜"
        },
        {
            "id": 22,
            "slug": "quos-aperiam",
            "title": "隔离",
            "title_en": "dolore vel tempora",
            "describe": "Quo quis quibusdam consequatur. Suscipit distinctio rerum quas ipsa harum. Deserunt sapiente libero voluptas dolorem dicta.",
            "describe_en": "Recusandae perferendis consectetur sed fugit magnam. Velit reprehenderit autem quia labore eligendi.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?83655",
            "description": "Eum dolorem sint est provident.",
            "description_en": "Et sed doloremque cumque minima.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?60325",
            "parent_id": 20,
            "created_at": "2020-08-06 04:50:45",
            "updated_at": "2020-08-15 23:43:03",
            "parent_title": "眼线"
        },
        {
            "id": 23,
            "slug": "necessitatibus-ab",
            "title": "眼线",
            "title_en": "ipsum cupiditate velit",
            "describe": "Dolor omnis necessitatibus dolor. Nobis sed dolorem vel molestias iusto iusto. Perspiciatis ab eum ut qui et. Perferendis tempora officia tenetur.",
            "describe_en": "Aliquid est dolorem quis cum iure. Et in omnis exercitationem voluptatem. Nulla ut molestiae nihil accusamus maiores sit.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?65358",
            "description": "Blanditiis quae tempora totam.",
            "description_en": "Ut eos odio ipsa.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?70069",
            "parent_id": 22,
            "created_at": "2020-08-13 22:57:53",
            "updated_at": "2020-08-15 07:48:10",
            "parent_title": "隔离"
        },
        {
            "id": 24,
            "slug": "eligendi-soluta",
            "title": "睫毛膏",
            "title_en": "natus at aspernatur",
            "describe": "Ipsa sed porro itaque expedita enim suscipit ipsum. Aut eos dolorem vel aut facere excepturi sunt. Sed sint suscipit modi sit dolore assumenda modi excepturi.",
            "describe_en": "Ratione sunt veritatis rerum asperiores amet delectus dolore. Iste in cumque aspernatur fugit et magni facilis. Nostrum eum dolores et velit vero autem.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?92511",
            "description": "Voluptatem autem beatae aut corporis.",
            "description_en": "Et quos aut veritatis.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?33881",
            "parent_id": 13,
            "created_at": "2020-08-11 05:20:41",
            "updated_at": "2020-08-02 09:31:05",
            "parent_title": "BB霜"
        },
        {
            "id": 25,
            "slug": "officia-et",
            "title": "身体护理",
            "title_en": "maxime adipisci numquam",
            "describe": "Dolores ut consectetur rerum repellendus aut et. Autem ullam et porro sit pariatur natus nesciunt soluta. Cupiditate qui dicta culpa illum.",
            "describe_en": "Incidunt error veniam vero dolorem praesentium. Sint libero cupiditate vel eos et dolorem. Quas quasi est est perspiciatis sed odio.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?75100",
            "description": "Magnam tenetur ut rem consequatur sit.",
            "description_en": "Aliquid impedit quia tenetur quis magnam.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?49719",
            "parent_id": 3,
            "created_at": "2020-08-02 04:19:53",
            "updated_at": "2020-08-15 20:37:36",
            "parent_title": "彩妆盘"
        },
        {
            "id": 26,
            "slug": "similique-est",
            "title": "精油",
            "title_en": "eius in corrupti",
            "describe": "Ut nulla consequatur qui est qui tempore veniam sit. Est nulla aut a cumque est aut velit. Distinctio eos commodi sit est qui qui ipsum est. Ut repudiandae veniam minima sint facilis officia.",
            "describe_en": "Delectus aut voluptatibus dignissimos. Inventore quia ipsa commodi qui eos vel distinctio. Praesentium laboriosam voluptate possimus placeat quasi debitis.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?95290",
            "description": "Repudiandae amet neque voluptatem provident et quas.",
            "description_en": "Accusantium nam illum modi similique.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?97987",
            "parent_id": 22,
            "created_at": "2020-08-23 17:34:11",
            "updated_at": "2020-08-28 06:55:58",
            "parent_title": "隔离"
        },
        {
            "id": 27,
            "slug": "itaque-reprehenderit",
            "title": "隔离",
            "title_en": "deserunt culpa modi",
            "describe": "Dolores enim autem et molestiae iure. Rerum adipisci magni nulla magni perferendis. Explicabo consequatur alias vero distinctio atque. Voluptate sed enim et veritatis.",
            "describe_en": "Debitis aut voluptatem modi dicta. Vel ducimus ipsa et autem. Voluptatum consequatur enim vitae sint itaque voluptatem nihil. Et adipisci sit cumque et.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?50341",
            "description": "Quia consequuntur aperiam non incidunt dicta nulla.",
            "description_en": "Voluptatem magnam dolorem non.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?67500",
            "parent_id": 9,
            "created_at": "2020-08-25 23:19:25",
            "updated_at": "2020-08-19 20:32:42",
            "parent_title": "爽肤水"
        },
        {
            "id": 28,
            "slug": "voluptatem-est",
            "title": "套装B",
            "title_en": "qui eaque distinctio",
            "describe": "Quod est corrupti enim facere. Est optio libero aut quia rem est. Magni omnis vel rerum iste repellat eum eos porro. Id fugiat nemo nihil ea accusamus maiores tempora.",
            "describe_en": "Rerum omnis est explicabo cupiditate. Quod enim veniam illum ut. Suscipit provident aliquid impedit optio est.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?70885",
            "description": "Molestias maiores omnis molestias dolor sed nulla.",
            "description_en": "Voluptatibus quis sed natus expedita.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?37158",
            "parent_id": 13,
            "created_at": "2020-08-09 18:33:44",
            "updated_at": "2020-08-16 05:55:41",
            "parent_title": "BB霜"
        },
        {
            "id": 29,
            "slug": "vel-culpa",
            "title": "BB霜",
            "title_en": "facilis voluptatem a",
            "describe": "Ullam nostrum consequuntur ea neque. Ut natus est praesentium qui. Suscipit perspiciatis et ipsam.",
            "describe_en": "Voluptates sit sit voluptate delectus qui aspernatur autem asperiores. Impedit quo a rerum eligendi ex alias iste. Sint veniam quaerat blanditiis magnam quis. Saepe sit quas eius in quia voluptatum.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?23934",
            "description": "Voluptatem et omnis dignissimos impedit.",
            "description_en": "Ut provident dicta ipsa.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?30900",
            "parent_id": 12,
            "created_at": "2020-08-25 07:38:40",
            "updated_at": "2020-08-15 02:36:14",
            "parent_title": "套装B"
        },
        {
            "id": 30,
            "slug": "non-accusantium",
            "title": "眼霜",
            "title_en": "nobis dolor debitis",
            "describe": "Excepturi vero dicta ullam. In ut excepturi accusantium aliquid quibusdam fugiat nam. Quidem vel minima labore error.",
            "describe_en": "Culpa molestiae repellendus dolorem molestiae architecto fugit. Eaque explicabo cumque soluta aut est similique. Sunt blanditiis sit et asperiores.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?22592",
            "description": "Corporis perferendis mollitia pariatur.",
            "description_en": "Impedit ad et numquam voluptate minima quia.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?75755",
            "parent_id": 5,
            "created_at": "2020-08-03 15:18:31",
            "updated_at": "2020-08-22 21:43:25",
            "parent_title": "套装"
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
    -G "http://store.wutang.com/api/product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product"
);

let headers = {
    "Content-Type": "application/json",
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
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "minus dolor aliquid",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?29199",
                "slug": "eum-qui",
                "short_description": "Ut sunt repellat possimus est.",
                "short_description_en": "Aliquid soluta a odio libero incidunt. Illum consequuntur accusantium aliquid. Inventore repellendus nesciunt doloribus suscipit facilis error. Maiores molestiae sit rerum et. Aut vero similique reprehenderit et illo dolores nulla tempore.",
                "price": "4503.00",
                "sale_price": "1.00",
                "stock": 374,
                "spec": null,
                "seo_title": "veniam repellat praesentium",
                "seo_keyword": "rerum",
                "seo_description": "Veritatis harum aut qui eveniet eos.",
                "benefit": "Aut qui magni a. Modi in assumenda quo asperiores et. Error quisquam quas quia alias eos nesciunt suscipit.",
                "benefit_en": "Repudiandae totam et expedita ut quasi commodi. Enim ipsum consectetur nisi alias eius doloribus. Sit voluptatem a molestias quas cupiditate.",
                "tech_description": "Animi nulla atque numquam voluptatem molestiae repudiandae perferendis et. Quos non eum eos ipsa. Expedita magni ut autem quibusdam id. Voluptatem dolorem veniam vel rerum architecto.",
                "tech_description_en": "Qui dignissimos sint rerum labore excepturi. Corporis a quidem unde tenetur similique harum. Sequi quidem asperiores dolorem.",
                "description": "Non est in officia ab impedit enim cum. Aut molestiae et velit excepturi nam. Nulla et aut rem doloremque tempore architecto optio. Et voluptatem voluptatem pariatur molestiae in aut et.",
                "description_en": "Sapiente deleniti vel id impedit minus omnis. In debitis officiis quis repellendus. Aut nemo voluptas recusandae soluta.",
                "usage": "At enim nostrum aspernatur aut provident. Nesciunt placeat molestias eum facere tempore. Mollitia libero in et hic et.",
                "usage_en": "Itaque eaque ad possimus ex. Voluptatibus molestiae sequi voluptas natus non similique sit.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?85247",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?42444",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?11770",
                "product_video": null,
                "status": 1,
                "rating": 1.41,
                "sold_count": 1344,
                "review_count": 3359,
                "created_at": "2020-08-14 05:58:49",
                "updated_at": "2020-08-03 02:06:05",
                "product_category": {
                    "id": 7,
                    "slug": "qui-esse",
                    "title": "BB霜",
                    "title_en": "recusandae occaecati temporibus",
                    "describe": "Dolorum soluta voluptate eius est. Ipsa incidunt deserunt laborum voluptatem quaerat quidem rem. Quos recusandae consequatur qui ratione saepe. Atque quis itaque nihil dolor.",
                    "describe_en": "Nihil pariatur ab sequi consequuntur officiis minima animi. Magni aut dignissimos esse accusantium iure dolor. Magnam eius vel necessitatibus ut tempora dicta tempore minus.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?42159",
                    "description": "Quasi necessitatibus aut fugit.",
                    "description_en": "Voluptatum omnis sit porro repudiandae labore.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?66583",
                    "parent_id": 27,
                    "created_at": "2020-08-05 07:47:34",
                    "updated_at": "2020-08-20 13:54:41"
                }
            },
            {
                "id": 2,
                "product_category_id": 12,
                "product_name": "黑钻焕肤水",
                "product_name_en": "repellendus labore sed",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?43358",
                "slug": "eius-rerum",
                "short_description": "Aspernatur repellendus reprehenderit ab qui.",
                "short_description_en": "Libero doloremque laudantium voluptas hic aut aut quaerat possimus. Nam quia culpa distinctio temporibus. Ipsum neque quaerat eveniet repellendus. Minus optio modi voluptatibus qui exercitationem.",
                "price": "1317.00",
                "sale_price": "1.00",
                "stock": 351,
                "spec": null,
                "seo_title": "corrupti vitae ut",
                "seo_keyword": "aspernatur",
                "seo_description": "Non quidem molestias voluptas autem incidunt et.",
                "benefit": "Facilis sit commodi architecto illo deleniti magnam. Ut quis saepe laudantium rerum deserunt. Eius facere ut cumque illo molestiae et aut minus.",
                "benefit_en": "Aut atque sapiente perspiciatis quibusdam qui perferendis autem. Et quo blanditiis natus earum delectus eos illo. Ut earum voluptatibus repudiandae. Rem maxime est adipisci consequatur. Assumenda earum possimus alias doloribus ea est id.",
                "tech_description": "Harum aut est mollitia aut est quidem. Accusantium quasi veritatis dolores praesentium beatae consectetur. Autem nulla explicabo ratione a enim et. Reiciendis repellat aut neque saepe minima. Eaque sapiente tempore consequatur aut pariatur perferendis.",
                "tech_description_en": "Incidunt maxime molestiae vitae sed. Alias est distinctio reprehenderit nihil velit. Fuga dolores numquam fugit id in optio fugiat. Officiis voluptatum quibusdam nesciunt exercitationem molestiae molestias voluptas maiores.",
                "description": "Ut ad labore quas aut libero sit. Adipisci quia id ut omnis.",
                "description_en": "Eveniet sequi assumenda molestiae minus repellat reiciendis odit. Facere distinctio nostrum qui illum et. Ut consequatur harum labore eum. Numquam mollitia consequatur quo amet aut.",
                "usage": "Fuga eum enim architecto illo enim aperiam eum. Qui at consequatur et omnis magnam nemo. Temporibus consequatur maxime mollitia aut soluta voluptas.",
                "usage_en": "Placeat qui sequi placeat at. Laboriosam aut iusto alias molestias voluptas quia cum facere. Illum dicta est modi nemo dolor et. Id aut ut minus consequuntur laudantium dolor ut.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?73382",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?60715",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?95207",
                "product_video": null,
                "status": 3,
                "rating": 6.31,
                "sold_count": 6216,
                "review_count": 1121,
                "created_at": "2020-08-26 12:22:13",
                "updated_at": "2020-08-04 10:58:01",
                "product_category": {
                    "id": 12,
                    "slug": "et-aut",
                    "title": "套装B",
                    "title_en": "et voluptatem sit",
                    "describe": "Facere sequi omnis cupiditate. Vel enim nesciunt molestiae rerum inventore ut saepe rem.",
                    "describe_en": "Asperiores in et aut voluptas ea est provident. Expedita ea nemo ea eos et corporis eaque.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?18038",
                    "description": "Illo aliquid accusantium vitae sequi.",
                    "description_en": "Sit nulla odit cum quae pariatur.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?66275",
                    "parent_id": 15,
                    "created_at": "2020-08-12 13:45:51",
                    "updated_at": "2020-08-31 04:05:23"
                }
            },
            {
                "id": 3,
                "product_category_id": 11,
                "product_name": "黑钻焕肤水",
                "product_name_en": "qui rerum ratione",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?79559",
                "slug": "in-a",
                "short_description": "Laboriosam iusto hic distinctio.",
                "short_description_en": "In minus voluptatem aut voluptas. Laudantium sit ducimus exercitationem culpa. Sunt quis doloremque aut debitis id.",
                "price": "6842.00",
                "sale_price": "1.00",
                "stock": 111,
                "spec": null,
                "seo_title": "dolorum voluptatem culpa",
                "seo_keyword": "corrupti",
                "seo_description": "Occaecati autem aut quos in sapiente minima.",
                "benefit": "Alias reiciendis non eveniet minima eum qui. Est deleniti magni est et quia quibusdam error. Voluptate suscipit dolore ut qui et autem culpa. Error maxime quisquam quis quaerat assumenda. Dolorem aut in voluptatem non deleniti reprehenderit.",
                "benefit_en": "Quis quia id ut modi deleniti repudiandae nesciunt. Pariatur voluptates eaque enim et atque. Dicta autem quasi consequatur aliquam. Sit saepe sit non iusto est similique sit cupiditate.",
                "tech_description": "Voluptatem hic sapiente architecto id esse. Suscipit aut et at. Minima doloremque quas labore aliquam tempore aut assumenda.",
                "tech_description_en": "Quos tempore in possimus et minima excepturi. Cupiditate adipisci voluptate omnis similique porro et incidunt.",
                "description": "Explicabo reiciendis suscipit suscipit quaerat. Atque iusto veritatis veritatis iure fugiat dicta. Porro omnis excepturi voluptates ratione quam modi et.",
                "description_en": "Alias et harum inventore rerum. Facere facilis voluptas voluptatem assumenda incidunt. Repudiandae enim asperiores vitae fuga sed et. Culpa est ipsum aut libero blanditiis nihil.",
                "usage": "Quas inventore repudiandae hic ab quibusdam placeat odit ex. Ex sunt possimus odit nulla. Perspiciatis odio quo ut unde praesentium cumque nesciunt.",
                "usage_en": "Sed animi culpa omnis. Quidem amet quas molestias numquam. Consequatur quia cupiditate vel atque autem ipsum cupiditate.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?56697",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?65915",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?17380",
                "product_video": null,
                "status": 1,
                "rating": 9.94,
                "sold_count": 9891,
                "review_count": 8547,
                "created_at": "2020-08-18 21:26:17",
                "updated_at": "2020-08-22 12:48:02",
                "product_category": {
                    "id": 11,
                    "slug": "illum-qui",
                    "title": "香水",
                    "title_en": "commodi expedita id",
                    "describe": "Doloremque perspiciatis eos est quia. Sit consequatur blanditiis dignissimos qui consequatur et quisquam. Mollitia vitae incidunt voluptatem vitae eaque voluptatem ut.",
                    "describe_en": "Similique assumenda enim voluptas quis quia magni nobis nobis. Sunt earum ut velit itaque incidunt quia voluptas. Enim quaerat architecto aut esse dolores.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?82192",
                    "description": "Minima sapiente est corrupti doloribus et quod.",
                    "description_en": "Et nulla aut natus.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?79979",
                    "parent_id": 23,
                    "created_at": "2020-08-03 10:25:31",
                    "updated_at": "2020-08-14 08:20:51"
                }
            },
            {
                "id": 4,
                "product_category_id": 16,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "at ut rerum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?57689",
                "slug": "non-dignissimos",
                "short_description": "Beatae voluptatem animi modi odit minus cumque.",
                "short_description_en": "Voluptas sunt ratione nobis nisi ut. Blanditiis asperiores a qui aut voluptatem repellat harum. Ipsum aliquid unde dignissimos perferendis quas laborum. Aut repudiandae consequuntur et excepturi voluptas.",
                "price": "6483.00",
                "sale_price": "1.00",
                "stock": 624,
                "spec": null,
                "seo_title": "et iusto nihil",
                "seo_keyword": "expedita",
                "seo_description": "Magni perspiciatis qui natus similique quod facilis.",
                "benefit": "Molestiae praesentium ipsam aspernatur et. Et et similique aut maxime eveniet et. Assumenda et repudiandae blanditiis non. Dolores voluptas corporis illo ratione.",
                "benefit_en": "Assumenda est assumenda qui quia. Eum suscipit et deserunt atque. Alias dolor nisi quae qui quia.",
                "tech_description": "Corporis natus sit nesciunt sunt. Quia dolor vitae numquam quisquam laborum non. Mollitia illo odio et consequuntur repellendus magnam ipsa. Magni aperiam et perspiciatis dicta molestias est. Magni iste qui enim est enim.",
                "tech_description_en": "Quas et non doloremque. Unde assumenda nihil et. Dolor ad reiciendis laudantium iusto voluptas eum omnis fugiat.",
                "description": "Maxime qui id voluptas vitae. Commodi non nobis ipsam et eum tempora dolorem. Delectus mollitia sint eligendi nostrum possimus nam corrupti aspernatur.",
                "description_en": "Laboriosam eos molestiae et fuga aperiam dolorem. Et distinctio qui cupiditate ut eligendi eum. Tempora labore similique assumenda porro suscipit quis. Assumenda omnis quo beatae. Autem et deleniti alias ducimus quia vel odit.",
                "usage": "Est quia et eos veniam aut est suscipit. Voluptatem autem ut maxime non. Optio iste optio ut assumenda.",
                "usage_en": "Autem officia non recusandae natus veniam voluptatem et. Fugiat assumenda nemo ut et ut temporibus. Mollitia atque occaecati rem quis vel recusandae. Quis maxime laborum perspiciatis aspernatur exercitationem voluptatibus minima.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?46899",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?26476",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?83330",
                "product_video": null,
                "status": 2,
                "rating": 4.04,
                "sold_count": 2945,
                "review_count": 8165,
                "created_at": "2020-08-11 10:53:23",
                "updated_at": "2020-08-23 23:04:25",
                "product_category": {
                    "id": 16,
                    "slug": "facere-perspiciatis",
                    "title": "睫毛膏",
                    "title_en": "non doloribus facere",
                    "describe": "Tenetur minima incidunt consequatur omnis quo aut quidem. Enim consectetur vero laboriosam velit modi illo in. Excepturi nobis exercitationem veniam aut soluta quam dignissimos et.",
                    "describe_en": "Rerum amet dolor velit repellat porro. Beatae voluptatem magnam et et officia et sit. Sed aut quia impedit. Laborum eos eos velit placeat.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?41390",
                    "description": "Neque aut non magni velit recusandae.",
                    "description_en": "Consequatur vitae doloribus ab enim.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?60655",
                    "parent_id": 25,
                    "created_at": "2020-08-14 14:52:46",
                    "updated_at": "2020-08-31 01:06:34"
                }
            },
            {
                "id": 5,
                "product_category_id": 17,
                "product_name": "黑钻焕肤水",
                "product_name_en": "maiores eveniet eum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?77004",
                "slug": "ex-distinctio",
                "short_description": "Tenetur voluptate eligendi ex ratione consectetur.",
                "short_description_en": "Tempore vitae exercitationem et quia ut odio ratione enim. Enim odio odio est est. Quis saepe voluptatem quo aut deserunt. Provident quo sint aut consequatur sint non sed.",
                "price": "6629.00",
                "sale_price": "1.00",
                "stock": 141,
                "spec": null,
                "seo_title": "incidunt quibusdam dolorem",
                "seo_keyword": "vel",
                "seo_description": "Voluptatem eos inventore blanditiis in iure iusto.",
                "benefit": "Velit temporibus quod quas ducimus autem quae sit minima. Animi ipsa aliquid ab quia debitis illum et. Et maxime itaque iure quis cupiditate. Sed vero molestias facilis soluta blanditiis.",
                "benefit_en": "Voluptatem velit eos repellendus minima modi neque possimus. Ut explicabo optio sed voluptas assumenda soluta voluptatem. Sapiente ratione atque est. Architecto molestias expedita ea ut doloribus natus dolor.",
                "tech_description": "Nihil assumenda dolor minus labore tempora quas ea. Nostrum illo deserunt asperiores suscipit velit dolorem enim. A quod facilis nemo autem officiis repellat atque.",
                "tech_description_en": "Qui praesentium ipsam vero numquam vero iure. Sit culpa labore et eveniet. Magni sed est aut molestias aut fuga. Voluptate maiores dolor molestiae et quo aut.",
                "description": "Et quidem velit aut. Minus sit sed totam neque aperiam sit dolorem. Odit aperiam quibusdam tenetur aut.",
                "description_en": "Dolore dolor eos magni eum. Cum illo est quo asperiores quo sint qui eos.",
                "usage": "Incidunt eos adipisci quidem labore. Iusto odio vitae eum sunt quos illum. Saepe sed officia eligendi pariatur ducimus alias quos optio.",
                "usage_en": "Ullam et consequatur asperiores. In aliquid dolores in in fugit. Doloremque dolor doloribus totam tempora. Laudantium ipsam rerum necessitatibus magnam quidem.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?69558",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?99594",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?38608",
                "product_video": null,
                "status": 1,
                "rating": 9.09,
                "sold_count": 3849,
                "review_count": 5931,
                "created_at": "2020-08-23 09:09:19",
                "updated_at": "2020-08-20 14:45:02",
                "product_category": {
                    "id": 17,
                    "slug": "aut-iusto",
                    "title": "香水",
                    "title_en": "ex officiis sunt",
                    "describe": "Et quisquam ut quia dolor. Impedit ut ea et porro ipsa dolores dolor eaque. Voluptate error dignissimos aut tempore.",
                    "describe_en": "Quibusdam sunt dicta est ad. Illo labore quibusdam eligendi ut nihil dicta. Nemo deserunt ad illum tempore aut. Omnis quaerat fugiat ut. Eveniet distinctio aut ullam perspiciatis.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?50318",
                    "description": "Neque sit et fugit placeat fugiat.",
                    "description_en": "Sapiente ut quae molestias eum aperiam saepe.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?40761",
                    "parent_id": 5,
                    "created_at": "2020-08-24 04:38:01",
                    "updated_at": "2020-09-01 00:33:10"
                }
            },
            {
                "id": 6,
                "product_category_id": 7,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "distinctio accusamus quos",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?85687",
                "slug": "et-qui",
                "short_description": "Voluptatem dolor quam at voluptatibus.",
                "short_description_en": "Odit numquam explicabo at non non deserunt reprehenderit. Laudantium labore veritatis sequi ut voluptates est. Sint in qui sit voluptatem voluptates vitae. Dicta quibusdam error excepturi nulla aut necessitatibus et dolor.",
                "price": "5393.00",
                "sale_price": "1.00",
                "stock": 260,
                "spec": null,
                "seo_title": "ea cum vel",
                "seo_keyword": "quia",
                "seo_description": "Eos doloremque possimus veniam temporibus quis.",
                "benefit": "Saepe dolorum harum a quos. Repudiandae cupiditate et at sunt aut placeat. Excepturi et incidunt dolorum aut inventore et eveniet et. Quaerat expedita eius rem veniam aut voluptatem.",
                "benefit_en": "Aut veritatis vel sed qui doloremque voluptates. Voluptatum est porro quis provident labore ipsum. Dolorum fugit quam aliquid voluptatem autem saepe. Enim fugiat voluptatum eos asperiores voluptas omnis.",
                "tech_description": "Et perspiciatis amet repellendus quis. Distinctio ab numquam vel magni qui placeat.",
                "tech_description_en": "Eius quaerat corporis excepturi harum ea aut adipisci. Est natus qui corrupti libero.",
                "description": "Fugiat aperiam qui ullam ipsum. Officiis numquam eius quos perspiciatis. Explicabo voluptatem possimus aut est et impedit. Dolorem enim minima magni consequuntur ratione numquam.",
                "description_en": "Impedit ipsa ipsum possimus qui ut id molestias. Sunt necessitatibus sunt voluptatem et consequatur. Ducimus et voluptatum et quae et. Iste architecto occaecati qui sit a officia.",
                "usage": "Error quo voluptatem magni consectetur et molestias. Iure vel architecto officiis deserunt vitae. Reiciendis quia aliquam aliquid ea velit. Et aut ipsam tempore est excepturi quia optio aut.",
                "usage_en": "Excepturi quis voluptatibus consequatur dolores dolores excepturi numquam. Architecto nobis molestiae at non animi. Ut et odit et eos commodi dolore voluptatem quia. Earum aut neque minima in sed sit rerum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?69060",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?17852",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?29169",
                "product_video": null,
                "status": 3,
                "rating": 5.29,
                "sold_count": 8543,
                "review_count": 4440,
                "created_at": "2020-08-07 23:55:50",
                "updated_at": "2020-08-11 09:37:10",
                "product_category": {
                    "id": 7,
                    "slug": "qui-esse",
                    "title": "BB霜",
                    "title_en": "recusandae occaecati temporibus",
                    "describe": "Dolorum soluta voluptate eius est. Ipsa incidunt deserunt laborum voluptatem quaerat quidem rem. Quos recusandae consequatur qui ratione saepe. Atque quis itaque nihil dolor.",
                    "describe_en": "Nihil pariatur ab sequi consequuntur officiis minima animi. Magni aut dignissimos esse accusantium iure dolor. Magnam eius vel necessitatibus ut tempora dicta tempore minus.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?42159",
                    "description": "Quasi necessitatibus aut fugit.",
                    "description_en": "Voluptatum omnis sit porro repudiandae labore.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?66583",
                    "parent_id": 27,
                    "created_at": "2020-08-05 07:47:34",
                    "updated_at": "2020-08-20 13:54:41"
                }
            },
            {
                "id": 7,
                "product_category_id": 14,
                "product_name": "黑钻焕肤水",
                "product_name_en": "aliquid similique illo",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?38751",
                "slug": "quos-iusto",
                "short_description": "Officiis in corrupti at reiciendis cum.",
                "short_description_en": "Enim ipsa ab nihil consequuntur vitae aut error deleniti. Minima vero nam dolore accusantium aut. Suscipit qui labore laboriosam sit. Sunt pariatur possimus aspernatur dolores.",
                "price": "7102.00",
                "sale_price": "1.00",
                "stock": 880,
                "spec": null,
                "seo_title": "sit aut minima",
                "seo_keyword": "in",
                "seo_description": "Nulla similique quisquam qui iure iure.",
                "benefit": "Molestiae mollitia veniam totam culpa pariatur ea et. Totam sapiente perspiciatis sequi est quis. Omnis voluptatem temporibus sit assumenda ipsam dolorum tenetur.",
                "benefit_en": "Aliquam et sunt corporis eum qui fugit est et. Est dolorem soluta velit explicabo incidunt dicta ut. Ullam vero aliquid voluptas aliquid ut iste illum. Et molestiae quas consequatur repellat impedit.",
                "tech_description": "Atque qui soluta nihil illo aliquid natus. Debitis eligendi ipsum ea dignissimos minus quasi. Ut dolor sapiente velit corrupti et. Eligendi qui consequatur et repellendus quia sapiente earum.",
                "tech_description_en": "Consequatur debitis eum consequatur dolores. Molestias omnis eos quae accusamus voluptatem aut aut. Porro nulla quis nulla ducimus ratione. Quidem qui quae voluptate autem ex repellat.",
                "description": "Repudiandae delectus odit numquam provident. Sed ipsa veritatis earum consequatur et. Ut nisi tempora expedita iusto a.",
                "description_en": "Porro recusandae ut ut fugit a perferendis quis. Iusto atque iure voluptatem.",
                "usage": "Aut vel aut aspernatur excepturi molestias ipsam. Debitis quos iusto non ut qui. Qui quis deleniti dolores et eius voluptates aliquid vel. Incidunt dolorem repudiandae deleniti.",
                "usage_en": "Saepe aut voluptatem veritatis ex quia exercitationem. Ea consequatur libero eos quo rem.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?12694",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?49754",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?10132",
                "product_video": null,
                "status": 2,
                "rating": 6.47,
                "sold_count": 4507,
                "review_count": 7463,
                "created_at": "2020-08-15 01:41:17",
                "updated_at": "2020-09-01 04:19:35",
                "product_category": {
                    "id": 14,
                    "slug": "dolorem-dolore",
                    "title": "套装A",
                    "title_en": "error quam fugiat",
                    "describe": "Incidunt consequatur quam quaerat voluptatem itaque esse. Et in sapiente qui occaecati adipisci reiciendis non. Voluptatem maxime id ipsa quod fuga quia rem.",
                    "describe_en": "Facilis aliquam molestiae eligendi. Qui distinctio architecto et iusto. Rerum assumenda omnis molestiae sed non quod labore.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?51125",
                    "description": "Eveniet similique aut dolorum occaecati aliquid ut.",
                    "description_en": "Temporibus non voluptas beatae optio dicta ab.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?94906",
                    "parent_id": 4,
                    "created_at": "2020-08-08 15:48:27",
                    "updated_at": "2020-08-21 14:26:59"
                }
            },
            {
                "id": 8,
                "product_category_id": 14,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "et adipisci aliquid",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?29395",
                "slug": "repellendus-ea",
                "short_description": "Delectus aliquam delectus velit consequuntur eos.",
                "short_description_en": "Quam mollitia officiis debitis voluptatem earum quis totam molestias. Voluptates molestiae consequatur labore eveniet et non nihil. Est atque non vel rerum non. Nihil doloremque modi nisi nostrum eos numquam illum. Ut voluptas et adipisci illo eligendi mollitia adipisci quo.",
                "price": "7101.00",
                "sale_price": "1.00",
                "stock": 794,
                "spec": null,
                "seo_title": "repellat illum id",
                "seo_keyword": "eaque",
                "seo_description": "Sed perspiciatis ratione eum velit est velit.",
                "benefit": "Dolorem labore sint itaque et quasi. Ex esse blanditiis eum odio unde modi molestias nemo. Esse illum est dignissimos ab assumenda distinctio.",
                "benefit_en": "Ipsum nesciunt totam numquam quae soluta harum fugit quaerat. Velit quo nulla nisi sint. Aspernatur quae delectus velit velit. Tenetur id dolorum sit commodi.",
                "tech_description": "Ipsum ipsum earum est hic. Asperiores minima voluptas modi culpa qui quia. Voluptatum omnis aspernatur doloremque qui autem maiores.",
                "tech_description_en": "Consequatur sint aut quam exercitationem. Qui molestias ea odit ullam nemo placeat. Hic unde ad nulla officiis fuga cupiditate. Culpa quasi quis sit ab magni unde.",
                "description": "Eum laudantium voluptatem laborum consequatur nam. Odio est iure asperiores blanditiis numquam. Omnis officia error sequi qui quos nihil.",
                "description_en": "Tenetur aut unde id voluptatem rerum impedit saepe. Labore iusto magni qui sit optio repellat sint.",
                "usage": "Fuga et et in. Facere voluptas nulla ad hic natus eaque. Libero iste aperiam non et sed rerum. Eos natus commodi est cupiditate quia quidem tempora.",
                "usage_en": "Consectetur sit eligendi dolor officia. Et odit enim voluptatibus. Quas voluptatem quia sit qui quam delectus. Voluptatibus dignissimos id commodi explicabo aut porro nihil.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?51688",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?83688",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?80973",
                "product_video": null,
                "status": 2,
                "rating": 5.54,
                "sold_count": 4925,
                "review_count": 3206,
                "created_at": "2020-08-24 09:54:21",
                "updated_at": "2020-08-14 04:09:28",
                "product_category": {
                    "id": 14,
                    "slug": "dolorem-dolore",
                    "title": "套装A",
                    "title_en": "error quam fugiat",
                    "describe": "Incidunt consequatur quam quaerat voluptatem itaque esse. Et in sapiente qui occaecati adipisci reiciendis non. Voluptatem maxime id ipsa quod fuga quia rem.",
                    "describe_en": "Facilis aliquam molestiae eligendi. Qui distinctio architecto et iusto. Rerum assumenda omnis molestiae sed non quod labore.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?51125",
                    "description": "Eveniet similique aut dolorum occaecati aliquid ut.",
                    "description_en": "Temporibus non voluptas beatae optio dicta ab.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?94906",
                    "parent_id": 4,
                    "created_at": "2020-08-08 15:48:27",
                    "updated_at": "2020-08-21 14:26:59"
                }
            },
            {
                "id": 9,
                "product_category_id": 8,
                "product_name": "黑钻焕肤水",
                "product_name_en": "quibusdam molestiae iusto",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?23948",
                "slug": "qui-non",
                "short_description": "Velit sint et quo.",
                "short_description_en": "Vel quis fugiat blanditiis. Laudantium aut ipsam sint asperiores. Nobis assumenda odit autem est et. Illum vitae sit laborum nobis atque nam quasi.",
                "price": "5098.00",
                "sale_price": "1.00",
                "stock": 185,
                "spec": null,
                "seo_title": "dicta adipisci ut",
                "seo_keyword": "dolores",
                "seo_description": "Aspernatur ducimus enim quia voluptate ad.",
                "benefit": "Sed eligendi et neque provident. Qui quia debitis aperiam non quia necessitatibus sapiente. Quibusdam ut voluptatem maiores. Illum eos inventore quod quo distinctio maiores eveniet.",
                "benefit_en": "Optio dignissimos doloremque dicta sequi maxime libero. Neque et id et eum vitae. Ducimus quas quos eius nihil doloremque et.",
                "tech_description": "In tempora aut incidunt magni et exercitationem enim. Adipisci amet natus neque. Repudiandae adipisci asperiores est accusantium nemo.",
                "tech_description_en": "Sequi possimus hic blanditiis aut rerum. Debitis est et consequatur laboriosam. Et error voluptatem vel eveniet doloribus earum accusantium. Quo doloribus iure consequatur nam nobis totam porro velit.",
                "description": "Et autem cumque qui voluptatum. Ullam deleniti assumenda dolores modi nihil et impedit sit.",
                "description_en": "Praesentium velit id id officiis eos molestiae. Excepturi ratione recusandae eum laborum veniam ea nesciunt. Omnis facere et quo voluptas pariatur alias.",
                "usage": "Est dolor dolor vel non. Corporis quod eos asperiores ut molestias.",
                "usage_en": "Dolorem quia officia repellat ratione quam corporis rem quia. Quasi qui reiciendis laboriosam non tempore. Ipsam quis quae ut nemo.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?80392",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?41927",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?82786",
                "product_video": null,
                "status": 1,
                "rating": 0.94,
                "sold_count": 2739,
                "review_count": 1482,
                "created_at": "2020-08-12 18:46:10",
                "updated_at": "2020-08-18 19:36:49",
                "product_category": {
                    "id": 8,
                    "slug": "aut-est",
                    "title": "面膜",
                    "title_en": "nisi voluptas sit",
                    "describe": "Velit est temporibus est magni eius vitae. Qui rem ipsam voluptatem sed numquam ipsum. Sit iure delectus qui et magnam perferendis et. Est sunt molestiae ad molestiae qui.",
                    "describe_en": "Modi natus amet natus. Officia velit natus nihil voluptatem reprehenderit excepturi. Dolor facilis voluptatibus dolore quis nulla.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?91977",
                    "description": "Unde impedit et nulla consequuntur et.",
                    "description_en": "Neque et dolores aperiam quae est id.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?26207",
                    "parent_id": 16,
                    "created_at": "2020-08-28 00:17:50",
                    "updated_at": "2020-09-01 08:43:12"
                }
            },
            {
                "id": 10,
                "product_category_id": 9,
                "product_name": "黑钻肌光精华",
                "product_name_en": "reiciendis reiciendis iste",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?51940",
                "slug": "nemo-neque",
                "short_description": "Hic voluptates soluta sunt doloribus in.",
                "short_description_en": "Voluptatibus nihil id provident consequatur. Eum odio nihil sed et similique sint. Quisquam et rerum et ut dolor.",
                "price": "4033.00",
                "sale_price": "1.00",
                "stock": 645,
                "spec": null,
                "seo_title": "dolore voluptatibus distinctio",
                "seo_keyword": "esse",
                "seo_description": "Magnam cumque vitae blanditiis qui ullam.",
                "benefit": "Exercitationem cupiditate nesciunt sequi qui totam quia est. Voluptas ex at ab doloremque dolores qui. Esse omnis error voluptatem impedit ut ut. Numquam eaque consequatur dolor aut error doloribus qui culpa.",
                "benefit_en": "Qui culpa nihil ut ipsam est et ipsum et. Accusamus omnis ullam rerum sit omnis. Non nobis in animi labore minus. Dolor ab dolores mollitia in libero enim quia.",
                "tech_description": "Rem saepe necessitatibus aut voluptatem. Et et odio explicabo repudiandae id voluptatem porro aut. Neque alias est consequatur possimus est qui.",
                "tech_description_en": "Totam non et dolor nihil. Qui et enim eveniet qui recusandae id.",
                "description": "Nesciunt sit sed sapiente quia corporis voluptatibus. Beatae in ut labore molestias ipsa animi minima. Sint iusto saepe quis voluptatum eos natus. Asperiores id veniam ut unde occaecati exercitationem deserunt.",
                "description_en": "Aut et quam accusamus pariatur neque beatae. In non corporis vitae quod enim ea et eveniet. Explicabo sequi quia cumque ex dolorem. Et fugiat expedita omnis at natus.",
                "usage": "Omnis quas doloribus eveniet nesciunt. Ab ducimus omnis doloremque architecto ducimus ipsum repudiandae. Quis porro ut fuga optio aut dignissimos aut. Ullam quo quia quos qui officia voluptatibus. Illo omnis at quibusdam quos neque est.",
                "usage_en": "Fugiat ex quos nostrum laudantium. Numquam dolorem illo unde aut soluta dolorem.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?35981",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?21430",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?98099",
                "product_video": null,
                "status": 3,
                "rating": 2.57,
                "sold_count": 3089,
                "review_count": 4604,
                "created_at": "2020-08-08 23:17:27",
                "updated_at": "2020-08-26 12:00:41",
                "product_category": {
                    "id": 9,
                    "slug": "sint-reprehenderit",
                    "title": "爽肤水",
                    "title_en": "nesciunt aut quia",
                    "describe": "Qui aut et et dolore quo exercitationem laborum quae. Cupiditate molestiae molestias accusantium ullam perspiciatis reiciendis sint. Ab voluptatum quas velit optio qui mollitia dolorum.",
                    "describe_en": "Aspernatur facilis repudiandae error odio. Fugiat dolor nulla voluptatem officiis culpa. Ea tempora iste molestiae ea quas.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?61006",
                    "description": "Veritatis maxime tempore eaque.",
                    "description_en": "Quia recusandae quaerat consequatur rerum maiores quis.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?31480",
                    "parent_id": 4,
                    "created_at": "2020-08-17 06:03:16",
                    "updated_at": "2020-08-08 10:25:07"
                }
            },
            {
                "id": 11,
                "product_category_id": 1,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "commodi mollitia fuga",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?13603",
                "slug": "sunt-animi",
                "short_description": "Similique aut et et.",
                "short_description_en": "Recusandae consectetur placeat itaque aut. Maxime voluptas quisquam dolores voluptates repellendus vitae. Maxime ipsa quia odit error ea. Eum voluptas et ipsum error.",
                "price": "3923.00",
                "sale_price": "1.00",
                "stock": 67,
                "spec": null,
                "seo_title": "qui sunt consequatur",
                "seo_keyword": "assumenda",
                "seo_description": "Nostrum nulla velit quo itaque inventore quo.",
                "benefit": "Temporibus quod reprehenderit nostrum aut. Aliquam dignissimos error dolor sed. Voluptatem eaque quaerat quia inventore quia. Reprehenderit dolorum qui velit et.",
                "benefit_en": "Esse vel eius non voluptas sunt. Sed sed quidem et nesciunt est reprehenderit molestiae. Maiores quasi aspernatur ratione.",
                "tech_description": "Sed odio optio sint id dolore ut dolorum et. Iusto qui excepturi ut accusamus dignissimos quia impedit. Qui asperiores omnis et quos commodi quae ab ut.",
                "tech_description_en": "Odit facere similique qui corrupti eum. Nobis omnis accusamus sit temporibus dolor consequatur eum.",
                "description": "Expedita et odio ut maiores eveniet quam ut eligendi. Quas facere consequatur suscipit a accusamus ut maiores porro. Earum fugiat consequatur fugiat tempore repudiandae maxime repellat.",
                "description_en": "Aut corporis neque consectetur autem at sed. Aut excepturi quae suscipit magnam ipsa. Iure enim soluta quia neque. Voluptatem esse et quaerat aut corrupti adipisci nesciunt enim. Ut error qui quos asperiores nam consequatur qui praesentium.",
                "usage": "Quis rerum amet iste sequi consequatur. Quam at necessitatibus ipsa asperiores voluptatibus et est. Cum ut quae numquam dicta ipsam aperiam qui.",
                "usage_en": "Amet iusto quasi placeat ut ea nihil. Ipsum sit est omnis praesentium unde fugit quo aliquam.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?16826",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?86675",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?13805",
                "product_video": null,
                "status": 2,
                "rating": 3.02,
                "sold_count": 4169,
                "review_count": 6162,
                "created_at": "2020-08-16 00:32:39",
                "updated_at": "2020-08-24 03:36:50",
                "product_category": {
                    "id": 1,
                    "slug": "ut-est",
                    "title": "BB霜",
                    "title_en": "non asperiores velit",
                    "describe": "Ut consectetur ullam labore impedit ipsa. Animi iure numquam deserunt similique nemo. Eos voluptatem harum sunt incidunt veritatis. Ab commodi officiis quas ipsam asperiores.",
                    "describe_en": "Alias harum voluptas qui dolore omnis perspiciatis nihil. Sed quisquam nam repellat. Veritatis unde quasi distinctio aliquid qui. Sint asperiores dolores at tempore in sit perferendis porro.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?82954",
                    "description": "Nesciunt autem maxime cum culpa blanditiis non.",
                    "description_en": "Quo voluptatum iure eligendi accusantium dignissimos expedita.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?49975",
                    "parent_id": 11,
                    "created_at": "2020-08-24 16:47:28",
                    "updated_at": "2020-08-15 19:28:33"
                }
            },
            {
                "id": 12,
                "product_category_id": 11,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "iste officiis recusandae",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?99049",
                "slug": "nam-facere",
                "short_description": "Quia architecto aliquam quibusdam blanditiis modi.",
                "short_description_en": "Amet ratione aut quod fugiat nobis. Aspernatur distinctio est est voluptas laboriosam et. Fuga officia dolores sit voluptas aut eveniet et eius. Rerum dignissimos ipsam accusantium explicabo consequatur.",
                "price": "5950.00",
                "sale_price": "1.00",
                "stock": 495,
                "spec": null,
                "seo_title": "dicta quibusdam possimus",
                "seo_keyword": "non",
                "seo_description": "Optio fugit inventore maxime et dolorem.",
                "benefit": "Repellat et est minima. Rerum explicabo aspernatur iste eligendi consectetur blanditiis. Ut omnis rerum ut voluptatem in sint mollitia. Quidem debitis et ea quia necessitatibus.",
                "benefit_en": "Corrupti odit quam dolorem qui consectetur. At molestias quis eos aliquam eos. Quae non qui rerum nesciunt quia.",
                "tech_description": "Recusandae illo debitis ut veniam aut aut. Quia nihil corporis quidem illo illo quos quo. Consequuntur quis praesentium officia corrupti maiores et ea omnis.",
                "tech_description_en": "Est error unde sed ex totam. Sit odit enim libero sit ut repellendus qui. Quidem est soluta deserunt sit sit.",
                "description": "Error voluptatem nam et velit quibusdam. Aspernatur aspernatur eligendi recusandae tempore quod repudiandae et. Aspernatur ipsa accusantium minima autem qui voluptatum vitae.",
                "description_en": "Enim blanditiis et quasi magni sit omnis. Distinctio ut beatae accusantium vero et vel. Ratione exercitationem placeat cum voluptate.",
                "usage": "Veniam mollitia nesciunt velit quae. Natus fuga ut ut deleniti quam voluptatibus. Itaque eos quasi illo voluptas.",
                "usage_en": "Animi quia quis et aperiam. Maiores assumenda non voluptas fuga facere delectus. Est ipsum qui voluptas aut inventore adipisci. Rerum sit sint quibusdam illo sed dignissimos velit et.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?30016",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?86937",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?44245",
                "product_video": null,
                "status": 2,
                "rating": 8.38,
                "sold_count": 1504,
                "review_count": 4395,
                "created_at": "2020-08-06 20:27:45",
                "updated_at": "2020-08-28 20:13:07",
                "product_category": {
                    "id": 11,
                    "slug": "illum-qui",
                    "title": "香水",
                    "title_en": "commodi expedita id",
                    "describe": "Doloremque perspiciatis eos est quia. Sit consequatur blanditiis dignissimos qui consequatur et quisquam. Mollitia vitae incidunt voluptatem vitae eaque voluptatem ut.",
                    "describe_en": "Similique assumenda enim voluptas quis quia magni nobis nobis. Sunt earum ut velit itaque incidunt quia voluptas. Enim quaerat architecto aut esse dolores.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?82192",
                    "description": "Minima sapiente est corrupti doloribus et quod.",
                    "description_en": "Et nulla aut natus.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?79979",
                    "parent_id": 23,
                    "created_at": "2020-08-03 10:25:31",
                    "updated_at": "2020-08-14 08:20:51"
                }
            },
            {
                "id": 13,
                "product_category_id": 16,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "non quibusdam repudiandae",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?49183",
                "slug": "esse-iure",
                "short_description": "Est error sed quaerat corrupti.",
                "short_description_en": "Quis maiores veritatis ab molestias accusamus minus. Illum doloremque autem non perspiciatis aliquam dolorem omnis quam. Quidem alias dolor cum temporibus sint rerum aliquid.",
                "price": "5732.00",
                "sale_price": "1.00",
                "stock": 427,
                "spec": null,
                "seo_title": "voluptas dolore ratione",
                "seo_keyword": "explicabo",
                "seo_description": "Repudiandae fugiat odio voluptatum voluptatum voluptatem ea.",
                "benefit": "Voluptatem et hic rerum ea labore. Quod laudantium recusandae magni ipsa in qui aspernatur molestias. Sint quas officia vel libero id.",
                "benefit_en": "Necessitatibus delectus temporibus velit ut nihil a laboriosam. Eum repellendus et et. Enim quia nemo voluptas nostrum. Saepe dolores consequatur ut voluptas.",
                "tech_description": "A et saepe quia nihil officia. Dolore eum qui nobis delectus quod quos qui beatae. Dicta doloremque recusandae soluta quia.",
                "tech_description_en": "Voluptates aliquid architecto fuga sed. Aut ut sit odio omnis. Omnis esse natus eius quo tempora explicabo iste molestiae. Sed qui ut natus eos aperiam aut.",
                "description": "Earum maiores minima ea. Ea non autem voluptatem enim est fuga sint. Animi quia non impedit eum et libero consequatur. Explicabo est aut provident.",
                "description_en": "Cum architecto omnis possimus et. Nesciunt provident quisquam facere aut quas. Corrupti quia quaerat voluptas sunt sunt. Optio eum illum minus eos rerum iste.",
                "usage": "Sit aut voluptatem pariatur nulla ut minus alias. Et eligendi illum nihil optio. Totam cupiditate reprehenderit ipsum doloribus sapiente eius in.",
                "usage_en": "Similique neque consequuntur unde libero quisquam. Alias laudantium blanditiis sit aperiam sed et. Fugiat earum non et iusto velit. Sunt vero ut non est suscipit.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?17704",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?20055",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?88008",
                "product_video": null,
                "status": 1,
                "rating": 6.3,
                "sold_count": 2006,
                "review_count": 1420,
                "created_at": "2020-08-09 16:33:13",
                "updated_at": "2020-08-31 18:16:17",
                "product_category": {
                    "id": 16,
                    "slug": "facere-perspiciatis",
                    "title": "睫毛膏",
                    "title_en": "non doloribus facere",
                    "describe": "Tenetur minima incidunt consequatur omnis quo aut quidem. Enim consectetur vero laboriosam velit modi illo in. Excepturi nobis exercitationem veniam aut soluta quam dignissimos et.",
                    "describe_en": "Rerum amet dolor velit repellat porro. Beatae voluptatem magnam et et officia et sit. Sed aut quia impedit. Laborum eos eos velit placeat.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?41390",
                    "description": "Neque aut non magni velit recusandae.",
                    "description_en": "Consequatur vitae doloribus ab enim.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?60655",
                    "parent_id": 25,
                    "created_at": "2020-08-14 14:52:46",
                    "updated_at": "2020-08-31 01:06:34"
                }
            },
            {
                "id": 14,
                "product_category_id": 17,
                "product_name": "黑钻焕肤水",
                "product_name_en": "officia recusandae adipisci",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?11495",
                "slug": "modi-odit",
                "short_description": "Quis recusandae rerum sed.",
                "short_description_en": "Ad omnis eum est repellendus eveniet. Dolorem dolores doloremque sit reprehenderit similique ut assumenda. Dolore repudiandae et quia id beatae.",
                "price": "4654.00",
                "sale_price": "1.00",
                "stock": 980,
                "spec": null,
                "seo_title": "et veniam distinctio",
                "seo_keyword": "molestiae",
                "seo_description": "Necessitatibus et totam nostrum.",
                "benefit": "Architecto velit est et facere. Ducimus rerum odio suscipit. Odit nemo a omnis sed possimus rerum.",
                "benefit_en": "Eveniet rerum et qui. Corporis non vitae sequi mollitia quod totam. Aperiam beatae ut dicta rerum eaque non.",
                "tech_description": "Magnam magnam debitis tenetur nulla voluptas amet. At quas et recusandae repellat asperiores sequi repellat. Ut quasi qui repudiandae.",
                "tech_description_en": "Suscipit consequatur accusantium est eos. Perspiciatis tempora ut non nisi non aut sed.",
                "description": "Et est enim eum saepe architecto unde earum. Aperiam quod voluptatum necessitatibus sit error. Inventore assumenda laudantium rerum ut id vitae. Eveniet nihil vel rerum corporis consequatur.",
                "description_en": "Impedit quia repudiandae rem consequatur. Et voluptatum sed inventore odit. Molestiae qui nemo quas beatae qui rerum ipsam necessitatibus.",
                "usage": "Ut vel error et aut quidem. Est voluptas blanditiis fuga nisi provident. Facilis repudiandae iusto ut quia et et soluta.",
                "usage_en": "Nostrum vitae sapiente sunt id reiciendis est. Maxime quis non voluptatibus aut voluptas tempore. Fuga fugit quidem aut fugit enim fugit. Perferendis voluptatum voluptatum totam consequatur laborum quae.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?33836",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?18698",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?44463",
                "product_video": null,
                "status": 3,
                "rating": 6.58,
                "sold_count": 7899,
                "review_count": 7527,
                "created_at": "2020-08-20 07:53:44",
                "updated_at": "2020-08-08 15:53:51",
                "product_category": {
                    "id": 17,
                    "slug": "aut-iusto",
                    "title": "香水",
                    "title_en": "ex officiis sunt",
                    "describe": "Et quisquam ut quia dolor. Impedit ut ea et porro ipsa dolores dolor eaque. Voluptate error dignissimos aut tempore.",
                    "describe_en": "Quibusdam sunt dicta est ad. Illo labore quibusdam eligendi ut nihil dicta. Nemo deserunt ad illum tempore aut. Omnis quaerat fugiat ut. Eveniet distinctio aut ullam perspiciatis.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?50318",
                    "description": "Neque sit et fugit placeat fugiat.",
                    "description_en": "Sapiente ut quae molestias eum aperiam saepe.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?40761",
                    "parent_id": 5,
                    "created_at": "2020-08-24 04:38:01",
                    "updated_at": "2020-09-01 00:33:10"
                }
            },
            {
                "id": 15,
                "product_category_id": 8,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "quam voluptatum neque",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?63465",
                "slug": "labore-dolorem",
                "short_description": "Optio aperiam itaque necessitatibus quibusdam.",
                "short_description_en": "Esse minus aut voluptatem ad nihil quod ipsum. Qui voluptas cum voluptatibus iure qui blanditiis. Quasi sint in laudantium voluptatum expedita dolores omnis. Explicabo aut est consectetur illum.",
                "price": "9587.00",
                "sale_price": "1.00",
                "stock": 932,
                "spec": null,
                "seo_title": "natus expedita ut",
                "seo_keyword": "quisquam",
                "seo_description": "Repellat et nihil rerum qui aperiam nostrum.",
                "benefit": "Voluptas exercitationem eaque consequatur. Repellendus iusto qui facilis quia repellendus et quas. Dolores assumenda corrupti qui consequatur quod laudantium aut. Reiciendis nesciunt ipsam quisquam.",
                "benefit_en": "Est praesentium repellat dolorum. Eligendi rerum adipisci qui perferendis est cum assumenda. Sunt rerum recusandae et. Magni et vero officiis tenetur perferendis est.",
                "tech_description": "Nostrum autem ut inventore aliquid molestiae numquam. Temporibus nihil est fugiat est. Qui eos impedit eaque aut nulla dolor sequi.",
                "tech_description_en": "Velit id reiciendis ea. Quo rerum aut perspiciatis vel facilis. Itaque porro voluptates omnis autem adipisci voluptatum ullam.",
                "description": "Quo provident sit qui tempora. Voluptas sed possimus eum odit labore qui magnam exercitationem. Labore quia similique iusto repudiandae. Voluptatum cumque ea qui molestias nam sit repudiandae. Sed maxime omnis explicabo aperiam vitae voluptas.",
                "description_en": "Necessitatibus commodi id et sit. Hic in eligendi itaque facere doloremque deserunt nobis. Dolor est eligendi suscipit laborum totam facilis consequatur voluptate. Optio est excepturi et nostrum.",
                "usage": "Soluta provident velit laborum cum commodi non. Totam assumenda sunt neque mollitia unde ea. Velit sint sapiente molestiae perferendis.",
                "usage_en": "Voluptates voluptas esse quos qui. Velit expedita molestiae occaecati voluptatem est. Sit facere pariatur aut quia eum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?24115",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?12441",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?89289",
                "product_video": null,
                "status": 1,
                "rating": 9.21,
                "sold_count": 5859,
                "review_count": 6249,
                "created_at": "2020-08-16 06:22:57",
                "updated_at": "2020-08-13 22:27:47",
                "product_category": {
                    "id": 8,
                    "slug": "aut-est",
                    "title": "面膜",
                    "title_en": "nisi voluptas sit",
                    "describe": "Velit est temporibus est magni eius vitae. Qui rem ipsam voluptatem sed numquam ipsum. Sit iure delectus qui et magnam perferendis et. Est sunt molestiae ad molestiae qui.",
                    "describe_en": "Modi natus amet natus. Officia velit natus nihil voluptatem reprehenderit excepturi. Dolor facilis voluptatibus dolore quis nulla.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?91977",
                    "description": "Unde impedit et nulla consequuntur et.",
                    "description_en": "Neque et dolores aperiam quae est id.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?26207",
                    "parent_id": 16,
                    "created_at": "2020-08-28 00:17:50",
                    "updated_at": "2020-09-01 08:43:12"
                }
            },
            {
                "id": 16,
                "product_category_id": 6,
                "product_name": "黑钻焕肤水",
                "product_name_en": "voluptatem ducimus minima",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?10254",
                "slug": "dolores-sapiente",
                "short_description": "Illum temporibus est accusamus quaerat.",
                "short_description_en": "Sint sit ipsum rerum asperiores quas. Nihil unde sit occaecati enim occaecati possimus. Non sed debitis voluptatem velit neque accusantium.",
                "price": "3247.00",
                "sale_price": "1.00",
                "stock": 622,
                "spec": null,
                "seo_title": "eveniet mollitia quo",
                "seo_keyword": "numquam",
                "seo_description": "Et sed iure quas tempore.",
                "benefit": "Tenetur est consequatur cumque ad aliquid qui. Sed quo iure quisquam quod numquam tenetur quisquam est. Velit sed asperiores fugit recusandae quasi numquam.",
                "benefit_en": "Adipisci dolor neque architecto modi nobis et. Sit quod pariatur accusamus occaecati doloremque dolorem. Laborum veritatis laborum et ut molestias pariatur.",
                "tech_description": "Deleniti eligendi soluta itaque eum reprehenderit et atque. Velit ea numquam ut.",
                "tech_description_en": "Sit sed quia sint animi. Voluptatum repellat laboriosam aut sed. Quas dolores iusto corrupti dolorem vel eum. Necessitatibus ut rerum impedit dolor. Doloremque libero reprehenderit non qui minus.",
                "description": "Dicta blanditiis optio quisquam aut sunt temporibus. Perspiciatis voluptatem in omnis distinctio. Est expedita similique molestias eos.",
                "description_en": "Voluptatem odio illo nihil minus. Voluptas sunt veniam dolores animi voluptate. Et ipsam qui est at minus exercitationem porro.",
                "usage": "Vel nobis quia necessitatibus soluta et velit odit. Debitis qui voluptas tenetur tenetur provident.",
                "usage_en": "Doloribus facere aut odio voluptatem. Sed eum distinctio ut porro eum doloremque modi. Natus distinctio delectus ab rerum. Libero velit aut sit facere omnis.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?50779",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?42207",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?88130",
                "product_video": null,
                "status": 2,
                "rating": 4.92,
                "sold_count": 7020,
                "review_count": 3114,
                "created_at": "2020-08-19 08:33:04",
                "updated_at": "2020-08-27 22:56:44",
                "product_category": {
                    "id": 6,
                    "slug": "sint-nostrum",
                    "title": "眼线",
                    "title_en": "aut ut magnam",
                    "describe": "Doloribus ipsam cupiditate aperiam perferendis porro. Velit id quis aut vel possimus quia. Sit et laudantium assumenda consequatur porro.",
                    "describe_en": "Occaecati quis dolores expedita voluptatibus corporis dignissimos. Vitae quod quia ratione consequatur deleniti aut perferendis. Non et magni ut omnis magni consequatur. Minus sit sunt impedit.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?64712",
                    "description": "Voluptas provident qui laboriosam id quisquam architecto.",
                    "description_en": "A provident aut odio id qui reprehenderit.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?54229",
                    "parent_id": 27,
                    "created_at": "2020-08-12 03:34:43",
                    "updated_at": "2020-08-12 10:01:24"
                }
            },
            {
                "id": 17,
                "product_category_id": 12,
                "product_name": "黑钻焕肤水",
                "product_name_en": "mollitia est culpa",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?54785",
                "slug": "rerum-a",
                "short_description": "Aspernatur velit fugiat quidem tempora molestiae illo.",
                "short_description_en": "Sequi nam culpa modi. Voluptatum id et ea sint eum. Consequatur ducimus ullam dicta adipisci voluptas eaque.",
                "price": "8457.00",
                "sale_price": "1.00",
                "stock": 254,
                "spec": null,
                "seo_title": "voluptatem eius aperiam",
                "seo_keyword": "at",
                "seo_description": "Sed labore labore rem corporis voluptatibus.",
                "benefit": "Et eos laudantium et ex. Repellendus ratione inventore possimus aut qui. Quia enim atque odit qui iste fugit dolores. Et sit perspiciatis non ab.",
                "benefit_en": "Nihil non ut facilis accusantium. Cum aut odit et dignissimos. Ducimus quia eaque architecto nesciunt architecto saepe eos delectus. Repellendus et sint quisquam magni aspernatur itaque.",
                "tech_description": "Odio nam non autem eveniet id ad illum autem. Culpa voluptate occaecati qui similique.",
                "tech_description_en": "Sint voluptatibus doloribus eaque unde. Omnis deleniti porro voluptatem saepe dolorem. Unde quis omnis qui repellendus corporis dolore quas.",
                "description": "Provident cum optio alias repellat consequatur. Iusto molestias eum aut consectetur impedit alias. Nihil laborum molestiae ut qui. Iste sed hic modi velit aut.",
                "description_en": "Tempora ullam consequuntur quae ab. Eos unde magnam temporibus placeat. Eum repellendus ducimus neque non voluptas labore nisi.",
                "usage": "Sapiente omnis velit eveniet qui consequatur aut numquam. Qui sunt necessitatibus tenetur ab aperiam ut molestiae. Sed qui inventore dolores rem molestiae.",
                "usage_en": "Reiciendis ea deserunt quasi eligendi ab eligendi. Tempora et culpa dolor exercitationem. Aut eos velit et et aliquam. Aut ea non qui dignissimos quia voluptatum reprehenderit.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?63757",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?34133",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?21108",
                "product_video": null,
                "status": 3,
                "rating": 2.3,
                "sold_count": 2934,
                "review_count": 1191,
                "created_at": "2020-08-17 13:05:51",
                "updated_at": "2020-08-03 06:14:38",
                "product_category": {
                    "id": 12,
                    "slug": "et-aut",
                    "title": "套装B",
                    "title_en": "et voluptatem sit",
                    "describe": "Facere sequi omnis cupiditate. Vel enim nesciunt molestiae rerum inventore ut saepe rem.",
                    "describe_en": "Asperiores in et aut voluptas ea est provident. Expedita ea nemo ea eos et corporis eaque.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?18038",
                    "description": "Illo aliquid accusantium vitae sequi.",
                    "description_en": "Sit nulla odit cum quae pariatur.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?66275",
                    "parent_id": 15,
                    "created_at": "2020-08-12 13:45:51",
                    "updated_at": "2020-08-31 04:05:23"
                }
            },
            {
                "id": 18,
                "product_category_id": 18,
                "product_name": "黑钻肌光精华",
                "product_name_en": "saepe totam expedita",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?30240",
                "slug": "blanditiis-ut",
                "short_description": "Quisquam ullam nesciunt eum omnis.",
                "short_description_en": "Quibusdam ipsa iste veritatis delectus. Sit sed dolores doloribus magnam ut blanditiis dolor. Quis ullam et culpa quaerat rerum. Dolor porro cum temporibus et hic voluptas ut.",
                "price": "7749.00",
                "sale_price": "1.00",
                "stock": 522,
                "spec": null,
                "seo_title": "nostrum dolorum a",
                "seo_keyword": "voluptate",
                "seo_description": "Iusto sit nesciunt voluptas iste nulla aut.",
                "benefit": "Beatae in eum fugiat laboriosam enim. Consequuntur in unde eum. Molestiae tenetur doloremque quo expedita.",
                "benefit_en": "Nobis nihil vitae soluta vel libero quia. Libero omnis non exercitationem. Incidunt expedita voluptates nam ullam.",
                "tech_description": "Quia quis amet perspiciatis dignissimos harum exercitationem. Nisi ab ipsum ad vel qui. Quo blanditiis sapiente ipsum deleniti laboriosam magni laboriosam. Ipsam aut quia ipsa et soluta ut cupiditate.",
                "tech_description_en": "Laboriosam accusamus quam est ut sunt quis et. Ut mollitia amet animi odit voluptatibus iste. Eos quo itaque est reprehenderit.",
                "description": "Accusamus alias dolor saepe aut enim. Ut quisquam placeat vero nobis. Laborum nobis cum corrupti atque voluptatem consequuntur ut dolor.",
                "description_en": "Pariatur occaecati dolorum modi est accusamus hic. Et cupiditate in repellat accusamus dicta provident hic eligendi. Sit id qui temporibus. Quaerat unde rem omnis molestiae.",
                "usage": "Fugit nihil et laboriosam. Molestiae hic quo quia aut mollitia. Velit enim rem et sequi. Non cupiditate saepe modi amet consequuntur.",
                "usage_en": "Vel ea velit consequuntur rerum necessitatibus. Et consequuntur doloribus placeat aut sed corrupti. Consequatur delectus repellat sit nemo quidem voluptatem qui alias.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?38898",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?75382",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?71704",
                "product_video": null,
                "status": 2,
                "rating": 6.07,
                "sold_count": 8218,
                "review_count": 1442,
                "created_at": "2020-08-03 08:48:11",
                "updated_at": "2020-08-07 16:56:50",
                "product_category": {
                    "id": 18,
                    "slug": "dolorem-nesciunt",
                    "title": "精油",
                    "title_en": "fuga nobis quia",
                    "describe": "Et et consequuntur alias et. Quas animi officiis doloremque reprehenderit. Saepe voluptas et magni voluptatum.",
                    "describe_en": "Eum nobis saepe dolor labore impedit corrupti corporis ratione. Ullam iste rerum odio ut consequatur qui nemo. Consequatur voluptatem corporis voluptatum praesentium et culpa delectus aut.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?41294",
                    "description": "Unde architecto minus sint inventore eos amet.",
                    "description_en": "Quod consectetur et est autem.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?26336",
                    "parent_id": 25,
                    "created_at": "2020-08-06 12:17:45",
                    "updated_at": "2020-08-15 13:09:58"
                }
            },
            {
                "id": 19,
                "product_category_id": 10,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "et omnis dolore",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?10248",
                "slug": "sint-neque",
                "short_description": "Ex et et vero et sed molestiae.",
                "short_description_en": "Ea ut explicabo quo. Velit facere vitae voluptatem esse quibusdam enim quas. Itaque laudantium ullam dolorem reprehenderit sed.",
                "price": "9131.00",
                "sale_price": "1.00",
                "stock": 760,
                "spec": null,
                "seo_title": "voluptatum nostrum magni",
                "seo_keyword": "odit",
                "seo_description": "Officiis eius labore iure vel cupiditate.",
                "benefit": "Voluptas nisi tempore quia inventore impedit accusamus ducimus. Atque cum nesciunt odio vero et illo. Harum consequatur quo molestiae dignissimos. Officiis maiores quia cumque deleniti.",
                "benefit_en": "Pariatur est a vero molestiae quo ipsum. Sed recusandae voluptas quia accusamus enim velit. Quo ad inventore culpa eveniet.",
                "tech_description": "Nisi aut incidunt est enim ipsam. Voluptatem sequi ratione quam tempore consequatur accusantium. Nemo temporibus blanditiis et veritatis consequuntur magnam.",
                "tech_description_en": "Perspiciatis minima id quasi animi non cum numquam. Cum eligendi et voluptates deleniti a nam. Sed sequi ducimus vero veniam. Aut nemo voluptas mollitia.",
                "description": "Rerum odit cupiditate voluptas et praesentium pariatur est. Esse et sit quo consequuntur cum velit voluptatem. Laudantium aut illo tempore reiciendis fugiat dolore alias. Occaecati eius ut tempora qui vitae repellendus.",
                "description_en": "Corrupti voluptas eligendi ipsam excepturi dolores recusandae deleniti a. Sed magni praesentium ea ipsam architecto incidunt. Dolorum deleniti aperiam assumenda officiis qui. Et tempora recusandae quisquam.",
                "usage": "Reprehenderit eaque libero eveniet. Qui vel quisquam sit quia cum porro. Esse dolores expedita commodi hic voluptas. Vel omnis est temporibus id.",
                "usage_en": "Voluptates pariatur sit nihil. Saepe maiores sunt qui et esse. Enim quia doloribus explicabo assumenda laudantium maxime impedit rerum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?13407",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?63428",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?32048",
                "product_video": null,
                "status": 1,
                "rating": 7.11,
                "sold_count": 3272,
                "review_count": 1919,
                "created_at": "2020-08-17 03:38:42",
                "updated_at": "2020-08-04 19:17:24",
                "product_category": {
                    "id": 10,
                    "slug": "perferendis-distinctio",
                    "title": "面霜",
                    "title_en": "esse iste quisquam",
                    "describe": "Omnis repellat incidunt fuga aut. Est repudiandae placeat sit. Quis qui officia iste eum error. Consequatur nihil et nisi accusamus sit in sit.",
                    "describe_en": "Illum consectetur officia atque ut. Nesciunt atque aut excepturi sed eius aut. Et eius consequuntur ab accusantium temporibus assumenda.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?47600",
                    "description": "Repellat dolorem numquam est velit inventore molestiae.",
                    "description_en": "Dicta est quo id voluptates enim.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?66694",
                    "parent_id": 11,
                    "created_at": "2020-08-31 11:36:22",
                    "updated_at": "2020-08-17 01:49:46"
                }
            },
            {
                "id": 20,
                "product_category_id": 6,
                "product_name": "黑钻肌光精华",
                "product_name_en": "quia in recusandae",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?34421",
                "slug": "quis-non",
                "short_description": "Nobis eligendi minus quia est.",
                "short_description_en": "Dolorem ipsam voluptatem error vel aspernatur maiores. Nihil aliquam doloribus eaque ea rerum temporibus.",
                "price": "499.00",
                "sale_price": "1.00",
                "stock": 872,
                "spec": null,
                "seo_title": "accusamus temporibus nemo",
                "seo_keyword": "autem",
                "seo_description": "Minus sapiente molestiae nihil.",
                "benefit": "Ea est laborum esse quos. Ab iure distinctio quis omnis natus veniam. Voluptas id eaque amet sunt qui.",
                "benefit_en": "Mollitia adipisci sit aut qui voluptatem tempora. Nobis dolor et distinctio. Itaque quis quos omnis repellat omnis dolores laborum. Asperiores suscipit qui minus facere magnam et commodi.",
                "tech_description": "Vero et ipsa mollitia id. Unde blanditiis error est. Qui dignissimos sit saepe.",
                "tech_description_en": "Ab voluptatem ab quis est aliquam. Quos sapiente ut assumenda. Qui libero perferendis aliquam amet voluptatem.",
                "description": "Dolore qui ipsa consequuntur sit dicta et aspernatur. Sint assumenda quia vero iure. Sint maiores sunt quaerat aspernatur et quis autem impedit. Pariatur accusantium eaque a rerum voluptatem et dolorum.",
                "description_en": "Omnis quis modi ut velit nostrum sint maiores. Ut eveniet at consequuntur quasi dolorum. Eligendi aperiam et repellat fugiat ut enim. Repellat soluta illo hic fuga corporis.",
                "usage": "Cupiditate dicta saepe error veniam. Ut architecto laboriosam voluptatem porro. Maiores non at culpa adipisci quod.",
                "usage_en": "Reiciendis sequi et autem. Autem quo a veniam aut eveniet velit tempora. Commodi et atque fuga. Pariatur et dolorem non.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?82418",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?92629",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?18816",
                "product_video": null,
                "status": 2,
                "rating": 4.89,
                "sold_count": 3716,
                "review_count": 7816,
                "created_at": "2020-08-25 23:01:07",
                "updated_at": "2020-08-24 11:17:56",
                "product_category": {
                    "id": 6,
                    "slug": "sint-nostrum",
                    "title": "眼线",
                    "title_en": "aut ut magnam",
                    "describe": "Doloribus ipsam cupiditate aperiam perferendis porro. Velit id quis aut vel possimus quia. Sit et laudantium assumenda consequatur porro.",
                    "describe_en": "Occaecati quis dolores expedita voluptatibus corporis dignissimos. Vitae quod quia ratione consequatur deleniti aut perferendis. Non et magni ut omnis magni consequatur. Minus sit sunt impedit.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?64712",
                    "description": "Voluptas provident qui laboriosam id quisquam architecto.",
                    "description_en": "A provident aut odio id qui reprehenderit.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?54229",
                    "parent_id": 27,
                    "created_at": "2020-08-12 03:34:43",
                    "updated_at": "2020-08-12 10:01:24"
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
    -G "http://store.wutang.com/api/product_category/1?category_slug=aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product_category/1"
);

let params = {
    "category_slug": "aut",
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
    -G "http://store.wutang.com/api/product/1?slug=accusamus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product/1"
);

let params = {
    "slug": "accusamus",
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
    -G "http://store.wutang.com/api/product_ids?id_list=sint" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product_ids"
);

let params = {
    "id_list": "sint",
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
    -G "http://store.wutang.com/api/category_story/1?category_slug=incidunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/category_story/1"
);

let params = {
    "category_slug": "incidunt",
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
    -G "http://store.wutang.com/api/product_new?page=cupiditate&page_limit=ab" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product_new"
);

let params = {
    "page": "cupiditate",
    "page_limit": "ab",
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
                "id": 1,
                "product_category_id": 7,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "minus dolor aliquid",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?29199",
                "slug": "eum-qui",
                "short_description": "Ut sunt repellat possimus est.",
                "short_description_en": "Aliquid soluta a odio libero incidunt. Illum consequuntur accusantium aliquid. Inventore repellendus nesciunt doloribus suscipit facilis error. Maiores molestiae sit rerum et. Aut vero similique reprehenderit et illo dolores nulla tempore.",
                "price": "4503.00",
                "sale_price": "1.00",
                "stock": 374,
                "spec": null,
                "seo_title": "veniam repellat praesentium",
                "seo_keyword": "rerum",
                "seo_description": "Veritatis harum aut qui eveniet eos.",
                "benefit": "Aut qui magni a. Modi in assumenda quo asperiores et. Error quisquam quas quia alias eos nesciunt suscipit.",
                "benefit_en": "Repudiandae totam et expedita ut quasi commodi. Enim ipsum consectetur nisi alias eius doloribus. Sit voluptatem a molestias quas cupiditate.",
                "tech_description": "Animi nulla atque numquam voluptatem molestiae repudiandae perferendis et. Quos non eum eos ipsa. Expedita magni ut autem quibusdam id. Voluptatem dolorem veniam vel rerum architecto.",
                "tech_description_en": "Qui dignissimos sint rerum labore excepturi. Corporis a quidem unde tenetur similique harum. Sequi quidem asperiores dolorem.",
                "description": "Non est in officia ab impedit enim cum. Aut molestiae et velit excepturi nam. Nulla et aut rem doloremque tempore architecto optio. Et voluptatem voluptatem pariatur molestiae in aut et.",
                "description_en": "Sapiente deleniti vel id impedit minus omnis. In debitis officiis quis repellendus. Aut nemo voluptas recusandae soluta.",
                "usage": "At enim nostrum aspernatur aut provident. Nesciunt placeat molestias eum facere tempore. Mollitia libero in et hic et.",
                "usage_en": "Itaque eaque ad possimus ex. Voluptatibus molestiae sequi voluptas natus non similique sit.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?85247",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?42444",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?11770",
                "product_video": null,
                "status": 1,
                "rating": 1.41,
                "sold_count": 1344,
                "review_count": 3359,
                "created_at": "2020-08-14 05:58:49",
                "updated_at": "2020-08-03 02:06:05",
                "product_category": {
                    "id": 7,
                    "slug": "qui-esse",
                    "title": "BB霜",
                    "title_en": "recusandae occaecati temporibus",
                    "describe": "Dolorum soluta voluptate eius est. Ipsa incidunt deserunt laborum voluptatem quaerat quidem rem. Quos recusandae consequatur qui ratione saepe. Atque quis itaque nihil dolor.",
                    "describe_en": "Nihil pariatur ab sequi consequuntur officiis minima animi. Magni aut dignissimos esse accusantium iure dolor. Magnam eius vel necessitatibus ut tempora dicta tempore minus.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?42159",
                    "description": "Quasi necessitatibus aut fugit.",
                    "description_en": "Voluptatum omnis sit porro repudiandae labore.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?66583",
                    "parent_id": 27,
                    "created_at": "2020-08-05 07:47:34",
                    "updated_at": "2020-08-20 13:54:41"
                }
            },
            {
                "id": 3,
                "product_category_id": 11,
                "product_name": "黑钻焕肤水",
                "product_name_en": "qui rerum ratione",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?79559",
                "slug": "in-a",
                "short_description": "Laboriosam iusto hic distinctio.",
                "short_description_en": "In minus voluptatem aut voluptas. Laudantium sit ducimus exercitationem culpa. Sunt quis doloremque aut debitis id.",
                "price": "6842.00",
                "sale_price": "1.00",
                "stock": 111,
                "spec": null,
                "seo_title": "dolorum voluptatem culpa",
                "seo_keyword": "corrupti",
                "seo_description": "Occaecati autem aut quos in sapiente minima.",
                "benefit": "Alias reiciendis non eveniet minima eum qui. Est deleniti magni est et quia quibusdam error. Voluptate suscipit dolore ut qui et autem culpa. Error maxime quisquam quis quaerat assumenda. Dolorem aut in voluptatem non deleniti reprehenderit.",
                "benefit_en": "Quis quia id ut modi deleniti repudiandae nesciunt. Pariatur voluptates eaque enim et atque. Dicta autem quasi consequatur aliquam. Sit saepe sit non iusto est similique sit cupiditate.",
                "tech_description": "Voluptatem hic sapiente architecto id esse. Suscipit aut et at. Minima doloremque quas labore aliquam tempore aut assumenda.",
                "tech_description_en": "Quos tempore in possimus et minima excepturi. Cupiditate adipisci voluptate omnis similique porro et incidunt.",
                "description": "Explicabo reiciendis suscipit suscipit quaerat. Atque iusto veritatis veritatis iure fugiat dicta. Porro omnis excepturi voluptates ratione quam modi et.",
                "description_en": "Alias et harum inventore rerum. Facere facilis voluptas voluptatem assumenda incidunt. Repudiandae enim asperiores vitae fuga sed et. Culpa est ipsum aut libero blanditiis nihil.",
                "usage": "Quas inventore repudiandae hic ab quibusdam placeat odit ex. Ex sunt possimus odit nulla. Perspiciatis odio quo ut unde praesentium cumque nesciunt.",
                "usage_en": "Sed animi culpa omnis. Quidem amet quas molestias numquam. Consequatur quia cupiditate vel atque autem ipsum cupiditate.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?56697",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?65915",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?17380",
                "product_video": null,
                "status": 1,
                "rating": 9.94,
                "sold_count": 9891,
                "review_count": 8547,
                "created_at": "2020-08-18 21:26:17",
                "updated_at": "2020-08-22 12:48:02",
                "product_category": {
                    "id": 11,
                    "slug": "illum-qui",
                    "title": "香水",
                    "title_en": "commodi expedita id",
                    "describe": "Doloremque perspiciatis eos est quia. Sit consequatur blanditiis dignissimos qui consequatur et quisquam. Mollitia vitae incidunt voluptatem vitae eaque voluptatem ut.",
                    "describe_en": "Similique assumenda enim voluptas quis quia magni nobis nobis. Sunt earum ut velit itaque incidunt quia voluptas. Enim quaerat architecto aut esse dolores.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?82192",
                    "description": "Minima sapiente est corrupti doloribus et quod.",
                    "description_en": "Et nulla aut natus.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?79979",
                    "parent_id": 23,
                    "created_at": "2020-08-03 10:25:31",
                    "updated_at": "2020-08-14 08:20:51"
                }
            },
            {
                "id": 5,
                "product_category_id": 17,
                "product_name": "黑钻焕肤水",
                "product_name_en": "maiores eveniet eum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?77004",
                "slug": "ex-distinctio",
                "short_description": "Tenetur voluptate eligendi ex ratione consectetur.",
                "short_description_en": "Tempore vitae exercitationem et quia ut odio ratione enim. Enim odio odio est est. Quis saepe voluptatem quo aut deserunt. Provident quo sint aut consequatur sint non sed.",
                "price": "6629.00",
                "sale_price": "1.00",
                "stock": 141,
                "spec": null,
                "seo_title": "incidunt quibusdam dolorem",
                "seo_keyword": "vel",
                "seo_description": "Voluptatem eos inventore blanditiis in iure iusto.",
                "benefit": "Velit temporibus quod quas ducimus autem quae sit minima. Animi ipsa aliquid ab quia debitis illum et. Et maxime itaque iure quis cupiditate. Sed vero molestias facilis soluta blanditiis.",
                "benefit_en": "Voluptatem velit eos repellendus minima modi neque possimus. Ut explicabo optio sed voluptas assumenda soluta voluptatem. Sapiente ratione atque est. Architecto molestias expedita ea ut doloribus natus dolor.",
                "tech_description": "Nihil assumenda dolor minus labore tempora quas ea. Nostrum illo deserunt asperiores suscipit velit dolorem enim. A quod facilis nemo autem officiis repellat atque.",
                "tech_description_en": "Qui praesentium ipsam vero numquam vero iure. Sit culpa labore et eveniet. Magni sed est aut molestias aut fuga. Voluptate maiores dolor molestiae et quo aut.",
                "description": "Et quidem velit aut. Minus sit sed totam neque aperiam sit dolorem. Odit aperiam quibusdam tenetur aut.",
                "description_en": "Dolore dolor eos magni eum. Cum illo est quo asperiores quo sint qui eos.",
                "usage": "Incidunt eos adipisci quidem labore. Iusto odio vitae eum sunt quos illum. Saepe sed officia eligendi pariatur ducimus alias quos optio.",
                "usage_en": "Ullam et consequatur asperiores. In aliquid dolores in in fugit. Doloremque dolor doloribus totam tempora. Laudantium ipsam rerum necessitatibus magnam quidem.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?69558",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?99594",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?38608",
                "product_video": null,
                "status": 1,
                "rating": 9.09,
                "sold_count": 3849,
                "review_count": 5931,
                "created_at": "2020-08-23 09:09:19",
                "updated_at": "2020-08-20 14:45:02",
                "product_category": {
                    "id": 17,
                    "slug": "aut-iusto",
                    "title": "香水",
                    "title_en": "ex officiis sunt",
                    "describe": "Et quisquam ut quia dolor. Impedit ut ea et porro ipsa dolores dolor eaque. Voluptate error dignissimos aut tempore.",
                    "describe_en": "Quibusdam sunt dicta est ad. Illo labore quibusdam eligendi ut nihil dicta. Nemo deserunt ad illum tempore aut. Omnis quaerat fugiat ut. Eveniet distinctio aut ullam perspiciatis.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?50318",
                    "description": "Neque sit et fugit placeat fugiat.",
                    "description_en": "Sapiente ut quae molestias eum aperiam saepe.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?40761",
                    "parent_id": 5,
                    "created_at": "2020-08-24 04:38:01",
                    "updated_at": "2020-09-01 00:33:10"
                }
            },
            {
                "id": 9,
                "product_category_id": 8,
                "product_name": "黑钻焕肤水",
                "product_name_en": "quibusdam molestiae iusto",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?23948",
                "slug": "qui-non",
                "short_description": "Velit sint et quo.",
                "short_description_en": "Vel quis fugiat blanditiis. Laudantium aut ipsam sint asperiores. Nobis assumenda odit autem est et. Illum vitae sit laborum nobis atque nam quasi.",
                "price": "5098.00",
                "sale_price": "1.00",
                "stock": 185,
                "spec": null,
                "seo_title": "dicta adipisci ut",
                "seo_keyword": "dolores",
                "seo_description": "Aspernatur ducimus enim quia voluptate ad.",
                "benefit": "Sed eligendi et neque provident. Qui quia debitis aperiam non quia necessitatibus sapiente. Quibusdam ut voluptatem maiores. Illum eos inventore quod quo distinctio maiores eveniet.",
                "benefit_en": "Optio dignissimos doloremque dicta sequi maxime libero. Neque et id et eum vitae. Ducimus quas quos eius nihil doloremque et.",
                "tech_description": "In tempora aut incidunt magni et exercitationem enim. Adipisci amet natus neque. Repudiandae adipisci asperiores est accusantium nemo.",
                "tech_description_en": "Sequi possimus hic blanditiis aut rerum. Debitis est et consequatur laboriosam. Et error voluptatem vel eveniet doloribus earum accusantium. Quo doloribus iure consequatur nam nobis totam porro velit.",
                "description": "Et autem cumque qui voluptatum. Ullam deleniti assumenda dolores modi nihil et impedit sit.",
                "description_en": "Praesentium velit id id officiis eos molestiae. Excepturi ratione recusandae eum laborum veniam ea nesciunt. Omnis facere et quo voluptas pariatur alias.",
                "usage": "Est dolor dolor vel non. Corporis quod eos asperiores ut molestias.",
                "usage_en": "Dolorem quia officia repellat ratione quam corporis rem quia. Quasi qui reiciendis laboriosam non tempore. Ipsam quis quae ut nemo.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?80392",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?41927",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?82786",
                "product_video": null,
                "status": 1,
                "rating": 0.94,
                "sold_count": 2739,
                "review_count": 1482,
                "created_at": "2020-08-12 18:46:10",
                "updated_at": "2020-08-18 19:36:49",
                "product_category": {
                    "id": 8,
                    "slug": "aut-est",
                    "title": "面膜",
                    "title_en": "nisi voluptas sit",
                    "describe": "Velit est temporibus est magni eius vitae. Qui rem ipsam voluptatem sed numquam ipsum. Sit iure delectus qui et magnam perferendis et. Est sunt molestiae ad molestiae qui.",
                    "describe_en": "Modi natus amet natus. Officia velit natus nihil voluptatem reprehenderit excepturi. Dolor facilis voluptatibus dolore quis nulla.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?91977",
                    "description": "Unde impedit et nulla consequuntur et.",
                    "description_en": "Neque et dolores aperiam quae est id.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?26207",
                    "parent_id": 16,
                    "created_at": "2020-08-28 00:17:50",
                    "updated_at": "2020-09-01 08:43:12"
                }
            },
            {
                "id": 13,
                "product_category_id": 16,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "non quibusdam repudiandae",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?49183",
                "slug": "esse-iure",
                "short_description": "Est error sed quaerat corrupti.",
                "short_description_en": "Quis maiores veritatis ab molestias accusamus minus. Illum doloremque autem non perspiciatis aliquam dolorem omnis quam. Quidem alias dolor cum temporibus sint rerum aliquid.",
                "price": "5732.00",
                "sale_price": "1.00",
                "stock": 427,
                "spec": null,
                "seo_title": "voluptas dolore ratione",
                "seo_keyword": "explicabo",
                "seo_description": "Repudiandae fugiat odio voluptatum voluptatum voluptatem ea.",
                "benefit": "Voluptatem et hic rerum ea labore. Quod laudantium recusandae magni ipsa in qui aspernatur molestias. Sint quas officia vel libero id.",
                "benefit_en": "Necessitatibus delectus temporibus velit ut nihil a laboriosam. Eum repellendus et et. Enim quia nemo voluptas nostrum. Saepe dolores consequatur ut voluptas.",
                "tech_description": "A et saepe quia nihil officia. Dolore eum qui nobis delectus quod quos qui beatae. Dicta doloremque recusandae soluta quia.",
                "tech_description_en": "Voluptates aliquid architecto fuga sed. Aut ut sit odio omnis. Omnis esse natus eius quo tempora explicabo iste molestiae. Sed qui ut natus eos aperiam aut.",
                "description": "Earum maiores minima ea. Ea non autem voluptatem enim est fuga sint. Animi quia non impedit eum et libero consequatur. Explicabo est aut provident.",
                "description_en": "Cum architecto omnis possimus et. Nesciunt provident quisquam facere aut quas. Corrupti quia quaerat voluptas sunt sunt. Optio eum illum minus eos rerum iste.",
                "usage": "Sit aut voluptatem pariatur nulla ut minus alias. Et eligendi illum nihil optio. Totam cupiditate reprehenderit ipsum doloribus sapiente eius in.",
                "usage_en": "Similique neque consequuntur unde libero quisquam. Alias laudantium blanditiis sit aperiam sed et. Fugiat earum non et iusto velit. Sunt vero ut non est suscipit.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?17704",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?20055",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?88008",
                "product_video": null,
                "status": 1,
                "rating": 6.3,
                "sold_count": 2006,
                "review_count": 1420,
                "created_at": "2020-08-09 16:33:13",
                "updated_at": "2020-08-31 18:16:17",
                "product_category": {
                    "id": 16,
                    "slug": "facere-perspiciatis",
                    "title": "睫毛膏",
                    "title_en": "non doloribus facere",
                    "describe": "Tenetur minima incidunt consequatur omnis quo aut quidem. Enim consectetur vero laboriosam velit modi illo in. Excepturi nobis exercitationem veniam aut soluta quam dignissimos et.",
                    "describe_en": "Rerum amet dolor velit repellat porro. Beatae voluptatem magnam et et officia et sit. Sed aut quia impedit. Laborum eos eos velit placeat.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?41390",
                    "description": "Neque aut non magni velit recusandae.",
                    "description_en": "Consequatur vitae doloribus ab enim.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?60655",
                    "parent_id": 25,
                    "created_at": "2020-08-14 14:52:46",
                    "updated_at": "2020-08-31 01:06:34"
                }
            },
            {
                "id": 15,
                "product_category_id": 8,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "quam voluptatum neque",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?63465",
                "slug": "labore-dolorem",
                "short_description": "Optio aperiam itaque necessitatibus quibusdam.",
                "short_description_en": "Esse minus aut voluptatem ad nihil quod ipsum. Qui voluptas cum voluptatibus iure qui blanditiis. Quasi sint in laudantium voluptatum expedita dolores omnis. Explicabo aut est consectetur illum.",
                "price": "9587.00",
                "sale_price": "1.00",
                "stock": 932,
                "spec": null,
                "seo_title": "natus expedita ut",
                "seo_keyword": "quisquam",
                "seo_description": "Repellat et nihil rerum qui aperiam nostrum.",
                "benefit": "Voluptas exercitationem eaque consequatur. Repellendus iusto qui facilis quia repellendus et quas. Dolores assumenda corrupti qui consequatur quod laudantium aut. Reiciendis nesciunt ipsam quisquam.",
                "benefit_en": "Est praesentium repellat dolorum. Eligendi rerum adipisci qui perferendis est cum assumenda. Sunt rerum recusandae et. Magni et vero officiis tenetur perferendis est.",
                "tech_description": "Nostrum autem ut inventore aliquid molestiae numquam. Temporibus nihil est fugiat est. Qui eos impedit eaque aut nulla dolor sequi.",
                "tech_description_en": "Velit id reiciendis ea. Quo rerum aut perspiciatis vel facilis. Itaque porro voluptates omnis autem adipisci voluptatum ullam.",
                "description": "Quo provident sit qui tempora. Voluptas sed possimus eum odit labore qui magnam exercitationem. Labore quia similique iusto repudiandae. Voluptatum cumque ea qui molestias nam sit repudiandae. Sed maxime omnis explicabo aperiam vitae voluptas.",
                "description_en": "Necessitatibus commodi id et sit. Hic in eligendi itaque facere doloremque deserunt nobis. Dolor est eligendi suscipit laborum totam facilis consequatur voluptate. Optio est excepturi et nostrum.",
                "usage": "Soluta provident velit laborum cum commodi non. Totam assumenda sunt neque mollitia unde ea. Velit sint sapiente molestiae perferendis.",
                "usage_en": "Voluptates voluptas esse quos qui. Velit expedita molestiae occaecati voluptatem est. Sit facere pariatur aut quia eum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?24115",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?12441",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?89289",
                "product_video": null,
                "status": 1,
                "rating": 9.21,
                "sold_count": 5859,
                "review_count": 6249,
                "created_at": "2020-08-16 06:22:57",
                "updated_at": "2020-08-13 22:27:47",
                "product_category": {
                    "id": 8,
                    "slug": "aut-est",
                    "title": "面膜",
                    "title_en": "nisi voluptas sit",
                    "describe": "Velit est temporibus est magni eius vitae. Qui rem ipsam voluptatem sed numquam ipsum. Sit iure delectus qui et magnam perferendis et. Est sunt molestiae ad molestiae qui.",
                    "describe_en": "Modi natus amet natus. Officia velit natus nihil voluptatem reprehenderit excepturi. Dolor facilis voluptatibus dolore quis nulla.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?91977",
                    "description": "Unde impedit et nulla consequuntur et.",
                    "description_en": "Neque et dolores aperiam quae est id.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?26207",
                    "parent_id": 16,
                    "created_at": "2020-08-28 00:17:50",
                    "updated_at": "2020-09-01 08:43:12"
                }
            },
            {
                "id": 19,
                "product_category_id": 10,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "et omnis dolore",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?10248",
                "slug": "sint-neque",
                "short_description": "Ex et et vero et sed molestiae.",
                "short_description_en": "Ea ut explicabo quo. Velit facere vitae voluptatem esse quibusdam enim quas. Itaque laudantium ullam dolorem reprehenderit sed.",
                "price": "9131.00",
                "sale_price": "1.00",
                "stock": 760,
                "spec": null,
                "seo_title": "voluptatum nostrum magni",
                "seo_keyword": "odit",
                "seo_description": "Officiis eius labore iure vel cupiditate.",
                "benefit": "Voluptas nisi tempore quia inventore impedit accusamus ducimus. Atque cum nesciunt odio vero et illo. Harum consequatur quo molestiae dignissimos. Officiis maiores quia cumque deleniti.",
                "benefit_en": "Pariatur est a vero molestiae quo ipsum. Sed recusandae voluptas quia accusamus enim velit. Quo ad inventore culpa eveniet.",
                "tech_description": "Nisi aut incidunt est enim ipsam. Voluptatem sequi ratione quam tempore consequatur accusantium. Nemo temporibus blanditiis et veritatis consequuntur magnam.",
                "tech_description_en": "Perspiciatis minima id quasi animi non cum numquam. Cum eligendi et voluptates deleniti a nam. Sed sequi ducimus vero veniam. Aut nemo voluptas mollitia.",
                "description": "Rerum odit cupiditate voluptas et praesentium pariatur est. Esse et sit quo consequuntur cum velit voluptatem. Laudantium aut illo tempore reiciendis fugiat dolore alias. Occaecati eius ut tempora qui vitae repellendus.",
                "description_en": "Corrupti voluptas eligendi ipsam excepturi dolores recusandae deleniti a. Sed magni praesentium ea ipsam architecto incidunt. Dolorum deleniti aperiam assumenda officiis qui. Et tempora recusandae quisquam.",
                "usage": "Reprehenderit eaque libero eveniet. Qui vel quisquam sit quia cum porro. Esse dolores expedita commodi hic voluptas. Vel omnis est temporibus id.",
                "usage_en": "Voluptates pariatur sit nihil. Saepe maiores sunt qui et esse. Enim quia doloribus explicabo assumenda laudantium maxime impedit rerum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?13407",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?63428",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?32048",
                "product_video": null,
                "status": 1,
                "rating": 7.11,
                "sold_count": 3272,
                "review_count": 1919,
                "created_at": "2020-08-17 03:38:42",
                "updated_at": "2020-08-04 19:17:24",
                "product_category": {
                    "id": 10,
                    "slug": "perferendis-distinctio",
                    "title": "面霜",
                    "title_en": "esse iste quisquam",
                    "describe": "Omnis repellat incidunt fuga aut. Est repudiandae placeat sit. Quis qui officia iste eum error. Consequatur nihil et nisi accusamus sit in sit.",
                    "describe_en": "Illum consectetur officia atque ut. Nesciunt atque aut excepturi sed eius aut. Et eius consequuntur ab accusantium temporibus assumenda.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?47600",
                    "description": "Repellat dolorem numquam est velit inventore molestiae.",
                    "description_en": "Dicta est quo id voluptates enim.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?66694",
                    "parent_id": 11,
                    "created_at": "2020-08-31 11:36:22",
                    "updated_at": "2020-08-17 01:49:46"
                }
            },
            {
                "id": 21,
                "product_category_id": 10,
                "product_name": "黑钻肌光精华",
                "product_name_en": "qui in enim",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?94137",
                "slug": "sequi-sint",
                "short_description": "Aut voluptatum quisquam qui impedit.",
                "short_description_en": "Dicta et aut veritatis unde. Debitis fugit eos perspiciatis illum sed aperiam ut. Reprehenderit beatae nihil voluptates dignissimos ad excepturi dolores.",
                "price": "4475.00",
                "sale_price": "1.00",
                "stock": 789,
                "spec": null,
                "seo_title": "perferendis voluptas molestiae",
                "seo_keyword": "suscipit",
                "seo_description": "Tempora quibusdam est consectetur.",
                "benefit": "Molestiae aliquid dolorem atque debitis. Nulla ut rerum id reiciendis culpa magni dolore. Qui ipsum esse porro et ducimus vero repellat.",
                "benefit_en": "Nihil dignissimos laboriosam illum nulla facilis ipsa atque. Dolor qui quia quia.",
                "tech_description": "Unde quae tempora consectetur nihil quisquam. Dicta vero atque temporibus neque nesciunt voluptatum. Veritatis porro sit laborum omnis aspernatur et.",
                "tech_description_en": "Ut inventore vitae quasi. Laboriosam sunt maxime sed eum. Sed saepe quidem iusto repellendus vitae dolorum.",
                "description": "Ratione dolore pariatur ut ut. Id nihil sunt voluptate deserunt neque voluptas. Optio sit ratione voluptatem aliquid unde sit et quia. Ratione reprehenderit eos aliquid autem est.",
                "description_en": "Dicta omnis ex aut cupiditate. Repudiandae quae numquam nihil ut fuga. Sed voluptate omnis voluptates ut. Velit nostrum modi temporibus.",
                "usage": "Eos nobis voluptates officiis aspernatur et explicabo. Eligendi porro ut voluptatibus. Reiciendis molestiae in debitis et quam autem voluptate.",
                "usage_en": "Asperiores magnam beatae aut quibusdam dolores fuga. Omnis inventore aut deleniti dolorem. Vero amet libero dolores aliquam impedit dicta rem officiis.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?21106",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?27630",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?83924",
                "product_video": null,
                "status": 1,
                "rating": 1.17,
                "sold_count": 1421,
                "review_count": 3020,
                "created_at": "2020-08-19 02:38:01",
                "updated_at": "2020-08-10 02:43:51",
                "product_category": {
                    "id": 10,
                    "slug": "perferendis-distinctio",
                    "title": "面霜",
                    "title_en": "esse iste quisquam",
                    "describe": "Omnis repellat incidunt fuga aut. Est repudiandae placeat sit. Quis qui officia iste eum error. Consequatur nihil et nisi accusamus sit in sit.",
                    "describe_en": "Illum consectetur officia atque ut. Nesciunt atque aut excepturi sed eius aut. Et eius consequuntur ab accusantium temporibus assumenda.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?47600",
                    "description": "Repellat dolorem numquam est velit inventore molestiae.",
                    "description_en": "Dicta est quo id voluptates enim.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?66694",
                    "parent_id": 11,
                    "created_at": "2020-08-31 11:36:22",
                    "updated_at": "2020-08-17 01:49:46"
                }
            },
            {
                "id": 22,
                "product_category_id": 7,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "blanditiis ut ut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?89326",
                "slug": "dolorem-velit",
                "short_description": "Omnis non culpa neque ut omnis.",
                "short_description_en": "Dolorem et eaque odio quod cum. Fugit et dolore dolorem maxime. Odit rerum quaerat fugiat accusantium voluptatum perspiciatis cum.",
                "price": "7524.00",
                "sale_price": "1.00",
                "stock": 299,
                "spec": null,
                "seo_title": "omnis quaerat quia",
                "seo_keyword": "ducimus",
                "seo_description": "Enim nostrum ea nesciunt et minus aut.",
                "benefit": "Sint voluptatem ipsa aperiam pariatur quia. Facere molestias sed ipsam consequatur provident nesciunt. Magni at omnis molestias dolores aut consequatur.",
                "benefit_en": "Quaerat quia voluptas sit porro debitis. Officia quaerat consequuntur qui. Distinctio explicabo facere expedita quasi. Odit et sit consequatur expedita illum ad unde.",
                "tech_description": "Natus accusantium voluptas autem. Eius et itaque non ea rerum aut illum. Deleniti alias id dolor eos tenetur. Aspernatur pariatur animi error vero esse.",
                "tech_description_en": "Repellendus ad dolorem eligendi voluptatem est quibusdam. Provident incidunt neque maxime aut aut soluta.",
                "description": "Est in possimus voluptatibus facilis ducimus pariatur perspiciatis maxime. Vero ipsa ut explicabo dolores voluptatum dolor hic.",
                "description_en": "Magni sed repellat in fuga quia eius et. Perferendis debitis hic consequatur ab et necessitatibus qui. Nihil minima atque aspernatur. Temporibus eos illo delectus.",
                "usage": "Repellendus aut ullam pariatur eveniet. Vitae ipsum quaerat possimus vel. Qui quo amet autem consequatur magnam nam esse. Illum sit quisquam eveniet ut illum earum. Perspiciatis et repellat aut adipisci dolor.",
                "usage_en": "Blanditiis quae ipsam placeat corrupti molestias aut amet. Illum ratione explicabo tenetur odit aut. Optio atque amet suscipit aliquam et architecto aut. Quae nesciunt sit assumenda.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?18434",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?23512",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?67910",
                "product_video": null,
                "status": 1,
                "rating": 4.52,
                "sold_count": 4214,
                "review_count": 4866,
                "created_at": "2020-08-17 09:01:13",
                "updated_at": "2020-08-16 11:32:27",
                "product_category": {
                    "id": 7,
                    "slug": "qui-esse",
                    "title": "BB霜",
                    "title_en": "recusandae occaecati temporibus",
                    "describe": "Dolorum soluta voluptate eius est. Ipsa incidunt deserunt laborum voluptatem quaerat quidem rem. Quos recusandae consequatur qui ratione saepe. Atque quis itaque nihil dolor.",
                    "describe_en": "Nihil pariatur ab sequi consequuntur officiis minima animi. Magni aut dignissimos esse accusantium iure dolor. Magnam eius vel necessitatibus ut tempora dicta tempore minus.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?42159",
                    "description": "Quasi necessitatibus aut fugit.",
                    "description_en": "Voluptatum omnis sit porro repudiandae labore.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?66583",
                    "parent_id": 27,
                    "created_at": "2020-08-05 07:47:34",
                    "updated_at": "2020-08-20 13:54:41"
                }
            },
            {
                "id": 27,
                "product_category_id": 14,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "assumenda possimus alias",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?63667",
                "slug": "aliquam-omnis",
                "short_description": "Error omnis porro dicta nobis deserunt.",
                "short_description_en": "Vel iure id ut ipsa. Id quia odio eligendi cum soluta corrupti eligendi. Rerum voluptatem voluptatum quia et nisi.",
                "price": "969.00",
                "sale_price": "1.00",
                "stock": 219,
                "spec": null,
                "seo_title": "eum modi et",
                "seo_keyword": "voluptatem",
                "seo_description": "Nostrum voluptatem officia iure.",
                "benefit": "Placeat perferendis velit ex minus. Rerum repellendus possimus occaecati amet cum soluta quis sapiente. Quod ipsum ex quia sint temporibus sed recusandae a. Voluptas ex dignissimos excepturi esse.",
                "benefit_en": "Ea dolore et facilis maiores soluta. Exercitationem ipsum id quia vitae. Placeat dolor est sit eius perferendis ut.",
                "tech_description": "Delectus expedita nisi quae. Consectetur ut quibusdam porro dolor. Distinctio soluta illo aliquid qui ut voluptatibus.",
                "tech_description_en": "Doloribus sit suscipit molestiae ipsum. Quia iusto aut laudantium dolores officiis excepturi dolore. Fugiat id nisi praesentium quia assumenda in repellat. Temporibus ut rerum voluptate velit animi molestias dolorem.",
                "description": "Nobis corporis hic possimus dolores qui. Voluptates consequatur aut et. Est molestiae cupiditate velit magni atque occaecati.",
                "description_en": "Numquam sequi qui in aut. Nulla velit ut accusantium ea fugiat explicabo omnis. Maiores repudiandae ea voluptas iste.",
                "usage": "Inventore delectus sed labore tempore sed dolor. Vero magnam culpa sed cum ut mollitia fuga. Sit quos eum dolor.",
                "usage_en": "Necessitatibus neque explicabo quas odit voluptas labore. Cum cupiditate eum sit nihil quaerat. Nemo veniam ut quis quaerat iste quas qui dolores.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?89345",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?79489",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?25806",
                "product_video": null,
                "status": 1,
                "rating": 9.45,
                "sold_count": 3504,
                "review_count": 3877,
                "created_at": "2020-08-04 21:55:24",
                "updated_at": "2020-08-11 18:00:48",
                "product_category": {
                    "id": 14,
                    "slug": "dolorem-dolore",
                    "title": "套装A",
                    "title_en": "error quam fugiat",
                    "describe": "Incidunt consequatur quam quaerat voluptatem itaque esse. Et in sapiente qui occaecati adipisci reiciendis non. Voluptatem maxime id ipsa quod fuga quia rem.",
                    "describe_en": "Facilis aliquam molestiae eligendi. Qui distinctio architecto et iusto. Rerum assumenda omnis molestiae sed non quod labore.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?51125",
                    "description": "Eveniet similique aut dolorum occaecati aliquid ut.",
                    "description_en": "Temporibus non voluptas beatae optio dicta ab.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?94906",
                    "parent_id": 4,
                    "created_at": "2020-08-08 15:48:27",
                    "updated_at": "2020-08-21 14:26:59"
                }
            },
            {
                "id": 35,
                "product_category_id": 12,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "qui beatae libero",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?41690",
                "slug": "amet-amet",
                "short_description": "Ipsam enim dolore necessitatibus illum dolores non.",
                "short_description_en": "Quibusdam dolores autem aut eligendi libero sit. Sint rerum minima porro tempore sed suscipit. Veniam eum earum dicta quidem nobis tempore impedit perspiciatis. Maiores aut sed id quidem velit.",
                "price": "7605.00",
                "sale_price": "1.00",
                "stock": 790,
                "spec": null,
                "seo_title": "aut ut laborum",
                "seo_keyword": "velit",
                "seo_description": "Modi ut quia aut praesentium facilis.",
                "benefit": "Sequi debitis aliquid est laudantium quisquam quisquam. Expedita nobis reiciendis commodi possimus sit harum impedit. Quis atque ea asperiores ut porro.",
                "benefit_en": "Molestiae alias amet quod. Facilis sed aut consequuntur corporis possimus. Repellendus enim et eligendi earum. Non hic omnis aliquam dolore et. Quo at quae rerum nam.",
                "tech_description": "Facere soluta officia corporis et vel suscipit. Recusandae eaque consectetur quae quo illo. Consequatur nobis cum accusamus optio labore reiciendis optio.",
                "tech_description_en": "Qui earum quia quis nisi laboriosam quia. Repudiandae velit et harum voluptas ducimus. Dolores quis sed sunt eum itaque. Totam qui facere aut nihil.",
                "description": "Neque occaecati et ut in. Nobis culpa rerum id velit error repellendus. Cumque a consectetur enim praesentium.",
                "description_en": "Architecto dolor minima et nesciunt quae quidem. Quam dolor libero sequi cumque velit eligendi ipsum. Ducimus delectus tenetur explicabo laudantium. Eaque sunt quia quis maiores est est autem quia.",
                "usage": "Voluptates commodi deleniti dolor delectus et suscipit. Quia ad quos in id mollitia. Eum sit repellat ipsa suscipit.",
                "usage_en": "Id corrupti sunt deleniti hic aut odit soluta officiis. Dolorem id voluptatum dolores et magnam sit dolorem. Qui laborum vitae qui omnis nostrum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?83997",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?94737",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?74517",
                "product_video": null,
                "status": 1,
                "rating": 8.03,
                "sold_count": 9984,
                "review_count": 5455,
                "created_at": "2020-08-01 22:14:59",
                "updated_at": "2020-08-06 01:09:51",
                "product_category": {
                    "id": 12,
                    "slug": "et-aut",
                    "title": "套装B",
                    "title_en": "et voluptatem sit",
                    "describe": "Facere sequi omnis cupiditate. Vel enim nesciunt molestiae rerum inventore ut saepe rem.",
                    "describe_en": "Asperiores in et aut voluptas ea est provident. Expedita ea nemo ea eos et corporis eaque.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?18038",
                    "description": "Illo aliquid accusantium vitae sequi.",
                    "description_en": "Sit nulla odit cum quae pariatur.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?66275",
                    "parent_id": 15,
                    "created_at": "2020-08-12 13:45:51",
                    "updated_at": "2020-08-31 04:05:23"
                }
            },
            {
                "id": 38,
                "product_category_id": 8,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "sunt amet magni",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?63839",
                "slug": "quos-vel",
                "short_description": "Vel non nisi qui veritatis laudantium pariatur.",
                "short_description_en": "Fuga quia officiis molestiae illo rerum magnam error. Expedita voluptatem quisquam est iste id. Ex architecto occaecati expedita provident quasi quae aut. Sapiente fuga porro earum veritatis quam iste illo minus.",
                "price": "6816.00",
                "sale_price": "1.00",
                "stock": 7,
                "spec": null,
                "seo_title": "dicta nihil voluptatem",
                "seo_keyword": "laudantium",
                "seo_description": "Debitis laudantium voluptas sed ut illo quidem.",
                "benefit": "Qui delectus veniam eos molestiae et veritatis labore. Dicta vitae sint provident molestias quia. Possimus quod officia voluptas veritatis atque similique velit.",
                "benefit_en": "Voluptatem possimus maiores consequatur ea qui. Vel qui et ea aliquam veniam voluptatem. Est quia possimus molestiae aut quisquam assumenda cum.",
                "tech_description": "Error aut iure dignissimos voluptas. Necessitatibus a consequatur ab tempore. Omnis numquam magni dolores aut dolorem corporis rerum eaque.",
                "tech_description_en": "Quos iure nihil et laboriosam sunt. Totam similique et nobis.",
                "description": "Labore qui est occaecati distinctio dolorem laborum natus. Dolor commodi reiciendis iusto quia ut dolorem. Omnis placeat nisi pariatur quae nihil magni voluptas.",
                "description_en": "Corporis voluptas illum fugiat ipsum totam. At rerum alias non facilis voluptas sequi placeat. Est dolor quos ab magni non sit minima. Temporibus et et magni ut qui nemo consequatur quis.",
                "usage": "Fugiat perspiciatis modi omnis qui quia. Accusantium aperiam quos delectus ea cumque aperiam ut. Voluptas et sunt ratione possimus eum suscipit.",
                "usage_en": "Molestiae mollitia et aut cupiditate deserunt ut. Veritatis et beatae sint facere fugit. Sint voluptas unde harum est sint quidem aspernatur ratione. Enim et rerum nam saepe nostrum corrupti alias.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?19661",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?82045",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?74978",
                "product_video": null,
                "status": 1,
                "rating": 7.49,
                "sold_count": 3595,
                "review_count": 1205,
                "created_at": "2020-08-29 16:32:13",
                "updated_at": "2020-08-22 07:33:38",
                "product_category": {
                    "id": 8,
                    "slug": "aut-est",
                    "title": "面膜",
                    "title_en": "nisi voluptas sit",
                    "describe": "Velit est temporibus est magni eius vitae. Qui rem ipsam voluptatem sed numquam ipsum. Sit iure delectus qui et magnam perferendis et. Est sunt molestiae ad molestiae qui.",
                    "describe_en": "Modi natus amet natus. Officia velit natus nihil voluptatem reprehenderit excepturi. Dolor facilis voluptatibus dolore quis nulla.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?91977",
                    "description": "Unde impedit et nulla consequuntur et.",
                    "description_en": "Neque et dolores aperiam quae est id.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?26207",
                    "parent_id": 16,
                    "created_at": "2020-08-28 00:17:50",
                    "updated_at": "2020-09-01 08:43:12"
                }
            },
            {
                "id": 39,
                "product_category_id": 17,
                "product_name": "黑钻肌光精华",
                "product_name_en": "et et perferendis",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?32660",
                "slug": "quo-ea",
                "short_description": "Enim temporibus voluptas aut aut aut et.",
                "short_description_en": "Tenetur consectetur et sapiente enim eum odio. Aut minima ut consectetur. Quis sapiente voluptas dolores repellendus ipsum ut sint.",
                "price": "7164.00",
                "sale_price": "1.00",
                "stock": 370,
                "spec": null,
                "seo_title": "sed est aut",
                "seo_keyword": "maiores",
                "seo_description": "Sit non quasi delectus omnis modi.",
                "benefit": "Tenetur autem quis placeat autem laboriosam non accusantium. Quidem aspernatur aut maiores magni laboriosam tempore illum. Et quasi veniam est mollitia laudantium. Aut distinctio quo nisi quia.",
                "benefit_en": "Vitae est nulla laborum aut. Modi facilis ut eaque sapiente sapiente. Rerum doloremque ut provident eaque dolorem id qui.",
                "tech_description": "Sed eligendi magnam qui laborum atque. Delectus alias nostrum dicta porro magnam. Hic tenetur sit quia aspernatur aut.",
                "tech_description_en": "Soluta facere cupiditate autem atque aut velit doloremque. Nemo enim rem ipsa sequi. Animi cum sint perferendis earum. Beatae consectetur rerum debitis qui.",
                "description": "Maxime rem inventore in aut et ut. Consequatur quis incidunt quaerat quo. Doloremque vero id est velit aliquid. Quisquam voluptas ullam soluta reiciendis.",
                "description_en": "Hic sed consequatur quia numquam voluptate dignissimos. Laudantium exercitationem aut beatae. Distinctio magni voluptas consequatur harum deleniti vitae labore.",
                "usage": "Sunt est dolores rem blanditiis voluptatem qui quia. Aut aliquam sed dolor recusandae voluptatem sint. Est eum aliquid aut necessitatibus expedita et modi in.",
                "usage_en": "Quidem explicabo exercitationem modi. Saepe eos est ut aut sit. Necessitatibus beatae qui distinctio. Quas asperiores eius consectetur consequatur quaerat qui.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?35161",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?29999",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?30676",
                "product_video": null,
                "status": 1,
                "rating": 7.17,
                "sold_count": 2315,
                "review_count": 2266,
                "created_at": "2020-08-24 18:26:18",
                "updated_at": "2020-08-13 01:38:33",
                "product_category": {
                    "id": 17,
                    "slug": "aut-iusto",
                    "title": "香水",
                    "title_en": "ex officiis sunt",
                    "describe": "Et quisquam ut quia dolor. Impedit ut ea et porro ipsa dolores dolor eaque. Voluptate error dignissimos aut tempore.",
                    "describe_en": "Quibusdam sunt dicta est ad. Illo labore quibusdam eligendi ut nihil dicta. Nemo deserunt ad illum tempore aut. Omnis quaerat fugiat ut. Eveniet distinctio aut ullam perspiciatis.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?50318",
                    "description": "Neque sit et fugit placeat fugiat.",
                    "description_en": "Sapiente ut quae molestias eum aperiam saepe.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?40761",
                    "parent_id": 5,
                    "created_at": "2020-08-24 04:38:01",
                    "updated_at": "2020-09-01 00:33:10"
                }
            },
            {
                "id": 44,
                "product_category_id": 2,
                "product_name": "钻石焕活面膜",
                "product_name_en": "id eveniet architecto",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?56481",
                "slug": "blanditiis-voluptatibus",
                "short_description": "Rerum molestiae laboriosam aut in animi.",
                "short_description_en": "Necessitatibus ipsa minima repudiandae explicabo ratione iste. Nihil sed accusamus facilis non nam. Sed ut porro laborum. Qui vel fuga ea qui omnis asperiores iste. Sint accusantium tempore aliquid et qui excepturi delectus.",
                "price": "270.00",
                "sale_price": "1.00",
                "stock": 760,
                "spec": null,
                "seo_title": "culpa et minima",
                "seo_keyword": "error",
                "seo_description": "Dicta ut est aut quis asperiores debitis.",
                "benefit": "Modi omnis sit ad nisi illo tempore iste voluptas. Accusantium qui laboriosam laborum itaque debitis. Cupiditate veritatis praesentium reiciendis quis assumenda.",
                "benefit_en": "Occaecati laborum enim corporis quisquam. Enim illum dolores molestiae ab cum explicabo nisi. Voluptatem nihil minus ipsam sint aut quisquam et. Eos occaecati reiciendis qui qui impedit dicta sint.",
                "tech_description": "Esse autem labore et praesentium quo quos. Consequatur blanditiis sequi nesciunt veniam blanditiis fuga voluptates. Occaecati error omnis et distinctio accusamus numquam. Dicta deleniti voluptas sit dolor aut et.",
                "tech_description_en": "Culpa aliquid id et aliquid illum fuga. Illo facilis occaecati quia vel ut a.",
                "description": "Dolore fuga maxime accusantium rerum distinctio et. Maxime qui magni velit illum cumque. Adipisci incidunt iste ipsa quas.",
                "description_en": "Error quia aut sint voluptatem consectetur. Quia blanditiis possimus eius. Iure sapiente est eos enim qui et laboriosam ut. Facere cum voluptatem iste quam.",
                "usage": "Qui vitae quis atque voluptates expedita. Sunt doloribus dignissimos natus et nisi.",
                "usage_en": "A nihil aut repellat et. Rerum blanditiis qui deserunt ea officiis laudantium id sit. Qui quasi libero vel esse. Dolorem est et et nobis impedit ea ut. Amet fuga reiciendis voluptates sed voluptate ducimus.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?32397",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?77931",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?31291",
                "product_video": null,
                "status": 1,
                "rating": 1.1400000000000001,
                "sold_count": 4991,
                "review_count": 4828,
                "created_at": "2020-08-02 03:23:53",
                "updated_at": "2020-08-05 20:35:00",
                "product_category": {
                    "id": 2,
                    "slug": "ipsum-iure",
                    "title": "洁面",
                    "title_en": "consectetur consequatur quas",
                    "describe": "Blanditiis sunt ut dignissimos iste illo vel. Ea qui quos numquam est. Ea eveniet doloremque asperiores et ut. Et consequatur dignissimos occaecati.",
                    "describe_en": "Aperiam aut laudantium ipsa ut. Aut soluta voluptas perspiciatis minima blanditiis nostrum adipisci. Debitis itaque omnis debitis quibusdam sed atque. Et et neque atque dolores enim aliquid.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?43960",
                    "description": "Sit asperiores consequuntur quia veritatis ab labore odit.",
                    "description_en": "Repellendus qui officiis quia quia qui.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?91147",
                    "parent_id": 23,
                    "created_at": "2020-08-10 07:05:23",
                    "updated_at": "2020-08-20 11:06:32"
                }
            },
            {
                "id": 45,
                "product_category_id": 14,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "qui hic et",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?70189",
                "slug": "modi-sunt",
                "short_description": "Omnis rerum molestias rerum beatae modi asperiores.",
                "short_description_en": "Laboriosam commodi est doloremque adipisci quis nesciunt quisquam. Consequatur non distinctio repellat eius eum similique recusandae. Ab non expedita adipisci molestiae. Dolor earum dolorem vero eaque omnis nostrum.",
                "price": "4210.00",
                "sale_price": "1.00",
                "stock": 157,
                "spec": null,
                "seo_title": "dolores iusto eius",
                "seo_keyword": "provident",
                "seo_description": "Porro numquam ad debitis saepe reprehenderit.",
                "benefit": "Voluptatem excepturi debitis necessitatibus velit nemo molestias. Ratione similique iusto eaque minima. Quaerat sint nemo ut sunt qui.",
                "benefit_en": "Incidunt fuga iste debitis eum dolore rerum saepe placeat. In maiores eius eum. Provident eum corporis adipisci ratione minus iusto. Dolores voluptatem et commodi quae quam dolor velit. Autem sapiente qui molestias ut in ipsam consequatur.",
                "tech_description": "Suscipit non ut illum ex dolorem. Reprehenderit est reiciendis sed aut nisi. Deserunt temporibus harum dolore ratione ducimus tempore.",
                "tech_description_en": "Itaque odio nihil consequatur blanditiis dignissimos accusantium iusto quia. Porro iusto incidunt et dolorem. Suscipit consequatur eius libero sit ea laudantium aut.",
                "description": "Excepturi quo quia omnis facere architecto perferendis quas. Eum nam accusantium atque asperiores non. Cum ducimus voluptas ea unde. Iure quos qui voluptate eum.",
                "description_en": "Distinctio nobis facilis quis dignissimos maxime est. Ut ut autem quasi autem modi dolorem omnis. Unde dignissimos porro impedit odio pariatur. Nisi labore dolorem nihil rerum dolores omnis eaque.",
                "usage": "Omnis in iusto voluptatibus facere vero. Aut maiores aut debitis nobis accusantium at tempora voluptatem. Quia incidunt inventore quia qui ut eos nihil. Nostrum impedit rerum dolor.",
                "usage_en": "Accusamus ut magnam voluptatem error et accusantium mollitia quis. Quaerat nulla repellendus maxime libero sit. Cupiditate vero non ducimus numquam a aspernatur. Animi commodi distinctio iste et ex.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?53265",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?59621",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?20759",
                "product_video": null,
                "status": 1,
                "rating": 3.12,
                "sold_count": 9113,
                "review_count": 2528,
                "created_at": "2020-08-06 23:11:15",
                "updated_at": "2020-08-27 18:11:06",
                "product_category": {
                    "id": 14,
                    "slug": "dolorem-dolore",
                    "title": "套装A",
                    "title_en": "error quam fugiat",
                    "describe": "Incidunt consequatur quam quaerat voluptatem itaque esse. Et in sapiente qui occaecati adipisci reiciendis non. Voluptatem maxime id ipsa quod fuga quia rem.",
                    "describe_en": "Facilis aliquam molestiae eligendi. Qui distinctio architecto et iusto. Rerum assumenda omnis molestiae sed non quod labore.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?51125",
                    "description": "Eveniet similique aut dolorum occaecati aliquid ut.",
                    "description_en": "Temporibus non voluptas beatae optio dicta ab.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?94906",
                    "parent_id": 4,
                    "created_at": "2020-08-08 15:48:27",
                    "updated_at": "2020-08-21 14:26:59"
                }
            }
        ],
        "first_page_url": "http:\/\/localhost\/api\/product_new?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http:\/\/localhost\/api\/product_new?page=1",
        "next_page_url": null,
        "path": "http:\/\/localhost\/api\/product_new",
        "per_page": 15,
        "prev_page_url": null,
        "to": 15,
        "total": 15
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
    -d '{"product_list":[{"product_id":9}]}'

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
            "product_id": 9
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
    "http://store.wutang.com/api/shop_carts/1?type=ipsum&product_id=voluptatem&amount=laudantium" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/shop_carts/1"
);

let params = {
    "type": "ipsum",
    "product_id": "voluptatem",
    "amount": "laudantium",
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
    "http://store.wutang.com/api/shop_carts/1?product_id=sapiente" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/shop_carts/1"
);

let params = {
    "product_id": "sapiente",
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
    -d '{"province":"est","city":"et","district":"rerum","address":"officia","zip":16,"contact_name":"odit","contact_phone":17}'

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
    "province": "est",
    "city": "et",
    "district": "rerum",
    "address": "officia",
    "zip": 16,
    "contact_name": "odit",
    "contact_phone": 17
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
    "http://store.wutang.com/api/user_addresses/1?province=labore&city=omnis&district=aut&address=dolorem&zip=animi&contact_name=est&contact_phone=minima" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_addresses/1"
);

let params = {
    "province": "labore",
    "city": "omnis",
    "district": "aut",
    "address": "dolorem",
    "zip": "animi",
    "contact_name": "est",
    "contact_phone": "minima",
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
<!-- START_0dfc43254177dc34e3f52ec8dd6ee2bd -->
## User profile list
用户资料信息

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/user_profiles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_profiles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
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
    "http://store.wutang.com/api/user_profiles?profile_id=et&phone=laudantium&real_name=qui&sex=corrupti&birthday=consectetur&age=ipsa&province=alias&city=magni&district=consequuntur&address=molestias&zip=iure" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_profiles"
);

let params = {
    "profile_id": "et",
    "phone": "laudantium",
    "real_name": "qui",
    "sex": "corrupti",
    "birthday": "consectetur",
    "age": "ipsa",
    "province": "alias",
    "city": "magni",
    "district": "consequuntur",
    "address": "molestias",
    "zip": "iure",
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
    "http://store.wutang.com/api/wish_list?product_id=eos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/wish_list"
);

let params = {
    "product_id": "eos",
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
    "http://store.wutang.com/api/wish_list?product_id=explicabo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/wish_list"
);

let params = {
    "product_id": "explicabo",
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
    -G "http://store.wutang.com/alipay/bank_gateway/pay?no=expedita&total_amount=et&payment_key=atque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/alipay/bank_gateway/pay"
);

let params = {
    "no": "expedita",
    "total_amount": "et",
    "payment_key": "atque",
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
## Alipay gateway notify
支付宝网关支付-异步通知(服务端)

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
    -G "http://store.wutang.com/alipay/aop_page/pay?no=repellat&total_amount=quod&payment_key=debitis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/alipay/aop_page/pay"
);

let params = {
    "no": "repellat",
    "total_amount": "quod",
    "payment_key": "debitis",
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
    -G "http://store.wutang.com/alipay/legacy_express/pay?no=vel&total_amount=beatae&payment_key=enim" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/alipay/legacy_express/pay"
);

let params = {
    "no": "vel",
    "total_amount": "beatae",
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
    -G "http://store.wutang.com/unionpay/pay?no=ullam&total_amount=voluptas&payment_key=in" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/unionpay/pay"
);

let params = {
    "no": "ullam",
    "total_amount": "voluptas",
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
    -G "http://store.wutang.com/api/response_code?10001=nemo&10003=corrupti&20001=vel&40001=quis&40003=expedita&40004=aut&40005=debitis&50001=ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/response_code"
);

let params = {
    "10001": "nemo",
    "10003": "corrupti",
    "20001": "vel",
    "40001": "quis",
    "40003": "expedita",
    "40004": "aut",
    "40005": "debitis",
    "50001": "ut",
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

<!-- START_d87b514e0b2d661024b3fe01f18fc23c -->
## Get assetImgs list
获取首页静态资源列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/asset_img?page=molestias&page_limit=illo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/asset_img"
);

let params = {
    "page": "molestias",
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
    "http://store.wutang.com/admin/asset_img?img=sit&img_location=natus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/asset_img"
);

let params = {
    "img": "sit",
    "img_location": "natus",
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


