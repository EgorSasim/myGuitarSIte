--
-- PostgreSQL database dump
--

-- Dumped from database version 14.2 (Debian 14.2-1.pgdg110+1)
-- Dumped by pg_dump version 14.2

-- Started on 2022-05-30 14:13:47 UTC

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

DROP DATABASE postgres;
--
-- TOC entry 3337 (class 1262 OID 13757)
-- Name: postgres; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE postgres WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'en_US.utf8';


ALTER DATABASE postgres OWNER TO postgres;

\connect postgres

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 3338 (class 0 OID 0)
-- Dependencies: 3337
-- Name: DATABASE postgres; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON DATABASE postgres IS 'default administrative connection database';


SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 209 (class 1259 OID 16384)
-- Name: comments; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.comments (
    id integer NOT NULL,
    date timestamp without time zone DEFAULT now() NOT NULL,
    about character varying(50) NOT NULL,
    text text NOT NULL,
    product_id integer DEFAULT 0 NOT NULL,
    preview character varying DEFAULT '/assets/imgs/avatars/personIco.jpg'::character varying NOT NULL
);


ALTER TABLE public.comments OWNER TO postgres;

--
-- TOC entry 210 (class 1259 OID 16389)
-- Name: comments_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.comments_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.comments_id_seq OWNER TO postgres;

--
-- TOC entry 3339 (class 0 OID 0)
-- Dependencies: 210
-- Name: comments_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.comments_id_seq OWNED BY public.comments.id;


--
-- TOC entry 213 (class 1259 OID 16413)
-- Name: images; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.images (
    product_id integer,
    image character varying(300) NOT NULL
);


ALTER TABLE public.images OWNER TO postgres;

--
-- TOC entry 212 (class 1259 OID 16394)
-- Name: products; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.products (
    id integer NOT NULL,
    name character varying(50) NOT NULL,
    description character varying(300) NOT NULL,
    preview character varying(300) DEFAULT '/assets/imgs/guitars/374850.jpg'::character varying NOT NULL
);


ALTER TABLE public.products OWNER TO postgres;

--
-- TOC entry 211 (class 1259 OID 16393)
-- Name: products_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.products_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.products_id_seq OWNER TO postgres;

--
-- TOC entry 3340 (class 0 OID 0)
-- Dependencies: 211
-- Name: products_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.products_id_seq OWNED BY public.products.id;


--
-- TOC entry 3178 (class 2604 OID 16390)
-- Name: comments id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.comments ALTER COLUMN id SET DEFAULT nextval('public.comments_id_seq'::regclass);


--
-- TOC entry 3180 (class 2604 OID 16397)
-- Name: products id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.products ALTER COLUMN id SET DEFAULT nextval('public.products_id_seq'::regclass);


--
-- TOC entry 3327 (class 0 OID 16384)
-- Dependencies: 209
-- Data for Name: comments; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.comments (id, date, about, text, product_id, preview) VALUES (3, '2022-05-30 04:01:26.079605', 'dsas', 'dsad sdas', 1, '/assets/imgs/avatars/personIco.jpg');
INSERT INTO public.comments (id, date, about, text, product_id, preview) VALUES (4, '2022-05-30 10:41:46.955813', 'asdsa', 'https://www.bsuirsd.by Текст» — российский криминально-драматический психологический триллер режиссёра Клима Шипенко[4], https://www.bsuir.by/ экранизация романа-бестселлера «Текст» (2017) писателя Дмитрия Глуховского, который сам адаптировал свой роман в киносценарий[5]. Фильм рассказывает о бывшем заключённом Илье Горюнове, который мстит полицейскому Петру Хазину, подбросившему ему наркотики, и в результате получает доступ к его смартфону. Вместе с ним он получает доступ и к жизни http://bsuior.by/ героя, и на время становится для всех Хазиным, отправляя сообщения его начальству, родителям и девушке Нине, в которую влюбляется и сам. https://www.bsuiras.by/', 2, '/assets/imgs/avatars/personIco.jpg');


--
-- TOC entry 3331 (class 0 OID 16413)
-- Dependencies: 213
-- Data for Name: images; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.images (product_id, image) VALUES (2, '/assets/imgs/images/back-neck-500_500.png');
INSERT INTO public.images (product_id, image) VALUES (2, '/assets/imgs/images/hardware-500_500.png');


--
-- TOC entry 3330 (class 0 OID 16394)
-- Dependencies: 212
-- Data for Name: products; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.products (id, name, description, preview) VALUES (1, 'Guitar 1', 'Good guitar', '/assets/imgs/guitars/374853.jpg');
INSERT INTO public.products (id, name, description, preview) VALUES (2, 'Gibson Lespoule', 'The new Les Paul Standard returns to the classic design that made it relevant, played and loved -- shaping sound across generations and genres of music. It pays tribute to Gibson''s Golden Era of innovation and brings authenticity back to life.', '/assets/imgs/avatars/LPS619ITNH1_1.jpg.jpg');


--
-- TOC entry 3341 (class 0 OID 0)
-- Dependencies: 210
-- Name: comments_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.comments_id_seq', 11, true);


--
-- TOC entry 3342 (class 0 OID 0)
-- Dependencies: 211
-- Name: products_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.products_id_seq', 2, true);


--
-- TOC entry 3183 (class 2606 OID 16392)
-- Name: comments comments_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.comments
    ADD CONSTRAINT comments_pkey PRIMARY KEY (id);


--
-- TOC entry 3185 (class 2606 OID 16401)
-- Name: products products_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.products
    ADD CONSTRAINT products_pkey PRIMARY KEY (id);


--
-- TOC entry 3186 (class 2606 OID 16408)
-- Name: comments comments_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.comments
    ADD CONSTRAINT comments_fk FOREIGN KEY (product_id) REFERENCES public.products(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- TOC entry 3187 (class 2606 OID 16416)
-- Name: images images_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.images
    ADD CONSTRAINT images_fk FOREIGN KEY (product_id) REFERENCES public.products(id) ON UPDATE CASCADE ON DELETE CASCADE;


-- Completed on 2022-05-30 14:13:47 UTC

--
-- PostgreSQL database dump complete
--

