--
-- PostgreSQL database dump
--

-- Dumped from database version 11.2
-- Dumped by pg_dump version 11.2

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: ingreso_usuarios; Type: TABLE; Schema: public; Owner: cmonrroy
--

CREATE TABLE public.ingreso_usuarios (
    id_operario character varying(15) NOT NULL,
    tipo_vehiculo character varying(25),
    placa character varying(10) NOT NULL,
    hora time without time zone NOT NULL,
    fecha date NOT NULL,
    id_parqueadero character varying(3)
);


ALTER TABLE public.ingreso_usuarios OWNER TO cmonrroy;

--
-- Name: ingreso_visitantes; Type: TABLE; Schema: public; Owner: cmonrroy
--

CREATE TABLE public.ingreso_visitantes (
    id_operario character varying(10) NOT NULL,
    n_visitante character varying(40),
    id_visitante character varying(10) NOT NULL,
    tipo_id character varying(30),
    tipo_vehiculo character varying(25),
    placa character varying(10) NOT NULL,
    motivo character varying(400),
    id_parqueadero character varying(3),
    hora time without time zone NOT NULL,
    fecha date NOT NULL
);


ALTER TABLE public.ingreso_visitantes OWNER TO cmonrroy;

--
-- Name: migrations; Type: TABLE; Schema: public; Owner: cmonrroy
--

CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO cmonrroy;

--
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: cmonrroy
--

CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.migrations_id_seq OWNER TO cmonrroy;

--
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: cmonrroy
--

ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;


--
-- Name: operarios; Type: TABLE; Schema: public; Owner: cmonrroy
--

CREATE TABLE public.operarios (
    id_operario character varying(15) NOT NULL,
    nom_operario character varying(25),
    cargo_operario character varying(20),
    sesion_activa boolean
);


ALTER TABLE public.operarios OWNER TO cmonrroy;

--
-- Name: operarioslog; Type: TABLE; Schema: public; Owner: cmonrroy
--

CREATE TABLE public.operarioslog (
    usuario character varying(12) NOT NULL,
    pass character varying(16),
    adm boolean,
    id_operario character varying(15)
);


ALTER TABLE public.operarioslog OWNER TO cmonrroy;

--
-- Name: parqueaderos; Type: TABLE; Schema: public; Owner: cmonrroy
--

CREATE TABLE public.parqueaderos (
    id_parqueadero character varying(3) NOT NULL,
    zona character varying(25),
    cupos_tvehiculos integer,
    cupos_tmotocicletas integer,
    cupos_dvehiculos integer,
    cupos_dmotocicletas integer
);


ALTER TABLE public.parqueaderos OWNER TO cmonrroy;

--
-- Name: salida_usuarios; Type: TABLE; Schema: public; Owner: cmonrroy
--

CREATE TABLE public.salida_usuarios (
    id_operario character varying(15) NOT NULL,
    tipo_vehiculo character varying(25),
    placa character varying(10) NOT NULL,
    hora time without time zone NOT NULL,
    fecha date NOT NULL,
    id_parqueadero character varying(3)
);


ALTER TABLE public.salida_usuarios OWNER TO cmonrroy;

--
-- Name: salida_visitantes; Type: TABLE; Schema: public; Owner: cmonrroy
--

CREATE TABLE public.salida_visitantes (
    id_operario character varying(15) NOT NULL,
    tipo_vehiculo character varying(25),
    placa character varying(10) NOT NULL,
    hora time without time zone NOT NULL,
    fecha date NOT NULL,
    id_parqueadero character varying(3)
);


ALTER TABLE public.salida_visitantes OWNER TO cmonrroy;

--
-- Name: usuarios; Type: TABLE; Schema: public; Owner: cmonrroy
--

CREATE TABLE public.usuarios (
    id_usuario character varying(15) NOT NULL,
    nom_usuario character varying(25),
    documento_usuario character varying(15),
    ocupacion_usuario character varying(20)
);


ALTER TABLE public.usuarios OWNER TO cmonrroy;

--
-- Name: usuarioslog; Type: TABLE; Schema: public; Owner: cmonrroy
--

CREATE TABLE public.usuarioslog (
    usuario character varying(12) NOT NULL,
    pass character varying(16),
    id_usuario character varying(15)
);


ALTER TABLE public.usuarioslog OWNER TO cmonrroy;

--
-- Name: vehiculos; Type: TABLE; Schema: public; Owner: cmonrroy
--

CREATE TABLE public.vehiculos (
    id_usuario character varying(15),
    placa character varying(10) NOT NULL,
    tipo_vehiculo character varying(25),
    modelo_vehiculo character varying(60),
    color_vehiculo character varying(20)
);


ALTER TABLE public.vehiculos OWNER TO cmonrroy;

--
-- Name: vehiculos_visitantes; Type: TABLE; Schema: public; Owner: cmonrroy
--

CREATE TABLE public.vehiculos_visitantes (
    placa character varying(10) NOT NULL,
    tipo_vehiculo character varying(25)
);


ALTER TABLE public.vehiculos_visitantes OWNER TO cmonrroy;

--
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: cmonrroy
--

ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);


--
-- Data for Name: ingreso_usuarios; Type: TABLE DATA; Schema: public; Owner: cmonrroy
--

COPY public.ingreso_usuarios (id_operario, tipo_vehiculo, placa, hora, fecha, id_parqueadero) FROM stdin;
52559332	Motocicleta	ZZZ-666	20:47:34	2019-10-26	001
52559332	Motocicleta	ZZZ-666	20:57:33	2019-10-26	001
52559332	Motocicleta	ZZZ-666	22:11:37	2019-10-26	001
52559332	Motocicleta	ZZZ-666	17:23:06	2019-10-27	005
52559332	Automovil	ZZZ-666	01:08:31	2019-11-03	001
52559332	Automovil	ZZZ-666	04:21:16	2019-11-03	001
52559332	Automovil	ZZZ-666	22:07:48	2019-11-04	001
52559332	Automovil	ZZZ-666	22:09:25	2019-11-04	001
52559332	Automovil	ZZZ-666	22:10:01	2019-11-04	001
52559332	Automovil	ZZZ-666	22:11:29	2019-11-04	001
52559332	Automovil	ZZZ-666	22:12:19	2019-11-04	001
52559332	Automovil	ZZZ-666	22:12:33	2019-11-04	001
52559332	Automovil	ZZZ-666	22:13:25	2019-11-04	001
52559332	Automovil	ZZZ-666	22:15:58	2019-11-04	001
52559332	Automovil	ZZZ-666	22:17:43	2019-11-04	001
52559332	Automovil	ZZZ-666	22:19:10	2019-11-04	001
52559332	Automovil	ZZZ-666	22:20:28	2019-11-04	001
52559332	Automovil	ZZZ-666	22:20:57	2019-11-04	001
52559332	Automovil	ZZZ-666	22:21:31	2019-11-04	001
52559332	Automovil	ZZZ-666	22:22:01	2019-11-04	001
52559332	Automovil	BAZ-666	21:47:02	2019-11-12	001
52559332	Automovil	BAZ-666	21:47:17	2019-11-12	001
52559332	Automovil	BAZ-666	21:47:26	2019-11-12	001
\.


--
-- Data for Name: ingreso_visitantes; Type: TABLE DATA; Schema: public; Owner: cmonrroy
--

COPY public.ingreso_visitantes (id_operario, n_visitante, id_visitante, tipo_id, tipo_vehiculo, placa, motivo, id_parqueadero, hora, fecha) FROM stdin;
52559332	Diego Velandia	1234567890	Cedula de Ciudadania	Automovil	BAZ-666	Diligencias en oficina de admisiones	003	17:50:26	2019-10-27
52559332	Cristhian monrroy	1234567899	Cedula de Ciudadania	Automovil	ABC-666	prueba	001	22:37:17	2019-11-04
52559332	askjn	asd	Cedula de Ciudadania	Automovil	123	sad	001	22:39:47	2019-11-04
52559332	Laura Melissa	1234568889	Cedula de Ciudadania	Automovil	CHO-666	Prueba	001	21:23:35	2019-11-12
52559332	prueba 2	1234	Cedula de Ciudadania	Automovil	1234	1234	001	22:42:03	2019-11-12
52559332	bicicleta	771234	Cedula de Extranjeria	Bicicleta	prueba	1234	001	22:45:14	2019-11-12
52559332	prueba 3	123450000	Cedula de Extranjeria	Bicicleta	NNN 213	asd	005	22:52:57	2019-11-12
\.


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: cmonrroy
--

COPY public.migrations (id, migration, batch) FROM stdin;
\.


--
-- Data for Name: operarios; Type: TABLE DATA; Schema: public; Owner: cmonrroy
--

COPY public.operarios (id_operario, nom_operario, cargo_operario, sesion_activa) FROM stdin;
52559332	Cristhian Monrroy	Administrador	t
1007782988	Kevin Baquero	Operario	t
1069777666	Daniel Gomez	Vigilante	t
\.


--
-- Data for Name: operarioslog; Type: TABLE DATA; Schema: public; Owner: cmonrroy
--

COPY public.operarioslog (usuario, pass, adm, id_operario) FROM stdin;
cmonrroy	1234	t	52559332
daniel	1234	\N	1069777666
\.


--
-- Data for Name: parqueaderos; Type: TABLE DATA; Schema: public; Owner: cmonrroy
--

COPY public.parqueaderos (id_parqueadero, zona, cupos_tvehiculos, cupos_tmotocicletas, cupos_dvehiculos, cupos_dmotocicletas) FROM stdin;
004	Zona Bloque F	18	26	18	26
001	Zona Administrativos	43	15	43	15
005	Zona Auditorio	43	25	43	24
002	Zona Biblioteca	25	126	24	126
003	Zona Laboratorios	22	48	22	48
\.


--
-- Data for Name: salida_usuarios; Type: TABLE DATA; Schema: public; Owner: cmonrroy
--

COPY public.salida_usuarios (id_operario, tipo_vehiculo, placa, hora, fecha, id_parqueadero) FROM stdin;
52559332	Motocicleta	ZZZ-666	22:07:35	2019-10-26	001
52559332	Motocicleta	ZZZ-666	22:10:01	2019-10-26	001
52559332	Motocicleta	ZZZ-666	22:12:01	2019-10-26	001
52559332	Automovil	ZZZ-666	04:20:05	2019-11-03	001
52559332	Automovil	ZZZ-666	04:21:25	2019-11-03	001
52559332	Automovil	ZZZ-666	21:50:49	2019-11-04	001
52559332	Automovil	ZZZ-666	22:07:33	2019-11-04	001
52559332	Automovil	ZZZ-666	22:08:40	2019-11-04	001
52559332	Automovil	ZZZ-666	22:09:49	2019-11-04	001
52559332	Automovil	ZZZ-666	22:10:54	2019-11-04	001
52559332	Automovil	ZZZ-666	22:11:36	2019-11-04	001
52559332	Automovil	ZZZ-666	22:12:28	2019-11-04	001
52559332	Automovil	ZZZ-666	22:13:15	2019-11-04	001
52559332	Automovil	ZZZ-666	22:15:54	2019-11-04	001
52559332	Automovil	ZZZ-666	22:17:39	2019-11-04	001
52559332	Automovil	ZZZ-666	22:19:06	2019-11-04	001
52559332	Automovil	ZZZ-666	22:20:15	2019-11-04	001
52559332	Automovil	ZZZ-666	22:20:44	2019-11-04	001
52559332	Automovil	ZZZ-666	22:21:26	2019-11-04	001
52559332	Automovil	ZZZ-666	22:21:58	2019-11-04	001
\.


--
-- Data for Name: salida_visitantes; Type: TABLE DATA; Schema: public; Owner: cmonrroy
--

COPY public.salida_visitantes (id_operario, tipo_vehiculo, placa, hora, fecha, id_parqueadero) FROM stdin;
52559332	Automovil	BAZ-666	18:04:47	2019-10-27	003
52559332	Automovil	ABC-666	22:42:47	2019-11-04	001
52559332	Automovil	123	22:42:58	2019-11-04	001
52559332	Automovil	CHO-666	21:44:34	2019-11-12	001
52559332	Automovil	CHO-666	21:44:39	2019-11-12	001
52559332	Automovil	CHO-666	21:46:57	2019-11-12	001
52559332	Automovil	CHO-666	22:41:35	2019-11-12	001
52559332	Automovil	1234	22:42:12	2019-11-12	001
52559332	Bicicleta	prueba	22:45:47	2019-11-12	001
52559332	Bicicleta	NNN 123	22:53:22	2019-11-12	005
\.


--
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: cmonrroy
--

COPY public.usuarios (id_usuario, nom_usuario, documento_usuario, ocupacion_usuario) FROM stdin;
161217145	Kevin Baquero	1007782988	Estudiante
\.


--
-- Data for Name: usuarioslog; Type: TABLE DATA; Schema: public; Owner: cmonrroy
--

COPY public.usuarioslog (usuario, pass, id_usuario) FROM stdin;
ksbaquero	1234	161217145
\.


--
-- Data for Name: vehiculos; Type: TABLE DATA; Schema: public; Owner: cmonrroy
--

COPY public.vehiculos (id_usuario, placa, tipo_vehiculo, modelo_vehiculo, color_vehiculo) FROM stdin;
161217145	ZZZ-666	Motocicleta	Yamaha YBR 125 2017	Blanco Negro
161217145	BAZ-666	Automovil	Trooper 1996	Cafe
\.


--
-- Data for Name: vehiculos_visitantes; Type: TABLE DATA; Schema: public; Owner: cmonrroy
--

COPY public.vehiculos_visitantes (placa, tipo_vehiculo) FROM stdin;
BAZ-666	Automovil
ABC-666	Automovil
123	Automovil
CHO-666	Automovil
1234	Automovil
prueba	Bicicleta
NNN 123	Bicicleta
NNN 213	Bicicleta
\.


--
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: cmonrroy
--

SELECT pg_catalog.setval('public.migrations_id_seq', 2, true);


--
-- Name: ingreso_usuarios ingreso_usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: cmonrroy
--

ALTER TABLE ONLY public.ingreso_usuarios
    ADD CONSTRAINT ingreso_usuarios_pkey PRIMARY KEY (id_operario, placa, hora, fecha);


--
-- Name: ingreso_visitantes ingreso_visitantes_pkey; Type: CONSTRAINT; Schema: public; Owner: cmonrroy
--

ALTER TABLE ONLY public.ingreso_visitantes
    ADD CONSTRAINT ingreso_visitantes_pkey PRIMARY KEY (id_operario, id_visitante, placa, hora, fecha);


--
-- Name: migrations migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: cmonrroy
--

ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- Name: operarios operarios_pkey; Type: CONSTRAINT; Schema: public; Owner: cmonrroy
--

ALTER TABLE ONLY public.operarios
    ADD CONSTRAINT operarios_pkey PRIMARY KEY (id_operario);


--
-- Name: operarioslog operarioslog_pkey; Type: CONSTRAINT; Schema: public; Owner: cmonrroy
--

ALTER TABLE ONLY public.operarioslog
    ADD CONSTRAINT operarioslog_pkey PRIMARY KEY (usuario);


--
-- Name: parqueaderos parqueaderos_pkey; Type: CONSTRAINT; Schema: public; Owner: cmonrroy
--

ALTER TABLE ONLY public.parqueaderos
    ADD CONSTRAINT parqueaderos_pkey PRIMARY KEY (id_parqueadero);


--
-- Name: salida_usuarios salida_usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: cmonrroy
--

ALTER TABLE ONLY public.salida_usuarios
    ADD CONSTRAINT salida_usuarios_pkey PRIMARY KEY (id_operario, placa, hora, fecha);


--
-- Name: salida_visitantes salida_visitantes_pkey; Type: CONSTRAINT; Schema: public; Owner: cmonrroy
--

ALTER TABLE ONLY public.salida_visitantes
    ADD CONSTRAINT salida_visitantes_pkey PRIMARY KEY (id_operario, placa, hora, fecha);


--
-- Name: usuarios usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: cmonrroy
--

ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (id_usuario);


--
-- Name: usuarioslog usuarioslog_pkey; Type: CONSTRAINT; Schema: public; Owner: cmonrroy
--

ALTER TABLE ONLY public.usuarioslog
    ADD CONSTRAINT usuarioslog_pkey PRIMARY KEY (usuario);


--
-- Name: vehiculos vehiculos_pkey; Type: CONSTRAINT; Schema: public; Owner: cmonrroy
--

ALTER TABLE ONLY public.vehiculos
    ADD CONSTRAINT vehiculos_pkey PRIMARY KEY (placa);


--
-- Name: vehiculos_visitantes vehiculos_visitantes_pkey; Type: CONSTRAINT; Schema: public; Owner: cmonrroy
--

ALTER TABLE ONLY public.vehiculos_visitantes
    ADD CONSTRAINT vehiculos_visitantes_pkey PRIMARY KEY (placa);


--
-- Name: ingreso_usuarios ingreso_usuarios_id_operario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: cmonrroy
--

ALTER TABLE ONLY public.ingreso_usuarios
    ADD CONSTRAINT ingreso_usuarios_id_operario_fkey FOREIGN KEY (id_operario) REFERENCES public.operarios(id_operario);


--
-- Name: ingreso_usuarios ingreso_usuarios_id_parqueadero_fkey; Type: FK CONSTRAINT; Schema: public; Owner: cmonrroy
--

ALTER TABLE ONLY public.ingreso_usuarios
    ADD CONSTRAINT ingreso_usuarios_id_parqueadero_fkey FOREIGN KEY (id_parqueadero) REFERENCES public.parqueaderos(id_parqueadero);


--
-- Name: ingreso_usuarios ingreso_usuarios_placa_fkey; Type: FK CONSTRAINT; Schema: public; Owner: cmonrroy
--

ALTER TABLE ONLY public.ingreso_usuarios
    ADD CONSTRAINT ingreso_usuarios_placa_fkey FOREIGN KEY (placa) REFERENCES public.vehiculos(placa);


--
-- Name: ingreso_visitantes ingreso_visitantes_id_operario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: cmonrroy
--

ALTER TABLE ONLY public.ingreso_visitantes
    ADD CONSTRAINT ingreso_visitantes_id_operario_fkey FOREIGN KEY (id_operario) REFERENCES public.operarios(id_operario);


--
-- Name: ingreso_visitantes ingreso_visitantes_id_parqueadero_fkey; Type: FK CONSTRAINT; Schema: public; Owner: cmonrroy
--

ALTER TABLE ONLY public.ingreso_visitantes
    ADD CONSTRAINT ingreso_visitantes_id_parqueadero_fkey FOREIGN KEY (id_parqueadero) REFERENCES public.parqueaderos(id_parqueadero);


--
-- Name: ingreso_visitantes ingreso_visitantes_placa_fkey; Type: FK CONSTRAINT; Schema: public; Owner: cmonrroy
--

ALTER TABLE ONLY public.ingreso_visitantes
    ADD CONSTRAINT ingreso_visitantes_placa_fkey FOREIGN KEY (placa) REFERENCES public.vehiculos_visitantes(placa);


--
-- Name: operarioslog operarioslog_id_operario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: cmonrroy
--

ALTER TABLE ONLY public.operarioslog
    ADD CONSTRAINT operarioslog_id_operario_fkey FOREIGN KEY (id_operario) REFERENCES public.operarios(id_operario);


--
-- Name: salida_usuarios salida_usuarios_id_operario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: cmonrroy
--

ALTER TABLE ONLY public.salida_usuarios
    ADD CONSTRAINT salida_usuarios_id_operario_fkey FOREIGN KEY (id_operario) REFERENCES public.operarios(id_operario);


--
-- Name: salida_usuarios salida_usuarios_id_parqueadero_fkey; Type: FK CONSTRAINT; Schema: public; Owner: cmonrroy
--

ALTER TABLE ONLY public.salida_usuarios
    ADD CONSTRAINT salida_usuarios_id_parqueadero_fkey FOREIGN KEY (id_parqueadero) REFERENCES public.parqueaderos(id_parqueadero);


--
-- Name: salida_usuarios salida_usuarios_placa_fkey; Type: FK CONSTRAINT; Schema: public; Owner: cmonrroy
--

ALTER TABLE ONLY public.salida_usuarios
    ADD CONSTRAINT salida_usuarios_placa_fkey FOREIGN KEY (placa) REFERENCES public.vehiculos(placa);


--
-- Name: salida_visitantes salida_visitantes_id_operario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: cmonrroy
--

ALTER TABLE ONLY public.salida_visitantes
    ADD CONSTRAINT salida_visitantes_id_operario_fkey FOREIGN KEY (id_operario) REFERENCES public.operarios(id_operario);


--
-- Name: salida_visitantes salida_visitantes_id_parqueadero_fkey; Type: FK CONSTRAINT; Schema: public; Owner: cmonrroy
--

ALTER TABLE ONLY public.salida_visitantes
    ADD CONSTRAINT salida_visitantes_id_parqueadero_fkey FOREIGN KEY (id_parqueadero) REFERENCES public.parqueaderos(id_parqueadero);


--
-- Name: salida_visitantes salida_visitantes_placa_fkey; Type: FK CONSTRAINT; Schema: public; Owner: cmonrroy
--

ALTER TABLE ONLY public.salida_visitantes
    ADD CONSTRAINT salida_visitantes_placa_fkey FOREIGN KEY (placa) REFERENCES public.vehiculos_visitantes(placa);


--
-- Name: usuarioslog usuarioslog_id_usuario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: cmonrroy
--

ALTER TABLE ONLY public.usuarioslog
    ADD CONSTRAINT usuarioslog_id_usuario_fkey FOREIGN KEY (id_usuario) REFERENCES public.usuarios(id_usuario);


--
-- Name: vehiculos vehiculos_id_usuario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: cmonrroy
--

ALTER TABLE ONLY public.vehiculos
    ADD CONSTRAINT vehiculos_id_usuario_fkey FOREIGN KEY (id_usuario) REFERENCES public.usuarios(id_usuario);


--
-- PostgreSQL database dump complete
--

