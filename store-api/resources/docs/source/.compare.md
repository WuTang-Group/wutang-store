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

#general


<!-- START_77797615aeaa4fce9a94150989aed46f -->
## ResponseCode explain
本方法仅作返回code通用说明(无其他作用)

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/response_code?10001=voluptas&10003=animi&20001=ullam&40001=asperiores&40003=sint&40004=a&40005=esse&50001=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/response_code"
);

let params = {
    "10001": "voluptas",
    "10003": "animi",
    "20001": "ullam",
    "40001": "asperiores",
    "40003": "sint",
    "40004": "a",
    "40005": "esse",
    "50001": "et",
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
## api/aligateway/pay
> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/aligateway/pay" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/aligateway/pay"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET api/aligateway/pay`


<!-- END_a2f0cb2454c12a09b199d57c7e9ad462 -->

<!-- START_6151e9304eabe9201f3887072a828260 -->
## api/aligateway/return
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



### HTTP Request
`GET api/aligateway/return`


<!-- END_6151e9304eabe9201f3887072a828260 -->

<!-- START_f9a132f378294568dd73f01143c180b3 -->
## api/aligateway/notify
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

<!-- START_2e1c96dcffcfe7e0eb58d6408f1d619e -->
## Register user
用户注册

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/api/auth/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"velit","username":"non","password":"sit","captcha_key":"quia","captcha_code":"quos","password_question_id":12,"password_answer":"rerum"}'

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
    "name": "velit",
    "username": "non",
    "password": "sit",
    "captcha_key": "quia",
    "captcha_code": "quos",
    "password_question_id": 12,
    "password_answer": "rerum"
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
## get user password question
获取用户的密保问题

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/questions?username=quae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/questions"
);

let params = {
    "username": "quae",
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
        "username": "quae"
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
    -d '{"username":"itaque","password":"nam"}'

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
    "username": "itaque",
    "password": "nam"
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
    "http://store.wutang.com/api/password_reset?username=corporis&password_question_id=qui&password_answer=earum&password=facere&password_confirmation=minus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/password_reset"
);

let params = {
    "username": "corporis",
    "password_question_id": "qui",
    "password_answer": "earum",
    "password": "facere",
    "password_confirmation": "minus",
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
            "slug": "alias-natus",
            "title": "唇膏",
            "title_en": "pariatur est recusandae",
            "describe": "Ex maiores consectetur odio iusto. Doloremque tempora nihil ullam vel dicta. Libero quis dolores qui nam blanditiis nostrum. Tenetur quod qui aut aut numquam. Nostrum eos eaque repellat quia.",
            "describe_en": "Illum temporibus eum sunt quae consequatur. Ut deleniti rem voluptates culpa laudantium nulla cupiditate. Eius inventore aut consequatur est. Ipsa inventore nulla blanditiis qui.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?71962",
            "description": "Quis aut eos dolor doloremque mollitia quisquam.",
            "description_en": "Ipsam harum odio temporibus.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?89997",
            "parent_id": 10,
            "created_at": "2020-07-23 00:39:47",
            "updated_at": "2020-07-12 23:13:54",
            "parent_title": "身体护理"
        },
        {
            "id": 2,
            "slug": "voluptas-eveniet",
            "title": "精华",
            "title_en": "aut ad qui",
            "describe": "Atque ipsa et ut nulla. Debitis nihil exercitationem iste sed aut quo recusandae. Et nostrum quaerat maiores. Quas magni magnam quia qui.",
            "describe_en": "Qui eum sequi aut exercitationem minima quo sint deleniti. Ut voluptatem est laborum ea rerum velit. A quia eligendi nemo.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?67390",
            "description": "Dolorem qui mollitia ducimus.",
            "description_en": "Est sed quia quod laborum eius.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?47558",
            "parent_id": 19,
            "created_at": "2020-07-16 11:33:49",
            "updated_at": "2020-08-04 18:01:10",
            "parent_title": "腮红"
        },
        {
            "id": 3,
            "slug": "sunt-illum",
            "title": "面膜",
            "title_en": "quidem qui dolore",
            "describe": "Dolorem aut tempora quae dolor. Ea ex quia repudiandae maxime alias nemo qui. Id sit facilis enim excepturi eos labore eligendi dignissimos. Vel aut quisquam culpa aut beatae.",
            "describe_en": "Dicta autem nobis suscipit. Sit veritatis inventore dolore aut sunt.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?10391",
            "description": "Ea voluptatem veniam qui.",
            "description_en": "Consequatur facere aliquam aliquid fugit id.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?90379",
            "parent_id": 9,
            "created_at": "2020-07-19 17:25:44",
            "updated_at": "2020-08-11 09:11:31",
            "parent_title": "身体护理"
        },
        {
            "id": 4,
            "slug": "molestiae-fugit",
            "title": "隔离",
            "title_en": "voluptatem sed ex",
            "describe": "Ut quod at ipsa fuga delectus aut beatae omnis. Impedit et nulla voluptatem modi repellat quod iusto. Nesciunt perferendis et vitae omnis.",
            "describe_en": "Sit porro excepturi nesciunt veritatis. Voluptatem distinctio dolorem autem expedita nisi veritatis doloribus eum. Dolores id quasi et tempora velit. Doloribus itaque ut sint.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?82349",
            "description": "Aut maxime asperiores sit nulla consequatur repudiandae.",
            "description_en": "Distinctio quisquam asperiores voluptatem quia.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?20780",
            "parent_id": 18,
            "created_at": "2020-08-01 13:02:19",
            "updated_at": "2020-08-07 20:39:30",
            "parent_title": "BB霜"
        },
        {
            "id": 5,
            "slug": "omnis-quisquam",
            "title": "眼线",
            "title_en": "error laboriosam provident",
            "describe": "Non hic quos voluptatibus rerum quia. Pariatur est et laboriosam dolores. Est sint reiciendis odit excepturi soluta molestias. Sed fugit impedit excepturi aut sit ea.",
            "describe_en": "Cumque officiis eum id. Non omnis id eius rem sed. Aut quia dolor libero provident nulla.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?74590",
            "description": "Nam assumenda omnis velit est.",
            "description_en": "Praesentium voluptates mollitia officia.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?43567",
            "parent_id": 5,
            "created_at": "2020-08-08 03:54:31",
            "updated_at": "2020-07-27 22:58:45",
            "parent_title": "眼线"
        },
        {
            "id": 6,
            "slug": "harum-est",
            "title": "眼霜",
            "title_en": "est consequatur nostrum",
            "describe": "Reprehenderit ea itaque deleniti nisi. Quibusdam quos dolor tenetur fugiat. Nostrum hic quos saepe autem.",
            "describe_en": "Nemo tempora in alias molestiae quis eveniet rerum assumenda. Reprehenderit et deserunt ullam eum ullam laborum. Quo eius consequatur commodi omnis.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?58209",
            "description": "Delectus rerum ea ipsa fugiat.",
            "description_en": "Laboriosam odio minima sint.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?69462",
            "parent_id": 7,
            "created_at": "2020-08-11 03:27:43",
            "updated_at": "2020-07-18 08:57:29",
            "parent_title": "男士护肤"
        },
        {
            "id": 7,
            "slug": "maiores-ut",
            "title": "男士护肤",
            "title_en": "dolores esse consectetur",
            "describe": "Veniam pariatur aut tempora atque porro. Voluptatem iste corrupti iure molestiae non sit. Accusantium placeat molestias sed necessitatibus. Et amet non voluptatum doloribus.",
            "describe_en": "Odio corrupti iste consequatur deserunt aut aut quasi sit. Vero qui et hic in asperiores minima necessitatibus. Sed qui non qui. Recusandae cum dolore ut praesentium unde.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?25804",
            "description": "Animi voluptatem quam omnis est tenetur veniam.",
            "description_en": "Quia pariatur explicabo qui.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?90241",
            "parent_id": 11,
            "created_at": "2020-08-03 02:53:44",
            "updated_at": "2020-07-13 14:54:19",
            "parent_title": "彩妆盘"
        },
        {
            "id": 8,
            "slug": "itaque-sunt",
            "title": "男士护肤",
            "title_en": "culpa aut et",
            "describe": "Est sint eligendi qui quas recusandae maxime. Mollitia nemo quia amet nostrum impedit.",
            "describe_en": "Veniam ratione dolorum sed magnam. Eaque molestiae laborum illum et voluptate nihil. Sit voluptatem consequatur aut magnam et. Voluptatum est porro velit beatae.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?68229",
            "description": "Eos incidunt consequatur excepturi recusandae et.",
            "description_en": "Sit dolor qui sed aut quis ipsa.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?17987",
            "parent_id": 11,
            "created_at": "2020-07-21 03:26:17",
            "updated_at": "2020-07-23 23:15:39",
            "parent_title": "彩妆盘"
        },
        {
            "id": 9,
            "slug": "dignissimos-consequatur",
            "title": "身体护理",
            "title_en": "omnis in ducimus",
            "describe": "Soluta ducimus omnis esse. Quis sed omnis voluptatem voluptas tempora culpa. Et itaque eligendi rerum dolorem pariatur saepe. Consequuntur magnam quos expedita velit.",
            "describe_en": "Veniam beatae dolorem officiis aperiam animi aspernatur nobis. Eveniet aspernatur consectetur mollitia ipsa et repudiandae. Maxime aliquam rem consectetur tempore beatae.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?24919",
            "description": "Asperiores veritatis magni fuga similique quis tenetur.",
            "description_en": "Distinctio magni ipsam voluptatibus.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?29493",
            "parent_id": 9,
            "created_at": "2020-07-31 05:35:26",
            "updated_at": "2020-08-07 14:35:14",
            "parent_title": "身体护理"
        },
        {
            "id": 10,
            "slug": "provident-recusandae",
            "title": "身体护理",
            "title_en": "accusamus et dignissimos",
            "describe": "Incidunt unde voluptatum quae et est sed. Inventore sint explicabo aspernatur incidunt ut. Illo quia optio et accusantium minima neque tempora sint.",
            "describe_en": "Et laboriosam qui atque quam eaque. Minima saepe consequatur illo quos dolorem. Quis quisquam ullam quam rerum assumenda.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?86879",
            "description": "Nostrum saepe et omnis.",
            "description_en": "Hic dolor dolore exercitationem cum.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?65101",
            "parent_id": 15,
            "created_at": "2020-08-08 02:56:23",
            "updated_at": "2020-07-26 13:34:03",
            "parent_title": "睫毛膏"
        },
        {
            "id": 11,
            "slug": "aut-nihil",
            "title": "彩妆盘",
            "title_en": "rem hic deserunt",
            "describe": "Similique ut molestias nemo qui facilis. Est saepe temporibus voluptas officia in. Eum adipisci minima consectetur non et.",
            "describe_en": "Nesciunt voluptas hic ratione delectus voluptatem qui rerum. Suscipit saepe ad optio aut nihil atque eum. Sequi ad iste id possimus. Neque dicta id laboriosam voluptatibus natus.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?95623",
            "description": "Sed nisi maiores sed sunt ea.",
            "description_en": "Repellendus qui ut architecto aperiam dolor.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?75781",
            "parent_id": 10,
            "created_at": "2020-07-21 09:44:37",
            "updated_at": "2020-08-05 00:32:29",
            "parent_title": "身体护理"
        },
        {
            "id": 12,
            "slug": "sed-ipsam",
            "title": "彩妆盘",
            "title_en": "quos ipsum vel",
            "describe": "Voluptate magni eos et qui sed sed. Alias iure excepturi hic placeat minus facere. Optio facilis ea a beatae mollitia eaque nemo. Error est delectus enim omnis eos.",
            "describe_en": "Accusamus et expedita et ex quam. Est voluptatem voluptate hic sequi corporis et recusandae. Vitae ut recusandae ut saepe fuga.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?29104",
            "description": "Fugiat mollitia quos voluptatibus impedit reiciendis.",
            "description_en": "Dolorem labore repellendus saepe nobis ullam quos.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?18221",
            "parent_id": 1,
            "created_at": "2020-07-19 19:13:47",
            "updated_at": "2020-08-08 02:59:20",
            "parent_title": "唇膏"
        },
        {
            "id": 13,
            "slug": "sed-eius",
            "title": "洁面",
            "title_en": "laudantium et natus",
            "describe": "Laboriosam maxime at esse veritatis ut fugit illum nobis. Sed adipisci qui omnis ea amet ab molestias.",
            "describe_en": "Et cumque quibusdam quas labore eveniet commodi vitae. Et voluptas vel praesentium est. Corporis in molestiae sequi quo ut voluptatem. Sed quia laborum voluptas aspernatur eos id tempora ut.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?69239",
            "description": "Eius tempore et sed.",
            "description_en": "Consequuntur architecto autem quae dolorum debitis temporibus.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?35557",
            "parent_id": 3,
            "created_at": "2020-07-29 15:05:48",
            "updated_at": "2020-08-03 02:48:28",
            "parent_title": "面膜"
        },
        {
            "id": 14,
            "slug": "exercitationem-fugit",
            "title": "BB霜",
            "title_en": "aliquam provident quo",
            "describe": "Blanditiis quasi nemo quo dolorem necessitatibus. Deleniti dolore explicabo accusantium voluptates minima autem. Illo temporibus nobis repellat labore.",
            "describe_en": "Est quae iste autem qui. Et aliquid pariatur dignissimos modi accusantium at nam. Adipisci ut unde odit tempore eum soluta. Eaque voluptates expedita ducimus vel hic dolor molestiae voluptate.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?18578",
            "description": "Alias fugit eos voluptatem.",
            "description_en": "Quia aut id quisquam vel vitae.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?82086",
            "parent_id": 2,
            "created_at": "2020-07-11 16:25:32",
            "updated_at": "2020-08-07 08:52:12",
            "parent_title": "精华"
        },
        {
            "id": 15,
            "slug": "enim-quia",
            "title": "睫毛膏",
            "title_en": "consequatur unde debitis",
            "describe": "Corrupti tempore ullam est cupiditate. Molestiae illum excepturi consequuntur sit. Voluptatem enim voluptas illo.",
            "describe_en": "Autem repellat accusantium accusamus nihil pariatur. Quod tempora culpa est ea saepe. Ducimus tenetur earum nulla.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?41086",
            "description": "Ducimus et sint maxime enim et.",
            "description_en": "Adipisci et corporis cum sit saepe.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?12607",
            "parent_id": 6,
            "created_at": "2020-07-30 07:43:41",
            "updated_at": "2020-07-26 14:38:27",
            "parent_title": "眼霜"
        },
        {
            "id": 16,
            "slug": "consequuntur-quas",
            "title": "眼霜",
            "title_en": "ea est aliquam",
            "describe": "Et deserunt qui consequatur deserunt velit sed optio. Et aliquam cum architecto eius ut sequi omnis.",
            "describe_en": "Nostrum id sit officiis distinctio rerum quidem. Quidem qui et consequatur eum aspernatur quia. Pariatur et sunt qui voluptatum. Fugit aut veritatis deleniti quo magnam at.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?68713",
            "description": "Temporibus veritatis quos repellendus accusamus aspernatur.",
            "description_en": "Tempore cupiditate est dolorum possimus facere.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?42455",
            "parent_id": 2,
            "created_at": "2020-07-13 10:10:19",
            "updated_at": "2020-08-05 01:40:40",
            "parent_title": "精华"
        },
        {
            "id": 17,
            "slug": "dolor-accusantium",
            "title": "唇膏",
            "title_en": "qui atque est",
            "describe": "Magnam est reprehenderit exercitationem natus veritatis accusantium sunt. Nihil qui quibusdam qui eos. Dolore quam aut quis aut odio ullam et. Culpa eveniet ea quod ut.",
            "describe_en": "Illum nihil voluptas itaque. Quia facilis magnam labore aperiam magnam rerum at. Vero repudiandae tempore accusamus tenetur officiis facere adipisci.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?22020",
            "description": "Optio quisquam sit magnam.",
            "description_en": "Voluptas cumque corporis molestias esse.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?28528",
            "parent_id": 19,
            "created_at": "2020-07-12 09:32:32",
            "updated_at": "2020-08-08 05:56:44",
            "parent_title": "腮红"
        },
        {
            "id": 18,
            "slug": "sunt-cum",
            "title": "BB霜",
            "title_en": "iusto est est",
            "describe": "Natus voluptatibus iure ut ut sed ducimus fugit. Sequi omnis facere enim error. Unde quo at expedita sit doloremque iste nihil. Perferendis fuga quis fugiat veniam voluptatem vitae dolorum nobis.",
            "describe_en": "Rerum voluptas et minima in. Dignissimos praesentium distinctio iusto illo esse. Fugit aliquid ipsum omnis fugit et sunt. Fuga ut dolor repellendus libero possimus qui commodi.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?15257",
            "description": "Sed quas molestiae est error.",
            "description_en": "Iure excepturi quia non delectus nulla porro.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?78097",
            "parent_id": 20,
            "created_at": "2020-07-18 11:20:19",
            "updated_at": "2020-07-16 21:46:52",
            "parent_title": "精华"
        },
        {
            "id": 19,
            "slug": "repellat-quo",
            "title": "腮红",
            "title_en": "autem tempore a",
            "describe": "Reprehenderit nihil consequatur dolor libero. Sed omnis architecto voluptas in cum cumque. Exercitationem hic illum quidem occaecati. Sint assumenda explicabo qui dolor dolores.",
            "describe_en": "Quia exercitationem voluptas consequatur quia. Dignissimos necessitatibus quia velit id facere aut provident.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?26249",
            "description": "Dolore dolores et aliquam.",
            "description_en": "Maxime doloribus sed a tenetur.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?38906",
            "parent_id": 13,
            "created_at": "2020-07-24 20:44:53",
            "updated_at": "2020-08-02 02:26:12",
            "parent_title": "洁面"
        },
        {
            "id": 20,
            "slug": "repellat-autem",
            "title": "精华",
            "title_en": "enim rerum inventore",
            "describe": "Quia non similique error aliquam. Sed voluptates pariatur debitis nesciunt molestiae. Facere qui illo rerum voluptatibus.",
            "describe_en": "Ut reiciendis eveniet ipsum laborum laborum et impedit. Aliquid qui doloribus unde reiciendis. Odio neque officia qui nesciunt dolorem laborum maxime. Saepe dignissimos sit molestias et rem.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?47126",
            "description": "Aut qui in enim ipsa accusantium et delectus.",
            "description_en": "Eligendi quis aut eum.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?10895",
            "parent_id": 15,
            "created_at": "2020-07-18 20:34:20",
            "updated_at": "2020-07-29 06:38:45",
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
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "necessitatibus unde incidunt",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?75425",
                "slug": "similique-expedita",
                "short_description": "Numquam delectus neque adipisci.",
                "short_description_en": "Et esse adipisci doloribus. Qui maiores mollitia placeat quo. Asperiores ipsum id temporibus magni. Tempora et est veniam vel. Saepe quo veniam necessitatibus dolores ut.",
                "price": "1235.00",
                "sale_price": "5278.00",
                "stock": 901,
                "spec": null,
                "seo_title": "quisquam vitae eos",
                "seo_keyword": "ut",
                "seo_description": "Dolores ipsam possimus ut eos ipsum officia.",
                "benefit": "Quibusdam quam ab aut error culpa nihil corrupti culpa. Voluptas distinctio minus et numquam maiores illo sit. Aspernatur corrupti possimus eligendi possimus dolor dolore.",
                "benefit_en": "Autem ducimus et vel atque a iusto. Est beatae sint cumque laudantium.",
                "tech_description": "Aperiam recusandae nisi corporis sed deserunt. Velit dolores repellendus a soluta velit rerum. Molestiae expedita velit dolores iste deserunt rem ex.",
                "tech_description_en": "Omnis animi enim dolores harum culpa nihil. Dolorem est ad quae quisquam provident. Aperiam cum quas architecto excepturi itaque. Molestiae quis deleniti asperiores quia. Sed quisquam eum nisi et.",
                "description": "Ipsum corporis incidunt ipsa. Quo quas natus laboriosam perferendis rerum corrupti. Minus molestiae consequatur ipsum voluptate.",
                "description_en": "Dicta blanditiis sint impedit. Id nobis architecto eaque exercitationem. Repellat ea voluptas est incidunt aut. Quo ipsa quo voluptatum omnis quo veritatis fugiat dolorem.",
                "usage": "Quod sint omnis libero facilis eveniet maxime earum eaque. Et at reprehenderit sit id ipsa eum. Nihil rerum dolores voluptatum aut ipsa quisquam.",
                "usage_en": "Quae recusandae eligendi inventore. Soluta vero eum dolores ut quaerat. Illo deleniti nisi ea vero laborum nulla saepe.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?40191",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?37486",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?14664",
                "product_video": null,
                "status": "促销",
                "rating": 9.73,
                "sold_count": 4778,
                "review_count": 7558,
                "created_at": "2020-08-10 13:52:36",
                "updated_at": "2020-07-20 03:03:36",
                "product_category": {
                    "id": 11,
                    "slug": "aut-nihil",
                    "title": "彩妆盘",
                    "title_en": "rem hic deserunt",
                    "describe": "Similique ut molestias nemo qui facilis. Est saepe temporibus voluptas officia in. Eum adipisci minima consectetur non et.",
                    "describe_en": "Nesciunt voluptas hic ratione delectus voluptatem qui rerum. Suscipit saepe ad optio aut nihil atque eum. Sequi ad iste id possimus. Neque dicta id laboriosam voluptatibus natus.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?95623",
                    "description": "Sed nisi maiores sed sunt ea.",
                    "description_en": "Repellendus qui ut architecto aperiam dolor.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?75781",
                    "parent_id": 10,
                    "created_at": "2020-07-21 09:44:37",
                    "updated_at": "2020-08-05 00:32:29"
                }
            },
            {
                "id": 2,
                "product_category_id": 6,
                "product_name": "黑钻肌光精华",
                "product_name_en": "aut vel itaque",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?23372",
                "slug": "placeat-est",
                "short_description": "Ea consequatur architecto saepe.",
                "short_description_en": "Beatae quo dolores sint animi nostrum. Distinctio modi sint et itaque. Quibusdam porro sint rerum fugit sapiente cupiditate. Amet quia ipsam est ipsum.",
                "price": "1874.00",
                "sale_price": "6989.00",
                "stock": 373,
                "spec": null,
                "seo_title": "et itaque maiores",
                "seo_keyword": "impedit",
                "seo_description": "Autem nihil rerum minima ab.",
                "benefit": "Ipsum atque facilis fuga recusandae est quisquam. Incidunt omnis tenetur officia non est et itaque. Consequuntur necessitatibus eos ut. Totam reprehenderit vero sint commodi sit nemo.",
                "benefit_en": "Et eaque qui atque nulla. Autem vitae quam asperiores dolores praesentium explicabo voluptatum. Perspiciatis vitae repellendus deleniti ut. Facilis enim nulla vel necessitatibus.",
                "tech_description": "Occaecati autem facilis laboriosam maiores quisquam. Accusamus quisquam veritatis a alias repudiandae. Quidem ullam minus autem odio.",
                "tech_description_en": "Soluta pariatur ea sit dolorem minus doloribus. Odio omnis ducimus temporibus. Non voluptates sunt suscipit et.",
                "description": "Veniam dolorem eaque sit cupiditate quidem est. Voluptatum aliquam soluta quis saepe id. Minima voluptate quo voluptates.",
                "description_en": "Hic corrupti consequatur similique ut error id. Hic dolores quae excepturi laboriosam voluptatem laboriosam. Nisi nemo et qui modi ea.",
                "usage": "Sed laboriosam nostrum dolorum aspernatur beatae et dolorem. Fuga autem quisquam incidunt et. Et error odio vitae enim et dolores non.",
                "usage_en": "Enim ab saepe qui assumenda temporibus. Similique dolorum dignissimos non vel nemo dolor. Dolor temporibus maiores sunt rem ad dolore amet.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?76432",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?53919",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?40688",
                "product_video": null,
                "status": "新品",
                "rating": 4.9399999999999995,
                "sold_count": 9894,
                "review_count": 4801,
                "created_at": "2020-07-31 18:49:45",
                "updated_at": "2020-07-29 15:50:27",
                "product_category": {
                    "id": 6,
                    "slug": "harum-est",
                    "title": "眼霜",
                    "title_en": "est consequatur nostrum",
                    "describe": "Reprehenderit ea itaque deleniti nisi. Quibusdam quos dolor tenetur fugiat. Nostrum hic quos saepe autem.",
                    "describe_en": "Nemo tempora in alias molestiae quis eveniet rerum assumenda. Reprehenderit et deserunt ullam eum ullam laborum. Quo eius consequatur commodi omnis.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?58209",
                    "description": "Delectus rerum ea ipsa fugiat.",
                    "description_en": "Laboriosam odio minima sint.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?69462",
                    "parent_id": 7,
                    "created_at": "2020-08-11 03:27:43",
                    "updated_at": "2020-07-18 08:57:29"
                }
            },
            {
                "id": 3,
                "product_category_id": 11,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "eaque dolores consequatur",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?51692",
                "slug": "vero-perspiciatis",
                "short_description": "Nulla aut unde non sint.",
                "short_description_en": "Incidunt eligendi maxime rem. Aperiam reiciendis voluptatum labore placeat. Doloribus culpa dolores at.",
                "price": "3375.00",
                "sale_price": "8778.00",
                "stock": 691,
                "spec": null,
                "seo_title": "architecto rerum voluptas",
                "seo_keyword": "labore",
                "seo_description": "Ea quis voluptas impedit non.",
                "benefit": "Mollitia est vitae nihil et officiis totam soluta. Eveniet hic blanditiis culpa et. Labore voluptas minus quo suscipit optio. Maiores repellendus voluptatum saepe quas et maiores voluptatem.",
                "benefit_en": "Laudantium hic provident magnam suscipit. Possimus officia amet qui.",
                "tech_description": "Fugit vitae est commodi ducimus aut. Voluptas voluptas sed aut aut quia. Quia est aspernatur culpa nobis nisi.",
                "tech_description_en": "Fugiat dolore rerum porro maiores ullam. Nulla sit voluptate cumque eum voluptas. Alias explicabo error tempora earum molestias officiis. Quia id consequatur veniam quos occaecati nostrum.",
                "description": "Est soluta rerum esse error. Sit iste nostrum totam beatae.",
                "description_en": "Est et dolores reiciendis alias est. Delectus sint qui commodi at sit. Qui consectetur officia placeat eum animi quas. Delectus et sunt sit impedit.",
                "usage": "Quae maxime molestias inventore aut quo a. Odio et sunt eum facilis et. Modi sit unde dolorum. Soluta aut modi exercitationem reprehenderit iusto quasi dolores. Nihil corporis et corrupti et eligendi.",
                "usage_en": "Eos consequuntur saepe omnis ut minima. Commodi sit voluptas ea debitis aut suscipit labore. Vitae iusto labore porro occaecati quo. Dicta rerum fuga voluptas veritatis commodi ab repellendus iusto.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?14174",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?97954",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?98347",
                "product_video": null,
                "status": "促销",
                "rating": 3.18,
                "sold_count": 7303,
                "review_count": 7365,
                "created_at": "2020-07-29 17:39:29",
                "updated_at": "2020-07-14 11:50:24",
                "product_category": {
                    "id": 11,
                    "slug": "aut-nihil",
                    "title": "彩妆盘",
                    "title_en": "rem hic deserunt",
                    "describe": "Similique ut molestias nemo qui facilis. Est saepe temporibus voluptas officia in. Eum adipisci minima consectetur non et.",
                    "describe_en": "Nesciunt voluptas hic ratione delectus voluptatem qui rerum. Suscipit saepe ad optio aut nihil atque eum. Sequi ad iste id possimus. Neque dicta id laboriosam voluptatibus natus.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?95623",
                    "description": "Sed nisi maiores sed sunt ea.",
                    "description_en": "Repellendus qui ut architecto aperiam dolor.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?75781",
                    "parent_id": 10,
                    "created_at": "2020-07-21 09:44:37",
                    "updated_at": "2020-08-05 00:32:29"
                }
            },
            {
                "id": 4,
                "product_category_id": 3,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "sit voluptate earum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?49512",
                "slug": "assumenda-autem",
                "short_description": "Ut eos quidem voluptatem.",
                "short_description_en": "Et ab quia quae blanditiis inventore. Provident quibusdam saepe dolor. Eos aut corporis modi enim sit voluptatem.",
                "price": "8590.00",
                "sale_price": "7814.00",
                "stock": 993,
                "spec": null,
                "seo_title": "ducimus soluta vitae",
                "seo_keyword": "quia",
                "seo_description": "Beatae sunt et autem dolore.",
                "benefit": "Rerum reiciendis inventore qui sed placeat. Non ab voluptas enim consequatur eligendi sunt deleniti. Et et libero numquam ratione dicta.",
                "benefit_en": "Molestiae ipsam vel dolore. Praesentium dolorem aut similique ad consequuntur. Labore labore sunt similique ipsum esse laboriosam. Voluptatibus ipsa itaque ea magni delectus corrupti.",
                "tech_description": "Est quas neque voluptatem odit. Iste qui aut cum recusandae velit porro.",
                "tech_description_en": "Nisi quis magnam impedit quam minima porro neque. Voluptatem delectus voluptatem dolores quos occaecati. Aspernatur velit fugit asperiores provident exercitationem dignissimos est aut. Et ut sit et tempore dolores.",
                "description": "Repudiandae adipisci omnis et ipsam consequatur quo et. Sunt magni quia commodi iure error ut. Consequatur illo nulla dolore aut. Qui eum ut debitis dolorem nesciunt.",
                "description_en": "Cupiditate ut neque officia autem temporibus. Et fugit dignissimos dolor quia consequuntur. Omnis sequi sed eligendi quia perspiciatis.",
                "usage": "Laboriosam est omnis voluptatem voluptatem iste qui. Est tempora ut odit omnis nam impedit unde omnis. Exercitationem voluptas ratione dolorem. Quis officia facere porro voluptas exercitationem consequatur a.",
                "usage_en": "Ut magni corporis est aliquid. Sequi tempora facilis sunt eius sapiente. Natus nulla in velit.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?54606",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?80924",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?67601",
                "product_video": null,
                "status": "新品",
                "rating": 5.87,
                "sold_count": 3125,
                "review_count": 8941,
                "created_at": "2020-07-12 17:51:36",
                "updated_at": "2020-07-11 17:05:56",
                "product_category": {
                    "id": 3,
                    "slug": "sunt-illum",
                    "title": "面膜",
                    "title_en": "quidem qui dolore",
                    "describe": "Dolorem aut tempora quae dolor. Ea ex quia repudiandae maxime alias nemo qui. Id sit facilis enim excepturi eos labore eligendi dignissimos. Vel aut quisquam culpa aut beatae.",
                    "describe_en": "Dicta autem nobis suscipit. Sit veritatis inventore dolore aut sunt.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?10391",
                    "description": "Ea voluptatem veniam qui.",
                    "description_en": "Consequatur facere aliquam aliquid fugit id.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?90379",
                    "parent_id": 9,
                    "created_at": "2020-07-19 17:25:44",
                    "updated_at": "2020-08-11 09:11:31"
                }
            },
            {
                "id": 5,
                "product_category_id": 12,
                "product_name": "钻石焕活面膜",
                "product_name_en": "quia consequatur in",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?26556",
                "slug": "placeat-accusamus",
                "short_description": "Cum voluptas ut libero.",
                "short_description_en": "Omnis voluptates nesciunt quo temporibus nihil voluptatem. Velit provident consequuntur quo tenetur blanditiis est animi. Tenetur enim saepe quidem qui ratione ab.",
                "price": "9946.00",
                "sale_price": "9265.00",
                "stock": 173,
                "spec": null,
                "seo_title": "dolor ut consequatur",
                "seo_keyword": "ab",
                "seo_description": "Vero eum voluptatibus labore omnis ea.",
                "benefit": "Qui vel dolorem et. Adipisci quos officiis nihil mollitia aut a. Provident minima doloremque quam qui blanditiis ut dicta. Consequuntur qui accusantium et mollitia sint adipisci. Corrupti est placeat libero dolorem.",
                "benefit_en": "Non sint facere hic nihil voluptate quae reiciendis. Et incidunt id vel rerum. Consequatur quis inventore quis nobis beatae voluptatibus sed. Qui dicta sint et quis ut adipisci ut.",
                "tech_description": "Officia sit sunt veniam sit nisi vitae repudiandae sint. Id iusto doloribus voluptatem adipisci. Aliquid excepturi voluptas sunt.",
                "tech_description_en": "Quo et debitis natus et qui. Nostrum alias autem laudantium dolorum non. Praesentium optio hic neque dolore minima.",
                "description": "Et quam veritatis quae. Ea voluptatem velit eos eos vitae id in. Exercitationem non quaerat repellendus omnis sint officia. Et eveniet aperiam fugit autem doloribus quo autem.",
                "description_en": "Necessitatibus omnis qui deleniti non. Laboriosam possimus itaque facere facere natus. Necessitatibus deleniti quia nihil dolor. Nemo omnis repellat consectetur.",
                "usage": "In quasi iusto officiis tenetur sed sint. Ipsam quibusdam maxime explicabo. Omnis unde dolorem eos architecto ad atque quae culpa. Corporis eveniet autem rem ipsum aut perspiciatis maxime.",
                "usage_en": "Reiciendis a aut iure. Rerum dolore dolorem totam nesciunt impedit tempora. Voluptatem repudiandae voluptate minima illo dolore minus voluptas. Qui ad qui consequatur iure.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?80865",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?80438",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?49772",
                "product_video": null,
                "status": "新品",
                "rating": 3.82,
                "sold_count": 9269,
                "review_count": 6159,
                "created_at": "2020-08-10 11:00:29",
                "updated_at": "2020-07-22 22:56:08",
                "product_category": {
                    "id": 12,
                    "slug": "sed-ipsam",
                    "title": "彩妆盘",
                    "title_en": "quos ipsum vel",
                    "describe": "Voluptate magni eos et qui sed sed. Alias iure excepturi hic placeat minus facere. Optio facilis ea a beatae mollitia eaque nemo. Error est delectus enim omnis eos.",
                    "describe_en": "Accusamus et expedita et ex quam. Est voluptatem voluptate hic sequi corporis et recusandae. Vitae ut recusandae ut saepe fuga.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?29104",
                    "description": "Fugiat mollitia quos voluptatibus impedit reiciendis.",
                    "description_en": "Dolorem labore repellendus saepe nobis ullam quos.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?18221",
                    "parent_id": 1,
                    "created_at": "2020-07-19 19:13:47",
                    "updated_at": "2020-08-08 02:59:20"
                }
            },
            {
                "id": 6,
                "product_category_id": 12,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "magnam nihil fuga",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?80007",
                "slug": "a-accusamus",
                "short_description": "Voluptatibus est beatae qui sunt odio rerum est.",
                "short_description_en": "Non ut ipsum dolores veritatis cumque et. Eaque officiis asperiores perferendis. Consequuntur tempore laborum perspiciatis magni consectetur qui rerum nobis. Sit aut eos ducimus. Saepe sit iste fugit qui.",
                "price": "2587.00",
                "sale_price": "737.00",
                "stock": 136,
                "spec": null,
                "seo_title": "quo et voluptas",
                "seo_keyword": "sapiente",
                "seo_description": "Fugiat vel aut doloribus consequuntur veniam laboriosam.",
                "benefit": "A reiciendis aut quaerat exercitationem voluptate iusto. Rerum quis consequatur enim deleniti quisquam aut atque. Expedita adipisci placeat non quis libero at veniam sed.",
                "benefit_en": "Aut quas itaque aspernatur deserunt rerum. Officia est itaque et beatae. Aut molestias reprehenderit architecto. Rem omnis quia eligendi reiciendis fugiat illum.",
                "tech_description": "Magnam facere perferendis dolorum est distinctio eligendi facilis. Harum magni culpa omnis nulla voluptatibus laborum in. Autem blanditiis magni aspernatur est corrupti modi sed.",
                "tech_description_en": "Animi iure rerum eveniet et veritatis facere praesentium. Et doloremque beatae eveniet corporis culpa. Impedit doloribus et voluptas dolor voluptate laboriosam possimus.",
                "description": "Perspiciatis ipsam tempora adipisci est occaecati ex nam. Eaque nihil similique voluptatem non quos. Nostrum qui nesciunt enim eveniet dolor. Veniam nam possimus velit veniam velit aut consequatur.",
                "description_en": "Est sint quam ipsam. Ut voluptas dolor rerum dolor. Et mollitia voluptas voluptatem. Nemo eos voluptates labore laudantium est voluptatem.",
                "usage": "Perferendis magni iusto sit dolorem nihil assumenda. Iure fugit quisquam in incidunt unde similique dicta. Commodi possimus minus molestias id. Id provident aut incidunt modi.",
                "usage_en": "Sapiente qui illo asperiores cupiditate ipsam. Delectus nam doloribus similique recusandae et. Placeat dicta quae totam voluptate explicabo.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?39266",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?60973",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?97480",
                "product_video": null,
                "status": "畅销",
                "rating": 7.77,
                "sold_count": 1234,
                "review_count": 3694,
                "created_at": "2020-07-18 07:38:53",
                "updated_at": "2020-07-15 02:24:33",
                "product_category": {
                    "id": 12,
                    "slug": "sed-ipsam",
                    "title": "彩妆盘",
                    "title_en": "quos ipsum vel",
                    "describe": "Voluptate magni eos et qui sed sed. Alias iure excepturi hic placeat minus facere. Optio facilis ea a beatae mollitia eaque nemo. Error est delectus enim omnis eos.",
                    "describe_en": "Accusamus et expedita et ex quam. Est voluptatem voluptate hic sequi corporis et recusandae. Vitae ut recusandae ut saepe fuga.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?29104",
                    "description": "Fugiat mollitia quos voluptatibus impedit reiciendis.",
                    "description_en": "Dolorem labore repellendus saepe nobis ullam quos.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?18221",
                    "parent_id": 1,
                    "created_at": "2020-07-19 19:13:47",
                    "updated_at": "2020-08-08 02:59:20"
                }
            },
            {
                "id": 7,
                "product_category_id": 7,
                "product_name": "钻石焕活面膜",
                "product_name_en": "at dolores alias",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?10459",
                "slug": "incidunt-nulla",
                "short_description": "Qui quasi hic ut.",
                "short_description_en": "Sint ex quis sed eum. Voluptatem aliquam eaque labore quis voluptate. Excepturi laboriosam et est qui velit. Hic voluptates explicabo necessitatibus accusantium maxime nulla. Repellendus dolores ut sit id dignissimos praesentium.",
                "price": "6893.00",
                "sale_price": "7358.00",
                "stock": 747,
                "spec": null,
                "seo_title": "culpa sunt qui",
                "seo_keyword": "hic",
                "seo_description": "Sed non pariatur vel et dignissimos velit.",
                "benefit": "Repellendus officiis quas incidunt ratione sed. Ad possimus voluptatum dolores laboriosam nihil consequatur. Et sit in dicta temporibus.",
                "benefit_en": "Amet aperiam sint rerum qui aut. Laborum necessitatibus quis nesciunt architecto. Quod quia quis nesciunt. Est corporis quisquam porro sit velit amet.",
                "tech_description": "Maxime sit consectetur quis culpa. Et error ullam est. Sequi non voluptatem est nisi illum ut sit molestiae.",
                "tech_description_en": "Minima voluptates numquam et. Labore distinctio accusantium quia cumque ut totam dolor.",
                "description": "Rerum tempora et et adipisci qui labore qui. Et ducimus id et a natus. Suscipit quia ducimus quibusdam voluptas quasi et.",
                "description_en": "Qui quibusdam dolor ea suscipit. Aut dolores molestiae similique fugiat corporis quae porro. Ipsum tempore molestias exercitationem et ut aliquam ut laboriosam. Quae quibusdam itaque et aperiam totam qui vel.",
                "usage": "Hic non facilis vitae sunt quam cumque et. Temporibus et nulla ipsa ratione culpa doloremque.",
                "usage_en": "Dolores ut sit qui neque non ut. Et in illum atque vitae veniam tempore sit at. Exercitationem maiores rerum et voluptatibus. In nostrum voluptatibus deleniti voluptas.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?30627",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?82324",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?22760",
                "product_video": null,
                "status": "促销",
                "rating": 1.8399999999999999,
                "sold_count": 5789,
                "review_count": 1090,
                "created_at": "2020-07-21 19:15:45",
                "updated_at": "2020-07-14 00:25:53",
                "product_category": {
                    "id": 7,
                    "slug": "maiores-ut",
                    "title": "男士护肤",
                    "title_en": "dolores esse consectetur",
                    "describe": "Veniam pariatur aut tempora atque porro. Voluptatem iste corrupti iure molestiae non sit. Accusantium placeat molestias sed necessitatibus. Et amet non voluptatum doloribus.",
                    "describe_en": "Odio corrupti iste consequatur deserunt aut aut quasi sit. Vero qui et hic in asperiores minima necessitatibus. Sed qui non qui. Recusandae cum dolore ut praesentium unde.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?25804",
                    "description": "Animi voluptatem quam omnis est tenetur veniam.",
                    "description_en": "Quia pariatur explicabo qui.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?90241",
                    "parent_id": 11,
                    "created_at": "2020-08-03 02:53:44",
                    "updated_at": "2020-07-13 14:54:19"
                }
            },
            {
                "id": 8,
                "product_category_id": 19,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "officia pariatur inventore",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?40116",
                "slug": "a-voluptatibus",
                "short_description": "Dolorem harum autem nisi doloribus nostrum.",
                "short_description_en": "Quisquam voluptate vel consequatur repudiandae. Dolorum quidem doloremque sed eaque autem voluptatibus. Nesciunt molestiae culpa inventore exercitationem enim consequatur nihil qui. Cupiditate provident est provident amet incidunt eum molestias voluptatibus.",
                "price": "4248.00",
                "sale_price": "5686.00",
                "stock": 935,
                "spec": null,
                "seo_title": "minus dolorum magnam",
                "seo_keyword": "velit",
                "seo_description": "Blanditiis sint et et.",
                "benefit": "Repudiandae rerum voluptatem voluptatem fugit qui nisi velit. Odit voluptatem dolores sit quidem aut aspernatur. Sunt itaque cumque aut nobis sit incidunt.",
                "benefit_en": "Ad eius nisi officiis repellendus doloribus reprehenderit quisquam. Corporis sequi consequatur dignissimos eveniet autem molestiae. Dolore reprehenderit laudantium ut porro eum voluptas. Nihil ut distinctio tenetur neque voluptas voluptas nihil.",
                "tech_description": "Facilis voluptate corporis aut facere vero. Veritatis deserunt et quam numquam. Et aliquid deleniti eligendi aut possimus. Suscipit sapiente ducimus necessitatibus similique repudiandae accusamus.",
                "tech_description_en": "Est repellat veniam aut beatae repellat architecto perferendis. Provident nesciunt vel veniam ipsum quibusdam ipsum. Aliquid quae dolorem sit. Est ut dignissimos fugit.",
                "description": "Fugiat aliquid numquam ad quae. Tempora explicabo sed at corporis officia facere omnis minima. Voluptates quisquam numquam est.",
                "description_en": "Eum earum est tempore voluptates eligendi. Omnis aut consectetur error natus qui qui. Unde fugit delectus quidem.",
                "usage": "Et quia nihil et iste. Est nisi aperiam est ratione iure aut quidem. Amet velit inventore sint repellendus et qui. Est neque vel et unde qui explicabo omnis error.",
                "usage_en": "Nihil tempora qui enim id quo ut. Ullam est eveniet voluptate rerum qui aliquam minima. Sunt illo expedita saepe debitis. Magnam ipsa dolor officia atque totam eveniet ut perferendis.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?49061",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?38582",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?90730",
                "product_video": null,
                "status": "畅销",
                "rating": 6.19,
                "sold_count": 6883,
                "review_count": 4266,
                "created_at": "2020-07-23 10:27:51",
                "updated_at": "2020-08-01 18:18:27",
                "product_category": {
                    "id": 19,
                    "slug": "repellat-quo",
                    "title": "腮红",
                    "title_en": "autem tempore a",
                    "describe": "Reprehenderit nihil consequatur dolor libero. Sed omnis architecto voluptas in cum cumque. Exercitationem hic illum quidem occaecati. Sint assumenda explicabo qui dolor dolores.",
                    "describe_en": "Quia exercitationem voluptas consequatur quia. Dignissimos necessitatibus quia velit id facere aut provident.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?26249",
                    "description": "Dolore dolores et aliquam.",
                    "description_en": "Maxime doloribus sed a tenetur.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?38906",
                    "parent_id": 13,
                    "created_at": "2020-07-24 20:44:53",
                    "updated_at": "2020-08-02 02:26:12"
                }
            },
            {
                "id": 9,
                "product_category_id": 16,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "sequi pariatur voluptatum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?42939",
                "slug": "dolorum-quod",
                "short_description": "Doloremque fuga vel rerum.",
                "short_description_en": "Odio at voluptatem facere quo quis quo saepe. Molestias et excepturi qui suscipit ullam nesciunt et. Error omnis est ex nulla atque qui beatae natus.",
                "price": "5387.00",
                "sale_price": "282.00",
                "stock": 705,
                "spec": null,
                "seo_title": "harum iure ab",
                "seo_keyword": "voluptatum",
                "seo_description": "Voluptatem non velit vel et.",
                "benefit": "Autem aliquam aut aut quaerat qui autem aut. Dignissimos nulla autem quisquam dolore. Nemo libero porro excepturi aliquid. In et eligendi quo mollitia repudiandae.",
                "benefit_en": "Cumque suscipit ut dolore qui consequatur. Fugiat sunt velit voluptas repellat placeat. Voluptates minima sapiente qui dolore ut. Accusamus et ea dignissimos est.",
                "tech_description": "Dolor aliquam culpa rem provident debitis id veritatis. Omnis at ea a error minima. Explicabo sed magnam eius veniam consequatur delectus. Quaerat delectus distinctio harum repellat dolor.",
                "tech_description_en": "In labore cum non. Quisquam quasi placeat fugiat fugit. Nulla magnam et sed placeat magnam. Qui nostrum quia amet in accusantium sit nisi.",
                "description": "Nemo et explicabo repellat voluptatum ut. Rem tempore eum quia quia est beatae velit. Amet et qui consequuntur dolores.",
                "description_en": "Eum dolorem excepturi dignissimos architecto. Nam consequatur vel consequatur voluptate magni odit consectetur. Esse eum corporis error dolor fugiat provident perferendis. Id quo enim maiores excepturi non. Quo id voluptatem cum et magni et.",
                "usage": "Quas quidem ut corrupti voluptatem sit ad. Voluptatem reprehenderit nesciunt similique officiis eos distinctio et. Sunt a veniam et omnis ut earum. Necessitatibus rerum ea quia laborum eos.",
                "usage_en": "Reprehenderit est repellat eaque nisi reiciendis sunt quia. Voluptatem ut sed ullam quod earum dicta repellat totam. Suscipit vel non nihil.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?67932",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?91995",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?58610",
                "product_video": null,
                "status": "新品",
                "rating": 4.04,
                "sold_count": 5021,
                "review_count": 1264,
                "created_at": "2020-08-07 01:54:05",
                "updated_at": "2020-07-24 07:47:50",
                "product_category": {
                    "id": 16,
                    "slug": "consequuntur-quas",
                    "title": "眼霜",
                    "title_en": "ea est aliquam",
                    "describe": "Et deserunt qui consequatur deserunt velit sed optio. Et aliquam cum architecto eius ut sequi omnis.",
                    "describe_en": "Nostrum id sit officiis distinctio rerum quidem. Quidem qui et consequatur eum aspernatur quia. Pariatur et sunt qui voluptatum. Fugit aut veritatis deleniti quo magnam at.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?68713",
                    "description": "Temporibus veritatis quos repellendus accusamus aspernatur.",
                    "description_en": "Tempore cupiditate est dolorum possimus facere.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?42455",
                    "parent_id": 2,
                    "created_at": "2020-07-13 10:10:19",
                    "updated_at": "2020-08-05 01:40:40"
                }
            },
            {
                "id": 10,
                "product_category_id": 14,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "quam magni vero",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?68904",
                "slug": "nemo-reprehenderit",
                "short_description": "Iure et vel ut.",
                "short_description_en": "Molestiae iure error iure voluptate dolor non et. Consectetur officiis autem et et blanditiis voluptate voluptatem. Provident asperiores voluptatem fuga ab deleniti. Impedit sit excepturi atque consequatur ad asperiores aut.",
                "price": "8983.00",
                "sale_price": "4809.00",
                "stock": 113,
                "spec": null,
                "seo_title": "et voluptate inventore",
                "seo_keyword": "repudiandae",
                "seo_description": "Molestiae sed quas illo tempore rerum quia.",
                "benefit": "Culpa delectus vel autem pariatur est. Facere libero velit sint est voluptatibus. Cum accusamus eaque cum laboriosam molestiae eos. Perspiciatis adipisci et dolor itaque quae sunt consequatur exercitationem.",
                "benefit_en": "Numquam mollitia alias in voluptate nulla explicabo vel. Non omnis voluptas qui dolores neque minus. Occaecati velit a laudantium exercitationem. Delectus sunt exercitationem delectus tenetur.",
                "tech_description": "Maiores vero eveniet vel autem facilis. Officiis voluptatibus rerum illo iste quo. Voluptatem corrupti deserunt at nam deleniti soluta voluptatem.",
                "tech_description_en": "Autem consequatur ea ut omnis iusto facere. Voluptatem non soluta quo expedita magni et vero enim. Esse iusto sunt exercitationem autem eligendi omnis voluptatem accusamus. Maiores enim reiciendis tempore illum voluptas.",
                "description": "Quia sint voluptatem est dolore. Quis excepturi consequuntur quod non qui culpa.",
                "description_en": "Eos adipisci et et pariatur nisi voluptatem voluptatum. Ad est et et adipisci maxime quos voluptatem. Sequi veritatis voluptatibus et voluptas voluptatem ex qui sit. Debitis commodi eius quisquam aut doloremque qui.",
                "usage": "Blanditiis cumque quis ut qui ea quis dignissimos. Illo optio cumque rerum fuga. Recusandae voluptates ducimus exercitationem ipsa praesentium quia facere.",
                "usage_en": "Asperiores labore voluptas ducimus non sapiente. Ullam eum ex nihil magnam. Aperiam eveniet molestiae qui possimus. Sint hic itaque sed laudantium deserunt.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?66856",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?95017",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?95664",
                "product_video": null,
                "status": "新品",
                "rating": 7.92,
                "sold_count": 9693,
                "review_count": 3484,
                "created_at": "2020-07-23 13:49:53",
                "updated_at": "2020-07-30 17:07:30",
                "product_category": {
                    "id": 14,
                    "slug": "exercitationem-fugit",
                    "title": "BB霜",
                    "title_en": "aliquam provident quo",
                    "describe": "Blanditiis quasi nemo quo dolorem necessitatibus. Deleniti dolore explicabo accusantium voluptates minima autem. Illo temporibus nobis repellat labore.",
                    "describe_en": "Est quae iste autem qui. Et aliquid pariatur dignissimos modi accusantium at nam. Adipisci ut unde odit tempore eum soluta. Eaque voluptates expedita ducimus vel hic dolor molestiae voluptate.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?18578",
                    "description": "Alias fugit eos voluptatem.",
                    "description_en": "Quia aut id quisquam vel vitae.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?82086",
                    "parent_id": 2,
                    "created_at": "2020-07-11 16:25:32",
                    "updated_at": "2020-08-07 08:52:12"
                }
            },
            {
                "id": 11,
                "product_category_id": 18,
                "product_name": "钻石焕活面膜",
                "product_name_en": "corporis est ut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?45575",
                "slug": "aut-facilis",
                "short_description": "Molestiae hic quo velit.",
                "short_description_en": "Aut impedit recusandae hic ut perferendis magnam. Quis harum sed aut amet quis eum quia est.",
                "price": "8791.00",
                "sale_price": "9729.00",
                "stock": 346,
                "spec": null,
                "seo_title": "voluptate explicabo non",
                "seo_keyword": "numquam",
                "seo_description": "A et molestiae fugiat.",
                "benefit": "Non sit et culpa velit eum. Sequi autem iste sed qui consequatur molestias. Non eligendi ex qui illo maiores.",
                "benefit_en": "Nostrum et ut voluptatem quis enim officiis minus. Quaerat hic eos et aut aut. Nobis repellat enim est minima fugiat soluta consequuntur.",
                "tech_description": "Aspernatur vitae ut corrupti et voluptate quos. Eligendi eaque vero ratione est quod qui. Tempora a nobis quo distinctio ut dolor dignissimos. Asperiores molestiae porro vel laboriosam aut dolorum.",
                "tech_description_en": "Ratione ea mollitia dolore harum laboriosam autem dolorum. Nemo corporis ad soluta placeat eius. Voluptatem ut iusto sapiente tempora sequi omnis similique. Veniam sed nemo facilis quibusdam quam.",
                "description": "Expedita earum neque maiores atque ab asperiores. Quia dolorem labore quaerat magni quo quia. Incidunt iusto aut voluptatum odit.",
                "description_en": "Est eius animi ut dolores excepturi vero enim. Repellendus rerum quo consequatur beatae possimus placeat sint. Ab qui necessitatibus sed sit molestias distinctio. Non officiis est rerum veritatis eum nihil amet.",
                "usage": "Consequatur natus laboriosam dolore est velit aliquam deleniti. Voluptatibus non voluptatem dolorem est officiis explicabo illo. Et voluptatem sequi culpa natus blanditiis ipsum non.",
                "usage_en": "Et sint ut eaque at quae dolores quis et. Adipisci excepturi dolor non est voluptas. Quae eum rerum nemo consectetur quo. Unde nesciunt aut maxime ad ut totam asperiores.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?10781",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?67924",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?50800",
                "product_video": null,
                "status": "促销",
                "rating": 1.5699999999999998,
                "sold_count": 7592,
                "review_count": 9498,
                "created_at": "2020-07-13 08:17:06",
                "updated_at": "2020-07-18 20:00:06",
                "product_category": {
                    "id": 18,
                    "slug": "sunt-cum",
                    "title": "BB霜",
                    "title_en": "iusto est est",
                    "describe": "Natus voluptatibus iure ut ut sed ducimus fugit. Sequi omnis facere enim error. Unde quo at expedita sit doloremque iste nihil. Perferendis fuga quis fugiat veniam voluptatem vitae dolorum nobis.",
                    "describe_en": "Rerum voluptas et minima in. Dignissimos praesentium distinctio iusto illo esse. Fugit aliquid ipsum omnis fugit et sunt. Fuga ut dolor repellendus libero possimus qui commodi.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?15257",
                    "description": "Sed quas molestiae est error.",
                    "description_en": "Iure excepturi quia non delectus nulla porro.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?78097",
                    "parent_id": 20,
                    "created_at": "2020-07-18 11:20:19",
                    "updated_at": "2020-07-16 21:46:52"
                }
            },
            {
                "id": 12,
                "product_category_id": 18,
                "product_name": "黑钻焕肤水",
                "product_name_en": "perspiciatis adipisci non",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?37196",
                "slug": "optio-quis",
                "short_description": "Qui voluptatum ut culpa qui ut.",
                "short_description_en": "Quasi harum ut unde consequuntur. Voluptas numquam impedit quia et.",
                "price": "9858.00",
                "sale_price": "3222.00",
                "stock": 641,
                "spec": null,
                "seo_title": "consequatur natus iure",
                "seo_keyword": "qui",
                "seo_description": "Provident corrupti iure provident dolor nihil voluptatem.",
                "benefit": "Architecto enim voluptatibus eos sed. Enim voluptatem enim voluptatem cupiditate aut possimus debitis.",
                "benefit_en": "Mollitia delectus molestiae ipsam nemo. Sint aspernatur voluptatem ut accusamus. Voluptatem in quia nostrum quasi.",
                "tech_description": "Possimus autem temporibus cupiditate a libero nihil omnis aut. Eius velit eum ratione architecto qui ex. Sint id voluptas eum aperiam tempore. Hic incidunt et et sed consequatur voluptatibus sunt id.",
                "tech_description_en": "Deserunt id dolore reprehenderit architecto sunt eius ratione repudiandae. Et hic tenetur placeat et perferendis. Consequuntur molestiae corporis sint qui.",
                "description": "Fugit aut voluptatum ab officiis consequatur consequatur rem. Perspiciatis voluptatem cum temporibus. Animi consequatur quibusdam vitae debitis aut deleniti doloribus placeat. Dolor quas maiores praesentium quia.",
                "description_en": "Consequatur ea eum id qui. Nulla impedit et deserunt. Dolorum qui molestiae voluptates ea quis.",
                "usage": "Ut et possimus tempora nulla vel. Amet temporibus repellendus quia aut modi praesentium animi. Odio exercitationem occaecati est odit aut tempora at. Qui consequatur voluptate corrupti aut incidunt maxime consequuntur.",
                "usage_en": "Impedit placeat odio quia quis dicta. Et dolores eum deleniti ut est. Similique et nam similique necessitatibus. Architecto deleniti voluptatum et.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?65544",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?77961",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?37643",
                "product_video": null,
                "status": "畅销",
                "rating": 7.64,
                "sold_count": 4557,
                "review_count": 2347,
                "created_at": "2020-07-16 13:08:15",
                "updated_at": "2020-07-25 08:50:26",
                "product_category": {
                    "id": 18,
                    "slug": "sunt-cum",
                    "title": "BB霜",
                    "title_en": "iusto est est",
                    "describe": "Natus voluptatibus iure ut ut sed ducimus fugit. Sequi omnis facere enim error. Unde quo at expedita sit doloremque iste nihil. Perferendis fuga quis fugiat veniam voluptatem vitae dolorum nobis.",
                    "describe_en": "Rerum voluptas et minima in. Dignissimos praesentium distinctio iusto illo esse. Fugit aliquid ipsum omnis fugit et sunt. Fuga ut dolor repellendus libero possimus qui commodi.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?15257",
                    "description": "Sed quas molestiae est error.",
                    "description_en": "Iure excepturi quia non delectus nulla porro.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?78097",
                    "parent_id": 20,
                    "created_at": "2020-07-18 11:20:19",
                    "updated_at": "2020-07-16 21:46:52"
                }
            },
            {
                "id": 13,
                "product_category_id": 10,
                "product_name": "钻石焕活面膜",
                "product_name_en": "voluptatem qui nostrum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?91766",
                "slug": "aut-molestias",
                "short_description": "Repellat fugit quo blanditiis recusandae sit labore.",
                "short_description_en": "Nam et enim reiciendis dolore similique quaerat molestias. Rerum earum eius aut. Hic adipisci dolorem aut fuga.",
                "price": "5032.00",
                "sale_price": "5732.00",
                "stock": 145,
                "spec": null,
                "seo_title": "itaque et autem",
                "seo_keyword": "temporibus",
                "seo_description": "Maxime consequatur optio aut quia.",
                "benefit": "Eaque excepturi earum aut sunt. Et omnis accusantium rem alias et et itaque explicabo. Quod quidem aspernatur qui quia et sequi vitae at. Repudiandae possimus voluptatem sed consequatur.",
                "benefit_en": "Et illo dolorem maxime et et alias recusandae. Sed ad reiciendis aspernatur voluptas quo. Quisquam explicabo quo eos similique nihil culpa.",
                "tech_description": "Laboriosam quisquam perferendis tempora at cumque. Est deserunt qui voluptas dolorum.",
                "tech_description_en": "Et ea tempora odio eveniet aut provident deserunt. In porro illo id. Animi vel deserunt natus sit.",
                "description": "Perferendis ex nihil non. Quibusdam non eius excepturi odio rem.",
                "description_en": "Ex omnis quas vel explicabo rem ratione. Aliquam tempora non voluptas perspiciatis et alias. Incidunt qui labore dignissimos est.",
                "usage": "Possimus officiis magni aut consectetur sed rem. Dolores officia excepturi illo minima quo. Praesentium corrupti tenetur perferendis harum accusamus ea voluptas sit. Voluptas cum consequatur nesciunt quibusdam recusandae.",
                "usage_en": "Sit in quia aut architecto repellat magni pariatur. Voluptate corporis consequatur minima mollitia pariatur. Sed similique minus facere.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?85696",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?87026",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?96773",
                "product_video": null,
                "status": "促销",
                "rating": 9.39,
                "sold_count": 2979,
                "review_count": 2860,
                "created_at": "2020-08-07 03:10:40",
                "updated_at": "2020-08-10 06:27:52",
                "product_category": {
                    "id": 10,
                    "slug": "provident-recusandae",
                    "title": "身体护理",
                    "title_en": "accusamus et dignissimos",
                    "describe": "Incidunt unde voluptatum quae et est sed. Inventore sint explicabo aspernatur incidunt ut. Illo quia optio et accusantium minima neque tempora sint.",
                    "describe_en": "Et laboriosam qui atque quam eaque. Minima saepe consequatur illo quos dolorem. Quis quisquam ullam quam rerum assumenda.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?86879",
                    "description": "Nostrum saepe et omnis.",
                    "description_en": "Hic dolor dolore exercitationem cum.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?65101",
                    "parent_id": 15,
                    "created_at": "2020-08-08 02:56:23",
                    "updated_at": "2020-07-26 13:34:03"
                }
            },
            {
                "id": 14,
                "product_category_id": 13,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "qui dolores explicabo",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?86963",
                "slug": "asperiores-nihil",
                "short_description": "Odio at quis ipsum beatae esse.",
                "short_description_en": "Sunt porro qui totam dolorum omnis quasi autem fuga. Odit sit cumque ut aut quia ad. Illum velit laudantium beatae aliquid voluptatem et. Rerum sequi ut ut quis.",
                "price": "325.00",
                "sale_price": "3122.00",
                "stock": 546,
                "spec": null,
                "seo_title": "est quod sapiente",
                "seo_keyword": "et",
                "seo_description": "Recusandae in voluptatem cupiditate cumque.",
                "benefit": "Sit optio aut est voluptatum voluptas pariatur. Iusto explicabo labore quia sit voluptatem sed. Laboriosam pariatur est in explicabo qui qui. Et quas placeat cumque ipsum cum molestiae.",
                "benefit_en": "Sint assumenda cupiditate earum dolorum quia. Quo molestiae maiores ipsum ratione perferendis rerum. Odit optio voluptas occaecati saepe nemo quasi dolor. Odio debitis eos aliquid enim.",
                "tech_description": "Voluptate ipsam vitae architecto aspernatur. Praesentium cupiditate reiciendis dolor laboriosam asperiores sunt consequatur. Quia aliquid non id consequatur.",
                "tech_description_en": "Ut sunt voluptatum in ullam consequatur vero quia magni. Ex ea magni est cumque maiores explicabo perferendis. Sit animi voluptatibus vel provident pariatur qui.",
                "description": "Laudantium commodi ea quos fugiat. Qui cumque reiciendis maiores doloribus. Sunt doloremque aut ut molestiae commodi corrupti omnis. Veritatis aliquam ad voluptate quisquam ipsam officiis temporibus sequi.",
                "description_en": "Eum non earum maxime incidunt. Et repudiandae sapiente quasi veniam voluptatem voluptatem dolorem. Quibusdam suscipit ex non exercitationem aut necessitatibus. Nihil culpa dolores inventore saepe.",
                "usage": "Voluptatem consequatur saepe molestiae deleniti. Id quisquam voluptates est commodi animi consequatur culpa. Harum totam occaecati id similique vel. Hic ab nisi quasi sequi.",
                "usage_en": "Totam similique et saepe minima culpa. Quia veniam et voluptas voluptatum. Reprehenderit esse veniam earum est dolorem animi. Eligendi et dignissimos dolore ut earum quis provident.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?22346",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?58812",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?94106",
                "product_video": null,
                "status": "新品",
                "rating": 9.13,
                "sold_count": 5223,
                "review_count": 8027,
                "created_at": "2020-07-15 10:02:46",
                "updated_at": "2020-07-23 06:44:50",
                "product_category": {
                    "id": 13,
                    "slug": "sed-eius",
                    "title": "洁面",
                    "title_en": "laudantium et natus",
                    "describe": "Laboriosam maxime at esse veritatis ut fugit illum nobis. Sed adipisci qui omnis ea amet ab molestias.",
                    "describe_en": "Et cumque quibusdam quas labore eveniet commodi vitae. Et voluptas vel praesentium est. Corporis in molestiae sequi quo ut voluptatem. Sed quia laborum voluptas aspernatur eos id tempora ut.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?69239",
                    "description": "Eius tempore et sed.",
                    "description_en": "Consequuntur architecto autem quae dolorum debitis temporibus.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?35557",
                    "parent_id": 3,
                    "created_at": "2020-07-29 15:05:48",
                    "updated_at": "2020-08-03 02:48:28"
                }
            },
            {
                "id": 15,
                "product_category_id": 8,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "numquam ad architecto",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?18007",
                "slug": "odit-corporis",
                "short_description": "Voluptatem dignissimos quo suscipit.",
                "short_description_en": "Omnis nostrum quia sint sit. Accusantium sed ullam veniam sint tempore itaque. Et iusto officiis labore commodi inventore. Tenetur qui eius excepturi optio ullam.",
                "price": "6793.00",
                "sale_price": "4818.00",
                "stock": 266,
                "spec": null,
                "seo_title": "vel dolores numquam",
                "seo_keyword": "sit",
                "seo_description": "Molestias aut reiciendis labore voluptatem quasi.",
                "benefit": "Rem illo sint pariatur alias. Et nihil et amet. Non perferendis aut molestiae delectus. Molestias porro velit exercitationem voluptatum quo.",
                "benefit_en": "Asperiores dolor iure voluptatem est. Minus et nihil fugit sed velit illum aut. Nobis sed reiciendis accusamus quam. Reiciendis veritatis praesentium et ut.",
                "tech_description": "Dolor blanditiis corrupti nam qui. Deleniti quisquam optio dignissimos molestiae beatae alias suscipit. Porro praesentium cupiditate cumque dolores commodi.",
                "tech_description_en": "Eligendi repudiandae voluptatem sapiente vero tempore labore. Doloribus consequatur quod pariatur aspernatur. Libero rerum aut quae error debitis.",
                "description": "Quasi beatae facilis eos nostrum. Nihil corrupti tenetur ab nihil beatae accusantium. Deleniti possimus reprehenderit libero sint.",
                "description_en": "Ut minima est molestias voluptas quia aut alias. Id id tempore error eaque sit. Ab aut rem voluptatem. Totam et illum explicabo odio.",
                "usage": "Facere praesentium ratione est accusantium non ratione. Quas molestiae sapiente consectetur et reiciendis fuga. Sit rem inventore voluptatum sit.",
                "usage_en": "Vel ut inventore dignissimos rerum tenetur aut corrupti. Doloribus numquam est magnam eos perspiciatis pariatur quo excepturi. Nihil et dolorum mollitia quod minus soluta voluptas. Aut occaecati ut ut earum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?85784",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?86858",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?79727",
                "product_video": null,
                "status": "畅销",
                "rating": 6.97,
                "sold_count": 5144,
                "review_count": 4018,
                "created_at": "2020-08-03 21:20:43",
                "updated_at": "2020-08-02 19:51:39",
                "product_category": {
                    "id": 8,
                    "slug": "itaque-sunt",
                    "title": "男士护肤",
                    "title_en": "culpa aut et",
                    "describe": "Est sint eligendi qui quas recusandae maxime. Mollitia nemo quia amet nostrum impedit.",
                    "describe_en": "Veniam ratione dolorum sed magnam. Eaque molestiae laborum illum et voluptate nihil. Sit voluptatem consequatur aut magnam et. Voluptatum est porro velit beatae.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?68229",
                    "description": "Eos incidunt consequatur excepturi recusandae et.",
                    "description_en": "Sit dolor qui sed aut quis ipsa.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?17987",
                    "parent_id": 11,
                    "created_at": "2020-07-21 03:26:17",
                    "updated_at": "2020-07-23 23:15:39"
                }
            },
            {
                "id": 16,
                "product_category_id": 13,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "ex aut est",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?32286",
                "slug": "sunt-repudiandae",
                "short_description": "Laboriosam omnis sunt quasi neque ex sit.",
                "short_description_en": "Aut odit aperiam et nulla. Qui blanditiis pariatur nobis et explicabo omnis. Hic architecto pariatur vel. Et neque nobis et at voluptas fuga totam.",
                "price": "9525.00",
                "sale_price": "2666.00",
                "stock": 682,
                "spec": null,
                "seo_title": "esse cum iste",
                "seo_keyword": "earum",
                "seo_description": "Nam pariatur non quo.",
                "benefit": "Voluptatem fugit magnam modi reiciendis quasi sint sapiente corporis. Repellendus autem harum nisi ea tenetur distinctio eum. Et quia cumque est est commodi.",
                "benefit_en": "Natus sunt est praesentium possimus. Provident officia aliquam deleniti animi omnis nesciunt. Ex dolorum voluptas ex provident voluptatum reiciendis.",
                "tech_description": "Ut praesentium accusantium est sapiente repudiandae dolores. Optio enim ut velit. Incidunt suscipit magni sequi et quam dolor aut.",
                "tech_description_en": "Et dolorum accusantium iure excepturi et nesciunt eos consequatur. Occaecati id voluptatem veritatis rerum sint. Voluptatem ullam alias velit ducimus exercitationem. Consectetur commodi eveniet omnis dolores quo inventore.",
                "description": "Quam rerum ut iusto explicabo sed dolorum fugiat. Quae culpa deserunt ea molestiae consequatur consequatur est. Molestiae voluptatem eos suscipit totam quia iste perspiciatis.",
                "description_en": "Non dolore nulla sint numquam delectus est. Ipsum aperiam dolore ut minus aut voluptates aut. Quo inventore dolorem est autem non odit explicabo. Eum sed et enim et dolor nesciunt.",
                "usage": "A quia beatae est neque velit itaque maxime. Maiores delectus et sint molestias id consequatur autem quo. Numquam ratione aliquid minima est id. Quae ipsa qui rem reiciendis accusamus modi. Vero optio neque incidunt alias doloribus.",
                "usage_en": "Sed hic minus corrupti reiciendis totam libero ab. Illum inventore doloremque et repellat deserunt. Voluptas accusamus qui repudiandae ut. Est sed omnis ipsa adipisci at et.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?81952",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?23202",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?81888",
                "product_video": null,
                "status": "畅销",
                "rating": 3.18,
                "sold_count": 9967,
                "review_count": 6760,
                "created_at": "2020-07-19 23:53:46",
                "updated_at": "2020-07-27 23:00:11",
                "product_category": {
                    "id": 13,
                    "slug": "sed-eius",
                    "title": "洁面",
                    "title_en": "laudantium et natus",
                    "describe": "Laboriosam maxime at esse veritatis ut fugit illum nobis. Sed adipisci qui omnis ea amet ab molestias.",
                    "describe_en": "Et cumque quibusdam quas labore eveniet commodi vitae. Et voluptas vel praesentium est. Corporis in molestiae sequi quo ut voluptatem. Sed quia laborum voluptas aspernatur eos id tempora ut.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?69239",
                    "description": "Eius tempore et sed.",
                    "description_en": "Consequuntur architecto autem quae dolorum debitis temporibus.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?35557",
                    "parent_id": 3,
                    "created_at": "2020-07-29 15:05:48",
                    "updated_at": "2020-08-03 02:48:28"
                }
            },
            {
                "id": 17,
                "product_category_id": 11,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "quia tempora sequi",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?99426",
                "slug": "et-delectus",
                "short_description": "Laudantium assumenda esse itaque ut nostrum.",
                "short_description_en": "Molestiae ullam quo sed. Debitis alias amet expedita voluptatem. Laborum provident ut ipsa est.",
                "price": "9993.00",
                "sale_price": "8686.00",
                "stock": 21,
                "spec": null,
                "seo_title": "quo quae molestiae",
                "seo_keyword": "neque",
                "seo_description": "Facilis qui accusamus qui.",
                "benefit": "Sit atque culpa id. Veritatis excepturi dignissimos exercitationem ut sit reprehenderit occaecati et. Totam culpa et et ducimus numquam molestias. Maxime occaecati laboriosam nostrum aperiam.",
                "benefit_en": "Esse laborum ut soluta rerum. Ab laborum delectus id aut minus. Excepturi voluptas inventore est. Quae sed soluta optio facilis. Rem tempore alias sed omnis dolores est rerum.",
                "tech_description": "Corrupti aut suscipit saepe voluptatibus consequuntur debitis repellendus. Dolore voluptatem architecto ea sit. Sunt ducimus incidunt officia eos voluptatem alias. Quis labore nam soluta reiciendis voluptas voluptatibus ea ut.",
                "tech_description_en": "Qui consequuntur et atque dolorum doloribus. Reiciendis at facilis cupiditate quo et debitis suscipit amet. Dolorem est quaerat aut velit deserunt excepturi. Qui quo dolores asperiores a quo et.",
                "description": "Quasi et iste odit id nostrum unde exercitationem accusamus. Sit consequatur nemo labore est omnis aut.",
                "description_en": "Dolorem nulla maxime voluptas rerum. Accusamus facilis provident nam accusamus voluptate voluptate earum. Nobis inventore enim quas quo vel similique.",
                "usage": "Aut nostrum voluptatibus optio error ipsum repellendus. Id voluptatibus ex veritatis ut. Pariatur vel ad et iusto minus maxime.",
                "usage_en": "In ratione vel velit voluptatum sint necessitatibus vel. Laborum incidunt odit sequi magnam. Laborum voluptatum explicabo qui qui reprehenderit qui.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?64718",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?21511",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?94851",
                "product_video": null,
                "status": "促销",
                "rating": 4.08,
                "sold_count": 8848,
                "review_count": 5693,
                "created_at": "2020-08-06 23:50:23",
                "updated_at": "2020-08-07 23:23:27",
                "product_category": {
                    "id": 11,
                    "slug": "aut-nihil",
                    "title": "彩妆盘",
                    "title_en": "rem hic deserunt",
                    "describe": "Similique ut molestias nemo qui facilis. Est saepe temporibus voluptas officia in. Eum adipisci minima consectetur non et.",
                    "describe_en": "Nesciunt voluptas hic ratione delectus voluptatem qui rerum. Suscipit saepe ad optio aut nihil atque eum. Sequi ad iste id possimus. Neque dicta id laboriosam voluptatibus natus.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?95623",
                    "description": "Sed nisi maiores sed sunt ea.",
                    "description_en": "Repellendus qui ut architecto aperiam dolor.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?75781",
                    "parent_id": 10,
                    "created_at": "2020-07-21 09:44:37",
                    "updated_at": "2020-08-05 00:32:29"
                }
            },
            {
                "id": 18,
                "product_category_id": 13,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "tempore dolor doloremque",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?87447",
                "slug": "ea-dolorem",
                "short_description": "Sunt soluta id dolor consectetur voluptatum.",
                "short_description_en": "Ut illo modi voluptates. Qui aut aliquid fuga dolorem officia. Praesentium voluptas facere est ad blanditiis. Sed dolor quaerat repellat nihil omnis et labore.",
                "price": "3731.00",
                "sale_price": "1724.00",
                "stock": 251,
                "spec": null,
                "seo_title": "laborum eos fugit",
                "seo_keyword": "in",
                "seo_description": "Aut qui consequatur velit.",
                "benefit": "Numquam doloremque accusamus quas qui et molestiae dignissimos. Velit sed ut dignissimos. Error possimus qui et aut.",
                "benefit_en": "Ut alias dolorum sunt accusamus est voluptatem quis voluptas. Nobis impedit quae dolorem voluptatem mollitia et. Expedita id et alias tempore.",
                "tech_description": "Quis et maxime quam quaerat totam. Esse minima porro quia quas vel. Excepturi repellendus vel officia vitae et corporis. Repellat accusantium asperiores consequuntur veniam.",
                "tech_description_en": "Rem illum ad perspiciatis quod nobis et. Veritatis non enim dolorum nihil fuga. Eos cumque perspiciatis ut et.",
                "description": "Nisi voluptatum eius placeat voluptas deleniti. Consequatur tempore aut quia quia.",
                "description_en": "Vitae voluptatum tempora et nulla. Ut odit repellendus perferendis dolores eos delectus consectetur reiciendis. Consequuntur provident suscipit perferendis est.",
                "usage": "Et voluptatem qui quas et voluptas. Enim nam quisquam inventore non. Dolorem est expedita dolore autem. Sed sint deleniti quo nobis dolor excepturi. Illo sunt culpa consequatur expedita est consequuntur corporis.",
                "usage_en": "Dolor dignissimos alias aperiam et ut. At laboriosam consequatur sunt qui vitae omnis qui. Dolorem modi omnis culpa aliquam eaque enim. Ipsa aspernatur suscipit quo nam id optio eum. Qui quia dignissimos rem accusamus omnis sed illum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?24311",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?16253",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?54255",
                "product_video": null,
                "status": "新品",
                "rating": 8.95,
                "sold_count": 1275,
                "review_count": 3259,
                "created_at": "2020-07-18 00:42:57",
                "updated_at": "2020-07-29 14:11:44",
                "product_category": {
                    "id": 13,
                    "slug": "sed-eius",
                    "title": "洁面",
                    "title_en": "laudantium et natus",
                    "describe": "Laboriosam maxime at esse veritatis ut fugit illum nobis. Sed adipisci qui omnis ea amet ab molestias.",
                    "describe_en": "Et cumque quibusdam quas labore eveniet commodi vitae. Et voluptas vel praesentium est. Corporis in molestiae sequi quo ut voluptatem. Sed quia laborum voluptas aspernatur eos id tempora ut.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?69239",
                    "description": "Eius tempore et sed.",
                    "description_en": "Consequuntur architecto autem quae dolorum debitis temporibus.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?35557",
                    "parent_id": 3,
                    "created_at": "2020-07-29 15:05:48",
                    "updated_at": "2020-08-03 02:48:28"
                }
            },
            {
                "id": 19,
                "product_category_id": 15,
                "product_name": "黑钻焕肤水",
                "product_name_en": "est illum dolorum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?44098",
                "slug": "vero-pariatur",
                "short_description": "Aliquam et et laudantium ut quis recusandae.",
                "short_description_en": "Error voluptatum et sequi. Rerum nulla voluptatem quidem aut impedit facere harum. Voluptates ea et quia error iusto vel et. Sit culpa consequuntur blanditiis maxime ut omnis.",
                "price": "8991.00",
                "sale_price": "7106.00",
                "stock": 825,
                "spec": null,
                "seo_title": "porro libero id",
                "seo_keyword": "ut",
                "seo_description": "Voluptatem magnam eius ratione omnis.",
                "benefit": "Omnis autem rerum est dolorem libero sit occaecati vel. Exercitationem repellat sed voluptatibus quos. Quos placeat et neque qui natus enim non explicabo.",
                "benefit_en": "Quia molestiae quos quia quis aut. Quo voluptatem sed minima pariatur consequatur. Aut velit rem fugit doloremque vel qui. Consectetur ratione quibusdam sequi ut dolor.",
                "tech_description": "Nobis iure nulla sit optio illo. Officiis vero consequuntur error eos.",
                "tech_description_en": "Exercitationem et qui eos accusamus. Inventore non hic ut sunt similique est illo. Ab ut aut sunt. Voluptatem voluptate voluptas voluptatum saepe dolorem mollitia voluptas quae.",
                "description": "Sit deserunt in dignissimos omnis hic. Veritatis iusto accusamus sed hic amet. Quia voluptatem et omnis cupiditate neque. Saepe mollitia sed perferendis eum quae rem velit. Tempora quo unde rerum dicta id.",
                "description_en": "Dignissimos quae omnis id odio. Sapiente quaerat omnis molestiae sunt aut qui temporibus. Recusandae maxime doloribus libero aut qui officiis sed commodi.",
                "usage": "Enim doloribus adipisci nemo non voluptate natus officia. Quam est sed repellat enim aliquid. Et ipsa non possimus dolores exercitationem consectetur culpa consequatur.",
                "usage_en": "Quam libero natus non maiores ratione. Qui voluptatem eos in magni ab eius nihil accusantium. Est natus aspernatur eveniet. Maiores quam necessitatibus unde debitis quia ex cupiditate.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?93598",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?94206",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?94733",
                "product_video": null,
                "status": "促销",
                "rating": 8.34,
                "sold_count": 8804,
                "review_count": 9816,
                "created_at": "2020-07-12 01:32:29",
                "updated_at": "2020-08-04 21:42:01",
                "product_category": {
                    "id": 15,
                    "slug": "enim-quia",
                    "title": "睫毛膏",
                    "title_en": "consequatur unde debitis",
                    "describe": "Corrupti tempore ullam est cupiditate. Molestiae illum excepturi consequuntur sit. Voluptatem enim voluptas illo.",
                    "describe_en": "Autem repellat accusantium accusamus nihil pariatur. Quod tempora culpa est ea saepe. Ducimus tenetur earum nulla.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?41086",
                    "description": "Ducimus et sint maxime enim et.",
                    "description_en": "Adipisci et corporis cum sit saepe.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?12607",
                    "parent_id": 6,
                    "created_at": "2020-07-30 07:43:41",
                    "updated_at": "2020-07-26 14:38:27"
                }
            },
            {
                "id": 20,
                "product_category_id": 4,
                "product_name": "黑钻焕肤水",
                "product_name_en": "quia eos perspiciatis",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?16415",
                "slug": "neque-ea",
                "short_description": "Culpa numquam vel soluta quia.",
                "short_description_en": "Ipsum voluptas dolor et veniam perspiciatis atque quo. Perspiciatis ullam expedita voluptatum excepturi quisquam quasi. Voluptatem veritatis sapiente vel iure iusto.",
                "price": "9995.00",
                "sale_price": "3037.00",
                "stock": 147,
                "spec": null,
                "seo_title": "omnis sit sint",
                "seo_keyword": "ut",
                "seo_description": "Totam id eligendi dignissimos.",
                "benefit": "Hic impedit id officiis voluptatem et ut qui. Officiis rerum voluptates ipsam quia. Laborum quia dolorem est aut omnis sed exercitationem.",
                "benefit_en": "Vel nisi sed voluptatem molestias repellendus in ducimus. Dolore occaecati numquam sapiente aperiam molestiae unde beatae. Voluptatem quia quisquam veritatis nam voluptatum cupiditate. Magnam voluptas quia officiis distinctio explicabo sunt.",
                "tech_description": "Quos et minus recusandae hic. Deleniti molestiae optio aut autem. Laudantium in nostrum deserunt voluptates officiis nostrum quae.",
                "tech_description_en": "Aut aut sapiente dolorem veniam. Animi veritatis optio enim dolores est. Dignissimos quae consectetur et et dolorem ab. Soluta non vitae fuga numquam in enim incidunt.",
                "description": "Sint voluptates veritatis voluptatum et. Eligendi vel harum eius nihil. Sed aut doloribus et esse corrupti ratione. Autem tenetur ab corrupti aut dolores.",
                "description_en": "Illo facilis blanditiis facere qui. Consequuntur beatae aut recusandae et labore ducimus illum. Rem ea tempore doloribus qui illum in et cupiditate.",
                "usage": "Neque distinctio illum vero optio esse. Tenetur excepturi consequatur magnam dignissimos quia molestias. Fugit doloribus quod qui sed.",
                "usage_en": "Eos et voluptatibus dolor voluptates consequuntur voluptatibus. Placeat commodi quae consequatur voluptates voluptatibus sed accusamus reiciendis. Similique sit non quia quia omnis consequatur.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?52677",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?81033",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?15550",
                "product_video": null,
                "status": "新品",
                "rating": 6.35,
                "sold_count": 9588,
                "review_count": 4320,
                "created_at": "2020-08-06 20:10:59",
                "updated_at": "2020-07-18 16:54:45",
                "product_category": {
                    "id": 4,
                    "slug": "molestiae-fugit",
                    "title": "隔离",
                    "title_en": "voluptatem sed ex",
                    "describe": "Ut quod at ipsa fuga delectus aut beatae omnis. Impedit et nulla voluptatem modi repellat quod iusto. Nesciunt perferendis et vitae omnis.",
                    "describe_en": "Sit porro excepturi nesciunt veritatis. Voluptatem distinctio dolorem autem expedita nisi veritatis doloribus eum. Dolores id quasi et tempora velit. Doloribus itaque ut sint.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?82349",
                    "description": "Aut maxime asperiores sit nulla consequatur repudiandae.",
                    "description_en": "Distinctio quisquam asperiores voluptatem quia.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?20780",
                    "parent_id": 18,
                    "created_at": "2020-08-01 13:02:19",
                    "updated_at": "2020-08-07 20:39:30"
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
    -G "http://store.wutang.com/api/product_category/1?category_slug=ratione" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product_category/1"
);

let params = {
    "category_slug": "ratione",
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
    -G "http://store.wutang.com/api/product/1?slug=beatae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product/1"
);

let params = {
    "slug": "beatae",
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

<!-- START_e1ee2f452be977620f7e0c0045529fd9 -->
## Get new product
获取新品

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/product_new?page=qui&page_limit=nisi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product_new"
);

let params = {
    "page": "qui",
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
    "http://store.wutang.com/api/auth/password_change" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"oldPassword":"laborum","newPassword":"laudantium","newPassword_confirmation":"iste"}'

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
    "oldPassword": "laborum",
    "newPassword": "laudantium",
    "newPassword_confirmation": "iste"
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
    -G "http://store.wutang.com/api/alipay/pay?out_trade_no=repudiandae&total_amount=soluta&subject=voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/alipay/pay"
);

let params = {
    "out_trade_no": "repudiandae",
    "total_amount": "soluta",
    "subject": "voluptatem",
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
    `out_trade_no` |  required  | 订单号
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
    -G "http://store.wutang.com/api/unionpay/pay?no=voluptas&product_name=et&total_amount=neque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/unionpay/pay"
);

let params = {
    "no": "voluptas",
    "product_name": "et",
    "total_amount": "neque",
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
    `product_name` |  required  | 商品名称
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

<!-- START_0dfc43254177dc34e3f52ec8dd6ee2bd -->
## User profile list
用户资料信息

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

<!-- START_b246eeb9e5b21565d6ab47d209bae638 -->
## Update user profile
编辑用户资料

> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/api/user_profiles/1?profile_id=aut&phone=fugit&real_name=enim&sex=nisi&birthday=excepturi&age=quos&province=iste&city=dolorem&district=assumenda&address=aut&zip=ipsam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_profiles/1"
);

let params = {
    "profile_id": "aut",
    "phone": "fugit",
    "real_name": "enim",
    "sex": "nisi",
    "birthday": "excepturi",
    "age": "quos",
    "province": "iste",
    "city": "dolorem",
    "district": "assumenda",
    "address": "aut",
    "zip": "ipsam",
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
`PUT api/user_profiles/{profile_id}`

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

<!-- END_b246eeb9e5b21565d6ab47d209bae638 -->

<!-- START_157e0e734e5b19915b7f41bafbe39486 -->
## Get user address
获取用户收货地址

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

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/api/user_addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"province":"quis","city":"atque","district":"sed","address":"officiis","zip":"placeat","contact_name":"minima","contact_phone":"est"}'

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
    "province": "quis",
    "city": "atque",
    "district": "sed",
    "address": "officiis",
    "zip": "placeat",
    "contact_name": "minima",
    "contact_phone": "est"
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
    "http://store.wutang.com/api/user_addresses/1?province=reprehenderit&city=id&district=at&address=ut&zip=minima&contact_name=eos&contact_phone=dolores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_addresses/1"
);

let params = {
    "province": "reprehenderit",
    "city": "id",
    "district": "at",
    "address": "ut",
    "zip": "minima",
    "contact_name": "eos",
    "contact_phone": "dolores",
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

<!-- START_90957246142cc2a14824b129ecd1ba3c -->
## Request shop cart items
请求购物车数据

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/api/shop_carts?user_id=minima&product_id=iure&amount=perspiciatis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/shop_carts"
);

let params = {
    "user_id": "minima",
    "product_id": "iure",
    "amount": "perspiciatis",
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

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/order_details/1?no=dolorum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/order_details/1"
);

let params = {
    "no": "dolorum",
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

<!-- START_bd487ab94d8034c2d13644bb1772fdfa -->
## 「ADMIN」Query user list(Admin)
查询用户数据列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/user?username=dolorem&page=quia&page_limit=distinctio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user"
);

let params = {
    "username": "dolorem",
    "page": "quia",
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
    "http://store.wutang.com/admin/user/1?name=quod&email=vero&phone=nemo&avatar=amet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user/1"
);

let params = {
    "name": "quod",
    "email": "vero",
    "phone": "nemo",
    "avatar": "amet",
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
## 「ADMIN」change password(Admin)
修改密码

> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/admin/user/reset_password/1?oldPassword=quaerat&newPassword=atque&newPassword_confirmation=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user/reset_password/1"
);

let params = {
    "oldPassword": "quaerat",
    "newPassword": "atque",
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
## 「ADMIN」Get user info
获取单个用户信息

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/get_user?hash_id=quis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/get_user"
);

let params = {
    "hash_id": "quis",
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
## 「ADMIN」Create user address

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/user_addresses?province=ipsam&city=rerum&district=quae&address=harum&zip=exercitationem&contact_name=ex&contact_phone=beatae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses"
);

let params = {
    "province": "ipsam",
    "city": "rerum",
    "district": "quae",
    "address": "harum",
    "zip": "exercitationem",
    "contact_name": "ex",
    "contact_phone": "beatae",
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
    "http://store.wutang.com/admin/user_addresses/1?address_id=cumque&province=eligendi&city=aliquam&district=iure&address=architecto&zip=aut&contact_name=qui&contact_phone=corrupti" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses/1"
);

let params = {
    "address_id": "cumque",
    "province": "eligendi",
    "city": "aliquam",
    "district": "iure",
    "address": "architecto",
    "zip": "aut",
    "contact_name": "qui",
    "contact_phone": "corrupti",
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
    "http://store.wutang.com/admin/user_addresses/1?address_id=est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses/1"
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

<!-- START_f1cbe00c0793bf557a683e5a6440bda0 -->
## 「ADMIN」User profile list
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
## 「ADMIN」Update user profile
编辑用户资料

> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/admin/user_profiles/1?profile_id=ea" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_profiles/1"
);

let params = {
    "profile_id": "ea",
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
    "http://store.wutang.com/admin/user_profiles/1?profile_id=inventore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_profiles/1"
);

let params = {
    "profile_id": "inventore",
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
    -G "http://store.wutang.com/admin/invitation/code" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/invitation/code"
);

let headers = {
    "Content-Type": "application/json",
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
    "http://store.wutang.com/admin/invitation/code?phone=modi&code=sint" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/invitation/code"
);

let params = {
    "phone": "modi",
    "code": "sint",
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
    -G "http://store.wutang.com/admin/invitation/phone?page=iste&page_limit=esse" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/invitation/phone"
);

let params = {
    "page": "iste",
    "page_limit": "esse",
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
    -G "http://store.wutang.com/admin/product_categories?page=porro&page_limit=dolores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories"
);

let params = {
    "page": "porro",
    "page_limit": "dolores",
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
    "http://store.wutang.com/admin/product_categories?title=sunt&title_en=totam&describe=quasi&describe_en=non&banner=consequuntur&description=et&description_en=quia&img=quo&parent_id=sed" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories"
);

let params = {
    "title": "sunt",
    "title_en": "totam",
    "describe": "quasi",
    "describe_en": "non",
    "banner": "consequuntur",
    "description": "et",
    "description_en": "quia",
    "img": "quo",
    "parent_id": "sed",
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
    "http://store.wutang.com/admin/product_categories/1?title=cum&title_en=ratione&describe=ullam&describe_en=voluptates&banner=quaerat&description=odio&description_en=at&img=eaque&parent_id=cupiditate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories/1"
);

let params = {
    "title": "cum",
    "title_en": "ratione",
    "describe": "ullam",
    "describe_en": "voluptates",
    "banner": "quaerat",
    "description": "odio",
    "description_en": "at",
    "img": "eaque",
    "parent_id": "cupiditate",
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

<!-- START_03beced1b66f1ed5912bf94c07e1a9a8 -->
## 「ADMIN」Get product category stoies
获取产品分类故事

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/category_stories?page=molestiae&page_limit=ipsam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories"
);

let params = {
    "page": "molestiae",
    "page_limit": "ipsam",
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
    "http://store.wutang.com/admin/category_stories?title=nam&title_en=molestiae&description=dolorum&description_en=accusamus&banner=eaque&product_category_id=ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories"
);

let params = {
    "title": "nam",
    "title_en": "molestiae",
    "description": "dolorum",
    "description_en": "accusamus",
    "banner": "eaque",
    "product_category_id": "ut",
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
    "http://store.wutang.com/admin/category_stories/1?title=omnis&title_en=architecto&description=deleniti&description_en=earum&banner=qui&product_category_id=neque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories/1"
);

let params = {
    "title": "omnis",
    "title_en": "architecto",
    "description": "deleniti",
    "description_en": "earum",
    "banner": "qui",
    "product_category_id": "neque",
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

<!-- START_9a7c60de622aa327ea2ab22f57fe4f40 -->
## 「ADMIN」Get product list
获取产品列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/product?page=rerum&page_limit=laboriosam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product"
);

let params = {
    "page": "rerum",
    "page_limit": "laboriosam",
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
    "http://store.wutang.com/admin/product?product_category_id=voluptatem&product_name=occaecati&product_name_en=expedita&thumbnail=doloremque&slug=facere&short_description=quisquam&short_description_en=consectetur&price=eos&sale_price=maxime&stock=voluptas&seo_title=voluptatem&seo_keyword=tempore&seo_description=id&benefit=qui&benefit_en=vel&tech_description=incidunt&tech_description_en=corrupti&description=id&description_en=dolorum&usage=totam&usage_en=quam&main_image=qui&main_image_2=error&benefit_image=deleniti&product_video=modi&status=iste&rating=soluta&sold_count=vitae&review_count=aliquam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product"
);

let params = {
    "product_category_id": "voluptatem",
    "product_name": "occaecati",
    "product_name_en": "expedita",
    "thumbnail": "doloremque",
    "slug": "facere",
    "short_description": "quisquam",
    "short_description_en": "consectetur",
    "price": "eos",
    "sale_price": "maxime",
    "stock": "voluptas",
    "seo_title": "voluptatem",
    "seo_keyword": "tempore",
    "seo_description": "id",
    "benefit": "qui",
    "benefit_en": "vel",
    "tech_description": "incidunt",
    "tech_description_en": "corrupti",
    "description": "id",
    "description_en": "dolorum",
    "usage": "totam",
    "usage_en": "quam",
    "main_image": "qui",
    "main_image_2": "error",
    "benefit_image": "deleniti",
    "product_video": "modi",
    "status": "iste",
    "rating": "soluta",
    "sold_count": "vitae",
    "review_count": "aliquam",
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
    "http://store.wutang.com/admin/product/1?product_category_id=dolore&product_name=eligendi&product_name_en=a&thumbnail=nemo&slug=sed&short_description=tempore&short_description_en=at&price=corrupti&sale_price=nesciunt&stock=quia&seo_title=aut&seo_keyword=veniam&seo_description=ullam&benefit=fugit&benefit_en=hic&tech_description=magnam&tech_description_en=nihil&description=quasi&description_en=ducimus&usage=sed&usage_en=mollitia&main_image=ratione&main_image_2=accusantium&benefit_image=provident&product_video=itaque&status=illo&rating=voluptas&sold_count=in&review_count=enim" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product/1"
);

let params = {
    "product_category_id": "dolore",
    "product_name": "eligendi",
    "product_name_en": "a",
    "thumbnail": "nemo",
    "slug": "sed",
    "short_description": "tempore",
    "short_description_en": "at",
    "price": "corrupti",
    "sale_price": "nesciunt",
    "stock": "quia",
    "seo_title": "aut",
    "seo_keyword": "veniam",
    "seo_description": "ullam",
    "benefit": "fugit",
    "benefit_en": "hic",
    "tech_description": "magnam",
    "tech_description_en": "nihil",
    "description": "quasi",
    "description_en": "ducimus",
    "usage": "sed",
    "usage_en": "mollitia",
    "main_image": "ratione",
    "main_image_2": "accusantium",
    "benefit_image": "provident",
    "product_video": "itaque",
    "status": "illo",
    "rating": "voluptas",
    "sold_count": "in",
    "review_count": "enim",
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

<!-- START_891f757575d248d6bfeaf8ccc9e0ef89 -->
## 「ADMIN」Get product sku list
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
## 「ADMIN」Create product sku
新增产品SKU

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/product_sku?title=ut&description=ut&price=eius&stock=voluptatem&product_id=illo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_sku"
);

let params = {
    "title": "ut",
    "description": "ut",
    "price": "eius",
    "stock": "voluptatem",
    "product_id": "illo",
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
    "http://store.wutang.com/admin/product_sku/1?title=eius&description=qui&price=numquam&stock=placeat&product_id=ipsum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_sku/1"
);

let params = {
    "title": "eius",
    "description": "qui",
    "price": "numquam",
    "stock": "placeat",
    "product_id": "ipsum",
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

<!-- START_abed5cfa021d6e9a60379988984f2b8f -->
## 「ADMIN」Get order list
获取订单列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/order?page=occaecati&page_limit=nihil" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/order"
);

let params = {
    "page": "occaecati",
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
    "http://store.wutang.com/admin/order?page=ut&page_limit=fugiat&username=reiciendis&order_no=qui&order_status=perspiciatis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/order"
);

let params = {
    "page": "ut",
    "page_limit": "fugiat",
    "username": "reiciendis",
    "order_no": "qui",
    "order_status": "perspiciatis",
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


