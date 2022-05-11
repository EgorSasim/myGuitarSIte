--
-- PostgreSQL database dump
--

-- Dumped from database version 14.2 (Debian 14.2-1.pgdg110+1)
-- Dumped by pg_dump version 14.2

-- Started on 2022-05-11 05:30:38 UTC

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

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 210 (class 1259 OID 16385)
-- Name: comments; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.comments (
    id integer NOT NULL,
    date timestamp without time zone DEFAULT now() NOT NULL,
    about character varying(50) NOT NULL,
    text character varying(300) NOT NULL,
    product_id integer DEFAULT 0 NOT NULL
);


ALTER TABLE public.comments OWNER TO postgres;

--
-- TOC entry 209 (class 1259 OID 16384)
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
-- TOC entry 3318 (class 0 OID 0)
-- Dependencies: 209
-- Name: comments_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.comments_id_seq OWNED BY public.comments.id;


--
-- TOC entry 3167 (class 2604 OID 16388)
-- Name: comments id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.comments ALTER COLUMN id SET DEFAULT nextval('public.comments_id_seq'::regclass);


--
-- TOC entry 3312 (class 0 OID 16385)
-- Dependencies: 210
-- Data for Name: comments; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.comments (id, date, about, text, product_id) FROM stdin;
1	2022-05-11 04:40:38.689589	норм всё	:jdsa 	0
2	2022-05-11 04:51:12.014789	dsa	dsadsa	374850
\.


--
-- TOC entry 3319 (class 0 OID 0)
-- Dependencies: 209
-- Name: comments_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.comments_id_seq', 2, true);


--
-- TOC entry 3171 (class 2606 OID 16390)
-- Name: comments comments_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.comments
    ADD CONSTRAINT comments_pkey PRIMARY KEY (id);


-- Completed on 2022-05-11 05:30:38 UTC

--
-- PostgreSQL database dump complete
--

