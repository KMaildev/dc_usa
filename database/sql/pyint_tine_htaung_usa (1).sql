-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 27, 2023 at 06:55 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pyint_tine_htaung_usa`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `description_mm` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `description_mm`, `description_eng`, `images`, `created_at`, `updated_at`) VALUES
(1, 'Feb 2 ရက်နေ့ 🛫Air Cargo နဲ့ US 🇺🇸 ကိုသွားတော့မယ့်  ပို့ဆောင်ပစ္စည်းလေးတွေပါ♥️\r\n🇺🇸D.C.Pyit Tine Htaung USA အဖွဲ့သားတွေအနေနဲ့ customer များရဲ့ပို့ဆောင်ပစ္စည်းလေးတွေကို အခက်အခဲ အလေအလွင့်မရှိ ရောက်ရှိစေဖို့အတွက်ထုပ်ပိုးဝန်ဆောင်မှုကို ဒီလိုသေချာအချိန်ပေး လုပ်ဆောင်ပေးရပါတယ်ရှင်☺️ \r\n📣ထုပ်ပိုးဝန်ဆောင်မှုအတွက်ကိုလည်း free charges  ပါရှင်💕\r\n🌎ရေခြားမြေခြားပို့ဆောင်ရမှာဖြစ်လို့customerတွေအနေနဲ့ ဘယ်လိုထုပ်ပိုးပေးရမလဲ ဆိုတာ အချိန်ယူစဉ်းစားစရာမလိုအောင် ထုပ်ပိုးမှုကအစ  အစစအရာရာ တာဝန်ယူပို့ဆောင်ပေးနေတဲ့ 🇺🇸D.C.Pyit Tine Htaung USA ပါရှင်😍', 'Feb 2 ရက်နေ့ 🛫Air Cargo နဲ့ US 🇺🇸 ကိုသွားတော့မယ့်  ပို့ဆောင်ပစ္စည်းလေးတွေပါ♥️\r\n🇺🇸D.C.Pyit Tine Htaung USA အဖွဲ့သားတွေအနေနဲ့ customer များရဲ့ပို့ဆောင်ပစ္စည်းလေးတွေကို အခက်အခဲ အလေအလွင့်မရှိ ရောက်ရှိစေဖို့အတွက်ထုပ်ပိုးဝန်ဆောင်မှုကို ဒီလိုသေချာအချိန်ပေး လုပ်ဆောင်ပေးရပါတယ်ရှင်☺️ \r\n📣ထုပ်ပိုးဝန်ဆောင်မှုအတွက်ကိုလည်း free charges  ပါရှင်💕\r\n🌎ရေခြားမြေခြားပို့ဆောင်ရမှာဖြစ်လို့customerတွေအနေနဲ့ ဘယ်လိုထုပ်ပိုးပေးရမလဲ ဆိုတာ အချိန်ယူစဉ်းစားစရာမလိုအောင် ထုပ်ပိုးမှုကအစ  အစစအရာရာ တာဝန်ယူပို့ဆောင်ပေးနေတဲ့ 🇺🇸D.C.Pyit Tine Htaung USA ပါရှင်😍', 'https://scontent.frgn4-1.fna.fbcdn.net/v/t39.30808-6/334466333_1373793033377838_2768275026740701542_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=mKg822_0RxMAX_9IIRA&_nc_ht=scontent.frgn4-1.fna&oh=00_AfCbA6TPHUORmrpncuv3CcO4rdkLsncKoGE18TIx6A28lQ&oe=6425EA31,https://scontent.frgn4-1.fna.fbcdn.net/v/t39.30808-6/334262407_592505726064226_4626521804137874597_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=mpNes6Zjlh0AX_PtZ_7&_nc_ht=scontent.frgn4-1.fna&oh=00_AfBc3Z_MjbXRHLP5P5H-uKJZCi_breFZ50RFKbu6yHbxow&oe=6425DEE6,https://scontent.frgn4-1.fna.fbcdn.net/v/t39.30808-6/334222878_582684307077877_1772988418108412882_n.jpg?stp=cp6_dst-jpg&_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=BE55yLDOmUoAX-zmgfC&_nc_ht=scontent.frgn4-1.fna&oh=00_AfD6kT9FdYcR79W-AM8vWYY7y68_bpD_GSGxgbbAGvQfZA&oe=6426AD34,https://scontent.frgn4-1.fna.fbcdn.net/v/t39.30808-6/334473633_426831389640891_3605752019435320387_n.jpg?stp=cp6_dst-jpg&_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=MpJe9_BwpCcAX-ISbN6&_nc_oc=AQmbsTIAtlN0gpt_jDIKn9fXZ0dKstFYFOGL7q86Q2V6RsTUQnmAezCHT_E3WiwivYk&_nc_ht=scontent.frgn4-1.fna&oh=00_AfBNPS94HjzmsWO7qCc89MBQ6vNBkLVdscxO1-GjLMNWOg&oe=6426F422,https://scontent.frgn4-1.fna.fbcdn.net/v/t39.30808-6/334581119_949011939796806_3593645098774024510_n.jpg?stp=cp6_dst-jpg&_nc_cat=103&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=pVG1EfWYxysAX-qw_eo&_nc_ht=scontent.frgn4-1.fna&oh=00_AfClYwNnA1OLQnxwDUCSSuCFFzSrU5uX--BSNMq8DF9WXg&oe=6425F70D,https://scontent.frgn4-1.fna.fbcdn.net/v/t39.30808-6/334260882_620854946519821_1031907175568100862_n.jpg?stp=cp6_dst-jpg&_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=UrLO2aCzXg0AX8-2fAh&_nc_ht=scontent.frgn4-1.fna&oh=00_AfDp_0ReWN-w_dLVpODr6DGeIOhNevZdtZk71NYEjFQOgg&oe=6426FAF7', NULL, NULL),
(2, 'Feb 2 ရက်နေ့ 🛫Air Cargo နဲ့ US 🇺🇸 ကိုသွားတော့မယ့်  ပို့ဆောင်ပစ္စည်းလေးတွေပါ♥️\r\n🇺🇸D.C.Pyit Tine Htaung USA အဖွဲ့သားတွေအနေနဲ့ customer များရဲ့ပို့ဆောင်ပစ္စည်းလေးတွေကို အခက်အခဲ အလေအလွင့်မရှိ ရောက်ရှိစေဖို့အတွက်ထုပ်ပိုးဝန်ဆောင်မှုကို ဒီလိုသေချာအချိန်ပေး လုပ်ဆောင်ပေးရပါတယ်ရှင်☺️ \r\n📣ထုပ်ပိုးဝန်ဆောင်မှုအတွက်ကိုလည်း free charges  ပါရှင်💕\r\n🌎ရေခြားမြေခြားပို့ဆောင်ရမှာဖြစ်လို့customerတွေအနေနဲ့ ဘယ်လိုထုပ်ပိုးပေးရမလဲ ဆိုတာ အချိန်ယူစဉ်းစားစရာမလိုအောင် ထုပ်ပိုးမှုကအစ  အစစအရာရာ တာဝန်ယူပို့ဆောင်ပေးနေတဲ့ 🇺🇸D.C.Pyit Tine Htaung USA ပါရှင်😍', 'Feb 2 ရက်နေ့ 🛫Air Cargo နဲ့ US 🇺🇸 ကိုသွားတော့မယ့်  ပို့ဆောင်ပစ္စည်းလေးတွေပါ♥️\r\n🇺🇸D.C.Pyit Tine Htaung USA အဖွဲ့သားတွေအနေနဲ့ customer များရဲ့ပို့ဆောင်ပစ္စည်းလေးတွေကို အခက်အခဲ အလေအလွင့်မရှိ ရောက်ရှိစေဖို့အတွက်ထုပ်ပိုးဝန်ဆောင်မှုကို ဒီလိုသေချာအချိန်ပေး လုပ်ဆောင်ပေးရပါတယ်ရှင်☺️ \r\n📣ထုပ်ပိုးဝန်ဆောင်မှုအတွက်ကိုလည်း free charges  ပါရှင်💕\r\n🌎ရေခြားမြေခြားပို့ဆောင်ရမှာဖြစ်လို့customerတွေအနေနဲ့ ဘယ်လိုထုပ်ပိုးပေးရမလဲ ဆိုတာ အချိန်ယူစဉ်းစားစရာမလိုအောင် ထုပ်ပိုးမှုကအစ  အစစအရာရာ တာဝန်ယူပို့ဆောင်ပေးနေတဲ့ 🇺🇸D.C.Pyit Tine Htaung USA ပါရှင်😍', 'https://scontent.frgn4-1.fna.fbcdn.net/v/t39.30808-6/334466333_1373793033377838_2768275026740701542_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=mKg822_0RxMAX_9IIRA&_nc_ht=scontent.frgn4-1.fna&oh=00_AfCbA6TPHUORmrpncuv3CcO4rdkLsncKoGE18TIx6A28lQ&oe=6425EA31,https://scontent.frgn4-1.fna.fbcdn.net/v/t39.30808-6/334262407_592505726064226_4626521804137874597_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=mpNes6Zjlh0AX_PtZ_7&_nc_ht=scontent.frgn4-1.fna&oh=00_AfBc3Z_MjbXRHLP5P5H-uKJZCi_breFZ50RFKbu6yHbxow&oe=6425DEE6,https://scontent.frgn4-1.fna.fbcdn.net/v/t39.30808-6/334222878_582684307077877_1772988418108412882_n.jpg?stp=cp6_dst-jpg&_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=BE55yLDOmUoAX-zmgfC&_nc_ht=scontent.frgn4-1.fna&oh=00_AfD6kT9FdYcR79W-AM8vWYY7y68_bpD_GSGxgbbAGvQfZA&oe=6426AD34,https://scontent.frgn4-1.fna.fbcdn.net/v/t39.30808-6/334473633_426831389640891_3605752019435320387_n.jpg?stp=cp6_dst-jpg&_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=MpJe9_BwpCcAX-ISbN6&_nc_oc=AQmbsTIAtlN0gpt_jDIKn9fXZ0dKstFYFOGL7q86Q2V6RsTUQnmAezCHT_E3WiwivYk&_nc_ht=scontent.frgn4-1.fna&oh=00_AfBNPS94HjzmsWO7qCc89MBQ6vNBkLVdscxO1-GjLMNWOg&oe=6426F422,https://scontent.frgn4-1.fna.fbcdn.net/v/t39.30808-6/334581119_949011939796806_3593645098774024510_n.jpg?stp=cp6_dst-jpg&_nc_cat=103&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=pVG1EfWYxysAX-qw_eo&_nc_ht=scontent.frgn4-1.fna&oh=00_AfClYwNnA1OLQnxwDUCSSuCFFzSrU5uX--BSNMq8DF9WXg&oe=6425F70D,https://scontent.frgn4-1.fna.fbcdn.net/v/t39.30808-6/334260882_620854946519821_1031907175568100862_n.jpg?stp=cp6_dst-jpg&_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=UrLO2aCzXg0AX8-2fAh&_nc_ht=scontent.frgn4-1.fna&oh=00_AfDp_0ReWN-w_dLVpODr6DGeIOhNevZdtZk71NYEjFQOgg&oe=6426FAF7', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_04_124555_create_contacts_table', 1),
(6, '2023_03_04_133135_create_news_table', 2),
(7, '2023_03_27_142348_create_activities_table', 3),
(8, '2023_03_27_145440_create_teams_table', 4),
(9, '2023_03_27_152332_add_field_mm_to_news_table', 5),
(10, '2023_03_27_152753_create_services_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title_mm` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_mm` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `upload_date`, `photo`, `created_at`, `updated_at`, `title_mm`, `description_mm`) VALUES
(1, 'Fighting on Asia Highway greatly reduces Thai-Myanmar border trade', 'The Asia Highway runs from Myawaddy on the border to Kawkareik and then on into Myanmar. All goods that have crossed from Mae Sot in Thailand to Myawaddy have to go through Kawkareik before they can be distributed elsewhere in Myanmar.\r\n\r\nSince 16 December fighting between Myanmar junta troops and the Karen National Liberation Army (KNLA) has intensified along the Asia Highway and in Kawkareik Township.\r\n\r\nThe junta forces have used air strikes, rocket launchers and other heavy weapons. These have destroyed sections of the road and two bridges have also been destroyed by mines.\r\n\r\nA border trader said that since fighting broke out trucks can no longer use this section of the Asia Highway and as a result the Thai-Myanmar border trade has almost stopped.\r\n\r\nAlso, because of the fighting, trucks carrying vegetables have been delayed for so long their vegetables started to spoil and go rotten, causing traders to lose large sums of money. Some traders cut their losses and sold their vegetables at greatly reduced price in Kawkareik and nearby Kyondoe.\r\n\r\nCurrently, there are still hundreds of trucks stuck on the Asia Highway between Myawaddy and Kawkareik, but some small vehicles and motorcycles are still managing to get through by using a minor road that goes through Htokawkoe.\r\n\r\nBorder traders said that if the fighting continues along the Asia Highway border trade with Mae Sot in Thailand will completely stop and commodity prices in Myanmar will go up.\r\n\r\nThe goods that Myanmar imports the most from Thailand are foodstuffs, textiles, fabrics, cosmetics, machinery and construction materials. Myanmar mainly exports corn, broken rice and fishery products to Thailand.', '1.1.2023', 'https://www.dcpth.us/storage/img/blog/posts/ZK3gh186lPnLwKjTfoPb0kSOLNTatxPEafMgtzXY.jpg', NULL, NULL, 'အာရှလမ်းမကြီးပေါ်တွင် တိုက်ပွဲများကြောင့် ထိုင်း-မြန်မာ နယ်စပ်ကုန်သွယ်မှုကို များစွာ လျော့နည်းစေသည်။\n', 'အာရှအဝေးပြေးလမ်းမကြီးသည် မြဝတီနယ်စပ်မှ ကော့ကရိတ်အထိ သွယ်တန်းပြီး မြန်မာနိုင်ငံသို့ ဆက်လက်ရောက်ရှိမည်ဖြစ်သည်။ ထိုင်းနိုင်ငံ မဲဆောက်ကနေ မြဝတီကို ဖြတ်ကျော်လာတဲ့ ကုန်စည်အားလုံးကို မြန်မာဘက်က တခြားနေရာကို မဖြန့်ဝေခင် ကော့ကရိတ်ကို ဖြတ်သွားရမှာ ဖြစ်ပါတယ်။ မြန်မာ့တပ်မတော်နှင့် ကရင်အမျိုးသားလွတ်မြောက်ရေးတပ်မတော် (KNLA) တို့အကြား ဒီဇင်ဘာ ၁၆ ရက်မှစတင်၍ အာရှလမ်းမကြီးတစ်လျှောက်နှင့် ကော့ကရိတ်မြို့နယ်တို့တွင် တိုက်ပွဲများ ပိုမိုပြင်းထန်လာခဲ့သည်။ စစ်အစိုးရတပ်များသည် လေကြောင်းတိုက်ခိုက်မှုများ၊ ဒုံးပစ်လောင်ချာများနှင့် အခြားလက်နက်ကြီးများကို အသုံးပြုခဲ့သည်။ ယင်းလမ်းပိုင်းများ ပျက်စီးခဲ့ပြီး တံတားနှစ်စင်းကိုလည်း မိုင်းခွဲဖျက်ဆီးခဲ့သည်။ တိုက်ပွဲများဖြစ်ပွားပြီးနောက်ပိုင်း ကုန်တင်ကားများသည် အာရှလမ်းမကြီးကို အသုံးမပြုနိုင်တော့သဖြင့် ထိုင်း-မြန်မာနယ်စပ် ကုန်သွယ်မှုမှာ ရပ်တန့်လုနီးပါးဖြစ်နေကြောင်း နယ်စပ်ကုန်သည်တဦးက ပြောသည်။ ထို့အပြင် တိုက်ပွဲများကြောင့် ဟင်းသီးဟင်းရွက်များ သယ်ဆောင်လာသည့် ကုန်တင်ကားများသည် အချိန်အတော်ကြာ နှောင့်နှေးခဲ့ရပြီး ၎င်းတို့၏ ဟင်းသီးဟင်းရွက်များ ပုပ်ပွကာ ပုပ်ပွသွားကာ ကုန်သည်များ ငွေအမြောက်အမြား ဆုံးရှုံးခဲ့ရသည်။ အချို့ကုန်သည်များသည် အရှုံးပေါ်ပြီး ကော့ကရိတ်နှင့် အနီးနားရှိ ကျုံဒိုးတို့တွင် ဟင်းသီးဟင်းရွက်များကို လျှော့ဈေးဖြင့် ရောင်းချကြသည်။ လက်ရှိတွင် မြဝတီနှင့် ကော့ကရိတ်ကြားရှိ အာရှလမ်းမကြီးပေါ်တွင် ကုန်တင်ယာဉ် ရာနှင့်ချီ၍ ပိတ်မိနေသေးသော်လည်း အချို့သော ယာဉ်ငယ်များနှင့် ဆိုင်ကယ်များသည် ထူးကော့ကော့ကိုဖြတ်သွားသော လမ်းငယ်ကို အသုံးပြု၍ ဖြတ်သန်းသွားလာနေကြဆဲဖြစ်သည်။ ထိုင်း-မဲဆောက်-အာရှလမ်းမကြီးတစ်လျှောက် တိုက်ပွဲများဆက်လက်ဖြစ်ပွားနေပါက နယ်စပ်ကုန် သွယ်မှု လုံးဝရပ်တန့်သွားမည်ဖြစ်ပြီး မြန်မာနိုင်ငံတွင် ကုန်ဈေးနှုန်းများ တက်သွားမည်ဖြစ်ကြောင်း နယ်စပ်ကုန်သည်များက ပြောသည်။ ထိုင်းနိုင်ငံမှ အများဆုံးတင်သွင်းသည့် ကုန်ပစ္စည်းများမှာ စားသောက်ကုန်၊ အထည်အလိပ်၊ အထည်၊ အလှကုန်၊ စက်ယန္တရားများနှင့် ဆောက်လုပ်ရေးသုံးပစ္စည်းများဖြစ်သည်။ မြန်မာနိုင်ငံသည် ထိုင်းနိုင်ငံသို့ ပြောင်း၊ ဆန်ကွဲနှင့် ရေထွက်ကုန်ပစ္စည်းများကို အဓိက တင်ပို့လျက်ရှိသည်။\n'),
(2, 'FedEx, other shippers warn extreme weather will delay some U.S. holiday gift deliveries', 'FedEx (FDX.N), United Parcel Service (UPS.N), the U.S. Postal Service and Amazon.com (AMZN.O) alerted customers that severe weather was disrupting key operations in Tennessee, Indiana, Kentucky, Illinois, the Dakotas and other areas hard-hit by strong winds, bitter cold and blizzards.\n\nAir network shutdowns, road closures and other weather-related disruptions could affect 10-15% of the roughly 75 million daily packages scheduled for delivery on Friday and Saturday, Satish Jindel, founder of consultancy ShipMatrix, told Reuters.\n\n\"This is a repeat of what happened in the final two days of Christmas week in 2013,\" he said.\n\nUPS and FedEx told Reuters they have contingency plans in place if severe weather shuts or idles cargo planes and delivery trucks.\n\nThis year\'s holiday package shipment volumes are down from the record highs set earlier in the COVID-19 pandemic as consumers shift spending back to travel and eating out and as higher food and rental costs bite into disposable income.\n\nAs a result, shipping companies have ample capacity to handle this year\'s holiday delivery surge, Jindel said.\n\nReporting by Aishwarya Nair in Bengaluru; additional reporting by Lisa Baertlein in Los Angeles; editing by Shailesh Kuber and Sandra Maler', '1.1.2023', 'https://www.dcpth.us/storage/img/blog/posts/U0xrtJoA2BelPLKeo4l4SG95iRyv0zNro1IWPtTs.webp', NULL, NULL, 'FedEx၊ အခြားသော ပို့ဆောင်သူများသည် ပြင်းထန်သော ရာသီဥတုကြောင့် အချို့သော US အားလပ်ရက် လက်ဆောင်များ ပေးပို့ခြင်းကို နှောင့်နှေးမည် ဖြစ်ကြောင်း သတိပေးပါသည်။\n', 'FedEx (FDX.N)၊ United Parcel Service (UPS.N)၊ U.S. Postal Service နှင့် Amazon.com (AMZN.O) တို့သည် Tennessee၊ Indiana၊ Kentucky၊ Illinois၊ Dakotas နှင့် Dakotas ရှိ အဓိကလုပ်ငန်းဆောင်တာများကို အနှောင့်အယှက်ဖြစ်စေကြောင်း သုံးစွဲသူများအား သတိပေးခဲ့သည်။ တခြားဒေသတွေမှာ လေပြင်းတိုက်ခတ်မှုတွေ၊ ခါးသီးတဲ့ အအေးဒဏ်နဲ့ နှင်းမုန်တိုင်းတွေ ကျရောက်နိုင်ပါတယ်။\n');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_title_mm` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_description_mm` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_description_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title_mm`, `service_title_eng`, `service_description_mm`, `service_description_eng`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'နိုင်ငံတကာ ကုန်စည်ပို့ဆောင်ရေး ဝန်ဆောင်မှု\r\n', 'INTERNATIONAL CARGO SERVICE', 'D.C Pyit Tine Htaung ၏ Cargo Service သည် အာရှနှင့် အမေရိကန်ရှိ သုံးစွဲသူများအား ယုံကြည်စိတ်ချရသော ထောက်ပံ့ပို့ဆောင်ရေး ပံ့ပိုးမှုဖြင့် ပံ့ပိုးပေးပါသည်။ ကျွန်ုပ်တို့၏ဝန်ဆောင်မှုတွင် တံခါးမှတစ်အိမ်သို့ နေ့ချင်းပြန်ပို့ဆောင်ခြင်းအပြင် ကျွန်ုပ်တို့၏ရုံးသို့ ပစ္စည်းများပေးပို့စဉ် United States ရှိ အချို့သောနေရာများတွင် ဝယ်ယူသူများအတွက် အခမဲ့ သင်္ဘောတံဆိပ်ပါရှိပါသည်။', 'D.C Pyit Tine Htaung’s Cargo Service provides customers in Asia and the United States with reliable logistics support. Our service includes door-to-door express delivery as well as free shipping label for customers in certain locations within the United States while sending items to our office.', 'https://dcpyittinehtaungusa.com/data/s1.jpeg', NULL, NULL),
(2, 'အမေရိကန်နှင့် မြန်မာနိုင်ငံတို့မှ ကုန်ပစ္စည်းများ ဝယ်ယူခြင်း။', 'Buying products from the United States and Myanmar.', 'D.C Pyit Tine Htaung ၏ Shopper Service သည် သုံးစွဲသူများအား Amazon၊ Walmart၊ Costco၊ Macy\'s နှင့် အခြားသော ပရီမီယံဆိုင်များ ကဲ့သို့သော အွန်လိုင်းနှင့် စတိုးဆိုင်များတွင် ရွေးချယ်ခွင့်ကို ပေးဆောင်သည်။ ဝဘ်လင့်ခ်ကဲ့သို့သော ပစ္စည်းများဝယ်ယူခြင်းဆိုင်ရာ အချက်အလက်များကို ဝယ်ယူသူများတွင် တာဝန်ရှိပြီး 10 ရာခိုင်နှုန်း အပိုကြေးဖြင့် ဝယ်ယူသည့်နေ့တွင် ပေးချေမှုအပြည့်ပေးချေရန် တာဝန်ရှိပါသည်။', 'D.C Pyit Tine Htaung’s Shopper Service provides customers with access to their choice of online and in-stores such as Amazon, Walmart, Costco, Macy’s and many other premium shops. Customers are responsible for providing information about purchasing items such as web link and full payment is due on the day of the purchase with a 10 percent surcharge.', 'https://dcpyittinehtaungusa.com/data/s3.jpeg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `position`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'U Mg Mg', 'MD', 'https://gcavocats.ca/wp-content/uploads/2018/09/man-avatar-icon-flat-vector-19152370-1.jpg', NULL, NULL),
(2, 'U Aung Aung', 'Manager', 'https://cdn-icons-png.flaticon.com/512/5556/5556468.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
