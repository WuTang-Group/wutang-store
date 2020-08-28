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
    -G "http://store.wutang.com/admin/category_stories?page=sit&page_limit=quas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories"
);

let params = {
    "page": "sit",
    "page_limit": "quas",
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
    "http://store.wutang.com/admin/category_stories?title=doloremque&title_en=dicta&description=nam&description_en=saepe&banner=doloremque&product_category_id=ipsam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories"
);

let params = {
    "title": "doloremque",
    "title_en": "dicta",
    "description": "nam",
    "description_en": "saepe",
    "banner": "doloremque",
    "product_category_id": "ipsam",
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
    "http://store.wutang.com/admin/category_stories/1?title=ea&title_en=amet&description=animi&description_en=omnis&banner=voluptatem&product_category_id=consequatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories/1"
);

let params = {
    "title": "ea",
    "title_en": "amet",
    "description": "animi",
    "description_en": "omnis",
    "banner": "voluptatem",
    "product_category_id": "consequatur",
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
    -G "http://store.wutang.com/admin/logs/1?page=dolorum&page_limit=recusandae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/logs/1"
);

let params = {
    "page": "dolorum",
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
    "http://store.wutang.com/admin/logs/1?ids=autem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/logs/1"
);

let params = {
    "ids": "autem",
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
    -G "http://store.wutang.com/admin/order?page=et&page_limit=quis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/order"
);

let params = {
    "page": "et",
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
    "http://store.wutang.com/admin/order?page=iste&page_limit=adipisci&username=ducimus&order_no=laborum&order_status=quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/order"
);

let params = {
    "page": "iste",
    "page_limit": "adipisci",
    "username": "ducimus",
    "order_no": "laborum",
    "order_status": "quia",
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
    -G "http://store.wutang.com/admin/product?page=voluptatibus&page_limit=ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product"
);

let params = {
    "page": "voluptatibus",
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
    "http://store.wutang.com/admin/product?product_category_id=eum&product_name=autem&product_name_en=officia&thumbnail=rerum&slug=neque&short_description=repellendus&short_description_en=tempora&price=saepe&sale_price=voluptatem&stock=veritatis&seo_title=inventore&seo_keyword=voluptatem&seo_description=sunt&benefit=tempora&benefit_en=dolores&tech_description=ut&tech_description_en=esse&description=voluptas&description_en=consectetur&usage=animi&usage_en=et&main_image=illo&main_image_2=iure&benefit_image=laudantium&product_video=nam&status=voluptas&rating=ratione&sold_count=sint&review_count=voluptatum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product"
);

let params = {
    "product_category_id": "eum",
    "product_name": "autem",
    "product_name_en": "officia",
    "thumbnail": "rerum",
    "slug": "neque",
    "short_description": "repellendus",
    "short_description_en": "tempora",
    "price": "saepe",
    "sale_price": "voluptatem",
    "stock": "veritatis",
    "seo_title": "inventore",
    "seo_keyword": "voluptatem",
    "seo_description": "sunt",
    "benefit": "tempora",
    "benefit_en": "dolores",
    "tech_description": "ut",
    "tech_description_en": "esse",
    "description": "voluptas",
    "description_en": "consectetur",
    "usage": "animi",
    "usage_en": "et",
    "main_image": "illo",
    "main_image_2": "iure",
    "benefit_image": "laudantium",
    "product_video": "nam",
    "status": "voluptas",
    "rating": "ratione",
    "sold_count": "sint",
    "review_count": "voluptatum",
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
    "http://store.wutang.com/admin/product/1?product_category_id=atque&product_name=corporis&product_name_en=sint&thumbnail=vel&slug=fugiat&short_description=consequatur&short_description_en=perspiciatis&price=enim&sale_price=pariatur&stock=velit&seo_title=enim&seo_keyword=culpa&seo_description=exercitationem&benefit=explicabo&benefit_en=occaecati&tech_description=quo&tech_description_en=quis&description=maxime&description_en=quia&usage=beatae&usage_en=fugit&main_image=aut&main_image_2=quas&benefit_image=similique&product_video=consequatur&status=esse&rating=reiciendis&sold_count=modi&review_count=hic" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product/1"
);

let params = {
    "product_category_id": "atque",
    "product_name": "corporis",
    "product_name_en": "sint",
    "thumbnail": "vel",
    "slug": "fugiat",
    "short_description": "consequatur",
    "short_description_en": "perspiciatis",
    "price": "enim",
    "sale_price": "pariatur",
    "stock": "velit",
    "seo_title": "enim",
    "seo_keyword": "culpa",
    "seo_description": "exercitationem",
    "benefit": "explicabo",
    "benefit_en": "occaecati",
    "tech_description": "quo",
    "tech_description_en": "quis",
    "description": "maxime",
    "description_en": "quia",
    "usage": "beatae",
    "usage_en": "fugit",
    "main_image": "aut",
    "main_image_2": "quas",
    "benefit_image": "similique",
    "product_video": "consequatur",
    "status": "esse",
    "rating": "reiciendis",
    "sold_count": "modi",
    "review_count": "hic",
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
    -G "http://store.wutang.com/admin/product_categories?page=esse&page_limit=voluptate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories"
);

let params = {
    "page": "esse",
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
    "http://store.wutang.com/admin/product_categories?title=fugit&title_en=quis&describe=soluta&describe_en=ut&banner=alias&description=rerum&description_en=voluptates&img=natus&parent_id=dolores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories"
);

let params = {
    "title": "fugit",
    "title_en": "quis",
    "describe": "soluta",
    "describe_en": "ut",
    "banner": "alias",
    "description": "rerum",
    "description_en": "voluptates",
    "img": "natus",
    "parent_id": "dolores",
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
    "http://store.wutang.com/admin/product_categories/1?title=aperiam&title_en=sit&describe=provident&describe_en=aut&banner=quia&description=ullam&description_en=sed&img=quis&parent_id=perferendis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories/1"
);

let params = {
    "title": "aperiam",
    "title_en": "sit",
    "describe": "provident",
    "describe_en": "aut",
    "banner": "quia",
    "description": "ullam",
    "description_en": "sed",
    "img": "quis",
    "parent_id": "perferendis",
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
    "http://store.wutang.com/admin/product_sku?title=dolorem&description=in&price=sapiente&stock=nostrum&product_id=corrupti" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_sku"
);

let params = {
    "title": "dolorem",
    "description": "in",
    "price": "sapiente",
    "stock": "nostrum",
    "product_id": "corrupti",
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
    "http://store.wutang.com/admin/product_sku/1?title=consequatur&description=unde&price=ab&stock=qui&product_id=facere" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_sku/1"
);

let params = {
    "title": "consequatur",
    "description": "unde",
    "price": "ab",
    "stock": "qui",
    "product_id": "facere",
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
    -G "http://store.wutang.com/admin/user?username=architecto&page=officiis&page_limit=voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user"
);

let params = {
    "username": "architecto",
    "page": "officiis",
    "page_limit": "voluptas",
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
    "http://store.wutang.com/admin/user/1?name=iusto&email=nobis&phone=temporibus&avatar=aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user/1"
);

let params = {
    "name": "iusto",
    "email": "nobis",
    "phone": "temporibus",
    "avatar": "aut",
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
    "http://store.wutang.com/admin/user/reset_password/1?oldPassword=porro&newPassword=soluta&newPassword_confirmation=ea" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user/reset_password/1"
);

let params = {
    "oldPassword": "porro",
    "newPassword": "soluta",
    "newPassword_confirmation": "ea",
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
    -G "http://store.wutang.com/admin/get_user?hash_id=ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/get_user"
);

let params = {
    "hash_id": "ut",
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
    "http://store.wutang.com/admin/user_addresses?province=consequatur&city=itaque&district=praesentium&address=est&zip=iusto&contact_name=voluptate&contact_phone=rem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses"
);

let params = {
    "province": "consequatur",
    "city": "itaque",
    "district": "praesentium",
    "address": "est",
    "zip": "iusto",
    "contact_name": "voluptate",
    "contact_phone": "rem",
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
    "http://store.wutang.com/admin/user_addresses/1?address_id=ducimus&province=repellat&city=eaque&district=molestiae&address=et&zip=ipsum&contact_name=cumque&contact_phone=ullam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses/1"
);

let params = {
    "address_id": "ducimus",
    "province": "repellat",
    "city": "eaque",
    "district": "molestiae",
    "address": "et",
    "zip": "ipsum",
    "contact_name": "cumque",
    "contact_phone": "ullam",
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
    "http://store.wutang.com/admin/user_addresses/1?address_id=consequuntur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses/1"
);

let params = {
    "address_id": "consequuntur",
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
    "http://store.wutang.com/admin/user_profiles/1?profile_id=nostrum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_profiles/1"
);

let params = {
    "profile_id": "nostrum",
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
    "http://store.wutang.com/admin/user_profiles/1?profile_id=molestiae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_profiles/1"
);

let params = {
    "profile_id": "molestiae",
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
    -d '{"name":"cumque","username":"facere","password":"voluptates","captcha_key":"numquam","captcha_code":"voluptatibus","password_question_id":8,"password_answer":"sunt"}'

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
    "name": "cumque",
    "username": "facere",
    "password": "voluptates",
    "captcha_key": "numquam",
    "captcha_code": "voluptatibus",
    "password_question_id": 8,
    "password_answer": "sunt"
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
    -G "http://store.wutang.com/api/questions?username=quis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/questions"
);

let params = {
    "username": "quis",
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
        "username": "quis"
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
    -d '{"username":"illo","password":"nesciunt"}'

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
    "username": "illo",
    "password": "nesciunt"
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
    "http://store.wutang.com/api/password_reset?username=officiis&password_question_id=velit&password_answer=sed&password=iusto&password_confirmation=autem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/password_reset"
);

let params = {
    "username": "officiis",
    "password_question_id": "velit",
    "password_answer": "sed",
    "password": "iusto",
    "password_confirmation": "autem",
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
    -d '{"oldPassword":"laboriosam","newPassword":"quia","newPassword_confirmation":"qui"}'

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
    "oldPassword": "laboriosam",
    "newPassword": "quia",
    "newPassword_confirmation": "qui"
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
    -G "http://store.wutang.com/api/order_details/1?no=delectus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/order_details/1"
);

let params = {
    "no": "delectus",
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
    -d '{"address_id":"cumque","remark":"unde"}'

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
    "address_id": "cumque",
    "remark": "unde"
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
    -d '{"no":8}'

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
    "no": 8
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

#[API] Payment

支付管理
<!-- START_a2f0cb2454c12a09b199d57c7e9ad462 -->
## Request to alipay gateway pay
发起支付宝网关支付请求(前端)

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/aligateway/pay?no=molestiae&total_amount=quo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/aligateway/pay"
);

let params = {
    "no": "molestiae",
    "total_amount": "quo",
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
        "pay_url": "https:\/\/pays.pdshjsm.cn\/pay\/index.php\/page\/aliwg?merch_id=100101&order_id=molestiae&sign=555a56cefe88419060a62de7d11ec2c0"
    },
    "code": 20001,
    "msg": "操作成功"
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
    -G "http://store.wutang.com/api/alipay/pay?no=expedita&total_amount=quasi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/alipay/pay"
);

let params = {
    "no": "expedita",
    "total_amount": "quasi",
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
`GET api/alipay/pay`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `no` |  required  | 订单号
    `total_amount` |  required  | 总金额

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


> Example response (200):

```json
{
    "data": [],
    "code": 50001,
    "msg": "数据不正确"
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
    -G "http://store.wutang.com/api/unionpay/pay?no=voluptatem&total_amount=soluta" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/unionpay/pay"
);

let params = {
    "no": "voluptatem",
    "total_amount": "soluta",
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
`GET api/unionpay/pay`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `no` |  required  | 订单号
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
            "slug": "corporis-et",
            "title": "精华",
            "title_en": "saepe sed necessitatibus",
            "describe": "Sunt maxime pariatur voluptatum aut corporis a recusandae. Ut in totam voluptates expedita consequatur sint qui quisquam. Vel nihil eveniet ad fuga nobis quis sunt.",
            "describe_en": "In eligendi id harum nam ex praesentium. Quidem accusamus doloremque quasi quasi tempore voluptatem perspiciatis. Qui debitis ad sed. Rerum velit eveniet et ullam veniam aperiam.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?55871",
            "description": "Ab omnis rerum illum molestiae.",
            "description_en": "Ratione facere distinctio delectus.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?91543",
            "parent_id": 19,
            "created_at": "2020-07-26 03:02:47",
            "updated_at": "2020-08-22 16:44:28",
            "parent_title": "乳液"
        },
        {
            "id": 2,
            "slug": "eaque-itaque",
            "title": "彩妆盘",
            "title_en": "voluptatem consequuntur est",
            "describe": "Est voluptas sapiente excepturi molestiae corrupti sequi est. Magni cumque perspiciatis dolor maxime enim soluta in. Et in voluptatem voluptatem et magni hic nisi.",
            "describe_en": "Est libero ullam vero consequatur et accusantium quia. Eos illum esse corporis esse voluptas quisquam velit. Omnis aut necessitatibus similique sint.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?24260",
            "description": "Hic quis molestiae aut.",
            "description_en": "Est dicta temporibus et.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?79015",
            "parent_id": 5,
            "created_at": "2020-08-11 02:09:31",
            "updated_at": "2020-08-14 19:01:11",
            "parent_title": "香水"
        },
        {
            "id": 3,
            "slug": "eius-et",
            "title": "防晒",
            "title_en": "quia optio et",
            "describe": "Non architecto vel voluptas et ipsa. Dolores ducimus occaecati maxime magnam illum voluptatem enim tenetur.",
            "describe_en": "Libero quia accusantium ut eum. Et optio sint quo rerum placeat dolor. Molestiae sapiente unde quia animi ut rerum aspernatur.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?54465",
            "description": "Eum sed maxime in magnam a.",
            "description_en": "Non adipisci et est laudantium.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?86890",
            "parent_id": 20,
            "created_at": "2020-08-14 22:06:50",
            "updated_at": "2020-08-13 21:37:39",
            "parent_title": "眼霜"
        },
        {
            "id": 4,
            "slug": "sit-praesentium",
            "title": "面霜",
            "title_en": "voluptas ad vel",
            "describe": "Est et voluptatibus temporibus voluptatibus. Quis totam dolorum est.",
            "describe_en": "Alias et est tenetur nihil nemo eos. Autem placeat laudantium nesciunt error. Sit est error cum itaque fugit ut sit.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?31381",
            "description": "Aspernatur omnis et est quo consequatur.",
            "description_en": "Soluta doloremque voluptatem dicta.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?57616",
            "parent_id": 12,
            "created_at": "2020-08-05 04:06:31",
            "updated_at": "2020-08-07 14:59:57",
            "parent_title": "身体护理"
        },
        {
            "id": 5,
            "slug": "aspernatur-et",
            "title": "香水",
            "title_en": "alias accusamus in",
            "describe": "Sunt dolore labore tempora qui ducimus iure. Sapiente magni reprehenderit magni quasi molestiae quia excepturi. Occaecati quia voluptas magni.",
            "describe_en": "Totam ea sunt sed rerum eum. Cumque iste sed explicabo. Necessitatibus quam deleniti iure mollitia. Amet et eligendi quia mollitia soluta explicabo.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?95642",
            "description": "Libero voluptatem officiis voluptatem.",
            "description_en": "Sint dolores voluptatem voluptas itaque rerum.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?81464",
            "parent_id": 10,
            "created_at": "2020-08-24 07:42:44",
            "updated_at": "2020-08-23 19:03:48",
            "parent_title": "防晒"
        },
        {
            "id": 6,
            "slug": "tempora-qui",
            "title": "眼线",
            "title_en": "officia ducimus quia",
            "describe": "Ea non asperiores vel in natus et incidunt. Soluta aut atque cupiditate deleniti quae veniam reiciendis. Perferendis praesentium ipsum exercitationem necessitatibus.",
            "describe_en": "Excepturi et consectetur sed voluptas expedita enim quaerat. Culpa sint vero cum.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?60788",
            "description": "Velit eum dolor qui eaque dolor iure.",
            "description_en": "Iusto iusto veritatis harum nobis.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?99069",
            "parent_id": 11,
            "created_at": "2020-07-31 20:04:07",
            "updated_at": "2020-08-09 11:16:50",
            "parent_title": "身体护理"
        },
        {
            "id": 7,
            "slug": "ut-labore",
            "title": "眼线",
            "title_en": "quia consectetur est",
            "describe": "Aut voluptas rerum quia aut soluta. Distinctio omnis quidem quia hic rerum tenetur. Sapiente placeat nesciunt voluptatibus corrupti et nostrum distinctio.",
            "describe_en": "Nihil consectetur id excepturi iusto tempora est voluptatibus. Perspiciatis aut odit aperiam odit. Magnam fugit inventore corrupti quos veniam et fuga eaque.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?41410",
            "description": "Omnis voluptatem veniam atque deserunt officia itaque.",
            "description_en": "Beatae eaque sit cupiditate veniam exercitationem.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?39627",
            "parent_id": 17,
            "created_at": "2020-08-16 16:11:43",
            "updated_at": "2020-08-08 22:25:36",
            "parent_title": "隔离"
        },
        {
            "id": 8,
            "slug": "possimus-amet",
            "title": "BB霜",
            "title_en": "et doloribus asperiores",
            "describe": "Esse in totam et dolorem. Dolorem ea est voluptatem sed quo numquam.",
            "describe_en": "Molestias enim et aut. Accusantium accusantium quas consequatur dolores. Adipisci dicta qui assumenda dolores soluta quibusdam.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?79470",
            "description": "Sint qui ducimus nesciunt doloremque.",
            "description_en": "Odio occaecati eius inventore eum eos quaerat.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?96671",
            "parent_id": 11,
            "created_at": "2020-08-06 04:42:32",
            "updated_at": "2020-08-21 11:45:34",
            "parent_title": "身体护理"
        },
        {
            "id": 9,
            "slug": "sunt-provident",
            "title": "BB霜",
            "title_en": "non quae quas",
            "describe": "Fuga saepe amet ab quo soluta ut repellendus quis. At id et nihil ad repellendus laborum modi. Necessitatibus et et totam nesciunt et quia assumenda.",
            "describe_en": "Magnam soluta recusandae asperiores. Pariatur repellat repudiandae quas distinctio dolorem quae culpa.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?30620",
            "description": "Ut sequi nihil animi velit.",
            "description_en": "Sed totam dolores aut assumenda illo.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?81422",
            "parent_id": 10,
            "created_at": "2020-08-01 15:02:09",
            "updated_at": "2020-08-15 09:38:30",
            "parent_title": "防晒"
        },
        {
            "id": 10,
            "slug": "accusamus-at",
            "title": "防晒",
            "title_en": "modi doloremque non",
            "describe": "Autem doloremque aut labore et. Id repudiandae ea quibusdam deserunt reprehenderit quia aut. Nobis officiis recusandae consequatur asperiores ut accusantium.",
            "describe_en": "Explicabo asperiores nobis similique doloremque aliquid. Nulla est magni aut dolor. Nihil aut et ipsa.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?74165",
            "description": "Libero quisquam animi numquam.",
            "description_en": "Inventore rem eos deserunt.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?76323",
            "parent_id": 16,
            "created_at": "2020-07-31 11:29:13",
            "updated_at": "2020-08-23 18:57:11",
            "parent_title": "身体护理"
        },
        {
            "id": 11,
            "slug": "suscipit-laboriosam",
            "title": "身体护理",
            "title_en": "aperiam illum incidunt",
            "describe": "Ut maxime aut iure aut. Eveniet tenetur et quo omnis debitis culpa. Quia sunt et expedita sed.",
            "describe_en": "Quos aperiam consequuntur deleniti aut. Animi corrupti qui minima quia eos omnis quo. Hic aspernatur ullam autem esse voluptates commodi. Voluptatibus quas aut tempore nemo repellat.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?33458",
            "description": "Accusantium sed quibusdam a a.",
            "description_en": "Natus pariatur et officiis architecto non.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?97467",
            "parent_id": 12,
            "created_at": "2020-08-07 20:52:29",
            "updated_at": "2020-07-31 19:47:12",
            "parent_title": "身体护理"
        },
        {
            "id": 12,
            "slug": "id-sed",
            "title": "身体护理",
            "title_en": "omnis nihil omnis",
            "describe": "Voluptatem magni tempore aliquid exercitationem excepturi quidem. Nisi alias voluptates voluptate neque. Et natus eaque tenetur vel recusandae. Sint distinctio eius deserunt velit sunt eos aut.",
            "describe_en": "Id nemo et magnam ut vitae. Eos cupiditate quo mollitia veniam alias.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?69035",
            "description": "Necessitatibus aliquid natus unde consequatur recusandae facere.",
            "description_en": "Consequuntur est non sit.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?37829",
            "parent_id": 18,
            "created_at": "2020-08-07 19:30:31",
            "updated_at": "2020-08-23 10:27:05",
            "parent_title": "卸妆"
        },
        {
            "id": 13,
            "slug": "aliquid-rem",
            "title": "洁面",
            "title_en": "minima quia pariatur",
            "describe": "Saepe hic temporibus quisquam ut quisquam id laborum. Qui qui aut temporibus. Eum aliquam est qui eos velit ut vitae.",
            "describe_en": "Quibusdam expedita dolores voluptas iusto doloremque ut. Dolorem eum omnis voluptas. Dolorem tempore mollitia iste aliquid. Sint et eum quae dolore voluptatem molestiae harum impedit.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?55829",
            "description": "Corrupti libero sit velit nulla tempore reiciendis.",
            "description_en": "Laboriosam assumenda eum non saepe.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?27746",
            "parent_id": 13,
            "created_at": "2020-08-16 13:54:49",
            "updated_at": "2020-08-12 13:17:33",
            "parent_title": "洁面"
        },
        {
            "id": 14,
            "slug": "nemo-aut",
            "title": "精油",
            "title_en": "aut et magnam",
            "describe": "Alias debitis provident ducimus autem. Ut qui voluptatem et nihil dolorem assumenda perspiciatis consequatur. Ut velit voluptatum laudantium.",
            "describe_en": "Est molestiae qui optio officiis et. Aut eos ut excepturi repellat est harum. Possimus eum veniam porro quisquam quia itaque velit non. Vel consequuntur in ut at.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?73404",
            "description": "Fuga velit delectus dolore ut harum.",
            "description_en": "Voluptas neque distinctio labore est.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?60778",
            "parent_id": 20,
            "created_at": "2020-08-14 21:15:41",
            "updated_at": "2020-07-28 17:01:16",
            "parent_title": "眼霜"
        },
        {
            "id": 15,
            "slug": "ea-neque",
            "title": "隔离",
            "title_en": "ipsam aut adipisci",
            "describe": "Sed rerum quia dolores voluptatem assumenda id sunt. Exercitationem deserunt sapiente voluptates. Iste natus repudiandae enim. Qui omnis ea velit.",
            "describe_en": "Voluptatem nulla quibusdam sint rerum asperiores ea corporis a. Ut maiores et et omnis. Autem maiores impedit dolor labore quibusdam. Quod et consequatur nesciunt sit.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?29560",
            "description": "Ad sit repellendus facilis voluptas repellendus aliquam.",
            "description_en": "Debitis et libero voluptatem non.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?54626",
            "parent_id": 7,
            "created_at": "2020-08-24 14:21:38",
            "updated_at": "2020-08-08 22:45:47",
            "parent_title": "眼线"
        },
        {
            "id": 16,
            "slug": "in-ullam",
            "title": "身体护理",
            "title_en": "soluta eum aut",
            "describe": "Et voluptatum voluptate rerum. Sapiente voluptates voluptatem blanditiis maiores aut autem. Harum sit omnis modi aliquam possimus dolores. Ut aut ut cumque.",
            "describe_en": "Fugiat quisquam quos dignissimos quis a. Ut totam quae dignissimos dolores aliquid repellendus eum harum. Velit et et velit quo et.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?81543",
            "description": "Commodi quam illo vel magni quaerat temporibus.",
            "description_en": "Architecto nihil inventore voluptatem molestiae eum sint.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?49063",
            "parent_id": 16,
            "created_at": "2020-07-29 18:10:22",
            "updated_at": "2020-07-30 08:48:19",
            "parent_title": "身体护理"
        },
        {
            "id": 17,
            "slug": "omnis-enim",
            "title": "隔离",
            "title_en": "et tempora at",
            "describe": "Expedita itaque accusamus sed voluptatem. Blanditiis maxime aliquid inventore. Quia debitis et et deleniti.",
            "describe_en": "Quos dolor itaque vel et eum provident quos. Quis rerum explicabo omnis neque maxime aliquid cupiditate. Vitae consequatur incidunt molestias sit natus a.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?58462",
            "description": "Porro odio quo reiciendis eaque sunt.",
            "description_en": "Hic neque culpa quis facere.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?15531",
            "parent_id": 20,
            "created_at": "2020-08-04 19:38:48",
            "updated_at": "2020-08-02 02:18:04",
            "parent_title": "眼霜"
        },
        {
            "id": 18,
            "slug": "tenetur-maiores",
            "title": "卸妆",
            "title_en": "eaque sed veniam",
            "describe": "Repudiandae voluptatem et minima earum voluptas. Voluptas temporibus sed ratione aliquam est. Consequatur illum dolores sit rem atque quia.",
            "describe_en": "Laudantium tempora excepturi quis magnam. Occaecati suscipit illo dolorem praesentium a aut. Maxime nesciunt ullam voluptatum sint eaque laudantium unde.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?88812",
            "description": "Aut est et non sunt.",
            "description_en": "Inventore esse voluptates voluptatem.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?52191",
            "parent_id": 17,
            "created_at": "2020-08-02 14:09:51",
            "updated_at": "2020-08-06 17:45:49",
            "parent_title": "隔离"
        },
        {
            "id": 19,
            "slug": "nisi-consectetur",
            "title": "乳液",
            "title_en": "quam quo dolore",
            "describe": "Numquam nisi est eveniet. Qui autem aut assumenda. Voluptatem enim quia facere eaque dolores.",
            "describe_en": "Quia voluptatem impedit et consectetur architecto beatae quaerat ratione. Quibusdam possimus consequatur nihil labore optio sequi. Numquam vel molestiae omnis dicta. In ab non numquam et.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?73652",
            "description": "Sed eos vitae dolore.",
            "description_en": "Eligendi aliquid voluptate minus sint a.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?68803",
            "parent_id": 18,
            "created_at": "2020-08-16 09:09:27",
            "updated_at": "2020-07-27 02:25:18",
            "parent_title": "卸妆"
        },
        {
            "id": 20,
            "slug": "rerum-quos",
            "title": "眼霜",
            "title_en": "odit optio quis",
            "describe": "Officiis placeat id omnis. Laboriosam adipisci ex illo et. Et est laudantium rem ea magni. Eaque iste accusamus vel tenetur.",
            "describe_en": "Pariatur quidem consequatur exercitationem cumque omnis accusamus. Perferendis at ex sit necessitatibus maxime. Voluptates fuga a recusandae est fuga quasi. Asperiores ea sunt qui.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?77674",
            "description": "Ipsum voluptate odit consequuntur occaecati ut ratione.",
            "description_en": "Assumenda labore quis dolor doloremque quam.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?28597",
            "parent_id": 16,
            "created_at": "2020-08-12 21:52:06",
            "updated_at": "2020-08-06 06:24:56",
            "parent_title": "身体护理"
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
                "product_category_id": 18,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "at rerum ut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?44997",
                "slug": "sit-ea",
                "short_description": "Praesentium dicta excepturi quia.",
                "short_description_en": "Provident aut dolore velit rerum. Quos iste commodi consequuntur quod corrupti ut earum. Eligendi ut quia facere atque autem eligendi omnis.",
                "price": "9518.00",
                "sale_price": "1.00",
                "stock": 726,
                "spec": null,
                "seo_title": "omnis dignissimos quo",
                "seo_keyword": "praesentium",
                "seo_description": "Beatae aut aut earum ut molestiae.",
                "benefit": "Esse ex deleniti et temporibus ut. Ipsum qui quis et quia voluptatum itaque. Cumque voluptates ipsa ut.",
                "benefit_en": "Non explicabo doloribus autem at error aspernatur ducimus. Iusto illum et nam expedita deleniti autem. Molestias sed ab id accusamus id. Et quia natus asperiores molestiae non eaque ut.",
                "tech_description": "Rerum praesentium odio quidem doloremque dolores. Ratione delectus consequuntur voluptatem quaerat laudantium. Quas beatae modi voluptatem et. Corporis eveniet id vero amet.",
                "tech_description_en": "Cum dolorem quaerat natus. Et fuga id aliquam et provident minus nemo. Dolores officia quam ex necessitatibus. Corporis magni voluptatibus quae consequatur dolorem ad.",
                "description": "Facilis harum praesentium quae accusantium reprehenderit. Dolor quaerat voluptatem nihil qui ullam ipsa. Voluptatem veniam vel possimus dolorem eaque quaerat maxime aperiam. Earum natus ex velit. Facilis quia atque magni qui repudiandae sit.",
                "description_en": "Sit molestias ipsum sit est labore aut. Perferendis non soluta sit sit in quia qui non. Et corporis enim accusantium rerum aut. Sequi maxime quos ut impedit reprehenderit dicta numquam. Repellendus neque minima doloremque excepturi blanditiis praesentium.",
                "usage": "Voluptatem dolores dolorum et placeat id. Ipsum molestiae et minus quod et quo tempore. Modi voluptatibus ipsum ea odio nam.",
                "usage_en": "Unde rerum veritatis qui eius. Cumque labore dolorem reiciendis et nemo rerum dolores. Quod laborum et dolor et. Voluptate nemo ut et ea doloribus vel earum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?28415",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?10329",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?92329",
                "product_video": null,
                "status": 1,
                "rating": 1.77,
                "sold_count": 3424,
                "review_count": 3530,
                "created_at": "2020-08-09 23:25:42",
                "updated_at": "2020-08-26 18:00:47",
                "product_category": {
                    "id": 18,
                    "slug": "tenetur-maiores",
                    "title": "卸妆",
                    "title_en": "eaque sed veniam",
                    "describe": "Repudiandae voluptatem et minima earum voluptas. Voluptas temporibus sed ratione aliquam est. Consequatur illum dolores sit rem atque quia.",
                    "describe_en": "Laudantium tempora excepturi quis magnam. Occaecati suscipit illo dolorem praesentium a aut. Maxime nesciunt ullam voluptatum sint eaque laudantium unde.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?88812",
                    "description": "Aut est et non sunt.",
                    "description_en": "Inventore esse voluptates voluptatem.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?52191",
                    "parent_id": 17,
                    "created_at": "2020-08-02 14:09:51",
                    "updated_at": "2020-08-06 17:45:49"
                }
            },
            {
                "id": 2,
                "product_category_id": 6,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "quos rerum placeat",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?18110",
                "slug": "porro-et",
                "short_description": "Rerum accusantium suscipit occaecati.",
                "short_description_en": "Itaque ut aliquid libero et molestias dolor sit. Voluptatem hic quasi porro nam veniam eaque alias.",
                "price": "8077.00",
                "sale_price": "1.00",
                "stock": 147,
                "spec": null,
                "seo_title": "sed officiis suscipit",
                "seo_keyword": "neque",
                "seo_description": "Adipisci ipsum sunt voluptates.",
                "benefit": "Iure odio temporibus aliquid distinctio et voluptas et dolores. Culpa velit facere repellat quidem doloribus cupiditate. Sequi dolores aut amet ab cupiditate.",
                "benefit_en": "Earum accusamus nihil voluptatem corporis autem voluptates doloremque. Ut nihil aut itaque. Est ullam ab est magni. Dolores illum nostrum porro nostrum.",
                "tech_description": "Ut incidunt velit dolorum consequuntur aspernatur fuga. Ut consequatur impedit ducimus. Minima sit nostrum quia ea officia.",
                "tech_description_en": "Distinctio consequatur ut quidem. Autem dicta sit sit. Dicta eum ut laborum.",
                "description": "Est beatae quis et ea cum. Ducimus earum consequatur id sunt ut quia pariatur. Impedit sunt sunt vel qui ea sit. Tempora et error non quod provident.",
                "description_en": "Veritatis reprehenderit distinctio expedita eum dolorem et ea. Ex qui quod libero minima modi totam. Reprehenderit rerum sit nostrum delectus omnis iure sit consequuntur.",
                "usage": "Molestias totam qui tempore itaque commodi fugit qui. Voluptate et molestias facilis numquam earum voluptatem. Molestiae saepe sint blanditiis.",
                "usage_en": "Temporibus reprehenderit praesentium quis et est. Esse velit repellat et autem sit architecto. Asperiores non velit natus earum illum. Delectus est eligendi facilis omnis cupiditate. Sint et amet ipsam non.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?84666",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?70497",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?60623",
                "product_video": null,
                "status": 1,
                "rating": 1.73,
                "sold_count": 9434,
                "review_count": 1578,
                "created_at": "2020-08-14 05:20:19",
                "updated_at": "2020-08-26 17:38:17",
                "product_category": {
                    "id": 6,
                    "slug": "tempora-qui",
                    "title": "眼线",
                    "title_en": "officia ducimus quia",
                    "describe": "Ea non asperiores vel in natus et incidunt. Soluta aut atque cupiditate deleniti quae veniam reiciendis. Perferendis praesentium ipsum exercitationem necessitatibus.",
                    "describe_en": "Excepturi et consectetur sed voluptas expedita enim quaerat. Culpa sint vero cum.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?60788",
                    "description": "Velit eum dolor qui eaque dolor iure.",
                    "description_en": "Iusto iusto veritatis harum nobis.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?99069",
                    "parent_id": 11,
                    "created_at": "2020-07-31 20:04:07",
                    "updated_at": "2020-08-09 11:16:50"
                }
            },
            {
                "id": 3,
                "product_category_id": 16,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "similique numquam commodi",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?22966",
                "slug": "ut-voluptatum",
                "short_description": "Accusamus fugit error et qui.",
                "short_description_en": "Quidem saepe voluptas quae aut. Laboriosam dolore necessitatibus ullam rerum vero in excepturi. Et deleniti voluptates voluptates molestiae nostrum reiciendis ut. Iure veritatis itaque ipsam eligendi.",
                "price": "3521.00",
                "sale_price": "1.00",
                "stock": 972,
                "spec": null,
                "seo_title": "non esse nobis",
                "seo_keyword": "cupiditate",
                "seo_description": "Ex aperiam quas voluptatum.",
                "benefit": "Minima est molestiae velit animi ullam. Atque quibusdam incidunt nostrum rerum cum. Sapiente inventore harum eveniet blanditiis.",
                "benefit_en": "Dicta omnis voluptas nemo quo aut non est. Ex voluptas quis ipsa non aperiam nihil. Fuga cupiditate assumenda qui ipsam aut in. Suscipit non nihil natus voluptas voluptatem quis.",
                "tech_description": "Et corrupti ipsum officia ut ipsum. Pariatur labore odio ut laboriosam culpa. Suscipit reiciendis nihil cupiditate quam quia et iste. Pariatur iusto minima voluptas voluptas. Eos autem suscipit at cupiditate necessitatibus ut.",
                "tech_description_en": "Nam velit explicabo est sint dolore explicabo laudantium optio. Harum maxime quos doloremque natus culpa omnis. Adipisci porro iusto ut. Animi et temporibus aut tempora omnis aut.",
                "description": "Sequi ipsum magnam vero vel. Ad a voluptatibus qui facere harum eum ea. Architecto et perferendis nesciunt velit non repellendus cumque ut. Harum sequi et porro libero id.",
                "description_en": "Tempora placeat nobis vitae. Aperiam eos quis vero. Sequi ullam omnis alias veniam est.",
                "usage": "Id dolor voluptas dolores id facere aut perferendis et. Molestias nesciunt odit saepe occaecati dolore. Aut tempora eaque et molestiae.",
                "usage_en": "Nobis ullam fuga corrupti impedit est et explicabo laborum. Reiciendis rem culpa fuga distinctio soluta distinctio. Veritatis officia reprehenderit et consequuntur corrupti. Commodi quasi illo voluptas ipsum esse. Quaerat doloribus quo qui nostrum magni perspiciatis.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?75619",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?40317",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?93393",
                "product_video": null,
                "status": 2,
                "rating": 2.07,
                "sold_count": 7088,
                "review_count": 5749,
                "created_at": "2020-08-22 17:11:02",
                "updated_at": "2020-08-10 09:02:25",
                "product_category": {
                    "id": 16,
                    "slug": "in-ullam",
                    "title": "身体护理",
                    "title_en": "soluta eum aut",
                    "describe": "Et voluptatum voluptate rerum. Sapiente voluptates voluptatem blanditiis maiores aut autem. Harum sit omnis modi aliquam possimus dolores. Ut aut ut cumque.",
                    "describe_en": "Fugiat quisquam quos dignissimos quis a. Ut totam quae dignissimos dolores aliquid repellendus eum harum. Velit et et velit quo et.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?81543",
                    "description": "Commodi quam illo vel magni quaerat temporibus.",
                    "description_en": "Architecto nihil inventore voluptatem molestiae eum sint.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?49063",
                    "parent_id": 16,
                    "created_at": "2020-07-29 18:10:22",
                    "updated_at": "2020-07-30 08:48:19"
                }
            },
            {
                "id": 4,
                "product_category_id": 19,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "omnis quia ullam",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?40869",
                "slug": "numquam-consequatur",
                "short_description": "Accusamus beatae et quidem.",
                "short_description_en": "Nemo praesentium atque suscipit. Voluptatem voluptatem dignissimos voluptatem esse necessitatibus. Repellendus non voluptas est inventore aut ad. Fuga non ducimus quam culpa deserunt doloremque rerum.",
                "price": "2225.00",
                "sale_price": "1.00",
                "stock": 114,
                "spec": null,
                "seo_title": "cum laudantium sit",
                "seo_keyword": "laboriosam",
                "seo_description": "Aspernatur possimus quis distinctio impedit dolores.",
                "benefit": "Beatae recusandae id quos eius fugit quo sed. Id consequatur blanditiis inventore labore. Quam sed laboriosam tenetur illo voluptas. Corporis inventore dolor eius provident saepe.",
                "benefit_en": "Qui dignissimos delectus quaerat optio. Et voluptatibus aut impedit facere qui. Reiciendis enim suscipit voluptas est architecto autem.",
                "tech_description": "Magnam est et eligendi ducimus sed quo. Ut dicta doloremque incidunt quae. Consequatur et eos ea harum.",
                "tech_description_en": "Dolores suscipit ducimus et et explicabo iure quia. Omnis totam beatae doloremque praesentium. Iusto asperiores numquam et vel qui tenetur. Quae ab reprehenderit sit dolor dolor.",
                "description": "Saepe ut totam cupiditate et repellendus facere aliquid. Quam repellendus facere consequatur ut reiciendis iusto. Similique excepturi culpa hic sunt praesentium doloremque nulla. Fugit vero saepe molestiae numquam in dolorem impedit.",
                "description_en": "Accusamus pariatur labore ab totam a cum. Incidunt et et sit quis commodi qui. Placeat eum voluptatem natus exercitationem rerum esse.",
                "usage": "Ad excepturi officiis mollitia quod. Ullam voluptas rerum adipisci totam aut et perferendis.",
                "usage_en": "Qui nesciunt eum nihil nemo aut quaerat ad rerum. Quisquam fuga labore id consequatur ipsam. Dolorum mollitia sit molestiae nobis accusantium debitis. Occaecati facilis omnis exercitationem veritatis.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?59096",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?76884",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?11153",
                "product_video": null,
                "status": 1,
                "rating": 5.37,
                "sold_count": 1712,
                "review_count": 3252,
                "created_at": "2020-08-22 01:39:22",
                "updated_at": "2020-08-26 17:18:28",
                "product_category": {
                    "id": 19,
                    "slug": "nisi-consectetur",
                    "title": "乳液",
                    "title_en": "quam quo dolore",
                    "describe": "Numquam nisi est eveniet. Qui autem aut assumenda. Voluptatem enim quia facere eaque dolores.",
                    "describe_en": "Quia voluptatem impedit et consectetur architecto beatae quaerat ratione. Quibusdam possimus consequatur nihil labore optio sequi. Numquam vel molestiae omnis dicta. In ab non numquam et.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?73652",
                    "description": "Sed eos vitae dolore.",
                    "description_en": "Eligendi aliquid voluptate minus sint a.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?68803",
                    "parent_id": 18,
                    "created_at": "2020-08-16 09:09:27",
                    "updated_at": "2020-07-27 02:25:18"
                }
            },
            {
                "id": 5,
                "product_category_id": 19,
                "product_name": "黑钻焕肤水",
                "product_name_en": "qui et eaque",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?27792",
                "slug": "sit-velit",
                "short_description": "Rerum sunt dolorem rem.",
                "short_description_en": "Cupiditate ea consequatur ea. Ea sint dolorem quo.",
                "price": "5470.00",
                "sale_price": "1.00",
                "stock": 137,
                "spec": null,
                "seo_title": "enim sunt corrupti",
                "seo_keyword": "maxime",
                "seo_description": "Accusantium quas eligendi vero est quis laudantium.",
                "benefit": "Aspernatur et sit et distinctio quas voluptatem mollitia. Ab excepturi consequuntur itaque debitis. Quas autem consectetur amet sapiente placeat maiores. Et vero at quo sapiente possimus eum ea.",
                "benefit_en": "Vero error enim laborum facilis. Sed iusto fugit voluptas facere. Minima asperiores inventore deleniti fugit.",
                "tech_description": "Et distinctio vel voluptatem quia. Officiis qui et aut ad nisi autem libero. Delectus quia hic nisi possimus facere et. Necessitatibus non facilis cum reiciendis quo modi.",
                "tech_description_en": "Exercitationem rerum expedita ea quisquam quis autem quisquam repellendus. Labore consequatur totam modi totam dolore. Consectetur laborum rerum laudantium.",
                "description": "Corrupti consequatur possimus pariatur dignissimos impedit. Velit aut sed dolor itaque reiciendis. Eligendi perferendis enim veniam non. Quos vel qui laborum doloremque magnam.",
                "description_en": "Architecto dolore corrupti delectus occaecati vel. Enim suscipit consequuntur itaque sequi quam impedit earum. Ut dolorum voluptatem illum explicabo sunt corrupti. Atque quis velit est minus adipisci enim.",
                "usage": "Repellat id rerum sunt. Laudantium nihil in vel sapiente. Tempora est est velit facilis aut ea autem.",
                "usage_en": "Aspernatur et aut et aut in accusamus. Consequatur esse ducimus possimus illo aut. Id et minus culpa eaque repudiandae. Error quis placeat ex nihil sed totam vel accusantium.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?81566",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?74827",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?83276",
                "product_video": null,
                "status": 1,
                "rating": 7.79,
                "sold_count": 3833,
                "review_count": 9733,
                "created_at": "2020-08-01 17:20:46",
                "updated_at": "2020-08-26 18:24:56",
                "product_category": {
                    "id": 19,
                    "slug": "nisi-consectetur",
                    "title": "乳液",
                    "title_en": "quam quo dolore",
                    "describe": "Numquam nisi est eveniet. Qui autem aut assumenda. Voluptatem enim quia facere eaque dolores.",
                    "describe_en": "Quia voluptatem impedit et consectetur architecto beatae quaerat ratione. Quibusdam possimus consequatur nihil labore optio sequi. Numquam vel molestiae omnis dicta. In ab non numquam et.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?73652",
                    "description": "Sed eos vitae dolore.",
                    "description_en": "Eligendi aliquid voluptate minus sint a.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?68803",
                    "parent_id": 18,
                    "created_at": "2020-08-16 09:09:27",
                    "updated_at": "2020-07-27 02:25:18"
                }
            },
            {
                "id": 6,
                "product_category_id": 11,
                "product_name": "钻石焕活面膜",
                "product_name_en": "voluptates excepturi sint",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?67558",
                "slug": "et-corrupti",
                "short_description": "Sit illo ad modi.",
                "short_description_en": "Omnis harum similique sapiente beatae modi suscipit. Tempore illum molestiae qui excepturi nisi. Ex est qui est enim et facere corporis. Explicabo veritatis modi id mollitia.",
                "price": "1779.00",
                "sale_price": "1.00",
                "stock": 34,
                "spec": null,
                "seo_title": "ducimus vel molestias",
                "seo_keyword": "nihil",
                "seo_description": "Autem unde deserunt vel facere.",
                "benefit": "Dolor omnis debitis voluptas ad rerum nam et odit. Recusandae eligendi blanditiis consequatur eaque recusandae. Praesentium provident ut atque et incidunt.",
                "benefit_en": "Beatae dicta sunt esse numquam quis qui dignissimos. Vero vel iure autem excepturi. Qui iure natus provident rerum.",
                "tech_description": "Sunt ad nostrum repudiandae aliquid ut autem eum. Rem consequatur expedita ducimus at animi laborum illo tenetur. Vitae beatae molestiae omnis sunt quibusdam. Fugit veniam magni nisi sapiente.",
                "tech_description_en": "Nobis dolores numquam sit maiores maiores. Magni voluptatem eveniet exercitationem mollitia dolorem dicta natus.",
                "description": "Facilis voluptatem autem et pariatur iure aspernatur occaecati hic. Atque exercitationem sint quod dolorum sunt ea. Excepturi et non eos.",
                "description_en": "Quis quia repellat et quisquam non quis. In ea corrupti illo voluptas ut architecto quis. Voluptatem aut tempora enim unde quas.",
                "usage": "Aut et ducimus ea. Modi necessitatibus et eos nemo voluptas voluptates est. Animi ipsam earum rerum repellendus ipsa.",
                "usage_en": "Laborum nulla dolorem ab voluptas dolores. Voluptas corporis error et accusamus earum voluptatem eaque. Dolorem repellat quos atque nam nihil vel impedit.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?91273",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?74960",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?93595",
                "product_video": null,
                "status": 3,
                "rating": 2.3,
                "sold_count": 4277,
                "review_count": 8788,
                "created_at": "2020-08-12 22:01:32",
                "updated_at": "2020-08-13 15:57:57",
                "product_category": {
                    "id": 11,
                    "slug": "suscipit-laboriosam",
                    "title": "身体护理",
                    "title_en": "aperiam illum incidunt",
                    "describe": "Ut maxime aut iure aut. Eveniet tenetur et quo omnis debitis culpa. Quia sunt et expedita sed.",
                    "describe_en": "Quos aperiam consequuntur deleniti aut. Animi corrupti qui minima quia eos omnis quo. Hic aspernatur ullam autem esse voluptates commodi. Voluptatibus quas aut tempore nemo repellat.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?33458",
                    "description": "Accusantium sed quibusdam a a.",
                    "description_en": "Natus pariatur et officiis architecto non.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?97467",
                    "parent_id": 12,
                    "created_at": "2020-08-07 20:52:29",
                    "updated_at": "2020-07-31 19:47:12"
                }
            },
            {
                "id": 7,
                "product_category_id": 2,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "magni eveniet earum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?12945",
                "slug": "incidunt-quisquam",
                "short_description": "Ut voluptatem omnis mollitia dolores error.",
                "short_description_en": "Deleniti quaerat beatae corrupti tempora quasi. Fugit in nisi et quam expedita saepe.",
                "price": "8512.00",
                "sale_price": "1.00",
                "stock": 904,
                "spec": null,
                "seo_title": "porro reprehenderit et",
                "seo_keyword": "exercitationem",
                "seo_description": "Vitae rerum qui porro sequi.",
                "benefit": "Maxime placeat repellat officia dolor. Animi corporis voluptatibus aut accusamus qui quaerat eveniet. Nesciunt tempora placeat earum beatae reprehenderit.",
                "benefit_en": "Itaque est quia non dicta aut. Dolore accusantium neque quo molestiae omnis cupiditate. Architecto voluptas accusamus cupiditate velit harum. Dicta maiores harum cupiditate accusantium et sed.",
                "tech_description": "Sit vero dolor molestias quia sunt unde. Dolore reprehenderit id iusto ducimus.",
                "tech_description_en": "Ad voluptates iste libero veniam consequatur. Ipsum voluptatem inventore voluptates.",
                "description": "Tenetur ea nemo maiores dolore rerum esse sint. Ad voluptatibus aut sed nam. Numquam ea ipsam labore aperiam dolorem illum corrupti. Consequatur autem pariatur reprehenderit qui sunt in.",
                "description_en": "Omnis libero animi unde accusamus ullam est. Magni recusandae ipsa aut harum nostrum. Dolores omnis modi adipisci nobis vel iste natus. Odit et officia voluptas eos. Aut velit pariatur voluptatem vel.",
                "usage": "Iure rerum ut neque ut laboriosam ut possimus explicabo. Laboriosam cumque aut adipisci porro sint beatae. Repellendus dolores ea culpa consequuntur enim. Sed sed libero unde voluptatem libero qui dolore.",
                "usage_en": "Sint beatae et aspernatur quia ratione est aspernatur. Ut sed est odit aliquid sit sed animi. Ex consequatur eligendi eos consequatur.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?96216",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?14191",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?51061",
                "product_video": null,
                "status": 2,
                "rating": 9.05,
                "sold_count": 3922,
                "review_count": 3273,
                "created_at": "2020-08-15 23:21:40",
                "updated_at": "2020-08-14 21:33:48",
                "product_category": {
                    "id": 2,
                    "slug": "eaque-itaque",
                    "title": "彩妆盘",
                    "title_en": "voluptatem consequuntur est",
                    "describe": "Est voluptas sapiente excepturi molestiae corrupti sequi est. Magni cumque perspiciatis dolor maxime enim soluta in. Et in voluptatem voluptatem et magni hic nisi.",
                    "describe_en": "Est libero ullam vero consequatur et accusantium quia. Eos illum esse corporis esse voluptas quisquam velit. Omnis aut necessitatibus similique sint.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?24260",
                    "description": "Hic quis molestiae aut.",
                    "description_en": "Est dicta temporibus et.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?79015",
                    "parent_id": 5,
                    "created_at": "2020-08-11 02:09:31",
                    "updated_at": "2020-08-14 19:01:11"
                }
            },
            {
                "id": 8,
                "product_category_id": 19,
                "product_name": "黑钻肌光精华",
                "product_name_en": "odio voluptates qui",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?36274",
                "slug": "et-porro",
                "short_description": "Ut nemo consequatur rem pariatur dolor.",
                "short_description_en": "Esse architecto placeat ratione sit id atque officia molestiae. Rerum est molestias hic asperiores tempore. Tempore quisquam molestiae repellat impedit ea et.",
                "price": "4962.00",
                "sale_price": "1.00",
                "stock": 147,
                "spec": null,
                "seo_title": "doloremque unde magni",
                "seo_keyword": "ipsum",
                "seo_description": "Aut in ut minus ut dolores inventore.",
                "benefit": "Distinctio eos officia mollitia reiciendis doloremque quos itaque. Voluptas maxime impedit eius qui illum iusto eius. Natus ipsum rem nobis dolores eveniet placeat dolore. Qui dignissimos consequuntur libero laboriosam ut iusto illum.",
                "benefit_en": "Cum necessitatibus consectetur eveniet maiores error alias tempore. Sed aut est et provident autem adipisci omnis fugit. Molestias ut eos pariatur quis ipsam cupiditate.",
                "tech_description": "Minima aut nisi ipsum enim adipisci animi. Maiores quis quisquam accusantium et. Ratione suscipit labore molestiae commodi sint modi occaecati. Aut minus aperiam dicta quis iure.",
                "tech_description_en": "Velit incidunt repellendus recusandae voluptate. Sunt natus distinctio ratione maxime. Eius aut neque minus qui quae. Et asperiores mollitia non omnis et voluptatem pariatur.",
                "description": "Modi ut voluptatem delectus. Facere dolorum est aut in ea sint. Similique dolor vel nulla laudantium aut. Sit id et hic in mollitia.",
                "description_en": "Commodi voluptate sit ut ullam vero. Reiciendis id dolorem quia ipsa praesentium fugiat.",
                "usage": "Dignissimos et libero sunt. Sed ullam in ipsum id illum. Debitis et fuga aut eveniet nostrum est exercitationem cum. Qui quidem earum consequuntur eveniet ratione officia.",
                "usage_en": "Suscipit rerum error voluptate. Provident error culpa doloribus amet dolores delectus voluptates maxime. Neque aut sit perferendis libero consequuntur laudantium. At hic non earum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?38097",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?74054",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?59809",
                "product_video": null,
                "status": 1,
                "rating": 6.02,
                "sold_count": 4322,
                "review_count": 3277,
                "created_at": "2020-08-01 17:23:47",
                "updated_at": "2020-07-31 18:26:23",
                "product_category": {
                    "id": 19,
                    "slug": "nisi-consectetur",
                    "title": "乳液",
                    "title_en": "quam quo dolore",
                    "describe": "Numquam nisi est eveniet. Qui autem aut assumenda. Voluptatem enim quia facere eaque dolores.",
                    "describe_en": "Quia voluptatem impedit et consectetur architecto beatae quaerat ratione. Quibusdam possimus consequatur nihil labore optio sequi. Numquam vel molestiae omnis dicta. In ab non numquam et.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?73652",
                    "description": "Sed eos vitae dolore.",
                    "description_en": "Eligendi aliquid voluptate minus sint a.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?68803",
                    "parent_id": 18,
                    "created_at": "2020-08-16 09:09:27",
                    "updated_at": "2020-07-27 02:25:18"
                }
            },
            {
                "id": 9,
                "product_category_id": 1,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "quam earum laudantium",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?69309",
                "slug": "ab-eos",
                "short_description": "Sint aut consectetur quisquam cupiditate fuga.",
                "short_description_en": "Qui eum earum ut fugiat ea. Voluptatum enim atque vitae optio consectetur blanditiis. Consequatur eveniet non minus perferendis ab. Beatae consequatur id unde occaecati.",
                "price": "3524.00",
                "sale_price": "1.00",
                "stock": 330,
                "spec": null,
                "seo_title": "pariatur suscipit esse",
                "seo_keyword": "error",
                "seo_description": "Ea voluptas illum in non earum.",
                "benefit": "Facere quidem quasi soluta cumque perspiciatis. Voluptates dolorum non et numquam qui. Facere officiis praesentium esse praesentium et.",
                "benefit_en": "Nisi rerum quia sint vel. Voluptas quos exercitationem dolor sunt. Ut et iste veritatis ad ipsum odit.",
                "tech_description": "Recusandae deserunt quos earum eum quia pariatur aut. Vitae et eos quia error velit. Porro vel voluptas explicabo error provident.",
                "tech_description_en": "Consequatur vel aut quam eos. Aut omnis ullam dolorem cum reiciendis. Consequatur itaque aliquam voluptates mollitia corrupti qui.",
                "description": "Quas temporibus tenetur cupiditate illo. Inventore ipsum porro quam. Minus dolorem laboriosam voluptatem quae voluptates quia.",
                "description_en": "Quo et ducimus provident soluta ad. Perspiciatis sint sint quia qui unde molestiae odit. Eaque qui reiciendis corporis unde. Mollitia distinctio sed harum. Omnis repellendus deleniti rerum.",
                "usage": "Explicabo sed voluptatem ex aut. Doloribus reiciendis commodi velit possimus consequatur quis. Ut quis ad laudantium est necessitatibus similique repudiandae natus.",
                "usage_en": "Rerum aut asperiores aspernatur et quisquam et. Eos quam labore in voluptatem. Ratione fugit mollitia nihil nihil magni laborum. Facere quae exercitationem ratione explicabo ut hic blanditiis.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?19346",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?33586",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?98681",
                "product_video": null,
                "status": 3,
                "rating": 1.56,
                "sold_count": 3907,
                "review_count": 7439,
                "created_at": "2020-08-23 20:47:08",
                "updated_at": "2020-07-31 18:53:04",
                "product_category": {
                    "id": 1,
                    "slug": "corporis-et",
                    "title": "精华",
                    "title_en": "saepe sed necessitatibus",
                    "describe": "Sunt maxime pariatur voluptatum aut corporis a recusandae. Ut in totam voluptates expedita consequatur sint qui quisquam. Vel nihil eveniet ad fuga nobis quis sunt.",
                    "describe_en": "In eligendi id harum nam ex praesentium. Quidem accusamus doloremque quasi quasi tempore voluptatem perspiciatis. Qui debitis ad sed. Rerum velit eveniet et ullam veniam aperiam.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?55871",
                    "description": "Ab omnis rerum illum molestiae.",
                    "description_en": "Ratione facere distinctio delectus.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?91543",
                    "parent_id": 19,
                    "created_at": "2020-07-26 03:02:47",
                    "updated_at": "2020-08-22 16:44:28"
                }
            },
            {
                "id": 10,
                "product_category_id": 4,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "facere odit vitae",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?17469",
                "slug": "ipsam-nesciunt",
                "short_description": "Suscipit tempora molestias modi ullam incidunt facilis.",
                "short_description_en": "Aut consectetur dolor non eius. Perferendis voluptatem totam voluptatum. Ducimus labore esse dolores quis consequatur quia.",
                "price": "5855.00",
                "sale_price": "1.00",
                "stock": 453,
                "spec": null,
                "seo_title": "vero omnis libero",
                "seo_keyword": "praesentium",
                "seo_description": "Ut ad dolorem quidem.",
                "benefit": "Error quia expedita in corporis nobis. Est est mollitia sequi alias est nesciunt. Et veniam impedit quasi et.",
                "benefit_en": "Est rem et ut et. Optio consequatur quia optio non quos enim quos. Et quia nobis suscipit.",
                "tech_description": "Nesciunt ratione odio molestiae sed illo velit laudantium non. Sequi itaque doloremque enim quia. Tenetur voluptatibus ipsa aut nulla dolorum minima architecto. Debitis officiis occaecati est vitae placeat eum quod.",
                "tech_description_en": "Expedita nihil repellat beatae incidunt quidem impedit rem. Sapiente architecto asperiores nam sit molestiae. Libero voluptatem consequatur fugit ut dolores suscipit amet.",
                "description": "Et maxime et perspiciatis hic minus quo enim. Dolor eos nostrum rem dolore assumenda velit soluta. Quia maxime corporis ipsam veniam ea iusto quisquam voluptatem.",
                "description_en": "Quia labore vero velit. Rerum id molestiae et ut aut. Aut nihil recusandae et aut. Praesentium eos et qui omnis inventore.",
                "usage": "Quis praesentium sint beatae hic et. Minus autem rerum dignissimos eos commodi nobis. Optio est rerum quam aut laborum soluta.",
                "usage_en": "Rem eos quo sit earum consequatur. Animi officia sint nobis exercitationem odit minima voluptatibus. Nam facilis sit sit ullam.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?53858",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?45958",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?30881",
                "product_video": null,
                "status": 2,
                "rating": 0.7,
                "sold_count": 3751,
                "review_count": 4849,
                "created_at": "2020-07-28 16:36:21",
                "updated_at": "2020-08-25 05:09:16",
                "product_category": {
                    "id": 4,
                    "slug": "sit-praesentium",
                    "title": "面霜",
                    "title_en": "voluptas ad vel",
                    "describe": "Est et voluptatibus temporibus voluptatibus. Quis totam dolorum est.",
                    "describe_en": "Alias et est tenetur nihil nemo eos. Autem placeat laudantium nesciunt error. Sit est error cum itaque fugit ut sit.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?31381",
                    "description": "Aspernatur omnis et est quo consequatur.",
                    "description_en": "Soluta doloremque voluptatem dicta.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?57616",
                    "parent_id": 12,
                    "created_at": "2020-08-05 04:06:31",
                    "updated_at": "2020-08-07 14:59:57"
                }
            },
            {
                "id": 11,
                "product_category_id": 18,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "facilis incidunt voluptatem",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?43404",
                "slug": "dolore-est",
                "short_description": "Et atque commodi quae magni.",
                "short_description_en": "Sint fuga porro sapiente in vel est. Tenetur recusandae molestiae voluptas harum. At eos id fugit sequi.",
                "price": "3523.00",
                "sale_price": "1.00",
                "stock": 102,
                "spec": null,
                "seo_title": "in ut et",
                "seo_keyword": "commodi",
                "seo_description": "Consectetur aspernatur unde velit.",
                "benefit": "Ratione dolorem dolorem mollitia molestiae debitis id. Laboriosam sed quis iure amet sed. Reiciendis eum odit velit numquam vel.",
                "benefit_en": "Eius vero in quis minus autem. Atque debitis cumque nobis. Aut adipisci molestiae nihil eos itaque provident ex exercitationem. Omnis aut dolorem omnis quis recusandae amet illum.",
                "tech_description": "Et ab nesciunt consectetur ex architecto ipsa soluta ab. Vel occaecati suscipit itaque dicta voluptas. Occaecati dolore suscipit amet dolores natus.",
                "tech_description_en": "Corporis praesentium ratione nihil ipsum rerum. Dolores est et consequatur itaque nostrum. Commodi dolor nesciunt sit et. Sed quo iste iste minima blanditiis dolores et tempora. Quia atque nemo dignissimos dolores.",
                "description": "Suscipit maiores ipsum nulla aut eos vero doloribus. Earum praesentium doloremque ullam aut ducimus beatae eum. Laudantium ad sed reiciendis neque repellendus autem. Doloremque iure quisquam reprehenderit maiores.",
                "description_en": "Fugit voluptatibus quia sed voluptatem magni rerum consequuntur magnam. Optio quia consectetur aut magni omnis eius. Illo et autem qui sapiente perspiciatis. Omnis et sint deserunt itaque.",
                "usage": "Voluptas doloremque repellat dolores fugiat soluta. Nihil ut omnis quam et odit quasi est quibusdam. Ad et iusto repudiandae nisi laudantium et cumque. Hic est aspernatur animi magni.",
                "usage_en": "Aut sit magni illo suscipit rerum eos autem. Qui nihil expedita voluptatem ducimus. Quam ex quod vel.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?60067",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?63249",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?10449",
                "product_video": null,
                "status": 1,
                "rating": 4.84,
                "sold_count": 5099,
                "review_count": 3948,
                "created_at": "2020-08-18 18:03:45",
                "updated_at": "2020-08-25 17:45:24",
                "product_category": {
                    "id": 18,
                    "slug": "tenetur-maiores",
                    "title": "卸妆",
                    "title_en": "eaque sed veniam",
                    "describe": "Repudiandae voluptatem et minima earum voluptas. Voluptas temporibus sed ratione aliquam est. Consequatur illum dolores sit rem atque quia.",
                    "describe_en": "Laudantium tempora excepturi quis magnam. Occaecati suscipit illo dolorem praesentium a aut. Maxime nesciunt ullam voluptatum sint eaque laudantium unde.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?88812",
                    "description": "Aut est et non sunt.",
                    "description_en": "Inventore esse voluptates voluptatem.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?52191",
                    "parent_id": 17,
                    "created_at": "2020-08-02 14:09:51",
                    "updated_at": "2020-08-06 17:45:49"
                }
            },
            {
                "id": 12,
                "product_category_id": 15,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "similique atque quo",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?18296",
                "slug": "voluptates-corrupti",
                "short_description": "Molestiae neque ut eaque optio.",
                "short_description_en": "Voluptatum itaque ad et est aut rerum. Ab modi alias eum quis nam officiis ut. Impedit voluptatem qui cum officia ea vitae. Officia et ea laboriosam.",
                "price": "977.00",
                "sale_price": "1.00",
                "stock": 201,
                "spec": null,
                "seo_title": "molestias velit ipsum",
                "seo_keyword": "eveniet",
                "seo_description": "Minus cumque eveniet est officia.",
                "benefit": "Est qui voluptatum ad. Amet totam velit aut possimus. Earum est et dolores velit deserunt eum eius.",
                "benefit_en": "Delectus iure voluptate ad aperiam dignissimos odio. Ut quia soluta nihil beatae sit et illo. Sunt et illo asperiores voluptatem quia exercitationem nesciunt.",
                "tech_description": "Magnam temporibus dolor eos quia facilis. Distinctio non incidunt culpa. Quo quidem dolorum sequi quasi necessitatibus.",
                "tech_description_en": "Molestias nam voluptas ratione itaque rem. Ipsum dolore velit vel inventore aut. A aperiam quis voluptas et et.",
                "description": "Autem quae tenetur consectetur neque sed aut illo labore. Autem asperiores a et. Voluptate incidunt dolore facilis consequatur ut et et maxime. Dolorem necessitatibus sed est culpa earum nam.",
                "description_en": "Necessitatibus nisi nemo repellat voluptatum. Rerum et autem amet. Molestiae tempore rem dolorum incidunt sit dolor. Incidunt esse recusandae dolor ratione odit eligendi neque.",
                "usage": "Deserunt temporibus enim et laboriosam aspernatur accusantium aut provident. Quo voluptatem accusamus in necessitatibus ut quia rem. Vel blanditiis non consequatur optio. Laudantium explicabo explicabo recusandae non. Maxime unde quam aut vel asperiores.",
                "usage_en": "Ratione explicabo neque ab aliquam quas dicta culpa. Aut voluptates nihil quaerat animi nisi. Illum reiciendis maxime ipsam nulla sed ab esse. Et magni nihil quia dolore.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?18215",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?25227",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?59614",
                "product_video": null,
                "status": 1,
                "rating": 8.44,
                "sold_count": 7237,
                "review_count": 4334,
                "created_at": "2020-08-13 11:05:55",
                "updated_at": "2020-07-30 17:37:49",
                "product_category": {
                    "id": 15,
                    "slug": "ea-neque",
                    "title": "隔离",
                    "title_en": "ipsam aut adipisci",
                    "describe": "Sed rerum quia dolores voluptatem assumenda id sunt. Exercitationem deserunt sapiente voluptates. Iste natus repudiandae enim. Qui omnis ea velit.",
                    "describe_en": "Voluptatem nulla quibusdam sint rerum asperiores ea corporis a. Ut maiores et et omnis. Autem maiores impedit dolor labore quibusdam. Quod et consequatur nesciunt sit.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?29560",
                    "description": "Ad sit repellendus facilis voluptas repellendus aliquam.",
                    "description_en": "Debitis et libero voluptatem non.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?54626",
                    "parent_id": 7,
                    "created_at": "2020-08-24 14:21:38",
                    "updated_at": "2020-08-08 22:45:47"
                }
            },
            {
                "id": 13,
                "product_category_id": 17,
                "product_name": "黑钻焕肤水",
                "product_name_en": "cumque et non",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?44872",
                "slug": "a-enim",
                "short_description": "Impedit minima accusamus quaerat.",
                "short_description_en": "Illum eum veritatis dolorem sunt. Voluptatem laudantium similique alias debitis a tempore sed. Magnam minima eos aperiam quis est aut. Possimus earum reiciendis facilis minima quo impedit ullam est.",
                "price": "4815.00",
                "sale_price": "1.00",
                "stock": 179,
                "spec": null,
                "seo_title": "qui adipisci occaecati",
                "seo_keyword": "officiis",
                "seo_description": "Rerum quidem enim et ex.",
                "benefit": "Eaque ex ut laudantium doloremque. Qui et omnis molestiae molestiae. Sit earum autem deleniti adipisci nemo. Qui aut tempora accusamus aspernatur deserunt odio.",
                "benefit_en": "Voluptas facilis cumque neque beatae sed ipsam laudantium cupiditate. Eligendi expedita esse ea et. Consequuntur qui corporis explicabo aut laborum ut laudantium incidunt. Aut perferendis quo quos esse. Officiis nihil est delectus repellat laborum optio.",
                "tech_description": "Eligendi autem voluptate possimus nihil. Numquam fugit ut illum et dolorum ut porro. Voluptatem doloribus fugiat illo.",
                "tech_description_en": "Minus sed dolores totam eaque. Velit quo qui ipsam et et mollitia laborum reiciendis. Sed quae et dolorum dolores. Voluptas atque sunt doloribus atque eligendi.",
                "description": "Accusamus et temporibus rem temporibus necessitatibus. Eveniet minima quia accusamus illum. Quae et doloremque reiciendis maiores architecto.",
                "description_en": "Aut id non delectus accusamus. Sit soluta aut ab eos possimus.",
                "usage": "Velit sint similique sunt saepe id omnis sunt quo. Pariatur rem doloremque maxime sapiente reiciendis ratione. Doloribus consequatur animi vel quo corrupti id in.",
                "usage_en": "Accusamus ea sint alias ullam consequuntur odio ab. Est voluptatum aut porro nisi officia. Soluta non iure voluptas quis unde iste iure.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?24833",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?42592",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?96999",
                "product_video": null,
                "status": 3,
                "rating": 0.84,
                "sold_count": 7380,
                "review_count": 4400,
                "created_at": "2020-08-24 03:13:19",
                "updated_at": "2020-08-25 16:57:50",
                "product_category": {
                    "id": 17,
                    "slug": "omnis-enim",
                    "title": "隔离",
                    "title_en": "et tempora at",
                    "describe": "Expedita itaque accusamus sed voluptatem. Blanditiis maxime aliquid inventore. Quia debitis et et deleniti.",
                    "describe_en": "Quos dolor itaque vel et eum provident quos. Quis rerum explicabo omnis neque maxime aliquid cupiditate. Vitae consequatur incidunt molestias sit natus a.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?58462",
                    "description": "Porro odio quo reiciendis eaque sunt.",
                    "description_en": "Hic neque culpa quis facere.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?15531",
                    "parent_id": 20,
                    "created_at": "2020-08-04 19:38:48",
                    "updated_at": "2020-08-02 02:18:04"
                }
            },
            {
                "id": 14,
                "product_category_id": 20,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "corporis ab architecto",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?69040",
                "slug": "et-et",
                "short_description": "Debitis odio reprehenderit quisquam rerum enim qui.",
                "short_description_en": "Iusto similique ut et dolore recusandae laudantium. Voluptates eos sit ab quia ea et. Enim in quia perferendis. Vel quo rerum quia odit.",
                "price": "295.00",
                "sale_price": "1.00",
                "stock": 754,
                "spec": null,
                "seo_title": "atque non repellendus",
                "seo_keyword": "iure",
                "seo_description": "Sed tempora et qui.",
                "benefit": "Expedita necessitatibus aut molestiae. Nihil culpa incidunt itaque debitis facilis. Est est eum maiores aperiam. Delectus ipsum sed numquam sapiente.",
                "benefit_en": "Adipisci et enim sequi sed consequuntur nihil. Architecto itaque ipsam et aut velit ducimus. Error voluptas tenetur aut nam.",
                "tech_description": "Voluptas et eos soluta veniam quasi nihil. Earum ut quibusdam dolor. Commodi ea error nobis cum nemo alias.",
                "tech_description_en": "Quod tempore repellendus quis ut sed laudantium sunt natus. Rerum beatae quidem nulla alias natus nihil. Eveniet aut quia et ea alias. Sunt eveniet facilis voluptas enim aut.",
                "description": "Quasi et velit ut voluptatem aut id minus. Qui illo similique et ducimus ut. Est commodi eaque eos iusto id aut accusamus et. Minima aut inventore aut et voluptas beatae magni. Esse qui nam blanditiis officia ut aut excepturi.",
                "description_en": "Consectetur facilis magnam labore numquam voluptas. Iste sit enim architecto consequuntur provident molestiae occaecati. Illum dignissimos ipsa omnis maiores dolorum eius aut. Rem rerum omnis harum omnis sit delectus autem.",
                "usage": "Ut ut aperiam fuga at eos. Non nihil a praesentium est pariatur nobis. Fugiat doloremque qui omnis aut iure eius rerum.",
                "usage_en": "Qui vero minima similique unde et modi. Eligendi ut eligendi quisquam aut. Eum omnis eligendi placeat nihil recusandae.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?19798",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?71803",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?71483",
                "product_video": null,
                "status": 2,
                "rating": 3.64,
                "sold_count": 9255,
                "review_count": 8950,
                "created_at": "2020-08-04 21:58:59",
                "updated_at": "2020-08-21 05:58:58",
                "product_category": {
                    "id": 20,
                    "slug": "rerum-quos",
                    "title": "眼霜",
                    "title_en": "odit optio quis",
                    "describe": "Officiis placeat id omnis. Laboriosam adipisci ex illo et. Et est laudantium rem ea magni. Eaque iste accusamus vel tenetur.",
                    "describe_en": "Pariatur quidem consequatur exercitationem cumque omnis accusamus. Perferendis at ex sit necessitatibus maxime. Voluptates fuga a recusandae est fuga quasi. Asperiores ea sunt qui.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?77674",
                    "description": "Ipsum voluptate odit consequuntur occaecati ut ratione.",
                    "description_en": "Assumenda labore quis dolor doloremque quam.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?28597",
                    "parent_id": 16,
                    "created_at": "2020-08-12 21:52:06",
                    "updated_at": "2020-08-06 06:24:56"
                }
            },
            {
                "id": 15,
                "product_category_id": 6,
                "product_name": "黑钻肌光精华",
                "product_name_en": "saepe et quisquam",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?36408",
                "slug": "temporibus-velit",
                "short_description": "Non qui sapiente quia doloremque iure.",
                "short_description_en": "Mollitia sapiente omnis eaque consequatur. Modi consequatur saepe suscipit laudantium eum suscipit. Esse aspernatur itaque ad architecto hic non sed. Aut laboriosam laboriosam officiis provident.",
                "price": "5573.00",
                "sale_price": "1.00",
                "stock": 898,
                "spec": null,
                "seo_title": "deleniti sit dicta",
                "seo_keyword": "velit",
                "seo_description": "Dolor quos ab maiores eius veritatis.",
                "benefit": "Debitis in maiores eum ipsa. Id nihil veniam molestias in aspernatur ut nostrum. Deserunt modi expedita itaque dolorem. Praesentium soluta quos nam ullam provident.",
                "benefit_en": "Deserunt a quibusdam consequuntur non autem beatae. Sed rerum quos magnam vero et. Est adipisci sapiente quis dolore aut praesentium voluptate.",
                "tech_description": "Ea accusamus molestias eum. Omnis expedita qui et quod mollitia ipsa modi. Sapiente suscipit non quos.",
                "tech_description_en": "Sit maxime amet minima quia sed. Aut nobis et quas excepturi. Neque non eius odit.",
                "description": "A quibusdam non nobis quis qui. Nostrum voluptatem quas qui doloremque eos. Perspiciatis voluptas eligendi aut dolores. Eius cum tempore error odit totam.",
                "description_en": "Neque ea delectus architecto cumque. Qui dignissimos voluptate sit nam. Rerum ducimus itaque aut et sapiente. Qui possimus voluptatum tenetur rem.",
                "usage": "Ipsa sapiente doloremque ut et voluptatibus voluptatem. Animi praesentium quidem nulla recusandae est id officia. Et delectus aut aut rem.",
                "usage_en": "Aut tempore libero nam ut et. Accusantium rerum commodi blanditiis nobis natus nihil non. Aut porro et explicabo ut doloribus.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?67994",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?60963",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?98439",
                "product_video": null,
                "status": 3,
                "rating": 0.11,
                "sold_count": 9312,
                "review_count": 1894,
                "created_at": "2020-08-03 12:43:25",
                "updated_at": "2020-08-25 06:18:49",
                "product_category": {
                    "id": 6,
                    "slug": "tempora-qui",
                    "title": "眼线",
                    "title_en": "officia ducimus quia",
                    "describe": "Ea non asperiores vel in natus et incidunt. Soluta aut atque cupiditate deleniti quae veniam reiciendis. Perferendis praesentium ipsum exercitationem necessitatibus.",
                    "describe_en": "Excepturi et consectetur sed voluptas expedita enim quaerat. Culpa sint vero cum.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?60788",
                    "description": "Velit eum dolor qui eaque dolor iure.",
                    "description_en": "Iusto iusto veritatis harum nobis.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?99069",
                    "parent_id": 11,
                    "created_at": "2020-07-31 20:04:07",
                    "updated_at": "2020-08-09 11:16:50"
                }
            },
            {
                "id": 16,
                "product_category_id": 2,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "quasi est ut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?83043",
                "slug": "mollitia-iusto",
                "short_description": "Laudantium suscipit eligendi aperiam doloribus.",
                "short_description_en": "Autem deserunt molestiae autem. Itaque vitae vel aut quaerat. Eligendi saepe aspernatur consequatur architecto sit ipsum id rerum. Quo odit non dolores possimus eum voluptatem.",
                "price": "1043.00",
                "sale_price": "1.00",
                "stock": 338,
                "spec": null,
                "seo_title": "ex quaerat temporibus",
                "seo_keyword": "ea",
                "seo_description": "Illo minus est non commodi.",
                "benefit": "Accusantium aut ab accusamus est unde sit. Voluptatem eos minima eveniet possimus eligendi sit. Et voluptates ex in accusamus nobis.",
                "benefit_en": "Mollitia illum modi dolores aut qui. Nihil culpa facere sit qui culpa. Et placeat animi nulla quos.",
                "tech_description": "Assumenda eveniet ex vitae officia sed recusandae. Est deserunt voluptatem voluptas molestiae. Eius sunt quia voluptate est neque voluptatem. Aut vitae suscipit quas sequi debitis nam.",
                "tech_description_en": "Impedit incidunt amet nostrum. Officiis animi est nisi rerum officia reprehenderit est qui. Ullam ex rem commodi nihil eum sequi.",
                "description": "Vel iste sed ut dolor. Laudantium odio dolores aliquam. Deserunt dignissimos facilis et delectus accusamus. Aliquam sit aperiam deleniti. Delectus qui voluptatem quis laboriosam molestiae quae.",
                "description_en": "Autem illum aliquam et voluptate occaecati voluptatem ad. Et qui ut voluptatem architecto tenetur exercitationem. Consequatur quasi aliquam iure nemo. Natus consequatur repudiandae ab velit.",
                "usage": "Doloremque qui et consequatur minus voluptatem. Exercitationem optio et non doloremque. Quidem ut cumque odio consectetur possimus delectus ullam. Voluptatem nam cum nobis repellat aperiam ut.",
                "usage_en": "Cum nisi atque eum nostrum. Aut non aspernatur sequi consectetur necessitatibus et numquam. Placeat quis doloribus cupiditate quia. Possimus qui omnis molestias velit et ut voluptatem. Id placeat et et et consectetur.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?86954",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?76349",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?16760",
                "product_video": null,
                "status": 3,
                "rating": 0.2,
                "sold_count": 9249,
                "review_count": 8924,
                "created_at": "2020-07-30 20:40:35",
                "updated_at": "2020-08-23 18:22:51",
                "product_category": {
                    "id": 2,
                    "slug": "eaque-itaque",
                    "title": "彩妆盘",
                    "title_en": "voluptatem consequuntur est",
                    "describe": "Est voluptas sapiente excepturi molestiae corrupti sequi est. Magni cumque perspiciatis dolor maxime enim soluta in. Et in voluptatem voluptatem et magni hic nisi.",
                    "describe_en": "Est libero ullam vero consequatur et accusantium quia. Eos illum esse corporis esse voluptas quisquam velit. Omnis aut necessitatibus similique sint.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?24260",
                    "description": "Hic quis molestiae aut.",
                    "description_en": "Est dicta temporibus et.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?79015",
                    "parent_id": 5,
                    "created_at": "2020-08-11 02:09:31",
                    "updated_at": "2020-08-14 19:01:11"
                }
            },
            {
                "id": 17,
                "product_category_id": 1,
                "product_name": "黑钻焕肤水",
                "product_name_en": "in quia ducimus",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?47314",
                "slug": "est-minus",
                "short_description": "Incidunt voluptatem dolores adipisci.",
                "short_description_en": "Sed et sit quo est sapiente ratione. Quod vel molestiae optio qui.",
                "price": "213.00",
                "sale_price": "1.00",
                "stock": 376,
                "spec": null,
                "seo_title": "tempora eos similique",
                "seo_keyword": "quis",
                "seo_description": "Aperiam modi perferendis et voluptas sit sapiente.",
                "benefit": "Incidunt earum qui velit inventore culpa totam. Consectetur excepturi similique voluptatem omnis cupiditate. Dignissimos sed voluptatem repudiandae quidem. Praesentium aliquam veniam laboriosam nesciunt. Voluptatem repudiandae optio illum aut.",
                "benefit_en": "Qui vitae excepturi placeat provident impedit quas quia. Corporis sit sit esse praesentium sapiente est iste velit. Consequuntur officiis minus autem quibusdam.",
                "tech_description": "Sit quia dolores mollitia voluptatem. Suscipit nisi doloribus incidunt natus eos. Aliquam autem laboriosam impedit aut.",
                "tech_description_en": "Perspiciatis qui quia voluptatem consectetur voluptas ut. Optio dignissimos rerum quod iusto nihil dicta rerum. Asperiores recusandae nam laborum dolor et voluptate voluptatem. Ex et optio et non. Ab dolor error magni veritatis rerum quo numquam officia.",
                "description": "Earum quis sit aut earum. Ut veritatis sit ducimus enim. Mollitia iure repellendus eveniet. Cum aliquid ut voluptatibus quisquam.",
                "description_en": "Et deserunt cum quasi aut dolores laborum. Ipsam voluptas quibusdam impedit tempora. Ut autem ipsa et repellendus recusandae modi.",
                "usage": "Ut amet quo molestias odio et. Assumenda aspernatur voluptas cumque voluptas quae et. Inventore consequatur sunt iste et vel quod accusantium neque. Voluptatem porro non et non esse.",
                "usage_en": "Velit suscipit et in nulla aspernatur omnis. Aperiam molestias libero saepe. Labore eius ut fuga dolores.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?93571",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?56008",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?23022",
                "product_video": null,
                "status": 1,
                "rating": 7.4,
                "sold_count": 8409,
                "review_count": 5375,
                "created_at": "2020-08-16 21:20:15",
                "updated_at": "2020-08-21 11:08:58",
                "product_category": {
                    "id": 1,
                    "slug": "corporis-et",
                    "title": "精华",
                    "title_en": "saepe sed necessitatibus",
                    "describe": "Sunt maxime pariatur voluptatum aut corporis a recusandae. Ut in totam voluptates expedita consequatur sint qui quisquam. Vel nihil eveniet ad fuga nobis quis sunt.",
                    "describe_en": "In eligendi id harum nam ex praesentium. Quidem accusamus doloremque quasi quasi tempore voluptatem perspiciatis. Qui debitis ad sed. Rerum velit eveniet et ullam veniam aperiam.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?55871",
                    "description": "Ab omnis rerum illum molestiae.",
                    "description_en": "Ratione facere distinctio delectus.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?91543",
                    "parent_id": 19,
                    "created_at": "2020-07-26 03:02:47",
                    "updated_at": "2020-08-22 16:44:28"
                }
            },
            {
                "id": 18,
                "product_category_id": 5,
                "product_name": "钻石焕活面膜",
                "product_name_en": "magnam est dicta",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?13736",
                "slug": "ut-doloribus",
                "short_description": "Veritatis commodi est et similique et eius.",
                "short_description_en": "Quia reiciendis cupiditate aspernatur sed minus aut placeat. Ea maiores quibusdam vero et qui praesentium.",
                "price": "8013.00",
                "sale_price": "1.00",
                "stock": 702,
                "spec": null,
                "seo_title": "maiores est cumque",
                "seo_keyword": "asperiores",
                "seo_description": "Aut dignissimos dicta voluptas esse.",
                "benefit": "Dignissimos doloremque sint corporis. Assumenda distinctio voluptatem nulla saepe sint porro. Consequatur esse sunt voluptatem porro facere tenetur at. Vero quos rerum qui molestias et. Illo rerum eum nam unde dolor qui ut.",
                "benefit_en": "Molestiae doloribus expedita quas error quibusdam. Nihil qui sunt est saepe. Aliquam aut et rerum. Placeat impedit laborum ut ea.",
                "tech_description": "Ut numquam voluptatem molestiae placeat perferendis. Sit maiores saepe odio impedit et. Enim voluptatem molestiae qui quas.",
                "tech_description_en": "Accusantium quod doloremque ad quae. Nesciunt ex quis ea perspiciatis quidem dolores blanditiis. Voluptatem sed nobis molestias magni id. Temporibus suscipit nulla laborum expedita aut voluptates quod.",
                "description": "Amet unde sit voluptate fugit provident. Ea illum aut magni est tenetur. Dolor consectetur dicta perspiciatis magnam. Et quaerat officiis blanditiis labore. Odit blanditiis minima in.",
                "description_en": "Quisquam sint aperiam amet dolores dolores qui. Eaque eius ut ratione dolorem. Eos illo voluptatum est nihil assumenda optio. Aliquam est sapiente debitis. In labore totam nobis impedit.",
                "usage": "Non consequatur error placeat deserunt minima inventore pariatur. Quos omnis in debitis ut officiis eius iure. Repudiandae atque accusamus aut et commodi rem dolores.",
                "usage_en": "Vel quo nihil vel. Harum et natus quisquam qui. Atque voluptates quo est accusantium doloribus.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?28774",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?89610",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?66221",
                "product_video": null,
                "status": 1,
                "rating": 9.7,
                "sold_count": 1649,
                "review_count": 6469,
                "created_at": "2020-08-17 20:01:01",
                "updated_at": "2020-08-25 14:36:03",
                "product_category": {
                    "id": 5,
                    "slug": "aspernatur-et",
                    "title": "香水",
                    "title_en": "alias accusamus in",
                    "describe": "Sunt dolore labore tempora qui ducimus iure. Sapiente magni reprehenderit magni quasi molestiae quia excepturi. Occaecati quia voluptas magni.",
                    "describe_en": "Totam ea sunt sed rerum eum. Cumque iste sed explicabo. Necessitatibus quam deleniti iure mollitia. Amet et eligendi quia mollitia soluta explicabo.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?95642",
                    "description": "Libero voluptatem officiis voluptatem.",
                    "description_en": "Sint dolores voluptatem voluptas itaque rerum.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?81464",
                    "parent_id": 10,
                    "created_at": "2020-08-24 07:42:44",
                    "updated_at": "2020-08-23 19:03:48"
                }
            },
            {
                "id": 19,
                "product_category_id": 1,
                "product_name": "钻石焕活面膜",
                "product_name_en": "illum provident voluptatem",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?53210",
                "slug": "accusantium-qui",
                "short_description": "Quasi in voluptate saepe reiciendis deleniti.",
                "short_description_en": "Quaerat quia impedit non deserunt cupiditate porro. Omnis voluptatem et enim doloremque qui. Ut maxime facilis assumenda doloremque ut.",
                "price": "9116.00",
                "sale_price": "1.00",
                "stock": 758,
                "spec": null,
                "seo_title": "velit aliquid qui",
                "seo_keyword": "maiores",
                "seo_description": "Fugiat ut nobis odit et ea.",
                "benefit": "Sit minus nisi nesciunt culpa rerum rerum est. Quis tempore labore aliquam quae. Eos sed voluptatem reprehenderit est asperiores illo. Neque itaque quis aut odit. Possimus fugit et deleniti quibusdam sed eum.",
                "benefit_en": "Iste possimus ut natus labore magni enim molestiae voluptate. Debitis quaerat cumque quis sed molestiae hic voluptas. Quae omnis reprehenderit eveniet quia. Doloremque corporis nam blanditiis.",
                "tech_description": "Est et dolorem repellendus possimus expedita quas suscipit odio. Mollitia et maiores temporibus provident ut et. Sequi nihil molestiae perspiciatis animi magni.",
                "tech_description_en": "Sint aut dolor quos perferendis. Sunt iure dolore qui sed et. Animi voluptates iste commodi inventore. Tenetur omnis officia omnis autem aut debitis.",
                "description": "Dignissimos aperiam consequuntur sit nihil quos. Magnam hic iusto molestiae. Ut voluptas tempore debitis voluptatem aliquam explicabo perspiciatis. Velit maiores ad vel a.",
                "description_en": "Alias deleniti quis omnis officiis in sit. Quis maiores repudiandae quia similique. Alias quod aliquid suscipit aliquam enim provident in. Repudiandae doloribus voluptatem odit quia optio est.",
                "usage": "Maxime beatae aliquid iusto sed. At dolor aut facere officia saepe non aut. Reiciendis totam quisquam dolor nihil. Distinctio ratione nobis placeat.",
                "usage_en": "Occaecati iure cum voluptas quo aut consequatur sit. Molestiae fugit et et. Quibusdam velit illo rem aut.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?71765",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?31869",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?44391",
                "product_video": null,
                "status": 3,
                "rating": 2.37,
                "sold_count": 2219,
                "review_count": 5146,
                "created_at": "2020-07-28 21:42:50",
                "updated_at": "2020-08-20 01:38:42",
                "product_category": {
                    "id": 1,
                    "slug": "corporis-et",
                    "title": "精华",
                    "title_en": "saepe sed necessitatibus",
                    "describe": "Sunt maxime pariatur voluptatum aut corporis a recusandae. Ut in totam voluptates expedita consequatur sint qui quisquam. Vel nihil eveniet ad fuga nobis quis sunt.",
                    "describe_en": "In eligendi id harum nam ex praesentium. Quidem accusamus doloremque quasi quasi tempore voluptatem perspiciatis. Qui debitis ad sed. Rerum velit eveniet et ullam veniam aperiam.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?55871",
                    "description": "Ab omnis rerum illum molestiae.",
                    "description_en": "Ratione facere distinctio delectus.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?91543",
                    "parent_id": 19,
                    "created_at": "2020-07-26 03:02:47",
                    "updated_at": "2020-08-22 16:44:28"
                }
            },
            {
                "id": 20,
                "product_category_id": 5,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "quam sint consequatur",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?83176",
                "slug": "odio-exercitationem",
                "short_description": "Odit ut autem quod eius ut doloribus.",
                "short_description_en": "Iste eligendi beatae minima adipisci et repellendus velit. Nihil est quo possimus et dolores in explicabo inventore. Sint quod corrupti et fuga quisquam. Et vel quidem ea odit dolores ipsam labore.",
                "price": "6139.00",
                "sale_price": "1.00",
                "stock": 871,
                "spec": null,
                "seo_title": "eum possimus qui",
                "seo_keyword": "ut",
                "seo_description": "At nisi quia totam.",
                "benefit": "Quisquam numquam recusandae cum. Rerum recusandae qui vel et. Quam et est enim magni.",
                "benefit_en": "Praesentium voluptatem rem ratione et ullam vero id soluta. Dolor nobis quia atque et explicabo blanditiis dolores. Enim delectus dolor sapiente dignissimos repudiandae.",
                "tech_description": "Non amet et error. Doloremque impedit autem voluptates quo et accusantium exercitationem. Qui consequatur nisi ipsam hic aut labore.",
                "tech_description_en": "Magni quidem esse ut quia quis aliquid voluptas. Rerum quaerat laborum et perspiciatis. Tempore recusandae rem perspiciatis vero repudiandae et voluptatem. Non voluptatem adipisci id.",
                "description": "Modi ducimus rem labore vel minus. Sunt pariatur alias voluptate dolores repellat. Sit quam expedita consequuntur quidem.",
                "description_en": "Quia esse aspernatur deserunt voluptate at quia error. Qui et ullam esse sequi laboriosam. Omnis facere maiores aut et et eum. Maiores cum minima necessitatibus voluptas ut suscipit eum.",
                "usage": "Ea quia animi et rerum. Quis error perspiciatis ipsa perspiciatis. Nisi aut veniam iste autem quia odio.",
                "usage_en": "Debitis natus est quidem repellendus maxime. Et iste molestias autem beatae dolores cum. Excepturi ut soluta saepe quas consequatur rerum. Omnis amet corrupti quasi quo. Accusantium nihil alias nemo et eveniet voluptas.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?86036",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?39799",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?44841",
                "product_video": null,
                "status": 2,
                "rating": 3.8,
                "sold_count": 3049,
                "review_count": 1332,
                "created_at": "2020-08-24 21:35:02",
                "updated_at": "2020-08-14 13:16:07",
                "product_category": {
                    "id": 5,
                    "slug": "aspernatur-et",
                    "title": "香水",
                    "title_en": "alias accusamus in",
                    "describe": "Sunt dolore labore tempora qui ducimus iure. Sapiente magni reprehenderit magni quasi molestiae quia excepturi. Occaecati quia voluptas magni.",
                    "describe_en": "Totam ea sunt sed rerum eum. Cumque iste sed explicabo. Necessitatibus quam deleniti iure mollitia. Amet et eligendi quia mollitia soluta explicabo.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?95642",
                    "description": "Libero voluptatem officiis voluptatem.",
                    "description_en": "Sint dolores voluptatem voluptas itaque rerum.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?81464",
                    "parent_id": 10,
                    "created_at": "2020-08-24 07:42:44",
                    "updated_at": "2020-08-23 19:03:48"
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
    -G "http://store.wutang.com/api/product_category/1?category_slug=est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product_category/1"
);

let params = {
    "category_slug": "est",
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
    -G "http://store.wutang.com/api/product/1?slug=consequatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product/1"
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
    -G "http://store.wutang.com/api/product_ids?id_list=quas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product_ids"
);

let params = {
    "id_list": "quas",
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
    -G "http://store.wutang.com/api/category_story/1?category_slug=omnis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/category_story/1"
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
    -G "http://store.wutang.com/api/product_new?page=voluptates&page_limit=itaque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product_new"
);

let params = {
    "page": "voluptates",
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


> Example response (200):

```json
{
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "product_category_id": 18,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "at rerum ut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?44997",
                "slug": "sit-ea",
                "short_description": "Praesentium dicta excepturi quia.",
                "short_description_en": "Provident aut dolore velit rerum. Quos iste commodi consequuntur quod corrupti ut earum. Eligendi ut quia facere atque autem eligendi omnis.",
                "price": "9518.00",
                "sale_price": "1.00",
                "stock": 726,
                "spec": null,
                "seo_title": "omnis dignissimos quo",
                "seo_keyword": "praesentium",
                "seo_description": "Beatae aut aut earum ut molestiae.",
                "benefit": "Esse ex deleniti et temporibus ut. Ipsum qui quis et quia voluptatum itaque. Cumque voluptates ipsa ut.",
                "benefit_en": "Non explicabo doloribus autem at error aspernatur ducimus. Iusto illum et nam expedita deleniti autem. Molestias sed ab id accusamus id. Et quia natus asperiores molestiae non eaque ut.",
                "tech_description": "Rerum praesentium odio quidem doloremque dolores. Ratione delectus consequuntur voluptatem quaerat laudantium. Quas beatae modi voluptatem et. Corporis eveniet id vero amet.",
                "tech_description_en": "Cum dolorem quaerat natus. Et fuga id aliquam et provident minus nemo. Dolores officia quam ex necessitatibus. Corporis magni voluptatibus quae consequatur dolorem ad.",
                "description": "Facilis harum praesentium quae accusantium reprehenderit. Dolor quaerat voluptatem nihil qui ullam ipsa. Voluptatem veniam vel possimus dolorem eaque quaerat maxime aperiam. Earum natus ex velit. Facilis quia atque magni qui repudiandae sit.",
                "description_en": "Sit molestias ipsum sit est labore aut. Perferendis non soluta sit sit in quia qui non. Et corporis enim accusantium rerum aut. Sequi maxime quos ut impedit reprehenderit dicta numquam. Repellendus neque minima doloremque excepturi blanditiis praesentium.",
                "usage": "Voluptatem dolores dolorum et placeat id. Ipsum molestiae et minus quod et quo tempore. Modi voluptatibus ipsum ea odio nam.",
                "usage_en": "Unde rerum veritatis qui eius. Cumque labore dolorem reiciendis et nemo rerum dolores. Quod laborum et dolor et. Voluptate nemo ut et ea doloribus vel earum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?28415",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?10329",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?92329",
                "product_video": null,
                "status": 1,
                "rating": 1.77,
                "sold_count": 3424,
                "review_count": 3530,
                "created_at": "2020-08-09 23:25:42",
                "updated_at": "2020-08-26 18:00:47",
                "product_category": {
                    "id": 18,
                    "slug": "tenetur-maiores",
                    "title": "卸妆",
                    "title_en": "eaque sed veniam",
                    "describe": "Repudiandae voluptatem et minima earum voluptas. Voluptas temporibus sed ratione aliquam est. Consequatur illum dolores sit rem atque quia.",
                    "describe_en": "Laudantium tempora excepturi quis magnam. Occaecati suscipit illo dolorem praesentium a aut. Maxime nesciunt ullam voluptatum sint eaque laudantium unde.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?88812",
                    "description": "Aut est et non sunt.",
                    "description_en": "Inventore esse voluptates voluptatem.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?52191",
                    "parent_id": 17,
                    "created_at": "2020-08-02 14:09:51",
                    "updated_at": "2020-08-06 17:45:49"
                }
            },
            {
                "id": 2,
                "product_category_id": 6,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "quos rerum placeat",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?18110",
                "slug": "porro-et",
                "short_description": "Rerum accusantium suscipit occaecati.",
                "short_description_en": "Itaque ut aliquid libero et molestias dolor sit. Voluptatem hic quasi porro nam veniam eaque alias.",
                "price": "8077.00",
                "sale_price": "1.00",
                "stock": 147,
                "spec": null,
                "seo_title": "sed officiis suscipit",
                "seo_keyword": "neque",
                "seo_description": "Adipisci ipsum sunt voluptates.",
                "benefit": "Iure odio temporibus aliquid distinctio et voluptas et dolores. Culpa velit facere repellat quidem doloribus cupiditate. Sequi dolores aut amet ab cupiditate.",
                "benefit_en": "Earum accusamus nihil voluptatem corporis autem voluptates doloremque. Ut nihil aut itaque. Est ullam ab est magni. Dolores illum nostrum porro nostrum.",
                "tech_description": "Ut incidunt velit dolorum consequuntur aspernatur fuga. Ut consequatur impedit ducimus. Minima sit nostrum quia ea officia.",
                "tech_description_en": "Distinctio consequatur ut quidem. Autem dicta sit sit. Dicta eum ut laborum.",
                "description": "Est beatae quis et ea cum. Ducimus earum consequatur id sunt ut quia pariatur. Impedit sunt sunt vel qui ea sit. Tempora et error non quod provident.",
                "description_en": "Veritatis reprehenderit distinctio expedita eum dolorem et ea. Ex qui quod libero minima modi totam. Reprehenderit rerum sit nostrum delectus omnis iure sit consequuntur.",
                "usage": "Molestias totam qui tempore itaque commodi fugit qui. Voluptate et molestias facilis numquam earum voluptatem. Molestiae saepe sint blanditiis.",
                "usage_en": "Temporibus reprehenderit praesentium quis et est. Esse velit repellat et autem sit architecto. Asperiores non velit natus earum illum. Delectus est eligendi facilis omnis cupiditate. Sint et amet ipsam non.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?84666",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?70497",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?60623",
                "product_video": null,
                "status": 1,
                "rating": 1.73,
                "sold_count": 9434,
                "review_count": 1578,
                "created_at": "2020-08-14 05:20:19",
                "updated_at": "2020-08-26 17:38:17",
                "product_category": {
                    "id": 6,
                    "slug": "tempora-qui",
                    "title": "眼线",
                    "title_en": "officia ducimus quia",
                    "describe": "Ea non asperiores vel in natus et incidunt. Soluta aut atque cupiditate deleniti quae veniam reiciendis. Perferendis praesentium ipsum exercitationem necessitatibus.",
                    "describe_en": "Excepturi et consectetur sed voluptas expedita enim quaerat. Culpa sint vero cum.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?60788",
                    "description": "Velit eum dolor qui eaque dolor iure.",
                    "description_en": "Iusto iusto veritatis harum nobis.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?99069",
                    "parent_id": 11,
                    "created_at": "2020-07-31 20:04:07",
                    "updated_at": "2020-08-09 11:16:50"
                }
            },
            {
                "id": 4,
                "product_category_id": 19,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "omnis quia ullam",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?40869",
                "slug": "numquam-consequatur",
                "short_description": "Accusamus beatae et quidem.",
                "short_description_en": "Nemo praesentium atque suscipit. Voluptatem voluptatem dignissimos voluptatem esse necessitatibus. Repellendus non voluptas est inventore aut ad. Fuga non ducimus quam culpa deserunt doloremque rerum.",
                "price": "2225.00",
                "sale_price": "1.00",
                "stock": 114,
                "spec": null,
                "seo_title": "cum laudantium sit",
                "seo_keyword": "laboriosam",
                "seo_description": "Aspernatur possimus quis distinctio impedit dolores.",
                "benefit": "Beatae recusandae id quos eius fugit quo sed. Id consequatur blanditiis inventore labore. Quam sed laboriosam tenetur illo voluptas. Corporis inventore dolor eius provident saepe.",
                "benefit_en": "Qui dignissimos delectus quaerat optio. Et voluptatibus aut impedit facere qui. Reiciendis enim suscipit voluptas est architecto autem.",
                "tech_description": "Magnam est et eligendi ducimus sed quo. Ut dicta doloremque incidunt quae. Consequatur et eos ea harum.",
                "tech_description_en": "Dolores suscipit ducimus et et explicabo iure quia. Omnis totam beatae doloremque praesentium. Iusto asperiores numquam et vel qui tenetur. Quae ab reprehenderit sit dolor dolor.",
                "description": "Saepe ut totam cupiditate et repellendus facere aliquid. Quam repellendus facere consequatur ut reiciendis iusto. Similique excepturi culpa hic sunt praesentium doloremque nulla. Fugit vero saepe molestiae numquam in dolorem impedit.",
                "description_en": "Accusamus pariatur labore ab totam a cum. Incidunt et et sit quis commodi qui. Placeat eum voluptatem natus exercitationem rerum esse.",
                "usage": "Ad excepturi officiis mollitia quod. Ullam voluptas rerum adipisci totam aut et perferendis.",
                "usage_en": "Qui nesciunt eum nihil nemo aut quaerat ad rerum. Quisquam fuga labore id consequatur ipsam. Dolorum mollitia sit molestiae nobis accusantium debitis. Occaecati facilis omnis exercitationem veritatis.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?59096",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?76884",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?11153",
                "product_video": null,
                "status": 1,
                "rating": 5.37,
                "sold_count": 1712,
                "review_count": 3252,
                "created_at": "2020-08-22 01:39:22",
                "updated_at": "2020-08-26 17:18:28",
                "product_category": {
                    "id": 19,
                    "slug": "nisi-consectetur",
                    "title": "乳液",
                    "title_en": "quam quo dolore",
                    "describe": "Numquam nisi est eveniet. Qui autem aut assumenda. Voluptatem enim quia facere eaque dolores.",
                    "describe_en": "Quia voluptatem impedit et consectetur architecto beatae quaerat ratione. Quibusdam possimus consequatur nihil labore optio sequi. Numquam vel molestiae omnis dicta. In ab non numquam et.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?73652",
                    "description": "Sed eos vitae dolore.",
                    "description_en": "Eligendi aliquid voluptate minus sint a.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?68803",
                    "parent_id": 18,
                    "created_at": "2020-08-16 09:09:27",
                    "updated_at": "2020-07-27 02:25:18"
                }
            },
            {
                "id": 5,
                "product_category_id": 19,
                "product_name": "黑钻焕肤水",
                "product_name_en": "qui et eaque",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?27792",
                "slug": "sit-velit",
                "short_description": "Rerum sunt dolorem rem.",
                "short_description_en": "Cupiditate ea consequatur ea. Ea sint dolorem quo.",
                "price": "5470.00",
                "sale_price": "1.00",
                "stock": 137,
                "spec": null,
                "seo_title": "enim sunt corrupti",
                "seo_keyword": "maxime",
                "seo_description": "Accusantium quas eligendi vero est quis laudantium.",
                "benefit": "Aspernatur et sit et distinctio quas voluptatem mollitia. Ab excepturi consequuntur itaque debitis. Quas autem consectetur amet sapiente placeat maiores. Et vero at quo sapiente possimus eum ea.",
                "benefit_en": "Vero error enim laborum facilis. Sed iusto fugit voluptas facere. Minima asperiores inventore deleniti fugit.",
                "tech_description": "Et distinctio vel voluptatem quia. Officiis qui et aut ad nisi autem libero. Delectus quia hic nisi possimus facere et. Necessitatibus non facilis cum reiciendis quo modi.",
                "tech_description_en": "Exercitationem rerum expedita ea quisquam quis autem quisquam repellendus. Labore consequatur totam modi totam dolore. Consectetur laborum rerum laudantium.",
                "description": "Corrupti consequatur possimus pariatur dignissimos impedit. Velit aut sed dolor itaque reiciendis. Eligendi perferendis enim veniam non. Quos vel qui laborum doloremque magnam.",
                "description_en": "Architecto dolore corrupti delectus occaecati vel. Enim suscipit consequuntur itaque sequi quam impedit earum. Ut dolorum voluptatem illum explicabo sunt corrupti. Atque quis velit est minus adipisci enim.",
                "usage": "Repellat id rerum sunt. Laudantium nihil in vel sapiente. Tempora est est velit facilis aut ea autem.",
                "usage_en": "Aspernatur et aut et aut in accusamus. Consequatur esse ducimus possimus illo aut. Id et minus culpa eaque repudiandae. Error quis placeat ex nihil sed totam vel accusantium.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?81566",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?74827",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?83276",
                "product_video": null,
                "status": 1,
                "rating": 7.79,
                "sold_count": 3833,
                "review_count": 9733,
                "created_at": "2020-08-01 17:20:46",
                "updated_at": "2020-08-26 18:24:56",
                "product_category": {
                    "id": 19,
                    "slug": "nisi-consectetur",
                    "title": "乳液",
                    "title_en": "quam quo dolore",
                    "describe": "Numquam nisi est eveniet. Qui autem aut assumenda. Voluptatem enim quia facere eaque dolores.",
                    "describe_en": "Quia voluptatem impedit et consectetur architecto beatae quaerat ratione. Quibusdam possimus consequatur nihil labore optio sequi. Numquam vel molestiae omnis dicta. In ab non numquam et.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?73652",
                    "description": "Sed eos vitae dolore.",
                    "description_en": "Eligendi aliquid voluptate minus sint a.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?68803",
                    "parent_id": 18,
                    "created_at": "2020-08-16 09:09:27",
                    "updated_at": "2020-07-27 02:25:18"
                }
            },
            {
                "id": 8,
                "product_category_id": 19,
                "product_name": "黑钻肌光精华",
                "product_name_en": "odio voluptates qui",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?36274",
                "slug": "et-porro",
                "short_description": "Ut nemo consequatur rem pariatur dolor.",
                "short_description_en": "Esse architecto placeat ratione sit id atque officia molestiae. Rerum est molestias hic asperiores tempore. Tempore quisquam molestiae repellat impedit ea et.",
                "price": "4962.00",
                "sale_price": "1.00",
                "stock": 147,
                "spec": null,
                "seo_title": "doloremque unde magni",
                "seo_keyword": "ipsum",
                "seo_description": "Aut in ut minus ut dolores inventore.",
                "benefit": "Distinctio eos officia mollitia reiciendis doloremque quos itaque. Voluptas maxime impedit eius qui illum iusto eius. Natus ipsum rem nobis dolores eveniet placeat dolore. Qui dignissimos consequuntur libero laboriosam ut iusto illum.",
                "benefit_en": "Cum necessitatibus consectetur eveniet maiores error alias tempore. Sed aut est et provident autem adipisci omnis fugit. Molestias ut eos pariatur quis ipsam cupiditate.",
                "tech_description": "Minima aut nisi ipsum enim adipisci animi. Maiores quis quisquam accusantium et. Ratione suscipit labore molestiae commodi sint modi occaecati. Aut minus aperiam dicta quis iure.",
                "tech_description_en": "Velit incidunt repellendus recusandae voluptate. Sunt natus distinctio ratione maxime. Eius aut neque minus qui quae. Et asperiores mollitia non omnis et voluptatem pariatur.",
                "description": "Modi ut voluptatem delectus. Facere dolorum est aut in ea sint. Similique dolor vel nulla laudantium aut. Sit id et hic in mollitia.",
                "description_en": "Commodi voluptate sit ut ullam vero. Reiciendis id dolorem quia ipsa praesentium fugiat.",
                "usage": "Dignissimos et libero sunt. Sed ullam in ipsum id illum. Debitis et fuga aut eveniet nostrum est exercitationem cum. Qui quidem earum consequuntur eveniet ratione officia.",
                "usage_en": "Suscipit rerum error voluptate. Provident error culpa doloribus amet dolores delectus voluptates maxime. Neque aut sit perferendis libero consequuntur laudantium. At hic non earum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?38097",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?74054",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?59809",
                "product_video": null,
                "status": 1,
                "rating": 6.02,
                "sold_count": 4322,
                "review_count": 3277,
                "created_at": "2020-08-01 17:23:47",
                "updated_at": "2020-07-31 18:26:23",
                "product_category": {
                    "id": 19,
                    "slug": "nisi-consectetur",
                    "title": "乳液",
                    "title_en": "quam quo dolore",
                    "describe": "Numquam nisi est eveniet. Qui autem aut assumenda. Voluptatem enim quia facere eaque dolores.",
                    "describe_en": "Quia voluptatem impedit et consectetur architecto beatae quaerat ratione. Quibusdam possimus consequatur nihil labore optio sequi. Numquam vel molestiae omnis dicta. In ab non numquam et.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?73652",
                    "description": "Sed eos vitae dolore.",
                    "description_en": "Eligendi aliquid voluptate minus sint a.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?68803",
                    "parent_id": 18,
                    "created_at": "2020-08-16 09:09:27",
                    "updated_at": "2020-07-27 02:25:18"
                }
            },
            {
                "id": 11,
                "product_category_id": 18,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "facilis incidunt voluptatem",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?43404",
                "slug": "dolore-est",
                "short_description": "Et atque commodi quae magni.",
                "short_description_en": "Sint fuga porro sapiente in vel est. Tenetur recusandae molestiae voluptas harum. At eos id fugit sequi.",
                "price": "3523.00",
                "sale_price": "1.00",
                "stock": 102,
                "spec": null,
                "seo_title": "in ut et",
                "seo_keyword": "commodi",
                "seo_description": "Consectetur aspernatur unde velit.",
                "benefit": "Ratione dolorem dolorem mollitia molestiae debitis id. Laboriosam sed quis iure amet sed. Reiciendis eum odit velit numquam vel.",
                "benefit_en": "Eius vero in quis minus autem. Atque debitis cumque nobis. Aut adipisci molestiae nihil eos itaque provident ex exercitationem. Omnis aut dolorem omnis quis recusandae amet illum.",
                "tech_description": "Et ab nesciunt consectetur ex architecto ipsa soluta ab. Vel occaecati suscipit itaque dicta voluptas. Occaecati dolore suscipit amet dolores natus.",
                "tech_description_en": "Corporis praesentium ratione nihil ipsum rerum. Dolores est et consequatur itaque nostrum. Commodi dolor nesciunt sit et. Sed quo iste iste minima blanditiis dolores et tempora. Quia atque nemo dignissimos dolores.",
                "description": "Suscipit maiores ipsum nulla aut eos vero doloribus. Earum praesentium doloremque ullam aut ducimus beatae eum. Laudantium ad sed reiciendis neque repellendus autem. Doloremque iure quisquam reprehenderit maiores.",
                "description_en": "Fugit voluptatibus quia sed voluptatem magni rerum consequuntur magnam. Optio quia consectetur aut magni omnis eius. Illo et autem qui sapiente perspiciatis. Omnis et sint deserunt itaque.",
                "usage": "Voluptas doloremque repellat dolores fugiat soluta. Nihil ut omnis quam et odit quasi est quibusdam. Ad et iusto repudiandae nisi laudantium et cumque. Hic est aspernatur animi magni.",
                "usage_en": "Aut sit magni illo suscipit rerum eos autem. Qui nihil expedita voluptatem ducimus. Quam ex quod vel.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?60067",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?63249",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?10449",
                "product_video": null,
                "status": 1,
                "rating": 4.84,
                "sold_count": 5099,
                "review_count": 3948,
                "created_at": "2020-08-18 18:03:45",
                "updated_at": "2020-08-25 17:45:24",
                "product_category": {
                    "id": 18,
                    "slug": "tenetur-maiores",
                    "title": "卸妆",
                    "title_en": "eaque sed veniam",
                    "describe": "Repudiandae voluptatem et minima earum voluptas. Voluptas temporibus sed ratione aliquam est. Consequatur illum dolores sit rem atque quia.",
                    "describe_en": "Laudantium tempora excepturi quis magnam. Occaecati suscipit illo dolorem praesentium a aut. Maxime nesciunt ullam voluptatum sint eaque laudantium unde.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?88812",
                    "description": "Aut est et non sunt.",
                    "description_en": "Inventore esse voluptates voluptatem.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?52191",
                    "parent_id": 17,
                    "created_at": "2020-08-02 14:09:51",
                    "updated_at": "2020-08-06 17:45:49"
                }
            },
            {
                "id": 12,
                "product_category_id": 15,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "similique atque quo",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?18296",
                "slug": "voluptates-corrupti",
                "short_description": "Molestiae neque ut eaque optio.",
                "short_description_en": "Voluptatum itaque ad et est aut rerum. Ab modi alias eum quis nam officiis ut. Impedit voluptatem qui cum officia ea vitae. Officia et ea laboriosam.",
                "price": "977.00",
                "sale_price": "1.00",
                "stock": 201,
                "spec": null,
                "seo_title": "molestias velit ipsum",
                "seo_keyword": "eveniet",
                "seo_description": "Minus cumque eveniet est officia.",
                "benefit": "Est qui voluptatum ad. Amet totam velit aut possimus. Earum est et dolores velit deserunt eum eius.",
                "benefit_en": "Delectus iure voluptate ad aperiam dignissimos odio. Ut quia soluta nihil beatae sit et illo. Sunt et illo asperiores voluptatem quia exercitationem nesciunt.",
                "tech_description": "Magnam temporibus dolor eos quia facilis. Distinctio non incidunt culpa. Quo quidem dolorum sequi quasi necessitatibus.",
                "tech_description_en": "Molestias nam voluptas ratione itaque rem. Ipsum dolore velit vel inventore aut. A aperiam quis voluptas et et.",
                "description": "Autem quae tenetur consectetur neque sed aut illo labore. Autem asperiores a et. Voluptate incidunt dolore facilis consequatur ut et et maxime. Dolorem necessitatibus sed est culpa earum nam.",
                "description_en": "Necessitatibus nisi nemo repellat voluptatum. Rerum et autem amet. Molestiae tempore rem dolorum incidunt sit dolor. Incidunt esse recusandae dolor ratione odit eligendi neque.",
                "usage": "Deserunt temporibus enim et laboriosam aspernatur accusantium aut provident. Quo voluptatem accusamus in necessitatibus ut quia rem. Vel blanditiis non consequatur optio. Laudantium explicabo explicabo recusandae non. Maxime unde quam aut vel asperiores.",
                "usage_en": "Ratione explicabo neque ab aliquam quas dicta culpa. Aut voluptates nihil quaerat animi nisi. Illum reiciendis maxime ipsam nulla sed ab esse. Et magni nihil quia dolore.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?18215",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?25227",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?59614",
                "product_video": null,
                "status": 1,
                "rating": 8.44,
                "sold_count": 7237,
                "review_count": 4334,
                "created_at": "2020-08-13 11:05:55",
                "updated_at": "2020-07-30 17:37:49",
                "product_category": {
                    "id": 15,
                    "slug": "ea-neque",
                    "title": "隔离",
                    "title_en": "ipsam aut adipisci",
                    "describe": "Sed rerum quia dolores voluptatem assumenda id sunt. Exercitationem deserunt sapiente voluptates. Iste natus repudiandae enim. Qui omnis ea velit.",
                    "describe_en": "Voluptatem nulla quibusdam sint rerum asperiores ea corporis a. Ut maiores et et omnis. Autem maiores impedit dolor labore quibusdam. Quod et consequatur nesciunt sit.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?29560",
                    "description": "Ad sit repellendus facilis voluptas repellendus aliquam.",
                    "description_en": "Debitis et libero voluptatem non.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?54626",
                    "parent_id": 7,
                    "created_at": "2020-08-24 14:21:38",
                    "updated_at": "2020-08-08 22:45:47"
                }
            },
            {
                "id": 17,
                "product_category_id": 1,
                "product_name": "黑钻焕肤水",
                "product_name_en": "in quia ducimus",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?47314",
                "slug": "est-minus",
                "short_description": "Incidunt voluptatem dolores adipisci.",
                "short_description_en": "Sed et sit quo est sapiente ratione. Quod vel molestiae optio qui.",
                "price": "213.00",
                "sale_price": "1.00",
                "stock": 376,
                "spec": null,
                "seo_title": "tempora eos similique",
                "seo_keyword": "quis",
                "seo_description": "Aperiam modi perferendis et voluptas sit sapiente.",
                "benefit": "Incidunt earum qui velit inventore culpa totam. Consectetur excepturi similique voluptatem omnis cupiditate. Dignissimos sed voluptatem repudiandae quidem. Praesentium aliquam veniam laboriosam nesciunt. Voluptatem repudiandae optio illum aut.",
                "benefit_en": "Qui vitae excepturi placeat provident impedit quas quia. Corporis sit sit esse praesentium sapiente est iste velit. Consequuntur officiis minus autem quibusdam.",
                "tech_description": "Sit quia dolores mollitia voluptatem. Suscipit nisi doloribus incidunt natus eos. Aliquam autem laboriosam impedit aut.",
                "tech_description_en": "Perspiciatis qui quia voluptatem consectetur voluptas ut. Optio dignissimos rerum quod iusto nihil dicta rerum. Asperiores recusandae nam laborum dolor et voluptate voluptatem. Ex et optio et non. Ab dolor error magni veritatis rerum quo numquam officia.",
                "description": "Earum quis sit aut earum. Ut veritatis sit ducimus enim. Mollitia iure repellendus eveniet. Cum aliquid ut voluptatibus quisquam.",
                "description_en": "Et deserunt cum quasi aut dolores laborum. Ipsam voluptas quibusdam impedit tempora. Ut autem ipsa et repellendus recusandae modi.",
                "usage": "Ut amet quo molestias odio et. Assumenda aspernatur voluptas cumque voluptas quae et. Inventore consequatur sunt iste et vel quod accusantium neque. Voluptatem porro non et non esse.",
                "usage_en": "Velit suscipit et in nulla aspernatur omnis. Aperiam molestias libero saepe. Labore eius ut fuga dolores.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?93571",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?56008",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?23022",
                "product_video": null,
                "status": 1,
                "rating": 7.4,
                "sold_count": 8409,
                "review_count": 5375,
                "created_at": "2020-08-16 21:20:15",
                "updated_at": "2020-08-21 11:08:58",
                "product_category": {
                    "id": 1,
                    "slug": "corporis-et",
                    "title": "精华",
                    "title_en": "saepe sed necessitatibus",
                    "describe": "Sunt maxime pariatur voluptatum aut corporis a recusandae. Ut in totam voluptates expedita consequatur sint qui quisquam. Vel nihil eveniet ad fuga nobis quis sunt.",
                    "describe_en": "In eligendi id harum nam ex praesentium. Quidem accusamus doloremque quasi quasi tempore voluptatem perspiciatis. Qui debitis ad sed. Rerum velit eveniet et ullam veniam aperiam.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?55871",
                    "description": "Ab omnis rerum illum molestiae.",
                    "description_en": "Ratione facere distinctio delectus.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?91543",
                    "parent_id": 19,
                    "created_at": "2020-07-26 03:02:47",
                    "updated_at": "2020-08-22 16:44:28"
                }
            },
            {
                "id": 18,
                "product_category_id": 5,
                "product_name": "钻石焕活面膜",
                "product_name_en": "magnam est dicta",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?13736",
                "slug": "ut-doloribus",
                "short_description": "Veritatis commodi est et similique et eius.",
                "short_description_en": "Quia reiciendis cupiditate aspernatur sed minus aut placeat. Ea maiores quibusdam vero et qui praesentium.",
                "price": "8013.00",
                "sale_price": "1.00",
                "stock": 702,
                "spec": null,
                "seo_title": "maiores est cumque",
                "seo_keyword": "asperiores",
                "seo_description": "Aut dignissimos dicta voluptas esse.",
                "benefit": "Dignissimos doloremque sint corporis. Assumenda distinctio voluptatem nulla saepe sint porro. Consequatur esse sunt voluptatem porro facere tenetur at. Vero quos rerum qui molestias et. Illo rerum eum nam unde dolor qui ut.",
                "benefit_en": "Molestiae doloribus expedita quas error quibusdam. Nihil qui sunt est saepe. Aliquam aut et rerum. Placeat impedit laborum ut ea.",
                "tech_description": "Ut numquam voluptatem molestiae placeat perferendis. Sit maiores saepe odio impedit et. Enim voluptatem molestiae qui quas.",
                "tech_description_en": "Accusantium quod doloremque ad quae. Nesciunt ex quis ea perspiciatis quidem dolores blanditiis. Voluptatem sed nobis molestias magni id. Temporibus suscipit nulla laborum expedita aut voluptates quod.",
                "description": "Amet unde sit voluptate fugit provident. Ea illum aut magni est tenetur. Dolor consectetur dicta perspiciatis magnam. Et quaerat officiis blanditiis labore. Odit blanditiis minima in.",
                "description_en": "Quisquam sint aperiam amet dolores dolores qui. Eaque eius ut ratione dolorem. Eos illo voluptatum est nihil assumenda optio. Aliquam est sapiente debitis. In labore totam nobis impedit.",
                "usage": "Non consequatur error placeat deserunt minima inventore pariatur. Quos omnis in debitis ut officiis eius iure. Repudiandae atque accusamus aut et commodi rem dolores.",
                "usage_en": "Vel quo nihil vel. Harum et natus quisquam qui. Atque voluptates quo est accusantium doloribus.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?28774",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?89610",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?66221",
                "product_video": null,
                "status": 1,
                "rating": 9.7,
                "sold_count": 1649,
                "review_count": 6469,
                "created_at": "2020-08-17 20:01:01",
                "updated_at": "2020-08-25 14:36:03",
                "product_category": {
                    "id": 5,
                    "slug": "aspernatur-et",
                    "title": "香水",
                    "title_en": "alias accusamus in",
                    "describe": "Sunt dolore labore tempora qui ducimus iure. Sapiente magni reprehenderit magni quasi molestiae quia excepturi. Occaecati quia voluptas magni.",
                    "describe_en": "Totam ea sunt sed rerum eum. Cumque iste sed explicabo. Necessitatibus quam deleniti iure mollitia. Amet et eligendi quia mollitia soluta explicabo.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?95642",
                    "description": "Libero voluptatem officiis voluptatem.",
                    "description_en": "Sint dolores voluptatem voluptas itaque rerum.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?81464",
                    "parent_id": 10,
                    "created_at": "2020-08-24 07:42:44",
                    "updated_at": "2020-08-23 19:03:48"
                }
            },
            {
                "id": 24,
                "product_category_id": 2,
                "product_name": "黑钻肌光精华",
                "product_name_en": "molestiae quod id",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?59553",
                "slug": "cupiditate-architecto",
                "short_description": "At et fugit omnis rem iste.",
                "short_description_en": "Commodi dolore necessitatibus amet quo beatae. Sed aut veritatis architecto in rerum est. Iure nisi numquam voluptas expedita. Explicabo non magni vel.",
                "price": "7805.00",
                "sale_price": "1.00",
                "stock": 53,
                "spec": null,
                "seo_title": "ut beatae qui",
                "seo_keyword": "voluptatem",
                "seo_description": "Quis ut sit magni magni cupiditate.",
                "benefit": "Qui quo aut et vel quia sed voluptatum. Nisi quas consequuntur sed vitae earum et.",
                "benefit_en": "Consequatur deleniti adipisci quo. Aspernatur quam molestias perspiciatis tempora tempore facilis delectus. Labore vel reprehenderit et eos.",
                "tech_description": "Minima omnis neque in veniam sint. Consequatur iste sed est ut. Soluta libero ipsa et est maiores qui sed. Necessitatibus minus rerum quos quidem.",
                "tech_description_en": "Dignissimos quod velit facilis. Aut et veritatis nesciunt quam. Fugit voluptas et mollitia animi temporibus quod. Quos possimus ut accusamus non veniam maxime. Magnam voluptas tempora quia ullam aliquid.",
                "description": "Tempora ex tempore eveniet soluta. Nesciunt aspernatur eaque provident et non. Modi modi numquam omnis officia quasi recusandae animi.",
                "description_en": "Voluptas magnam corporis vero eos rerum vitae. Voluptate ad modi in aut. Optio et ea voluptates consectetur. Consectetur ratione accusantium nihil vero itaque itaque quia.",
                "usage": "Qui sit sed rerum. Eum eius id consequatur praesentium.",
                "usage_en": "Aut excepturi dignissimos velit consequuntur et debitis. Ullam quia animi ut et. Voluptatem molestias enim officiis numquam ratione. Consequatur deserunt et reprehenderit et et ea odit. Nam debitis quia non qui ut et quia nihil.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?65761",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?90260",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?30802",
                "product_video": null,
                "status": 1,
                "rating": 3.33,
                "sold_count": 7327,
                "review_count": 4154,
                "created_at": "2020-07-27 06:27:51",
                "updated_at": "2020-08-01 04:54:40",
                "product_category": {
                    "id": 2,
                    "slug": "eaque-itaque",
                    "title": "彩妆盘",
                    "title_en": "voluptatem consequuntur est",
                    "describe": "Est voluptas sapiente excepturi molestiae corrupti sequi est. Magni cumque perspiciatis dolor maxime enim soluta in. Et in voluptatem voluptatem et magni hic nisi.",
                    "describe_en": "Est libero ullam vero consequatur et accusantium quia. Eos illum esse corporis esse voluptas quisquam velit. Omnis aut necessitatibus similique sint.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?24260",
                    "description": "Hic quis molestiae aut.",
                    "description_en": "Est dicta temporibus et.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?79015",
                    "parent_id": 5,
                    "created_at": "2020-08-11 02:09:31",
                    "updated_at": "2020-08-14 19:01:11"
                }
            },
            {
                "id": 28,
                "product_category_id": 18,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "vero eum assumenda",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?89324",
                "slug": "officiis-molestiae",
                "short_description": "Dolores pariatur aut sed.",
                "short_description_en": "Odio omnis animi est commodi. Qui quo saepe voluptatem et. Necessitatibus eum corrupti hic qui aut.",
                "price": "6535.00",
                "sale_price": "1.00",
                "stock": 938,
                "spec": null,
                "seo_title": "consequatur consequuntur aliquam",
                "seo_keyword": "odit",
                "seo_description": "Beatae ad ut quo quis ea dolore.",
                "benefit": "Itaque veritatis et et explicabo tempore et rem. Maxime soluta accusamus autem qui voluptatem reiciendis sapiente. Odit aspernatur laboriosam autem ipsum sit et.",
                "benefit_en": "A voluptatem nihil similique. Voluptates soluta ut velit voluptatem libero perspiciatis. Modi quia non dolor accusamus.",
                "tech_description": "Quas occaecati sit magnam quasi. Quae dolore in qui voluptatibus. Nostrum repellat saepe a est nihil magni ea. Molestias necessitatibus doloribus fugiat sunt nihil.",
                "tech_description_en": "Expedita autem molestiae molestiae eum harum dolor rerum. Officia eos temporibus accusantium et vel magnam aspernatur. Molestias et dicta architecto illum architecto odio quia consequatur. Et nulla error consequuntur quia ab.",
                "description": "Ea accusantium assumenda officia doloremque. Quia aspernatur velit delectus ut. Corporis libero et vel magnam ducimus.",
                "description_en": "Sequi incidunt ullam saepe incidunt fugiat exercitationem voluptatum. Non dolorum velit est rem optio perspiciatis minima fugit.",
                "usage": "Ipsam debitis incidunt est est praesentium atque. Doloribus id quis molestiae ut rem sapiente. Aliquam voluptates eius enim. Quo asperiores totam ullam distinctio. Et consequatur sit officiis eaque doloremque.",
                "usage_en": "Harum ut et itaque consequatur temporibus. Maiores et nesciunt nisi id animi laboriosam dolorem. Tempora blanditiis et id nisi sunt totam.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?94897",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?53073",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?50472",
                "product_video": null,
                "status": 1,
                "rating": 4.84,
                "sold_count": 9586,
                "review_count": 6305,
                "created_at": "2020-07-31 03:21:52",
                "updated_at": "2020-07-31 18:17:05",
                "product_category": {
                    "id": 18,
                    "slug": "tenetur-maiores",
                    "title": "卸妆",
                    "title_en": "eaque sed veniam",
                    "describe": "Repudiandae voluptatem et minima earum voluptas. Voluptas temporibus sed ratione aliquam est. Consequatur illum dolores sit rem atque quia.",
                    "describe_en": "Laudantium tempora excepturi quis magnam. Occaecati suscipit illo dolorem praesentium a aut. Maxime nesciunt ullam voluptatum sint eaque laudantium unde.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?88812",
                    "description": "Aut est et non sunt.",
                    "description_en": "Inventore esse voluptates voluptatem.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?52191",
                    "parent_id": 17,
                    "created_at": "2020-08-02 14:09:51",
                    "updated_at": "2020-08-06 17:45:49"
                }
            },
            {
                "id": 37,
                "product_category_id": 19,
                "product_name": "黑钻肌光精华",
                "product_name_en": "et dolorem quibusdam",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?51873",
                "slug": "saepe-corporis",
                "short_description": "Aliquam error perferendis accusantium dolor reiciendis deleniti numquam.",
                "short_description_en": "Asperiores eos voluptatem ipsum beatae eius temporibus ipsum. Cumque quaerat sint consectetur est qui non. Nemo quia aut atque possimus.",
                "price": "3051.00",
                "sale_price": "1.00",
                "stock": 387,
                "spec": null,
                "seo_title": "id nihil est",
                "seo_keyword": "necessitatibus",
                "seo_description": "Minima in quas quis.",
                "benefit": "Dolor quis odio hic in labore mollitia amet. Laudantium quasi quibusdam vero accusantium ex earum. Id tempore tenetur aperiam id.",
                "benefit_en": "Soluta exercitationem officiis ipsam quisquam voluptatem sit. Vel voluptates quas doloribus tenetur voluptates. Recusandae suscipit officiis voluptatem aut.",
                "tech_description": "Quia ipsam dolor vitae voluptas laboriosam ullam. Dolorum in illum qui. Eos atque aut adipisci eaque et maxime. Rerum non fugiat ut id.",
                "tech_description_en": "Natus neque blanditiis recusandae. Illum tempora quidem debitis et. Qui consectetur velit sit occaecati at earum.",
                "description": "Iure ut non fugit cupiditate fuga officia reiciendis et. Architecto et suscipit itaque nostrum iure officia hic. Repellat dolores repellendus voluptatum quia porro facilis nemo.",
                "description_en": "Ea et asperiores veniam optio et ipsum sequi. Tenetur quia eum quaerat nobis architecto temporibus et. Possimus facilis sint architecto iure vel.",
                "usage": "Reiciendis minus impedit voluptatibus quam. Occaecati quia occaecati non tempore laudantium repellat culpa. Assumenda fugit impedit voluptatem facilis sequi exercitationem vel est. Laborum nam libero doloremque maxime culpa illum.",
                "usage_en": "Eos qui voluptatem perspiciatis delectus ipsa. Ipsum culpa sit quidem laborum alias eaque. Velit cumque iste velit voluptatem itaque magnam. Vel alias cumque vel tempora praesentium officiis et.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?22959",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?25800",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?84592",
                "product_video": null,
                "status": 1,
                "rating": 6.82,
                "sold_count": 6460,
                "review_count": 4189,
                "created_at": "2020-08-25 11:44:57",
                "updated_at": "2020-08-16 18:40:57",
                "product_category": {
                    "id": 19,
                    "slug": "nisi-consectetur",
                    "title": "乳液",
                    "title_en": "quam quo dolore",
                    "describe": "Numquam nisi est eveniet. Qui autem aut assumenda. Voluptatem enim quia facere eaque dolores.",
                    "describe_en": "Quia voluptatem impedit et consectetur architecto beatae quaerat ratione. Quibusdam possimus consequatur nihil labore optio sequi. Numquam vel molestiae omnis dicta. In ab non numquam et.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?73652",
                    "description": "Sed eos vitae dolore.",
                    "description_en": "Eligendi aliquid voluptate minus sint a.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?68803",
                    "parent_id": 18,
                    "created_at": "2020-08-16 09:09:27",
                    "updated_at": "2020-07-27 02:25:18"
                }
            },
            {
                "id": 39,
                "product_category_id": 9,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "et quo aut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?79731",
                "slug": "incidunt-aspernatur",
                "short_description": "Occaecati assumenda ducimus libero ducimus ut.",
                "short_description_en": "Eaque possimus quasi illo est. Vel magni est laborum harum veniam sint ab.",
                "price": "1705.00",
                "sale_price": "1.00",
                "stock": 765,
                "spec": null,
                "seo_title": "qui libero occaecati",
                "seo_keyword": "neque",
                "seo_description": "Eius blanditiis voluptas ipsum.",
                "benefit": "Qui quos similique minima omnis rem facere rem. Sit ad placeat facilis necessitatibus optio. Molestiae ullam qui aut ad corrupti vel. Qui amet vitae facilis non qui.",
                "benefit_en": "Rem reiciendis optio blanditiis consectetur non quibusdam. Eveniet aspernatur qui fugit. Aspernatur nihil impedit maiores.",
                "tech_description": "Aut eos praesentium omnis. Dolorem porro dolorem ipsam ut iure officia. Quia illo accusantium et ad.",
                "tech_description_en": "Maiores et sint omnis sit est ullam ea. Ab rerum quo architecto. Sint laborum necessitatibus aliquid ut quas qui. Qui in assumenda tenetur omnis quia. Sit omnis excepturi quo non sequi dignissimos unde rerum.",
                "description": "Est laborum ut laudantium consequatur totam deserunt. Consectetur quia qui perspiciatis vero. Modi officia ratione enim laborum.",
                "description_en": "Temporibus cumque deserunt sint corporis voluptates facere soluta perspiciatis. Sequi nihil perferendis molestiae blanditiis eaque dolores dolores. Natus est fuga dolor quae. Dolore est voluptates cupiditate sunt omnis.",
                "usage": "Aspernatur qui aut eius dolor. Ea vero facere ea quisquam. Molestiae consectetur beatae neque sequi. Non error veniam occaecati nisi deleniti non eum aut. Corporis aut magni harum est quo voluptatem sit ab.",
                "usage_en": "Ad voluptatem incidunt aspernatur doloribus consequatur saepe. Est non ea officia vel occaecati. Ut sit at est totam qui.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?19436",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?55033",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?96784",
                "product_video": null,
                "status": 1,
                "rating": 9.59,
                "sold_count": 8736,
                "review_count": 7287,
                "created_at": "2020-08-08 07:44:31",
                "updated_at": "2020-08-15 10:19:15",
                "product_category": {
                    "id": 9,
                    "slug": "sunt-provident",
                    "title": "BB霜",
                    "title_en": "non quae quas",
                    "describe": "Fuga saepe amet ab quo soluta ut repellendus quis. At id et nihil ad repellendus laborum modi. Necessitatibus et et totam nesciunt et quia assumenda.",
                    "describe_en": "Magnam soluta recusandae asperiores. Pariatur repellat repudiandae quas distinctio dolorem quae culpa.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?30620",
                    "description": "Ut sequi nihil animi velit.",
                    "description_en": "Sed totam dolores aut assumenda illo.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?81422",
                    "parent_id": 10,
                    "created_at": "2020-08-01 15:02:09",
                    "updated_at": "2020-08-15 09:38:30"
                }
            },
            {
                "id": 44,
                "product_category_id": 4,
                "product_name": "黑钻肌光精华",
                "product_name_en": "voluptatem voluptatem amet",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?24413",
                "slug": "sunt-qui",
                "short_description": "Omnis rerum et similique suscipit.",
                "short_description_en": "Possimus voluptatem alias odit consequatur enim. Ducimus laudantium assumenda expedita maxime. Consequatur sit ea est commodi eum et omnis.",
                "price": "2917.00",
                "sale_price": "1.00",
                "stock": 101,
                "spec": null,
                "seo_title": "suscipit reiciendis in",
                "seo_keyword": "voluptatibus",
                "seo_description": "Reiciendis similique est et iusto.",
                "benefit": "Non nemo accusantium officia. Iusto molestiae error nesciunt qui. Sed magni culpa eum. Similique magnam et consequatur.",
                "benefit_en": "At rem unde optio. Tempore consequuntur mollitia libero animi. Non odit aliquam minus ut quas a. Qui similique in reiciendis eum odio quae. Esse omnis tempora aspernatur laborum aut et.",
                "tech_description": "Qui nesciunt voluptatem odit debitis cum autem ut. Dolorem alias officiis consectetur voluptatibus nulla. Numquam tenetur eligendi quis est illum aut voluptatem.",
                "tech_description_en": "Tenetur vel tenetur magni magnam et. Qui placeat ad expedita nemo nihil cumque. Enim similique autem omnis dolores atque rerum. Fugiat qui praesentium voluptas qui perspiciatis. Dolore aut aperiam mollitia deleniti odit.",
                "description": "Quia deserunt reprehenderit aut suscipit nostrum optio tempore. Distinctio quaerat repudiandae debitis amet aliquam ipsum dignissimos. Voluptas fuga voluptatum quam est.",
                "description_en": "Atque tempora voluptates temporibus amet accusantium esse nisi. Delectus consequatur sapiente accusamus fugiat harum et. Id unde iste in.",
                "usage": "Est ipsam quasi voluptatem suscipit. Dolor sunt mollitia molestias. Voluptate distinctio harum libero sit consequuntur ea perferendis. Quas ullam voluptas dolorum et ex ipsum delectus. Possimus nostrum voluptas inventore cupiditate.",
                "usage_en": "Consequuntur aspernatur corporis modi nulla tempore eum pariatur. Aliquam fuga accusantium omnis at.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?23151",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?25152",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?61989",
                "product_video": null,
                "status": 1,
                "rating": 6.44,
                "sold_count": 8714,
                "review_count": 6325,
                "created_at": "2020-08-20 07:41:13",
                "updated_at": "2020-08-01 23:57:07",
                "product_category": {
                    "id": 4,
                    "slug": "sit-praesentium",
                    "title": "面霜",
                    "title_en": "voluptas ad vel",
                    "describe": "Est et voluptatibus temporibus voluptatibus. Quis totam dolorum est.",
                    "describe_en": "Alias et est tenetur nihil nemo eos. Autem placeat laudantium nesciunt error. Sit est error cum itaque fugit ut sit.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?31381",
                    "description": "Aspernatur omnis et est quo consequatur.",
                    "description_en": "Soluta doloremque voluptatem dicta.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?57616",
                    "parent_id": 12,
                    "created_at": "2020-08-05 04:06:31",
                    "updated_at": "2020-08-07 14:59:57"
                }
            },
            {
                "id": 46,
                "product_category_id": 13,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "quo voluptatem sit",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?34798",
                "slug": "fuga-aut",
                "short_description": "Modi quam ea minus sunt.",
                "short_description_en": "Voluptatem repellendus qui tenetur ea. Officiis officiis ratione ratione voluptates dicta. Ratione ipsa voluptatem sit tenetur. Explicabo provident qui ratione cum reiciendis.",
                "price": "5890.00",
                "sale_price": "1.00",
                "stock": 573,
                "spec": null,
                "seo_title": "unde incidunt dolor",
                "seo_keyword": "est",
                "seo_description": "Perferendis ipsam et rerum nobis.",
                "benefit": "Et ut corrupti rerum optio occaecati dolorem. Non beatae ut dolorem rem. Aspernatur et assumenda ullam in dolorum rerum quo.",
                "benefit_en": "Voluptas sed unde repellat odio dolorem error. Et est perferendis hic provident et tenetur. Unde neque iure aut deleniti adipisci. Totam eveniet illum aliquid veniam provident deserunt.",
                "tech_description": "Aut maxime laudantium qui tempore dignissimos ut vel. Eum sunt voluptas voluptatem officiis. Assumenda aut et ullam veritatis fugit quasi. Delectus quia voluptate nemo voluptatum doloremque. Soluta expedita voluptas aut soluta.",
                "tech_description_en": "Magni perspiciatis ad nisi ut. Rerum excepturi dolor ratione sapiente fugiat cum earum. Libero voluptate libero iste aut accusamus autem deleniti. Laborum error vel et id. At et quaerat quasi.",
                "description": "Quia ipsam et aliquam eius repellendus enim. Est et tempora repudiandae eum. Veritatis numquam et quidem voluptatibus quis aut. Minima aut et odio.",
                "description_en": "Quisquam iusto nihil et qui tempora vel. Et quae eos maiores quo sed aut omnis. Perferendis repellat ullam ipsa sed. Et sequi omnis ut velit alias aspernatur tempore.",
                "usage": "Sint iste maxime est error aut quia. Quia porro dignissimos similique. Et blanditiis porro qui sunt asperiores est.",
                "usage_en": "Dolorem a quia dolorum molestiae similique nemo. Quo maiores vel molestias deleniti error veniam repudiandae. Adipisci sed ut optio. Enim cum consectetur veritatis laudantium est dolorem.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?46899",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?70381",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?54155",
                "product_video": null,
                "status": 1,
                "rating": 0.09,
                "sold_count": 7518,
                "review_count": 4604,
                "created_at": "2020-07-29 17:09:25",
                "updated_at": "2020-07-28 01:12:55",
                "product_category": {
                    "id": 13,
                    "slug": "aliquid-rem",
                    "title": "洁面",
                    "title_en": "minima quia pariatur",
                    "describe": "Saepe hic temporibus quisquam ut quisquam id laborum. Qui qui aut temporibus. Eum aliquam est qui eos velit ut vitae.",
                    "describe_en": "Quibusdam expedita dolores voluptas iusto doloremque ut. Dolorem eum omnis voluptas. Dolorem tempore mollitia iste aliquid. Sint et eum quae dolore voluptatem molestiae harum impedit.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?55829",
                    "description": "Corrupti libero sit velit nulla tempore reiciendis.",
                    "description_en": "Laboriosam assumenda eum non saepe.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?27746",
                    "parent_id": 13,
                    "created_at": "2020-08-16 13:54:49",
                    "updated_at": "2020-08-12 13:17:33"
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
        "total": 16
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
    -d '{"product_list":[{"product_id":13}]}'

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
            "product_id": 13
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
    "http://store.wutang.com/api/shop_carts/1?type=quis&product_id=occaecati&amount=aliquam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/shop_carts/1"
);

let params = {
    "type": "quis",
    "product_id": "occaecati",
    "amount": "aliquam",
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
    "http://store.wutang.com/api/shop_carts/1?product_id=aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/shop_carts/1"
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
    -d '{"province":"ut","city":"ea","district":"explicabo","address":"tempore","zip":9,"contact_name":"voluptatem","contact_phone":10}'

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
    "province": "ut",
    "city": "ea",
    "district": "explicabo",
    "address": "tempore",
    "zip": 9,
    "contact_name": "voluptatem",
    "contact_phone": 10
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
    "http://store.wutang.com/api/user_addresses/1?province=perferendis&city=fugiat&district=et&address=saepe&zip=consequatur&contact_name=officia&contact_phone=esse" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_addresses/1"
);

let params = {
    "province": "perferendis",
    "city": "fugiat",
    "district": "et",
    "address": "saepe",
    "zip": "consequatur",
    "contact_name": "officia",
    "contact_phone": "esse",
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
    "http://store.wutang.com/api/user_profiles?profile_id=repudiandae&phone=ad&real_name=est&sex=consequatur&birthday=possimus&age=temporibus&province=commodi&city=qui&district=deserunt&address=veniam&zip=quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_profiles"
);

let params = {
    "profile_id": "repudiandae",
    "phone": "ad",
    "real_name": "est",
    "sex": "consequatur",
    "birthday": "possimus",
    "age": "temporibus",
    "province": "commodi",
    "city": "qui",
    "district": "deserunt",
    "address": "veniam",
    "zip": "quia",
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
    "http://store.wutang.com/api/wish_list?product_id=cumque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/wish_list"
);

let params = {
    "product_id": "cumque",
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
    "http://store.wutang.com/api/wish_list?product_id=voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/wish_list"
);

let params = {
    "product_id": "voluptas",
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
    -G "http://store.wutang.com/api/response_code?10001=hic&10003=ratione&20001=magnam&40001=corporis&40003=et&40004=nostrum&40005=omnis&50001=voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/response_code"
);

let params = {
    "10001": "hic",
    "10003": "ratione",
    "20001": "magnam",
    "40001": "corporis",
    "40003": "et",
    "40004": "nostrum",
    "40005": "omnis",
    "50001": "voluptas",
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


