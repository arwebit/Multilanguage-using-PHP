<?php
if ($_GET['language'] || $_GET['language'] == '') {
    $language = $_GET['language'];
    if ($language == 'en' || $language == '') {
        $language = 'en';
    }
}
$navigation = [
    'en' => ['Home', 'About', 'Contact us'],
    'bn' => ['হোম', 'আমাদের সম্বন্ধে', 'যোগাযোগ করুন'],
];

$content = [
    "bn"=>['<p>ArWeb - এই কোম্পানির মালিক, ভারতের একজন DIVYANG নাগরিক হওয়ার কারণে, তিনি এই দৃঢ় বিশ্বাস নিয়ে এই 
    কোম্পানিটি শুরু করেছিলেন যে তিনি অন্যান্য DIVYANG-ians বা সাধারণ নাগরিকদের পথ দেখাতে ও নেতৃত্ব দিতে পারেন। 
    তিনি বিশ্বাস করেন যে প্রত্যেকে তাদের নিজস্ব ব্যবসা শুরু করতে পারে, যদি তার নিজের উপর দৃঢ় বিশ্বাস থাকে। 
    ত্রিপুরার একটি ছোট শহর - আগরতলায় অবস্থিত, এটি অনলাইন / অফলাইন কোচিং এবং সফ্টওয়্যার পরিষেবাগুলির সাথে সম্পর্কিত 
    - মূলত ওয়েবসাইট বিকাশ করে।|</p>'],
     "en" =>[ "<p>The owner of this company - ArWeb, being a DIVYANG citizen of India, started this company with a 
     firm belief that he can lead and show the path to other DIVYANG-ians or normal citizens. He believes 
     that everyone can start their own business, if he / she has strong belief on himself / herself and 
     obviously on the almighty. Situated in a small city of Tripura - Agartala, it deals with online / offline 
     coaching and software services - basically website development.</p>"]
];

$about =[
    "bn"=>["<p>
    আমাদের দৃষ্টিভঙ্গি হল সবচেয়ে পরিশীলিত এবং পরিষ্কার পণ্য সহ ভারতে একটি আইটি পরিকাঠামো বিকাশ করা। আমাদের লক্ষ্য হল 
    আমাদের লক্ষ্য অর্জন করা, যা আমাদের দ্বারা নির্ধারিত হয়েছে, অত্যন্ত নিষ্ঠা এবং আনুগত্যের সাথে। আমাদের কৌশল এবং 
    পরিষেবাগুলি সর্বোচ্চ স্তরের দক্ষতার সাথে আমাদের ক্লায়েন্টদের সমস্যাগুলি মোকাবেলা এবং সমাধান করার জন্য সংযুক্ত।</p>"],
    "en"=>["<p>
    Our vision is to develop a IT infrastructure in India with most sophisticated and clean products. Our mission
     is to achieve our goals, which is set by us, with utmost dedication and loyalty. Our strategies and services
      are wired to address and solve the problems of our clients with the highest level of efficiency.</p>"]
];

$contact =[
    "bn"=>["<p>আমরা সক্রিয় এবং সর্বদা আমাদের ক্লায়েন্ট এবং দর্শকদের কথা শোনার চেষ্টা করি। যোগাযোগ করুন মুক্ত মনে দয়া
     করে। আমরা আপনাকে 48 ঘন্টার মধ্যে উত্তর দেব।</p>"],
    "en"=>["<p>
    We are active and always try to listen our clients and viewers. Please feel free to contact.
     We will reply you within 48 hours.</p>"]
];
?>
