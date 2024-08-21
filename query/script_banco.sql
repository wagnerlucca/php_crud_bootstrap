-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 26-Out-2023 às 17:55
-- Versão do servidor: 5.7.36
-- versão do PHP: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Banco de dados: 'cadastro'
--
CREATE DATABASE IF NOT EXISTS 'cadastro' DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE 'cadastro';

-- --------------------------------------------------------

--
-- Estrutura da tabela 'tb_usuarios'
--

DROP TABLE IF EXISTS 'tb_usuarios';
CREATE TABLE IF NOT EXISTS 'tb_usuarios' (
  'id' int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  'nome' varchar(255) NOT NULL,
  'email' varchar(255) NOT NULL,
  'senha' varchar(15) NOT NULL,
  'data_nascimento' date NOT NULL,
  PRIMARY KEY ('id')
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;