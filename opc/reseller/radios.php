<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?18                  ?0                  	;0	>>18
1   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'htmlspecialchars'	;1
2   5    FETCH_STATIC_PROP_FUNC_ARG/177 $7=       3:'rRequest'         4:'XUI'             	;1
3   5    FETCH_DIM_FUNC_ARG/93     $8=       $7                   6:'search'          	;1
4   5    SEND_VAR_EX/66            ?80       $8                   ?1                  	;0
5   5    DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
6   5    ECHO/40                   ?0        $9                   ?0                  	;0
7   7    ECHO/40                   ?0        7:'" placeholder="Search Stations...">
                            </div>
                            <div class="col-md-4">
                                <select id="station_category_id" class="form-control" data-toggle="select2">
                                    <option value="" selected>' ?0                  	;0
8   8    FETCH_DIM_R/81            $10=      16?0                 8:'all_categories'  	;0
9   8    ECHO/40                   ?0        $10                  ?0                  	;0
10  9    ECHO/40                   ?0        9:'</option>
                                    ' ?0                  	;0
11  10   GOTO/253                  ?0        ?29                  ?10                 	;0
12  12   ASSIGN/38                 ?4        16?1                 11:'Radio Stations' 	;0
13  13   INCLUDE_OR_EVAL/73        ?5        12:'header.php'      ?0                  	;2
14  14   ECHO/40                   ?0        13:'<div class="wrapper boxed-layout-ext">
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
15  15   INCLUDE_OR_EVAL/73        ?6        14:'topbar.php'      ?0                  	;2
16  16   ECHO/40                   ?0        15:'					</div>
					<h4 class="page-title">Radio Stations</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
                        <div id="collapse_filters" class="' ?0                  	;0
17  17   GOTO/253                  ?0        ?119                 ?16                 	;0
18  19   INCLUDE_OR_EVAL/73        ?7        17:'session.php'     ?0                  	;2	<<0
19  20   INCLUDE_OR_EVAL/73        ?8        18:'functions.php'   ?0                  	;2
20  21   INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'BaF6E9ef7775b5A9'	;0
21  21   DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
22  21   JMPZ/43                   ?0        $16                  ?24                 	;0	>>24
23  22   GOTO/253                  ?0        ?26                  ?21                 	;0
24  24   INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'e72F42a93714bA87'	;0	<<22
25  24   DO_FCALL_BY_NAME/131      ?10       ?0                   ?0                  	;0
26  26   GOTO/253                  ?0        ?12                  ?24                 	;0
27  28   ECHO/40                   ?0        25:'                                </select>
                            </div>
                        </div>
						<table id="datatable-streampage" class="table table-striped table-borderless dt-responsive nowrap font-normal">
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
28  29   GOTO/253                  ?0        ?130                 ?26                 	;0
29  31   INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'f769E3F0C739d1A6'	;1
30  31   SEND_VAL_EX/116           ?80       29:'radio'           ?1                  	;0
31  31   DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
32  31   FE_RESET_R/77             $19=      $18                  ?74                 	;0
33  31   FE_FETCH_R/78             ?0        $19                  16?2                	;74	>>74	<<73
34  32   NOP/0                     ?0        ?0                   ?0                  	;1
35  32   GOTO/253                  ?0        ?36                  ?30                 	;0
36  34   INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'in_array'       	;2
37  34   FETCH_DIM_FUNC_ARG/93     $20=      16?2                 33:'id'             	;1
38  34   SEND_VAR_EX/66            ?80       $20                  ?1                  	;0
39  34   FETCH_DIM_FUNC_ARG/93     $21=      16?3                 34:'category_ids'   	;2
40  34   SEND_VAR_EX/66            ?96       $21                  ?2                  	;0
41  34   DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
42  34   BOOL_NOT/13               #23=      $22                  ?0                  	;0
43  34   JMPZ/43                   ?0        #23                  ?46                 	;0	>>46
44  35   NOP/0                     ?0        ?0                   ?0                  	;1
45  35   GOTO/253                  ?0        ?64                  ?35                 	;0
46  37   ECHO/40                   ?0        36:'                                    <option value="' ?0                  	;0	<<43
47  38   FETCH_DIM_R/81            $24=      16?2                 37:'id'             	;0
48  38   ECHO/40                   ?0        $24                  ?0                  	;0
49  39   ECHO/40                   ?0        38:'"'               ?0                  	;0
50  40   FETCH_STATIC_PROP_IS/176  $25=      39:'rRequest'        40:'XUI'            	;0
51  40   ISSET_ISEMPTY_DIM_OBJ/115 #26=      $25                  42:'category'       	;33554432
52  40   JMPZ_EX/46                #26=      #26                  ?58                 	;0	>>58
53  40   FETCH_STATIC_PROP_R/173   $27=      43:'rRequest'        44:'XUI'            	;0
54  40   FETCH_DIM_R/81            $28=      $27                  46:'category'       	;0
55  40   FETCH_DIM_R/81            $29=      16?2                 47:'id'             	;0
56  40   IS_EQUAL/17               #30=      $28                  $29                 	;0
57  40   BOOL/52                   #26=      #30                  ?0                  	;0
58  40   BOOL_NOT/13               #31=      #26                  ?0                  	;0	<<52
59  40   JMPZ/43                   ?0        #31                  ?62                 	;0	>>62
60  41   NOP/0                     ?0        ?0                   ?0                  	;1
61  41   GOTO/253                  ?0        ?67                  ?48                 	;0
62  43   NOP/0                     ?0        ?0                   ?0                  	;1	<<59
63  43   GOTO/253                  ?0        ?66                  ?49                 	;0
64  47   NOP/0                     ?0        ?0                   ?0                  	;1
65  47   GOTO/253                  ?0        ?73                  ?50                 	;0
66  49   ECHO/40                   ?0        51:' selected'       ?0                  	;0
67  51   ECHO/40                   ?0        52:'>'               ?0                  	;0
68  52   FETCH_DIM_R/81            $32=      16?2                 53:'category_name'  	;0
69  52   ECHO/40                   ?0        $32                  ?0                  	;0
70  53   ECHO/40                   ?0        54:'</option>
                                    ' ?0                  	;0
71  54   NOP/0                     ?0        ?0                   ?0                  	;1
72  54   GOTO/253                  ?0        ?64                  ?55                 	;0
73  55   JMP/42                    ?0        ?33                  ?0                  	;0	>>33
74  55   FE_FREE/127               ?0        $19                  ?0                  	;0	<<32
75  58   ECHO/40                   ?0        56:'                                </select>
                            </div>
                            <label class="col-md-1 col-form-label text-center" for="station_show_entries">Show</label>
                            <div class="col-md-2">
                                <select id="station_show_entries" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
76  59   FE_RESET_R/77             $33=      57:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?117                	;0
77  59   FE_FETCH_R/78             ?0        $33                  16?4                	;117	>>117	<<116
78  60   NOP/0                     ?0        ?0                   ?0                  	;1
79  60   GOTO/253                  ?0        ?80                  ?58                 	;0
80  62   ECHO/40                   ?0        59:'                                    <option' ?0                  	;0
81  63   FETCH_STATIC_PROP_IS/176  $34=      60:'rRequest'        61:'XUI'            	;0
82  63   ISSET_ISEMPTY_DIM_OBJ/115 #35=      $34                  63:'entries'        	;33554432
83  63   JMPZ/43                   ?0        #35                  ?86                 	;0	>>86
84  64   NOP/0                     ?0        ?0                   ?0                  	;1
85  64   GOTO/253                  ?0        ?103                 ?64                 	;0
86  66   FETCH_DIM_R/81            $36=      16?5                 65:'default_entries'	;0	<<83
87  66   IS_EQUAL/17               #37=      $36                  16?4                	;0
88  66   BOOL_NOT/13               #38=      #37                  ?0                  	;0
89  66   JMPZ/43                   ?0        #38                  ?92                 	;0	>>92
90  67   NOP/0                     ?0        ?0                   ?0                  	;1
91  67   GOTO/253                  ?0        ?93                  ?66                 	;0
92  69   ECHO/40                   ?0        67:' selected'       ?0                  	;0	<<89
93  71   NOP/0                     ?0        ?0                   ?0                  	;1
94  71   GOTO/253                  ?0        ?101                 ?68                 	;0
95  74   ECHO/40                   ?0        69:' value="'        ?0                  	;0
96  75   ECHO/40                   ?0        16?4                 ?0                  	;0
97  76   ECHO/40                   ?0        70:'">'              ?0                  	;0
98  77   ECHO/40                   ?0        16?4                 ?0                  	;0
99  78   NOP/0                     ?0        ?0                   ?0                  	;1
100 78   GOTO/253                  ?0        ?113                 ?71                 	;0
101 80   NOP/0                     ?0        ?0                   ?0                  	;1
102 80   GOTO/253                  ?0        ?95                  ?72                 	;0
103 82   FETCH_STATIC_PROP_R/173   $39=      73:'rRequest'        74:'XUI'            	;0
104 82   FETCH_DIM_R/81            $40=      $39                  76:'entries'        	;0
105 82   IS_EQUAL/17               #41=      $40                  16?4                	;0
106 82   BOOL_NOT/13               #42=      #41                  ?0                  	;0
107 82   JMPZ/43                   ?0        #42                  ?110                	;0	>>110
108 83   NOP/0                     ?0        ?0                   ?0                  	;1
109 83   GOTO/253                  ?0        ?111                 ?77                 	;0
110 85   ECHO/40                   ?0        78:' selected'       ?0                  	;0	<<107
111 87   NOP/0                     ?0        ?0                   ?0                  	;1
112 87   GOTO/253                  ?0        ?95                  ?79                 	;0
113 89   ECHO/40                   ?0        80:'</option>
                                    ' ?0                  	;0
114 91   NOP/0                     ?0        ?0                   ?0                  	;1
115 91   GOTO/253                  ?0        ?116                 ?81                 	;0
116 92   JMP/42                    ?0        ?77                  ?0                  	;0	>>77
117 92   FE_FREE/127               ?0        $33                  ?0                  	;0	<<76
118 95   GOTO/253                  ?0        ?27                  ?82                 	;0
119 97   BOOL_NOT/13               #43=      16?6                 ?0                  	;0
120 97   JMPZ/43                   ?0        #43                  ?122                	;0	>>122
121 98   GOTO/253                  ?0        ?123                 ?83                 	;0
122 100  ECHO/40                   ?0        84:'collapse'        ?0                  	;0	<<120
123 102  ECHO/40                   ?0        85:' form-group row mb-4">
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="station_search" value="' ?0                  	;0
124 103  FETCH_STATIC_PROP_IS/176  $44=      86:'rRequest'        87:'XUI'            	;0
125 103  ISSET_ISEMPTY_DIM_OBJ/115 #45=      $44                  89:'search'         	;33554432
126 103  BOOL_NOT/13               #46=      #45                  ?0                  	;0
127 103  JMPZ/43                   ?0        #46                  ?129                	;0	>>129
128 104  GOTO/253                  ?0        ?7                   ?90                 	;0
129 106  GOTO/253                  ?0        ?1                   ?91                 	;0	<<127
130 108  INCLUDE_OR_EVAL/73        ?40       92:'footer.php'      ?0                  	;2
131 109  NOP/0                     ?0        93:1                 ?0                  	;4294967295
*/

?>