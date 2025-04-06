<?php 
/*
1.2 Suppose you double the size of the list. What’s the maximum
number of steps now?

*/

function binarySearch($names, $target)
{
    $low = 0;
    $high = count($names) -1;
    $steps = 0;

    while($low <= $high){
        $mid = (int)(($low + $high) / 2);

        if($names[$mid] == $target){
            return "Found '{$target}' at index $mid in $steps steps.";   
        }

        $steps++;

        if($target > $names[$mid]){
            $low = $mid + 1;
        }else{
            $high = $mid -1;
        }
    }

    return "Not Found on Steps : $steps";
}



$names = [
    "AName001", "BName002", "CName003", "DName004", "EName005", "FName006", "GName007", "HName008", "IName009", "JName010",
    "KName011", "LName012", "MName013", "NName014", "OName015", "PName016", "QName017", "RName018", "SName019", "TName020",
    "UName021", "VName022", "WName023", "XName024", "YName025", "ZName026", "AName027", "BName028", "CName029", "DName030",
    "EName031", "FName032", "GName033", "HName034", "IName035", "JName036", "KName037", "LName038", "MName039", "NName040",
    "OName041", "PName042", "QName043", "RName044", "SName045", "TName046", "UName047", "VName048", "WName049", "XName050",
    "YName051", "ZName052", "AName053", "BName054", "CName055", "DName056", "EName057", "FName058", "GName059", "HName060",
    "IName061", "JName062", "KName063", "LName064", "MName065", "NName066", "OName067", "PName068", "QName069", "RName070",
    "SName071", "TName072", "UName073", "VName074", "WName075", "XName076", "YName077", "ZName078", "AName079", "BName080",
    "CName081", "DName082", "EName083", "FName084", "GName085", "HName086", "IName087", "JName088", "KName089", "LName090",
    "MName091", "NName092", "OName093", "PName094", "QName095", "RName096", "SName097", "TName098", "UName099", "VName100",
    "WName101", "XName102", "YName103", "ZName104", "AName105", "BName106", "CName107", "DName108", "EName109", "FName110",
    "GName111", "HName112", "IName113", "JName114", "KName115", "LName116", "MName117", "NName118", "OName119", "PName120",
    "QName121", "RName122", "SName123", "TName124", "UName125", "VName126", "WName127", "XName128", "YName129", "ZName130",
    "AName131", "BName132", "CName133", "DName134", "EName135", "FName136", "GName137", "HName138", "IName139", "JName140",
    "KName141", "LName142", "MName143", "NName144", "OName145", "PName146", "QName147", "RName148", "SName149", "TName150",
    "UName151", "VName152", "WName153", "XName154", "YName155", "ZName156", "AName157", "BName158", "CName159", "DName160",
    "EName161", "FName162", "GName163", "HName164", "IName165", "JName166", "KName167", "LName168", "MName169", "NName170",
    "OName171", "PName172", "QName173", "RName174", "SName175", "TName176", "UName177", "VName178", "WName179", "XName180",
    "YName181", "ZName182", "AName183", "BName184", "CName185", "DName186", "EName187", "FName188", "GName189", "HName190",
    "IName191", "JName192", "KName193", "LName194", "MName195", "NName196", "OName197", "PName198", "QName199", "RName200",
    "SName201", "TName202", "UName203", "VName204", "WName205", "XName206", "YName207", "ZName208", "AName209", "BName210",
    "CName211", "DName212", "EName213", "FName214", "GName215", "HName216", "IName217", "JName218", "KName219", "LName220",
    "MName221", "NName222", "OName223", "PName224", "QName225", "RName226", "SName227", "TName228", "UName229", "VName230",
    "WName231", "XName232", "YName233", "ZName234", "AName235", "BName236", "CName237", "DName238", "EName239", "FName240",
    "GName241", "HName242", "IName243", "JName244", "KName245", "LName246", "MName247", "NName248", "OName249", "PName250",
    "QName251", "RName252", "SName253", "TName254", "UName255", "ZName256"
];
sort($names);

print(binarySearch($names, "ZName256"));
