--データベース作成
CREATE DATABASE sample;

--顧客テーブルの作成
CREATE TABLE customer(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30),
    address VARCHAR(100),
    tel VARCHAR(13)
);

--商品テーブルの作成
CREATE TABLE products(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30),
    price INT
);

--受注テーブルの作成
CREATE TABLE orders(
    id INT PRIMARY KEY AUTO_INCREMENT,
    order_date DATE NOT NULL,
    customer_id INT,
    FOREIGN KEY (customer_id) REFERENCES customer(id)
);

--受注明細テーブルの作成
CREATE TABLE order_details(
    order_id INT,
    product_id INT,
    amount INT,
    FOREIGN KEY (order_id) REFERENCES orders(id),
    FOREIGN KEY (product_id) REFERENCES products(id),
    PRIMARY KEY (order_id, product_id)
);

--顧客テーブルにデータを新規登録する（挿入）
INSERT INTO customer VALUES(
    NULL, '南北電気株式会社', '東京都品川区', '03-1111-2222'), (
    NULL, '株式会社いろは電子', '東京都港区', '03-1234-5678'), (
    NULL, '株式会社日本工業', '大阪府大阪市港区', '06-9999-9876'
);

--商品テーブルにデータを新規登録する
INSERT INTO products VALUES(
    NULL, 'テレビ(4K)', 200000), (
    NULL, 'DVDレコーダー', 80000), (
    NULL, 'ラジオ', 3000), (
    NULL, 'テレビ', 35000
);

--受注テーブルにインサートする
INSERT INTO orders VALUES
    (NULL, '2024-04-10', 1),
    (NULL, '2024-4-11', 2),
    (NULL, '2024-4-11', 1),
    (NULL, '2024-4-15', 3);

--受注明細
INSERT INTO order_details VALUES
    (1, 1, 3),
    (1, 2, 1),
    (2, 2, 5),
    (2, 3, 8),
    (3, 4, 7),
    (4, 1, 2);

--顧客テーブルから全データを取得する（選択）
SELECT * FROM customer;

--商品テーブルからIDと商品名を取得(2フィールドのみ)
SELECT id, name FROM products;



--===================================--
--Q1. 商品テーブルから商品名と単価を取得
SELECT name, price FROM products;


--Q2. 顧客テーブルからIDと顧客名を取得
SELECT id, name FROM customer;


--Q3. 受注テーブルから全フィールドを取得
SELECT * FROM orders;
--====================================


--商品テーブルから価格￥50,000以下の全フィールドを取得
SELECT * FROM products WHERE price <= 50000;

--顧客テーブルから顧客名が南北電気株式会社のIDと住所
SELECT id, address
FROM customer
WHERE name = '南北電気株式会社';


--====================================
--Q1. 商品テーブルから商品名がラジオの全フィールド
SELECT * FROM products WHERE name = 'ラジオ';

--Q2. 商品テーブルから価格が80,000円以上の全フィールド
SELECT * FROM products WHERE price >= 80000;

--Q3. 受注テーブルから受注日が2024年4月11日の受注ID
SELECT id FROM orders WHERE order_date = '2024-04-11';



--=====================================
--=====================================4/17
--Q1. 受注テーブルから全フィールド
SELECT * FROM orders;


--Q2. 顧客テーブルからIDと名前と住所
SELECT id, name, address FROM customer;


--Q3. 商品テーブルから価格が80,000円未満の全フィールド
SELECT * FROM products WHERE price < 80000;


--Q4. 商品テーブルから価格が80,000円の全フィールド
SELECT * FROM products WHERE price = 80000;


--Q5. 商品テーブルから、価格が50,000円以上かつ100,000円以下の、全フィールド
SELECT * FROM products WHERE price >= 50000 AND price <= 100000; 
-- 解説　AND == && --
--「～以上かつ～以下」の時に使えるBETWEEN演算子　(Between A and B = AとBの間)
SELECT * FROM products WHERE price BETWEEN 50000 AND 100000; 


--Q6. 商品テーブルから価格が50,000円未満または100,000以上の全フィールド
SELECT * FROM products WHERE price < 50000 || price >= 100000;


--Q7. 顧客テーブルから、名前が「南北電気株式会社」の全フィールド
SELECT * FROM customer WHERE name = '南北電気株式会社';
--=== キーワード検索もできる ===--
SELECT * FROM customer WHERE name LIKE '南北電気%';


--Q8. 名前に「株式会社」が含まれるデータの全フィールド
-- SELECT * FROM customer WHERE name LIKE '株式会社%' || '%株式会社'; ×
--解答
SELECT * FROM customer WHERE name LIKE '%株式会社%';


-- === 並び替え === --
--商品テーブルで価格が低い順に並べる(昇順)
SELECT * FROM products ORDER BY price;

--商品テーブルで価格が高い順に並べる(降順)
SELECT * FROM products ORDER BY price DESC;


--Q1.商品テーブルで100000円以下の商品を価格が低い順に並べる（昇順）
SELECT * FROM products WHERE price <= 100000 ORDER BY price;


-- === 2つ以上の条件 === --
-- 商品詳細テーブルで数量が5以下のデータを
-- 商品IDを昇順に並べる
SELECT * FROM order_details WHERE amount <= 5 ORDER BY product_id; 

-- 商品詳細テーブルで数量が5以下のデータを
-- 商品IDを昇順、数量を降順に並べる
SELECT * FROM order_details WHERE amount <= 5 ORDER BY product_id, amount DESC;

-- === 取得する件数を制御 === --
-- 商品テーブルを価格が30,000円以上の商品を、
-- 価格が安い順に並べて一番安い商品を取得
SELECT * FROM products WHERE price >= 30000 ORDER BY price LIMIT 1;


-- Q1. 顧客テーブルにて、住所が「東京都」からはじまる全フィールドをIDが降順で取得
SELECT * FROM customer WHERE address LIKE '東京都%' ORDER BY id DESC;


-- Q2. 受注テーブルから全レコード、全フィールドを
-- 受注日が新しい順で3件のみ取得
-- ただし、受注日が同じ場合は顧客IDが小さい順で取得
-- SELECT * FROM orders ORDER BY order_date LIMIT 3 WHERE order_date = order_date ORDER BY id;

SELECT * FROM orders ORDER BY DESC, customer_id  LIMIT 3;


-- Q3. 受注明細テーブルで数量が5以上10以下の全フィールドを
-- 数量が小さい順で取得
SELECT * FROM order_details WHERE amount BETWEEN 5 AND 10 ORDER BY amount;


-- === 結合 === --
-- 受注テーブルと顧客テーブルを結合
SELECT * FROM orders INNER JOIN customer ON customer.id = orders.customer_id;

--受注明細テーブルと商品テーブルを結合
SELECT * FROM order_details INNER JOIN products ON product_id = products.id;

-- 受注テーブルと顧客テーブルを結合し
-- 受注IDが3のレコードの受注ID、受注日、顧客名を取得
SELECT orders.id, orders.order_date, customer.name FROM orders INNER JOIN customer ON customer.id = orders.customer_id WHERE orders.id = 3;

-- === AS句を用いて別名にできる（エイリアス）※ASも省略できる
SELECT * FROM orders AS o INNER JOIN customer AS c ON c.id = o.customer_id WHERE o.id = 3;


--Q1. 受注明細テーブルと受注テーブルを結合
SELECT * FROM order_details AS od INNER JOIN orders AS o ON o.id = od.order_id;

--Q2. 受注テーブルと顧客テーブルを結合
SELECT * FROM orders AS o INNER JOIN customer c ON customer_id = c.id;

--Q3. 上記SQLを元に顧客IDが1のレコードのみを選択
SELECT * FROM orders AS o INNER JOIN customer c ON customer_id = c.id WHERE c.id = 1;

--Q4. 受注テーブルと顧客テーブルを結合し、
--受注日が2024年4月11日のレコードを取得
SELECT * FROM orders o INNER JOIN customer c ON o.customer_id = c.id WHERE o.order_date = '2024-04-11';

--Q5. 受注明細テーブルと商品テーブルを結合
SELECT * FROM order_details od INNER JOIN products p ON od.product_id = p.id;

--Q6. 受注テーブルと受注明細テーブルを結合
SELECT * FROM orders o INNER JOIN order_details od ON od.order_id = o.id;

--Q7. 上記SQLに顧客テーブルを結合
SELECT * FROM orders o INNER JOIN order_details od ON od.order_id = o.id INNER JOIN customer c ON c.id = o.customer_id;

-- -- 上記SQLに商品テーブルを結合
-- SELECT * FROM orders o INNER JOIN order_details od ON od.order_id = o.id INNER JOIN customer c ON c.id = o.customer_id INNER JOIN products p ON p.id = o.product_id;


-- Q8. 受注明細テーブルをもとに他の3つのテーブルを結合
SELECT * FROM order_details od INNER JOIN orders o ON o.id = od.order_id INNER JOIN customer c ON c.id = o.customer_id INNER JOIN products p ON p.id = od.product_id;


-- =====　総まとめ　===== --
-- Q. 受注日が2024-04-10の購入をした顧客の顧客名と受注日を取得
-- 1. 受注と顧客の全フィールドを取得
SELECT * FROM orders o INNER JOIN customer c ON c.id = o.customer_id;
-- 2. 受注日が04-10のレコードを取得
SELECT * FROM orders o INNER JOIN customer c ON c.id = o.customer_id WHERE o.order_date = '2024-04-10';
-- 3. 顧客名を取得
SELECT name FROM orders o INNER JOIN customer c ON c.id = o.customer_id WHERE o.order_date = '2024-04-10';
-- 4. 受注日を取得
SELECT name, order_date FROM orders o INNER JOIN customer c ON c.id = o.customer_id WHERE o.order_date = '2024-04-10';


-- Q. 受注日が04-15の受注で購入された商品の受注ID、商品名、単価、数量
SELECT o.id, p.name, p.price, od.amount FROM orders o INNER JOIN order_details od ON od.order_id = o.id INNER JOIN products p ON p.id = od.product_id WHERE order_date = '2024-04-15';

-- 小計まで出してみる
SELECT o.id, p.name, p.price, od.amount, p.price * od.amount AS subtotal FROM orders o INNER JOIN order_details od ON od.order_id = o.id INNER JOIN products p ON p.id = od.product_id WHERE order_date = '2024-04-15';