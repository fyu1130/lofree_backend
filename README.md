
---

## `backend/README.md`（Laravel + Docker）

# lofree-backend

ローカルフリーマーケットアプリ「lofree」のバックエンド（Laravel + MySQL + phpMyAdmin）プロジェクトです。

---

## 前提（開発環境）
※wsl2Ubuntu上にphp,composerのインストール済み

- OS：WSL2 + Ubuntu 22.04.3 LTS
- PHP：v8.3.8（ホスト / Docker）
- Composer：v2.8.8
- Docker：v28.1.1
- Docker Compose：v2.35.1

---

## 使用技術（バージョン）

- Laravel：v12.12.0
- PHP：v8.3.8（Docker内）
- Composer：v2.8.8（Docker内）
- MySQL：v8.0.36
- phpMyAdmin：v5.2.1

---

## 構築手順

```bash
# 1. コンテナのビルドと起動
docker-compose up -d --build

# ※指定してビルドしたらいい。ENV_FILE=.env.staging docker-compose up -d

# 2. Laravel初期設定（初回のみ）
docker exec -it lofree-backend bash
php artisan key:generate
php artisan migrate:fresh --seed
exit
```

## 起動確認
Laravel API：http://localhost:8000
MySQL接続確認：.env 経由でOK
phpMyAdmin画面 → http://localhost:8080
    ログイン情報
    サーバー名：db
    ユーザー名：user
    パスワード：password

## 備考
DB接続例
```.env
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=lofree
DB_USERNAME=user
DB_PASSWORD=password
```

## error処理
| Docker起動しない                   | GUIで停止、WSLとの連携異常                      | `wsl --shutdown` → `net stop/start com.docker.service` → Docker Desktop再起動 |


## CI/CDについて
|CI | CircleCIでPHPUnit実行|
|CD | EC2へSSH通信 → git pull → Docker再起動|

## 環境管理について
|環境ファイル | 役割|
|||