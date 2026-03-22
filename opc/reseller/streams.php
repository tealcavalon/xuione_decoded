<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?130                 ?0                  	;0	>>130
1   6    ECHO/40                   ?0        1:'                                </select>
                            </div>
                            <label class="col-md-1 col-form-label text-center" for="stream_show_entries">Show</label>
                            <div class="col-md-2">
                                <select id="stream_show_entries" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
2   7    FE_RESET_R/77             $7=       2:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?43                 	;0
3   7    FE_FETCH_R/78             ?0        $7                   16?0                	;43	>>43	<<42
4   8    NOP/0                     ?0        ?0                   ?0                  	;1
5   8    GOTO/253                  ?0        ?6                   ?3                  	;0
6   10   ECHO/40                   ?0        4:'                                    <option' ?0                  	;0
7   11   FETCH_STATIC_PROP_IS/176  $8=       5:'rRequest'         6:'XUI'             	;0
8   11   ISSET_ISEMPTY_DIM_OBJ/115 #9=       $8                   8:'entries'         	;33554432
9   11   JMPZ/43                   ?0        #9                   ?12                 	;0	>>12
10  12   NOP/0                     ?0        ?0                   ?0                  	;1
11  12   GOTO/253                  ?0        ?23                  ?9                  	;0
12  14   FETCH_DIM_R/81            $10=      16?1                 10:'default_entries'	;0	<<9
13  14   IS_EQUAL/17               #11=      $10                  16?0                	;0
14  14   BOOL_NOT/13               #12=      #11                  ?0                  	;0
15  14   JMPZ/43                   ?0        #12                  ?18                 	;0	>>18
16  15   NOP/0                     ?0        ?0                   ?0                  	;1
17  15   GOTO/253                  ?0        ?19                  ?11                 	;0
18  17   ECHO/40                   ?0        12:' selected'       ?0                  	;0	<<15
19  19   NOP/0                     ?0        ?0                   ?0                  	;1
20  19   GOTO/253                  ?0        ?21                  ?13                 	;0
21  21   NOP/0                     ?0        ?0                   ?0                  	;1
22  21   GOTO/253                  ?0        ?36                  ?14                 	;0
23  23   FETCH_STATIC_PROP_R/173   $13=      15:'rRequest'        16:'XUI'            	;0
24  23   FETCH_DIM_R/81            $14=      $13                  18:'entries'        	;0
25  23   IS_EQUAL/17               #15=      $14                  16?0                	;0
26  23   BOOL_NOT/13               #16=      #15                  ?0                  	;0
27  23   JMPZ/43                   ?0        #16                  ?30                 	;0	>>30
28  24   NOP/0                     ?0        ?0                   ?0                  	;1
29  24   GOTO/253                  ?0        ?31                  ?19                 	;0
30  26   ECHO/40                   ?0        20:' selected'       ?0                  	;0	<<27
31  28   NOP/0                     ?0        ?0                   ?0                  	;1
32  28   GOTO/253                  ?0        ?36                  ?21                 	;0
33  30   ECHO/40                   ?0        22:'</option>
                                    ' ?0                  	;0
34  32   NOP/0                     ?0        ?0                   ?0                  	;1
35  32   GOTO/253                  ?0        ?42                  ?23                 	;0
36  35   ECHO/40                   ?0        24:' value="'        ?0                  	;0
37  36   ECHO/40                   ?0        16?0                 ?0                  	;0
38  37   ECHO/40                   ?0        25:'">'              ?0                  	;0
39  38   ECHO/40                   ?0        16?0                 ?0                  	;0
40  39   NOP/0                     ?0        ?0                   ?0                  	;1
41  39   GOTO/253                  ?0        ?33                  ?26                 	;0
42  40   JMP/42                    ?0        ?3                   ?0                  	;0	>>3
43  40   FE_FREE/127               ?0        $7                   ?0                  	;0	<<2
44  43   ECHO/40                   ?0        27:'                                </select>
                            </div>
                        </div>
						<table id="datatable-streampage" class="table table-borderless table-striped dt-responsive nowrap font-normal">
							<thead>
								<tr>
									<th class="text-center">ID</th>
									<th class="text-center">Icon</th>
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
45  44   GOTO/253                  ?0        ?139                 ?28                 	;0
46  46   ASSIGN/38                 ?10       16?2                 29:'Streams'        	;0
47  47   INCLUDE_OR_EVAL/73        ?11       30:'header.php'      ?0                  	;2
48  48   ECHO/40                   ?0        31:'<div class="wrapper boxed-layout-ext">
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
49  49   INCLUDE_OR_EVAL/73        ?12       32:'topbar.php'      ?0                  	;2
50  50   ECHO/40                   ?0        33:'					</div>
					<h4 class="page-title">Streams</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
                        <div id="collapse_filters" class="' ?0                  	;0
51  51   GOTO/253                  ?0        ?119                 ?34                 	;0
52  53   INIT_FCALL_BY_NAME/59     ?0        ?0                   35:'htmlspecialchars'	;1
53  53   FETCH_STATIC_PROP_FUNC_ARG/177 $20=      37:'rRequest'        38:'XUI'            	;1
54  53   FETCH_DIM_FUNC_ARG/93     $21=      $20                  40:'search'         	;1
55  53   SEND_VAR_EX/66            ?80       $21                  ?1                  	;0
56  53   DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
57  53   ECHO/40                   ?0        $22                  ?0                  	;0
58  55   ECHO/40                   ?0        41:'" placeholder="Search Streams...">
                            </div>
                            <div class="col-md-4">
                                <select id="stream_category_id" class="form-control" data-toggle="select2">
                                    <option value=""' ?0                  	;0
59  56   FETCH_STATIC_PROP_IS/176  $23=      42:'rRequest'        43:'XUI'            	;0
60  56   ISSET_ISEMPTY_DIM_OBJ/115 #24=      $23                  45:'category'       	;33554432
61  56   JMPZ/43                   ?0        #24                  ?63                 	;0	>>63
62  57   GOTO/253                  ?0        ?65                  ?46                 	;0
63  59   ECHO/40                   ?0        47:' selected'       ?0                  	;0	<<61
64  60   GOTO/253                  ?0        ?65                  ?48                 	;0
65  63   ECHO/40                   ?0        49:'>'               ?0                  	;0
66  64   FETCH_DIM_R/81            $25=      16?3                 50:'all_categories' 	;0
67  64   ECHO/40                   ?0        $25                  ?0                  	;0
68  65   ECHO/40                   ?0        51:'</option>
                                    ' ?0                  	;0
69  66   INIT_FCALL_BY_NAME/59     ?0        ?0                   52:'F769E3F0C739D1A6'	;1
70  66   SEND_VAL_EX/116           ?80       54:'live'            ?1                  	;0
71  66   DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
72  66   FE_RESET_R/77             $27=      $26                  ?117                	;0
73  66   FE_FETCH_R/78             ?0        $27                  16?4                	;117	>>117	<<116
74  67   NOP/0                     ?0        ?0                   ?0                  	;1
75  67   GOTO/253                  ?0        ?76                  ?55                 	;0
76  69   INIT_FCALL_BY_NAME/59     ?0        ?0                   56:'in_array'       	;2
77  69   FETCH_DIM_FUNC_ARG/93     $28=      16?4                 58:'id'             	;1
78  69   SEND_VAR_EX/66            ?80       $28                  ?1                  	;0
79  69   FETCH_DIM_FUNC_ARG/93     $29=      16?5                 59:'category_ids'   	;2
80  69   SEND_VAR_EX/66            ?96       $29                  ?2                  	;0
81  69   DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
82  69   BOOL_NOT/13               #31=      $30                  ?0                  	;0
83  69   JMPZ/43                   ?0        #31                  ?86                 	;0	>>86
84  70   NOP/0                     ?0        ?0                   ?0                  	;1
85  70   GOTO/253                  ?0        ?107                 ?60                 	;0
86  72   ECHO/40                   ?0        61:'                                    <option value="' ?0                  	;0	<<83
87  73   INIT_FCALL_BY_NAME/59     ?0        ?0                   62:'intval'         	;1
88  73   FETCH_DIM_FUNC_ARG/93     $32=      16?4                 64:'id'             	;1
89  73   SEND_VAR_EX/66            ?80       $32                  ?1                  	;0
90  73   DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
91  73   ECHO/40                   ?0        $33                  ?0                  	;0
92  74   ECHO/40                   ?0        65:'"'               ?0                  	;0
93  75   FETCH_STATIC_PROP_IS/176  $34=      66:'rRequest'        67:'XUI'            	;0
94  75   ISSET_ISEMPTY_DIM_OBJ/115 #35=      $34                  69:'category'       	;33554432
95  75   JMPZ_EX/46                #35=      #35                  ?101                	;0	>>101
96  75   FETCH_STATIC_PROP_R/173   $36=      70:'rRequest'        71:'XUI'            	;0
97  75   FETCH_DIM_R/81            $37=      $36                  73:'category'       	;0
98  75   FETCH_DIM_R/81            $38=      16?4                 74:'id'             	;0
99  75   IS_EQUAL/17               #39=      $37                  $38                 	;0
100 75   BOOL/52                   #35=      #39                  ?0                  	;0
101 75   BOOL_NOT/13               #40=      #35                  ?0                  	;0	<<95
102 75   JMPZ/43                   ?0        #40                  ?105                	;0	>>105
103 76   NOP/0                     ?0        ?0                   ?0                  	;1
104 76   GOTO/253                  ?0        ?110                 ?75                 	;0
105 78   NOP/0                     ?0        ?0                   ?0                  	;1	<<102
106 78   GOTO/253                  ?0        ?109                 ?76                 	;0
107 82   NOP/0                     ?0        ?0                   ?0                  	;1
108 82   GOTO/253                  ?0        ?116                 ?77                 	;0
109 84   ECHO/40                   ?0        78:' selected'       ?0                  	;0
110 86   ECHO/40                   ?0        79:'>'               ?0                  	;0
111 87   FETCH_DIM_R/81            $41=      16?4                 80:'category_name'  	;0
112 87   ECHO/40                   ?0        $41                  ?0                  	;0
113 88   ECHO/40                   ?0        81:'</option>
                                    ' ?0                  	;0
114 89   NOP/0                     ?0        ?0                   ?0                  	;1
115 89   GOTO/253                  ?0        ?107                 ?82                 	;0
116 90   JMP/42                    ?0        ?73                  ?0                  	;0	>>73
117 90   FE_FREE/127               ?0        $27                  ?0                  	;0	<<72
118 92   GOTO/253                  ?0        ?1                   ?83                 	;0
119 94   BOOL_NOT/13               #42=      16?6                 ?0                  	;0
120 94   JMPZ/43                   ?0        #42                  ?122                	;0	>>122
121 95   GOTO/253                  ?0        ?123                 ?84                 	;0
122 97   ECHO/40                   ?0        85:'collapse'        ?0                  	;0	<<120
123 99   ECHO/40                   ?0        86:' form-group row mb-4">
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="stream_search" value="' ?0                  	;0
124 100  FETCH_STATIC_PROP_IS/176  $43=      87:'rRequest'        88:'XUI'            	;0
125 100  ISSET_ISEMPTY_DIM_OBJ/115 #44=      $43                  90:'search'         	;33554432
126 100  BOOL_NOT/13               #45=      #44                  ?0                  	;0
127 100  JMPZ/43                   ?0        #45                  ?129                	;0	>>129
128 101  GOTO/253                  ?0        ?58                  ?91                 	;0
129 103  GOTO/253                  ?0        ?52                  ?92                 	;0	<<127
130 105  INCLUDE_OR_EVAL/73        ?39       93:'session.php'     ?0                  	;2	<<0
131 106  INCLUDE_OR_EVAL/73        ?40       94:'functions.php'   ?0                  	;2
132 107  INIT_FCALL_BY_NAME/59     ?0        ?0                   95:'bAf6e9EF7775b5a9'	;0
133 107  DO_FCALL_BY_NAME/131      $48=      ?0                   ?0                  	;0
134 107  JMPZ/43                   ?0        $48                  ?136                	;0	>>136
135 108  GOTO/253                  ?0        ?138                 ?97                 	;0
136 110  INIT_FCALL_BY_NAME/59     ?0        ?0                   98:'e72F42a93714BA87'	;0	<<134
137 110  DO_FCALL_BY_NAME/131      ?42       ?0                   ?0                  	;0
138 112  GOTO/253                  ?0        ?46                  ?100                	;0
139 114  INCLUDE_OR_EVAL/73        ?43       101:'footer.php'     ?0                  	;2
140 115  NOP/0                     ?0        102:1                ?0                  	;4294967295
*/

?>