<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?54                  ?0                  	;0	>>54
1   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'htmlspecialchars'	;1
2   5    FETCH_STATIC_PROP_FUNC_ARG/177 $5=       3:'rRequest'         4:'XUI'             	;1
3   5    FETCH_DIM_FUNC_ARG/93     $6=       $5                   6:'search'          	;1
4   5    SEND_VAR_EX/66            ?80       $6                   ?1                  	;0
5   5    DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
6   5    ECHO/40                   ?0        $7                   ?0                  	;0
7   7    ECHO/40                   ?0        7:'" placeholder="Search Channels...">
                            </div>
                            <div class="col-md-4">
                                <select id="stream_category_id" class="form-control" data-toggle="select2">
                                    <option value="" selected>All Categories</option>
                                    ' ?0                  	;0
8   8    INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'F769E3f0c739D1a6'	;1
9   8    SEND_VAL_EX/116           ?80       10:'live'            ?1                  	;0
10  8    DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
11  8    FE_RESET_R/77             $9=       $8                   ?35                 	;0
12  8    FE_FETCH_R/78             ?0        $9                   16?0                	;35	>>35	<<34
13  9    ECHO/40                   ?0        11:'                                    <option value="' ?0                  	;0
14  10   FETCH_DIM_R/81            $10=      16?0                 12:'id'             	;0
15  10   ECHO/40                   ?0        $10                  ?0                  	;0
16  11   ECHO/40                   ?0        13:'"'               ?0                  	;0
17  12   FETCH_STATIC_PROP_IS/176  $11=      14:'rRequest'        15:'XUI'            	;0
18  12   ISSET_ISEMPTY_DIM_OBJ/115 #12=      $11                  17:'category'       	;33554432
19  12   JMPZ_EX/46                #12=      #12                  ?25                 	;0	>>25
20  12   FETCH_STATIC_PROP_R/173   $13=      18:'rRequest'        19:'XUI'            	;0
21  12   FETCH_DIM_R/81            $14=      $13                  21:'category'       	;0
22  12   FETCH_DIM_R/81            $15=      16?0                 22:'id'             	;0
23  12   IS_EQUAL/17               #16=      $14                  $15                 	;0
24  12   BOOL/52                   #12=      #16                  ?0                  	;0
25  12   BOOL_NOT/13               #17=      #12                  ?0                  	;0	<<19
26  12   JMPZ/43                   ?0        #17                  ?29                 	;0	>>29
27  13   NOP/0                     ?0        ?0                   ?0                  	;1
28  13   GOTO/253                  ?0        ?30                  ?23                 	;0
29  15   ECHO/40                   ?0        24:' selected'       ?0                  	;0	<<26
30  17   ECHO/40                   ?0        25:'>'               ?0                  	;0
31  18   FETCH_DIM_R/81            $18=      16?0                 26:'category_name'  	;0
32  18   ECHO/40                   ?0        $18                  ?0                  	;0
33  19   ECHO/40                   ?0        27:'</option>
                                    ' ?0                  	;0
34  20   JMP/42                    ?0        ?12                  ?0                  	;0	>>12
35  20   FE_FREE/127               ?0        $9                   ?0                  	;0	<<11
36  23   GOTO/253                  ?0        ?63                  ?28                 	;0
37  25   ASSIGN/38                 ?14       16?1                 29:'Created Channels'	;0
38  26   INCLUDE_OR_EVAL/73        ?15       30:'header.php'      ?0                  	;2
39  27   ECHO/40                   ?0        31:'<div class="wrapper boxed-layout-ext">
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
40  28   INCLUDE_OR_EVAL/73        ?16       32:'topbar.php'      ?0                  	;2
41  29   ECHO/40                   ?0        33:'					</div>
					<h4 class="page-title">Created Channels</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
                        <div id="collapse_filters" class="' ?0                  	;0
42  30   GOTO/253                  ?0        ?43                  ?34                 	;0
43  32   BOOL_NOT/13               #22=      16?2                 ?0                  	;0
44  32   JMPZ/43                   ?0        #22                  ?46                 	;0	>>46
45  33   GOTO/253                  ?0        ?47                  ?35                 	;0
46  35   ECHO/40                   ?0        36:'collapse'        ?0                  	;0	<<44
47  37   ECHO/40                   ?0        37:' form-group row mb-4">
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="stream_search" value="' ?0                  	;0
48  38   FETCH_STATIC_PROP_IS/176  $23=      38:'rRequest'        39:'XUI'            	;0
49  38   ISSET_ISEMPTY_DIM_OBJ/115 #24=      $23                  41:'search'         	;33554432
50  38   BOOL_NOT/13               #25=      #24                  ?0                  	;0
51  38   JMPZ/43                   ?0        #25                  ?53                 	;0	>>53
52  39   GOTO/253                  ?0        ?7                   ?42                 	;0
53  41   GOTO/253                  ?0        ?1                   ?43                 	;0	<<51
54  43   INCLUDE_OR_EVAL/73        ?21       44:'session.php'     ?0                  	;2	<<0
55  44   INCLUDE_OR_EVAL/73        ?22       45:'functions.php'   ?0                  	;2
56  45   INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'bAf6e9eF7775b5A9'	;0
57  45   DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
58  45   JMPZ/43                   ?0        $28                  ?60                 	;0	>>60
59  46   GOTO/253                  ?0        ?62                  ?48                 	;0
60  48   INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'E72F42a93714Ba87'	;0	<<58
61  48   DO_FCALL_BY_NAME/131      ?24       ?0                   ?0                  	;0
62  50   GOTO/253                  ?0        ?37                  ?51                 	;0
63  52   ECHO/40                   ?0        52:'                                </select>
                            </div>
                            <label class="col-md-1 col-form-label text-center" for="stream_show_entries">Show</label>
                            <div class="col-md-2">
                                <select id="stream_show_entries" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
64  53   FE_RESET_R/77             $30=      53:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?105                	;0
65  53   FE_FETCH_R/78             ?0        $30                  16?3                	;105	>>105	<<104
66  54   NOP/0                     ?0        ?0                   ?0                  	;1
67  54   GOTO/253                  ?0        ?71                  ?54                 	;0
68  56   ECHO/40                   ?0        55:'</option>
                                    ' ?0                  	;0
69  58   NOP/0                     ?0        ?0                   ?0                  	;1
70  58   GOTO/253                  ?0        ?104                 ?56                 	;0
71  60   ECHO/40                   ?0        57:'                                    <option' ?0                  	;0
72  61   FETCH_STATIC_PROP_IS/176  $31=      58:'rRequest'        59:'XUI'            	;0
73  61   ISSET_ISEMPTY_DIM_OBJ/115 #32=      $31                  61:'entries'        	;33554432
74  61   JMPZ/43                   ?0        #32                  ?77                 	;0	>>77
75  62   NOP/0                     ?0        ?0                   ?0                  	;1
76  62   GOTO/253                  ?0        ?94                  ?62                 	;0
77  64   FETCH_DIM_R/81            $33=      16?4                 63:'default_entries'	;0	<<74
78  64   IS_EQUAL/17               #34=      $33                  16?3                	;0
79  64   BOOL_NOT/13               #35=      #34                  ?0                  	;0
80  64   JMPZ/43                   ?0        #35                  ?83                 	;0	>>83
81  65   NOP/0                     ?0        ?0                   ?0                  	;1
82  65   GOTO/253                  ?0        ?84                  ?64                 	;0
83  67   ECHO/40                   ?0        65:' selected'       ?0                  	;0	<<80
84  69   NOP/0                     ?0        ?0                   ?0                  	;1
85  69   GOTO/253                  ?0        ?92                  ?66                 	;0
86  72   ECHO/40                   ?0        67:' value="'        ?0                  	;0
87  73   ECHO/40                   ?0        16?3                 ?0                  	;0
88  74   ECHO/40                   ?0        68:'">'              ?0                  	;0
89  75   ECHO/40                   ?0        16?3                 ?0                  	;0
90  76   NOP/0                     ?0        ?0                   ?0                  	;1
91  76   GOTO/253                  ?0        ?68                  ?69                 	;0
92  78   NOP/0                     ?0        ?0                   ?0                  	;1
93  78   GOTO/253                  ?0        ?86                  ?70                 	;0
94  80   FETCH_STATIC_PROP_R/173   $36=      71:'rRequest'        72:'XUI'            	;0
95  80   FETCH_DIM_R/81            $37=      $36                  74:'entries'        	;0
96  80   IS_EQUAL/17               #38=      $37                  16?3                	;0
97  80   BOOL_NOT/13               #39=      #38                  ?0                  	;0
98  80   JMPZ/43                   ?0        #39                  ?101                	;0	>>101
99  81   NOP/0                     ?0        ?0                   ?0                  	;1
100 81   GOTO/253                  ?0        ?102                 ?75                 	;0
101 83   ECHO/40                   ?0        76:' selected'       ?0                  	;0	<<98
102 85   NOP/0                     ?0        ?0                   ?0                  	;1
103 85   GOTO/253                  ?0        ?86                  ?77                 	;0
104 86   JMP/42                    ?0        ?65                  ?0                  	;0	>>65
105 86   FE_FREE/127               ?0        $30                  ?0                  	;0	<<64
106 89   ECHO/40                   ?0        78:'                                </select>
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
107 90   GOTO/253                  ?0        ?108                 ?79                 	;0
108 92   INCLUDE_OR_EVAL/73        ?35       80:'footer.php'      ?0                  	;2
109 93   NOP/0                     ?0        81:1                 ?0                  	;4294967295
*/

?>