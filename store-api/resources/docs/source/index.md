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

#[ADMIN] Category story

分类故事
<!-- START_03beced1b66f1ed5912bf94c07e1a9a8 -->
## Get product category stoies
获取产品分类故事

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/category_stories?page=reprehenderit&page_limit=nemo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories"
);

let params = {
    "page": "reprehenderit",
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
    "http://store.wutang.com/admin/category_stories?title=ut&title_en=atque&description=voluptatem&description_en=earum&banner=est&product_category_id=nostrum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories"
);

let params = {
    "title": "ut",
    "title_en": "atque",
    "description": "voluptatem",
    "description_en": "earum",
    "banner": "est",
    "product_category_id": "nostrum",
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
    "http://store.wutang.com/admin/category_stories/1?title=vitae&title_en=ut&description=autem&description_en=quas&banner=aut&product_category_id=sed" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories/1"
);

let params = {
    "title": "vitae",
    "title_en": "ut",
    "description": "autem",
    "description_en": "quas",
    "banner": "aut",
    "product_category_id": "sed",
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

#[ADMIN] Logger

日志管理
<!-- START_fdc2ff2366ce21167235c78796573398 -->
## Get logs list
获取日志列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/logs/1?page=et&page_limit=omnis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/logs/1"
);

let params = {
    "page": "et",
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
    "http://store.wutang.com/admin/logs/1?ids=illo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/logs/1"
);

let params = {
    "ids": "illo",
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
    -G "http://store.wutang.com/admin/order?page=sed&page_limit=aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/order"
);

let params = {
    "page": "sed",
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
    "http://store.wutang.com/admin/order?page=accusantium&page_limit=accusantium&username=rem&order_no=quasi&order_status=saepe" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/order"
);

let params = {
    "page": "accusantium",
    "page_limit": "accusantium",
    "username": "rem",
    "order_no": "quasi",
    "order_status": "saepe",
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
    -G "http://store.wutang.com/admin/product?page=ut&page_limit=aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product"
);

let params = {
    "page": "ut",
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
`GET admin/product`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | 页码
    `page_limit` |  optional  | 每页数量

<!-- END_9a7c60de622aa327ea2ab22f57fe4f40 -->

<!-- START_2a50bdf6cd9fdfa165149d0dd0da7075 -->
## Create product
新建商品

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/product?product_category_id=qui&product_name=beatae&product_name_en=sapiente&thumbnail=modi&slug=harum&short_description=sint&short_description_en=sint&price=quisquam&sale_price=dolores&stock=nulla&seo_title=et&seo_keyword=rerum&seo_description=minima&benefit=totam&benefit_en=aspernatur&tech_description=enim&tech_description_en=accusantium&description=expedita&description_en=aspernatur&usage=sunt&usage_en=ut&main_image=illo&main_image_2=expedita&benefit_image=eum&product_video=eos&status=rerum&rating=unde&sold_count=minima&review_count=debitis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product"
);

let params = {
    "product_category_id": "qui",
    "product_name": "beatae",
    "product_name_en": "sapiente",
    "thumbnail": "modi",
    "slug": "harum",
    "short_description": "sint",
    "short_description_en": "sint",
    "price": "quisquam",
    "sale_price": "dolores",
    "stock": "nulla",
    "seo_title": "et",
    "seo_keyword": "rerum",
    "seo_description": "minima",
    "benefit": "totam",
    "benefit_en": "aspernatur",
    "tech_description": "enim",
    "tech_description_en": "accusantium",
    "description": "expedita",
    "description_en": "aspernatur",
    "usage": "sunt",
    "usage_en": "ut",
    "main_image": "illo",
    "main_image_2": "expedita",
    "benefit_image": "eum",
    "product_video": "eos",
    "status": "rerum",
    "rating": "unde",
    "sold_count": "minima",
    "review_count": "debitis",
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
    "http://store.wutang.com/admin/product/1?product_category_id=aut&product_name=sunt&product_name_en=voluptas&thumbnail=officiis&slug=consequatur&short_description=maxime&short_description_en=modi&price=est&sale_price=enim&stock=enim&seo_title=qui&seo_keyword=adipisci&seo_description=quos&benefit=iste&benefit_en=doloribus&tech_description=consequatur&tech_description_en=officiis&description=debitis&description_en=qui&usage=quaerat&usage_en=deleniti&main_image=aut&main_image_2=voluptatibus&benefit_image=numquam&product_video=distinctio&status=illum&rating=veniam&sold_count=et&review_count=totam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product/1"
);

let params = {
    "product_category_id": "aut",
    "product_name": "sunt",
    "product_name_en": "voluptas",
    "thumbnail": "officiis",
    "slug": "consequatur",
    "short_description": "maxime",
    "short_description_en": "modi",
    "price": "est",
    "sale_price": "enim",
    "stock": "enim",
    "seo_title": "qui",
    "seo_keyword": "adipisci",
    "seo_description": "quos",
    "benefit": "iste",
    "benefit_en": "doloribus",
    "tech_description": "consequatur",
    "tech_description_en": "officiis",
    "description": "debitis",
    "description_en": "qui",
    "usage": "quaerat",
    "usage_en": "deleniti",
    "main_image": "aut",
    "main_image_2": "voluptatibus",
    "benefit_image": "numquam",
    "product_video": "distinctio",
    "status": "illum",
    "rating": "veniam",
    "sold_count": "et",
    "review_count": "totam",
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
    -G "http://store.wutang.com/admin/product_categories?page=voluptatem&page_limit=commodi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories"
);

let params = {
    "page": "voluptatem",
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
    "http://store.wutang.com/admin/product_categories?title=consequuntur&title_en=enim&describe=illo&describe_en=totam&banner=autem&description=sequi&description_en=ratione&img=est&parent_id=rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories"
);

let params = {
    "title": "consequuntur",
    "title_en": "enim",
    "describe": "illo",
    "describe_en": "totam",
    "banner": "autem",
    "description": "sequi",
    "description_en": "ratione",
    "img": "est",
    "parent_id": "rerum",
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
    "http://store.wutang.com/admin/product_categories/1?title=nostrum&title_en=impedit&describe=tempore&describe_en=quis&banner=dolore&description=reprehenderit&description_en=quos&img=sed&parent_id=aperiam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories/1"
);

let params = {
    "title": "nostrum",
    "title_en": "impedit",
    "describe": "tempore",
    "describe_en": "quis",
    "banner": "dolore",
    "description": "reprehenderit",
    "description_en": "quos",
    "img": "sed",
    "parent_id": "aperiam",
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
    "http://store.wutang.com/admin/product_sku?title=voluptatem&description=recusandae&price=voluptatem&stock=ipsam&product_id=tenetur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_sku"
);

let params = {
    "title": "voluptatem",
    "description": "recusandae",
    "price": "voluptatem",
    "stock": "ipsam",
    "product_id": "tenetur",
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
    "http://store.wutang.com/admin/product_sku/1?title=quia&description=accusamus&price=est&stock=unde&product_id=rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_sku/1"
);

let params = {
    "title": "quia",
    "description": "accusamus",
    "price": "est",
    "stock": "unde",
    "product_id": "rerum",
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
    -G "http://store.wutang.com/admin/user?username=ea&page=id&page_limit=quod" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user"
);

let params = {
    "username": "ea",
    "page": "id",
    "page_limit": "quod",
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
    "http://store.wutang.com/admin/user/1?name=numquam&email=hic&phone=veritatis&avatar=ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user/1"
);

let params = {
    "name": "numquam",
    "email": "hic",
    "phone": "veritatis",
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
    "http://store.wutang.com/admin/user/reset_password/1?oldPassword=ducimus&newPassword=animi&newPassword_confirmation=eos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user/reset_password/1"
);

let params = {
    "oldPassword": "ducimus",
    "newPassword": "animi",
    "newPassword_confirmation": "eos",
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
    -G "http://store.wutang.com/admin/get_user?hash_id=necessitatibus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/get_user"
);

let params = {
    "hash_id": "necessitatibus",
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
    "http://store.wutang.com/admin/user_addresses?province=maiores&city=dolores&district=est&address=iste&zip=et&contact_name=minima&contact_phone=sint" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses"
);

let params = {
    "province": "maiores",
    "city": "dolores",
    "district": "est",
    "address": "iste",
    "zip": "et",
    "contact_name": "minima",
    "contact_phone": "sint",
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
    "http://store.wutang.com/admin/user_addresses/1?address_id=maiores&province=quia&city=ut&district=laborum&address=earum&zip=sapiente&contact_name=mollitia&contact_phone=sit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses/1"
);

let params = {
    "address_id": "maiores",
    "province": "quia",
    "city": "ut",
    "district": "laborum",
    "address": "earum",
    "zip": "sapiente",
    "contact_name": "mollitia",
    "contact_phone": "sit",
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
    "http://store.wutang.com/admin/user_addresses/1?address_id=a" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses/1"
);

let params = {
    "address_id": "a",
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
    "http://store.wutang.com/admin/user_profiles/1?profile_id=laborum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_profiles/1"
);

let params = {
    "profile_id": "laborum",
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
    "http://store.wutang.com/admin/user_profiles/1?profile_id=voluptates" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_profiles/1"
);

let params = {
    "profile_id": "voluptates",
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
    -d '{"name":"maiores","username":"ut","password":"alias","captcha_key":"est","captcha_code":"rem","password_question_id":8,"password_answer":"molestias"}'

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
    "name": "maiores",
    "username": "ut",
    "password": "alias",
    "captcha_key": "est",
    "captcha_code": "rem",
    "password_question_id": 8,
    "password_answer": "molestias"
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
    -G "http://store.wutang.com/api/questions?username=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/questions"
);

let params = {
    "username": "et",
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
        "username": "et"
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
    -d '{"username":"cupiditate","password":"officiis"}'

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
    "username": "cupiditate",
    "password": "officiis"
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
    "http://store.wutang.com/api/password_reset?username=magni&password_question_id=rerum&password_answer=et&password=ut&password_confirmation=magnam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/password_reset"
);

let params = {
    "username": "magni",
    "password_question_id": "rerum",
    "password_answer": "et",
    "password": "ut",
    "password_confirmation": "magnam",
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
    "http://store.wutang.com/api/auth/password_change" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"oldPassword":"qui","newPassword":"est","newPassword_confirmation":"repellat"}'

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
    "oldPassword": "qui",
    "newPassword": "est",
    "newPassword_confirmation": "repellat"
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
    -G "http://store.wutang.com/api/order_details/1?no=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/order_details/1"
);

let params = {
    "no": "qui",
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
    -d '{"address_id":"sapiente","remark":"qui","items":[{"product_id":6,"amount":10}]}'

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
    "address_id": "sapiente",
    "remark": "qui",
    "items": [
        {
            "product_id": 6,
            "amount": 10
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
`POST api/orders`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `address_id` | interger |  required  | 地址id
        `remark` | string |  optional  | optional 订单备注
        `items` | array |  required  | 商品项目
        `items.*.product_id` | integer |  required  | 商品id
        `items.*.amount` | integer |  required  | 购买数量
    
<!-- END_285c87403b6cfdebe26bc357f22e870f -->

<!-- START_9d8ded196d3036ace16c0ed016057385 -->
## Check the order status
查询订单状态

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/orders/pay_check?no=aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/orders/pay_check"
);

let params = {
    "no": "aut",
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
    -G "http://store.wutang.com/api/aligateway/pay?no=saepe&total_amount=quis&subject=sint" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/aligateway/pay"
);

let params = {
    "no": "saepe",
    "total_amount": "quis",
    "subject": "sint",
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
null
```

### HTTP Request
`GET api/aligateway/pay`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `no` |  required  | 订单号
    `total_amount` |  required  | 总金额
    `subject` |  required  | 交易名称

<!-- END_a2f0cb2454c12a09b199d57c7e9ad462 -->

<!-- START_6151e9304eabe9201f3887072a828260 -->
## Alipay gateway return
支付宝网关支付后的同步跳转(前端)

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/aligateway/return" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/aligateway/return"
);

let headers = {
    "Content-Type": "application/json",
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
    "http://store.wutang.com/api/aligateway/notify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/aligateway/notify"
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
    -G "http://store.wutang.com/api/alipay/pay?no=non&total_amount=pariatur&subject=doloribus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/alipay/pay"
);

let params = {
    "no": "non",
    "total_amount": "pariatur",
    "subject": "doloribus",
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
    -G "http://store.wutang.com/api/alipay/return" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/alipay/return"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
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
    "http://store.wutang.com/api/alipay/notify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/alipay/notify"
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
    -G "http://store.wutang.com/api/unionpay/pay?no=voluptas&subject=qui&total_amount=omnis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/unionpay/pay"
);

let params = {
    "no": "voluptas",
    "subject": "qui",
    "total_amount": "omnis",
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
    "http://store.wutang.com/api/unionpay/return" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/unionpay/return"
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
    "http://store.wutang.com/api/unionpay/notify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/unionpay/notify"
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
            "slug": "a-voluptatum",
            "title": "睫毛膏",
            "title_en": "rerum delectus consequatur",
            "describe": "Id qui quo est blanditiis. Amet tenetur cumque exercitationem occaecati. Corporis perspiciatis debitis aut est eligendi in sed. Eligendi eum quisquam voluptatem rerum non ut.",
            "describe_en": "Consectetur aut consequatur sed ex id odio rem. Porro consequuntur voluptatem aspernatur natus. Rerum libero et ut id sint occaecati ea. Quisquam temporibus sint ullam quibusdam.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?78187",
            "description": "Ut voluptatem nihil sunt deleniti.",
            "description_en": "Sed iusto reprehenderit aut.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?51817",
            "parent_id": 14,
            "created_at": "2020-08-03 09:48:45",
            "updated_at": "2020-08-02 01:02:03",
            "parent_title": "面霜"
        },
        {
            "id": 2,
            "slug": "fugiat-aut",
            "title": "防晒",
            "title_en": "qui tenetur vel",
            "describe": "Aliquid est qui et placeat quo. Illum sint alias sunt debitis et. Quidem consequatur ut est provident. Aliquam minus cumque deleniti eum ut.",
            "describe_en": "Et nihil quos quas minima. Atque consequatur aut quo id maxime ex sunt. Dolorum perferendis magnam dolorem esse quaerat nemo recusandae nihil.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?63243",
            "description": "Et rerum necessitatibus suscipit asperiores.",
            "description_en": "Praesentium et culpa vel dolores est debitis.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?13194",
            "parent_id": 7,
            "created_at": "2020-07-27 19:28:58",
            "updated_at": "2020-08-20 01:40:52",
            "parent_title": "香水"
        },
        {
            "id": 3,
            "slug": "exercitationem-saepe",
            "title": "眼线",
            "title_en": "in molestiae sit",
            "describe": "Deserunt ea omnis natus architecto. Velit ullam et molestiae labore omnis quia iste. Quis tempora id autem aliquam quo et a iste.",
            "describe_en": "Incidunt asperiores est quaerat. Quis vel qui occaecati explicabo recusandae quos dolores aut. Ut maxime voluptatum dolore laudantium aperiam nesciunt.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?93568",
            "description": "Architecto dolores quia quaerat.",
            "description_en": "Labore dolor laboriosam beatae repudiandae facilis magni.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?55790",
            "parent_id": 16,
            "created_at": "2020-08-09 09:43:24",
            "updated_at": "2020-07-26 06:51:07",
            "parent_title": "乳液"
        },
        {
            "id": 4,
            "slug": "quia-qui",
            "title": "男士护肤",
            "title_en": "praesentium aut fugiat",
            "describe": "Autem iusto nostrum at vero id officia dolores velit. Qui sint quod et eius libero. Nam quia aperiam placeat pariatur. Architecto sit quaerat dolore cupiditate dolores. Aut nemo voluptas non animi.",
            "describe_en": "Sapiente quia laudantium et qui. Aut similique magni quis quos et animi. Quam eum eum pariatur fugiat. Architecto laborum quia est aperiam. Adipisci quos est asperiores ad quis similique quis.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?31847",
            "description": "In repellat velit repudiandae consequatur et.",
            "description_en": "Enim eos voluptatem repellat.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?66155",
            "parent_id": 15,
            "created_at": "2020-08-05 07:01:02",
            "updated_at": "2020-08-11 02:45:23",
            "parent_title": "洁面"
        },
        {
            "id": 5,
            "slug": "dolores-assumenda",
            "title": "精华",
            "title_en": "voluptate consectetur est",
            "describe": "Quis voluptas consequatur blanditiis facilis libero nostrum et facilis. Rerum numquam et eveniet officia asperiores. Deleniti dicta et et fugit sunt veritatis.",
            "describe_en": "Repellendus rerum maiores quasi doloribus. Facere odit fuga velit velit est repudiandae dicta. Rerum soluta nulla aperiam illo quisquam et quasi fugiat. Architecto odio tempore ut ipsum explicabo.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?74498",
            "description": "Id odio repellendus magnam rerum.",
            "description_en": "Aut eum porro sed qui.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?73818",
            "parent_id": 3,
            "created_at": "2020-07-20 20:23:43",
            "updated_at": "2020-07-22 05:59:29",
            "parent_title": "眼线"
        },
        {
            "id": 6,
            "slug": "modi-adipisci",
            "title": "洁面",
            "title_en": "in non magnam",
            "describe": "Sed laborum repudiandae aut consequuntur harum debitis. Enim cumque animi soluta delectus. Molestias tenetur aut et eveniet occaecati ullam dolorem ea.",
            "describe_en": "Autem et magni quas tempore quis possimus quasi. Magnam delectus aut optio rerum.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?45418",
            "description": "Et consequuntur laudantium possimus.",
            "description_en": "Nostrum consequuntur soluta voluptatem aut.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?82691",
            "parent_id": 9,
            "created_at": "2020-08-12 22:46:49",
            "updated_at": "2020-08-18 10:46:42",
            "parent_title": "面霜"
        },
        {
            "id": 7,
            "slug": "corrupti-temporibus",
            "title": "香水",
            "title_en": "ad et rerum",
            "describe": "Rerum culpa ullam exercitationem omnis tempore. Itaque necessitatibus autem totam assumenda. Et dignissimos quos architecto dolorem. Soluta fuga aperiam reiciendis repudiandae.",
            "describe_en": "Sequi consectetur qui tenetur adipisci labore error praesentium. Voluptatum sunt in qui id et. Dolor explicabo quos velit atque.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?54964",
            "description": "Reiciendis et eum facilis omnis veniam.",
            "description_en": "Laborum omnis cum eligendi.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?11864",
            "parent_id": 3,
            "created_at": "2020-08-13 12:00:43",
            "updated_at": "2020-08-08 15:55:57",
            "parent_title": "眼线"
        },
        {
            "id": 8,
            "slug": "nihil-laudantium",
            "title": "腮红",
            "title_en": "suscipit et minus",
            "describe": "Soluta hic distinctio sunt aut consequatur maiores quos. Labore ad consectetur quasi quae sunt corrupti velit. Ut eos quo quas iure.",
            "describe_en": "Non provident ut quia enim nulla ut quia. Totam neque consequatur exercitationem et repellat magnam magni. Vero reiciendis voluptatem animi. Natus ut laudantium hic.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?10701",
            "description": "Ut ut quos aperiam aut illum atque.",
            "description_en": "Earum aperiam voluptas eligendi nemo.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?84329",
            "parent_id": 17,
            "created_at": "2020-08-12 23:32:29",
            "updated_at": "2020-08-07 22:53:43",
            "parent_title": "香水"
        },
        {
            "id": 9,
            "slug": "incidunt-qui",
            "title": "面霜",
            "title_en": "est itaque repellendus",
            "describe": "Voluptatibus velit optio impedit illum. Recusandae natus qui enim minus. Doloremque eaque animi alias quia ea.",
            "describe_en": "At ratione minima sit. Sequi placeat et ut ab praesentium quam. Nulla veniam a libero vero voluptatum illum. Eos quaerat quo corporis sed nesciunt.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?49577",
            "description": "Rerum dolorem et molestias.",
            "description_en": "Deserunt et non doloremque pariatur voluptatem.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?90224",
            "parent_id": 14,
            "created_at": "2020-07-23 16:55:36",
            "updated_at": "2020-08-16 02:37:36",
            "parent_title": "面霜"
        },
        {
            "id": 10,
            "slug": "blanditiis-sunt",
            "title": "隔离",
            "title_en": "voluptatibus aut est",
            "describe": "Quas eveniet aut rem numquam vel. Velit earum corporis accusantium reiciendis mollitia magnam rerum. Est accusantium non vitae.",
            "describe_en": "Et unde iusto minus illum libero qui unde totam. Ut a perferendis commodi. Aut qui velit dolorem ratione pariatur et nulla similique. Id aut quia dolore aut nostrum.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?93465",
            "description": "Et alias exercitationem amet.",
            "description_en": "Aut impedit provident dolore aut.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?43119",
            "parent_id": 12,
            "created_at": "2020-07-23 16:22:40",
            "updated_at": "2020-07-29 03:40:48",
            "parent_title": "面霜"
        },
        {
            "id": 11,
            "slug": "vel-fugiat",
            "title": "面霜",
            "title_en": "aut voluptatem alias",
            "describe": "Soluta iste magnam animi. Quas impedit ab nostrum qui repudiandae illo ullam. Assumenda et optio molestias rerum.",
            "describe_en": "Explicabo consequatur repellendus ducimus repudiandae aperiam praesentium sed consequatur. Excepturi sed optio repellendus qui error perspiciatis consequuntur.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?78073",
            "description": "Velit perspiciatis aut modi sapiente.",
            "description_en": "Aut repellendus consequatur ex veritatis error non.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?19107",
            "parent_id": 8,
            "created_at": "2020-07-24 16:42:20",
            "updated_at": "2020-08-08 22:27:22",
            "parent_title": "腮红"
        },
        {
            "id": 12,
            "slug": "laborum-rem",
            "title": "面霜",
            "title_en": "molestiae rem consequatur",
            "describe": "Dolorem quas temporibus soluta natus ut voluptatum. Consectetur voluptas vel dolor doloribus in. Aspernatur unde ipsam nulla quis est. Sed at quibusdam et molestiae sed fuga.",
            "describe_en": "Iure ut suscipit nemo sint aut voluptas qui. Cumque dolorum magnam dignissimos est. Quis pariatur eos ut in ut iusto modi natus. Eum aut id quae odio veniam.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?28408",
            "description": "Architecto cum explicabo hic fugiat corrupti sed.",
            "description_en": "Quasi et voluptas natus sequi.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?24499",
            "parent_id": 11,
            "created_at": "2020-08-02 15:26:30",
            "updated_at": "2020-08-19 14:51:55",
            "parent_title": "面霜"
        },
        {
            "id": 13,
            "slug": "odio-similique",
            "title": "身体护理",
            "title_en": "consequatur provident tempora",
            "describe": "Repellat eum voluptas eos. Ut necessitatibus culpa itaque illum. Qui ab sequi eum quibusdam quisquam. Eum debitis expedita ipsum aut tenetur.",
            "describe_en": "Quod temporibus dolorum ex debitis assumenda. Dignissimos laudantium expedita mollitia quo. Odit inventore et et veritatis ut rerum quod. Iure velit aut fugit voluptatem.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?97489",
            "description": "Et qui non itaque.",
            "description_en": "Magni quia et debitis et ducimus.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?20863",
            "parent_id": 11,
            "created_at": "2020-08-08 13:29:40",
            "updated_at": "2020-08-10 09:31:09",
            "parent_title": "面霜"
        },
        {
            "id": 14,
            "slug": "repellat-atque",
            "title": "面霜",
            "title_en": "minima molestiae doloribus",
            "describe": "Voluptas illum dolor quia doloremque. Quas aut qui quo fugiat id qui cum eum. Perspiciatis facere ab alias.",
            "describe_en": "Labore magnam quam quaerat quod deleniti et in id. Atque odio vel esse aut. Nihil sed esse perspiciatis quaerat. Odio non quam deserunt quas molestiae et.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?15203",
            "description": "Sed quia recusandae officia.",
            "description_en": "Quis doloremque expedita eius nulla.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?37843",
            "parent_id": 10,
            "created_at": "2020-08-20 07:41:39",
            "updated_at": "2020-07-30 19:56:12",
            "parent_title": "隔离"
        },
        {
            "id": 15,
            "slug": "officia-qui",
            "title": "洁面",
            "title_en": "molestiae fugiat soluta",
            "describe": "Qui laudantium inventore et sequi doloremque. Ut minus dolor enim quisquam ad consequatur dicta. Voluptatem animi eos aperiam error nisi repudiandae. Blanditiis magnam exercitationem sunt eos.",
            "describe_en": "Non modi molestias accusamus voluptate amet odio unde illum. Ab pariatur voluptatem quas at ex accusantium. Id aspernatur optio rem.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?85547",
            "description": "Id expedita et ab.",
            "description_en": "Cumque ab reprehenderit nulla.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?65314",
            "parent_id": 11,
            "created_at": "2020-08-18 22:58:41",
            "updated_at": "2020-08-10 08:05:29",
            "parent_title": "面霜"
        },
        {
            "id": 16,
            "slug": "suscipit-et",
            "title": "乳液",
            "title_en": "cumque animi deserunt",
            "describe": "Cupiditate dicta consequatur est cum mollitia. Doloremque ipsum dignissimos voluptas aspernatur. Ut sapiente culpa perspiciatis omnis quae. Quia repellat id placeat officia et illo.",
            "describe_en": "Velit fugiat possimus voluptatem vel. Consequuntur rerum velit quas rerum ipsum. Suscipit amet totam explicabo autem.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?44411",
            "description": "Quos aut est qui placeat.",
            "description_en": "Optio nemo tempora in sint nostrum voluptas.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?56841",
            "parent_id": 4,
            "created_at": "2020-08-15 05:09:05",
            "updated_at": "2020-08-16 08:32:22",
            "parent_title": "男士护肤"
        },
        {
            "id": 17,
            "slug": "et-et",
            "title": "香水",
            "title_en": "quia et perspiciatis",
            "describe": "Qui aperiam officia perferendis minus quae id ipsam. Voluptatibus et perspiciatis nesciunt dolorum voluptatem quos. Odit laborum et numquam perspiciatis vel quia. Et est numquam ut.",
            "describe_en": "Quisquam optio enim iste. Suscipit error quod nobis occaecati est et voluptatibus. Et placeat eos adipisci itaque. Impedit et fugiat consequatur quis.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?77327",
            "description": "Veniam non eius dolor.",
            "description_en": "Nobis quis quas ut.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?50926",
            "parent_id": 5,
            "created_at": "2020-08-01 20:26:32",
            "updated_at": "2020-08-04 16:54:53",
            "parent_title": "精华"
        },
        {
            "id": 18,
            "slug": "laudantium-atque",
            "title": "睫毛膏",
            "title_en": "culpa quae et",
            "describe": "Quasi sint at qui hic itaque aspernatur. Praesentium vero corrupti qui iure accusantium aut.",
            "describe_en": "Est fugiat veritatis illum dolor doloribus aliquam. Et porro alias est aut laboriosam eligendi. Ipsum quia inventore fugiat voluptatem rem eum recusandae.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?42843",
            "description": "Sit et et odit.",
            "description_en": "Consequatur voluptatem laudantium fugiat perferendis non quo.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?32006",
            "parent_id": 11,
            "created_at": "2020-08-02 16:20:35",
            "updated_at": "2020-07-20 16:40:32",
            "parent_title": "面霜"
        },
        {
            "id": 19,
            "slug": "et-nihil",
            "title": "面膜",
            "title_en": "dolore unde et",
            "describe": "Doloribus vel quia inventore dolores placeat a. Sed ducimus repellendus laboriosam autem aperiam odit molestiae quia. Sit nam nesciunt modi sed qui ad autem.",
            "describe_en": "Vel quisquam excepturi aut reiciendis. Omnis aut quidem perferendis qui saepe sit eligendi. Velit non ea sint repellendus et. Exercitationem ad cumque et pariatur beatae et ut.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?95716",
            "description": "Aspernatur voluptate qui quia et consectetur.",
            "description_en": "Dolorum blanditiis qui harum nostrum.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?98683",
            "parent_id": 9,
            "created_at": "2020-08-18 19:53:29",
            "updated_at": "2020-08-09 08:35:28",
            "parent_title": "面霜"
        },
        {
            "id": 20,
            "slug": "sint-ad",
            "title": "睫毛膏",
            "title_en": "similique magni aut",
            "describe": "Officia numquam voluptas ipsam nemo possimus hic voluptatem. Beatae in beatae dolorem quis. Deserunt rerum quo mollitia numquam omnis.",
            "describe_en": "Non ipsum aut id laboriosam qui repudiandae. Placeat non dignissimos officiis aspernatur laudantium molestiae.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?21755",
            "description": "Sequi dolorem fugiat harum et.",
            "description_en": "Est in dolores quisquam necessitatibus quos et.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?13832",
            "parent_id": 7,
            "created_at": "2020-08-01 22:33:20",
            "updated_at": "2020-07-25 19:18:30",
            "parent_title": "香水"
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
                "product_category_id": 11,
                "product_name": "黑钻肌光精华",
                "product_name_en": "nesciunt quos doloremque",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?67375",
                "slug": "consectetur-ducimus",
                "short_description": "Dolores voluptatem dolorem non ducimus rerum.",
                "short_description_en": "Voluptatem rerum quia eius tempore magnam esse. Rerum occaecati dolor et aut. Repudiandae nisi sequi sunt dolore molestiae aliquam.",
                "price": "7333.00",
                "sale_price": "9073.00",
                "stock": 298,
                "spec": null,
                "seo_title": "quia tempora eligendi",
                "seo_keyword": "veniam",
                "seo_description": "Minus ut vero quis fugit ut.",
                "benefit": "Praesentium esse sunt sed. Repellendus iure dolores recusandae quasi. Sit tempore iste autem quis. Numquam incidunt incidunt molestiae id ut soluta dolor sint.",
                "benefit_en": "Eveniet aspernatur autem et voluptatem vitae minima. Optio impedit consequatur et minus est ratione. Repudiandae aperiam iste quis provident quia. Et rerum aut reiciendis nam dolores.",
                "tech_description": "Temporibus est voluptatem exercitationem sed repellendus et. Praesentium amet et iusto. Numquam ea eum impedit laboriosam veritatis.",
                "tech_description_en": "Aut voluptatem corrupti dicta cumque. Nulla dolorem earum vero alias occaecati. Ipsa commodi eaque repudiandae et aspernatur. Dolorem eos officia blanditiis corporis.",
                "description": "Nisi explicabo eligendi quas. Consequuntur et rem esse. Consectetur deleniti eius error omnis. Dolorem voluptatum quis omnis rerum consequuntur sit.",
                "description_en": "Quo commodi quia rerum in. Eius qui eveniet eos. Aut tenetur natus facilis voluptatem consequatur veniam. Neque pariatur blanditiis voluptatem.",
                "usage": "Numquam dolor magni tenetur molestiae unde odit voluptas. Explicabo est aliquid doloremque nobis voluptate. Eveniet ex culpa quod distinctio rerum alias.",
                "usage_en": "Porro velit magnam quis voluptatem aut dignissimos iusto. Soluta quae laborum unde et. Ut dolor sapiente placeat aliquid magni et tenetur. Nihil non dicta aut eos iusto quia totam ducimus.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?22816",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?11750",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?83769",
                "product_video": null,
                "status": 1,
                "rating": 1.3,
                "sold_count": 6780,
                "review_count": 8718,
                "created_at": "2020-08-11 21:54:44",
                "updated_at": "2020-08-10 10:01:52",
                "product_category": {
                    "id": 11,
                    "slug": "vel-fugiat",
                    "title": "面霜",
                    "title_en": "aut voluptatem alias",
                    "describe": "Soluta iste magnam animi. Quas impedit ab nostrum qui repudiandae illo ullam. Assumenda et optio molestias rerum.",
                    "describe_en": "Explicabo consequatur repellendus ducimus repudiandae aperiam praesentium sed consequatur. Excepturi sed optio repellendus qui error perspiciatis consequuntur.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?78073",
                    "description": "Velit perspiciatis aut modi sapiente.",
                    "description_en": "Aut repellendus consequatur ex veritatis error non.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?19107",
                    "parent_id": 8,
                    "created_at": "2020-07-24 16:42:20",
                    "updated_at": "2020-08-08 22:27:22"
                }
            },
            {
                "id": 2,
                "product_category_id": 4,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "quam explicabo aperiam",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?60509",
                "slug": "totam-adipisci",
                "short_description": "Accusamus qui molestiae fuga.",
                "short_description_en": "Dolorum numquam iure reiciendis ullam dolorem ad. Quam temporibus dolores maiores consequatur id adipisci ea velit. Odit fugiat voluptate quia sed nemo.",
                "price": "1842.00",
                "sale_price": "6126.00",
                "stock": 478,
                "spec": null,
                "seo_title": "odio quidem nihil",
                "seo_keyword": "est",
                "seo_description": "Animi sunt ut accusantium illo.",
                "benefit": "Voluptatem aperiam dolorum qui explicabo ut esse. Nihil commodi sequi in est nisi. Quo voluptate eveniet molestias deserunt ut.",
                "benefit_en": "Quis explicabo explicabo quod sunt aut nihil. Rerum laboriosam neque ipsam autem natus. Vitae rerum voluptatem sunt ipsa consectetur laudantium molestias qui. Velit dolorem ea alias illum est aspernatur.",
                "tech_description": "Molestiae totam illum facere aut sunt corporis. Corporis qui porro veritatis voluptate molestiae corporis a.",
                "tech_description_en": "Ipsa culpa quia omnis aut vel itaque ex nam. Eius quas dolorum ut quis et sapiente in. Sunt eos ut quasi molestias eum odit quis fugiat. Similique aspernatur libero qui cum.",
                "description": "Ut deleniti ipsum expedita occaecati voluptatem dolor molestias corporis. Tempore mollitia et dignissimos ut. Nesciunt minus animi aut modi tempore inventore maxime et.",
                "description_en": "Sed sit perspiciatis laborum et architecto odit. Sunt quis quibusdam at. Maxime et enim tempore labore. Doloremque placeat dolorum explicabo repudiandae dolores. Voluptate rem reiciendis quibusdam necessitatibus dolores.",
                "usage": "Necessitatibus neque quidem officiis dolor ut modi recusandae. Perferendis vel ea omnis tenetur neque quas velit. Magnam dignissimos ut sunt quia. Debitis autem enim veniam qui praesentium aspernatur amet. Pariatur natus soluta quidem impedit qui mollitia error.",
                "usage_en": "Distinctio voluptates eius molestiae architecto quod quas voluptatem. Et eligendi qui hic. Ad sint consequatur quia rerum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?15311",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?41415",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?54437",
                "product_video": null,
                "status": 2,
                "rating": 0.95,
                "sold_count": 4547,
                "review_count": 4560,
                "created_at": "2020-07-28 15:36:13",
                "updated_at": "2020-07-30 10:48:00",
                "product_category": {
                    "id": 4,
                    "slug": "quia-qui",
                    "title": "男士护肤",
                    "title_en": "praesentium aut fugiat",
                    "describe": "Autem iusto nostrum at vero id officia dolores velit. Qui sint quod et eius libero. Nam quia aperiam placeat pariatur. Architecto sit quaerat dolore cupiditate dolores. Aut nemo voluptas non animi.",
                    "describe_en": "Sapiente quia laudantium et qui. Aut similique magni quis quos et animi. Quam eum eum pariatur fugiat. Architecto laborum quia est aperiam. Adipisci quos est asperiores ad quis similique quis.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?31847",
                    "description": "In repellat velit repudiandae consequatur et.",
                    "description_en": "Enim eos voluptatem repellat.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?66155",
                    "parent_id": 15,
                    "created_at": "2020-08-05 07:01:02",
                    "updated_at": "2020-08-11 02:45:23"
                }
            },
            {
                "id": 3,
                "product_category_id": 2,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "ut autem vero",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?33231",
                "slug": "laborum-architecto",
                "short_description": "Molestiae accusamus aut ut.",
                "short_description_en": "Earum vel veritatis laudantium labore. Veniam animi exercitationem ea non. Beatae quibusdam et voluptas sunt rem expedita. Delectus ut facere laboriosam dolore temporibus neque. Doloribus ut dolorum ipsum et laudantium sed distinctio.",
                "price": "8598.00",
                "sale_price": "4555.00",
                "stock": 631,
                "spec": null,
                "seo_title": "dolore ratione molestiae",
                "seo_keyword": "est",
                "seo_description": "Nulla qui sed illum itaque saepe.",
                "benefit": "Nihil consequatur nisi sit necessitatibus. Deserunt quia et et earum.",
                "benefit_en": "Qui dolores asperiores est ut. Qui cupiditate dignissimos eligendi nisi quae cupiditate. Totam odio error id minima.",
                "tech_description": "Nihil est voluptatem fuga voluptatem nulla. Temporibus nisi vel corporis culpa laborum. Ipsum consectetur itaque voluptatem eum nihil. Tempora id aspernatur tempore suscipit porro.",
                "tech_description_en": "Qui debitis nam sint excepturi doloremque vel. Sit asperiores vel soluta molestias.",
                "description": "Commodi excepturi consectetur voluptatem. Veniam voluptatem laboriosam voluptatem sunt. Amet quia deleniti voluptate. Odit natus ea est dolores doloremque.",
                "description_en": "Ad quae et delectus cupiditate saepe hic voluptas. Vitae voluptatem repellendus rem impedit iure. Sunt praesentium nihil eveniet porro. Harum reiciendis atque rem eos non.",
                "usage": "Repellat veniam nostrum enim nihil. Maxime quis qui quis eos. Quod ipsum qui et ut minima. Ut est mollitia sed sint rerum. Voluptates fugiat natus in est.",
                "usage_en": "Quos exercitationem vitae quibusdam quasi provident expedita eveniet a. Autem repudiandae blanditiis a in rem. Vitae quia neque ut et omnis nam. Ut sint sint maiores possimus.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?28735",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?15791",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?57367",
                "product_video": null,
                "status": 2,
                "rating": 5.1,
                "sold_count": 9245,
                "review_count": 8224,
                "created_at": "2020-07-21 19:38:16",
                "updated_at": "2020-07-20 23:22:47",
                "product_category": {
                    "id": 2,
                    "slug": "fugiat-aut",
                    "title": "防晒",
                    "title_en": "qui tenetur vel",
                    "describe": "Aliquid est qui et placeat quo. Illum sint alias sunt debitis et. Quidem consequatur ut est provident. Aliquam minus cumque deleniti eum ut.",
                    "describe_en": "Et nihil quos quas minima. Atque consequatur aut quo id maxime ex sunt. Dolorum perferendis magnam dolorem esse quaerat nemo recusandae nihil.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?63243",
                    "description": "Et rerum necessitatibus suscipit asperiores.",
                    "description_en": "Praesentium et culpa vel dolores est debitis.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?13194",
                    "parent_id": 7,
                    "created_at": "2020-07-27 19:28:58",
                    "updated_at": "2020-08-20 01:40:52"
                }
            },
            {
                "id": 4,
                "product_category_id": 6,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "possimus sit officia",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?74986",
                "slug": "omnis-sed",
                "short_description": "Itaque aut in ut ut voluptatem id.",
                "short_description_en": "Quasi sit debitis unde et. Dolorem et iure ad. Aut cupiditate veritatis dolor. Quia minus quia laborum eligendi quasi qui nostrum corporis.",
                "price": "6041.00",
                "sale_price": "6229.00",
                "stock": 133,
                "spec": null,
                "seo_title": "placeat explicabo similique",
                "seo_keyword": "eligendi",
                "seo_description": "Reiciendis eos aliquam sed porro voluptatibus.",
                "benefit": "Eius natus rem veniam occaecati quia nisi. Beatae ut exercitationem cupiditate sed et aut magnam. Quas perspiciatis temporibus et sit.",
                "benefit_en": "Similique quia debitis qui asperiores non. Neque quibusdam ea incidunt aliquam dolorum veritatis. Nisi quo qui cum.",
                "tech_description": "Necessitatibus neque porro qui totam. Vitae impedit repudiandae nisi vel et odit. Reiciendis nesciunt doloremque maiores sed cupiditate architecto. Occaecati quibusdam voluptatibus laboriosam omnis quas dolorem. Iure amet quia dignissimos vel illo eos voluptate.",
                "tech_description_en": "Enim eum cum quasi dolores eum voluptatum eius. Omnis neque eaque voluptatem voluptatem voluptatum. Magni nisi culpa magnam sapiente aut ducimus natus. Dolores soluta tempora doloribus.",
                "description": "Voluptatem cupiditate dicta ut sint ratione laudantium est. Illo libero sunt vitae hic. Praesentium sint est corporis doloribus ullam occaecati. Dignissimos praesentium debitis hic adipisci eum reiciendis modi. Voluptate numquam magnam quod ut tempora non cupiditate veniam.",
                "description_en": "At distinctio et dolores earum consequatur. Veniam non minima aliquid voluptatibus rem.",
                "usage": "Nihil assumenda voluptate sunt reprehenderit dolorum repudiandae. Autem nihil ullam deleniti ut impedit. Possimus totam illum perferendis tenetur aut ut perspiciatis. Et id voluptate quo rem.",
                "usage_en": "Odio qui et quia ea. Labore eligendi vitae aspernatur sapiente. Dolorem ut autem ullam illum ut quis.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?40202",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?98720",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?97918",
                "product_video": null,
                "status": 3,
                "rating": 4.34,
                "sold_count": 7887,
                "review_count": 5328,
                "created_at": "2020-08-01 09:03:22",
                "updated_at": "2020-08-09 19:26:59",
                "product_category": {
                    "id": 6,
                    "slug": "modi-adipisci",
                    "title": "洁面",
                    "title_en": "in non magnam",
                    "describe": "Sed laborum repudiandae aut consequuntur harum debitis. Enim cumque animi soluta delectus. Molestias tenetur aut et eveniet occaecati ullam dolorem ea.",
                    "describe_en": "Autem et magni quas tempore quis possimus quasi. Magnam delectus aut optio rerum.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?45418",
                    "description": "Et consequuntur laudantium possimus.",
                    "description_en": "Nostrum consequuntur soluta voluptatem aut.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?82691",
                    "parent_id": 9,
                    "created_at": "2020-08-12 22:46:49",
                    "updated_at": "2020-08-18 10:46:42"
                }
            },
            {
                "id": 5,
                "product_category_id": 15,
                "product_name": "黑钻焕肤水",
                "product_name_en": "expedita cumque aut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?57235",
                "slug": "quas-consequatur",
                "short_description": "Odit possimus commodi reiciendis officia.",
                "short_description_en": "Magnam architecto dolores delectus omnis suscipit dicta omnis. Vel fugiat voluptas delectus sint expedita sint. Sit sint eaque voluptatem cum consequuntur consequatur dicta.",
                "price": "6788.00",
                "sale_price": "9632.00",
                "stock": 607,
                "spec": null,
                "seo_title": "molestiae et accusantium",
                "seo_keyword": "vel",
                "seo_description": "Est est recusandae quia et.",
                "benefit": "Quod laborum libero harum sint et nisi quia. Minus ad quidem minima maiores ex quam. Sit repellendus nam eos suscipit. Quia blanditiis quia molestias velit animi quis sed.",
                "benefit_en": "Illum doloribus ut dolorem. Repellendus inventore omnis expedita et. Rerum voluptates odio nihil optio. Placeat ducimus omnis et.",
                "tech_description": "Ducimus aut nulla eum similique consequuntur sit. Libero error repudiandae nihil autem deserunt nesciunt voluptatibus. Quia accusantium voluptas quia repudiandae natus provident. Delectus tempora totam quas deserunt at nihil.",
                "tech_description_en": "Ab adipisci neque ipsa aliquam et dolores ut temporibus. Vel porro nisi minima architecto nobis qui. In officiis soluta eum nam est et. Aspernatur nulla ab nihil quis aut est nulla.",
                "description": "Explicabo nostrum molestiae fugit ipsum fuga vel. Non pariatur veritatis vitae qui sint sapiente aut voluptatem. Ullam natus illum sapiente atque blanditiis harum nesciunt.",
                "description_en": "Molestias atque labore architecto. Iure beatae suscipit sint corrupti a culpa. Minus nobis voluptates pariatur necessitatibus et perferendis debitis.",
                "usage": "Corporis eum sapiente alias voluptatem vel modi. Aspernatur rerum nihil eum ea. Temporibus quod officiis laborum consequatur. Quaerat eius consectetur dolorem modi asperiores. Et excepturi et aspernatur dolor.",
                "usage_en": "Fugiat quis quo temporibus quia explicabo et ullam. Ex consequatur quas excepturi aut quis in repellat. Labore sit ut ea aut ut et.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?10539",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?99810",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?76295",
                "product_video": null,
                "status": 3,
                "rating": 2.25,
                "sold_count": 3717,
                "review_count": 5584,
                "created_at": "2020-07-30 12:27:27",
                "updated_at": "2020-08-17 03:12:11",
                "product_category": {
                    "id": 15,
                    "slug": "officia-qui",
                    "title": "洁面",
                    "title_en": "molestiae fugiat soluta",
                    "describe": "Qui laudantium inventore et sequi doloremque. Ut minus dolor enim quisquam ad consequatur dicta. Voluptatem animi eos aperiam error nisi repudiandae. Blanditiis magnam exercitationem sunt eos.",
                    "describe_en": "Non modi molestias accusamus voluptate amet odio unde illum. Ab pariatur voluptatem quas at ex accusantium. Id aspernatur optio rem.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?85547",
                    "description": "Id expedita et ab.",
                    "description_en": "Cumque ab reprehenderit nulla.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?65314",
                    "parent_id": 11,
                    "created_at": "2020-08-18 22:58:41",
                    "updated_at": "2020-08-10 08:05:29"
                }
            },
            {
                "id": 6,
                "product_category_id": 12,
                "product_name": "钻石焕活面膜",
                "product_name_en": "dolor perferendis aliquid",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?40329",
                "slug": "sed-ratione",
                "short_description": "Non fugiat autem repellat tempore voluptas similique.",
                "short_description_en": "Ipsa fuga eligendi in expedita sit qui. Autem sit nostrum necessitatibus consectetur enim. Neque quia sit ut quia voluptates. Ea tempora minus fugiat officia animi.",
                "price": "9706.00",
                "sale_price": "4081.00",
                "stock": 419,
                "spec": null,
                "seo_title": "deleniti iure pariatur",
                "seo_keyword": "et",
                "seo_description": "Nesciunt in dolor ullam sunt officiis.",
                "benefit": "Doloribus eius voluptatem iure quia repudiandae maxime aut. Ut itaque repellat reiciendis rerum eligendi. Ipsa dolorem dolorum aut illo et facilis.",
                "benefit_en": "Eos consequatur tempore aut non numquam. Mollitia explicabo repellat et vel. Quos dolorum vero mollitia asperiores. Cupiditate blanditiis cum repellendus ipsam.",
                "tech_description": "Molestias facilis excepturi aut nobis. Et totam et aut neque dolorem voluptatem qui. Hic blanditiis alias optio corrupti possimus nesciunt voluptatem sint. Provident accusamus quibusdam eligendi perspiciatis sit.",
                "tech_description_en": "Sed consequatur est sapiente. Inventore natus consequatur officiis nihil voluptatem aut nostrum ut. Quia blanditiis delectus quos dolor corrupti similique possimus.",
                "description": "At est alias nemo velit. Dolor voluptas est natus laborum ratione est culpa. Vel dolorem impedit qui. Dignissimos eligendi distinctio esse fuga quia labore.",
                "description_en": "Doloribus quidem qui quibusdam qui. Nostrum dignissimos sit ut. Accusamus aspernatur quam vero harum eos. Nulla sint eius nisi eius.",
                "usage": "Placeat qui asperiores porro sapiente dolorem. Repudiandae quidem laborum alias ducimus nulla facere fugiat. Possimus qui rerum quis quia aliquam molestiae accusantium. Sint reiciendis et id dolorem.",
                "usage_en": "Harum qui animi cum mollitia sint dicta magni dicta. Quia soluta et inventore voluptatem.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?93907",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?93324",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?48042",
                "product_video": null,
                "status": 1,
                "rating": 3.17,
                "sold_count": 7285,
                "review_count": 1483,
                "created_at": "2020-07-25 16:41:17",
                "updated_at": "2020-08-18 18:59:59",
                "product_category": {
                    "id": 12,
                    "slug": "laborum-rem",
                    "title": "面霜",
                    "title_en": "molestiae rem consequatur",
                    "describe": "Dolorem quas temporibus soluta natus ut voluptatum. Consectetur voluptas vel dolor doloribus in. Aspernatur unde ipsam nulla quis est. Sed at quibusdam et molestiae sed fuga.",
                    "describe_en": "Iure ut suscipit nemo sint aut voluptas qui. Cumque dolorum magnam dignissimos est. Quis pariatur eos ut in ut iusto modi natus. Eum aut id quae odio veniam.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?28408",
                    "description": "Architecto cum explicabo hic fugiat corrupti sed.",
                    "description_en": "Quasi et voluptas natus sequi.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?24499",
                    "parent_id": 11,
                    "created_at": "2020-08-02 15:26:30",
                    "updated_at": "2020-08-19 14:51:55"
                }
            },
            {
                "id": 7,
                "product_category_id": 14,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "rerum id enim",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?12076",
                "slug": "accusantium-eius",
                "short_description": "Voluptas dolorem voluptate natus unde doloremque est.",
                "short_description_en": "Officiis sint atque et minus eos molestiae. Ut voluptatibus et necessitatibus voluptates. Tempora nostrum voluptatem eos nihil.",
                "price": "496.00",
                "sale_price": "6078.00",
                "stock": 836,
                "spec": null,
                "seo_title": "sed velit vero",
                "seo_keyword": "ea",
                "seo_description": "Nesciunt consequuntur est provident corrupti rerum.",
                "benefit": "Dolor possimus eos natus et ipsam numquam ipsam dignissimos. Dolores molestias quis officiis provident laudantium vel et. Quo reiciendis sed distinctio et ut. Numquam quis est assumenda ipsa animi nam maiores. Esse quia quis et nam eos.",
                "benefit_en": "Ratione ea unde quo molestiae maxime sapiente harum. Perspiciatis in vel est et. Ut magnam officia quod et vel.",
                "tech_description": "Sunt aut illum et quam sint. Quibusdam velit qui et aut. Voluptatem laboriosam sapiente ullam aut aut.",
                "tech_description_en": "Et et omnis quis. Sunt sed dicta fuga rerum reiciendis quidem aut voluptas. Eos voluptatibus recusandae ut asperiores velit in quas. Alias minus aliquid nihil corrupti.",
                "description": "Voluptates omnis eligendi sit accusantium. Nemo et soluta corrupti commodi. Doloribus officia alias officiis unde perspiciatis unde voluptas.",
                "description_en": "Amet in beatae veritatis asperiores et aspernatur eligendi. Qui eos dolorem qui velit et sed. Totam voluptatem nobis exercitationem quia.",
                "usage": "Dolor ex dignissimos molestiae voluptatem. Ea recusandae sed et in recusandae nemo qui. Sequi eaque voluptates dicta fuga repudiandae libero ab.",
                "usage_en": "Officia dolor eaque eum id repudiandae cumque. Unde cumque libero veritatis qui aut hic ut. Est ut laudantium numquam dolorem quas sit qui.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?56680",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?20213",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?40718",
                "product_video": null,
                "status": 3,
                "rating": 5.63,
                "sold_count": 2470,
                "review_count": 3754,
                "created_at": "2020-08-17 13:41:07",
                "updated_at": "2020-07-27 20:09:21",
                "product_category": {
                    "id": 14,
                    "slug": "repellat-atque",
                    "title": "面霜",
                    "title_en": "minima molestiae doloribus",
                    "describe": "Voluptas illum dolor quia doloremque. Quas aut qui quo fugiat id qui cum eum. Perspiciatis facere ab alias.",
                    "describe_en": "Labore magnam quam quaerat quod deleniti et in id. Atque odio vel esse aut. Nihil sed esse perspiciatis quaerat. Odio non quam deserunt quas molestiae et.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?15203",
                    "description": "Sed quia recusandae officia.",
                    "description_en": "Quis doloremque expedita eius nulla.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?37843",
                    "parent_id": 10,
                    "created_at": "2020-08-20 07:41:39",
                    "updated_at": "2020-07-30 19:56:12"
                }
            },
            {
                "id": 8,
                "product_category_id": 2,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "dolorum accusamus necessitatibus",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?77627",
                "slug": "quo-molestias",
                "short_description": "Illo odit qui quas unde iusto.",
                "short_description_en": "Nesciunt sit velit dolorem quo. Voluptate nam nemo ut tempora nesciunt est corporis. Voluptatibus tempora eos molestiae voluptas.",
                "price": "1763.00",
                "sale_price": "9939.00",
                "stock": 303,
                "spec": null,
                "seo_title": "amet voluptatem atque",
                "seo_keyword": "nisi",
                "seo_description": "Nihil facere soluta consequuntur inventore.",
                "benefit": "Recusandae qui qui earum inventore. Deserunt est sunt occaecati numquam ratione. Minima reprehenderit molestias sunt tempore laudantium aut.",
                "benefit_en": "Voluptates similique modi qui quia. Rerum quos quis consequatur voluptatem qui voluptatibus harum sit. Vel quia rerum temporibus alias consequatur voluptas. Est aliquid numquam architecto dolore incidunt alias voluptas.",
                "tech_description": "Quia sit blanditiis qui. Debitis mollitia sunt dolor et. Voluptatum repellendus rem voluptatem culpa amet.",
                "tech_description_en": "Nemo unde voluptate et soluta possimus nemo optio. Voluptas facilis dolorum tempora aperiam voluptatibus non quidem. Enim eaque nisi dolorem sit voluptates ut. Consequatur laboriosam ut error ut quia.",
                "description": "Ea vel sit aperiam reiciendis et. Accusamus qui omnis ea qui cum. Odit necessitatibus velit et ipsum consequatur provident in. Qui assumenda cumque sed.",
                "description_en": "Atque earum est dolores sed voluptas omnis. Vero quibusdam ad asperiores officiis. Dolorem quia natus ab quo aspernatur eligendi voluptate aut. Fugiat at delectus cupiditate consequuntur consectetur voluptatem aut aut.",
                "usage": "Occaecati nam dolorem laudantium aut autem officia. Quibusdam et ullam unde et. Non facere qui minus natus illo mollitia eos. Et omnis fugit necessitatibus corporis necessitatibus praesentium dolores.",
                "usage_en": "Sed sapiente numquam quasi non fuga. Qui quaerat est tenetur nostrum labore id.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?72160",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?27337",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?93510",
                "product_video": null,
                "status": 1,
                "rating": 8.33,
                "sold_count": 6742,
                "review_count": 7823,
                "created_at": "2020-08-15 14:51:34",
                "updated_at": "2020-08-13 18:27:52",
                "product_category": {
                    "id": 2,
                    "slug": "fugiat-aut",
                    "title": "防晒",
                    "title_en": "qui tenetur vel",
                    "describe": "Aliquid est qui et placeat quo. Illum sint alias sunt debitis et. Quidem consequatur ut est provident. Aliquam minus cumque deleniti eum ut.",
                    "describe_en": "Et nihil quos quas minima. Atque consequatur aut quo id maxime ex sunt. Dolorum perferendis magnam dolorem esse quaerat nemo recusandae nihil.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?63243",
                    "description": "Et rerum necessitatibus suscipit asperiores.",
                    "description_en": "Praesentium et culpa vel dolores est debitis.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?13194",
                    "parent_id": 7,
                    "created_at": "2020-07-27 19:28:58",
                    "updated_at": "2020-08-20 01:40:52"
                }
            },
            {
                "id": 9,
                "product_category_id": 8,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "debitis accusantium velit",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?98632",
                "slug": "pariatur-excepturi",
                "short_description": "Velit quis reprehenderit autem.",
                "short_description_en": "Ut et quidem officia nemo deleniti suscipit alias. Impedit blanditiis ut natus quibusdam ut tempora quo. Explicabo consequatur eum assumenda eum excepturi quia quidem consequatur.",
                "price": "9120.00",
                "sale_price": "6626.00",
                "stock": 724,
                "spec": null,
                "seo_title": "saepe voluptatem mollitia",
                "seo_keyword": "necessitatibus",
                "seo_description": "Magni magni voluptas sapiente id.",
                "benefit": "Saepe nostrum tempore sequi non reiciendis tempore natus est. Labore ab ducimus eius nam. Optio accusamus et et sit sint molestias debitis laudantium. Pariatur odio deleniti perspiciatis cum occaecati quae illum.",
                "benefit_en": "Quam quae sunt officiis sit omnis. Ullam totam deleniti at ut. Sapiente sapiente ea deserunt molestiae sunt in.",
                "tech_description": "Impedit aut mollitia dolorum consequatur. Officiis dolorem et et. Sit quo fugit sed. Velit labore repellat minus fugit omnis veritatis consequatur asperiores.",
                "tech_description_en": "Sit magnam est corrupti recusandae saepe laudantium. Consequatur sint deleniti cumque nam quam sed. Provident sint laudantium blanditiis nisi temporibus quod. Dolorum assumenda doloremque natus nam assumenda neque.",
                "description": "Libero quod ipsam tempora in maiores iure. Quasi in vero dolores voluptate qui ut. Fuga sunt dolorem corrupti est quo. Corporis hic et ut iste dignissimos vero.",
                "description_en": "Est modi est magni fuga quia quos in. Ex culpa qui laborum ipsa ut ea qui. Corrupti qui non delectus aut omnis corrupti dolorum.",
                "usage": "Fugiat libero voluptas fugiat reprehenderit ut et sint. Nulla tempore rerum consectetur voluptas repellat iure.",
                "usage_en": "Explicabo corrupti quas beatae recusandae tempore. Facere tempore ea cumque vel. Maiores nobis voluptate sit nobis mollitia illum dignissimos atque. Voluptatibus aut consequatur eius quia est fugiat.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?68499",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?35271",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?76871",
                "product_video": null,
                "status": 2,
                "rating": 5.61,
                "sold_count": 6385,
                "review_count": 3827,
                "created_at": "2020-08-18 09:22:25",
                "updated_at": "2020-07-23 23:29:57",
                "product_category": {
                    "id": 8,
                    "slug": "nihil-laudantium",
                    "title": "腮红",
                    "title_en": "suscipit et minus",
                    "describe": "Soluta hic distinctio sunt aut consequatur maiores quos. Labore ad consectetur quasi quae sunt corrupti velit. Ut eos quo quas iure.",
                    "describe_en": "Non provident ut quia enim nulla ut quia. Totam neque consequatur exercitationem et repellat magnam magni. Vero reiciendis voluptatem animi. Natus ut laudantium hic.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?10701",
                    "description": "Ut ut quos aperiam aut illum atque.",
                    "description_en": "Earum aperiam voluptas eligendi nemo.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?84329",
                    "parent_id": 17,
                    "created_at": "2020-08-12 23:32:29",
                    "updated_at": "2020-08-07 22:53:43"
                }
            },
            {
                "id": 10,
                "product_category_id": 5,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "quis doloremque consequatur",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?45816",
                "slug": "sed-est",
                "short_description": "Soluta voluptatem mollitia eum voluptate vero quo.",
                "short_description_en": "Maiores ea sit delectus omnis debitis dolor. Hic cum ut blanditiis at minima eius. Vitae quisquam quia consequatur odit. Qui natus qui asperiores alias ut harum.",
                "price": "1940.00",
                "sale_price": "6705.00",
                "stock": 285,
                "spec": null,
                "seo_title": "quo molestiae id",
                "seo_keyword": "quod",
                "seo_description": "Et non officiis id cupiditate.",
                "benefit": "Consequatur ut dignissimos deleniti ex repellat possimus libero. Non quia sit accusantium aut nobis. Magni corporis rerum cumque eius ab voluptatem veritatis. Veniam dolore harum libero veritatis et.",
                "benefit_en": "Incidunt fuga vel aut at voluptate ut. Autem dicta recusandae voluptatem quis molestias. Modi vero similique quos quia.",
                "tech_description": "Qui cupiditate iure pariatur. Nisi inventore est eum eaque. Deleniti error sit nobis accusamus facilis voluptatem. Voluptatum et corporis molestias.",
                "tech_description_en": "Quia accusamus repudiandae iure voluptates. Accusamus nihil beatae cumque veniam. Animi officia ea velit sit repellendus nobis vitae. Expedita non placeat velit nisi odio aut saepe et.",
                "description": "Nemo ut iste quia nihil aut qui qui. Quo in ab quia et.",
                "description_en": "Qui mollitia sit nemo ipsum eius. Molestias quo quasi hic non eveniet. Labore ullam fugiat in magnam ab aut. Sequi eos similique sed excepturi qui necessitatibus.",
                "usage": "Qui vel inventore ad ut et earum architecto quaerat. Et natus aspernatur quasi minima qui. Perspiciatis officia et ut aut nihil illum est. Porro beatae officia quam at est ut ad voluptas. Sit ducimus id ut quidem.",
                "usage_en": "Vero explicabo inventore et. Cupiditate velit molestiae et ullam alias magni. Deleniti ratione et expedita.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?80299",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?44802",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?29255",
                "product_video": null,
                "status": 2,
                "rating": 5.85,
                "sold_count": 3639,
                "review_count": 4860,
                "created_at": "2020-07-30 08:37:17",
                "updated_at": "2020-08-16 20:56:35",
                "product_category": {
                    "id": 5,
                    "slug": "dolores-assumenda",
                    "title": "精华",
                    "title_en": "voluptate consectetur est",
                    "describe": "Quis voluptas consequatur blanditiis facilis libero nostrum et facilis. Rerum numquam et eveniet officia asperiores. Deleniti dicta et et fugit sunt veritatis.",
                    "describe_en": "Repellendus rerum maiores quasi doloribus. Facere odit fuga velit velit est repudiandae dicta. Rerum soluta nulla aperiam illo quisquam et quasi fugiat. Architecto odio tempore ut ipsum explicabo.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?74498",
                    "description": "Id odio repellendus magnam rerum.",
                    "description_en": "Aut eum porro sed qui.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?73818",
                    "parent_id": 3,
                    "created_at": "2020-07-20 20:23:43",
                    "updated_at": "2020-07-22 05:59:29"
                }
            },
            {
                "id": 11,
                "product_category_id": 2,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "et ad consectetur",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?71462",
                "slug": "non-qui",
                "short_description": "Harum quos perspiciatis aut sunt.",
                "short_description_en": "Tempora ipsum consequuntur maiores eos velit et recusandae molestiae. Aspernatur ab totam sit et labore molestiae sint voluptatem. Adipisci iusto fugiat sed quod tempora explicabo praesentium repudiandae. Sapiente commodi distinctio in eveniet nihil nesciunt corporis voluptas.",
                "price": "683.00",
                "sale_price": "3441.00",
                "stock": 496,
                "spec": null,
                "seo_title": "exercitationem ipsum repellat",
                "seo_keyword": "et",
                "seo_description": "Voluptatem eveniet voluptatem est recusandae est.",
                "benefit": "Exercitationem ut soluta voluptas quas. Similique alias temporibus delectus mollitia et sed aut praesentium. Esse quia autem adipisci sed minima et similique cumque.",
                "benefit_en": "Quo quia dolores pariatur aut. Est atque qui non ipsum maxime fugiat odit.",
                "tech_description": "Animi debitis quidem saepe distinctio beatae. Saepe enim excepturi neque optio. Ad nostrum possimus sunt reprehenderit. Molestias culpa quas labore harum.",
                "tech_description_en": "Et doloremque quia occaecati aperiam enim. Est omnis repellat illum reiciendis eius iure et. Laborum qui esse consectetur.",
                "description": "Et tempora voluptatem consequatur. Ex minima similique ex incidunt provident nihil odit. Quas explicabo minima dolorem ex ad repellendus aut.",
                "description_en": "Excepturi minima impedit perferendis dolorem quisquam possimus. Eligendi ratione deleniti velit magni. Itaque veniam eum quis nemo autem maxime.",
                "usage": "Dolorem illum et alias. Reiciendis nam vero omnis minus voluptatem non. Nemo corporis qui aut magnam. Ut facere debitis autem aspernatur non placeat veniam.",
                "usage_en": "Repellendus maiores omnis quibusdam reiciendis. Ad corporis aut officia repellendus laborum. Eius quidem vero laboriosam quia quia. Numquam est tempore aut dicta tempora ipsum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?20098",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?61403",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?25975",
                "product_video": null,
                "status": 2,
                "rating": 1.21,
                "sold_count": 1410,
                "review_count": 5622,
                "created_at": "2020-08-02 10:19:34",
                "updated_at": "2020-07-20 21:32:31",
                "product_category": {
                    "id": 2,
                    "slug": "fugiat-aut",
                    "title": "防晒",
                    "title_en": "qui tenetur vel",
                    "describe": "Aliquid est qui et placeat quo. Illum sint alias sunt debitis et. Quidem consequatur ut est provident. Aliquam minus cumque deleniti eum ut.",
                    "describe_en": "Et nihil quos quas minima. Atque consequatur aut quo id maxime ex sunt. Dolorum perferendis magnam dolorem esse quaerat nemo recusandae nihil.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?63243",
                    "description": "Et rerum necessitatibus suscipit asperiores.",
                    "description_en": "Praesentium et culpa vel dolores est debitis.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?13194",
                    "parent_id": 7,
                    "created_at": "2020-07-27 19:28:58",
                    "updated_at": "2020-08-20 01:40:52"
                }
            },
            {
                "id": 12,
                "product_category_id": 2,
                "product_name": "黑钻焕肤水",
                "product_name_en": "perspiciatis voluptates eos",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?72209",
                "slug": "in-exercitationem",
                "short_description": "Quo cum debitis sed et et vitae.",
                "short_description_en": "Facilis deleniti ad earum fuga. Voluptatem blanditiis dolor modi inventore.",
                "price": "2942.00",
                "sale_price": "1503.00",
                "stock": 243,
                "spec": null,
                "seo_title": "hic quis omnis",
                "seo_keyword": "ut",
                "seo_description": "Necessitatibus consequatur fugit similique totam qui.",
                "benefit": "Rerum consequatur doloremque aut consequatur unde itaque. Exercitationem aut excepturi vel hic deleniti nam odit sapiente. Est praesentium doloribus natus et.",
                "benefit_en": "Et non amet quasi est doloribus eos. Nisi quisquam consequatur et facilis modi qui doloribus voluptas. Eum et dolor dolorem optio esse laborum. Ducimus perspiciatis dolorem saepe deserunt modi et.",
                "tech_description": "Ut accusamus officiis accusamus eum debitis deleniti at. Non vero qui blanditiis eos nam velit soluta. Ut veniam debitis perferendis harum dolores. Maxime eum voluptas temporibus.",
                "tech_description_en": "A sequi praesentium doloribus dolorem explicabo non. Quia quisquam omnis reiciendis dolore perspiciatis dolorem. Commodi et sint id fuga voluptatibus ratione aut.",
                "description": "Tenetur explicabo repudiandae sit blanditiis. Quia excepturi iure id magni facilis doloribus. Nihil aut sunt nemo veniam aperiam similique. Sed ipsum sapiente nobis nesciunt ad veniam vitae.",
                "description_en": "Sed repellendus suscipit voluptatem in. Ut dolor et suscipit totam sapiente corrupti cupiditate. Pariatur dolorem totam totam omnis aperiam. Molestiae vitae quia consequatur.",
                "usage": "Aut ipsum maiores laudantium officia. Asperiores debitis voluptatem quia cumque molestiae. Facere ut dignissimos voluptates ea consequatur reiciendis.",
                "usage_en": "Placeat sit praesentium cumque magni. Voluptatibus dicta qui qui et iste quasi qui. Quis ut reprehenderit quos repellendus.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?27797",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?52196",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?76562",
                "product_video": null,
                "status": 3,
                "rating": 3.3,
                "sold_count": 3891,
                "review_count": 2349,
                "created_at": "2020-08-10 20:28:54",
                "updated_at": "2020-08-14 11:09:19",
                "product_category": {
                    "id": 2,
                    "slug": "fugiat-aut",
                    "title": "防晒",
                    "title_en": "qui tenetur vel",
                    "describe": "Aliquid est qui et placeat quo. Illum sint alias sunt debitis et. Quidem consequatur ut est provident. Aliquam minus cumque deleniti eum ut.",
                    "describe_en": "Et nihil quos quas minima. Atque consequatur aut quo id maxime ex sunt. Dolorum perferendis magnam dolorem esse quaerat nemo recusandae nihil.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?63243",
                    "description": "Et rerum necessitatibus suscipit asperiores.",
                    "description_en": "Praesentium et culpa vel dolores est debitis.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?13194",
                    "parent_id": 7,
                    "created_at": "2020-07-27 19:28:58",
                    "updated_at": "2020-08-20 01:40:52"
                }
            },
            {
                "id": 13,
                "product_category_id": 12,
                "product_name": "黑钻焕肤水",
                "product_name_en": "et eum eum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?82590",
                "slug": "ut-et",
                "short_description": "Inventore maiores assumenda eum.",
                "short_description_en": "Nesciunt aut eius tenetur quae ut qui facilis. Beatae aperiam veritatis consectetur doloremque sed. Eaque pariatur excepturi adipisci et distinctio. Minus et explicabo dolor error. Voluptatibus et officiis quas vel culpa aliquam aspernatur.",
                "price": "5578.00",
                "sale_price": "8350.00",
                "stock": 199,
                "spec": null,
                "seo_title": "et qui consectetur",
                "seo_keyword": "ea",
                "seo_description": "Dolor fuga eaque eveniet animi molestias est.",
                "benefit": "Recusandae eum vero similique vel omnis amet. Praesentium rerum et facilis blanditiis dolor.",
                "benefit_en": "Amet blanditiis facere labore. Earum hic sunt ut molestiae. Doloremque dicta voluptatem qui.",
                "tech_description": "Dolorem nesciunt provident ut. Quis eius et saepe consequatur enim. Ut fugit est architecto voluptatem. Qui aliquam quis voluptas quisquam ut velit.",
                "tech_description_en": "Harum quidem tenetur autem illo beatae ipsam. Ut molestiae distinctio harum. Illo officia repudiandae voluptatem molestias nemo odio. Enim a nostrum similique aspernatur ullam amet accusantium.",
                "description": "Et atque ex quia. Libero sunt esse nisi deserunt itaque. Magni nihil voluptas et ut est.",
                "description_en": "Quo rem hic nemo ea quis rerum atque. Nobis pariatur sit et qui. Nobis ut impedit velit hic voluptas similique. Aut autem praesentium numquam et saepe autem sed.",
                "usage": "Et perferendis perferendis voluptatem beatae saepe eum dolorem. Asperiores doloremque iure iure ducimus quidem inventore aut. Amet illum maiores non qui aliquid recusandae magnam. Et officia nulla sequi minus corrupti est et.",
                "usage_en": "Sed qui consequatur culpa sapiente iure. Consequatur sint iusto deleniti assumenda est.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?80745",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?77401",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?35217",
                "product_video": null,
                "status": 1,
                "rating": 1.56,
                "sold_count": 3634,
                "review_count": 5274,
                "created_at": "2020-08-15 22:00:34",
                "updated_at": "2020-08-19 07:06:10",
                "product_category": {
                    "id": 12,
                    "slug": "laborum-rem",
                    "title": "面霜",
                    "title_en": "molestiae rem consequatur",
                    "describe": "Dolorem quas temporibus soluta natus ut voluptatum. Consectetur voluptas vel dolor doloribus in. Aspernatur unde ipsam nulla quis est. Sed at quibusdam et molestiae sed fuga.",
                    "describe_en": "Iure ut suscipit nemo sint aut voluptas qui. Cumque dolorum magnam dignissimos est. Quis pariatur eos ut in ut iusto modi natus. Eum aut id quae odio veniam.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?28408",
                    "description": "Architecto cum explicabo hic fugiat corrupti sed.",
                    "description_en": "Quasi et voluptas natus sequi.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?24499",
                    "parent_id": 11,
                    "created_at": "2020-08-02 15:26:30",
                    "updated_at": "2020-08-19 14:51:55"
                }
            },
            {
                "id": 14,
                "product_category_id": 11,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "rerum adipisci aut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?22067",
                "slug": "aspernatur-tenetur",
                "short_description": "Tenetur qui molestias nihil sunt quaerat.",
                "short_description_en": "Praesentium nam id aut sint. Asperiores reprehenderit enim ut id voluptatem amet. Maiores distinctio sed nobis enim.",
                "price": "4481.00",
                "sale_price": "8961.00",
                "stock": 750,
                "spec": null,
                "seo_title": "dicta illum consequatur",
                "seo_keyword": "omnis",
                "seo_description": "Architecto maiores voluptatem necessitatibus voluptatem.",
                "benefit": "Rerum voluptatem harum aliquam laborum dolorem. Vero quia sit sequi consequatur placeat quam illo minima. Consequatur sit sed fugiat dolorum distinctio laudantium.",
                "benefit_en": "Dolor unde doloremque nisi ratione voluptatem. Nostrum dolores modi exercitationem quibusdam consequatur dolorem. Assumenda quo iure reprehenderit iure animi cumque. Et nihil error eum vitae odit sed.",
                "tech_description": "Eveniet aut ipsam ullam et. Corrupti ipsa sit velit exercitationem eaque. Officia error occaecati suscipit est asperiores.",
                "tech_description_en": "Et dignissimos eos quod quidem ut. Cumque et reprehenderit voluptas est sint. Aut in id natus ipsa ipsam quos.",
                "description": "Blanditiis corrupti eos doloribus. Reiciendis enim et est et et maiores. Libero eos sint aperiam sit officia.",
                "description_en": "Ut quidem labore fugiat. Autem sint qui alias corrupti reprehenderit. Voluptatem dolorum beatae id aspernatur quisquam sit. Reprehenderit amet et possimus natus consequatur.",
                "usage": "Veritatis nihil nulla voluptas. Omnis magni reprehenderit eos. Ducimus ex nemo repudiandae quae. Et possimus in ducimus voluptatem ut.",
                "usage_en": "Aut assumenda facere perspiciatis quasi qui iusto id. Quis rerum explicabo reprehenderit aut dolorem ullam. Nihil vitae quia vero quod fugit fugiat.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?56413",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?11632",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?71489",
                "product_video": null,
                "status": 3,
                "rating": 8.27,
                "sold_count": 4701,
                "review_count": 3264,
                "created_at": "2020-08-17 19:32:45",
                "updated_at": "2020-07-28 04:32:40",
                "product_category": {
                    "id": 11,
                    "slug": "vel-fugiat",
                    "title": "面霜",
                    "title_en": "aut voluptatem alias",
                    "describe": "Soluta iste magnam animi. Quas impedit ab nostrum qui repudiandae illo ullam. Assumenda et optio molestias rerum.",
                    "describe_en": "Explicabo consequatur repellendus ducimus repudiandae aperiam praesentium sed consequatur. Excepturi sed optio repellendus qui error perspiciatis consequuntur.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?78073",
                    "description": "Velit perspiciatis aut modi sapiente.",
                    "description_en": "Aut repellendus consequatur ex veritatis error non.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?19107",
                    "parent_id": 8,
                    "created_at": "2020-07-24 16:42:20",
                    "updated_at": "2020-08-08 22:27:22"
                }
            },
            {
                "id": 15,
                "product_category_id": 8,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "autem aut qui",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?87363",
                "slug": "rerum-quis",
                "short_description": "Repellat aut ut in.",
                "short_description_en": "Delectus consectetur sunt illum esse debitis dicta harum. Dignissimos sequi accusantium ut laboriosam excepturi eos sit. Excepturi esse minus sint provident.",
                "price": "6264.00",
                "sale_price": "7705.00",
                "stock": 4,
                "spec": null,
                "seo_title": "sint et autem",
                "seo_keyword": "est",
                "seo_description": "Officia eius possimus vel.",
                "benefit": "Autem voluptas dicta voluptatem ut modi voluptas modi. Quae dolor dolores eius unde neque. Quia laborum consectetur qui cupiditate voluptatem minus.",
                "benefit_en": "Et maxime minus aliquam asperiores mollitia. Facere ullam ipsam accusantium delectus hic ut aut. Quis nemo facilis et id enim ad.",
                "tech_description": "Eius repellendus ab laudantium commodi quae. Labore sit voluptatem sed totam sunt corrupti. Eos eum nobis eum sit explicabo id corrupti.",
                "tech_description_en": "Omnis sint molestias sapiente. Autem quibusdam maiores deleniti eos eum temporibus voluptatum. Nihil animi sint sed voluptatem voluptatem autem.",
                "description": "Non possimus nihil sunt non. Natus vel velit sed et sit sequi porro. Consequuntur ullam iusto possimus distinctio nesciunt adipisci vitae. Hic laborum sunt consequatur accusamus suscipit qui.",
                "description_en": "Dolor perspiciatis ut dolore saepe commodi esse. Provident doloribus cupiditate in laudantium ut consequuntur nostrum qui. Et suscipit est laudantium delectus amet perspiciatis minus repudiandae. Enim quo voluptatem neque libero tempore rerum. Culpa repellendus rerum enim beatae.",
                "usage": "Alias nihil aspernatur provident rem quisquam sed voluptatem aut. Blanditiis asperiores repellendus et natus corporis quaerat. Soluta sit expedita iste in. Sed aspernatur aliquam nihil dolorem dolore non repudiandae.",
                "usage_en": "Velit veritatis voluptatem molestiae provident. Iusto et voluptatem et suscipit quibusdam. Molestiae maiores dolor velit ex optio repellat suscipit.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?37499",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?48067",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?91561",
                "product_video": null,
                "status": 3,
                "rating": 1.08,
                "sold_count": 6576,
                "review_count": 9298,
                "created_at": "2020-08-10 18:06:59",
                "updated_at": "2020-08-05 23:07:29",
                "product_category": {
                    "id": 8,
                    "slug": "nihil-laudantium",
                    "title": "腮红",
                    "title_en": "suscipit et minus",
                    "describe": "Soluta hic distinctio sunt aut consequatur maiores quos. Labore ad consectetur quasi quae sunt corrupti velit. Ut eos quo quas iure.",
                    "describe_en": "Non provident ut quia enim nulla ut quia. Totam neque consequatur exercitationem et repellat magnam magni. Vero reiciendis voluptatem animi. Natus ut laudantium hic.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?10701",
                    "description": "Ut ut quos aperiam aut illum atque.",
                    "description_en": "Earum aperiam voluptas eligendi nemo.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?84329",
                    "parent_id": 17,
                    "created_at": "2020-08-12 23:32:29",
                    "updated_at": "2020-08-07 22:53:43"
                }
            },
            {
                "id": 16,
                "product_category_id": 4,
                "product_name": "黑钻肌光精华",
                "product_name_en": "a ut cupiditate",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?86016",
                "slug": "rem-dolorum",
                "short_description": "Rerum sed aperiam quo.",
                "short_description_en": "Rem possimus ea repudiandae qui. Nulla et provident quo consequatur voluptas quam ipsum tempore. Voluptatem nemo libero itaque ut pariatur unde mollitia. Qui sint quae veritatis ab qui.",
                "price": "3691.00",
                "sale_price": "6504.00",
                "stock": 79,
                "spec": null,
                "seo_title": "nihil quibusdam beatae",
                "seo_keyword": "quibusdam",
                "seo_description": "Sed voluptatem corrupti est consequuntur tempora.",
                "benefit": "Autem unde distinctio veniam eos eligendi ut. Et earum quos consequatur. Cum sunt eum aperiam repellendus unde.",
                "benefit_en": "Voluptatum eius mollitia placeat delectus. Et dignissimos nihil vel. Et eligendi est ab eius id voluptatem ea. Atque blanditiis laudantium labore distinctio quam at accusantium.",
                "tech_description": "Ut quis provident non iure. Sint cupiditate reiciendis consectetur quasi ut.",
                "tech_description_en": "Fuga recusandae repudiandae aut sapiente. Magni nulla delectus rem magni eligendi ipsam. Totam et laborum dolores temporibus rerum. Sed numquam asperiores a placeat.",
                "description": "Odio pariatur quis eum est ut nisi sit. Quasi ut alias numquam perferendis tempora. Rem vitae debitis vero et error iusto. Et a necessitatibus possimus consequatur iusto quisquam.",
                "description_en": "Unde nesciunt suscipit optio veniam corrupti ipsam et et. Illum debitis blanditiis modi asperiores. Dolores sunt occaecati eius eaque aut officiis. Alias debitis necessitatibus est impedit qui rerum.",
                "usage": "Doloribus non optio et accusamus voluptatem enim et. Sunt impedit dolor necessitatibus distinctio laudantium aliquid. Id facilis distinctio qui quia enim mollitia voluptatem impedit.",
                "usage_en": "Sunt minus qui voluptatibus nostrum nihil. Eaque commodi totam vitae nisi magni. Quos qui voluptas modi in. Officia non at facilis maxime optio laboriosam tenetur ut.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?63789",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?99201",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?88753",
                "product_video": null,
                "status": 1,
                "rating": 4.83,
                "sold_count": 3297,
                "review_count": 4112,
                "created_at": "2020-08-01 13:37:06",
                "updated_at": "2020-08-08 05:31:40",
                "product_category": {
                    "id": 4,
                    "slug": "quia-qui",
                    "title": "男士护肤",
                    "title_en": "praesentium aut fugiat",
                    "describe": "Autem iusto nostrum at vero id officia dolores velit. Qui sint quod et eius libero. Nam quia aperiam placeat pariatur. Architecto sit quaerat dolore cupiditate dolores. Aut nemo voluptas non animi.",
                    "describe_en": "Sapiente quia laudantium et qui. Aut similique magni quis quos et animi. Quam eum eum pariatur fugiat. Architecto laborum quia est aperiam. Adipisci quos est asperiores ad quis similique quis.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?31847",
                    "description": "In repellat velit repudiandae consequatur et.",
                    "description_en": "Enim eos voluptatem repellat.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?66155",
                    "parent_id": 15,
                    "created_at": "2020-08-05 07:01:02",
                    "updated_at": "2020-08-11 02:45:23"
                }
            },
            {
                "id": 17,
                "product_category_id": 2,
                "product_name": "钻石焕活面膜",
                "product_name_en": "culpa culpa eligendi",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?70501",
                "slug": "officia-reprehenderit",
                "short_description": "Excepturi consequatur molestiae dolor facilis sit dolor.",
                "short_description_en": "Error ipsa maxime omnis porro beatae sapiente earum. Qui aut laboriosam et sapiente sit. Et non eveniet qui reprehenderit eius laboriosam impedit. Quidem sed porro ipsum quia delectus.",
                "price": "4010.00",
                "sale_price": "8086.00",
                "stock": 43,
                "spec": null,
                "seo_title": "natus sit qui",
                "seo_keyword": "molestiae",
                "seo_description": "Sit repellat et ullam totam quisquam voluptatem.",
                "benefit": "Minus maxime ut et quo et dolor id. Nihil laudantium magni eum alias. Et ut quas ut nihil aut. Cum est illo autem voluptatum. Ut officiis rerum doloremque assumenda inventore.",
                "benefit_en": "Voluptates est dolor aut non. Minus velit aut ducimus est et ut.",
                "tech_description": "Repellendus eaque dicta rem reiciendis dolore. At dicta sint quidem iste officiis. Sint asperiores vitae harum nemo itaque laudantium atque. Animi incidunt qui ratione repellendus ipsum dolorem.",
                "tech_description_en": "Et libero debitis et maiores dolores libero architecto. Officiis soluta fugiat sunt veritatis voluptatibus sit mollitia. Aperiam voluptas odio velit eos. Culpa in quae voluptates enim labore voluptates id.",
                "description": "Qui quia repudiandae autem eum et. Dolores illum ex eum officia vero natus. Enim dicta sint fugiat est.",
                "description_en": "Voluptate et et veritatis cumque rerum totam. Optio assumenda itaque incidunt. Provident sequi consequuntur aut non cum culpa. Aut accusantium et corporis ut nostrum accusantium deserunt.",
                "usage": "Ea beatae deleniti eius. Et architecto quae et voluptas itaque consequatur libero. Veniam et reiciendis repellat eveniet magni necessitatibus eos ut. Libero aut sunt illum voluptas dolorum.",
                "usage_en": "Aut nihil quod voluptates exercitationem dicta. Delectus et est aut qui. Ut asperiores rerum quo reprehenderit expedita.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?16271",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?22424",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?90386",
                "product_video": null,
                "status": 2,
                "rating": 1.3900000000000001,
                "sold_count": 5842,
                "review_count": 7215,
                "created_at": "2020-08-08 15:29:17",
                "updated_at": "2020-08-20 05:00:02",
                "product_category": {
                    "id": 2,
                    "slug": "fugiat-aut",
                    "title": "防晒",
                    "title_en": "qui tenetur vel",
                    "describe": "Aliquid est qui et placeat quo. Illum sint alias sunt debitis et. Quidem consequatur ut est provident. Aliquam minus cumque deleniti eum ut.",
                    "describe_en": "Et nihil quos quas minima. Atque consequatur aut quo id maxime ex sunt. Dolorum perferendis magnam dolorem esse quaerat nemo recusandae nihil.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?63243",
                    "description": "Et rerum necessitatibus suscipit asperiores.",
                    "description_en": "Praesentium et culpa vel dolores est debitis.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?13194",
                    "parent_id": 7,
                    "created_at": "2020-07-27 19:28:58",
                    "updated_at": "2020-08-20 01:40:52"
                }
            },
            {
                "id": 18,
                "product_category_id": 17,
                "product_name": "黑钻焕肤水",
                "product_name_en": "unde provident cupiditate",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?48773",
                "slug": "dignissimos-et",
                "short_description": "Laboriosam ipsum ut voluptatem.",
                "short_description_en": "Numquam enim et est animi voluptate. Eius placeat voluptate voluptatem temporibus totam. Ex et cupiditate porro placeat officiis. Corporis suscipit et vitae autem voluptatem enim autem.",
                "price": "5738.00",
                "sale_price": "7867.00",
                "stock": 583,
                "spec": null,
                "seo_title": "voluptatem quis nostrum",
                "seo_keyword": "qui",
                "seo_description": "Et molestiae ipsa expedita est at.",
                "benefit": "Ducimus atque est assumenda mollitia deserunt est. Ad eum dignissimos esse cupiditate et eius saepe. Illum eligendi omnis enim nihil non facere. Sed nobis beatae qui repudiandae odit eligendi.",
                "benefit_en": "Consectetur molestiae laborum mollitia. Ut sed quam mollitia omnis nemo quia. Itaque ex expedita amet quis quo neque aliquam.",
                "tech_description": "Et dolorem sed impedit officiis. Non ea possimus exercitationem exercitationem molestias. Amet aliquid modi maiores ex excepturi distinctio ullam. Consequatur iste velit nisi ea.",
                "tech_description_en": "Iste harum aut accusamus et. Maiores autem illo et est. Aut vel excepturi dolorem repellendus aut.",
                "description": "Dignissimos enim et sed vitae. Quidem est enim sint consectetur consectetur quaerat et. Est minus sapiente sit eum alias ut. Aperiam quaerat voluptates similique molestiae non eos.",
                "description_en": "Nisi ab rerum consequatur culpa possimus nemo necessitatibus ut. Saepe explicabo explicabo dolorem quidem consequatur nesciunt. Optio id expedita quis vero. Minus ea qui quisquam quo inventore nostrum.",
                "usage": "Occaecati dicta suscipit deleniti et. Sequi asperiores distinctio dolore nostrum dolor. Deserunt voluptas non quasi placeat possimus asperiores tempora.",
                "usage_en": "Est et occaecati odit inventore est voluptatibus et. Nam dolores vitae consequatur ipsa nisi et. Maxime eius hic ex consequatur repudiandae et qui nihil. Qui quaerat quaerat fugit cum vitae qui nam.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?77399",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?51147",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?52150",
                "product_video": null,
                "status": 3,
                "rating": 5.53,
                "sold_count": 9788,
                "review_count": 7033,
                "created_at": "2020-08-03 21:51:08",
                "updated_at": "2020-08-10 01:09:50",
                "product_category": {
                    "id": 17,
                    "slug": "et-et",
                    "title": "香水",
                    "title_en": "quia et perspiciatis",
                    "describe": "Qui aperiam officia perferendis minus quae id ipsam. Voluptatibus et perspiciatis nesciunt dolorum voluptatem quos. Odit laborum et numquam perspiciatis vel quia. Et est numquam ut.",
                    "describe_en": "Quisquam optio enim iste. Suscipit error quod nobis occaecati est et voluptatibus. Et placeat eos adipisci itaque. Impedit et fugiat consequatur quis.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?77327",
                    "description": "Veniam non eius dolor.",
                    "description_en": "Nobis quis quas ut.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?50926",
                    "parent_id": 5,
                    "created_at": "2020-08-01 20:26:32",
                    "updated_at": "2020-08-04 16:54:53"
                }
            },
            {
                "id": 19,
                "product_category_id": 20,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "velit possimus eveniet",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?35554",
                "slug": "reprehenderit-qui",
                "short_description": "Quae dolor quaerat cumque qui.",
                "short_description_en": "Autem fugit ut aliquam repudiandae vel. Ullam et alias ut laboriosam neque repudiandae esse. Aut itaque ipsum expedita quasi qui dolor. Corporis libero aut provident quod molestias voluptates in.",
                "price": "9787.00",
                "sale_price": "8574.00",
                "stock": 174,
                "spec": null,
                "seo_title": "non voluptatem nam",
                "seo_keyword": "corrupti",
                "seo_description": "Commodi perspiciatis sit fuga consequatur.",
                "benefit": "Earum enim error et architecto voluptatem autem. Ut ipsa ullam minus dolores fugit minima laborum consectetur. Ex qui provident cumque consectetur minima qui harum.",
                "benefit_en": "Sequi voluptatem in impedit voluptatum libero dolorem quia. Quia aperiam eveniet provident delectus aut quo. Perferendis velit tempore deserunt suscipit omnis minima.",
                "tech_description": "Mollitia aut animi asperiores omnis vel eveniet vero aut. Et illo commodi ab qui sapiente et. Quas animi dolorem soluta consequuntur cumque. Qui rerum temporibus laudantium quis.",
                "tech_description_en": "Veniam voluptas reprehenderit quo nobis sequi deserunt. Omnis est voluptate nam ut aut nisi iste aut. Dignissimos nemo nam quod non ea non excepturi neque. Nemo corporis sit tempora eos vitae soluta voluptatem consequatur.",
                "description": "Eos natus maxime quia unde. Accusamus hic impedit aut consequatur enim sequi eum. Non qui reprehenderit omnis cumque provident tenetur. Necessitatibus quia expedita fuga quis nam fugit ut ullam.",
                "description_en": "Voluptatem nihil sunt expedita qui. Cupiditate eum temporibus sit omnis quas. In est reprehenderit aut quisquam. Est porro expedita tempore tenetur consequatur exercitationem.",
                "usage": "Aut unde sint sint aliquam harum optio voluptatem. Veniam eos voluptatem repudiandae assumenda ipsum nihil. Minima minima et necessitatibus ipsum. Aut cupiditate ex molestiae aperiam consequatur.",
                "usage_en": "Dolore praesentium quo cumque quo voluptates accusantium. Doloribus voluptas eum voluptatem. Magnam et delectus dolorem non ut. Aperiam sint ad et ducimus.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?55310",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?55332",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?26720",
                "product_video": null,
                "status": 2,
                "rating": 1.5699999999999998,
                "sold_count": 8197,
                "review_count": 7451,
                "created_at": "2020-08-06 13:51:52",
                "updated_at": "2020-07-31 21:24:48",
                "product_category": {
                    "id": 20,
                    "slug": "sint-ad",
                    "title": "睫毛膏",
                    "title_en": "similique magni aut",
                    "describe": "Officia numquam voluptas ipsam nemo possimus hic voluptatem. Beatae in beatae dolorem quis. Deserunt rerum quo mollitia numquam omnis.",
                    "describe_en": "Non ipsum aut id laboriosam qui repudiandae. Placeat non dignissimos officiis aspernatur laudantium molestiae.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?21755",
                    "description": "Sequi dolorem fugiat harum et.",
                    "description_en": "Est in dolores quisquam necessitatibus quos et.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?13832",
                    "parent_id": 7,
                    "created_at": "2020-08-01 22:33:20",
                    "updated_at": "2020-07-25 19:18:30"
                }
            },
            {
                "id": 20,
                "product_category_id": 1,
                "product_name": "黑钻肌光精华",
                "product_name_en": "aut consequuntur aut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?54426",
                "slug": "quia-architecto",
                "short_description": "Amet et tenetur laudantium vel.",
                "short_description_en": "Magnam aut dolorum facilis tempora aut facere eos accusamus. Et facere voluptas hic tempora amet in. Quod qui nostrum at sed nesciunt exercitationem.",
                "price": "8202.00",
                "sale_price": "2374.00",
                "stock": 762,
                "spec": null,
                "seo_title": "temporibus labore fugit",
                "seo_keyword": "dolorem",
                "seo_description": "Ullam cupiditate deserunt aut.",
                "benefit": "Soluta quidem consectetur velit vitae nisi inventore. Officiis consequuntur et reiciendis rerum quis sed. Provident distinctio quia non adipisci sit.",
                "benefit_en": "Suscipit similique nihil aut neque eos nihil facilis. Ut impedit dignissimos officiis facere nam aut. Et consequatur laboriosam sint autem magnam eligendi quam vitae.",
                "tech_description": "Et ea quam suscipit amet quia. Debitis est omnis cum dolorem dicta fuga. Ratione aut asperiores porro assumenda assumenda.",
                "tech_description_en": "Repudiandae non adipisci qui consectetur aliquam deleniti. In ut ut rerum vero itaque velit tempore. Ducimus deserunt alias et quisquam.",
                "description": "Et recusandae impedit explicabo sunt. Qui ad iusto placeat consequuntur minus. Voluptate repellat dicta ut nihil fuga. Culpa dolor modi quia dicta mollitia architecto aut.",
                "description_en": "Exercitationem animi reiciendis nihil nisi. Eveniet provident quaerat corporis sint quae. Odit facilis et quis consequatur aut numquam laudantium. Facere quam quia accusamus et.",
                "usage": "Ut exercitationem maiores corrupti dolor ut et aut. Cum quas in consequatur ratione esse laudantium et. Dolorem sint ut dolores aliquam dolorem non et.",
                "usage_en": "Pariatur suscipit praesentium repellendus animi est et deleniti veritatis. Eligendi rem aliquid omnis illo ab aspernatur. Voluptates a quaerat vero est ea rerum praesentium. Reprehenderit dolores laborum debitis omnis optio et optio.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?26882",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?42322",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?29143",
                "product_video": null,
                "status": 1,
                "rating": 1.04,
                "sold_count": 7155,
                "review_count": 2619,
                "created_at": "2020-08-14 16:53:41",
                "updated_at": "2020-07-31 13:50:18",
                "product_category": {
                    "id": 1,
                    "slug": "a-voluptatum",
                    "title": "睫毛膏",
                    "title_en": "rerum delectus consequatur",
                    "describe": "Id qui quo est blanditiis. Amet tenetur cumque exercitationem occaecati. Corporis perspiciatis debitis aut est eligendi in sed. Eligendi eum quisquam voluptatem rerum non ut.",
                    "describe_en": "Consectetur aut consequatur sed ex id odio rem. Porro consequuntur voluptatem aspernatur natus. Rerum libero et ut id sint occaecati ea. Quisquam temporibus sint ullam quibusdam.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?78187",
                    "description": "Ut voluptatem nihil sunt deleniti.",
                    "description_en": "Sed iusto reprehenderit aut.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?51817",
                    "parent_id": 14,
                    "created_at": "2020-08-03 09:48:45",
                    "updated_at": "2020-08-02 01:02:03"
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
    -G "http://store.wutang.com/api/product_category/1?category_slug=sed" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product_category/1"
);

let params = {
    "category_slug": "sed",
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
    -G "http://store.wutang.com/api/product/1?slug=ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product/1"
);

let params = {
    "slug": "ut",
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
    -G "http://store.wutang.com/api/product_ids?id_list=laborum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product_ids"
);

let params = {
    "id_list": "laborum",
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
    -G "http://store.wutang.com/api/category_story/1?category_slug=iusto" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/category_story/1"
);

let params = {
    "category_slug": "iusto",
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
    -G "http://store.wutang.com/api/product_new?page=cupiditate&page_limit=quibusdam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product_new"
);

let params = {
    "page": "cupiditate",
    "page_limit": "quibusdam",
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
                "product_category_id": 11,
                "product_name": "黑钻肌光精华",
                "product_name_en": "nesciunt quos doloremque",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?67375",
                "slug": "consectetur-ducimus",
                "short_description": "Dolores voluptatem dolorem non ducimus rerum.",
                "short_description_en": "Voluptatem rerum quia eius tempore magnam esse. Rerum occaecati dolor et aut. Repudiandae nisi sequi sunt dolore molestiae aliquam.",
                "price": "7333.00",
                "sale_price": "9073.00",
                "stock": 298,
                "spec": null,
                "seo_title": "quia tempora eligendi",
                "seo_keyword": "veniam",
                "seo_description": "Minus ut vero quis fugit ut.",
                "benefit": "Praesentium esse sunt sed. Repellendus iure dolores recusandae quasi. Sit tempore iste autem quis. Numquam incidunt incidunt molestiae id ut soluta dolor sint.",
                "benefit_en": "Eveniet aspernatur autem et voluptatem vitae minima. Optio impedit consequatur et minus est ratione. Repudiandae aperiam iste quis provident quia. Et rerum aut reiciendis nam dolores.",
                "tech_description": "Temporibus est voluptatem exercitationem sed repellendus et. Praesentium amet et iusto. Numquam ea eum impedit laboriosam veritatis.",
                "tech_description_en": "Aut voluptatem corrupti dicta cumque. Nulla dolorem earum vero alias occaecati. Ipsa commodi eaque repudiandae et aspernatur. Dolorem eos officia blanditiis corporis.",
                "description": "Nisi explicabo eligendi quas. Consequuntur et rem esse. Consectetur deleniti eius error omnis. Dolorem voluptatum quis omnis rerum consequuntur sit.",
                "description_en": "Quo commodi quia rerum in. Eius qui eveniet eos. Aut tenetur natus facilis voluptatem consequatur veniam. Neque pariatur blanditiis voluptatem.",
                "usage": "Numquam dolor magni tenetur molestiae unde odit voluptas. Explicabo est aliquid doloremque nobis voluptate. Eveniet ex culpa quod distinctio rerum alias.",
                "usage_en": "Porro velit magnam quis voluptatem aut dignissimos iusto. Soluta quae laborum unde et. Ut dolor sapiente placeat aliquid magni et tenetur. Nihil non dicta aut eos iusto quia totam ducimus.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?22816",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?11750",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?83769",
                "product_video": null,
                "status": 1,
                "rating": 1.3,
                "sold_count": 6780,
                "review_count": 8718,
                "created_at": "2020-08-11 21:54:44",
                "updated_at": "2020-08-10 10:01:52",
                "product_category": {
                    "id": 11,
                    "slug": "vel-fugiat",
                    "title": "面霜",
                    "title_en": "aut voluptatem alias",
                    "describe": "Soluta iste magnam animi. Quas impedit ab nostrum qui repudiandae illo ullam. Assumenda et optio molestias rerum.",
                    "describe_en": "Explicabo consequatur repellendus ducimus repudiandae aperiam praesentium sed consequatur. Excepturi sed optio repellendus qui error perspiciatis consequuntur.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?78073",
                    "description": "Velit perspiciatis aut modi sapiente.",
                    "description_en": "Aut repellendus consequatur ex veritatis error non.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?19107",
                    "parent_id": 8,
                    "created_at": "2020-07-24 16:42:20",
                    "updated_at": "2020-08-08 22:27:22"
                }
            },
            {
                "id": 6,
                "product_category_id": 12,
                "product_name": "钻石焕活面膜",
                "product_name_en": "dolor perferendis aliquid",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?40329",
                "slug": "sed-ratione",
                "short_description": "Non fugiat autem repellat tempore voluptas similique.",
                "short_description_en": "Ipsa fuga eligendi in expedita sit qui. Autem sit nostrum necessitatibus consectetur enim. Neque quia sit ut quia voluptates. Ea tempora minus fugiat officia animi.",
                "price": "9706.00",
                "sale_price": "4081.00",
                "stock": 419,
                "spec": null,
                "seo_title": "deleniti iure pariatur",
                "seo_keyword": "et",
                "seo_description": "Nesciunt in dolor ullam sunt officiis.",
                "benefit": "Doloribus eius voluptatem iure quia repudiandae maxime aut. Ut itaque repellat reiciendis rerum eligendi. Ipsa dolorem dolorum aut illo et facilis.",
                "benefit_en": "Eos consequatur tempore aut non numquam. Mollitia explicabo repellat et vel. Quos dolorum vero mollitia asperiores. Cupiditate blanditiis cum repellendus ipsam.",
                "tech_description": "Molestias facilis excepturi aut nobis. Et totam et aut neque dolorem voluptatem qui. Hic blanditiis alias optio corrupti possimus nesciunt voluptatem sint. Provident accusamus quibusdam eligendi perspiciatis sit.",
                "tech_description_en": "Sed consequatur est sapiente. Inventore natus consequatur officiis nihil voluptatem aut nostrum ut. Quia blanditiis delectus quos dolor corrupti similique possimus.",
                "description": "At est alias nemo velit. Dolor voluptas est natus laborum ratione est culpa. Vel dolorem impedit qui. Dignissimos eligendi distinctio esse fuga quia labore.",
                "description_en": "Doloribus quidem qui quibusdam qui. Nostrum dignissimos sit ut. Accusamus aspernatur quam vero harum eos. Nulla sint eius nisi eius.",
                "usage": "Placeat qui asperiores porro sapiente dolorem. Repudiandae quidem laborum alias ducimus nulla facere fugiat. Possimus qui rerum quis quia aliquam molestiae accusantium. Sint reiciendis et id dolorem.",
                "usage_en": "Harum qui animi cum mollitia sint dicta magni dicta. Quia soluta et inventore voluptatem.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?93907",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?93324",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?48042",
                "product_video": null,
                "status": 1,
                "rating": 3.17,
                "sold_count": 7285,
                "review_count": 1483,
                "created_at": "2020-07-25 16:41:17",
                "updated_at": "2020-08-18 18:59:59",
                "product_category": {
                    "id": 12,
                    "slug": "laborum-rem",
                    "title": "面霜",
                    "title_en": "molestiae rem consequatur",
                    "describe": "Dolorem quas temporibus soluta natus ut voluptatum. Consectetur voluptas vel dolor doloribus in. Aspernatur unde ipsam nulla quis est. Sed at quibusdam et molestiae sed fuga.",
                    "describe_en": "Iure ut suscipit nemo sint aut voluptas qui. Cumque dolorum magnam dignissimos est. Quis pariatur eos ut in ut iusto modi natus. Eum aut id quae odio veniam.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?28408",
                    "description": "Architecto cum explicabo hic fugiat corrupti sed.",
                    "description_en": "Quasi et voluptas natus sequi.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?24499",
                    "parent_id": 11,
                    "created_at": "2020-08-02 15:26:30",
                    "updated_at": "2020-08-19 14:51:55"
                }
            },
            {
                "id": 8,
                "product_category_id": 2,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "dolorum accusamus necessitatibus",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?77627",
                "slug": "quo-molestias",
                "short_description": "Illo odit qui quas unde iusto.",
                "short_description_en": "Nesciunt sit velit dolorem quo. Voluptate nam nemo ut tempora nesciunt est corporis. Voluptatibus tempora eos molestiae voluptas.",
                "price": "1763.00",
                "sale_price": "9939.00",
                "stock": 303,
                "spec": null,
                "seo_title": "amet voluptatem atque",
                "seo_keyword": "nisi",
                "seo_description": "Nihil facere soluta consequuntur inventore.",
                "benefit": "Recusandae qui qui earum inventore. Deserunt est sunt occaecati numquam ratione. Minima reprehenderit molestias sunt tempore laudantium aut.",
                "benefit_en": "Voluptates similique modi qui quia. Rerum quos quis consequatur voluptatem qui voluptatibus harum sit. Vel quia rerum temporibus alias consequatur voluptas. Est aliquid numquam architecto dolore incidunt alias voluptas.",
                "tech_description": "Quia sit blanditiis qui. Debitis mollitia sunt dolor et. Voluptatum repellendus rem voluptatem culpa amet.",
                "tech_description_en": "Nemo unde voluptate et soluta possimus nemo optio. Voluptas facilis dolorum tempora aperiam voluptatibus non quidem. Enim eaque nisi dolorem sit voluptates ut. Consequatur laboriosam ut error ut quia.",
                "description": "Ea vel sit aperiam reiciendis et. Accusamus qui omnis ea qui cum. Odit necessitatibus velit et ipsum consequatur provident in. Qui assumenda cumque sed.",
                "description_en": "Atque earum est dolores sed voluptas omnis. Vero quibusdam ad asperiores officiis. Dolorem quia natus ab quo aspernatur eligendi voluptate aut. Fugiat at delectus cupiditate consequuntur consectetur voluptatem aut aut.",
                "usage": "Occaecati nam dolorem laudantium aut autem officia. Quibusdam et ullam unde et. Non facere qui minus natus illo mollitia eos. Et omnis fugit necessitatibus corporis necessitatibus praesentium dolores.",
                "usage_en": "Sed sapiente numquam quasi non fuga. Qui quaerat est tenetur nostrum labore id.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?72160",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?27337",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?93510",
                "product_video": null,
                "status": 1,
                "rating": 8.33,
                "sold_count": 6742,
                "review_count": 7823,
                "created_at": "2020-08-15 14:51:34",
                "updated_at": "2020-08-13 18:27:52",
                "product_category": {
                    "id": 2,
                    "slug": "fugiat-aut",
                    "title": "防晒",
                    "title_en": "qui tenetur vel",
                    "describe": "Aliquid est qui et placeat quo. Illum sint alias sunt debitis et. Quidem consequatur ut est provident. Aliquam minus cumque deleniti eum ut.",
                    "describe_en": "Et nihil quos quas minima. Atque consequatur aut quo id maxime ex sunt. Dolorum perferendis magnam dolorem esse quaerat nemo recusandae nihil.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?63243",
                    "description": "Et rerum necessitatibus suscipit asperiores.",
                    "description_en": "Praesentium et culpa vel dolores est debitis.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?13194",
                    "parent_id": 7,
                    "created_at": "2020-07-27 19:28:58",
                    "updated_at": "2020-08-20 01:40:52"
                }
            },
            {
                "id": 13,
                "product_category_id": 12,
                "product_name": "黑钻焕肤水",
                "product_name_en": "et eum eum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?82590",
                "slug": "ut-et",
                "short_description": "Inventore maiores assumenda eum.",
                "short_description_en": "Nesciunt aut eius tenetur quae ut qui facilis. Beatae aperiam veritatis consectetur doloremque sed. Eaque pariatur excepturi adipisci et distinctio. Minus et explicabo dolor error. Voluptatibus et officiis quas vel culpa aliquam aspernatur.",
                "price": "5578.00",
                "sale_price": "8350.00",
                "stock": 199,
                "spec": null,
                "seo_title": "et qui consectetur",
                "seo_keyword": "ea",
                "seo_description": "Dolor fuga eaque eveniet animi molestias est.",
                "benefit": "Recusandae eum vero similique vel omnis amet. Praesentium rerum et facilis blanditiis dolor.",
                "benefit_en": "Amet blanditiis facere labore. Earum hic sunt ut molestiae. Doloremque dicta voluptatem qui.",
                "tech_description": "Dolorem nesciunt provident ut. Quis eius et saepe consequatur enim. Ut fugit est architecto voluptatem. Qui aliquam quis voluptas quisquam ut velit.",
                "tech_description_en": "Harum quidem tenetur autem illo beatae ipsam. Ut molestiae distinctio harum. Illo officia repudiandae voluptatem molestias nemo odio. Enim a nostrum similique aspernatur ullam amet accusantium.",
                "description": "Et atque ex quia. Libero sunt esse nisi deserunt itaque. Magni nihil voluptas et ut est.",
                "description_en": "Quo rem hic nemo ea quis rerum atque. Nobis pariatur sit et qui. Nobis ut impedit velit hic voluptas similique. Aut autem praesentium numquam et saepe autem sed.",
                "usage": "Et perferendis perferendis voluptatem beatae saepe eum dolorem. Asperiores doloremque iure iure ducimus quidem inventore aut. Amet illum maiores non qui aliquid recusandae magnam. Et officia nulla sequi minus corrupti est et.",
                "usage_en": "Sed qui consequatur culpa sapiente iure. Consequatur sint iusto deleniti assumenda est.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?80745",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?77401",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?35217",
                "product_video": null,
                "status": 1,
                "rating": 1.56,
                "sold_count": 3634,
                "review_count": 5274,
                "created_at": "2020-08-15 22:00:34",
                "updated_at": "2020-08-19 07:06:10",
                "product_category": {
                    "id": 12,
                    "slug": "laborum-rem",
                    "title": "面霜",
                    "title_en": "molestiae rem consequatur",
                    "describe": "Dolorem quas temporibus soluta natus ut voluptatum. Consectetur voluptas vel dolor doloribus in. Aspernatur unde ipsam nulla quis est. Sed at quibusdam et molestiae sed fuga.",
                    "describe_en": "Iure ut suscipit nemo sint aut voluptas qui. Cumque dolorum magnam dignissimos est. Quis pariatur eos ut in ut iusto modi natus. Eum aut id quae odio veniam.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?28408",
                    "description": "Architecto cum explicabo hic fugiat corrupti sed.",
                    "description_en": "Quasi et voluptas natus sequi.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?24499",
                    "parent_id": 11,
                    "created_at": "2020-08-02 15:26:30",
                    "updated_at": "2020-08-19 14:51:55"
                }
            },
            {
                "id": 16,
                "product_category_id": 4,
                "product_name": "黑钻肌光精华",
                "product_name_en": "a ut cupiditate",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?86016",
                "slug": "rem-dolorum",
                "short_description": "Rerum sed aperiam quo.",
                "short_description_en": "Rem possimus ea repudiandae qui. Nulla et provident quo consequatur voluptas quam ipsum tempore. Voluptatem nemo libero itaque ut pariatur unde mollitia. Qui sint quae veritatis ab qui.",
                "price": "3691.00",
                "sale_price": "6504.00",
                "stock": 79,
                "spec": null,
                "seo_title": "nihil quibusdam beatae",
                "seo_keyword": "quibusdam",
                "seo_description": "Sed voluptatem corrupti est consequuntur tempora.",
                "benefit": "Autem unde distinctio veniam eos eligendi ut. Et earum quos consequatur. Cum sunt eum aperiam repellendus unde.",
                "benefit_en": "Voluptatum eius mollitia placeat delectus. Et dignissimos nihil vel. Et eligendi est ab eius id voluptatem ea. Atque blanditiis laudantium labore distinctio quam at accusantium.",
                "tech_description": "Ut quis provident non iure. Sint cupiditate reiciendis consectetur quasi ut.",
                "tech_description_en": "Fuga recusandae repudiandae aut sapiente. Magni nulla delectus rem magni eligendi ipsam. Totam et laborum dolores temporibus rerum. Sed numquam asperiores a placeat.",
                "description": "Odio pariatur quis eum est ut nisi sit. Quasi ut alias numquam perferendis tempora. Rem vitae debitis vero et error iusto. Et a necessitatibus possimus consequatur iusto quisquam.",
                "description_en": "Unde nesciunt suscipit optio veniam corrupti ipsam et et. Illum debitis blanditiis modi asperiores. Dolores sunt occaecati eius eaque aut officiis. Alias debitis necessitatibus est impedit qui rerum.",
                "usage": "Doloribus non optio et accusamus voluptatem enim et. Sunt impedit dolor necessitatibus distinctio laudantium aliquid. Id facilis distinctio qui quia enim mollitia voluptatem impedit.",
                "usage_en": "Sunt minus qui voluptatibus nostrum nihil. Eaque commodi totam vitae nisi magni. Quos qui voluptas modi in. Officia non at facilis maxime optio laboriosam tenetur ut.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?63789",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?99201",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?88753",
                "product_video": null,
                "status": 1,
                "rating": 4.83,
                "sold_count": 3297,
                "review_count": 4112,
                "created_at": "2020-08-01 13:37:06",
                "updated_at": "2020-08-08 05:31:40",
                "product_category": {
                    "id": 4,
                    "slug": "quia-qui",
                    "title": "男士护肤",
                    "title_en": "praesentium aut fugiat",
                    "describe": "Autem iusto nostrum at vero id officia dolores velit. Qui sint quod et eius libero. Nam quia aperiam placeat pariatur. Architecto sit quaerat dolore cupiditate dolores. Aut nemo voluptas non animi.",
                    "describe_en": "Sapiente quia laudantium et qui. Aut similique magni quis quos et animi. Quam eum eum pariatur fugiat. Architecto laborum quia est aperiam. Adipisci quos est asperiores ad quis similique quis.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?31847",
                    "description": "In repellat velit repudiandae consequatur et.",
                    "description_en": "Enim eos voluptatem repellat.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?66155",
                    "parent_id": 15,
                    "created_at": "2020-08-05 07:01:02",
                    "updated_at": "2020-08-11 02:45:23"
                }
            },
            {
                "id": 20,
                "product_category_id": 1,
                "product_name": "黑钻肌光精华",
                "product_name_en": "aut consequuntur aut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?54426",
                "slug": "quia-architecto",
                "short_description": "Amet et tenetur laudantium vel.",
                "short_description_en": "Magnam aut dolorum facilis tempora aut facere eos accusamus. Et facere voluptas hic tempora amet in. Quod qui nostrum at sed nesciunt exercitationem.",
                "price": "8202.00",
                "sale_price": "2374.00",
                "stock": 762,
                "spec": null,
                "seo_title": "temporibus labore fugit",
                "seo_keyword": "dolorem",
                "seo_description": "Ullam cupiditate deserunt aut.",
                "benefit": "Soluta quidem consectetur velit vitae nisi inventore. Officiis consequuntur et reiciendis rerum quis sed. Provident distinctio quia non adipisci sit.",
                "benefit_en": "Suscipit similique nihil aut neque eos nihil facilis. Ut impedit dignissimos officiis facere nam aut. Et consequatur laboriosam sint autem magnam eligendi quam vitae.",
                "tech_description": "Et ea quam suscipit amet quia. Debitis est omnis cum dolorem dicta fuga. Ratione aut asperiores porro assumenda assumenda.",
                "tech_description_en": "Repudiandae non adipisci qui consectetur aliquam deleniti. In ut ut rerum vero itaque velit tempore. Ducimus deserunt alias et quisquam.",
                "description": "Et recusandae impedit explicabo sunt. Qui ad iusto placeat consequuntur minus. Voluptate repellat dicta ut nihil fuga. Culpa dolor modi quia dicta mollitia architecto aut.",
                "description_en": "Exercitationem animi reiciendis nihil nisi. Eveniet provident quaerat corporis sint quae. Odit facilis et quis consequatur aut numquam laudantium. Facere quam quia accusamus et.",
                "usage": "Ut exercitationem maiores corrupti dolor ut et aut. Cum quas in consequatur ratione esse laudantium et. Dolorem sint ut dolores aliquam dolorem non et.",
                "usage_en": "Pariatur suscipit praesentium repellendus animi est et deleniti veritatis. Eligendi rem aliquid omnis illo ab aspernatur. Voluptates a quaerat vero est ea rerum praesentium. Reprehenderit dolores laborum debitis omnis optio et optio.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?26882",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?42322",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?29143",
                "product_video": null,
                "status": 1,
                "rating": 1.04,
                "sold_count": 7155,
                "review_count": 2619,
                "created_at": "2020-08-14 16:53:41",
                "updated_at": "2020-07-31 13:50:18",
                "product_category": {
                    "id": 1,
                    "slug": "a-voluptatum",
                    "title": "睫毛膏",
                    "title_en": "rerum delectus consequatur",
                    "describe": "Id qui quo est blanditiis. Amet tenetur cumque exercitationem occaecati. Corporis perspiciatis debitis aut est eligendi in sed. Eligendi eum quisquam voluptatem rerum non ut.",
                    "describe_en": "Consectetur aut consequatur sed ex id odio rem. Porro consequuntur voluptatem aspernatur natus. Rerum libero et ut id sint occaecati ea. Quisquam temporibus sint ullam quibusdam.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?78187",
                    "description": "Ut voluptatem nihil sunt deleniti.",
                    "description_en": "Sed iusto reprehenderit aut.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?51817",
                    "parent_id": 14,
                    "created_at": "2020-08-03 09:48:45",
                    "updated_at": "2020-08-02 01:02:03"
                }
            },
            {
                "id": 23,
                "product_category_id": 8,
                "product_name": "黑钻焕肤水",
                "product_name_en": "eveniet nostrum praesentium",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?20299",
                "slug": "soluta-qui",
                "short_description": "Sint blanditiis est non facere fuga.",
                "short_description_en": "Quasi sapiente qui repudiandae reiciendis non. Tenetur dolore odit sint adipisci. Consequatur fugiat ea ut.",
                "price": "5802.00",
                "sale_price": "4146.00",
                "stock": 445,
                "spec": null,
                "seo_title": "provident velit officia",
                "seo_keyword": "perferendis",
                "seo_description": "Porro ipsam voluptatum sunt necessitatibus qui.",
                "benefit": "Est vel animi consequatur. Unde reiciendis culpa qui officiis maxime. Aperiam id eligendi ratione tempore minus consequatur suscipit.",
                "benefit_en": "Ab sed voluptas et exercitationem sit fuga consequatur. Animi et ipsam nemo nisi vero. Repellendus ut nesciunt sit quis.",
                "tech_description": "Doloribus est cupiditate iure nam qui exercitationem eum. Non similique quia occaecati. Incidunt et voluptas iure eum.",
                "tech_description_en": "Ut dolorum eveniet aut delectus qui iste. Quasi quia quibusdam dolorem esse. Eveniet voluptas sed optio iste temporibus magnam voluptatum.",
                "description": "Suscipit magnam consequatur qui voluptates. Tempora quae ea voluptatum illum adipisci molestiae. Hic consequuntur itaque aut ea. Rerum perferendis expedita consectetur itaque aut ipsam voluptate.",
                "description_en": "Quod dolorem distinctio a harum. Fugiat et debitis est cumque ex amet aut voluptatem. Voluptates labore nesciunt fugit ex aut.",
                "usage": "Consectetur architecto aut dolor quo repudiandae modi omnis. Autem eum animi et ut aut. Asperiores culpa voluptatem maiores dolores omnis.",
                "usage_en": "Laboriosam dolorum mollitia beatae optio a et quisquam aut. Ipsam est perferendis esse voluptatem vero molestiae est neque. Quas voluptatem ut ex provident aperiam reprehenderit quos.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?97967",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?94687",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?69794",
                "product_video": null,
                "status": 1,
                "rating": 6.04,
                "sold_count": 3126,
                "review_count": 6012,
                "created_at": "2020-08-08 01:55:53",
                "updated_at": "2020-08-16 03:46:30",
                "product_category": {
                    "id": 8,
                    "slug": "nihil-laudantium",
                    "title": "腮红",
                    "title_en": "suscipit et minus",
                    "describe": "Soluta hic distinctio sunt aut consequatur maiores quos. Labore ad consectetur quasi quae sunt corrupti velit. Ut eos quo quas iure.",
                    "describe_en": "Non provident ut quia enim nulla ut quia. Totam neque consequatur exercitationem et repellat magnam magni. Vero reiciendis voluptatem animi. Natus ut laudantium hic.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?10701",
                    "description": "Ut ut quos aperiam aut illum atque.",
                    "description_en": "Earum aperiam voluptas eligendi nemo.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?84329",
                    "parent_id": 17,
                    "created_at": "2020-08-12 23:32:29",
                    "updated_at": "2020-08-07 22:53:43"
                }
            },
            {
                "id": 25,
                "product_category_id": 11,
                "product_name": "黑钻焕肤水",
                "product_name_en": "quasi omnis veritatis",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?60386",
                "slug": "similique-fugit",
                "short_description": "Commodi sunt quia tempora eligendi quis sit.",
                "short_description_en": "Maxime eum eveniet magni. Earum cumque commodi rerum consequatur. Inventore sunt animi ipsam praesentium minima excepturi voluptatem.",
                "price": "5518.00",
                "sale_price": "850.00",
                "stock": 184,
                "spec": null,
                "seo_title": "facere aut nihil",
                "seo_keyword": "voluptas",
                "seo_description": "Qui aut laborum blanditiis eos.",
                "benefit": "Soluta reprehenderit vel qui. Maiores quod voluptatem rerum nemo suscipit expedita. Hic culpa id autem rem blanditiis possimus voluptatem. Eum iste maiores culpa aliquid.",
                "benefit_en": "Ipsam voluptatem autem a sapiente doloribus adipisci. At eius sunt repellendus quos expedita id ut repellendus. Ex enim dolores praesentium nisi aut labore. Dolorem enim soluta distinctio incidunt aliquid maiores.",
                "tech_description": "Laboriosam occaecati temporibus eveniet et aspernatur. Fugit ipsum tempora veniam tempore sequi eveniet sit. Ullam mollitia harum harum qui ratione saepe et. Similique id doloremque illum impedit neque. Vel doloremque nihil sed quod dolores maxime at.",
                "tech_description_en": "Enim ut quisquam quasi doloribus et minima in. Mollitia doloribus placeat doloribus ipsam magni sed laborum exercitationem. Neque consectetur voluptate praesentium dolor tenetur quis voluptas. Dolores consequatur velit consequatur ut tenetur optio nobis.",
                "description": "Perspiciatis ut ullam eos asperiores sit expedita. Libero soluta ut voluptas illum ad et sequi nobis. Laudantium ipsa maiores harum tempora molestiae et laborum. Reprehenderit accusamus repellat accusantium illo nostrum.",
                "description_en": "Aliquid quia officiis iste omnis et. Reprehenderit nihil rem non voluptatem earum ut qui. Et molestiae omnis autem nisi et minus dolorum. Nesciunt dolorum occaecati voluptates ut. Et vel eos libero dolore.",
                "usage": "Odio enim quas accusantium. Quibusdam sit autem deleniti nisi tenetur exercitationem. Et incidunt dolorem earum et.",
                "usage_en": "Assumenda illum odit quidem autem et. Iure molestias placeat mollitia tempora et quasi doloremque non. Cupiditate eum quo quia harum vel eos.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?35898",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?29613",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?77518",
                "product_video": null,
                "status": 1,
                "rating": 5.62,
                "sold_count": 3666,
                "review_count": 9874,
                "created_at": "2020-08-10 11:56:11",
                "updated_at": "2020-08-06 01:16:13",
                "product_category": {
                    "id": 11,
                    "slug": "vel-fugiat",
                    "title": "面霜",
                    "title_en": "aut voluptatem alias",
                    "describe": "Soluta iste magnam animi. Quas impedit ab nostrum qui repudiandae illo ullam. Assumenda et optio molestias rerum.",
                    "describe_en": "Explicabo consequatur repellendus ducimus repudiandae aperiam praesentium sed consequatur. Excepturi sed optio repellendus qui error perspiciatis consequuntur.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?78073",
                    "description": "Velit perspiciatis aut modi sapiente.",
                    "description_en": "Aut repellendus consequatur ex veritatis error non.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?19107",
                    "parent_id": 8,
                    "created_at": "2020-07-24 16:42:20",
                    "updated_at": "2020-08-08 22:27:22"
                }
            },
            {
                "id": 28,
                "product_category_id": 4,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "cupiditate consequatur ut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?64898",
                "slug": "ut-expedita",
                "short_description": "Earum perferendis ea in mollitia.",
                "short_description_en": "Velit et ea libero odio incidunt ut. Quia numquam quidem recusandae quos maiores et iste inventore. Unde aut provident aut delectus a. Aliquam ut accusamus labore est velit.",
                "price": "3758.00",
                "sale_price": "7437.00",
                "stock": 697,
                "spec": null,
                "seo_title": "consequatur quam qui",
                "seo_keyword": "sunt",
                "seo_description": "Et omnis et corporis et consectetur est.",
                "benefit": "Doloremque voluptas praesentium minus ipsa natus. Ut ratione ut dignissimos qui nemo qui ad.",
                "benefit_en": "Voluptatem id sunt sequi beatae ut hic sed doloremque. Rem mollitia consequuntur libero enim consequuntur. Sit aliquid quo nobis eveniet numquam enim.",
                "tech_description": "Aliquid eum dolores quas. Aut autem repellat voluptatum quidem. Accusantium qui repellendus libero nemo ad. Ex quia deleniti facere autem.",
                "tech_description_en": "Sequi nulla eum soluta explicabo neque quisquam assumenda. Dolore dolor voluptatem eum exercitationem. Doloribus dolorem sequi ut aut ipsum veniam voluptatem. Qui deserunt aspernatur mollitia ut quia.",
                "description": "Dolore deserunt et et saepe sed. Sint minima sunt temporibus illum suscipit animi sed. Totam aut ducimus molestiae incidunt.",
                "description_en": "Neque beatae perferendis et consequatur. Aut et repellat enim enim qui. Quos in ut ut corporis quibusdam accusamus. Ut quia qui veritatis repellat non vitae.",
                "usage": "Nihil natus doloremque sint sit ad quas eligendi. A nihil deleniti deserunt.",
                "usage_en": "Dolore et et quibusdam rem voluptate distinctio. Necessitatibus culpa similique architecto molestiae veniam. Ducimus omnis perferendis culpa et.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?74403",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?35560",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?12477",
                "product_video": null,
                "status": 1,
                "rating": 9.12,
                "sold_count": 3461,
                "review_count": 6726,
                "created_at": "2020-07-30 08:25:53",
                "updated_at": "2020-07-23 06:15:01",
                "product_category": {
                    "id": 4,
                    "slug": "quia-qui",
                    "title": "男士护肤",
                    "title_en": "praesentium aut fugiat",
                    "describe": "Autem iusto nostrum at vero id officia dolores velit. Qui sint quod et eius libero. Nam quia aperiam placeat pariatur. Architecto sit quaerat dolore cupiditate dolores. Aut nemo voluptas non animi.",
                    "describe_en": "Sapiente quia laudantium et qui. Aut similique magni quis quos et animi. Quam eum eum pariatur fugiat. Architecto laborum quia est aperiam. Adipisci quos est asperiores ad quis similique quis.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?31847",
                    "description": "In repellat velit repudiandae consequatur et.",
                    "description_en": "Enim eos voluptatem repellat.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?66155",
                    "parent_id": 15,
                    "created_at": "2020-08-05 07:01:02",
                    "updated_at": "2020-08-11 02:45:23"
                }
            },
            {
                "id": 31,
                "product_category_id": 18,
                "product_name": "黑钻肌光精华",
                "product_name_en": "quis delectus autem",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?17703",
                "slug": "deleniti-laudantium",
                "short_description": "Expedita et dicta temporibus doloribus.",
                "short_description_en": "Voluptatem cumque et rerum tempora. Beatae exercitationem harum consequatur fugit veritatis. Eius incidunt velit et sed consequatur reprehenderit quisquam.",
                "price": "9009.00",
                "sale_price": "9528.00",
                "stock": 746,
                "spec": null,
                "seo_title": "sit molestiae commodi",
                "seo_keyword": "excepturi",
                "seo_description": "Est est labore dolorem necessitatibus natus.",
                "benefit": "Non totam ut totam delectus laudantium excepturi. Magnam ea quo aut eos eum.",
                "benefit_en": "Omnis sed adipisci tempore at placeat fugiat id. Doloribus eligendi et rerum aut dolore voluptas. Quos inventore omnis qui officiis ut et ad hic. Eius ut cupiditate ut exercitationem itaque odio. Quia atque deserunt odit quia natus nulla velit.",
                "tech_description": "Impedit rerum excepturi rerum. Voluptate adipisci quia facere praesentium. Voluptate aspernatur assumenda est vero optio. Iusto maxime velit occaecati magnam aut ea vero.",
                "tech_description_en": "Accusamus unde illo ut quia et. Tempora similique et consequatur aut illum. Nobis pariatur ipsam nesciunt totam. Laudantium iste dicta pariatur cupiditate in expedita veniam.",
                "description": "Fugiat ea nemo nam ab voluptate accusantium soluta. Officiis ut et temporibus alias ut. Earum ad pariatur reprehenderit molestias.",
                "description_en": "Cumque nesciunt impedit ut reiciendis ipsa deserunt. Minus dolorem sint eaque dolores. Et quia voluptas dolor beatae.",
                "usage": "Ratione voluptatem recusandae sed rem est repellat. Dolorum eos animi hic excepturi repellat quo. In odio mollitia maxime fugiat.",
                "usage_en": "Consectetur ipsum vitae molestiae quisquam quia voluptates. Mollitia est rerum quam vel velit molestiae aut. Cupiditate quo maiores dolor illo sit ut sequi. Ipsum nam non dolor praesentium ducimus voluptatibus.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?25428",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?81136",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?25697",
                "product_video": null,
                "status": 1,
                "rating": 7.47,
                "sold_count": 4203,
                "review_count": 1753,
                "created_at": "2020-08-18 06:32:02",
                "updated_at": "2020-08-17 07:22:59",
                "product_category": {
                    "id": 18,
                    "slug": "laudantium-atque",
                    "title": "睫毛膏",
                    "title_en": "culpa quae et",
                    "describe": "Quasi sint at qui hic itaque aspernatur. Praesentium vero corrupti qui iure accusantium aut.",
                    "describe_en": "Est fugiat veritatis illum dolor doloribus aliquam. Et porro alias est aut laboriosam eligendi. Ipsum quia inventore fugiat voluptatem rem eum recusandae.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?42843",
                    "description": "Sit et et odit.",
                    "description_en": "Consequatur voluptatem laudantium fugiat perferendis non quo.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?32006",
                    "parent_id": 11,
                    "created_at": "2020-08-02 16:20:35",
                    "updated_at": "2020-07-20 16:40:32"
                }
            },
            {
                "id": 32,
                "product_category_id": 18,
                "product_name": "钻石焕活面膜",
                "product_name_en": "repudiandae eius aperiam",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?27303",
                "slug": "qui-quo",
                "short_description": "A eum provident vero ut nesciunt.",
                "short_description_en": "Accusamus voluptatem sit tempora. Vel eos eligendi laudantium sapiente non a. Odit ex laborum tempore consectetur. Occaecati mollitia non molestiae expedita voluptas rerum. Molestiae et nesciunt mollitia id exercitationem asperiores repellendus totam.",
                "price": "8338.00",
                "sale_price": "9416.00",
                "stock": 699,
                "spec": null,
                "seo_title": "et provident aliquam",
                "seo_keyword": "laudantium",
                "seo_description": "Iure mollitia dolore eaque perspiciatis.",
                "benefit": "Qui laboriosam ad culpa non. Voluptatem aspernatur fuga ipsum incidunt commodi nisi quibusdam. Aut qui est dolorem beatae.",
                "benefit_en": "Excepturi ut libero reprehenderit est autem. Dicta minima non qui fuga provident. Eius error aut autem consequatur fugiat.",
                "tech_description": "Quis et animi et vel eum velit tempore. Neque adipisci et non qui expedita asperiores eum distinctio. Occaecati ipsum eos cumque. Totam iure consequatur odit nostrum.",
                "tech_description_en": "Laboriosam dolorem corrupti mollitia quas magnam error possimus. Ea facilis consectetur expedita magni minus. Ut exercitationem veritatis dolorem. Eum sequi et et architecto sint accusamus.",
                "description": "Quasi tenetur non commodi distinctio deserunt id. Et tempora voluptatibus temporibus quas vero repellat aliquam. Est in tenetur nisi non rerum cupiditate.",
                "description_en": "Voluptas saepe ut nam nam accusantium. Itaque fugiat assumenda velit nesciunt omnis rerum. Et iure nostrum magnam.",
                "usage": "Expedita harum aut hic distinctio quis. Neque voluptatibus facilis delectus. Vero et illo nihil ut. Possimus deserunt accusantium a eum ex voluptatem.",
                "usage_en": "Voluptatem necessitatibus ut id at qui. Officia voluptate aut sunt rerum voluptas et provident ipsum. Ipsum accusantium qui commodi est unde.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?86985",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?52078",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?33534",
                "product_video": null,
                "status": 1,
                "rating": 3.81,
                "sold_count": 9005,
                "review_count": 5591,
                "created_at": "2020-08-16 12:28:17",
                "updated_at": "2020-07-31 23:37:18",
                "product_category": {
                    "id": 18,
                    "slug": "laudantium-atque",
                    "title": "睫毛膏",
                    "title_en": "culpa quae et",
                    "describe": "Quasi sint at qui hic itaque aspernatur. Praesentium vero corrupti qui iure accusantium aut.",
                    "describe_en": "Est fugiat veritatis illum dolor doloribus aliquam. Et porro alias est aut laboriosam eligendi. Ipsum quia inventore fugiat voluptatem rem eum recusandae.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?42843",
                    "description": "Sit et et odit.",
                    "description_en": "Consequatur voluptatem laudantium fugiat perferendis non quo.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?32006",
                    "parent_id": 11,
                    "created_at": "2020-08-02 16:20:35",
                    "updated_at": "2020-07-20 16:40:32"
                }
            },
            {
                "id": 33,
                "product_category_id": 6,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "id dolor quaerat",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?86849",
                "slug": "laudantium-velit",
                "short_description": "Pariatur pariatur iure qui expedita quia.",
                "short_description_en": "Fugit illum saepe harum. Impedit iure sit sit doloribus porro asperiores harum. Fugiat illo laudantium ut delectus aliquam.",
                "price": "7377.00",
                "sale_price": "8743.00",
                "stock": 576,
                "spec": null,
                "seo_title": "necessitatibus provident quo",
                "seo_keyword": "sed",
                "seo_description": "Nesciunt natus officiis veniam rerum voluptatibus quos.",
                "benefit": "Nam id in sint cupiditate saepe rerum omnis. Id distinctio et dicta sequi numquam. Quia impedit voluptatem eveniet et exercitationem a possimus sequi. Hic et eveniet aut iusto.",
                "benefit_en": "Ipsam eos aspernatur aliquid et modi unde ea. Rem odio dolores dicta quia ut tempora. Architecto reiciendis maiores qui maiores sequi vero.",
                "tech_description": "Exercitationem eveniet sint tempora voluptas iure similique. Eum culpa eligendi non nihil ut nemo natus est. Magnam qui ut facilis qui molestiae omnis. Officiis placeat qui iure minus et et.",
                "tech_description_en": "Accusamus cum quasi necessitatibus ea. Inventore alias facilis iure qui et natus ut. Assumenda non facere molestiae porro. Necessitatibus quibusdam error voluptate quisquam consectetur dolorem laudantium.",
                "description": "Possimus voluptates quod fugiat aliquid et. Possimus neque dolor ea aut blanditiis.",
                "description_en": "Eos quae autem et et delectus repudiandae accusamus autem. Aut necessitatibus unde magni illum quas. Ipsum fuga omnis quisquam enim.",
                "usage": "Dolorem maiores et tempora et. Nostrum aut aut fugit aut. Autem qui aliquid voluptatum aut voluptas et.",
                "usage_en": "Neque doloremque sit quas molestiae. Et nulla et consequuntur sed. Sit tempore repudiandae saepe. Velit vero iure corporis illum cumque.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?86958",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?91499",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?51959",
                "product_video": null,
                "status": 1,
                "rating": 9.48,
                "sold_count": 4459,
                "review_count": 8136,
                "created_at": "2020-07-29 09:49:59",
                "updated_at": "2020-08-01 00:20:59",
                "product_category": {
                    "id": 6,
                    "slug": "modi-adipisci",
                    "title": "洁面",
                    "title_en": "in non magnam",
                    "describe": "Sed laborum repudiandae aut consequuntur harum debitis. Enim cumque animi soluta delectus. Molestias tenetur aut et eveniet occaecati ullam dolorem ea.",
                    "describe_en": "Autem et magni quas tempore quis possimus quasi. Magnam delectus aut optio rerum.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?45418",
                    "description": "Et consequuntur laudantium possimus.",
                    "description_en": "Nostrum consequuntur soluta voluptatem aut.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?82691",
                    "parent_id": 9,
                    "created_at": "2020-08-12 22:46:49",
                    "updated_at": "2020-08-18 10:46:42"
                }
            },
            {
                "id": 34,
                "product_category_id": 16,
                "product_name": "黑钻焕肤水",
                "product_name_en": "quidem vel nesciunt",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?20012",
                "slug": "sed-excepturi",
                "short_description": "Omnis ipsam qui quia.",
                "short_description_en": "Corrupti voluptas qui voluptatum vitae illum. Porro dolor quam nesciunt aspernatur qui. Quo voluptate atque consequatur necessitatibus quas sed et. Reiciendis modi sunt accusantium in recusandae ipsum reiciendis repellendus.",
                "price": "9312.00",
                "sale_price": "6517.00",
                "stock": 601,
                "spec": null,
                "seo_title": "quisquam deserunt ut",
                "seo_keyword": "assumenda",
                "seo_description": "Nesciunt qui dolores quam alias quaerat quia earum.",
                "benefit": "Id est modi rerum illum suscipit. Iusto et est velit pariatur dignissimos. Vitae eum necessitatibus nihil aut ut.",
                "benefit_en": "Earum voluptatem quia blanditiis aspernatur unde aut molestias. Ullam consequatur culpa architecto quia rerum ea. Omnis et ex dolor corporis odit. Doloremque provident dolores voluptatem quis.",
                "tech_description": "Qui fugit consequuntur consequatur labore corporis. Asperiores sapiente et illum iusto libero. Possimus sunt laudantium sit facilis.",
                "tech_description_en": "Aut suscipit mollitia vitae exercitationem blanditiis molestiae qui nihil. Necessitatibus quas consequuntur optio alias. Natus id sed minus culpa. Consequuntur explicabo ut qui officia. Natus autem nihil aperiam et quas.",
                "description": "Temporibus vero delectus quia ad dolorem aut. Sint autem sed aut. Voluptatem aut molestiae pariatur sed.",
                "description_en": "Nihil non esse consequuntur unde nostrum. Omnis aspernatur consequatur aut laudantium. Qui et in dolorum maxime est dolores.",
                "usage": "Maxime voluptas labore similique vel qui fugit. Ipsam aut sint quae. Expedita amet illum non quia est modi. Tenetur magnam occaecati impedit et unde voluptatem molestiae.",
                "usage_en": "Autem voluptatem repellat ab numquam ab id itaque. Temporibus voluptate dicta esse libero sed iusto ea omnis. Nulla magnam minima quo nihil consequuntur incidunt placeat. Molestias mollitia itaque doloremque nisi.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?57998",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?56386",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?78005",
                "product_video": null,
                "status": 1,
                "rating": 8.71,
                "sold_count": 7642,
                "review_count": 5030,
                "created_at": "2020-08-07 21:23:05",
                "updated_at": "2020-08-19 16:49:09",
                "product_category": {
                    "id": 16,
                    "slug": "suscipit-et",
                    "title": "乳液",
                    "title_en": "cumque animi deserunt",
                    "describe": "Cupiditate dicta consequatur est cum mollitia. Doloremque ipsum dignissimos voluptas aspernatur. Ut sapiente culpa perspiciatis omnis quae. Quia repellat id placeat officia et illo.",
                    "describe_en": "Velit fugiat possimus voluptatem vel. Consequuntur rerum velit quas rerum ipsum. Suscipit amet totam explicabo autem.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?44411",
                    "description": "Quos aut est qui placeat.",
                    "description_en": "Optio nemo tempora in sint nostrum voluptas.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?56841",
                    "parent_id": 4,
                    "created_at": "2020-08-15 05:09:05",
                    "updated_at": "2020-08-16 08:32:22"
                }
            },
            {
                "id": 36,
                "product_category_id": 2,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "dolorum delectus et",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?36843",
                "slug": "maiores-sed",
                "short_description": "Laudantium assumenda voluptate ullam.",
                "short_description_en": "Minima consequatur deserunt aut sequi sequi. Quidem sint ipsa aut est quod repellat. Rem unde suscipit quis quis ut est. Ut at sed et accusantium.",
                "price": "892.00",
                "sale_price": "955.00",
                "stock": 32,
                "spec": null,
                "seo_title": "quaerat nihil voluptatem",
                "seo_keyword": "culpa",
                "seo_description": "Qui sunt voluptatum eos illum.",
                "benefit": "Corporis tempora quas sunt dolorem omnis neque. Aperiam officiis optio dolorem laboriosam sint sint. Quidem aut labore et aspernatur fugit explicabo.",
                "benefit_en": "Velit qui nemo aperiam suscipit. Aperiam cum sed doloremque consequuntur. Dolor et qui nihil pariatur magnam animi corrupti.",
                "tech_description": "Error aliquid odio quia et. Molestias doloribus eaque beatae quasi commodi. Sint in dolor itaque consequuntur in odio.",
                "tech_description_en": "Harum iste quia unde esse laborum. Sit tenetur rem qui nulla. Voluptatem accusamus quas voluptas ut corrupti sit.",
                "description": "Voluptatem quis alias esse ut. Qui facere eum error aut ea illum quo. Beatae consectetur omnis recusandae eos voluptatem et. Totam laudantium harum recusandae.",
                "description_en": "Sed ipsam est fugit repudiandae. Libero consectetur ut error. Enim excepturi voluptatum alias reprehenderit quibusdam atque.",
                "usage": "Assumenda tenetur quo iure omnis. Mollitia eveniet sed iure quaerat sit explicabo. Est distinctio maiores fugiat ducimus eos est.",
                "usage_en": "Omnis dolorem quo est ut et quo voluptatibus voluptas. Natus et recusandae molestiae aut. Repellendus harum tempora ullam rerum facilis consequatur.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?19752",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?55309",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?48862",
                "product_video": null,
                "status": 1,
                "rating": 6.06,
                "sold_count": 5900,
                "review_count": 3420,
                "created_at": "2020-08-14 18:29:15",
                "updated_at": "2020-08-02 09:22:28",
                "product_category": {
                    "id": 2,
                    "slug": "fugiat-aut",
                    "title": "防晒",
                    "title_en": "qui tenetur vel",
                    "describe": "Aliquid est qui et placeat quo. Illum sint alias sunt debitis et. Quidem consequatur ut est provident. Aliquam minus cumque deleniti eum ut.",
                    "describe_en": "Et nihil quos quas minima. Atque consequatur aut quo id maxime ex sunt. Dolorum perferendis magnam dolorem esse quaerat nemo recusandae nihil.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?63243",
                    "description": "Et rerum necessitatibus suscipit asperiores.",
                    "description_en": "Praesentium et culpa vel dolores est debitis.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?13194",
                    "parent_id": 7,
                    "created_at": "2020-07-27 19:28:58",
                    "updated_at": "2020-08-20 01:40:52"
                }
            },
            {
                "id": 37,
                "product_category_id": 3,
                "product_name": "黑钻肌光精华",
                "product_name_en": "unde et molestiae",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?24328",
                "slug": "debitis-sunt",
                "short_description": "Et aut delectus iure voluptate ea nobis.",
                "short_description_en": "Autem voluptatibus laborum non ratione sunt doloribus. Voluptas dicta aut itaque recusandae sit autem. Placeat earum a rem consectetur. Placeat sit dolore deserunt atque inventore.",
                "price": "6699.00",
                "sale_price": "824.00",
                "stock": 728,
                "spec": null,
                "seo_title": "quae dolor consequatur",
                "seo_keyword": "doloremque",
                "seo_description": "Quisquam quisquam molestiae voluptate vel delectus dolorum.",
                "benefit": "Eligendi assumenda totam iure ipsum. Facere rerum repellendus consectetur veniam. Dicta minima voluptatem fugit aperiam ut.",
                "benefit_en": "Dolores maiores fuga quod quos reiciendis consequuntur quia. Expedita harum libero et totam id voluptas dolores veniam. Aut autem ex ut dolorum eum. Doloribus occaecati nostrum voluptas rerum.",
                "tech_description": "Occaecati praesentium ut quod est eum quidem et. Ut et veniam illum. Labore dignissimos accusamus illum exercitationem rerum iure. Rerum praesentium est cupiditate consequatur dolores ut.",
                "tech_description_en": "Quod non dignissimos adipisci autem. Quas dolores laboriosam asperiores expedita deserunt quis voluptatem. Iste minus blanditiis reiciendis laboriosam quia id sequi nobis. Earum asperiores neque sequi.",
                "description": "Libero dignissimos est nostrum quo tempora veritatis enim exercitationem. Quod praesentium illo ab aliquam aut qui nesciunt. Dolores est nihil minus iusto sed.",
                "description_en": "Dolore sapiente ratione qui. Corporis placeat vel ad dolor velit voluptatum perferendis. Earum nam ullam quod dolorem vel et.",
                "usage": "Quam accusamus vitae possimus nisi accusantium placeat. Quod quasi illo minima optio omnis eum ea. Dicta fuga molestiae quia fugiat inventore quasi neque dolorem. Dolores tempore provident ad. Animi deleniti maiores nisi eos eum laudantium excepturi molestiae.",
                "usage_en": "Pariatur minima nihil id nulla. Repudiandae odit architecto iusto debitis magni. Voluptates quam id quidem reprehenderit sit harum eos quia.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?31820",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?43015",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?24230",
                "product_video": null,
                "status": 1,
                "rating": 1.54,
                "sold_count": 7624,
                "review_count": 8626,
                "created_at": "2020-08-20 08:01:49",
                "updated_at": "2020-07-29 10:06:30",
                "product_category": {
                    "id": 3,
                    "slug": "exercitationem-saepe",
                    "title": "眼线",
                    "title_en": "in molestiae sit",
                    "describe": "Deserunt ea omnis natus architecto. Velit ullam et molestiae labore omnis quia iste. Quis tempora id autem aliquam quo et a iste.",
                    "describe_en": "Incidunt asperiores est quaerat. Quis vel qui occaecati explicabo recusandae quos dolores aut. Ut maxime voluptatum dolore laudantium aperiam nesciunt.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?93568",
                    "description": "Architecto dolores quia quaerat.",
                    "description_en": "Labore dolor laboriosam beatae repudiandae facilis magni.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?55790",
                    "parent_id": 16,
                    "created_at": "2020-08-09 09:43:24",
                    "updated_at": "2020-07-26 06:51:07"
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
        "total": 19
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
    -d '{"product_id":"in"}'

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
    "product_id": "in"
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
    `product_id` | required |  optional  | 商品id
    
<!-- END_90957246142cc2a14824b129ecd1ba3c -->

<!-- START_7b69db4c02ba3f3b2cca4aace8917d35 -->
## According type to change cart item
根据type改变购物车商品数量

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/api/shop_carts/1?type=et&product_id=ullam&amount=nihil" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/shop_carts/1"
);

let params = {
    "type": "et",
    "product_id": "ullam",
    "amount": "nihil",
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
    "http://store.wutang.com/api/shop_carts/1?product_id=fugit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/shop_carts/1"
);

let params = {
    "product_id": "fugit",
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
    -d '{"province":"eum","city":"accusantium","district":"et","address":"blanditiis","zip":"est","contact_name":"sint","contact_phone":"sunt"}'

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
    "province": "eum",
    "city": "accusantium",
    "district": "et",
    "address": "blanditiis",
    "zip": "est",
    "contact_name": "sint",
    "contact_phone": "sunt"
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
    "http://store.wutang.com/api/user_addresses/1?province=voluptatem&city=omnis&district=quo&address=eos&zip=explicabo&contact_name=odit&contact_phone=architecto" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_addresses/1"
);

let params = {
    "province": "voluptatem",
    "city": "omnis",
    "district": "quo",
    "address": "eos",
    "zip": "explicabo",
    "contact_name": "odit",
    "contact_phone": "architecto",
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
    "http://store.wutang.com/api/user_profiles?profile_id=ratione&phone=assumenda&real_name=aspernatur&sex=est&birthday=aliquid&age=dicta&province=et&city=autem&district=voluptatum&address=accusantium&zip=dolore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_profiles"
);

let params = {
    "profile_id": "ratione",
    "phone": "assumenda",
    "real_name": "aspernatur",
    "sex": "est",
    "birthday": "aliquid",
    "age": "dicta",
    "province": "et",
    "city": "autem",
    "district": "voluptatum",
    "address": "accusantium",
    "zip": "dolore",
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
    "http://store.wutang.com/api/wish_list?product_id=soluta" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/wish_list"
);

let params = {
    "product_id": "soluta",
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
    "http://store.wutang.com/api/wish_list?product_id=consequatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/wish_list"
);

let params = {
    "product_id": "consequatur",
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
    -G "http://store.wutang.com/api/response_code?10001=laboriosam&10003=facilis&20001=qui&40001=molestiae&40003=quod&40004=laborum&40005=ullam&50001=sit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/response_code"
);

let params = {
    "10001": "laboriosam",
    "10003": "facilis",
    "20001": "qui",
    "40001": "molestiae",
    "40003": "quod",
    "40004": "laborum",
    "40005": "ullam",
    "50001": "sit",
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

<!-- START_a2b98669f3032d3aec53dbf3b94df424 -->
## refresh_minicart
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/refresh_minicart" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/refresh_minicart"
);

let headers = {
    "Content-Type": "application/json",
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
`GET refresh_minicart`


<!-- END_a2b98669f3032d3aec53dbf3b94df424 -->

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

<!-- START_fe40fa8b2b43e27d474f3afa126ccfbc -->
## the-house/{slug}
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/the-house/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/the-house/1"
);

let headers = {
    "Content-Type": "application/json",
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


