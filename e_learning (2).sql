-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2022 at 07:26 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `bayar`
--

CREATE TABLE `bayar` (
  `id_bayar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `quantity` int(5) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bayar`
--

INSERT INTO `bayar` (`id_bayar`, `id_user`, `id_kelas`, `quantity`, `total`) VALUES
(1, 11, 26, 1, 150000);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `id_kategori`, `judul`, `content`, `thumbnail`) VALUES
(27, 10, 'Essential UI (user-interface) design tips', '- Know your users.\n- Define how people use your interface.\n- Set expectations.\n- Anticipate mistakes.\n- Give feedback—fast. \n- Think carefully about element placement and size. \n- Don\'t ignore standards. \n- Make your interfaces easy to learn.', '3Essential_UIUX.jpg'),
(29, 10, 'Top UX/UI Trends for 2022', '- Dark mode.\n- 3D and animations.\n- Optimization for more screen - sizes and pixels.\n- Preparing your apps for large screens.\n- Minimizing complexity.\n- Design system and library.', 'trends-ux-ui.jpg'),
(30, 11, 'Top 10 3D printed design trends of 2022', '- The Flamtrad Collection. \r\n- The Squishy Mouse. \r\n- Puddy. \r\n- Printthinks 3D Printed Prosthesis. \r\n- Konvergence. \r\n- The Kobble Collection. \r\n- Dennis Johann Mueller sustainable basketball sneaker. \r\n- 3D printed terra-cotta tiles.', '3dTrend.jpg'),
(31, 12, 'Top 8 Reasons Why You Should Learn Graphic Design', '1) Huge demand and low supply\r\n2) Take your work with you anywhere in the world\r\n3) A Job for life and great money!\r\n4) Volume of work and repeat business\r\n5) Freedom to be artistic and creative\r\n6) Cross pollination with other industry areas and networking\r\n7) Negotiate on your terms and be free!\r\n8) You can learn by yourself', 'why_learn_graphic_design.jpg'),
(32, 13, '5 High-Paying Film Industry Jobs To Consider for Your Career', '1. Art director\r\nNational average salary: $66,939 per year\r\nPrimary duties: An art director in the film may work on live-action or animated projects to create visually appealing productions for their target audience. Art directors collaborate with movie directors, screenwriters, and actors, plus animators or set and costume designers, to produce a specific tone and mood through the visual aspects of a film. Since this is a high-level role, it is useful to have a bachelor degree in design or a related field and to gain experience working on the sets of various movies.\r\n\r\n2. Entertainment lawyer\r\nNational average salary: $73,531 per year\r\nPrimary duties: An entertainment lawyer is an attorney who specializes in legal work related to the entertainment industry, including individual legal cases and business operations. These law professionals may take on clients like celebrities and actors to help them settle legal disputes, or they might work with studios and executives to ensure all \r\nareas of production follow local and national regulations. To become an entertainment lawyer, interested candidates must complete a post-graduate law program, during which it is useful to find internships in entertainment law.\r\n\r\n3. Executive producer\r\nNational average salary: $74,555 per year\r\nPrimary duties: An executive producer is a high-level industry professional who handles the general production of a film or, most times, a television show. The executive producer communicates directly with the studio in charge of the film and creates the direction for the production, including the general storyline, the budget, and which actors they want to cast. While there are no specific degrees required to become an executive producer, a few years of experience working at different levels of film production can help candidates get a job in this role.\r\n\r\n4. Videographer\r\nNational average salary: $77,282 per year\r\nPrimary duties: A videographer is an important member of a film crew who guides the direction of filming. While they often report to cinematographers or directors, the videographer typically has authority over their crew to direct the use of filming equipment, like choosing camera angles and creating visually appealing shots, and collaborating with other team members to edit footage for a finished product. There are film and video production degrees a candidate can pursue to increase their skills for this role, but the main requirement to join this career is prior experience in a film crew.\r\n\r\n5. Director\r\nNational average salary: $84,937 per year\r\nPrimary duties: A director handles on-set leadership responsibilities for film production and is often the highest-level employee on set every day. The responsibilities of a director include working with other high-level employees to establish the artistic mood and storyline of a film, directing members of the film crew and actors to fulfill their vision for the production, and requesting retakes or changes in the script during filming. A film degree can improve a candidates chances of getting a job in this role, but many studios prefer candidates with a few years of experience in the film industry.', 'Memilih-PH-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `bio_guru` text NOT NULL,
  `pasphoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `bio_guru`, `pasphoto`) VALUES
(4, 'Lindsey Dorwart', 'Started his career as a freelance designer in 2013. In the following year he joined as a UI/UX Designer at a startup, while still working on several projects from overseas clients. Currently focusing on developing Kawalan Studio, which was founded in 2018, the studio is currently focusing on designs such as UI Kits, Templates, to Icons.', 'Rectangle 4.png'),
(5, 'Alfredo Passaquindici Arcand', 'As a Digital Artist who focuses on Digital Imaging, I have experience working on several projects, both photo editing and editing needs for ad designs that require a Digital Imaging touch. Currently, I am starting my career in the creative industry as a D', 'Rectangle 5.png'),
(6, 'Miracle Calzoni', 'A Brand Designer at a brand that he built himself named Vector Kades since 2017 and has provided various design solutions for various products and services.', 'Rectangle 6.png'),
(7, 'Emerson Korsgaard', 'A Freelance Graphic Designer who focuses primarily on logo design, was familiar with graphic design software when he was in high school and has now worked on many logo projects and other design products using Affinity Designer software.', 'Rectangle 11.png'),
(8, 'Marcus Workman', 'The young man who is often called Marcus, has started to focus and be active in the field of Graphic Design since early 2019. He has the branding name Marcus who is actively creating microblog content about Inkscape. Currently he focuses on being a logo designer & microblogger on Instagram.', 'Rectangle 13.png'),
(9, 'Alena Dokidis', 'Graphic designer from Bandung who founded POT Branding House, a branding consultant that focuses on helping local &amp;amp; international brands with the Human Brand Model methodology as Head of Design.\r\n\r\nSo far, in his 7 year career as a graphic designer, he taught information design &amp;amp; design projects at ITENAS Bandung for 2 years, designed the Indonesia Pavilion at Ambiente 2019-2020 Frankfurt&mdash;Germany, participated in the 2019 London Book Fair with Didiet Maulana and organized the Bandung Design Biennale. 2021.', 'Rectangle 7.png'),
(10, 'Hanna Passaquindici Arcand', 'The first UX Writer in a Smart City Tech App company in Indonesia who became a pioneer and even won various awards at the international level.', 'Rectangle 8.png'),
(11, 'Leo Philips', 'Leo Philips has been in the field of UX Research since 2017. Currently, he is working as a Senior UX Researcher at an Indonesian e-commerce company, which is a Unicorn Startup.', 'Rectangle 9.png'),
(12, 'Ahmad Calzoni', 'A UI/UX Designer with more than 7 years experience. Early in his career, he worked as a remote worker for a design agency in the US and Canada. In addition, he has also been the 1st Winner at the Topcoder Open 2018 (UI Design Category) Regional Indonesia. Currently, he is the Design Director and Founder of the Creative Agency, an agency that focuses on digital product design. The agency has served digital product designs for various clients from various countries such as the US, Europe, Australia, Asia, and of course Indonesia.', 'Rectangle 10.png'),
(13, 'Ashlynn Rhiel Madsen', 'A Video Editor called Ashlynn began to focus on the world of video editing with Adobe Premiere since early 2016. Then active in the Production House as a Video Editor until now', 'Rectangle 12.png'),
(14, 'Tatiana Passaquindici Arcand', 'I am a motion designer now living in Bandung and working remotely with a studio in Switzerland called Videodesign. Here I work with illustrators, project managers and clients to create various kinds of motion design products according to client needs.\r\nMy career journey has started since 2012 when I was still studying at Telkom University, since college I have taken freelance in local and international studios and agencies. In 2015 I joined Monoponik Studio as a senior motion designer, then in 2018 I moved to videodesign.', 'Rectangle 14.png'),
(15, 'Kaylynn Levin', 'I am Kaylynn Levin as Video Editor at Let us Learn', 'Rectangle 15.png'),
(16, 'Kadin Bator', 'Commonly called Kadin, he started in the field of 3D Modeling in 2015 as a hobby. Currently he works as a freelance 3D Modeler and Animator. Some projects that have been done such as animation for learning, ranging from character and property modeling, rigging and animating them.', 'Rectangle 16.png'),
(17, 'Kianna Botosh', 'Often called Kianna, since 2016 she has been actively involved in the field of 3D, especially Environment 3D Modeling during her undergraduate thesis. She has also participated in GGJ 2018 with Unity at ITB as a 3D Artist, and until now several projects have been carried out such as making learning about 3D.', 'Rectangle 17.png'),
(18, 'Marcus Aminoff', 'In his daily life, he is usually called Marcus, he has been active in the 3D field since 2019 as a hobby to create content on his personal Instagram. Currently, focusing on freelance work on several characters and objects as digital assets in the marketplace.', 'Rectangle 18.png'),
(19, 'Anika Dorwart', 'Usually called Anika, she currently works as a full time graphic designer and products strategist at a digital agency in Malang, started in the 3D field since early 2020 when it was a pandemic to fill his spare time and finally got addicted.', 'Rectangle 19.png'),
(20, 'Aspen Kenter', 'Currently I work in an animation studio in Malaysia, namely Warnakala Studio with a remote work system. Besides that, I also work in the freelance world and outsource to an animation studio. When I was still in Vocational High School, I had achieved many achievements with my friends and as individuals, from regional to national levels, one of which was my work being the Best Picture Hellofest, being nominated for Best Student, and at UCIFEST UMN as the 1st winner of the best animation.', 'Rectangle 20.png'),
(21, 'Allison Passaquindici Arcand', 'Currently I work in an animation studio in Malaysia, namely Warnakala Studio with a remote work system. Besides that, I also work in the freelance world and outsource to an animation studio. When I was still in Vocational High School, I had achieved many achievements with my friends and as individuals, from regional to national levels, one of which was my work being the Best Picture Hellofest, being nominated for Best Student, and at UCIFEST UMN as the 1st winner of the best animation.', 'Rectangle 21.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `thumbnail`) VALUES
(10, 'UI/UX Design', 'UIUX.jpg'),
(11, '3D Design', '3dDesign.jpg'),
(12, 'Graphic Design', 'design.jpg'),
(13, 'Video Editing', 'broadcasting.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `tentang` text NOT NULL,
  `harga` varchar(50) NOT NULL,
  `thumbnail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `id_guru`, `id_kategori`, `deskripsi`, `tentang`, `harga`, `thumbnail`) VALUES
(13, 'Create an Icon Set Design & How To Sell It', 4, 12, 'Learn how to make icon packs and all about icons directly with the experts in this class. Besides getting knowledge, you can also get passive income. Learn right now!', 'This is an online class to learn to create Icon designs. In this online class, you will learn the basic concepts of creating an icon design, to learn the details of the icon making process in various styles using Adobe Illustrator. Not only that, here you will also be taught how to do business/sell the icon design through the marketplace.\r\n\r\nThis class is intended for those of you who are beginners in the field of graphic design, or are at the beginning of a career and also for UI/UX Designers who want to add skills in making icon designs.\r\n\r\nIn addition, you can also consult about your material or career with the mentor directly through the telegram group~', '150000', 'icon.png'),
(14, 'Digital Imaging with Adobe Photoshop', 5, 12, 'Here you will learn to master Adobe Photoshop tools in detail to learn special techniques to make good and quality photo manipulations.', 'This is a Digital Imaging class using Adobe Photoshop. Here, you will be taught how to use Adobe Photoshop software in detail, so you can use the tools more effectively as needed.\r\n\r\nAfter that, you will also be taught how to use various additional techniques in processing images for Digital Imaging needs. At the end of the class material, there is a discussion of case studies for materials you can study at home and practice directly.', '150000', 'digital_imaging.jpg'),
(15, 'Blender : 3D Modeling for Beginner', 16, 11, '3D visualization is a type of design that is much needed in the creative industry. You need a 3D Modeling course to learn and create great work!', 'This is a class to learn to make 3D Models using Blender software. Here, you will be taught Blender tools from the basics in order to understand their functions well, plus practical exercises to make several models from easy to quite complex.\r\n\r\nAfter that, you will also get bonus material, in the form of how to set Render in Blender using Cycles and Eevee, and learn a little about lighting and shading.\r\n\r\nOh yes, you can also consult about the material with the mentor directly through the telegram group~', '150000', '3dmodeling.jpg'),
(16, 'Logo Design Mastery', 6, 12, 'Logo is an important element in business, because it represents a brand. With a good logo design, of course, you can introduce your business to the wider community and become the main attraction.', 'This is a complete logo design learning class for beginners. Not only learning the technicalities of making a logo with Adobe Illustrator, but here you will learn the process from scratch, so that the resulting logo design can represent the brand properly and correctly.\r\n\r\nSo by taking this class, your logo design can go up a grade, no longer only visually beautiful, but also meaningful.\r\n\r\nThe material in this class is prepared from the basics and structured to be easily understood and practiced by beginners who are just starting out.', '150000', 'design-3.jpg'),
(17, 'Graphic Design with Affinity Designer', 7, 12, 'This class contains more than 20 material videos that God willing can help you master Affinity Designer software faster. The discussion in this class starts from the basics, so God willing, it is suitable for those of you who have just switched to using Affinity Designer software or are even new to graphic design, especially in the field of vector-based graphic design.', 'This is a Graphic Design class using Affinity Designer software. In this class, you will be taught how to use the various features and tools of the Affinity Designer software from the ground up, so that hopefully it can meet your needs in creating various graphic design products.\r\n\r\nIn addition to learning about the features and tools of Affinity Designer software, you will also learn to create graphic design products such as logos, posters, patterns and so on which will be discussed in the case study material. If later you still have difficulties in understanding the material, you can consult directly with the mentor or discuss with fellow members of this class through the Telegram group.', '150000', 'affinity.jpg'),
(18, 'UX Writing : How to build better experience for your product', 10, 10, 'Curious how an article is so influential on a digital product? Then how come writing can improve the user experience so it is more comfortable to use your app/web? The answer is in UX Writing! Come on, find out everything in more detail in this class!', 'Consumer behavior in the digital era can be said to be very dynamic, so it takes someone who is able to approach users with the right content strategy. UX Writer is present in carrying out this important role. Not surprisingly, UX Writer is one of the booming jobs in the digital era. How not, its presence is very important for business continuity in building interactions with users.\r\n\r\nThe class consists of 7 modules and 1 challenge to help you understand UX Writing, even for those of you who have never had experience in this field before. This class contains UX Writing material from basics such as, UX Writing Principles, Brand Voice and Tone, to the practice of writing UX Writing on various UI components. Not only that, this class will also discuss the daily life of a UX Writer to how you can prepare a good UX Writing portfolio for those of you who want to become a UX Writer.\r\n\r\nBy registering for this class, you will join an exclusive class group where you can share with your mentor or with other members so that your understanding of UX Writing can be even better.', '150000', 'mesin_tik.jpg'),
(19, 'UX Research 101', 11, 10, 'The increasing need for UX Research in the industrial era 4.0 has created opportunities for friends to work in this field. This is the best time for you to start learning about the foundations of UX Research.', 'This is a UX Research online class. In this online class, you will be introduced to what UX Research is and the basic things you need to know before choosing to pursue a career as a UX Researcher. You will learn about the history of UX Research, the importance of doing UX Research, when and how UX Research is done, case studies, to tips for creating a portfolio.\r\n\r\nThis class is intended for those of you who are new to or new to the UI/UX world, especially in the field of UX Research.', '150000', 'uiux-2.jpg'),
(20, 'Qualitative UX Research Power Ups', 11, 10, 'Qualitative research methods are often used to obtain validation from users, explanations of abstract matters, and in-depth information on a matter. Understanding of this method is important as a UX researcher in research.', 'This is one of a series of UX Research classes that focus on discussing the use of qualitative research in depth.\r\n\r\nIn this class, you will be introduced to the differences between quantitative and qualitative research, the importance of using qualitative methods, when it is best to use qualitative research, what methods can be used in qualitative research, to how to plan and prepare reports from qualitative research.\r\n\r\nThis class is intended for those of you who are interested in exploring the field of UX Research further.\r\n\r\nIn addition, you can also consult about your material or career with the mentor directly through the telegram group~', '150000', 'uiux-3.jpg'),
(21, 'Create UI Design for Landing Page', 12, 10, 'In this class, apart from learning how to create a UI design, you will also learn the fundamentals of the landing page itself. So that your website will have a clear purpose later~', 'This is the Create UI Design for Landing Page online class. In this online class, you will not only learn the technicalities of designing a landing page, but also a fundamental understanding of the function and purpose of a landing page.\r\n\r\nThis class is intended for those of you who are new to the world of UI/UX, or who are already working as a UI/UX Designer and want to add to their skills.\r\n\r\nIn addition, you can also consult about your material or career with the mentor directly through the telegram group~', '150000', 'landing_page.jpg'),
(22, 'Video Editing with Adobe Premiere Pro for Beginner', 13, 13, 'Currently, the use of video/motion as promotional material or media for delivering messages is increasingly widespread. That is because video/motion can usually convey more information at once, and is usually more interesting.', 'In this era of increasingly rapid development, the use of video/motion graphics as promotional material or media for delivering messages is increasingly widespread. That is because video/motion graphics can usually convey more information at once, making it more effective and usually more interesting if packaged properly of course.\r\n\r\nIn addition, the use of video/motion graphics can usually always go hand in hand with the needs of graphic design in general, meaning that it can be given a touch of motion graphics with a different point of view.\r\n\r\nFor example, if a company needs a logo and advertising banner to promote its products, then the design can also be made into motion graphics/videos, so that it becomes a new promotional work with a different approach. Of course this can be more attractive in the eyes of potential consumers later.\r\n\r\nSo, with many and varied needs, video/motion graphics are really needed in the creative industry.\r\n\r\nWhat are you waiting for, let us learn from now~', '150000', 'videoediting.jpg'),
(23, 'Logo animation with After Effect', 14, 13, 'Here we will learn about how to apply motion design skills to a logo, more precisely, we will learn how to create an animated logo. Are you ready to add to your skill set?', 'In an era where screens are everywhere, where we see there is a screen that always interacts with us. It is hard for us to let go of the screen. With new media like this, the demand for something new has emerged. The demand for something that moves and attracts people attention is increasing, that is where the motion design skill comes in.\r\n\r\nMotion Design and graphic design can never be separated, these two skillsets are always side by side and support each other. By learning motion design skills, your value as a designer will increase.\r\n\r\nIn this class we will learn how we can increase our value with motion design skills, especially in a Logo. We will learn how to breakdown a logo and create a motion concept in it, which of course is still in harmony with the brand/logo.\r\n\r\nThis class contains 14 materials that will guide friends to learn motion design for logos. The techniques learned are from basic to advanced, but do not worry because they will be guided by a mentor. In addition, here you will be included in an exclusive Telegram group containing members &amp;amp; mentors who are ready to guide you if there are difficulties or to discuss the existing material.', '150000', 'motion.jpg'),
(24, 'Blender : 3D Low Poly Art', 17, 11, '3D Low Poly is a unique style in 3D design. In this class you will learn all kinds of things and Low Poly Art tutorials. This will be a valuable design skill for you to master!', 'This is a 3D Low Poly Art class, where you can learn to create a 3D work with a Low Poly style using the Blender software. There are 11 case study materials with different scenes and each material has its own characteristics and uniqueness, of course also accompanied by various techniques so that it makes you more creative in using Blender tools in the future.\r\n\r\nIn short, this class consists of several stages in each case study, starting from Modeling, Creating 3D Material Objects, Camera View Low Poly style, Setting Rendering Image, so you will really practice from the beginning to the final rendering stage.\r\n\r\nIn addition, the original Blender file belonging to the mentor is also provided, so that participants can download, and learn firsthand what the mentor makes.\r\n\r\nOh yeah, you can also consult about the material with the mentor directly through the telegram group, okay~', '150000', 'polyart.png'),
(25, 'Blender : 3D Abstract Object', 18, 11, 'This 3D Abstract Object is suitable for use as a means of training and exploring new objects and with 3D Blender software we can better realize our concepts/ideas into a more tangible visual form.', 'This is an online 3D Abstract Object class using Blender software, where you can learn to create various shapes of abstract objects in 3D.\r\n\r\nIn short, this class consists of several stages in each case study creation, starting from Modeling, Shading, Camera Settings, Rendering, Post Processing, so you will actually practice from the beginning to the final rendering stage.\r\n\r\nIn this class you also learn about lighting exploration, choosing the right color for your work and learning physics/simulation.\r\n\r\nIn addition, the original Blender file belonging to the mentor is also provided, so that participants can download, and learn firsthand what the mentor makes.\r\n\r\nOh yeah, you can also consult about the material with the mentor directly through the telegram group, okay~', '150000', '3d-3.png'),
(26, '3D Voxel Art with MagicaVoxel', 19, 11, '3D Voxel Art is often made by designers/artists for an artwork or project and is often used as the main style or it can also be a supporting object in a work in the creative industry such as posters, motion graphics, games, illustrations, and advertising to make it look attractive. .', 'This is a 3D Voxel class with MagicaVoxel, where you can learn to create a unique 3D work in Pixel/Retro style in three-dimensional format using the free MagicaVoxel software.\r\n\r\nIn short, this class consists of several stages in each case study creation, starting from Modeling, Creating 3D Material Objects, Materials, so you will actually practice from the beginning to the final rendering stage.\r\n\r\nIn addition, the original Voxel file belonging to the mentor is also provided, so that participants can download, and learn firsthand what the mentor has made.\r\n\r\nOh yeah, you can also consult about the material with the mentor directly through the telegram group, okay~', '150000', 'voxel.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `level` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `nama_user`, `username`, `password`, `phone_number`, `level`) VALUES
(10, 'AlmiraZahra.272@gmail.com', 'Almira Zahra', 'mirazha_', '4d9012b4a77a9524d675dad27c3276ab5705e5e8', '081296481420', 'admin'),
(11, 'jovanka@gmail.com', 'Jovanka', 'jovanka', '4d9012b4a77a9524d675dad27c3276ab5705e5e8', '2345678', 'user'),
(12, 'anandito@gmail.com', 'Anandito Rafi', 'anandito12', '4d9012b4a77a9524d675dad27c3276ab5705e5e8', '0987654321', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bayar`
--
ALTER TABLE `bayar`
  ADD PRIMARY KEY (`id_bayar`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`),
  ADD KEY `id_kategori` (`id_kategori`) USING BTREE;

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bayar`
--
ALTER TABLE `bayar`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bayar`
--
ALTER TABLE `bayar`
  ADD CONSTRAINT `bayar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `bayar_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE;

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE;

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE,
  ADD CONSTRAINT `kelas_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
