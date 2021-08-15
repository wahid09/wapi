(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["add_role"],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/admin/role/Add.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/admin/role/Add.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      module: [],
      form: new Form({
        name: '',
        name_bn: '',
        description: '',
        description_bn: '',
        isActive: '',
        permissions: ''
      })
    };
  },
  mounted: function mounted() {
    var _this = this;

    axios.get('api/v1/module_with_permission').then(function (response) {
      _this.module = response.data.data;
    });
  },
  computed: {
    chunkedItems: function chunkedItems() {
      return _.chunk(this.module, 8);
    }
  },
  methods: {
    createCategory: function createCategory() {
      var _this2 = this;

      this.$Progress.start();
      this.form.post('api/v1/category').then(function (response) {
        console.log(response);

        _this2.form.reset();

        _this2.$router.push('/category');

        Toast.fire({
          icon: 'success',
          title: 'Category added successfully'
        });

        _this2.$Progress.finish();
      })["catch"](function (e) {
        _this2.$Progress.fail();

        console.log(e);
      });
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/admin/role/Add.vue?vue&type=template&id=2f4db533&":
/*!*****************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/admin/role/Add.vue?vue&type=template&id=2f4db533& ***!
  \*****************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { attrs: { id: "category" } }, [
    _c("section", { staticClass: "content-header" }, [
      _c("div", { staticClass: "container-fluid" }, [
        _c("div", { staticClass: "row mb-2" }, [
          _vm._m(0),
          _vm._v(" "),
          _c("div", { staticClass: "col-sm-6" }, [
            _c("ol", { staticClass: "breadcrumb float-sm-right" }, [
              _c(
                "li",
                { staticClass: "breadcrumb-item" },
                [
                  _c(
                    "router-link",
                    {
                      staticClass: "btn btn-warning",
                      attrs: { to: "/category" }
                    },
                    [
                      _c("i", { staticClass: "fas fa-arrow-left" }),
                      _vm._v(" Back")
                    ]
                  )
                ],
                1
              )
            ])
          ])
        ])
      ])
    ]),
    _vm._v(" "),
    _c("section", { staticClass: "content" }, [
      _c("div", { staticClass: "container-fluid" }, [
        _c("div", { staticClass: "row" }, [
          _c("div", { staticClass: "col-12" }, [
            _c("div", { staticClass: "card" }, [
              _c(
                "form",
                {
                  on: {
                    submit: function($event) {
                      $event.preventDefault()
                      return _vm.createCategory.apply(null, arguments)
                    },
                    keydown: function($event) {
                      return _vm.form.onKeydown($event)
                    }
                  }
                },
                [
                  _c(
                    "div",
                    { staticClass: "card-body" },
                    [
                      _c("div", { staticClass: "form-group" }, [
                        _c("label", { attrs: { for: "name" } }, [
                          _vm._v("Name(English)")
                        ]),
                        _vm._v(" "),
                        _c("input", {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.form.name,
                              expression: "form.name"
                            }
                          ],
                          staticClass: "form-control",
                          attrs: {
                            type: "text",
                            id: "name",
                            placeholder: "Role name in english",
                            name: "name"
                          },
                          domProps: { value: _vm.form.name },
                          on: {
                            input: function($event) {
                              if ($event.target.composing) {
                                return
                              }
                              _vm.$set(_vm.form, "name", $event.target.value)
                            }
                          }
                        }),
                        _vm._v(" "),
                        _vm.form.errors.has("name")
                          ? _c("small", {
                              staticClass: "red",
                              domProps: {
                                innerHTML: _vm._s(_vm.form.errors.get("name"))
                              }
                            })
                          : _vm._e()
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "form-group" }, [
                        _c("label", { attrs: { for: "name_bn" } }, [
                          _vm._v("Name(Bangla)")
                        ]),
                        _vm._v(" "),
                        _c("input", {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.form.name_bn,
                              expression: "form.name_bn"
                            }
                          ],
                          staticClass: "form-control",
                          attrs: {
                            type: "text",
                            id: "name_bn",
                            placeholder: "Role name in bangla"
                          },
                          domProps: { value: _vm.form.name_bn },
                          on: {
                            input: function($event) {
                              if ($event.target.composing) {
                                return
                              }
                              _vm.$set(_vm.form, "name_bn", $event.target.value)
                            }
                          }
                        }),
                        _vm._v(" "),
                        _vm.form.errors.has("name_bn")
                          ? _c("small", {
                              staticClass: "red",
                              domProps: {
                                innerHTML: _vm._s(
                                  _vm.form.errors.get("name_bn")
                                )
                              }
                            })
                          : _vm._e()
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "form-group custom-switch" }, [
                        _c(
                          "div",
                          {
                            staticClass:
                              "custom-control custom-switch custom-switch-off-danger custom-switch-on-success"
                          },
                          [
                            _c("input", {
                              directives: [
                                {
                                  name: "model",
                                  rawName: "v-model",
                                  value: _vm.form.isActive,
                                  expression: "form.isActive"
                                }
                              ],
                              staticClass: "custom-control-input",
                              attrs: {
                                type: "checkbox",
                                id: "customSwitch1",
                                name: "isActive"
                              },
                              domProps: {
                                checked: Array.isArray(_vm.form.isActive)
                                  ? _vm._i(_vm.form.isActive, null) > -1
                                  : _vm.form.isActive
                              },
                              on: {
                                change: function($event) {
                                  var $$a = _vm.form.isActive,
                                    $$el = $event.target,
                                    $$c = $$el.checked ? true : false
                                  if (Array.isArray($$a)) {
                                    var $$v = null,
                                      $$i = _vm._i($$a, $$v)
                                    if ($$el.checked) {
                                      $$i < 0 &&
                                        _vm.$set(
                                          _vm.form,
                                          "isActive",
                                          $$a.concat([$$v])
                                        )
                                    } else {
                                      $$i > -1 &&
                                        _vm.$set(
                                          _vm.form,
                                          "isActive",
                                          $$a
                                            .slice(0, $$i)
                                            .concat($$a.slice($$i + 1))
                                        )
                                    }
                                  } else {
                                    _vm.$set(_vm.form, "isActive", $$c)
                                  }
                                }
                              }
                            }),
                            _vm._v(" "),
                            _c(
                              "label",
                              {
                                staticClass: "custom-control-label",
                                attrs: { for: "customSwitch1" }
                              },
                              [_vm._v("Status")]
                            )
                          ]
                        ),
                        _vm._v(" "),
                        _vm.form.errors.has("isActive")
                          ? _c("small", {
                              staticClass: "red",
                              domProps: {
                                innerHTML: _vm._s(
                                  _vm.form.errors.get("isActive")
                                )
                              }
                            })
                          : _vm._e()
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "text-center" }, [
                        _c("strong", [_vm._v("Manage Permission For Role")]),
                        _vm._v(" "),
                        _c("p", { staticClass: "p-2" }, [
                          _vm.form.errors.has("permissions")
                            ? _c("small", {
                                staticClass: "red",
                                domProps: {
                                  innerHTML: _vm._s(
                                    _vm.form.errors.get("permissions")
                                  )
                                }
                              })
                            : _vm._e()
                        ])
                      ]),
                      _vm._v(" "),
                      _vm._m(1),
                      _vm._v(" "),
                      _vm._l(_vm.chunkedItems, function(items) {
                        return _c(
                          "div",
                          { key: items.id, staticClass: "form-row" },
                          _vm._l(items, function(item) {
                            return _c(
                              "div",
                              { key: item.id, staticClass: "col" },
                              [
                                _c("h5", { staticClass: "cyan" }, [
                                  _vm._v("Module:" + _vm._s(item.name))
                                ]),
                                _vm._v(" "),
                                _vm._l(item.permissions, function(permission) {
                                  return _c(
                                    "div",
                                    {
                                      key: permission.id,
                                      staticClass: "mb-3 ml-4"
                                    },
                                    [
                                      _c(
                                        "div",
                                        {
                                          staticClass:
                                            "custom-control custom-checkbox mb-2"
                                        },
                                        [
                                          _c("input", {
                                            directives: [
                                              {
                                                name: "model",
                                                rawName: "v-model",
                                                value: _vm.form.permissions,
                                                expression: "form.permissions"
                                              }
                                            ],
                                            staticClass: "custom-control-input",
                                            attrs: {
                                              type: "checkbox",
                                              id: "permission_" + permission.id,
                                              name: "permissions[]"
                                            },
                                            domProps: {
                                              value: permission.name,
                                              checked: Array.isArray(
                                                _vm.form.permissions
                                              )
                                                ? _vm._i(
                                                    _vm.form.permissions,
                                                    permission.name
                                                  ) > -1
                                                : _vm.form.permissions
                                            },
                                            on: {
                                              change: function($event) {
                                                var $$a = _vm.form.permissions,
                                                  $$el = $event.target,
                                                  $$c = $$el.checked
                                                    ? true
                                                    : false
                                                if (Array.isArray($$a)) {
                                                  var $$v = permission.name,
                                                    $$i = _vm._i($$a, $$v)
                                                  if ($$el.checked) {
                                                    $$i < 0 &&
                                                      _vm.$set(
                                                        _vm.form,
                                                        "permissions",
                                                        $$a.concat([$$v])
                                                      )
                                                  } else {
                                                    $$i > -1 &&
                                                      _vm.$set(
                                                        _vm.form,
                                                        "permissions",
                                                        $$a
                                                          .slice(0, $$i)
                                                          .concat(
                                                            $$a.slice($$i + 1)
                                                          )
                                                      )
                                                  }
                                                } else {
                                                  _vm.$set(
                                                    _vm.form,
                                                    "permissions",
                                                    $$c
                                                  )
                                                }
                                              }
                                            }
                                          }),
                                          _vm._v(" "),
                                          _c(
                                            "label",
                                            {
                                              staticClass:
                                                "custom-control-label",
                                              attrs: {
                                                for:
                                                  "permission_" + permission.id
                                              }
                                            },
                                            [_vm._v(_vm._s(permission.name))]
                                          )
                                        ]
                                      )
                                    ]
                                  )
                                })
                              ],
                              2
                            )
                          }),
                          0
                        )
                      })
                    ],
                    2
                  ),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group" }, [
                    _c("label"),
                    _vm._v(" "),
                    _c(
                      "button",
                      {
                        staticClass: "btn btn-primary",
                        attrs: { type: "submit", disabled: _vm.form.busy }
                      },
                      [_vm._v("Submit")]
                    )
                  ])
                ]
              )
            ])
          ])
        ])
      ])
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-sm-6" }, [
      _c("h3", [
        _c("i", { staticClass: "fas fa-sitemap" }),
        _vm._v("  Add New Category")
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "form-group left" }, [
      _c("div", { staticClass: "custom-control custom-checkbox" }, [
        _c("input", {
          staticClass: "custom-control-input",
          attrs: { type: "checkbox", id: "select-all" }
        }),
        _vm._v(" "),
        _c(
          "label",
          { staticClass: "custom-control-label", attrs: { for: "select-all" } },
          [_vm._v("Select All")]
        )
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/admin/role/Add.vue":
/*!****************************************************!*\
  !*** ./resources/js/components/admin/role/Add.vue ***!
  \****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Add_vue_vue_type_template_id_2f4db533___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Add.vue?vue&type=template&id=2f4db533& */ "./resources/js/components/admin/role/Add.vue?vue&type=template&id=2f4db533&");
/* harmony import */ var _Add_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Add.vue?vue&type=script&lang=js& */ "./resources/js/components/admin/role/Add.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Add_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Add_vue_vue_type_template_id_2f4db533___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Add_vue_vue_type_template_id_2f4db533___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/admin/role/Add.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/admin/role/Add.vue?vue&type=script&lang=js&":
/*!*****************************************************************************!*\
  !*** ./resources/js/components/admin/role/Add.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Add_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../node_modules/vue-loader/lib??vue-loader-options!./Add.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/admin/role/Add.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Add_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/admin/role/Add.vue?vue&type=template&id=2f4db533&":
/*!***********************************************************************************!*\
  !*** ./resources/js/components/admin/role/Add.vue?vue&type=template&id=2f4db533& ***!
  \***********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Add_vue_vue_type_template_id_2f4db533___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib??vue-loader-options!./Add.vue?vue&type=template&id=2f4db533& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/admin/role/Add.vue?vue&type=template&id=2f4db533&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Add_vue_vue_type_template_id_2f4db533___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Add_vue_vue_type_template_id_2f4db533___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);