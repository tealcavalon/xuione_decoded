<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?118                 ?0                  	;0	>>118
1   5    ECHO/40                   ?0        1:'>'                ?0                  	;0
2   6    FETCH_DIM_R/81            $7=       16?0                 2:'all_categories'  	;0
3   6    ECHO/40                   ?0        $7                   ?0                  	;0
4   7    ECHO/40                   ?0        3:'</option>
                                    ' ?0                  	;0
5   8    INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'f769e3f0c739d1a6'	;1
6   8    SEND_VAL_EX/116           ?80       6:'movie'            ?1                  	;0
7   8    DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
8   8    FE_RESET_R/77             $9=       $8                   ?50                 	;0
9   8    FE_FETCH_R/78             ?0        $9                   16?1                	;50	>>50	<<49
10  9    NOP/0                     ?0        ?0                   ?0                  	;1
11  9    GOTO/253                  ?0        ?19                  ?7                  	;0
12  11   ECHO/40                   ?0        8:' selected'        ?0                  	;0
13  13   ECHO/40                   ?0        9:'>'                ?0                  	;0
14  14   FETCH_DIM_R/81            $10=      16?1                 10:'category_name'  	;0
15  14   ECHO/40                   ?0        $10                  ?0                  	;0
16  15   ECHO/40                   ?0        11:'</option>
                                    ' ?0                  	;0
17  16   NOP/0                     ?0        ?0                   ?0                  	;1
18  16   GOTO/253                  ?0        ?47                  ?12                 	;0
19  18   INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'in_array'       	;2
20  18   FETCH_DIM_FUNC_ARG/93     $11=      16?1                 15:'id'             	;1
21  18   SEND_VAR_EX/66            ?80       $11                  ?1                  	;0
22  18   FETCH_DIM_FUNC_ARG/93     $12=      16?2                 16:'category_ids'   	;2
23  18   SEND_VAR_EX/66            ?96       $12                  ?2                  	;0
24  18   DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
25  18   BOOL_NOT/13               #14=      $13                  ?0                  	;0
26  18   JMPZ/43                   ?0        #14                  ?29                 	;0	>>29
27  19   NOP/0                     ?0        ?0                   ?0                  	;1
28  19   GOTO/253                  ?0        ?47                  ?17                 	;0
29  21   ECHO/40                   ?0        18:'                                    <option value="' ?0                  	;0	<<26
30  22   FETCH_DIM_R/81            $15=      16?1                 19:'id'             	;0
31  22   ECHO/40                   ?0        $15                  ?0                  	;0
32  23   ECHO/40                   ?0        20:'"'               ?0                  	;0
33  24   FETCH_STATIC_PROP_IS/176  $16=      21:'rRequest'        22:'XUI'            	;0
34  24   ISSET_ISEMPTY_DIM_OBJ/115 #17=      $16                  24:'category'       	;33554432
35  24   JMPZ_EX/46                #17=      #17                  ?41                 	;0	>>41
36  24   FETCH_STATIC_PROP_R/173   $18=      25:'rRequest'        26:'XUI'            	;0
37  24   FETCH_DIM_R/81            $19=      $18                  28:'category'       	;0
38  24   FETCH_DIM_R/81            $20=      16?1                 29:'id'             	;0
39  24   IS_EQUAL/17               #21=      $19                  $20                 	;0
40  24   BOOL/52                   #17=      #21                  ?0                  	;0
41  24   BOOL_NOT/13               #22=      #17                  ?0                  	;0	<<35
42  24   JMPZ/43                   ?0        #22                  ?45                 	;0	>>45
43  25   NOP/0                     ?0        ?0                   ?0                  	;1
44  25   GOTO/253                  ?0        ?13                  ?30                 	;0
45  27   NOP/0                     ?0        ?0                   ?0                  	;1	<<42
46  27   GOTO/253                  ?0        ?12                  ?31                 	;0
47  31   NOP/0                     ?0        ?0                   ?0                  	;1
48  31   GOTO/253                  ?0        ?49                  ?32                 	;0
49  32   JMP/42                    ?0        ?9                   ?0                  	;0	>>9
50  32   FE_FREE/127               ?0        $9                   ?0                  	;0	<<8
51  35   GOTO/253                  ?0        ?69                  ?33                 	;0
52  37   FETCH_DIM_R/81            $23=      16?0                 34:'search_movies'  	;0
53  37   ECHO/40                   ?0        $23                  ?0                  	;0
54  38   ECHO/40                   ?0        35:'...">
                            </div>
                            <div class="col-md-4">
                                <select id="movies_category_id" class="form-control" data-toggle="select2">
                                    <option value=""' ?0                  	;0
55  39   FETCH_STATIC_PROP_IS/176  $24=      36:'rRequest'        37:'XUI'            	;0
56  39   ISSET_ISEMPTY_DIM_OBJ/115 #25=      $24                  39:'category'       	;33554432
57  39   JMPZ/43                   ?0        #25                  ?59                 	;0	>>59
58  40   GOTO/253                  ?0        ?60                  ?40                 	;0
59  42   ECHO/40                   ?0        41:' selected'       ?0                  	;0	<<57
60  44   GOTO/253                  ?0        ?1                   ?42                 	;0
61  46   FETCH_DIM_R/81            $26=      16?0                 43:'movies'         	;0
62  46   ECHO/40                   ?0        $26                  ?0                  	;0
63  47   ECHO/40                   ?0        44:'</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
                        <div id="collapse_filters" class="' ?0                  	;0
64  48   BOOL_NOT/13               #27=      16?3                 ?0                  	;0
65  48   JMPZ/43                   ?0        #27                  ?67                 	;0	>>67
66  49   GOTO/253                  ?0        ?68                  ?45                 	;0
67  51   ECHO/40                   ?0        46:'collapse'        ?0                  	;0	<<65
68  53   GOTO/253                  ?0        ?133                 ?47                 	;0
69  55   ECHO/40                   ?0        48:'                                </select>
                            </div>
                            <label class="col-md-1 col-form-label text-center" for="movies_show_entries">' ?0                  	;0
70  56   FETCH_DIM_R/81            $28=      16?0                 49:'show'           	;0
71  56   ECHO/40                   ?0        $28                  ?0                  	;0
72  57   ECHO/40                   ?0        50:'</label>
                            <div class="col-md-2">
                                <select id="movies_show_entries" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
73  58   FE_RESET_R/77             $29=      51:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?114                	;0
74  58   FE_FETCH_R/78             ?0        $29                  16?4                	;114	>>114	<<113
75  59   NOP/0                     ?0        ?0                   ?0                  	;1
76  59   GOTO/253                  ?0        ?89                  ?52                 	;0
77  61   NOP/0                     ?0        ?0                   ?0                  	;1
78  61   GOTO/253                  ?0        ?104                 ?53                 	;0
79  63   FETCH_STATIC_PROP_R/173   $30=      54:'rRequest'        55:'XUI'            	;0
80  63   FETCH_DIM_R/81            $31=      $30                  57:'entries'        	;0
81  63   IS_EQUAL/17               #32=      $31                  16?4                	;0
82  63   BOOL_NOT/13               #33=      #32                  ?0                  	;0
83  63   JMPZ/43                   ?0        #33                  ?86                 	;0	>>86
84  64   NOP/0                     ?0        ?0                   ?0                  	;1
85  64   GOTO/253                  ?0        ?87                  ?58                 	;0
86  66   ECHO/40                   ?0        59:' selected'       ?0                  	;0	<<83
87  68   NOP/0                     ?0        ?0                   ?0                  	;1
88  68   GOTO/253                  ?0        ?104                 ?60                 	;0
89  70   ECHO/40                   ?0        61:'                                    <option' ?0                  	;0
90  71   FETCH_STATIC_PROP_IS/176  $34=      62:'rRequest'        63:'XUI'            	;0
91  71   ISSET_ISEMPTY_DIM_OBJ/115 #35=      $34                  65:'entries'        	;33554432
92  71   JMPZ/43                   ?0        #35                  ?95                 	;0	>>95
93  72   NOP/0                     ?0        ?0                   ?0                  	;1
94  72   GOTO/253                  ?0        ?79                  ?66                 	;0
95  74   FETCH_DIM_R/81            $36=      16?5                 67:'default_entries'	;0	<<92
96  74   IS_EQUAL/17               #37=      $36                  16?4                	;0
97  74   BOOL_NOT/13               #38=      #37                  ?0                  	;0
98  74   JMPZ/43                   ?0        #38                  ?101                	;0	>>101
99  75   NOP/0                     ?0        ?0                   ?0                  	;1
100 75   GOTO/253                  ?0        ?102                 ?68                 	;0
101 77   ECHO/40                   ?0        69:' selected'       ?0                  	;0	<<98
102 79   NOP/0                     ?0        ?0                   ?0                  	;1
103 79   GOTO/253                  ?0        ?77                  ?70                 	;0
104 82   ECHO/40                   ?0        71:' value="'        ?0                  	;0
105 83   ECHO/40                   ?0        16?4                 ?0                  	;0
106 84   ECHO/40                   ?0        72:'">'              ?0                  	;0
107 85   ECHO/40                   ?0        16?4                 ?0                  	;0
108 86   NOP/0                     ?0        ?0                   ?0                  	;1
109 86   GOTO/253                  ?0        ?110                 ?73                 	;0
110 88   ECHO/40                   ?0        74:'</option>
                                    ' ?0                  	;0
111 90   NOP/0                     ?0        ?0                   ?0                  	;1
112 90   GOTO/253                  ?0        ?113                 ?75                 	;0
113 91   JMP/42                    ?0        ?74                  ?0                  	;0	>>74
114 91   FE_FREE/127               ?0        $29                  ?0                  	;0	<<73
115 94   GOTO/253                  ?0        ?116                 ?76                 	;0
116 96   ECHO/40                   ?0        77:'                                </select>
                            </div>
                        </div>
						<table id="datatable-streampage" class="table table-striped table-borderless dt-responsive nowrap font-normal">
							<thead>
								<tr>
									<th class="text-center">ID</th>
									<th class="text-center">Image</th>
									<th>Name</th>
                                    <th>Category</th>
									<th class="text-center">Connections</th>
									<th class="text-center">Kill</th>
								</tr>
							</thead>
							<tbody></tbody>
						</table>
					</div> 
				</div> 
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
117 97   GOTO/253                  ?0        ?147                 ?78                 	;0
118 99   INCLUDE_OR_EVAL/73        ?32       79:'session.php'     ?0                  	;2	<<0
119 100  INCLUDE_OR_EVAL/73        ?33       80:'functions.php'   ?0                  	;2
120 101  INIT_FCALL_BY_NAME/59     ?0        ?0                   81:'bAF6E9EF7775b5a9'	;0
121 101  DO_FCALL_BY_NAME/131      $41=      ?0                   ?0                  	;0
122 101  JMPZ/43                   ?0        $41                  ?124                	;0	>>124
123 102  GOTO/253                  ?0        ?126                 ?83                 	;0
124 104  INIT_FCALL_BY_NAME/59     ?0        ?0                   84:'e72F42A93714bA87'	;0	<<122
125 104  DO_FCALL_BY_NAME/131      ?35       ?0                   ?0                  	;0
126 106  GOTO/253                  ?0        ?127                 ?86                 	;0
127 108  ASSIGN/38                 ?36       16?6                 87:'Movies'         	;0
128 109  INCLUDE_OR_EVAL/73        ?37       88:'header.php'      ?0                  	;2
129 110  ECHO/40                   ?0        89:'<div class="wrapper boxed-layout-ext">
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
130 111  INCLUDE_OR_EVAL/73        ?38       90:'topbar.php'      ?0                  	;2
131 112  ECHO/40                   ?0        91:'					</div>
					<h4 class="page-title">' ?0                  	;0
132 113  GOTO/253                  ?0        ?61                  ?92                 	;0
133 115  ECHO/40                   ?0        93:' form-group row mb-4">
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="movies_search" value="' ?0                  	;0
134 116  FETCH_STATIC_PROP_IS/176  $46=      94:'rRequest'        95:'XUI'            	;0
135 116  ISSET_ISEMPTY_DIM_OBJ/115 #47=      $46                  97:'search'         	;33554432
136 116  BOOL_NOT/13               #48=      #47                  ?0                  	;0
137 116  JMPZ/43                   ?0        #48                  ?139                	;0	>>139
138 117  GOTO/253                  ?0        ?145                 ?98                 	;0
139 119  INIT_FCALL_BY_NAME/59     ?0        ?0                   99:'htmlspecialchars'	;1	<<137
140 119  FETCH_STATIC_PROP_FUNC_ARG/177 $49=      101:'rRequest'       102:'XUI'           	;1
141 119  FETCH_DIM_FUNC_ARG/93     $50=      $49                  104:'search'        	;1
142 119  SEND_VAR_EX/66            ?80       $50                  ?1                  	;0
143 119  DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
144 119  ECHO/40                   ?0        $51                  ?0                  	;0
145 121  ECHO/40                   ?0        105:'" placeholder="' ?0                  	;0
146 122  GOTO/253                  ?0        ?52                  ?106                	;0
147 124  INCLUDE_OR_EVAL/73        ?45       107:'footer.php'     ?0                  	;2
148 125  NOP/0                     ?0        108:1                ?0                  	;4294967295
*/

?>