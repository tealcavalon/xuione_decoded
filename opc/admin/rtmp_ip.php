<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?18                  ?0                  	;0	>>18
1   5    INCLUDE_OR_EVAL/73        ?0        1:'topbar.php'       ?0                  	;2
2   6    ECHO/40                   ?0        2:'					</div>
					<h4 class="page-title">' ?0                  	;0
3   7    ISSET_ISEMPTY_DIM_OBJ/115 #3=       16?0                 3:'id'              	;33554432
4   7    JMPZ/43                   ?0        #3                   ?6                  	;0	>>6
5   8    GOTO/253                  ?0        ?9                   ?4                  	;0
6   10   ECHO/40                   ?0        5:'Add'              ?0                  	;0	<<4
7   11   GOTO/253                  ?0        ?10                  ?6                  	;0
8   12   GOTO/253                  ?0        ?9                   ?7                  	;0
9   15   ECHO/40                   ?0        8:'Edit'             ?0                  	;0
10  17   ECHO/40                   ?0        9:' RTMP IP</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<form action="#" method="POST" data-parsley-validate="">
							' ?0                  	;0
11  18   ISSET_ISEMPTY_DIM_OBJ/115 #4=       16?0                 10:'id'             	;33554432
12  18   BOOL_NOT/13               #5=       #4                   ?0                  	;0
13  18   JMPZ/43                   ?0        #5                   ?15                 	;0	>>15
14  19   GOTO/253                  ?0        ?31                  ?11                 	;0
15  21   GOTO/253                  ?0        ?27                  ?12                 	;0	<<13
16  23   ECHO/40                   ?0        13:'" />
											</li>
										</ul>
									</div>
								</div> 
							</div> 
						</form>

					</div> 
				</div> 
			</div> 
		</div>
	</div>
</div>
' ?0                  	;0
17  24   GOTO/253                  ?0        ?134                 ?14                 	;0
18  26   INCLUDE_OR_EVAL/73        ?4        15:'session.php'     ?0                  	;2	<<0
19  27   INCLUDE_OR_EVAL/73        ?5        16:'functions.php'   ?0                  	;2
20  28   INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'e6d500e19634d513'	;0
21  28   DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
22  28   JMPZ/43                   ?0        $8                   ?24                 	;0	>>24
23  29   GOTO/253                  ?0        ?26                  ?19                 	;0
24  31   INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'E72f42A93714Ba87'	;0	<<22
25  31   DO_FCALL_BY_NAME/131      ?7        ?0                   ?0                  	;0
26  33   GOTO/253                  ?0        ?93                  ?22                 	;0
27  35   ECHO/40                   ?0        23:'							<input type="hidden" name="edit" value="' ?0                  	;0
28  36   FETCH_DIM_R/81            $10=      16?0                 24:'id'             	;0
29  36   ECHO/40                   ?0        $10                  ?0                  	;0
30  37   ECHO/40                   ?0        25:'" />
							'    ?0                  	;0
31  39   ECHO/40                   ?0        26:'							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#ip-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">Details</span>
										</a>
									</li>
								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="ip-details">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="ip">IP Address</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="ip" name="ip" value="' ?0                  	;0
32  40   GOTO/253                  ?0        ?44                  ?27                 	;0
33  44   ECHO/40                   ?0        28:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="pull">Pull <i title="Allow this IP to request RTMP streams from your service." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="pull" id="pull" type="checkbox" ' ?0                  	;0
34  45   ISSET_ISEMPTY_CV/197      #11=      16?0                 ?0                  	;33554432
35  45   BOOL_NOT/13               #12=      #11                  ?0                  	;0
36  45   JMPZ/43                   ?0        #12                  ?38                 	;0	>>38
37  46   GOTO/253                  ?0        ?88                  ?29                 	;0
38  48   FETCH_DIM_R/81            $13=      16?0                 30:'pull'           	;0	<<36
39  48   IS_EQUAL/17               #14=      $13                  31:1                	;0
40  48   BOOL_NOT/13               #15=      #14                  ?0                  	;0
41  48   JMPZ/43                   ?0        #15                  ?43                 	;0	>>43
42  49   GOTO/253                  ?0        ?88                  ?32                 	;0
43  51   GOTO/253                  ?0        ?87                  ?33                 	;0	<<41
44  53   ISSET_ISEMPTY_CV/197      #16=      16?0                 ?0                  	;33554432
45  53   BOOL_NOT/13               #17=      #16                  ?0                  	;0
46  53   JMPZ/43                   ?0        #17                  ?48                 	;0	>>48
47  54   GOTO/253                  ?0        ?53                  ?34                 	;0
48  56   INIT_FCALL_BY_NAME/59     ?0        ?0                   35:'htmlspecialchars'	;1	<<46
49  56   FETCH_DIM_FUNC_ARG/93     $18=      16?0                 37:'ip'             	;1
50  56   SEND_VAR_EX/66            ?80       $18                  ?1                  	;0
51  56   DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
52  56   ECHO/40                   ?0        $19                  ?0                  	;0
53  58   ECHO/40                   ?0        38:'" required data-parsley-trigger="change">
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="password">Password</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="password" name="password" placeholder="Auto-generate if blank" value="' ?0                  	;0
54  59   ISSET_ISEMPTY_CV/197      #20=      16?0                 ?0                  	;33554432
55  59   BOOL_NOT/13               #21=      #20                  ?0                  	;0
56  59   JMPZ/43                   ?0        #21                  ?58                 	;0	>>58
57  60   GOTO/253                  ?0        ?64                  ?39                 	;0
58  62   GOTO/253                  ?0        ?59                  ?40                 	;0	<<56
59  64   INIT_FCALL_BY_NAME/59     ?0        ?0                   41:'htmlspecialchars'	;1
60  64   FETCH_DIM_FUNC_ARG/93     $22=      16?0                 43:'password'       	;1
61  64   SEND_VAR_EX/66            ?80       $22                  ?1                  	;0
62  64   DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
63  64   ECHO/40                   ?0        $23                  ?0                  	;0
64  66   ECHO/40                   ?0        44:'" data-indicator="pwindicator">
                                                        <div id="pwindicator">
                                                            <div class="bar"></div>
                                                            <div class="label"></div>
                                                        </div>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="notes">Notes</label>
													<div class="col-md-8">
														<textarea class="form-control" id="notes" name="notes">' ?0                  	;0
65  67   ISSET_ISEMPTY_CV/197      #24=      16?0                 ?0                  	;33554432
66  67   BOOL_NOT/13               #25=      #24                  ?0                  	;0
67  67   JMPZ/43                   ?0        #25                  ?69                 	;0	>>69
68  68   GOTO/253                  ?0        ?75                  ?45                 	;0
69  70   INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'htmlspecialchars'	;1	<<67
70  70   FETCH_DIM_FUNC_ARG/93     $26=      16?0                 48:'notes'          	;1
71  70   SEND_VAR_EX/66            ?80       $26                  ?1                  	;0
72  70   DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
73  70   ECHO/40                   ?0        $27                  ?0                  	;0
74  71   GOTO/253                  ?0        ?75                  ?49                 	;0
75  74   ECHO/40                   ?0        50:'</textarea>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="push">Push <i title="Allow this IP to publish RTMP streams to your service." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="push" id="push" type="checkbox" ' ?0                  	;0
76  75   ISSET_ISEMPTY_CV/197      #28=      16?0                 ?0                  	;33554432
77  75   BOOL_NOT/13               #29=      #28                  ?0                  	;0
78  75   JMPZ/43                   ?0        #29                  ?80                 	;0	>>80
79  76   GOTO/253                  ?0        ?33                  ?51                 	;0
80  78   FETCH_DIM_R/81            $30=      16?0                 52:'push'           	;0	<<78
81  78   IS_EQUAL/17               #31=      $30                  53:1                	;0
82  78   BOOL_NOT/13               #32=      #31                  ?0                  	;0
83  78   JMPZ/43                   ?0        #32                  ?85                 	;0	>>85
84  79   GOTO/253                  ?0        ?33                  ?54                 	;0
85  81   ECHO/40                   ?0        55:'checked '        ?0                  	;0	<<83
86  82   GOTO/253                  ?0        ?33                  ?56                 	;0
87  84   ECHO/40                   ?0        57:'checked '        ?0                  	;0
88  87   ECHO/40                   ?0        58:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="list-inline-item float-right">
												<input name="submit_ip" type="submit" class="btn btn-primary" value="' ?0                  	;0
89  88   ISSET_ISEMPTY_DIM_OBJ/115 #33=      16?0                 59:'id'             	;33554432
90  88   JMPZ/43                   ?0        #33                  ?92                 	;0	>>92
91  89   GOTO/253                  ?0        ?132                 ?60                 	;0
92  91   GOTO/253                  ?0        ?130                 ?61                 	;0	<<90
93  93   FETCH_STATIC_PROP_IS/176  $34=      62:'rRequest'        63:'XUI'            	;0
94  93   ISSET_ISEMPTY_DIM_OBJ/115 #35=      $34                  65:'id'             	;33554432
95  93   JMPZ_EX/46                #35=      #35                  ?104                	;0	>>104
96  93   INIT_FCALL_BY_NAME/59     ?0        ?0                   66:'DD77c27786C11aAd'	;1
97  93   FETCH_STATIC_PROP_FUNC_ARG/177 $36=      68:'rRequest'        69:'XUI'            	;1
98  93   FETCH_DIM_FUNC_ARG/93     $37=      $36                  71:'id'             	;1
99  93   SEND_VAR_EX/66            ?80       $37                  ?1                  	;0
100 93   DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
101 93   ASSIGN/38                 $39=      16?0                 $38                 	;0
102 93   BOOL_NOT/13               #40=      $39                  ?0                  	;0
103 93   BOOL/52                   #35=      #40                  ?0                  	;0
104 93   BOOL_NOT/13               #41=      #35                  ?0                  	;0	<<95
105 93   JMPZ/43                   ?0        #41                  ?107                	;0	>>107
106 94   GOTO/253                  ?0        ?109                 ?72                 	;0
107 96   INIT_FCALL_BY_NAME/59     ?0        ?0                   73:'e72f42a93714ba87'	;0	<<105
108 96   DO_FCALL_BY_NAME/131      ?40       ?0                   ?0                  	;0
109 98   ASSIGN/38                 ?41       16?1                 75:'RTMP IP'        	;0
110 99   INCLUDE_OR_EVAL/73        ?42       76:'header.php'      ?0                  	;2
111 100  GOTO/253                  ?0        ?112                 ?77                 	;0
112 102  ECHO/40                   ?0        78:'<div class="wrapper boxed-layout"' ?0                  	;0
113 103  FETCH_IS/89               $45=      79:'_SERVER'         ?0                  	;0
114 103  ISSET_ISEMPTY_DIM_OBJ/115 #46=      $45                  80:'HTTP_X_REQUESTED_WITH'	;16777216
115 103  BOOL_NOT/13               #47=      #46                  ?0                  	;0
116 103  JMPZ_EX/46                #47=      #47                  ?124                	;0	>>124
117 103  INIT_FCALL_BY_NAME/59     ?0        ?0                   81:'strtolower'     	;1
118 103  FETCH_FUNC_ARG/92         $48=      83:'_SERVER'         ?0                  	;1
119 103  FETCH_DIM_FUNC_ARG/93     $49=      $48                  84:'HTTP_X_REQUESTED_WITH'	;1
120 103  SEND_VAR_EX/66            ?80       $49                  ?1                  	;0
121 103  DO_FCALL_BY_NAME/131      $50=      ?0                   ?0                  	;0
122 103  IS_EQUAL/17               #51=      $50                  85:'xmlhttprequest' 	;0
123 103  BOOL/52                   #47=      #51                  ?0                  	;0
124 103  BOOL_NOT/13               #52=      #47                  ?0                  	;0	<<116
125 103  JMPZ/43                   ?0        #52                  ?127                	;0	>>127
126 104  GOTO/253                  ?0        ?128                 ?86                 	;0
127 106  ECHO/40                   ?0        87:' style="display: none;"' ?0                  	;0	<<125
128 108  ECHO/40                   ?0        88:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
129 109  GOTO/253                  ?0        ?1                   ?89                 	;0
130 111  ECHO/40                   ?0        90:'Add'             ?0                  	;0
131 112  GOTO/253                  ?0        ?133                 ?91                 	;0
132 114  ECHO/40                   ?0        92:'Edit'            ?0                  	;0
133 116  GOTO/253                  ?0        ?16                  ?93                 	;0
134 118  INCLUDE_OR_EVAL/73        ?51       94:'footer.php'      ?0                  	;2
135 119  NOP/0                     ?0        95:1                 ?0                  	;4294967295
*/

?>