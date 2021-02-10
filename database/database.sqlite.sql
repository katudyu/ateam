BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS "migrations" (
	"id"	integer NOT NULL,
	"migration"	varchar NOT NULL,
	"batch"	integer NOT NULL,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "sessions" (
	"id"	varchar NOT NULL,
	"user_id"	integer,
	"ip_address"	varchar,
	"user_agent"	text,
	"payload"	text NOT NULL,
	"last_activity"	integer NOT NULL
);
CREATE TABLE IF NOT EXISTS "administrator" (
	"ad_id"	integer NOT NULL,
	"ad_pass"	varchar NOT NULL,
	"created_at"	datetime,
	"updated_at"	datetime,
	PRIMARY KEY("ad_id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "event" (
	"event_id"	integer NOT NULL,
	"event"	varchar NOT NULL,
	"period"	varchar NOT NULL,
	"create_day"	datetime NOT NULL,
	"created_at"	datetime,
	"updated_at"	datetime,
	PRIMARY KEY("event_id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "infomation" (
	"info_id"	integer NOT NULL,
	"info_name"	varchar NOT NULL,
	"content"	text NOT NULL,
	"created_at"	datetime,
	"updated_at"	datetime,
	PRIMARY KEY("info_id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "order" (
	"order_id"	integer NOT NULL,
	"goods_id"	integer NOT NULL,
	"user_id"	integer NOT NULL,
	"date"	datetime NOT NULL,
	"created_at"	datetime,
	"updated_at"	datetime,
	PRIMARY KEY("order_id" AUTOINCREMENT),
	FOREIGN KEY("goods_id") REFERENCES "goods"("goods_id") on delete cascade,
	FOREIGN KEY("user_id") REFERENCES "user"("user_id") on delete cascade
);
CREATE TABLE IF NOT EXISTS "trophyac" (
	"trophy_id"	integer NOT NULL,
	"user_id"	integer NOT NULL,
	"date"	date NOT NULL,
	"created_at"	datetime,
	"updated_at"	datetime,
	PRIMARY KEY("trophy_id","user_id"),
	FOREIGN KEY("user_id") REFERENCES "user"("user_id") on delete cascade,
	FOREIGN KEY("trophy_id") REFERENCES "trophy"("trophy_id") on delete cascade
);
CREATE TABLE IF NOT EXISTS "goods" (
	"goods_id"	integer NOT NULL,
	"goods_name"	varchar NOT NULL,
	"category1"	varchar NOT NULL,
	"category2"	varchar NOT NULL,
	"size"	varchar NOT NULL,
	"color"	varchar NOT NULL,
	"sex"	varchar NOT NULL,
	"company_id"	integer NOT NULL,
	"created_at"	datetime,
	"updated_at"	datetime,
	PRIMARY KEY("goods_id" AUTOINCREMENT),
	FOREIGN KEY("company_id") REFERENCES "company"("company_id") on delete cascade
);
CREATE TABLE IF NOT EXISTS "contact" (
	"opinion_id"	integer NOT NULL,
	"user_id"	integer NOT NULL,
	"opinioncontent"	text NOT NULL,
	"created_at"	datetime,
	"updated_at"	datetime,
	PRIMARY KEY("opinion_id" AUTOINCREMENT),
	FOREIGN KEY("user_id") REFERENCES "user"("user_id") on delete cascade
);
CREATE TABLE IF NOT EXISTS "company" (
	"company_id"	integer NOT NULL,
	"company"	varchar NOT NULL,
	"company_pass"	varchar NOT NULL,
	"created_at"	datetime,
	"updated_at"	datetime,
	PRIMARY KEY("company_id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "trophy" (
	"trophy_id"	integer NOT NULL,
	"trophyname"	varchar NOT NULL,
	"created_at"	datetime,
	"updated_at"	datetime,
	PRIMARY KEY("trophy_id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "grades" (
	"grades_id"	integer NOT NULL,
	"user_id"	integer NOT NULL,
	"run"	float NOT NULL,
	"kcal"	integer NOT NULL,
	"step"	integer NOT NULL,
	"day"	date NOT NULL,
	"created_at"	datetime,
	"updated_at"	datetime,
	PRIMARY KEY("grades_id" AUTOINCREMENT),
	FOREIGN KEY("user_id") REFERENCES "user"("user_id") on delete cascade
);
CREATE TABLE IF NOT EXISTS "site" (
	"site_id"	integer NOT NULL,
	"site_name"	varchar NOT NULL,
	"site_ig"	varchar NOT NULL,
	"site_url"	varchar NOT NULL,
	"created_at"	datetime,
	"updated_at"	datetime,
	PRIMARY KEY("site_id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "community" (
	"community_id"	integer NOT NULL,
	"community_name"	varchar NOT NULL,
	"level"	varchar NOT NULL,
	"leader_id"	integer NOT NULL,
	"created_at"	datetime,
	"updated_at"	datetime,
	PRIMARY KEY("community_id" AUTOINCREMENT),
	FOREIGN KEY("leader_id") REFERENCES "user"("user_id") on delete cascade
);
CREATE TABLE IF NOT EXISTS "user" (
	"user_id"	integer NOT NULL,
	"name"	varchar NOT NULL,
	"sex"	varchar NOT NULL,
	"weight"	float NOT NULL,
	"birthday"	date NOT NULL,
	"postal_code"	varchar,
	"address"	varchar,
	"email"	varchar NOT NULL,
	"user_pass"	varchar NOT NULL,
	"community_id"	integer,
	"created_at"	datetime,
	"updated_at"	datetime,
	PRIMARY KEY("user_id"),
	FOREIGN KEY("community_id") REFERENCES "community"("community_id") on delete cascade
);
CREATE TABLE IF NOT EXISTS "chat" (
	"chat_id"	integer NOT NULL,
	"user_id"	integer NOT NULL,
	"community_id"	integer,
	"comment"	text NOT NULL,
	"sendtime"	datetime NOT NULL,
	"created_at"	datetime,
	"updated_at"	datetime,
	PRIMARY KEY("chat_id" AUTOINCREMENT),
	FOREIGN KEY("community_id") REFERENCES "community"("community_id") on delete cascade,
	FOREIGN KEY("user_id") REFERENCES "user"("user_id") on delete cascade
);
INSERT INTO "migrations" VALUES (53,'2020_09_30_025212_create_sessions_table',1);
INSERT INTO "migrations" VALUES (54,'2020_11_04_041922_create_administrator_table',1);
INSERT INTO "migrations" VALUES (55,'2020_11_05_012845_create_user_table',1);
INSERT INTO "migrations" VALUES (56,'2020_11_05_051137_create_event_table',1);
INSERT INTO "migrations" VALUES (57,'2020_11_05_060445_create_infomation_table',1);
INSERT INTO "migrations" VALUES (58,'2020_11_06_004928_create_order_table',1);
INSERT INTO "migrations" VALUES (59,'2020_11_06_015948_create_trophyac_table',1);
INSERT INTO "migrations" VALUES (60,'2020_11_06_022306_create_goods_table',1);
INSERT INTO "migrations" VALUES (61,'2020_11_06_022426_create_contact_table',1);
INSERT INTO "migrations" VALUES (62,'2020_11_06_024130_create_company_table',1);
INSERT INTO "migrations" VALUES (63,'2020_11_06_042630_create_trophy_table',1);
INSERT INTO "migrations" VALUES (64,'2020_11_06_043112_create_grades_table',1);
INSERT INTO "migrations" VALUES (65,'2020_11_09_013311_create_chat_table',1);
INSERT INTO "migrations" VALUES (66,'2020_11_09_051131_create_site_table',1);
INSERT INTO "migrations" VALUES (67,'2020_11_10_042109_create_community_table',1);
INSERT INTO "sessions" VALUES ('iP3iSkgPiaZtjTIM2qvoMCBCsjResbY4S8rpfTgP',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ0c1WGJ0Yk40ZUpYVGMzUzhlaUJmcHBsUDJ6ZUpRN2I2T01KU3N4TyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9jb21wYW55L2dvb2RzIjt9fQ==',1605750448);
INSERT INTO "sessions" VALUES ('OEyGrTpbJ1ooyJAnRtPSbivHJYKW4pbCZdfyA2vE',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoidzM2M29KMUpmYzZKRlFjemV5OXRteUYwRHRocEVGdGdNTGllZTlnRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9jb21wYW55L2dvb2RzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1605845830);
INSERT INTO "administrator" VALUES (1,'kvv1YFYwtW','2020-11-18 05:38:26','2020-11-18 05:38:26');
INSERT INTO "administrator" VALUES (2,'Ku3gxE0RSm','2020-11-18 05:38:26','2020-11-18 05:38:26');
INSERT INTO "administrator" VALUES (3,'O4HRNrxUMm','2020-11-18 05:38:26','2020-11-18 05:38:26');
INSERT INTO "administrator" VALUES (4,'U9BcwMkKLo','2020-11-18 05:38:26','2020-11-18 05:38:26');
INSERT INTO "administrator" VALUES (5,'OQsYG0NPPe','2020-11-18 05:38:26','2020-11-18 05:38:26');
INSERT INTO "administrator" VALUES (6,'Hh167PVLVR','2020-11-18 05:38:26','2020-11-18 05:38:26');
INSERT INTO "administrator" VALUES (7,'QBZOOM6tOr','2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "administrator" VALUES (8,'uCksdcxqKP','2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "administrator" VALUES (9,'l5MZoZshc8','2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "administrator" VALUES (10,'ewC9M7cOnR','2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "administrator" VALUES (11,'k7E6H8WWVc','2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "administrator" VALUES (12,'MJX9tkT8Md','2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "administrator" VALUES (13,'WxSeBOGIO7','2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "administrator" VALUES (14,'qofhy97dHW','2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "administrator" VALUES (15,'HSsaXMaJlR','2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "administrator" VALUES (16,'icOlsHMctB','2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "administrator" VALUES (17,'vjVlsoSvcS','2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "administrator" VALUES (18,'yw6VJYmDbY','2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "administrator" VALUES (19,'VwNUQYE18g','2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "administrator" VALUES (20,'frJhD5DW3o','2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "administrator" VALUES (21,'vUZPEIuc9O','2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "administrator" VALUES (22,'3vN6hTvDre','2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "administrator" VALUES (23,'4SISgk4HHU','2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "administrator" VALUES (24,'he8RJw4z9y','2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "administrator" VALUES (25,'LGeM0nbbgx','2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "administrator" VALUES (26,'RjTXao3ZzR','2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "administrator" VALUES (27,'qfVtNxmUzL','2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "administrator" VALUES (28,'iVyxjA8aEL','2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "administrator" VALUES (29,'YefY8JPf9N','2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "administrator" VALUES (30,'bVX9hEDIfw','2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "event" VALUES (1,'総走行距離 100Km','2020-11-01~2020-11-31','2020-10-25',NULL,NULL);
INSERT INTO "event" VALUES (2,'総走行距離 150Km','2020-10-01~2020-10-30','2020-9-25',NULL,NULL);
INSERT INTO "event" VALUES (3,'総走行距離 200Km','2020-09-01~2020-09-31','2020-8-25',NULL,NULL);
INSERT INTO "infomation" VALUES (1,'今月のイベントについて','今月のイベントは～～です。',NULL,NULL);
INSERT INTO "infomation" VALUES (2,'メンテナンスのお知らせ','〇月〇日(〇)にメンテナンスを実施致します。',NULL,NULL);
INSERT INTO "infomation" VALUES (3,'ver1.05 アップデートについて','〇月〇日(〇)のver1.05のアップデートについての詳細は以下の通りです。',NULL,NULL);
INSERT INTO "order" VALUES (1,51,19,'2020-05-14','2020-11-18 05:38:39','2020-11-18 05:38:39');
INSERT INTO "order" VALUES (2,138,6,'2018-06-09','2020-11-18 05:38:39','2020-11-18 05:38:39');
INSERT INTO "order" VALUES (3,11,36,'2017-11-05','2020-11-18 05:38:39','2020-11-18 05:38:39');
INSERT INTO "order" VALUES (4,82,31,'2017-09-05','2020-11-18 05:38:39','2020-11-18 05:38:39');
INSERT INTO "order" VALUES (5,2,19,'2016-01-06','2020-11-18 05:38:39','2020-11-18 05:38:39');
INSERT INTO "order" VALUES (6,143,39,'2020-10-04','2020-11-18 05:38:39','2020-11-18 05:38:39');
INSERT INTO "order" VALUES (7,127,8,'2016-07-06','2020-11-18 05:38:39','2020-11-18 05:38:39');
INSERT INTO "order" VALUES (8,76,16,'2020-07-27','2020-11-18 05:38:39','2020-11-18 05:38:39');
INSERT INTO "order" VALUES (9,68,33,'2020-01-13','2020-11-18 05:38:39','2020-11-18 05:38:39');
INSERT INTO "order" VALUES (10,128,40,'2015-12-24','2020-11-18 05:38:39','2020-11-18 05:38:39');
INSERT INTO "order" VALUES (11,13,24,'2020-05-27','2020-11-18 05:38:39','2020-11-18 05:38:39');
INSERT INTO "order" VALUES (12,64,32,'2018-06-20','2020-11-18 05:38:39','2020-11-18 05:38:39');
INSERT INTO "order" VALUES (13,71,30,'2020-07-02','2020-11-18 05:38:39','2020-11-18 05:38:39');
INSERT INTO "order" VALUES (14,135,41,'2017-12-17','2020-11-18 05:38:39','2020-11-18 05:38:39');
INSERT INTO "order" VALUES (15,71,17,'2018-05-17','2020-11-18 05:38:39','2020-11-18 05:38:39');
INSERT INTO "order" VALUES (16,98,41,'2017-05-01','2020-11-18 05:38:39','2020-11-18 05:38:39');
INSERT INTO "order" VALUES (17,6,15,'2017-06-18','2020-11-18 05:38:39','2020-11-18 05:38:39');
INSERT INTO "order" VALUES (18,31,19,'2019-06-28','2020-11-18 05:38:39','2020-11-18 05:38:39');
INSERT INTO "order" VALUES (19,55,37,'2016-02-17','2020-11-18 05:38:39','2020-11-18 05:38:39');
INSERT INTO "order" VALUES (20,102,30,'2017-04-25','2020-11-18 05:38:39','2020-11-18 05:38:39');
INSERT INTO "order" VALUES (21,77,49,'2019-02-14','2020-11-18 05:38:39','2020-11-18 05:38:39');
INSERT INTO "order" VALUES (22,23,24,'2017-07-25','2020-11-18 05:38:39','2020-11-18 05:38:39');
INSERT INTO "order" VALUES (23,8,49,'2018-03-16','2020-11-18 05:38:39','2020-11-18 05:38:39');
INSERT INTO "order" VALUES (24,16,40,'2019-11-01','2020-11-18 05:38:39','2020-11-18 05:38:39');
INSERT INTO "order" VALUES (25,116,26,'2017-09-07','2020-11-18 05:38:39','2020-11-18 05:38:39');
INSERT INTO "order" VALUES (26,6,10,'2016-03-26','2020-11-18 05:38:39','2020-11-18 05:38:39');
INSERT INTO "order" VALUES (27,17,5,'2018-08-19','2020-11-18 05:38:39','2020-11-18 05:38:39');
INSERT INTO "order" VALUES (28,25,21,'2017-11-25','2020-11-18 05:38:39','2020-11-18 05:38:39');
INSERT INTO "order" VALUES (29,115,17,'2016-04-25','2020-11-18 05:38:40','2020-11-18 05:38:40');
INSERT INTO "order" VALUES (30,129,4,'2020-10-02','2020-11-18 05:38:40','2020-11-18 05:38:40');
INSERT INTO "order" VALUES (31,103,8,'2018-04-26','2020-11-18 05:38:40','2020-11-18 05:38:40');
INSERT INTO "order" VALUES (32,40,37,'2019-03-24','2020-11-18 05:38:40','2020-11-18 05:38:40');
INSERT INTO "order" VALUES (33,100,38,'2018-09-30','2020-11-18 05:38:40','2020-11-18 05:38:40');
INSERT INTO "order" VALUES (34,76,24,'2019-05-18','2020-11-18 05:38:40','2020-11-18 05:38:40');
INSERT INTO "order" VALUES (35,58,41,'2019-07-09','2020-11-18 05:38:40','2020-11-18 05:38:40');
INSERT INTO "order" VALUES (36,101,3,'2020-10-28','2020-11-18 05:38:40','2020-11-18 05:38:40');
INSERT INTO "order" VALUES (37,93,19,'2017-10-18','2020-11-18 05:38:40','2020-11-18 05:38:40');
INSERT INTO "order" VALUES (38,140,25,'2018-03-08','2020-11-18 05:38:40','2020-11-18 05:38:40');
INSERT INTO "order" VALUES (39,69,1,'2015-12-19','2020-11-18 05:38:40','2020-11-18 05:38:40');
INSERT INTO "order" VALUES (40,66,25,'2017-09-30','2020-11-18 05:38:40','2020-11-18 05:38:40');
INSERT INTO "order" VALUES (41,89,34,'2019-03-23','2020-11-18 05:38:40','2020-11-18 05:38:40');
INSERT INTO "order" VALUES (42,96,5,'2017-07-10','2020-11-18 05:38:40','2020-11-18 05:38:40');
INSERT INTO "order" VALUES (43,16,19,'2019-03-03','2020-11-18 05:38:40','2020-11-18 05:38:40');
INSERT INTO "order" VALUES (44,21,34,'2018-04-17','2020-11-18 05:38:40','2020-11-18 05:38:40');
INSERT INTO "order" VALUES (45,97,50,'2017-05-02','2020-11-18 05:38:40','2020-11-18 05:38:40');
INSERT INTO "order" VALUES (46,108,2,'2016-10-07','2020-11-18 05:38:40','2020-11-18 05:38:40');
INSERT INTO "order" VALUES (47,33,31,'2019-04-18','2020-11-18 05:38:40','2020-11-18 05:38:40');
INSERT INTO "order" VALUES (48,41,8,'2017-11-08','2020-11-18 05:38:40','2020-11-18 05:38:40');
INSERT INTO "order" VALUES (49,17,39,'2017-04-18','2020-11-18 05:38:40','2020-11-18 05:38:40');
INSERT INTO "order" VALUES (50,135,5,'2017-10-25','2020-11-18 05:38:40','2020-11-18 05:38:40');
INSERT INTO "order" VALUES (51,14,39,'2017-07-27','2020-11-18 05:38:40','2020-11-18 05:38:40');
INSERT INTO "order" VALUES (52,36,25,'2020-08-06','2020-11-18 05:38:40','2020-11-18 05:38:40');
INSERT INTO "order" VALUES (53,104,18,'2020-02-26','2020-11-18 05:38:40','2020-11-18 05:38:40');
INSERT INTO "order" VALUES (54,42,40,'2020-10-11','2020-11-18 05:38:40','2020-11-18 05:38:40');
INSERT INTO "order" VALUES (55,22,37,'2020-11-08','2020-11-18 05:38:40','2020-11-18 05:38:40');
INSERT INTO "order" VALUES (56,14,19,'2018-03-08','2020-11-18 05:38:40','2020-11-18 05:38:40');
INSERT INTO "order" VALUES (57,72,46,'2018-11-21','2020-11-18 05:38:41','2020-11-18 05:38:41');
INSERT INTO "order" VALUES (58,58,40,'2020-01-11','2020-11-18 05:38:41','2020-11-18 05:38:41');
INSERT INTO "order" VALUES (59,53,41,'2017-07-12','2020-11-18 05:38:41','2020-11-18 05:38:41');
INSERT INTO "order" VALUES (60,31,24,'2020-03-26','2020-11-18 05:38:41','2020-11-18 05:38:41');
INSERT INTO "order" VALUES (61,61,29,'2018-01-02','2020-11-18 05:38:41','2020-11-18 05:38:41');
INSERT INTO "order" VALUES (62,76,5,'2018-01-14','2020-11-18 05:38:41','2020-11-18 05:38:41');
INSERT INTO "order" VALUES (63,15,2,'2018-03-07','2020-11-18 05:38:41','2020-11-18 05:38:41');
INSERT INTO "order" VALUES (64,27,34,'2020-07-27','2020-11-18 05:38:41','2020-11-18 05:38:41');
INSERT INTO "order" VALUES (65,139,41,'2017-07-03','2020-11-18 05:38:41','2020-11-18 05:38:41');
INSERT INTO "order" VALUES (66,125,7,'2018-12-11','2020-11-18 05:38:41','2020-11-18 05:38:41');
INSERT INTO "order" VALUES (67,128,19,'2019-04-26','2020-11-18 05:38:41','2020-11-18 05:38:41');
INSERT INTO "order" VALUES (68,44,19,'2020-10-11','2020-11-18 05:38:41','2020-11-18 05:38:41');
INSERT INTO "order" VALUES (69,134,27,'2017-07-11','2020-11-18 05:38:41','2020-11-18 05:38:41');
INSERT INTO "order" VALUES (70,33,46,'2016-10-18','2020-11-18 05:38:41','2020-11-18 05:38:41');
INSERT INTO "order" VALUES (71,25,48,'2018-07-23','2020-11-18 05:38:41','2020-11-18 05:38:41');
INSERT INTO "order" VALUES (72,78,7,'2018-10-20','2020-11-18 05:38:41','2020-11-18 05:38:41');
INSERT INTO "order" VALUES (73,76,30,'2017-03-07','2020-11-18 05:38:41','2020-11-18 05:38:41');
INSERT INTO "order" VALUES (74,78,24,'2019-06-11','2020-11-18 05:38:41','2020-11-18 05:38:41');
INSERT INTO "order" VALUES (75,126,24,'2016-01-28','2020-11-18 05:38:41','2020-11-18 05:38:41');
INSERT INTO "order" VALUES (76,132,16,'2018-02-06','2020-11-18 05:38:41','2020-11-18 05:38:41');
INSERT INTO "order" VALUES (77,118,8,'2020-03-17','2020-11-18 05:38:41','2020-11-18 05:38:41');
INSERT INTO "order" VALUES (78,100,34,'2018-11-03','2020-11-18 05:38:41','2020-11-18 05:38:41');
INSERT INTO "order" VALUES (79,39,9,'2018-07-04','2020-11-18 05:38:41','2020-11-18 05:38:41');
INSERT INTO "order" VALUES (80,141,16,'2016-02-28','2020-11-18 05:38:41','2020-11-18 05:38:41');
INSERT INTO "trophyac" VALUES (2,26,'2019-07-27','2020-11-18 05:38:41','2020-11-18 05:38:41');
INSERT INTO "trophyac" VALUES (3,5,'2017-06-30','2020-11-18 05:38:42','2020-11-18 05:38:42');
INSERT INTO "trophyac" VALUES (1,37,'2020-01-04','2020-11-18 05:38:42','2020-11-18 05:38:42');
INSERT INTO "trophyac" VALUES (1,41,'2019-12-10','2020-11-18 05:38:42','2020-11-18 05:38:42');
INSERT INTO "trophyac" VALUES (1,42,'2019-04-28','2020-11-18 05:38:42','2020-11-18 05:38:42');
INSERT INTO "trophyac" VALUES (2,13,'2019-05-22','2020-11-18 05:38:42','2020-11-18 05:38:42');
INSERT INTO "trophyac" VALUES (3,27,'2020-03-20','2020-11-18 05:38:42','2020-11-18 05:38:42');
INSERT INTO "trophyac" VALUES (1,15,'2016-01-14','2020-11-18 05:38:42','2020-11-18 05:38:42');
INSERT INTO "trophyac" VALUES (2,27,'2019-05-01','2020-11-18 05:38:42','2020-11-18 05:38:42');
INSERT INTO "trophyac" VALUES (3,45,'2018-05-17','2020-11-18 05:38:42','2020-11-18 05:38:42');
INSERT INTO "trophyac" VALUES (1,39,'2017-05-15','2020-11-18 05:38:42','2020-11-18 05:38:42');
INSERT INTO "trophyac" VALUES (1,29,'2019-08-08','2020-11-18 05:38:42','2020-11-18 05:38:42');
INSERT INTO "trophyac" VALUES (3,26,'2017-11-02','2020-11-18 05:38:42','2020-11-18 05:38:42');
INSERT INTO "trophyac" VALUES (2,31,'2019-12-03','2020-11-18 05:38:42','2020-11-18 05:38:42');
INSERT INTO "trophyac" VALUES (1,27,'2016-08-09','2020-11-18 05:38:42','2020-11-18 05:38:42');
INSERT INTO "trophyac" VALUES (2,30,'2020-04-15','2020-11-18 05:38:42','2020-11-18 05:38:42');
INSERT INTO "trophyac" VALUES (2,5,'2020-11-14','2020-11-18 05:40:46','2020-11-18 05:40:46');
INSERT INTO "trophyac" VALUES (1,21,'2019-09-06','2020-11-18 05:40:47','2020-11-18 05:40:47');
INSERT INTO "trophyac" VALUES (2,4,'2019-11-18','2020-11-18 05:40:47','2020-11-18 05:40:47');
INSERT INTO "trophyac" VALUES (2,7,'2018-06-23','2020-11-18 05:40:47','2020-11-18 05:40:47');
INSERT INTO "trophyac" VALUES (1,14,'2020-07-09','2020-11-18 05:40:47','2020-11-18 05:40:47');
INSERT INTO "trophyac" VALUES (1,33,'2019-06-10','2020-11-18 05:40:47','2020-11-18 05:40:47');
INSERT INTO "trophyac" VALUES (3,19,'2019-07-01','2020-11-18 05:40:47','2020-11-18 05:40:47');
INSERT INTO "trophyac" VALUES (2,34,'2016-08-19','2020-11-18 05:40:47','2020-11-18 05:40:47');
INSERT INTO "trophyac" VALUES (1,11,'2017-01-20','2020-11-18 05:40:47','2020-11-18 05:40:47');
INSERT INTO "trophyac" VALUES (3,15,'2018-02-08','2020-11-18 05:40:47','2020-11-18 05:40:47');
INSERT INTO "trophyac" VALUES (3,1,'2018-04-22','2020-11-18 05:40:47','2020-11-18 05:40:47');
INSERT INTO "trophyac" VALUES (2,25,'2016-03-12','2020-11-18 05:40:47','2020-11-18 05:40:47');
INSERT INTO "trophyac" VALUES (2,39,'2017-08-17','2020-11-18 05:40:47','2020-11-18 05:40:47');
INSERT INTO "trophyac" VALUES (3,35,'2017-10-29','2020-11-18 05:40:47','2020-11-18 05:40:47');
INSERT INTO "trophyac" VALUES (3,9,'2019-10-22','2020-11-18 05:40:47','2020-11-18 05:40:47');
INSERT INTO "trophyac" VALUES (1,31,'2019-06-18','2020-11-18 05:40:47','2020-11-18 05:40:47');
INSERT INTO "trophyac" VALUES (2,28,'2018-09-06','2020-11-18 05:40:47','2020-11-18 05:40:47');
INSERT INTO "trophyac" VALUES (3,23,'2018-09-27','2020-11-18 05:41:17','2020-11-18 05:41:17');
INSERT INTO "trophyac" VALUES (2,36,'2019-05-09','2020-11-18 05:41:17','2020-11-18 05:41:17');
INSERT INTO "trophyac" VALUES (3,47,'2019-07-23','2020-11-18 05:41:17','2020-11-18 05:41:17');
INSERT INTO "trophyac" VALUES (1,44,'2018-08-21','2020-11-18 05:41:23','2020-11-18 05:41:23');
INSERT INTO "trophyac" VALUES (1,43,'2018-09-02','2020-11-18 05:41:23','2020-11-18 05:41:23');
INSERT INTO "trophyac" VALUES (3,34,'2019-11-15','2020-11-18 05:41:23','2020-11-18 05:41:23');
INSERT INTO "trophyac" VALUES (1,24,'2019-07-11','2020-11-18 05:41:23','2020-11-18 05:41:23');
INSERT INTO "trophyac" VALUES (1,8,'2017-10-03','2020-11-18 05:41:23','2020-11-18 05:41:23');
INSERT INTO "trophyac" VALUES (3,21,'2019-10-29','2020-11-18 05:41:28','2020-11-18 05:41:28');
INSERT INTO "trophyac" VALUES (3,42,'2016-01-28','2020-11-18 05:41:28','2020-11-18 05:41:28');
INSERT INTO "trophyac" VALUES (1,2,'2018-03-06','2020-11-18 05:41:34','2020-11-18 05:41:34');
INSERT INTO "trophyac" VALUES (2,22,'2020-03-18','2020-11-18 05:41:44','2020-11-18 05:41:44');
INSERT INTO "trophyac" VALUES (3,36,'2016-04-21','2020-11-18 05:41:44','2020-11-18 05:41:44');
INSERT INTO "trophyac" VALUES (2,29,'2016-07-05','2020-11-18 05:41:44','2020-11-18 05:41:44');
INSERT INTO "trophyac" VALUES (2,14,'2018-09-02','2020-11-18 05:41:44','2020-11-18 05:41:44');
INSERT INTO "trophyac" VALUES (3,18,'2020-03-21','2020-11-18 05:41:44','2020-11-18 05:41:44');
INSERT INTO "trophyac" VALUES (3,22,'2020-03-19','2020-11-18 05:41:44','2020-11-18 05:41:44');
INSERT INTO "goods" VALUES (1,'パーカー-70','トップス','パーカー','S','maroon','メンズ',5,'2020-11-18 05:38:33','2020-11-18 05:38:33');
INSERT INTO "goods" VALUES (2,'シューズ-22','アクセサリー','シューズ','27.5cm','teal','レディース',12,'2020-11-18 05:38:33','2020-11-18 05:38:33');
INSERT INTO "goods" VALUES (3,'シューズ-98','アクセサリー','シューズ','25.5cm','olive','レディース',2,'2020-11-18 05:38:33','2020-11-18 05:38:33');
INSERT INTO "goods" VALUES (4,'シューズ-108','アクセサリー','シューズ','27cm','silver','メンズ',9,'2020-11-18 05:38:33','2020-11-18 05:38:33');
INSERT INTO "goods" VALUES (5,'キャップ-118','アクセサリー','キャップ','S','maroon','メンズ',19,'2020-11-18 05:38:33','2020-11-18 05:38:33');
INSERT INTO "goods" VALUES (6,'パンツ-128','ボトムス','パンツ','S','aqua','レディース',1,'2020-11-18 05:38:33','2020-11-18 05:38:33');
INSERT INTO "goods" VALUES (7,'パンツ-108','ボトムス','パンツ','S','teal','レディース',14,'2020-11-18 05:38:33','2020-11-18 05:38:33');
INSERT INTO "goods" VALUES (8,'パンツ-67','ボトムス','パンツ','S','green','レディース',13,'2020-11-18 05:38:33','2020-11-18 05:38:33');
INSERT INTO "goods" VALUES (9,'パーカー-14','トップス','パーカー','M','fuchsia','レディース',7,'2020-11-18 05:38:33','2020-11-18 05:38:33');
INSERT INTO "goods" VALUES (10,'タンクトップ-83','トップス','タンクトップ','S','black','レディース',17,'2020-11-18 05:38:33','2020-11-18 05:38:33');
INSERT INTO "goods" VALUES (11,'パンツ-109','ボトムス','パンツ','L','olive','メンズ',12,'2020-11-18 05:38:33','2020-11-18 05:38:33');
INSERT INTO "goods" VALUES (12,'パンツ-42','ボトムス','パンツ','L','silver','メンズ',20,'2020-11-18 05:38:33','2020-11-18 05:38:33');
INSERT INTO "goods" VALUES (13,'パンツ-73','ボトムス','パンツ','S','green','メンズ',13,'2020-11-18 05:38:33','2020-11-18 05:38:33');
INSERT INTO "goods" VALUES (14,'キャップ-64','アクセサリー','キャップ','M','maroon','メンズ',19,'2020-11-18 05:38:34','2020-11-18 05:38:34');
INSERT INTO "goods" VALUES (15,'シャツ-22','トップス','シャツ','M','black','レディース',16,'2020-11-18 05:38:34','2020-11-18 05:38:34');
INSERT INTO "goods" VALUES (16,'キャップ-31','アクセサリー','キャップ','M','gray','メンズ',2,'2020-11-18 05:38:34','2020-11-18 05:38:34');
INSERT INTO "goods" VALUES (17,'シャツ-146','トップス','シャツ','L','green','レディース',8,'2020-11-18 05:38:34','2020-11-18 05:38:34');
INSERT INTO "goods" VALUES (18,'シャツ-46','トップス','シャツ','L','aqua','メンズ',5,'2020-11-18 05:38:34','2020-11-18 05:38:34');
INSERT INTO "goods" VALUES (19,'パンツ-66','ボトムス','パンツ','M','navy','メンズ',14,'2020-11-18 05:38:34','2020-11-18 05:38:34');
INSERT INTO "goods" VALUES (20,'シャツ-42','トップス','シャツ','S','navy','メンズ',13,'2020-11-18 05:38:34','2020-11-18 05:38:34');
INSERT INTO "goods" VALUES (21,'パンツ-8','ボトムス','パンツ','M','green','レディース',12,'2020-11-18 05:38:34','2020-11-18 05:38:34');
INSERT INTO "goods" VALUES (22,'キャップ-143','アクセサリー','キャップ','S','maroon','メンズ',17,'2020-11-18 05:38:34','2020-11-18 05:38:34');
INSERT INTO "goods" VALUES (23,'パンツ-60','ボトムス','パンツ','M','green','メンズ',9,'2020-11-18 05:38:34','2020-11-18 05:38:34');
INSERT INTO "goods" VALUES (24,'パンツ-19','ボトムス','パンツ','L','aqua','メンズ',20,'2020-11-18 05:38:34','2020-11-18 05:38:34');
INSERT INTO "goods" VALUES (25,'キャップ-86','アクセサリー','キャップ','M','green','メンズ',4,'2020-11-18 05:38:34','2020-11-18 05:38:34');
INSERT INTO "goods" VALUES (26,'パンツ-91','ボトムス','パンツ','S','green','メンズ',11,'2020-11-18 05:38:34','2020-11-18 05:38:34');
INSERT INTO "goods" VALUES (27,'パンツ-82','ボトムス','パンツ','M','white','レディース',3,'2020-11-18 05:38:34','2020-11-18 05:38:34');
INSERT INTO "goods" VALUES (28,'シューズ-65','アクセサリー','シューズ','27.5cm','white','レディース',1,'2020-11-18 05:38:34','2020-11-18 05:38:34');
INSERT INTO "goods" VALUES (29,'キャップ-133','アクセサリー','キャップ','L','teal','メンズ',5,'2020-11-18 05:38:34','2020-11-18 05:38:34');
INSERT INTO "goods" VALUES (30,'パーカー-133','トップス','パーカー','S','aqua','レディース',15,'2020-11-18 05:38:34','2020-11-18 05:38:34');
INSERT INTO "goods" VALUES (31,'キャップ-7','アクセサリー','キャップ','L','yellow','メンズ',20,'2020-11-18 05:38:34','2020-11-18 05:38:34');
INSERT INTO "goods" VALUES (32,'パンツ-143','ボトムス','パンツ','S','maroon','レディース',2,'2020-11-18 05:38:34','2020-11-18 05:38:34');
INSERT INTO "goods" VALUES (33,'キャップ-17','アクセサリー','キャップ','L','black','レディース',3,'2020-11-18 05:38:34','2020-11-18 05:38:34');
INSERT INTO "goods" VALUES (34,'パンツ-4','ボトムス','パンツ','L','green','レディース',8,'2020-11-18 05:38:34','2020-11-18 05:38:34');
INSERT INTO "goods" VALUES (35,'パンツ-146','ボトムス','パンツ','L','fuchsia','メンズ',3,'2020-11-18 05:38:34','2020-11-18 05:38:34');
INSERT INTO "goods" VALUES (36,'シューズ-129','アクセサリー','シューズ','27.5cm','lime','メンズ',10,'2020-11-18 05:38:34','2020-11-18 05:38:34');
INSERT INTO "goods" VALUES (37,'キャップ-13','アクセサリー','キャップ','L','black','レディース',4,'2020-11-18 05:38:34','2020-11-18 05:38:34');
INSERT INTO "goods" VALUES (38,'シャツ-80','トップス','シャツ','M','teal','メンズ',5,'2020-11-18 05:38:34','2020-11-18 05:38:34');
INSERT INTO "goods" VALUES (39,'パンツ-31','ボトムス','パンツ','S','silver','メンズ',10,'2020-11-18 05:38:34','2020-11-18 05:38:34');
INSERT INTO "goods" VALUES (40,'パンツ-66','ボトムス','パンツ','S','white','レディース',19,'2020-11-18 05:38:34','2020-11-18 05:38:34');
INSERT INTO "goods" VALUES (41,'タンクトップ-46','トップス','タンクトップ','S','teal','レディース',17,'2020-11-18 05:38:34','2020-11-18 05:38:34');
INSERT INTO "goods" VALUES (42,'パンツ-56','ボトムス','パンツ','M','blue','メンズ',11,'2020-11-18 05:38:34','2020-11-18 05:38:34');
INSERT INTO "goods" VALUES (43,'キャップ-111','アクセサリー','キャップ','S','yellow','レディース',16,'2020-11-18 05:38:35','2020-11-18 05:38:35');
INSERT INTO "goods" VALUES (44,'シューズ-64','アクセサリー','シューズ','24.5cm','maroon','メンズ',7,'2020-11-18 05:38:35','2020-11-18 05:38:35');
INSERT INTO "goods" VALUES (45,'キャップ-98','アクセサリー','キャップ','S','fuchsia','レディース',14,'2020-11-18 05:38:35','2020-11-18 05:38:35');
INSERT INTO "goods" VALUES (46,'パーカー-70','トップス','パーカー','S','green','メンズ',7,'2020-11-18 05:38:35','2020-11-18 05:38:35');
INSERT INTO "goods" VALUES (47,'パンツ-27','ボトムス','パンツ','S','maroon','レディース',8,'2020-11-18 05:38:35','2020-11-18 05:38:35');
INSERT INTO "goods" VALUES (48,'キャップ-90','アクセサリー','キャップ','M','olive','レディース',4,'2020-11-18 05:38:35','2020-11-18 05:38:35');
INSERT INTO "goods" VALUES (49,'パンツ-22','ボトムス','パンツ','S','yellow','レディース',19,'2020-11-18 05:38:35','2020-11-18 05:38:35');
INSERT INTO "goods" VALUES (50,'シャツ-40','トップス','シャツ','M','green','メンズ',4,'2020-11-18 05:38:35','2020-11-18 05:38:35');
INSERT INTO "goods" VALUES (51,'タンクトップ-42','トップス','タンクトップ','M','olive','レディース',6,'2020-11-18 05:38:35','2020-11-18 05:38:35');
INSERT INTO "goods" VALUES (52,'パーカー-95','トップス','パーカー','L','olive','レディース',4,'2020-11-18 05:38:35','2020-11-18 05:38:35');
INSERT INTO "goods" VALUES (53,'シューズ-64','アクセサリー','シューズ','24.5cm','blue','メンズ',19,'2020-11-18 05:38:35','2020-11-18 05:38:35');
INSERT INTO "goods" VALUES (54,'キャップ-149','アクセサリー','キャップ','L','aqua','レディース',3,'2020-11-18 05:38:35','2020-11-18 05:38:35');
INSERT INTO "goods" VALUES (55,'シューズ-54','アクセサリー','シューズ','24cm','yellow','レディース',15,'2020-11-18 05:38:35','2020-11-18 05:38:35');
INSERT INTO "goods" VALUES (56,'シューズ-135','アクセサリー','シューズ','25cm','navy','レディース',9,'2020-11-18 05:38:35','2020-11-18 05:38:35');
INSERT INTO "goods" VALUES (57,'タンクトップ-72','トップス','タンクトップ','S','blue','レディース',12,'2020-11-18 05:38:35','2020-11-18 05:38:35');
INSERT INTO "goods" VALUES (58,'キャップ-31','アクセサリー','キャップ','L','maroon','メンズ',15,'2020-11-18 05:38:35','2020-11-18 05:38:35');
INSERT INTO "goods" VALUES (59,'キャップ-136','アクセサリー','キャップ','L','maroon','メンズ',4,'2020-11-18 05:38:35','2020-11-18 05:38:35');
INSERT INTO "goods" VALUES (60,'キャップ-144','アクセサリー','キャップ','L','aqua','レディース',5,'2020-11-18 05:38:35','2020-11-18 05:38:35');
INSERT INTO "goods" VALUES (61,'パンツ-28','ボトムス','パンツ','S','purple','レディース',12,'2020-11-18 05:38:35','2020-11-18 05:38:35');
INSERT INTO "goods" VALUES (62,'パンツ-60','ボトムス','パンツ','M','gray','レディース',2,'2020-11-18 05:38:35','2020-11-18 05:38:35');
INSERT INTO "goods" VALUES (63,'パンツ-50','ボトムス','パンツ','S','gray','メンズ',15,'2020-11-18 05:38:35','2020-11-18 05:38:35');
INSERT INTO "goods" VALUES (64,'シャツ-2','トップス','シャツ','L','blue','レディース',4,'2020-11-18 05:38:35','2020-11-18 05:38:35');
INSERT INTO "goods" VALUES (65,'パンツ-43','ボトムス','パンツ','L','olive','メンズ',7,'2020-11-18 05:38:35','2020-11-18 05:38:35');
INSERT INTO "goods" VALUES (66,'シャツ-113','トップス','シャツ','L','gray','メンズ',17,'2020-11-18 05:38:35','2020-11-18 05:38:35');
INSERT INTO "goods" VALUES (67,'シャツ-52','トップス','シャツ','M','navy','レディース',4,'2020-11-18 05:38:35','2020-11-18 05:38:35');
INSERT INTO "goods" VALUES (68,'パーカー-9','トップス','パーカー','L','silver','レディース',6,'2020-11-18 05:38:35','2020-11-18 05:38:35');
INSERT INTO "goods" VALUES (69,'キャップ-52','アクセサリー','キャップ','S','silver','レディース',3,'2020-11-18 05:38:35','2020-11-18 05:38:35');
INSERT INTO "goods" VALUES (70,'タンクトップ-126','トップス','タンクトップ','S','silver','レディース',4,'2020-11-18 05:38:36','2020-11-18 05:38:36');
INSERT INTO "goods" VALUES (71,'パンツ-59','ボトムス','パンツ','L','lime','レディース',17,'2020-11-18 05:38:36','2020-11-18 05:38:36');
INSERT INTO "goods" VALUES (72,'パンツ-68','ボトムス','パンツ','S','navy','レディース',20,'2020-11-18 05:38:36','2020-11-18 05:38:36');
INSERT INTO "goods" VALUES (73,'パンツ-22','ボトムス','パンツ','L','lime','メンズ',7,'2020-11-18 05:38:36','2020-11-18 05:38:36');
INSERT INTO "goods" VALUES (74,'シャツ-39','トップス','シャツ','L','olive','メンズ',18,'2020-11-18 05:38:36','2020-11-18 05:38:36');
INSERT INTO "goods" VALUES (75,'パンツ-113','ボトムス','パンツ','S','white','レディース',3,'2020-11-18 05:38:36','2020-11-18 05:38:36');
INSERT INTO "goods" VALUES (76,'キャップ-52','アクセサリー','キャップ','M','fuchsia','メンズ',16,'2020-11-18 05:38:36','2020-11-18 05:38:36');
INSERT INTO "goods" VALUES (77,'パーカー-6','トップス','パーカー','S','silver','レディース',17,'2020-11-18 05:38:36','2020-11-18 05:38:36');
INSERT INTO "goods" VALUES (78,'パンツ-99','ボトムス','パンツ','L','white','メンズ',5,'2020-11-18 05:38:36','2020-11-18 05:38:36');
INSERT INTO "goods" VALUES (79,'パンツ-47','ボトムス','パンツ','S','fuchsia','メンズ',17,'2020-11-18 05:38:36','2020-11-18 05:38:36');
INSERT INTO "goods" VALUES (80,'シャツ-64','トップス','シャツ','M','lime','レディース',15,'2020-11-18 05:38:36','2020-11-18 05:38:36');
INSERT INTO "goods" VALUES (81,'タンクトップ-34','トップス','タンクトップ','M','black','レディース',2,'2020-11-18 05:38:36','2020-11-18 05:38:36');
INSERT INTO "goods" VALUES (82,'パンツ-25','ボトムス','パンツ','S','fuchsia','メンズ',19,'2020-11-18 05:38:36','2020-11-18 05:38:36');
INSERT INTO "goods" VALUES (83,'キャップ-100','アクセサリー','キャップ','L','navy','メンズ',3,'2020-11-18 05:38:36','2020-11-18 05:38:36');
INSERT INTO "goods" VALUES (84,'シャツ-54','トップス','シャツ','L','black','メンズ',14,'2020-11-18 05:38:36','2020-11-18 05:38:36');
INSERT INTO "goods" VALUES (85,'キャップ-102','アクセサリー','キャップ','L','green','レディース',2,'2020-11-18 05:38:36','2020-11-18 05:38:36');
INSERT INTO "goods" VALUES (86,'パンツ-132','ボトムス','パンツ','M','yellow','メンズ',1,'2020-11-18 05:38:36','2020-11-18 05:38:36');
INSERT INTO "goods" VALUES (87,'タンクトップ-79','トップス','タンクトップ','M','fuchsia','メンズ',10,'2020-11-18 05:38:36','2020-11-18 05:38:36');
INSERT INTO "goods" VALUES (88,'パンツ-146','ボトムス','パンツ','M','blue','レディース',11,'2020-11-18 05:38:36','2020-11-18 05:38:36');
INSERT INTO "goods" VALUES (89,'シューズ-74','アクセサリー','シューズ','28cm','maroon','レディース',18,'2020-11-18 05:38:36','2020-11-18 05:38:36');
INSERT INTO "goods" VALUES (90,'パンツ-44','ボトムス','パンツ','M','maroon','メンズ',14,'2020-11-18 05:38:36','2020-11-18 05:38:36');
INSERT INTO "goods" VALUES (91,'パンツ-61','ボトムス','パンツ','S','aqua','レディース',13,'2020-11-18 05:38:36','2020-11-18 05:38:36');
INSERT INTO "goods" VALUES (92,'キャップ-113','アクセサリー','キャップ','M','black','レディース',5,'2020-11-18 05:38:36','2020-11-18 05:38:36');
INSERT INTO "goods" VALUES (93,'シャツ-10','トップス','シャツ','S','gray','メンズ',15,'2020-11-18 05:38:36','2020-11-18 05:38:36');
INSERT INTO "goods" VALUES (94,'シャツ-109','トップス','シャツ','M','blue','メンズ',16,'2020-11-18 05:38:36','2020-11-18 05:38:36');
INSERT INTO "goods" VALUES (95,'パンツ-150','ボトムス','パンツ','S','teal','メンズ',12,'2020-11-18 05:38:36','2020-11-18 05:38:36');
INSERT INTO "goods" VALUES (96,'パンツ-115','ボトムス','パンツ','M','white','レディース',12,'2020-11-18 05:38:37','2020-11-18 05:38:37');
INSERT INTO "goods" VALUES (97,'シューズ-91','アクセサリー','シューズ','27cm','silver','メンズ',5,'2020-11-18 05:38:37','2020-11-18 05:38:37');
INSERT INTO "goods" VALUES (98,'パンツ-30','ボトムス','パンツ','S','maroon','メンズ',11,'2020-11-18 05:38:37','2020-11-18 05:38:37');
INSERT INTO "goods" VALUES (99,'シャツ-52','トップス','シャツ','S','maroon','メンズ',10,'2020-11-18 05:38:37','2020-11-18 05:38:37');
INSERT INTO "goods" VALUES (100,'パンツ-58','ボトムス','パンツ','S','black','メンズ',8,'2020-11-18 05:38:37','2020-11-18 05:38:37');
INSERT INTO "goods" VALUES (101,'シューズ-61','アクセサリー','シューズ','27cm','olive','メンズ',11,'2020-11-18 05:38:37','2020-11-18 05:38:37');
INSERT INTO "goods" VALUES (102,'タンクトップ-25','トップス','タンクトップ','M','navy','レディース',17,'2020-11-18 05:38:37','2020-11-18 05:38:37');
INSERT INTO "goods" VALUES (103,'キャップ-23','アクセサリー','キャップ','S','purple','レディース',18,'2020-11-18 05:38:37','2020-11-18 05:38:37');
INSERT INTO "goods" VALUES (104,'キャップ-125','アクセサリー','キャップ','L','olive','レディース',18,'2020-11-18 05:38:37','2020-11-18 05:38:37');
INSERT INTO "goods" VALUES (105,'シャツ-66','トップス','シャツ','L','teal','メンズ',6,'2020-11-18 05:38:37','2020-11-18 05:38:37');
INSERT INTO "goods" VALUES (106,'パンツ-55','ボトムス','パンツ','L','silver','レディース',6,'2020-11-18 05:38:37','2020-11-18 05:38:37');
INSERT INTO "goods" VALUES (107,'パンツ-4','ボトムス','パンツ','S','black','メンズ',17,'2020-11-18 05:38:37','2020-11-18 05:38:37');
INSERT INTO "goods" VALUES (108,'シャツ-18','トップス','シャツ','S','navy','レディース',6,'2020-11-18 05:38:37','2020-11-18 05:38:37');
INSERT INTO "goods" VALUES (109,'パーカー-94','トップス','パーカー','M','navy','メンズ',3,'2020-11-18 05:38:37','2020-11-18 05:38:37');
INSERT INTO "goods" VALUES (110,'タンクトップ-52','トップス','タンクトップ','S','maroon','メンズ',19,'2020-11-18 05:38:37','2020-11-18 05:38:37');
INSERT INTO "goods" VALUES (111,'シューズ-75','アクセサリー','シューズ','27cm','gray','メンズ',18,'2020-11-18 05:38:37','2020-11-18 05:38:37');
INSERT INTO "goods" VALUES (112,'タンクトップ-147','トップス','タンクトップ','S','black','レディース',6,'2020-11-18 05:38:37','2020-11-18 05:38:37');
INSERT INTO "goods" VALUES (113,'パンツ-43','ボトムス','パンツ','M','purple','レディース',3,'2020-11-18 05:38:37','2020-11-18 05:38:37');
INSERT INTO "goods" VALUES (114,'パンツ-134','ボトムス','パンツ','M','yellow','メンズ',9,'2020-11-18 05:38:37','2020-11-18 05:38:37');
INSERT INTO "goods" VALUES (115,'パンツ-146','ボトムス','パンツ','M','silver','メンズ',8,'2020-11-18 05:38:37','2020-11-18 05:38:37');
INSERT INTO "goods" VALUES (116,'シャツ-114','トップス','シャツ','L','green','メンズ',19,'2020-11-18 05:38:37','2020-11-18 05:38:37');
INSERT INTO "goods" VALUES (117,'パーカー-98','トップス','パーカー','M','purple','メンズ',14,'2020-11-18 05:38:37','2020-11-18 05:38:37');
INSERT INTO "goods" VALUES (118,'シャツ-112','トップス','シャツ','M','silver','レディース',2,'2020-11-18 05:38:37','2020-11-18 05:38:37');
INSERT INTO "goods" VALUES (119,'キャップ-2','アクセサリー','キャップ','S','purple','レディース',4,'2020-11-18 05:38:37','2020-11-18 05:38:37');
INSERT INTO "goods" VALUES (120,'タンクトップ-82','トップス','タンクトップ','M','maroon','レディース',10,'2020-11-18 05:38:37','2020-11-18 05:38:37');
INSERT INTO "goods" VALUES (121,'パーカー-108','トップス','パーカー','S','aqua','レディース',7,'2020-11-18 05:38:37','2020-11-18 05:38:37');
INSERT INTO "goods" VALUES (122,'キャップ-112','アクセサリー','キャップ','S','silver','レディース',19,'2020-11-18 05:38:37','2020-11-18 05:38:37');
INSERT INTO "goods" VALUES (123,'パンツ-70','ボトムス','パンツ','L','blue','レディース',14,'2020-11-18 05:38:37','2020-11-18 05:38:37');
INSERT INTO "goods" VALUES (124,'パーカー-124','トップス','パーカー','S','aqua','メンズ',17,'2020-11-18 05:38:38','2020-11-18 05:38:38');
INSERT INTO "goods" VALUES (125,'パンツ-92','ボトムス','パンツ','M','white','レディース',10,'2020-11-18 05:38:38','2020-11-18 05:38:38');
INSERT INTO "goods" VALUES (126,'パーカー-4','トップス','パーカー','L','yellow','レディース',1,'2020-11-18 05:38:38','2020-11-18 05:38:38');
INSERT INTO "goods" VALUES (127,'シャツ-43','トップス','シャツ','S','maroon','レディース',2,'2020-11-18 05:38:38','2020-11-18 05:38:38');
INSERT INTO "goods" VALUES (128,'パンツ-73','ボトムス','パンツ','M','maroon','メンズ',1,'2020-11-18 05:38:38','2020-11-18 05:38:38');
INSERT INTO "goods" VALUES (129,'シューズ-59','アクセサリー','シューズ','26cm','gray','レディース',3,'2020-11-18 05:38:38','2020-11-18 05:38:38');
INSERT INTO "goods" VALUES (130,'パーカー-29','トップス','パーカー','L','olive','メンズ',11,'2020-11-18 05:38:38','2020-11-18 05:38:38');
INSERT INTO "goods" VALUES (131,'パーカー-59','トップス','パーカー','S','fuchsia','メンズ',18,'2020-11-18 05:38:38','2020-11-18 05:38:38');
INSERT INTO "goods" VALUES (132,'タンクトップ-136','トップス','タンクトップ','L','teal','レディース',18,'2020-11-18 05:38:38','2020-11-18 05:38:38');
INSERT INTO "goods" VALUES (133,'パンツ-29','ボトムス','パンツ','S','olive','レディース',12,'2020-11-18 05:38:38','2020-11-18 05:38:38');
INSERT INTO "goods" VALUES (134,'シューズ-26','アクセサリー','シューズ','27cm','yellow','メンズ',14,'2020-11-18 05:38:38','2020-11-18 05:38:38');
INSERT INTO "goods" VALUES (135,'キャップ-128','アクセサリー','キャップ','M','black','メンズ',9,'2020-11-18 05:38:38','2020-11-18 05:38:38');
INSERT INTO "goods" VALUES (136,'キャップ-111','アクセサリー','キャップ','S','white','レディース',8,'2020-11-18 05:38:38','2020-11-18 05:38:38');
INSERT INTO "goods" VALUES (137,'キャップ-81','アクセサリー','キャップ','S','green','メンズ',14,'2020-11-18 05:38:38','2020-11-18 05:38:38');
INSERT INTO "goods" VALUES (138,'パンツ-136','ボトムス','パンツ','M','aqua','レディース',14,'2020-11-18 05:38:38','2020-11-18 05:38:38');
INSERT INTO "goods" VALUES (139,'シャツ-64','トップス','シャツ','L','black','レディース',6,'2020-11-18 05:38:38','2020-11-18 05:38:38');
INSERT INTO "goods" VALUES (140,'シューズ-42','アクセサリー','シューズ','27cm','gray','レディース',20,'2020-11-18 05:38:38','2020-11-18 05:38:38');
INSERT INTO "goods" VALUES (141,'シューズ-84','アクセサリー','シューズ','26cm','purple','レディース',20,'2020-11-18 05:38:38','2020-11-18 05:38:38');
INSERT INTO "goods" VALUES (142,'シューズ-20','アクセサリー','シューズ','26.5cm','yellow','メンズ',13,'2020-11-18 05:38:38','2020-11-18 05:38:38');
INSERT INTO "goods" VALUES (143,'パンツ-106','ボトムス','パンツ','S','silver','レディース',13,'2020-11-18 05:38:38','2020-11-18 05:38:38');
INSERT INTO "goods" VALUES (144,'キャップ-23','アクセサリー','キャップ','L','gray','メンズ',3,'2020-11-18 05:38:38','2020-11-18 05:38:38');
INSERT INTO "goods" VALUES (145,'パンツ-135','ボトムス','パンツ','S','olive','メンズ',4,'2020-11-18 05:38:38','2020-11-18 05:38:38');
INSERT INTO "goods" VALUES (146,'パンツ-18','ボトムス','パンツ','S','fuchsia','メンズ',10,'2020-11-18 05:38:38','2020-11-18 05:38:38');
INSERT INTO "goods" VALUES (147,'タンクトップ-66','トップス','タンクトップ','M','blue','レディース',16,'2020-11-18 05:38:38','2020-11-18 05:38:38');
INSERT INTO "goods" VALUES (148,'キャップ-20','アクセサリー','キャップ','S','purple','レディース',11,'2020-11-18 05:38:38','2020-11-18 05:38:38');
INSERT INTO "goods" VALUES (149,'パーカー-72','トップス','パーカー','S','green','レディース',15,'2020-11-18 05:38:38','2020-11-18 05:38:38');
INSERT INTO "goods" VALUES (150,'シューズ-51','アクセサリー','シューズ','26cm','olive','メンズ',20,'2020-11-18 05:38:38','2020-11-18 05:38:38');
INSERT INTO "contact" VALUES (1,43,'エラー出てアプリが使えない。',NULL,NULL);
INSERT INTO "contact" VALUES (2,29,'走行距離が正常に表示されない。',NULL,NULL);
INSERT INTO "contact" VALUES (3,12,'コミュニティーが作成できない。',NULL,NULL);
INSERT INTO "contact" VALUES (4,38,'商品がカートに追加されない。',NULL,NULL);
INSERT INTO "company" VALUES (1,'有限会社 浜田','ErqJNJSZOk','2020-11-18 05:38:32','2020-11-18 05:38:32');
INSERT INTO "company" VALUES (2,'有限会社 松本','Fl1Qc4laaD','2020-11-18 05:38:32','2020-11-18 05:38:32');
INSERT INTO "company" VALUES (3,'株式会社 田中','lhCKluew46','2020-11-18 05:38:32','2020-11-18 05:38:32');
INSERT INTO "company" VALUES (4,'株式会社 江古田','oy73MJE37n','2020-11-18 05:38:32','2020-11-18 05:38:32');
INSERT INTO "company" VALUES (5,'有限会社 廣川','t9VK0AmWUa','2020-11-18 05:38:32','2020-11-18 05:38:32');
INSERT INTO "company" VALUES (6,'有限会社 喜嶋','Gv8bDp2RMM','2020-11-18 05:38:33','2020-11-18 05:38:33');
INSERT INTO "company" VALUES (7,'有限会社 中島','6jO68WWkMS','2020-11-18 05:38:33','2020-11-18 05:38:33');
INSERT INTO "company" VALUES (8,'株式会社 近藤','p4oSixeM0M','2020-11-18 05:38:33','2020-11-18 05:38:33');
INSERT INTO "company" VALUES (9,'株式会社 佐々木','V89JsYp9xH','2020-11-18 05:38:33','2020-11-18 05:38:33');
INSERT INTO "company" VALUES (10,'有限会社 佐々木','3qqlYXn6XG','2020-11-18 05:38:33','2020-11-18 05:38:33');
INSERT INTO "company" VALUES (11,'株式会社 坂本','zqkgbQYilH','2020-11-18 05:38:33','2020-11-18 05:38:33');
INSERT INTO "company" VALUES (12,'株式会社 佐藤','8YiLrlnEgp','2020-11-18 05:38:33','2020-11-18 05:38:33');
INSERT INTO "company" VALUES (13,'有限会社 若松','Idr8RD0fK4','2020-11-18 05:38:33','2020-11-18 05:38:33');
INSERT INTO "company" VALUES (14,'有限会社 加納','QXQahbAnJg','2020-11-18 05:38:33','2020-11-18 05:38:33');
INSERT INTO "company" VALUES (15,'株式会社 津田','J9nlclCtwV','2020-11-18 05:38:33','2020-11-18 05:38:33');
INSERT INTO "company" VALUES (16,'有限会社 青田','vZ6HbSk2Mo','2020-11-18 05:38:33','2020-11-18 05:38:33');
INSERT INTO "company" VALUES (17,'有限会社 宇野','J0F1pjqcuU','2020-11-18 05:38:33','2020-11-18 05:38:33');
INSERT INTO "company" VALUES (18,'株式会社 宮沢','MuYErYb8R3','2020-11-18 05:38:33','2020-11-18 05:38:33');
INSERT INTO "company" VALUES (19,'株式会社 宇野','PvcuyD5od8','2020-11-18 05:38:33','2020-11-18 05:38:33');
INSERT INTO "company" VALUES (20,'有限会社 吉本','WrJlDzMunw','2020-11-18 05:38:33','2020-11-18 05:38:33');
INSERT INTO "trophy" VALUES (1,'走行距離 10km達成',NULL,NULL);
INSERT INTO "trophy" VALUES (2,'連続ログイン 5日達成',NULL,NULL);
INSERT INTO "trophy" VALUES (3,'連続走行日数 3日達成',NULL,NULL);
INSERT INTO "grades" VALUES (1,2,21.7,361,21700,'2003-09-10','2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "grades" VALUES (2,9,38.4,444,38400,'2007-09-26','2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "grades" VALUES (3,11,20.0,470,20000,'2012-05-14','2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "grades" VALUES (4,50,19.5,127,19500,'2016-06-12','2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "grades" VALUES (5,9,24.7,196,24700,'2019-04-06','2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "grades" VALUES (6,31,42.8,305,42800,'2010-10-29','2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "grades" VALUES (7,20,22.5,340,22500,'2013-07-24','2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "grades" VALUES (8,50,21.5,390,21500,'2005-02-14','2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "grades" VALUES (9,37,12.4,158,12400,'2010-05-31','2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "grades" VALUES (10,42,23.6,383,23600,'2005-12-04','2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "grades" VALUES (11,25,25.6,432,25600,'2005-11-15','2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "grades" VALUES (12,31,19.5,263,19500,'2015-02-01','2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "grades" VALUES (13,25,30.3,154,30300,'2002-10-25','2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "grades" VALUES (14,19,18.6,379,18600,'2005-02-06','2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "grades" VALUES (15,32,36.3,412,36300,'2006-07-30','2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "grades" VALUES (16,24,27.1,403,27100,'2004-11-25','2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "grades" VALUES (17,38,16.0,178,16000,'2008-03-23','2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "grades" VALUES (18,28,50.0,106,50000,'2000-11-18','2020-11-18 05:38:30','2020-11-18 05:38:30');
INSERT INTO "grades" VALUES (19,38,48.5,254,48500,'2004-12-28','2020-11-18 05:38:30','2020-11-18 05:38:30');
INSERT INTO "grades" VALUES (20,33,29.0,330,29000,'2012-11-09','2020-11-18 05:38:30','2020-11-18 05:38:30');
INSERT INTO "grades" VALUES (21,27,31.7,197,31700,'2015-10-03','2020-11-18 05:38:30','2020-11-18 05:38:30');
INSERT INTO "grades" VALUES (22,49,33.2,451,33200,'2012-07-11','2020-11-18 05:38:30','2020-11-18 05:38:30');
INSERT INTO "grades" VALUES (23,33,31.1,497,31100,'2010-04-23','2020-11-18 05:38:30','2020-11-18 05:38:30');
INSERT INTO "grades" VALUES (24,26,28.9,425,28900,'2017-06-30','2020-11-18 05:38:30','2020-11-18 05:38:30');
INSERT INTO "grades" VALUES (25,3,40.8,469,40800,'2005-02-10','2020-11-18 05:38:30','2020-11-18 05:38:30');
INSERT INTO "grades" VALUES (26,16,14.9,147,14900,'2014-09-24','2020-11-18 05:38:30','2020-11-18 05:38:30');
INSERT INTO "grades" VALUES (27,35,38.0,366,38000,'2007-07-30','2020-11-18 05:38:30','2020-11-18 05:38:30');
INSERT INTO "grades" VALUES (28,23,22.9,224,22900,'2014-07-14','2020-11-18 05:38:30','2020-11-18 05:38:30');
INSERT INTO "grades" VALUES (29,22,11.7,379,11700,'2009-10-02','2020-11-18 05:38:30','2020-11-18 05:38:30');
INSERT INTO "grades" VALUES (30,46,33.7,327,33700,'2014-04-26','2020-11-18 05:38:30','2020-11-18 05:38:30');
INSERT INTO "grades" VALUES (31,50,15.4,199,15400,'2014-06-04','2020-11-18 05:38:30','2020-11-18 05:38:30');
INSERT INTO "grades" VALUES (32,14,19.7,155,19700,'2016-09-05','2020-11-18 05:38:30','2020-11-18 05:38:30');
INSERT INTO "grades" VALUES (33,49,26.4,336,26400,'2004-04-07','2020-11-18 05:38:30','2020-11-18 05:38:30');
INSERT INTO "grades" VALUES (34,44,38.4,106,38400,'2009-07-25','2020-11-18 05:38:30','2020-11-18 05:38:30');
INSERT INTO "grades" VALUES (35,17,31.9,173,31900,'2001-08-15','2020-11-18 05:38:30','2020-11-18 05:38:30');
INSERT INTO "grades" VALUES (36,25,31.8,254,31800,'2013-08-12','2020-11-18 05:38:30','2020-11-18 05:38:30');
INSERT INTO "grades" VALUES (37,29,49.4,200,49400,'2010-07-29','2020-11-18 05:38:30','2020-11-18 05:38:30');
INSERT INTO "grades" VALUES (38,11,47.7,217,47700,'2017-08-06','2020-11-18 05:38:30','2020-11-18 05:38:30');
INSERT INTO "grades" VALUES (39,26,34.7,107,34700,'2017-08-27','2020-11-18 05:38:30','2020-11-18 05:38:30');
INSERT INTO "grades" VALUES (40,50,28.2,194,28200,'2017-07-26','2020-11-18 05:38:30','2020-11-18 05:38:30');
INSERT INTO "grades" VALUES (41,8,16.4,437,16400,'2014-01-27','2020-11-18 05:38:30','2020-11-18 05:38:30');
INSERT INTO "grades" VALUES (42,49,24.4,435,24400,'2013-05-29','2020-11-18 05:38:30','2020-11-18 05:38:30');
INSERT INTO "grades" VALUES (43,13,30.3,231,30300,'2008-06-22','2020-11-18 05:38:30','2020-11-18 05:38:30');
INSERT INTO "grades" VALUES (44,17,38.2,322,38200,'2014-11-19','2020-11-18 05:38:30','2020-11-18 05:38:30');
INSERT INTO "grades" VALUES (45,20,18.7,205,18700,'2002-03-18','2020-11-18 05:38:30','2020-11-18 05:38:30');
INSERT INTO "grades" VALUES (46,39,40.5,253,40500,'2007-05-02','2020-11-18 05:38:30','2020-11-18 05:38:30');
INSERT INTO "grades" VALUES (47,35,44.5,149,44500,'2004-12-14','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (48,3,33.4,313,33400,'2008-09-02','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (49,43,37.0,224,37000,'2004-03-03','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (50,2,24.2,197,24200,'2002-10-30','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (51,4,22.2,461,22200,'2007-12-30','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (52,42,45.6,270,45600,'2009-12-06','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (53,11,26.9,210,26900,'2016-03-25','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (54,31,27.6,380,27600,'2019-08-16','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (55,10,28.4,323,28400,'2003-05-09','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (56,43,48.4,376,48400,'2002-11-19','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (57,10,40.5,347,40500,'2014-09-12','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (58,1,15.2,314,15200,'2006-04-27','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (59,4,13.7,424,13700,'2001-02-24','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (60,20,48.1,369,48100,'2014-05-09','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (61,32,24.8,340,24800,'2012-03-04','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (62,32,36.7,191,36700,'2004-04-25','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (63,13,27.9,497,27900,'2017-10-31','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (64,36,34.2,229,34200,'2009-10-11','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (65,31,22.2,347,22200,'2012-05-02','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (66,38,12.5,430,12500,'2007-02-13','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (67,50,38.7,116,38700,'2014-02-03','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (68,38,14.6,262,14600,'2005-11-03','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (69,37,37.3,360,37300,'2007-01-24','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (70,32,10.0,331,10000,'2007-02-20','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (71,30,32.4,256,32400,'2015-05-20','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (72,5,39.0,410,39000,'2005-02-14','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (73,31,15.2,170,15200,'2002-04-30','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (74,33,11.7,345,11700,'2015-06-24','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (75,9,45.1,240,45100,'2015-08-13','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (76,11,46.5,255,46500,'2003-08-15','2020-11-18 05:38:31','2020-11-18 05:38:31');
INSERT INTO "grades" VALUES (77,16,36.0,192,36000,'2019-06-04','2020-11-18 05:38:32','2020-11-18 05:38:32');
INSERT INTO "grades" VALUES (78,7,19.4,327,19400,'2017-09-18','2020-11-18 05:38:32','2020-11-18 05:38:32');
INSERT INTO "grades" VALUES (79,30,30.4,431,30400,'2018-11-20','2020-11-18 05:38:32','2020-11-18 05:38:32');
INSERT INTO "grades" VALUES (80,12,23.7,236,23700,'2009-12-07','2020-11-18 05:38:32','2020-11-18 05:38:32');
INSERT INTO "grades" VALUES (81,17,10.3,130,10300,'2017-02-26','2020-11-18 05:38:32','2020-11-18 05:38:32');
INSERT INTO "grades" VALUES (82,46,17.8,192,17800,'2008-07-12','2020-11-18 05:38:32','2020-11-18 05:38:32');
INSERT INTO "grades" VALUES (83,11,15.5,141,15500,'2004-09-29','2020-11-18 05:38:32','2020-11-18 05:38:32');
INSERT INTO "grades" VALUES (84,42,37.1,310,37100,'2006-05-11','2020-11-18 05:38:32','2020-11-18 05:38:32');
INSERT INTO "grades" VALUES (85,15,20.5,340,20500,'2001-03-17','2020-11-18 05:38:32','2020-11-18 05:38:32');
INSERT INTO "grades" VALUES (86,39,31.0,194,31000,'2014-09-26','2020-11-18 05:38:32','2020-11-18 05:38:32');
INSERT INTO "grades" VALUES (87,28,13.6,222,13600,'2003-09-27','2020-11-18 05:38:32','2020-11-18 05:38:32');
INSERT INTO "grades" VALUES (88,8,28.7,125,28700,'2008-01-22','2020-11-18 05:38:32','2020-11-18 05:38:32');
INSERT INTO "grades" VALUES (89,23,44.5,471,44500,'2009-08-19','2020-11-18 05:38:32','2020-11-18 05:38:32');
INSERT INTO "grades" VALUES (90,43,13.4,288,13400,'2006-04-25','2020-11-18 05:38:32','2020-11-18 05:38:32');
INSERT INTO "grades" VALUES (91,43,38.6,387,38600,'2008-11-22','2020-11-18 05:38:32','2020-11-18 05:38:32');
INSERT INTO "grades" VALUES (92,12,17.4,241,17400,'2020-07-08','2020-11-18 05:38:32','2020-11-18 05:38:32');
INSERT INTO "grades" VALUES (93,32,29.4,148,29400,'2017-05-02','2020-11-18 05:38:32','2020-11-18 05:38:32');
INSERT INTO "grades" VALUES (94,43,44.5,289,44500,'2009-05-16','2020-11-18 05:38:32','2020-11-18 05:38:32');
INSERT INTO "grades" VALUES (95,7,18.0,123,18000,'2006-11-16','2020-11-18 05:38:32','2020-11-18 05:38:32');
INSERT INTO "grades" VALUES (96,10,32.9,288,32900,'2006-08-27','2020-11-18 05:38:32','2020-11-18 05:38:32');
INSERT INTO "grades" VALUES (97,39,34.7,458,34700,'2019-07-03','2020-11-18 05:38:32','2020-11-18 05:38:32');
INSERT INTO "grades" VALUES (98,3,22.3,334,22300,'2004-07-08','2020-11-18 05:38:32','2020-11-18 05:38:32');
INSERT INTO "grades" VALUES (99,11,34.9,359,34900,'2014-05-11','2020-11-18 05:38:32','2020-11-18 05:38:32');
INSERT INTO "grades" VALUES (100,46,27.7,226,27700,'2019-03-03','2020-11-18 05:38:32','2020-11-18 05:38:32');
INSERT INTO "site" VALUES (1,'Google','Google_logo.png','https://www.google.com/',NULL,NULL);
INSERT INTO "site" VALUES (2,'Youtube','youtube_logo.jpg','http://youtube.com/',NULL,NULL);
INSERT INTO "site" VALUES (3,'Amazon','amazon_logo.jpg','https://www.amazon.co.jp/',NULL,NULL);
INSERT INTO "community" VALUES (1000,'誰でも大歓迎','初級',3,NULL,NULL);
INSERT INTO "community" VALUES (1001,'初心者大歓迎','初級',22,NULL,NULL);
INSERT INTO "community" VALUES (1002,'本格的に走りたい人大歓迎','上級',13,NULL,NULL);
INSERT INTO "community" VALUES (1003,'それなりに走りたい人大歓迎','中級',2,NULL,NULL);
INSERT INTO "community" VALUES (1004,'誰でも歓迎','中級',9,NULL,NULL);
INSERT INTO "community" VALUES (1005,'そこそこ走りたい人歓迎','中級',1,NULL,NULL);
INSERT INTO "community" VALUES (1006,'中級者大歓迎','中級',11,NULL,NULL);
INSERT INTO "user" VALUES (1,'高橋 亮介','male',48.3,'1983-09-11','957-2961',' 秋田県佐々木市西区青山町近藤8-8-9 ハイツ鈴木101号','matsumoto.mitsuru@example.com','YWfeyFI2AE',1005,'2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "user" VALUES (2,'山口 春香','female',56.4,'1995-10-05','732-3944',' 愛媛県杉山市南区工藤町江古田6-9-7','haruka.sato@example.org','3vfVzRY1rU',1003,'2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "user" VALUES (3,'吉田 篤司','male',67.9,'2001-05-05','255-7268',' 香川県青田市西区中島町工藤2-1-3','yuki71@example.net','WQCZN7Bh4T',1000,'2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "user" VALUES (4,'原田 智也','male',62.3,'1991-03-18','421-7338',' 神奈川県小林市北区大垣町吉本5-2-3','hiroshi71@example.net','5yJ98XVDzw',1006,'2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "user" VALUES (5,'井高 聡太郎','male',55.6,'1984-04-06','430-9305',' 長野県小泉市東区廣川町宮沢10-7-2 ハイツ鈴木106号','wakamatsu.atsushi@example.net','HtYvsJBLjm',1000,'2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "user" VALUES (6,'藤本 舞','female',46.1,'1981-11-24','395-4498',' 三重県中島市中央区吉田町西之園7-3-8 ハイツ津田104号','momoko.idaka@example.net','mWrXZhPe3l',1006,'2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "user" VALUES (7,'渡辺 浩','male',46.6,'1990-03-14','161-4031',' 兵庫県山本市南区佐藤町田辺2-6-1','yoshimoto.momoko@example.net','jIor70PobE',1006,'2020-11-18 05:38:27','2020-11-18 05:38:27');
INSERT INTO "user" VALUES (8,'青田 香織','female',44.1,'1991-12-27','413-4587',' 青森県佐藤市南区山岸町藤本2-6-2 ハイツ加藤102号','akira78@example.com','h24dnckPP9',1003,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (9,'江古田 直子','female',59.9,'1993-03-18','648-3951',' 奈良県三宅市中央区加藤町中島3-7-10 コーポ山岸109号','chiyo19@example.org','dyNdTAlQvS',1004,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (10,'青田 七夏','female',66.9,'2002-05-04','513-9920',' 栃木県宮沢市西区木村町江古田3-3-4','tanaka.yuta@example.org','OYKw0kR8iY',1003,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (11,'近藤 太郎','male',48.4,'2002-07-23','106-1791',' 沖縄県工藤市中央区西之園町青田9-3-10','sasada.osamu@example.com','UYb3E5cihe',1006,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (12,'石田 さゆり','female',50.2,'1998-01-29','428-8810',' 宮崎県宮沢市南区宮沢町山口4-8-10','yuta73@example.com','702dLkQ1Wo',1000,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (13,'吉本 翼','male',45.2,'1995-01-12','466-2786',' 鳥取県加藤市南区喜嶋町村山5-7-8 コーポ山岸106号','tomoya57@example.net','lqOTb9rGpx',1002,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (14,'青山 陽子','female',49.4,'1985-09-25','603-2527',' 山形県小林市南区山本町山田1-5-9 コーポ吉本104号','yamada.kana@example.net','QmysSTgIao',1006,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (15,'青田 太一','male',40.6,'1981-11-08','685-8396',' 千葉県村山市北区中村町原田10-8-4','sakamoto.yoko@example.com','5rn85kFo4Z',1000,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (16,'野村 太一','male',67.8,'1984-05-20','395-9035',' 青森県斉藤市東区坂本町佐々木10-7-6','atsushi.nakajima@example.org','bMG4VxXzMp',1004,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (17,'青田 加奈','female',65.7,'1981-07-31','832-2871',' 福岡県山口市中央区宮沢町津田3-5-4 コーポ浜田110号','ishida.minoru@example.org','UEEcYUfAzE',1002,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (18,'佐藤 直樹','male',68.6,'1980-09-29','562-5734',' 秋田県津田市中央区山岸町杉山4-4-1 コーポ桐山101号','tanaka.momoko@example.com','xY7S4G38mW',1004,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (19,'笹田 千代','female',42.7,'1979-09-15','999-7417',' 東京都中島市東区加納町近藤4-7-4','jun89@example.com','iQ24MP2Sra',1006,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (20,'井上 加奈','female',47.0,'1980-10-21','564-4067',' 静岡県渚市南区渚町坂本2-2-7 コーポ近藤105号','hogaki@example.org','z46AMA1iXv',1004,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (21,'斉藤 さゆり','female',53.1,'1993-02-13','327-5201',' 福島県吉田市南区廣川町高橋2-4-8 ハイツ小林101号','kumiko.harada@example.org','qLtkYoybFU',1004,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (22,'松本 真綾','female',42.0,'1999-09-21','672-7482',' 徳島県笹田市東区井高町中村4-7-6','tekoda@example.org','0nSUIngyu2',1001,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (23,'喜嶋 晃','male',43.0,'1981-04-17','366-1401',' 長野県吉本市東区桐山町加納5-5-10','takuma94@example.com','Hd5Utn83lI',1000,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (24,'佐々木 七夏','female',63.8,'1980-05-16','609-2294',' 鳥取県井上市西区中津川町渡辺6-1-9','harada.tsubasa@example.net','MEIfLcnpHO',1006,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (25,'野村 拓真','male',51.1,'1999-08-10','976-2827',' 秋田県杉山市西区加藤町山岸3-7-7 コーポ田中107号','usakamoto@example.net','6Rju0YPutJ',1002,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (26,'田中 知実','female',50.0,'1985-11-30','509-7694',' 宮崎県山岸市西区山口町若松1-4-5','kanou.hanako@example.com','jKhGJlV0h2',1001,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (27,'青山 くみ子','female',63.0,'1996-01-18','126-4568',' 京都府桐山市南区桐山町高橋2-9-8 ハイツ高橋108号','matsumoto.satomi@example.net','rjwedDI6E8',1005,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (28,'西之園 桃子','female',42.5,'2000-04-11','110-9190',' 神奈川県鈴木市西区吉本町山口6-5-2 コーポ山岸107号','wkiriyama@example.net','8LZTKdhVZe',1002,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (29,'青田 舞','female',47.0,'1993-06-15','887-4234',' 長崎県田中市南区吉田町斉藤2-7-9 コーポ藤本105号','hanako.ekoda@example.com','whTxMvMpCj',1002,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (30,'吉本 七夏','female',42.7,'1977-05-05','135-3630',' 宮城県木村市西区原田町加藤6-4-1 ハイツ佐藤108号','nagisa.youichi@example.org','SKqJzTSiSe',1001,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (31,'渚 加奈','female',68.9,'2000-06-16','507-8804',' 岐阜県佐藤市北区松本町青山4-7-10','shuhei76@example.org','0PT7Bs22cC',1002,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (32,'廣川 花子','female',53.1,'1999-09-27','621-9305',' 群馬県井上市西区井高町原田2-7-3 ハイツ加藤105号','matsumoto.yosuke@example.com','tCVce3dnKw',1005,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (33,'笹田 聡太郎','male',42.0,'1997-08-10','841-9453',' 佐賀県吉田市西区杉山町田辺6-9-7 ハイツ小林108号','wyamagishi@example.org','QAFyUjJ1wt',1005,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (34,'渡辺 康弘','male',59.0,'1976-05-01','849-1199',' 兵庫県佐藤市南区宇野町坂本8-10-4 コーポ吉田101号','wkato@example.com','bHZc2uvbL2',1000,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (35,'三宅 翔太','male',52.7,'1988-08-08','469-7419',' 青森県中津川市西区笹田町佐々木9-8-9','satomi.takahashi@example.com','XhsQ02wj7m',1006,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (36,'青田 浩','male',52.9,'1981-07-13','949-5831',' 島根県中島市中央区津田町坂本7-9-4','haruka67@example.com','ImiJMOAOiB',1001,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (37,'近藤 くみ子','female',60.9,'1998-10-06','144-9035',' 山梨県津田市東区渡辺町山本8-7-9 コーポ小林101号','znishinosono@example.org','kgr0hRSczz',1005,'2020-11-18 05:38:28','2020-11-18 05:38:28');
INSERT INTO "user" VALUES (38,'山岸 淳','male',60.9,'1997-09-09','232-5919',' 岐阜県江古田市北区桐山町井高2-3-9','vmiyazawa@example.net','gJvBSvvkZ2',1002,'2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "user" VALUES (39,'渚 翔太','male',49.6,'1990-03-15','866-8149',' 奈良県桐山市中央区杉山町宇野4-6-2 コーポ伊藤108号','kudo.taro@example.net','BIVZJH3QTB',1002,'2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "user" VALUES (40,'江古田 涼平','male',50.2,'1987-09-25','910-8751',' 奈良県村山市南区井上町西之園3-1-8','fujimoto.yuta@example.com','9vJMBQqqtW',1004,'2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "user" VALUES (41,'野村 結衣','female',64.9,'1980-03-20','661-3499',' 香川県三宅市南区村山町木村2-9-3 コーポ加藤105号','yasuhiro50@example.net','EEok1yPiZA',1005,'2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "user" VALUES (42,'藤本 涼平','male',46.8,'1999-02-18','187-7841',' 熊本県吉本市南区村山町鈴木3-7-9 ハイツ近藤101号','rika78@example.org','nV9cdqcn5o',1006,'2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "user" VALUES (43,'井高 稔','male',59.2,'1984-12-21','570-4216',' 群馬県宇野市西区田辺町渚1-2-6','nomura.shota@example.net','9PbFWBFLYi',1001,'2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "user" VALUES (44,'青山 千代','female',57.1,'1990-03-16','915-2739',' 熊本県中島市南区小泉町江古田7-5-7','matsumoto.kana@example.net','zAzeV35IUt',1005,'2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "user" VALUES (45,'田中 裕太','male',64.8,'1986-08-13','464-3720',' 岐阜県宮沢市中央区佐々木町加藤4-3-7 ハイツ田辺108号','dishida@example.org','OmL8ouLFGx',1005,'2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "user" VALUES (46,'中津川 幹','female',48.6,'1999-04-16','457-1717',' 長崎県宇野市北区木村町山本3-8-7','kumiko22@example.com','pslzxJjAl8',1002,'2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "user" VALUES (47,'喜嶋 裕太','male',41.6,'1991-05-25','633-4947',' 宮崎県斉藤市西区田中町鈴木4-7-4 ハイツ山田106号','kiriyama.atsushi@example.net','2ZvQwt8wTA',1002,'2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "user" VALUES (48,'中津川 里佳','female',58.2,'1996-07-24','493-8877',' 兵庫県喜嶋市北区三宅町渡辺8-9-8 コーポ宮沢106号','minoru.ogaki@example.com','iZV0nT7EIe',1004,'2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "user" VALUES (49,'藤本 明美','female',60.3,'1987-02-26','467-3538',' 福井県工藤市西区田辺町若松6-4-9 コーポ加藤106号','atsushi59@example.org','XxippONsWB',1003,'2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "user" VALUES (50,'藤本 香織','female',69.8,'1998-12-18','363-4299',' 広島県西之園市東区青山町藤本3-5-4','lyamamoto@example.net','NUUeNmcYSD',1004,'2020-11-18 05:38:29','2020-11-18 05:38:29');
INSERT INTO "chat" VALUES (1,1,1005,'こんにちは','2020.10.9',NULL,NULL);
INSERT INTO "chat" VALUES (2,17,1002,'おはよう','2020.8.8',NULL,NULL);
INSERT INTO "chat" VALUES (3,24,1006,'こんばんは','2020.5.6',NULL,NULL);
CREATE UNIQUE INDEX IF NOT EXISTS "sessions_id_unique" ON "sessions" (
	"id"
);
COMMIT;
