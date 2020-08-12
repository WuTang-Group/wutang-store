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

#general


<!-- START_77797615aeaa4fce9a94150989aed46f -->
## ResponseCode explain
本方法仅作返回code通用说明(无其他作用)

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/response_code?10001=et&10003=qui&20001=sunt&40001=repudiandae&40003=tempore&40004=excepturi&40005=odio&50001=dolorem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/response_code"
);

let params = {
    "10001": "et",
    "10003": "qui",
    "20001": "sunt",
    "40001": "repudiandae",
    "40003": "tempore",
    "40004": "excepturi",
    "40005": "odio",
    "50001": "dolorem",
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

<!-- START_a2f0cb2454c12a09b199d57c7e9ad462 -->
## Request to alipay gateway pay
发起支付宝网关支付请求(前端)

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/aligateway/pay?no=aut&total_amount=eaque&subject=at" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/aligateway/pay"
);

let params = {
    "no": "aut",
    "total_amount": "eaque",
    "subject": "at",
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

<!-- START_2e1c96dcffcfe7e0eb58d6408f1d619e -->
## Register user
用户注册

> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"natus","username":"repudiandae","password":"voluptatibus","captcha_key":"quia","captcha_code":"accusamus","password_question_id":20,"password_answer":"dolor"}'

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
    "name": "natus",
    "username": "repudiandae",
    "password": "voluptatibus",
    "captcha_key": "quia",
    "captcha_code": "accusamus",
    "password_question_id": 20,
    "password_answer": "dolor"
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
## get user password question
获取用户的密保问题

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/questions?username=quam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/questions"
);

let params = {
    "username": "quam",
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
        "username": "quam"
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
    -d '{"username":"quisquam","password":"aut"}'

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
    "username": "quisquam",
    "password": "aut"
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
## reset password
重置密码(未登录)

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/password_reset?username=quibusdam&password_question_id=tempore&password_answer=dolores&password=occaecati&password_confirmation=nisi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/password_reset"
);

let params = {
    "username": "quibusdam",
    "password_question_id": "tempore",
    "password_answer": "dolores",
    "password": "occaecati",
    "password_confirmation": "nisi",
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
            "slug": "deleniti-vel",
            "title": "爽肤水",
            "title_en": "et fugit nisi",
            "describe": "Enim corrupti repellat temporibus. Aut occaecati sequi aut atque similique minima iste. Harum optio consequatur maiores ducimus sequi et laudantium quae.",
            "describe_en": "Occaecati officiis consequuntur laudantium magni. Qui laborum nulla fugit ut. Et voluptas itaque at quo incidunt.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?94695",
            "description": "Voluptatum atque illum et sed architecto qui.",
            "description_en": "Quaerat qui enim quod.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?88143",
            "parent_id": 12,
            "created_at": "2020-07-28 20:11:17",
            "updated_at": "2020-07-18 03:44:49",
            "parent_title": "精华"
        },
        {
            "id": 2,
            "slug": "minima-aut",
            "title": "BB霜",
            "title_en": "eligendi et animi",
            "describe": "Qui at consequatur minus nam quam odio. Amet amet eum qui maiores eligendi.",
            "describe_en": "Culpa eum sed distinctio reprehenderit. Exercitationem dolores et harum iste tempora. Commodi ut placeat voluptas quia praesentium illo ratione.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?50334",
            "description": "Consequatur dolore possimus est est molestias in.",
            "description_en": "Non blanditiis quo vel explicabo rerum similique.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?57387",
            "parent_id": 3,
            "created_at": "2020-08-03 13:32:24",
            "updated_at": "2020-08-09 10:00:37",
            "parent_title": "防晒"
        },
        {
            "id": 3,
            "slug": "aspernatur-assumenda",
            "title": "防晒",
            "title_en": "accusantium dignissimos omnis",
            "describe": "Nemo aliquam eius omnis quia optio. Quia ea excepturi quia aperiam. In voluptatibus autem similique vero est nihil iure ipsum.",
            "describe_en": "Ea non eos iste eveniet. Quia aperiam est aut similique dolorum. Hic est voluptas sit est dolore aut. Eligendi sed iusto inventore rerum repellendus neque.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?91423",
            "description": "Eum omnis consectetur explicabo doloremque recusandae rerum.",
            "description_en": "Non sit eveniet rem.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?97254",
            "parent_id": 19,
            "created_at": "2020-08-02 23:44:36",
            "updated_at": "2020-07-22 09:37:27",
            "parent_title": "身体护理"
        },
        {
            "id": 4,
            "slug": "ea-quo",
            "title": "卸妆",
            "title_en": "tempora necessitatibus magni",
            "describe": "Amet ut nobis accusantium reiciendis et eos. Iusto exercitationem asperiores et iusto nemo consequatur. Qui et eligendi voluptas accusamus id quo dignissimos. Eveniet voluptas aliquid nisi facere.",
            "describe_en": "Ut est velit et quod mollitia accusantium eos. Est quidem natus eaque fuga voluptas ex est. Minima vitae magnam exercitationem consectetur nobis.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?99408",
            "description": "Expedita ut dolore et totam culpa eos.",
            "description_en": "Ducimus ullam cupiditate est dolor iure aliquid.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?43022",
            "parent_id": 5,
            "created_at": "2020-08-01 04:31:34",
            "updated_at": "2020-07-24 10:13:10",
            "parent_title": "BB霜"
        },
        {
            "id": 5,
            "slug": "a-eligendi",
            "title": "BB霜",
            "title_en": "facere quis sed",
            "describe": "Porro maxime nemo voluptatem rerum reiciendis qui pariatur. Aperiam aspernatur et modi. Rerum aperiam molestias nobis. Quibusdam et et omnis ratione at quas repellendus consectetur.",
            "describe_en": "Delectus esse voluptatem pariatur eius minus repudiandae quis. Ea rem quasi modi. Consectetur sit illum fugiat veritatis illum.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?56192",
            "description": "Error qui dicta culpa eos ut et.",
            "description_en": "Recusandae qui autem non explicabo eaque.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?38740",
            "parent_id": 12,
            "created_at": "2020-07-28 07:08:03",
            "updated_at": "2020-08-07 05:23:32",
            "parent_title": "精华"
        },
        {
            "id": 6,
            "slug": "ut-aut",
            "title": "乳液",
            "title_en": "eveniet tempore soluta",
            "describe": "Ut enim inventore culpa mollitia quia vitae. Id impedit fugit molestiae quia. Expedita asperiores ut ullam ut accusamus et eum temporibus.",
            "describe_en": "Qui numquam provident hic at odio cumque laborum. Ipsam molestiae dolores velit beatae ut earum. Sapiente harum voluptates vitae quasi.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?62104",
            "description": "Dignissimos iste facilis necessitatibus magni explicabo velit.",
            "description_en": "Tempora sequi neque voluptatem porro.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?46372",
            "parent_id": 16,
            "created_at": "2020-07-15 19:49:46",
            "updated_at": "2020-07-29 13:28:20",
            "parent_title": "彩妆盘"
        },
        {
            "id": 7,
            "slug": "est-sed",
            "title": "面霜",
            "title_en": "ea et ut",
            "describe": "Nesciunt fugiat totam et saepe enim asperiores harum. Eum quia praesentium sint adipisci ut. Commodi dolorem ut unde quo non veniam ratione et. Eveniet amet error non et quam est aspernatur.",
            "describe_en": "Temporibus rerum est aperiam voluptatem hic est. Explicabo totam excepturi nostrum ad beatae nihil. Corporis ut placeat quia enim consectetur animi consequatur.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?14637",
            "description": "Recusandae animi ut incidunt animi autem.",
            "description_en": "Dolor a voluptas soluta id.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?79472",
            "parent_id": 8,
            "created_at": "2020-07-21 23:47:39",
            "updated_at": "2020-07-21 05:15:02",
            "parent_title": "身体护理"
        },
        {
            "id": 8,
            "slug": "qui-quod",
            "title": "身体护理",
            "title_en": "quis modi quod",
            "describe": "Enim voluptates deserunt numquam alias sequi. Consequatur officia qui incidunt dolorem. Deleniti ullam velit temporibus sed. Minima inventore recusandae tempore itaque accusantium velit.",
            "describe_en": "Harum consequatur non quaerat illo. Consequatur vero laborum eveniet earum esse. Omnis vel quis ut nihil.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?92960",
            "description": "Ea consequatur reiciendis possimus saepe enim.",
            "description_en": "Eos rerum aliquam velit dolor id.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?56882",
            "parent_id": 17,
            "created_at": "2020-07-18 23:18:55",
            "updated_at": "2020-07-15 04:11:57",
            "parent_title": "精华"
        },
        {
            "id": 9,
            "slug": "voluptatem-quos",
            "title": "隔离",
            "title_en": "pariatur nemo eum",
            "describe": "Quaerat quo earum aut occaecati odit. Asperiores est eligendi sit nihil reiciendis dolorem. Aperiam voluptas natus aut vitae consectetur ea qui. Magni est nihil exercitationem molestias ut.",
            "describe_en": "Pariatur debitis quae dicta expedita. Quis suscipit corporis iste. Sed perspiciatis omnis qui sit eligendi aut asperiores. Iusto et tempore tempora. Aut dolores ut amet in.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?42958",
            "description": "Sit eum inventore quo commodi.",
            "description_en": "Et quia porro et voluptas assumenda.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?44071",
            "parent_id": 10,
            "created_at": "2020-07-28 06:31:34",
            "updated_at": "2020-07-31 02:28:01",
            "parent_title": "隔离"
        },
        {
            "id": 10,
            "slug": "magnam-quia",
            "title": "隔离",
            "title_en": "sunt asperiores unde",
            "describe": "Officia quia provident quia tenetur quia totam. Quia adipisci reiciendis adipisci omnis non optio. Est ab modi magnam quia sed qui debitis et. Dolore error omnis repellendus.",
            "describe_en": "Porro voluptatem adipisci ut molestiae aut. Aliquid sit qui fugit minus sit porro. Aliquam quis aspernatur modi rerum quae.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?44600",
            "description": "Exercitationem et tempore impedit assumenda reiciendis.",
            "description_en": "Doloribus voluptatem dolores occaecati facilis pariatur necessitatibus.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?81086",
            "parent_id": 16,
            "created_at": "2020-07-23 07:11:25",
            "updated_at": "2020-07-17 10:42:35",
            "parent_title": "彩妆盘"
        },
        {
            "id": 11,
            "slug": "et-vero",
            "title": "精油",
            "title_en": "adipisci provident placeat",
            "describe": "Rerum vero dolorem doloribus assumenda alias facilis. Et tempora impedit voluptas quis accusamus voluptates. Deserunt et doloremque impedit soluta ut repudiandae.",
            "describe_en": "Optio inventore consequatur quis. Atque aut rem ea sed ullam quasi dolores. Omnis ab et omnis velit consectetur.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?34034",
            "description": "Explicabo blanditiis eveniet nostrum.",
            "description_en": "Dignissimos dolor impedit sed dolorem.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?61508",
            "parent_id": 7,
            "created_at": "2020-07-25 17:45:32",
            "updated_at": "2020-07-26 08:43:41",
            "parent_title": "面霜"
        },
        {
            "id": 12,
            "slug": "aut-quos",
            "title": "精华",
            "title_en": "rem nobis officia",
            "describe": "Voluptate aut qui officiis et incidunt quasi fugiat. Et illum vel molestiae odit nam suscipit sapiente. Expedita ullam vitae nostrum aliquid molestiae velit.",
            "describe_en": "Est eveniet et ex. Ut et omnis blanditiis dolores doloribus est. Veniam laborum ex est iste. Dolor soluta repudiandae eveniet autem. Rem adipisci animi fugit veniam itaque repudiandae.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?18202",
            "description": "Incidunt accusantium molestiae quia eaque assumenda.",
            "description_en": "Impedit et suscipit ut.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?86279",
            "parent_id": 16,
            "created_at": "2020-07-16 07:50:40",
            "updated_at": "2020-07-30 06:14:53",
            "parent_title": "彩妆盘"
        },
        {
            "id": 13,
            "slug": "commodi-et",
            "title": "精华",
            "title_en": "id nam voluptatum",
            "describe": "Quo inventore aliquid minus id consequatur et. Hic veniam est qui voluptas sint rerum. Qui dolore culpa ipsa quod aut. Quaerat et fuga sequi earum.",
            "describe_en": "Modi est dignissimos ea. Quod et repudiandae non voluptas. Quam tempora soluta voluptatem rem nesciunt dolor ut. Vel inventore hic necessitatibus.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?39153",
            "description": "Quia nisi soluta unde repellendus.",
            "description_en": "Dolorem est dignissimos ut rem ut.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?24412",
            "parent_id": 15,
            "created_at": "2020-07-23 17:16:15",
            "updated_at": "2020-07-17 21:42:25",
            "parent_title": "香水"
        },
        {
            "id": 14,
            "slug": "voluptatem-vero",
            "title": "洁面",
            "title_en": "officia eos commodi",
            "describe": "Dolore distinctio maxime dolorem rerum odit eum ipsa. Nostrum quidem facere cumque.",
            "describe_en": "Rerum mollitia voluptate et eaque. Velit dolores quis laboriosam laboriosam corrupti hic. Commodi recusandae et quis aut corporis. Ducimus modi hic sequi facilis velit odit omnis.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?31621",
            "description": "Repellendus veritatis facilis qui blanditiis quas.",
            "description_en": "Porro corporis aliquam placeat voluptates.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?32242",
            "parent_id": 13,
            "created_at": "2020-08-04 15:56:46",
            "updated_at": "2020-07-28 17:22:57",
            "parent_title": "精华"
        },
        {
            "id": 15,
            "slug": "rerum-exercitationem",
            "title": "香水",
            "title_en": "blanditiis asperiores a",
            "describe": "Incidunt vel dolor vero alias nostrum. Omnis in eum delectus omnis autem est voluptas id. Pariatur dolorum rerum qui. Eveniet et voluptatem sit similique ut blanditiis.",
            "describe_en": "Deleniti exercitationem et tempore fuga deleniti vero. In aut magni harum ducimus quos excepturi cum. Nostrum minima quisquam voluptatem omnis molestias.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?24783",
            "description": "Non et non iusto accusantium.",
            "description_en": "Aut quia nemo quibusdam sit dolore.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?66678",
            "parent_id": 16,
            "created_at": "2020-08-03 16:49:54",
            "updated_at": "2020-07-29 15:22:57",
            "parent_title": "彩妆盘"
        },
        {
            "id": 16,
            "slug": "soluta-in",
            "title": "彩妆盘",
            "title_en": "mollitia nisi doloribus",
            "describe": "Et rem tempore pariatur. Reiciendis accusamus quod quam eum. Tempora rerum adipisci quis sapiente recusandae. Ipsam ut eum quod earum rerum quidem fugit.",
            "describe_en": "Esse dolor mollitia et itaque et impedit quia. Id accusamus ut animi a porro eum id. Dolores iste et neque distinctio nulla cupiditate. Quo autem autem sed consequatur.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?64129",
            "description": "Alias ut eius excepturi.",
            "description_en": "Quibusdam qui incidunt explicabo nobis nam.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?84065",
            "parent_id": 19,
            "created_at": "2020-07-25 11:43:38",
            "updated_at": "2020-07-15 12:09:01",
            "parent_title": "身体护理"
        },
        {
            "id": 17,
            "slug": "incidunt-recusandae",
            "title": "精华",
            "title_en": "soluta excepturi quia",
            "describe": "In omnis pariatur enim pariatur aut inventore. Atque distinctio sint dignissimos omnis mollitia. Assumenda quia consequatur molestiae distinctio. Dolorem et enim quaerat.",
            "describe_en": "Mollitia omnis reprehenderit in ipsam non fugiat. Error quia aut magni et voluptate. Dignissimos non et quibusdam voluptas itaque quod suscipit.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?84698",
            "description": "Illo eius possimus corrupti id voluptatum.",
            "description_en": "Pariatur dolorem eaque rerum similique culpa.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?31872",
            "parent_id": 7,
            "created_at": "2020-07-26 10:06:15",
            "updated_at": "2020-08-04 21:26:38",
            "parent_title": "面霜"
        },
        {
            "id": 18,
            "slug": "velit-architecto",
            "title": "隔离",
            "title_en": "voluptatem placeat ratione",
            "describe": "Explicabo accusantium accusamus corrupti ut ea. Iusto sint aperiam ut est culpa dicta. A illum qui voluptas reprehenderit laudantium sed quam est.",
            "describe_en": "Ea esse animi suscipit fuga ratione minus. Qui est eius molestiae aliquam facilis placeat esse. Nam quos voluptas aut.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?92323",
            "description": "Ipsam accusantium eum non.",
            "description_en": "Non voluptas laborum nesciunt consequatur.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?71756",
            "parent_id": 19,
            "created_at": "2020-07-20 07:17:12",
            "updated_at": "2020-07-14 18:25:32",
            "parent_title": "身体护理"
        },
        {
            "id": 19,
            "slug": "tempora-quo",
            "title": "身体护理",
            "title_en": "dolor explicabo vitae",
            "describe": "Omnis voluptas asperiores et veritatis odio et. Vitae eos corporis fugit et. In dolorem pariatur est aliquam recusandae est.",
            "describe_en": "Provident distinctio a iusto expedita. Ut accusamus natus molestiae dolores dolorum est. Porro in accusamus libero eligendi doloribus. Facilis porro aperiam nulla architecto harum blanditiis soluta.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?30682",
            "description": "Eum praesentium sunt perferendis debitis aut.",
            "description_en": "Porro rerum dolor nemo et tenetur perferendis.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?94750",
            "parent_id": 5,
            "created_at": "2020-08-01 18:38:43",
            "updated_at": "2020-07-22 04:29:02",
            "parent_title": "BB霜"
        },
        {
            "id": 20,
            "slug": "repellendus-neque",
            "title": "香水",
            "title_en": "voluptas deleniti amet",
            "describe": "Autem maxime deleniti dolorem asperiores iste. Id tempora iure assumenda doloribus voluptatem placeat aliquid. Esse eos veritatis saepe ea voluptatum. Voluptas odit ad et explicabo.",
            "describe_en": "Tempora iste quas possimus eos omnis ut. Officia quibusdam est consectetur expedita. Consequuntur et beatae repudiandae. Quae asperiores aut alias.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?48392",
            "description": "Suscipit dolores rerum accusamus necessitatibus.",
            "description_en": "Exercitationem qui temporibus corrupti est ullam sed velit.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?42984",
            "parent_id": 12,
            "created_at": "2020-07-21 23:29:26",
            "updated_at": "2020-08-03 05:58:49",
            "parent_title": "精华"
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
                "product_name": "黑钻肌光精华",
                "product_name_en": "totam et accusantium",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?71591",
                "slug": "voluptatem-iusto",
                "short_description": "Voluptatibus labore nisi quo et ut.",
                "short_description_en": "Hic id saepe quo et ut facilis. Porro optio qui ipsum.",
                "price": "2116.00",
                "sale_price": "1371.00",
                "stock": 668,
                "spec": null,
                "seo_title": "quo id officia",
                "seo_keyword": "sapiente",
                "seo_description": "Non assumenda accusantium a.",
                "benefit": "Est enim esse eligendi magni. Voluptate quae voluptatem hic. Nihil sit nisi sunt magnam dicta delectus est perferendis. Voluptate dolor explicabo quos vitae quia consequatur et.",
                "benefit_en": "Quaerat doloremque explicabo consequatur consequatur beatae accusamus rerum. Rerum eligendi et odio laboriosam ullam. Aut amet enim exercitationem ut. Qui dolore officia quia alias itaque.",
                "tech_description": "Doloremque sit et blanditiis ipsam nam dolore quia est. Nostrum repellat quae modi exercitationem laboriosam. Et numquam cupiditate laborum voluptatibus qui eveniet est.",
                "tech_description_en": "Quia dolores aut et facere. Perspiciatis ut perferendis doloremque animi aut odit. Dignissimos adipisci quas ipsam reiciendis totam hic. Saepe sunt ut mollitia asperiores nobis sit consequatur repellendus. Beatae eius et ratione tempora reprehenderit veritatis.",
                "description": "Possimus non esse aperiam. Autem aspernatur temporibus consequatur corporis ipsam. Rerum quia enim ab magni. Tenetur nam ratione aut sed.",
                "description_en": "Sit et excepturi beatae doloribus fugit est et. Ut et eos nobis perferendis.",
                "usage": "Architecto et quibusdam perferendis excepturi aliquam eum. In magni et et doloribus et est. Alias fugit possimus eum aperiam dolore. Debitis dolores voluptas illo reiciendis qui quia harum.",
                "usage_en": "Totam ducimus corporis dolorem aliquam explicabo rerum. Et vitae laborum voluptatibus ut. Quos non dolorum est reprehenderit voluptates libero nulla.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?31584",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?55825",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?80275",
                "product_video": null,
                "status": 2,
                "rating": 9.32,
                "sold_count": 5666,
                "review_count": 1133,
                "created_at": "2020-08-04 07:39:15",
                "updated_at": "2020-08-01 12:32:32",
                "product_category": {
                    "id": 14,
                    "slug": "voluptatem-vero",
                    "title": "洁面",
                    "title_en": "officia eos commodi",
                    "describe": "Dolore distinctio maxime dolorem rerum odit eum ipsa. Nostrum quidem facere cumque.",
                    "describe_en": "Rerum mollitia voluptate et eaque. Velit dolores quis laboriosam laboriosam corrupti hic. Commodi recusandae et quis aut corporis. Ducimus modi hic sequi facilis velit odit omnis.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?31621",
                    "description": "Repellendus veritatis facilis qui blanditiis quas.",
                    "description_en": "Porro corporis aliquam placeat voluptates.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?32242",
                    "parent_id": 13,
                    "created_at": "2020-08-04 15:56:46",
                    "updated_at": "2020-07-28 17:22:57"
                }
            },
            {
                "id": 2,
                "product_category_id": 20,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "quia perferendis eius",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?60080",
                "slug": "ipsa-recusandae",
                "short_description": "Unde itaque deleniti incidunt.",
                "short_description_en": "Assumenda aliquid odit officiis officiis sequi. Distinctio vel enim ea omnis quae eos. Quo animi enim quos ut. Inventore ut ut sed praesentium quam.",
                "price": "2184.00",
                "sale_price": "2597.00",
                "stock": 74,
                "spec": null,
                "seo_title": "et fugiat tempora",
                "seo_keyword": "omnis",
                "seo_description": "Excepturi dolores aperiam quia.",
                "benefit": "Minus ut omnis ea aspernatur tempora. Et necessitatibus qui qui. Aliquam omnis quisquam necessitatibus consequatur. Ut optio eum aut numquam et unde eius commodi.",
                "benefit_en": "Nihil dolorem maxime nostrum quae ea aut. Quibusdam quia officiis maxime porro deserunt repellendus. Porro rem aut aut nam illo. Ut adipisci ipsum est.",
                "tech_description": "Est asperiores aut qui qui doloremque. Id et id error exercitationem iste ullam. Et unde esse qui quos. Veritatis dolorem repellendus enim iste.",
                "tech_description_en": "Expedita nihil qui rerum et modi dolor non aut. Quasi sit modi iste et ut placeat in. Officiis officia ut voluptatem pariatur. Distinctio libero error quia dolor ut dolorem.",
                "description": "Sunt nemo mollitia earum vitae. Ullam eaque voluptatem nemo ea earum. Neque culpa aut voluptatem blanditiis consequatur. Voluptas voluptate ipsum dolorem id est nam.",
                "description_en": "Ex consectetur quasi sit. Tempora est voluptas nam eligendi magnam tempore.",
                "usage": "Ratione recusandae non ut voluptates explicabo. Culpa fuga ex laboriosam fugit in iure sit. Iure eos et modi ipsum qui doloremque. Sapiente expedita enim consequatur labore repellat consequatur. Aperiam nihil dolore ut.",
                "usage_en": "Nobis molestiae et a tempora ducimus. Earum et non omnis rerum et omnis. Et amet ut quaerat molestias porro id doloremque. Autem eaque aperiam cupiditate ut.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?30731",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?77025",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?72012",
                "product_video": null,
                "status": 1,
                "rating": 3.84,
                "sold_count": 4461,
                "review_count": 4566,
                "created_at": "2020-07-25 13:41:18",
                "updated_at": "2020-07-16 03:24:03",
                "product_category": {
                    "id": 20,
                    "slug": "repellendus-neque",
                    "title": "香水",
                    "title_en": "voluptas deleniti amet",
                    "describe": "Autem maxime deleniti dolorem asperiores iste. Id tempora iure assumenda doloribus voluptatem placeat aliquid. Esse eos veritatis saepe ea voluptatum. Voluptas odit ad et explicabo.",
                    "describe_en": "Tempora iste quas possimus eos omnis ut. Officia quibusdam est consectetur expedita. Consequuntur et beatae repudiandae. Quae asperiores aut alias.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?48392",
                    "description": "Suscipit dolores rerum accusamus necessitatibus.",
                    "description_en": "Exercitationem qui temporibus corrupti est ullam sed velit.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?42984",
                    "parent_id": 12,
                    "created_at": "2020-07-21 23:29:26",
                    "updated_at": "2020-08-03 05:58:49"
                }
            },
            {
                "id": 3,
                "product_category_id": 9,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "minima quibusdam beatae",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?54543",
                "slug": "ipsa-adipisci",
                "short_description": "At harum quaerat et vitae doloribus iusto.",
                "short_description_en": "Ducimus necessitatibus ipsam accusantium dolor. Esse aut ab quo asperiores unde impedit qui. Voluptas qui suscipit nostrum nam. Tempora maiores exercitationem non quam omnis ea.",
                "price": "1542.00",
                "sale_price": "3792.00",
                "stock": 601,
                "spec": null,
                "seo_title": "et possimus sint",
                "seo_keyword": "et",
                "seo_description": "Ullam molestiae eos deleniti et.",
                "benefit": "Velit maiores reprehenderit modi non autem. Aut quaerat quod aut. Tempora nihil aut non non. Veniam qui praesentium dolorem odit hic rerum.",
                "benefit_en": "Rerum nobis dolor et voluptatum. Saepe dolorem facere rerum fugit aut. Voluptas et iure reiciendis similique placeat blanditiis laboriosam.",
                "tech_description": "Sit voluptate quis sed rem. Sint architecto fugiat magni numquam quidem cum. Sit minus repellat maxime provident possimus dolorem expedita.",
                "tech_description_en": "Labore dignissimos ut expedita. Consequatur ratione illo nam sint culpa voluptas saepe. Dolorem fuga qui rerum voluptatum ad voluptatem vel dolor. Assumenda non cupiditate voluptatem sunt tempore.",
                "description": "Fugiat corrupti blanditiis nisi ut. Voluptas aut vel beatae ut numquam. Corrupti perferendis minima quam facilis. Velit impedit at nobis commodi aut consequuntur veniam.",
                "description_en": "Quia consequatur possimus animi eos recusandae. Animi enim voluptatum rerum iste officiis. Vel ut consequatur maxime eveniet. Similique aut cumque ipsum rerum et omnis. Dolor quo quaerat dolores eum eos reprehenderit quidem.",
                "usage": "Maxime in architecto optio eaque vel. Placeat quia temporibus repudiandae est quasi quasi et. Excepturi tempore et et sit vitae exercitationem. Velit consectetur laudantium exercitationem corporis provident alias.",
                "usage_en": "Ipsum quo voluptate consectetur voluptatem. Deserunt consequatur optio rem delectus quod. Aut eius error velit adipisci.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?70581",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?34282",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?17451",
                "product_video": null,
                "status": 1,
                "rating": 9.75,
                "sold_count": 8669,
                "review_count": 3004,
                "created_at": "2020-07-14 03:50:15",
                "updated_at": "2020-07-20 21:10:24",
                "product_category": {
                    "id": 9,
                    "slug": "voluptatem-quos",
                    "title": "隔离",
                    "title_en": "pariatur nemo eum",
                    "describe": "Quaerat quo earum aut occaecati odit. Asperiores est eligendi sit nihil reiciendis dolorem. Aperiam voluptas natus aut vitae consectetur ea qui. Magni est nihil exercitationem molestias ut.",
                    "describe_en": "Pariatur debitis quae dicta expedita. Quis suscipit corporis iste. Sed perspiciatis omnis qui sit eligendi aut asperiores. Iusto et tempore tempora. Aut dolores ut amet in.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?42958",
                    "description": "Sit eum inventore quo commodi.",
                    "description_en": "Et quia porro et voluptas assumenda.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?44071",
                    "parent_id": 10,
                    "created_at": "2020-07-28 06:31:34",
                    "updated_at": "2020-07-31 02:28:01"
                }
            },
            {
                "id": 4,
                "product_category_id": 17,
                "product_name": "黑钻焕肤水",
                "product_name_en": "facilis dolores dolore",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?57238",
                "slug": "hic-aut",
                "short_description": "Error maiores est sequi.",
                "short_description_en": "Eaque sed aliquam voluptatem ipsa ut. Aut ipsum quam consequatur sequi facilis rem eaque est. Aut sequi sit fugit minus ratione.",
                "price": "1408.00",
                "sale_price": "9332.00",
                "stock": 953,
                "spec": null,
                "seo_title": "illo delectus repudiandae",
                "seo_keyword": "occaecati",
                "seo_description": "Et aperiam earum culpa.",
                "benefit": "Nemo est inventore dolores. Nobis blanditiis quos ipsa earum mollitia consectetur vel. Recusandae aut mollitia vitae similique.",
                "benefit_en": "Placeat saepe quibusdam totam. Id minus velit quod recusandae id.",
                "tech_description": "Eveniet occaecati numquam animi voluptate et minima et. Illum distinctio vel deserunt architecto itaque magni. Vel possimus dolor sunt enim.",
                "tech_description_en": "Quas nam vitae recusandae odit ducimus nobis. Facilis qui ex porro qui. Sed animi et placeat facilis itaque et aut. Facere a aut aut voluptatibus sed unde ducimus.",
                "description": "Corrupti eveniet id accusantium sed adipisci necessitatibus. Aut hic laborum fugiat cum et animi. Corporis ut odit autem quam saepe asperiores.",
                "description_en": "Ex aliquid molestias recusandae incidunt aliquid veritatis assumenda. Aut est commodi minima non. Aut quis vel eos. Ut necessitatibus nulla reprehenderit aut possimus eaque ratione.",
                "usage": "Vel quia aut ipsum iure porro fuga. Iusto voluptatem delectus eos repellendus cupiditate harum. Rerum cupiditate voluptate ex doloremque. Quis doloribus illo ut sit blanditiis at. Nihil sit quos et.",
                "usage_en": "Ea neque odit minus perferendis dolorem qui. Magni minima voluptas occaecati provident. Quia eos voluptate rerum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?64311",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?65970",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?34382",
                "product_video": null,
                "status": 2,
                "rating": 0.66,
                "sold_count": 3335,
                "review_count": 6543,
                "created_at": "2020-08-12 05:18:22",
                "updated_at": "2020-07-25 19:26:14",
                "product_category": {
                    "id": 17,
                    "slug": "incidunt-recusandae",
                    "title": "精华",
                    "title_en": "soluta excepturi quia",
                    "describe": "In omnis pariatur enim pariatur aut inventore. Atque distinctio sint dignissimos omnis mollitia. Assumenda quia consequatur molestiae distinctio. Dolorem et enim quaerat.",
                    "describe_en": "Mollitia omnis reprehenderit in ipsam non fugiat. Error quia aut magni et voluptate. Dignissimos non et quibusdam voluptas itaque quod suscipit.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?84698",
                    "description": "Illo eius possimus corrupti id voluptatum.",
                    "description_en": "Pariatur dolorem eaque rerum similique culpa.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?31872",
                    "parent_id": 7,
                    "created_at": "2020-07-26 10:06:15",
                    "updated_at": "2020-08-04 21:26:38"
                }
            },
            {
                "id": 5,
                "product_category_id": 14,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "deleniti eos blanditiis",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?39222",
                "slug": "adipisci-recusandae",
                "short_description": "Rerum quos dolorem aut sint aut.",
                "short_description_en": "Dolor sunt possimus dolores recusandae eaque reiciendis nihil. Ea aut quaerat sed facilis. Aperiam dolorem omnis aut omnis ducimus aspernatur ut. Quidem esse sit temporibus deserunt et perferendis.",
                "price": "2457.00",
                "sale_price": "700.00",
                "stock": 83,
                "spec": null,
                "seo_title": "qui nostrum illum",
                "seo_keyword": "quo",
                "seo_description": "Vero non explicabo ratione quae.",
                "benefit": "Soluta voluptatibus enim doloribus rem illum quidem rerum veritatis. A explicabo labore similique deleniti perferendis sed velit. Cum est quaerat dolorem nostrum eaque. Eum sed occaecati sequi quo dignissimos dicta cumque.",
                "benefit_en": "Aut est quaerat esse mollitia. Alias modi et blanditiis mollitia. Veniam corrupti quasi quos est et voluptas. Et ex aut illo eius in autem.",
                "tech_description": "Eos itaque corrupti temporibus quia temporibus. Itaque qui deserunt quibusdam dignissimos error nobis. Optio veritatis dolorum voluptatem voluptas reprehenderit qui aut quo.",
                "tech_description_en": "Nulla inventore sunt ipsum porro. Autem ut dicta ipsa ipsam. Nemo esse sit ut sit error dignissimos cum nemo. Quis mollitia consequuntur recusandae id sapiente.",
                "description": "Atque temporibus necessitatibus nihil et aut consequatur qui. Qui perferendis perferendis tempora sequi. Illum esse ipsum deleniti velit consequuntur. Sint itaque magni excepturi ut veritatis.",
                "description_en": "Dolores et aut vero reiciendis autem deserunt id. Corporis aliquam quisquam numquam et suscipit molestiae blanditiis. Nesciunt rerum alias illum omnis minima.",
                "usage": "Quia quod tenetur doloribus mollitia necessitatibus perferendis corporis. Eum esse laborum ea minima voluptatem eligendi et quia. Et at veniam laborum expedita eaque. Distinctio ab eum ut aut consequatur sint.",
                "usage_en": "Necessitatibus adipisci distinctio et velit corporis nulla. Mollitia accusamus vero inventore voluptas dolorum explicabo facere. Blanditiis molestiae excepturi qui qui libero sit. Sunt distinctio sed tempore numquam dolores ab.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?57629",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?64643",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?89183",
                "product_video": null,
                "status": 3,
                "rating": 0.54,
                "sold_count": 8769,
                "review_count": 7188,
                "created_at": "2020-07-18 11:34:05",
                "updated_at": "2020-08-12 08:09:33",
                "product_category": {
                    "id": 14,
                    "slug": "voluptatem-vero",
                    "title": "洁面",
                    "title_en": "officia eos commodi",
                    "describe": "Dolore distinctio maxime dolorem rerum odit eum ipsa. Nostrum quidem facere cumque.",
                    "describe_en": "Rerum mollitia voluptate et eaque. Velit dolores quis laboriosam laboriosam corrupti hic. Commodi recusandae et quis aut corporis. Ducimus modi hic sequi facilis velit odit omnis.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?31621",
                    "description": "Repellendus veritatis facilis qui blanditiis quas.",
                    "description_en": "Porro corporis aliquam placeat voluptates.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?32242",
                    "parent_id": 13,
                    "created_at": "2020-08-04 15:56:46",
                    "updated_at": "2020-07-28 17:22:57"
                }
            },
            {
                "id": 6,
                "product_category_id": 9,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "laudantium molestiae sapiente",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?74335",
                "slug": "omnis-inventore",
                "short_description": "Illo repudiandae asperiores blanditiis.",
                "short_description_en": "Nam aut dolor ut fugit quibusdam delectus. Quis ut quasi est dolorem amet eos. Labore excepturi tempore blanditiis facilis sit dolorem. Ex voluptas distinctio aut dolorum est asperiores et.",
                "price": "5688.00",
                "sale_price": "6577.00",
                "stock": 85,
                "spec": null,
                "seo_title": "facilis aliquam natus",
                "seo_keyword": "consequatur",
                "seo_description": "Voluptas dolore dicta et temporibus modi quod.",
                "benefit": "Illum explicabo soluta enim eum rerum odio. Corporis neque nemo reiciendis aut ut. Laborum error animi nulla aut. Quae exercitationem sed non minus.",
                "benefit_en": "Odit nam facere repellendus provident eos reiciendis. Deleniti unde aliquid doloribus debitis id consequuntur odio. Molestiae dolores non porro quod et. Eos quod dolorem doloribus quia ut id aliquid vel.",
                "tech_description": "Est tempore officiis possimus sint odit rerum non. Consequatur modi quia et in error dolorum neque repudiandae. Facere omnis autem fugiat maiores. Tenetur ea aperiam adipisci unde nisi. Culpa ut eligendi voluptas autem quo quo dolores.",
                "tech_description_en": "Rerum saepe pariatur natus aut voluptate voluptatem. Dolorum recusandae similique labore praesentium dignissimos ex. Modi a voluptatem velit aut.",
                "description": "Nemo in voluptatem ut quos. Enim illo sit nostrum voluptatem aut doloribus et perferendis.",
                "description_en": "Sunt repellat quae aut veritatis odio. Adipisci qui a velit eum. Amet eos non itaque nesciunt enim.",
                "usage": "Numquam explicabo praesentium ut. Asperiores sed sit eligendi qui molestiae molestias pariatur. Consequatur fugiat nulla veniam dolorem quos distinctio.",
                "usage_en": "Eveniet dolor consectetur cum alias sint. Qui quis ipsam ut et. Debitis sed nostrum officia nam dolores distinctio provident fuga. Et dolorum nobis ut sunt nemo.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?86707",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?14624",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?96790",
                "product_video": null,
                "status": 2,
                "rating": 0.95,
                "sold_count": 3037,
                "review_count": 4255,
                "created_at": "2020-07-31 01:43:34",
                "updated_at": "2020-07-29 18:50:50",
                "product_category": {
                    "id": 9,
                    "slug": "voluptatem-quos",
                    "title": "隔离",
                    "title_en": "pariatur nemo eum",
                    "describe": "Quaerat quo earum aut occaecati odit. Asperiores est eligendi sit nihil reiciendis dolorem. Aperiam voluptas natus aut vitae consectetur ea qui. Magni est nihil exercitationem molestias ut.",
                    "describe_en": "Pariatur debitis quae dicta expedita. Quis suscipit corporis iste. Sed perspiciatis omnis qui sit eligendi aut asperiores. Iusto et tempore tempora. Aut dolores ut amet in.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?42958",
                    "description": "Sit eum inventore quo commodi.",
                    "description_en": "Et quia porro et voluptas assumenda.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?44071",
                    "parent_id": 10,
                    "created_at": "2020-07-28 06:31:34",
                    "updated_at": "2020-07-31 02:28:01"
                }
            },
            {
                "id": 7,
                "product_category_id": 18,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "doloribus assumenda ipsum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?35013",
                "slug": "sapiente-reprehenderit",
                "short_description": "Fugit laboriosam dolores ut et.",
                "short_description_en": "Ipsa harum pariatur error nostrum temporibus aliquid tempora vel. Quis id aut voluptates delectus harum sed. Quos ea rerum voluptatibus commodi et aut ipsam. Earum officiis temporibus similique incidunt deleniti dolores.",
                "price": "6415.00",
                "sale_price": "1459.00",
                "stock": 491,
                "spec": null,
                "seo_title": "sint est vel",
                "seo_keyword": "voluptate",
                "seo_description": "Quis asperiores a non cumque aut.",
                "benefit": "Eius sapiente cum architecto non dolorem consectetur. Corporis mollitia quibusdam illo in labore ipsam. Sit sunt dolorum aliquid facere vel maiores inventore.",
                "benefit_en": "Quo ipsa harum nulla nihil sint qui dolorum omnis. Eveniet eaque possimus fugit et. Sapiente debitis dolorem quia molestiae eius.",
                "tech_description": "Aliquid sed soluta consequatur excepturi. Suscipit quos qui fugit praesentium. Recusandae voluptatibus sit quibusdam laudantium.",
                "tech_description_en": "Impedit accusamus modi eum quo consequatur rerum. Qui non qui id et. Et aut iusto quis et temporibus.",
                "description": "Molestias quia possimus iure aliquam dolore ut quos. Quis natus sit animi aliquid tempore odio. Rerum aut veniam et aut explicabo. Eum iusto eius aut alias alias excepturi libero expedita. Illo ut voluptas dolor sunt.",
                "description_en": "Necessitatibus reiciendis quae ipsam occaecati iste consequuntur. Quidem quo qui sed nihil ipsa sit. Qui deserunt ad et nisi aut qui.",
                "usage": "In pariatur animi qui quas magnam molestiae sit. Perferendis voluptas voluptate consequuntur similique sit. Animi occaecati rerum et adipisci enim porro. Sapiente deleniti cumque cum sed dolore.",
                "usage_en": "Eligendi pariatur omnis necessitatibus quo ut. Ut optio aut quod vitae consequatur.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?24526",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?29273",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?35154",
                "product_video": null,
                "status": 3,
                "rating": 9.98,
                "sold_count": 4640,
                "review_count": 5065,
                "created_at": "2020-08-10 16:30:20",
                "updated_at": "2020-08-05 17:27:41",
                "product_category": {
                    "id": 18,
                    "slug": "velit-architecto",
                    "title": "隔离",
                    "title_en": "voluptatem placeat ratione",
                    "describe": "Explicabo accusantium accusamus corrupti ut ea. Iusto sint aperiam ut est culpa dicta. A illum qui voluptas reprehenderit laudantium sed quam est.",
                    "describe_en": "Ea esse animi suscipit fuga ratione minus. Qui est eius molestiae aliquam facilis placeat esse. Nam quos voluptas aut.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?92323",
                    "description": "Ipsam accusantium eum non.",
                    "description_en": "Non voluptas laborum nesciunt consequatur.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?71756",
                    "parent_id": 19,
                    "created_at": "2020-07-20 07:17:12",
                    "updated_at": "2020-07-14 18:25:32"
                }
            },
            {
                "id": 8,
                "product_category_id": 3,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "enim autem voluptatem",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?20598",
                "slug": "optio-quia",
                "short_description": "Unde error cumque cumque quia natus et.",
                "short_description_en": "Velit illum quod cumque maiores voluptatem. Exercitationem provident adipisci blanditiis velit repellat eaque. Eos dicta dignissimos nobis veniam ut aperiam laudantium dolorem. Et minus quia dolore dolores veritatis veniam blanditiis ullam.",
                "price": "776.00",
                "sale_price": "220.00",
                "stock": 343,
                "spec": null,
                "seo_title": "debitis molestiae maxime",
                "seo_keyword": "magnam",
                "seo_description": "Illo numquam natus quidem quo officia et.",
                "benefit": "Asperiores architecto eum iure odio ut magnam. Aperiam est beatae autem. Iste dolor aut laboriosam animi reprehenderit. Nobis est explicabo officiis qui.",
                "benefit_en": "In id minus et laborum. Cupiditate a nulla eveniet voluptatem cum aut magnam. Facilis cum amet est exercitationem.",
                "tech_description": "Aspernatur ea dolores fugit et vitae cum rerum. Consequatur eaque amet ratione optio commodi. Eligendi nisi omnis error enim possimus quaerat tenetur. Et et est alias eligendi.",
                "tech_description_en": "Ipsam asperiores dolor et nam ab velit possimus. Vero quasi laboriosam et consequatur qui. Nihil libero omnis consequatur quibusdam nobis quasi. Nulla dolor officiis et in aut magni eius. Fugit et voluptas harum explicabo neque dolores.",
                "description": "Consequatur expedita quisquam autem blanditiis laudantium. Sit sed quas iusto. Illum dicta qui incidunt aut.",
                "description_en": "Ratione exercitationem tenetur ut iusto et et repellendus dolores. Rem sint ut et ipsa. Nostrum corrupti praesentium sit quisquam. Aspernatur eius ut eos.",
                "usage": "Non explicabo odit sed minus tenetur. Architecto amet id iusto rem provident voluptatem quas ut. Quia veniam quia quos eum ut. Dolorum autem ex animi reiciendis eaque velit.",
                "usage_en": "Incidunt nobis sed quas qui. Amet aut aliquam necessitatibus laboriosam minima aut. Quia iste fugit eligendi perferendis consectetur. Ea quasi veritatis vero.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?51332",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?74931",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?82421",
                "product_video": null,
                "status": 3,
                "rating": 4.43,
                "sold_count": 1825,
                "review_count": 1199,
                "created_at": "2020-08-11 10:13:22",
                "updated_at": "2020-08-02 18:23:28",
                "product_category": {
                    "id": 3,
                    "slug": "aspernatur-assumenda",
                    "title": "防晒",
                    "title_en": "accusantium dignissimos omnis",
                    "describe": "Nemo aliquam eius omnis quia optio. Quia ea excepturi quia aperiam. In voluptatibus autem similique vero est nihil iure ipsum.",
                    "describe_en": "Ea non eos iste eveniet. Quia aperiam est aut similique dolorum. Hic est voluptas sit est dolore aut. Eligendi sed iusto inventore rerum repellendus neque.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?91423",
                    "description": "Eum omnis consectetur explicabo doloremque recusandae rerum.",
                    "description_en": "Non sit eveniet rem.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?97254",
                    "parent_id": 19,
                    "created_at": "2020-08-02 23:44:36",
                    "updated_at": "2020-07-22 09:37:27"
                }
            },
            {
                "id": 9,
                "product_category_id": 15,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "ea suscipit ab",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?41584",
                "slug": "dolor-omnis",
                "short_description": "Nisi id corrupti minima earum quis corrupti adipisci.",
                "short_description_en": "Ducimus quis aliquid dolores in. Velit debitis necessitatibus facere non aut voluptate maiores quo. Exercitationem accusantium maxime atque nemo. Numquam qui quam sit alias officiis.",
                "price": "5051.00",
                "sale_price": "1289.00",
                "stock": 933,
                "spec": null,
                "seo_title": "voluptas aperiam et",
                "seo_keyword": "quos",
                "seo_description": "Excepturi amet minus expedita aut.",
                "benefit": "Rerum ipsum fugiat explicabo laborum voluptatem voluptates. Vitae porro minus quam rerum est ut molestias laborum. Suscipit adipisci culpa aut.",
                "benefit_en": "Impedit perspiciatis omnis natus in ut mollitia. Dolorem sit nulla voluptatem enim. Et ex qui earum vero doloribus quia.",
                "tech_description": "Est omnis numquam et necessitatibus ab qui commodi. Eos dolores consequatur odit et. Quas est consequatur voluptatibus et. Illum assumenda accusamus laborum aperiam eligendi fugit natus. Quod velit necessitatibus aliquam itaque.",
                "tech_description_en": "Laudantium nam tempore nulla aliquid odio vitae praesentium. Maiores commodi officia officiis eligendi. Sint quia eaque velit impedit nobis cumque corrupti. Molestias aut rerum maxime.",
                "description": "Laboriosam tenetur earum id enim deleniti. Recusandae voluptatibus corporis hic molestiae at repellat.",
                "description_en": "Officiis corporis dolorem iusto hic sunt qui doloremque ea. Repudiandae ea delectus atque et voluptatem aut porro.",
                "usage": "Id a qui voluptatem non ad nam perspiciatis. Officiis modi omnis deleniti dolores. Corporis praesentium corporis sequi et ut rerum consequuntur. Esse quo rerum occaecati voluptate accusamus commodi.",
                "usage_en": "Eos facilis et sequi nisi facere natus porro. Facere eum illo nisi. Laborum rem dolor quidem explicabo.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?90036",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?65576",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?28879",
                "product_video": null,
                "status": 3,
                "rating": 8.92,
                "sold_count": 4780,
                "review_count": 7001,
                "created_at": "2020-07-16 15:50:55",
                "updated_at": "2020-07-19 08:38:52",
                "product_category": {
                    "id": 15,
                    "slug": "rerum-exercitationem",
                    "title": "香水",
                    "title_en": "blanditiis asperiores a",
                    "describe": "Incidunt vel dolor vero alias nostrum. Omnis in eum delectus omnis autem est voluptas id. Pariatur dolorum rerum qui. Eveniet et voluptatem sit similique ut blanditiis.",
                    "describe_en": "Deleniti exercitationem et tempore fuga deleniti vero. In aut magni harum ducimus quos excepturi cum. Nostrum minima quisquam voluptatem omnis molestias.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?24783",
                    "description": "Non et non iusto accusantium.",
                    "description_en": "Aut quia nemo quibusdam sit dolore.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?66678",
                    "parent_id": 16,
                    "created_at": "2020-08-03 16:49:54",
                    "updated_at": "2020-07-29 15:22:57"
                }
            },
            {
                "id": 10,
                "product_category_id": 2,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "facere voluptas nemo",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?19380",
                "slug": "aut-perspiciatis",
                "short_description": "Esse consequatur non rerum eum quam sit.",
                "short_description_en": "Corporis consequatur fugiat quaerat facere. Dolorem excepturi quisquam quia. Voluptatum nesciunt quod et deleniti non eos quidem. Sit qui est eos quas qui.",
                "price": "6532.00",
                "sale_price": "576.00",
                "stock": 161,
                "spec": null,
                "seo_title": "optio error consequatur",
                "seo_keyword": "provident",
                "seo_description": "Non molestias quas ut consequatur consequatur officia.",
                "benefit": "Accusamus magnam enim quasi est repudiandae. Incidunt ratione eaque qui voluptas delectus sunt sed ex. Placeat dolores libero molestias a iste provident eum.",
                "benefit_en": "Et qui pariatur cum sint voluptas voluptate sed. Non officiis recusandae dignissimos aperiam sit error. Sit placeat architecto impedit debitis vel tempore.",
                "tech_description": "Velit non ex rerum est eum natus debitis. Ipsam maxime quos quos sed totam qui. Fuga et amet vel quibusdam aut laudantium. Ea fugiat id ut quasi deserunt quibusdam quae.",
                "tech_description_en": "Tempora exercitationem omnis architecto commodi sed. Odit fuga omnis et temporibus. Adipisci eveniet voluptatibus voluptate dolore odit consequatur culpa omnis. In ab tenetur animi totam neque provident. Non voluptas consequatur et.",
                "description": "Error inventore repellendus at quam deleniti dolores eos et. Rem nihil ex distinctio ad ut ullam aut voluptates. Unde soluta cumque omnis. Odio rerum vitae sint ut culpa aut quidem.",
                "description_en": "Dolorem officia aliquam natus neque voluptatem placeat aliquid. Et est similique non veniam labore pariatur iste alias. Voluptas aut laborum necessitatibus. Reprehenderit et voluptas a velit.",
                "usage": "Expedita neque expedita sint consequatur blanditiis sunt. Voluptas excepturi velit saepe ad blanditiis. Ea neque adipisci laudantium suscipit.",
                "usage_en": "Rerum suscipit ut voluptatem. Nemo et est ratione rerum velit. Labore ut aut maiores consequatur natus doloribus quam.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?40835",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?30553",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?33209",
                "product_video": null,
                "status": 1,
                "rating": 5.27,
                "sold_count": 4594,
                "review_count": 2531,
                "created_at": "2020-07-19 14:41:26",
                "updated_at": "2020-07-30 21:08:17",
                "product_category": {
                    "id": 2,
                    "slug": "minima-aut",
                    "title": "BB霜",
                    "title_en": "eligendi et animi",
                    "describe": "Qui at consequatur minus nam quam odio. Amet amet eum qui maiores eligendi.",
                    "describe_en": "Culpa eum sed distinctio reprehenderit. Exercitationem dolores et harum iste tempora. Commodi ut placeat voluptas quia praesentium illo ratione.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?50334",
                    "description": "Consequatur dolore possimus est est molestias in.",
                    "description_en": "Non blanditiis quo vel explicabo rerum similique.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?57387",
                    "parent_id": 3,
                    "created_at": "2020-08-03 13:32:24",
                    "updated_at": "2020-08-09 10:00:37"
                }
            },
            {
                "id": 11,
                "product_category_id": 12,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "libero beatae provident",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?24612",
                "slug": "sapiente-fugit",
                "short_description": "Reprehenderit consectetur architecto dolor.",
                "short_description_en": "Inventore est sit optio. Nemo voluptas qui enim. Quo harum rerum a ullam quidem. Praesentium officia magnam ex ipsa eveniet.",
                "price": "8476.00",
                "sale_price": "939.00",
                "stock": 899,
                "spec": null,
                "seo_title": "nihil eligendi distinctio",
                "seo_keyword": "et",
                "seo_description": "Accusamus possimus magni non neque dolorem.",
                "benefit": "Tenetur id vel voluptatum. Est doloremque est eum fugiat et. Quos suscipit sed nostrum molestiae est consequatur. Neque qui et vel ratione sint.",
                "benefit_en": "Voluptatem commodi alias culpa rem. At dolor minus quo sed necessitatibus et pariatur. Nesciunt ex dicta porro quo.",
                "tech_description": "Animi minus repellendus in sit. Perspiciatis provident officia alias rerum velit reiciendis. Expedita nemo voluptatem quibusdam quibusdam magnam. Quae a explicabo assumenda earum voluptas.",
                "tech_description_en": "Tempora temporibus sit molestias quae qui eos. Facere quidem iure et ut vel. Sunt pariatur quis modi aperiam sunt rerum et. Totam sunt incidunt veritatis debitis. Aspernatur et corrupti et rerum.",
                "description": "Non illum est aut. Est harum sint et et dolores aut sapiente. Debitis aliquid cumque ut ea iste voluptatem. Repellat voluptatibus molestias qui tempore saepe.",
                "description_en": "Dolorem eveniet quibusdam possimus accusantium tenetur aut non. Blanditiis culpa unde rem deleniti ex rerum quos. Omnis aut ullam ipsam ex culpa provident quae perspiciatis.",
                "usage": "Incidunt asperiores velit dicta beatae. Repudiandae fuga aut eaque non accusamus doloremque saepe. Qui est quia ut dignissimos pariatur ut ut.",
                "usage_en": "Est ab nihil odit harum error iste reiciendis. Officiis necessitatibus ut dignissimos eius omnis autem quod suscipit. Magni voluptas magni dolor architecto voluptatem.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?21557",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?47407",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?57217",
                "product_video": null,
                "status": 2,
                "rating": 2.45,
                "sold_count": 5175,
                "review_count": 6481,
                "created_at": "2020-07-18 17:47:34",
                "updated_at": "2020-07-29 20:53:14",
                "product_category": {
                    "id": 12,
                    "slug": "aut-quos",
                    "title": "精华",
                    "title_en": "rem nobis officia",
                    "describe": "Voluptate aut qui officiis et incidunt quasi fugiat. Et illum vel molestiae odit nam suscipit sapiente. Expedita ullam vitae nostrum aliquid molestiae velit.",
                    "describe_en": "Est eveniet et ex. Ut et omnis blanditiis dolores doloribus est. Veniam laborum ex est iste. Dolor soluta repudiandae eveniet autem. Rem adipisci animi fugit veniam itaque repudiandae.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?18202",
                    "description": "Incidunt accusantium molestiae quia eaque assumenda.",
                    "description_en": "Impedit et suscipit ut.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?86279",
                    "parent_id": 16,
                    "created_at": "2020-07-16 07:50:40",
                    "updated_at": "2020-07-30 06:14:53"
                }
            },
            {
                "id": 12,
                "product_category_id": 3,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "iusto debitis molestias",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?23098",
                "slug": "dolorem-non",
                "short_description": "Non ut perferendis dolor.",
                "short_description_en": "Veritatis sint vero repudiandae ut. Doloribus natus quidem ut totam nisi at. Laudantium dolor exercitationem corrupti soluta. Dolore et nihil voluptatem facere.",
                "price": "9156.00",
                "sale_price": "5847.00",
                "stock": 978,
                "spec": null,
                "seo_title": "deleniti laboriosam ullam",
                "seo_keyword": "ut",
                "seo_description": "Aut iusto quasi est eos vel non.",
                "benefit": "Ullam sunt sed ab laboriosam voluptatibus. Eveniet itaque fugit laborum in iusto sunt eum odio. Enim repellendus reiciendis magnam.",
                "benefit_en": "Illum excepturi nulla fugiat ab est non. Ut non dolor aut et sequi porro tempore. Quod ea dolorum aut tempora doloribus nisi fugit.",
                "tech_description": "Qui magni aut aut molestiae porro. Repellendus libero quia ipsam eveniet excepturi eos. Reiciendis voluptate et aut nobis.",
                "tech_description_en": "Aut explicabo dolorum qui voluptatem impedit. Sint rem eum sunt architecto officiis dolore aperiam aut. Vel ut accusamus incidunt dolorem velit labore. Est eum odit magnam nihil.",
                "description": "Nam dolor nulla dolorem alias. Dicta recusandae laudantium omnis sed unde ea ut. Autem vitae et nihil fugit sint doloremque.",
                "description_en": "Hic consequatur commodi facilis voluptate iste. Aut vel adipisci nam suscipit nemo velit sint. Pariatur quasi voluptatem ad voluptatem rerum rerum suscipit.",
                "usage": "Est sed nemo deserunt id et. Sit quis soluta est distinctio laboriosam. Et aperiam autem quasi culpa.",
                "usage_en": "Possimus eum labore sapiente maiores voluptate tempora. Aut consequatur veritatis aspernatur quia ratione nulla illo. Incidunt sed et praesentium. Illum maiores ab ad expedita qui quia a.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?30485",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?25508",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?98059",
                "product_video": null,
                "status": 3,
                "rating": 3.68,
                "sold_count": 7232,
                "review_count": 7061,
                "created_at": "2020-07-16 12:26:05",
                "updated_at": "2020-07-29 23:42:33",
                "product_category": {
                    "id": 3,
                    "slug": "aspernatur-assumenda",
                    "title": "防晒",
                    "title_en": "accusantium dignissimos omnis",
                    "describe": "Nemo aliquam eius omnis quia optio. Quia ea excepturi quia aperiam. In voluptatibus autem similique vero est nihil iure ipsum.",
                    "describe_en": "Ea non eos iste eveniet. Quia aperiam est aut similique dolorum. Hic est voluptas sit est dolore aut. Eligendi sed iusto inventore rerum repellendus neque.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?91423",
                    "description": "Eum omnis consectetur explicabo doloremque recusandae rerum.",
                    "description_en": "Non sit eveniet rem.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?97254",
                    "parent_id": 19,
                    "created_at": "2020-08-02 23:44:36",
                    "updated_at": "2020-07-22 09:37:27"
                }
            },
            {
                "id": 13,
                "product_category_id": 7,
                "product_name": "黑钻肌光精华",
                "product_name_en": "quis modi id",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?12523",
                "slug": "beatae-illo",
                "short_description": "Modi doloremque optio blanditiis.",
                "short_description_en": "Nisi quam veritatis neque tenetur consequuntur. Qui porro sit voluptas porro fugiat dolores repellendus. Non deserunt temporibus suscipit accusamus. Illo modi dolorem nesciunt tenetur quia amet odio.",
                "price": "3159.00",
                "sale_price": "3586.00",
                "stock": 542,
                "spec": null,
                "seo_title": "deserunt excepturi sapiente",
                "seo_keyword": "voluptas",
                "seo_description": "Ullam qui qui dolor.",
                "benefit": "Sapiente esse aut quos consequatur. Sed sit impedit aut optio ullam. Molestiae eum ut quas.",
                "benefit_en": "Atque numquam ex aliquam repellendus eaque quaerat repudiandae. Aperiam et modi modi ipsum recusandae deserunt omnis. Omnis officiis beatae rem et ex aliquid et.",
                "tech_description": "Quas voluptatem repellat doloremque aut ad. Ipsam pariatur laudantium ratione velit aut iste. Nostrum saepe enim ipsum consectetur earum est.",
                "tech_description_en": "Laborum deserunt odit quos. Fuga quisquam quis ipsa quia qui. Cumque necessitatibus ut incidunt.",
                "description": "Blanditiis et voluptatem enim illo architecto consequuntur a possimus. Temporibus assumenda harum assumenda dolorum est incidunt. Eum quos nesciunt est rerum.",
                "description_en": "Sunt praesentium alias vel aut ad. Rem quo est mollitia odio magni aut minima sit. Consectetur aspernatur beatae sed et magnam. Pariatur ad alias necessitatibus deleniti dolores ad voluptas hic.",
                "usage": "Qui dolores voluptatem tempora rerum necessitatibus. Vero aspernatur repellat occaecati nesciunt dolor dolores voluptatum natus. Nihil amet ex aut quis eum quibusdam sequi. Molestiae nobis amet minima repellendus et et.",
                "usage_en": "Repudiandae voluptatem sunt temporibus in voluptate non vero. Et praesentium dolores sit expedita rerum explicabo. Dolorum autem laudantium cum assumenda error.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?78769",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?31693",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?10400",
                "product_video": null,
                "status": 2,
                "rating": 6.53,
                "sold_count": 5735,
                "review_count": 9400,
                "created_at": "2020-07-30 12:55:54",
                "updated_at": "2020-07-25 16:20:26",
                "product_category": {
                    "id": 7,
                    "slug": "est-sed",
                    "title": "面霜",
                    "title_en": "ea et ut",
                    "describe": "Nesciunt fugiat totam et saepe enim asperiores harum. Eum quia praesentium sint adipisci ut. Commodi dolorem ut unde quo non veniam ratione et. Eveniet amet error non et quam est aspernatur.",
                    "describe_en": "Temporibus rerum est aperiam voluptatem hic est. Explicabo totam excepturi nostrum ad beatae nihil. Corporis ut placeat quia enim consectetur animi consequatur.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?14637",
                    "description": "Recusandae animi ut incidunt animi autem.",
                    "description_en": "Dolor a voluptas soluta id.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?79472",
                    "parent_id": 8,
                    "created_at": "2020-07-21 23:47:39",
                    "updated_at": "2020-07-21 05:15:02"
                }
            },
            {
                "id": 14,
                "product_category_id": 2,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "quia alias aperiam",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?88651",
                "slug": "quae-eum",
                "short_description": "Corporis iusto ea consequatur ducimus nemo ea.",
                "short_description_en": "Voluptatem ratione ut vel debitis sit aut. Eum excepturi deserunt consequatur at suscipit.",
                "price": "5212.00",
                "sale_price": "2542.00",
                "stock": 30,
                "spec": null,
                "seo_title": "sapiente repellat sunt",
                "seo_keyword": "ea",
                "seo_description": "Ad modi nobis ut.",
                "benefit": "Nostrum iure expedita quidem ipsum molestiae quis cupiditate sit. Debitis soluta officia doloribus qui. Perferendis sed sequi corporis maxime numquam ipsa. Voluptas dolor sit deleniti deleniti maxime.",
                "benefit_en": "Voluptate excepturi eius libero omnis voluptatum. Tempore possimus quis tempore sed. Ipsum doloribus qui quibusdam magnam est. Quo est in aspernatur et officiis.",
                "tech_description": "Vero nostrum dolorem doloribus natus. Vel hic atque est perferendis id. Voluptatem veritatis sunt debitis voluptatem velit adipisci vel.",
                "tech_description_en": "Laborum laborum ex repellendus sit voluptates magnam. Deserunt doloribus et commodi a et. Et hic enim et nobis perferendis necessitatibus. Ut et corrupti iste eos corrupti. Quas numquam omnis saepe architecto repudiandae molestiae ad.",
                "description": "Ut quis quidem doloribus tenetur. Dolore et deleniti autem aspernatur et in soluta. In pariatur consequatur quod molestiae aut necessitatibus nobis. Non officia nemo id tempore aliquam maiores magni.",
                "description_en": "Et id qui deleniti cum itaque placeat. Facere repellat minima nulla similique quam atque porro. Ut laudantium vel nesciunt exercitationem. Velit labore dolores asperiores ducimus ut exercitationem. Non rem vel voluptates facere.",
                "usage": "Vitae ut earum ut sit. Vitae praesentium tenetur ratione eos explicabo excepturi et.",
                "usage_en": "Dolor aut laudantium ea alias ad. Culpa vel in sed quis voluptatem. Ducimus asperiores dolorem eum cupiditate voluptate commodi rem dolores. Minima sunt rerum tenetur aut.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?50426",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?99707",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?75364",
                "product_video": null,
                "status": 2,
                "rating": 0.67,
                "sold_count": 1296,
                "review_count": 6880,
                "created_at": "2020-07-18 22:31:21",
                "updated_at": "2020-07-13 04:18:55",
                "product_category": {
                    "id": 2,
                    "slug": "minima-aut",
                    "title": "BB霜",
                    "title_en": "eligendi et animi",
                    "describe": "Qui at consequatur minus nam quam odio. Amet amet eum qui maiores eligendi.",
                    "describe_en": "Culpa eum sed distinctio reprehenderit. Exercitationem dolores et harum iste tempora. Commodi ut placeat voluptas quia praesentium illo ratione.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?50334",
                    "description": "Consequatur dolore possimus est est molestias in.",
                    "description_en": "Non blanditiis quo vel explicabo rerum similique.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?57387",
                    "parent_id": 3,
                    "created_at": "2020-08-03 13:32:24",
                    "updated_at": "2020-08-09 10:00:37"
                }
            },
            {
                "id": 15,
                "product_category_id": 5,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "odio libero illum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?40055",
                "slug": "rerum-et",
                "short_description": "Est libero ratione voluptas sint sapiente maxime.",
                "short_description_en": "Aperiam excepturi asperiores dolore qui quia. Eligendi quos officia explicabo eligendi voluptate in exercitationem ad.",
                "price": "260.00",
                "sale_price": "7720.00",
                "stock": 742,
                "spec": null,
                "seo_title": "alias repellendus dolorem",
                "seo_keyword": "voluptatem",
                "seo_description": "Ut distinctio est ut.",
                "benefit": "Aut ea ab placeat quas accusamus. Dolores id explicabo minus eligendi repellendus quasi voluptatem.",
                "benefit_en": "Laboriosam minima quia est soluta rerum odio sint. Magni sed ut sint dolor nam earum. Sed distinctio sunt quas dolorum placeat dolorum perferendis.",
                "tech_description": "Nihil odit et esse. Qui sunt aut nostrum sunt.",
                "tech_description_en": "Iusto molestiae quaerat et iusto quia aspernatur. Nobis non porro eveniet quidem. Ab aspernatur et minus et eos. Amet a quisquam consectetur ut incidunt rerum excepturi.",
                "description": "Quis eius expedita quia natus et deleniti. Ut consequatur consequatur et optio perferendis harum.",
                "description_en": "Saepe quia officiis cum ut sit nihil quaerat. Delectus quos totam beatae id reiciendis consequuntur. Error similique tempore distinctio et. Sunt quos vel qui harum quaerat.",
                "usage": "Veniam incidunt quaerat numquam rerum aut. Aut tempore similique debitis tempore incidunt et aliquam. Minima a nam rem nihil.",
                "usage_en": "Est quia sit vel corporis doloremque ut. Quis laudantium dignissimos fugit error corporis architecto voluptatem.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?56286",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?57392",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?89903",
                "product_video": null,
                "status": 3,
                "rating": 1.74,
                "sold_count": 8062,
                "review_count": 1320,
                "created_at": "2020-07-12 18:38:37",
                "updated_at": "2020-07-18 09:27:18",
                "product_category": {
                    "id": 5,
                    "slug": "a-eligendi",
                    "title": "BB霜",
                    "title_en": "facere quis sed",
                    "describe": "Porro maxime nemo voluptatem rerum reiciendis qui pariatur. Aperiam aspernatur et modi. Rerum aperiam molestias nobis. Quibusdam et et omnis ratione at quas repellendus consectetur.",
                    "describe_en": "Delectus esse voluptatem pariatur eius minus repudiandae quis. Ea rem quasi modi. Consectetur sit illum fugiat veritatis illum.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?56192",
                    "description": "Error qui dicta culpa eos ut et.",
                    "description_en": "Recusandae qui autem non explicabo eaque.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?38740",
                    "parent_id": 12,
                    "created_at": "2020-07-28 07:08:03",
                    "updated_at": "2020-08-07 05:23:32"
                }
            },
            {
                "id": 16,
                "product_category_id": 20,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "autem voluptas dignissimos",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?41372",
                "slug": "suscipit-non",
                "short_description": "Corporis odit ut quia quidem sit.",
                "short_description_en": "Aut optio ex ut cum natus. Quia beatae nihil repellendus. Dolorem molestiae id et.",
                "price": "7325.00",
                "sale_price": "8376.00",
                "stock": 131,
                "spec": null,
                "seo_title": "sit ipsum neque",
                "seo_keyword": "nobis",
                "seo_description": "Accusantium modi ipsum sed recusandae.",
                "benefit": "Non accusantium quod incidunt aliquam. Qui autem sit qui sunt occaecati perferendis. Laboriosam deleniti quos officiis omnis rerum fugiat sed.",
                "benefit_en": "Sunt ad sit aut adipisci perferendis sed dolorem ut. Vel sit corporis officiis deserunt. Fugit voluptas ab dolor culpa. Qui voluptas accusantium voluptatem qui eum.",
                "tech_description": "Ut dolores recusandae rerum facere optio omnis qui. Suscipit corporis sit aliquid ad praesentium explicabo. Ab id ut reiciendis et eveniet enim ea. Quo eos eos sit enim doloremque autem explicabo similique. Ullam ut est et numquam neque.",
                "tech_description_en": "Assumenda voluptatum nihil hic voluptate autem. Voluptate mollitia ea et. Quis provident quisquam nesciunt impedit vel.",
                "description": "Qui id ex quo est fugit magni. Dicta earum excepturi labore nesciunt officiis. Sit amet ipsam tenetur.",
                "description_en": "Atque est sapiente consequatur velit maiores. Totam et sed asperiores eum soluta sunt rem. Enim sapiente iste temporibus sint voluptatem.",
                "usage": "Quis nobis saepe iusto sit. Fugiat dicta dolor veniam voluptate sed. Tempore voluptate rerum non dolor est ipsum.",
                "usage_en": "Maiores aliquam dolores neque cupiditate. Fugiat cum assumenda sit doloremque aut. Nulla voluptatem esse sapiente eius et aut.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?98397",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?65414",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?98404",
                "product_video": null,
                "status": 3,
                "rating": 3.05,
                "sold_count": 9022,
                "review_count": 2199,
                "created_at": "2020-08-03 23:10:36",
                "updated_at": "2020-08-05 07:19:59",
                "product_category": {
                    "id": 20,
                    "slug": "repellendus-neque",
                    "title": "香水",
                    "title_en": "voluptas deleniti amet",
                    "describe": "Autem maxime deleniti dolorem asperiores iste. Id tempora iure assumenda doloribus voluptatem placeat aliquid. Esse eos veritatis saepe ea voluptatum. Voluptas odit ad et explicabo.",
                    "describe_en": "Tempora iste quas possimus eos omnis ut. Officia quibusdam est consectetur expedita. Consequuntur et beatae repudiandae. Quae asperiores aut alias.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?48392",
                    "description": "Suscipit dolores rerum accusamus necessitatibus.",
                    "description_en": "Exercitationem qui temporibus corrupti est ullam sed velit.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?42984",
                    "parent_id": 12,
                    "created_at": "2020-07-21 23:29:26",
                    "updated_at": "2020-08-03 05:58:49"
                }
            },
            {
                "id": 17,
                "product_category_id": 13,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "incidunt ab necessitatibus",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?76101",
                "slug": "quia-voluptatem",
                "short_description": "Dolorum similique soluta quod quis.",
                "short_description_en": "Labore consequuntur est nesciunt consequuntur beatae est. Placeat dolorem est deserunt sint. Ducimus doloremque qui laboriosam tempore quam. Qui est laboriosam molestiae explicabo libero qui. Ipsum ut et aut id optio ut et.",
                "price": "1965.00",
                "sale_price": "7593.00",
                "stock": 808,
                "spec": null,
                "seo_title": "assumenda nihil minus",
                "seo_keyword": "et",
                "seo_description": "Optio repellendus non provident in tempore ab.",
                "benefit": "Perferendis reiciendis a fugit unde fugit est. Dolorem maxime voluptatibus iusto. Adipisci soluta consequatur illum rerum quae.",
                "benefit_en": "Possimus amet et id iusto est quidem consequatur. Ut facere rem molestiae sapiente nesciunt. Est et sunt aut quis.",
                "tech_description": "Qui illo autem asperiores commodi reiciendis. Exercitationem eum voluptatibus ut doloribus. Recusandae voluptatem ex quod.",
                "tech_description_en": "Qui dicta aut dicta possimus sed. Saepe qui aut quasi esse quis sed. Aliquam nam quia cumque culpa.",
                "description": "Provident facilis eos veniam dolor. Accusantium delectus sequi ut sunt autem mollitia. Sapiente incidunt voluptatem in ut nostrum.",
                "description_en": "Praesentium sint rerum quidem ut praesentium incidunt dolorem quos. Recusandae ea culpa voluptatibus repudiandae. Eum earum dolores distinctio.",
                "usage": "Consequatur debitis occaecati quia dolores. Veritatis quo inventore nulla sed. Ut dolore est tempora. Maxime est beatae vel voluptatum architecto maxime. Deleniti sunt dolores amet quaerat saepe id ut.",
                "usage_en": "Aut reiciendis enim nesciunt. Ut qui soluta quo aut ut autem.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?66722",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?93806",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?60658",
                "product_video": null,
                "status": 3,
                "rating": 9.71,
                "sold_count": 2227,
                "review_count": 9016,
                "created_at": "2020-08-01 08:55:03",
                "updated_at": "2020-08-10 20:09:40",
                "product_category": {
                    "id": 13,
                    "slug": "commodi-et",
                    "title": "精华",
                    "title_en": "id nam voluptatum",
                    "describe": "Quo inventore aliquid minus id consequatur et. Hic veniam est qui voluptas sint rerum. Qui dolore culpa ipsa quod aut. Quaerat et fuga sequi earum.",
                    "describe_en": "Modi est dignissimos ea. Quod et repudiandae non voluptas. Quam tempora soluta voluptatem rem nesciunt dolor ut. Vel inventore hic necessitatibus.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?39153",
                    "description": "Quia nisi soluta unde repellendus.",
                    "description_en": "Dolorem est dignissimos ut rem ut.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?24412",
                    "parent_id": 15,
                    "created_at": "2020-07-23 17:16:15",
                    "updated_at": "2020-07-17 21:42:25"
                }
            },
            {
                "id": 18,
                "product_category_id": 5,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "ab excepturi voluptas",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?44135",
                "slug": "quos-omnis",
                "short_description": "Deserunt nam voluptatem optio.",
                "short_description_en": "Eum blanditiis omnis distinctio a. Tempore similique fugiat quis debitis sint quisquam consequatur odio.",
                "price": "6014.00",
                "sale_price": "335.00",
                "stock": 303,
                "spec": null,
                "seo_title": "temporibus sunt officiis",
                "seo_keyword": "autem",
                "seo_description": "At voluptatibus sunt aut eum.",
                "benefit": "Officiis eum debitis ipsam est ipsum qui ipsam. Vitae quia quia qui voluptates est maxime. Illum distinctio sed molestiae temporibus minima optio sint ut.",
                "benefit_en": "Nobis molestiae occaecati error aut pariatur odio. Repudiandae repudiandae minima soluta et maxime. Enim esse corrupti voluptatibus saepe in nihil. Assumenda totam incidunt suscipit dolor quo ut velit.",
                "tech_description": "Soluta quae repellendus iure qui exercitationem. Aut et quo ipsam provident sint quod officiis doloremque. Deleniti cum optio accusantium soluta neque quo vitae.",
                "tech_description_en": "Nobis sint perferendis quam. Adipisci molestiae eius exercitationem aut inventore. Quas eligendi sunt vero qui.",
                "description": "Est ipsa aut eum perspiciatis ullam id. A quos quas est et aperiam. Eum aut et consequatur voluptas et. Nam necessitatibus accusamus dolores exercitationem.",
                "description_en": "Assumenda omnis vero fuga sunt maxime quia fugiat. Repellendus quis esse non aut laudantium quisquam.",
                "usage": "Quam est ut voluptatem ut facere aut quo. Sint quis inventore omnis iusto odit hic sunt. Animi aut natus autem explicabo illo doloribus. Et tenetur quam delectus necessitatibus.",
                "usage_en": "Quo a aut suscipit ab dolores. Et ut sit vitae eum velit hic. Odio ullam corrupti eveniet omnis.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?56420",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?75199",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?82166",
                "product_video": null,
                "status": 2,
                "rating": 4.84,
                "sold_count": 2028,
                "review_count": 7833,
                "created_at": "2020-08-05 14:27:54",
                "updated_at": "2020-07-18 13:43:41",
                "product_category": {
                    "id": 5,
                    "slug": "a-eligendi",
                    "title": "BB霜",
                    "title_en": "facere quis sed",
                    "describe": "Porro maxime nemo voluptatem rerum reiciendis qui pariatur. Aperiam aspernatur et modi. Rerum aperiam molestias nobis. Quibusdam et et omnis ratione at quas repellendus consectetur.",
                    "describe_en": "Delectus esse voluptatem pariatur eius minus repudiandae quis. Ea rem quasi modi. Consectetur sit illum fugiat veritatis illum.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?56192",
                    "description": "Error qui dicta culpa eos ut et.",
                    "description_en": "Recusandae qui autem non explicabo eaque.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?38740",
                    "parent_id": 12,
                    "created_at": "2020-07-28 07:08:03",
                    "updated_at": "2020-08-07 05:23:32"
                }
            },
            {
                "id": 19,
                "product_category_id": 16,
                "product_name": "黑钻肌光精华",
                "product_name_en": "voluptas reiciendis sunt",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?18014",
                "slug": "aliquid-atque",
                "short_description": "Et beatae sapiente voluptatum quia.",
                "short_description_en": "Itaque rerum placeat explicabo sit. Et est cupiditate ut velit inventore. Et ut saepe quasi molestiae maiores quia non libero.",
                "price": "6226.00",
                "sale_price": "3.00",
                "stock": 853,
                "spec": null,
                "seo_title": "harum exercitationem totam",
                "seo_keyword": "eius",
                "seo_description": "Iste est rerum possimus occaecati maxime quam.",
                "benefit": "Eum commodi ut debitis ratione provident assumenda. Quae error fugiat eum quidem. Ab aut quam vitae iste sunt ipsum perspiciatis.",
                "benefit_en": "Dolor corporis eum quia totam quasi doloremque aut. Id eos quas beatae non expedita id fuga odio. Molestiae accusantium illo repellendus dolores. Rem nobis asperiores ea doloremque consequatur asperiores. Dolores nulla et enim alias quia.",
                "tech_description": "Ea amet dolorum non quaerat. Et sint enim dolores magnam. Voluptates delectus voluptas quasi. Cum quo ratione quidem enim tempore.",
                "tech_description_en": "Ipsa magnam et natus et. Temporibus quaerat ipsam nostrum quas quod. Distinctio est qui est molestiae ullam quisquam.",
                "description": "Veniam atque neque nisi molestias. Laboriosam corrupti omnis fugiat aut ut. Error error id iste est. Rem ut et sit a.",
                "description_en": "Voluptate ad ullam voluptatem sit. Quaerat odio sint praesentium. Voluptatem et sequi aspernatur magni molestiae perspiciatis in officiis. Ut rerum dicta ut.",
                "usage": "Sint sed et tempora eveniet. Corporis maxime officia neque aut.",
                "usage_en": "Sunt incidunt non rerum distinctio sunt velit debitis. Et eos repellendus architecto quidem autem quasi est exercitationem. Aut ipsa et non nisi quis illum odio. Quo necessitatibus cum cupiditate. Voluptatem accusamus nulla quo et nesciunt doloribus eligendi.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?50647",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?70497",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?81469",
                "product_video": null,
                "status": 2,
                "rating": 2.4699999999999998,
                "sold_count": 2819,
                "review_count": 7649,
                "created_at": "2020-07-31 09:35:47",
                "updated_at": "2020-07-17 11:04:23",
                "product_category": {
                    "id": 16,
                    "slug": "soluta-in",
                    "title": "彩妆盘",
                    "title_en": "mollitia nisi doloribus",
                    "describe": "Et rem tempore pariatur. Reiciendis accusamus quod quam eum. Tempora rerum adipisci quis sapiente recusandae. Ipsam ut eum quod earum rerum quidem fugit.",
                    "describe_en": "Esse dolor mollitia et itaque et impedit quia. Id accusamus ut animi a porro eum id. Dolores iste et neque distinctio nulla cupiditate. Quo autem autem sed consequatur.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?64129",
                    "description": "Alias ut eius excepturi.",
                    "description_en": "Quibusdam qui incidunt explicabo nobis nam.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?84065",
                    "parent_id": 19,
                    "created_at": "2020-07-25 11:43:38",
                    "updated_at": "2020-07-15 12:09:01"
                }
            },
            {
                "id": 20,
                "product_category_id": 18,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "saepe et esse",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?48394",
                "slug": "sed-vel",
                "short_description": "Vel accusantium ut quia quisquam autem magni.",
                "short_description_en": "Vero eos iste doloribus porro maxime saepe. Nisi perferendis et aut sed necessitatibus qui atque. Quia vero rerum et corrupti inventore quaerat vitae facilis. Quidem eos ea et et perferendis voluptatem rerum sapiente. Corrupti ipsam qui eos aut vel nulla voluptatem.",
                "price": "6490.00",
                "sale_price": "5394.00",
                "stock": 669,
                "spec": null,
                "seo_title": "qui est nihil",
                "seo_keyword": "rerum",
                "seo_description": "Velit dolores et omnis.",
                "benefit": "Sit quas voluptatibus quas. Velit ratione optio id iste. Minus rem rerum non corporis est nesciunt. Voluptatem at rerum laudantium et commodi. Ipsa quo sed nobis sapiente et amet.",
                "benefit_en": "Est id ut quia quisquam velit ea. Non porro provident quis aut quia molestias. Et repellat delectus rerum error ratione dignissimos qui. Hic sed nobis enim cupiditate aut sed ut.",
                "tech_description": "Quibusdam sit blanditiis quia fugit et unde et consectetur. Accusamus voluptas ut dolorem quisquam ut.",
                "tech_description_en": "Qui quae rerum doloribus dolore sed et est temporibus. Rerum eum sit iure et architecto placeat qui. Quis voluptatem est in velit ut quod dolorem ipsum.",
                "description": "Harum et asperiores id in. Accusantium voluptatem voluptatem autem ut itaque. Sunt repudiandae qui quia sint assumenda eos.",
                "description_en": "Iusto voluptatum iure ullam aut excepturi. Eos incidunt suscipit incidunt dolorem culpa. Velit iusto voluptas molestias sunt aut.",
                "usage": "Fuga aut quis nostrum sunt. Consequatur asperiores odio est. Id et consequatur sint ut voluptatem distinctio. Voluptatem aperiam enim fugit qui et incidunt nisi voluptas.",
                "usage_en": "Ut nihil voluptatem ut aliquid magni eum. A voluptates quod cum laborum. Consequatur voluptas corrupti quis recusandae.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?34446",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?83580",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?92213",
                "product_video": null,
                "status": 2,
                "rating": 2.56,
                "sold_count": 5564,
                "review_count": 5277,
                "created_at": "2020-08-03 10:05:27",
                "updated_at": "2020-07-31 01:54:33",
                "product_category": {
                    "id": 18,
                    "slug": "velit-architecto",
                    "title": "隔离",
                    "title_en": "voluptatem placeat ratione",
                    "describe": "Explicabo accusantium accusamus corrupti ut ea. Iusto sint aperiam ut est culpa dicta. A illum qui voluptas reprehenderit laudantium sed quam est.",
                    "describe_en": "Ea esse animi suscipit fuga ratione minus. Qui est eius molestiae aliquam facilis placeat esse. Nam quos voluptas aut.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?92323",
                    "description": "Ipsam accusantium eum non.",
                    "description_en": "Non voluptas laborum nesciunt consequatur.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?71756",
                    "parent_id": 19,
                    "created_at": "2020-07-20 07:17:12",
                    "updated_at": "2020-07-14 18:25:32"
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

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/product/1?slug=eius" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product/1"
);

let params = {
    "slug": "eius",
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

<!-- START_e74135bde1e41803ad4087410acd02b8 -->
## Get product category story
获取产品分类故事

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/category_story/1?category_slug=eos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category_story/1"
);

let params = {
    "category_slug": "eos",
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
`GET api/category_story/{category_slug}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `category_slug` |  required  | 分类slug

<!-- END_e74135bde1e41803ad4087410acd02b8 -->

<!-- START_e1ee2f452be977620f7e0c0045529fd9 -->
## Get new product
获取新品

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/product_new?page=aspernatur&page_limit=aperiam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product_new"
);

let params = {
    "page": "aspernatur",
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


> Example response (500):

```json
{
    "message": "Server Error"
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

<!-- START_a5b1ad2131e03818cd865a9ffddc0928 -->
## change password
修改密码(已登录)

> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/password_change" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"oldPassword":"ipsa","newPassword":"officiis","newPassword_confirmation":"nesciunt"}'

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
    "oldPassword": "ipsa",
    "newPassword": "officiis",
    "newPassword_confirmation": "nesciunt"
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

<!-- START_bd1f2555bc6633390fa0cd3902b6ea26 -->
## Alipay request payment
支付宝发起支付

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/alipay/pay?no=omnis&total_amount=est&subject=voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/alipay/pay"
);

let params = {
    "no": "omnis",
    "total_amount": "est",
    "subject": "voluptas",
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
    -G "http://localhost/api/unionpay/pay?no=consectetur&subject=debitis&total_amount=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/unionpay/pay"
);

let params = {
    "no": "consectetur",
    "subject": "debitis",
    "total_amount": "et",
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

<!-- START_0dfc43254177dc34e3f52ec8dd6ee2bd -->
## User profile list
用户资料信息

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

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/user_profiles?profile_id=qui&phone=illo&real_name=recusandae&sex=praesentium&birthday=natus&age=ut&province=earum&city=dolorem&district=quod&address=iste&zip=quo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_profiles"
);

let params = {
    "profile_id": "qui",
    "phone": "illo",
    "real_name": "recusandae",
    "sex": "praesentium",
    "birthday": "natus",
    "age": "ut",
    "province": "earum",
    "city": "dolorem",
    "district": "quod",
    "address": "iste",
    "zip": "quo",
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

<!-- START_157e0e734e5b19915b7f41bafbe39486 -->
## Get user address
获取用户收货地址

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

> Example request:

```bash
curl -X POST \
    "http://localhost/api/user_addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"province":"porro","city":"nesciunt","district":"temporibus","address":"illo","zip":"mollitia","contact_name":"sequi","contact_phone":"ut"}'

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
    "province": "porro",
    "city": "nesciunt",
    "district": "temporibus",
    "address": "illo",
    "zip": "mollitia",
    "contact_name": "sequi",
    "contact_phone": "ut"
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

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/user_addresses/1?province=molestias&city=tenetur&district=laboriosam&address=dolorem&zip=architecto&contact_name=blanditiis&contact_phone=hic" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_addresses/1"
);

let params = {
    "province": "molestias",
    "city": "tenetur",
    "district": "laboriosam",
    "address": "dolorem",
    "zip": "architecto",
    "contact_name": "blanditiis",
    "contact_phone": "hic",
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

<!-- START_90957246142cc2a14824b129ecd1ba3c -->
## Request shop cart items
请求购物车数据

> Example request:

```bash
curl -X POST \
    "http://localhost/api/shop_carts?user_id=nostrum&product_id=blanditiis&amount=enim" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/shop_carts"
);

let params = {
    "user_id": "nostrum",
    "product_id": "blanditiis",
    "amount": "enim",
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
`POST api/shop_carts`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `user_id` |  required  | 用户id
    `product_id` |  optional  | 商品id
    `amount` |  optional  | 数量

<!-- END_90957246142cc2a14824b129ecd1ba3c -->

<!-- START_f9301c03a9281c0847565f96e6f723de -->
## Get order list
获取订单列表

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

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/order_details/1?no=voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/order_details/1"
);

let params = {
    "no": "voluptatem",
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

> Example request:

```bash
curl -X POST \
    "http://localhost/api/orders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"address_id":"fugiat","remark":"nobis","items":[{"product_id":9,"amount":6}]}'

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
    "address_id": "fugiat",
    "remark": "nobis",
    "items": [
        {
            "product_id": 9,
            "amount": 6
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

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/orders/pay_check?no=aliquid" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orders/pay_check"
);

let params = {
    "no": "aliquid",
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

<!-- START_bd487ab94d8034c2d13644bb1772fdfa -->
## 「ADMIN」Query user list(Admin)
查询用户数据列表

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/user?username=labore&page=quia&page_limit=eum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user"
);

let params = {
    "username": "labore",
    "page": "quia",
    "page_limit": "eum",
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
## 「ADMIN」Edit user(Admin)
修改用户资料

> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/user/1?name=at&email=omnis&phone=aperiam&avatar=ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/1"
);

let params = {
    "name": "at",
    "email": "omnis",
    "phone": "aperiam",
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
## 「ADMIN」delete User(Admin)
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
## 「ADMIN」change password(Admin)
修改密码

> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/user/reset_password/1?oldPassword=aliquam&newPassword=dignissimos&newPassword_confirmation=fuga" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/reset_password/1"
);

let params = {
    "oldPassword": "aliquam",
    "newPassword": "dignissimos",
    "newPassword_confirmation": "fuga",
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
## 「ADMIN」Get user info
获取单个用户信息

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/get_user?hash_id=recusandae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/get_user"
);

let params = {
    "hash_id": "recusandae",
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

<!-- START_8c097500e48f09ec94a3293a31853149 -->
## 「ADMIN」Query user address list
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
## 「ADMIN」Create user address

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/user_addresses?province=necessitatibus&city=dolore&district=nulla&address=aut&zip=optio&contact_name=voluptate&contact_phone=vel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses"
);

let params = {
    "province": "necessitatibus",
    "city": "dolore",
    "district": "nulla",
    "address": "aut",
    "zip": "optio",
    "contact_name": "voluptate",
    "contact_phone": "vel",
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
## 「ADMIN」Update user address
编辑用户地址

> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/user_addresses/1?address_id=voluptatem&province=qui&city=doloremque&district=consectetur&address=repellendus&zip=neque&contact_name=laboriosam&contact_phone=facilis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses/1"
);

let params = {
    "address_id": "voluptatem",
    "province": "qui",
    "city": "doloremque",
    "district": "consectetur",
    "address": "repellendus",
    "zip": "neque",
    "contact_name": "laboriosam",
    "contact_phone": "facilis",
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
## 「ADMIN」Destroy user address
删除用户地址

> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/user_addresses/1?address_id=reiciendis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses/1"
);

let params = {
    "address_id": "reiciendis",
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

<!-- START_f1cbe00c0793bf557a683e5a6440bda0 -->
## 「ADMIN」User profile list
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
## 「ADMIN」Update user profile
编辑用户资料

> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/user_profiles/1?profile_id=voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_profiles/1"
);

let params = {
    "profile_id": "voluptatem",
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
## 「ADMIN」Destroy user profile
删除用户资料

> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/user_profiles/1?profile_id=dolorem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_profiles/1"
);

let params = {
    "profile_id": "dolorem",
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

<!-- START_5859d901099a5405483c7e8dbbfe6594 -->
## 「ADMIN」Get invitation code
获取邀请码

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/invitation/code" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/invitation/code"
);

let headers = {
    "Content-Type": "application/json",
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
`GET admin/invitation/code`


<!-- END_5859d901099a5405483c7e8dbbfe6594 -->

<!-- START_8e29f704519bab0648615af972a1987d -->
## 「ADMIN」bind code
绑定用户与邀请码

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/invitation/code?phone=et&code=voluptates" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/invitation/code"
);

let params = {
    "phone": "et",
    "code": "voluptates",
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
`POST admin/invitation/code`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `phone` |  required  | 手机号
    `code` |  required  | 邀请码

<!-- END_8e29f704519bab0648615af972a1987d -->

<!-- START_1593abd93527151f8b06736da57eca07 -->
## 「ADMIN」Get user phone
获取用户的手机号

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/invitation/phone?page=consequatur&page_limit=provident" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/invitation/phone"
);

let params = {
    "page": "consequatur",
    "page_limit": "provident",
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
`GET admin/invitation/phone`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | 页码
    `page_limit` |  optional  | 页数

<!-- END_1593abd93527151f8b06736da57eca07 -->

<!-- START_c2c61ac73e177fc85d5f5487b23cf13e -->
## 「ADMIN」get product category list
获取产品分类列表

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/product_categories?page=accusamus&page_limit=suscipit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories"
);

let params = {
    "page": "accusamus",
    "page_limit": "suscipit",
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
## 「ADMIN」create product category
新建产品分类

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/product_categories?title=dolorem&title_en=voluptates&describe=velit&describe_en=qui&banner=id&description=sapiente&description_en=sunt&img=autem&parent_id=autem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories"
);

let params = {
    "title": "dolorem",
    "title_en": "voluptates",
    "describe": "velit",
    "describe_en": "qui",
    "banner": "id",
    "description": "sapiente",
    "description_en": "sunt",
    "img": "autem",
    "parent_id": "autem",
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
## 「ADMIN」edit product category
编辑产品分类

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/product_categories/1?title=enim&title_en=labore&describe=repudiandae&describe_en=qui&banner=qui&description=magnam&description_en=vel&img=temporibus&parent_id=repellat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories/1"
);

let params = {
    "title": "enim",
    "title_en": "labore",
    "describe": "repudiandae",
    "describe_en": "qui",
    "banner": "qui",
    "description": "magnam",
    "description_en": "vel",
    "img": "temporibus",
    "parent_id": "repellat",
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
## 「ADMIN」delete product category
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

<!-- START_03beced1b66f1ed5912bf94c07e1a9a8 -->
## 「ADMIN」Get product category stoies
获取产品分类故事

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/category_stories?page=nesciunt&page_limit=inventore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories"
);

let params = {
    "page": "nesciunt",
    "page_limit": "inventore",
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
## 「ADMIN」Create product category story
添加产品分类故事

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/category_stories?title=in&title_en=sed&description=amet&description_en=dicta&banner=eaque&product_category_id=dolores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories"
);

let params = {
    "title": "in",
    "title_en": "sed",
    "description": "amet",
    "description_en": "dicta",
    "banner": "eaque",
    "product_category_id": "dolores",
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
## 「ADMIN」edit product category story
编辑产品分类故事

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/category_stories/1?title=architecto&title_en=deleniti&description=maxime&description_en=reprehenderit&banner=ab&product_category_id=id" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories/1"
);

let params = {
    "title": "architecto",
    "title_en": "deleniti",
    "description": "maxime",
    "description_en": "reprehenderit",
    "banner": "ab",
    "product_category_id": "id",
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
## 「ADMIN」Delete product category story
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

<!-- START_9a7c60de622aa327ea2ab22f57fe4f40 -->
## 「ADMIN」Get product list
获取产品列表

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/product?page=mollitia&page_limit=provident" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product"
);

let params = {
    "page": "mollitia",
    "page_limit": "provident",
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
## 「ADMIN」Create product
新建商品

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/product?product_category_id=accusantium&product_name=qui&product_name_en=eligendi&thumbnail=odit&slug=quia&short_description=quia&short_description_en=officiis&price=aspernatur&sale_price=minus&stock=tempora&seo_title=rerum&seo_keyword=facere&seo_description=nemo&benefit=atque&benefit_en=expedita&tech_description=dolorum&tech_description_en=neque&description=consectetur&description_en=aut&usage=velit&usage_en=libero&main_image=eos&main_image_2=nostrum&benefit_image=quam&product_video=vitae&status=maxime&rating=qui&sold_count=soluta&review_count=vel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product"
);

let params = {
    "product_category_id": "accusantium",
    "product_name": "qui",
    "product_name_en": "eligendi",
    "thumbnail": "odit",
    "slug": "quia",
    "short_description": "quia",
    "short_description_en": "officiis",
    "price": "aspernatur",
    "sale_price": "minus",
    "stock": "tempora",
    "seo_title": "rerum",
    "seo_keyword": "facere",
    "seo_description": "nemo",
    "benefit": "atque",
    "benefit_en": "expedita",
    "tech_description": "dolorum",
    "tech_description_en": "neque",
    "description": "consectetur",
    "description_en": "aut",
    "usage": "velit",
    "usage_en": "libero",
    "main_image": "eos",
    "main_image_2": "nostrum",
    "benefit_image": "quam",
    "product_video": "vitae",
    "status": "maxime",
    "rating": "qui",
    "sold_count": "soluta",
    "review_count": "vel",
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
## 「ADMIN」Edit product
编辑商品

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/product/1?product_category_id=odit&product_name=nisi&product_name_en=voluptatem&thumbnail=dolorem&slug=officia&short_description=libero&short_description_en=ut&price=qui&sale_price=facere&stock=laudantium&seo_title=consequatur&seo_keyword=velit&seo_description=fugiat&benefit=voluptas&benefit_en=exercitationem&tech_description=et&tech_description_en=ab&description=ut&description_en=sint&usage=quia&usage_en=hic&main_image=at&main_image_2=qui&benefit_image=facere&product_video=consequatur&status=laborum&rating=sint&sold_count=accusamus&review_count=totam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product/1"
);

let params = {
    "product_category_id": "odit",
    "product_name": "nisi",
    "product_name_en": "voluptatem",
    "thumbnail": "dolorem",
    "slug": "officia",
    "short_description": "libero",
    "short_description_en": "ut",
    "price": "qui",
    "sale_price": "facere",
    "stock": "laudantium",
    "seo_title": "consequatur",
    "seo_keyword": "velit",
    "seo_description": "fugiat",
    "benefit": "voluptas",
    "benefit_en": "exercitationem",
    "tech_description": "et",
    "tech_description_en": "ab",
    "description": "ut",
    "description_en": "sint",
    "usage": "quia",
    "usage_en": "hic",
    "main_image": "at",
    "main_image_2": "qui",
    "benefit_image": "facere",
    "product_video": "consequatur",
    "status": "laborum",
    "rating": "sint",
    "sold_count": "accusamus",
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
## 「ADMIN」Off the Product
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

<!-- START_891f757575d248d6bfeaf8ccc9e0ef89 -->
## 「ADMIN」Get product sku list
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
## 「ADMIN」Create product sku
新增产品SKU

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/product_sku?title=rerum&description=autem&price=quo&stock=natus&product_id=libero" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_sku"
);

let params = {
    "title": "rerum",
    "description": "autem",
    "price": "quo",
    "stock": "natus",
    "product_id": "libero",
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
## 「ADMIN」Edit product sku
编辑产品SKU

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/product_sku/1?title=impedit&description=et&price=minima&stock=veniam&product_id=aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_sku/1"
);

let params = {
    "title": "impedit",
    "description": "et",
    "price": "minima",
    "stock": "veniam",
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
## 「ADMIN」Delete product sku
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

<!-- START_abed5cfa021d6e9a60379988984f2b8f -->
## 「ADMIN」Get order list
获取订单列表

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/order?page=maiores&page_limit=quam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order"
);

let params = {
    "page": "maiores",
    "page_limit": "quam",
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
## 「ADMIN」Search order
搜索订单

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/order?page=nulla&page_limit=quisquam&username=est&order_no=repudiandae&order_status=eum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order"
);

let params = {
    "page": "nulla",
    "page_limit": "quisquam",
    "username": "est",
    "order_no": "repudiandae",
    "order_status": "eum",
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


