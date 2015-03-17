-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 05. mar 2015 ob 13.22
-- Različica strežnika: 5.5.32
-- Različica PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Zbirka podatkov: `sporocilni_sistem`
--
CREATE DATABASE IF NOT EXISTS `sporocilni_sistem` DEFAULT CHARACTER SET utf16 COLLATE utf16_unicode_ci;
USE `sporocilni_sistem`;

-- --------------------------------------------------------

--
-- Struktura tabele `skupina_sporocil_vmesna`
--

CREATE TABLE IF NOT EXISTS `skupina_sporocil_vmesna` (
  `id_sporocila(PFK)` int(11) NOT NULL,
  `id_skupine(PFK)` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabele `skupine_sporocil`
--

CREATE TABLE IF NOT EXISTS `skupine_sporocil` (
  `id_skupine` int(11) NOT NULL AUTO_INCREMENT,
  `id_uporabnika(PFK)` int(11) NOT NULL,
  `ime_skupine` int(11) NOT NULL,
  PRIMARY KEY (`id_skupine`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabele `skupine_uporabnikov`
--

CREATE TABLE IF NOT EXISTS `skupine_uporabnikov` (
  `id_skupine` int(11) NOT NULL AUTO_INCREMENT,
  `ime_skupine` varchar(20) COLLATE utf16_unicode_ci NOT NULL,
  `id_uporabnika(PFK)` int(11) NOT NULL,
  PRIMARY KEY (`id_skupine`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabele `skupine_uporabnikov_vmesna`
--

CREATE TABLE IF NOT EXISTS `skupine_uporabnikov_vmesna` (
  `id_skupine(PFK)` int(11) NOT NULL,
  `id_uporabnika(PFK)` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabele `sporocanje`
--

CREATE TABLE IF NOT EXISTS `sporocanje` (
  `id_posiljatelja(PFK)` int(11) NOT NULL,
  `id_prejemnika(PFK)` int(11) NOT NULL,
  `id_sporocila(PFK)` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabele `sporocilo`
--

CREATE TABLE IF NOT EXISTS `sporocilo` (
  `id_sporocila` int(11) NOT NULL AUTO_INCREMENT,
  `vsebina` varchar(200) COLLATE utf16_unicode_ci NOT NULL,
  `datum` date NOT NULL,
  PRIMARY KEY (`id_sporocila`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabele `uporabniki`
--

CREATE TABLE IF NOT EXISTS `uporabniki` (
  `id_uporabnika` int(11) NOT NULL AUTO_INCREMENT,
  `uporabnisko_ime` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `ime` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `priimek` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `password` varchar(8) COLLATE utf16_unicode_ci NOT NULL,
  PRIMARY KEY (`id_uporabnika`),
  UNIQUE KEY `uporabnisko_ime` (`uporabnisko_ime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
