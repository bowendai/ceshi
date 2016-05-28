-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-05-25 04:38:30
-- 服务器版本： 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ceshidb`
--

-- --------------------------------------------------------

--
-- 表的结构 `tp_ceshi`
--

CREATE TABLE `tp_ceshi` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `sex` varchar(4) NOT NULL,
  `age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tp_ceshi`
--

INSERT INTO `tp_ceshi` (`id`, `name`, `sex`, `age`) VALUES
(1, '戴', 'm', 11),
(2, 'thin kphp', 'm', 10),
(3, 'oneth   ink', 'fm', 11);

-- --------------------------------------------------------

--
-- 表的结构 `tp_main`
--

CREATE TABLE `tp_main` (
  `id` int(10) NOT NULL,
  `parentid` int(4) NOT NULL COMMENT '子菜单id',
  `title` tinytext NOT NULL COMMENT '标题',
  `content` text NOT NULL COMMENT '话题内容',
  `create_time` datetime NOT NULL COMMENT '创建时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tp_main`
--

INSERT INTO `tp_main` (`id`, `parentid`, `title`, `content`, `create_time`) VALUES
(0, 1, '什么是自动化测试框架', '在了解什么是自动化测试框架之前，先了解一下什么叫框架？框架是整个或部分系统的可重用设计，表现为一组抽象构件及构件实例间交互的方法；另一种定义认为，框架是可被应用开发者定制的应用骨架。前者是从应用方面，而后者是从目的方面给出的定义。 从框架的定义可以了解，框架可以是被重用的基础平台；框架也可以是组织架构类的东西。其实后者更为贴切，因为框和架本来就是组织和归类所用的。\n所以自动化测试框架的定义为：由一个或多个自动化测试基础模块、自动化测试管理模块、自动化测试统计模块等组成的工具集合。\n按框架的定义来分，自动化测试框架可以分为：基础功能测试框架、管理执行框架；按不同的测试类型来分，可以分为：功能自动化测试框架、性能自动化测试框架；按测试阶段来分，可以分为：单元自动化测试框架、接口自动化测试框架、系统自动化测试框架；按组成结构来分，可以分为：单一自动化测试框架、综合自动化测试框架；按部署方式来分，可以分为：单机自动化测试框架、分布式自动化测试框架。', '2016-05-13 09:32:13'),
(1, 1, '引申', '了解了自动化测试框架的概念和分类，那么何时会需要用到自动化测试框架呢？我们又如何去选择不同的自动化测试框架？自动测试框架真正的作用又是什么？\r\n在日常工作中我们往往会遇到很多需要解决的难题，而每当难题出现后总会出现与其对应的解决方案；自动化测试框架也是如此，它是在我们进行自动化测试时遇到了难题后出现的一种解决方案，所以当你在自动化测试工作中遇到难题，并且无法利用现有资源进行简单组合而解决时，那么自动化测试框架可能就是你最需要引入的时候。比如自动化测试脚本难以人工去维护时；又如自动化测试效率不能通过并行的方式进行提高时。', '2016-05-13 15:16:15'),
(2, 1, '开源测试框架', 'Tellurium\r\nTellurium是一种自动化的web测试框架。虽然它是在selemium的阶段上建立起来的，但两者之间有许多概念上的差异。\r\nwtd\r\nwtd可以支持selenium,http(post,get),jsonrpc 自动化测试用例，并且可以支持测试环境修改，测试报告生成。wtd介绍[6] \r\nQTP\r\nQTP是quicktest Professional的简称，是一种自动测试工具。使用QTP的目的是想用它来执行重复的自动化测试，主要是用于回归测试和测试同一软件的新版本。因此你在测试前要考虑好如何对应用程序进行测试，例如要测试哪些功能、操作步骤、输入数据和期望的输出数据等', '2016-05-13 09:41:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tp_ceshi`
--
ALTER TABLE `tp_ceshi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_main`
--
ALTER TABLE `tp_main`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `tp_ceshi`
--
ALTER TABLE `tp_ceshi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `tp_main`
--
ALTER TABLE `tp_main`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
