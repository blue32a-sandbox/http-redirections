# http-redirections

HTTPリダイレクトした時にメソッドはどのように扱われるか。

| ステータスコード | GET | POST |
|:-:|:-:|:-:|
| 300 Multiple Choice | ー | ー |
| 301 Moved Permanently | GETのまま | GETになる |
| 302 Found | GETのまま | GETになる |
| 303 See Other | GETのまま | GETになる |
| 304 Not Modified | ー | ー |
| 307 Temporary Redirect | GETのまま | **POSTのまま** |
| 308 Permanent Redirect | GETのまま | **POSTのまま** |

[HTTP のリダイレクト - HTTP | MDN](https://developer.mozilla.org/ja/docs/Web/HTTP/Redirections)
