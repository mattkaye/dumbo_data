<?php 
/**
* Dumbo Data
*
* This class aids in testing how various website layouts will respond when provided with content data sets of varying lengths and sizes. With each refresh of the page, the layout will change slightly due to the copy and/or image sizes changing randomly within the parameters you set
* 
* @version 1.0
* @author Matt Kaye <mattkaye79@gmail.com>
* @link https://github.com/mattkaye/dumbo_data
*/

class Dumbodata{
	// The theme to use
	private $myTheme = false;
	
	// Min and Max character limits
	private $minChar;
	private $maxChar;
	
	// Possible theme types for the dummy content
	private $themes = array(
		'technology',
		'science',
		'arts',
		'travel',
		'politics',
		'business',
		'news',
		'entertainment'
	);
	
	/**
	*
	* Constructor method
	* 
	* @param	$theme		string		Content theme that you wish the dummy data to follow.
	* @param	$minChar	string		The minimum number of characters a text block can be.
	* @param	$maxChar	string		The maximum number of characters a text block can be.
	* @return	N/A
	*/
	public function __construct($myTheme = 'technology', $minChar = 20, $maxChar = 255){
		$this->myTheme = $myTheme;
		$this->minChar = $minChar;
		$this->maxChar = $maxChar;
	}
	
	/**
	*
	* Creates a block of copy
	* 
	* @return	$result		string		The block of copy
	*/
	public function doText(){
		return $this->_getCopy();
	}
	
	/**
	*
	* Sets new values for the min and max amount of text in a copy block
	* 
	* @param	$minChar	int			The minimum number of characters the copy can be. Will round to next whole word.
	* @param	$maxChar	int			The maximum number of characters the copy can be. Will round to next whole word.(0 means no limit)
	* @return	N/A
	*/
	public function setTextLimit($minChar, $maxChar){
		try{
			if($minChar < 1){
				throw new Exception('The minimum character limit cannot be less than 1');
			}
			
			if($minChar > $maxChar && $maxChar !== 0){
				throw new Exception('The minimum character limit cannot be greater than the maximum');
			}
		}
		catch(Exception $e){
			echo $e->getMessage();
			die();
		}
		
		$this->minChar = $minChar;
		$this->maxChar = $maxChar;
	}
	
	/**
	*
	* Get a block of copy
	* 
	* @return	$myCopy		string		A string of dummy copy that matches the chosen theme type
	*/
	private function _getCopy(){
		$myCopy = false;
		
		// Choose from the appropriate theme block
		switch($this->myTheme){
			case 'technology':
			default:
				$copy = array(
					0 => 'In the market for a tablet? Your first choice should be the iPad (4th generation). It has the best performance, the deepest software catalog, and a fantastic ecosystem supporting access to an incredible number of apps, games, music, and video. However, if you like the idea of a high-performing tablet, but you\'re not one for adding more cash to Apple\'s already substantial coffers, the Asus Transformer Pad Infinity TF700 might be up your alley.', 
					
					1 => 'With its beautiful screen, overclocked 1.7GHz Tegra 3 CPU, storage expansion slot, and Micro-HDMI, it succeeds in offering a viable 10-inch alternative to the iPad. If price is a concern, or you simply want a smaller tablet, the $200 Nexus 7 is powerful, comfortable, and, thanks to its support for Jelly Bean, provides one of the best Android tablet experiences yet. Check out the rest of the top tablets for more options.',
					
					2 => 'Google\'s never really been all "Drop what you\'re using and switch to Chrome OS" about the whole thing, but with this machine it seems to be more up-front about positioning it as a good extra inexpensive computer that lies around the house and can be used for quickly, easily, and securely handling the Web needs of different users.', 
					
					3 => 'Especially those who\'ve come to rely less and less on traditional installed software.',
					
					4 => 'The Internet Explorer wait appears to be over for Microsoft loyalists. A new preview version of Internet Explorer 10 for Windows 7 will be available tomorrow, according to LiveSide, a site that follows Windows Live.', 
					
					5 => 'The site got its information from a Chinese technology blog, iFanr, which attended an IE10 media press event in Beijing today. iFanr cited comments from a Microsoft executive, who announced the imminent release of the preview version of the browser.',
					
					6 => 'Nvidia\'s flagship mobile chip is a piece of complex, quad-core machinery capable of driving speedy navigation and high frame rates in games. Some games even sport Tegra 3-specific optimizations, allowing for graphical effects not seen on any other CPU.', 
					
					7 => 'The problem is that from a gaming apps perspective, not enough app developers have made games that really take advantage of its power, and with newer faster processors debuting every few months, Tegra 3 may have missed its opportunity to turn the Android platform into a gaming powerhouse.',
					
					8 => 'A version of the chip, clocked at 1.7GHz, allows the Asus Transformer Pad Infinity TF700 to display a high-resolution, 1,920x1,200 screen with little compromise to navigation performance; however, it\'s not always fast enough to prevent low frame rates in high-end games like N.O.V.A. 3.'
				);
				break;
			
			case 'science':
				$copy = array(
					0 => 'Human skin is a special material: It needs to be flexible, so that it doesn\'t crack every time a user clenches his fist. It needs to be sensitive to stimuli like touch and pressure—which are measured as electrical signals, so it needs to conduct electricity. Crucially, if it\'s to survive the wear and tear it\'s put through every day, it needs to be able to repair itself.', 
					
					1 => 'Now, researchers in California may have designed a synthetic version—a flexible, electrically conductive, self-healing polymer.',
					
					2 => 'Researchers who have assembled a trove of genetic and medical data on 100,000 northern Californians unveiled their initial findings here this week at the annual meeting of the American Society of Human Genetics (ASHG).',
					
					3 => 'The effort, which may be the largest such "biobank" in the United States, has already yielded an intriguing connection between mortality and telomeres, the protective DNA sequences that cap chromosome ends, and found new links between genetic variants and disease traits. And that\'s just the beginning, say the biobank\'s curators at Kaiser Permanente (KP), the giant health care organization.',
					
					4 => 'Chemical engineer Zhenan Bao of Stanford University in Palo Alto, California, and her team combined these two concepts and explored the potential of self-healing polymers in epidermal electronics. However, all the self-healing polymers demonstrated to date had had very low bulk electrical conductivities and would have been little use in electrical sensors.', 
					
					5 => 'Writing in Nature Nanotechnology, the researchers detail how they increased the conductivity of a self-healing polymer by incorporating nickel atoms, allowing electrons to "jump" between the metal atoms. The polymer is sensitive to applied forces like pressure and torsion (twisting) because such forces alter the distance between the nickel atoms, affecting the difficulty the electrons have jumping from one to the other and changing the electrical resistance of the polymer.',
					
					6 => 'The idea is to link such genetic information with clinical data from the electronic medical records of the biobank\'s volunteers. (The participants, who also answered health surveys, averaged 63 years old, and 81% were white and the rest Asian, Latino, or African American.)', 
					
					7 => 'For example, researchers using the Kaiser Permanente biobank have verified previously reported links between certain genetic markers, known as SNPs (single-nucleotide polymorphisms), and cholesterol measurements tied to heart disease risk.', 
					
					8 => 'The data have revealed new SNPs that may influence cholesterol levels as well. Moreover, for some of the known cholesterol-linked SNPs, the strength of the association was much stronger than in the original work, and stronger than any other previous, similar SNP studies, says UCSF human geneticist Neil Risch, co-leader of the aging study with Catherine Schaefer, director of KP\'s Research Program on Genes, Environment, and Health.', 
					
					9 => 'This is probably because of the biobank\'s large size and consistent, high-quality clinical information, which is an advantage compared to analyses that pool smaller, separate studies, Risch says.',
				);
				break;
			
			case 'arts':
				$copy = array(
					0 => 'Sotheby\'s New York turned in a lackluster $163-million sale of Impressionist and modern art last night, a result that fell short of the evening\'s $170-$245 million estimate despite the presence of no fewer than nine Picassos, six Mirós, five Henry Moores, and four works each by Ernst, Matisse and Renoir.', 
					
					1 => 'Thirty-one percent of the 67 offered works went unsold, resulting in a success rate comparable with the 70 percent achieved the previous night at Christie\'s.',
					
					2 => 'Currently on view in the group show "Redux" at New York\'s Cristin Tierney Gallery (through Feb. 4) are two works by Joe Fig, both related to his 2009 book on interviews, Inside the Painter\'s Studio. He\'s also included in the exhibition "Small Worlds" at the Toledo Museum of Art [through Mar. 25].', 
					
					3 => 'For the book, Fig spoke with dozens of painters about their practices and the quotidian life. The interviews also resulted in a series of diorama-like sculptures showing the artists at work. Here, he talks about his model of New York painter Inka Essenhigh in her studio.',
					
					4 => 'The rectangular works—the "Eclipse" series—each have a pure white front panel, their reverse sides a high-voltage, mostly hidden monochromatic hue. The rear canvas is another single, vivid color, often a primary. Three of the smaller works, all from 2010—Primary Eclipse (Blue), Primary Eclipse (Yellow) and Primary Eclipse (Red)—form a triptych, the anterior canvases angled away from the accompanying back panels in different ways to offer variously exposed expanses of color.',
					
					5 => 'Hung on its own wall upstairs, Dyad (2012), the largest work in the show, dominated the room. More than 8½ feet tall, the piece is all white, architectonic and as full of shape-shifting, spatially deceptive feints as an unfolded Japanese screen.',
					
					6 => 'Throughout the day, the natural radiance from a skylight dematerialized first one plane then another into pure glow—at least temporarily.',
				);
				break;
			
			case 'travel':
				$copy = array(
					0 => 'With more altitude and less attitude than its fancier neighbors, Breckenridge is a skier\'s paradise. Days here are spent zipping down the 155 stellar trails but there is a lot to do in the lively Victorian downtown, which was founded in 1859, thanks in large part to the gold mining trade. Many of the shops hawk souvenirs, but there\'s a great spa, noteworthy galleries, excellent meat-centric restaurants, and bars for every personality type.',
					
					1 => 'Serving an American-style breakfast and brunch, the Blue Moose has a carved moose at the entrance and a chandelier of multicolored cups and saucers, with spoons dangling underneath the saucers and a bulb inside each cup.',
					
					2 => 'White banquettes line the wall, with natural-wood tables and Windsor chairs in the center. Served in large portions, dishes include chorizo sausage, omelets, granola, and home fries with pork green chili. Vermont maple syrup is available (on request) for pancake eaters.
					Beverages include Blue Moose organic coffee, Bloody Marys, Irish coffee, and hot chocolate. Blue Moose only accepts cash (ATMs are nearby).',
					
					3 => 'This franchise, diner-style donut shop on North Main Street has its own proprietary donut mix and medium-roast coffee. They make filled, frosted, sprinkled, or glazed donuts, as well as pastries like bear claws, apple fritters, and cinnamon rolls.',
					
					4 =>'A chalkboard menu boasts classic breakfast options alongside with creative options, such as burritos and sweet potato waffles. This small Breckenridge location caters to the Colorado crowd with its ski and snowboard wall decorations, and it\'s popularity frequently creates waits for tables. Bring cash or use the on-site ATM.',
					
					5 => 'California\'s capital isn\'t just for legislators anymore. Stately buildings, a theater scene, laid-back restaurants, tree-lined streets, define the charming city, which—best of all—has coastal style at inland prices.',
					
					6 => 'You\'ll likely want a car to get around (just be sure to avoid the city\'s rush hour traffic), but buses and shuttles do run between Old Sacramento and the downtown area.',
				);
				break;
			
			case 'politics':
				$copy = array(
					0 => 'The 2012 election was a challenging one for journalists. Campaigns had new ways of getting around the traditional media (or trying) and reporters\' level of access to the candidates was at an all-time low.',
					
					1 => 'As a result, we\'re all the more appreciative of the community of sources who made it possible for us to keep our readers informed, and who believe that honest cooperation with a neutral press makes campaigns stronger, rather than weaker. Named and anonymous, you know who you are and you have our thanks.',
					
					2 => 'This was the reason why Obama\'s campaign developed a plan early, one that it stuck to, to define Romney early and disqualify him. They feared that he would be able to reposition himself in the general in a way that would be effective.',
					
					3 => 'But Romney had a fear, which we\'ve written about on this page repeatedly, of being called a "flip-flopper," a label that he\'d encountered at other points in his career but avoided until it was no longer tenable, when the 47 percent video emerged.',
					
					4 => 'The National Republican Senatorial Committee consistently had a more upbeat assessment of races in North Dakota and Montana, among others, than their Democratic counterparts. One GOP poll even showed Indiana Senate candidate Richard Mourdock holding even with his opponent, even as public polls showed the embattled Republican hemorrhaging support.',
					
					5=> 'A Republican poll taken by Susquehanna Polling and Research showed Pennsylvania Senate candidate Tom Smith leading Democratic Sen. Bob Casey by 2 points a few weeks before the election; Casey won by 9 points.',
					
					6 => 'Both Steele and Purple Nation co-founder Lanny Davis agreed on a conference call with reporters that demagoguery and extreme comments on social issues has alienated voters who have said they could vote for Republican candidates on fiscal issues if it weren\'t for the party\'s hyper-focus on social conservatism.'
				);
				break;
				
			case 'business':
				$copy = array(
					0 => 'Joe Green lived in the same dorm as Facebook co-founder Mark Zuckerberg and became his friend and hacking buddy. His Dad advised against working with Zuckerberg on Facebook, losing him a stake in the company that would have been worth at least $3 billion today.',
					
					1 => 'Nevertheless, JNK, the SPDR Barclays Capital High Yield Bond ETF, and competitor offerings are a hot destination in these yield-famished days. The appeal is irrefutable: You\'ll get precious little income from Treasuries and muni bonds.', 
					
					2 => 'Creditworthy corporations are borrowing at record lows. Why not then pile into riskier, higher-yielding debt, especially if you can do so via one tidy, exchange-traded ticker? (No need to ring Michael Milken.) What\'s more, Moody\'s sees the global default rate for “speculative-grade” debt ending the year at 2.8 percent, compared with an average of 4.8 percent since 1983.',
					
					3 => 'Yields have fallen 1.65 percentage points this year, to 7.05 percent on Nov. 1, according to Bank of America Merrill Lynch data.',
					
					4 => 'An overcrowded trade marked by 2007-like issuer complacency—that\'s what. More companies are demanding and getting easy terms on their junk issues. The most popular junk ETFs are going deeper into credit risk to scrape for yield. The sluicing of retail money into these ETFs is perpetuating what has historically proved to be a vicious trend. "Signs of over-exuberance are creeping into the corporate credit market," wrote Michael Lewitt, a hedge fund manager who publishes the Credit Strategist. "In the past, rising issuance of these types of low-quality bonds has been a warning that a market rally is coming to an end . Today\'s new issues will be the troubled credits of tomorrow."',
					
					5 => 'Facebook has lost about half its value since selling shares at $38 apiece in a May initial public offering. Current and former Facebook employees who have seen the value of equity compensation plunge can sell as lockups designed to prevent a flood of shares immediately after the IPO expire. The company showed in its most recent earnings report that it\'s making headway generating revenue from mobile advertisements, keeping the stock from dropping more steeply.',
				);
				break;
				
			case 'news':
				$copy = array(
					0 => 'Mr Khatib is a former imam of the Umayyad Mosque in Damascus and a respected figure within Syria. He was imprisoned several times for his criticism of the government during the uprising against President Bashar al-Assad before he fled the country and settled in Cairo.',
					
					1 => 'Hitler was the archetypal "charismatic leader". He was not a "normal" politician - someone who promises policies like lower taxes and better health care - but a quasi-religious leader who offered almost spiritual goals of redemption and salvation. He was driven forward by a sense of personal destiny he called "providence". Before WWI he was a nobody, an oddball who could not form intimate relationships, was unable to debate intellectually and was filled with hatred and prejudice. But when Hitler spoke in the Munich beer halls in the aftermath of Germany\'s defeat in WWI, suddenly his weaknesses were perceived as strengths.',
					
					2 => 'As Japan and China continue to exchange angry words over their competing claims to an uninhabited group of islands in the East China Sea, it\'s not that easy to get a close look - and sometimes a little deception is required. When you arrive in a new country as a foreign correspondent, the first thing you try to do is figure out how that country works. Japan, where I arrived three months ago, has a reputation for being particularly complex for foreigners to understand. And so it is proving. Take for example the little trip I recently took out in to the East China Sea. The objective was the Senkaku Islands, as they are known here in Japan. If you live in China they are the Diaoyu. I\'m just going to call them "The Islands".',
					
					3 => 'The US will overtake Saudi Arabia as the world\'s biggest oil producer "by around 2020", an International Energy Agency (IEA) report has said. The IEA said the reason for this was the big growth and development in the US of extracting oil from shale rock. This has enabled the US to gain significantly more extractable oil resources. As a result, the IEA predicts the US will become "all but self-sufficient" in its energy needs by around 2035. The US shale oil industry has grown significantly in recent years. It extracts oil from the ground using a method called fracking - pumping down a mixture of sand, water and chemicals at high pressure. The industry says the method is safe, but critics say it could cause earthquakes and pollute water sources.',
				);
				break;
			
			case 'entertainment':
				$copy = array(
					0 => 'Dr. Jan Adams, the doctor who performed plastic surgery on Kanye West\'s mom Donda West the day before she died tells ET that he never spoke to Kanye directly following Donda\'s death, and reveals what he\'d say, given the chance. Adams says he\'d say, "Hello. How\'s things going? How\'s the music business?"',
					
					1 => 'He explains, "Kanye and I don\'t need to talk about this. We both lived it. We both know the facts. And we\'ve both moved on. It\'s a tragedy. A lot of lives have tragedies," adding that though they haven\'t sat down together, he did express his condolences to Kanye following his mom\'s death.', 
					
					2 => 'He also tells ET that he plans to go back into the operating room, saying, "I\'ll do surgery again, absolutely. And I\'ve already got them lined up, because people call me all the time and say \'Will you do this?\' or \'You did my girlfriend\'s or my wife\'s, can you do this?\' And so the patients are there."',
					
					3 => 'Super-dedicated Twilight fans are currently camped out for tonight\'s last premiere of the super-successful saga, where stars Peter Facinelli and Jackson Rathbone showed their appreciation Sunday by making appearances for all the "Twihards" that have made the franchise a worldwide phenomenon.', 
					
					4 => '"After four years and five movies, it\'s more like a family now -- I\'m gonna miss these guys not only on-set, but off-camera," Peter tells ET about the estimated 2,000 screaming fans. "All these fans camping out every year -- they really made this franchise what it was. It\'s a two way street, this relationship. We love them just as much as they love these movies."',
					
					5 => '"I think the right person went home," Lovato said. "There [have] been a couple chances to improve where he was going and it just never clicked.',
					
					6 => 'I think there\'s also room for CeCe (in Lovato\'s Young Adults category) to improve." L.A. Reid, who mentors the Over 25s category, had a night of highs and lows. While his group member Tate Stevens was ranked No. 1 on the newly revealed singer rankings, he is now down to two members in his group after Brock\'s elimination. "If America sends Jason Brock home, I don\'t question it," Reid said. "Am I sad to see him go? Absolutely. I think he was very good.',
					
					7 => 'He was very entertaining. I enjoyed him while he was here. He gave his best and that\'s all I could ever ask." The 20-year-old first-time reality talent competition judge said that the incident was sincere and not simply a TV ratings ploy. As she revealed, the judges don\'t have any rehearsals for the show, which sometimes leaves her unprepared.',
					
					8 => '"None of it\'s rehearsed. We\'re not one of those shows. It was definitely real," said Lovato, who hinted that the bickering between her and Cowell continued off camera. Beyond the squabbling, X Factor hosted its first fan vote on Thursday, which resulted in the ousting of the Over 25s category\'s Jason Brock. Cowell and Lovato both agreed with America\'s decision to send him home.'
				);
				break;
		}
	
		// Shuffle the array, Extract the copy
		shuffle($copy);
		foreach($copy as $block){
			// Max length reached
			if(strlen($myCopy) >= $this->maxChar && $this->maxChar !== 0){
				break;
			}
			$myCopy .= '<p>'. $block . '</p>'; // Build up the copy string
		}
		
		// If maxChar is set to 0, use total length of the built up copy as the high limit
		$this->maxChar = ($this->maxChar === 0 ? strlen($myCopy) : $this->maxChar);
		
		return $this->_truncateText($myCopy,rand($this->minChar, $this->maxChar));
	}
	
	/**
	*
	* Truncate a a string of text based on a maximum length. String will truncate on whole words, so it might go a little bit over the $length
	* 
	* @param	$string		string		The string to truncate.
	* @param	$length		int			The max length of the truncated section of text
	* @return	N/A
	*/
	private function _truncateText($string, $length) {
    if (strlen($string) > $length) {
        //limit hit!
        $string = substr($string,0,($length -3));
        $string = substr($string,0,strrpos($string,' ')).'...';
    }
    return $string;
	}
}
?>

