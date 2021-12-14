jQuery(document).ready(function () {
  var id;
  var counter = 5;
  function showmessage(msg) {
    jQuery("#Success-Msg").text(msg);
    jQuery("#Success-Msg").fadeIn('slow');
    id = setInterval(function () {
      counter--;
      if (counter < 0) {
        jQuery("#Success-Msg").fadeOut("slow");
        clearInterval(id);
      }
    }, 1000);
  }
  //--------------For Preview Image-------------
  jQuery("#image").on("change", function () {
    //Get count of selected files
    var countFiles = jQuery(this)[0].files.length;
    var imgPath = jQuery(this)[0].value;
    var extn = imgPath.substring(imgPath.lastIndexOf(".") + 1).toLowerCase();
    var image_preview = jQuery("#image-preview");
    image_preview.empty();
    if (extn == "png") {
      if (typeof FileReader != "undefined") {
        //loop for each file selected for uploaded.
        for (var i = 0; i < countFiles; i++) {
          var reader = new FileReader();
          reader.onload = function (e) {
            jQuery("<img />", {
              src: e.target.result,
              class: "thumb-image",
            }).appendTo(image_preview);
          };
          image_preview.show();
          reader.readAsDataURL(jQuery(this)[0].files[i]);
        }
      } else {
        alert("This browser does not support FileReader.");
      }
    } else {
      alert("Pls select only PNG Image");
      jQuery("#image-preview").html(" ");
    }
  });
  // ---------------For Load Category and SubCategory----------------
  function loadData(type, categoryId) {
    jQuery.ajax({
      url: "includes/load-catsub.php",
      type: "POST",
      data: {
        type: type,
        id: categoryId,
      },
      success: function (data) {
        if (type == "subcatData") {
          jQuery("#post-subCategory").html(data);
        } else {
          jQuery("#post-category").append(data);
        }
      },
    });
  }
  loadData();
  jQuery("#post-category").on("change", function () {
    var category = jQuery("#post-category").val();
    if (category != "") {
      loadData("subcatData", category);
    }
  });
  //--------------For Adding Posts-------------
  jQuery("#post-form").on("submit", function (e) {
    e.preventDefault();
    var pForm = this;
    var formData = new FormData(pForm);
    jQuery.ajax({
      url: "includes/add-post.php",
      type: "POST",
      data: formData,
      mimeType: "multipart/form-data",
      contentType: false,
      processData: false,
      success: function (data) {
        if (data == 1) {
          jQuery(pForm).trigger("reset");
          jQuery("#image-preview").html(" ");
          showmessage("Post Successfully Added");

        } else alert(data);
      },
    });
  });
  // jQuery(document).on("click", "#addpost", function (e) {
  //   e.preventDefault();
  //   jQuery("#load-category").hide();
  //   jQuery("#load-user").hide();
  //   jQuery("#load-post").hide();
  //   jQuery("#add-post-form").show();
  // });
  //--------------For add new post button-------------
  // jQuery(document).on("click", "#add-new-post", function (e) {
  //     e.preventDefault();
  // });
  //--------------***For Manage Posts***-------------
  //--------------For Showing Posts-------------
  // jQuery("#managepost").on("click", function (e) {
  //   e.preventDefault();
  //   jQuery("#load-category").hide();
  //   jQuery("#load-subcategory").hide();
  //   jQuery("#load-user").hide();
  //   jQuery("#add-post-form").hide();
  //   jQuery("#load-post").show();
  //   jQuery.ajax({
  //     url: "managepost.php",
  //     type: "POST",
  //     success: function (data) {
  //       jQuery("#load-post").html(data);
  //     },
  //   });
  // });
  //--------------For Delete Posts-------------
  jQuery(document).on("click", ".delete-post", function () {
    if (confirm("Do you realy want to delete this post ?")) {
      var post = this;
      var postId = jQuery(post).data("id");
      jQuery.ajax({
        url: "includes/delete-post.php",
        type: "POST",
        data: {
          id: postId,
        },
        success: function (data) {
          if (data == 1) {
            jQuery(post).closest("tr").fadeOut();
            showmessage("Post deleted Successfully");
          } else {
            alert(data);
          }
        },
      });
    }
  });
  //--------------**For Manage Category**-------------
  //--------------For SHowing Category-------------
  // function loadCategory() {
  //   jQuery("#load-post").hide();
  //   jQuery("#load-subcategory").hide();
  //   jQuery("#load-user").hide();
  //   jQuery("#add-post-form").hide();
  //   jQuery("#load-category").show();
  //   jQuery.ajax({
  //     url: "managecategory.php",
  //     type: "POST",
  //     success: function (data) {
  //       jQuery("#load-category").html(data);
  //     },
  //   });
  // }
  // jQuery("#managecategory").on("click", function (e) {
  //   e.preventDefault();
  //   loadCategory();
  // });
  //--------------For Add new category-------------
  jQuery(document).on("click", "#add-category", function (e) {
    e.preventDefault();
    var catName = jQuery(".category-name").val();
    jQuery.ajax({
      url: "includes/add-category.php",
      type: "POST",
      data: {
        catname: catName,
      },
      success: function (data) {
        if (data == 1) {
          showmessage("Category added Successfully");
          // loadCategory();
        } else {
          alert(data);
        }
      },
    });
  });
  //--------------For Delete category-------------
  jQuery(document).on("click", ".delete-category", function () {
    if (confirm("Do you realy want to delete this category ?")) {
      var category = this;
      if (jQuery(category).data("posts") == 0) {
        var categoryId = jQuery(category).data("id");
        jQuery.ajax({
          url: "includes/delete-category.php",
          type: "POST",
          data: {
            id: categoryId,
          },
          success: function (data) {
            if (data == 1) {
              jQuery(category).closest("tr").fadeOut("slow");
              showmessage("Category Deleted Succussfully");
              // loadCategory();
            } else {
              alert(data);
            }
          },
        });
      } else {
        alert("Can't delete this category Because No. of Posts more than 0.");
      }
    }
  });
  //--------------For Add to home category button-------------
  jQuery(document).on("click", ".add-to-home", function () {
    var Category = this;
    var catId = jQuery(Category).data("id");
    var catStatus = jQuery(Category).data("status");
    jQuery.ajax({
      url: "includes/change-cat-status.php",
      type: "POST",
      data: {
        id: catId,
        status: catStatus,
      },
      success: function (data) {
        if (data == 1) {
          jQuery(Category).text("Added");
          // loadCategory();
        } else {
          jQuery(Category).text("Add");
          // loadCategory();
        }
      },
    });
  });
  //--------------**For Manage SubCategory**-------------
  //--------------For SHowing SubCategory-------------
  // function loadSubCategory() {
  //   jQuery("#load-post").hide();
  //   jQuery("#load-user").hide();
  //   jQuery("#add-post-form").hide();
  //   jQuery("#load-category").hide();
  //   jQuery("#load-subcategory").show();
  //   jQuery.ajax({
  //     url: "managesubcategory.php",
  //     type: "POST",
  //     success: function (data) {
  //       jQuery("#load-subcategory").html(data);
  //     },
  //   });
  // }
  // jQuery("#managesubcategory").on("click", function (e) {
  //   e.preventDefault();
  //   loadSubCategory();
  // });
  //--------------For Add new Sub-category-------------
  jQuery(document).on("click", "#add-sub-category", function (e) {
    e.preventDefault();
    var subCatName = jQuery("#sub-category-name").val();
    var catId = jQuery("#category").val();
    jQuery.ajax({
      url: "includes/add-subcategory.php",
      type: "POST",
      data: {
        subcatname: subCatName,
        catid: catId,
      },
      success: function (data) {
        if (data == 1) {
          showmessage("Sub-Category added Succussefully");
          // loadSubCategory();
        } else {
          alert(data);
        }
      },
    });
  });
  //--------------For Delete Sub-category-------------
  jQuery(document).on("click", ".delete-subcategory", function () {
    if (confirm("Do you realy want to delete this sub-category ?")) {
      var subCategory = this;
      if (jQuery(subCategory).data("posts") == 0) {
        var subCategoryId = jQuery(subCategory).data("id");
        jQuery.ajax({
          url: "includes/delete-subcategory.php",
          type: "POST",
          data: {
            id: subCategoryId,
          },
          success: function (data) {
            if (data == 1) {
              jQuery(subCategory).closest("tr").fadeOut();
              showmessage("Sub-Category Deleted Successfully");
              // loadSubCategory();
            } else {
              alert(data);
            }
          },
        });
      } else {
        alert(
          "Can't delete this sub-category Because No. of Posts more than 0."
        );
      }
    }
  });
  // --------------For Add to home Sub-category button-------------
  jQuery(document).on("click", ".add-to-home-sub", function () {
    var subCategory = this;
    var subCatId = jQuery(subCategory).data("id");
    var subCatStatus = jQuery(subCategory).data("status");
    jQuery.ajax({
      url: "includes/change-subcat-status.php",
      type: "POST",
      data: {
        id: subCatId,
        status: subCatStatus,
      },
      success: function (data) {
        if (data == 1) {
          jQuery(subCategory).text("Added");
        } else {
          jQuery(subCategory).text("Add");
        }
      },
    });
  });
  //--------------***For Manage Users***-------------
  //--------------For Showing Users-------------
  // jQuery("#manageuser").on("click", function (e) {
  //   e.preventDefault();
  //   jQuery("#load-post").hide();
  //   jQuery("#load-category").hide();
  //   jQuery("#load-subcategory").hide();
  //   jQuery("#add-post-form").hide();
  //   jQuery("#load-user").show();
  //   jQuery.ajax({
  //     url: "manageuser.php",
  //     type: "POST",
  //     success: function (data) {
  //       jQuery("#load-user").html(data);
  //     },
  //   });
  // });
  //--------------For Delete user-------------
  jQuery(document).on("click", ".delete-user", function () {
    if (confirm("Do you realy want to delete this User ?")) {
      var user = this;
      var userId = jQuery(user).data("id");
      jQuery.ajax({
        url: "includes/delete-user.php",
        type: "POST",
        data: {
          id: userId,
        },
        success: function (data) {
          if (data == 1) {
            jQuery(user).closest("tr").fadeOut();
            showmessage("User deleted Successfully");
          } else {
            alert("Not Deleted");
          }
        },
      });
    }
  });
  // ---------For DataTable--------
  jQuery(".table").dataTable();
  // ---------For Choosen Plugin------
  // jQuery("#post-category").chosen();
  // jQuery("#post-sub-category").chosen();
  // ------For Dynamic Copyright Year---------
  let d = new Date();
  document.getElementById("copyright-year").innerHTML = d.getFullYear();
  //--------------For Error & Success Message--------------
});
