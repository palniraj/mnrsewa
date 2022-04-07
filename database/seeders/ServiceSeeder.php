<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('services')->count() == 0) {

            DB::table('services')->insert([
                [
                    'id' => 1,
                    'user_id' => 6,
                    'name' => 'Water Motor installation',
                    'servicecategory_id' => 9,
                    'price_badge' => 'PER INSTALLATION',
                    'price' => 1500,
                    'description' => 'In case you want an expert electrician to install a water pumping motor, I will be there for you. For the mentioned price, I will provide you home service to install the water pumping motor. Please remember me for a remarkable electrician service in MNR between 8 am to 7 pm.',
                    'image' => 'service1.jpg',
                    'created_at' => now()
,                ],
                [
                    'id' => 2,
                    'user_id' => 6,
                    'name' => 'Electrician Hire for House Wiring',
                    'servicecategory_id' => 9,
                    'price_badge' => 'PER SQUARE FEET',
                    'price' => 35,
                    'description' => 'Do you need to install new house wiring or repair old ones? This service is perfect for you if you want safe installation of house wiring for your house or office. The price is mentioned in per square foot basis which will help you make a total estimation. The price is only my service charge and not for the product needed for the job. I provide my service all over Mahendranagar so in case you need a professional electrician, please book my service from 10 am to 6 pm.',
                    'image' => 'service2.jpg',
                    'created_at' => now()
,                ],
                [
                    'id' => 3,
                    'user_id' => 6,
                    'name' => 'Wood Carpentry Work',
                    'servicecategory_id' => 11,
                    'price_badge' => 'PER SQUARE FEET',
                    'price' => 900,
                    'description' => 'In case you are looking for an Expert Carpenter in Lalitpur who can provide proper Wood Carpentry Work to all the clients on time, book my proper service. I am a Proficient Carpenter who can work on any kind of wood to transform it into furniture of proper shape and size to satisfy the client’s requirements.',
                    'image' => 'service3.jpg',
                    'created_at' => now()
,                ],
                [
                    'id' => 4,
                    'user_id' => 6,
                    'name' => 'Kitchen Fitting Service',
                    'servicecategory_id' => 10,
                    'price_badge' => 'PER FITTING',
                    'price' => 16000,
                    'description' => 'It is not an easy task to provide a quick fix as well as quality plumbing solutions as a Plumber in Mahendranagar. Especially the pipes and fixtures of most of the buildings in Mahendranagar are old and therefore complicated to work on. However, as one of the top Plumber in Mahendranagar, I can provide prompt solutions on several plumbing problems ranging from Bathroom/Kitchen Fitting, Solar Fitting, Boring, and water faucet as per the specification of the clients.',
                    'image' => 'service4.jpg',
                    'created_at' => now()
,                ],
                [
                    'id' => 5,
                    'user_id' => 5,
                    'name' => 'Counseling Service',
                    'servicecategory_id' => 14,
                    'price_badge' => 'PER HOUR',
                    'price' => 1000,
                    'description' => 'Are you looking for the best and a professional Psychologist who can provide Counseling service? We have been offering our service since 2077 B.S. For the best and a professional counseling service, you need an experienced psychologist. We provide our service as per the customer’s requirement and help them to solve their problems. ',
                    'image' => 'service5.jpg',
                    'created_at' => now()
,                ],
                [
                    'id' => 6,
                    'user_id' => 5,
                    'name' => 'Vaccination Service',
                    'servicecategory_id' => 14,
                    'price_badge' => 'PER SERVICE',
                    'price' => 300,
                    'description' => 'An injection is a method of delivering a sterile liquid form of medication into tissues under the skin of the body, often by the use of a pointed, hollow needle or tube. Most people who have access to healthcare have had injections at some time in their life, whether for childhood immunizations or medical treatment.',
                    'image' => 'service6.jpg',
                    'created_at' => now()
,                ],
                [
                    'id' => 7,
                    'user_id' => 5,
                    'name' => 'PCR Testing Home Service',
                    'servicecategory_id' => 14,
                    'price_badge' => 'PER TEST',
                    'price' => 300,
                    'description' => 'Are you looking for the best PCR Service in your house? Polymerase Chain Reaction (PCR) is the process of detective work in genetic material from a specific organism, such as a virus. It helps in detecting the presence of viruses. We offer cost-effective laboratory tests by utilizing the best and advanced technologies with highly experienced laboratory scientists.  So, if you are looking for the best PCR Test Service in Mahendranagar, we are available.',
                    'image' => 'service7.jpg',
                    'created_at' => now()
,                ],
                [
                    'id' => 8,
                    'user_id' => 3,
                    'name' => 'Website development',
                    'servicecategory_id' => 19,
                    'price_badge' => 'STARTING FROM',
                    'price' => 10000,
                    'description' => 'This is the offer provided to you all for limited time period. Make your business online visible.',
                    'image' => 'service8.png',
                    'created_at' => now()
,                ],
                [
                    'id' => 9,
                    'user_id' => 3,
                    'name' => 'Software development',
                    'servicecategory_id' => 19,
                    'price_badge' => 'STARTING FROM',
                    'price' => 20000,
                    'description' => 'We provided to you all your custom software for your bussiness as your required. Make your business digital and production well.',
                    'image' => 'service9.png',
                    'created_at' => now()
,                ],
                [
                    'id' => 10,
                    'user_id' => 3,
                    'name' => 'Domain Registration',
                    'servicecategory_id' => 21,
                    'price_badge' => 'STARTING FROM',
                    'price' => 1000,
                    'description' => 'We provided to you all your custom software for your bussiness as your required. Make your business digital and production well.',
                    'image' => 'service10.jpg',
                    'created_at' => now(),
                ],
                [
                    'id' => 11,
                    'user_id' => 3,
                    'name' => 'Web Hosting',
                    'servicecategory_id' => 21,
                    'price_badge' => 'STARTING FROM',
                    'price' => 3000,
                    'description' => 'We have served more than +200 satisfied clients to this date. We offer Proper Web Hosting Services in Mahendranagar and globally based on the client’s requirements(AWS, Digital Ocean, Azure, Shared Hosting, Reseller...). We deliver the services on time. If you are looking for Professional Web Hosting Service Providers, feel free to contact us. We are 24/7 available at your service.',
                    'image' => 'service11.png',
                    'created_at' => now(),
                ],
                [
                    'id' => 12,
                    'user_id' => 4,
                    'name' => 'Web Hosting',
                    'servicecategory_id' => 21,
                    'price_badge' => 'STARTING FROM',
                    'price' => 5000,
                    'description' => 'We have served more than +200 satisfied clients to this date. We offer Proper Web Hosting Services in Mahendranagar and globally based on the client’s requirements(AWS, Digital Ocean, Azure, Shared Hosting, Reseller...). We deliver the services on time. If you are looking for Professional Web Hosting Service Providers, feel free to contact us. We are 24/7 available at your service.',
                    'image' => 'service11.png',
                    'created_at' => now(),
                ],
                [
                    'id' => 13,
                    'user_id' => 4,
                    'name' => 'Software development',
                    'servicecategory_id' => 19,
                    'price_badge' => 'STARTING FROM',
                    'price' => 25000,
                    'description' => 'We provided to you all your custom software for your bussiness as your required. Make your business digital and production well.',
                    'image' => 'service9.png',
                    'created_at' => now()
,                ],
                [
                    'id' => 14,
                    'user_id' => 4,
                    'name' => 'Social Media Boosting',
                    'servicecategory_id' => 19,
                    'price_badge' => 'PER MONTH START',
                    'price' => 4000,
                    'description' => 'We are a group of Experienced Digital Marketers in Mahendranagar with more than 8 years of experience in this business. We have served more than +10000 satisfied clients to this date. We offer the Best Social Media Posting Services in Mahendranagar based on the client’s requirements. We deliver the services on time. If you are looking for a Professional Digital Marketer in Mahendranagar, feel free to contact us. We are 24/7 available at your service.',
                    'image' => 'service14.jpg',
                    'created_at' => now(),
                ],
                [
                    'id' => 15,
                    'user_id' => 4,
                    'name' => 'Digital Marketing ',
                    'servicecategory_id' => 19,
                    'price_badge' => 'PER MONTH START',
                    'price' => 8000,
                    'description' => 'We are a group of Experienced Digital Marketers in Mahendranagar with more than 8 years of experience in this business. We have served more than +10000 satisfied clients to this date. We offer the Best Digital Marketing SEO Services in Mahendranagar based on the client’s requirements. We deliver the services on time. If you are looking for a Professional Digital Marketer in Mahendranagar, feel free to contact us. We are 24/7 available at your service.',
                    'image' => 'service15.jpg',
                    'created_at' => now(),
                ],
                [
                    'id' => 16,
                    'user_id' => 4,
                    'name' => 'Graphic Design',
                    'servicecategory_id' => 19,
                    'price_badge' => 'PER DESIGN START',
                    'price' => 1000,
                    'description' => 'Do you need the best and professional Logo for your company? As we all know that the Logo, graphics design, web design is a symbol that is used for pinpointing a company. A well-designed logo of a brand builds trust and attracts customers to stick around. The best logo supports getting first impression, builds company personality, increases branding, and many more. ',
                    'image' => 'service16.jpg',
                    'created_at' => now(),
                ],


            ]);
        } else {
            echo "\e[31mTable is not empty, therefore NOT ";
        }
    }
}
