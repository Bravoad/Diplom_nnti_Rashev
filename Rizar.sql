--
-- PostgreSQL database cluster dump
--

-- Started on 2019-05-20 09:42:09

SET default_transaction_read_only = off;

SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;

--
-- Roles
--

CREATE ROLE postgres;
ALTER ROLE postgres WITH SUPERUSER INHERIT CREATEROLE CREATEDB LOGIN REPLICATION BYPASSRLS;






\connect template1

--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.10
-- Dumped by pg_dump version 11.2

-- Started on 2019-05-20 09:42:09

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

-- Completed on 2019-05-20 09:42:09

--
-- PostgreSQL database dump complete
--

\connect postgres

--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.10
-- Dumped by pg_dump version 11.2

-- Started on 2019-05-20 09:42:09

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 190 (class 1259 OID 51806)
-- Name: dog; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.dog
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.dog OWNER TO postgres;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 185 (class 1259 OID 43540)
-- Name: dogovor; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.dogovor (
    id_dog integer DEFAULT nextval('public.dog'::regclass) NOT NULL,
    namkli text NOT NULL,
    tel text NOT NULL,
    adr text NOT NULL,
    datapod date,
    inn text,
    bankrekv text NOT NULL,
    status text NOT NULL,
    datazaya date,
    opis text NOT NULL,
    dvip date
);


ALTER TABLE public.dogovor OWNER TO postgres;

--
-- TOC entry 193 (class 1259 OID 51814)
-- Name: nar; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.nar
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.nar OWNER TO postgres;

--
-- TOC entry 189 (class 1259 OID 43583)
-- Name: naryd; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.naryd (
    id_nar integer DEFAULT nextval('public.nar'::regclass) NOT NULL,
    id_dog integer NOT NULL,
    id_obor integer NOT NULL,
    id_rab integer,
    dotnar date,
    dfactvip date,
    id_usluga integer NOT NULL,
    kol integer NOT NULL,
    status text
);


ALTER TABLE public.naryd OWNER TO postgres;

--
-- TOC entry 192 (class 1259 OID 51812)
-- Name: ob; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.ob
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ob OWNER TO postgres;

--
-- TOC entry 188 (class 1259 OID 43575)
-- Name: obor; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.obor (
    id_obor integer DEFAULT nextval('public.ob'::regclass) NOT NULL,
    nameobor text NOT NULL,
    typobor text NOT NULL,
    kolkop integer NOT NULL,
    post text NOT NULL,
    vend text NOT NULL,
    stom money NOT NULL
);


ALTER TABLE public.obor OWNER TO postgres;

--
-- TOC entry 197 (class 1259 OID 68197)
-- Name: opl; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.opl (
    id_opl integer NOT NULL,
    typopl text NOT NULL,
    sposopl text NOT NULL,
    stom money NOT NULL,
    id_dog integer NOT NULL,
    dopl date NOT NULL
);


ALTER TABLE public.opl OWNER TO postgres;

--
-- TOC entry 196 (class 1259 OID 68195)
-- Name: opl_id_opl_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.opl_id_opl_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.opl_id_opl_seq OWNER TO postgres;

--
-- TOC entry 2197 (class 0 OID 0)
-- Dependencies: 196
-- Name: opl_id_opl_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.opl_id_opl_seq OWNED BY public.opl.id_opl;


--
-- TOC entry 195 (class 1259 OID 68189)
-- Name: oplata; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.oplata
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.oplata OWNER TO postgres;

--
-- TOC entry 191 (class 1259 OID 51808)
-- Name: rabot; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.rabot
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.rabot OWNER TO postgres;

--
-- TOC entry 186 (class 1259 OID 43548)
-- Name: rab; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.rab (
    id_rab integer DEFAULT nextval('public.rabot'::regclass) NOT NULL,
    fiorab text NOT NULL,
    spec text NOT NULL,
    status integer NOT NULL
);


ALTER TABLE public.rab OWNER TO postgres;

--
-- TOC entry 194 (class 1259 OID 59997)
-- Name: usl; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.usl
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usl OWNER TO postgres;

--
-- TOC entry 187 (class 1259 OID 43567)
-- Name: usluga; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.usluga (
    id_usluga integer DEFAULT nextval('public.usl'::regclass) NOT NULL,
    namusluga text NOT NULL,
    stom money NOT NULL
);


ALTER TABLE public.usluga OWNER TO postgres;

--
-- TOC entry 2044 (class 2604 OID 68200)
-- Name: opl id_opl; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.opl ALTER COLUMN id_opl SET DEFAULT nextval('public.opl_id_opl_seq'::regclass);


--
-- TOC entry 2179 (class 0 OID 43540)
-- Dependencies: 185
-- Data for Name: dogovor; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.dogovor (id_dog, namkli, tel, adr, datapod, inn, bankrekv, status, datazaya, opis, dvip) FROM stdin;
4	Кипетов К.Е	+7(911)-548-78-99	Ул.обормовича 	\N	5703698878	54896045690	Заявка	2019-05-14	Нужно 5 камер	\N
\.


--
-- TOC entry 2183 (class 0 OID 43583)
-- Dependencies: 189
-- Data for Name: naryd; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.naryd (id_nar, id_dog, id_obor, id_rab, dotnar, dfactvip, id_usluga, kol, status) FROM stdin;
\.


--
-- TOC entry 2182 (class 0 OID 43575)
-- Dependencies: 188
-- Data for Name: obor; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.obor (id_obor, nameobor, typobor, kolkop, post, vend, stom) FROM stdin;
4	bracly500	Камера	20	omegapost	alphaview	50,00 ?
\.


--
-- TOC entry 2191 (class 0 OID 68197)
-- Dependencies: 197
-- Data for Name: opl; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.opl (id_opl, typopl, sposopl, stom, id_dog, dopl) FROM stdin;
6	Повременная	Яндекс-деньги	200,00 ?	4	2019-05-02
\.


--
-- TOC entry 2180 (class 0 OID 43548)
-- Dependencies: 186
-- Data for Name: rab; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.rab (id_rab, fiorab, spec, status) FROM stdin;
2	Петров К.Е	Мастер	0
\.


--
-- TOC entry 2181 (class 0 OID 43567)
-- Dependencies: 187
-- Data for Name: usluga; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.usluga (id_usluga, namusluga, stom) FROM stdin;
3	настройка камер	100,00 ?
\.


--
-- TOC entry 2198 (class 0 OID 0)
-- Dependencies: 190
-- Name: dog; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.dog', 4, true);


--
-- TOC entry 2199 (class 0 OID 0)
-- Dependencies: 193
-- Name: nar; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.nar', 11, true);


--
-- TOC entry 2200 (class 0 OID 0)
-- Dependencies: 192
-- Name: ob; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ob', 4, true);


--
-- TOC entry 2201 (class 0 OID 0)
-- Dependencies: 196
-- Name: opl_id_opl_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.opl_id_opl_seq', 6, true);


--
-- TOC entry 2202 (class 0 OID 0)
-- Dependencies: 195
-- Name: oplata; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.oplata', 1, false);


--
-- TOC entry 2203 (class 0 OID 0)
-- Dependencies: 191
-- Name: rabot; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.rabot', 2, true);


--
-- TOC entry 2204 (class 0 OID 0)
-- Dependencies: 194
-- Name: usl; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.usl', 3, true);


--
-- TOC entry 2054 (class 2606 OID 43587)
-- Name: naryd Zayavka_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.naryd
    ADD CONSTRAINT "Zayavka_pkey" PRIMARY KEY (id_nar);


--
-- TOC entry 2046 (class 2606 OID 43547)
-- Name: dogovor klient_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.dogovor
    ADD CONSTRAINT klient_pkey PRIMARY KEY (id_dog);


--
-- TOC entry 2052 (class 2606 OID 43582)
-- Name: obor obor_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.obor
    ADD CONSTRAINT obor_pkey PRIMARY KEY (id_obor);


--
-- TOC entry 2056 (class 2606 OID 68205)
-- Name: opl pkey_opl; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.opl
    ADD CONSTRAINT pkey_opl PRIMARY KEY (id_opl);


--
-- TOC entry 2048 (class 2606 OID 43555)
-- Name: rab rab_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.rab
    ADD CONSTRAINT rab_pkey PRIMARY KEY (id_rab);


--
-- TOC entry 2050 (class 2606 OID 43574)
-- Name: usluga usluga_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usluga
    ADD CONSTRAINT usluga_pkey PRIMARY KEY (id_usluga);


--
-- TOC entry 2061 (class 2606 OID 84573)
-- Name: opl dog; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.opl
    ADD CONSTRAINT dog FOREIGN KEY (id_dog) REFERENCES public.dogovor(id_dog) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- TOC entry 2058 (class 2606 OID 43598)
-- Name: naryd zayavka_id_kli_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.naryd
    ADD CONSTRAINT zayavka_id_kli_fkey FOREIGN KEY (id_dog) REFERENCES public.dogovor(id_dog);


--
-- TOC entry 2057 (class 2606 OID 43593)
-- Name: naryd zayavka_id_obor_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.naryd
    ADD CONSTRAINT zayavka_id_obor_fkey FOREIGN KEY (id_obor) REFERENCES public.obor(id_obor);


--
-- TOC entry 2059 (class 2606 OID 43603)
-- Name: naryd zayavka_id_rab_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.naryd
    ADD CONSTRAINT zayavka_id_rab_fkey FOREIGN KEY (id_rab) REFERENCES public.rab(id_rab);


--
-- TOC entry 2060 (class 2606 OID 43608)
-- Name: naryd zayavka_id_usluga_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.naryd
    ADD CONSTRAINT zayavka_id_usluga_fkey FOREIGN KEY (id_usluga) REFERENCES public.usluga(id_usluga);


-- Completed on 2019-05-20 09:42:10

--
-- PostgreSQL database dump complete
--

--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.10
-- Dumped by pg_dump version 11.2

-- Started on 2019-05-20 09:42:10

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 4246 (class 1262 OID 32985)
-- Name: rizar; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE rizar WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Russian_Russia.1251' LC_CTYPE = 'Russian_Russia.1251';


ALTER DATABASE rizar OWNER TO postgres;

\connect rizar

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 4247 (class 0 OID 0)
-- Dependencies: 4246
-- Name: rizar; Type: DATABASE PROPERTIES; Schema: -; Owner: postgres
--

ALTER DATABASE rizar SET search_path TO '$user', 'public', 'tiger';


\connect rizar

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 16 (class 2615 OID 34807)
-- Name: tiger; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA tiger;


ALTER SCHEMA tiger OWNER TO postgres;

--
-- TOC entry 14 (class 2615 OID 35077)
-- Name: tiger_data; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA tiger_data;


ALTER SCHEMA tiger_data OWNER TO postgres;

--
-- TOC entry 15 (class 2615 OID 34586)
-- Name: topology; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA topology;


ALTER SCHEMA topology OWNER TO postgres;

--
-- TOC entry 4248 (class 0 OID 0)
-- Dependencies: 15
-- Name: SCHEMA topology; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON SCHEMA topology IS 'PostGIS Topology schema';


--
-- TOC entry 3 (class 3079 OID 34757)
-- Name: address_standardizer; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS address_standardizer WITH SCHEMA public;


--
-- TOC entry 4249 (class 0 OID 0)
-- Dependencies: 3
-- Name: EXTENSION address_standardizer; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION address_standardizer IS 'Used to parse an address into constituent elements. Generally used to support geocoding address normalization step.';


--
-- TOC entry 2 (class 3079 OID 34764)
-- Name: address_standardizer_data_us; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS address_standardizer_data_us WITH SCHEMA public;


--
-- TOC entry 4250 (class 0 OID 0)
-- Dependencies: 2
-- Name: EXTENSION address_standardizer_data_us; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION address_standardizer_data_us IS 'Address Standardizer US dataset example';


--
-- TOC entry 4 (class 3079 OID 34746)
-- Name: fuzzystrmatch; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS fuzzystrmatch WITH SCHEMA public;


--
-- TOC entry 4251 (class 0 OID 0)
-- Dependencies: 4
-- Name: EXTENSION fuzzystrmatch; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION fuzzystrmatch IS 'determine similarities and distance between strings';


--
-- TOC entry 6 (class 3079 OID 33060)
-- Name: postgis; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS postgis WITH SCHEMA public;


--
-- TOC entry 4252 (class 0 OID 0)
-- Dependencies: 6
-- Name: EXTENSION postgis; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION postgis IS 'PostGIS geometry, geography, and raster spatial types and functions';


--
-- TOC entry 5 (class 3079 OID 34728)
-- Name: postgis_sfcgal; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS postgis_sfcgal WITH SCHEMA public;


--
-- TOC entry 4253 (class 0 OID 0)
-- Dependencies: 5
-- Name: EXTENSION postgis_sfcgal; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION postgis_sfcgal IS 'PostGIS SFCGAL functions';


--
-- TOC entry 8 (class 3079 OID 34808)
-- Name: postgis_tiger_geocoder; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS postgis_tiger_geocoder WITH SCHEMA tiger;


--
-- TOC entry 4254 (class 0 OID 0)
-- Dependencies: 8
-- Name: EXTENSION postgis_tiger_geocoder; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION postgis_tiger_geocoder IS 'PostGIS tiger geocoder and reverse geocoder';


--
-- TOC entry 7 (class 3079 OID 34587)
-- Name: postgis_topology; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS postgis_topology WITH SCHEMA topology;


--
-- TOC entry 4255 (class 0 OID 0)
-- Dependencies: 7
-- Name: EXTENSION postgis_topology; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION postgis_topology IS 'PostGIS topology spatial types and functions';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 274 (class 1259 OID 35335)
-- Name: post; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.post (
    "id_post " integer NOT NULL,
    "Namepost" text NOT NULL,
    "Vendor" text NOT NULL,
    "BankRekv" text NOT NULL,
    datapod date NOT NULL
);


ALTER TABLE public.post OWNER TO postgres;

--
-- TOC entry 273 (class 1259 OID 35333)
-- Name: Post_Id_post _seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."Post_Id_post _seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Post_Id_post _seq" OWNER TO postgres;

--
-- TOC entry 4256 (class 0 OID 0)
-- Dependencies: 273
-- Name: Post_Id_post _seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."Post_Id_post _seq" OWNED BY public.post."id_post ";


--
-- TOC entry 284 (class 1259 OID 35423)
-- Name: zayavka; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.zayavka (
    id_zaya integer NOT NULL,
    id_kli integer NOT NULL,
    id_obor integer NOT NULL,
    id_rab integer NOT NULL,
    dzak date NOT NULL,
    dvip date NOT NULL,
    dfactvip date NOT NULL,
    status integer NOT NULL,
    id_usluga integer NOT NULL
);


ALTER TABLE public.zayavka OWNER TO postgres;

--
-- TOC entry 283 (class 1259 OID 35421)
-- Name: Zayavka_id_zaya_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."Zayavka_id_zaya_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Zayavka_id_zaya_seq" OWNER TO postgres;

--
-- TOC entry 4257 (class 0 OID 0)
-- Dependencies: 283
-- Name: Zayavka_id_zaya_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."Zayavka_id_zaya_seq" OWNED BY public.zayavka.id_zaya;


--
-- TOC entry 278 (class 1259 OID 35390)
-- Name: klient; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.klient (
    "Id_klient" integer NOT NULL,
    namkli text NOT NULL,
    tel text NOT NULL,
    adr text NOT NULL,
    datapod date NOT NULL
);


ALTER TABLE public.klient OWNER TO postgres;

--
-- TOC entry 277 (class 1259 OID 35388)
-- Name: klient_Id_klient_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."klient_Id_klient_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."klient_Id_klient_seq" OWNER TO postgres;

--
-- TOC entry 4258 (class 0 OID 0)
-- Dependencies: 277
-- Name: klient_Id_klient_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."klient_Id_klient_seq" OWNED BY public.klient."Id_klient";


--
-- TOC entry 276 (class 1259 OID 35379)
-- Name: obor; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.obor (
    "Id_obor" integer NOT NULL,
    nameobor text NOT NULL,
    id_post numeric NOT NULL,
    typobor text NOT NULL,
    kolvokop integer NOT NULL,
    stom real NOT NULL
);
ALTER TABLE ONLY public.obor ALTER COLUMN id_post SET STORAGE PLAIN;


ALTER TABLE public.obor OWNER TO postgres;

--
-- TOC entry 275 (class 1259 OID 35377)
-- Name: obor_Id_obor_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."obor_Id_obor_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."obor_Id_obor_seq" OWNER TO postgres;

--
-- TOC entry 4259 (class 0 OID 0)
-- Dependencies: 275
-- Name: obor_Id_obor_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."obor_Id_obor_seq" OWNED BY public.obor."Id_obor";


--
-- TOC entry 280 (class 1259 OID 35401)
-- Name: rab; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.rab (
    id_rab integer NOT NULL,
    fiorab text NOT NULL,
    spec text NOT NULL,
    status integer NOT NULL
);


ALTER TABLE public.rab OWNER TO postgres;

--
-- TOC entry 279 (class 1259 OID 35399)
-- Name: rab_id_rab_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.rab_id_rab_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.rab_id_rab_seq OWNER TO postgres;

--
-- TOC entry 4260 (class 0 OID 0)
-- Dependencies: 279
-- Name: rab_id_rab_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.rab_id_rab_seq OWNED BY public.rab.id_rab;


--
-- TOC entry 282 (class 1259 OID 35412)
-- Name: usluga; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.usluga (
    "ID_Usluga" integer NOT NULL,
    namusluga text NOT NULL,
    stom real NOT NULL
);


ALTER TABLE public.usluga OWNER TO postgres;

--
-- TOC entry 281 (class 1259 OID 35410)
-- Name: usluga_ID_Usluga_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."usluga_ID_Usluga_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."usluga_ID_Usluga_seq" OWNER TO postgres;

--
-- TOC entry 4261 (class 0 OID 0)
-- Dependencies: 281
-- Name: usluga_ID_Usluga_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."usluga_ID_Usluga_seq" OWNED BY public.usluga."ID_Usluga";


--
-- TOC entry 3963 (class 2604 OID 35393)
-- Name: klient Id_klient; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.klient ALTER COLUMN "Id_klient" SET DEFAULT nextval('public."klient_Id_klient_seq"'::regclass);


--
-- TOC entry 3962 (class 2604 OID 35382)
-- Name: obor Id_obor; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.obor ALTER COLUMN "Id_obor" SET DEFAULT nextval('public."obor_Id_obor_seq"'::regclass);


--
-- TOC entry 3961 (class 2604 OID 35338)
-- Name: post id_post ; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.post ALTER COLUMN "id_post " SET DEFAULT nextval('public."Post_Id_post _seq"'::regclass);


--
-- TOC entry 3964 (class 2604 OID 35404)
-- Name: rab id_rab; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.rab ALTER COLUMN id_rab SET DEFAULT nextval('public.rab_id_rab_seq'::regclass);


--
-- TOC entry 3965 (class 2604 OID 35415)
-- Name: usluga ID_Usluga; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usluga ALTER COLUMN "ID_Usluga" SET DEFAULT nextval('public."usluga_ID_Usluga_seq"'::regclass);


--
-- TOC entry 3966 (class 2604 OID 35426)
-- Name: zayavka id_zaya; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.zayavka ALTER COLUMN id_zaya SET DEFAULT nextval('public."Zayavka_id_zaya_seq"'::regclass);


--
-- TOC entry 4234 (class 0 OID 35390)
-- Dependencies: 278
-- Data for Name: klient; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.klient ("Id_klient", namkli, tel, adr, datapod) FROM stdin;
\.


--
-- TOC entry 4232 (class 0 OID 35379)
-- Dependencies: 276
-- Data for Name: obor; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.obor ("Id_obor", nameobor, id_post, typobor, kolvokop, stom) FROM stdin;
\.


--
-- TOC entry 4230 (class 0 OID 35335)
-- Dependencies: 274
-- Data for Name: post; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.post ("id_post ", "Namepost", "Vendor", "BankRekv", datapod) FROM stdin;
\.


--
-- TOC entry 4236 (class 0 OID 35401)
-- Dependencies: 280
-- Data for Name: rab; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.rab (id_rab, fiorab, spec, status) FROM stdin;
\.


--
-- TOC entry 3883 (class 0 OID 33369)
-- Dependencies: 196
-- Data for Name: spatial_ref_sys; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.spatial_ref_sys (srid, auth_name, auth_srid, srtext, proj4text) FROM stdin;
\.


--
-- TOC entry 3882 (class 0 OID 34781)
-- Dependencies: 220
-- Data for Name: us_gaz; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.us_gaz (id, seq, word, stdword, token, is_custom) FROM stdin;
\.


--
-- TOC entry 3880 (class 0 OID 34767)
-- Dependencies: 218
-- Data for Name: us_lex; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.us_lex (id, seq, word, stdword, token, is_custom) FROM stdin;
\.


--
-- TOC entry 3881 (class 0 OID 34795)
-- Dependencies: 222
-- Data for Name: us_rules; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.us_rules (id, rule, is_custom) FROM stdin;
\.


--
-- TOC entry 4238 (class 0 OID 35412)
-- Dependencies: 282
-- Data for Name: usluga; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.usluga ("ID_Usluga", namusluga, stom) FROM stdin;
\.


--
-- TOC entry 4240 (class 0 OID 35423)
-- Dependencies: 284
-- Data for Name: zayavka; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.zayavka (id_zaya, id_kli, id_obor, id_rab, dzak, dvip, dfactvip, status, id_usluga) FROM stdin;
\.


--
-- TOC entry 3886 (class 0 OID 34814)
-- Dependencies: 224
-- Data for Name: geocode_settings; Type: TABLE DATA; Schema: tiger; Owner: postgres
--

COPY tiger.geocode_settings (name, setting, unit, category, short_desc) FROM stdin;
\.


--
-- TOC entry 3887 (class 0 OID 35169)
-- Dependencies: 268
-- Data for Name: pagc_gaz; Type: TABLE DATA; Schema: tiger; Owner: postgres
--

COPY tiger.pagc_gaz (id, seq, word, stdword, token, is_custom) FROM stdin;
\.


--
-- TOC entry 3888 (class 0 OID 35181)
-- Dependencies: 270
-- Data for Name: pagc_lex; Type: TABLE DATA; Schema: tiger; Owner: postgres
--

COPY tiger.pagc_lex (id, seq, word, stdword, token, is_custom) FROM stdin;
\.


--
-- TOC entry 3889 (class 0 OID 35193)
-- Dependencies: 272
-- Data for Name: pagc_rules; Type: TABLE DATA; Schema: tiger; Owner: postgres
--

COPY tiger.pagc_rules (id, rule, is_custom) FROM stdin;
\.


--
-- TOC entry 3884 (class 0 OID 34590)
-- Dependencies: 211
-- Data for Name: topology; Type: TABLE DATA; Schema: topology; Owner: postgres
--

COPY topology.topology (id, name, srid, "precision", hasz) FROM stdin;
\.


--
-- TOC entry 3885 (class 0 OID 34603)
-- Dependencies: 212
-- Data for Name: layer; Type: TABLE DATA; Schema: topology; Owner: postgres
--

COPY topology.layer (topology_id, layer_id, schema_name, table_name, feature_column, feature_type, level, child_id) FROM stdin;
\.


--
-- TOC entry 4262 (class 0 OID 0)
-- Dependencies: 273
-- Name: Post_Id_post _seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."Post_Id_post _seq"', 1, false);


--
-- TOC entry 4263 (class 0 OID 0)
-- Dependencies: 283
-- Name: Zayavka_id_zaya_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."Zayavka_id_zaya_seq"', 1, false);


--
-- TOC entry 4264 (class 0 OID 0)
-- Dependencies: 277
-- Name: klient_Id_klient_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."klient_Id_klient_seq"', 1, false);


--
-- TOC entry 4265 (class 0 OID 0)
-- Dependencies: 275
-- Name: obor_Id_obor_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."obor_Id_obor_seq"', 1, false);


--
-- TOC entry 4266 (class 0 OID 0)
-- Dependencies: 279
-- Name: rab_id_rab_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.rab_id_rab_seq', 1, false);


--
-- TOC entry 4267 (class 0 OID 0)
-- Dependencies: 281
-- Name: usluga_ID_Usluga_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."usluga_ID_Usluga_seq"', 1, false);


--
-- TOC entry 4094 (class 2606 OID 35343)
-- Name: post Post_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.post
    ADD CONSTRAINT "Post_pkey" PRIMARY KEY ("id_post ");


--
-- TOC entry 4104 (class 2606 OID 35428)
-- Name: zayavka Zayavka_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.zayavka
    ADD CONSTRAINT "Zayavka_pkey" PRIMARY KEY (id_zaya);


--
-- TOC entry 4098 (class 2606 OID 35398)
-- Name: klient klient_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.klient
    ADD CONSTRAINT klient_pkey PRIMARY KEY ("Id_klient");


--
-- TOC entry 4096 (class 2606 OID 35387)
-- Name: obor obor_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.obor
    ADD CONSTRAINT obor_pkey PRIMARY KEY ("Id_obor");


--
-- TOC entry 4100 (class 2606 OID 35409)
-- Name: rab rab_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.rab
    ADD CONSTRAINT rab_pkey PRIMARY KEY (id_rab);


--
-- TOC entry 4102 (class 2606 OID 35420)
-- Name: usluga usluga_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usluga
    ADD CONSTRAINT usluga_pkey PRIMARY KEY ("ID_Usluga");


-- Completed on 2019-05-20 09:42:12

--
-- PostgreSQL database dump complete
--

-- Completed on 2019-05-20 09:42:12

--
-- PostgreSQL database cluster dump complete
--

