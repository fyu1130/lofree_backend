FROM php:8.3.8-fpm

# 必要なパッケージとPHP拡張をインストール
RUN apt-get update && apt-get install -y \
    git unzip curl libpng-dev libonig-dev libxml2-dev zip \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Composerのインストール
COPY --from=composer:2.8.8 /usr/bin/composer /usr/bin/composer

# 作業ディレクトリ
WORKDIR /var/www

# プロジェクトファイルをコピー
COPY . .

# Laravel依存関係をインストール
RUN composer install

# Laravelの権限とキャッシュクリア（任意）
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage

# PHPビルトインサーバーで起動
CMD php artisan serve --host=0.0.0.0 --port=8000
