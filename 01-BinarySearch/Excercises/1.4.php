<?php 

/* 
1.4 You have a phone number, and you want to find the person’s name 
in the phone book. (Hint: You’ll have to search through the whole 
book!)
*/

function linearSearch($contacts, $target)
{
    $start_time = microtime(true);
    $start_memory = memory_get_usage();
    foreach($contacts as $name => $number){
        if($target == $number){
            $end_time = microtime(true);
            $end_memory = memory_get_peak_usage(true);

            $memory_uses = ($end_memory - $start_memory);
            $memory_uses_kb = $memory_uses / 1024;
            $ms_time = ($end_time - $start_time) * 1000;

            return "Found : The Number ($number) of People is : $name, Run time: ". number_format($ms_time, 3)." ms, \n".
            "Memory Used: " . number_format($memory_uses_kb, 3) . " KB";
        }
    }

    return "Not Found";
}

function binarySearch($contracts, $target)
{
    $start_time = microtime(true);
    $start_memory = memory_get_usage();

    $phones = array_values($contracts);  

    $low = 0;
    $high = count($phones) - 1;

    while($low <= $high){
        $mid = (int)(($low + $high) / 2);
        $phone = $phones[$mid];

        if($phone == $target){
            $name = array_search($phone, $contracts);

            $end_time = microtime(true);
            $end_memory = memory_get_peak_usage(true);
            $ms_time = ($end_time - $start_time) * 1000;
            $used_memory = ($end_memory - $start_memory) / 1024;

            return "Found : The Number ($phone) of People is : $name, Run time: ". number_format($ms_time, 3)." ms, \n".
            "Memory Used: " . number_format($used_memory, 3) . " KB";       
        
        }elseif($target > $phone){
            $low = $mid + 1;
        }else{
            $high = $mid - 1;
        }
    }

    return "Not Found";
}



$contacts = [
    "John Doe" => "+8801712345678",
    "Jane Smith" => "+8801912345678",
    "Alice Johnson" => "+8801812345678",
    "Bob Williams" => "+8801512345678",
    "Charlie Brown" => "+8801711111111",
    "David Wilson" => "+8801922222222",
    "Emma Davis" => "+8801833333333",
    "Frank Miller" => "+8801544444444",
    "Grace Lee" => "+8801755555555",
    "Henry Moore" => "+8801966666666",
    "Ivy Taylor" => "+8801877777777",
    "Jack Anderson" => "+8801588888888",
    "Kathy Thomas" => "+8801799999999",
    "Leo Martin" => "+8801910101010",
    "Mia White" => "+8801811111112",
    "Nathan Harris" => "+8801512121212",
    "Olivia Clark" => "+8801723232323",
    "Paul Lewis" => "+8801934343434",
    "Quinn Walker" => "+8801845454545",
    "Ryan Hall" => "+8801556565656",
    "Sophia Allen" => "+8801767676767",
    "Tom Young" => "+8801978787878",
    "Ursula King" => "+8801889898989",
    "Victor Scott" => "+8801590909090",
    "Wendy Adams" => "+8801711111122",
    "Xander Carter" => "+8801922222233",
    "Yara Green" => "+8801833333344",
    "Zane Baker" => "+8801544444455",
    "Adam Perez" => "+8801755555566",
    "Bella Roberts" => "+8801966666677",
    "Caleb Turner" => "+8801877777788",
    "Diana Phillips" => "+8801588888899",
    "Ethan Evans" => "+8801799999900",
    "Fiona Stewart" => "+8801910110111",
    "George Sanchez" => "+8801811121122",
    "Hannah Morris" => "+8801512132133",
    "Ian Rogers" => "+8801723243244",
    "Julia Reed" => "+8801934354355",
    "Kyle Cook" => "+8801845465466",
    "Lily Morgan" => "+8801556576577",
    "Mason Bell" => "+8801767687688",
    "Nina Cooper" => "+8801978798799",
    "Oscar Murphy" => "+8801889909900",
    "Penelope Ward" => "+8801590910911",
    "Quincy Brooks" => "+8801711221222",
    "Rebecca Sanders" => "+8801922332333",
    "Samuel Powell" => "+8801833443444",
    "Tina Russell" => "+8801544554555",
    "Ulysses Diaz" => "+8801755665666",
    "Vanessa Hayes" => "+8801966776777",
    "William Price" => "+8801877887888",
    "Xena Butler" => "+8801588998999",
    "Yusuf Barnes" => "+8801799009000",
    "Zelda Ross" => "+8801910110112",
    "Aaron Foster" => "+8801811121123",
    "Bethany Patterson" => "+8801512132134",
    "Carlos Simmons" => "+8801723243245",
    "Danielle Coleman" => "+8801934354356",
    "Elijah Jenkins" => "+8801845465467",
    "Faith Perry" => "+8801556576578",
    "Gabriel Long" => "+8801767687689",
    "Hailey Hughes" => "+8801978798790",
    "Isaac Flores" => "+8801889909901",
    "Jasmine Washington" => "+8801590910912",
    "Kevin Sanders" => "+8801711221223",
    "Lauren Bryant" => "+8801922332334",
    "Michael Alexander" => "+8801833443445",
    "Natalie Chavez" => "+8801544554556",
    "Owen Ramirez" => "+8801755665667",
    "Paige Griffin" => "+8801966776778",
    "Quinton Phillips" => "+8801877887889",
    "Rachel Torres" => "+8801588998990",
    "Steven Richardson" => "+8801799009001",
    "Tiffany Henderson" => "+8801910110113",
    "Umar Rogers" => "+8801811121124",
    "Veronica Wood" => "+8801512132135",
    "Walter Cole" => "+8801723243246",
    "Ximena Howard" => "+8801934354357",
    "Yosef Fisher" => "+8801845465468",
    "Zara Kim" => "+8801556576579",
    "Alfred Grant" => "+8801767687690",
    "Bianca Hayes" => "+8801978798791",
    "Cameron Powell" => "+8801889909902",
    "Delilah Myers" => "+8801590910913",
    "Edward Scott" => "+8801711221224",
    "Felicity Carter" => "+8801922332335",
    "Gregory Bell" => "+8801833443446",
    "Holly Bailey" => "+8801544554557",
    "Isaiah Foster" => "+8801755665668",
    "Jocelyn Simmons" => "+8801966776779",
    "Kieran Coleman" => "+8801877887890",
    "Lydia Jenkins" => "+8801588998991",
    "Zaatthew Perry" => "+8801989009002"
];

asort($contacts);
print("#################### Linear Search ########################\n");

print(linearSearch($contacts, target: "+8801989009002"));
print("\n#################### Binary Search ########################\n");

print(binarySearch($contacts, target: "+8801989009002"));
