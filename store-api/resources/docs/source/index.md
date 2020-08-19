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
    -G "http://store.wutang.com/admin/category_stories?page=doloremque&page_limit=repellat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories"
);

let params = {
    "page": "doloremque",
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
    "http://store.wutang.com/admin/category_stories?title=autem&title_en=eos&description=labore&description_en=dolor&banner=veritatis&product_category_id=tempore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories"
);

let params = {
    "title": "autem",
    "title_en": "eos",
    "description": "labore",
    "description_en": "dolor",
    "banner": "veritatis",
    "product_category_id": "tempore",
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
    "http://store.wutang.com/admin/category_stories/1?title=quis&title_en=quo&description=eveniet&description_en=dolorem&banner=rem&product_category_id=ipsa" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories/1"
);

let params = {
    "title": "quis",
    "title_en": "quo",
    "description": "eveniet",
    "description_en": "dolorem",
    "banner": "rem",
    "product_category_id": "ipsa",
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
    -G "http://store.wutang.com/admin/logs/1?page=architecto&page_limit=corporis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/logs/1"
);

let params = {
    "page": "architecto",
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
    "http://store.wutang.com/admin/logs/1?ids=eum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/logs/1"
);

let params = {
    "ids": "eum",
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
    -G "http://store.wutang.com/admin/order?page=ab&page_limit=cupiditate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/order"
);

let params = {
    "page": "ab",
    "page_limit": "cupiditate",
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
    "http://store.wutang.com/admin/order?page=eum&page_limit=magnam&username=soluta&order_no=excepturi&order_status=tempore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/order"
);

let params = {
    "page": "eum",
    "page_limit": "magnam",
    "username": "soluta",
    "order_no": "excepturi",
    "order_status": "tempore",
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
    -G "http://store.wutang.com/admin/product?page=dolores&page_limit=corrupti" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product"
);

let params = {
    "page": "dolores",
    "page_limit": "corrupti",
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
    "http://store.wutang.com/admin/product?product_category_id=minima&product_name=et&product_name_en=rerum&thumbnail=accusantium&slug=ut&short_description=laborum&short_description_en=placeat&price=eaque&sale_price=perferendis&stock=omnis&seo_title=blanditiis&seo_keyword=fugiat&seo_description=eum&benefit=quia&benefit_en=aut&tech_description=voluptatem&tech_description_en=sunt&description=aut&description_en=sed&usage=sequi&usage_en=est&main_image=eos&main_image_2=et&benefit_image=optio&product_video=alias&status=laudantium&rating=natus&sold_count=alias&review_count=voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product"
);

let params = {
    "product_category_id": "minima",
    "product_name": "et",
    "product_name_en": "rerum",
    "thumbnail": "accusantium",
    "slug": "ut",
    "short_description": "laborum",
    "short_description_en": "placeat",
    "price": "eaque",
    "sale_price": "perferendis",
    "stock": "omnis",
    "seo_title": "blanditiis",
    "seo_keyword": "fugiat",
    "seo_description": "eum",
    "benefit": "quia",
    "benefit_en": "aut",
    "tech_description": "voluptatem",
    "tech_description_en": "sunt",
    "description": "aut",
    "description_en": "sed",
    "usage": "sequi",
    "usage_en": "est",
    "main_image": "eos",
    "main_image_2": "et",
    "benefit_image": "optio",
    "product_video": "alias",
    "status": "laudantium",
    "rating": "natus",
    "sold_count": "alias",
    "review_count": "voluptatem",
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
    "http://store.wutang.com/admin/product/1?product_category_id=unde&product_name=similique&product_name_en=dolore&thumbnail=voluptatem&slug=veritatis&short_description=asperiores&short_description_en=mollitia&price=occaecati&sale_price=occaecati&stock=assumenda&seo_title=voluptatibus&seo_keyword=minus&seo_description=quidem&benefit=sit&benefit_en=sapiente&tech_description=nobis&tech_description_en=aut&description=aut&description_en=iusto&usage=aut&usage_en=qui&main_image=et&main_image_2=omnis&benefit_image=sit&product_video=ut&status=nisi&rating=nostrum&sold_count=dolorem&review_count=minima" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product/1"
);

let params = {
    "product_category_id": "unde",
    "product_name": "similique",
    "product_name_en": "dolore",
    "thumbnail": "voluptatem",
    "slug": "veritatis",
    "short_description": "asperiores",
    "short_description_en": "mollitia",
    "price": "occaecati",
    "sale_price": "occaecati",
    "stock": "assumenda",
    "seo_title": "voluptatibus",
    "seo_keyword": "minus",
    "seo_description": "quidem",
    "benefit": "sit",
    "benefit_en": "sapiente",
    "tech_description": "nobis",
    "tech_description_en": "aut",
    "description": "aut",
    "description_en": "iusto",
    "usage": "aut",
    "usage_en": "qui",
    "main_image": "et",
    "main_image_2": "omnis",
    "benefit_image": "sit",
    "product_video": "ut",
    "status": "nisi",
    "rating": "nostrum",
    "sold_count": "dolorem",
    "review_count": "minima",
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
    -G "http://store.wutang.com/admin/product_categories?page=iusto&page_limit=impedit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories"
);

let params = {
    "page": "iusto",
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
    "http://store.wutang.com/admin/product_categories?title=in&title_en=nemo&describe=porro&describe_en=fugiat&banner=molestiae&description=ratione&description_en=exercitationem&img=eos&parent_id=laboriosam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories"
);

let params = {
    "title": "in",
    "title_en": "nemo",
    "describe": "porro",
    "describe_en": "fugiat",
    "banner": "molestiae",
    "description": "ratione",
    "description_en": "exercitationem",
    "img": "eos",
    "parent_id": "laboriosam",
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
    "http://store.wutang.com/admin/product_categories/1?title=assumenda&title_en=molestiae&describe=corporis&describe_en=explicabo&banner=aut&description=quis&description_en=et&img=beatae&parent_id=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories/1"
);

let params = {
    "title": "assumenda",
    "title_en": "molestiae",
    "describe": "corporis",
    "describe_en": "explicabo",
    "banner": "aut",
    "description": "quis",
    "description_en": "et",
    "img": "beatae",
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
    "http://store.wutang.com/admin/product_sku?title=blanditiis&description=quia&price=quo&stock=nobis&product_id=doloribus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_sku"
);

let params = {
    "title": "blanditiis",
    "description": "quia",
    "price": "quo",
    "stock": "nobis",
    "product_id": "doloribus",
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
    "http://store.wutang.com/admin/product_sku/1?title=voluptatem&description=officiis&price=ratione&stock=quaerat&product_id=aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_sku/1"
);

let params = {
    "title": "voluptatem",
    "description": "officiis",
    "price": "ratione",
    "stock": "quaerat",
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
    -G "http://store.wutang.com/admin/user?username=eligendi&page=est&page_limit=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user"
);

let params = {
    "username": "eligendi",
    "page": "est",
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
    "http://store.wutang.com/admin/user/1?name=repudiandae&email=nisi&phone=unde&avatar=minus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user/1"
);

let params = {
    "name": "repudiandae",
    "email": "nisi",
    "phone": "unde",
    "avatar": "minus",
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
    "http://store.wutang.com/admin/user/reset_password/1?oldPassword=placeat&newPassword=accusamus&newPassword_confirmation=quasi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user/reset_password/1"
);

let params = {
    "oldPassword": "placeat",
    "newPassword": "accusamus",
    "newPassword_confirmation": "quasi",
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
    -G "http://store.wutang.com/admin/get_user?hash_id=alias" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/get_user"
);

let params = {
    "hash_id": "alias",
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
    "http://store.wutang.com/admin/user_addresses?province=sapiente&city=doloribus&district=dolorem&address=esse&zip=et&contact_name=velit&contact_phone=in" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses"
);

let params = {
    "province": "sapiente",
    "city": "doloribus",
    "district": "dolorem",
    "address": "esse",
    "zip": "et",
    "contact_name": "velit",
    "contact_phone": "in",
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
    "http://store.wutang.com/admin/user_addresses/1?address_id=dicta&province=quam&city=voluptas&district=qui&address=dolor&zip=maxime&contact_name=aliquid&contact_phone=aspernatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses/1"
);

let params = {
    "address_id": "dicta",
    "province": "quam",
    "city": "voluptas",
    "district": "qui",
    "address": "dolor",
    "zip": "maxime",
    "contact_name": "aliquid",
    "contact_phone": "aspernatur",
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
    "http://store.wutang.com/admin/user_addresses/1?address_id=libero" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses/1"
);

let params = {
    "address_id": "libero",
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
    "http://store.wutang.com/admin/user_profiles/1?profile_id=iusto" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_profiles/1"
);

let params = {
    "profile_id": "iusto",
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
    "http://store.wutang.com/admin/user_profiles/1?profile_id=dolor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_profiles/1"
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
    -d '{"name":"consequuntur","username":"rerum","password":"delectus","captcha_key":"voluptatem","captcha_code":"nesciunt","password_question_id":7,"password_answer":"voluptatem"}'

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
    "name": "consequuntur",
    "username": "rerum",
    "password": "delectus",
    "captcha_key": "voluptatem",
    "captcha_code": "nesciunt",
    "password_question_id": 7,
    "password_answer": "voluptatem"
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
    -G "http://store.wutang.com/api/questions?username=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/questions"
);

let params = {
    "username": "qui",
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
        "username": "qui"
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
    -d '{"username":"quibusdam","password":"quas"}'

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
    "username": "quibusdam",
    "password": "quas"
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
    "http://store.wutang.com/api/password_reset?username=ea&password_question_id=impedit&password_answer=voluptatibus&password=sed&password_confirmation=aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/password_reset"
);

let params = {
    "username": "ea",
    "password_question_id": "impedit",
    "password_answer": "voluptatibus",
    "password": "sed",
    "password_confirmation": "aut",
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
    -d '{"oldPassword":"sequi","newPassword":"molestias","newPassword_confirmation":"nam"}'

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
    "oldPassword": "sequi",
    "newPassword": "molestias",
    "newPassword_confirmation": "nam"
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
    -G "http://store.wutang.com/api/order_details/1?no=quas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/order_details/1"
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
    "http://store.wutang.com/api/orders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"address_id":"reiciendis","remark":"dolorem","items":[{"product_id":2,"amount":2}]}'

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
    "address_id": "reiciendis",
    "remark": "dolorem",
    "items": [
        {
            "product_id": 2,
            "amount": 2
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
    -G "http://store.wutang.com/api/orders/pay_check?no=enim" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/orders/pay_check"
);

let params = {
    "no": "enim",
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
    -G "http://store.wutang.com/api/aligateway/pay?no=sint&total_amount=rerum&subject=perspiciatis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/aligateway/pay"
);

let params = {
    "no": "sint",
    "total_amount": "rerum",
    "subject": "perspiciatis",
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
    -G "http://store.wutang.com/api/alipay/pay?no=iste&total_amount=iusto&subject=fuga" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/alipay/pay"
);

let params = {
    "no": "iste",
    "total_amount": "iusto",
    "subject": "fuga",
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
    -G "http://store.wutang.com/api/unionpay/pay?no=deleniti&subject=sapiente&total_amount=sint" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/unionpay/pay"
);

let params = {
    "no": "deleniti",
    "subject": "sapiente",
    "total_amount": "sint",
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
            "slug": "iusto-qui",
            "title": "卸妆",
            "title_en": "et soluta et",
            "describe": "Molestiae numquam consequuntur qui ut. Vero ipsam ea facere eius. Commodi sed sunt eum rerum eum laudantium. Et saepe cum aut maxime.",
            "describe_en": "A at voluptatem mollitia perspiciatis et. Totam omnis nihil voluptates odio sint. Quis voluptas ex consequatur vel mollitia voluptas. Fugit nesciunt quod iste amet.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?44749",
            "description": "Voluptatem commodi omnis non dolorum ut aut.",
            "description_en": "Omnis nemo ex amet quibusdam.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?92323",
            "parent_id": 9,
            "created_at": "2020-08-05 02:58:43",
            "updated_at": "2020-08-10 01:14:51",
            "parent_title": "睫毛膏"
        },
        {
            "id": 2,
            "slug": "non-accusantium",
            "title": "唇膏",
            "title_en": "assumenda earum veniam",
            "describe": "Repellat quaerat eos perferendis laborum facere aliquam temporibus et. Illo possimus qui sapiente esse asperiores suscipit ipsam. Libero culpa ducimus porro repellendus delectus.",
            "describe_en": "Labore vero distinctio deleniti ratione fuga. Culpa accusamus inventore fugiat officia consequatur quis. Saepe quae distinctio dolorum in.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?56404",
            "description": "Similique facere explicabo consequatur quaerat.",
            "description_en": "Cupiditate sunt maxime amet sint quaerat.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?42535",
            "parent_id": 13,
            "created_at": "2020-08-16 16:19:49",
            "updated_at": "2020-07-29 04:33:53",
            "parent_title": "眼霜"
        },
        {
            "id": 3,
            "slug": "temporibus-fugiat",
            "title": "爽肤水",
            "title_en": "voluptatem accusantium numquam",
            "describe": "Totam aliquam alias et. Odit ab mollitia porro quidem consequatur. Illum aut sequi quia occaecati asperiores ut qui eius.",
            "describe_en": "Consequatur maxime eveniet nihil ut minima voluptatum. Facilis maiores eligendi doloremque velit. Hic autem placeat assumenda vero. Expedita deserunt qui maxime autem et accusamus iste.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?96361",
            "description": "Asperiores architecto earum veniam autem.",
            "description_en": "Quo quia iusto magnam et et assumenda.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?50180",
            "parent_id": 10,
            "created_at": "2020-08-05 15:51:56",
            "updated_at": "2020-07-21 13:32:16",
            "parent_title": "香水"
        },
        {
            "id": 4,
            "slug": "quisquam-qui",
            "title": "隔离",
            "title_en": "doloremque beatae exercitationem",
            "describe": "Voluptas vero aperiam quia et quis. Quos quam enim aut quidem vel nisi. Consequatur natus quia ad.",
            "describe_en": "Ex et fugiat delectus quo quibusdam. Quaerat cumque id mollitia laboriosam dolorem magni ipsa. Sed aut provident veniam non nostrum et ut. Qui quo velit numquam expedita officia neque in.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?65231",
            "description": "In neque ut ab sunt.",
            "description_en": "Distinctio iusto doloremque reprehenderit vel.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?95542",
            "parent_id": 14,
            "created_at": "2020-08-13 05:38:10",
            "updated_at": "2020-08-10 09:59:18",
            "parent_title": "腮红"
        },
        {
            "id": 5,
            "slug": "totam-ut",
            "title": "唇膏",
            "title_en": "voluptatem reiciendis nam",
            "describe": "Voluptates doloremque unde ut esse quae quod. Voluptate doloremque voluptas eum ex sit nostrum. Optio commodi asperiores ut ut et molestiae velit.",
            "describe_en": "Ut aut quae soluta recusandae ipsa vel consequatur nobis. Aut recusandae maiores eaque autem. Qui aspernatur est voluptas illo aut sit. Qui magni laboriosam totam.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?16406",
            "description": "Qui aut incidunt impedit sit at.",
            "description_en": "Possimus deleniti et quia non autem a.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?54221",
            "parent_id": 15,
            "created_at": "2020-07-26 03:50:37",
            "updated_at": "2020-07-28 08:16:56",
            "parent_title": "身体护理"
        },
        {
            "id": 6,
            "slug": "et-ut",
            "title": "粉底液",
            "title_en": "dolor quia dolores",
            "describe": "Eaque ut voluptates sed tempore id. Labore nesciunt esse quia ipsum quia dolores qui. Doloremque dolores voluptatum eaque fugit. Soluta maiores quis rerum eos aliquid repellendus amet.",
            "describe_en": "Ea dicta id qui veniam. Dignissimos dicta qui voluptatum corrupti cum doloribus voluptas. Harum provident inventore voluptatum explicabo assumenda.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?39525",
            "description": "Aut ad odit sit dolorem est aliquid.",
            "description_en": "Nemo assumenda voluptates et libero consectetur.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?78841",
            "parent_id": 2,
            "created_at": "2020-08-12 11:53:55",
            "updated_at": "2020-07-31 13:44:32",
            "parent_title": "唇膏"
        },
        {
            "id": 7,
            "slug": "mollitia-eum",
            "title": "面膜",
            "title_en": "alias eligendi ut",
            "describe": "Quisquam et dolor nostrum itaque. Praesentium tempora quidem sint perferendis harum magni quaerat vel.",
            "describe_en": "Laboriosam iure commodi velit velit assumenda dolor. Sint fugit et omnis dolor ipsa qui magni. A voluptate ea natus perspiciatis.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?38101",
            "description": "In dolore tenetur sunt.",
            "description_en": "Est delectus necessitatibus magni minus doloribus.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?79386",
            "parent_id": 16,
            "created_at": "2020-08-15 06:23:08",
            "updated_at": "2020-07-28 18:41:40",
            "parent_title": "腮红"
        },
        {
            "id": 8,
            "slug": "veniam-autem",
            "title": "香水",
            "title_en": "rem amet itaque",
            "describe": "Quo voluptas est voluptas nam et. Odit quod sed distinctio assumenda maiores. Deserunt eligendi veritatis eveniet laudantium aut et sunt nobis.",
            "describe_en": "Dolore dolorum eligendi neque nam enim aspernatur dicta. Non nisi possimus qui. Nihil consequatur praesentium autem qui aut dolor. Et dolores atque qui odio.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?58540",
            "description": "Sunt ut quo sint.",
            "description_en": "Recusandae facilis voluptatem illo blanditiis quia.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?68524",
            "parent_id": 12,
            "created_at": "2020-08-14 22:11:50",
            "updated_at": "2020-08-02 23:34:03",
            "parent_title": "腮红"
        },
        {
            "id": 9,
            "slug": "dolor-maxime",
            "title": "睫毛膏",
            "title_en": "alias quo iusto",
            "describe": "Eaque mollitia est quidem. Facilis consequatur suscipit dolorem et perspiciatis. Enim nobis qui asperiores sit itaque.",
            "describe_en": "Commodi in facilis optio voluptate aut soluta neque laudantium. Voluptatem voluptas corporis maxime officia harum illum. Possimus est aperiam asperiores similique officiis.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?97486",
            "description": "Rem fugiat nostrum vel similique unde.",
            "description_en": "Recusandae quo ad voluptate omnis.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?17344",
            "parent_id": 3,
            "created_at": "2020-07-29 20:33:03",
            "updated_at": "2020-08-12 10:25:05",
            "parent_title": "爽肤水"
        },
        {
            "id": 10,
            "slug": "alias-non",
            "title": "香水",
            "title_en": "itaque voluptatum dignissimos",
            "describe": "Est natus assumenda culpa ut. Ducimus sit ducimus exercitationem nihil sint repellendus ducimus. Quasi a facilis vel eum repellat vel illo.",
            "describe_en": "Aut cumque dolorem praesentium praesentium minus laudantium enim. Illum ut quas consequatur accusantium.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?44913",
            "description": "Architecto aut molestiae porro id et.",
            "description_en": "Vel odit dolor sapiente deleniti.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?85872",
            "parent_id": 20,
            "created_at": "2020-08-06 08:03:21",
            "updated_at": "2020-07-22 09:52:48",
            "parent_title": "爽肤水"
        },
        {
            "id": 11,
            "slug": "repellat-molestiae",
            "title": "男士护肤",
            "title_en": "omnis a qui",
            "describe": "Non iste magnam qui earum. Eos officia sit dolor veritatis. Est ab nulla necessitatibus nam sed in.",
            "describe_en": "Voluptatum et velit molestiae ipsum qui vero cum. In libero rerum dolor. Inventore consequuntur error animi ullam et. Sed nisi veritatis temporibus et.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?32633",
            "description": "Adipisci iure neque facere iusto.",
            "description_en": "Quos cum laboriosam est voluptatibus.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?68054",
            "parent_id": 9,
            "created_at": "2020-08-17 11:05:42",
            "updated_at": "2020-08-06 04:08:46",
            "parent_title": "睫毛膏"
        },
        {
            "id": 12,
            "slug": "perferendis-odit",
            "title": "腮红",
            "title_en": "velit temporibus ut",
            "describe": "Totam ab mollitia quam quia saepe sit excepturi corrupti. Consectetur voluptate sed sit ducimus. Quaerat nihil ipsa modi enim veniam. Magni exercitationem ullam in voluptatibus quas.",
            "describe_en": "Mollitia molestiae vel libero. In impedit aliquid tempore. Neque rerum nobis omnis.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?61738",
            "description": "Perferendis at voluptatem commodi.",
            "description_en": "Minima nihil quia est incidunt consectetur quis.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?94536",
            "parent_id": 11,
            "created_at": "2020-08-06 02:12:35",
            "updated_at": "2020-08-12 17:54:55",
            "parent_title": "男士护肤"
        },
        {
            "id": 13,
            "slug": "impedit-culpa",
            "title": "眼霜",
            "title_en": "maiores quod doloribus",
            "describe": "Beatae sint suscipit in nulla molestias. Autem aut autem aut sed. Quidem aliquid et consequatur sequi. Officiis delectus facilis possimus ratione corporis modi.",
            "describe_en": "Possimus non quibusdam quaerat pariatur tenetur non. Ab quaerat ut repellat ducimus labore. Molestiae ut quidem qui quod. Earum voluptatem tempore eaque rem consequatur blanditiis possimus.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?60716",
            "description": "Sed reprehenderit quibusdam fugiat.",
            "description_en": "Totam qui at iusto excepturi.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?60222",
            "parent_id": 13,
            "created_at": "2020-07-28 18:22:18",
            "updated_at": "2020-07-20 23:00:35",
            "parent_title": "眼霜"
        },
        {
            "id": 14,
            "slug": "ullam-suscipit",
            "title": "腮红",
            "title_en": "est incidunt qui",
            "describe": "Eum ab velit similique voluptas quo et. Eum nulla ut expedita et.",
            "describe_en": "Quo perferendis inventore vel quasi. Neque qui non et consequatur ipsam totam. Nihil ipsum qui quaerat rerum accusantium ullam hic.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?72112",
            "description": "Fugit possimus quisquam quaerat minima.",
            "description_en": "Aut possimus sint aliquid quia minima autem molestiae.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?78789",
            "parent_id": 11,
            "created_at": "2020-08-04 23:14:48",
            "updated_at": "2020-07-22 21:08:56",
            "parent_title": "男士护肤"
        },
        {
            "id": 15,
            "slug": "repellendus-assumenda",
            "title": "身体护理",
            "title_en": "recusandae odio quod",
            "describe": "Eius molestiae ipsam et nulla autem et. Omnis temporibus odit culpa sint quis sit. Totam tempore rerum nemo rerum ut.",
            "describe_en": "Nesciunt quaerat beatae consequatur quia eos. Quo perferendis libero est qui. Eos nam voluptatum ex quia sed architecto.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?81900",
            "description": "Aut dolores aliquid earum.",
            "description_en": "Nesciunt voluptatem dignissimos voluptatum.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?19110",
            "parent_id": 8,
            "created_at": "2020-08-02 11:38:42",
            "updated_at": "2020-08-08 00:56:40",
            "parent_title": "香水"
        },
        {
            "id": 16,
            "slug": "officia-eius",
            "title": "腮红",
            "title_en": "quaerat deleniti eum",
            "describe": "Voluptate dignissimos harum esse minima. Nihil voluptatem odio quas aut nihil. Totam fugiat quasi est quia quo. Aliquam saepe nostrum dolores molestiae totam ut cum ratione.",
            "describe_en": "Maxime architecto maxime qui assumenda eum. Maxime dolor sint aut et et cumque totam. Ab molestias dolores eaque.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?52335",
            "description": "Dolorum modi a maiores earum culpa.",
            "description_en": "Nesciunt natus ipsam nam.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?52039",
            "parent_id": 4,
            "created_at": "2020-08-16 02:54:21",
            "updated_at": "2020-08-01 18:53:21",
            "parent_title": "隔离"
        },
        {
            "id": 17,
            "slug": "rem-autem",
            "title": "睫毛膏",
            "title_en": "blanditiis et sit",
            "describe": "Officiis provident omnis id id velit est. Sunt voluptatem enim aliquam quia perferendis aut non. Maxime excepturi nesciunt impedit delectus nihil. In dolor laudantium et error ut sunt labore.",
            "describe_en": "Est eligendi qui delectus vel sint consectetur. Voluptatum et officiis qui dolorem. Laboriosam ratione labore tenetur eius dolorem non.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?46562",
            "description": "Magnam quis molestiae deserunt quia aut.",
            "description_en": "Voluptate odit error deserunt et eos.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?92788",
            "parent_id": 5,
            "created_at": "2020-08-01 12:59:07",
            "updated_at": "2020-07-28 15:30:48",
            "parent_title": "唇膏"
        },
        {
            "id": 18,
            "slug": "laborum-voluptas",
            "title": "乳液",
            "title_en": "pariatur non temporibus",
            "describe": "Repellat minima aut sed sint. Error molestiae omnis dolor neque. Vitae sit dignissimos provident est laudantium sint. Asperiores ut quia aut aut.",
            "describe_en": "Dolorem aut aliquid ipsam sint. Accusamus ratione est laboriosam ipsam error. Reiciendis est cum consequatur non ducimus ut dolorem. Sapiente cupiditate et at quia.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?54969",
            "description": "Odio odio ab cumque aut expedita.",
            "description_en": "Eos libero neque voluptatem sit vel fugit.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?95710",
            "parent_id": 17,
            "created_at": "2020-07-24 19:54:53",
            "updated_at": "2020-08-02 19:06:08",
            "parent_title": "睫毛膏"
        },
        {
            "id": 19,
            "slug": "a-quas",
            "title": "眼霜",
            "title_en": "commodi enim commodi",
            "describe": "Ut nostrum est ut aut sit et praesentium ratione. Quidem quia in ullam non odio. Nesciunt aut commodi placeat est. Voluptatem perspiciatis velit inventore mollitia voluptatibus dolorum quisquam.",
            "describe_en": "Dignissimos accusamus aut sint distinctio minima et tenetur. Id voluptas quod et fugiat nisi commodi. Et beatae rerum minus non.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?89751",
            "description": "Neque et dolor illo excepturi incidunt ex.",
            "description_en": "Et sint repudiandae totam est.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?33291",
            "parent_id": 18,
            "created_at": "2020-08-08 03:07:56",
            "updated_at": "2020-08-05 23:40:52",
            "parent_title": "乳液"
        },
        {
            "id": 20,
            "slug": "quis-aliquam",
            "title": "爽肤水",
            "title_en": "aut architecto reiciendis",
            "describe": "Similique voluptatem quidem in. Ut exercitationem minima nobis animi. Nisi nulla maiores laboriosam at molestias.",
            "describe_en": "Aut dolorum ipsum perspiciatis est at voluptatem. Consequatur quos sit ut impedit dolorem voluptas dolorem. Laboriosam nulla repellat est. Quo quas incidunt blanditiis repellat.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?22219",
            "description": "Aspernatur facilis hic voluptatem voluptatem est.",
            "description_en": "Velit et necessitatibus quibusdam voluptas quo tempora.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?47022",
            "parent_id": 9,
            "created_at": "2020-08-11 16:40:04",
            "updated_at": "2020-08-13 14:17:32",
            "parent_title": "睫毛膏"
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
                "product_category_id": 4,
                "product_name": "黑钻焕肤水",
                "product_name_en": "pariatur quibusdam et",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?69775",
                "slug": "quia-ipsa",
                "short_description": "Assumenda itaque voluptas reprehenderit nisi.",
                "short_description_en": "Nulla voluptatem aliquam ipsa rerum quam qui doloremque consequuntur. Perspiciatis quos magni cum aut sint. Nulla modi est molestiae ut voluptatibus.",
                "price": "985.00",
                "sale_price": "7534.00",
                "stock": 895,
                "spec": null,
                "seo_title": "dolorem ratione eos",
                "seo_keyword": "voluptatem",
                "seo_description": "Qui libero mollitia natus placeat et esse.",
                "benefit": "Nemo est itaque error eum dolorem error eum. Sint dignissimos qui hic voluptatem sint. Qui enim reprehenderit cum ut quam.",
                "benefit_en": "Quibusdam sit sint est debitis et. Odio ipsa omnis voluptatem culpa quaerat quidem tenetur. Odit non quam rerum exercitationem qui corporis atque.",
                "tech_description": "Quod dolor dignissimos sit dolores. Quos laboriosam eos dolorum sit iure. Nostrum enim dolores quaerat dicta sit.",
                "tech_description_en": "Quod cupiditate accusantium esse doloremque adipisci voluptatem. Tempora sapiente omnis enim voluptatum qui quasi aut. Perferendis rerum consequuntur incidunt. Dolores tenetur incidunt sunt libero. Dignissimos voluptate molestiae perferendis soluta nihil modi.",
                "description": "Labore quos voluptas quas cumque deleniti. Commodi pariatur officia ducimus ut veritatis autem quibusdam. Atque omnis cumque neque quas fuga dolor est. Laborum omnis exercitationem ex tempore.",
                "description_en": "Assumenda tempore eum quaerat molestiae ea optio. Praesentium ea soluta illum eos. Atque incidunt et sint a reiciendis laboriosam. Et et et aut cupiditate omnis ut iure.",
                "usage": "Est cum minima blanditiis et. Id mollitia aut deserunt architecto laborum aut exercitationem rerum. Consequatur magni cum est expedita animi sit ad temporibus. Dolore ut ipsum consequatur aut quia et.",
                "usage_en": "Eos enim est omnis quod iste esse et. A sit voluptas sed fugiat sit temporibus tempore. Non et repudiandae ut. Aut molestias nisi est in est et.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?92851",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?85005",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?67308",
                "product_video": null,
                "status": 3,
                "rating": 8.13,
                "sold_count": 4323,
                "review_count": 9517,
                "created_at": "2020-08-16 08:34:34",
                "updated_at": "2020-08-18 11:26:29",
                "product_category": {
                    "id": 4,
                    "slug": "quisquam-qui",
                    "title": "隔离",
                    "title_en": "doloremque beatae exercitationem",
                    "describe": "Voluptas vero aperiam quia et quis. Quos quam enim aut quidem vel nisi. Consequatur natus quia ad.",
                    "describe_en": "Ex et fugiat delectus quo quibusdam. Quaerat cumque id mollitia laboriosam dolorem magni ipsa. Sed aut provident veniam non nostrum et ut. Qui quo velit numquam expedita officia neque in.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?65231",
                    "description": "In neque ut ab sunt.",
                    "description_en": "Distinctio iusto doloremque reprehenderit vel.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?95542",
                    "parent_id": 14,
                    "created_at": "2020-08-13 05:38:10",
                    "updated_at": "2020-08-10 09:59:18"
                }
            },
            {
                "id": 2,
                "product_category_id": 5,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "dolores magnam vel",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?89018",
                "slug": "sunt-accusantium",
                "short_description": "Sunt soluta ratione qui earum aut quo.",
                "short_description_en": "Consequuntur in numquam optio temporibus dolore numquam at soluta. Aut odio sunt tempora excepturi autem. Commodi quaerat ab soluta unde ut tempora.",
                "price": "5732.00",
                "sale_price": "6249.00",
                "stock": 482,
                "spec": null,
                "seo_title": "deserunt in quod",
                "seo_keyword": "vero",
                "seo_description": "Fuga veniam culpa aut accusantium provident et.",
                "benefit": "Quia dolores eos voluptatem voluptatem vero dicta. Sit tenetur velit assumenda voluptas qui voluptatem est. Voluptates ut est rerum voluptatum minus.",
                "benefit_en": "Voluptatem placeat commodi dolorem aspernatur distinctio. Non consequatur id nemo totam officiis.",
                "tech_description": "Rerum labore qui ut maiores officia. Error autem tempora aut aliquam nisi. Eos ut facere fugit quo maiores minus quam. Sed dicta accusantium eligendi voluptatem. Qui quia sit praesentium eveniet facere quae.",
                "tech_description_en": "Sunt ut quaerat voluptas assumenda. Repellendus non quia autem velit id. Velit consequatur in aspernatur voluptatem.",
                "description": "Eius aspernatur aut odio error non rerum. Rerum eos necessitatibus laudantium quisquam dolorum facilis explicabo. Molestias ab inventore totam magnam.",
                "description_en": "Dolores consequatur cumque est odio aspernatur error sequi enim. Dolores perferendis ut cupiditate recusandae aspernatur temporibus nulla odio. Impedit molestiae nisi eaque maxime et autem harum. Quia molestias et saepe voluptatum. Et tenetur error accusamus non et.",
                "usage": "Minima recusandae unde quidem itaque doloremque ipsam doloribus eos. Sunt fuga quod qui. Commodi quis et consequatur commodi.",
                "usage_en": "Repudiandae sed qui iusto ut. Maiores libero iusto ducimus non eum voluptatem. Ut et possimus quaerat eos.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?13319",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?44785",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?40865",
                "product_video": null,
                "status": 3,
                "rating": 5.86,
                "sold_count": 7745,
                "review_count": 3792,
                "created_at": "2020-07-24 05:26:37",
                "updated_at": "2020-08-05 14:17:20",
                "product_category": {
                    "id": 5,
                    "slug": "totam-ut",
                    "title": "唇膏",
                    "title_en": "voluptatem reiciendis nam",
                    "describe": "Voluptates doloremque unde ut esse quae quod. Voluptate doloremque voluptas eum ex sit nostrum. Optio commodi asperiores ut ut et molestiae velit.",
                    "describe_en": "Ut aut quae soluta recusandae ipsa vel consequatur nobis. Aut recusandae maiores eaque autem. Qui aspernatur est voluptas illo aut sit. Qui magni laboriosam totam.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?16406",
                    "description": "Qui aut incidunt impedit sit at.",
                    "description_en": "Possimus deleniti et quia non autem a.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?54221",
                    "parent_id": 15,
                    "created_at": "2020-07-26 03:50:37",
                    "updated_at": "2020-07-28 08:16:56"
                }
            },
            {
                "id": 3,
                "product_category_id": 3,
                "product_name": "黑钻肌光精华",
                "product_name_en": "et hic sint",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?65242",
                "slug": "aut-enim",
                "short_description": "Vel soluta incidunt deleniti doloremque aliquam error.",
                "short_description_en": "Sint tempore voluptas ipsum totam sit. Hic iste reprehenderit facilis eius. Voluptates odit sint libero suscipit qui ut sint.",
                "price": "3487.00",
                "sale_price": "5709.00",
                "stock": 493,
                "spec": null,
                "seo_title": "sed qui ratione",
                "seo_keyword": "quis",
                "seo_description": "Qui aliquid corporis modi.",
                "benefit": "Molestias aliquid laborum nobis cum. Ipsam esse quaerat natus quia et corporis ea laborum. Eligendi qui quia animi quod. Sit in voluptatem laudantium illo. Numquam nesciunt recusandae reprehenderit.",
                "benefit_en": "Nihil error necessitatibus quia consequatur. Non suscipit non veniam adipisci laborum. Quia ipsum ducimus consequuntur autem amet unde.",
                "tech_description": "Vitae consequatur placeat doloremque modi eum cum enim qui. Animi accusamus libero autem. Magnam exercitationem enim eos labore ut nemo. Harum rerum dolorem sint dolore.",
                "tech_description_en": "Perferendis molestiae est facilis debitis. Vitae veritatis sapiente porro quasi provident. Consectetur sapiente deserunt id ratione fuga. Debitis aut eaque soluta laboriosam.",
                "description": "Iusto et occaecati minus beatae voluptatem. Quas alias cum rerum ducimus libero labore. Et omnis saepe esse modi et inventore rerum debitis.",
                "description_en": "Aliquam autem repudiandae praesentium laborum eum. Qui delectus eum dignissimos vero.",
                "usage": "Ut et illum ex ea veniam explicabo et. Nobis dolorem possimus optio vitae delectus. Adipisci nihil qui amet omnis. Repellat vel ut voluptatum eum molestiae quis.",
                "usage_en": "Neque non nulla cumque quaerat id. Magni in inventore suscipit voluptatum. Nobis voluptatem ex natus ut nostrum ut ipsa. Suscipit et hic corrupti. Delectus fugiat animi et amet.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?37812",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?27623",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?89744",
                "product_video": null,
                "status": 2,
                "rating": 6.57,
                "sold_count": 9541,
                "review_count": 4288,
                "created_at": "2020-08-15 19:09:30",
                "updated_at": "2020-07-24 16:30:37",
                "product_category": {
                    "id": 3,
                    "slug": "temporibus-fugiat",
                    "title": "爽肤水",
                    "title_en": "voluptatem accusantium numquam",
                    "describe": "Totam aliquam alias et. Odit ab mollitia porro quidem consequatur. Illum aut sequi quia occaecati asperiores ut qui eius.",
                    "describe_en": "Consequatur maxime eveniet nihil ut minima voluptatum. Facilis maiores eligendi doloremque velit. Hic autem placeat assumenda vero. Expedita deserunt qui maxime autem et accusamus iste.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?96361",
                    "description": "Asperiores architecto earum veniam autem.",
                    "description_en": "Quo quia iusto magnam et et assumenda.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?50180",
                    "parent_id": 10,
                    "created_at": "2020-08-05 15:51:56",
                    "updated_at": "2020-07-21 13:32:16"
                }
            },
            {
                "id": 4,
                "product_category_id": 7,
                "product_name": "钻石焕活面膜",
                "product_name_en": "consequatur esse alias",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?88067",
                "slug": "sint-facilis",
                "short_description": "Et consequatur eius deleniti.",
                "short_description_en": "Quia provident dolor aut quia amet voluptates nihil placeat. Aperiam qui cupiditate ut asperiores sint. Ut itaque distinctio libero excepturi alias.",
                "price": "1793.00",
                "sale_price": "646.00",
                "stock": 425,
                "spec": null,
                "seo_title": "qui in excepturi",
                "seo_keyword": "quis",
                "seo_description": "Deserunt mollitia fuga dolore debitis ut aut.",
                "benefit": "Ut alias earum ut. Et quas fuga aspernatur accusantium. Voluptas eaque est qui aut rerum aut velit.",
                "benefit_en": "Eum sint officia et voluptas debitis voluptatem aliquam. Pariatur ullam quo magni veritatis nemo est. Tempore voluptate neque dolor ipsam aut aut.",
                "tech_description": "Expedita odit eveniet et id inventore. Voluptas praesentium sint totam minima et a. Vel tempora aspernatur magni reprehenderit ut molestias incidunt. Fuga labore animi cupiditate accusantium deserunt quod dolorem. Qui aut molestias aliquid similique distinctio.",
                "tech_description_en": "Voluptas amet esse aut ut quis. Sint eum a dolorum. Qui illum ut sit ut.",
                "description": "Quidem quis recusandae eligendi assumenda reprehenderit asperiores maxime minus. Nam mollitia quis adipisci vel omnis sed. In impedit aut enim aut. Quis aut odio est et quia excepturi.",
                "description_en": "Omnis unde veniam expedita quod repellendus aut. Reprehenderit rem vero voluptatem sed maiores qui. Qui in iste asperiores fuga quibusdam.",
                "usage": "Non vel iste enim eos. Nulla ex atque voluptatem ipsum voluptatem qui laborum beatae. Est incidunt temporibus doloribus. Aut reiciendis quis dolorem in quibusdam ratione qui.",
                "usage_en": "Aspernatur atque molestiae facilis id occaecati quidem. Natus doloribus culpa a est architecto ut fugiat. Fugit voluptates reiciendis quos quia rerum voluptatum sed. Praesentium nisi sequi esse atque enim praesentium optio.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?90173",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?65739",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?23920",
                "product_video": null,
                "status": 1,
                "rating": 9.39,
                "sold_count": 8838,
                "review_count": 3440,
                "created_at": "2020-07-20 07:23:59",
                "updated_at": "2020-08-12 23:28:46",
                "product_category": {
                    "id": 7,
                    "slug": "mollitia-eum",
                    "title": "面膜",
                    "title_en": "alias eligendi ut",
                    "describe": "Quisquam et dolor nostrum itaque. Praesentium tempora quidem sint perferendis harum magni quaerat vel.",
                    "describe_en": "Laboriosam iure commodi velit velit assumenda dolor. Sint fugit et omnis dolor ipsa qui magni. A voluptate ea natus perspiciatis.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?38101",
                    "description": "In dolore tenetur sunt.",
                    "description_en": "Est delectus necessitatibus magni minus doloribus.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?79386",
                    "parent_id": 16,
                    "created_at": "2020-08-15 06:23:08",
                    "updated_at": "2020-07-28 18:41:40"
                }
            },
            {
                "id": 5,
                "product_category_id": 8,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "aspernatur natus dolores",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?74491",
                "slug": "voluptas-occaecati",
                "short_description": "Quia optio ab facere qui non non.",
                "short_description_en": "Culpa iure aspernatur sed reiciendis. Molestiae voluptas nulla quas at odio perspiciatis. Culpa ipsa repellat sint fugiat ut. Labore consequatur cumque occaecati voluptatem corporis sunt animi quo.",
                "price": "1595.00",
                "sale_price": "6619.00",
                "stock": 475,
                "spec": null,
                "seo_title": "illo pariatur nam",
                "seo_keyword": "occaecati",
                "seo_description": "Corrupti et eum possimus.",
                "benefit": "Assumenda excepturi esse in voluptates est. Numquam repellendus doloribus qui consequatur. Delectus vero aut sint et explicabo iure. Natus sed magni adipisci eius.",
                "benefit_en": "Ipsa consequuntur veniam est ullam accusantium. Consequuntur odit velit aliquid ut.",
                "tech_description": "Consectetur rerum repellat sequi dolores. Et et facilis sunt est. Aut assumenda eum ut voluptates. Sunt et iste architecto similique ex. Voluptas nobis in adipisci vitae.",
                "tech_description_en": "Et exercitationem et sint sunt est eos deserunt. Ut dicta voluptatem optio. Dolores eligendi adipisci neque illum molestiae. Corporis vitae consequuntur aut porro aperiam voluptas voluptatem.",
                "description": "Et quia earum eos eligendi. Neque voluptatem impedit velit labore velit adipisci. Saepe est sunt laboriosam harum cupiditate.",
                "description_en": "Ducimus maiores quibusdam nesciunt officia minima. Fuga in aut iusto nemo natus amet libero. Praesentium quia magnam est dolore est. Iure ut tenetur assumenda qui.",
                "usage": "Ipsam dolorem autem voluptatem eligendi. Temporibus aliquam est ut exercitationem et. Omnis et voluptas provident voluptas odio cumque dolorum. Eos voluptatem saepe maiores non atque est perspiciatis.",
                "usage_en": "Quae natus ut sit alias vel explicabo. Consequuntur eos incidunt reprehenderit. Fugiat tempore non aperiam nobis et consequatur itaque recusandae. Ut totam sit dignissimos ipsa magni eveniet nemo et.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?40488",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?44875",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?61237",
                "product_video": null,
                "status": 2,
                "rating": 5.75,
                "sold_count": 5867,
                "review_count": 5411,
                "created_at": "2020-08-07 08:50:49",
                "updated_at": "2020-07-22 05:20:40",
                "product_category": {
                    "id": 8,
                    "slug": "veniam-autem",
                    "title": "香水",
                    "title_en": "rem amet itaque",
                    "describe": "Quo voluptas est voluptas nam et. Odit quod sed distinctio assumenda maiores. Deserunt eligendi veritatis eveniet laudantium aut et sunt nobis.",
                    "describe_en": "Dolore dolorum eligendi neque nam enim aspernatur dicta. Non nisi possimus qui. Nihil consequatur praesentium autem qui aut dolor. Et dolores atque qui odio.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?58540",
                    "description": "Sunt ut quo sint.",
                    "description_en": "Recusandae facilis voluptatem illo blanditiis quia.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?68524",
                    "parent_id": 12,
                    "created_at": "2020-08-14 22:11:50",
                    "updated_at": "2020-08-02 23:34:03"
                }
            },
            {
                "id": 6,
                "product_category_id": 1,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "eaque magnam occaecati",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?69925",
                "slug": "et-sapiente",
                "short_description": "Consequuntur laboriosam sint at velit blanditiis.",
                "short_description_en": "Illo nisi deserunt sint praesentium quam reprehenderit. Vitae accusantium provident est dolorum velit dignissimos non. Fugit enim eos earum laboriosam ex et.",
                "price": "4798.00",
                "sale_price": "4350.00",
                "stock": 689,
                "spec": null,
                "seo_title": "eos eos dignissimos",
                "seo_keyword": "enim",
                "seo_description": "Qui dolor omnis quia.",
                "benefit": "Dignissimos nemo iusto laborum omnis ullam sit non. Rerum dolorem est et beatae explicabo dolores. Repudiandae mollitia natus beatae voluptas voluptas et.",
                "benefit_en": "Ducimus minima atque et cupiditate officiis et. Quasi cupiditate dolorem aut qui distinctio quia. Qui perferendis impedit culpa incidunt hic nihil at. Alias iusto aliquid et enim est id maiores voluptatibus.",
                "tech_description": "Quibusdam ad at itaque at dicta et. Autem nam assumenda accusamus alias. Debitis facilis magni repellendus. Et aut quia asperiores fugiat quis.",
                "tech_description_en": "Qui ut tempore pariatur ad dolor pariatur suscipit. Facilis ut inventore facilis quas facilis nostrum ratione illo.",
                "description": "Doloremque officia id possimus aut saepe autem. Mollitia quis quasi et voluptatibus dolor sed. Sed error ratione cumque quisquam minima dolorem nisi omnis.",
                "description_en": "Illo qui maxime reprehenderit delectus quia veniam. Ut voluptas expedita similique aut aut quia et. Est dolorem veniam consequatur delectus perferendis voluptate qui.",
                "usage": "Est expedita quia sit accusamus nesciunt sint amet. Consequatur et autem numquam a doloribus officia ut. Libero saepe et veniam praesentium blanditiis rerum nulla. Aut in facere voluptatum officiis.",
                "usage_en": "Dolorem et nihil autem aut nam et et quam. Veritatis unde et libero minima dolore. Amet aut sit ea quae quibusdam. Est ratione cum aspernatur vel aut non.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?86044",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?69343",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?10703",
                "product_video": null,
                "status": 2,
                "rating": 7.44,
                "sold_count": 9525,
                "review_count": 2793,
                "created_at": "2020-08-09 01:33:38",
                "updated_at": "2020-08-08 22:42:43",
                "product_category": {
                    "id": 1,
                    "slug": "iusto-qui",
                    "title": "卸妆",
                    "title_en": "et soluta et",
                    "describe": "Molestiae numquam consequuntur qui ut. Vero ipsam ea facere eius. Commodi sed sunt eum rerum eum laudantium. Et saepe cum aut maxime.",
                    "describe_en": "A at voluptatem mollitia perspiciatis et. Totam omnis nihil voluptates odio sint. Quis voluptas ex consequatur vel mollitia voluptas. Fugit nesciunt quod iste amet.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?44749",
                    "description": "Voluptatem commodi omnis non dolorum ut aut.",
                    "description_en": "Omnis nemo ex amet quibusdam.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?92323",
                    "parent_id": 9,
                    "created_at": "2020-08-05 02:58:43",
                    "updated_at": "2020-08-10 01:14:51"
                }
            },
            {
                "id": 7,
                "product_category_id": 15,
                "product_name": "黑钻肌光精华",
                "product_name_en": "minima velit consequuntur",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?29299",
                "slug": "qui-voluptates",
                "short_description": "Inventore pariatur inventore non eum sint quo.",
                "short_description_en": "Ut repudiandae rerum omnis rerum et magnam dolores. Quaerat autem vitae inventore nam repellat eum. Quaerat nam harum nam quis quidem. Quasi inventore non provident.",
                "price": "2599.00",
                "sale_price": "5769.00",
                "stock": 684,
                "spec": null,
                "seo_title": "et ratione autem",
                "seo_keyword": "officia",
                "seo_description": "Iure ut labore sint rem placeat.",
                "benefit": "Quo facilis non vero facilis voluptate sunt. Animi ut enim dolores dignissimos est eius. Et excepturi voluptate exercitationem ut ut iste.",
                "benefit_en": "Tempore sed ullam neque. Non est quia ipsam alias. Id saepe quod a quasi placeat.",
                "tech_description": "Vel et magnam dolor nisi expedita sed. Iure debitis praesentium repellendus incidunt enim corporis minima. Eligendi at fugiat ipsa suscipit laboriosam.",
                "tech_description_en": "Sed a aut sunt nostrum rerum. Voluptate veritatis quas officiis dolorum porro. Repudiandae alias vel et facere a necessitatibus incidunt. Consequatur ipsum doloribus exercitationem impedit.",
                "description": "Rerum hic voluptatum modi pariatur. Eum sunt minus accusantium eum aperiam id. Ut enim omnis fuga voluptate sit. Quas itaque voluptatem rerum.",
                "description_en": "Aut impedit modi laboriosam at. Impedit sit adipisci fugit excepturi quia est est. Veniam laboriosam possimus laudantium aut. Eos unde voluptates omnis distinctio.",
                "usage": "Tempore velit harum in animi totam. Quo nisi at at est minus dolorem. Necessitatibus minus omnis sunt rem aut nemo quaerat eaque.",
                "usage_en": "Aliquid consequatur dolorem quia blanditiis beatae. Non maxime aut ad nobis fugit.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?13884",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?42838",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?27453",
                "product_video": null,
                "status": 1,
                "rating": 7.7,
                "sold_count": 1023,
                "review_count": 7600,
                "created_at": "2020-07-28 10:31:21",
                "updated_at": "2020-07-30 10:09:36",
                "product_category": {
                    "id": 15,
                    "slug": "repellendus-assumenda",
                    "title": "身体护理",
                    "title_en": "recusandae odio quod",
                    "describe": "Eius molestiae ipsam et nulla autem et. Omnis temporibus odit culpa sint quis sit. Totam tempore rerum nemo rerum ut.",
                    "describe_en": "Nesciunt quaerat beatae consequatur quia eos. Quo perferendis libero est qui. Eos nam voluptatum ex quia sed architecto.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?81900",
                    "description": "Aut dolores aliquid earum.",
                    "description_en": "Nesciunt voluptatem dignissimos voluptatum.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?19110",
                    "parent_id": 8,
                    "created_at": "2020-08-02 11:38:42",
                    "updated_at": "2020-08-08 00:56:40"
                }
            },
            {
                "id": 8,
                "product_category_id": 1,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "sint temporibus veniam",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?49622",
                "slug": "reprehenderit-eos",
                "short_description": "Dolores dolores rem quia omnis ut.",
                "short_description_en": "Esse eaque non perferendis id saepe ullam provident. Voluptas animi quasi et saepe deleniti qui et quo. Delectus officiis et libero eius.",
                "price": "5999.00",
                "sale_price": "6255.00",
                "stock": 293,
                "spec": null,
                "seo_title": "autem neque est",
                "seo_keyword": "in",
                "seo_description": "Similique omnis quaerat qui.",
                "benefit": "At sapiente amet aut. Delectus reiciendis cum et nobis voluptates ut ea et. Est enim rem eos possimus qui.",
                "benefit_en": "Et ratione accusantium qui consequatur et qui. Sapiente sapiente accusamus illum sed modi qui. Sed et pariatur error deleniti.",
                "tech_description": "Fugit at possimus quia totam voluptatem nemo quia. Possimus nulla aut labore provident a illo. Voluptas consequatur officiis quia repudiandae. Assumenda nobis corporis cum.",
                "tech_description_en": "Autem numquam soluta et saepe reprehenderit error voluptatum. Ea cum fugiat sit aliquid eligendi. Dolorum ea in quia excepturi accusamus ipsum consequatur tempora. Sunt cupiditate veritatis amet porro. Repellat enim omnis error enim.",
                "description": "Vel quam voluptatum voluptatem labore. Rerum et iusto architecto ut. Suscipit repellendus quia sed numquam quas natus mollitia tempore.",
                "description_en": "Velit temporibus ab ut perferendis voluptatem dignissimos laudantium. Aspernatur delectus voluptate aut suscipit libero. Illo in natus est aspernatur sint id placeat. Soluta excepturi inventore qui qui ea qui omnis.",
                "usage": "Quo magnam est rerum aperiam. Asperiores qui earum eum corrupti consectetur ipsam est. Ipsum fugit rerum quaerat autem.",
                "usage_en": "Consequuntur quia animi velit. Aut earum quis doloremque voluptatem molestiae. Cum animi itaque sunt voluptatum a. Quis omnis et magnam et voluptas.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?40155",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?91460",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?13114",
                "product_video": null,
                "status": 1,
                "rating": 8.62,
                "sold_count": 3161,
                "review_count": 4988,
                "created_at": "2020-07-28 19:37:14",
                "updated_at": "2020-07-25 21:21:42",
                "product_category": {
                    "id": 1,
                    "slug": "iusto-qui",
                    "title": "卸妆",
                    "title_en": "et soluta et",
                    "describe": "Molestiae numquam consequuntur qui ut. Vero ipsam ea facere eius. Commodi sed sunt eum rerum eum laudantium. Et saepe cum aut maxime.",
                    "describe_en": "A at voluptatem mollitia perspiciatis et. Totam omnis nihil voluptates odio sint. Quis voluptas ex consequatur vel mollitia voluptas. Fugit nesciunt quod iste amet.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?44749",
                    "description": "Voluptatem commodi omnis non dolorum ut aut.",
                    "description_en": "Omnis nemo ex amet quibusdam.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?92323",
                    "parent_id": 9,
                    "created_at": "2020-08-05 02:58:43",
                    "updated_at": "2020-08-10 01:14:51"
                }
            },
            {
                "id": 9,
                "product_category_id": 17,
                "product_name": "黑钻焕肤水",
                "product_name_en": "id ipsa asperiores",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?65134",
                "slug": "laborum-et",
                "short_description": "Enim nam qui illo delectus quae vel.",
                "short_description_en": "Et itaque cupiditate nisi enim. Inventore veniam cum odio dignissimos sint vero neque.",
                "price": "6774.00",
                "sale_price": "517.00",
                "stock": 196,
                "spec": null,
                "seo_title": "rerum facere et",
                "seo_keyword": "velit",
                "seo_description": "Exercitationem tempora suscipit reiciendis eveniet repudiandae qui.",
                "benefit": "Et quos qui vel praesentium qui. Asperiores eum distinctio commodi dolorum numquam alias minus. Quasi ut accusantium perferendis et sapiente ex voluptatem eveniet.",
                "benefit_en": "Sunt unde aut libero ea tempore libero in. Vel nesciunt odit error natus corporis quaerat. Voluptate est sed rerum explicabo sunt. Aut est asperiores totam.",
                "tech_description": "Et ducimus enim sed eaque. Amet voluptates praesentium voluptatem est tempora est ut. Expedita corrupti voluptatem delectus dolor sunt. Tenetur nisi et sit quia et ullam et.",
                "tech_description_en": "Expedita repudiandae est expedita qui. Vel unde officia quas eligendi velit. Est accusantium delectus hic ullam sapiente illo itaque.",
                "description": "Et odit sed quaerat sed est quaerat consequatur consequatur. Sint qui molestias quae error est. Omnis et mollitia tenetur et. Earum et porro quo.",
                "description_en": "A facilis est molestias fugit excepturi est. Et ea placeat hic quia non odio. Exercitationem neque officia delectus magnam aut autem fugiat.",
                "usage": "Est veniam maiores sequi. Molestias sequi sed qui inventore fugiat. Totam voluptas sequi et non et voluptas totam. Eligendi ut voluptas tenetur non. Iste fugiat odit qui est.",
                "usage_en": "Enim sunt facere impedit exercitationem. Necessitatibus laboriosam non officia occaecati. Quia sunt saepe quas. Dicta quis quam blanditiis ut non quia. Sunt eos ut quia blanditiis doloremque eligendi maxime.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?45394",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?21478",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?44200",
                "product_video": null,
                "status": 2,
                "rating": 9.4,
                "sold_count": 9322,
                "review_count": 5704,
                "created_at": "2020-07-25 11:00:50",
                "updated_at": "2020-08-08 05:27:56",
                "product_category": {
                    "id": 17,
                    "slug": "rem-autem",
                    "title": "睫毛膏",
                    "title_en": "blanditiis et sit",
                    "describe": "Officiis provident omnis id id velit est. Sunt voluptatem enim aliquam quia perferendis aut non. Maxime excepturi nesciunt impedit delectus nihil. In dolor laudantium et error ut sunt labore.",
                    "describe_en": "Est eligendi qui delectus vel sint consectetur. Voluptatum et officiis qui dolorem. Laboriosam ratione labore tenetur eius dolorem non.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?46562",
                    "description": "Magnam quis molestiae deserunt quia aut.",
                    "description_en": "Voluptate odit error deserunt et eos.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?92788",
                    "parent_id": 5,
                    "created_at": "2020-08-01 12:59:07",
                    "updated_at": "2020-07-28 15:30:48"
                }
            },
            {
                "id": 10,
                "product_category_id": 13,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "quia ut veniam",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?76384",
                "slug": "dolor-dolores",
                "short_description": "Aut esse adipisci laboriosam qui modi porro.",
                "short_description_en": "Doloribus voluptatum nihil accusamus veniam neque alias. Qui tempora esse ea dicta rerum earum. Aut voluptates corrupti distinctio qui in. Provident aut sapiente magni est modi deleniti praesentium. Perspiciatis autem perferendis quis quis.",
                "price": "20.00",
                "sale_price": "1644.00",
                "stock": 653,
                "spec": null,
                "seo_title": "nam rerum et",
                "seo_keyword": "tempora",
                "seo_description": "Ut voluptas fuga doloribus consequatur quia.",
                "benefit": "Molestias vero doloremque quia porro officiis id. Consequatur iste et molestiae perferendis molestias reiciendis voluptatem. Esse et voluptatum non et sint. Hic recusandae reiciendis et voluptates.",
                "benefit_en": "Sapiente animi sapiente corporis non. Et ipsam deserunt placeat eveniet sunt architecto. Asperiores dolor aut aut. Ex odit est alias aut.",
                "tech_description": "Eaque ut est iure ut impedit aliquam aliquam. Reprehenderit occaecati assumenda numquam repellat.",
                "tech_description_en": "Perspiciatis officiis totam cupiditate. Numquam totam praesentium et consequatur. Est harum ut omnis.",
                "description": "Ipsum facere ipsum et consectetur possimus ea. Qui animi quisquam corporis. Labore qui veritatis distinctio aliquid placeat. Quidem quae accusamus dolores incidunt.",
                "description_en": "A a dignissimos soluta qui. Est qui quo magni doloremque sunt provident deleniti esse. Nihil aut necessitatibus molestiae dolore incidunt pariatur mollitia.",
                "usage": "Veritatis sed omnis nulla excepturi occaecati saepe. Dolores officia nesciunt magni sed excepturi consequatur omnis. Ea ipsum perspiciatis commodi consequuntur harum. Quia iste tempora dolor.",
                "usage_en": "Sunt rerum possimus sed nostrum expedita et. Rerum perspiciatis eos ullam est delectus id quibusdam.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?82905",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?30616",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?83715",
                "product_video": null,
                "status": 2,
                "rating": 4.96,
                "sold_count": 5342,
                "review_count": 6049,
                "created_at": "2020-08-01 07:10:44",
                "updated_at": "2020-08-08 15:51:41",
                "product_category": {
                    "id": 13,
                    "slug": "impedit-culpa",
                    "title": "眼霜",
                    "title_en": "maiores quod doloribus",
                    "describe": "Beatae sint suscipit in nulla molestias. Autem aut autem aut sed. Quidem aliquid et consequatur sequi. Officiis delectus facilis possimus ratione corporis modi.",
                    "describe_en": "Possimus non quibusdam quaerat pariatur tenetur non. Ab quaerat ut repellat ducimus labore. Molestiae ut quidem qui quod. Earum voluptatem tempore eaque rem consequatur blanditiis possimus.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?60716",
                    "description": "Sed reprehenderit quibusdam fugiat.",
                    "description_en": "Totam qui at iusto excepturi.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?60222",
                    "parent_id": 13,
                    "created_at": "2020-07-28 18:22:18",
                    "updated_at": "2020-07-20 23:00:35"
                }
            },
            {
                "id": 11,
                "product_category_id": 17,
                "product_name": "黑钻肌光精华",
                "product_name_en": "itaque esse non",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?79980",
                "slug": "hic-impedit",
                "short_description": "Aut omnis enim occaecati itaque harum officia.",
                "short_description_en": "Voluptas veniam nemo est. Nobis amet molestiae occaecati iure expedita veritatis. Asperiores illum id neque veritatis ut nulla expedita.",
                "price": "9297.00",
                "sale_price": "4088.00",
                "stock": 845,
                "spec": null,
                "seo_title": "sed ut quos",
                "seo_keyword": "veniam",
                "seo_description": "Qui consequatur quae et.",
                "benefit": "Molestiae aliquam vero sint dolorem iste error eos. Quas ad sit numquam.",
                "benefit_en": "Laudantium ipsa veritatis magnam. Vel tempore quo quaerat quae atque. Sed aspernatur laborum hic ut aliquid. Asperiores ducimus et earum et dolorum cum quibusdam quo.",
                "tech_description": "Molestiae sit suscipit mollitia non neque occaecati. Possimus incidunt dolor modi atque eum. Error cum repellendus fugiat illum.",
                "tech_description_en": "Harum minus quod ad voluptas porro possimus et. At sit veniam quaerat fugiat occaecati. Dolorem laudantium voluptatem quia facilis qui.",
                "description": "Molestiae ut quia nostrum deleniti illum quibusdam facilis. Dolorem quis officia qui assumenda alias aut qui rerum. Non ab qui eligendi non. Dignissimos qui quo facilis in dolor aliquid ipsa maiores.",
                "description_en": "Modi eum esse nesciunt voluptas eaque amet quis. Aliquid iste illum quia aut dignissimos deserunt rerum. Sit eligendi molestias autem possimus aut. Voluptates porro cupiditate hic consequuntur impedit et. Commodi et sed sit sunt incidunt temporibus.",
                "usage": "Numquam enim magni consequatur voluptatem a. Nihil at quod alias. Ullam omnis numquam dolore magni quia quo. Libero nulla porro sed nam.",
                "usage_en": "Qui corporis ad et ratione qui. Nulla autem ut repellat temporibus. Nihil neque doloribus repellat reiciendis voluptas ipsam qui.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?86734",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?30396",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?68986",
                "product_video": null,
                "status": 1,
                "rating": 6.49,
                "sold_count": 9276,
                "review_count": 4128,
                "created_at": "2020-07-25 05:34:32",
                "updated_at": "2020-08-02 01:20:34",
                "product_category": {
                    "id": 17,
                    "slug": "rem-autem",
                    "title": "睫毛膏",
                    "title_en": "blanditiis et sit",
                    "describe": "Officiis provident omnis id id velit est. Sunt voluptatem enim aliquam quia perferendis aut non. Maxime excepturi nesciunt impedit delectus nihil. In dolor laudantium et error ut sunt labore.",
                    "describe_en": "Est eligendi qui delectus vel sint consectetur. Voluptatum et officiis qui dolorem. Laboriosam ratione labore tenetur eius dolorem non.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?46562",
                    "description": "Magnam quis molestiae deserunt quia aut.",
                    "description_en": "Voluptate odit error deserunt et eos.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?92788",
                    "parent_id": 5,
                    "created_at": "2020-08-01 12:59:07",
                    "updated_at": "2020-07-28 15:30:48"
                }
            },
            {
                "id": 12,
                "product_category_id": 8,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "quasi hic occaecati",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?86362",
                "slug": "voluptas-ratione",
                "short_description": "Vero earum laboriosam harum.",
                "short_description_en": "Eum deleniti doloribus aliquid rem ex eveniet quo. Cum assumenda et dolor est quo. Doloremque accusamus eveniet laudantium laborum voluptates sed.",
                "price": "8269.00",
                "sale_price": "9532.00",
                "stock": 533,
                "spec": null,
                "seo_title": "ut quidem voluptatem",
                "seo_keyword": "sint",
                "seo_description": "Asperiores odit cupiditate cupiditate veniam.",
                "benefit": "Vitae ut quam velit. Beatae ut est ut veniam nobis ut. Odit ab doloremque expedita ipsum aut officiis reiciendis sunt. Ipsa eum deleniti voluptas sed facere et. Quidem velit omnis ea eum minima optio est.",
                "benefit_en": "Quia sit asperiores quos vitae eius dolorum possimus. Quos et in nihil placeat sed.",
                "tech_description": "Hic totam reiciendis facilis est dolores soluta dolorum necessitatibus. Ad eveniet dolores numquam qui cupiditate voluptas. Repudiandae asperiores praesentium quis fugit aperiam ipsum illo. Adipisci animi pariatur consequatur aliquid nihil eos.",
                "tech_description_en": "Et nisi et corrupti dolor. Exercitationem quis minus id.",
                "description": "Veniam nulla repellat sunt tenetur accusantium. Non dolorem quis perspiciatis asperiores optio quis. Inventore eos quibusdam molestiae ducimus voluptatem excepturi. Qui libero commodi dolores.",
                "description_en": "Culpa consequuntur cum id eligendi animi. Illo eum quis autem. Qui excepturi excepturi quas fuga exercitationem ea laborum. Provident magni ea expedita ea repellat repudiandae qui sed.",
                "usage": "Rerum autem magnam illo. In consectetur et quam est est minus quisquam. Ut reiciendis dignissimos itaque et. Omnis nam quasi et vel.",
                "usage_en": "Non dolor ea ex officia debitis aperiam. Architecto eius mollitia et cum qui quae.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?24353",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?98482",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?20805",
                "product_video": null,
                "status": 1,
                "rating": 5.7,
                "sold_count": 7734,
                "review_count": 9708,
                "created_at": "2020-08-11 05:23:50",
                "updated_at": "2020-08-15 10:19:49",
                "product_category": {
                    "id": 8,
                    "slug": "veniam-autem",
                    "title": "香水",
                    "title_en": "rem amet itaque",
                    "describe": "Quo voluptas est voluptas nam et. Odit quod sed distinctio assumenda maiores. Deserunt eligendi veritatis eveniet laudantium aut et sunt nobis.",
                    "describe_en": "Dolore dolorum eligendi neque nam enim aspernatur dicta. Non nisi possimus qui. Nihil consequatur praesentium autem qui aut dolor. Et dolores atque qui odio.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?58540",
                    "description": "Sunt ut quo sint.",
                    "description_en": "Recusandae facilis voluptatem illo blanditiis quia.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?68524",
                    "parent_id": 12,
                    "created_at": "2020-08-14 22:11:50",
                    "updated_at": "2020-08-02 23:34:03"
                }
            },
            {
                "id": 13,
                "product_category_id": 14,
                "product_name": "黑钻肌光精华",
                "product_name_en": "quo ducimus neque",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?80846",
                "slug": "quia-quo",
                "short_description": "Sit voluptatem a recusandae placeat repellendus aut.",
                "short_description_en": "Aut quia totam et sit nemo dolorum. Veritatis itaque neque quisquam magnam ex voluptates unde. Officiis voluptatem aperiam qui quis non error. Aut nostrum ut et et et modi autem.",
                "price": "3733.00",
                "sale_price": "2230.00",
                "stock": 292,
                "spec": null,
                "seo_title": "nihil qui omnis",
                "seo_keyword": "laborum",
                "seo_description": "Et laboriosam placeat quaerat.",
                "benefit": "Est temporibus sint est voluptate officia accusamus. Non illum occaecati impedit qui aut qui tempore. Earum tempora facere deserunt corporis a id sequi quo. Est rem inventore ullam ad fugiat.",
                "benefit_en": "Vitae rem tempore rerum mollitia similique. Odio et quas dolorum numquam. At modi odio totam facere est consectetur quia. Ut dolor aut qui ad facilis.",
                "tech_description": "Id sed alias sapiente aut. Delectus tempora voluptatibus et corporis eum cum. Animi rem sit ex sunt dolorem.",
                "tech_description_en": "Occaecati optio tempore sit occaecati ratione quo deserunt. Corrupti qui exercitationem repellendus enim quaerat voluptatibus reprehenderit aut. Eos quis aut provident autem adipisci aut illo minima. Quis sit ut voluptatem.",
                "description": "Nesciunt ab sint sequi aspernatur velit. Odit vel aut illum totam. Dolores suscipit eum incidunt et dicta.",
                "description_en": "Voluptatem non adipisci esse ratione rerum. Amet recusandae adipisci et enim aspernatur optio. Omnis quis autem fugit consectetur.",
                "usage": "Aut excepturi consequuntur dolorem dolorum. Autem non dolores numquam aliquam sapiente doloribus qui eos. Facilis aliquam ullam nihil.",
                "usage_en": "Ut velit minima aut. Et provident nihil voluptate officiis.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?17944",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?42396",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?68359",
                "product_video": null,
                "status": 2,
                "rating": 7.36,
                "sold_count": 4370,
                "review_count": 9611,
                "created_at": "2020-08-11 13:08:58",
                "updated_at": "2020-07-29 17:46:44",
                "product_category": {
                    "id": 14,
                    "slug": "ullam-suscipit",
                    "title": "腮红",
                    "title_en": "est incidunt qui",
                    "describe": "Eum ab velit similique voluptas quo et. Eum nulla ut expedita et.",
                    "describe_en": "Quo perferendis inventore vel quasi. Neque qui non et consequatur ipsam totam. Nihil ipsum qui quaerat rerum accusantium ullam hic.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?72112",
                    "description": "Fugit possimus quisquam quaerat minima.",
                    "description_en": "Aut possimus sint aliquid quia minima autem molestiae.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?78789",
                    "parent_id": 11,
                    "created_at": "2020-08-04 23:14:48",
                    "updated_at": "2020-07-22 21:08:56"
                }
            },
            {
                "id": 14,
                "product_category_id": 17,
                "product_name": "钻石焕活面膜",
                "product_name_en": "enim voluptatem beatae",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?64465",
                "slug": "quia-deleniti",
                "short_description": "Tempora fuga et officia maiores.",
                "short_description_en": "Consequatur iure harum non rerum. Minima quos soluta nobis voluptate ut. Quaerat est aperiam tempora placeat.",
                "price": "8938.00",
                "sale_price": "5799.00",
                "stock": 507,
                "spec": null,
                "seo_title": "ipsa corrupti rerum",
                "seo_keyword": "dolores",
                "seo_description": "Iure nesciunt rerum deserunt et aliquid beatae.",
                "benefit": "Recusandae ipsum aut quibusdam deserunt deserunt deleniti. Inventore impedit quidem est aut quas. Magnam maxime amet laborum et quasi saepe.",
                "benefit_en": "Fuga sapiente animi sint praesentium quasi. Numquam quia accusantium culpa earum quasi ut quia. Beatae corrupti eligendi velit vitae voluptas in. Dolor iste ipsum ut excepturi assumenda suscipit nesciunt in.",
                "tech_description": "Voluptas praesentium est quos hic vero est corrupti molestiae. Libero corporis exercitationem ut modi tempore. Illo rerum quo ut.",
                "tech_description_en": "Eos consequatur quasi temporibus et in sed illum. Aspernatur ad sequi deleniti accusantium. Optio aut rerum est.",
                "description": "Maiores consequuntur vitae officia aspernatur. Temporibus voluptatem officia tenetur hic. Dolorem quasi numquam accusantium optio molestiae. Libero quisquam voluptas iure dolores enim ut.",
                "description_en": "Quaerat sunt vitae ut perspiciatis. Non maiores velit expedita eos.",
                "usage": "Eveniet aperiam animi possimus laboriosam sunt ullam ut. Fuga pariatur harum distinctio ut placeat nemo enim.",
                "usage_en": "Sequi neque itaque et facere nulla. Soluta voluptatem quaerat rerum. Odio id voluptatum expedita sed in quo veritatis. Error voluptates ea dolorem illum debitis deleniti.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?33508",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?29038",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?56113",
                "product_video": null,
                "status": 1,
                "rating": 7.96,
                "sold_count": 3660,
                "review_count": 8225,
                "created_at": "2020-08-13 14:27:12",
                "updated_at": "2020-07-30 23:24:12",
                "product_category": {
                    "id": 17,
                    "slug": "rem-autem",
                    "title": "睫毛膏",
                    "title_en": "blanditiis et sit",
                    "describe": "Officiis provident omnis id id velit est. Sunt voluptatem enim aliquam quia perferendis aut non. Maxime excepturi nesciunt impedit delectus nihil. In dolor laudantium et error ut sunt labore.",
                    "describe_en": "Est eligendi qui delectus vel sint consectetur. Voluptatum et officiis qui dolorem. Laboriosam ratione labore tenetur eius dolorem non.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?46562",
                    "description": "Magnam quis molestiae deserunt quia aut.",
                    "description_en": "Voluptate odit error deserunt et eos.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?92788",
                    "parent_id": 5,
                    "created_at": "2020-08-01 12:59:07",
                    "updated_at": "2020-07-28 15:30:48"
                }
            },
            {
                "id": 15,
                "product_category_id": 1,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "beatae velit a",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?76061",
                "slug": "quo-accusamus",
                "short_description": "Cum sint aut et quia perferendis.",
                "short_description_en": "Aspernatur voluptas nulla eum. Dolore nemo delectus ullam vel omnis. Est corporis in fugit impedit recusandae eos recusandae. Autem natus non vitae vero labore eum sint.",
                "price": "5767.00",
                "sale_price": "5511.00",
                "stock": 516,
                "spec": null,
                "seo_title": "tempora enim omnis",
                "seo_keyword": "soluta",
                "seo_description": "Expedita natus quos a.",
                "benefit": "Ipsam cum commodi commodi et quae. Incidunt aut praesentium nulla omnis ipsum aut. Qui consequatur quia dicta aut est neque. Laboriosam at quaerat recusandae eum veritatis.",
                "benefit_en": "Ipsam doloremque et consequatur iusto consequatur id mollitia animi. Nesciunt delectus ut ipsam veniam tempora sed. Laboriosam quaerat deleniti iure perspiciatis. Et architecto sed quo nobis quis aut.",
                "tech_description": "Neque dignissimos laboriosam corrupti et molestiae. Architecto inventore repellendus est alias vel. Explicabo consectetur molestias est odio enim est. Provident ipsam ipsa veniam exercitationem hic quisquam quas. Eos voluptates sint corrupti provident.",
                "tech_description_en": "Et iusto rerum molestiae voluptatem facere. Corrupti voluptas sed et repellendus ea rerum ducimus.",
                "description": "Vero facilis sint aut ipsum et. A ut facere saepe aut. Qui similique earum non alias et.",
                "description_en": "Fugiat aut id culpa eos. Omnis beatae eaque sint aut deserunt enim. Est quia velit quo omnis praesentium. Expedita incidunt fuga aut laborum.",
                "usage": "Fugit unde autem reiciendis. Voluptatem consequatur voluptate et exercitationem sequi aut voluptatibus nesciunt. Numquam ut quidem at quod dolorem voluptates. Est similique quod labore laboriosam non et nihil. Iste reprehenderit quae sequi rerum officiis.",
                "usage_en": "Assumenda sunt natus eius alias quasi. Et consequatur ipsa nihil aut aut officiis.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?34863",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?18198",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?16213",
                "product_video": null,
                "status": 2,
                "rating": 7.45,
                "sold_count": 2051,
                "review_count": 2624,
                "created_at": "2020-07-25 06:22:18",
                "updated_at": "2020-07-21 23:10:35",
                "product_category": {
                    "id": 1,
                    "slug": "iusto-qui",
                    "title": "卸妆",
                    "title_en": "et soluta et",
                    "describe": "Molestiae numquam consequuntur qui ut. Vero ipsam ea facere eius. Commodi sed sunt eum rerum eum laudantium. Et saepe cum aut maxime.",
                    "describe_en": "A at voluptatem mollitia perspiciatis et. Totam omnis nihil voluptates odio sint. Quis voluptas ex consequatur vel mollitia voluptas. Fugit nesciunt quod iste amet.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?44749",
                    "description": "Voluptatem commodi omnis non dolorum ut aut.",
                    "description_en": "Omnis nemo ex amet quibusdam.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?92323",
                    "parent_id": 9,
                    "created_at": "2020-08-05 02:58:43",
                    "updated_at": "2020-08-10 01:14:51"
                }
            },
            {
                "id": 16,
                "product_category_id": 8,
                "product_name": "黑钻肌光精华",
                "product_name_en": "voluptatem ipsum rerum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?38232",
                "slug": "rerum-ea",
                "short_description": "Alias facilis provident magni molestiae quas aliquam.",
                "short_description_en": "Deserunt aut cumque dolores dolorem laudantium. Laboriosam in officiis est eligendi rerum fuga. Nemo ut voluptas eveniet qui. Exercitationem totam rerum est omnis eius rerum quo quisquam.",
                "price": "8475.00",
                "sale_price": "2153.00",
                "stock": 926,
                "spec": null,
                "seo_title": "voluptates pariatur fugiat",
                "seo_keyword": "ut",
                "seo_description": "Alias iure tempora doloribus.",
                "benefit": "Cupiditate dolores autem dolorem ut sint quod. Et illum sequi consequatur. Et aut accusamus iste dolor id aliquam ut dolorem.",
                "benefit_en": "Sint consequatur in ea eum enim et necessitatibus. Et ad quod eos. Tempore ut doloremque corporis. Iusto laboriosam ab veniam quia rerum.",
                "tech_description": "Doloremque corrupti minus dolore est. Inventore mollitia non alias id libero et. Sint fuga tempore veritatis quis. Aut recusandae qui vitae provident itaque in.",
                "tech_description_en": "Dolores quia minima sed cum architecto et. Totam id maiores assumenda nesciunt. Inventore assumenda facilis eligendi rem incidunt earum.",
                "description": "Esse suscipit aut corporis in voluptates. Odio voluptatum corporis quasi asperiores. Id quas quisquam esse nihil id. Omnis et qui reiciendis omnis quas soluta ad.",
                "description_en": "Quia ea enim qui suscipit praesentium optio sint. Aliquid consequuntur nemo eveniet consequuntur. Pariatur corrupti nemo ut quo alias autem nostrum. Sunt iste tempore debitis nemo.",
                "usage": "Repudiandae sunt non dolorem. Qui dolor reprehenderit omnis. Et eius numquam unde magnam deserunt labore consequatur. Sunt adipisci laudantium ea.",
                "usage_en": "Vero et porro officia deleniti laudantium non. Qui odio earum quisquam optio. Asperiores placeat est atque ut et ducimus.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?74253",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?92694",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?40806",
                "product_video": null,
                "status": 1,
                "rating": 3.37,
                "sold_count": 1738,
                "review_count": 6543,
                "created_at": "2020-07-22 02:23:03",
                "updated_at": "2020-08-19 10:38:04",
                "product_category": {
                    "id": 8,
                    "slug": "veniam-autem",
                    "title": "香水",
                    "title_en": "rem amet itaque",
                    "describe": "Quo voluptas est voluptas nam et. Odit quod sed distinctio assumenda maiores. Deserunt eligendi veritatis eveniet laudantium aut et sunt nobis.",
                    "describe_en": "Dolore dolorum eligendi neque nam enim aspernatur dicta. Non nisi possimus qui. Nihil consequatur praesentium autem qui aut dolor. Et dolores atque qui odio.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?58540",
                    "description": "Sunt ut quo sint.",
                    "description_en": "Recusandae facilis voluptatem illo blanditiis quia.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?68524",
                    "parent_id": 12,
                    "created_at": "2020-08-14 22:11:50",
                    "updated_at": "2020-08-02 23:34:03"
                }
            },
            {
                "id": 17,
                "product_category_id": 12,
                "product_name": "黑钻焕肤水",
                "product_name_en": "et saepe aut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?44279",
                "slug": "omnis-eos",
                "short_description": "Facilis quis et deleniti modi aut.",
                "short_description_en": "Ducimus est perferendis a labore nostrum laboriosam maxime repellat. Natus est esse sit voluptatem.",
                "price": "439.00",
                "sale_price": "4188.00",
                "stock": 613,
                "spec": null,
                "seo_title": "doloremque earum eum",
                "seo_keyword": "eius",
                "seo_description": "Et labore sunt consectetur.",
                "benefit": "Vitae voluptas harum dolor reiciendis. Animi consequatur consequatur fuga rerum odio corrupti rerum. Quasi vel maiores neque voluptatibus dolor officiis. Totam labore earum illum praesentium voluptas repellat esse qui.",
                "benefit_en": "Perferendis cum velit voluptas quidem. Consequatur iure dolor sed eum sed.",
                "tech_description": "Numquam assumenda doloremque aut cupiditate numquam aliquid repellendus. Nam fugiat distinctio esse et exercitationem. Esse sint totam culpa. Optio est quas aperiam ducimus accusantium doloribus dolor inventore.",
                "tech_description_en": "Libero nam hic nostrum est. Eum ut rerum qui cupiditate totam quia nesciunt. Praesentium porro ipsum rerum et odit ea tempora. Quisquam velit aliquam quisquam delectus dolorum.",
                "description": "Vitae molestiae et repellat nihil. Fugiat dolore voluptatibus doloremque dolorum. Doloremque vel neque ex nesciunt. Doloribus error sunt et rerum. Laboriosam facilis totam et provident.",
                "description_en": "Beatae quia explicabo vitae praesentium sint. Illo est sunt ad neque praesentium natus dolorem. Et tempora enim inventore voluptatem alias quas. Ex et architecto dolor culpa non.",
                "usage": "Dolore voluptates quisquam iure illum consequatur. Architecto aperiam perspiciatis quam vel.",
                "usage_en": "Quos error eligendi accusamus reprehenderit enim. Asperiores dolorem nostrum numquam quo fugit ut amet. Quis placeat dicta et numquam.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?20551",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?82608",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?45313",
                "product_video": null,
                "status": 3,
                "rating": 9.73,
                "sold_count": 6626,
                "review_count": 7112,
                "created_at": "2020-08-03 13:56:11",
                "updated_at": "2020-08-04 13:00:53",
                "product_category": {
                    "id": 12,
                    "slug": "perferendis-odit",
                    "title": "腮红",
                    "title_en": "velit temporibus ut",
                    "describe": "Totam ab mollitia quam quia saepe sit excepturi corrupti. Consectetur voluptate sed sit ducimus. Quaerat nihil ipsa modi enim veniam. Magni exercitationem ullam in voluptatibus quas.",
                    "describe_en": "Mollitia molestiae vel libero. In impedit aliquid tempore. Neque rerum nobis omnis.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?61738",
                    "description": "Perferendis at voluptatem commodi.",
                    "description_en": "Minima nihil quia est incidunt consectetur quis.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?94536",
                    "parent_id": 11,
                    "created_at": "2020-08-06 02:12:35",
                    "updated_at": "2020-08-12 17:54:55"
                }
            },
            {
                "id": 18,
                "product_category_id": 14,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "ea velit impedit",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?88560",
                "slug": "quam-minus",
                "short_description": "Commodi perferendis omnis eum voluptatum illum sapiente.",
                "short_description_en": "Quasi aut soluta rerum aspernatur aut nihil sit. Accusamus ratione dolor quod laudantium et ducimus excepturi. Quas omnis dolores illum deleniti molestiae laboriosam consequuntur. Soluta ad vel hic hic.",
                "price": "9399.00",
                "sale_price": "7773.00",
                "stock": 403,
                "spec": null,
                "seo_title": "omnis est porro",
                "seo_keyword": "deleniti",
                "seo_description": "Omnis omnis quis est reiciendis.",
                "benefit": "Deleniti deserunt tempora magni quisquam. Consectetur ut culpa aut provident provident atque aut. Eveniet earum nihil aperiam aut ea aut corporis.",
                "benefit_en": "Voluptatem deleniti quasi quod tempora sint iure iste. Sed itaque aperiam consectetur reiciendis. Asperiores atque velit sunt quis quae. Aliquid voluptatum eveniet sint dolor est quia.",
                "tech_description": "Temporibus cupiditate nihil ratione perferendis est animi. Asperiores necessitatibus odit quibusdam aliquam ipsam omnis itaque.",
                "tech_description_en": "Magnam et iusto voluptates cum laboriosam corporis quod. Reprehenderit iure ut et animi harum possimus dolorem ut. Atque animi molestias vel velit sed dicta. Nesciunt vitae maiores vero cum fugit laudantium.",
                "description": "Sed commodi fugiat qui suscipit fuga. Et est maxime molestiae illum totam. Voluptatibus reprehenderit voluptatem aspernatur ratione et ducimus.",
                "description_en": "Nostrum magni amet itaque est nemo. Quia eum optio qui sint. Numquam magnam dolorum saepe exercitationem non id velit.",
                "usage": "Et id voluptatem laboriosam quasi cupiditate nemo. Illo qui qui perspiciatis tempora. Quaerat porro facilis occaecati minus qui voluptatem esse exercitationem.",
                "usage_en": "Possimus ipsam autem exercitationem in. Quia voluptatum corporis nemo sit ducimus sed sit. Eius magnam et eveniet tempore. Reiciendis nihil assumenda dolore neque et.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?46987",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?61118",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?33745",
                "product_video": null,
                "status": 1,
                "rating": 9.99,
                "sold_count": 8623,
                "review_count": 4184,
                "created_at": "2020-08-05 03:22:07",
                "updated_at": "2020-08-14 00:05:03",
                "product_category": {
                    "id": 14,
                    "slug": "ullam-suscipit",
                    "title": "腮红",
                    "title_en": "est incidunt qui",
                    "describe": "Eum ab velit similique voluptas quo et. Eum nulla ut expedita et.",
                    "describe_en": "Quo perferendis inventore vel quasi. Neque qui non et consequatur ipsam totam. Nihil ipsum qui quaerat rerum accusantium ullam hic.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?72112",
                    "description": "Fugit possimus quisquam quaerat minima.",
                    "description_en": "Aut possimus sint aliquid quia minima autem molestiae.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?78789",
                    "parent_id": 11,
                    "created_at": "2020-08-04 23:14:48",
                    "updated_at": "2020-07-22 21:08:56"
                }
            },
            {
                "id": 19,
                "product_category_id": 8,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "maxime fuga quia",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?36715",
                "slug": "rerum-quis",
                "short_description": "Culpa officiis quibusdam non.",
                "short_description_en": "Ut id ut saepe et aut aut. Officia at unde fugiat enim maiores. Sit eius rerum voluptas doloremque. Dolorem ut nesciunt ut ipsum officia voluptatem.",
                "price": "5089.00",
                "sale_price": "5284.00",
                "stock": 505,
                "spec": null,
                "seo_title": "aut quia adipisci",
                "seo_keyword": "nisi",
                "seo_description": "Veniam cum et maiores ipsum.",
                "benefit": "Eum et recusandae et placeat. Nemo voluptatibus velit harum consequatur inventore animi sed. Corrupti eius quia eligendi nisi esse ex.",
                "benefit_en": "Cumque ut ad omnis voluptatum aperiam nihil eius. Possimus enim est qui. Harum omnis animi placeat quis molestias quod reiciendis unde.",
                "tech_description": "Exercitationem ut aut amet minima eligendi laudantium. Quia vitae quia voluptatem. Veniam voluptatem corrupti hic id enim culpa odio nihil.",
                "tech_description_en": "Repellendus et sunt ratione modi nihil voluptatem et. Architecto suscipit voluptatibus blanditiis sed reprehenderit blanditiis. Est culpa tempora id et quia eligendi beatae et.",
                "description": "Aliquid maiores tempore vel quia ab aut at. Non atque in vel ratione voluptas assumenda et qui. Vel libero et eius illum et facere saepe. Reiciendis placeat eligendi ut sequi reiciendis vitae est. Commodi maiores facilis ad architecto.",
                "description_en": "Nostrum dolores at eos numquam quibusdam ad fugiat voluptatem. Repellat mollitia iusto sequi magni magnam. Atque asperiores a unde neque. Et delectus doloribus quo fugit.",
                "usage": "Voluptatibus doloremque nulla atque dolor ducimus in magnam. Eaque eveniet et esse. Qui id eaque omnis occaecati qui omnis voluptate.",
                "usage_en": "Blanditiis sit doloribus et similique temporibus. Eum voluptatum architecto sed consequuntur ipsa. Aliquam voluptatum accusamus enim reprehenderit similique et deserunt. Vero qui voluptatibus eum non.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?77413",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?81583",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?52014",
                "product_video": null,
                "status": 3,
                "rating": 3.8,
                "sold_count": 2155,
                "review_count": 2626,
                "created_at": "2020-08-01 08:52:58",
                "updated_at": "2020-07-24 23:40:57",
                "product_category": {
                    "id": 8,
                    "slug": "veniam-autem",
                    "title": "香水",
                    "title_en": "rem amet itaque",
                    "describe": "Quo voluptas est voluptas nam et. Odit quod sed distinctio assumenda maiores. Deserunt eligendi veritatis eveniet laudantium aut et sunt nobis.",
                    "describe_en": "Dolore dolorum eligendi neque nam enim aspernatur dicta. Non nisi possimus qui. Nihil consequatur praesentium autem qui aut dolor. Et dolores atque qui odio.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?58540",
                    "description": "Sunt ut quo sint.",
                    "description_en": "Recusandae facilis voluptatem illo blanditiis quia.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?68524",
                    "parent_id": 12,
                    "created_at": "2020-08-14 22:11:50",
                    "updated_at": "2020-08-02 23:34:03"
                }
            },
            {
                "id": 20,
                "product_category_id": 2,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "rerum est voluptatem",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?67568",
                "slug": "saepe-provident",
                "short_description": "Itaque eum similique suscipit qui consequatur.",
                "short_description_en": "Earum architecto voluptatum dicta. Quis ut velit praesentium ut. Voluptas sunt id unde.",
                "price": "5380.00",
                "sale_price": "1919.00",
                "stock": 490,
                "spec": null,
                "seo_title": "placeat voluptates tempore",
                "seo_keyword": "nulla",
                "seo_description": "Et eos exercitationem neque fugiat.",
                "benefit": "Mollitia voluptatibus fugit soluta cumque aut dicta. Ea quis dignissimos delectus dolorem consequuntur aperiam ipsam. Pariatur ipsa doloremque omnis molestiae.",
                "benefit_en": "Autem dolorum in ea soluta ad incidunt. Consectetur dolore quia iure. Impedit modi asperiores impedit ut aut. Totam deserunt non aut quisquam alias hic.",
                "tech_description": "Laudantium laboriosam itaque vitae consequatur. Adipisci voluptatum dignissimos nobis ut vel aut. Eaque aliquid nulla quod culpa. Quia nemo rerum aut quos.",
                "tech_description_en": "Laboriosam rem rerum quo odio aspernatur qui. Distinctio perspiciatis sit fuga corporis voluptate. Laborum velit omnis ut consequatur. Consequatur voluptatem occaecati repellendus pariatur.",
                "description": "Quaerat aperiam perferendis ut at quisquam sequi. Porro pariatur vero voluptatibus aut. Maiores explicabo ut illo quia. Facilis ad adipisci aut iste.",
                "description_en": "Omnis eaque optio est sed corporis iure. Sit id fugit et earum. Itaque nemo dolor ut esse.",
                "usage": "Quasi et velit iusto nemo. Accusamus adipisci ad ipsum optio illo in rem.",
                "usage_en": "Quam eius est animi voluptatibus amet quae. Labore possimus quas veniam error voluptas. Et qui voluptatibus placeat amet. Non quis eos tempora enim saepe blanditiis.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?29411",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?88030",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?94739",
                "product_video": null,
                "status": 3,
                "rating": 9.72,
                "sold_count": 6567,
                "review_count": 9720,
                "created_at": "2020-07-25 03:55:46",
                "updated_at": "2020-08-17 06:55:42",
                "product_category": {
                    "id": 2,
                    "slug": "non-accusantium",
                    "title": "唇膏",
                    "title_en": "assumenda earum veniam",
                    "describe": "Repellat quaerat eos perferendis laborum facere aliquam temporibus et. Illo possimus qui sapiente esse asperiores suscipit ipsam. Libero culpa ducimus porro repellendus delectus.",
                    "describe_en": "Labore vero distinctio deleniti ratione fuga. Culpa accusamus inventore fugiat officia consequatur quis. Saepe quae distinctio dolorum in.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?56404",
                    "description": "Similique facere explicabo consequatur quaerat.",
                    "description_en": "Cupiditate sunt maxime amet sint quaerat.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?42535",
                    "parent_id": 13,
                    "created_at": "2020-08-16 16:19:49",
                    "updated_at": "2020-07-29 04:33:53"
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
    -G "http://store.wutang.com/api/product_category/1?category_slug=occaecati" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product_category/1"
);

let params = {
    "category_slug": "occaecati",
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
    -G "http://store.wutang.com/api/product/1?slug=quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product/1"
);

let params = {
    "slug": "quia",
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
    -G "http://store.wutang.com/api/product_ids?id_list=labore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product_ids"
);

let params = {
    "id_list": "labore",
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
    -G "http://store.wutang.com/api/category_story/1?category_slug=dolore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/category_story/1"
);

let params = {
    "category_slug": "dolore",
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
    -G "http://store.wutang.com/api/product_new?page=aut&page_limit=velit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product_new"
);

let params = {
    "page": "aut",
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


> Example response (200):

```json
{
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 4,
                "product_category_id": 7,
                "product_name": "钻石焕活面膜",
                "product_name_en": "consequatur esse alias",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?88067",
                "slug": "sint-facilis",
                "short_description": "Et consequatur eius deleniti.",
                "short_description_en": "Quia provident dolor aut quia amet voluptates nihil placeat. Aperiam qui cupiditate ut asperiores sint. Ut itaque distinctio libero excepturi alias.",
                "price": "1793.00",
                "sale_price": "646.00",
                "stock": 425,
                "spec": null,
                "seo_title": "qui in excepturi",
                "seo_keyword": "quis",
                "seo_description": "Deserunt mollitia fuga dolore debitis ut aut.",
                "benefit": "Ut alias earum ut. Et quas fuga aspernatur accusantium. Voluptas eaque est qui aut rerum aut velit.",
                "benefit_en": "Eum sint officia et voluptas debitis voluptatem aliquam. Pariatur ullam quo magni veritatis nemo est. Tempore voluptate neque dolor ipsam aut aut.",
                "tech_description": "Expedita odit eveniet et id inventore. Voluptas praesentium sint totam minima et a. Vel tempora aspernatur magni reprehenderit ut molestias incidunt. Fuga labore animi cupiditate accusantium deserunt quod dolorem. Qui aut molestias aliquid similique distinctio.",
                "tech_description_en": "Voluptas amet esse aut ut quis. Sint eum a dolorum. Qui illum ut sit ut.",
                "description": "Quidem quis recusandae eligendi assumenda reprehenderit asperiores maxime minus. Nam mollitia quis adipisci vel omnis sed. In impedit aut enim aut. Quis aut odio est et quia excepturi.",
                "description_en": "Omnis unde veniam expedita quod repellendus aut. Reprehenderit rem vero voluptatem sed maiores qui. Qui in iste asperiores fuga quibusdam.",
                "usage": "Non vel iste enim eos. Nulla ex atque voluptatem ipsum voluptatem qui laborum beatae. Est incidunt temporibus doloribus. Aut reiciendis quis dolorem in quibusdam ratione qui.",
                "usage_en": "Aspernatur atque molestiae facilis id occaecati quidem. Natus doloribus culpa a est architecto ut fugiat. Fugit voluptates reiciendis quos quia rerum voluptatum sed. Praesentium nisi sequi esse atque enim praesentium optio.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?90173",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?65739",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?23920",
                "product_video": null,
                "status": 1,
                "rating": 9.39,
                "sold_count": 8838,
                "review_count": 3440,
                "created_at": "2020-07-20 07:23:59",
                "updated_at": "2020-08-12 23:28:46",
                "product_category": {
                    "id": 7,
                    "slug": "mollitia-eum",
                    "title": "面膜",
                    "title_en": "alias eligendi ut",
                    "describe": "Quisquam et dolor nostrum itaque. Praesentium tempora quidem sint perferendis harum magni quaerat vel.",
                    "describe_en": "Laboriosam iure commodi velit velit assumenda dolor. Sint fugit et omnis dolor ipsa qui magni. A voluptate ea natus perspiciatis.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?38101",
                    "description": "In dolore tenetur sunt.",
                    "description_en": "Est delectus necessitatibus magni minus doloribus.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?79386",
                    "parent_id": 16,
                    "created_at": "2020-08-15 06:23:08",
                    "updated_at": "2020-07-28 18:41:40"
                }
            },
            {
                "id": 7,
                "product_category_id": 15,
                "product_name": "黑钻肌光精华",
                "product_name_en": "minima velit consequuntur",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?29299",
                "slug": "qui-voluptates",
                "short_description": "Inventore pariatur inventore non eum sint quo.",
                "short_description_en": "Ut repudiandae rerum omnis rerum et magnam dolores. Quaerat autem vitae inventore nam repellat eum. Quaerat nam harum nam quis quidem. Quasi inventore non provident.",
                "price": "2599.00",
                "sale_price": "5769.00",
                "stock": 684,
                "spec": null,
                "seo_title": "et ratione autem",
                "seo_keyword": "officia",
                "seo_description": "Iure ut labore sint rem placeat.",
                "benefit": "Quo facilis non vero facilis voluptate sunt. Animi ut enim dolores dignissimos est eius. Et excepturi voluptate exercitationem ut ut iste.",
                "benefit_en": "Tempore sed ullam neque. Non est quia ipsam alias. Id saepe quod a quasi placeat.",
                "tech_description": "Vel et magnam dolor nisi expedita sed. Iure debitis praesentium repellendus incidunt enim corporis minima. Eligendi at fugiat ipsa suscipit laboriosam.",
                "tech_description_en": "Sed a aut sunt nostrum rerum. Voluptate veritatis quas officiis dolorum porro. Repudiandae alias vel et facere a necessitatibus incidunt. Consequatur ipsum doloribus exercitationem impedit.",
                "description": "Rerum hic voluptatum modi pariatur. Eum sunt minus accusantium eum aperiam id. Ut enim omnis fuga voluptate sit. Quas itaque voluptatem rerum.",
                "description_en": "Aut impedit modi laboriosam at. Impedit sit adipisci fugit excepturi quia est est. Veniam laboriosam possimus laudantium aut. Eos unde voluptates omnis distinctio.",
                "usage": "Tempore velit harum in animi totam. Quo nisi at at est minus dolorem. Necessitatibus minus omnis sunt rem aut nemo quaerat eaque.",
                "usage_en": "Aliquid consequatur dolorem quia blanditiis beatae. Non maxime aut ad nobis fugit.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?13884",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?42838",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?27453",
                "product_video": null,
                "status": 1,
                "rating": 7.7,
                "sold_count": 1023,
                "review_count": 7600,
                "created_at": "2020-07-28 10:31:21",
                "updated_at": "2020-07-30 10:09:36",
                "product_category": {
                    "id": 15,
                    "slug": "repellendus-assumenda",
                    "title": "身体护理",
                    "title_en": "recusandae odio quod",
                    "describe": "Eius molestiae ipsam et nulla autem et. Omnis temporibus odit culpa sint quis sit. Totam tempore rerum nemo rerum ut.",
                    "describe_en": "Nesciunt quaerat beatae consequatur quia eos. Quo perferendis libero est qui. Eos nam voluptatum ex quia sed architecto.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?81900",
                    "description": "Aut dolores aliquid earum.",
                    "description_en": "Nesciunt voluptatem dignissimos voluptatum.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?19110",
                    "parent_id": 8,
                    "created_at": "2020-08-02 11:38:42",
                    "updated_at": "2020-08-08 00:56:40"
                }
            },
            {
                "id": 8,
                "product_category_id": 1,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "sint temporibus veniam",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?49622",
                "slug": "reprehenderit-eos",
                "short_description": "Dolores dolores rem quia omnis ut.",
                "short_description_en": "Esse eaque non perferendis id saepe ullam provident. Voluptas animi quasi et saepe deleniti qui et quo. Delectus officiis et libero eius.",
                "price": "5999.00",
                "sale_price": "6255.00",
                "stock": 293,
                "spec": null,
                "seo_title": "autem neque est",
                "seo_keyword": "in",
                "seo_description": "Similique omnis quaerat qui.",
                "benefit": "At sapiente amet aut. Delectus reiciendis cum et nobis voluptates ut ea et. Est enim rem eos possimus qui.",
                "benefit_en": "Et ratione accusantium qui consequatur et qui. Sapiente sapiente accusamus illum sed modi qui. Sed et pariatur error deleniti.",
                "tech_description": "Fugit at possimus quia totam voluptatem nemo quia. Possimus nulla aut labore provident a illo. Voluptas consequatur officiis quia repudiandae. Assumenda nobis corporis cum.",
                "tech_description_en": "Autem numquam soluta et saepe reprehenderit error voluptatum. Ea cum fugiat sit aliquid eligendi. Dolorum ea in quia excepturi accusamus ipsum consequatur tempora. Sunt cupiditate veritatis amet porro. Repellat enim omnis error enim.",
                "description": "Vel quam voluptatum voluptatem labore. Rerum et iusto architecto ut. Suscipit repellendus quia sed numquam quas natus mollitia tempore.",
                "description_en": "Velit temporibus ab ut perferendis voluptatem dignissimos laudantium. Aspernatur delectus voluptate aut suscipit libero. Illo in natus est aspernatur sint id placeat. Soluta excepturi inventore qui qui ea qui omnis.",
                "usage": "Quo magnam est rerum aperiam. Asperiores qui earum eum corrupti consectetur ipsam est. Ipsum fugit rerum quaerat autem.",
                "usage_en": "Consequuntur quia animi velit. Aut earum quis doloremque voluptatem molestiae. Cum animi itaque sunt voluptatum a. Quis omnis et magnam et voluptas.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?40155",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?91460",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?13114",
                "product_video": null,
                "status": 1,
                "rating": 8.62,
                "sold_count": 3161,
                "review_count": 4988,
                "created_at": "2020-07-28 19:37:14",
                "updated_at": "2020-07-25 21:21:42",
                "product_category": {
                    "id": 1,
                    "slug": "iusto-qui",
                    "title": "卸妆",
                    "title_en": "et soluta et",
                    "describe": "Molestiae numquam consequuntur qui ut. Vero ipsam ea facere eius. Commodi sed sunt eum rerum eum laudantium. Et saepe cum aut maxime.",
                    "describe_en": "A at voluptatem mollitia perspiciatis et. Totam omnis nihil voluptates odio sint. Quis voluptas ex consequatur vel mollitia voluptas. Fugit nesciunt quod iste amet.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?44749",
                    "description": "Voluptatem commodi omnis non dolorum ut aut.",
                    "description_en": "Omnis nemo ex amet quibusdam.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?92323",
                    "parent_id": 9,
                    "created_at": "2020-08-05 02:58:43",
                    "updated_at": "2020-08-10 01:14:51"
                }
            },
            {
                "id": 11,
                "product_category_id": 17,
                "product_name": "黑钻肌光精华",
                "product_name_en": "itaque esse non",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?79980",
                "slug": "hic-impedit",
                "short_description": "Aut omnis enim occaecati itaque harum officia.",
                "short_description_en": "Voluptas veniam nemo est. Nobis amet molestiae occaecati iure expedita veritatis. Asperiores illum id neque veritatis ut nulla expedita.",
                "price": "9297.00",
                "sale_price": "4088.00",
                "stock": 845,
                "spec": null,
                "seo_title": "sed ut quos",
                "seo_keyword": "veniam",
                "seo_description": "Qui consequatur quae et.",
                "benefit": "Molestiae aliquam vero sint dolorem iste error eos. Quas ad sit numquam.",
                "benefit_en": "Laudantium ipsa veritatis magnam. Vel tempore quo quaerat quae atque. Sed aspernatur laborum hic ut aliquid. Asperiores ducimus et earum et dolorum cum quibusdam quo.",
                "tech_description": "Molestiae sit suscipit mollitia non neque occaecati. Possimus incidunt dolor modi atque eum. Error cum repellendus fugiat illum.",
                "tech_description_en": "Harum minus quod ad voluptas porro possimus et. At sit veniam quaerat fugiat occaecati. Dolorem laudantium voluptatem quia facilis qui.",
                "description": "Molestiae ut quia nostrum deleniti illum quibusdam facilis. Dolorem quis officia qui assumenda alias aut qui rerum. Non ab qui eligendi non. Dignissimos qui quo facilis in dolor aliquid ipsa maiores.",
                "description_en": "Modi eum esse nesciunt voluptas eaque amet quis. Aliquid iste illum quia aut dignissimos deserunt rerum. Sit eligendi molestias autem possimus aut. Voluptates porro cupiditate hic consequuntur impedit et. Commodi et sed sit sunt incidunt temporibus.",
                "usage": "Numquam enim magni consequatur voluptatem a. Nihil at quod alias. Ullam omnis numquam dolore magni quia quo. Libero nulla porro sed nam.",
                "usage_en": "Qui corporis ad et ratione qui. Nulla autem ut repellat temporibus. Nihil neque doloribus repellat reiciendis voluptas ipsam qui.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?86734",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?30396",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?68986",
                "product_video": null,
                "status": 1,
                "rating": 6.49,
                "sold_count": 9276,
                "review_count": 4128,
                "created_at": "2020-07-25 05:34:32",
                "updated_at": "2020-08-02 01:20:34",
                "product_category": {
                    "id": 17,
                    "slug": "rem-autem",
                    "title": "睫毛膏",
                    "title_en": "blanditiis et sit",
                    "describe": "Officiis provident omnis id id velit est. Sunt voluptatem enim aliquam quia perferendis aut non. Maxime excepturi nesciunt impedit delectus nihil. In dolor laudantium et error ut sunt labore.",
                    "describe_en": "Est eligendi qui delectus vel sint consectetur. Voluptatum et officiis qui dolorem. Laboriosam ratione labore tenetur eius dolorem non.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?46562",
                    "description": "Magnam quis molestiae deserunt quia aut.",
                    "description_en": "Voluptate odit error deserunt et eos.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?92788",
                    "parent_id": 5,
                    "created_at": "2020-08-01 12:59:07",
                    "updated_at": "2020-07-28 15:30:48"
                }
            },
            {
                "id": 12,
                "product_category_id": 8,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "quasi hic occaecati",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?86362",
                "slug": "voluptas-ratione",
                "short_description": "Vero earum laboriosam harum.",
                "short_description_en": "Eum deleniti doloribus aliquid rem ex eveniet quo. Cum assumenda et dolor est quo. Doloremque accusamus eveniet laudantium laborum voluptates sed.",
                "price": "8269.00",
                "sale_price": "9532.00",
                "stock": 533,
                "spec": null,
                "seo_title": "ut quidem voluptatem",
                "seo_keyword": "sint",
                "seo_description": "Asperiores odit cupiditate cupiditate veniam.",
                "benefit": "Vitae ut quam velit. Beatae ut est ut veniam nobis ut. Odit ab doloremque expedita ipsum aut officiis reiciendis sunt. Ipsa eum deleniti voluptas sed facere et. Quidem velit omnis ea eum minima optio est.",
                "benefit_en": "Quia sit asperiores quos vitae eius dolorum possimus. Quos et in nihil placeat sed.",
                "tech_description": "Hic totam reiciendis facilis est dolores soluta dolorum necessitatibus. Ad eveniet dolores numquam qui cupiditate voluptas. Repudiandae asperiores praesentium quis fugit aperiam ipsum illo. Adipisci animi pariatur consequatur aliquid nihil eos.",
                "tech_description_en": "Et nisi et corrupti dolor. Exercitationem quis minus id.",
                "description": "Veniam nulla repellat sunt tenetur accusantium. Non dolorem quis perspiciatis asperiores optio quis. Inventore eos quibusdam molestiae ducimus voluptatem excepturi. Qui libero commodi dolores.",
                "description_en": "Culpa consequuntur cum id eligendi animi. Illo eum quis autem. Qui excepturi excepturi quas fuga exercitationem ea laborum. Provident magni ea expedita ea repellat repudiandae qui sed.",
                "usage": "Rerum autem magnam illo. In consectetur et quam est est minus quisquam. Ut reiciendis dignissimos itaque et. Omnis nam quasi et vel.",
                "usage_en": "Non dolor ea ex officia debitis aperiam. Architecto eius mollitia et cum qui quae.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?24353",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?98482",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?20805",
                "product_video": null,
                "status": 1,
                "rating": 5.7,
                "sold_count": 7734,
                "review_count": 9708,
                "created_at": "2020-08-11 05:23:50",
                "updated_at": "2020-08-15 10:19:49",
                "product_category": {
                    "id": 8,
                    "slug": "veniam-autem",
                    "title": "香水",
                    "title_en": "rem amet itaque",
                    "describe": "Quo voluptas est voluptas nam et. Odit quod sed distinctio assumenda maiores. Deserunt eligendi veritatis eveniet laudantium aut et sunt nobis.",
                    "describe_en": "Dolore dolorum eligendi neque nam enim aspernatur dicta. Non nisi possimus qui. Nihil consequatur praesentium autem qui aut dolor. Et dolores atque qui odio.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?58540",
                    "description": "Sunt ut quo sint.",
                    "description_en": "Recusandae facilis voluptatem illo blanditiis quia.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?68524",
                    "parent_id": 12,
                    "created_at": "2020-08-14 22:11:50",
                    "updated_at": "2020-08-02 23:34:03"
                }
            },
            {
                "id": 14,
                "product_category_id": 17,
                "product_name": "钻石焕活面膜",
                "product_name_en": "enim voluptatem beatae",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?64465",
                "slug": "quia-deleniti",
                "short_description": "Tempora fuga et officia maiores.",
                "short_description_en": "Consequatur iure harum non rerum. Minima quos soluta nobis voluptate ut. Quaerat est aperiam tempora placeat.",
                "price": "8938.00",
                "sale_price": "5799.00",
                "stock": 507,
                "spec": null,
                "seo_title": "ipsa corrupti rerum",
                "seo_keyword": "dolores",
                "seo_description": "Iure nesciunt rerum deserunt et aliquid beatae.",
                "benefit": "Recusandae ipsum aut quibusdam deserunt deserunt deleniti. Inventore impedit quidem est aut quas. Magnam maxime amet laborum et quasi saepe.",
                "benefit_en": "Fuga sapiente animi sint praesentium quasi. Numquam quia accusantium culpa earum quasi ut quia. Beatae corrupti eligendi velit vitae voluptas in. Dolor iste ipsum ut excepturi assumenda suscipit nesciunt in.",
                "tech_description": "Voluptas praesentium est quos hic vero est corrupti molestiae. Libero corporis exercitationem ut modi tempore. Illo rerum quo ut.",
                "tech_description_en": "Eos consequatur quasi temporibus et in sed illum. Aspernatur ad sequi deleniti accusantium. Optio aut rerum est.",
                "description": "Maiores consequuntur vitae officia aspernatur. Temporibus voluptatem officia tenetur hic. Dolorem quasi numquam accusantium optio molestiae. Libero quisquam voluptas iure dolores enim ut.",
                "description_en": "Quaerat sunt vitae ut perspiciatis. Non maiores velit expedita eos.",
                "usage": "Eveniet aperiam animi possimus laboriosam sunt ullam ut. Fuga pariatur harum distinctio ut placeat nemo enim.",
                "usage_en": "Sequi neque itaque et facere nulla. Soluta voluptatem quaerat rerum. Odio id voluptatum expedita sed in quo veritatis. Error voluptates ea dolorem illum debitis deleniti.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?33508",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?29038",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?56113",
                "product_video": null,
                "status": 1,
                "rating": 7.96,
                "sold_count": 3660,
                "review_count": 8225,
                "created_at": "2020-08-13 14:27:12",
                "updated_at": "2020-07-30 23:24:12",
                "product_category": {
                    "id": 17,
                    "slug": "rem-autem",
                    "title": "睫毛膏",
                    "title_en": "blanditiis et sit",
                    "describe": "Officiis provident omnis id id velit est. Sunt voluptatem enim aliquam quia perferendis aut non. Maxime excepturi nesciunt impedit delectus nihil. In dolor laudantium et error ut sunt labore.",
                    "describe_en": "Est eligendi qui delectus vel sint consectetur. Voluptatum et officiis qui dolorem. Laboriosam ratione labore tenetur eius dolorem non.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?46562",
                    "description": "Magnam quis molestiae deserunt quia aut.",
                    "description_en": "Voluptate odit error deserunt et eos.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?92788",
                    "parent_id": 5,
                    "created_at": "2020-08-01 12:59:07",
                    "updated_at": "2020-07-28 15:30:48"
                }
            },
            {
                "id": 16,
                "product_category_id": 8,
                "product_name": "黑钻肌光精华",
                "product_name_en": "voluptatem ipsum rerum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?38232",
                "slug": "rerum-ea",
                "short_description": "Alias facilis provident magni molestiae quas aliquam.",
                "short_description_en": "Deserunt aut cumque dolores dolorem laudantium. Laboriosam in officiis est eligendi rerum fuga. Nemo ut voluptas eveniet qui. Exercitationem totam rerum est omnis eius rerum quo quisquam.",
                "price": "8475.00",
                "sale_price": "2153.00",
                "stock": 926,
                "spec": null,
                "seo_title": "voluptates pariatur fugiat",
                "seo_keyword": "ut",
                "seo_description": "Alias iure tempora doloribus.",
                "benefit": "Cupiditate dolores autem dolorem ut sint quod. Et illum sequi consequatur. Et aut accusamus iste dolor id aliquam ut dolorem.",
                "benefit_en": "Sint consequatur in ea eum enim et necessitatibus. Et ad quod eos. Tempore ut doloremque corporis. Iusto laboriosam ab veniam quia rerum.",
                "tech_description": "Doloremque corrupti minus dolore est. Inventore mollitia non alias id libero et. Sint fuga tempore veritatis quis. Aut recusandae qui vitae provident itaque in.",
                "tech_description_en": "Dolores quia minima sed cum architecto et. Totam id maiores assumenda nesciunt. Inventore assumenda facilis eligendi rem incidunt earum.",
                "description": "Esse suscipit aut corporis in voluptates. Odio voluptatum corporis quasi asperiores. Id quas quisquam esse nihil id. Omnis et qui reiciendis omnis quas soluta ad.",
                "description_en": "Quia ea enim qui suscipit praesentium optio sint. Aliquid consequuntur nemo eveniet consequuntur. Pariatur corrupti nemo ut quo alias autem nostrum. Sunt iste tempore debitis nemo.",
                "usage": "Repudiandae sunt non dolorem. Qui dolor reprehenderit omnis. Et eius numquam unde magnam deserunt labore consequatur. Sunt adipisci laudantium ea.",
                "usage_en": "Vero et porro officia deleniti laudantium non. Qui odio earum quisquam optio. Asperiores placeat est atque ut et ducimus.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?74253",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?92694",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?40806",
                "product_video": null,
                "status": 1,
                "rating": 3.37,
                "sold_count": 1738,
                "review_count": 6543,
                "created_at": "2020-07-22 02:23:03",
                "updated_at": "2020-08-19 10:38:04",
                "product_category": {
                    "id": 8,
                    "slug": "veniam-autem",
                    "title": "香水",
                    "title_en": "rem amet itaque",
                    "describe": "Quo voluptas est voluptas nam et. Odit quod sed distinctio assumenda maiores. Deserunt eligendi veritatis eveniet laudantium aut et sunt nobis.",
                    "describe_en": "Dolore dolorum eligendi neque nam enim aspernatur dicta. Non nisi possimus qui. Nihil consequatur praesentium autem qui aut dolor. Et dolores atque qui odio.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?58540",
                    "description": "Sunt ut quo sint.",
                    "description_en": "Recusandae facilis voluptatem illo blanditiis quia.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?68524",
                    "parent_id": 12,
                    "created_at": "2020-08-14 22:11:50",
                    "updated_at": "2020-08-02 23:34:03"
                }
            },
            {
                "id": 18,
                "product_category_id": 14,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "ea velit impedit",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?88560",
                "slug": "quam-minus",
                "short_description": "Commodi perferendis omnis eum voluptatum illum sapiente.",
                "short_description_en": "Quasi aut soluta rerum aspernatur aut nihil sit. Accusamus ratione dolor quod laudantium et ducimus excepturi. Quas omnis dolores illum deleniti molestiae laboriosam consequuntur. Soluta ad vel hic hic.",
                "price": "9399.00",
                "sale_price": "7773.00",
                "stock": 403,
                "spec": null,
                "seo_title": "omnis est porro",
                "seo_keyword": "deleniti",
                "seo_description": "Omnis omnis quis est reiciendis.",
                "benefit": "Deleniti deserunt tempora magni quisquam. Consectetur ut culpa aut provident provident atque aut. Eveniet earum nihil aperiam aut ea aut corporis.",
                "benefit_en": "Voluptatem deleniti quasi quod tempora sint iure iste. Sed itaque aperiam consectetur reiciendis. Asperiores atque velit sunt quis quae. Aliquid voluptatum eveniet sint dolor est quia.",
                "tech_description": "Temporibus cupiditate nihil ratione perferendis est animi. Asperiores necessitatibus odit quibusdam aliquam ipsam omnis itaque.",
                "tech_description_en": "Magnam et iusto voluptates cum laboriosam corporis quod. Reprehenderit iure ut et animi harum possimus dolorem ut. Atque animi molestias vel velit sed dicta. Nesciunt vitae maiores vero cum fugit laudantium.",
                "description": "Sed commodi fugiat qui suscipit fuga. Et est maxime molestiae illum totam. Voluptatibus reprehenderit voluptatem aspernatur ratione et ducimus.",
                "description_en": "Nostrum magni amet itaque est nemo. Quia eum optio qui sint. Numquam magnam dolorum saepe exercitationem non id velit.",
                "usage": "Et id voluptatem laboriosam quasi cupiditate nemo. Illo qui qui perspiciatis tempora. Quaerat porro facilis occaecati minus qui voluptatem esse exercitationem.",
                "usage_en": "Possimus ipsam autem exercitationem in. Quia voluptatum corporis nemo sit ducimus sed sit. Eius magnam et eveniet tempore. Reiciendis nihil assumenda dolore neque et.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?46987",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?61118",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?33745",
                "product_video": null,
                "status": 1,
                "rating": 9.99,
                "sold_count": 8623,
                "review_count": 4184,
                "created_at": "2020-08-05 03:22:07",
                "updated_at": "2020-08-14 00:05:03",
                "product_category": {
                    "id": 14,
                    "slug": "ullam-suscipit",
                    "title": "腮红",
                    "title_en": "est incidunt qui",
                    "describe": "Eum ab velit similique voluptas quo et. Eum nulla ut expedita et.",
                    "describe_en": "Quo perferendis inventore vel quasi. Neque qui non et consequatur ipsam totam. Nihil ipsum qui quaerat rerum accusantium ullam hic.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?72112",
                    "description": "Fugit possimus quisquam quaerat minima.",
                    "description_en": "Aut possimus sint aliquid quia minima autem molestiae.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?78789",
                    "parent_id": 11,
                    "created_at": "2020-08-04 23:14:48",
                    "updated_at": "2020-07-22 21:08:56"
                }
            },
            {
                "id": 22,
                "product_category_id": 20,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "dolor ut ipsum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?94437",
                "slug": "est-architecto",
                "short_description": "Id dignissimos labore consequatur.",
                "short_description_en": "Voluptatem nesciunt quae quo quia nemo possimus amet. Quas et magnam nulla voluptate voluptas. Ab eveniet velit libero.",
                "price": "1533.00",
                "sale_price": "1114.00",
                "stock": 773,
                "spec": null,
                "seo_title": "blanditiis provident sed",
                "seo_keyword": "autem",
                "seo_description": "Rerum sit rerum eos eos.",
                "benefit": "Doloribus totam accusantium est repellendus. Dolor exercitationem at laborum repudiandae voluptatem praesentium. Et velit ut odit aut ea perspiciatis accusantium.",
                "benefit_en": "Sit nihil aliquid voluptatem sit. Qui facilis dolor ut earum. Qui dignissimos molestiae nesciunt eveniet nihil porro. Nihil est aliquid et porro est est ut qui.",
                "tech_description": "Repellendus accusantium at voluptate non in voluptatem aliquam autem. Quis nemo non vero esse similique qui nihil repellendus. Molestias voluptatem non esse quia aspernatur. Impedit et facere consequatur eveniet aperiam earum sit.",
                "tech_description_en": "Voluptatem ea ullam dolor. Beatae est deleniti et molestias voluptas voluptatem odit. Omnis est voluptatem nam totam vel facilis fuga. Eum earum non ducimus quaerat fuga.",
                "description": "Et voluptas ut maxime. Veritatis sed velit amet. Quis aperiam velit quibusdam optio. Eius nihil ut officiis reiciendis rem.",
                "description_en": "Dolore odio sequi nam. Et voluptas aut assumenda non et officia accusamus. Et quae architecto magnam assumenda sit. Ut iure hic iure in repellendus.",
                "usage": "Est saepe rerum culpa earum. Aut et nihil et saepe quisquam occaecati dolor. Blanditiis expedita voluptatum saepe et beatae ut. Voluptas hic sed non sint suscipit sed iste.",
                "usage_en": "Laudantium et quis ad harum error ipsa. Aut tenetur omnis laborum qui ea. Sit est et et inventore qui rerum quo ut. Tenetur dolorem commodi est ea.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?42706",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?98819",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?17165",
                "product_video": null,
                "status": 1,
                "rating": 0.86,
                "sold_count": 5642,
                "review_count": 7114,
                "created_at": "2020-07-29 11:55:42",
                "updated_at": "2020-08-12 15:59:53",
                "product_category": {
                    "id": 20,
                    "slug": "quis-aliquam",
                    "title": "爽肤水",
                    "title_en": "aut architecto reiciendis",
                    "describe": "Similique voluptatem quidem in. Ut exercitationem minima nobis animi. Nisi nulla maiores laboriosam at molestias.",
                    "describe_en": "Aut dolorum ipsum perspiciatis est at voluptatem. Consequatur quos sit ut impedit dolorem voluptas dolorem. Laboriosam nulla repellat est. Quo quas incidunt blanditiis repellat.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?22219",
                    "description": "Aspernatur facilis hic voluptatem voluptatem est.",
                    "description_en": "Velit et necessitatibus quibusdam voluptas quo tempora.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?47022",
                    "parent_id": 9,
                    "created_at": "2020-08-11 16:40:04",
                    "updated_at": "2020-08-13 14:17:32"
                }
            },
            {
                "id": 23,
                "product_category_id": 7,
                "product_name": "黑钻焕肤水",
                "product_name_en": "laudantium sapiente et",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?81554",
                "slug": "laudantium-pariatur",
                "short_description": "Officiis et voluptas ut.",
                "short_description_en": "Qui eius distinctio sit nisi vel nihil. Repellat aut aut eos quod. Molestias nihil delectus quibusdam dolore sed.",
                "price": "2937.00",
                "sale_price": "9753.00",
                "stock": 195,
                "spec": null,
                "seo_title": "autem omnis placeat",
                "seo_keyword": "inventore",
                "seo_description": "Consequatur nam illum optio voluptas ea.",
                "benefit": "Dolor soluta non adipisci nam explicabo non itaque. Perspiciatis id voluptas possimus ab et ab. Molestias non placeat numquam reprehenderit vel veniam voluptas. Tempora molestiae cumque autem cupiditate explicabo et in et.",
                "benefit_en": "Eveniet molestias sunt itaque a. Amet rerum excepturi dolores eos quidem. Non voluptatem quia sit eos voluptas. Fugiat voluptas est dignissimos harum maxime et.",
                "tech_description": "Sed fuga ut similique ab quo. Sint error ipsum sint aliquam.",
                "tech_description_en": "Dolor dolor sit in hic cupiditate. Et soluta reiciendis nihil.",
                "description": "Sit in sequi reprehenderit et quasi maiores. In quisquam quaerat sed quo suscipit omnis. Soluta neque qui molestiae doloremque.",
                "description_en": "Non dolorem blanditiis quas iure sapiente officia. Dolor doloremque in minima eaque magnam voluptates sequi. Suscipit dignissimos ipsa voluptas sapiente unde rerum. Dolor rerum deleniti nemo est nihil.",
                "usage": "Sunt excepturi inventore asperiores voluptatem. Dolores illo nemo impedit sunt. Voluptatem maiores vero ea id non explicabo est. A accusantium vel perspiciatis id quis et. Veniam aliquid suscipit neque sed expedita officiis illo beatae.",
                "usage_en": "Vel ut amet animi perspiciatis. Voluptatem rerum unde quaerat quod aperiam eum. Nihil est sit ipsum a qui quis distinctio.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?50521",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?24561",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?35005",
                "product_video": null,
                "status": 1,
                "rating": 1.09,
                "sold_count": 9819,
                "review_count": 7809,
                "created_at": "2020-08-14 23:26:52",
                "updated_at": "2020-08-02 03:53:12",
                "product_category": {
                    "id": 7,
                    "slug": "mollitia-eum",
                    "title": "面膜",
                    "title_en": "alias eligendi ut",
                    "describe": "Quisquam et dolor nostrum itaque. Praesentium tempora quidem sint perferendis harum magni quaerat vel.",
                    "describe_en": "Laboriosam iure commodi velit velit assumenda dolor. Sint fugit et omnis dolor ipsa qui magni. A voluptate ea natus perspiciatis.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?38101",
                    "description": "In dolore tenetur sunt.",
                    "description_en": "Est delectus necessitatibus magni minus doloribus.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?79386",
                    "parent_id": 16,
                    "created_at": "2020-08-15 06:23:08",
                    "updated_at": "2020-07-28 18:41:40"
                }
            },
            {
                "id": 24,
                "product_category_id": 12,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "eum tenetur quasi",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?52630",
                "slug": "quibusdam-esse",
                "short_description": "Cumque soluta temporibus magnam.",
                "short_description_en": "Quod pariatur voluptatibus velit molestiae. Harum accusamus quaerat porro eius officiis. Molestias perspiciatis repellat cupiditate sed rerum voluptatem quaerat. Esse dolore minima aut nihil natus. Quos blanditiis a sunt occaecati eum voluptatem et.",
                "price": "9784.00",
                "sale_price": "7227.00",
                "stock": 790,
                "spec": null,
                "seo_title": "molestiae nemo omnis",
                "seo_keyword": "et",
                "seo_description": "Sit quia aut qui et.",
                "benefit": "Nesciunt itaque et provident. Sit quis labore quae porro eaque enim voluptas. Quas dolorem molestiae ipsum aut minus.",
                "benefit_en": "Iure fugit molestiae esse ut quae sint animi. Aut officia sit laboriosam impedit sed. Possimus reprehenderit mollitia sequi ut dolor et. Quos laborum sequi quia nihil.",
                "tech_description": "Eum aut dignissimos in dolorem consequatur. Ut quod deleniti amet est odit ratione. Voluptatum dolorum doloribus in reiciendis distinctio. Commodi cumque voluptatibus voluptatem blanditiis odio consequatur omnis.",
                "tech_description_en": "Modi eos maiores vel ex dignissimos. Qui facere perferendis quisquam qui. Perferendis nesciunt et labore nemo adipisci eum. Nihil tempora omnis in aut ea.",
                "description": "Fugit laboriosam sit consequatur nobis debitis repellendus quod sapiente. Temporibus cumque laboriosam voluptatem. Quam qui ipsa harum laudantium.",
                "description_en": "Qui et dolorem sit quasi est. Dolores et est distinctio qui voluptas quaerat. Quos qui aspernatur in fugiat sed eaque adipisci. Quia id culpa aspernatur.",
                "usage": "Consectetur explicabo eveniet doloremque commodi vero. Fugiat et quae et esse. Ut ipsum quod eum vel quisquam et. Doloribus asperiores accusamus eligendi qui molestiae fugit. Non quasi ullam veniam.",
                "usage_en": "Optio voluptate est et et amet. Veritatis molestias nostrum excepturi corporis ab inventore qui. Delectus et earum omnis aut cumque non sequi repellat. Sapiente qui sint sint labore.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?10354",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?75694",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?23096",
                "product_video": null,
                "status": 1,
                "rating": 9.12,
                "sold_count": 9884,
                "review_count": 1814,
                "created_at": "2020-07-22 02:45:15",
                "updated_at": "2020-08-17 19:51:33",
                "product_category": {
                    "id": 12,
                    "slug": "perferendis-odit",
                    "title": "腮红",
                    "title_en": "velit temporibus ut",
                    "describe": "Totam ab mollitia quam quia saepe sit excepturi corrupti. Consectetur voluptate sed sit ducimus. Quaerat nihil ipsa modi enim veniam. Magni exercitationem ullam in voluptatibus quas.",
                    "describe_en": "Mollitia molestiae vel libero. In impedit aliquid tempore. Neque rerum nobis omnis.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?61738",
                    "description": "Perferendis at voluptatem commodi.",
                    "description_en": "Minima nihil quia est incidunt consectetur quis.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?94536",
                    "parent_id": 11,
                    "created_at": "2020-08-06 02:12:35",
                    "updated_at": "2020-08-12 17:54:55"
                }
            },
            {
                "id": 27,
                "product_category_id": 5,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "eveniet architecto eos",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?37077",
                "slug": "omnis-non",
                "short_description": "Placeat ratione velit sunt et.",
                "short_description_en": "Nobis aliquid id explicabo amet odio nobis. Ducimus est qui pariatur blanditiis. Ratione commodi eos ut doloremque. Qui quo alias tempora distinctio neque.",
                "price": "1731.00",
                "sale_price": "2992.00",
                "stock": 802,
                "spec": null,
                "seo_title": "est nostrum impedit",
                "seo_keyword": "odit",
                "seo_description": "Alias magnam iste officiis alias architecto vitae.",
                "benefit": "Qui aperiam vitae laboriosam ea nulla nesciunt et. Voluptatum illo minima temporibus sint et. Cupiditate quisquam explicabo corrupti necessitatibus. Ullam et quisquam error consequuntur suscipit. Voluptas sed eveniet porro qui laborum quia.",
                "benefit_en": "Corrupti rem ut minus dolor. Qui dolorem minima praesentium alias. Recusandae rerum aspernatur blanditiis sit molestiae dolores deserunt. Possimus molestias incidunt eaque perferendis amet ut est et.",
                "tech_description": "Et molestiae sit officia quidem beatae pariatur itaque vero. Adipisci consequatur et maiores. Consequatur reiciendis aliquam fugit et. Minima totam perferendis libero commodi ut facilis.",
                "tech_description_en": "Nulla molestiae suscipit sequi veritatis. Voluptatem et quam omnis aut at dolores ut et. Velit possimus dolorem deserunt assumenda velit.",
                "description": "Voluptate porro eum ipsum quia cupiditate. Vel consequuntur fugiat rerum vel odit. Illum exercitationem accusantium non.",
                "description_en": "Enim aut voluptas voluptas deleniti. Ipsam pariatur iusto eum sit tempore sit. Ut rerum assumenda atque est. Et occaecati sunt alias eveniet occaecati magnam.",
                "usage": "Sit labore doloribus laboriosam eos est tempore. Velit dolor minus nostrum quaerat facilis sapiente. Ea cum dolores porro impedit quasi qui quibusdam et.",
                "usage_en": "Odio quos ducimus sed illo inventore et atque. Unde molestiae fugiat optio enim. Est itaque suscipit voluptates eligendi blanditiis. Molestiae suscipit sunt minus at occaecati.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?68785",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?50428",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?55586",
                "product_video": null,
                "status": 1,
                "rating": 3.16,
                "sold_count": 6132,
                "review_count": 7845,
                "created_at": "2020-08-05 06:27:05",
                "updated_at": "2020-07-21 16:58:13",
                "product_category": {
                    "id": 5,
                    "slug": "totam-ut",
                    "title": "唇膏",
                    "title_en": "voluptatem reiciendis nam",
                    "describe": "Voluptates doloremque unde ut esse quae quod. Voluptate doloremque voluptas eum ex sit nostrum. Optio commodi asperiores ut ut et molestiae velit.",
                    "describe_en": "Ut aut quae soluta recusandae ipsa vel consequatur nobis. Aut recusandae maiores eaque autem. Qui aspernatur est voluptas illo aut sit. Qui magni laboriosam totam.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?16406",
                    "description": "Qui aut incidunt impedit sit at.",
                    "description_en": "Possimus deleniti et quia non autem a.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?54221",
                    "parent_id": 15,
                    "created_at": "2020-07-26 03:50:37",
                    "updated_at": "2020-07-28 08:16:56"
                }
            },
            {
                "id": 34,
                "product_category_id": 13,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "non et suscipit",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?92200",
                "slug": "iure-minus",
                "short_description": "Eos praesentium sunt non vitae voluptatem.",
                "short_description_en": "Et quia accusantium eius sed voluptatum iusto. Qui atque deserunt perspiciatis reiciendis molestias vero ea. Ut error ullam repudiandae suscipit recusandae dolorem totam et.",
                "price": "7323.00",
                "sale_price": "9744.00",
                "stock": 304,
                "spec": null,
                "seo_title": "qui aliquid repudiandae",
                "seo_keyword": "voluptate",
                "seo_description": "Molestiae quos aspernatur consectetur.",
                "benefit": "Accusamus labore accusamus omnis. Saepe eos laboriosam voluptas sit fugit soluta. Ad error aut consequatur dolores laborum quod. Velit dolore deleniti voluptatem consequatur modi.",
                "benefit_en": "Expedita quis incidunt ab non voluptates tempora odit consequatur. Iure nihil quis voluptates et et pariatur. Vitae eveniet autem aut hic.",
                "tech_description": "Odio nobis voluptate non aut facilis. Laboriosam neque aliquam et alias. Aut et quae libero dicta quam.",
                "tech_description_en": "Rem vero voluptatum repellendus doloribus. Aspernatur debitis fugiat tempora rerum in quia. Aut et rerum voluptatem quidem numquam facere voluptatibus.",
                "description": "Aliquid fuga quo est dolorum numquam atque ut. Sapiente consequuntur sed tempore sapiente quisquam ullam blanditiis. Aspernatur aperiam sit et quia. Est accusantium earum delectus sit voluptatum id et. Rerum veniam maiores et.",
                "description_en": "Quia velit maxime quae ipsam est facere. Maxime alias ut voluptatem dolor quia id animi aut. Et nihil in veritatis et maiores dolores ducimus. Fugiat quam sint voluptates et consectetur cupiditate qui ut.",
                "usage": "Animi exercitationem et eos modi magnam magnam. Vitae consequatur rerum iure quod molestiae modi id. Tenetur et qui quasi iusto repellat odio voluptas.",
                "usage_en": "In non eaque sint animi aperiam veritatis. Consequuntur rerum exercitationem ab quia aut quia. Ut voluptas exercitationem porro.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?21982",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?92023",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?93598",
                "product_video": null,
                "status": 1,
                "rating": 4.33,
                "sold_count": 8368,
                "review_count": 9102,
                "created_at": "2020-08-12 02:25:28",
                "updated_at": "2020-08-08 23:50:49",
                "product_category": {
                    "id": 13,
                    "slug": "impedit-culpa",
                    "title": "眼霜",
                    "title_en": "maiores quod doloribus",
                    "describe": "Beatae sint suscipit in nulla molestias. Autem aut autem aut sed. Quidem aliquid et consequatur sequi. Officiis delectus facilis possimus ratione corporis modi.",
                    "describe_en": "Possimus non quibusdam quaerat pariatur tenetur non. Ab quaerat ut repellat ducimus labore. Molestiae ut quidem qui quod. Earum voluptatem tempore eaque rem consequatur blanditiis possimus.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?60716",
                    "description": "Sed reprehenderit quibusdam fugiat.",
                    "description_en": "Totam qui at iusto excepturi.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?60222",
                    "parent_id": 13,
                    "created_at": "2020-07-28 18:22:18",
                    "updated_at": "2020-07-20 23:00:35"
                }
            },
            {
                "id": 37,
                "product_category_id": 9,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "est sed nobis",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?73027",
                "slug": "est-consequatur",
                "short_description": "Labore dolorum ducimus qui nobis molestiae.",
                "short_description_en": "Expedita id quo recusandae ut. Perferendis in corporis odit dolorem sint temporibus ducimus beatae. Id rerum iure sunt quo dolores qui in. Sit cumque quia aut laudantium omnis nobis modi expedita.",
                "price": "6612.00",
                "sale_price": "1594.00",
                "stock": 221,
                "spec": null,
                "seo_title": "quia unde rerum",
                "seo_keyword": "corporis",
                "seo_description": "Iure ab atque nihil omnis nihil.",
                "benefit": "Exercitationem quia a dolore et. Ad impedit odit id aliquid.",
                "benefit_en": "Voluptas consequatur quis possimus hic omnis non. Possimus est ad non facilis. Sed nam in aspernatur voluptas.",
                "tech_description": "Molestiae quibusdam amet odit est maxime temporibus. Corporis et dicta vel dolor est quam. Voluptas ipsa et vel nam et officia ut totam.",
                "tech_description_en": "Facilis consectetur voluptatum et optio labore ab vitae deleniti. Voluptas dolor et ducimus pariatur in. Aut voluptate aperiam iure aut aut ipsum. Itaque reprehenderit sapiente repellat porro sint.",
                "description": "Nostrum ullam molestias molestiae eaque a blanditiis. Voluptatem molestiae ipsum nobis vel porro voluptatem quis. Aut adipisci doloribus aut omnis ipsum nemo.",
                "description_en": "Est harum et iusto molestiae magnam. Fuga illo aut earum doloribus saepe iure nihil laboriosam. Officia voluptatem aut magni harum.",
                "usage": "Accusantium hic sapiente officia enim voluptatibus suscipit. Iusto quibusdam quidem eveniet. Est totam neque eaque iure. Reprehenderit distinctio praesentium eligendi nam fugiat mollitia.",
                "usage_en": "Eum dignissimos adipisci corporis ipsum. Similique atque repudiandae et facilis exercitationem voluptatem id. In ut dignissimos cumque nisi nemo.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?87304",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?19723",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?47062",
                "product_video": null,
                "status": 1,
                "rating": 6.7,
                "sold_count": 7641,
                "review_count": 8601,
                "created_at": "2020-08-12 00:43:11",
                "updated_at": "2020-07-30 04:47:04",
                "product_category": {
                    "id": 9,
                    "slug": "dolor-maxime",
                    "title": "睫毛膏",
                    "title_en": "alias quo iusto",
                    "describe": "Eaque mollitia est quidem. Facilis consequatur suscipit dolorem et perspiciatis. Enim nobis qui asperiores sit itaque.",
                    "describe_en": "Commodi in facilis optio voluptate aut soluta neque laudantium. Voluptatem voluptas corporis maxime officia harum illum. Possimus est aperiam asperiores similique officiis.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?97486",
                    "description": "Rem fugiat nostrum vel similique unde.",
                    "description_en": "Recusandae quo ad voluptate omnis.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?17344",
                    "parent_id": 3,
                    "created_at": "2020-07-29 20:33:03",
                    "updated_at": "2020-08-12 10:25:05"
                }
            },
            {
                "id": 39,
                "product_category_id": 10,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "at odit itaque",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?39316",
                "slug": "dolorem-laudantium",
                "short_description": "Maiores ullam distinctio omnis consequuntur aut quia.",
                "short_description_en": "Officiis inventore facere et ratione. Earum suscipit necessitatibus quis sapiente adipisci. Corrupti ut aut ut non asperiores porro minima labore. In ipsam quis rerum quia.",
                "price": "9510.00",
                "sale_price": "6701.00",
                "stock": 909,
                "spec": null,
                "seo_title": "sunt asperiores deserunt",
                "seo_keyword": "dolore",
                "seo_description": "Modi adipisci voluptate libero sed.",
                "benefit": "Possimus odit ut quo quam odit et numquam. Voluptatem sint voluptas adipisci sit. Aut est delectus amet. Fuga voluptatum tempora non ipsum possimus nemo.",
                "benefit_en": "Dolor sunt ducimus doloribus eius laudantium qui. Sequi ipsa beatae nihil ea commodi labore. Ad quibusdam aut qui eaque deserunt distinctio quod. Voluptate minus alias voluptas. Id incidunt occaecati iure ratione assumenda mollitia repellendus.",
                "tech_description": "Nisi quos veniam consequatur perspiciatis. Alias et quas doloribus eius.",
                "tech_description_en": "Veritatis ipsam temporibus explicabo error. Illum sed tempora sit magni neque. Reprehenderit laudantium et sed porro sed excepturi doloribus. Est debitis vel ad delectus libero voluptas reiciendis nulla. Itaque consequatur consequatur magni voluptatem vitae.",
                "description": "Atque aut et earum a. A sunt a explicabo qui nihil laboriosam. Assumenda animi tenetur corrupti mollitia optio voluptas possimus sapiente. Et nisi provident non quaerat.",
                "description_en": "Ipsam dolores eveniet harum. Et sint ut voluptates qui labore. Dolores hic doloribus consequatur porro incidunt. Deleniti eum architecto praesentium voluptas repudiandae.",
                "usage": "Non tempore reprehenderit autem ea. Ut cumque aliquam ipsum nihil. Ratione eos voluptate repudiandae dolorum culpa. Voluptatem sed officiis doloremque ut non similique aspernatur qui.",
                "usage_en": "Aperiam autem minus inventore asperiores similique magnam eaque necessitatibus. Labore velit ut sed dolorem laboriosam. Rerum eaque dolorem debitis fugit occaecati dolores.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?88686",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?58040",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?40385",
                "product_video": null,
                "status": 1,
                "rating": 7.62,
                "sold_count": 2984,
                "review_count": 5851,
                "created_at": "2020-08-16 03:50:53",
                "updated_at": "2020-07-23 04:21:36",
                "product_category": {
                    "id": 10,
                    "slug": "alias-non",
                    "title": "香水",
                    "title_en": "itaque voluptatum dignissimos",
                    "describe": "Est natus assumenda culpa ut. Ducimus sit ducimus exercitationem nihil sint repellendus ducimus. Quasi a facilis vel eum repellat vel illo.",
                    "describe_en": "Aut cumque dolorem praesentium praesentium minus laudantium enim. Illum ut quas consequatur accusantium.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?44913",
                    "description": "Architecto aut molestiae porro id et.",
                    "description_en": "Vel odit dolor sapiente deleniti.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?85872",
                    "parent_id": 20,
                    "created_at": "2020-08-06 08:03:21",
                    "updated_at": "2020-07-22 09:52:48"
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
        "total": 17
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

<!-- START_b5ff729b1e89886a06880b326e99727c -->
## Get wish list
获取心愿单商品列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/products/favorite" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/products/favorite"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/products/favorite`


<!-- END_b5ff729b1e89886a06880b326e99727c -->

<!-- START_551ca68f1c27ed1f1511032fb4bdd95e -->
## Request Add product to wish list
请求将商品加入心愿单

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/api/products/1/favorite?product_id=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/products/1/favorite"
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
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/products/{product_id}/favorite`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `product_id` |  optional  | integer required 商品id

<!-- END_551ca68f1c27ed1f1511032fb4bdd95e -->

<!-- START_45c7218d70a2598b7383a3b5df11339d -->
## Remove product from wish list
移除心愿单商品

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/api/products/1/favorite?product_id=excepturi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/products/1/favorite"
);

let params = {
    "product_id": "excepturi",
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
`DELETE api/products/{product_id}/favorite`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `product_id` |  required  | 商品id

<!-- END_45c7218d70a2598b7383a3b5df11339d -->

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
    -d '{"product_id":"nemo"}'

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
    "product_id": "nemo"
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
    "http://store.wutang.com/api/shop_carts/1?type=quasi&product_id=cumque&amount=voluptates" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/shop_carts/1"
);

let params = {
    "type": "quasi",
    "product_id": "cumque",
    "amount": "voluptates",
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
    "http://store.wutang.com/api/shop_carts/1?product_id=labore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/shop_carts/1"
);

let params = {
    "product_id": "labore",
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
    -d '{"province":"modi","city":"dolore","district":"eaque","address":"eaque","zip":"iste","contact_name":"cupiditate","contact_phone":"voluptas"}'

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
    "province": "modi",
    "city": "dolore",
    "district": "eaque",
    "address": "eaque",
    "zip": "iste",
    "contact_name": "cupiditate",
    "contact_phone": "voluptas"
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
    "http://store.wutang.com/api/user_addresses/1?province=enim&city=nobis&district=unde&address=nihil&zip=suscipit&contact_name=quo&contact_phone=sed" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_addresses/1"
);

let params = {
    "province": "enim",
    "city": "nobis",
    "district": "unde",
    "address": "nihil",
    "zip": "suscipit",
    "contact_name": "quo",
    "contact_phone": "sed",
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
    "http://store.wutang.com/api/user_profiles?profile_id=id&phone=consequuntur&real_name=et&sex=ad&birthday=voluptate&age=ducimus&province=id&city=voluptas&district=at&address=soluta&zip=incidunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_profiles"
);

let params = {
    "profile_id": "id",
    "phone": "consequuntur",
    "real_name": "et",
    "sex": "ad",
    "birthday": "voluptate",
    "age": "ducimus",
    "province": "id",
    "city": "voluptas",
    "district": "at",
    "address": "soluta",
    "zip": "incidunt",
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

#general


<!-- START_77797615aeaa4fce9a94150989aed46f -->
## ResponseCode explain
本方法仅作返回code通用说明(无其他作用)

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/response_code?10001=culpa&10003=dolores&20001=iste&40001=et&40003=vero&40004=voluptates&40005=at&50001=non" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/response_code"
);

let params = {
    "10001": "culpa",
    "10003": "dolores",
    "20001": "iste",
    "40001": "et",
    "40003": "vero",
    "40004": "voluptates",
    "40005": "at",
    "50001": "non",
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


