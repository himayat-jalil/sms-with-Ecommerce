<template>
  <div class="container">
    <form
      v-on:submit.prevent="submitForm"
      accept-charset="utf-8"
      enctype="multipart/form-data"
      class="form-group"
    >
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2 p-2">Student Name:</div>
        <div class="col-md-8 p-2">
          <input
            type="text"
            v-model="form.studentName"
            placeholder="Enter Student Name"
            class="form-control"
          />
          <div class="invalide-feedback">
            <!-- {{ errors.get("studentName") }} -->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-2 p-2">Gender:</div>
        <div class="col-md-2 p-2">
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              v-model="form.gender"
              true-value="Male"
              false-value="Female"
            />
            <label class="form-check-label" for="flexRadioDefault1">
              {{ form.toggle }}
            </label>
          </div>
        </div>
        <div class="col-md-2 p-2">Date of Birth:</div>
        <div class="col-md-3">
          <input
            type="date"
            v-model="form.dateOfBirth"
            placeholder="Enter Date of Birth"
            class="form-control"
          />
        </div>
      </div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2 p-3">Place of Birth:</div>
        <div class="col-md-3 p-2">
          <input
            type="text"
            v-model="form.placeOfBirth"
            placeholder="Place of Birth"
            class="form-control"
          />
        </div>
        <div class="col-md-3 p-3">Primary Language spoken at home:</div>
        <div class="col-md-2 p-2">
          <input
            type="text"
            v-model="form.language"
            placeholder="Language"
            class="form-control"
          />
        </div>
      </div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-sm-5 p-3"><ins>House Address:</ins></div>
        <div class="col-md-5 p-3"><ins>Telephone Number:</ins></div>
      </div>
      <div class="row">
        <div class="col-md-1 p-3"></div>
        <div class="col-md-5">
          <div class="d-flex flex-column">
            <div class="p-2">
              <input
                type="text"
                name="street"
                v-model="form.street"
                class="form-control"
                placeholder="Street"
              />
            </div>
            <div class="p-2">
              <input
                type="text"
                name="city"
                v-model="form.city"
                class="form-control"
                placeholder="City"
              />
            </div>
            <div class="p-2">
              <input
                type="text"
                name="postalCode"
                v-model="form.postalCode"
                class="form-control"
                placeholder="Postal Code"
              />
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="d-flex flex-column">
            <div class="p-2">
              <input
                type="text"
                name="homePhone"
                v-model="form.homePhone"
                class="form-control"
                placeholder="Home Phone"
              />
            </div>
            <div class="p-2">
              <input
                type="text"
                name="momCellPhone"
                v-model="form.momCellPhone"
                class="form-control"
                placeholder="Mom's Cell Phone"
              />
            </div>
            <div class="p-2">
              <input
                type="text"
                name="dadCellPhone"
                v-model="form.dadCellPhone"
                class="form-control"
                placeholder="Dad's Cell Phone"
              />
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-1 p-3"></div>
        <div class="col-md-2 p-3">Email Address:</div>
        <div class="col-md-8 p-2">
          <input
            type="email"
            name="email"
            v-model="form.emailAddress"
            placeholder="Enter Email Address"
            class="form-control"
          />
          <div class="invalide-feedback">
            {{ errors.get("emailAddress") }}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-1 p-3"></div>
        <div class="col-md-2 p-3">Permanent Address:</div>
        <div class="col-md-8 p-2">
          <input
            type="text"
            name="permanentAddress"
            v-model="form.permanentAddress"
            placeholder="Permanent Address"
            class="form-control"
          />
        </div>
      </div>
      <div class="row">
        <div class="col-md-1 p-3"></div>
        <div class="col-md-7">
          <ins>Guardian's details</ins>
          <div class="d-flex flex-column">
            <div class="p-2">
              <input
                type="text"
                name="name"
                v-model="form.name"
                class="form-control"
                placeholder="Name"
              />
            </div>
            <div class="p-2">
              <input
                type="text"
                name="workPlace"
                v-model="form.workPlace"
                class="form-control"
                placeholder="Work place"
              />
            </div>
            <div class="p-2">
              <input
                type="text"
                name="occupation"
                v-model="form.occupation"
                class="form-control"
                placeholder="Occupation"
              />
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-1 p-3"></div>
        <div class="col-md-2 p-3">Class:</div>
        <div class="form-group p-2">
          <select v-model="form.class_id" class="form-control" id="sel1">
            <option class="disabled">Select Class</option>
            <option
              v-for="item in classes"
              :key="item.length"
              v-bind:value="item.id"
            >
              {{ item.className }}
            </option>
          </select>
        </div>
        <div class="col-md-3 p-3">Admission date:</div>
        <div class="col-md-3 p-2">
          <input
            type="date"
            name="admissionDate"
            v-model="form.addmissionDate"
            placeholder="Admission Date"
            class="form-control"
          />
          {{ form.addmissionDate }}
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 p-3"></div>
        <div class="col-md-4 p-2">
          <div class="custom-file">
            <input type="file" @change="readFile" class="custom-file-input" />
            <label class="custom-file-label" for="customFile"
              >Upload Image</label
            >
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 p-3"></div>
        <div class="col-md-6 m-3">
          <button type="submit" class="btn btn-primary btn-block">
            Submit
          </button>
        </div>
      </div>
    </form>
  </div>
</template>
<script>
class Errors {
  constructor() {
    this.errors = {};
  }
  get(field) {
    if (this.errors[field]) {
      return this.errors[field][0];
    }
  }
  record(errors) {
    this.errors = errors.errors;
  }
}
export default {
  name: "add-new",
  data: function () {
    return {
      classes: [],
      classID: [],

      form: {
        studentName: "",
        gender: "",
        dateOfBirth: "",
        placeOfBirth: "",
        language: "",
        street: "",
        city: "",
        postalCode: "",
        homePhone: "",
        momCellPhone: "",
        dadCellPhone: "",
        emailAddress: "",
        permanentAddress: "",
        name: "",
        workPlace: "",
        occupation: "",
        class_id: "",
        addmissionDate: "",
        session_id: "",
      },
      file: "",
      studentCreated: "",
      errors: new Errors(),
    };
  },
  mounted() {
    this.getClasses();
    this.getSession();
  },
  created() {},
  methods: {
    getClasses() {
      axios.get("classes").then(
        (res) => {
          this.classes = res.data;
        },
        (error) => {
          console.log(error);
        }
      );
    },
    getSession() {
      axios
        .get("session")
        .then((res) => {
          this.form.session_id = res.data[0].id;
        })
        .catch((error) => {
          console.log(error);
        });
    },
    submitForm(e) {
      e.preventDefault();
      const config = {
        headers: {
          "content-type": "multipart/form-data",
        },
      };
      let formData = new FormData();
      formData.append("studentName", this.form.studentName);
      formData.append("gender", this.form.gender);
      formData.append("dateOfBirth", this.form.dateOfBirth);
      formData.append("placeOfBirth", this.form.placeOfBirth);
      formData.append("language", this.form.language);
      formData.append("street", this.form.street);
      formData.append("city", this.form.city);
      formData.append("postalCode", this.form.postalCode);
      formData.append("homePhone", this.form.homePhone);
      formData.append("momCellPhone", this.form.momCellPhone);
      formData.append("dadCellPhone", this.form.dadCellPhone);
      formData.append("emailAddress", this.form.emailAddress);
      formData.append("permanentAddress", this.form.permanentAddress);
      formData.append("name", this.form.name);
      formData.append("workPlace", this.form.workPlace);
      formData.append("occupation", this.form.occupation);
      formData.append("class_id", this.form.class_id);
      formData.append("addmissionDate", this.form.addmissionDate);
      formData.append("session_id", this.form.session_id);
      formData.append("image", this.file);
      axios
        .post("/students.store", formData, config)
        .then((res) => {
          console.log(res);
          this.studentCreated = res.data[1];
          window.location = res.data[0];
          alert(this.studentCreated);
        })
        .catch((error) => {
          this.errors.record(error.response.data);
        });
    },
    readFile(event) {
      this.file = event.target.files[0];
    },
  },
};
</script>
