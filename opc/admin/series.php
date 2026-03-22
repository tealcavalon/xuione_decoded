<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?33                  ?0                  	;0	>>33
1   5    ISSET_ISEMPTY_CV/197      #7=       16?0                 ?0                  	;33554432
2   5    JMPZ_EX/46                #7=       #7                   ?6                  	;0	>>6
3   5    FETCH_CONSTANT/99         #8=       ?0                   1:'STATUS_SUCCESS'  	;16
4   5    IS_EQUAL/17               #9=       16?0                 #8                  	;0
5   5    BOOL/52                   #7=       #9                   ?0                  	;0
6   5    JMPZ/43                   ?0        #7                   ?8                  	;0	>>8	<<2
7   6    GOTO/253                  ?0        ?71                  ?4                  	;0
8   8    ISSET_ISEMPTY_CV/197      #10=      16?0                 ?0                  	;33554432	<<6
9   8    JMPZ_EX/46                #10=      #10                  ?13                 	;0	>>13
10  8    FETCH_CONSTANT/99         #11=      ?0                   5:'STATUS_SUCCESS_MULTI'	;16
11  8    IS_EQUAL/17               #12=      16?0                 #11                 	;0
12  8    BOOL/52                   #10=      #12                  ?0                  	;0
13  8    BOOL_NOT/13               #13=      #10                  ?0                  	;0	<<9
14  8    JMPZ/43                   ?0        #13                  ?16                 	;0	>>16
15  9    GOTO/253                  ?0        ?17                  ?8                  	;0
16  11   ECHO/40                   ?0        9:'				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Series are being imported in the background, series that can\'t be matched will not be added. Check Watch Folder logs for information.
				</div>
                ' ?0                  	;0	<<14
17  13   GOTO/253                  ?0        ?72                  ?10                 	;0
18  14   GOTO/253                  ?0        ?71                  ?11                 	;0
19  16   ECHO/40                   ?0        12:'>No TMDb Match</option>
                                    <option value="-1"' ?0                  	;0
20  17   FETCH_STATIC_PROP_IS/176  $14=      13:'rRequest'        14:'XUI'            	;0
21  17   ISSET_ISEMPTY_DIM_OBJ/115 #15=      $14                  16:'category'       	;33554432
22  17   JMPZ_EX/46                #15=      #15                  ?27                 	;0	>>27
23  17   FETCH_STATIC_PROP_R/173   $16=      17:'rRequest'        18:'XUI'            	;0
24  17   FETCH_DIM_R/81            $17=      $16                  20:'category'       	;0
25  17   IS_EQUAL/17               #18=      $17                  21:-2               	;0
26  17   BOOL/52                   #15=      #18                  ?0                  	;0
27  17   BOOL_NOT/13               #19=      #15                  ?0                  	;0	<<22
28  17   JMPZ/43                   ?0        #19                  ?30                 	;0	>>30
29  18   GOTO/253                  ?0        ?31                  ?22                 	;0
30  20   ECHO/40                   ?0        23:' selected'       ?0                  	;0	<<28
31  22   ECHO/40                   ?0        24:'>No Categories</option>
                                    ' ?0                  	;0
32  23   GOTO/253                  ?0        ?77                  ?25                 	;0
33  25   INCLUDE_OR_EVAL/73        ?13       26:'session.php'     ?0                  	;2	<<0
34  26   INCLUDE_OR_EVAL/73        ?14       27:'functions.php'   ?0                  	;2
35  27   INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'e6d500e19634D513'	;0
36  27   DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
37  27   JMPZ/43                   ?0        $22                  ?39                 	;0	>>39
38  28   GOTO/253                  ?0        ?41                  ?30                 	;0
39  30   INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'e72F42a93714ba87'	;0	<<37
40  30   DO_FCALL_BY_NAME/131      ?16       ?0                   ?0                  	;0
41  32   GOTO/253                  ?0        ?49                  ?33                 	;0
42  34   ECHO/40                   ?0        34:' style="display: none;"' ?0                  	;0
43  36   ECHO/40                   ?0        35:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
44  37   INCLUDE_OR_EVAL/73        ?17       36:'topbar.php'      ?0                  	;2
45  38   ECHO/40                   ?0        37:'					</div>
					<h4 class="page-title">TV Series</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
                ' ?0                  	;0
46  39   GOTO/253                  ?0        ?1                   ?38                 	;0
47  41   ECHO/40                   ?0        39:'                                </select>
                            </div>
                        </div>
						<table id="datatable-streampage" class="table table-striped table-borderless dt-responsive nowrap font-normal">
							<thead>
								<tr>
									<th class="text-center">ID</th>
                                    <th class="text-center">Image</th>
									<th>Name</th>
									<th>Category</th>
									<th class="text-center">Seasons</th>
									<th class="text-center">Episodes</th>
                                    <th class="text-center">TMDb</th>
									<th class="text-center">First Aired</th>
									<th class="text-center">Last Updated</th>
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
48  42   GOTO/253                  ?0        ?173                 ?40                 	;0
49  44   INIT_FCALL_BY_NAME/59     ?0        ?0                   41:'F769E3f0C739D1a6'	;1
50  44   SEND_VAL_EX/116           ?80       43:'series'          ?1                  	;0
51  44   DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
52  44   ASSIGN/38                 ?19       16?1                 $25                 	;0
53  45   ASSIGN/38                 ?20       16?2                 44:'TV Series'      	;0
54  46   INCLUDE_OR_EVAL/73        ?21       45:'header.php'      ?0                  	;2
55  47   ECHO/40                   ?0        46:'<div class="wrapper"' ?0                  	;0
56  48   FETCH_IS/89               $29=      47:'_SERVER'         ?0                  	;0
57  48   ISSET_ISEMPTY_DIM_OBJ/115 #30=      $29                  48:'HTTP_X_REQUESTED_WITH'	;16777216
58  48   BOOL_NOT/13               #31=      #30                  ?0                  	;0
59  48   JMPZ_EX/46                #31=      #31                  ?67                 	;0	>>67
60  48   INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'strtolower'     	;1
61  48   FETCH_FUNC_ARG/92         $32=      51:'_SERVER'         ?0                  	;1
62  48   FETCH_DIM_FUNC_ARG/93     $33=      $32                  52:'HTTP_X_REQUESTED_WITH'	;1
63  48   SEND_VAR_EX/66            ?80       $33                  ?1                  	;0
64  48   DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
65  48   IS_EQUAL/17               #35=      $34                  53:'xmlhttprequest' 	;0
66  48   BOOL/52                   #31=      #35                  ?0                  	;0
67  48   BOOL_NOT/13               #36=      #31                  ?0                  	;0	<<59
68  48   JMPZ/43                   ?0        #36                  ?70                 	;0	>>70
69  49   GOTO/253                  ?0        ?43                  ?54                 	;0
70  51   GOTO/253                  ?0        ?42                  ?55                 	;0	<<68
71  54   ECHO/40                   ?0        56:'				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Series has been added / modified.
				</div>
                ' ?0                  	;0
72  56   ECHO/40                   ?0        57:'				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
                        <div id="collapse_filters" class="' ?0                  	;0
73  57   BOOL_NOT/13               #37=      16?3                 ?0                  	;0
74  57   JMPZ/43                   ?0        #37                  ?76                 	;0	>>76
75  58   GOTO/253                  ?0        ?160                 ?58                 	;0
76  60   GOTO/253                  ?0        ?159                 ?59                 	;0	<<74
77  62   FE_RESET_R/77             $38=      16?1                 ?101                	;0
78  62   FE_FETCH_R/78             ?0        $38                  16?4                	;101	>>101	<<100
79  63   ECHO/40                   ?0        60:'                                    <option value="' ?0                  	;0
80  64   FETCH_DIM_R/81            $39=      16?4                 61:'id'             	;0
81  64   ECHO/40                   ?0        $39                  ?0                  	;0
82  65   ECHO/40                   ?0        62:'"'               ?0                  	;0
83  66   FETCH_STATIC_PROP_IS/176  $40=      63:'rRequest'        64:'XUI'            	;0
84  66   ISSET_ISEMPTY_DIM_OBJ/115 #41=      $40                  66:'category'       	;33554432
85  66   JMPZ_EX/46                #41=      #41                  ?91                 	;0	>>91
86  66   FETCH_STATIC_PROP_R/173   $42=      67:'rRequest'        68:'XUI'            	;0
87  66   FETCH_DIM_R/81            $43=      $42                  70:'category'       	;0
88  66   FETCH_DIM_R/81            $44=      16?4                 71:'id'             	;0
89  66   IS_EQUAL/17               #45=      $43                  $44                 	;0
90  66   BOOL/52                   #41=      #45                  ?0                  	;0
91  66   BOOL_NOT/13               #46=      #41                  ?0                  	;0	<<85
92  66   JMPZ/43                   ?0        #46                  ?95                 	;0	>>95
93  67   NOP/0                     ?0        ?0                   ?0                  	;1
94  67   GOTO/253                  ?0        ?96                  ?72                 	;0
95  69   ECHO/40                   ?0        73:' selected'       ?0                  	;0	<<92
96  71   ECHO/40                   ?0        74:'>'               ?0                  	;0
97  72   FETCH_DIM_R/81            $47=      16?4                 75:'category_name'  	;0
98  72   ECHO/40                   ?0        $47                  ?0                  	;0
99  73   ECHO/40                   ?0        76:'</option>
                                    ' ?0                  	;0
100 74   JMP/42                    ?0        ?78                  ?0                  	;0	>>78
101 74   FE_FREE/127               ?0        $38                  ?0                  	;0	<<77
102 77   ECHO/40                   ?0        77:'                                </select>
                            </div>
                            <label class="col-md-1 col-form-label text-center" for="series_show_entries">Show</label>
                            <div class="col-md-2">
                                <select id="series_show_entries" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
103 78   FE_RESET_R/77             $48=      78:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?144                	;0
104 78   FE_FETCH_R/78             ?0        $48                  16?5                	;144	>>144	<<143
105 79   NOP/0                     ?0        ?0                   ?0                  	;1
106 79   GOTO/253                  ?0        ?128                 ?79                 	;0
107 81   ECHO/40                   ?0        80:'</option>
                                    ' ?0                  	;0
108 83   NOP/0                     ?0        ?0                   ?0                  	;1
109 83   GOTO/253                  ?0        ?143                 ?81                 	;0
110 86   ECHO/40                   ?0        82:' value="'        ?0                  	;0
111 87   ECHO/40                   ?0        16?5                 ?0                  	;0
112 88   ECHO/40                   ?0        83:'">'              ?0                  	;0
113 89   ECHO/40                   ?0        16?5                 ?0                  	;0
114 90   NOP/0                     ?0        ?0                   ?0                  	;1
115 90   GOTO/253                  ?0        ?107                 ?84                 	;0
116 92   NOP/0                     ?0        ?0                   ?0                  	;1
117 92   GOTO/253                  ?0        ?110                 ?85                 	;0
118 94   FETCH_STATIC_PROP_R/173   $49=      86:'rRequest'        87:'XUI'            	;0
119 94   FETCH_DIM_R/81            $50=      $49                  89:'entries'        	;0
120 94   IS_EQUAL/17               #51=      $50                  16?5                	;0
121 94   BOOL_NOT/13               #52=      #51                  ?0                  	;0
122 94   JMPZ/43                   ?0        #52                  ?125                	;0	>>125
123 95   NOP/0                     ?0        ?0                   ?0                  	;1
124 95   GOTO/253                  ?0        ?126                 ?90                 	;0
125 97   ECHO/40                   ?0        91:' selected'       ?0                  	;0	<<122
126 99   NOP/0                     ?0        ?0                   ?0                  	;1
127 99   GOTO/253                  ?0        ?110                 ?92                 	;0
128 101  ECHO/40                   ?0        93:'                                    <option' ?0                  	;0
129 102  FETCH_STATIC_PROP_IS/176  $53=      94:'rRequest'        95:'XUI'            	;0
130 102  ISSET_ISEMPTY_DIM_OBJ/115 #54=      $53                  97:'entries'        	;33554432
131 102  JMPZ/43                   ?0        #54                  ?134                	;0	>>134
132 103  NOP/0                     ?0        ?0                   ?0                  	;1
133 103  GOTO/253                  ?0        ?118                 ?98                 	;0
134 105  FETCH_DIM_R/81            $55=      16?6                 99:'default_entries'	;0	<<131
135 105  IS_EQUAL/17               #56=      $55                  16?5                	;0
136 105  BOOL_NOT/13               #57=      #56                  ?0                  	;0
137 105  JMPZ/43                   ?0        #57                  ?140                	;0	>>140
138 106  NOP/0                     ?0        ?0                   ?0                  	;1
139 106  GOTO/253                  ?0        ?141                 ?100                	;0
140 108  ECHO/40                   ?0        101:' selected'      ?0                  	;0	<<137
141 110  NOP/0                     ?0        ?0                   ?0                  	;1
142 110  GOTO/253                  ?0        ?116                 ?102                	;0
143 111  JMP/42                    ?0        ?104                 ?0                  	;0	>>104
144 111  FE_FREE/127               ?0        $48                  ?0                  	;0	<<103
145 114  GOTO/253                  ?0        ?47                  ?103                	;0
146 117  ECHO/40                   ?0        104:'" placeholder="Search Series...">
                            </div>
                            <div class="col-md-3">
                                <select id="series_category_id" class="form-control" data-toggle="select2">
                                    <option value="">All Categories</option>
                                    <option value="-1"' ?0                  	;0
147 118  FETCH_STATIC_PROP_IS/176  $58=      105:'rRequest'       106:'XUI'           	;0
148 118  ISSET_ISEMPTY_DIM_OBJ/115 #59=      $58                  108:'category'      	;33554432
149 118  JMPZ_EX/46                #59=      #59                  ?154                	;0	>>154
150 118  FETCH_STATIC_PROP_R/173   $60=      109:'rRequest'       110:'XUI'           	;0
151 118  FETCH_DIM_R/81            $61=      $60                  112:'category'      	;0
152 118  IS_EQUAL/17               #62=      $61                  113:-1              	;0
153 118  BOOL/52                   #59=      #62                  ?0                  	;0
154 118  BOOL_NOT/13               #63=      #59                  ?0                  	;0	<<149
155 118  JMPZ/43                   ?0        #63                  ?157                	;0	>>157
156 119  GOTO/253                  ?0        ?158                 ?114                	;0
157 121  ECHO/40                   ?0        115:' selected'      ?0                  	;0	<<155
158 123  GOTO/253                  ?0        ?19                  ?116                	;0
159 125  ECHO/40                   ?0        117:'collapse'       ?0                  	;0
160 127  ECHO/40                   ?0        118:' form-group row mb-4">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="series_search" value="' ?0                  	;0
161 128  FETCH_STATIC_PROP_IS/176  $64=      119:'rRequest'       120:'XUI'           	;0
162 128  ISSET_ISEMPTY_DIM_OBJ/115 #65=      $64                  122:'search'        	;33554432
163 128  BOOL_NOT/13               #66=      #65                  ?0                  	;0
164 128  JMPZ/43                   ?0        #66                  ?166                	;0	>>166
165 129  GOTO/253                  ?0        ?146                 ?123                	;0
166 131  INIT_FCALL_BY_NAME/59     ?0        ?0                   124:'htmlspecialchars'	;1	<<164
167 131  FETCH_STATIC_PROP_FUNC_ARG/177 $67=      126:'rRequest'       127:'XUI'           	;1
168 131  FETCH_DIM_FUNC_ARG/93     $68=      $67                  129:'search'        	;1
169 131  SEND_VAR_EX/66            ?80       $68                  ?1                  	;0
170 131  DO_FCALL_BY_NAME/131      $69=      ?0                   ?0                  	;0
171 131  ECHO/40                   ?0        $69                  ?0                  	;0
172 132  GOTO/253                  ?0        ?146                 ?130                	;0
173 134  INCLUDE_OR_EVAL/73        ?63       131:'footer.php'     ?0                  	;2
174 135  NOP/0                     ?0        132:1                ?0                  	;4294967295
*/

?>