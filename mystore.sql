-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2023 at 06:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_username`, `admin_password`) VALUES
('zain', 'zain');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Gucci'),
(2, 'Faber-castell'),
(3, 'Derwent'),
(4, 'Star Dust'),
(5, 'Fisher-Price'),
(6, 'Fenty Beauty'),
(7, 'IMTIAZ');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`product_id`, `ip_address`, `quantity`) VALUES
(14, '127.0.0.1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'Gifts'),
(2, 'Arts'),
(3, 'Toys'),
(4, 'Accessories'),
(5, 'Beauty Products'),
(7, 'Shoes'),
(8, 'Clothes');

-- --------------------------------------------------------

--
-- Table structure for table `gift_products`
--

CREATE TABLE `gift_products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_description` varchar(600) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_price` varchar(155) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gift_products`
--

INSERT INTO `gift_products` (`product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_price`, `date`, `status`) VALUES
(1, 'Silver Pressed Flower Teardrop Earrings gift', 'Unique translucent teardrop-shape earrings featuring real dried flowers preserved in resin and surrounded by gold over sterling silver settings. The natural properties of real flowers provides a one-of-a-kind look to each piece. The image may show a slight difference to the actual flowers in color and composition Grown in the fields of Taxco, Mexico, these miniature flowers are gathered by hand and preserved permanently in resin.', 'gifts,earings,women,gift,forwomen,flower,earing', 1, 2, 'Silver Pressed Flower Teardrop Earrings gift.png', 'Silver Pressed Flower Teardrop Earrings gift2.png', '45.56', '2023-06-17 09:22:46', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_description` varchar(600) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(300) NOT NULL,
  `product_price` varchar(155) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `date`, `status`) VALUES
(1, 'Blokeh Lopenzy', '\"Blokeh Lopenzy,\" a photograph by a Russian artist, is a captivating display of bokeh photography. Through a skillful play of colors, light, and shadows, this enchanting piece creates a dreamy atmosphere that invites viewers to lose themselves in its allu', 'picture,arts,beautifull,faber-castell', 2, 2, 'arts.jpg', 'images.jpeg', '', '50', '2023-06-14 08:04:12', 'true'),
(2, 'Silver Pressed Flower Teardrop Earrings gift', 'Unique translucent teardrop-shape earrings featuring real dried flowers preserved in resin and surrounded by gold over sterling silver settings. The natural properties of real flowers provides a one-of-a-kind look to each piece. The image may show a sligh', 'gifts,earings,women,gift,forwomen,flower,earing', 1, 2, 'Silver Pressed Flower Teardrop Earrings gift.png', 'Silver Pressed Flower Teardrop Earrings gift2.png', 'Silver Pressed Flower Teardrop Earrings gift3.png', '45.56', '2023-06-17 09:23:17', 'true'),
(3, 'Premium Scented Candle Gift', 'DISTINCTIVE SCENTS OF BOSTON: Fall days spent wandering the cobblestone streets. Notes of spiced tea with clove and orange capture the City on a Hill. This 13.75 oz scented candle is the perfect accessory for your home and office as it will bring back mem', 'gift,candle,candlegift,premium,products', 1, 2, 'Premium Scented Candle Gift.png', 'Premium Scented Candle Gift2.png', 'Premium Scented Candle Gift3.png', '34.95', '2023-06-17 09:24:38', 'true'),
(4, 'Floral Hand Cream 3-Piece Gift Set', 'A vibrant trio of floral-scented hand creams, enriched with shea butter. This set includes:Occitane Rose Hand Cream 1x Occitane Cherry Blossom Hand Cream 1 Oz, and LOccinate & Orchidée Hand Cream 1 Oz.Enriched with shea butter to moisturize, nourish, and protect the skin. Gently massage cream onto your hands.', 'cream,handcream,giftst,set,gift,gifts,3piece', 1, 3, 'Floral Hand Cream 3-Piece Gift Set .png', 'Floral Hand Cream 3-Piece Gift Set 2.png', 'Floral Hand Cream 3-Piece Gift Set 3.png', '44.60', '2023-06-17 09:30:28', 'true'),
(5, 'Design Toscano Monkeys Statue gift', 'Exotic Antique Replica - Traditional sculptures like ours became popular during Victorian times when British explorers brought them back from their travels as gifts and souvenirs High-Quality Figurine - Hand-cast using real crushed stone bonded with durable designer resin, our Hear, See, and Speak No Evil animals are topped with a faux bronze finish Design Toscano Home Decor - Exclusive to the Design Toscano brand, this decorative, antique style monkey statue is perfect for a home library, den, or office Our No Evil Monkeys measure 7\"Wx3.5\"Dx5\"H and weigh 3 lbs. perfect for shelf or tabletop d', 'gift,giftproduct,products,monkeyset,statuegift,statue', 1, 3, 'Design Toscano Monkeys Statue gift.png', 'Design Toscano Monkeys Statue gift2.png', 'Design Toscano Monkeys Statue gift3.png', '75.29', '2023-06-17 09:31:47', 'true'),
(6, 'DEKADRON Metal Wall Decor', 'Dimensions: * 39\"W x 14\"H / 100x35cm * 47\"W x 17\"H / 120x42cm * 59\"W x 21\"H / 150x53cm (2 Pieces) * 69\"W x 24\"H / 175x61cm (2 Pieces) * 79\"W x 27\"H / 200x70cm (2 Pieces). Metal Branch Wall Decor, Metal Wall Art Color: Matt textured static powder coating. Product stands 2 cm (0.78\") away from the wall. Easy to hang from backside hanger. You just need nail on the wall ', 'decoration,piece,metalwall,walldecor,arts,art,wallart', 2, 4, 'DEKADRON Metal Wall Decor.png', 'DEKADRON Metal Wall Decor2.png', 'DEKADRON Metal Wall Decor3.png', '88.00', '2023-06-17 09:34:28', 'true'),
(7, 'Highland Cow Framed Canvas Wall Art', 'WHIMSICAL ANIMAL WALL DECOR: Add some adorable animal art to your home with this Highland Cow art, designed by artist Amy Peterson. EASY TO HANG: Metal sawtooth hangers make hanging this canvas a breeze. LARGE SIZE CANVAS: The frame is lightweight polystyrene with display dimensions of 33 inches high by 23 inches across by 1.6 inches deep.ARTIST DESIGNED: Print \"B&W Highland Cow No. 1\" 2019 Amy Peterson ', 'decoration,piece,metalwall,walldecor,arts,art,wallart,cow,wallcow', 2, 4, 'Highland Cow Framed Canvas Wall Art.png', 'Highland Cow Framed Canvas Wall Art2.png', 'Highland Cow Framed Canvas Wall Art3.png', '69.99', '2023-06-17 09:36:18', 'true'),
(8, 'Metal Bear Family Art', 'Unique Design Metal Wall Decor, Metal Bear Family Art. Dimension: *24\"W x 10\"H / 60x26cm *30\"W x 13\"H / 75x33cm *40\"W x 17\"H / 100x44cm *47\"W x 20\"H / 117x51cm Color: Textured static powder coating. Product stands 2 cm (0.78\") away from the wall. Easy to hang from hidden hanger. You just need a nail on the wall. Expedited Delivery Worldwide.', 'decoration,piece,metalwall,walldecor,arts,art,wallart,metal,metaldecor,d,bearart,beartdecor', 2, 4, 'Metal Bear Family Art.png', 'Metal Bear Family Art2.png', 'Metal Bear Family Art3.png', '104.99', '2023-06-17 09:37:31', 'true'),
(9, 'Stupell Industries Wolf & Cub Woodland Forest Canvas', 'Stretched Canvas Sizes Include Standard: 20 x 1.5 x 16 Large: 30 x 1.5 x 20 X-Large: 40 x 1.5 x 30 Oversized: 48 x 1.5 x 36. Wall Art is Ready to Hang - No Installation or Hardware Needed. For Easy Set Up Lean or Layer Artwork on Shelf or Against Wall. Our stretched canvas is created with the highest standards. We use only the highest quality inks and canvas on our in house Mimaki printers, and then hand cut and stretch each piece over a 1.5 inch thick wooden frame for hanging. Made In USA. ', 'decoration,piece,metalwall,walldecor,arts,art,wallart,wolfart,beauttiful,wolf,cub', 2, 3, 'Stupell Industries Wolf & Cub Woodland Forest Canvas.png', 'Stupell Industries Wolf & Cub Woodland Forest Canvas2.png', 'Stupell Industries Wolf & Cub Woodland Forest Canvas3.png', '55.67', '2023-06-17 09:40:09', 'true'),
(10, 'Fashion Fidgets Dolls – Sensory Toy Doll for Kids', 'NEW FIDGET DOLLS IN A RAINBOW OF COLORS! Fidget in all the colors of the rainbow with Fashion Fidgets Series 2. Each doll is styled in one color from head to toe. 10+ WAYS TO FIDGET IN STYLE: Each Fashion Fidgets Series 2 doll comes with 10 ways to fidget from their cheeks to their hair to their fashions. Click, pop, spin and style your dolls in so many ways. Will you find all new fidget features like pop tube hair or monkey noodle pigtails? MIX AND MATCH SKIRTS: Each doll includes a poppin’ removable skirt that you can mix and match as you collect. The skirt also becomes a popper fidget on it', 'toys,dolls,kids,forkids,5year,skirtdoll,collection,girls,play', 3, 5, 'Fashion Fidgets Dolls – Sensory Toy Doll for Kids.png', 'Fashion Fidgets Dolls – Sensory Toy Doll for Kids2.png', 'Fashion Fidgets Dolls – Sensory Toy Doll for Kids3.png', '29.89', '2023-06-17 10:23:46', 'true'),
(11, 'Heroes of Goo Jit Zu Marvel Hero Pack', 'Marvel Superheroes and the Heroes of Goo Jit Zu have combined forces bringing the ultimate line-up of the stretchiest, gooiest and squishiest Superheroes ever! Thanos is super Gooey! Squeeze his gooey filled body and reveal his amazing purple metallic Goo filing swirl around his body! Thanos body stretches 3 times its size and returns back to its original shape! ', 'toys,dolls,kids,forkids,5year,skirtdoll,collection,girls,play,thanos,forboys,boys,kidsstrecthdoll,', 3, 5, 'Heroes of Goo Jit Zu Marvel Hero Pack.png', 'Heroes of Goo Jit Zu Marvel Hero Pack2.png', 'Heroes of Goo Jit Zu Marvel Hero Pack3.png', '65.56', '2023-06-17 10:25:01', 'true'),
(12, 'LeapPad Ultimate Ready for School Tablet', 'Includes $100 worth of school readiness apps, Plus apps featuring reading, music, problem solving and creativity for a total value of $195+ Kid-friendly tablet features a 7 Shatter-safe screen, Multi-touch capacitive screen and a built-in bumper for durability Access to a library of content including award-winning apps and cartridges featuring kids favorite characters ', 'toys,dolls,kids,forkids,5year,skirtdoll,collection,girls,play,thanos,forboys,boys,kids,strecthdoll,school,learning,toys', 3, 4, 'LeapPad Ultimate Ready for School Tablet.png', 'LeapPad Ultimate Ready for School Tablet2.png', 'LeapPad Ultimate Ready for School Tablet3.png', '74.99', '2023-06-17 10:26:05', 'true'),
(13, 'Philbin Classic Teddy Bear', 'PHILBIN TEDDY BEAR: Philbin is a classic teddy bear with cute paw pad accents, a large muzzle, and a curious expression. His big paws mean bigger bear hugs to share with friends! Available in beige and chocolate brown. Ships in a protective poly bag. SOFT & HUGGABLE: This adorable plush toy features surface-washable construction for easy cleaning and is made from a soft, premium material that meets our famous GUND quality standards. Appropriate for ages 1 and up. ', 'stuffed,toys,bear,teddybear,gift,kids,forkids,playable,play,premium', 3, 4, 'Philbin Classic Teddy Bear.png', 'Philbin Classic Teddy Bear2.png', 'Philbin Classic Teddy Bear3.png', '24.98', '2023-06-17 10:27:10', 'true'),
(14, 'Herbal Essences Hair Spray Gel for Curly Hair', '24-HOUR DEFINITION: Get a touchable, never-sticky hold for your style—it lasts all day long HOW IT WORKS: Spray on clean, damp hair, then air dry or dry hair on low heat THE SCENT EXPERIENCE: Enjoy the fresh lily fragrance spritz after spritz  PAIR IT UP: Try with our Herbal Essences Purifying Tea Tree Oil Shampoo and Conditioner for the complete experience. MINDFULLY CREATED: Certified PETA Cruelty-Free, paraben-free, mineral-oil free, dermatologist-tested, color-safe, dye-free, and pH-balanced ', 'beauty,products,beautyproducts,hairgel,gel,spray,hairspray,mineraloil,safe,dyefree', 5, 6, 'Herbal Essences Hair Spray Gel for Curly Hair.png', 'Herbal Essences Hair Spray Gel for Curly Hair2.png', 'Herbal Essences Hair Spray Gel for Curly Hair3.png', '65.40', '2023-06-17 10:29:19', 'true'),
(15, 'Hydrating Face Primer & Gel-Based  For Smoothing Skin', 'SKIN-SMOOTHING & GRIPPING PRIMER: Your makeup. Its not going anywhere. Prep skin with this gel-based face primer that has the power to grip your makeup while giving skin a natural finish for a smoother complexion. FOR ALL SKIN TYPES: Our Power Grip Primers formula goes on clear with a translucent finish for all skin types and skin tones. It is also non-comedogenic (does not clog pores!) MOISTURIZES WHILE PRIMING: Infused with powerhouse ingredients like Hyaluronic Acid to retain moisture for a plump complexion, this makeup primer moisturizes, preps, and smoothes to perfection, improving the lo', 'beauty,products,beautyproducts,hairgel,gel,spray,hairspray,mineraloil,safe,dyefree,cream,gel,moisture,skin', 5, 6, 'Power Grip Primer, Gel-Based & Hydrating Face Primer For Smoothing Skin & Gripping Makeup.png', 'Power Grip Primer, Gel-Based & Hydrating Face Primer For Smoothing Skin & Gripping Makeup2.png', 'Power Grip Primer, Gel-Based & Hydrating Face Primer For Smoothing Skin & Gripping Makeup3.png', '18.99', '2023-06-17 10:30:58', 'true'),
(16, 'Rich-Lathering Bourbon & Oak Body Wash', 'A sophisticated blend of distillers spice, fine bourbon and white oak Rich-lathering, all-season formula cleans and moisturizes without that sticky feeling Layered and complex scent evolves as you wash, revealing the richness and depth of the top, middle and base notes Long-lasting fragrance complements your other fragrances without overpowering. A scent youd expect to find in a high-end boutique without going to a high-end boutique  ', 'beauty,products,beautyproducts,hairgel,gel,spray,hairspray,mineraloil,safe,dyefree,cream,gel,moisture,skin,bodywash,fragnance', 5, 6, 'Rich-Lathering Bourbon & Oak Body Wash.png', 'Rich-Lathering Bourbon & Oak Body Wash2.png', 'Rich-Lathering Bourbon & Oak Body Wash3.png', '98.90', '2023-06-17 10:31:54', 'true'),
(17, 'Unbreakable Care Root Lift Hair Thickening Spray ', 'UNBREAKABLE CARE THICKENING SPRAY FOR THIN HAIR: Designed specially for fine and thin hair, this root thickening spray lifts roots, visibly thickens strands, and protects hair from heat and breakage Contains our exclusive strand-expanding technology that thickens each strand from root to tip to help create lasting volume and bounce without stiffness or residue Infused with a ProteinFusion blend with Biotin, Keratin, and Collagen Amino Acids, our formula strengthens and protects from within.', 'beauty,products,beautyproducts,hairgel,gel,spray,hairspray,mineraloil,safe,dyefree,cream,gel,moisture,skin,bodywash,fragnance,hairpsray', 5, 6, 'Unbreakable Care Root Lift Hair Thickening Spray .png', 'Unbreakable Care Root Lift Hair Thickening Spray 3.png', 'Unbreakable Care Root Lift Hair Thickening Spray 2.png', '76.00', '2023-06-17 10:32:36', 'true'),
(18, 'Garmin watch For Mens - Stylish Digital Watch', 'The Gramin Digital Watch for men is a stylish and versatile timepiece that seamlessly blends fashion and functionality. With its sleek design and high-resolution display, it provides clear visuals for easy timekeeping and access to various features. From tracking fitness goals to staying connected with smart notifications, this watch offers convenience and sophistication. Built to last, it withstands daily wear and allows for personalized style with interchangeable straps. Embrace the perfect fusion of technology and style with the Gramin Digital Watch, the ideal companion for the modern man.', 'watch,accessories,stylish,digital,watches,men,formen,digitalwatch,modern,new', 4, 1, 'Garmin watch.jpg', 'agramin watch 2.jpg', 'garmin watch 3.jpg', '154.99', '2023-06-17 10:45:18', 'true'),
(19, 'Movado Watch - Old Chain Watche with modern design', 'The Movado Chain Watch is a symbol of elegance and luxury. Its stainless steel chain bracelet and minimalist dial design embody timeless sophistication. With precise Swiss movement and a durable sapphire crystal, this watch is both functional and stylish, making it the perfect accessory for any occasion.', 'watch,accessories,stylish,watches,men,formen,modern,new,chainwatch,old,chain', 4, 2, 'movado watch.jpg', 'movado watch 1.jpg', 'movado watch 2.jpg', '89.99', '2023-06-17 10:47:32', 'true'),
(20, 'CRRJU Black Watch - New Modern Look Metal Chain Watch for both ', 'The CRRJU Black Watch is a modern and stylish timepiece suitable for both men and women. With its sleek black metal chain bracelet and minimalist black dial, it exudes confidence and sophistication. Featuring luminous hands and markers for easy readability, precise quartz movement, and durable construction, this watch is the perfect accessory to elevate any outfit with its bold and contemporary look.', 'watch,accessories,stylish,watches,men,formen,modern,new,chainwatch,old,chain,modernlook,black', 4, 1, 'CRRJU watch.jpg', 'CRRJU watch 3.jpg', 'CRRJU watch 2.jpg', '250.00', '2023-06-17 10:49:33', 'true'),
(21, 'Fossil Leather Watch - For Mens and Womens', 'The Fossil Leather Watch is a timeless accessory suitable for both men and women. With its genuine leather strap and minimalist dial, it exudes classic elegance. Whether worn with formal attire or casual outfits, this watch effortlessly combines style and functionality. With reliable quartz movement and durable construction, the Fossil Leather Watch is a must-have accessory that adds a touch of sophistication to any wardrobe.', 'watch,accessories,stylish,watches,men,formen,modern,new,old,chain,modernlook,black,leather,women', 4, 3, 'fossil watch.jpg', 'Fossil watch 3.jpg', 'fosssil watch 2.jpg', '74.50', '2023-06-17 10:51:14', 'true'),
(22, 'Timex Black Leather Watch For Mens', 'Introducing the Timex Black Leather Watch for men, a sleek and versatile timepiece that embodies both style and durability. With its genuine black leather strap, this watch exudes sophistication and versatility, making it suitable for any occasion. The black dial features bold numerals and luminous hands, ensuring easy readability in any lighting conditions. The reliable quartz movement guarantees accurate timekeeping, while the durable construction ensures long-lasting performance. Whether worn with formal attire or casual outfits, the Timex Black Leather Watch is the perfect accessory to ele', 'watch,accessories,stylish,watches,men,formen,modern,new,modernlook,black,leather,newstyle', 4, 3, 'timex watch.jpg', 'timex watch 3.jpg', 'timex watch 2.jpg', '104.86', '2023-06-17 10:52:59', 'true'),
(23, 'Skagen Brown Leather Watch', 'The Skagen Brown Leather Watch is a refined timepiece that effortlessly blends classic elegance with modern style. With its genuine brown leather strap and minimalist dial, it exudes sophistication. The reliable quartz movement ensures accurate timekeeping, making it a reliable companion for everyday wear. Add a touch of timeless charm to your ensemble with the Skagen Brown Leather Watch.', 'watch,accessories,stylish,watches,men,formen,modern,new,old,chain,modernlook,black,leather,women,leather watch', 4, 3, 'skagen watch.jpg', 'skagen watch 2.jpg', 'skagen watch 3.jpg', '45.76', '2023-06-17 10:57:27', 'true'),
(24, 'Vera Princess Perfume - Long Lasting Fragnance for Women', 'Vera Princess Perfume is a captivating fragrance for women, known for its long-lasting and alluring scent. With a delicate blend of floral and fruity notes, it exudes elegance and femininity. Experience the luxurious and enchanting fragrance of Vera Princess Perfume, leaving a lasting impression wherever you go.', 'perfume,accessories,fragnance,long lasting,for women,adimrable', 4, 1, 'vera princess.jpg', 'vera princess 3.jpg', 'vera princess 2.jpg', '420.34', '2023-06-17 10:59:54', 'true'),
(25, 'Arabian Antique Perfume - Premium Perfume For Women', 'Arabian Antique Perfume is a premium fragrance designed for women who seek a touch of timeless luxury. With its captivating blend of oriental and floral notes, this exquisite perfume offers an enchanting and sophisticated aroma. Crafted with meticulous attention to detail, Arabian Antique Perfume ensures a long-lasting and opulent experience. Indulge in the allure of Arabian traditions with this truly exceptional fragrance.', 'perfume,accessories,fragnance,long lasting,for women,adimrable,premium,anitque', 4, 4, 'arabian perfume 2.jpg', 'arabian perfume 3.jpg', 'arabian perfume.jpg', '175.86', '2023-06-17 11:01:36', 'true'),
(26, 'Red Velvet Long Lasting Fragnance perfume - Premium choice', 'Red Velvet Long Lasting Fragrance Perfume is a captivating scent that leaves a lasting impression. With its rich and indulgent aroma, it combines sensuality and sweetness. This long-lasting fragrance is the perfect choice for those who want to feel confident and alluring. Experience the irresistible allure of Red Velvet and indulge in a scent that lingers throughout the day.', 'perfume,accessories,fragnance,long lasting,for women,adimrable,premium,anitque,red,velvet', 4, 1, 'perfume 1.jpg', 'purfume2.jpg', 'purfume3.jpg', '177.32', '2023-06-17 11:04:18', 'true'),
(66, 'Oppo mobile', 'assads msandsan dm,adas sa ladkjslkasa dsadsadksajds dsa dsand kasjd', 'oppo', 1, 3, 'dog1.jpg', '2.jpg', '1.jpg', '28631', '2023-08-14 14:20:38', 'true'),
(67, 'Oppo mobile', 'assads msandsan dm,adas sa ladkjslkasa dsadsadksajds dsa dsand kasjd', 'oppo', 1, 3, 'dog1.jpg', '2.jpg', '1.jpg', '28631', '2023-08-14 14:28:00', 'true'),
(68, 'Oppo mobile', 'assads msandsan dm,adas sa ladkjslkasa dsadsadksajds dsa dsand kasjd', 'oppo', 1, 3, 'dog1.jpg', '2.jpg', '1.jpg', '28631', '2023-08-14 14:29:59', 'true'),
(69, 'Oppo mobile', 'assads msandsan dm,adas sa ladkjslkasa dsadsadksajds dsa dsand kasjd', 'oppo', 1, 3, 'dog1.jpg', '2.jpg', '1.jpg', '28631', '2023-08-14 14:40:21', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `gift_products`
--
ALTER TABLE `gift_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gift_products`
--
ALTER TABLE `gift_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
