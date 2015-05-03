<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Category;
use App\Post;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
		$this->call('CategoryTableSeeder');
		$this->call('PostTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		User::create([
			'name' => 'Admin',
			'email' => 'admin@bkitsec.com',
			'password' => Hash::make('123456789'),
		]);
	}
}

class CategoryTableSeeder extends Seeder {

	public function run()
	{
		DB::table('categories')->delete();

		Category::create([
			'name' => 'Uncategorized',
			'slug' => 'uncategorized',
		]);
	}
}

class PostTableSeeder extends Seeder {

	public function run()
	{
		DB::table('posts')->delete();

		Post::create([
			'title' => 'I\'m bringing free internet to Europe',
			'short_intro' => '',
			'content' => '',
			'featured_img' => 'http://resources0.news.com.au/images/2015/05/03/1227332/656764-a9041cce-efaf-11e4-8640-5412dd2d4115.jpg',
			'user_id' => 1,
			'category_id' => 1,
			'slug' => 'google-creative-lab-director-tom-uglow-what-i-learned-working-at-google',
		]);

		Post::create([
			'title' => 'Google Creative Lab director Tom Uglow: ‘What I learned working at Google’',
			'short_intro' => '',
			'content' => '',
			'featured_img' => 'http://i.telegraph.co.uk/multimedia/archive/03267/zuck_3267710b.jpg',
			'user_id' => 1,
			'category_id' => 1,
			'slug' => 'Facebook-founder-Mark-Zuckerberg-Im-bringing-free-internet-to-Europe',
		]);

		Post::create([
			'title' => 'Local vets look back on the Vietnam War',
			'short_intro' => '',
			'content' => '',
			'featured_img' => 'http://www.hesperiastar.com/storyimage/VV/20150429/NEWS/150429685/AR/0/AR-150429685.jpg&MaxW=650',
			'user_id' => 1,
			'category_id' => 1,
			'slug' => 'Local-vets-look-back-on-the-Vietnam-War',
		]);

		Post::create([
			'title' => 'US \'will not fund research for modifying embryo DNA\'',
			'short_intro' => '',
			'content' => '',
			'featured_img' => 'http://ichef.bbci.co.uk/news/660/media/images/82673000/jpg/_82673722_104141569.jpg',
			'user_id' => 1,
			'category_id' => 1,
			'slug' => 'US-will-not-fund-research-for-modifying-embryo-DNA',
		]);

		Post::create([
			'title' => 'Anger as Facebook bug blocked pictures',
			'short_intro' => '',
			'content' => '',
			'featured_img' => 'http://ichef.bbci.co.uk/news/660/media/images/82697000/jpg/_82697762_thinkstockphotos-122177295.jpg',
			'user_id' => 1,
			'category_id' => 1,
			'slug' => 'Anger-as-Facebook-bug-blocked-pictures',
		]);

		Post::create([
			'title' => 'Đà Nẵng tiếp tục dẫn đầu về năng lực cạnh tranh cấp tỉnh',
			'short_intro' => 'Xếp hạng năng lực cạnh tranh cấp tỉnh 2014 được Phòng Thương mại & Công nghiệp Việt Nam công bố sáng nay tiếp tục ghi nhận Đà Nẵng ở vị trí quán quân. TP HCM góp mặt trong Top 4.',
			'content' => "\n<p class=\"Normal\">\n  Đây là năm thứ 2 <a href=\"http://vnexpress.net/tin-tuc/thoi-su/da-nang-tro-lai-vi-tri-quan-quan-ve-nang-luc-canh-tranh-2966380.html\">liên tiếp</a> Đà Nẵng giành vị trí số một về năng lực cạnh tranh cấp tỉnh (PCI), sau khi để lọt vị trí này vào tay Đồng Tháp năm 2012. Như vậy tính chung trong vòng 10 năm qua, khi PCI được công bố, Đà Nẵng đã có 5 lần dẫn đầu cả nước.</p>\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"tplCaption\" style=\"width: 100%;\"><tbody><tr><td>\n        <img data-natural-=\"\" src=\"http://m.f25.img.vnecdn.net/2015/04/16/dn-0-1121-1429172443.jpg\" alt=\"dn-0-1121-1429172443.jpg\" data-width=\"500\" data-pwidth=\"470.40625\" style=\"width: 100%;\"></td>\n    </tr><tr><td>\n        <p class=\"Image\">\n          <span>Chủ tịch Đà Nẵng Huỳnh Đức Thơ cho rằng vị trí số một là ưu ái mà doanh nghiệp dành cho địa phương. Ảnh:&nbsp;</span><em>Nguyễn Đông</em></p>\n      </td>\n    </tr></tbody></table><p class=\"Normal\">\n  Một điểm nhấn đáng chú ý trong danh sách năm nay là việc TP HCM vươn lên vị trí thứ 4, sau khi trở lại Top 10 vào năm ngoái. Xếp giữa 2 địa phương nêu trên là các tỉnh Đồng Tháp và Lào Cai. Đây là kết quả có được dựa trên khảo sát tại 11.500 doanh nghiệp trên cả nước, trong đó có gần 1.500 đơn vị thuộc khối đầu tư trực tiếp nước ngoài (FDI).</p>\n<p class=\"Normal\">\n  <span>Tuy tăng 7 bậc so với xếp hạng năm ngoái nhưng Hà Nội vẫn xếp thứ 26 trên tổng số 63 tỉnh thành. Ở nửa còn lại của danh sách, Hà Giang, Cao Bằng, Lai Châu, Điện Biên những cái tên xếp cuối cùng.</span></p>\n<p class=\"Normal\">\n  Theo kết quả khảo sát của VCCI, Đà Nẵng được coi là điểm đến ưa thích của doanh nghiệp FDI nhờ mức độ minh bạch và khả năng tiếp cận tài liệu pháp lý, quy hoạch. Địa phương này cũng dẫn đầu về chỉ số đào tạo lao động, thứ 2 về thu hút đầu tư dân doanh (sau TP HCM) và thứ 3 về cơ sở hạ tầng.&nbsp;<span>Trong khi đó, Đồng Tháp đứng thứ 2 nhờ các chỉ số: gia nhập thị trường, tính năng động, chi phí thời gian, thiết chế pháp lý.</span></p>\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"tplCaption\" style=\"width: 100%;\"><tbody><tr><td>\n        <a href=\"http://vnexpress.net/infographic/doanh-nghiep/chi-so-nang-luc-canh-tranh-cap-tinh-2014-3201575.html\"><img alt=\"Pci-2014-1678-1429160275.jpg\" data-natural-=\"\" src=\"http://m.f25.img.vnecdn.net/2015/04/16/Pci-2014-1678-1429160275.jpg\" data-width=\"500\" data-pwidth=\"470.40625\" style=\"width: 100%;\"></a></td>\n    </tr><tr><td>\n        <p class=\"Image\">\n          <a href=\"http://vnexpress.net/infographic/doanh-nghiep/chi-so-nang-luc-canh-tranh-cap-tinh-2014-3201575.html\">Chi tiết</a></p>\n      </td>\n    </tr></tbody></table><p class=\"Normal\">\n  Đại diện nhóm nghiên cứu, Trưởng ban Pháp chế VCCI - Đậu Anh Tuấn cho biết trong khi các chỉ số gia nhập thị trường tăng điểm đáng kể (tỉnh cao nhất đạt 9,37 điểm trong khi thấp nhất cũng trên 7 điểm) thì đánh giá đối với chi phí không chính thức lại &nbsp;kém đi, chỉ điểm cao nhất chỉ là 7,02.</p>\n<p class=\"Normal\">\n  “Sau nhiều năm có xu hướng giảm, năm 2014, tỷ lệ doanh nghiệp trả lời thường xuyên phải trả thêm tiền không chính thức để được tạo thuận lợi trong kinh doanh sản xuất là 66%”, ông Tuấn cho hay.</p>\n<p class=\"Normal\">\n  Nhóm nghiên cứu cảm thấy lo ngại nữa là nhóm dẫn đầu có xu hướng chững lại, và các địa phương dẫn đầu tương đối thiếu sáng kiến trong cải cách.&nbsp;<span>Ví dụ như Bình Dương, từng có mặt trong 5 vị trí đầu tiên suốt thời kỳ 2007-2010, nhưng tụt xuống thứ 30 năm 2013 và chỉ cải thiện được 3 bậc năm nay.</span></p>\n<p class=\"Normal\">\n  Phát biểu tại lễ công bố, Chủ tịch Đà Nẵng - Huỳnh Đức Thơ cho biết dù đã cố gắng nhiều để doanh nghiệp được thuận lợi, song kết quả dẫn đầu vẫn là một bất ngờ với lãnh đạo thành phố. “Có lẽ đây là cảm nhận đầy ưu ái, là đánh giá khích lệ mà doanh nghiệp dành cho Đà Nẵng. Chúng tôi thấy thành phố còn nhiều điểm yếu, nhiều việc phải làm và luôn luôn cải cách để giữ vị trí tốt”, ông nói.</p>\n<p class=\"Normal\">\n  <span style=\"color:#696969;\"><strong>Trao đổi với báo chí trước đó, Chủ tịch VCCI - Vũ Tiến Lộc nhận định trong vòng 10 năm qua, PCI đã được giới thiệu ở 11 nước, song chưa đâu áp dụng thành công như Việt Nam.</strong></span> Lý do được đưa ra là bộ chỉ số ra<span>&nbsp;đời trong bối cảnh các địa phương còn thiếu cơ chế giám sát, sau khi được phân cấp, phân quyền nhiều hơn theo luật Đầu tư 2005.</span></p>\n<p class=\"Normal\">\n  Ông Lộc cho biết&nbsp;<span>10 năm trước, đã có những tranh cãi và hoài nghi từ các lãnh đạo địa phương về viêc áp dụng bộ chỉ số PCI.&nbsp;</span><span>“Có người còn nói VCCI có quyền gì mà đòi xếp hạng các tỉnh, tức là xếp hạng lãnh đạo các tỉnh này”, ông Lộc nhớ lại. Tuy nhiên, khi ấy Thủ tướng Phan Văn Khải cho rằng, cơ quan chính quyền cần quen với các nhận định, góp ý của nhân dân mới tiến bộ được. Nhờ vậy, PCI đã dần trở thành một bộ tiêu chí đánh giá quan trọng để cải cách môi trường kinh doanh ở các địa phương.</span></p>\n<p class=\"Normal\">\n  10 năm qua, VCCI cho biết đã có 100.000 lượt doanh nghiệp tham gia bày tỏ chính kiến trong các khảo sát hàng năm.&nbsp;<span>Thống kê cho thấy, nếu lấy tiêu chí tối thiểu 4 lần được lọt vào Top 10 thì có 9 tỉnh, thành phố được ghi tên, gồm Bắc Ninh, Bình Định, Bình Dương, Đà Nẵng, TPHCM, Đồng Tháp, Lào Cai, Vĩnh Long và Vĩnh Phúc.</span></p>\n<p class=\"Normal\" style=\"text-align:right;\">\n  <strong>Chí Hiếu</strong></p>",
			'featured_img' => 'http://m.f25.img.vnecdn.net/2015/04/16/dn-0-1121-1429172443.jpg',
			'user_id' => 1,
			'category_id' => 1,
			'slug' => 'da-nang-tiep-tuc-dan-dau-ve-nang-luc-canh-tranh-cap-tinh',
			'posted_on' => '2015-05-03 16:45:06',
		]);
	}
}