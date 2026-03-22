<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?106                 ?0                  	;0	>>106
1   5    ECHO/40                   ?0        1:'collapse'         ?0                  	;0
2   7    ECHO/40                   ?0        2:' form-group row mb-4">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="reg_search" value="' ?0                  	;0
3   8    FETCH_STATIC_PROP_IS/176  $5=       3:'rRequest'         4:'XUI'             	;0
4   8    ISSET_ISEMPTY_DIM_OBJ/115 #6=       $5                   6:'search'          	;33554432
5   8    BOOL_NOT/13               #7=       #6                   ?0                  	;0
6   8    JMPZ/43                   ?0        #7                   ?8                  	;0	>>8
7   9    GOTO/253                  ?0        ?115                 ?7                  	;0
8   11   INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'htmlspecialchars'	;1	<<6
9   11   FETCH_STATIC_PROP_FUNC_ARG/177 $8=       10:'rRequest'        11:'XUI'            	;1
10  11   FETCH_DIM_FUNC_ARG/93     $9=       $8                   13:'search'         	;1
11  11   SEND_VAR_EX/66            ?80       $9                   ?1                  	;0
12  11   DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
13  11   ECHO/40                   ?0        $10                  ?0                  	;0
14  12   GOTO/253                  ?0        ?115                 ?14                 	;0
15  15   ECHO/40                   ?0        15:'                                </select>
                            </div>
                        </div>
						<table id="datatable-users" class="table table-striped table-borderless dt-responsive nowrap font-normal">
							<thead>
								<tr>
									<th class="text-center">ID</th>
									<th>Username</th>
									<th>Owner</th>
									<th class="text-center">IP</th>
									<th class="text-center">Status</th>
									<th class="text-center">Credits</th>
									<th class="text-center"># of Lines</th>
									<th class="text-center">Last Login</th>
									<th class="text-center">Actions</th>
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
16  16   GOTO/253                  ?0        ?122                 ?16                 	;0
17  18   FETCH_STATIC_PROP_IS/176  $11=      17:'rRequest'        18:'XUI'            	;0
18  18   ISSET_ISEMPTY_DIM_OBJ/115 #12=      $11                  20:'filter'         	;33554432
19  18   JMPZ_EX/46                #12=      #12                  ?24                 	;0	>>24
20  18   FETCH_STATIC_PROP_R/173   $13=      21:'rRequest'        22:'XUI'            	;0
21  18   FETCH_DIM_R/81            $14=      $13                  24:'filter'         	;0
22  18   IS_EQUAL/17               #15=      $14                  25:2                	;0
23  18   BOOL/52                   #12=      #15                  ?0                  	;0
24  18   BOOL_NOT/13               #16=      #12                  ?0                  	;0	<<19
25  18   JMPZ/43                   ?0        #16                  ?27                 	;0	>>27
26  19   GOTO/253                  ?0        ?28                  ?26                 	;0
27  21   ECHO/40                   ?0        27:' selected'       ?0                  	;0	<<25
28  23   ECHO/40                   ?0        28:'>Disabled</option>
                                </select>
                            </div>
                            <label class="col-md-1 col-form-label text-center" for="reg_show_entries">Show</label>
                            <div class="col-md-1">
                                <select id="reg_show_entries" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
29  24   FE_RESET_R/77             $17=      29:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?70                 	;0
30  24   FE_FETCH_R/78             ?0        $17                  16?0                	;70	>>70	<<69
31  25   NOP/0                     ?0        ?0                   ?0                  	;1
32  25   GOTO/253                  ?0        ?54                  ?30                 	;0
33  27   NOP/0                     ?0        ?0                   ?0                  	;1
34  27   GOTO/253                  ?0        ?45                  ?31                 	;0
35  29   FETCH_STATIC_PROP_R/173   $18=      32:'rRequest'        33:'XUI'            	;0
36  29   FETCH_DIM_R/81            $19=      $18                  35:'entries'        	;0
37  29   IS_EQUAL/17               #20=      $19                  16?0                	;0
38  29   BOOL_NOT/13               #21=      #20                  ?0                  	;0
39  29   JMPZ/43                   ?0        #21                  ?42                 	;0	>>42
40  30   NOP/0                     ?0        ?0                   ?0                  	;1
41  30   GOTO/253                  ?0        ?43                  ?36                 	;0
42  32   ECHO/40                   ?0        37:' selected'       ?0                  	;0	<<39
43  34   NOP/0                     ?0        ?0                   ?0                  	;1
44  34   GOTO/253                  ?0        ?45                  ?38                 	;0
45  37   ECHO/40                   ?0        39:' value="'        ?0                  	;0
46  38   ECHO/40                   ?0        16?0                 ?0                  	;0
47  39   ECHO/40                   ?0        40:'">'              ?0                  	;0
48  40   ECHO/40                   ?0        16?0                 ?0                  	;0
49  41   NOP/0                     ?0        ?0                   ?0                  	;1
50  41   GOTO/253                  ?0        ?51                  ?41                 	;0
51  43   ECHO/40                   ?0        42:'</option>
                                    ' ?0                  	;0
52  45   NOP/0                     ?0        ?0                   ?0                  	;1
53  45   GOTO/253                  ?0        ?69                  ?43                 	;0
54  47   ECHO/40                   ?0        44:'                                    <option' ?0                  	;0
55  48   FETCH_STATIC_PROP_IS/176  $22=      45:'rRequest'        46:'XUI'            	;0
56  48   ISSET_ISEMPTY_DIM_OBJ/115 #23=      $22                  48:'entries'        	;33554432
57  48   JMPZ/43                   ?0        #23                  ?60                 	;0	>>60
58  49   NOP/0                     ?0        ?0                   ?0                  	;1
59  49   GOTO/253                  ?0        ?35                  ?49                 	;0
60  51   FETCH_DIM_R/81            $24=      16?1                 50:'default_entries'	;0	<<57
61  51   IS_EQUAL/17               #25=      $24                  16?0                	;0
62  51   BOOL_NOT/13               #26=      #25                  ?0                  	;0
63  51   JMPZ/43                   ?0        #26                  ?66                 	;0	>>66
64  52   NOP/0                     ?0        ?0                   ?0                  	;1
65  52   GOTO/253                  ?0        ?67                  ?51                 	;0
66  54   ECHO/40                   ?0        52:' selected'       ?0                  	;0	<<63
67  56   NOP/0                     ?0        ?0                   ?0                  	;1
68  56   GOTO/253                  ?0        ?33                  ?53                 	;0
69  57   JMP/42                    ?0        ?30                  ?0                  	;0	>>30
70  57   FE_FREE/127               ?0        $17                  ?0                  	;0	<<29
71  59   GOTO/253                  ?0        ?15                  ?54                 	;0
72  61   ASSIGN/38                 ?22       16?2                 55:'Users'          	;0
73  62   INCLUDE_OR_EVAL/73        ?23       56:'header.php'      ?0                  	;2
74  63   ECHO/40                   ?0        57:'<div class="wrapper">
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
75  64   INCLUDE_OR_EVAL/73        ?24       58:'topbar.php'      ?0                  	;2
76  65   ECHO/40                   ?0        59:'					</div>
					<h4 class="page-title">Users</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
                ' ?0                  	;0
77  66   GOTO/253                  ?0        ?78                  ?60                 	;0
78  68   ISSET_ISEMPTY_CV/197      #30=      16?3                 ?0                  	;33554432
79  68   JMPZ_EX/46                #30=      #30                  ?83                 	;0	>>83
80  68   FETCH_CONSTANT/99         #31=      ?0                   61:'STATUS_SUCCESS' 	;16
81  68   IS_EQUAL/17               #32=      16?3                 #31                 	;0
82  68   BOOL/52                   #30=      #32                  ?0                  	;0
83  68   BOOL_NOT/13               #33=      #30                  ?0                  	;0	<<79
84  68   JMPZ/43                   ?0        #33                  ?86                 	;0	>>86
85  69   GOTO/253                  ?0        ?87                  ?64                 	;0
86  71   ECHO/40                   ?0        65:'                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    User has been added / modified.
                </div>
                ' ?0                  	;0	<<84
87  73   ECHO/40                   ?0        66:'				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
                        <div id="collapse_filters" class="' ?0                  	;0
88  74   BOOL_NOT/13               #34=      16?4                 ?0                  	;0
89  74   JMPZ/43                   ?0        #34                  ?91                 	;0	>>91
90  75   GOTO/253                  ?0        ?2                   ?67                 	;0
91  77   GOTO/253                  ?0        ?1                   ?68                 	;0	<<89
92  79   ECHO/40                   ?0        69:'>No Filter</option>
                                    <option value="1"' ?0                  	;0
93  80   FETCH_STATIC_PROP_IS/176  $35=      70:'rRequest'        71:'XUI'            	;0
94  80   ISSET_ISEMPTY_DIM_OBJ/115 #36=      $35                  73:'filter'         	;33554432
95  80   JMPZ_EX/46                #36=      #36                  ?100                	;0	>>100
96  80   FETCH_STATIC_PROP_R/173   $37=      74:'rRequest'        75:'XUI'            	;0
97  80   FETCH_DIM_R/81            $38=      $37                  77:'filter'         	;0
98  80   IS_EQUAL/17               #39=      $38                  78:1                	;0
99  80   BOOL/52                   #36=      #39                  ?0                  	;0
100 80   BOOL_NOT/13               #40=      #36                  ?0                  	;0	<<95
101 80   JMPZ/43                   ?0        #40                  ?103                	;0	>>103
102 81   GOTO/253                  ?0        ?104                 ?79                 	;0
103 83   ECHO/40                   ?0        80:' selected'       ?0                  	;0	<<101
104 85   ECHO/40                   ?0        81:'>Active</option>
                                    <option value="2"' ?0                  	;0
105 86   GOTO/253                  ?0        ?17                  ?82                 	;0
106 88   INCLUDE_OR_EVAL/73        ?36       83:'session.php'     ?0                  	;2	<<0
107 89   INCLUDE_OR_EVAL/73        ?37       84:'functions.php'   ?0                  	;2
108 90   INIT_FCALL_BY_NAME/59     ?0        ?0                   85:'BAF6E9ef7775b5A9'	;0
109 90   DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
110 90   JMPZ/43                   ?0        $43                  ?112                	;0	>>112
111 91   GOTO/253                  ?0        ?114                 ?87                 	;0
112 93   INIT_FCALL_BY_NAME/59     ?0        ?0                   88:'E72f42A93714ba87'	;0	<<110
113 93   DO_FCALL_BY_NAME/131      ?39       ?0                   ?0                  	;0
114 95   GOTO/253                  ?0        ?72                  ?90                 	;0
115 98   ECHO/40                   ?0        91:'" placeholder="Search Users...">
                            </div>
                            <label class="col-md-2 col-form-label text-center" for="reg_reseller">Filter Results</label>
                            <div class="col-md-2">
                                <select id="reg_filter" class="form-control" data-toggle="select2">
                                    <option value=""' ?0                  	;0
116 99   FETCH_STATIC_PROP_IS/176  $45=      92:'rRequest'        93:'XUI'            	;0
117 99   ISSET_ISEMPTY_DIM_OBJ/115 #46=      $45                  95:'filter'         	;33554432
118 99   JMPZ/43                   ?0        #46                  ?120                	;0	>>120
119 100  GOTO/253                  ?0        ?121                 ?96                 	;0
120 102  ECHO/40                   ?0        97:' selected'       ?0                  	;0	<<118
121 104  GOTO/253                  ?0        ?92                  ?98                 	;0
122 106  INCLUDE_OR_EVAL/73        ?42       99:'footer.php'      ?0                  	;2
123 107  NOP/0                     ?0        100:1                ?0                  	;4294967295
*/

?>