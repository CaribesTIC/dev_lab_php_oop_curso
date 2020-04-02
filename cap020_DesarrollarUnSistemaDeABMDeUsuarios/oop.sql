
-- PostgreSQL database dump

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;
SET search_path = public, pg_catalog;
SET default_tablespace = '';
SET default_with_oids = false;

CREATE TABLE usuarios (
    id integer NOT NULL,
    nombre character varying,
    apellido character varying
);
ALTER TABLE usuarios OWNER TO postgres;

CREATE SEQUENCE usuarios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE usuarios_id_seq OWNER TO postgres;
ALTER SEQUENCE usuarios_id_seq OWNED BY usuarios.id;
ALTER TABLE ONLY usuarios ALTER COLUMN id SET DEFAULT nextval('usuarios_id_seq'::regclass);

INSERT INTO usuarios VALUES (1, 'aaa', 'bbb');
INSERT INTO usuarios VALUES (2, 'ccc', 'ddd');
INSERT INTO usuarios VALUES (3, 'eee', 'fff');
INSERT INTO usuarios VALUES (4, 'zzz', 'yyy');

SELECT pg_catalog.setval('usuarios_id_seq', 4, true);

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (id);

-- PostgreSQL database dump complete


