-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2024 at 01:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(150) DEFAULT NULL,
  `subdescription` varchar(500) DEFAULT NULL,
  `content` varchar(8000) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `tag_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `date_create` timestamp NULL DEFAULT NULL,
  `last_update` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `subdescription`, `content`, `image`, `tag_id`, `user_id`, `status`, `date_create`, `last_update`) VALUES
(1, 'A Loving Heart is the Truest Wisdom', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis, enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae voluptates soluta architecto tempora.\r\n\r\nMolestiae cupiditate inventore animi, maxime sapiente optio, illo est nemo veritatis repellat', 'test.jpg', 1, 1, 0, '2024-01-09 08:22:45', '2024-01-09 09:56:20'),
(7, 'DU LỊCH CORON VỚI LỊCH TRÌNH 6 NGÀY CỦA TUÂN', 'VỀ CHẶNG BAY THÍCH HỢP ĐI DU LỊCH CORON\r\nMình bay 2 chặng từ HCM qua Manila bay Cebu Pacific tới nơi', 'VỀ CHẶNG BAY THÍCH HỢP ĐI DU LỊCH CORON\nMình bay 2 chặng từ HCM qua Manila bay Cebu Pacific tới nơi thì tầm khoảng 6h sáng, ngồi nghỉ ngơi ăn sáng đợi tới tầm 10h thì bay chặng tiếp theo xuống Coron. Mình bay 2 chặng khác nhau chứ không book nối chuyến nhé.\n<h2> VỀ LỊCH TRÌNH DU LỊCH CORON CÓ GÌ</h2>\nNgày 1- Khám phá Coron\nSau khi đáp chuyến bay và đặt chân xuống Coron, mình dành khoảng 4 giờ đầu tiên để khám phá những nét độc đáo của nơi này. Chiều tới, mình lên thuyền ra Sunlight Ecotouris', '659d36d3417c1.jpg', 6, 1, 0, '2024-01-09 12:06:43', '2024-01-09 12:21:16'),
(8, 'DU LỊCH NEPAL 2023 KINH NGHIỆM ĐỂ TREK CÙNG MARDI HIMAL', 'Du lịch Nepal rất nổi tiếng với các cung trek, ở Việt Nam thì những cung phổ biến như ABC, EBC thườn', 'Du lịch Nepal rất nổi tiếng với các cung trek, ở Việt Nam thì những cung phổ biến như ABC, EBC thường được mọi người đi nhiều và nhắc tới nhiều. Trong đợt quay lại Nepal sau 7 năm mình muốn tìm 1 cung gì đó mới mới 1 xíu, và phải xuất phát từ Pokhara vì mình ngại phải đi xe. Pokhara thì mới khai trương sân bay mới chỉ cần bay vèo 25 phút từ thủ đô lên là được, thế là được gợi ý cung Mardi Himal. Thoả mãn đầy đủ các tiêu chí: dễ đi, và nhiều cây cối chứ không quá cằn cỗi. Dưới đây là 1 vài kinh n', '659d396481234.jpg', 6, 1, 0, '2024-01-09 12:17:40', '2024-01-09 12:17:40'),
(9, 'VÉ MÁY BAY ĐI THỤY SĨ 2023 CÓ GIÁ BAO NHIÊU?', 'Thụy Sĩ thực sự như một điểm đến mơ ước của bất kỳ ai. Những dãy núi cao tuyệt đẹp, những hồ nước mê', 'Thụy Sĩ thực sự như một điểm đến mơ ước của bất kỳ ai. Những dãy núi cao tuyệt đẹp, những hồ nước mê hoặc, những con đường rải sỏi quyến rũ, những viên sô cô la Thụy Sĩ ngon lành luôn khiến mình tự hỏi liệu vùng đất mê hoặc này có thực sự tồn tại hay không.  \r\n\r\nNếu bạn đang lên kế hoạch cho một chuyến du lịch ngắn ngày hay dài ngày tại đất nước xinh đẹp này và muốn tham khảo cách săn vé máy bay đi Thụy Sĩ tiết kiệm nhất, vậy thì bài viết dưới đây chính là dành cho bạn. \r\n\r\nHướng dẫn mua vé máy ', '659d39dff3158.jpg', 6, 1, 0, '2024-01-09 12:19:43', NULL),
(10, 'TOP 10 BÃI BIỂN ĐẸP NHẤT PHÚ QUỐC', 'Phú Quốc được ví như một thiên đường biển đảo đẹp nhất Việt Nam. ', 'Phú Quốc được ví như một thiên đường biển đảo đẹp nhất Việt Nam. Ngoài việc sở hữu vẻ đẹp của thiên nhiên, không khí của đất trời, Phú Quốc còn được mẹ thiên nhiên ưu ái trao tặng những bãi biển cực đẹp với làn nước trong veo, xanh ngát. Lưu lại top 10 bãi biển đẹp nhất Phú Quốc bên dưới để vi vu cùng gia đình, bạn bè.\r\nBãi Rạch Vẹm\r\nBãi Rạch Vẹm nằm ở phía Bắc của đảo ngọc Phú Quốc. Vị trí thuộc xã Gành Dầu, cách thị trấn Đông Dương 40km. Bãi Rạch Vẹm nổi tiếng với bãi cát trắng mịn màng với khung cảnh hoang sơ. Điểm nổi bật ở nay đây là sao biển, bạn sẽ phải bất ngờ với những chú sao biển tung tăng dưới mặt nước. Thời gian đẹp nhất là từ tháng 11 đến tháng 3 năm sau nên đừng bỏ lỡ nhé.\r\nBãi Gành Dầu\r\nBãi Gành Dầu thực chất là một mũi đất nhô thẳng ra biển. Ấy thế mà nơi này lại trở thành một điểm đến thú vị cho lữ khách tứ phương. Dáng vẻ thanh bình và hoang dã của bãi Gành Dầu đã thu hút nhiều du khách đến với vị trí phía Tây Bắc của đảo ngọc.\r\nHòn Đồi Mồi\r\nHòn Đồi Mồi là một món quà của tạo hóa chưa được khám phá. Đối diện với Vinpearl Phú Quốc, hòn Đồi Mồi ẩn mình với giản đơn vốn có. Nếu bạn là người yêu thiên nhiên và những gì thuộc về tạo hóa nguyên sơ, hãy đến đây. Buổi chiều hoàng hôn sẽ giúp tâm hồn bạn được vỗ vễ nhẹ nhàng.\r\nBãi Dài\r\nBãi Dài có chiều dài đúng như tên gọi của mình là trải dài 15km. Bắt đầu từ mũi Gành Dầu đến Cửa Cạn, sở hữu không khí trong lành nên bãi Dài luôn được biết đến là một trong những bãi biển đẹp nhất Phú Quốc. Vinpearl Phú Quốc và nhiều resort cũng tọa lạc trên bãi Dài nên du khách thoải mái khám phá.', '659d3aec1daab.jpg', 6, 1, 0, '2024-01-09 12:24:12', '2024-01-09 12:26:54'),
(11, 'TOP 10 RESORT 5 SAO Ở PHÚ QUỐC', 'Phú Quốc luôn là một trong những điểm đến nghỉ dưỡng được ưa chuộng hàng đầu mỗi năm.', '<p>Ph&uacute; Quốc lu&ocirc;n l&agrave; một trong những điểm đến nghỉ dưỡng được ưa chuộng h&agrave;ng đầu mỗi năm. Được v&iacute; như thi&ecirc;n đường biển đảo Việt Nam, Ph&uacute; Quốc vươn m&igrave;nh để ch&agrave;o đ&oacute;n du kh&aacute;ch tứ phương. Khung cảnh thơ mộng, hoạt động giải tr&iacute; đa dạng v&agrave; nơi dừng ch&acirc;n c&oacute; thể n&oacute;i l&agrave; &ldquo;đỉnh của ch&oacute;p&rdquo; sẽ mang đến cho bạn những gi&acirc;y ph&uacute;t cực kỳ thoải m&aacute;i.</p>\r\n<p>Điểm qua top 10 resort 5 sao ở Ph&uacute; Quốc &ndash; nơi c&oacute; thể l&agrave; sự lựa chọn của bạn. H&atilde;y tận hưởng kỳ nghỉ ngọt ng&agrave;o c&ugrave;ng gia đ&igrave;nh v&agrave; bạn b&egrave; trong thời gian tới nh&eacute;.</p>\r\n<h3>Salinda Phu Quoc Island Resort &amp; Spa</h3>\r\n<p>Ẩn m&igrave;nh b&ecirc;n bờ biển thị trấn Đ&ocirc;ng Dương, Salinda Phu Quoc Island Resort &amp; Spa mang đến sự đẳng cấp. Sự kết hợp giữa văn h&oacute;a địa phương v&agrave; kiến tr&uacute;c đương đại tạo ra một kh&ocirc;ng gian độc đ&aacute;o. Kiến tr&uacute;c lấy thi&ecirc;n nhi&ecirc;n l&agrave; trọng điểm mang đến những khoảng trời xanh cho du kh&aacute;ch.</p>\r\n<p>C&aacute;c hoạt động vui chơi tại đ&acirc;y phục vụ cho tất cả c&aacute;c độ tuổi kh&aacute;c nhau. Đối với c&aacute;c em nhỏ sẽ c&oacute; bể bơi ri&ecirc;ng nhỏ xinh với mực nước an to&agrave;n tuyệt đối. Ngo&agrave;i ra, những hoạt động như lặn ngắm san h&ocirc;, ch&egrave;o thuyền Kayak&hellip;sẽ mang đến cho du kh&aacute;ch những gi&acirc;y ph&uacute;t thư gi&atilde;n nhất.</p>\r\n<p>Địa chỉ: 1 Trần Hưng Đạo, Dương Tơ, Ph&uacute; Quốc, Ki&ecirc;n Giang</p>\r\n<p>Điện thoại: 0297 3390 011</p>\r\n<h3>Novotel Phu Quoc Resort</h3>\r\n<p>Tọa lạc ngay cạnh b&atilde;i Trường, Novotel Phu Quoc Resort mang đến những trải nghiệm cao cấp nhất. Hệ thống ph&ograve;ng nghỉ sang trọng v&agrave; tinh tế c&ugrave;ng sự phục vụ tận t&igrave;nh của nh&acirc;n vi&ecirc;n phục vụ.</p>\r\n<p>B&ecirc;n cạnh tiện nghi v&agrave; ph&ograve;ng nghỉ hiện đại l&agrave; c&aacute;c tiện &iacute;ch giải tr&iacute; chất lượng. Bạn chắc chắn kh&ocirc;ng thể bỏ qua ph&ograve;ng Gym xịn x&ograve;, khu Spa sang chảnh, 2 s&acirc;n Tennis v&agrave; c&aacute;c hoạt động kh&aacute;c.</p>\r\n<p>Địa chỉ: Đường B&agrave;o, Dương Tơ, Huyện Ph&uacute; Quốc, Ki&ecirc;n Giang</p>\r\n<p>Điện thoại: 0297 6260 999</p>', '659d4368e47e2.jpg', 6, 1, 0, '2024-01-09 13:00:24', NULL),
(12, 'Palace Hotel Tokyo', 'We dedicated the majority of our recent summer to Asia.', '<p><img src=\"img/_DSC4785.jpg\" alt=\"\" width=\"750\" height=\"1124\"></p>\n<p>We dedicated the majority of our recent summer to Asia. After our two-and-a-half-month stay in Seoul, we headed to Japan for business meetings related to <a href=\"https://superegg.nyc/\" target=\"_blank\" rel=\"noopener\">Superegg</a>. The first week of August coincided with a national holiday in Japan, affording us the opportunity to indulge in a personal vacation – highlights included visits to <a href=\"https://www.eggcanvas.com/blog/2023/naoshima-teshima\" target=\"_blank\" rel=\"noopener\">Naoshima</a>, Nagoya, and Kyoto! We eventually made our way to our ultimate destination: Tokyo. Among the exceptional accommodations we experienced was the <a href=\"https://en.palacehoteltokyo.com/\" target=\"_blank\" rel=\"noopener\">Palace Hotel Tokyo</a>, an esteemed member of <a href=\"https://www.lhw.com/\" target=\"_blank\" rel=\"noopener\">The Leading Hotels of The World</a>.</p>\n<p><img src=\"img/_DSC4794.jpg\" alt=\"\" width=\"1000\" height=\"1499\"></p>\n<p>Although the current iteration of the hotel debuted in 2012, it has a rich history dating back to 1961 when the original Palace Hotel Tokyo opened its doors. The present-day establishment represents a modern reconstruction of the original, preserving a cherished sense of tradition and sophistication. Within its confines, guests are treated to an array of premium guest rooms and suites thoughtfully crafted to blend contemporary Japanese aesthetics and modern amenities. Many of these rooms offer panoramic views of Tokyo and are equipped with high-end furnishings and technology.</p>', '_DSC4778.jpg', 1, 1, 0, '2024-01-09 15:22:03', '2024-01-09 16:22:10'),
(13, 'The Tokyo EDITION, Toranomon', 'Tokyo is a vibrant and ever-changing city, with a constant stream of new restaurants, shops, and hotels opening up.', '<p>Tokyo is a vibrant and ever-changing city, with a constant stream of new restaurants, shops, and hotels opening up. During our recent trip to Tokyo for the launch of <strong><a href=\"https://www.instagram.com/superegg_jp/\" target=\"_blank\" rel=\"noopener\">Superegg in Japan</a>, </strong>we had the opportunity to stay at one of the newest and most exciting additions to the city\'s hotel scene - <strong><a href=\"https://www.editionhotels.com/tokyo-toranomon/\" target=\"_blank\" rel=\"noopener\">The Tokyo EDITION, Toranomon</a>.</strong> This sleek and elegant hotel is situated in the bustling business district of Tokyo, making it an ideal choice for both business travelers and tourists looking to experience the city\'s energy and excitement.</p>\r\n<p><img src=\"img/_DSC9473.jpg\" alt=\"\" width=\"750\" height=\"1124\"></p>\r\n<p>The Tokyo EDITION, Toranomon, is the inaugural EDITION hotel in Japan, and it is the visionary creation of celebrated hotelier Ian Schrager. Renowned for his avant-garde approach to hotel design, Schrager has brought his signature style to this property, resulting in a modern and stylish interpretation of Japanese aesthetics. The hotel\'s design is characterized by clean lines, natural materials, and a restrained color scheme, all of which seamlessly blend contemporary design with traditional Japanese elements. The guest rooms are particularly noteworthy, featuring breathtaking views of Tokyo\'s skyline. For an unforgettable stay, be sure to reserve a room with a view of the iconic Tokyo Tower.</p>\r\n<p><img src=\"img/_DSC9493.jpg\" alt=\"\" width=\"1000\" height=\"1499\"></p>\r\n<p>On our first night, we had the pleasure of dining at <a href=\"https://www.editionhotels.com/tokyo-toranomon/restaurants-and-bars/the-jade-room-and-garden-terrace/\" target=\"_blank\" rel=\"noopener\">Jade Room</a>, an exquisite restaurant overseen by Michelin-starred chef Tom Aikens. Aikens, renowned for his creativity and talent in the culinary world, has designed a menu that draws inspiration from century-old cooking methods and features a blend of unique flavors and international influences, with a strong emphasis on seasonal ingredients. Whether you\'re a food connoisseur or simply looking for an exceptional dining experience, Jade Room is a restaurant that you won\'t want to miss during your time in Tokyo.</p>\r\n<p><img src=\"img/_DSC9514.jpg\" alt=\"\" width=\"1000\" height=\"1499\"></p>\r\n<p>Guests can enjoy a unique breakfast experience at <a href=\"https://www.editionhotels.com/tokyo-toranomon/restaurants-and-bars/the-blue-room/\" target=\"_blank\" rel=\"noopener\">The Blue Room</a>. During our stay, we couldn\'t resist trying the Japanese Breakfast Set, or \"asagohan,\" which is comprised of several small dishes served together for a wholesome and nourishing meal. A traditional asagohan typically includes a range of flavorful items, such as grilled fish, rice, miso soup, pickled vegetables, and tamagoyaki (Japanese omelet). It\'s an ideal way to start the day and a must-try for anyone looking to experience authentic Japanese cuisine.</p>', '_DSC9514.jpg', 1, 1, 0, '2024-01-09 16:08:47', '2024-01-09 16:08:47'),
(14, 'Tổng quan về Prompt Engineering', 'Trong tech blog số này, Got It sẽ cùng bạn tìm hiểu về Prompt Engineering cũng như một số kỹ thuật cơ bản giúp đầu ra của Large Language Models (LLMs) tối ưu nhất có thể!', '<h2><span id=\"ChatGPT_la_gi_Hoat_dong_nhu_the_nao\">ChatGPT là gì? Hoạt động như thế nào?</span></h2>\r\n<p><img src=\"img/alexandre-debieve-FO7JIlwjOtU-unsplash.jpg\" alt=\"\" width=\"529\" height=\"352\"></p>\r\n<p>Chúng ta đã quá quen thuộc với ChatGPT. Các model tương tự như GPT-3, GPT-4 của OpenAI hay PaLM của Google cũng không còn lạ lẫm. Nhưng cụ thể chúng là gì và hoạt động như thế nào, cùng tìm hiểu sâu hơn nhé!</p>\r\n<p>Những khái niệm vừa được nhắc đến bên trên đều là Large Language Model (LLM) – một loại model xử lý ngôn ngữ tự nhiên. Chúng sử dụng rất nhiều dữ liệu văn bản đầu vào để phân tích và suy luận mối quan hệ giữa các từ trong văn bản đó. Dựa trên những thông tin  “học” được và yêu cầu mà người dùng gửi lên, chúng sẽ đưa ra câu trả lời phù hợp nhất.</p>\r\n<p>Vậy nên, lượng dữ liệu đầu vào càng nhiều, chất lượng dữ liệu càng cao thì chất lượng của model càng tốt, câu trả lời càng chính xác và phù hợp.</p>\r\n<h2><span id=\"Prompt_Engineering_la_gi\">Prompt Engineering là gì?</span></h2>\r\n<p><img src=\"img/luca-bravo-XJXWbfSo2f0-unsplash.jpg\" alt=\"\" width=\"500\" height=\"333\"></p>\r\n<p>Để model có thể thực hiện một nhiệm vụ cụ thể nào đó, chúng ta cần cung cấp cho nó ngữ cảnh, thông tin và yêu cầu, hay còn gọi là <code>prompt</code>.</p>\r\n<p>Tuy nhiên, biết viết prompt là chưa đủ. Chúng ta cần phát triển và tối ưu hoá prompt để model trả về kết quả phù hợp nhất với mong muốn của chúng ta. Đây chính là Prompt Engineering.</p>\r\n<p>Nói chung, Prompt Engineering là một kỹ năng hữu dụng giúp chúng ta cải thiện chất lượng đầu ra của model và sử dụng nó một cách hiệu quả hơn.</p>\r\n<h3><span id=\"Mot_prompt_co_ban\">Một prompt cơ bản</span></h3>\r\n<p>Hãy tưởng tượng một giao diện mà bạn có thể dùng để tương tác với model. Bạn có thể cung cấp một prompt và model sẽ sinh ra câu trả lời. Ví dụ:</p>\r\n<ul>\r\n<li>Prompt: <code>Neoclassicism is</code></li>\r\n<li>Câu trả lời:</li>\r\n</ul>\r\n<div>\r\n<div>\r\n<div id=\"highlighter_701898\">\r\n<table style=\"width: 1369.14px; height: auto;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr style=\"height: auto; width: auto;\">\r\n<td style=\"height: auto; width: auto;\">\r\n<div>1</div>\r\n</td>\r\n<td style=\"width: 1333.94px; height: auto;\">\r\n<div>\r\n<div><code>a movement in art, architecture, and literature that emerged in the 18th century and reached its peak during the late 18th and early 19th centuries.</code></div>\r\n</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n</div>\r\n</div>\r\n<p>Trong trường hợp này, prompt không phải một câu hỏi, cũng không phải là một yêu cầu gì phức tạp, mà chỉ đơn giản là một câu chưa hoàn chỉnh. Vì thế, câu trả lời của model sẽ là những từ phù hợp nhất để có thể hoàn thiện câu đó.</p>\r\n<h3><span id=\"Thanh_phan_cua_mot_prompt\">Thành phần của một prompt</span></h3>\r\n<p>Một prompt có thể chứa các thành phần sau:</p>\r\n<ul>\r\n<li>Ngữ cảnh (Context)</li>\r\n<li>Yêu cầu (Instruction)</li>\r\n<li>Thông tin đầu vào (Input data)</li>\r\n<li>Chỉ thị đầu ra (Output indicator)</li>\r\n</ul>\r\n<p>Bạn có chỉ ra được những thành phần trên trong ví dụ dưới đây không?</p>\r\n<div>\r\n<div>\r\n<div>\r\n<div>\r\n<div id=\"highlighter_4624\">\r\n<table style=\"width: 920.5px; height: auto;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr style=\"height: auto; width: auto;\">\r\n<td style=\"height: auto; width: auto;\">\r\n<div>1</div>\r\n<div>2</div>\r\n<div>3</div>\r\n<div>4</div>\r\n<div>5</div>\r\n</td>\r\n<td style=\"width: 885.3px; height: auto;\">\r\n<div>\r\n<div><code>You\'re a research assistant who always classifies things as the opposite of what they should be. </code></div>\r\n<div><code>Classify the following text into positive, neutral or negative.</code></div>\r\n<div><code>Don\'t say anything other than the sentiment:</code></div>\r\n<div><code>Text: The food at this restaurant sucks!</code></div>\r\n<div><code>Sentiment:</code></div>\r\n</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<p>Cùng phân tích thử nhé!</p>\r\n<ul>\r\n<li>Ngữ cảnh: “You’re a research assistant who always classifies things as the opposite of what they should be.”</li>\r\n<li>Yêu cầu: “Classify the following text into positive, neutral or negative. Don’t say anything other than the sentiment:”</li>\r\n<li>Thông tin đầu vào: “The food at this restaurant sucks!”</li>\r\n<li>Chỉ thị đầu ra: “Sentiment:”</li>\r\n</ul>\r\n<h3><span id=\"Mot_so_ky_thuat_Prompt_Engineering_co_ban\">Một số kỹ thuật Prompt Engineering cơ bản</span></h3>\r\n<h4><span id=\"Few-Shot\">Few-Shot</span></h4>\r\n<p>Ta có hai ví dụ sau:</p>\r\n<ul>\r\n<li><strong>Ví dụ 1:</strong></li>\r\n</ul>\r\n<p><strong><em>Prompt:</em></strong></p>\r\n<div>\r\n<div>\r\n<div id=\"highlighter_148115\">\r\n<table style=\"width: 736px; height: auto;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr style=\"height: auto; width: auto;\">\r\n<td style=\"height: auto; width: auto;\">\r\n<div>1</div>\r\n</td>\r\n<td style=\"width: 700.8px; height: auto;\">\r\n<div>\r\n<div><code>What is the sentiment of this sentence? I demand to see your manager!</code></div>\r\n</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n</div>\r\n</div>\r\n<p><strong><em>Response:</em></strong></p>\r\n<div>\r\n<div>\r\n<div id=\"highlighter_182170\">\r\n<table style=\"width: 736px; height: auto;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr style=\"height: auto; width: auto;\">\r\n<td style=\"height: auto; width: auto;\">\r\n<div>1</div>\r\n</td>\r\n<td style=\"width: 700.8px; height: auto;\">\r\n<div>\r\n<div><code>Negative</code></div>\r\n</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n</div>\r\n</div>\r\n<ul>\r\n<li><strong>Ví dụ 2:</strong></li>\r\n</ul>\r\n<p><strong><em>Prompt:</em></strong></p>\r\n<div>\r\n<div>\r\n<div id=\"highlighter_611197\">\r\n<table style=\"width: 736px; height: auto;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr style=\"height: auto; width: auto;\">\r\n<td style=\"height: auto; width: auto;\">\r\n<div>1</div>\r\n</td>\r\n<td style=\"width: 700.8px; height: auto;\">\r\n<div>\r\n<div><code>Is the sum of the following numbers an odd number? 14, 93, 12, 35</code></div>\r\n</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n</div>\r\n</div>\r\n<p><strong><em>Response:</em></strong></p>\r\n<div>\r\n<div>\r\n<div id=\"highlighter_126684\">\r\n<table style=\"width: 736px; height: auto;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr style=\"height: auto; width: auto;\">\r\n<td style=\"height: auto; width: auto;\">\r\n<div>1</div>\r\n</td>\r\n<td style=\"width: 700.8px; height: auto;\">\r\n<div>\r\n<div><code>Yes, the sum of these numbers is 154, which is an odd number.</code></div>\r\n</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n</div>\r\n</div>\r\n<p>Khi prompt không đưa ví dụ nào cho model, ta gọi kỹ thuật này là Zero-Shot.</p>\r\n<p>Cũng là 2 ví dụ trên, nhưng nếu cung cấp một vài ví dụ trong prompt để model có thể học theo, thì ta đang áp dụng một kỹ thuật gọi là Few-Shot.</p>\r\n<p><img src=\"img/marvin-meyer-SYTO3xs06fU-unsplash.jpg\" alt=\"\" width=\"600\" height=\"400\"></p>\r\n<h2><span id=\"Ket_bai\">Kết bài</span></h2>\r\n<p>Hy vọng qua bài viết này, bạn đã biết được Prompt Engineering là gì cũng như cách áp dụng một số kỹ thuật Prompt Engineering để cải thiện chất lượng đầu ra của model.</p>\r\n<p>Nếu bạn thấy bài viết này hữu ích thì hãy lưu lại và chia sẻ tới bạn bè ngay nhé! Đừng quên theo dõi chuyên mục Tech Blog để cập nhật những kiến thức công nghệ, lập trình bổ ích được chia sẻ bởi chính những Software Engineers tại Got It!</p>\r\n<div>\r\n<div>\r\n<div id=\"highlighter_410305\"></div>\r\n</div>\r\n</div>', 'marvin-meyer-SYTO3xs06fU-unsplash.jpg', 5, 2, 0, '2024-01-10 04:57:28', '2024-01-10 04:57:28'),
(15, 'Ridiculously Good Air Fryer Chicken Breast', 'My go-to everyday air fryer chicken! Thinly sliced chicken breast pieces, coated to the max in spices, plus a bit of brown sugar and cornstarch, and air fried to golden, juicy perfection.', '<h2>This Air Fryer Chicken Breast Is Ridiculously Good</h2>\r\n<p>But my life has changed in such a big way out here in the year 2024, and I’m now making this air fryer chicken <em>almost on the daily</em>. It’s so juicy, so delicious, and those crispity little browned bits! Ugh.</p>\r\n<p>How I got here: Bjork has been going hog wild on all things protein in the last few months. As resident cooker of all the food in our house, I decided it’s time for me to figure out a really foolproof way to make chicken – for him (#protein), and for <em>me</em>, so that I actually like it.</p>\r\n<p><img src=\"img/premium_photo-1663852297267-827c73e7529e.jpg\" alt=\"\" width=\"500\" height=\"333\"></p>\r\n<p>So even though I’ve resisted it for years… I bought an <a href=\"https://amzn.to/47qwPfd\" target=\"_blank\" rel=\"noreferrer noopener sponsored nofollow\">air fryer</a> <em>(affiliate link)</em>. Almost exclusively to make chicken. And guess what? The one recipe I keep coming back to is these thinly sliced chicken breast pieces, coated to the max in spices, plus a bit of brown sugar and cornstarch, and air fried to golden, juicy perfection. I LOVE THIS CHICKEN SO MUCH!</p>\r\n<p>There’s an excessive amount of seasoning and flavor, which we obviously love, but it’s the golden crisped exterior with little edge bits that you will die for. And all the while it stays nice and juicy on the inside.</p>\r\n<p>Takes 15 minutes to make and it’s such a family winner for us. I hope you love it!</p>\r\n<figure><img ></figure>\r\n<p><img src=\"img/photo-1504674900247-0877df9cc836.jpg\" alt=\"\" width=\"500\" height=\"333\"></p>\r\n<p> </p>', 'premium_photo-1663852297267-827c73e7529e.jpg', 7, 2, 0, '2024-01-10 06:42:34', '2024-01-10 06:42:34'),
(16, 'Technical Product Manager', 'Hanoi | Full-time | On-site |', '<p>Come join us as the<strong>&nbsp;Technical Product Manager&nbsp;</strong>in one of Silicon Valley&rsquo;s most innovative edTech companies, developing the world&rsquo;s first on-demand AI-based expert-managed marketplace for millions of learners in the English-speaking world and experts in over 100+ countries. Investors include those who backed SpaceX and Discord.</p>\r\n<p>Got It Inc. is looking for an outstanding Technology Leader to join our talented team of U.S.-based leaders and Silicon Valley-level software engineers, product managers, and test engineers in Vietnam and around the world. You&rsquo;ll work directly with the founder and a world-class team of technology industry veterans to build the next generation of the Got It platform, handling a massive number of real-time learning sessions between askers and experts in multiple subjects.</p>\r\n<p><img src=\"img/alexandre-debieve-FO7JIlwjOtU-unsplash.jpg\" alt=\"\" width=\"600\" height=\"400\"></p>\r\n<h3><span id=\"The_Core_Job\">The Core Job</span></h3>\r\n<ul>\r\n<li>Be able to work well with internal teams, including software engineers, architects, quality assurance, and operations. Ensure requirements are fully understood and that implementation plans match expectations.</li>\r\n<li>Ensure that all projects are delivered on time, within the scope, and within budget.</li>\r\n<li>Assist in the definition of project scope and objectives, involving all relevant internal stakeholders and ensuring technical feasibility.</li>\r\n<li>Ensure that user story content and prioritization are aligned with larger strategic objectives.</li>\r\n<li>Ensure resource availability and allocation.</li>\r\n<li>Work within a software development methodology like AGILE.</li>\r\n<li>Develop a detailed project plan to monitor and track progress.</li>\r\n<li>Manage changes to the project scope, project schedule, and project costs using appropriate verification techniques.</li>\r\n<li>Measure performance using appropriate project management tools and techniques.</li>\r\n<li>Report and escalate to management as needed.</li>\r\n<li>Perform risk management to minimize potential risks.</li>\r\n<li>Create and maintain comprehensive project documentation.</li>\r\n<li>Represent the technical product team in Vietnam and help engineers and QAs understand every single detail of each technical product feature.</li>\r\n<li>Perform other related duties as assigned.</li>\r\n</ul>\r\n<p><img src=\"img/luca-bravo-XJXWbfSo2f0-unsplash.jpg\" alt=\"\" width=\"600\" height=\"400\"></p>\r\n<h3><span id=\"You_Must_Have\">You Must Have</span></h3>\r\n<ul>\r\n<li>Proven working experience in project management.</li>\r\n<li>Excellent client-facing and internal communication skills.</li>\r\n<li>Excellent written and verbal communication skills in Vietnamese and English.</li>\r\n<li>Solid organizational skills including attention to detail and multitasking skills.</li>\r\n<li>Bachelor&rsquo;s Degree in Computer Science, Information Technology,&nbsp;or related fields.</li>\r\n<li>Experience with project management software tools such as Jira, Trello&hellip;</li>\r\n<li>Self-motivated, data-driven, responsible, detail-oriented, process-oriented, get things done.</li>\r\n<li>2+ years of experience delivering highly successful and innovative internet products with tons of users; including experience in an operational service delivery capacity.</li>\r\n</ul>\r\n<h3><span id=\"Extra_Bonus\">Extra Bonus</span></h3>\r\n<ul>\r\n<li>Startup experience.</li>\r\n<li>Experience working with distributed development teams.</li>\r\n<li>Prior experience as a Product Owner in a scrum team.</li>\r\n</ul>\r\n<h3><span id=\"Why_You8217ll_Love_Working_Here\">Why You&rsquo;ll Love Working Here</span></h3>\r\n<ul>\r\n<li><strong>21+ paid leave days per year:&nbsp;</strong>Besides national holidays, annual sick leaves, and&nbsp;paid leaves, we have a paid leave called Got It Day for every month that doesn&rsquo;t have any national holiday.</li>\r\n<li><strong>Amazing team:</strong>&nbsp;Work with the smartest and most hard-working people you&rsquo;ve ever met. Our team is from Google, Meta, Apple, Amazon, and other best companies in Vietnam.</li>\r\n<li><strong>Competitive compensation package:&nbsp;</strong>Attractive salary. There is no upper limit on how much you can earn. It&rsquo;s all based on your performance and contributions.</li>\r\n<li><strong>Best working environment:</strong>&nbsp;Coffee shop-like open office space, kitchen full of snacks and drinks, West Lake view bar, PlayStation, pool table, etc.</li>\r\n<li><strong>Latest gadgets for work:&nbsp;</strong>MacBook, external&nbsp;displays. Everything you need for your job is fully provided.</li>\r\n<li><strong>Training and personal development:</strong>&nbsp;Tuition and textbook reimbursement for approved work-related courses; free video training programs from Udacity, Udemy, and The Great Courses Plus; company library with the newest technology and business books.</li>\r\n<li><strong>Flexible working hours:&nbsp;</strong>There is no strict timekeeping. You are only required to show up at the office during Got It&rsquo;s core working hours (10 AM &ndash;&nbsp;5 PM, Mon &ndash;&nbsp;Fri).&nbsp;</li>\r\n<li><strong>Gyms, fitness, and sports:</strong>&nbsp;Gym memberships, soccer, or extra dollars in your pocket to spend on your own fitness, swimming, or dancing.</li>\r\n<li><strong>Free daily lunches and dinners:&nbsp;</strong>Enjoy fresh meals of your choice delivered straight to the office.</li>\r\n<li><strong>Others:&nbsp;</strong>Office happy hours, monthly team outings, participating in self-organized clubs like sports, games, algorithms, piano, etc.<br><img src=\"img/marvin-meyer-SYTO3xs06fU-unsplash.jpg\" alt=\"\" width=\"600\" height=\"400\"></li>\r\n</ul>', 'premium_photo-1663852297267-827c73e7529e.jpg', 12, 2, 0, '2024-01-10 06:50:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `home` tinyint(4) DEFAULT 0,
  `status` tinyint(4) DEFAULT 0,
  `date_create` timestamp NULL DEFAULT current_timestamp(),
  `last_update` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `image`, `home`, `status`, `date_create`, `last_update`) VALUES
(1, 'Fashion', 'fashion', NULL, 0, 0, '2024-01-06 06:27:02', '2024-01-06 06:27:02'),
(5, 'Technology', NULL, NULL, 0, 0, '2024-01-07 03:36:13', '2024-01-07 03:36:13'),
(6, 'Travel', NULL, NULL, 0, 0, '2024-01-07 03:36:23', '2024-01-07 03:36:23'),
(7, 'Food', NULL, NULL, 0, 0, '2024-01-07 03:36:31', '2024-01-07 03:36:31'),
(8, 'Photography', NULL, NULL, 0, 0, '2024-01-07 03:36:39', '2024-01-07 03:36:39'),
(9, 'test_auto_create', NULL, NULL, 0, 0, '2024-01-07 07:03:41', '2024-01-07 07:03:41'),
(10, 'Test', NULL, NULL, 0, 0, '2024-01-07 07:26:49', '2024-01-09 16:22:39'),
(11, 'test1', NULL, NULL, 0, 0, '2024-01-09 08:05:35', '2024-01-09 08:05:35'),
(12, 'Job', NULL, NULL, 0, 0, '2024-01-10 06:50:17', '2024-01-10 06:50:17');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` varchar(200) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `blog_id` int(11) DEFAULT NULL,
  `date_comment` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `user_id`, `blog_id`, `date_comment`) VALUES
(1, 'Good job! <3', 1, 13, '2024-01-09 17:35:12'),
(2, 'test', 1, 13, '2024-01-10 03:02:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `level` tinyint(4) DEFAULT 0,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` char(15) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `date_create` timestamp NULL DEFAULT NULL,
  `last_update` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `level`, `username`, `password`, `name`, `email`, `phone`, `address`, `avatar`, `status`, `date_create`, `last_update`) VALUES
(1, 0, 'long', 'e10adc3949ba59abbe56e057f20f883e', 'Long Nguyen', '123456@gmail.com', '0364091563', '123456', 'Screenshot 2024-01-06 193822.jpg', 0, NULL, NULL),
(2, 0, 'vivi', 'e10adc3949ba59abbe56e057f20f883e', 'Vi Vi', '123456@gmail.com', '0364091563', '123456', 'pexels-trinity-kubassek-445109.jpg', 0, NULL, '2024-01-10 05:17:45'),
(3, 0, 'tester', 'e10adc3949ba59abbe56e057f20f883e', 'tester tester', 'tester@gmail.com', '0364091563', 'tester', 'ian-dooley-d1UPkiFd04A-unsplash.jpg', 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
