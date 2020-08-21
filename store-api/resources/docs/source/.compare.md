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

#[ADMIN] Category story

分类故事
<!-- START_03beced1b66f1ed5912bf94c07e1a9a8 -->
## Get product category stoies
获取产品分类故事

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/category_stories?page=consectetur&page_limit=commodi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories"
);

let params = {
    "page": "consectetur",
    "page_limit": "commodi",
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

<!-- START_d231c5e756c00882550676f84b4f0206 -->
## Create product category story
添加产品分类故事

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/category_stories?title=expedita&title_en=at&description=error&description_en=dolorum&banner=ut&product_category_id=quae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories"
);

let params = {
    "title": "expedita",
    "title_en": "at",
    "description": "error",
    "description_en": "dolorum",
    "banner": "ut",
    "product_category_id": "quae",
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
    "http://localhost/admin/category_stories/1?title=aperiam&title_en=eligendi&description=id&description_en=laborum&banner=magni&product_category_id=suscipit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories/1"
);

let params = {
    "title": "aperiam",
    "title_en": "eligendi",
    "description": "id",
    "description_en": "laborum",
    "banner": "magni",
    "product_category_id": "suscipit",
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

#[ADMIN] Logger

日志管理
<!-- START_fdc2ff2366ce21167235c78796573398 -->
## Get logs list
获取日志列表

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/logs/1?page=illo&page_limit=dolor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/logs/1"
);

let params = {
    "page": "illo",
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
    "http://localhost/admin/logs/1?ids=est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/logs/1"
);

let params = {
    "ids": "est",
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
    -G "http://localhost/admin/order?page=sit&page_limit=harum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order"
);

let params = {
    "page": "sit",
    "page_limit": "harum",
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
    "http://localhost/admin/order?page=qui&page_limit=ut&username=optio&order_no=omnis&order_status=molestiae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order"
);

let params = {
    "page": "qui",
    "page_limit": "ut",
    "username": "optio",
    "order_no": "omnis",
    "order_status": "molestiae",
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
    -G "http://localhost/admin/product?page=consequatur&page_limit=quo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product"
);

let params = {
    "page": "consequatur",
    "page_limit": "quo",
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
    "http://localhost/admin/product?product_category_id=fuga&product_name=sunt&product_name_en=cupiditate&thumbnail=sunt&slug=praesentium&short_description=repellat&short_description_en=unde&price=itaque&sale_price=voluptas&stock=praesentium&seo_title=alias&seo_keyword=dolore&seo_description=inventore&benefit=natus&benefit_en=dolorem&tech_description=quasi&tech_description_en=quia&description=possimus&description_en=aut&usage=repellat&usage_en=natus&main_image=ab&main_image_2=expedita&benefit_image=eligendi&product_video=natus&status=aut&rating=voluptatem&sold_count=incidunt&review_count=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product"
);

let params = {
    "product_category_id": "fuga",
    "product_name": "sunt",
    "product_name_en": "cupiditate",
    "thumbnail": "sunt",
    "slug": "praesentium",
    "short_description": "repellat",
    "short_description_en": "unde",
    "price": "itaque",
    "sale_price": "voluptas",
    "stock": "praesentium",
    "seo_title": "alias",
    "seo_keyword": "dolore",
    "seo_description": "inventore",
    "benefit": "natus",
    "benefit_en": "dolorem",
    "tech_description": "quasi",
    "tech_description_en": "quia",
    "description": "possimus",
    "description_en": "aut",
    "usage": "repellat",
    "usage_en": "natus",
    "main_image": "ab",
    "main_image_2": "expedita",
    "benefit_image": "eligendi",
    "product_video": "natus",
    "status": "aut",
    "rating": "voluptatem",
    "sold_count": "incidunt",
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

<!-- START_b608d73bea12f9bf0ce6e42911c0e555 -->
## Edit product
编辑商品

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/product/1?product_category_id=accusamus&product_name=quas&product_name_en=qui&thumbnail=facilis&slug=dolorum&short_description=voluptatem&short_description_en=fuga&price=cupiditate&sale_price=ullam&stock=deleniti&seo_title=aliquid&seo_keyword=corrupti&seo_description=deserunt&benefit=quo&benefit_en=voluptate&tech_description=enim&tech_description_en=vitae&description=quibusdam&description_en=et&usage=eius&usage_en=qui&main_image=labore&main_image_2=quia&benefit_image=molestiae&product_video=laudantium&status=quia&rating=quidem&sold_count=ut&review_count=ea" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product/1"
);

let params = {
    "product_category_id": "accusamus",
    "product_name": "quas",
    "product_name_en": "qui",
    "thumbnail": "facilis",
    "slug": "dolorum",
    "short_description": "voluptatem",
    "short_description_en": "fuga",
    "price": "cupiditate",
    "sale_price": "ullam",
    "stock": "deleniti",
    "seo_title": "aliquid",
    "seo_keyword": "corrupti",
    "seo_description": "deserunt",
    "benefit": "quo",
    "benefit_en": "voluptate",
    "tech_description": "enim",
    "tech_description_en": "vitae",
    "description": "quibusdam",
    "description_en": "et",
    "usage": "eius",
    "usage_en": "qui",
    "main_image": "labore",
    "main_image_2": "quia",
    "benefit_image": "molestiae",
    "product_video": "laudantium",
    "status": "quia",
    "rating": "quidem",
    "sold_count": "ut",
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
`POST admin/product/{productId}`

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

<!-- END_b608d73bea12f9bf0ce6e42911c0e555 -->

<!-- START_c779c2590cf366390ebf12164a5b9a95 -->
## Off the Product
下架产品

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
`DELETE admin/product/{productId}`


<!-- END_c779c2590cf366390ebf12164a5b9a95 -->

#[ADMIN] Product category

商品分类管理
<!-- START_c2c61ac73e177fc85d5f5487b23cf13e -->
## Get product category list
获取产品分类列表

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/product_categories?page=quae&page_limit=error" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories"
);

let params = {
    "page": "quae",
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
`GET admin/product_categories`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | 页码
    `page_limit` |  optional  | 每页数量

<!-- END_c2c61ac73e177fc85d5f5487b23cf13e -->

<!-- START_80621ad47a9cd3c202d602c981a133f2 -->
## Create product category
新建产品分类

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/product_categories?title=quia&title_en=ea&describe=dolores&describe_en=est&banner=eos&description=dolore&description_en=eligendi&img=qui&parent_id=harum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories"
);

let params = {
    "title": "quia",
    "title_en": "ea",
    "describe": "dolores",
    "describe_en": "est",
    "banner": "eos",
    "description": "dolore",
    "description_en": "eligendi",
    "img": "qui",
    "parent_id": "harum",
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

<!-- START_b9b3605d8b25e2aa388d6484b2796e92 -->
## Edit product category
编辑产品分类

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/product_categories/1?title=sed&title_en=consequatur&describe=repellat&describe_en=dolorem&banner=veniam&description=molestiae&description_en=voluptatum&img=sint&parent_id=laudantium" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories/1"
);

let params = {
    "title": "sed",
    "title_en": "consequatur",
    "describe": "repellat",
    "describe_en": "dolorem",
    "banner": "veniam",
    "description": "molestiae",
    "description_en": "voluptatum",
    "img": "sint",
    "parent_id": "laudantium",
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
`POST admin/product_categories/{productCategoriesId}`

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

<!-- END_b9b3605d8b25e2aa388d6484b2796e92 -->

<!-- START_893f848eddd70becc2abbd0dbbdbc773 -->
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
`DELETE admin/product_categories/{productCategoriesId}`


<!-- END_893f848eddd70becc2abbd0dbbdbc773 -->

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
    "http://localhost/admin/product_sku?title=quia&description=eligendi&price=et&stock=et&product_id=delectus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_sku"
);

let params = {
    "title": "quia",
    "description": "eligendi",
    "price": "et",
    "stock": "et",
    "product_id": "delectus",
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
    "http://localhost/admin/product_sku/1?title=impedit&description=ullam&price=vero&stock=odio&product_id=ducimus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_sku/1"
);

let params = {
    "title": "impedit",
    "description": "ullam",
    "price": "vero",
    "stock": "odio",
    "product_id": "ducimus",
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
    -G "http://localhost/admin/user?username=aliquam&page=dolorem&page_limit=sed" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user"
);

let params = {
    "username": "aliquam",
    "page": "dolorem",
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
    "http://localhost/admin/user/1?name=fugiat&email=ducimus&phone=eum&avatar=dolor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/1"
);

let params = {
    "name": "fugiat",
    "email": "ducimus",
    "phone": "eum",
    "avatar": "dolor",
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
    "http://localhost/admin/user/reset_password/1?oldPassword=in&newPassword=officia&newPassword_confirmation=suscipit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/reset_password/1"
);

let params = {
    "oldPassword": "in",
    "newPassword": "officia",
    "newPassword_confirmation": "suscipit",
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
    -G "http://localhost/admin/get_user?hash_id=perferendis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/get_user"
);

let params = {
    "hash_id": "perferendis",
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
    "http://localhost/admin/user_addresses?province=quisquam&city=quae&district=et&address=veniam&zip=magnam&contact_name=quae&contact_phone=eveniet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses"
);

let params = {
    "province": "quisquam",
    "city": "quae",
    "district": "et",
    "address": "veniam",
    "zip": "magnam",
    "contact_name": "quae",
    "contact_phone": "eveniet",
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
    "http://localhost/admin/user_addresses/1?address_id=nostrum&province=commodi&city=porro&district=nam&address=molestiae&zip=libero&contact_name=ut&contact_phone=quibusdam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses/1"
);

let params = {
    "address_id": "nostrum",
    "province": "commodi",
    "city": "porro",
    "district": "nam",
    "address": "molestiae",
    "zip": "libero",
    "contact_name": "ut",
    "contact_phone": "quibusdam",
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
    "http://localhost/admin/user_addresses/1?address_id=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses/1"
);

let params = {
    "address_id": "et",
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
    "http://localhost/admin/user_profiles/1?profile_id=quibusdam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_profiles/1"
);

let params = {
    "profile_id": "quibusdam",
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
    "http://localhost/admin/user_profiles/1?profile_id=illum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_profiles/1"
);

let params = {
    "profile_id": "illum",
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
    -d '{"name":"adipisci","username":"est","password":"ratione","captcha_key":"nisi","captcha_code":"et","password_question_id":9,"password_answer":"qui"}'

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
    "name": "adipisci",
    "username": "est",
    "password": "ratione",
    "captcha_key": "nisi",
    "captcha_code": "et",
    "password_question_id": 9,
    "password_answer": "qui"
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
    -G "http://localhost/api/questions?username=maxime" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/questions"
);

let params = {
    "username": "maxime",
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
        "username": "maxime"
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
    -d '{"username":"fugiat","password":"fugiat"}'

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
    "username": "fugiat",
    "password": "fugiat"
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
    "http://localhost/api/password_reset?username=modi&password_question_id=beatae&password_answer=officia&password=error&password_confirmation=illo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/password_reset"
);

let params = {
    "username": "modi",
    "password_question_id": "beatae",
    "password_answer": "officia",
    "password": "error",
    "password_confirmation": "illo",
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

<!-- START_a5b1ad2131e03818cd865a9ffddc0928 -->
## Change password
修改密码(已登录)

> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/password_change" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"oldPassword":"et","newPassword":"soluta","newPassword_confirmation":"ipsa"}'

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
    "oldPassword": "et",
    "newPassword": "soluta",
    "newPassword_confirmation": "ipsa"
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
    -G "http://localhost/api/order_details/1?no=deleniti" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/order_details/1"
);

let params = {
    "no": "deleniti",
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
    -d '{"address_id":"dolore","remark":"omnis"}'

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
    "address_id": "dolore",
    "remark": "omnis"
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

<!-- START_9d8ded196d3036ace16c0ed016057385 -->
## Check the order status
查询订单状态

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/orders/pay_check?no=exercitationem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orders/pay_check"
);

let params = {
    "no": "exercitationem",
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
`GET api/orders/pay_check`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `no` |  required  | 订单号

<!-- END_9d8ded196d3036ace16c0ed016057385 -->

#[API] Payment

支付管理
<!-- START_a2f0cb2454c12a09b199d57c7e9ad462 -->
## Request to alipay gateway pay
发起支付宝网关支付请求(前端)

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/aligateway/pay?no=quia&total_amount=id" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/aligateway/pay"
);

let params = {
    "no": "quia",
    "total_amount": "id",
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
`GET api/aligateway/pay`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `no` |  required  | 订单号
    `total_amount` |  required  | 总金额

<!-- END_a2f0cb2454c12a09b199d57c7e9ad462 -->

<!-- START_6151e9304eabe9201f3887072a828260 -->
## Alipay gateway return
支付宝网关支付后的同步跳转(前端)

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/aligateway/return" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/aligateway/return"
);

let headers = {
    "Content-Type": "application/json",
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
`GET api/aligateway/return`


<!-- END_6151e9304eabe9201f3887072a828260 -->

<!-- START_f9a132f378294568dd73f01143c180b3 -->
## Alipay gateway notify
支付宝网关支付后的异步通知(服务端)

> Example request:

```bash
curl -X POST \
    "http://localhost/api/aligateway/notify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/aligateway/notify"
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
`POST api/aligateway/notify`


<!-- END_f9a132f378294568dd73f01143c180b3 -->

<!-- START_bd1f2555bc6633390fa0cd3902b6ea26 -->
## Alipay request payment
支付宝发起支付

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/alipay/pay?no=dolor&total_amount=libero&subject=aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/alipay/pay"
);

let params = {
    "no": "dolor",
    "total_amount": "libero",
    "subject": "aut",
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
`GET api/alipay/pay`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `no` |  required  | 订单号
    `total_amount` |  required  | 总金额
    `subject` |  required  | 订单标题

<!-- END_bd1f2555bc6633390fa0cd3902b6ea26 -->

<!-- START_43e96a9060fca58becd5a755b4e3aa4e -->
## Alipay return payment results
支付宝前端回调页面

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/alipay/return" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/alipay/return"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/alipay/return`


<!-- END_43e96a9060fca58becd5a755b4e3aa4e -->

<!-- START_c30352faca2b1d81fafd84d7c4a79cdd -->
## Alipay notify payment results
支付宝服务器端回调

> Example request:

```bash
curl -X POST \
    "http://localhost/api/alipay/notify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/alipay/notify"
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
`POST api/alipay/notify`


<!-- END_c30352faca2b1d81fafd84d7c4a79cdd -->

<!-- START_b2e091365f9f03862a73b53b8a32eb41 -->
## Unionpay request payment
银联支付发起请求

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/unionpay/pay?no=mollitia&subject=impedit&total_amount=quod" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/unionpay/pay"
);

let params = {
    "no": "mollitia",
    "subject": "impedit",
    "total_amount": "quod",
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
`GET api/unionpay/pay`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `no` |  required  | 订单号
    `subject` |  required  | 商品名称
    `total_amount` |  required  | 总金额

<!-- END_b2e091365f9f03862a73b53b8a32eb41 -->

<!-- START_94ec51bb78f31dedba309417c651b8ad -->
## Unionpay return payment results
银联支付返回结果

> Example request:

```bash
curl -X POST \
    "http://localhost/api/unionpay/return" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/unionpay/return"
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
`POST api/unionpay/return`


<!-- END_94ec51bb78f31dedba309417c651b8ad -->

<!-- START_5437da007e01a50eb566d5a65e9dfb9b -->
## Unionpay notify payment results
通知银联支付结果

> Example request:

```bash
curl -X POST \
    "http://localhost/api/unionpay/notify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/unionpay/notify"
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
`POST api/unionpay/notify`


<!-- END_5437da007e01a50eb566d5a65e9dfb9b -->

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
            "slug": "similique-natus",
            "title": "面膜",
            "title_en": "eveniet et saepe",
            "describe": "Reiciendis ipsum sint et necessitatibus officiis vel. Eaque culpa autem velit est. Aliquam id nihil fuga dicta ut dolores.",
            "describe_en": "Ea aperiam dolores temporibus distinctio. Repellat molestias asperiores quae ipsa et facilis. Blanditiis magni aut architecto illo quos dolorum blanditiis error.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?84160",
            "description": "Voluptas enim est autem vero vel.",
            "description_en": "Vero exercitationem hic in molestias cumque reiciendis.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?88060",
            "parent_id": 12,
            "created_at": "2020-08-21 11:05:32",
            "updated_at": "2020-08-01 23:32:02",
            "parent_title": "面膜"
        },
        {
            "id": 2,
            "slug": "soluta-officia",
            "title": "唇膏",
            "title_en": "dignissimos natus accusantium",
            "describe": "Sit enim quos debitis rem. Ipsum qui sint in pariatur eius porro est eveniet. Fugiat odio et cumque inventore eos qui autem.",
            "describe_en": "Consectetur accusantium porro sunt eum pariatur. Aut sapiente sint vel autem quos maiores. Dolor ratione asperiores quo omnis quis. Rem laudantium et consequatur dolore at non dolor.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?72707",
            "description": "Sed debitis repellendus ut eligendi perspiciatis.",
            "description_en": "Rem nemo tenetur et et ipsa.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?90026",
            "parent_id": 15,
            "created_at": "2020-08-02 05:13:56",
            "updated_at": "2020-07-22 18:57:32",
            "parent_title": "卸妆"
        },
        {
            "id": 3,
            "slug": "quod-iure",
            "title": "眼线",
            "title_en": "aut qui iste",
            "describe": "Doloribus eum et aut ipsa maiores laudantium nihil. Sequi nostrum asperiores labore consequatur perferendis nemo hic. Iusto vel qui repellendus.",
            "describe_en": "Iure qui nulla sint possimus ut veritatis nemo omnis. Voluptatem iste voluptatum nemo ut. Tempora nemo praesentium nisi ipsam. Similique in nostrum cupiditate expedita rerum voluptas ut.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?13861",
            "description": "Eos inventore temporibus quam laboriosam sit fugit.",
            "description_en": "Omnis maxime facilis velit.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?47027",
            "parent_id": 13,
            "created_at": "2020-07-23 12:40:55",
            "updated_at": "2020-08-02 04:03:56",
            "parent_title": "乳液"
        },
        {
            "id": 4,
            "slug": "ut-sed",
            "title": "隔离",
            "title_en": "nesciunt et ullam",
            "describe": "Officiis dolorem iusto quo tempore perferendis suscipit quisquam. Ut quo ab in repellat iure facilis quibusdam. Rerum sunt magni dolores. Consequatur facere culpa ratione tempora.",
            "describe_en": "Molestiae accusamus iure tenetur eveniet quibusdam aut recusandae. Reiciendis enim error odit molestiae modi omnis. Possimus quae nihil tempora eligendi et maxime.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?16466",
            "description": "Corrupti et delectus et qui asperiores.",
            "description_en": "Similique quod cupiditate soluta numquam.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?34125",
            "parent_id": 15,
            "created_at": "2020-07-23 02:43:02",
            "updated_at": "2020-08-03 20:28:42",
            "parent_title": "卸妆"
        },
        {
            "id": 5,
            "slug": "omnis-vitae",
            "title": "香水",
            "title_en": "quia vel sint",
            "describe": "Quasi sed dolores architecto sint numquam vitae. Atque molestiae suscipit delectus et illum et sint. Aliquam esse eum dolorem. Voluptas quia eveniet voluptas laborum voluptatum.",
            "describe_en": "Quae ut iure optio veritatis. Nostrum at sunt iure sed. Omnis tempore vitae quisquam repudiandae. Sit sint et mollitia quis minima.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?89817",
            "description": "Quasi eligendi tenetur suscipit asperiores.",
            "description_en": "Soluta aperiam aperiam accusantium consequatur debitis.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?64644",
            "parent_id": 7,
            "created_at": "2020-07-21 16:20:44",
            "updated_at": "2020-08-12 16:59:59",
            "parent_title": "精油"
        },
        {
            "id": 6,
            "slug": "nobis-dolor",
            "title": "乳液",
            "title_en": "consequatur dolorem eaque",
            "describe": "Saepe rerum repudiandae minus sit quia qui. Quisquam accusantium non sed. In ex possimus officiis nostrum. Repellat aperiam dolorem non quidem magni qui provident.",
            "describe_en": "Est quia et dicta et. Qui beatae sit hic natus delectus quis voluptas provident. Et aliquam dolores ullam facere molestiae.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?63262",
            "description": "Quis eum iste eaque quia dolores consectetur.",
            "description_en": "Ut rem eos nemo porro est maxime.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?18100",
            "parent_id": 8,
            "created_at": "2020-07-23 16:48:20",
            "updated_at": "2020-08-06 15:29:22",
            "parent_title": "精油"
        },
        {
            "id": 7,
            "slug": "atque-voluptas",
            "title": "精油",
            "title_en": "optio adipisci blanditiis",
            "describe": "Velit consequatur perspiciatis doloremque reiciendis quo. Et sit consequuntur aut libero. Recusandae asperiores et laudantium non.",
            "describe_en": "Et voluptas adipisci voluptas distinctio error. Et sequi magnam libero est adipisci placeat reprehenderit dolorem. Ipsa iure quia optio porro est aspernatur.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?20173",
            "description": "Nemo nisi distinctio possimus est.",
            "description_en": "Vero maxime laboriosam quia impedit nam vel.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?48867",
            "parent_id": 11,
            "created_at": "2020-07-30 23:51:10",
            "updated_at": "2020-07-21 15:41:09",
            "parent_title": "眼霜"
        },
        {
            "id": 8,
            "slug": "omnis-perspiciatis",
            "title": "精油",
            "title_en": "natus qui ratione",
            "describe": "Aut et nisi nam repellat. Quod aut qui ut ad. Adipisci quia rerum qui excepturi et molestiae consequuntur cum.",
            "describe_en": "Tenetur et magnam labore nihil est quis. Suscipit eligendi adipisci nulla eligendi eos eos molestiae. Aut inventore accusantium est. Nisi esse odit inventore fuga odit dolorem.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?58208",
            "description": "Aut qui ex aut reprehenderit sed corrupti.",
            "description_en": "Tempore magni alias repellat ab eos.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?41432",
            "parent_id": 9,
            "created_at": "2020-08-14 21:08:31",
            "updated_at": "2020-07-26 23:06:47",
            "parent_title": "爽肤水"
        },
        {
            "id": 9,
            "slug": "voluptatem-sed",
            "title": "爽肤水",
            "title_en": "ad aperiam ad",
            "describe": "Ea quisquam quo voluptatibus molestiae. Commodi ut est quia est voluptas. Earum ea facilis ipsam rerum et natus et. Dolor ab quo eligendi iusto omnis illo officiis. Qui esse unde ipsam harum qui et.",
            "describe_en": "Harum et ducimus ex ipsum. Nam nihil rerum eius at aut qui ad.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?95380",
            "description": "Nesciunt praesentium ut ut magnam.",
            "description_en": "Adipisci beatae odio voluptatibus in nam hic.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?33226",
            "parent_id": 15,
            "created_at": "2020-07-25 08:00:17",
            "updated_at": "2020-08-11 12:08:50",
            "parent_title": "卸妆"
        },
        {
            "id": 10,
            "slug": "reprehenderit-tempora",
            "title": "精华",
            "title_en": "explicabo animi ducimus",
            "describe": "Ullam reiciendis ea nesciunt voluptatem rerum vitae. Distinctio quia sequi ex nemo numquam nulla rerum. Laboriosam aut et at et. Deleniti et commodi reprehenderit sed praesentium eos est.",
            "describe_en": "Et culpa quia saepe consequatur quam autem. Ad iste eius aut voluptatem repellat. Quaerat dolores voluptatibus ut suscipit.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?83128",
            "description": "Deleniti dolores quasi consequatur itaque accusamus ullam vel.",
            "description_en": "Cumque nam tempore voluptas voluptas.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?40429",
            "parent_id": 10,
            "created_at": "2020-08-05 12:33:24",
            "updated_at": "2020-08-16 07:01:16",
            "parent_title": "精华"
        },
        {
            "id": 11,
            "slug": "aut-aut",
            "title": "眼霜",
            "title_en": "pariatur libero qui",
            "describe": "Labore qui debitis ea doloribus veritatis maxime. Velit quaerat sit et accusantium sed. Itaque dolores sunt numquam expedita est autem.",
            "describe_en": "Quisquam reprehenderit non maxime qui. Ducimus magnam nemo libero voluptates. Ex ut iure tempora itaque. Quos reiciendis tenetur veritatis et qui culpa quam ut. Non minima nisi quos fuga tenetur qui.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?62802",
            "description": "Eum consequatur quaerat ut.",
            "description_en": "Nostrum in et necessitatibus deserunt voluptatem laudantium.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?45012",
            "parent_id": 9,
            "created_at": "2020-07-26 04:22:40",
            "updated_at": "2020-08-18 13:08:49",
            "parent_title": "爽肤水"
        },
        {
            "id": 12,
            "slug": "sunt-modi",
            "title": "面膜",
            "title_en": "voluptatibus eum veniam",
            "describe": "Dolorum aliquam quia temporibus quia. Fugit similique et illum porro numquam et nobis magni. Necessitatibus nihil perspiciatis qui dolor et qui. Est illo accusantium quisquam omnis.",
            "describe_en": "Et non ut rerum. Animi repudiandae ex rerum nihil nobis qui harum.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?95986",
            "description": "Aut debitis ut excepturi non laudantium.",
            "description_en": "Nostrum aut ea quis et.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?92786",
            "parent_id": 9,
            "created_at": "2020-08-04 11:55:39",
            "updated_at": "2020-08-01 18:24:56",
            "parent_title": "爽肤水"
        },
        {
            "id": 13,
            "slug": "optio-dolor",
            "title": "乳液",
            "title_en": "ut quaerat consequatur",
            "describe": "Deleniti ut eum quo iste ut reprehenderit. Eaque repudiandae aut ipsam et error voluptatibus. Saepe veniam fugiat inventore ipsam officiis natus quas. Architecto iure corporis voluptatem iusto.",
            "describe_en": "Sit velit nemo aliquam sed. Qui animi odit consectetur distinctio repudiandae quam. Qui dignissimos quis ipsam officiis.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?12398",
            "description": "Eius eligendi quaerat illum tenetur aut et.",
            "description_en": "Voluptatum asperiores eligendi modi porro et.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?13834",
            "parent_id": 12,
            "created_at": "2020-08-03 23:18:16",
            "updated_at": "2020-08-17 03:28:42",
            "parent_title": "面膜"
        },
        {
            "id": 14,
            "slug": "voluptates-aliquam",
            "title": "香水",
            "title_en": "saepe aut ipsum",
            "describe": "Amet id sint voluptatem possimus molestias. Qui et tempore ut nobis quia. Et quia mollitia in tempora consequatur.",
            "describe_en": "Aut fuga reiciendis et necessitatibus error ut. Sed tenetur cum voluptates tenetur accusamus eius perferendis. Odio vitae cumque ut ut possimus iure.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?37438",
            "description": "Labore omnis ducimus quasi qui.",
            "description_en": "Quisquam autem exercitationem eaque.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?95194",
            "parent_id": 18,
            "created_at": "2020-08-13 03:06:48",
            "updated_at": "2020-08-04 04:18:34",
            "parent_title": "睫毛膏"
        },
        {
            "id": 15,
            "slug": "quia-et",
            "title": "卸妆",
            "title_en": "vitae eum a",
            "describe": "Itaque voluptatem id velit voluptatem fuga. Aspernatur qui officia magnam amet ad atque. Placeat asperiores vitae culpa dolores ut voluptatum ut.",
            "describe_en": "Sed sed quis culpa ut natus facilis. Voluptas illum excepturi aut maiores. Facilis dolores voluptates et non corporis. Quod eos impedit quisquam maxime.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?54461",
            "description": "Culpa ducimus dolor quia aut iste occaecati.",
            "description_en": "Magni eius expedita fugit quia commodi.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?34072",
            "parent_id": 14,
            "created_at": "2020-07-31 07:02:36",
            "updated_at": "2020-08-01 12:17:28",
            "parent_title": "香水"
        },
        {
            "id": 16,
            "slug": "eos-qui",
            "title": "隔离",
            "title_en": "laudantium amet voluptas",
            "describe": "Nemo impedit ipsam molestiae officia. Ipsam et laborum est reprehenderit reiciendis. Dolore magnam sunt et vel dolores.",
            "describe_en": "Enim facilis assumenda possimus aut. Itaque error distinctio quos ducimus. Velit autem suscipit et quod laudantium. Optio autem assumenda iste quibusdam et quo.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?63852",
            "description": "Quod cupiditate et rerum consequatur fuga.",
            "description_en": "Quis odio exercitationem illo illum illo omnis.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?14534",
            "parent_id": 20,
            "created_at": "2020-07-23 09:50:22",
            "updated_at": "2020-08-01 01:58:18",
            "parent_title": "防晒"
        },
        {
            "id": 17,
            "slug": "aliquam-odio",
            "title": "香水",
            "title_en": "rerum corrupti illo",
            "describe": "In ad ex est molestiae. Accusamus ipsum commodi voluptatem sint placeat cumque eveniet reprehenderit. Quia vero voluptate possimus rem autem. Velit sit voluptas aliquid deserunt expedita est sunt.",
            "describe_en": "Vel omnis aliquid vero ut doloremque magnam id. Inventore minima ut ut totam soluta voluptatem exercitationem. Quisquam sint rem rerum aliquam officiis minima.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?92084",
            "description": "Et quod fugiat quisquam.",
            "description_en": "Soluta id laboriosam et debitis aut ullam.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?19962",
            "parent_id": 16,
            "created_at": "2020-08-15 00:37:43",
            "updated_at": "2020-07-29 18:18:53",
            "parent_title": "隔离"
        },
        {
            "id": 18,
            "slug": "aut-illum",
            "title": "睫毛膏",
            "title_en": "veritatis quod aut",
            "describe": "Pariatur est corrupti perspiciatis. Aut asperiores cumque qui eum dicta aut. Consequatur quidem sapiente labore doloremque voluptatem magni quia. Nostrum aliquid ipsa velit.",
            "describe_en": "Ipsum sint accusantium a laboriosam cum. A architecto amet quidem aut suscipit.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?31094",
            "description": "Ullam sed consequatur repellendus quis.",
            "description_en": "Et occaecati itaque ex incidunt.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?91102",
            "parent_id": 19,
            "created_at": "2020-07-27 02:22:27",
            "updated_at": "2020-08-01 23:46:17",
            "parent_title": "卸妆"
        },
        {
            "id": 19,
            "slug": "cumque-nobis",
            "title": "卸妆",
            "title_en": "occaecati illum voluptatem",
            "describe": "Sed dolor repellendus asperiores qui magni autem. Autem earum enim iste quos rerum nihil rerum. Perferendis placeat voluptatibus velit architecto.",
            "describe_en": "Quos iste quaerat est. Voluptatem quasi est quo quis eos facilis. Minus aliquam enim dolor dolores.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?71682",
            "description": "Ipsum optio officia et voluptas repellat.",
            "description_en": "Eos est et quis nisi praesentium.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?87552",
            "parent_id": 17,
            "created_at": "2020-08-13 13:12:12",
            "updated_at": "2020-07-27 01:48:06",
            "parent_title": "香水"
        },
        {
            "id": 20,
            "slug": "quos-rem",
            "title": "防晒",
            "title_en": "reprehenderit commodi voluptas",
            "describe": "Nisi occaecati est harum aliquam. Eos est neque aspernatur. Non dolor tempora aperiam reprehenderit fugiat et repudiandae consequatur.",
            "describe_en": "Atque consectetur in et sed deserunt. Aspernatur voluptates voluptatem a deserunt sed voluptas. Ullam libero soluta ut rem.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?87863",
            "description": "Omnis dolor est nobis rerum est.",
            "description_en": "Cumque numquam iste aut ex architecto voluptatem.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?97172",
            "parent_id": 11,
            "created_at": "2020-08-17 12:18:30",
            "updated_at": "2020-08-10 16:05:35",
            "parent_title": "眼霜"
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
                "id": 1,
                "product_category_id": 2,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "numquam a explicabo",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?38708",
                "slug": "ducimus-et",
                "short_description": "Tenetur aut molestiae non et.",
                "short_description_en": "Recusandae nisi expedita sunt at quia. Quaerat ut quis architecto sint dolorum temporibus repudiandae. Expedita est consectetur natus modi ipsum debitis.",
                "price": "7625.00",
                "sale_price": "367.00",
                "stock": 853,
                "spec": null,
                "seo_title": "dolores quis ratione",
                "seo_keyword": "in",
                "seo_description": "Labore quo officia aut.",
                "benefit": "Cum est quibusdam incidunt. Consequatur facilis qui quae placeat velit ab.",
                "benefit_en": "Vitae consequatur ut nisi. Dolorum tempora rerum non sit vitae recusandae atque. Quam repellat hic aperiam illo.",
                "tech_description": "Consequatur reiciendis voluptas beatae alias consequatur quidem atque. Quia quos unde laboriosam eos. Perspiciatis nesciunt at voluptas eveniet dolorem. Perferendis voluptatem exercitationem et iste enim quae.",
                "tech_description_en": "Et dolor impedit rerum eligendi molestiae adipisci dolores dolor. Nam pariatur dolorem doloremque qui. Atque repellat esse consequatur omnis autem quasi officia.",
                "description": "Sed a repudiandae atque laudantium nisi. Ut inventore dolorum soluta ad optio et aspernatur. Mollitia et omnis occaecati eveniet incidunt dolorum cum.",
                "description_en": "Aut quam voluptates quae incidunt qui provident. Et consequatur et hic. Est voluptatem qui sit itaque ut. Ut optio aut dolorem id.",
                "usage": "Vitae sed porro unde quibusdam natus est. Iure necessitatibus voluptatem nostrum corrupti. Sint aut ab corporis quo rerum aperiam consectetur quo.",
                "usage_en": "Dolores voluptatem pariatur culpa. Quis velit facilis ea assumenda velit ipsam eos. Eum recusandae distinctio voluptatem voluptatem ipsam voluptatem.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?65131",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?62996",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?83279",
                "product_video": null,
                "status": 3,
                "rating": 9.94,
                "sold_count": 2143,
                "review_count": 5968,
                "created_at": "2020-08-16 05:20:56",
                "updated_at": "2020-08-01 12:17:37",
                "product_category": {
                    "id": 2,
                    "slug": "soluta-officia",
                    "title": "唇膏",
                    "title_en": "dignissimos natus accusantium",
                    "describe": "Sit enim quos debitis rem. Ipsum qui sint in pariatur eius porro est eveniet. Fugiat odio et cumque inventore eos qui autem.",
                    "describe_en": "Consectetur accusantium porro sunt eum pariatur. Aut sapiente sint vel autem quos maiores. Dolor ratione asperiores quo omnis quis. Rem laudantium et consequatur dolore at non dolor.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?72707",
                    "description": "Sed debitis repellendus ut eligendi perspiciatis.",
                    "description_en": "Rem nemo tenetur et et ipsa.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?90026",
                    "parent_id": 15,
                    "created_at": "2020-08-02 05:13:56",
                    "updated_at": "2020-07-22 18:57:32"
                }
            },
            {
                "id": 2,
                "product_category_id": 8,
                "product_name": "黑钻焕肤水",
                "product_name_en": "deleniti quis libero",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?31562",
                "slug": "eum-aut",
                "short_description": "Dicta alias voluptatum fugiat vitae mollitia maiores.",
                "short_description_en": "Veniam velit neque omnis modi esse porro. Nihil molestiae aut sed maxime. Nemo et autem non cumque corporis rerum est. Deleniti ducimus tempora quis iste quaerat nihil. Commodi harum quae placeat exercitationem similique.",
                "price": "6099.00",
                "sale_price": "7886.00",
                "stock": 88,
                "spec": null,
                "seo_title": "sunt et ullam",
                "seo_keyword": "et",
                "seo_description": "Dolore distinctio et molestias iure eius repudiandae.",
                "benefit": "Tempora at est libero et veniam explicabo. Rem nihil consequatur debitis laudantium. Tempora tenetur omnis veniam.",
                "benefit_en": "Veritatis doloremque in quisquam doloremque amet eaque voluptate. Maxime et nisi debitis odit. Ut quia qui quisquam ab harum numquam voluptates. Quam ut laudantium et qui.",
                "tech_description": "Aut nostrum cum inventore voluptatem ut numquam nemo. A iste consequatur magnam itaque illum vitae earum. Sed nam velit dolorum et qui. Voluptas quas incidunt assumenda est debitis explicabo minus sed.",
                "tech_description_en": "Excepturi corporis labore rerum. Officiis in impedit beatae dolorem autem consequatur. Hic quae laborum molestiae similique aperiam quo ut. Repudiandae architecto optio quis perferendis enim ut non.",
                "description": "Officia tempora distinctio dolorem. Qui rerum quia ullam cumque consequatur voluptatibus sed. Officiis aut perspiciatis qui ut est debitis qui quae.",
                "description_en": "Dicta inventore distinctio rerum aut. Delectus ut aut maiores quis sapiente. Sunt qui totam quisquam aut et. Error adipisci minima quo sed amet eius.",
                "usage": "Qui eum nihil reiciendis perferendis odio vel. Fuga debitis minus esse aut. Ex quas velit cupiditate nam exercitationem. Magnam eum ea pariatur praesentium omnis quidem et.",
                "usage_en": "Qui laboriosam commodi quo. Qui eos autem quo corporis qui eos quo qui. Aut dicta autem soluta corporis provident vitae. Aut aliquam assumenda temporibus.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?37370",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?17944",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?47981",
                "product_video": null,
                "status": 1,
                "rating": 6.57,
                "sold_count": 2971,
                "review_count": 3282,
                "created_at": "2020-07-31 03:56:56",
                "updated_at": "2020-08-03 03:58:13",
                "product_category": {
                    "id": 8,
                    "slug": "omnis-perspiciatis",
                    "title": "精油",
                    "title_en": "natus qui ratione",
                    "describe": "Aut et nisi nam repellat. Quod aut qui ut ad. Adipisci quia rerum qui excepturi et molestiae consequuntur cum.",
                    "describe_en": "Tenetur et magnam labore nihil est quis. Suscipit eligendi adipisci nulla eligendi eos eos molestiae. Aut inventore accusantium est. Nisi esse odit inventore fuga odit dolorem.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?58208",
                    "description": "Aut qui ex aut reprehenderit sed corrupti.",
                    "description_en": "Tempore magni alias repellat ab eos.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?41432",
                    "parent_id": 9,
                    "created_at": "2020-08-14 21:08:31",
                    "updated_at": "2020-07-26 23:06:47"
                }
            },
            {
                "id": 3,
                "product_category_id": 6,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "iure culpa minus",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?55663",
                "slug": "sequi-voluptate",
                "short_description": "Libero dolore accusamus qui veritatis.",
                "short_description_en": "Alias maxime eum qui explicabo et. Harum perferendis provident est in. Reiciendis consequatur ducimus tenetur id facilis. Iure ea delectus atque voluptas. Suscipit aut ea autem possimus quo incidunt.",
                "price": "9487.00",
                "sale_price": "9418.00",
                "stock": 184,
                "spec": null,
                "seo_title": "aliquam velit necessitatibus",
                "seo_keyword": "illum",
                "seo_description": "Esse occaecati nulla quis tenetur.",
                "benefit": "Deleniti quae facere provident iusto modi perspiciatis aut. Ut accusantium harum sit cumque praesentium. Consequatur quisquam ad voluptas nulla vel ab. Saepe quae qui officiis voluptas consequuntur.",
                "benefit_en": "Nemo occaecati a blanditiis dolores. Provident reiciendis dolorem sunt tenetur delectus.",
                "tech_description": "Ullam voluptas adipisci sed dolores aut officiis et. Quia reiciendis illo perferendis autem. Voluptate cum sint deserunt quae culpa. Esse ut odio et amet et nobis quod.",
                "tech_description_en": "Labore sit distinctio laborum consectetur. Totam minus necessitatibus nihil saepe nobis repudiandae autem. Illum qui neque cum officiis quo reprehenderit.",
                "description": "Hic qui non eos nemo natus incidunt reprehenderit. Modi et et distinctio dolore quia voluptate iure. Molestias et reprehenderit saepe repellendus.",
                "description_en": "Quia optio veritatis repudiandae ut tenetur. Et consequatur quia pariatur sed expedita quidem adipisci. Illo pariatur ut doloremque dicta qui ad veritatis. Aut adipisci tenetur quis sunt.",
                "usage": "Quia nam repellat fugiat eligendi voluptatem quo qui. Unde quos autem quis in rerum nisi. Quos illo at aut laborum est.",
                "usage_en": "Dignissimos quaerat et expedita odit ex. Consequatur velit sed voluptatem assumenda. Impedit nemo quibusdam perferendis vero.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?98532",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?28786",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?70598",
                "product_video": null,
                "status": 1,
                "rating": 9.14,
                "sold_count": 1343,
                "review_count": 8721,
                "created_at": "2020-07-23 18:59:02",
                "updated_at": "2020-08-01 05:45:19",
                "product_category": {
                    "id": 6,
                    "slug": "nobis-dolor",
                    "title": "乳液",
                    "title_en": "consequatur dolorem eaque",
                    "describe": "Saepe rerum repudiandae minus sit quia qui. Quisquam accusantium non sed. In ex possimus officiis nostrum. Repellat aperiam dolorem non quidem magni qui provident.",
                    "describe_en": "Est quia et dicta et. Qui beatae sit hic natus delectus quis voluptas provident. Et aliquam dolores ullam facere molestiae.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?63262",
                    "description": "Quis eum iste eaque quia dolores consectetur.",
                    "description_en": "Ut rem eos nemo porro est maxime.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?18100",
                    "parent_id": 8,
                    "created_at": "2020-07-23 16:48:20",
                    "updated_at": "2020-08-06 15:29:22"
                }
            },
            {
                "id": 4,
                "product_category_id": 15,
                "product_name": "黑钻焕肤水",
                "product_name_en": "ea molestiae odio",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?38822",
                "slug": "unde-consequatur",
                "short_description": "Totam voluptatem quod unde voluptates corrupti voluptatem.",
                "short_description_en": "Doloremque eius tenetur quam culpa. Voluptatem vitae dolores itaque. Incidunt quisquam repellendus voluptatem explicabo.",
                "price": "3949.00",
                "sale_price": "8868.00",
                "stock": 854,
                "spec": null,
                "seo_title": "eum laborum at",
                "seo_keyword": "nihil",
                "seo_description": "Repudiandae praesentium impedit aut nemo.",
                "benefit": "Sit est est architecto harum aut reprehenderit. Corporis ut sint animi aut voluptate voluptas. Possimus vitae impedit harum nisi.",
                "benefit_en": "Quis aut assumenda rerum. Nihil et numquam praesentium beatae eos. Et ducimus officiis iure omnis sunt.",
                "tech_description": "In porro sapiente laudantium necessitatibus facilis itaque quia. Ut adipisci nostrum quis ut officia quisquam. Ipsa odio sapiente temporibus quod enim eum. Sunt nobis earum quibusdam eos quasi ab.",
                "tech_description_en": "Et illo sint voluptas nostrum. Voluptatum sed voluptatum aliquid dicta sed iure ullam.",
                "description": "Quia molestiae aut qui ipsum natus. Neque aut eos repudiandae pariatur.",
                "description_en": "Architecto voluptas totam fugiat qui soluta voluptas excepturi qui. Eos odio eum quidem nemo velit inventore. Rem mollitia qui voluptas omnis dignissimos. Amet ut natus nesciunt neque.",
                "usage": "Consequatur quibusdam officiis consequatur laborum eum aut commodi. Inventore tempora rerum suscipit quia sed maiores.",
                "usage_en": "Laboriosam labore et et nostrum consequatur et. Rerum occaecati omnis omnis nemo culpa perferendis autem. Et blanditiis id eveniet id. Porro nesciunt rerum minus ullam error veniam.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?80461",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?76177",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?29738",
                "product_video": null,
                "status": 2,
                "rating": 7.66,
                "sold_count": 7482,
                "review_count": 8791,
                "created_at": "2020-08-12 21:41:44",
                "updated_at": "2020-08-11 23:48:37",
                "product_category": {
                    "id": 15,
                    "slug": "quia-et",
                    "title": "卸妆",
                    "title_en": "vitae eum a",
                    "describe": "Itaque voluptatem id velit voluptatem fuga. Aspernatur qui officia magnam amet ad atque. Placeat asperiores vitae culpa dolores ut voluptatum ut.",
                    "describe_en": "Sed sed quis culpa ut natus facilis. Voluptas illum excepturi aut maiores. Facilis dolores voluptates et non corporis. Quod eos impedit quisquam maxime.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?54461",
                    "description": "Culpa ducimus dolor quia aut iste occaecati.",
                    "description_en": "Magni eius expedita fugit quia commodi.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?34072",
                    "parent_id": 14,
                    "created_at": "2020-07-31 07:02:36",
                    "updated_at": "2020-08-01 12:17:28"
                }
            },
            {
                "id": 5,
                "product_category_id": 16,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "numquam qui voluptatum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?40705",
                "slug": "reiciendis-numquam",
                "short_description": "Aut consectetur sequi magnam ea nihil.",
                "short_description_en": "Est quo qui consequuntur voluptate facilis aut unde. Dolorem accusantium optio atque soluta. Incidunt voluptatem neque iste voluptatem reiciendis. Error quae quos qui et.",
                "price": "1944.00",
                "sale_price": "9560.00",
                "stock": 513,
                "spec": null,
                "seo_title": "consequatur quidem rerum",
                "seo_keyword": "ea",
                "seo_description": "Doloremque sapiente quasi nihil debitis.",
                "benefit": "Reprehenderit impedit similique repudiandae qui laboriosam eum pariatur quo. Illo quisquam et nihil id et sed tempora.",
                "benefit_en": "Voluptate aut iste qui. Eligendi aut ratione laborum mollitia ea. Voluptatum ut porro rem incidunt.",
                "tech_description": "Nobis aut excepturi id eum odio cumque odio quae. Officiis autem omnis repellat aperiam quis voluptatum. Et error ipsa dolor facilis. Adipisci voluptas facilis voluptatem dolorum.",
                "tech_description_en": "Quod ex autem in laudantium. Magni perspiciatis consequuntur doloribus. Veritatis distinctio expedita ad qui ea tempora.",
                "description": "Enim autem explicabo harum sapiente sunt impedit. Sed quasi sequi ut facilis ducimus. Ea repellat sapiente laboriosam. Sunt id reprehenderit delectus nostrum itaque voluptas.",
                "description_en": "Laboriosam rerum harum molestias ut expedita beatae. Soluta sapiente est dicta minus debitis eum.",
                "usage": "Est sint unde provident id maiores. Perferendis ea voluptatem repellendus est ut laudantium a. Fugit deleniti id ab et et non.",
                "usage_en": "Alias est tempora consequatur dolore explicabo impedit. Sapiente aut animi non necessitatibus rerum aperiam rem quia. Sit nulla harum et delectus. Rerum quas velit accusamus labore eligendi atque unde. Aut facilis est tempore totam perferendis.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?19270",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?43886",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?57435",
                "product_video": null,
                "status": 1,
                "rating": 3.25,
                "sold_count": 4077,
                "review_count": 9264,
                "created_at": "2020-07-22 03:59:03",
                "updated_at": "2020-07-29 12:21:12",
                "product_category": {
                    "id": 16,
                    "slug": "eos-qui",
                    "title": "隔离",
                    "title_en": "laudantium amet voluptas",
                    "describe": "Nemo impedit ipsam molestiae officia. Ipsam et laborum est reprehenderit reiciendis. Dolore magnam sunt et vel dolores.",
                    "describe_en": "Enim facilis assumenda possimus aut. Itaque error distinctio quos ducimus. Velit autem suscipit et quod laudantium. Optio autem assumenda iste quibusdam et quo.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?63852",
                    "description": "Quod cupiditate et rerum consequatur fuga.",
                    "description_en": "Quis odio exercitationem illo illum illo omnis.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?14534",
                    "parent_id": 20,
                    "created_at": "2020-07-23 09:50:22",
                    "updated_at": "2020-08-01 01:58:18"
                }
            },
            {
                "id": 6,
                "product_category_id": 20,
                "product_name": "黑钻肌光精华",
                "product_name_en": "et aliquam nihil",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?86801",
                "slug": "deleniti-quia",
                "short_description": "Deleniti aliquam distinctio hic a sit.",
                "short_description_en": "Repellat et et corrupti earum. A suscipit ut et dolor. Voluptates est vel explicabo occaecati error tempora molestiae.",
                "price": "6142.00",
                "sale_price": "4852.00",
                "stock": 663,
                "spec": null,
                "seo_title": "quo ut a",
                "seo_keyword": "explicabo",
                "seo_description": "Maiores et rerum qui aliquid dolor rerum.",
                "benefit": "Recusandae libero voluptates est eius. Assumenda enim minima eos eos praesentium explicabo reprehenderit dolores. Animi voluptatem saepe non nemo cum fugiat mollitia. Quo voluptatibus velit esse in laudantium. Iure aperiam dolorem beatae id.",
                "benefit_en": "Enim quas quas rerum dicta. Quos aliquam delectus placeat eaque et ullam. Et laboriosam dolores laboriosam est dolores aut qui. Tenetur architecto est ipsa deserunt voluptas voluptatem. Totam ut expedita modi et natus quod.",
                "tech_description": "Non praesentium cupiditate adipisci praesentium. Vel inventore voluptas est quia at perspiciatis. Eligendi cumque ad amet culpa commodi cum harum.",
                "tech_description_en": "Molestiae quis quis sed recusandae velit ut atque. Inventore consequatur iure possimus. Et quibusdam voluptatem culpa voluptatem. Tempore debitis voluptates rerum neque consequatur sit ea.",
                "description": "Perspiciatis voluptatibus at est nostrum inventore sapiente eaque. Esse libero deserunt doloribus et nesciunt illo. Autem ipsam ullam corrupti et id quasi. Dolor fugiat et nostrum ut cum distinctio commodi.",
                "description_en": "Enim dolores eaque velit in nostrum ad amet. Aperiam voluptates maiores a accusamus expedita. Deserunt minima temporibus reprehenderit exercitationem cum qui.",
                "usage": "Totam quis accusamus id optio nulla sed veritatis. Voluptas ipsa cumque qui corrupti qui quia ad. Dolores magnam tempore aspernatur.",
                "usage_en": "Velit et et aliquid molestiae est beatae voluptatem. Nostrum labore in libero ut. Similique recusandae accusamus et qui praesentium facere non. Libero quis veritatis et.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?77592",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?58710",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?29522",
                "product_video": null,
                "status": 2,
                "rating": 8.87,
                "sold_count": 3505,
                "review_count": 9028,
                "created_at": "2020-08-08 17:16:04",
                "updated_at": "2020-08-09 15:05:39",
                "product_category": {
                    "id": 20,
                    "slug": "quos-rem",
                    "title": "防晒",
                    "title_en": "reprehenderit commodi voluptas",
                    "describe": "Nisi occaecati est harum aliquam. Eos est neque aspernatur. Non dolor tempora aperiam reprehenderit fugiat et repudiandae consequatur.",
                    "describe_en": "Atque consectetur in et sed deserunt. Aspernatur voluptates voluptatem a deserunt sed voluptas. Ullam libero soluta ut rem.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?87863",
                    "description": "Omnis dolor est nobis rerum est.",
                    "description_en": "Cumque numquam iste aut ex architecto voluptatem.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?97172",
                    "parent_id": 11,
                    "created_at": "2020-08-17 12:18:30",
                    "updated_at": "2020-08-10 16:05:35"
                }
            },
            {
                "id": 7,
                "product_category_id": 9,
                "product_name": "黑钻焕肤水",
                "product_name_en": "perferendis cumque tenetur",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?76990",
                "slug": "omnis-voluptatem",
                "short_description": "Et quis debitis sed unde.",
                "short_description_en": "Iure dolore rerum ea veritatis minima. Quo libero expedita magnam nobis quaerat. Vel labore sit quia.",
                "price": "7713.00",
                "sale_price": "4948.00",
                "stock": 99,
                "spec": null,
                "seo_title": "delectus quam odio",
                "seo_keyword": "omnis",
                "seo_description": "A sapiente facere quos eius.",
                "benefit": "Distinctio iste natus qui laboriosam. Non ut culpa non similique nostrum esse. Incidunt temporibus aperiam vel dolorem dolorem. Mollitia ut vitae occaecati eaque sed incidunt accusantium. Ducimus qui ratione voluptatibus ipsam temporibus ex.",
                "benefit_en": "Voluptatum est illum provident aut id numquam. Quibusdam atque aut explicabo ut quos et esse. Facere eius est inventore non minus ipsum veniam.",
                "tech_description": "Qui accusantium commodi est quod inventore voluptatem eligendi. Autem natus rerum excepturi earum maxime asperiores. Dignissimos at in et.",
                "tech_description_en": "Quasi necessitatibus dicta sit qui fuga. Aut repellat nulla ex voluptas qui hic voluptatibus. Soluta hic facere aperiam magni.",
                "description": "Odio corporis laborum nemo quisquam. Dolorem nisi quo adipisci minima. Sint omnis repudiandae et enim ab voluptas ad laudantium. Dolorem sit unde ab soluta. Suscipit harum quia recusandae sequi est eos.",
                "description_en": "At enim omnis aliquam voluptatem et labore ex. Assumenda sunt eum saepe dolorem quisquam voluptate. Quae non eum at et et sed. Velit est maiores deserunt quaerat.",
                "usage": "Voluptate ullam vel vel omnis totam. Enim porro voluptatibus aut officiis. Vero est non aspernatur fugiat.",
                "usage_en": "Velit fugiat architecto iure perspiciatis dolor. Deserunt dolores optio voluptatem itaque doloribus facilis inventore laboriosam. Assumenda architecto natus omnis ut est soluta. Cupiditate totam voluptatem sunt illo.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?35005",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?16347",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?24782",
                "product_video": null,
                "status": 1,
                "rating": 7.3,
                "sold_count": 1690,
                "review_count": 7620,
                "created_at": "2020-08-18 10:26:25",
                "updated_at": "2020-08-16 21:01:44",
                "product_category": {
                    "id": 9,
                    "slug": "voluptatem-sed",
                    "title": "爽肤水",
                    "title_en": "ad aperiam ad",
                    "describe": "Ea quisquam quo voluptatibus molestiae. Commodi ut est quia est voluptas. Earum ea facilis ipsam rerum et natus et. Dolor ab quo eligendi iusto omnis illo officiis. Qui esse unde ipsam harum qui et.",
                    "describe_en": "Harum et ducimus ex ipsum. Nam nihil rerum eius at aut qui ad.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?95380",
                    "description": "Nesciunt praesentium ut ut magnam.",
                    "description_en": "Adipisci beatae odio voluptatibus in nam hic.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?33226",
                    "parent_id": 15,
                    "created_at": "2020-07-25 08:00:17",
                    "updated_at": "2020-08-11 12:08:50"
                }
            },
            {
                "id": 8,
                "product_category_id": 1,
                "product_name": "黑钻焕肤水",
                "product_name_en": "quo debitis dolorem",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?97020",
                "slug": "vero-odio",
                "short_description": "Id iusto sapiente rerum et eum.",
                "short_description_en": "Enim rerum aliquid asperiores praesentium voluptatibus. Esse totam aut occaecati pariatur aspernatur. Mollitia sapiente dignissimos porro molestias voluptas alias laborum. Eius quasi laudantium sequi error sint. Modi est id est delectus dolor eaque similique quis.",
                "price": "2778.00",
                "sale_price": "7416.00",
                "stock": 67,
                "spec": null,
                "seo_title": "sed magnam iure",
                "seo_keyword": "voluptatem",
                "seo_description": "Modi voluptatibus expedita voluptate.",
                "benefit": "Temporibus magni mollitia eligendi et quis non velit. Excepturi vitae possimus voluptates ratione nobis et. Mollitia et et fugiat qui occaecati.",
                "benefit_en": "Nesciunt accusamus deleniti labore laborum et impedit. Consequatur eius quos sint ad consectetur eum. Facilis provident laudantium vitae quae blanditiis enim.",
                "tech_description": "Autem aut totam doloremque autem tempore veniam ea vel. Inventore ipsum reprehenderit reiciendis consequatur. Sequi minus dolorem qui dolores.",
                "tech_description_en": "Libero voluptatem et vel quaerat velit porro laborum veritatis. Qui nihil vero reiciendis. Vero voluptas possimus dolorem sed.",
                "description": "Voluptas qui qui dolor. Provident dignissimos modi suscipit et. Non est et velit consequatur sunt.",
                "description_en": "Explicabo doloribus repellendus labore veritatis libero nesciunt sequi ad. Vel explicabo fugiat aut corporis. Et aliquam aut optio ipsa itaque qui et. Quia voluptatem voluptatem maiores inventore.",
                "usage": "Quis reiciendis ad quis. Voluptatem voluptatibus aut laboriosam maxime. Aspernatur iste maxime ipsum at aperiam eveniet.",
                "usage_en": "Porro sunt qui similique laborum iure quas nemo cum. Occaecati deserunt fugiat eligendi. Quidem et debitis quia. Nemo omnis eveniet enim sit. Numquam nostrum ut reiciendis ab.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?96220",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?58314",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?68599",
                "product_video": null,
                "status": 2,
                "rating": 0.83,
                "sold_count": 8432,
                "review_count": 5399,
                "created_at": "2020-08-08 06:00:37",
                "updated_at": "2020-08-09 09:40:35",
                "product_category": {
                    "id": 1,
                    "slug": "similique-natus",
                    "title": "面膜",
                    "title_en": "eveniet et saepe",
                    "describe": "Reiciendis ipsum sint et necessitatibus officiis vel. Eaque culpa autem velit est. Aliquam id nihil fuga dicta ut dolores.",
                    "describe_en": "Ea aperiam dolores temporibus distinctio. Repellat molestias asperiores quae ipsa et facilis. Blanditiis magni aut architecto illo quos dolorum blanditiis error.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?84160",
                    "description": "Voluptas enim est autem vero vel.",
                    "description_en": "Vero exercitationem hic in molestias cumque reiciendis.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?88060",
                    "parent_id": 12,
                    "created_at": "2020-08-21 11:05:32",
                    "updated_at": "2020-08-01 23:32:02"
                }
            },
            {
                "id": 9,
                "product_category_id": 14,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "reiciendis exercitationem possimus",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?19819",
                "slug": "quaerat-quis",
                "short_description": "Odit sit quidem dolorum cum aliquid modi.",
                "short_description_en": "Vel quaerat perferendis ipsam et sint expedita. Est quo ut nisi quis rem. Qui iste non perferendis voluptatibus ipsam eius.",
                "price": "5488.00",
                "sale_price": "647.00",
                "stock": 534,
                "spec": null,
                "seo_title": "aliquid tenetur ab",
                "seo_keyword": "consectetur",
                "seo_description": "Id deleniti repellat rerum.",
                "benefit": "Nam ipsa et ea dolor sed eius. Dolor provident rem hic sed sunt molestias. Ab omnis accusamus fugiat non. Adipisci magnam libero amet quia.",
                "benefit_en": "Voluptatem cupiditate nostrum asperiores occaecati optio. Tenetur corrupti amet est doloribus molestiae impedit eos.",
                "tech_description": "Quia et unde ducimus doloribus molestias alias. Non labore earum incidunt eos. Non dolor animi quaerat provident repudiandae et. Et quo doloribus est eum totam. Accusamus pariatur minus ipsa fuga dolorum veniam velit iure.",
                "tech_description_en": "Totam sit reiciendis temporibus quisquam est sed. Quisquam possimus libero et possimus. Minus ullam dolores iusto rerum in deleniti accusantium voluptas. Dignissimos fuga ad ea.",
                "description": "Aut occaecati nihil pariatur sed commodi et minus. Mollitia necessitatibus ut aut dolor asperiores et. Soluta in ut aliquid eligendi exercitationem sint culpa.",
                "description_en": "Repellat nam est dolores ipsa quia at sit. Odit veritatis ut possimus alias sunt. Et recusandae voluptatem illum saepe iure ex.",
                "usage": "Quo sequi tempora consequatur nam. Ut minima quisquam quod sed. Ratione enim sint sit corporis. Autem voluptates consequuntur tenetur voluptatem et quasi dolores aut.",
                "usage_en": "Nostrum aliquam fugit labore dolore qui. Ducimus ipsa rerum facilis. Aut aperiam ut alias consequatur ipsam placeat tenetur.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?38616",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?70198",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?57300",
                "product_video": null,
                "status": 1,
                "rating": 9.91,
                "sold_count": 9506,
                "review_count": 6237,
                "created_at": "2020-07-21 17:32:39",
                "updated_at": "2020-08-20 05:31:47",
                "product_category": {
                    "id": 14,
                    "slug": "voluptates-aliquam",
                    "title": "香水",
                    "title_en": "saepe aut ipsum",
                    "describe": "Amet id sint voluptatem possimus molestias. Qui et tempore ut nobis quia. Et quia mollitia in tempora consequatur.",
                    "describe_en": "Aut fuga reiciendis et necessitatibus error ut. Sed tenetur cum voluptates tenetur accusamus eius perferendis. Odio vitae cumque ut ut possimus iure.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?37438",
                    "description": "Labore omnis ducimus quasi qui.",
                    "description_en": "Quisquam autem exercitationem eaque.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?95194",
                    "parent_id": 18,
                    "created_at": "2020-08-13 03:06:48",
                    "updated_at": "2020-08-04 04:18:34"
                }
            },
            {
                "id": 10,
                "product_category_id": 20,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "qui dolor et",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?19144",
                "slug": "nisi-dolorem",
                "short_description": "Quisquam vel nulla et.",
                "short_description_en": "Suscipit occaecati velit sunt aperiam consequatur iste voluptatem. Vel quia voluptas vel in et dolores eos. Exercitationem suscipit maxime corporis magnam velit beatae.",
                "price": "2970.00",
                "sale_price": "8694.00",
                "stock": 977,
                "spec": null,
                "seo_title": "voluptatem quis et",
                "seo_keyword": "quia",
                "seo_description": "Facilis non reprehenderit et.",
                "benefit": "Magni alias enim eos possimus. Deserunt qui iure eos similique enim illo. Et esse voluptatem animi dolorum molestiae minus nulla.",
                "benefit_en": "Neque quidem repudiandae corrupti enim sunt quam ullam. Vitae consequuntur quaerat quia in est. Animi omnis neque quidem eligendi. Quia harum a sit neque aliquid qui.",
                "tech_description": "Laborum molestias iste at ut ut eligendi possimus. Et officiis eum mollitia voluptatibus veniam. Consequuntur nobis tempora officia est soluta voluptatem.",
                "tech_description_en": "Aut ullam enim illo distinctio quia. At est voluptate nihil nam et qui earum debitis. Consequatur consequatur excepturi consequatur nemo assumenda eaque a. Voluptas fugit sed odit et.",
                "description": "Quia ut laudantium soluta officiis odio ut. Non possimus culpa cumque. Assumenda porro reprehenderit dolores molestias ab totam et. Qui et voluptas consectetur laudantium optio voluptatem laboriosam maiores.",
                "description_en": "Quo sed laudantium consequuntur qui in. Aut aperiam nisi eum sit nulla expedita. Rerum perspiciatis quas est facere.",
                "usage": "Non soluta assumenda blanditiis dolor cum assumenda. Et mollitia ad ratione quibusdam. Vel reiciendis sed sed commodi. Animi eum quibusdam quaerat velit.",
                "usage_en": "Qui quas aliquid dignissimos eaque debitis. Placeat et id omnis vero ea. Adipisci non dolores inventore qui.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?41745",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?27763",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?51436",
                "product_video": null,
                "status": 1,
                "rating": 8.02,
                "sold_count": 4969,
                "review_count": 2199,
                "created_at": "2020-07-27 10:35:17",
                "updated_at": "2020-07-24 23:37:31",
                "product_category": {
                    "id": 20,
                    "slug": "quos-rem",
                    "title": "防晒",
                    "title_en": "reprehenderit commodi voluptas",
                    "describe": "Nisi occaecati est harum aliquam. Eos est neque aspernatur. Non dolor tempora aperiam reprehenderit fugiat et repudiandae consequatur.",
                    "describe_en": "Atque consectetur in et sed deserunt. Aspernatur voluptates voluptatem a deserunt sed voluptas. Ullam libero soluta ut rem.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?87863",
                    "description": "Omnis dolor est nobis rerum est.",
                    "description_en": "Cumque numquam iste aut ex architecto voluptatem.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?97172",
                    "parent_id": 11,
                    "created_at": "2020-08-17 12:18:30",
                    "updated_at": "2020-08-10 16:05:35"
                }
            },
            {
                "id": 11,
                "product_category_id": 12,
                "product_name": "黑钻肌光精华",
                "product_name_en": "ratione laudantium ad",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?74889",
                "slug": "reprehenderit-reprehenderit",
                "short_description": "Facere et voluptatem velit doloribus libero inventore totam.",
                "short_description_en": "Dolorem corporis blanditiis voluptas minus ut. Quis molestias minus nisi. Laborum explicabo eum qui placeat numquam. Labore excepturi facilis rerum dolor veniam quia sit.",
                "price": "9970.00",
                "sale_price": "558.00",
                "stock": 9,
                "spec": null,
                "seo_title": "ut mollitia magnam",
                "seo_keyword": "reprehenderit",
                "seo_description": "Dicta et reiciendis repudiandae sapiente ut.",
                "benefit": "Expedita et facilis rem voluptas. Veniam tempora quasi omnis fugit natus ut iusto. Natus nesciunt voluptas explicabo illum.",
                "benefit_en": "Pariatur at quam necessitatibus non facilis eius molestiae. Aut ut iure eius sequi quam qui. Culpa sint iusto velit harum blanditiis perspiciatis ut vel. Illo vel quas neque numquam quae. Neque quis a ipsam qui.",
                "tech_description": "Occaecati quia est quae atque illum. Occaecati fugit esse ut assumenda accusantium. Deleniti cum quia delectus reprehenderit. Nostrum velit incidunt eos et.",
                "tech_description_en": "Molestias error repellendus dolore veniam modi sunt. Ipsam et aut aut quibusdam dolorum accusantium non. Nihil maiores id ullam blanditiis commodi eum.",
                "description": "Commodi et unde dolorem quia molestias quam. Nulla aut neque voluptate alias pariatur aut. Enim distinctio ipsum sit ipsa.",
                "description_en": "Eum quo accusantium explicabo optio cum esse qui amet. Aut et nulla molestias repellendus esse inventore. Autem iusto quia esse necessitatibus nostrum.",
                "usage": "Dolorem autem quo delectus dolores nemo porro. Voluptate illo est natus. Et ut sapiente sit nobis rerum.",
                "usage_en": "Molestias ea sed suscipit tempore sapiente. Recusandae repellat a maiores ut.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?11394",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?24622",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?15555",
                "product_video": null,
                "status": 2,
                "rating": 3.95,
                "sold_count": 8764,
                "review_count": 6469,
                "created_at": "2020-08-08 15:20:29",
                "updated_at": "2020-07-24 13:12:28",
                "product_category": {
                    "id": 12,
                    "slug": "sunt-modi",
                    "title": "面膜",
                    "title_en": "voluptatibus eum veniam",
                    "describe": "Dolorum aliquam quia temporibus quia. Fugit similique et illum porro numquam et nobis magni. Necessitatibus nihil perspiciatis qui dolor et qui. Est illo accusantium quisquam omnis.",
                    "describe_en": "Et non ut rerum. Animi repudiandae ex rerum nihil nobis qui harum.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?95986",
                    "description": "Aut debitis ut excepturi non laudantium.",
                    "description_en": "Nostrum aut ea quis et.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?92786",
                    "parent_id": 9,
                    "created_at": "2020-08-04 11:55:39",
                    "updated_at": "2020-08-01 18:24:56"
                }
            },
            {
                "id": 12,
                "product_category_id": 10,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "expedita sed error",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?95572",
                "slug": "incidunt-consectetur",
                "short_description": "Aut deserunt exercitationem voluptatem praesentium.",
                "short_description_en": "Ratione ea laboriosam consequatur dolorem quo. Commodi est consequuntur numquam. Ipsam eum et velit.",
                "price": "6807.00",
                "sale_price": "5290.00",
                "stock": 944,
                "spec": null,
                "seo_title": "quibusdam velit consequatur",
                "seo_keyword": "vitae",
                "seo_description": "Eius amet animi repudiandae.",
                "benefit": "Distinctio consequuntur officiis repellendus qui quia. Aperiam aliquid ad mollitia quidem et rem. Reprehenderit enim ratione ipsum voluptatem quae omnis est in.",
                "benefit_en": "Eum eligendi asperiores inventore voluptas et voluptas voluptatem. Provident aut labore soluta ut officiis. Est occaecati ut dolor quibusdam quam.",
                "tech_description": "Voluptas reiciendis id et nam consequatur. Iste odit omnis et voluptas. Praesentium ab incidunt aut asperiores sequi. Eos quo a rerum occaecati.",
                "tech_description_en": "Atque tenetur quia qui et ut quia. Omnis voluptate in quis. Unde aut ex maxime.",
                "description": "Minus et culpa quasi quo atque et sequi. Quidem commodi aut rem eos. Dolorem expedita voluptatem et voluptate eligendi magni quaerat. Ut et laborum cupiditate est repudiandae aperiam.",
                "description_en": "Quia molestiae vitae ipsam repellat et iusto. Culpa minima minus ducimus facere consectetur molestiae fugit ratione. Qui sit qui molestias. Rerum delectus vel ducimus neque.",
                "usage": "Dolores deleniti illum dolorem nemo iste id. Itaque repellendus sit nihil ullam quis et. Ea incidunt reprehenderit aut earum dignissimos laudantium non.",
                "usage_en": "Enim mollitia sint aut reprehenderit. Quis ipsa voluptatum autem accusantium qui et nihil. Expedita aspernatur aut accusantium eaque. Sit eum quo eaque expedita.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?27684",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?94108",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?87309",
                "product_video": null,
                "status": 3,
                "rating": 7.97,
                "sold_count": 9838,
                "review_count": 2757,
                "created_at": "2020-07-22 02:04:43",
                "updated_at": "2020-07-23 06:34:01",
                "product_category": {
                    "id": 10,
                    "slug": "reprehenderit-tempora",
                    "title": "精华",
                    "title_en": "explicabo animi ducimus",
                    "describe": "Ullam reiciendis ea nesciunt voluptatem rerum vitae. Distinctio quia sequi ex nemo numquam nulla rerum. Laboriosam aut et at et. Deleniti et commodi reprehenderit sed praesentium eos est.",
                    "describe_en": "Et culpa quia saepe consequatur quam autem. Ad iste eius aut voluptatem repellat. Quaerat dolores voluptatibus ut suscipit.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?83128",
                    "description": "Deleniti dolores quasi consequatur itaque accusamus ullam vel.",
                    "description_en": "Cumque nam tempore voluptas voluptas.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?40429",
                    "parent_id": 10,
                    "created_at": "2020-08-05 12:33:24",
                    "updated_at": "2020-08-16 07:01:16"
                }
            },
            {
                "id": 13,
                "product_category_id": 7,
                "product_name": "钻石焕活面膜",
                "product_name_en": "possimus iste tempore",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?57574",
                "slug": "quae-deleniti",
                "short_description": "Occaecati quos aspernatur corporis ut.",
                "short_description_en": "Rerum pariatur ea quidem repudiandae voluptas aut aut aperiam. Illum maiores similique distinctio qui totam eos est. Ipsa ea harum et quos provident quia quam.",
                "price": "7.00",
                "sale_price": "6476.00",
                "stock": 702,
                "spec": null,
                "seo_title": "velit est enim",
                "seo_keyword": "doloribus",
                "seo_description": "Rerum ducimus error et nemo.",
                "benefit": "Omnis eligendi voluptatem hic ducimus voluptatibus cumque. Iste quam tempore qui eligendi corrupti debitis ut. Sunt quia nobis ducimus. Totam et dolores sit laboriosam voluptatem. Iure eum consequatur architecto.",
                "benefit_en": "Totam molestias quis sit quae facere. Repellat optio qui et alias neque. Quo nam et ab non maxime nesciunt recusandae. In cumque fugiat corporis sint.",
                "tech_description": "Ut vitae similique fugit voluptatem. Aspernatur libero est explicabo impedit quasi et.",
                "tech_description_en": "Recusandae blanditiis quasi corporis et. Consequatur facilis laboriosam aut. Recusandae non temporibus architecto dolore ab.",
                "description": "Cumque dignissimos modi temporibus amet. Repellat ea aut adipisci saepe expedita. Asperiores voluptatem est sed qui vitae. Est est officiis at unde nihil ea dolore repellendus.",
                "description_en": "Amet qui minus enim consequatur et dolorem. Ut et rerum dignissimos consequatur sint possimus architecto. Esse est commodi possimus ut aut aut esse aperiam. Quidem possimus voluptatem eligendi illo.",
                "usage": "Vel mollitia adipisci voluptate iste aut non vero. Enim molestiae sed cum dolores non accusamus vel. Nemo quis nihil quam porro neque.",
                "usage_en": "Amet omnis illum id illum ab placeat. Blanditiis nostrum provident cum voluptatem dicta voluptatem similique. Hic et dignissimos natus minus qui.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?66306",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?53500",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?12642",
                "product_video": null,
                "status": 3,
                "rating": 6.49,
                "sold_count": 5905,
                "review_count": 2501,
                "created_at": "2020-08-19 10:39:31",
                "updated_at": "2020-07-28 03:52:51",
                "product_category": {
                    "id": 7,
                    "slug": "atque-voluptas",
                    "title": "精油",
                    "title_en": "optio adipisci blanditiis",
                    "describe": "Velit consequatur perspiciatis doloremque reiciendis quo. Et sit consequuntur aut libero. Recusandae asperiores et laudantium non.",
                    "describe_en": "Et voluptas adipisci voluptas distinctio error. Et sequi magnam libero est adipisci placeat reprehenderit dolorem. Ipsa iure quia optio porro est aspernatur.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?20173",
                    "description": "Nemo nisi distinctio possimus est.",
                    "description_en": "Vero maxime laboriosam quia impedit nam vel.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?48867",
                    "parent_id": 11,
                    "created_at": "2020-07-30 23:51:10",
                    "updated_at": "2020-07-21 15:41:09"
                }
            },
            {
                "id": 14,
                "product_category_id": 9,
                "product_name": "黑钻焕肤水",
                "product_name_en": "alias dicta aliquam",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?30907",
                "slug": "cumque-id",
                "short_description": "Magnam numquam incidunt hic.",
                "short_description_en": "Blanditiis odit in est repudiandae maiores. Aut consectetur quae quo dolor quia provident. Molestias ipsa accusamus cumque aut rerum atque. In fuga reiciendis omnis iste aut et.",
                "price": "3833.00",
                "sale_price": "598.00",
                "stock": 723,
                "spec": null,
                "seo_title": "veritatis eos sed",
                "seo_keyword": "nostrum",
                "seo_description": "Vel laudantium dolorem eveniet est et.",
                "benefit": "Autem quia voluptatem nisi illo ex qui qui. Sed aut voluptatem consectetur dicta. Velit aliquam tempora possimus aut dolorem libero maxime quo. In et iusto doloremque at quo. Quia et voluptas rem est nobis.",
                "benefit_en": "Amet dignissimos nemo in aut quae in sit. Nisi eaque dolorem molestias. Aliquid maiores velit rem. Et nihil laboriosam ad ratione maxime.",
                "tech_description": "Deserunt animi id cum sint perferendis quia soluta et. Quae inventore aliquid voluptas magni. Iste placeat nihil consequatur ut ex facere.",
                "tech_description_en": "Laudantium sed debitis ex et dolorum reiciendis nihil. A voluptatibus id beatae voluptas dolorem. Explicabo et quidem sit mollitia adipisci libero deserunt.",
                "description": "Ut aut fuga dolor quae architecto aliquid. Culpa reiciendis corporis a qui modi iste. Ut nihil aut nulla molestias.",
                "description_en": "Voluptas est non cupiditate architecto quae amet ut. Odit eaque consequatur vitae quis eum reprehenderit ut. Et omnis odit unde tenetur odio architecto aliquam. Voluptatibus et adipisci dolorem ratione ut fugit.",
                "usage": "Nobis cumque aut a laborum illo in ea. Officia est officiis velit dolorem voluptas eum. Quas eum quibusdam voluptatibus eos. Esse dolorum dicta possimus ullam quia.",
                "usage_en": "Qui modi tempora odit ea similique modi. Eum ipsa nihil nemo aliquid qui. Iusto facere quisquam qui ut iste aspernatur quo animi.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?33270",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?40216",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?31220",
                "product_video": null,
                "status": 1,
                "rating": 9.96,
                "sold_count": 1863,
                "review_count": 3815,
                "created_at": "2020-07-27 06:44:34",
                "updated_at": "2020-08-13 06:52:52",
                "product_category": {
                    "id": 9,
                    "slug": "voluptatem-sed",
                    "title": "爽肤水",
                    "title_en": "ad aperiam ad",
                    "describe": "Ea quisquam quo voluptatibus molestiae. Commodi ut est quia est voluptas. Earum ea facilis ipsam rerum et natus et. Dolor ab quo eligendi iusto omnis illo officiis. Qui esse unde ipsam harum qui et.",
                    "describe_en": "Harum et ducimus ex ipsum. Nam nihil rerum eius at aut qui ad.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?95380",
                    "description": "Nesciunt praesentium ut ut magnam.",
                    "description_en": "Adipisci beatae odio voluptatibus in nam hic.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?33226",
                    "parent_id": 15,
                    "created_at": "2020-07-25 08:00:17",
                    "updated_at": "2020-08-11 12:08:50"
                }
            },
            {
                "id": 15,
                "product_category_id": 2,
                "product_name": "黑钻肌光精华",
                "product_name_en": "commodi eum et",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?83412",
                "slug": "culpa-minima",
                "short_description": "Consectetur quia porro ullam minus repellendus.",
                "short_description_en": "Sit laboriosam mollitia repellendus aut et deleniti ipsum. Doloribus non culpa quas esse est nemo magni dolorum. Provident fugiat assumenda quo officiis nesciunt.",
                "price": "8645.00",
                "sale_price": "7499.00",
                "stock": 811,
                "spec": null,
                "seo_title": "temporibus tempora ut",
                "seo_keyword": "quod",
                "seo_description": "Sit corrupti architecto eveniet aut.",
                "benefit": "Quam asperiores molestiae maxime aspernatur. A earum aspernatur officiis optio ex incidunt. Eligendi eos porro voluptatem provident nihil quas. Et rerum et voluptatem est.",
                "benefit_en": "Aliquam rerum magnam amet laborum quibusdam earum iste. Et nostrum labore et nesciunt cumque. Aperiam doloribus deserunt deleniti commodi. Animi enim commodi placeat provident.",
                "tech_description": "Ea inventore ad quas laboriosam possimus. Veniam omnis nostrum reiciendis quia voluptates nam minus ut. Nihil autem laudantium praesentium iusto voluptatem itaque sit. Esse consectetur porro illum aut.",
                "tech_description_en": "Officiis fugit et voluptatem id odio. Nihil facilis vero delectus ipsam. Voluptatem tempore cumque delectus iste dolor.",
                "description": "Cupiditate et et rerum numquam. Deserunt quia iure saepe eos id aut iusto. Tenetur quo et sunt et asperiores expedita.",
                "description_en": "Repudiandae ut aliquam molestias qui porro. Provident molestias fugit ea quis corrupti numquam pariatur. Enim aspernatur rerum temporibus facilis optio cupiditate ipsa et.",
                "usage": "Sequi numquam praesentium aliquam neque. Repellendus non dolor nobis laudantium repellendus assumenda minus vel.",
                "usage_en": "Voluptates et aliquid consequatur. Maiores harum aut quia possimus cum. Perferendis beatae dignissimos ea dolore ex culpa dolor. Consectetur dolor molestiae alias unde dolores.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?94133",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?56173",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?38462",
                "product_video": null,
                "status": 3,
                "rating": 0.14,
                "sold_count": 2135,
                "review_count": 2603,
                "created_at": "2020-08-04 20:38:14",
                "updated_at": "2020-08-18 20:44:25",
                "product_category": {
                    "id": 2,
                    "slug": "soluta-officia",
                    "title": "唇膏",
                    "title_en": "dignissimos natus accusantium",
                    "describe": "Sit enim quos debitis rem. Ipsum qui sint in pariatur eius porro est eveniet. Fugiat odio et cumque inventore eos qui autem.",
                    "describe_en": "Consectetur accusantium porro sunt eum pariatur. Aut sapiente sint vel autem quos maiores. Dolor ratione asperiores quo omnis quis. Rem laudantium et consequatur dolore at non dolor.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?72707",
                    "description": "Sed debitis repellendus ut eligendi perspiciatis.",
                    "description_en": "Rem nemo tenetur et et ipsa.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?90026",
                    "parent_id": 15,
                    "created_at": "2020-08-02 05:13:56",
                    "updated_at": "2020-07-22 18:57:32"
                }
            },
            {
                "id": 16,
                "product_category_id": 14,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "nostrum itaque qui",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?65674",
                "slug": "ipsa-rerum",
                "short_description": "Molestiae rerum est quam.",
                "short_description_en": "Est aut quaerat eligendi enim autem dolores quo. Esse at sit beatae reprehenderit. Rerum harum ipsum consectetur molestias aut eos asperiores. Quis quidem qui id dolor.",
                "price": "356.00",
                "sale_price": "5766.00",
                "stock": 394,
                "spec": null,
                "seo_title": "qui et eum",
                "seo_keyword": "deleniti",
                "seo_description": "Et fuga numquam ipsum amet veniam.",
                "benefit": "Perferendis deleniti fugit voluptatibus dolore et reiciendis qui sit. Et quidem quasi officia expedita illo delectus quo.",
                "benefit_en": "Molestiae iure officia quia eos. Soluta et nihil quos eos quis est. Sed dolore ducimus mollitia. Error earum ullam corporis est rerum cum mollitia. Voluptatum amet facilis officia est et dicta.",
                "tech_description": "Consequatur corrupti et corporis iure voluptates. Excepturi velit ad provident. Odio officiis omnis eaque enim doloribus. Sit saepe aperiam doloribus inventore possimus quasi. Labore nisi qui iure qui.",
                "tech_description_en": "Aliquid est eos officia velit reprehenderit. Et similique debitis modi a.",
                "description": "Porro quasi odio qui voluptas est officia necessitatibus. Odio repellat consequatur eos et enim doloremque. Voluptas tempore veritatis aut molestiae praesentium cum neque eaque.",
                "description_en": "Enim dolorem eligendi veritatis quidem aut architecto voluptas enim. Soluta dolores aut quia quo. Pariatur sit deserunt pariatur dolorum culpa. Voluptate modi perspiciatis rerum nostrum mollitia.",
                "usage": "Corrupti facere quia rerum velit quo occaecati omnis. Iusto ut maiores molestiae aut. Voluptate tenetur necessitatibus quaerat iste aut quibusdam libero. Similique repudiandae sint qui quos cumque rem illum.",
                "usage_en": "Cupiditate quia numquam laboriosam consectetur veritatis molestias voluptates. Iste voluptates dolores qui ut. Eos unde dolor molestias repudiandae.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?58677",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?62382",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?60197",
                "product_video": null,
                "status": 2,
                "rating": 2.46,
                "sold_count": 6748,
                "review_count": 6728,
                "created_at": "2020-07-23 13:49:50",
                "updated_at": "2020-08-06 08:51:02",
                "product_category": {
                    "id": 14,
                    "slug": "voluptates-aliquam",
                    "title": "香水",
                    "title_en": "saepe aut ipsum",
                    "describe": "Amet id sint voluptatem possimus molestias. Qui et tempore ut nobis quia. Et quia mollitia in tempora consequatur.",
                    "describe_en": "Aut fuga reiciendis et necessitatibus error ut. Sed tenetur cum voluptates tenetur accusamus eius perferendis. Odio vitae cumque ut ut possimus iure.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?37438",
                    "description": "Labore omnis ducimus quasi qui.",
                    "description_en": "Quisquam autem exercitationem eaque.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?95194",
                    "parent_id": 18,
                    "created_at": "2020-08-13 03:06:48",
                    "updated_at": "2020-08-04 04:18:34"
                }
            },
            {
                "id": 17,
                "product_category_id": 19,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "architecto eligendi ut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?44241",
                "slug": "eos-quisquam",
                "short_description": "Ex quae harum aliquam autem ad.",
                "short_description_en": "Iusto laborum odio voluptas. Vitae soluta non fugit ullam. Accusantium voluptatem modi veniam odio.",
                "price": "5106.00",
                "sale_price": "6655.00",
                "stock": 972,
                "spec": null,
                "seo_title": "praesentium deserunt non",
                "seo_keyword": "ipsum",
                "seo_description": "Qui esse sequi dolorem aut excepturi.",
                "benefit": "Optio et aut laboriosam nihil ratione eaque error esse. Sint modi quod optio quia officia est officia. Occaecati vel dolores ut dolor aliquid quidem minima. Aut esse et consequatur nostrum officiis accusantium.",
                "benefit_en": "Facilis optio et et dignissimos laudantium aspernatur. Eos modi voluptates atque laudantium qui. Sint id perferendis sunt porro ad culpa.",
                "tech_description": "Itaque et atque blanditiis voluptas ab. Illo rem nisi necessitatibus ut. Non impedit deleniti nobis qui in maiores non. Nam et ullam debitis occaecati.",
                "tech_description_en": "Et ipsum aliquam qui ad eligendi nihil debitis. Rem nesciunt expedita id dignissimos at. Omnis vel et fugit ut temporibus soluta consequuntur architecto.",
                "description": "Iure assumenda est veritatis quam quibusdam tempora magni. Quis aut labore qui molestias eligendi aspernatur ipsam.",
                "description_en": "Voluptatum et quae autem vitae sunt. Eius explicabo illum incidunt dicta aut officia et. Inventore suscipit est debitis corporis quo cupiditate.",
                "usage": "Sint quam tempore voluptatibus ut. Est voluptate hic sed exercitationem quis quo. Provident esse praesentium praesentium et nobis vel quo. Nisi at quod nam debitis optio. Cum repellat ex qui cumque suscipit et et.",
                "usage_en": "Fugit hic architecto nostrum praesentium quis quibusdam expedita nulla. Et animi consequuntur laborum quod esse commodi. Iste et aperiam quam. Voluptatum accusantium laudantium non sit accusamus fuga.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?85320",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?98039",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?65195",
                "product_video": null,
                "status": 3,
                "rating": 8.86,
                "sold_count": 1345,
                "review_count": 9139,
                "created_at": "2020-08-06 11:45:27",
                "updated_at": "2020-08-10 12:56:27",
                "product_category": {
                    "id": 19,
                    "slug": "cumque-nobis",
                    "title": "卸妆",
                    "title_en": "occaecati illum voluptatem",
                    "describe": "Sed dolor repellendus asperiores qui magni autem. Autem earum enim iste quos rerum nihil rerum. Perferendis placeat voluptatibus velit architecto.",
                    "describe_en": "Quos iste quaerat est. Voluptatem quasi est quo quis eos facilis. Minus aliquam enim dolor dolores.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?71682",
                    "description": "Ipsum optio officia et voluptas repellat.",
                    "description_en": "Eos est et quis nisi praesentium.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?87552",
                    "parent_id": 17,
                    "created_at": "2020-08-13 13:12:12",
                    "updated_at": "2020-07-27 01:48:06"
                }
            },
            {
                "id": 18,
                "product_category_id": 9,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "voluptas voluptatem sunt",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?96428",
                "slug": "dolor-veniam",
                "short_description": "Neque rem sit aliquam tempore vitae dolor.",
                "short_description_en": "Rerum dolores nulla aut eveniet. Aut consequatur voluptates sint qui et. Voluptate voluptatem tempora et et vero et.",
                "price": "2479.00",
                "sale_price": "6528.00",
                "stock": 321,
                "spec": null,
                "seo_title": "sapiente sit veniam",
                "seo_keyword": "velit",
                "seo_description": "Sapiente libero magni reiciendis ex.",
                "benefit": "Necessitatibus placeat doloribus repellendus qui et occaecati et. Perferendis ut optio optio natus animi. Qui fuga sint neque consequatur ratione. Consequuntur consequatur dolor molestiae veritatis aut quisquam. Distinctio quaerat fugiat amet reprehenderit.",
                "benefit_en": "Aliquid ut pariatur aut temporibus qui. Aut in animi facilis sit soluta illum temporibus. Nisi minima ipsa sed mollitia nesciunt quo. Qui velit iure quis nam provident maxime magni.",
                "tech_description": "Quasi aut et qui repellendus corporis. Voluptatem laboriosam qui doloribus sit sint blanditiis aut. Veritatis ut necessitatibus vel enim repudiandae dolorum quas.",
                "tech_description_en": "Et excepturi ut itaque reprehenderit est itaque sapiente dolorum. Tempore voluptatibus voluptatibus quo impedit voluptatem placeat. Dolor voluptas quia eveniet itaque. Vel officiis officia inventore nulla sunt. Dicta ea ea sed odit odio similique.",
                "description": "Quae expedita possimus amet in expedita aut. Suscipit voluptatum consequuntur magni esse voluptatibus. Voluptas esse et aperiam ut. Nisi impedit voluptates quam ea voluptas sequi quisquam.",
                "description_en": "Debitis at est aut autem enim explicabo excepturi. Quasi repellendus optio porro error. Cumque incidunt aut ut laudantium voluptatum autem.",
                "usage": "Voluptates velit sequi similique enim. Omnis tenetur laborum provident neque aut non commodi. Quos quia aut et sequi earum esse voluptas unde.",
                "usage_en": "Eveniet corporis ab consequatur velit quas officia eos in. Aspernatur possimus alias et excepturi porro tempora. Est sit voluptas dolorem cupiditate voluptatum rem. Qui ut distinctio quia. Fugit est deleniti exercitationem adipisci unde explicabo.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?94722",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?26666",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?27972",
                "product_video": null,
                "status": 1,
                "rating": 4.78,
                "sold_count": 6278,
                "review_count": 2398,
                "created_at": "2020-07-30 04:30:00",
                "updated_at": "2020-08-07 16:43:30",
                "product_category": {
                    "id": 9,
                    "slug": "voluptatem-sed",
                    "title": "爽肤水",
                    "title_en": "ad aperiam ad",
                    "describe": "Ea quisquam quo voluptatibus molestiae. Commodi ut est quia est voluptas. Earum ea facilis ipsam rerum et natus et. Dolor ab quo eligendi iusto omnis illo officiis. Qui esse unde ipsam harum qui et.",
                    "describe_en": "Harum et ducimus ex ipsum. Nam nihil rerum eius at aut qui ad.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?95380",
                    "description": "Nesciunt praesentium ut ut magnam.",
                    "description_en": "Adipisci beatae odio voluptatibus in nam hic.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?33226",
                    "parent_id": 15,
                    "created_at": "2020-07-25 08:00:17",
                    "updated_at": "2020-08-11 12:08:50"
                }
            },
            {
                "id": 19,
                "product_category_id": 9,
                "product_name": "黑钻焕肤水",
                "product_name_en": "sunt nostrum molestiae",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?95403",
                "slug": "reiciendis-error",
                "short_description": "Nesciunt sequi maiores amet.",
                "short_description_en": "Eveniet est nam nobis ratione ipsam. At libero reprehenderit facere. Sed quibusdam inventore illum ea.",
                "price": "6972.00",
                "sale_price": "117.00",
                "stock": 819,
                "spec": null,
                "seo_title": "sed tenetur voluptatem",
                "seo_keyword": "eaque",
                "seo_description": "Nostrum tempora officiis eum.",
                "benefit": "Repellendus mollitia ut quos similique est iste. Et commodi non voluptatem quo. Tenetur iusto ipsum vel totam fuga sit facere fuga.",
                "benefit_en": "Rerum ipsa quisquam enim temporibus. Quia dolor quia iure cum. Voluptas tempore vel quibusdam cupiditate et praesentium laborum.",
                "tech_description": "Sequi officia tenetur nesciunt distinctio libero praesentium sunt laboriosam. Accusantium deleniti veritatis eum quae exercitationem. Et deserunt et dolores. Cupiditate unde exercitationem autem deleniti ullam consequatur et.",
                "tech_description_en": "Dolorum accusantium sed reiciendis deserunt dignissimos sunt. Expedita ea praesentium nostrum quia possimus porro animi exercitationem. Earum impedit magnam praesentium iste. Laudantium magnam et laboriosam minima nihil.",
                "description": "Numquam nostrum dicta sunt dolor impedit. Sint adipisci eveniet et libero et harum quod amet. Eveniet ratione soluta doloremque architecto qui. Occaecati nostrum sequi dolorum et neque ut.",
                "description_en": "Quia architecto dicta ea illo. Officiis sit quis quia et nulla facere. Nostrum qui doloribus voluptates aspernatur.",
                "usage": "Est voluptas tempore et aspernatur natus commodi. Iste reiciendis delectus doloribus cumque voluptate.",
                "usage_en": "Ullam quo voluptatum qui facilis id. Et tenetur sit blanditiis enim. Modi reprehenderit molestiae praesentium voluptatem eius magnam voluptatem. Animi excepturi aut sint rem repudiandae. Est ut ut totam omnis nihil incidunt.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?30499",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?60348",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?84397",
                "product_video": null,
                "status": 2,
                "rating": 1.49,
                "sold_count": 9811,
                "review_count": 4970,
                "created_at": "2020-08-20 15:26:25",
                "updated_at": "2020-08-06 10:40:26",
                "product_category": {
                    "id": 9,
                    "slug": "voluptatem-sed",
                    "title": "爽肤水",
                    "title_en": "ad aperiam ad",
                    "describe": "Ea quisquam quo voluptatibus molestiae. Commodi ut est quia est voluptas. Earum ea facilis ipsam rerum et natus et. Dolor ab quo eligendi iusto omnis illo officiis. Qui esse unde ipsam harum qui et.",
                    "describe_en": "Harum et ducimus ex ipsum. Nam nihil rerum eius at aut qui ad.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?95380",
                    "description": "Nesciunt praesentium ut ut magnam.",
                    "description_en": "Adipisci beatae odio voluptatibus in nam hic.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?33226",
                    "parent_id": 15,
                    "created_at": "2020-07-25 08:00:17",
                    "updated_at": "2020-08-11 12:08:50"
                }
            },
            {
                "id": 20,
                "product_category_id": 20,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "perferendis exercitationem autem",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?55654",
                "slug": "molestiae-eos",
                "short_description": "Quis quam nostrum fuga aut.",
                "short_description_en": "Neque delectus quo minus sit. Culpa nobis et ut repudiandae. Vero cum eos est et. Suscipit adipisci distinctio libero est eum debitis.",
                "price": "2731.00",
                "sale_price": "9690.00",
                "stock": 241,
                "spec": null,
                "seo_title": "ut aliquam eos",
                "seo_keyword": "sed",
                "seo_description": "Consequatur quos id repellendus consequuntur enim.",
                "benefit": "Eum architecto qui autem asperiores tenetur iure. Beatae recusandae odit quod perferendis. Et pariatur aut laudantium quis vero. Ab fugiat placeat quas at nam.",
                "benefit_en": "Quos quisquam ut possimus natus nesciunt rem id. Aut qui optio eos maiores ea. Magnam eos mollitia harum. Assumenda dolor qui dolore mollitia atque sint.",
                "tech_description": "Sed cum cum a odio placeat. Dolorem quo incidunt ratione aut qui ipsa. Quo quia laudantium quo est id adipisci.",
                "tech_description_en": "Praesentium corrupti saepe autem omnis quibusdam. Sint et sequi veniam modi explicabo facilis tempora. Eos possimus fuga hic recusandae illo totam fuga. Cumque molestiae adipisci iusto veritatis.",
                "description": "Ut quos non aperiam est vel vel. Ut accusantium amet fugit illum tempore enim. Dolores molestiae quis aut rerum doloremque. Perferendis adipisci qui fuga neque similique hic impedit.",
                "description_en": "Voluptas ad voluptatem provident ut. Consequatur consectetur ducimus expedita enim. Deleniti nobis nihil quo.",
                "usage": "Aut optio voluptate deleniti aliquam placeat. Ut aut odit consequatur qui atque qui. Et hic ullam omnis autem. Amet laudantium libero quod delectus. Repudiandae molestias explicabo dolorum voluptatem.",
                "usage_en": "Laborum cumque eaque esse at magnam corporis sit. Explicabo ratione repellendus aut officia. Et totam eum error accusamus fuga.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?18653",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?46193",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?19281",
                "product_video": null,
                "status": 1,
                "rating": 2.55,
                "sold_count": 1055,
                "review_count": 5247,
                "created_at": "2020-07-24 04:07:30",
                "updated_at": "2020-08-15 20:36:45",
                "product_category": {
                    "id": 20,
                    "slug": "quos-rem",
                    "title": "防晒",
                    "title_en": "reprehenderit commodi voluptas",
                    "describe": "Nisi occaecati est harum aliquam. Eos est neque aspernatur. Non dolor tempora aperiam reprehenderit fugiat et repudiandae consequatur.",
                    "describe_en": "Atque consectetur in et sed deserunt. Aspernatur voluptates voluptatem a deserunt sed voluptas. Ullam libero soluta ut rem.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?87863",
                    "description": "Omnis dolor est nobis rerum est.",
                    "description_en": "Cumque numquam iste aut ex architecto voluptatem.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?97172",
                    "parent_id": 11,
                    "created_at": "2020-08-17 12:18:30",
                    "updated_at": "2020-08-10 16:05:35"
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
    -G "http://localhost/api/product_category/1?category_slug=repudiandae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product_category/1"
);

let params = {
    "category_slug": "repudiandae",
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
    -G "http://localhost/api/product/1?slug=magnam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product/1"
);

let params = {
    "slug": "magnam",
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
    -G "http://localhost/api/product_ids?id_list=fugiat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product_ids"
);

let params = {
    "id_list": "fugiat",
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
    -G "http://localhost/api/category_story/1?category_slug=necessitatibus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category_story/1"
);

let params = {
    "category_slug": "necessitatibus",
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
    -G "http://localhost/api/product_new?page=nesciunt&page_limit=rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product_new"
);

let params = {
    "page": "nesciunt",
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


> Example response (200):

```json
{
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 2,
                "product_category_id": 8,
                "product_name": "黑钻焕肤水",
                "product_name_en": "deleniti quis libero",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?31562",
                "slug": "eum-aut",
                "short_description": "Dicta alias voluptatum fugiat vitae mollitia maiores.",
                "short_description_en": "Veniam velit neque omnis modi esse porro. Nihil molestiae aut sed maxime. Nemo et autem non cumque corporis rerum est. Deleniti ducimus tempora quis iste quaerat nihil. Commodi harum quae placeat exercitationem similique.",
                "price": "6099.00",
                "sale_price": "7886.00",
                "stock": 88,
                "spec": null,
                "seo_title": "sunt et ullam",
                "seo_keyword": "et",
                "seo_description": "Dolore distinctio et molestias iure eius repudiandae.",
                "benefit": "Tempora at est libero et veniam explicabo. Rem nihil consequatur debitis laudantium. Tempora tenetur omnis veniam.",
                "benefit_en": "Veritatis doloremque in quisquam doloremque amet eaque voluptate. Maxime et nisi debitis odit. Ut quia qui quisquam ab harum numquam voluptates. Quam ut laudantium et qui.",
                "tech_description": "Aut nostrum cum inventore voluptatem ut numquam nemo. A iste consequatur magnam itaque illum vitae earum. Sed nam velit dolorum et qui. Voluptas quas incidunt assumenda est debitis explicabo minus sed.",
                "tech_description_en": "Excepturi corporis labore rerum. Officiis in impedit beatae dolorem autem consequatur. Hic quae laborum molestiae similique aperiam quo ut. Repudiandae architecto optio quis perferendis enim ut non.",
                "description": "Officia tempora distinctio dolorem. Qui rerum quia ullam cumque consequatur voluptatibus sed. Officiis aut perspiciatis qui ut est debitis qui quae.",
                "description_en": "Dicta inventore distinctio rerum aut. Delectus ut aut maiores quis sapiente. Sunt qui totam quisquam aut et. Error adipisci minima quo sed amet eius.",
                "usage": "Qui eum nihil reiciendis perferendis odio vel. Fuga debitis minus esse aut. Ex quas velit cupiditate nam exercitationem. Magnam eum ea pariatur praesentium omnis quidem et.",
                "usage_en": "Qui laboriosam commodi quo. Qui eos autem quo corporis qui eos quo qui. Aut dicta autem soluta corporis provident vitae. Aut aliquam assumenda temporibus.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?37370",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?17944",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?47981",
                "product_video": null,
                "status": 1,
                "rating": 6.57,
                "sold_count": 2971,
                "review_count": 3282,
                "created_at": "2020-07-31 03:56:56",
                "updated_at": "2020-08-03 03:58:13",
                "product_category": {
                    "id": 8,
                    "slug": "omnis-perspiciatis",
                    "title": "精油",
                    "title_en": "natus qui ratione",
                    "describe": "Aut et nisi nam repellat. Quod aut qui ut ad. Adipisci quia rerum qui excepturi et molestiae consequuntur cum.",
                    "describe_en": "Tenetur et magnam labore nihil est quis. Suscipit eligendi adipisci nulla eligendi eos eos molestiae. Aut inventore accusantium est. Nisi esse odit inventore fuga odit dolorem.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?58208",
                    "description": "Aut qui ex aut reprehenderit sed corrupti.",
                    "description_en": "Tempore magni alias repellat ab eos.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?41432",
                    "parent_id": 9,
                    "created_at": "2020-08-14 21:08:31",
                    "updated_at": "2020-07-26 23:06:47"
                }
            },
            {
                "id": 3,
                "product_category_id": 6,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "iure culpa minus",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?55663",
                "slug": "sequi-voluptate",
                "short_description": "Libero dolore accusamus qui veritatis.",
                "short_description_en": "Alias maxime eum qui explicabo et. Harum perferendis provident est in. Reiciendis consequatur ducimus tenetur id facilis. Iure ea delectus atque voluptas. Suscipit aut ea autem possimus quo incidunt.",
                "price": "9487.00",
                "sale_price": "9418.00",
                "stock": 184,
                "spec": null,
                "seo_title": "aliquam velit necessitatibus",
                "seo_keyword": "illum",
                "seo_description": "Esse occaecati nulla quis tenetur.",
                "benefit": "Deleniti quae facere provident iusto modi perspiciatis aut. Ut accusantium harum sit cumque praesentium. Consequatur quisquam ad voluptas nulla vel ab. Saepe quae qui officiis voluptas consequuntur.",
                "benefit_en": "Nemo occaecati a blanditiis dolores. Provident reiciendis dolorem sunt tenetur delectus.",
                "tech_description": "Ullam voluptas adipisci sed dolores aut officiis et. Quia reiciendis illo perferendis autem. Voluptate cum sint deserunt quae culpa. Esse ut odio et amet et nobis quod.",
                "tech_description_en": "Labore sit distinctio laborum consectetur. Totam minus necessitatibus nihil saepe nobis repudiandae autem. Illum qui neque cum officiis quo reprehenderit.",
                "description": "Hic qui non eos nemo natus incidunt reprehenderit. Modi et et distinctio dolore quia voluptate iure. Molestias et reprehenderit saepe repellendus.",
                "description_en": "Quia optio veritatis repudiandae ut tenetur. Et consequatur quia pariatur sed expedita quidem adipisci. Illo pariatur ut doloremque dicta qui ad veritatis. Aut adipisci tenetur quis sunt.",
                "usage": "Quia nam repellat fugiat eligendi voluptatem quo qui. Unde quos autem quis in rerum nisi. Quos illo at aut laborum est.",
                "usage_en": "Dignissimos quaerat et expedita odit ex. Consequatur velit sed voluptatem assumenda. Impedit nemo quibusdam perferendis vero.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?98532",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?28786",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?70598",
                "product_video": null,
                "status": 1,
                "rating": 9.14,
                "sold_count": 1343,
                "review_count": 8721,
                "created_at": "2020-07-23 18:59:02",
                "updated_at": "2020-08-01 05:45:19",
                "product_category": {
                    "id": 6,
                    "slug": "nobis-dolor",
                    "title": "乳液",
                    "title_en": "consequatur dolorem eaque",
                    "describe": "Saepe rerum repudiandae minus sit quia qui. Quisquam accusantium non sed. In ex possimus officiis nostrum. Repellat aperiam dolorem non quidem magni qui provident.",
                    "describe_en": "Est quia et dicta et. Qui beatae sit hic natus delectus quis voluptas provident. Et aliquam dolores ullam facere molestiae.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?63262",
                    "description": "Quis eum iste eaque quia dolores consectetur.",
                    "description_en": "Ut rem eos nemo porro est maxime.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?18100",
                    "parent_id": 8,
                    "created_at": "2020-07-23 16:48:20",
                    "updated_at": "2020-08-06 15:29:22"
                }
            },
            {
                "id": 5,
                "product_category_id": 16,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "numquam qui voluptatum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?40705",
                "slug": "reiciendis-numquam",
                "short_description": "Aut consectetur sequi magnam ea nihil.",
                "short_description_en": "Est quo qui consequuntur voluptate facilis aut unde. Dolorem accusantium optio atque soluta. Incidunt voluptatem neque iste voluptatem reiciendis. Error quae quos qui et.",
                "price": "1944.00",
                "sale_price": "9560.00",
                "stock": 513,
                "spec": null,
                "seo_title": "consequatur quidem rerum",
                "seo_keyword": "ea",
                "seo_description": "Doloremque sapiente quasi nihil debitis.",
                "benefit": "Reprehenderit impedit similique repudiandae qui laboriosam eum pariatur quo. Illo quisquam et nihil id et sed tempora.",
                "benefit_en": "Voluptate aut iste qui. Eligendi aut ratione laborum mollitia ea. Voluptatum ut porro rem incidunt.",
                "tech_description": "Nobis aut excepturi id eum odio cumque odio quae. Officiis autem omnis repellat aperiam quis voluptatum. Et error ipsa dolor facilis. Adipisci voluptas facilis voluptatem dolorum.",
                "tech_description_en": "Quod ex autem in laudantium. Magni perspiciatis consequuntur doloribus. Veritatis distinctio expedita ad qui ea tempora.",
                "description": "Enim autem explicabo harum sapiente sunt impedit. Sed quasi sequi ut facilis ducimus. Ea repellat sapiente laboriosam. Sunt id reprehenderit delectus nostrum itaque voluptas.",
                "description_en": "Laboriosam rerum harum molestias ut expedita beatae. Soluta sapiente est dicta minus debitis eum.",
                "usage": "Est sint unde provident id maiores. Perferendis ea voluptatem repellendus est ut laudantium a. Fugit deleniti id ab et et non.",
                "usage_en": "Alias est tempora consequatur dolore explicabo impedit. Sapiente aut animi non necessitatibus rerum aperiam rem quia. Sit nulla harum et delectus. Rerum quas velit accusamus labore eligendi atque unde. Aut facilis est tempore totam perferendis.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?19270",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?43886",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?57435",
                "product_video": null,
                "status": 1,
                "rating": 3.25,
                "sold_count": 4077,
                "review_count": 9264,
                "created_at": "2020-07-22 03:59:03",
                "updated_at": "2020-07-29 12:21:12",
                "product_category": {
                    "id": 16,
                    "slug": "eos-qui",
                    "title": "隔离",
                    "title_en": "laudantium amet voluptas",
                    "describe": "Nemo impedit ipsam molestiae officia. Ipsam et laborum est reprehenderit reiciendis. Dolore magnam sunt et vel dolores.",
                    "describe_en": "Enim facilis assumenda possimus aut. Itaque error distinctio quos ducimus. Velit autem suscipit et quod laudantium. Optio autem assumenda iste quibusdam et quo.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?63852",
                    "description": "Quod cupiditate et rerum consequatur fuga.",
                    "description_en": "Quis odio exercitationem illo illum illo omnis.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?14534",
                    "parent_id": 20,
                    "created_at": "2020-07-23 09:50:22",
                    "updated_at": "2020-08-01 01:58:18"
                }
            },
            {
                "id": 7,
                "product_category_id": 9,
                "product_name": "黑钻焕肤水",
                "product_name_en": "perferendis cumque tenetur",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?76990",
                "slug": "omnis-voluptatem",
                "short_description": "Et quis debitis sed unde.",
                "short_description_en": "Iure dolore rerum ea veritatis minima. Quo libero expedita magnam nobis quaerat. Vel labore sit quia.",
                "price": "7713.00",
                "sale_price": "4948.00",
                "stock": 99,
                "spec": null,
                "seo_title": "delectus quam odio",
                "seo_keyword": "omnis",
                "seo_description": "A sapiente facere quos eius.",
                "benefit": "Distinctio iste natus qui laboriosam. Non ut culpa non similique nostrum esse. Incidunt temporibus aperiam vel dolorem dolorem. Mollitia ut vitae occaecati eaque sed incidunt accusantium. Ducimus qui ratione voluptatibus ipsam temporibus ex.",
                "benefit_en": "Voluptatum est illum provident aut id numquam. Quibusdam atque aut explicabo ut quos et esse. Facere eius est inventore non minus ipsum veniam.",
                "tech_description": "Qui accusantium commodi est quod inventore voluptatem eligendi. Autem natus rerum excepturi earum maxime asperiores. Dignissimos at in et.",
                "tech_description_en": "Quasi necessitatibus dicta sit qui fuga. Aut repellat nulla ex voluptas qui hic voluptatibus. Soluta hic facere aperiam magni.",
                "description": "Odio corporis laborum nemo quisquam. Dolorem nisi quo adipisci minima. Sint omnis repudiandae et enim ab voluptas ad laudantium. Dolorem sit unde ab soluta. Suscipit harum quia recusandae sequi est eos.",
                "description_en": "At enim omnis aliquam voluptatem et labore ex. Assumenda sunt eum saepe dolorem quisquam voluptate. Quae non eum at et et sed. Velit est maiores deserunt quaerat.",
                "usage": "Voluptate ullam vel vel omnis totam. Enim porro voluptatibus aut officiis. Vero est non aspernatur fugiat.",
                "usage_en": "Velit fugiat architecto iure perspiciatis dolor. Deserunt dolores optio voluptatem itaque doloribus facilis inventore laboriosam. Assumenda architecto natus omnis ut est soluta. Cupiditate totam voluptatem sunt illo.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?35005",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?16347",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?24782",
                "product_video": null,
                "status": 1,
                "rating": 7.3,
                "sold_count": 1690,
                "review_count": 7620,
                "created_at": "2020-08-18 10:26:25",
                "updated_at": "2020-08-16 21:01:44",
                "product_category": {
                    "id": 9,
                    "slug": "voluptatem-sed",
                    "title": "爽肤水",
                    "title_en": "ad aperiam ad",
                    "describe": "Ea quisquam quo voluptatibus molestiae. Commodi ut est quia est voluptas. Earum ea facilis ipsam rerum et natus et. Dolor ab quo eligendi iusto omnis illo officiis. Qui esse unde ipsam harum qui et.",
                    "describe_en": "Harum et ducimus ex ipsum. Nam nihil rerum eius at aut qui ad.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?95380",
                    "description": "Nesciunt praesentium ut ut magnam.",
                    "description_en": "Adipisci beatae odio voluptatibus in nam hic.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?33226",
                    "parent_id": 15,
                    "created_at": "2020-07-25 08:00:17",
                    "updated_at": "2020-08-11 12:08:50"
                }
            },
            {
                "id": 9,
                "product_category_id": 14,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "reiciendis exercitationem possimus",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?19819",
                "slug": "quaerat-quis",
                "short_description": "Odit sit quidem dolorum cum aliquid modi.",
                "short_description_en": "Vel quaerat perferendis ipsam et sint expedita. Est quo ut nisi quis rem. Qui iste non perferendis voluptatibus ipsam eius.",
                "price": "5488.00",
                "sale_price": "647.00",
                "stock": 534,
                "spec": null,
                "seo_title": "aliquid tenetur ab",
                "seo_keyword": "consectetur",
                "seo_description": "Id deleniti repellat rerum.",
                "benefit": "Nam ipsa et ea dolor sed eius. Dolor provident rem hic sed sunt molestias. Ab omnis accusamus fugiat non. Adipisci magnam libero amet quia.",
                "benefit_en": "Voluptatem cupiditate nostrum asperiores occaecati optio. Tenetur corrupti amet est doloribus molestiae impedit eos.",
                "tech_description": "Quia et unde ducimus doloribus molestias alias. Non labore earum incidunt eos. Non dolor animi quaerat provident repudiandae et. Et quo doloribus est eum totam. Accusamus pariatur minus ipsa fuga dolorum veniam velit iure.",
                "tech_description_en": "Totam sit reiciendis temporibus quisquam est sed. Quisquam possimus libero et possimus. Minus ullam dolores iusto rerum in deleniti accusantium voluptas. Dignissimos fuga ad ea.",
                "description": "Aut occaecati nihil pariatur sed commodi et minus. Mollitia necessitatibus ut aut dolor asperiores et. Soluta in ut aliquid eligendi exercitationem sint culpa.",
                "description_en": "Repellat nam est dolores ipsa quia at sit. Odit veritatis ut possimus alias sunt. Et recusandae voluptatem illum saepe iure ex.",
                "usage": "Quo sequi tempora consequatur nam. Ut minima quisquam quod sed. Ratione enim sint sit corporis. Autem voluptates consequuntur tenetur voluptatem et quasi dolores aut.",
                "usage_en": "Nostrum aliquam fugit labore dolore qui. Ducimus ipsa rerum facilis. Aut aperiam ut alias consequatur ipsam placeat tenetur.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?38616",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?70198",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?57300",
                "product_video": null,
                "status": 1,
                "rating": 9.91,
                "sold_count": 9506,
                "review_count": 6237,
                "created_at": "2020-07-21 17:32:39",
                "updated_at": "2020-08-20 05:31:47",
                "product_category": {
                    "id": 14,
                    "slug": "voluptates-aliquam",
                    "title": "香水",
                    "title_en": "saepe aut ipsum",
                    "describe": "Amet id sint voluptatem possimus molestias. Qui et tempore ut nobis quia. Et quia mollitia in tempora consequatur.",
                    "describe_en": "Aut fuga reiciendis et necessitatibus error ut. Sed tenetur cum voluptates tenetur accusamus eius perferendis. Odio vitae cumque ut ut possimus iure.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?37438",
                    "description": "Labore omnis ducimus quasi qui.",
                    "description_en": "Quisquam autem exercitationem eaque.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?95194",
                    "parent_id": 18,
                    "created_at": "2020-08-13 03:06:48",
                    "updated_at": "2020-08-04 04:18:34"
                }
            },
            {
                "id": 10,
                "product_category_id": 20,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "qui dolor et",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?19144",
                "slug": "nisi-dolorem",
                "short_description": "Quisquam vel nulla et.",
                "short_description_en": "Suscipit occaecati velit sunt aperiam consequatur iste voluptatem. Vel quia voluptas vel in et dolores eos. Exercitationem suscipit maxime corporis magnam velit beatae.",
                "price": "2970.00",
                "sale_price": "8694.00",
                "stock": 977,
                "spec": null,
                "seo_title": "voluptatem quis et",
                "seo_keyword": "quia",
                "seo_description": "Facilis non reprehenderit et.",
                "benefit": "Magni alias enim eos possimus. Deserunt qui iure eos similique enim illo. Et esse voluptatem animi dolorum molestiae minus nulla.",
                "benefit_en": "Neque quidem repudiandae corrupti enim sunt quam ullam. Vitae consequuntur quaerat quia in est. Animi omnis neque quidem eligendi. Quia harum a sit neque aliquid qui.",
                "tech_description": "Laborum molestias iste at ut ut eligendi possimus. Et officiis eum mollitia voluptatibus veniam. Consequuntur nobis tempora officia est soluta voluptatem.",
                "tech_description_en": "Aut ullam enim illo distinctio quia. At est voluptate nihil nam et qui earum debitis. Consequatur consequatur excepturi consequatur nemo assumenda eaque a. Voluptas fugit sed odit et.",
                "description": "Quia ut laudantium soluta officiis odio ut. Non possimus culpa cumque. Assumenda porro reprehenderit dolores molestias ab totam et. Qui et voluptas consectetur laudantium optio voluptatem laboriosam maiores.",
                "description_en": "Quo sed laudantium consequuntur qui in. Aut aperiam nisi eum sit nulla expedita. Rerum perspiciatis quas est facere.",
                "usage": "Non soluta assumenda blanditiis dolor cum assumenda. Et mollitia ad ratione quibusdam. Vel reiciendis sed sed commodi. Animi eum quibusdam quaerat velit.",
                "usage_en": "Qui quas aliquid dignissimos eaque debitis. Placeat et id omnis vero ea. Adipisci non dolores inventore qui.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?41745",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?27763",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?51436",
                "product_video": null,
                "status": 1,
                "rating": 8.02,
                "sold_count": 4969,
                "review_count": 2199,
                "created_at": "2020-07-27 10:35:17",
                "updated_at": "2020-07-24 23:37:31",
                "product_category": {
                    "id": 20,
                    "slug": "quos-rem",
                    "title": "防晒",
                    "title_en": "reprehenderit commodi voluptas",
                    "describe": "Nisi occaecati est harum aliquam. Eos est neque aspernatur. Non dolor tempora aperiam reprehenderit fugiat et repudiandae consequatur.",
                    "describe_en": "Atque consectetur in et sed deserunt. Aspernatur voluptates voluptatem a deserunt sed voluptas. Ullam libero soluta ut rem.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?87863",
                    "description": "Omnis dolor est nobis rerum est.",
                    "description_en": "Cumque numquam iste aut ex architecto voluptatem.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?97172",
                    "parent_id": 11,
                    "created_at": "2020-08-17 12:18:30",
                    "updated_at": "2020-08-10 16:05:35"
                }
            },
            {
                "id": 14,
                "product_category_id": 9,
                "product_name": "黑钻焕肤水",
                "product_name_en": "alias dicta aliquam",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?30907",
                "slug": "cumque-id",
                "short_description": "Magnam numquam incidunt hic.",
                "short_description_en": "Blanditiis odit in est repudiandae maiores. Aut consectetur quae quo dolor quia provident. Molestias ipsa accusamus cumque aut rerum atque. In fuga reiciendis omnis iste aut et.",
                "price": "3833.00",
                "sale_price": "598.00",
                "stock": 723,
                "spec": null,
                "seo_title": "veritatis eos sed",
                "seo_keyword": "nostrum",
                "seo_description": "Vel laudantium dolorem eveniet est et.",
                "benefit": "Autem quia voluptatem nisi illo ex qui qui. Sed aut voluptatem consectetur dicta. Velit aliquam tempora possimus aut dolorem libero maxime quo. In et iusto doloremque at quo. Quia et voluptas rem est nobis.",
                "benefit_en": "Amet dignissimos nemo in aut quae in sit. Nisi eaque dolorem molestias. Aliquid maiores velit rem. Et nihil laboriosam ad ratione maxime.",
                "tech_description": "Deserunt animi id cum sint perferendis quia soluta et. Quae inventore aliquid voluptas magni. Iste placeat nihil consequatur ut ex facere.",
                "tech_description_en": "Laudantium sed debitis ex et dolorum reiciendis nihil. A voluptatibus id beatae voluptas dolorem. Explicabo et quidem sit mollitia adipisci libero deserunt.",
                "description": "Ut aut fuga dolor quae architecto aliquid. Culpa reiciendis corporis a qui modi iste. Ut nihil aut nulla molestias.",
                "description_en": "Voluptas est non cupiditate architecto quae amet ut. Odit eaque consequatur vitae quis eum reprehenderit ut. Et omnis odit unde tenetur odio architecto aliquam. Voluptatibus et adipisci dolorem ratione ut fugit.",
                "usage": "Nobis cumque aut a laborum illo in ea. Officia est officiis velit dolorem voluptas eum. Quas eum quibusdam voluptatibus eos. Esse dolorum dicta possimus ullam quia.",
                "usage_en": "Qui modi tempora odit ea similique modi. Eum ipsa nihil nemo aliquid qui. Iusto facere quisquam qui ut iste aspernatur quo animi.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?33270",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?40216",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?31220",
                "product_video": null,
                "status": 1,
                "rating": 9.96,
                "sold_count": 1863,
                "review_count": 3815,
                "created_at": "2020-07-27 06:44:34",
                "updated_at": "2020-08-13 06:52:52",
                "product_category": {
                    "id": 9,
                    "slug": "voluptatem-sed",
                    "title": "爽肤水",
                    "title_en": "ad aperiam ad",
                    "describe": "Ea quisquam quo voluptatibus molestiae. Commodi ut est quia est voluptas. Earum ea facilis ipsam rerum et natus et. Dolor ab quo eligendi iusto omnis illo officiis. Qui esse unde ipsam harum qui et.",
                    "describe_en": "Harum et ducimus ex ipsum. Nam nihil rerum eius at aut qui ad.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?95380",
                    "description": "Nesciunt praesentium ut ut magnam.",
                    "description_en": "Adipisci beatae odio voluptatibus in nam hic.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?33226",
                    "parent_id": 15,
                    "created_at": "2020-07-25 08:00:17",
                    "updated_at": "2020-08-11 12:08:50"
                }
            },
            {
                "id": 18,
                "product_category_id": 9,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "voluptas voluptatem sunt",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?96428",
                "slug": "dolor-veniam",
                "short_description": "Neque rem sit aliquam tempore vitae dolor.",
                "short_description_en": "Rerum dolores nulla aut eveniet. Aut consequatur voluptates sint qui et. Voluptate voluptatem tempora et et vero et.",
                "price": "2479.00",
                "sale_price": "6528.00",
                "stock": 321,
                "spec": null,
                "seo_title": "sapiente sit veniam",
                "seo_keyword": "velit",
                "seo_description": "Sapiente libero magni reiciendis ex.",
                "benefit": "Necessitatibus placeat doloribus repellendus qui et occaecati et. Perferendis ut optio optio natus animi. Qui fuga sint neque consequatur ratione. Consequuntur consequatur dolor molestiae veritatis aut quisquam. Distinctio quaerat fugiat amet reprehenderit.",
                "benefit_en": "Aliquid ut pariatur aut temporibus qui. Aut in animi facilis sit soluta illum temporibus. Nisi minima ipsa sed mollitia nesciunt quo. Qui velit iure quis nam provident maxime magni.",
                "tech_description": "Quasi aut et qui repellendus corporis. Voluptatem laboriosam qui doloribus sit sint blanditiis aut. Veritatis ut necessitatibus vel enim repudiandae dolorum quas.",
                "tech_description_en": "Et excepturi ut itaque reprehenderit est itaque sapiente dolorum. Tempore voluptatibus voluptatibus quo impedit voluptatem placeat. Dolor voluptas quia eveniet itaque. Vel officiis officia inventore nulla sunt. Dicta ea ea sed odit odio similique.",
                "description": "Quae expedita possimus amet in expedita aut. Suscipit voluptatum consequuntur magni esse voluptatibus. Voluptas esse et aperiam ut. Nisi impedit voluptates quam ea voluptas sequi quisquam.",
                "description_en": "Debitis at est aut autem enim explicabo excepturi. Quasi repellendus optio porro error. Cumque incidunt aut ut laudantium voluptatum autem.",
                "usage": "Voluptates velit sequi similique enim. Omnis tenetur laborum provident neque aut non commodi. Quos quia aut et sequi earum esse voluptas unde.",
                "usage_en": "Eveniet corporis ab consequatur velit quas officia eos in. Aspernatur possimus alias et excepturi porro tempora. Est sit voluptas dolorem cupiditate voluptatum rem. Qui ut distinctio quia. Fugit est deleniti exercitationem adipisci unde explicabo.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?94722",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?26666",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?27972",
                "product_video": null,
                "status": 1,
                "rating": 4.78,
                "sold_count": 6278,
                "review_count": 2398,
                "created_at": "2020-07-30 04:30:00",
                "updated_at": "2020-08-07 16:43:30",
                "product_category": {
                    "id": 9,
                    "slug": "voluptatem-sed",
                    "title": "爽肤水",
                    "title_en": "ad aperiam ad",
                    "describe": "Ea quisquam quo voluptatibus molestiae. Commodi ut est quia est voluptas. Earum ea facilis ipsam rerum et natus et. Dolor ab quo eligendi iusto omnis illo officiis. Qui esse unde ipsam harum qui et.",
                    "describe_en": "Harum et ducimus ex ipsum. Nam nihil rerum eius at aut qui ad.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?95380",
                    "description": "Nesciunt praesentium ut ut magnam.",
                    "description_en": "Adipisci beatae odio voluptatibus in nam hic.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?33226",
                    "parent_id": 15,
                    "created_at": "2020-07-25 08:00:17",
                    "updated_at": "2020-08-11 12:08:50"
                }
            },
            {
                "id": 20,
                "product_category_id": 20,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "perferendis exercitationem autem",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?55654",
                "slug": "molestiae-eos",
                "short_description": "Quis quam nostrum fuga aut.",
                "short_description_en": "Neque delectus quo minus sit. Culpa nobis et ut repudiandae. Vero cum eos est et. Suscipit adipisci distinctio libero est eum debitis.",
                "price": "2731.00",
                "sale_price": "9690.00",
                "stock": 241,
                "spec": null,
                "seo_title": "ut aliquam eos",
                "seo_keyword": "sed",
                "seo_description": "Consequatur quos id repellendus consequuntur enim.",
                "benefit": "Eum architecto qui autem asperiores tenetur iure. Beatae recusandae odit quod perferendis. Et pariatur aut laudantium quis vero. Ab fugiat placeat quas at nam.",
                "benefit_en": "Quos quisquam ut possimus natus nesciunt rem id. Aut qui optio eos maiores ea. Magnam eos mollitia harum. Assumenda dolor qui dolore mollitia atque sint.",
                "tech_description": "Sed cum cum a odio placeat. Dolorem quo incidunt ratione aut qui ipsa. Quo quia laudantium quo est id adipisci.",
                "tech_description_en": "Praesentium corrupti saepe autem omnis quibusdam. Sint et sequi veniam modi explicabo facilis tempora. Eos possimus fuga hic recusandae illo totam fuga. Cumque molestiae adipisci iusto veritatis.",
                "description": "Ut quos non aperiam est vel vel. Ut accusantium amet fugit illum tempore enim. Dolores molestiae quis aut rerum doloremque. Perferendis adipisci qui fuga neque similique hic impedit.",
                "description_en": "Voluptas ad voluptatem provident ut. Consequatur consectetur ducimus expedita enim. Deleniti nobis nihil quo.",
                "usage": "Aut optio voluptate deleniti aliquam placeat. Ut aut odit consequatur qui atque qui. Et hic ullam omnis autem. Amet laudantium libero quod delectus. Repudiandae molestias explicabo dolorum voluptatem.",
                "usage_en": "Laborum cumque eaque esse at magnam corporis sit. Explicabo ratione repellendus aut officia. Et totam eum error accusamus fuga.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?18653",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?46193",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?19281",
                "product_video": null,
                "status": 1,
                "rating": 2.55,
                "sold_count": 1055,
                "review_count": 5247,
                "created_at": "2020-07-24 04:07:30",
                "updated_at": "2020-08-15 20:36:45",
                "product_category": {
                    "id": 20,
                    "slug": "quos-rem",
                    "title": "防晒",
                    "title_en": "reprehenderit commodi voluptas",
                    "describe": "Nisi occaecati est harum aliquam. Eos est neque aspernatur. Non dolor tempora aperiam reprehenderit fugiat et repudiandae consequatur.",
                    "describe_en": "Atque consectetur in et sed deserunt. Aspernatur voluptates voluptatem a deserunt sed voluptas. Ullam libero soluta ut rem.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?87863",
                    "description": "Omnis dolor est nobis rerum est.",
                    "description_en": "Cumque numquam iste aut ex architecto voluptatem.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?97172",
                    "parent_id": 11,
                    "created_at": "2020-08-17 12:18:30",
                    "updated_at": "2020-08-10 16:05:35"
                }
            },
            {
                "id": 25,
                "product_category_id": 12,
                "product_name": "黑钻肌光精华",
                "product_name_en": "in sit distinctio",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?72380",
                "slug": "saepe-repudiandae",
                "short_description": "Tempora repudiandae voluptatem vitae ut.",
                "short_description_en": "Qui illum totam aliquid. Dicta perferendis odio eius enim. Ipsam voluptas sunt explicabo dolorem aut eius officia.",
                "price": "6355.00",
                "sale_price": "9762.00",
                "stock": 686,
                "spec": null,
                "seo_title": "libero eos debitis",
                "seo_keyword": "ea",
                "seo_description": "Sed voluptates suscipit eveniet nesciunt exercitationem quidem.",
                "benefit": "Rem aut inventore maiores amet quas voluptatem. Voluptatem dolor dolores sed autem aliquam molestiae sunt. Eos voluptatem incidunt ullam qui praesentium eos. Nesciunt inventore totam rem est amet.",
                "benefit_en": "Quam unde maxime alias quia. Cumque vitae expedita fugit ut aspernatur. Quod dolores consequatur quasi voluptatem sed.",
                "tech_description": "Ut optio est sit. Eos architecto et consectetur quo et veritatis. Porro placeat minus ut ea. Rem velit ipsa ut qui.",
                "tech_description_en": "Facilis ut doloremque aut accusamus. Deserunt quo aut aliquid. Occaecati quia doloremque assumenda facilis illum. Magni ab et voluptate possimus.",
                "description": "Voluptatem fugit sapiente quis similique quis. Repellat harum quam temporibus officia est voluptas quidem. Aut iste qui dolorem doloremque ea cum eos. Dolorum id cumque cumque dolorum voluptas eaque fugit.",
                "description_en": "Omnis totam vel accusamus provident minima. Porro iure officia eos excepturi ea aut. Quidem fugit qui similique dicta.",
                "usage": "Nulla nihil illo omnis illum. Sit alias reprehenderit sed enim rerum illum quo rerum. Delectus delectus aut rerum aperiam incidunt vel voluptate. Non consequatur tempore facere illum ullam et.",
                "usage_en": "Earum occaecati et reiciendis iure quia velit sequi. Molestiae tempora enim veritatis officiis ab. Autem sit est odit ad commodi est asperiores ex.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?20593",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?35069",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?21435",
                "product_video": null,
                "status": 1,
                "rating": 0.79,
                "sold_count": 7636,
                "review_count": 9186,
                "created_at": "2020-07-30 19:40:04",
                "updated_at": "2020-08-16 01:21:27",
                "product_category": {
                    "id": 12,
                    "slug": "sunt-modi",
                    "title": "面膜",
                    "title_en": "voluptatibus eum veniam",
                    "describe": "Dolorum aliquam quia temporibus quia. Fugit similique et illum porro numquam et nobis magni. Necessitatibus nihil perspiciatis qui dolor et qui. Est illo accusantium quisquam omnis.",
                    "describe_en": "Et non ut rerum. Animi repudiandae ex rerum nihil nobis qui harum.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?95986",
                    "description": "Aut debitis ut excepturi non laudantium.",
                    "description_en": "Nostrum aut ea quis et.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?92786",
                    "parent_id": 9,
                    "created_at": "2020-08-04 11:55:39",
                    "updated_at": "2020-08-01 18:24:56"
                }
            },
            {
                "id": 26,
                "product_category_id": 9,
                "product_name": "钻石焕活面膜",
                "product_name_en": "enim nihil iusto",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?53277",
                "slug": "labore-et",
                "short_description": "Et ab unde aut voluptatem.",
                "short_description_en": "Corporis officia vel veniam porro at voluptatibus recusandae. Eius dicta quia error modi. Odio et eos iusto rerum minus reprehenderit dolor.",
                "price": "4822.00",
                "sale_price": "8474.00",
                "stock": 719,
                "spec": null,
                "seo_title": "iure voluptatem ea",
                "seo_keyword": "molestias",
                "seo_description": "Vel placeat tempora error fugit est.",
                "benefit": "Voluptatem quam sunt non sunt rerum cupiditate corrupti. Accusamus accusamus quae mollitia et sapiente soluta dicta. Nam veritatis numquam rem quam assumenda dolorem qui. Perferendis et quis natus voluptatibus illum. Facere sit et dolorum illum sit.",
                "benefit_en": "Alias rerum repellendus architecto quia mollitia id. Quo fugit sed id sint qui tempore. Reiciendis fugit ut delectus culpa quod repellendus.",
                "tech_description": "Voluptatibus quas consectetur et maxime cumque. Rem dolore omnis vero in perspiciatis. Quasi magnam corporis fugit voluptas rerum ut.",
                "tech_description_en": "Repudiandae quasi voluptas sint est est ullam. Ex deserunt aut adipisci beatae. Eos libero quaerat officiis est quas. Soluta aliquam saepe est quo quaerat.",
                "description": "Omnis sit nobis harum minima nemo aut. Aut repellat recusandae neque eius veniam sapiente est et. Non voluptatem voluptatum voluptate dicta illo. Molestiae voluptatem laboriosam vel dolor. Voluptates voluptate aut qui et consequatur totam.",
                "description_en": "Qui accusamus officia quia et illum illo ea. Odit nobis sit quam ea eveniet. Dicta quia voluptatem rem commodi amet omnis in.",
                "usage": "Soluta voluptatibus praesentium qui quia adipisci qui doloribus. Aut alias sapiente doloremque totam reiciendis. Nostrum aliquid in fugit. Pariatur nobis consequatur cumque ex. Et animi nihil nulla quia voluptatem eum cumque.",
                "usage_en": "Dolorem in dolores tempora et facilis est. Temporibus quia omnis velit sed. Ducimus culpa possimus facere iure. Illum iure aut quam id et. Molestiae vel quia molestiae.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?87315",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?52694",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?12280",
                "product_video": null,
                "status": 1,
                "rating": 6.29,
                "sold_count": 5125,
                "review_count": 5310,
                "created_at": "2020-08-11 13:03:52",
                "updated_at": "2020-08-05 02:18:41",
                "product_category": {
                    "id": 9,
                    "slug": "voluptatem-sed",
                    "title": "爽肤水",
                    "title_en": "ad aperiam ad",
                    "describe": "Ea quisquam quo voluptatibus molestiae. Commodi ut est quia est voluptas. Earum ea facilis ipsam rerum et natus et. Dolor ab quo eligendi iusto omnis illo officiis. Qui esse unde ipsam harum qui et.",
                    "describe_en": "Harum et ducimus ex ipsum. Nam nihil rerum eius at aut qui ad.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?95380",
                    "description": "Nesciunt praesentium ut ut magnam.",
                    "description_en": "Adipisci beatae odio voluptatibus in nam hic.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?33226",
                    "parent_id": 15,
                    "created_at": "2020-07-25 08:00:17",
                    "updated_at": "2020-08-11 12:08:50"
                }
            },
            {
                "id": 28,
                "product_category_id": 10,
                "product_name": "黑钻肌光精华",
                "product_name_en": "est quia voluptate",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?46442",
                "slug": "eum-voluptatum",
                "short_description": "Ut enim iure velit consequatur quia sit.",
                "short_description_en": "Aut sed expedita maiores nam id est est. Ut soluta possimus rerum. Aut qui expedita fugit doloremque.",
                "price": "9604.00",
                "sale_price": "7800.00",
                "stock": 373,
                "spec": null,
                "seo_title": "porro repudiandae esse",
                "seo_keyword": "nemo",
                "seo_description": "Maxime magni enim aperiam mollitia corporis.",
                "benefit": "Debitis ducimus vel optio rerum in. Et voluptates debitis dolorum. Ut provident maxime dicta eum voluptatem non rerum voluptatem.",
                "benefit_en": "Nobis omnis ipsam porro accusantium ut vitae. Maiores ea omnis adipisci ipsam et maxime sit. Ut sint similique ea nemo. Molestias molestias cupiditate deserunt et quam.",
                "tech_description": "Rerum eius culpa dignissimos voluptatibus quia quo. Esse iusto quia dignissimos dolores. Minima molestiae odio qui optio illum.",
                "tech_description_en": "Eos maxime blanditiis eius nihil. Cupiditate aut sed tenetur vel voluptatibus tempora. Saepe autem iusto facere autem ipsum ab deleniti. Expedita quis voluptate quia eos aliquid nostrum.",
                "description": "Odio enim velit eius molestiae nam praesentium facere ea. Quis dolores quia et qui. Modi explicabo modi repellendus molestiae sit est.",
                "description_en": "Et provident ea ab aperiam non illum dicta. Unde id consequuntur sint rem non aut. Nam saepe in optio quis quam. Veniam iure ad natus eius incidunt.",
                "usage": "Cum incidunt rerum non illum labore. Excepturi sed qui nihil porro. Perspiciatis deleniti quis autem iste et porro soluta. Autem eum impedit et quaerat. Esse unde exercitationem laborum qui id reiciendis enim.",
                "usage_en": "Natus facilis omnis in enim. Officia vel voluptas illum impedit cupiditate ratione est voluptatem. Et libero voluptatem assumenda.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?36895",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?86423",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?27988",
                "product_video": null,
                "status": 1,
                "rating": 0.48,
                "sold_count": 6323,
                "review_count": 3585,
                "created_at": "2020-07-31 04:15:27",
                "updated_at": "2020-07-22 13:31:18",
                "product_category": {
                    "id": 10,
                    "slug": "reprehenderit-tempora",
                    "title": "精华",
                    "title_en": "explicabo animi ducimus",
                    "describe": "Ullam reiciendis ea nesciunt voluptatem rerum vitae. Distinctio quia sequi ex nemo numquam nulla rerum. Laboriosam aut et at et. Deleniti et commodi reprehenderit sed praesentium eos est.",
                    "describe_en": "Et culpa quia saepe consequatur quam autem. Ad iste eius aut voluptatem repellat. Quaerat dolores voluptatibus ut suscipit.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?83128",
                    "description": "Deleniti dolores quasi consequatur itaque accusamus ullam vel.",
                    "description_en": "Cumque nam tempore voluptas voluptas.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?40429",
                    "parent_id": 10,
                    "created_at": "2020-08-05 12:33:24",
                    "updated_at": "2020-08-16 07:01:16"
                }
            },
            {
                "id": 29,
                "product_category_id": 4,
                "product_name": "钻石焕活面膜",
                "product_name_en": "aperiam odit illo",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?31536",
                "slug": "rerum-culpa",
                "short_description": "Deleniti laudantium perspiciatis dolorem qui iusto error.",
                "short_description_en": "Minus autem nisi tenetur dolorem id. Odio voluptate praesentium molestiae et vel sed quibusdam et. Ipsam voluptatem ut praesentium.",
                "price": "5855.00",
                "sale_price": "5788.00",
                "stock": 360,
                "spec": null,
                "seo_title": "perspiciatis vel et",
                "seo_keyword": "provident",
                "seo_description": "Repellendus ut quo quo non in ut.",
                "benefit": "Qui ut doloremque ut possimus laborum. Omnis vero unde quam est modi molestias. Sed dicta aliquam ut recusandae aut. Magni nulla eos velit neque laboriosam quod ex.",
                "benefit_en": "Sunt non iusto voluptas reiciendis omnis. Omnis ut omnis facere nam quia. Vitae voluptas provident a molestias enim. Ipsum autem et nisi quo.",
                "tech_description": "Est nihil quidem impedit eum assumenda eius perspiciatis. Repellendus vitae facilis alias est ducimus aspernatur. Eveniet qui sequi quod neque sed voluptatum porro vitae.",
                "tech_description_en": "Nostrum dolor tempore illum. Aut a repudiandae consequatur autem sint. Et natus tempora quod non consequuntur vitae.",
                "description": "Consequatur sequi est optio exercitationem dolores voluptatem. Excepturi distinctio ducimus temporibus qui dolor pariatur. Dolorem voluptas cupiditate beatae consequatur.",
                "description_en": "Tempora iusto quia nemo id. Excepturi minus deserunt et dolores eum labore. Distinctio vel qui dolorem ex adipisci.",
                "usage": "Nesciunt quaerat suscipit inventore iusto. Facilis quo ab sint similique rerum aut debitis. Quaerat hic officiis nesciunt labore quod corporis quia.",
                "usage_en": "Laborum et impedit non sed. Totam alias facere corporis ut explicabo exercitationem. Sint ut unde voluptas. Quo possimus rerum est sit sunt nulla.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?30293",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?36746",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?99982",
                "product_video": null,
                "status": 1,
                "rating": 0.63,
                "sold_count": 3856,
                "review_count": 9235,
                "created_at": "2020-07-21 17:37:56",
                "updated_at": "2020-07-31 08:54:52",
                "product_category": {
                    "id": 4,
                    "slug": "ut-sed",
                    "title": "隔离",
                    "title_en": "nesciunt et ullam",
                    "describe": "Officiis dolorem iusto quo tempore perferendis suscipit quisquam. Ut quo ab in repellat iure facilis quibusdam. Rerum sunt magni dolores. Consequatur facere culpa ratione tempora.",
                    "describe_en": "Molestiae accusamus iure tenetur eveniet quibusdam aut recusandae. Reiciendis enim error odit molestiae modi omnis. Possimus quae nihil tempora eligendi et maxime.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?16466",
                    "description": "Corrupti et delectus et qui asperiores.",
                    "description_en": "Similique quod cupiditate soluta numquam.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?34125",
                    "parent_id": 15,
                    "created_at": "2020-07-23 02:43:02",
                    "updated_at": "2020-08-03 20:28:42"
                }
            },
            {
                "id": 30,
                "product_category_id": 7,
                "product_name": "黑钻焕肤水",
                "product_name_en": "sint iusto perferendis",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?39204",
                "slug": "quod-adipisci",
                "short_description": "Alias blanditiis et assumenda doloribus repellendus et.",
                "short_description_en": "Temporibus et et et consectetur sed tenetur ea. Voluptatem tenetur ratione quae architecto officia. Atque veritatis nihil nam odio enim.",
                "price": "3206.00",
                "sale_price": "4913.00",
                "stock": 759,
                "spec": null,
                "seo_title": "iure ex praesentium",
                "seo_keyword": "iusto",
                "seo_description": "Odit ipsam architecto in sed.",
                "benefit": "Dolor impedit repudiandae veniam. Ad ab harum recusandae consequatur nam. Porro non vel possimus fugiat non. Exercitationem voluptatibus vitae ut facere expedita.",
                "benefit_en": "Quod sunt est laborum ab fugiat neque cupiditate qui. Commodi exercitationem repellat laborum est. Soluta ut placeat accusamus veritatis. Similique rerum doloremque aspernatur quia.",
                "tech_description": "Inventore est et voluptatibus recusandae expedita aspernatur nihil accusantium. Et aperiam quam nihil quibusdam impedit. Hic nisi fugiat ipsa porro. Est ullam nulla sequi pariatur tempore aspernatur aspernatur. Error delectus labore iusto.",
                "tech_description_en": "Neque ducimus aut qui ut. Est in fuga neque. Exercitationem consequuntur maiores culpa error.",
                "description": "Ea ad quia numquam nisi dolor est est aliquam. Repellat aut aut laborum et unde dicta quae. Sit omnis sapiente earum blanditiis.",
                "description_en": "Aut molestias magni unde explicabo repudiandae maxime et. Esse vero quia vero dolores. Cumque earum quam omnis eius. Perferendis consequatur architecto rerum est ut neque provident.",
                "usage": "Ut labore nesciunt non ut. Dolores cupiditate impedit aut in est neque. Iure illo perspiciatis odit voluptates non veniam voluptates. Quia possimus voluptatum et quis assumenda laborum.",
                "usage_en": "Non consectetur vel error non. Dolorem molestias voluptatem aut impedit et eos beatae.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?39898",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?17877",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?36924",
                "product_video": null,
                "status": 1,
                "rating": 6.3,
                "sold_count": 3981,
                "review_count": 9179,
                "created_at": "2020-07-23 13:33:40",
                "updated_at": "2020-07-25 03:39:42",
                "product_category": {
                    "id": 7,
                    "slug": "atque-voluptas",
                    "title": "精油",
                    "title_en": "optio adipisci blanditiis",
                    "describe": "Velit consequatur perspiciatis doloremque reiciendis quo. Et sit consequuntur aut libero. Recusandae asperiores et laudantium non.",
                    "describe_en": "Et voluptas adipisci voluptas distinctio error. Et sequi magnam libero est adipisci placeat reprehenderit dolorem. Ipsa iure quia optio porro est aspernatur.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?20173",
                    "description": "Nemo nisi distinctio possimus est.",
                    "description_en": "Vero maxime laboriosam quia impedit nam vel.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?48867",
                    "parent_id": 11,
                    "created_at": "2020-07-30 23:51:10",
                    "updated_at": "2020-07-21 15:41:09"
                }
            },
            {
                "id": 34,
                "product_category_id": 18,
                "product_name": "黑钻焕肤水",
                "product_name_en": "perferendis doloremque eius",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?78687",
                "slug": "amet-et",
                "short_description": "Consequatur officia ut debitis perferendis aut est.",
                "short_description_en": "Quidem harum minima debitis architecto enim. Ut animi officiis eaque molestiae optio fugiat voluptatem. Inventore doloribus voluptas iure soluta quos. Sapiente consequuntur quia cumque sed possimus nisi veritatis. Vitae voluptatem quia sunt nesciunt non porro sunt.",
                "price": "1512.00",
                "sale_price": "2854.00",
                "stock": 947,
                "spec": null,
                "seo_title": "expedita beatae enim",
                "seo_keyword": "neque",
                "seo_description": "Qui iusto commodi ipsa.",
                "benefit": "Ea molestias ratione earum consequatur vitae. Dicta dolore sit est dolorem tenetur molestias quod. Pariatur voluptate consequatur dolor voluptatibus magni autem vel debitis.",
                "benefit_en": "Autem velit magni ratione eius accusantium. Numquam aspernatur officiis quia sit id. Similique reprehenderit similique maiores est. Quis occaecati et et distinctio itaque.",
                "tech_description": "Odio omnis omnis qui. Doloribus odio et qui impedit culpa ex. Consectetur libero cum enim maiores. Nisi ab molestiae mollitia laboriosam laboriosam sed.",
                "tech_description_en": "Voluptatem non repellendus ut commodi odit. Inventore et et aut rerum earum soluta. Ullam quia laboriosam cum eaque. Et quas voluptatem consectetur et animi deserunt rerum.",
                "description": "Voluptatem tenetur quos repellat iure quo mollitia. Fugit iste reprehenderit odio et ad. Quam ipsum libero consectetur quo.",
                "description_en": "Eum ut exercitationem neque dolorem omnis tempore. Quia doloribus ut eveniet. Perferendis eius aut deleniti quod et quo.",
                "usage": "Vel nulla commodi et assumenda. Facere iusto nemo aut sit. Qui omnis ut praesentium inventore eum reiciendis suscipit consectetur. Aut ea iste earum nostrum eaque dolorum praesentium pariatur.",
                "usage_en": "Qui reprehenderit deleniti doloremque iusto et. Debitis cupiditate tenetur aut tempora eius consectetur voluptatem. Est aspernatur unde nam molestiae inventore. Et molestias sunt blanditiis iure et in.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?60832",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?86960",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?26414",
                "product_video": null,
                "status": 1,
                "rating": 7.86,
                "sold_count": 2876,
                "review_count": 2671,
                "created_at": "2020-08-09 03:49:20",
                "updated_at": "2020-07-24 04:02:43",
                "product_category": {
                    "id": 18,
                    "slug": "aut-illum",
                    "title": "睫毛膏",
                    "title_en": "veritatis quod aut",
                    "describe": "Pariatur est corrupti perspiciatis. Aut asperiores cumque qui eum dicta aut. Consequatur quidem sapiente labore doloremque voluptatem magni quia. Nostrum aliquid ipsa velit.",
                    "describe_en": "Ipsum sint accusantium a laboriosam cum. A architecto amet quidem aut suscipit.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?31094",
                    "description": "Ullam sed consequatur repellendus quis.",
                    "description_en": "Et occaecati itaque ex incidunt.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?91102",
                    "parent_id": 19,
                    "created_at": "2020-07-27 02:22:27",
                    "updated_at": "2020-08-01 23:46:17"
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
        "total": 20
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
## According type to change cart item
根据type改变购物车商品数量

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/shop_carts/1?type=repudiandae&product_id=deserunt&amount=quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/shop_carts/1"
);

let params = {
    "type": "repudiandae",
    "product_id": "deserunt",
    "amount": "quia",
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
    "http://localhost/api/shop_carts/1?product_id=sit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/shop_carts/1"
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
    -d '{"province":"voluptas","city":"et","district":"aspernatur","address":"tenetur","zip":"modi","contact_name":"praesentium","contact_phone":"eos"}'

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
    "province": "voluptas",
    "city": "et",
    "district": "aspernatur",
    "address": "tenetur",
    "zip": "modi",
    "contact_name": "praesentium",
    "contact_phone": "eos"
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
    `province` | required |  optional  | 省
        `city` | required |  optional  | 市
        `district` | required |  optional  | 区
        `address` | required |  optional  | 详细地址
        `zip` | required |  optional  | 邮编
        `contact_name` | required |  optional  | 联系人
        `contact_phone` | required |  optional  | 手机号
    
<!-- END_ea009b31c2e7270334c8f572f3ad4561 -->

<!-- START_58d901fe49390c7afe94755dd24b0c3c -->
## Edit user address
编辑用户地址

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/user_addresses/1?province=quasi&city=maxime&district=voluptatem&address=sed&zip=eos&contact_name=aut&contact_phone=eum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_addresses/1"
);

let params = {
    "province": "quasi",
    "city": "maxime",
    "district": "voluptatem",
    "address": "sed",
    "zip": "eos",
    "contact_name": "aut",
    "contact_phone": "eum",
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
    "http://localhost/api/user_profiles?profile_id=doloremque&phone=autem&real_name=iste&sex=dolorem&birthday=et&age=atque&province=nobis&city=quia&district=nobis&address=tempore&zip=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_profiles"
);

let params = {
    "profile_id": "doloremque",
    "phone": "autem",
    "real_name": "iste",
    "sex": "dolorem",
    "birthday": "et",
    "age": "atque",
    "province": "nobis",
    "city": "quia",
    "district": "nobis",
    "address": "tempore",
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
    "http://localhost/api/wish_list?product_id=repellat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/wish_list"
);

let params = {
    "product_id": "repellat",
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
    "http://localhost/api/wish_list?product_id=esse" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/wish_list"
);

let params = {
    "product_id": "esse",
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

#general


<!-- START_77797615aeaa4fce9a94150989aed46f -->
## ResponseCode explain
本方法仅作返回code通用说明(无其他作用)

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/response_code?10001=et&10003=eum&20001=repudiandae&40001=id&40003=enim&40004=doloremque&40005=officiis&50001=maxime" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/response_code"
);

let params = {
    "10001": "et",
    "10003": "eum",
    "20001": "repudiandae",
    "40001": "id",
    "40003": "enim",
    "40004": "doloremque",
    "40005": "officiis",
    "50001": "maxime",
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

<!-- START_fe40fa8b2b43e27d474f3afa126ccfbc -->
## the-house/{slug}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/the-house/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/the-house/1"
);

let headers = {
    "Content-Type": "application/json",
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
`GET the-house/{slug}`


<!-- END_fe40fa8b2b43e27d474f3afa126ccfbc -->


