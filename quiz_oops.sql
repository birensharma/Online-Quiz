-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2018 at 10:19 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_oops`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'PHP'),
(2, 'OOP'),
(4, 'MYSQLI'),
(5, 'HTML'),
(6, 'Javascript'),
(7, 'Bootstrap'),
(8, 'CSS'),
(9, 'Ajax'),
(10, 'JQuery');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) NOT NULL,
  `question` varchar(255) NOT NULL,
  `ans1` varchar(100) NOT NULL,
  `ans2` varchar(100) NOT NULL,
  `ans3` varchar(100) NOT NULL,
  `ans4` varchar(100) NOT NULL,
  `ans` varchar(50) NOT NULL,
  `cat_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `ans`, `cat_id`) VALUES
(1, 'What does PHP stand for?', 'PHP: Hypertext Preprocessor', ' Personal Hypertext Processor', 'Private Home Page', 'none of the above', '0', 1),
(2, 'How will you concatenate two strings?', 'Using . operator.', ' Using + operator.', ' Using add() function', ' Using append() function', '0', 1),
(3, 'How do you write \"Hello World\" in PHP', '\"Hello World\";', 'echo \"Hello World\";', ' Document.Write(\"Hello World\");', 'none of the above', '1', 1),
(4, 'All variables in PHP start with which symbol?', '!', '$', ' &', 'none of the above', '1', 1),
(5, 'What is the correct way to end a PHP statement?', ';', '.', '\\n', ' New line', '0', 1),
(6, 'The PHP syntax is most similar to:', 'VBScript', 'JavaScript', 'Perl and C', 'none of the above', '2', 1),
(7, 'How do you get information from a form that is submitted using the \"get\" method?', 'Request.Form;', 'Request.QueryString;', '$_GET[];', 'none of the above', '2', 1),
(8, 'When using the POST method, variables are displayed in the URL:', 'False', 'True', 'neither true nor false', 'Depents', '0', 1),
(9, 'In PHP you can use both single quotes ( \' \' ) and double quotes ( \" \" ) for strings:', 'False', 'True', 'Depends', 'non of the above', '1', 1),
(10, 'What is the correct way to create a function in PHP?', 'create myFunction()', 'new_function myFunction()', 'function myFunction()', 'none of the above', '2', 1),
(11, 'Which SQL statement is used to extract data from a database?', 'EXTRACT', 'OPEN', 'GET', 'SELECT', '3', 4),
(12, 'Which SQL statement is used to update data in a database?', 'UPDATE', 'MODIFY', 'SAVE AS', 'SAVE', '0', 4),
(13, 'Which SQL statement is used to insert new data in a database?', 'INSERT NEW', 'ADD NEW', 'ADD RECORD', 'INSERT INTO', '3', 4),
(14, 'With SQL, how do you select a column named \"FirstName\" from a table named \"Persons\"?', 'SELECT Persons.FirstName', 'EXTRACT FirstName FROM Persons', 'SELECT FirstName FROM Persons', 'none of the above', '2', 4),
(15, 'Which of the following is not true about simple views?', 'They derive data from one table.', 'They contain no functions or grouping.', 'You cannot perform DML operations through a simple view.', ' All of the above are true.', '2', 4),
(16, 'Which SQL statement is used to return only different values?', 'SELECT DISTINCT', 'SELECT DIFFERENT', 'SELECT UNIQUE', 'none of the above', '0', 4),
(17, 'Which SQL keyword is used to sort the result-set?', 'SORT', 'ORDER BY', 'ORDER', 'SORT BY', '1', 4),
(18, 'With SQL, how can you return all the records from a table named \"Persons\" sorted descending by \"FirstName\"?', 'SELECT * FROM Persons SORT \'FirstName\' DESC', 'SELECT * FROM Persons ORDER BY FirstName DESC', 'SELECT * FROM Persons ORDER FirstName DESC', 'SELECT * FROM Persons SORT BY \'FirstName\' DESC\r\n', '1', 4),
(19, 'With SQL, how can you return the number of records in the \"Persons\" table?', 'SELECT COUNT(*) FROM Persons', ' SELECT LEN(*) FROM Persons', 'SELECT NO(*) FROM Persons', 'SELECT COLUMNS(*) FROM Persons', '0', 4),
(20, ' Which SQL statement is used to create a table in a database?', 'CREATE DATABASE TAB', 'CREATE TABLE', 'CREATE DB', 'CREATE DATABASE TABLE', '1', 4),
(21, 'Choose the pure virtual function definition from the following.', 'virtual void f()=0 { }', 'void virtual f()=0 { }', 'virtual void f() {} = 0;', ' None of the above.', '3', 2),
(22, 'Which is the storage specifier used to modify the member variable even though the class object is a constant object?', 'auto', 'register', 'static', 'mutable', '3', 2),
(23, ' In an object model, there are major and minor elements. Which one of the following is true?', 'Abstraction, Encapsulation and Persistence are the major elements.', ' Hierarchy, Concurrency and Typing are the major elements.', ' Abstraction, Encapsulation and Hierarchy are the major elements.', 'Typing is the major element.', '2', 2),
(24, 'Which of the following is not a part of OOP?', ' Multitasking', ' Information hiding', 'Polymorphism', 'Type checking', '0', 2),
(25, 'Which one of the following is the first fully Object-oriented language?', 'Simula.', 'Java.', 'C++.', '  Javascript.', '1', 2),
(26, ' Programming without inheritance', 'is programming with abstract data types', ' is not object oriented', 'can be object oriented', 'none of the above', '0', 2),
(27, 'Which one of the following terms must relate to \"polymorphism\"', 'Static allocation.', ' Static typing.', 'Dynamic binding.', ' Dynamic allocation.', '2', 2),
(28, ' Providing access to an object only through its member functions, while keeping the details private is called .', ' information hiding.', 'encapsulation.', ' modularity', ' inheritance', '0', 2),
(29, 'What is the advantage of using import statements?', 'To avoid having to declare variables.', 'To refer to a class without using prefixes.', 'To avoid calling methods.', 'To import the images you want to use.', '1', 2),
(30, ' Which of the following statements is true in C++?', 'An object can be a class.', 'A class can be an object.', 'A class must have at least one member function.', ' If a constructor for a class is not specified, a default constructor is used.', '3', 2),
(31, 'What does HTML stand for?', 'Hyperlinks and Text Markup Language', 'Home Tool Markup Language', 'Hyper Text Markup Language', 'Hyper Extendable Language', '2', 5),
(32, 'Who is making the Web standards?', 'Mozilla', 'Google', 'The World Wide Web Consortium', 'Microsoft', '2', 5),
(33, 'Which character is used to indicate an end tag?', '^', '/', '>', '*', '1', 5),
(37, 'Which of the following attributes of text box control allow to limit the maximum character?', 'size', 'len', 'maxlength', 'all of these', '2', 5),
(38, ' \r\nHTML is a subset of', 'SGMT', 'SGML', 'SGMD', 'None of these', '1', 5),
(39, ' \r\nAny part of the graphic that is not included in another hot zone is considered to be part of', 'rect', 'point', 'default', 'polygon', '2', 5),
(40, '<INPUT> is', 'format tag', 'empty tag', 'both (a) and (b)', 'none of these', '1', 5),
(41, '\r\nThe latest HTML standard is', 'XML', 'SGML', 'HTML 4.0', 'HTML 5.0', '3', 5),
(42, 'Symbol used at the beginning of the HREF text is', '#', '^', '&', '$', '0', 5),
(43, ' How many tags are in a regular element?', '4', '3', '0', '2', '3', 5),
(46, 'Which built-in method adds one or more elements to the end of an array and returns the new length of the array?', 'last()', 'put()', 'push()', ' None of the above.', '2', 6),
(47, ' Which of the following function of String object combines the text of two strings and returns a new string?', 'add()', 'merge()', 'concat()', 'append()', '2', 6),
(48, 'Which of the following function of String object returns a number indicating whether a reference string comes before or after or is the same as the given string in sort order?', ' localeCompare()', 'search()', 'substr()', 'concat()', '0', 6),
(49, ' Which of the following function of String object returns the primitive value of the specified object', ' toLocaleUpperCase()', ' toUpperCase()', ' toString()', ' valueOf()', '3', 6),
(50, 'Which of the following function of String object causes a string to be displayed as struck-out text, as if it were in a <strike> tag?', ' sup()', 'small()', ' strike()', 'sub()', '2', 6),
(51, 'Which of the following function of Array object sorts the elements of an array?', 'toSource()', 'sort()', 'toString()', 'unshift()', '1', 6),
(52, 'Which of the following is true?', 'If onKeyDown returns false, the key-press event is cancelled.', ' If onKeyPress returns false, the key-down event is cancelled.', ' If onKeyDown returns false, the key-up event is cancelled.', ' If onKeyPress returns false, the key-up event is canceled.', '0', 6),
(53, 'Choose the client-side JavaScript object:', 'Database', 'Cursor', ' Client', ' FileUpLoad', '3', 6),
(54, 'Which best describes void?', 'A method', 'A function', 'A statement', 'An operator', '3', 6),
(55, 'Which is not an attribute of the cookie property?', 'path', 'host', 'secure', 'domain', '1', 6),
(56, 'Which of the following is correct about Bootstrap cross browser consistency?', 'Bootstrap uses Normalize to establish cross browser consistency.', 'Normalize.css is a modern, HTML5-ready alternative to CSS resets.', 'Normalize.css is a small CSS file that provides better cross-browser consistency ', ' All of the above.', '3', 7),
(57, 'Which of the following class styles a table with a light gray background to rows while the cursor hovers over them?', '.table', '.table-striped', '.table-bordered', '.table-hover', '3', 7),
(58, 'Which of the following bootstrap style of button represents a contextual button for informational alert messages?', '.btn', '.btn-primary', '.btn-success', '.btn-info', '3', 7),
(59, 'Which of the following bootstrap style of button makes the button size large?', ' .btn-lg', '.btn-sm', '.btn-xs', '.btn-block', '0', 7),
(60, 'Which of the following bootstrap style is used to add button to .navbar?', '.navbar-.btn', '..btn', '.form-.btn', 'None of the above.', '0', 7),
(61, ' Which of the following bootstrap style can be used to customize .pagination links?', '.disabled, .active', '.pagination-active, .pagination-disabled', '.menu-active, .menu-disabled', ' None of the above.', '0', 7),
(62, 'Which of the following bootstrap styles can be used to create a Animated progress bar?', '.progress-active', '.active', '.progress-striped.', 'None of the above.', '1', 7),
(63, 'Which of the following is correct about Tab Plugin?', 'You can toggle the Tab plugin\'s hidden content via data attributes.', 'You can toggle the Tab plugin\'s hidden content via javascript.', 'Both of the above.', 'None of the above.', '2', 7),
(64, ' The Bootstrap grid system has four classes which defines screen size:', 's, sm, mid, lg', 'xs, sm, md, lg', 'x, sm, md, lg', 'xs, sml, mid, lg', '1', 7),
(65, ' Which class to be used to create a button as a link in bootstrap', '.btn-hyperlink', '.btn-link', '.btn-url', '.btn-anchor', '1', 7),
(66, 'Which of the following selector selects all paragraph elements with a lang attribute?', 'p[lang]', ' p[lang=\"fr\"]', ' p[lang~=\"fr\"]', 'p[lang|=\"fr\"]', '0', 8),
(67, ' Which of the following defines a measurement in inches?', ' in', ' mm', ' pc', ' pt', '0', 8),
(68, ' Which of the following defines 1% of viewport width?', 'px', 'vh', 'vw', 'vmin', '2', 8),
(69, 'Which of the following is correct about Browser Safe Colors?', 'These are 216 colors which are supposed to be most safe and computer independent colors.', 'These colors vary from hexa code 000000 to FFFFFF.', 'runs 256 color pallates', 'All of the above.', '3', 8),
(70, ' Which of the following property is used to increase or decrease how bold or light a font appears?', 'font-family', ' font-style', ' font-variant', ' font-weight', '3', 8),
(71, 'Which of the following property is used to control the flow and formatting of text?', 'white-space', ' text-shadow', 'text-decoration', ' text-transform', '0', 8),
(72, 'Which of the following property of a table element specifies the width that should appear between table cells?', ':border-collapse', ':border-spacing', ':caption-side', ':empty-cells', '1', 8),
(73, 'Which of the following property changes the style of right border?', ':border-bottom-style', ':border-top-style', ':border-left-style', ':border-right-style', '3', 8),
(74, 'Which of the following property specifies whether a long point that wraps to a second line should align with the first line or start underneath the start of the marker of a list?', ' list-style-type', 'list-style-position', ' list-style-image', 'list-style', '1', 8),
(75, ' Which of the following property serves as shorthand for the padding properties?', ' padding', 'padding-top', 'padding-left', 'padding-right', '0', 8),
(76, 'AJAX has become very commonly used because', 'it allows pages to be interactive without further communication with the server.', 'XML is a close relative of HTML.', 'it avoids the need for JavaScript.', 'it allows page content to be updated without requiring a full page reload.', '3', 9),
(77, 'Which of the following is not a reason XML gained popularity as a data interchange format for AJAX?', 'It has been around a while and libraries exist for many languages to work with it', 'It can be navigated using JavaScript DOM methods.', 'It is extensible, allowing it to be adapted to virtually any application.', 'It is concise and simple to use.', '3', 9),
(78, 'Which statement about XML is false?', 'Every XML document must have a DOCTYPE tag.', 'Every XML document must have a root element.', 'Every XML tag must have a closing tag.', 'Every XML document must start with an XML prolog.', '0', 9),
(79, 'Which JavaScript DOM traversal method works with an XML Document object?', 'getElementById', 'getElementsByTagName', 'querySelectorAll', 'All of the above.', '1', 9),
(80, 'The jQuery AJAX methods .get(), .post(), and .ajax() all require which parameter to be supplied?', 'method', 'url', 'data', 'headers', '1', 9),
(81, 'Which of the following is not a restriction of JSON as a data interchange format relative to a plain object definition in JavaScript?', 'Property names must be quoted.', 'Single quotes may not be used as string delimiters.', 'Properties may not include functions or expressions.', 'Properties may only be objects, not arrays.', '3', 9),
(82, 'If an AJAX request made using jQuery fails,', 'the browser will automatically report the problem with an alert message', 'an error message will be displayed in the browser window content area.', 'the programmer should arrange for it to be reported using the jQuery .fail() method.', 'there is no way to notify the user.', '2', 9),
(83, 'What combination of technologies gives AJAX its name?', 'ASP and XAML', 'Asynchronous JavaScript and XML', ' Autonomic Computing and DHTML', 'Atlas and XML', '1', 9),
(84, 'Which one of these technologies is NOT used in AJAX?', 'CSS', ' DOM', 'DHTML', 'Flash', '3', 9),
(85, 'What are the properties of XMLHttpRequest?', 'onReadyStateChange', 'readyState', 'responseText & responseXML', 'All of the above', '3', 9),
(86, 'What scripting language is jQuery written in?', 'VBScript', ' JavaScript', ' C#', 'C++', '1', 10),
(87, 'Which of the following is a valid type of function javascript supports?', 'named function', 'anonymous function', 'Both of the above.', 'None of the above.', '2', 10),
(88, 'Which built-in method calls a function for each element in the array?', ' while()', ' loop()', 'forEach()', ' None of the above.', '3', 10),
(89, 'Which of the following jQuery selector selects element with the given element id some-id?', '$(\'some-id\')', '$(\'#some-id\')', '$(\'.some-id\')', ' None of the above.', '1', 10),
(90, ' Which of the following jQuery method gets attributes of an element?', ' attr()', 'getAttr()', 'getAttributes()', 'None of the above.', '0', 10),
(91, 'Which of the following jQuery method checks the current selection against an expression?', 'getIs( selector )', 'is( selector )', 'checkIs( selector )', 'None of the above.', '1', 10),
(92, 'Which of the following jQuery method gets a set of elements containing all of the unique siblings of each of the matched set of elements?', 'parents( selector )', ' prevAll( selector)', ' siblings( selector )', 'None of the above.', '2', 10),
(93, 'Which of the following jQuery method returns the top and left position of an element relative to its offset parent', ' offset( )', 'offsetParent( )', ' position( )', 'None of the above.', '2', 10),
(94, ' Which of the following jQuery method can be used to make a ajax call?', 'ready(url, [data], [callback] )', 'load( url, [data], [callback] )', 'reload(url, [data], [callback] )', ' None of the above.', '1', 10),
(95, ' Which of the following jQuery method loads a JSON data using an HTTP GET request?', ' jQuery.get( url, [data], [callback], [type] )', ' jQuery.getJSON( url, [data], [callback] )', 'jQuery.getScript( url, [callback] )', ' jQuery.post( url, [data], [callback], [type] )', '1', 10);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `pass`, `img`) VALUES
(1, 'ben', 'ben@123', '123', 'fc.jpg'),
(2, 'Aja', 'aja@gmail.com', '1234', 'done.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
